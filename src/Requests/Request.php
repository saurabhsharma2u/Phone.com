<?php

namespace PhoneDotCom\Requests;

use PhoneDotCom\PhoneDotCom;
use Sammyjo20\Saloon\Http\SaloonRequest;

class Request extends SaloonRequest
{
    /**
     * @var string|null
     */
    protected ?string $connector = PhoneDotCom::class;
}
