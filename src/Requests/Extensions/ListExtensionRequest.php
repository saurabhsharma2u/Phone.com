<?php

namespace PhoneDotCom\Requests\Extensions;

use PhoneDotCom\Requests\Request;
use Sammyjo20\Saloon\Constants\Saloon;

class ListExtensionRequest extends Request
{
    protected ?string $method = Saloon::GET;



    public function __construct(
        public int $voip_id,
        public ?string $extension_id
    ) {
    }

    public function defineEndpoint(): string
    {
        $url = '/accounts/'.$this->voip_id.'/extensions/';
        if ($this->extension_id) {
            $url .= '?filters[extension]='.$this->extension_id;
        }

        return $url;
    }
}
