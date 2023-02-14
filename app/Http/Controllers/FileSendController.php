<?php

namespace App\Http\Controllers;

use App\Models\File;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class FileSendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();

        return view('backend.file.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = new File();
        $file->name    = $request->name;
        $file->email   = $request->email;
        $file->phone   = $request->phone;
        $file->partner = $request->partner;
        $file->save();

        Toastr::success('File Create Success', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);

        return  redirect('file');
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
        $file = File::find($id);

        return view('backend.file.edit', compact('file'));
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
        $file = File::find($id);
        $file->name    = $request->name;
        $file->email   = $request->email;
        $file->phone   = $request->phone;
        $file->partner = $request->partner;
        $file->update();

        Toastr::success('File Update Success', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);

        return  redirect('file');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = File::find($id);
        $file->delete();

        Toastr::success('File Delete Success', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);

        return  redirect('file');
    }
}
