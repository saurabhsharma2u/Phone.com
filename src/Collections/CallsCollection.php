<?php

namespace PhoneDotCom\Collections;

use Sammyjo20\Saloon\Http\RequestCollection;
use PhoneDotCom\Requests\Calls\CreateCallRequest;
use Sammyjo20\Saloon\Traits\Plugins\HasFormParams;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;

class CallsCollection extends RequestCollection
{

    public function create(int $voip_id, string $caller_caller_id, string $callee_phone_number, int $caller_extension, string $callee_caller_id): array
    {
        $request = $this->connector->request(new CreateCallRequest(
            voip_id: $voip_id,
            caller_caller_id: $caller_caller_id,
            callee_phone_number: $callee_phone_number,
            callee_caller_id: $callee_caller_id,
            caller_extension: $caller_extension
        ));


        return $request->send()->json();
        print_r($a->json());
        print_r($a->body());
    }
}
