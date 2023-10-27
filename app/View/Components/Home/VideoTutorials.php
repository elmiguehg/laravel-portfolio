<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videoTutorials = [
            [
                'videoId' => '',
                'title' => 'PHP Tutorial',
                'description' => 'Bla bla bla'
            ],
            [
                'videoId' => '',
                'title' => 'Full Stack App with Laravel',
                'description' => 'Bla bla bla'
            ],
            [
                'videoId' => '',
                'title' => 'PHP MVC Framework',
                'description' => 'Bla bla bla'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
