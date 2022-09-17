<?php

namespace App\Models\Class;

class Users {

    private $idusers;
    private $users_name;
    private $users_last_name;
    private $users_phone;
    private $users_address;
    private $users_country;
    private $users_date_birth;
    private $users_profile_picture;
    private $users_pokemon_url;
    private $users_position;
    private $idroles;
    private $users_status;
    private $users_quantity;
    private $users_email;
    private $users_password;
    private $users_code;

    public function __construct($idusers = null, $users_name = null, $users_last_name = null, $users_phone = null, $users_address = null, $users_country = null, $users_date_birth = null, $users_profile_picture = null, $users_pokemon_url = null, $users_position = null, $idroles = null, $users_status = null, $users_quantity = null, $users_email = null, $users_password = null, $users_code = null) {
        $this->idusers = $idusers;
        $this->users_name = $users_name;
        $this->users_last_name = $users_last_name;
        $this->users_phone = $users_phone;
        $this->users_address = $users_address;
        $this->users_country = $users_country;
        $this->users_date_birth = $users_date_birth;
        $this->users_profile_picture = $users_profile_picture;
        $this->users_pokemon_url = $users_pokemon_url;
        $this->users_position = $users_position;
        $this->idroles = $idroles;
        $this->users_status = $users_status;
        $this->users_quantity = $users_quantity;
        $this->users_email = $users_email;
        $this->users_password = $users_password;
        $this->users_code = $users_code;
    }

    public function getIdusers() {
        return $this->idusers;
    }

    public function setIdusers($idusers) {
        $this->idusers = $idusers;
        return $this;
    }

    public function getUsersName() {
        return $this->users_name;
    }

    public function setUsersName($users_name) {
        $this->users_name = $users_name;
        return $this;
    }

    public function getUsersLastName() {
        return $this->users_last_name;
    }

    public function setUsersLastName($users_last_name) {
        $this->users_last_name = $users_last_name;
        return $this;
    }

    public function getUsersPhone() {
        return $this->users_phone;
    }

    public function setUsersPhone($users_phone) {
        $this->users_phone = $users_phone;
        return $this;
    }

    public function getUsersAddress() {
        return $this->users_address;
    }

    public function setUsersAddress($users_address) {
        $this->users_address = $users_address;
        return $this;
    }

    public function getUsersCountry() {
        return $this->users_country;
    }

    public function setUsersCountry($users_country) {
        $this->users_country = $users_country;
        return $this;
    }

    public function getUsersDateBirth() {
        return $this->users_date_birth;
    }

    public function setUsersDateBirth($users_date_birth) {
        $this->users_date_birth = $users_date_birth;
        return $this;
    }

    public function getUsersProfilePicture() {
        return $this->users_profile_picture;
    }

    public function setUsersProfilePicture($users_profile_picture) {
        $this->users_profile_picture = $users_profile_picture;
        return $this;
    }

    public function getUsersPokemonUrl() {
        return $this->users_pokemon_url;
    }

    public function setUsersPokemonUrl($users_pokemon_url) {
        $this->users_pokemon_url = $users_pokemon_url;
        return $this;
    }

    public function getUsersPosition() {
        return $this->users_position;
    }

    public function setUsersPosition($users_position) {
        $this->users_position = $users_position;
        return $this;
    }

    public function getIdroles() {
        return $this->idroles;
    }

    public function setIdroles($idroles) {
        $this->idroles = $idroles;
        return $this;
    }

    public function getUsersStatus() {
        return $this->users_status;
    }

    public function setUsersStatus($users_status) {
        $this->users_status = $users_status;
        return $this;
    }

    public function getUsersQuantity() {
        return $this->users_quantity;
    }

    public function setUsersQuantity($users_quantity) {
        $this->users_quantity = $users_quantity;
        return $this;
    }

    public function getUsersEmail() {
        return $this->users_email;
    }

    public function setUsersEmail($users_email) {
        $this->users_email = $users_email;
        return $this;
    }

    public function getUsersPassword() {
        return $this->users_password;
    }

    public function setUsersPassword($users_password) {
        $this->users_password = $users_password;
        return $this;
    }

    public function getUsersCode() {
        return $this->users_code;
    }

    public function setUsersCode($users_code) {
        $this->users_code = $users_code;
        return $this;
    }

}