<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller {

    public function __construct(){
        //$this->middleware('auth');
    }

    public function index(){
        return view('admin.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function users(){
        $users = UserService::getUsersPaginated();
        return view('admin.users', compact('users'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Return unverified users
     */
    public function unverifiedUsers(){
        $filters = Input::all();
        $users = UserService::getUnverifiedUsersPaginated($filters);
        return view('admin.unverified-users', compact(['users', 'filters']));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Return user by ID
     */
    public function user($id){
        $user = UserService::getUserById($id);
        return view('admin.user-details', compact('user'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userVerify($id){
        UserService::verifyUserByAdmin($id);
        return redirect()->route('admin.unverified-users');
    }

}
