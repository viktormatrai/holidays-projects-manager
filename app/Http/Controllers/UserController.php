<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = User::orderBy('name')->paginate(10);
        return view('example.index')->with('users', $users);
    }

    public function create()
    {
        return view('example.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(){

        $validationRules = array(
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        );

        $validator = Validator::make(Input::all(), $validationRules);

        if ($validator -> fails()) {
            return Redirect::to('/freedays/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }
        $user = new User;

        $user -> name = Input::get('name');
        $user -> email = Input::get('email');
        $user -> password = Hash::make(Input::get('password'));
        $user -> save();

        return redirect('/freedays');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id){
        $user = User::find($id);

        return view('example.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id){
        $validationRules = array(
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        );

        $validator = Validator::make(Input::all(), $validationRules);

        if ($validator -> fails()){
            return Redirect::to('/free-days'. $id . '/edit')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
        } else {
            $user = User::find($id);
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user-> save();

            return redirect('freedays');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        $user = User::find($id);

        $user->delete();

        return redirect('/');
    }

}
