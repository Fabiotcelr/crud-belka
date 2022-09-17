<?php

namespace App\Rules;

use LionSecurity\Validation;
use App\Traits\DisplayErrors;

class ProfilePictureRule {

	use DisplayErrors;

	public function __construct() {

	}

	public function passes(): ProfilePictureRule {
		$this->validation = Validation::validate(
			(array) request, [
                'required' => [
                    ['users_profile_picture']
                ]
            ]
		)->data;

		return $this;
	}

}