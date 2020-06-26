<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Stroop;
class StroopController extends Controller
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
        //
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
$score=$request->input('db_score');
$selection = Stroop::where('user_id','=',$id)->first();
$users_selection= $selection->id;
$sc = Stroop::find($users_selection);
if($sc->score_1==NULL){
$stroop = Stroop::find($users_selection);
$stroop->score_1 =$score;
$stroop->save();  
}
elseif($sc->score_2==NULL) {
$stroop = Stroop::find($users_selection);
$stroop->score_2 =$score;
$stroop->save();
}
elseif($sc->score_3==NULL){
$stroop = Stroop::find($users_selection);
$stroop->score_3 =$score;
$stroop->save();
}
elseif($sc->score_4==NULL){
$stroop = Stroop::find($users_selection);
$stroop->score_4 =$score;
$stroop->save();
}
elseif($sc->score_5==NULL){
$stroop = Stroop::find($users_selection);
$stroop->score_5 =$score;
$stroop->save();
}
else {
$stroop=Stroop::find($users_selection);
$s1= $stroop->score_1;
$s2= $stroop->score_2;
$s3= $stroop->score_3;
$s4= $stroop->score_4;
$s5= $stroop->score_5;
$stroop->score_1=$stroop->score_2;
$stroop->score_2=$stroop->score_3;
$stroop->score_3=$stroop->score_4;
$stroop->score_4=$stroop->score_5;
$stroop->score_5=$score;
$stroop->save();
}
return view('exercises.strooprevert');
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
