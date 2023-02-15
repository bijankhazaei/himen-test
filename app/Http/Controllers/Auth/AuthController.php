<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Authentication\AuthenticatedResource;
use App\Http\Resources\SimpleResponseResource;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): Response
    {
        Auth::guard('api')->logout();
    }
}
