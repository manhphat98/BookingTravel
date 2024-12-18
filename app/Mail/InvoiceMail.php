<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use PDF;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        $pdf = PDF::loadView('pages.exports.invoice', ['booking' => $this->booking]);
        return $this->subject('Hóa Đơn Thanh Toán - BookingTravel')
                    ->view('pages.exports.email')
                    ->with([
                        'booking' => $this->booking, // Truyền biến $booking vào view
                    ])
                    ->attachData($pdf->output(), 'hoa-don.pdf');
    }

}
