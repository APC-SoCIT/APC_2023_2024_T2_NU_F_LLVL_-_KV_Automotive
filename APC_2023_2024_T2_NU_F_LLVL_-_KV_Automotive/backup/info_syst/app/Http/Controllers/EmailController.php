<?php

// EmailController.php

namespace App\Http\Controllers;

use App\Mail\MailTest;
use Illuminate\Support\Facades\Mail;
use App\Models\JobOrder;

class EmailController extends Controller
{
    public function sendEmail(JobOrder $record)
    {
        // Check if the email has already been sent
        if ($record->email_sent) {
            return redirect()->route('send-email', ['record' => $record])->with('warning', 'Email has already been sent.');
        }

        info('Sending email for Job Order ID: ' . $record->id);

        // Get the account associated with the job order
        $account = $record->account;

        // Check if the job order has an associated account
        if (!$account) {
            return redirect()->route('send-email', ['record' => $record])->with('error', 'Job Order does not have an associated account.');
        }

        // Send email to the account's email address
        Mail::to($account->email)->send(new MailTest($record));

        // Update the record to mark the email as sent
        $record->update(['email_sent' => true]);

        // Display a dialog box using JavaScript
        echo '<script>';
        echo 'alert("Email sent successfully!");';
        echo 'window.close();'; // Close the current tab
        echo 'window.location.href = "/admin/Job_Status";'; // Redirect to /admin/job_Order
        echo '</script>';

        // The code after this point won't be executed
    }
}
