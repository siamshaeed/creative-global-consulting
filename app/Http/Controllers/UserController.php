<?php

namespace App\Http\Controllers;

use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|digits:11',
            'ielts_score' => $request->ielts ? 'required' : 'nullable',
            'douling_score' => $request->douling ? 'required' : 'nullable',
            'passport_num' => $request->passport ? 'required' : 'nullable',
        ]);

        $user = new User();
        $user->name         = $request-> name;
        $user->email        = $request-> email;
        $user->phone        = $request-> phone;
        $user->nid          = $request-> nid;
        $user->gender             = $request->gender;
        $user->birth              = $request->birth;
        $user->graduation_level   = $request->graduation_level;
        $user->name_of_exam       = $request->name_of_exam;
        $user->institute          = $request->institute;
        $user->gpa                = $request->gpa;
        $user->cgpa               = $request->cgpa;
        $user->group              = $request->group;
        $user->pass_year          = $request->pass_year;
        $user->passport           = $request->passport;
        $user->passport_num       = $request->passport_num;
        $user->ielts              = $request->ielts;
        $user->ielts_score        = $request->ielts_score;
        $user->douling            = $request->douling;
        $user->douling_score      = $request->douling_score;
        $user->password     = bcrypt($request->password);

        $user->save();

        //Config/default.php
        $user->assignRole(config(('default.role.user')));

//        Toastr::success('Registration Successfully', '', ["positionClass" => "toast-top-right", "progressBar" => "true", "closeButton" => "true"]);

        return view('backend.student.success');

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
