<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'All Roles';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$role = Role::create(['name' => 'system']);

        // $pers = ['create roles', 'edit roles', 'remove roles', 'view roles', 'activate roles', 'deactivate roles', 'create users', 'edit users', 'view users', 'activate users', 'deactivate users', 'reset user password', 'create permissions', 'edit permissions', 'remove permissions', 'activate permissions', 'deactivate permissions'];
        // foreach ($pers as $per) {
        //     $permission = Permission::create(['name' => $per]);
        //     Auth::user()->givePermissionTo($permission);
        // }
        
        $user = Auth::user();
        //$user = \App\User::find(2);
        $permissions = $user->listPermissions();

        return $permissions;
        // if(Auth::user()->can('edit articles')){
        //     return 'Has';
        // } else{
        //     return "Don't have";
        // }
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
}

/*************************************************
Usage

First add the Spatie\Permission\Traits\HasRoles-trait to your User model.

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;

    // ...
}
This package allows for users to be associated with roles. Permissions can be associated with roles. A Role and a Permission are regular Eloquent-models. They can have a name and can be created like this:

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

$role = Role::create(['name' => 'writer']);
$permission = Permission::create(['name' => 'edit articles']);
The HasRoles adds eloquent relationships to your models, which can be accessed directly or used as a base query.

$permissions = $user->permissions;
$roles = $user->roles()->pluck('name');
Using permissions

A permission can be given to a user:

$user->givePermissionTo('edit articles');
A permission can be revoked from a user:

$user->revokePermissionTo('edit articles');
You can test if a user has a permission:

$user->hasPermissionTo('edit articles');
Saved permissions will be registered with the Illuminate\Auth\Access\Gate-class. So you can test if a user has a permission with Laravel's default can-function.

$user->can('edit articles');
Using roles and permissions

A role can be assigned to a user:

$user->assignRole('writer');
A role can be removed from a user:

$user->removeRole('writer');
You can determine if a user has a certain role:

$user->hasRole('writer');
You can also determine if a user has any of a given list of roles:

$user->hasAnyRole(Role::all());
You can also determine if a user has all of a given list of roles:

$user->hasAllRoles(Role::all());
The assignRole, hasRole, hasAnyRole, hasAllRoles and removeRole-functions can accept a string, a Spatie\Permission\Models\Role-object or an \Illuminate\Support\Collection-object.

A permission can be given to a role:

$role->givePermissionTo('edit articles');
You can determine if a role has a certain permission:

$role->hasPermissionTo('edit articles');
A permission can be revoked from a role:

$role->revokePermissionTo('edit articles');
The givePermissionTo and revokePermissionTo-functions can accept a string or a Spatie\Permission\Models\Permission-object.

Saved permission and roles are also registered with the Illuminate\Auth\Access\Gate-class.

$user->can('edit articles');
Using blade directives

This package also adds Blade directives to verify whether the currently logged in user has all or any of a given list of roles.

@role('writer')
I'm a writer!
@else
I'm not a writer...
@endrole
@hasrole('writer')
I'm a writer!
@else
I'm not a writer...
@endhasrole
@hasanyrole(Role::all())
I have one or more of these roles!
@else
I have none of these roles...
@endhasanyrole
@hasallroles(Role::all())
I have all of these roles!
@else
I don't have all of these roles...
@endhasallroles

*************************************************/