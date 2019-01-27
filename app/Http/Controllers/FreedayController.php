<?php

namespace App\Http\Controllers;

use App\FreeDay;
use App\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class FreedayController extends Controller
{

    public function create(){
        return view('example.reserve');
    }

    public function show(){
        $user_id = Auth::id();
        $freedays = Freeday::where('user_id', '=', $user_id)->get();
        return view('example.vacations')->with('freedays', $freedays);
    }

    public function store(Request $request){
        //$validationRules = array(
        //    'first_day' => 'required',
        //    'last_day' => 'required',
        //);

        /*$validator = Validator::make(Input::all(), $validationRules);

        if ($validator->fails()) {
            return view('example.reserve')
                ->withErrors($validator);
        } else {*/

            FreeDay::create([
                'first_day' => $request->get('first_day'),
                'last_day' => $request->get('last_day'),
                'user_id' => Auth::id()
            ]);

            return redirect('/freedays');
    }


    public function edit($id){

        $freeday = FreeDay::find($id);

        return view('example.update_reservation')->with('freeday', $freeday);
    }


    public function update(Request $request){

        $id = $request->get('id');

        $validationRules = array(
            'first_day' => 'required',
            'last_day' => 'required',
            );

        /*$validator = Validator::make(Input::all(), $validationRules);

        if ($validator->fails()) {
            return Redirect::to('/reservation' . $id . '/edit')
                ->withErrors($validator);
        } else {*/

            FreeDay::where('id', $id)
                ->update([
                    'first_day' => $request->get('first_day'),
                    'last_day' => $request->get('last_day')
                ]);

            return redirect('reserve/index');
    }



    public function destroy($id){

        $freeday = FreeDay::find($id);

        $freeday->delete();

        return redirect('/reserve/index');
    }

}
