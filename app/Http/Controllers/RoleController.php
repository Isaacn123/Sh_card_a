<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    function __construct()
    {
        //  $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }



    public function index()
    {
        //
        $limit = 4;
        return Role::orderBy('name','asc')->piginate($limit);
        // Role::orderBy('name','asc')->piginate($limit);
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
       return "STORe";

       $this->validate($request, [
        'name' => 'required|unique:roles,name',
        'permission' => 'required',
    ]);

    // $role = Role::create(['name' => $request->input('name')]);
    // $role->syncPermissions($request->input('permission'));

    // return redirect()->route('settings')
    //                 ->with('success','Role created successfully');


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
        $role  = Role::find($id);
        return response()->json([
            'result' => $role,
            'status' => 200
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id = $request->roleid;
        $role  = Role::find($id);
        $role->name = $request->rolename;
        $role->save();
        return redirect('settings')->with('success','Role updated successfully.');
       
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
        // dd($role->roleid);
        // $user = User::find($id);
        $role = Role::find($id);
        $item_id = $id;
        $item = Role::withCount('users')->findOrFail($item_id);

        if (! $item->users_count) {
            $item->delete();
            $role->delete();
        }
        
        // $user->roles()->detach();
        // $user->removeRole($user->roles->first());
         @session()->flash('success', 'Role has been Deleted successfully!');

         return redirect('settings');
  
    }

}
