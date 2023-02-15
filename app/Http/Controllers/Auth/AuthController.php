<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Authentication\AuthenticatedResource;
use App\Http\Resources\SimpleResponseResource;
use App\Services\UserService;

class AuthController extends Controller
{
    public function __construct(
        private readonly UserService $userService,
    ) {
    }

    /**
     * @param LoginRequest $request
     * @return SimpleResponseResource
     */
    public function login(LoginRequest $request)
    {
        $request->authenticate();
        $user = $this->userService->getUser($request->get('email'));

        return $this->successfulResponse(
            new AuthenticatedResource(
                (object)[
                    'user'  => $user,
                    'token' => $user->createToken('himen')->accessToken
                ]
            )
        );
    }
}
