<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\JobOrder;
use Illuminate\Support\Facades\Log; // Import the Log facade

class SMSController extends Controller
{
    public function sendSMS(JobOrder $order)
    {
        // Get the associated account's phone number
        $phoneNumber = optional($order->account)->phone_number;

        // Construct the message for the SMS
        $message = "Job Status Update #" . $order->id . "\n\n" .
                    "Account: " . optional($order->account)->full_name . "\n" . // Use optional() for safety
                    "Vehicle: " . optional($order->vehicle)->model . "\n" . // Use optional() for safety
                    "License Plate: " . optional($order->vehicle)->license_plate . "\n" . // Use optional() for safety
                   "Status: " . ucfirst($order->status) . "\n" .
                   "Task Performed: " . $order->task_performed . "\n" .
                   "Performed By: " . $order->performed_by . "\n" .
                   "Item Used: " . optional($order->inventory)->product_name . "\n\n" . // Use optional() for safety
                   "This is a generated text. please do not reply if you wish to reply contact yahoo@lasquety.com";



        // Prepare parameters for Semaphore API
        $parameters = [
            'apikey' => env('SEMAPHONE_API_KEY'), // Your API KEY
            'number' => $phoneNumber, // Use the fetched phone number
            'message' => $message,
            'sendername' => 'SEMAPHORE'
        ];

        // Use Laravel Http facade to make the request
        $response = Http::post('https://semaphore.co/api/v4/messages', $parameters);

        if ($response->successful()) {
            // If successful, return a script to display a dialog box
            return '<script>' .
                'alert("SMS sent successfully!");' . // Display an alert dialog
                'window.history.back();' . // Go back to the previous page
                '</script>';
        } else {
            // If request failed, return error message
            return "Error: " . $response->status() . " - " . $response->body();
        }
    }
}
