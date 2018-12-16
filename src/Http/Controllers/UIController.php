<?php

namespace OllieFordandCo\UI\Http\Controllers;

class UIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    public function index() {
        return view('uiManager::test');
    }

}