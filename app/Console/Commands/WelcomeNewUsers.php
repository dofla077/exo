<?php

namespace App\Console\Commands;

use App\Mail\UserMailer;
use Illuminate\Console\Command;

class WelcomeNewUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:newusers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    protected $userMailer;

    /**
     * Create a new command instance.
     *
     * @param UserMailer $userMailer
     */
    public function __construct(UserMailer $userMailer)
    {
        parent::__construct();

        $this->userMailer = $userMailer;

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->userMailer->welcomeNewUsers();
    }
}
