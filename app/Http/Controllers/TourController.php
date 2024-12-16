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

        try {
            $client = new Client();

            // Make the API request
            $response = $client->request('GET', "https://admin.hummingbird.my/api/get-tours", [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'query' => $request->all(), // Pass any filters as query parameters
            ]);

            // Parse the API response
            $data = json_decode($response->getBody(), true);

            // Check for the 'tours' key in the response
            $tours = $data['tours'] ?? [];

            // Log the response for debugging
            Log::info('Tours fetched:', $tours);

            // Return JSON response
            return response()->json([
                'status' => true,
                'tours' => $tours,
            ], 200);
        } catch (\Exception $e) {
            // Handle exceptions and log the error
            Log::error('Error fetching tours: ' . $e->getMessage());

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
            ], 500);
        }

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
