<?php

namespace App\Mail;

use App\Models\Pesanan;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PesananAccMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pesanan;

    public function __construct(Pesanan $pesanan)
    {
        $this->pesanan = $pesanan;
    }

    public function build()
    {
        return $this->subject('Pesanan Anda Telah Dikonfirmasi')
                    ->view('emails.pesanan-acc');
    }
}
