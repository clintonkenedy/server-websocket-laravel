<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PrivateWebSocket implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $myData;
    /**
     * Create a new event instance.
     */

    public function __construct()
    {
        //
        $this->myData='holaaa xdd private';
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('myPrivateChannel.user.2'),
        ];
    }
    public function broadcastAs() {
        return 'private_msg';
    }
}
