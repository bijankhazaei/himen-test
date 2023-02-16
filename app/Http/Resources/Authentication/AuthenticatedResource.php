<?php

declare(strict_types=1);

namespace App\Http\Resources\Authentication;

use App\Http\Resources\User\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthenticatedResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'user'  => new UserResource($this->user),
            'token' => $this->token,
        ];
    }
}
