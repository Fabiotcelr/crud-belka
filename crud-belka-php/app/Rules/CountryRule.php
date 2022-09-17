<?php

namespace App\Rules;

use LionSecurity\Validation;
use App\Traits\DisplayErrors;

class CountryRule {

	use DisplayErrors;

	public function __construct() {

	}

	public function passes(): CountryRule {
		$this->validation = Validation::validate(
			(array) request, [
                'required' => [
                    ['users_country']
                ],
                'lengthMin' => [
                    ['users_country', 2]
                ],
                'lengthMax' => [
                    ['users_country', 45]
                ]
            ]
		)->data;

		return $this;
	}

}