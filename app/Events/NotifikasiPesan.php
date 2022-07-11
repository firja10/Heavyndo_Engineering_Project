<?php

namespace App\Events;

use App\Models\Message;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NotifikasiPesan implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $username;
    public $message;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Message $message,User $user)
    {
        //
        // $this->username = $username;
        // $this->message = "{$username} mengirimkan pesan notifikasi";
        $this->message = $message;
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('channel-name');
        // return new PrivateChannel('status-liked');
        // return ['status-liked'];
        return new Channel('tugas-andre');
    }


  
    // public function broadcastAs()
    // {
    //     return 'status-liked';
    // }
}
