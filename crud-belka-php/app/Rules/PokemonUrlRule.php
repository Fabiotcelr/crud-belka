<?php

namespace App\Rules;

use LionSecurity\Validation;
use App\Traits\DisplayErrors;

class PokemonUrlRule {

	use DisplayErrors;

	public function __construct() {

	}

	public function passes(): PokemonUrlRule {
		$this->validation = Validation::validate(
			(array) request, [
                'required' => [
                    ['users_pokemon_url']
                ],
                'url' => [
                    ['users_pokemon_url']
                ]
            ]
        )->data;

		return $this;
	}

}