<?php

namespace App\Models\Manage;

use App\Models\Class\Users;
use LionSql\Drivers\MySQLDriver as Builder;

class UsersModel {

	public function __construct() {
		
	}

    public function createUsersDB(Users $users) {
        return Builder::insert("users", "users_name,users_last_name,users_phone,users_address,users_country,users_date_birth,users_profile_picture,users_pokemon_url,users_position,idroles,users_status,users_quantity,users_email,users_password,users_code", [
            $users->getUsersName(),
            $users->getUsersLastName(),
            $users->getUsersPhone(),
            $users->getUsersAddress(),
            $users->getUsersCountry(),
            $users->getUsersDateBirth(),
            $users->getUsersProfilePicture(),
            $users->getUsersPokemonUrl(),
            $users->getUsersPosition(),
            $users->getIdroles(),
            $users->getUsersStatus(),
            $users->getUsersQuantity(),
            $users->getUsersEmail(),
            $users->getUsersPassword(),
            $users->getUsersCode()
        ]);
    }

    public function readUsersDB() {
        return Builder::select(Builder::FETCH_ALL, 'users');
    }

    public function updateUsersPasswordDB(Users $users) {
        return Builder::update("users", "users_name,users_last_name,users_phone,users_address,users_country,users_date_birth,users_profile_picture,users_pokemon_url,users_position,idroles,users_status,users_email,users_password:idusers", [
            $users->getUsersName(),
            $users->getUsersLastName(),
            $users->getUsersPhone(),
            $users->getUsersAddress(),
            $users->getUsersCountry(),
            $users->getUsersDateBirth(),
            $users->getUsersProfilePicture(),
            $users->getUsersPokemonUrl(),
            $users->getUsersPosition(),
            $users->getIdroles(),
            $users->getUsersStatus(),
            $users->getUsersEmail(),
            $users->getUsersPassword(),
            $users->getIdusers()
        ]);
    }

    public function updateUsersDB(Users $users) {
        return Builder::update("users", "users_name,users_last_name,users_phone,users_address,users_country,users_date_birth,users_profile_picture,users_pokemon_url,users_position,idroles,users_status,users_email:idusers", [
            $users->getUsersName(),
            $users->getUsersLastName(),
            $users->getUsersPhone(),
            $users->getUsersAddress(),
            $users->getUsersCountry(),
            $users->getUsersDateBirth(),
            $users->getUsersProfilePicture(),
            $users->getUsersPokemonUrl(),
            $users->getUsersPosition(),
            $users->getIdroles(),
            $users->getUsersStatus(),
            $users->getUsersEmail(),
            $users->getIdusers()
        ]);
    }

    public function deleteUsersDB(Users $users) {
        return Builder::delete("users", "idusers", $users->getIdusers());
    }

}