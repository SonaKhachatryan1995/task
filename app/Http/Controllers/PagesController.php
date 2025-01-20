<?php
namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * Display the main view.
     *
     * @return \Illuminate\View\View
     */
    public function main(): \Illuminate\View\View
    {
        return view('pages.main');
    }

    /**
     * Display the screen-1 view.
     *
     * @return \Illuminate\View\View
     */
    public function screen1(): \Illuminate\View\View
    {
        return view('pages.screen-1');
    }

    /**
     * Display the screen-2 view.
     *
     * @return \Illuminate\View\View
     */
    public function screen2(): \Illuminate\View\View
    {
        return view('pages.screen-2');
    }

    /**
     * Display the screen-3 view.
     *
     * @return \Illuminate\View\View
     */
    public function screen3(): \Illuminate\View\View
    {
        return view('pages.screen-3');
    }
}
