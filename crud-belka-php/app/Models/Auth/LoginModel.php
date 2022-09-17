<?php

namespace App\Models\Auth;

use App\Models\Class\Users;
use LionSql\Drivers\MySQLDriver as Builder;

class LoginModel {

	public function __construct() {
		
	}

    public function validateDB(Users $users) {
        return Builder::select(Builder::FETCH, "users", null, Builder::count('*', 'files'), [
            Builder::where("users_email", '='),
            Builder::and("users_password", '=')
        ], [
            $users->getUsersEmail(),
            $users->getUsersPassword(),
        ]);
    }

    public function authDB(Users $users) {
        return Builder::select(Builder::FETCH, "users", null, "idusers,idroles", [
            Builder::where("users_email", '='),
            Builder::and("users_password", '=')
        ], [
            $users->getUsersEmail(),
            $users->getUsersPassword(),
        ]);
    }

}