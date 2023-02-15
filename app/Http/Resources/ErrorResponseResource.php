<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

class ErrorResponseResource extends JsonResource
{
    public function __construct(
        public string $message,
        public int $code,
        public string $trackId,
        public mixed $errors = [],
        public bool $status = false,
    ) {
        parent::__construct((object)compact('message', 'code', 'trackId', 'errors', 'status'));
    }

    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        $response = [
            'message' => $this->message,
            'code'    => $this->code,
            'trackId' => $this->trackId,
            'status'  => $this->status,
            'errors'  => $this->errors,
        ];
        if (!empty($this->errors)) {
            $response['errors'] = $this->errors;
        }

        return $response;
    }
}
