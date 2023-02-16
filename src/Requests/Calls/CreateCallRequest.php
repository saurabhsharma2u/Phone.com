<?php

namespace PhoneDotCom\Requests\Calls;

use PhoneDotCom\Requests\Request;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;

class CreateCallRequest extends Request
{
    use HasJsonBody;
    protected ?string $method = Saloon::POST;



    public function __construct(
        public int $voip_id,
        public string $caller_caller_id,
        public string $callee_phone_number,
        public string $callee_caller_id,
        public int $caller_extension
    ) {
    }

    public function defineEndpoint(): string
    {
        return 'accounts/'.$this->voip_id.'/calls';
    }
    public function defaultData(): array
    {
        return [
            'caller_caller_id' => $this->caller_caller_id,
            'callee_phone_number' => $this->callee_phone_number,
            'callee_caller_id' => $this->caller_caller_id,
            'caller_extension' => $this->caller_extension,
        ];
    }
}
