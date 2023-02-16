<?php

namespace PhoneDotCom\Collections;

use Sammyjo20\Saloon\Http\RequestCollection;
use PhoneDotCom\Requests\Accounts\GetAccountRequest;
use PhoneDotCom\Requests\Accounts\ListAccountRequest;

class AccountsCollection extends RequestCollection
{
    public function ListAccounts(): array
    {
        $request = $this->connector->request(new ListAccountRequest());

        return $request->send()->json();
    }

    /**
     * @param int $voip_id
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     * @throws \Sammyjo20\Saloon\Exceptions\SaloonException
     */
    public function getAccount(int $voip_id): array
    {
        $request = $this->connector->request(new GetAccountRequest($voip_id));

        return $request->send()->json();
    }
}
