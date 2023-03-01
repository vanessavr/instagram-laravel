<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name'          => ['required', 'string', 'max:255'],
            'username'      => ['string', 'max:255', 'unique:users'],
            'phone_email'   => is_string(filter_var($input['phone_email'], FILTER_VALIDATE_EMAIL)) ? ['string', 'email', 'max:255', 'unique:users,email'] : ['string', 'max:10', 'min:10', 'unique:users,phone_number'],
            'password'      => $this->passwordRules(),
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name'          => $input['name'],
            'username'      => $input['username'],
            'email'         => is_string(filter_var($input['phone_email'], FILTER_VALIDATE_EMAIL)) ? $input['phone_email'] : NULL,
            'phone_number'  => is_string(filter_var($input['phone_email'], FILTER_VALIDATE_EMAIL)) ? NULL : $input['phone_email'],
            'password'      => Hash::make($input['password']),
        ]);
    }
}
