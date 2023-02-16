<?php

namespace PhoneDotCom\Collections;

use Sammyjo20\Saloon\Http\RequestCollection;

use PhoneDotCom\Requests\Extensions\ListExtensionRequest;

class ExtensionsCollection extends RequestCollection
{
    public function list(int $voip_id,?string $extension_id): array
    {
        $request = $this->connector->request(new ListExtensionRequest($voip_id,$extension_id));

        return $request->send()->json();
    }
}
