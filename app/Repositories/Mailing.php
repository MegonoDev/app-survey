<?php

namespace App\Repositories;

use Mail;

class Mailing {
    public function sendCode($data)
    {
        $send = Mail::send('email.verificationcode', ['code' => $data['kode']], function ($message) use ($data) {
            $message->subject('[Kode Konfirmasi] | EONESIA.ID');
            $message->from('halo@eonesia.id', 'Event EONESIA.ID');
            $message->to($data['email']);
        });
        return $send;
    }
    
}