<?php
// MailTest.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\JobOrder;

class MailTest extends Mailable
{
    use Queueable, SerializesModels;

    public $jobOrder;
    public $emailSentSuccess;


    /**
     * Create a new message instance.
     */
    public function __construct(JobOrder $jobOrder, $emailSentSuccess = false)
    {
        $this->jobOrder = $jobOrder;
        $this->emailSentSuccess = $emailSentSuccess;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from('jhaycrisp@gmail.com')
                    ->subject('Job Order Status Notification')
                    ->view('mail.index');
    }
}
