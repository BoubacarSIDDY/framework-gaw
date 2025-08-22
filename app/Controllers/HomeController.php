<?php

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }
}