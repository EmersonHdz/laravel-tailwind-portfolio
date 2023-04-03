<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Portfolio extends Component
{

    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
             [
                'category' => ['WordPress', 'CSS'],
                'title' => 'Creation of a very complete theme for GYM for WordPress Added Post type plugin to add more interest and tidy the theme',
                'image' => 
                           url( path: '/image/WordPress.webp'),
                           url( path: '/image/WordPress.avif'),
                           url( path: '/image/WordPress.jpg'),
                           
                'github' => 'https://github.com/EmersonHdz/gymfitness'
             ],

             [
                'category' => ['Laravel', 'Tailwind.css'],
                'title' => 'creation of a panel of job announcements with a login area and an administration area to create job vacancies',
                'image' =>   url( path: '/image/laravel.webp'),
                             url( path: '/image/laravel.avif'),
                             url( path: '/image/laravel.jpg'),
                'github' => 'https://github.com/EmersonHdz/DevJobs'
             ],

             [
                'category' => ['Laravel', 'PHP', 'JS'],
                'title' => 'creating a social network in laravel',
                'image' =>   url( path: '/image/about-fullstack.webp'),
                             url( path: '/image/about-fullstack.avif'),
                             url( path: '/image/about-fullstack.jpg'),
                'github' => 'https://github.com/EmersonHdz/redSocialLaravel'
             ],

             [
                'category' => ['MVC', 'PHP'],
                'title' => 'creation of an app for an MVC barbershop with an administration area',
                'image' =>   url( path: '/image/about-js.webp'),
                             url( path: '/image/about-js.avif'),
                             url( path: '/image/about-js.jpg'),
                'github' => 'https://github.com/EmersonHdz/BaberApp-MVC'
             ],

             [
                'category' => ['WordPress', 'Gutenberg'],
                'title' => 'creation of a block in Gutenberg, a simple box to which a custom color palette was added, a text and a paragraph are added,
                 technologies used. React, CSS, JS, PHP HTML',
                'image' =>   url( path: '/image/about-php.webp'),
                             url( path: '/image/about-php.avif'),
                             url( path: '/image/about-php.jpg'),
                'github' => 'https://github.com/EmersonHdz/BloksTheme-Gutenberg'
             ],

             [
                'category' => ['PHP', 'css'],
                'title' => 'creating a blog with simple php and css',
                'image' =>   url( path: '/image/css.webp'),
                             url( path: '/image/css.avif'),
                             url( path: '/image/css.jpg'),
                'github' => 'https://github.com/EmersonHdz/blogdecafe_fin'
             ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, value: 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
