<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use \App\Models\User;
use \App\Models\Department;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['menu'] = 'User';
        $data['departments'] = Department::get();
        return view('user' , $data);
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
        return User::find($id);
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
        $name = $request->input('name');
        $email = $request->input('email');
        $user = User::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->save();
        return [
            'status'=>1,
            'title'=>'Success',
            'content'=>''
        ];
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

    public function lists(){
        $data = User::leftJoin('departments' , 'departments.id' , 'users.department_id')
        ->select(
            'users.*'
            ,'departments.name as department_name'
        );
        return DataTables::of($data)
        ->addColumn('action' , function($rec){
            $str='<button class="btn btn-warning btn-sm btn-edit" data-id="'.$rec->id.'" >
            <i class="fa fa-edit"></i>
            </button>';
            return $str;
        })
        ->rawColumns(['action'])
        ->make(true);
    }
}
