<?php

namespace Riari\Forum\Events\Types;

use Riari\Forum\Models\Thread;

class ThreadEvent
{
    /** @var Thread */
    public $thread;

    public function __construct(Thread $thread)
    {
        $this->thread = $thread;
    }
}
