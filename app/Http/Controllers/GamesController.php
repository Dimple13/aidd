<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function Tictactoe(){
        return view('exercises.tictactoe');
    }
    public function Stroop(){
        return view('exercises.stroop');
    }
    public function Memory(){
        return view('exercises.memory');
    }
    public function Flappy(){
        return view('exercises.flappy');
    }
    public function connectdots(){
        return view('exercises.dot');    
    }
    public function maze(){
        return view('exercises.maze');
    }
    public function spot(){
        return view('exercises.difference');
    }
    public function numbers(){
        return view('exercises.numbers');
    }
    public function NumNext(){
        return view('exercises.numnext');
    }
    public function MemNext(){
        return view('exercises.memnext');
    }
    public function Shape(){
        return view('exercises.shape');
    }
    public function MissingLetters(){
        return view('exercises.letters');

    }
    public function spotrevert(){
        return view('exercises.spotrevert');
        
    }
    public function strooprevert(){
        return view('exercises.strooprevert');
        
    }
}
