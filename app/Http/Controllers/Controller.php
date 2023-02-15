<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\SimpleResponseResource;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function successfulResponse(array|object $data = []): SimpleResponseResource
    {
        return new SimpleResponseResource(
            data: $data,
        );
    }
}
