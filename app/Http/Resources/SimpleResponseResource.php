<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SimpleResponseResource extends JsonResource
{
    public function __construct(
        public mixed $data = [],
        public ?string $message = null,
        public bool $status = true,
    ) {
        parent::__construct((object)compact('data', 'status', 'message'));
    }

    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'status'  => $this->status,
            'data'    => $this->when($this->status, $this->data),
            'message' => $this->when(!$this->status, $this->message),
        ];
    }
}
