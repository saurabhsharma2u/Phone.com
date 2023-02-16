<?php

namespace PhoneDotCom\Requests\Accounts;

use PhoneDotCom\Requests\Request;
use Sammyjo20\Saloon\Constants\Saloon;

class ListAccountRequest extends Request
{


    /**
     * Define the method that the request will use.
     *
     * @var string|null
     */
    protected ?string $method = Saloon::GET;

    /**
     * @return string
     */
    public function defineEndpoint(): string
    {
        return '/accounts';
    }


}
