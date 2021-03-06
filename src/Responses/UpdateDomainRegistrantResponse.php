<?php

namespace Balfour\DomainsResellerAPI\Responses;

class UpdateDomainRegistrantResponse extends BaseResponse
{
    /**
     * @return mixed[]
     */
    public function toArray(): array
    {
        return [
            'return_code' => $this->getReturnCode(),
            'uuid' => $this->getUUID(),
            'message' => $this->getMessage(),
        ];
    }
}
