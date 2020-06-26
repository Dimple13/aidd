<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stroop;
// use Charts;
use DB;
class ChartController extends Controller
{
    // public function graph(){
    //     // $s1 = DB::table('stroops')->where('user_id', 1)->pluck('score_1');
    //     // $s2 = DB::table('stroops')->where('user_id', 1)->pluck('score_2');
    //     // $s3 = DB::table('stroops')->where('user_id', 1)->pluck('score_3');
    //     // $s4 = DB::table('stroops')->where('user_id', 1)->pluck('score_4');
    //     // $s5 = DB::table('stroops')->where('user_id', 1)->pluck('score_5');
    //     // $score1=array($s1,$s2,$s3,$s4,$s5);
    //     $score=DB::table('stroops')->where('user_id', '1')->select('score_1','score_2','score_3','score_4','score_5')->get();
    //     $chart=Charts::database($score,'line', 'highcharts')
    //             ->title('Progress')
    //             ->elementLabel('Scores')
    //             // ->values($score])
    //             ->dimensions(1000,500)
    //             ->responsive(false);
    //     return view('charts',compact('chart'));
    // }
    public function graph(){
        $score=DB::table('stroops')->select('score_1','score_2','score_3','score_4','score_5')->where('user_id', '1')->get();
        return view('charts')->with('score', $score);
    }
}
