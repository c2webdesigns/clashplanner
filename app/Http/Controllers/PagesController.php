<?php namespace app\Http\Controllers;

use app\Helpers;
use app\Social\FacebookFeed as FacebookFeed;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller {

    /**
     * @Get("/", as="home_path")
     */
    public function index()
    {

        if (Auth::check()) {
            $login_status = 'Welcome back, ' . Helpers::displayName();
        } else {
            $login_status = 'You are not logged in';
        }
        return view('pages.home', compact('login_status'));
    }

    /**
     * @Get("guides")
     */

    public function guides()
    {
        return view('pages.guides');
    }

    /**
     * @Get("feed", as="feed_path")
     * @Middleware("auth")
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

}