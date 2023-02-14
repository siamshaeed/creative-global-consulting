<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Brian2694\Toastr\Facades\Toastr;

class UserListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $users = User::role('user')->get();

        // return view('backend.user_list.index', compact('users'));

        if ($request->ajax()) {

            $query = User::role('user')->get();

            return DataTables::of($query)
                ->blacklist(['action'])
                ->addIndexColumn()
                ->editColumn('ielts_data', function ($row) {
                    return $row->ielts_score ? $row->ielts_score : 'Not Available';
                })
                ->editColumn('graduation_level', function ($row) {
                    return view('backend.user_list.table-action.education', [
                        'row' => $row
                    ]);
                })
                ->addColumn('action', function ($row) {
                    $id = $row->id;
                    $module = 'userlist';
                    return view('backend.user_list.table-action.action', compact(
                        'id', 'module'
                    ));
                })
                ->rawColumns(['action'])
                ->toJson();
        }

        return view('backend.user_list.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);

        $educations = $users->education;


        return view('backend.user_list.show', compact('users', 'educations'));
    }

    public function searchUniversity($id){

         $user = User::find($id);

         if(!$user){

            Toastr::info('User Not Found.', '', ["positionClass" => "toast-top-right", "progressBar" => "true", "closeButton" => "true"]);
            return redirect()->back();

         }

         if(is_null($user->graduation_level)){

            Toastr::info('Graduation Level Not Selected.', '', ["positionClass" => "toast-top-right", "progressBar" => "true", "closeButton" => "true"]);
            return redirect()->back();
         }

         $data = University::query();


         if($user->graduation_level == '1'){

            $data->where('ug_ielts_start', '<=', $user->ielts_score != '' ? $user->ielts_score : 0)
                 ->orWhere('ug_ac_req_gpa', '<=', $user->gpa);


         } elseif($user->graduation_level == '2'){


            $data->where('pg_ielts_start', '<=', $user->ielts_score != '' ? $user->ielts_score : 0)
                 ->orWhere('pg_ac_req_cgpa', '<=', $user->cgpa);

         } else {

         }

         $data = $data->orderBy('id', 'desc')->get();


        return view('backend.user_list.search_university', compact('data', 'user'));
        

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

    public function test(){

        return view('backend.student.success');

    }
}
