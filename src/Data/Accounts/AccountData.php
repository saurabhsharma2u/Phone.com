<?php
namespace PhoneDotCom\Data\Accounts;

use Sammyjo20\Saloon\Http\SaloonResponse;
use Spatie\DataTransferObject\DataTransferObject;

class AccountData extends DataTransferObject
{
    public function __construct(
        public int $id,
        public string $name,
        public string $username,
        public string $password,
        public string $timezone,
        public string $directory_type,
        public string $dial_prefix,
        public array $features,
        public array $hold_music,
        public int $default_voip_phone_id,
        public array $contact
    ) {
    }

    public static function convert(SaloonResponse $response): self
    {
        $data = $response->json();

        return new static(
            $data['id'],
            $data['name'],
            $data['username'],
            $data['password'],
            $data['timezone'],
            $data['directory_type'],
            $data['dial_prefix'],
            $data['features'],
            $data['hold_music'],
            $data['default_voip_phone_id'],
            $data['contact']
        );
    }
}
