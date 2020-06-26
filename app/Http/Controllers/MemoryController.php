<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Memory;
use App\User;

class MemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $id=Auth::user()->id;
      $score=$request->input('score');
     
      $sc_1 = Memory::find($id);
      // return $sc_1;
       
       

      if($sc_1->score_1==NULL){
         $memory = Memory::find($id);
         $memory->score_1 =$score;
         $memory->save();
        
      }

      elseif($sc_1->score_2==NULL) {
      $memory = Memory::find($id);
      $memory->score_2 =$score;
      $memory->save();
   }
   elseif($sc_1->score_3==NULL){
      $memory = Memory::find($id);
      $memory->score_3 =$score;
      $memory->save();

   }
   elseif($sc_1->score_4==NULL){
      $memory = Memory::find($id);
      $memory->score_4 =$score;
      $memory->save();

   }
   elseif($sc_1->score_5==NULL){
      $memory = Memory::find($id);
      $memory->score_5 =$score;
      $memory->save();

   }

   else {
      //  return $score;
      $memory = Memory::find($id);

      $s1= $memory->score_1;
       
      $s2= $memory->score_2;
      $s3= $memory->score_3;
      $s4= $memory->score_4;
      $s5= $memory->score_5;

      $score_array = array((int)$s1,(int)$s2,(int)$s3,(int)$s4,(int)$s5);
      sort($score_array);
      //  return $score_array[0];
      
       if($score>$score_array[0]){
            
          if($s1==$score_array[0]){
               
              $memory->score_1=$score; 
              $memory->save();
           }
           elseif($s2==$score_array[0]){
              $memory->score_2=$score;
              $memory->save();
           }
           elseif($s3==$score_array[0]){
              $memory->score_3=$score;
              $memory->save();
           }
           elseif($s4==$score_array[0]){
              $memory->score_4=$score;
              $memory->save();
           }
           elseif($s5==$score_array[0]){
              $memory->score_5=$score;
              $memory->save();
           }
             
       }
      
      //   Stroop::select('score_1','score_2','score_3','score_4','score_5')->where('user_id',$id)->get();
         
      
       
   }

   


   
      return ('Entry successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
