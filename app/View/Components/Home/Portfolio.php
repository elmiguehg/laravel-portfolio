<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Bootstrap'],
                'title' => 'Electronic commerce store with Laravel and Bootstrap',
                'image' => url('/img/1.png'),
                'github' => 'https://github.com/elmiguehg/laravel-ecommerce'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'Project laravel with breeze',
                'image' => url('/img/2.png'),
                'github' => 'https://github.com/elmiguehg/laravel-breeze'
            ],
            [
                'category' => ['Quasar'],
                'title' => 'Front for management Quasar',
                'image' => url('/img/3.png'),
                'github' => 'https://github.com/elmiguehg/gestion-rh-front-quasar'
            ],
            [
                'category' => ['Vuejs'],
                'title' => 'Front for management Vuejs',
                'image' => url('/img/4.png'),
                'github' => 'https://github.com/elmiguehg/academico-vue'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'Backend Laravel',
                'image' => url('/img/5.png'),
                'github' => 'https://github.com/elmiguehg/academicobackend'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
