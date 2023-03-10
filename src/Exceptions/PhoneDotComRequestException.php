<?php

namespace PhoneDotCom\Exceptions;

use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Exceptions\SaloonRequestException;

class PhoneDotComRequestException extends SaloonRequestException
{
    /**
     * Retrieve the response.
     *
     * @return SaloonResponse
     */
    public function getResponse(): SaloonResponse
    {
        return $this->getSaloonResponse();
    }
}
