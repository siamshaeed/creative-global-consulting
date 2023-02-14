<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();

        return view('backend.setting.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.setting.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name'
        ]);

        $permission->name = $request->name;

        if ($request->filled('guard_name')) {
            $permission->guard_name = $request->guard_name;
        } else {
            $permission->guard_name = 'web';
        }
        $permission->save();

        Toastr::success('Permission Create Successfully', '', ["positionClass" => "toast-top-right", "progressBar" => "true", "closeButton" => "true"]);

        return redirect()->route('permissions.index');
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
    public function edit(Permission  $permission)
    {
        return view('backend.setting.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name,' . $permission->id
        ]);

        $permission->name = $request->name;

        if ($request->filled('guard_name')) {
            $permission->guard_name = $request->guard_name;
        } else {
            $permission->guard_name = 'web';
        }
        $permission->save();

        Toastr::success('Permission Update Successfully', '', ["positionClass" => "toast-top-right", "progressBar" => "true", "closeButton" => "true"]);

        return redirect()->route('permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        Toastr::Warning('Permission Delete Successfully', '', ["positionClass" => "toast-top-right", "progressBar" => "true", "closeButton" => "true"]);

        return redirect()->route('permissions.index');
    }
}
