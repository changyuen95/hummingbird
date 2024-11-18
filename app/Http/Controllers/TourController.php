<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;

use App\Mail\Contact;


class TourController extends Controller
{
    public function getToursAjax(Request $request) {


                $filter_params['date'] = $request->get('date');
                $filter_params['destinations'] = $request->get('destinations');
                $filter_params['types'] = $request->get('types');
                $filter_params['season'] = $request->get('season');

            $tours = collect(config('tour.tours'));

                $filteredTours = $tours;

            if ($filter_params['types'] && (!in_array('All', $filter_params['types']))) {

                // log::info(implode(",",$filter_params['types']));
                $filteredTours = $filteredTours->filter(function ($tour) use ($filter_params) {
                    return !empty(array_intersect($tour['types'], $filter_params['types']));
                });
            }

            if ($filter_params['season'] && (!in_array('All', $filter_params['season']))) {

                $filteredTours = $filteredTours->filter(function ($tour) use ($filter_params) {
                    return !empty(array_intersect($tour['season'], $filter_params['season']));
                });
            }

            if ($filter_params['destinations'] && (!in_array('All', $filter_params['destinations'])) ) {

                $filteredTours = $filteredTours->filter(function ($tour) use ($filter_params) {
                    return !empty(array_intersect($tour['destination_to_search'], $filter_params['destinations']));
                });

            }

            $final_tours = $filteredTours->values()->all();

            return Response::json([
                'status' => true,
                'tours' => $final_tours,
            ], 200);

    }


    public function enquiryForm (Request $request) {
        $mail = Mail::to('changyuen95@gmail.com');

        // Send Confirmation Mail
        $mail->send(new contact(
            $request->name,
            $request->email,
            $request->comment,

        ));

        return back()->with('success', 'Thank you for your enquiry. We will get back to you soon.');


    }
}
