<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistrationRequest;
use App\Models\User;
use App\Models\UserReg;
use App\Models\UsersReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Users extends Controller
{
    function userRegistration(UserRegistrationRequest $req)
    {
        try {
            $validatedData = $req->validated();

            // Hash the password
            $validatedData['password'] = bcrypt($validatedData['password']);

            // Save the user using mass assignment
            $user = UserReg::create($validatedData);
            Log::info('Data saved successfully: ' . json_encode($user->toArray()));
        } catch (\Exception $e) {
            Log::error('Error saving data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error occurred while saving data.');
        }
    }
}
