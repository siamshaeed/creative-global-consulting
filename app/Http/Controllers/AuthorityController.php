<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use Yajra\DataTables\DataTables;

class AuthorityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = User::whereHas('roles', function ($query) {
                return $query->where('name','!=', 'User');
            })->get();

            return DataTables::of($query)
                ->blacklist(['action'])
                ->addIndexColumn()
                ->editColumn('role_data', function ($row) {
                    return view('backend.authority.table-action.role-details', [
                        'row' => $row
                    ]);
                })
                ->addColumn('action', function ($row) {
                    $id = $row->id;
                    $module = 'authority';
                    return view('backend.authority.table-action.action', compact(
                        'id', 'module'
                    ));
                })
                ->rawColumns(['action'])
                ->toJson();
        }

        return view('backend.authority.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::whereNotIn('name', ['User'])->get();

        return view('backend.authority.create',compact('roles'));
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
        ]);

        $user = new User();
        $user->name         = $request-> name;
        $user->email        = $request-> email;
        $user->phone        = $request-> phone;
        $user->nid          = $request-> nid;
        $user->gender       = $request->gender;
        $user->birth        = $request->birth;
        $user->password     = bcrypt($request->password);

        $user->save();

        $user->assignRole($request->input('role_id'));


       Toastr::success('Authority User Added Successfully', '', ["positionClass" => "toast-top-right", "progressBar" => "true", "closeButton" => "true"]);

        return redirect()->route('authority.index');
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
        $user = User::find($id);

        $roles = Role::whereNotIn('name', ['User'])->get();

        return view('backend.authority.edit',compact('roles','user'));
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
        $this->validate($request, [
            'name' => 'required',
            // 'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|digits:11',
        ]);

        $user = User::find($id);
        $user->name         = $request-> name;
        $user->email        = $request-> email;
        $user->phone        = $request-> phone;
        $user->nid          = $request-> nid;
        $user->gender       = $request->gender;
        $user->birth        = $request->birth;
        // $user->password     = bcrypt($request->password);

        $user->save();

        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('role_id'));

        Toastr::success('Authority User Updated Successfully', '', ["positionClass" => "toast-top-right", "progressBar" => "true", "closeButton" => "true"]);

        return redirect()->route('authority.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        Toastr::success('Authority User Deleted Successfully', '', ["positionClass" => "toast-top-right", "progressBar" => "true", "closeButton" => "true"]);
        return redirect()->route('authority.index');
    }
}
