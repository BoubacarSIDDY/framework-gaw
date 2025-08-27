<?php

class HomeController extends Controller
{
    public function index(){
        return view('home', ['message' => 'Bienvenue sur framework-gaw !']);
    }

    public function contact(){
        return view('contact');
    }
}