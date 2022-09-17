<?php

namespace App\Rules;

use LionSecurity\Validation;
use App\Traits\DisplayErrors;

class DateBirthRule {

	use DisplayErrors;

	public function __construct() {

	}

	public function passes(): DateBirthRule {
		$this->validation = Validation::validate(
			(array) request, [
                'required' => [
                    ['users_date_birth']
                ],
                'date' => [
                    ['users_date_birth']
                ],
                'dateFormat' => [
                    ['users_date_birth', 'Y-m-d']
                ]
            ]
        )->data;

		return $this;
	}

}