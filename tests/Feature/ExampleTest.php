<?php

use PhoneDotCom\PhoneDotCom;
use PhoneDotCom\Requests\Accounts\GetAccountRequest;
use PhoneDotCom\Requests\Accounts\ListAccountRequest;

it('test', function () {
    $connector = new PhoneDotCom('bearer-token');
    $request = $connector->request(new ListAccountRequest());
    $response = $request->send()->json();

    expect($response)->toBeArray();
});
it('get account', function () {
    $connector = new PhoneDotCom('bearer-token');
    $request = $connector->request(new GetAccountRequest(1234));
    $response = $request->send();
    expect($response->dto())->toHaveKeys(['name','id','username','password','timezone']);
});

it('test in collection', function () {
    $a = new PhoneDotCom('bearer-token');
    $response = $a->accounts()->ListAccounts();
});

it('extension List', function () {
    $a = new PhoneDotCom('bearer-token');
    $response = $a->extensions()->list(2582388, 123);
    print_r($response);
});

it('create call', function () {
    $a = new PhoneDotCom('bearer-token');
    $response = $a->calls()->create(
        voip_id: 1336387,
        caller_caller_id: '+17148641234',
        callee_phone_number: '+17146001234',
        caller_extension: 1234567,
        callee_caller_id: '+17148641234'
    );

})->only();
