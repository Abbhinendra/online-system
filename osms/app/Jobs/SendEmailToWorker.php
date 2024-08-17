<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\sendMailToWorker;
use Illuminate\Support\Facades\Mail;
class SendEmailToWorker implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $technicine;
    public $userRequest;
    public function __construct($technicine, $userRequest)
    {
        $this->technicine=$technicine;
        $this->userRequest=$userRequest;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->technicine->email)->send(new sendMailToWorker($this->userRequest));
    }
}
