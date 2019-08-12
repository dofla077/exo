<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class UserMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }

    public function welcomeNewUsers()
    {
        User::signedUpThisWeek()->each(function ($user) {
            Mail::send(
                'emails.welcome',
                ['name' => $user->name],
                function ($m) use ($user) {
                    $m->to($user->email)->subject('Welcome...');
                }
            );
        });
    }
}
