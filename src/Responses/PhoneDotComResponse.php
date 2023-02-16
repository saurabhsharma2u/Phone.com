<?php

namespace PhoneDotCom\Responses;

use Sammyjo20\Saloon\Http\SaloonResponse;
use PhoneDotCom\Exceptions\PhoneDotComRequestException;

class PhoneDotComResponse extends SaloonResponse
{
    /**
     * Create an exception if a server or client error occurred.
     *
     * @return PhoneDotComRequestException
     */
    public function toException(): PhoneDotComRequestException
    {
        if ($this->failed()) {
            $body = $this->response?->getBody()?->getContents();

            return new PhoneDotComRequestException($this, $body, 0, $this->getGuzzleException());
        }
    }
}
