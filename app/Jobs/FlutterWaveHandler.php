<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class FlutterWaveHandler implements ShouldQueue
{
    use Queueable;
   protected $payload; 

    /**
     * Create a new job instance.
     */
    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $event = $this->payload['event'] ?? null;

        if($event === 'charge.completed') {
            // Handle the charge completed event
            $data = $this->payload['data'] ?? [];
            // Process the data as needed, e.g., update order status, notify user, etc.
        } elseif ($event === 'charge.failed') {
            // Handle the charge failed event
            $data = $this->payload['data'] ?? [];
            // Process the data as needed, e.g., log the failure, notify user, etc.
        } else {
            // Handle other events or ignore
        }
    }
}
