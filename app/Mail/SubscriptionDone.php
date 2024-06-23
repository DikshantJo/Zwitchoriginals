<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscriptionDone extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public $customer)
    {
        //
    }

    public function build()
    {
        return $this->from(core()->getSenderEmailDetails()['email'], core()->getSenderEmailDetails()['name'])
            ->to($this->customer->email)
            ->subject('Thank You for Subscribing!')
            ->view('shop::emails.customers.subscribtionDone', [
                'fullName' => $this->customer->first_name . ' ' . $this->customer->last_name,
                'subscription_amount' => $this->customer->subscription_amount,
                'subscription_months' => $this->customer->subscription_months,
                'subscription_start_date' => $this->customer->subscription_start_date,
                'subscription_end_date' => $this->customer->subscription_end_date
            ]);
    }
}
