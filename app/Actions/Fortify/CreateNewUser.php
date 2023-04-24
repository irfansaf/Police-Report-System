<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\Role;
use Exception;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $userRole = Role::where('name', 'user')->first();
        Log::info('User role found: ' . $userRole->name . ' with ID: ' . $userRole->id);

        Model::unsetEventDispatcher();

        try {
            $user = User::create ([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'role_id' => $userRole->id,
            ]);

            Log::info('User created with attributes: ' . json_encode($user->getAttributes()));

        } catch (Exception $e) {
            Log::error('Error creating new user: ' . $e->getMessage());
        }

        Model::setEventDispatcher(app('events'));

        return $user ?? null;
    }
}
