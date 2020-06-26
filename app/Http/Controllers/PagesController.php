<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function treatment(){
        return view('pages.treatment');
    }
    public function moreonadhd(){
        return view('pages.more_on_adhd');
    }
    public function symp_diag(){
        return view('pages.symp_diag');
    }
    public function videos(){
        return view('pages.videos');
    }
    public function exercises(){
        return view('pages.exercises');
    }
    //Extra Pages
    public function about(){
        return view('pages.about');
    } 
    public function faq(){
        return view('pages.faq');
    } 
    public function blog(){
        return view('pages.blog');
    } 
    public function progress1(){
        return view('pages.progress1');
    } 
        
}
