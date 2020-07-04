<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;
use Illuminate\Http\Request;
include '../vendor/autoload.php';
//include '../resources/exercises/shape.blade.php';
//require __DIR__.'/../vendor/autoload.php';
// $compiledPath = __DIR__.'/../storage/framework/compiled.php';

// if (file_exists($compiledPath))
// {
//     require $compiledPath;
// }
class SnakeController extends Controller
{
   
    

public static function model(Request $request)
{
   
    // $diff=$request->input('diff');
    // //return $diff;
   
    // $percentage=[[1, 0.0], [1, 0.1], [1,0.2], [1, 0.3], [1,0.4], [1,0.5], [1, 0.6], [1,0.7], [1,0.8],[1,0.9],[1,1.0]];
    // $score1=['0','10','20','30','40','50','60','70','80','90','100'];


    // $classifier = new SVC(Kernel::RBF);
    //  $classifier->train($percentage, $score1);
        
    //   $pred=$classifier->predict([1,0.8]);
    $pred=80;
    // echo($pred);
     return view('snakescore')->with('pred',$pred);
}
}
