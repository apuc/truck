<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 24.07.2019
 * Time: 14:16
 */

namespace App\Http\Services;


use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserService extends Service {

    public function __construct(){
        parent::__construct();
    }

    /**
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getUsers(){
        $users = User::all();
        return $users;
    }

    /**
     * @param int $paginate
     * @return mixed
     */
    public static function getUsersPaginated($paginate = 25){
        $users = User::paginate($paginate);
        return $users;
    }

    /**
     * @param array $data
     * @return \Illuminate\Support\Collection
     */
    public static function getUnverifiedUsers($data = []){
        $users_query = DB::table('users');

        if(isset($data['filter_verified_at']) && $data['filter_verified_at'] != '*'){
            $users_query = $users_query->whereNull( $data['filter_verified_at']);
        } else{
            $users_query = $users_query->whereNull('phone_verified_at')
                            ->orWhereNull('admin_verified_at');
        }

        return $users_query->get();
    }

    /**
     * @param array $data
     * @param int $paginate
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getUnverifiedUsersPaginated($data = [], $paginate = 25){
        $users_query = DB::table('users');

        if (isset($data['filter_verified_at'])) {
            $users_query = $users_query->whereNull($data['filter_verified_at']);
        } else {
            $users_query = $users_query->whereNull('phone_verified_at')
                ->orWhereNull('admin_verified_at');
        }
        return $users_query->paginate($paginate);
    }

    /**
     * @param $id
     * @return User
     * Получить пользователя по id
     */
    public static function getUserById($id) : User{
        $user = User::findOrFail($id);
        return $user;
    }

    /**
     * @param $id
     * Верифицировать пользователя в админ-панели
     */
    public static function verifyUserByAdmin($id){
        $user = static::getUserById($id);

        $user->markVerifiedByAdmin();
    }
}