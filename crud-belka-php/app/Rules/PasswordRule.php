<?php

namespace App\Rules;

use LionSecurity\Validation;
use App\Traits\DisplayErrors;

class PasswordRule {

	use DisplayErrors;

	public function __construct() {

	}

	public function passes(): PasswordRule {
		$this->validation = Validation::validate(
			(array) request, [
                'required' => [
                    ['users_password']
                ]
            ]
		)->data;

		return $this;
	}

}