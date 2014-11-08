<?php namespace App\Http\Controllers;

use App\Helpers as Helpers;
use App\Social\FacebookFeed as FacebookFeed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['home', 'privacy']]);
    }

    /**
     * Home page
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        if (Auth::check()) {
            $login_status = 'Welcome back, ' . Helpers::displayName();
        } else {
            $login_status = 'You are not logged in';
        }
        return view('pages.home', compact('login_status'));
    }

    /**
     * Guides
     *
     * @return \Illuminate\View\View
     */
    public function guides()
    {
        return view('pages.guides');
    }

    /**
     * Facebook feed
     *
     * @param FacebookFeed $facebookFeed
     * @return \Illuminate\View\View
     */
    public function feed(FacebookFeed $facebookFeed)
    {
        $facebookFeed->feed('306347306214882');

        $feed = $facebookFeed->feed;

        return view('pages.feed', compact('feed'));
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

}