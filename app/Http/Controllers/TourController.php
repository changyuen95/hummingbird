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
use GuzzleHttp\Client;

use App\Mail\Contact;


class TourController extends Controller
{
    public function getToursAjax(Request $request) {

        $filter_params['date'] = $request->get('date');
        $filter_params['destinations'] = $request->get('destinations');
        $filter_params['types'] = $request->get('types');
        $filter_params['season'] = $request->get('season');
    // $tours = collect(config('tour.tours'));
        $tours = $request->get('tour');
        $filteredTours = Collect($tours);

    if ($filter_params['types'] && (!in_array('All', $filter_params['types']))) {

        // log::info(implode(",",$filter_params['types']));
        $filteredTours = $filteredTours->filter(function ($tour) use ($filter_params) {
            return !empty(array_intersect($tour['tags'], $filter_params['types']));
        });
    }

    if ($filter_params['season'] && (!in_array('All', $filter_params['season']))) {

        $filteredTours = $filteredTours->filter(function ($tour) use ($filter_params) {
            return !empty(array_intersect($tour['tags'], $filter_params['season']));
        });
    }

    if ($filter_params['destinations'] && (!in_array('All', $filter_params['destinations'])) ) {

        $filteredTours = $filteredTours->filter(function ($tour) use ($filter_params) {
            return !empty(array_intersect($tour['tags'], $filter_params['destinations']));
        });

    }



    if ($filter_params['date'] && (!in_array('All', $filter_params['date'])) ) {

        $filteredTours = $filteredTours->filter(function ($tour) use ($filter_params) {


            foreach ($filter_params['date'] as $month) {
                $months[] = $month;
                $months[] = $month+1;
                $months[] = $month+2;
            }

            // Parse the tour start and end dates
            $tourStartDate = Carbon::parse($tour['from_date']);
            $tourEndDate = Carbon::parse($tour['to_date']);

            // Extract the month for each date
            $tourStartMonth = $tourStartDate->month;
            $tourEndMonth = $tourEndDate->month;

            // Check if either the start month or end month is in the filter months array
            return in_array($tourStartMonth, $months) || in_array($tourEndMonth, $months);
        });


    }


    $final_tours = $filteredTours->values()->all();
    log::info($final_tours);
    return Response::json([
        'status' => true,
        'tours' => $final_tours,
    ], 200);

}



    public function enquiryForm (Request $request) {
        $mail = Mail::to('enquiry@hummingbird.my');

        // Send Confirmation Mail
        $mail->send(new contact(
            $request->name,
            $request->email,
            $request->comment,

        ));

        return back()->with('success', 'Thank you for your enquiry. We will get back to you soon.');


    }

    public function getTours(Request $request)
    {
        try {
            $client = new Client();

            // Make the API request
            $response = $client->request('GET', "https://admin.hummingbird.my/api/tours/", [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            // Parse the response
            $data = json_decode($response->getBody(), true);
            $tours = $data['tours'];
            // Return the data to the view or process it
            return view('tours-by-type', ['tours' => $tours]);

        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function getDetail(Request $request,$name)
    {
        try {
            $client = new Client();

            // Make the API request
            $name = urldecode($name);
            $response = $client->request('GET', "https://admin.hummingbird.my/api/tours/$name/", [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            // Parse the response
            $data = json_decode($response->getBody(), true);
            $tour = $data['tour'];
            // Return the data to the view or process it
            return view('tours-detail', ['tour' => $tour]);

        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }

}
