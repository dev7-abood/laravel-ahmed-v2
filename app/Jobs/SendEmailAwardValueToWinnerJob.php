<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Mail;
use App\Mail\WinnerMail;

class SendEmailAwardValueToWinnerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $user;
    public $wiiner;
    public $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $wiiner, $message)
    {
        $this->user = $user;
        $this->wiiner = $wiiner;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->user->email)->send(new WinnerMail($this->wiiner, $this->user, $this->message));
    }
}
