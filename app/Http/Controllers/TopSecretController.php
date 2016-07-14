<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;

class TopSecretController extends Controller
{
	public function index(){
		return 'Index';
	}
}