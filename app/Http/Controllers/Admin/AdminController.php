<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_admin' => 'required',
            'email_admin' => 'required',
            'password_admin' => 'required',
        ]);
        AdminModel::create($request->all());
        return redirect()->route('admin.show')
            ->with('success','Admin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $admin = AdminModel::all();
        $i = 0;
        return view('admin.show',compact('admin', 'i'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_admin)
    {
        $admin =  AdminModel::find($id_admin);
        return view('admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_admin)
    {
        $request->validate([
            'nama_admin' => 'required',
            'email_admin' => 'required',
            'password_admin' => 'required',
        ]);
        AdminModel::find($id_admin)->update($request->all());
        return redirect()->route('admin.show')
            ->with('success','Admin updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_admin)
    {
        AdminModel::find($id_admin)->delete();
        return redirect()->route('admin.show')
            ->with('success','Admin deleted successfully');
    }
}
