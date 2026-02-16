<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\users\AddUserRequest;
use App\Http\Requests\users\UpdateUserRequest;
use App\Models\Branch;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RoleElement;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laratrust\Laratrust;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:read-user')->only('index');
        $this->middleware('permission:create-user')->only('create');
        $this->middleware('permission:update-user')->only('edit');
        $this->middleware('permission:delete-user')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $roles_list = Role::where(function ($query){
            if (!auth()->user()->hasRole(['superAdministrator']))
            {
                $query -> whereNotIn('name', ['superAdministrator']);
            }

            if (!auth()->user()->hasRole(['superAdministrator', 'administrator']))
            {
                $query -> whereNotIn('name', ['superAdministrator', 'administrator']);
            }
        })->get();

        $permissions_list = Permission::all();
        $elements_list = RoleElement::all();
        $branches = Branch::all();
        return view('admin.users.create', compact('roles_list','permissions_list', 'elements_list', 'branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddUserRequest $request)
    {
        $user_data = $request -> except('password'); // Get All Column Without [profile_picture]
        $user_data['password'] = Hash::make($request -> password);
        $user = User::create($user_data);
        $user->syncRoles([$request -> role_id]);
        $user->syncPermissions($request->permissions);
        toast(__('trans.user created successfully'),'success')->background('#000');
        return redirect() -> route('admin.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $roles_list = Role::where(function ($query){
            if (auth()->user()->hasRole(['administrator', 'team-leader']))
            {
                $query -> whereNotIn('name', ['superAdministrator']);
            }

            if (auth()->user()->hasRole('team-leader'))
            {
                $query -> where('name', 'broker');
            }
        })->get();
        $permissions_list = Permission::all();
        $elements_list = RoleElement::all();
        $branches = Branch::all();
        return view('admin.users.edit',compact('user', 'roles_list','permissions_list', 'elements_list', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
//        dd($request->all());
        $user = User::findOrFail($id);
        $user_new_data = $request -> except(['password', 'branch_id']); // Get All Column Without [profile_picture]
        if ($request -> password != NULL)
            $user_new_data['password'] = bcrypt($request -> password);
//dd($request->permissions);
        $branch_id = $request->branch_id? $request->branch_id: null;
//        $image_data = $this->uploadImageProcessing($request -> profile_picture, 'user', 'profile', $request -> name, 'public', 100, 100, $user);
        $user->update($user_new_data + ['branch_id' => $branch_id]); // Create New user From [userData] Request
        $user->syncRoles([$request -> role_id]);
        $user->syncPermissions($request->permissions);

        toast(__('trans.user updated successfully'),'success')->background('#000');
        return redirect() -> back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user -> delete(); // Delete user From user Table
        toast(__('trans.user deleted successfully'),'error')->background('#000');
        return redirect() -> route('admin.users.index');
    }
}
