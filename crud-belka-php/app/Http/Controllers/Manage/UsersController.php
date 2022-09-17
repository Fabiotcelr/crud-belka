<?php

namespace App\Http\Controllers\Manage;

use App\Models\Class\Users;
use App\Models\Manage\UsersModel;
use LionFiles\Manage;

class UsersController {

    private UsersModel $usersModel;
    private Users $users;

    public function __construct() {
        $this->usersModel = new UsersModel();
    }

    public function createUsers() {
        if (!in_array(request->users_position, ['GERENTE', 'CONTADOR', 'VENDEDOR'])) {
            return response->error('El tipo de cargo seleccionado no es valido');
        }

        if (!in_array(request->users_status, ['ACTIVO', 'INACTIVO'])) {
            return response->error('El tipo de estado seleccionado no es valido');
        }
        // ---------------------------------
        $code = uniqid();
        $path = 'assets/img/' . $code . "/";
        $rename = Manage::rename(request->users_profile_picture['name'], 'IMG');

        $this->users = new Users(
            null,
            request->users_name,
            request->users_last_name,
            (int) request->users_phone,
            request->users_address,
            request->users_country,
            request->users_date_birth,
            env->SERVER_URL . $path . $rename,
            request->users_pokemon_url,
            request->users_position,
            (int) request->idroles,
            request->users_status,
            0,
            request->users_email,
            md5(request->users_password),
            $code
        );
        // ---------------------------------
        Manage::folder($path);

        $responseUploadFile = Manage::upload(
            request->users_profile_picture['tmp_name'],
            $rename,
            $path
        );

        if ($responseUploadFile->status === 'error') {
            return response->error('Ah ocurrido un error al registrar el usuario [1]');
        }
        // ---------------------------------
        $responseCreate = $this->usersModel->createUsersDB($this->users);
        if ($responseCreate->status === 'error') {
            return response->error('Ah ocurrido un error al registrar el usuario [2]');
        }

        return response->success('Usuario registrado correctamente');
    }

    public function readUsers() {
        return $this->usersModel->readUsersDB();
    }

    public function updateUsers() {
        $path = 'assets/img/' . request->users_code_a . "/";
        $rename = '';

        if (isset(request->users_profile_picture_a)) {
            $rename = Manage::rename(request->users_profile_picture_a['name'], 'IMG');
        }

        $this->users = new Users(
            (int) request->idusers_a,
            request->users_name_a,
            request->users_last_name_a,
            (int) request->users_phone_a,
            request->users_address_a,
            request->users_country_a,
            request->users_date_birth_a,
            (isset(request->users_profile_picture_a)
                ? env->SERVER_URL . $path . $rename
                : request->users_profile_picture_old),
            request->users_pokemon_url_a,
            request->users_position_a,
            (int) request->idroles_a,
            request->users_status_a,
            0,
            request->users_email_a,
            (isset(request->users_password_a) ? md5(request->users_password_a) : null),
            request->users_code_a
        );
        // ---------------------------------
        if (isset(request->users_profile_picture_a)) {
            Manage::folder($path);

            $responseUploadFile = Manage::upload(request->users_profile_picture_a['tmp_name'], $rename, $path);
            if ($responseUploadFile->status === 'error') {
                return response->error('Ah ocurrido un error al actualizar el usuario [1]');
            }

            $separate = explode("/", request->users_profile_picture_old);
            $deleted = $separate[count($separate) - 1];
            Manage::remove('assets/img/' . request->users_code_a . "/" . $deleted);
        }
        // ---------------------------------
        $responseUpdate = null;

        if ($this->users->getUsersPassword() === null) {
            $responseUpdate = $this->usersModel->updateUsersDB($this->users);
        } else {
            $responseUpdate = $this->usersModel->updateUsersPasswordDB($this->users);
        }

        if ($responseUpdate->status === 'error') {
            return response->error('Ah ocurrido un error al actualizar el usuario [2]');
        }

        return response->success('Usuario actualizado correctamente');
    }

    public function deleteUsers(string $idusers) {
        return $this->usersModel->deleteUsersDB(
            new Users((int) $idusers)
        );
    }

}