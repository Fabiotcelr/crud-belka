<?php

/**
 * ------------------------------------------------- --------------------------------------------
 * Rules
 * ------------------------------------------------- --------------------------------------------
 * This is where you can register your rules for validating forms
 * ------------------------------------------------- --------------------------------------------
 **/

return [
    '/manage/create-users' => [
        App\Rules\NameRule::class,
        App\Rules\LastNameRule::class,
        App\Rules\PhoneRule::class,
        App\Rules\AddressRule::class,
        App\Rules\EmailRule::class,
        App\Rules\CountryRule::class,
        App\Rules\DateBirthRule::class,
        App\Rules\PokemonUrlRule::class,
        App\Rules\PasswordRule::class,
        App\Rules\ProfilePictureRule::class
    ],
    '/auth/login' => [
        App\Rules\EmailRule::class,
        App\Rules\PasswordRule::class
    ]
];