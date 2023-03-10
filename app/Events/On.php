<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class On implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;


  public function __construct()
  {
  }

  public function broadcastOn()
  {
    return new Channel('check');
  }

  public function broadcastAs()
  {
      return 'On';
  }
}