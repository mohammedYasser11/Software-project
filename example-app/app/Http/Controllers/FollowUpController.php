<?php

namespace App\Http\Controllers;

use App\Models\FollowUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FollowUpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $object = new FollowUp();
        $object['user_id'] = Auth::user()->id ;
        $object['weight'] = $request['weight'];
        $object['waist_size'] = $request['waist_size'];
        $object['abdominal_size'] = $request['abdominal_size'];
        $object['thigh_size_r'] = $request['thigh_size_r'];
        $object['thigh_size_l'] = $request['thigh_size_l'];
        $object['arm_size_r'] = $request['arm_size_r'];
        $object['arm_size_l'] = $request['arm_size_l'];
        $object['calf_size_r'] = $request['calf_size_r'];
        $object['calf_size_l'] = $request['calf_size_l'];
        $object['chest_size'] = $request['chest_size'];
        $object['diet_comit'] = $request['diet_comit'];
        $object['cardio_comit'] = $request['cardio_comit'];
        $object['training_comit'] = $request['training_comit'];
        $object->save();
        return redirect('/follow-up-step-two?row_id='.$object['id']);
    }

    public function stepTwo(Request $request){
        $object = FollowUp::find($request['row_id']);
        $side_1 = $request->file('side_1');
        $side_1 =  $side_1->move('upload/', 'side_1_' .$side_1->getClientOriginalName());

        $side_2 = $request->file('side_2');
        $side_2 =  $side_2->move('upload/', 'side_2_'.$side_2->getClientOriginalName());

        $side_3 = $request->file('side_3');
        $side_3 =  $side_3->move('upload/','side_3_'.$side_3->getClientOriginalName());

        $side_4 = $request->file('side_4');
        $side_4 =  $side_4->move('upload/','side_4_'.$side_4->getClientOriginalName());

        $steps_per_day = $request->file('steps_per_day');
        $steps_per_day =  $steps_per_day->move('upload/','steps_per_day_'. $steps_per_day->getClientOriginalName());



        $object['training_diff'] = $request['training_diff'];
        $object['cheat_meal'] = $request['cheat_meal'];
        $object['diet_edit'] = $request['diet_edit'];
        $object['sleeping_hrs'] = $request['sleeping_hrs'];
        $object['side_1'] = $side_1;
        $object['side_2'] = $side_2;
        $object['side_3'] = $side_3;
        $object['side_4'] = $side_4;
        $object['steps_per_day'] = $steps_per_day;
        $object->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(FollowUp $followUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FollowUp $followUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FollowUp $followUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FollowUp $followUp)
    {
        //
    }
}
