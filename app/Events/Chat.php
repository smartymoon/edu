<?php

namespace App\Events;

use App\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Chat implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public string $fromName;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message, $fromName)
    {
        $this->message = $message;
        $this->fromName = $fromName;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('chat.' . $this->fromRole . $this->fromId . $this->toRole . $this->toId);
        $name = 'chat.'.$this->message['to_type'].$this->message['to_id'];
        \Log::info('name is' . $name);
        return new PrivateChannel($name);
    }
}
