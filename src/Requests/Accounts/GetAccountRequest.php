<?php

namespace PhoneDotCom\Requests\Accounts;

use PhoneDotCom\Requests\Request;
use Sammyjo20\Saloon\Constants\Saloon;


class GetAccountRequest extends Request
{
    protected ?string $method = Saloon::GET;



    public function __construct(
        public int $voip_id
    ) {
    }

    public function defineEndpoint(): string
    {
        return '/accounts/'.$this->voip_id;
    }

}
