<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Home page anonymous user
     *
     * @return \Illuminate\View\View
     */
    public function indexHome ()
    {  
        return view('indexHome');
    }

     /**
     * Display a personalized greetings message
     *
     * @return \Illuminate\View\View
     */
    public function helloYou(Request $request) 
    {
        session(['nickname' => $request->input('nickname')]);
        $nickname = $request->session()->get('nickname');
        return view('helloYou', ['nickname' => $nickname]);
    }
}
