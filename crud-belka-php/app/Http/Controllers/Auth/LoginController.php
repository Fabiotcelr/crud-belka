<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\LoginModel;
use App\Models\Class\Users;

class LoginController {

    private LoginModel $loginModel;
    private Users $users;

    public function __construct() {
        $this->loginModel = new LoginModel();
    }

    public function auth() {
        $this->users = new Users();
        $this->users->setUsersEmail(request->users_email);
        $this->users->setUsersPassword(md5(request->users_password));

        $validate = $this->loginModel->validateDB($this->users);
        if ($validate->files === 0) {
            return response->error("El correo/contraseña es incorrecto");
        }
        // -----------------------------------------------------------------------------------------
        $responseLogin = $this->loginModel->authDB($this->users);

        return response->success(null, [
            'idusers' => $responseLogin->idusers,
            'idroles' => $responseLogin->idroles
        ]);
    }

}