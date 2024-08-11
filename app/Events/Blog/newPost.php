<?php

namespace App\Events\Blog;

use App\Models\Post;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class newPost implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        public Post $post
    )
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('new-post'),
        ];
    }

    public function broadcastAs(): string {
        return 'post.created';
    }

    public function broadcastWith(): array {
        /**
         * @var User $user
         */

         $user = Auth::user();
        return [
            'userId' => $user->id,
            'userName' => $user->name,
            'userFirstname' => $user->firstname,
            'postId' => $this->post->id,
            'postContent' => $this->post->content,
            'postReactionPositive' => $this->post->reaction->positive,
            'postReactionNegative' => $this->post->reaction->negative
        ];
    }
}
