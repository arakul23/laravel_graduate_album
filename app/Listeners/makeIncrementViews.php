<?php

namespace App\Listeners;

use App\Events\incrementViews;
use App\Faculty;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Pheanstalk\Exception;

class makeIncrementViews
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  incrementViews  $event
     * @return void
     */
    public function handle(incrementViews $event)
    {
        try {
            $model = $event->model;
            $id = $event->id;
            $tableEntry = $model->find($id);
            $tableEntry->increment('count_views');
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}
