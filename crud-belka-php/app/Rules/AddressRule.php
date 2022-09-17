<?php

namespace App\Rules;

use LionSecurity\Validation;
use App\Traits\DisplayErrors;

class AddressRule {

	use DisplayErrors;

	public function __construct() {

	}

	public function passes(): AddressRule {
		$this->validation = Validation::validate(
			(array) request, [
                'required' => [
                    ['users_address']
                ],
                'lengthMin' => [
                    ['users_address', 15]
                ],
                'lengthMax' => [
                    ['users_address', 150]
                ]
            ]
        )->data;

		return $this;
	}

}