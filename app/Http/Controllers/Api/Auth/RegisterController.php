<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterRequest $request)
    {
        //
        $user = User::create($request->getData());
        return UserResource::make(
            [
                'user'=>$user,
                'token'=>$user->createToken('laravel_api_token')->plainTextToken
            ]
        );
    }
}
