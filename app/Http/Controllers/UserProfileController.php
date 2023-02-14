<?php

namespace App\Http\Controllers;

use App\Models\Educations;
use App\Models\Languages;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Educations::where('user_id', Auth::id())->get();

        $languages = Languages::where('user_id', Auth::id())->get();

        return view('backend.user_profile.index', compact('educations', 'languages'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $educations = Educations::where('user_id', Auth::id())->get();

//        $languages = Languages::where('user_id', Auth::id())->get();

        return view('backend.user_profile.edit', compact('educations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::where('id', $id)->first();

        if (is_null($user)) {


            /*
             *  redirect to user with message
             */

            return redirect()->back();

        }


        DB::beginTransaction();

        try {

            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->nid = $request->nid;
            $user->passport = $request->passport;
            $user->birth = $request->birth;
            $user->gender = $request->gender;
            $user->blood = $request->blood;
            $user->religion = $request->religion;
            $user->father = $request->father;
            $user->mother = $request->mother;
            $user->reference = $request->reference;
            $user->facebook = $request->facebook;
            $user->runiversity = $request->runiversity;
            $user->expsubject = $request->expsubject;
            $user->gurdian_phone = $request->gurdian_phone;
            $user->paddress = $request->paddress;
            $user->peraddress = $request->peraddress;

//            $user->ielts                =   $request->ielts;
//            $user->ielts_score          =   $request->ielts_score;
//            if ($request->hasfile('ielts_publication')) {
//                $filePath = $request->file('ielts_publication');
//                $fileName = time() . '.' . $filePath->getClientOriginalExtension();
//                $path = $request->file('ielts_publication')->storeAs('uploads/ielts', $fileName, 'public');
//                $user->ielts_publication = '/storage/' . $path;
//            }
//            $user->	toefl               =   $request->toefl;
//            $user->	toefl_score         =   $request->toefl_score;
//            if ($request->hasfile('toefl_publication')) {
//                $filePath = $request->file('toefl_publication');
//                $fileName = time() . '.' . $filePath->getClientOriginalExtension();
//                $path = $request->file('toefl_publication')->storeAs('uploads/tofel', $fileName, 'public');
//                $user->toefl_publication = '/storage/' . $path;
//            }
//            $user->	douling             =   $request->douling;
//            $user->	douling_score       =   $request->douling_score;
//            if ($request->hasfile('douling_publication')) {
//                $filePath = $request->file('douling_publication');
//                $fileName = time() . '.' . $filePath->getClientOriginalExtension();
//                $path = $request->file('douling_publication')->storeAs('uploads/douling', $fileName, 'public');
//                $user->douling_publication = '/storage/' . $path;
//
//            }


            $user->update();


//            Educations::where('user_id', $id)->delete();
//
//            foreach ($request->gpa as $key => $item) {
//
//                $education = new Educations();
//                $education->user_id = Auth::id();
//                $education->edu_name = $request->edu_name[$key];
//                $education->gpa = $request->gpa[$key];
//                $education->group = $request->group[$key];
//                $education->institute = $request->institute[$key];
//                $education->board = $request->board[$key];
//                $education->pass_year = $request->pass_year[$key];
//                $education->save();
//
//            }

            DB::commit();

            Toastr::success('Profile Update Successfully', '', ["positionClass" => "toast-top-right", "progressBar" => "true", "closeButton" => "true"]);

            return redirect()->back();


        } catch (\Exception $exception) {

            DB::rollBack();

             $exception;

            //notify()->error($exception->getMessage(), null, "topRight");

            return redirect()->back()->with('message', $exception->getMessage());

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
