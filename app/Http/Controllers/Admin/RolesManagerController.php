<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RoleElement;
use Illuminate\Http\Request;

class RolesManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-rolesManager')->only('index');
        $this->middleware('permission:create-rolesManager')->only('create');
        $this->middleware('permission:update-rolesManager')->only('edit');
        $this->middleware('permission:delete-rolesManager')->only('destroy');
    }

    public function index(Request $request)
    {
        return view ('admin.rolesManager.index');
    }



    public function store(Request $request)
    {
//        dd($request -> ajax());
        if ($request -> ajax())
        {
            $role_name = $request -> name ;
            $role_display_name = $request -> display_name ;
            $role_description = $request -> description ;
//            dd($role_name,$role_display_name,$role_description);
            Role::create(
                [
                    'name' => $role_name,
                    'display_name' => ucwords(str_replace('_', ' ', $role_display_name)),
                    'description' => ucwords(str_replace('_', ' ', $role_description)),
                ]
            );
            return response()->json('success', 200);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function load_roles_list(Request $request)
    {
        if ($request -> ajax())
        {
            $roles_list = Role::all();
            return response() -> json(['roles_list' => $roles_list], 200);
        }
    }

    public function getRolePermissions(Request $request)
    {
        if ($request -> ajax())
        {
            $elements_list = RoleElement::all();
            $role_id = $request -> role_id;
            $role_permissions = Role::findOrFail($role_id)->permissions;
            $role_permissions = collect($role_permissions)->pluck('name')->toArray();
            return response() -> json(['role_permissions' => $role_permissions, 'elements_list' => $elements_list], 200);
        }
    }

    public function sync_select_all_permissions(Request $request)
    {
        if ($request -> ajax())
        {
            $role_id = $request -> role_id;
            $permissions_name_list = $request -> permissions_name_list;
            $role = Role::findOrFail($role_id);
            if ($request -> checked == 'true')
            {
                $role -> syncPermissions($permissions_name_list);
            }
            elseif($request -> checked == 'false')
            {
                $role -> detachPermissions($permissions_name_list);
            }
            return response() -> json('success', 200);
        }
    }

    public function sync_group_permissions(Request $request)
    {
//        dd($request->all());
        if ($request -> ajax())
        {
            $role_id = $request -> role_id;
            $permissions_name_list = $request -> permissions_name_list;
            $role = Role::findOrFail($role_id);

            if ($request -> checked == 'true')
            {
                $role -> removePermissions($permissions_name_list);
                $role -> givePermissions($permissions_name_list);
            }

            elseif($request -> checked == 'false')
            {
                $role -> removePermissions($permissions_name_list);
            }
            return response() -> json('success', 200);
        }
    }

    public function syncPermissions(Request $request)
    {
        if ($request -> ajax())
        {
            $role_id = $request -> role_id;
            $permision_name = $request -> permission_name;
            $role = Role::findOrFail($role_id);
            $permission = Permission::where('name', $permision_name)->first();
//            dd($role_id, $permision_name, $permission);
            if ($request -> checked == 'true')
            {
                $role -> givePermission($permission);
            }
            elseif($request -> checked == 'false')
            {
                $role -> removePermission($permission);
            }
            return response() -> json('success', 200);
        }
    }

    public function delete_role(Request $request)
    {
        if ($request -> ajax())
        {
            $role_id = $request -> role_id;
            $role = Role::findOrFail($role_id);
            $role -> delete();
            return response() -> json('success', 200);
        }
    }

    public function delete_permission(Request $request)
    {
        if ($request -> ajax())
        {

            $permission_name_request = $request -> permission_name;
            $crud = ['create', 'read', 'update', 'delete'];
            foreach ($crud as $value)
            {
                $permision_name = $value . '-' . $permission_name_request ;
                Permission::where('name', $permision_name) -> delete();
            }

            RoleElement::where('name', $permission_name_request)->delete();
            return response() -> json('success', 200);
        }
    }

    public function split_word($value)
    {
        $replace_dash = str_replace('-', ' ', $value);
        $string = ucwords($replace_dash);
        return $string ;
    }
}
