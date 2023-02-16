<?php

namespace PhoneDotCom;

use Sammyjo20\Saloon\Http\SaloonConnector;
use PhoneDotCom\Collections\CallsCollection;
use PhoneDotCom\Responses\PhoneDotComResponse;
use PhoneDotCom\Collections\AccountsCollection;
use PhoneDotCom\Collections\CallLogsCollection;
use Sammyjo20\Saloon\Traits\Plugins\AcceptsJson;
use PhoneDotCom\Collections\ExtensionsCollection;

/**
 *
 * @method AccountsCollection accounts
 * @method CallLogsCollection callLogs
 * @method CallsCollection calls
 * @method ExtensionsCollection extensions
 */
class PhoneDotCom extends SaloonConnector
{
    use AcceptsJson;

    /**
     * Define the base URL for the API
     *
     * @var string
     */
    protected string $apiBaseUrl = 'https://api.phone.com/v4';
    protected string $token;

    /**
     * Custom response that all requests will return.
     *
     * @var string|null
     */
    protected ?string $response = PhoneDotComResponse::class;



    /**
     * Define the base URL of the API.
     *
     * @return string
     */
    public function defineBaseUrl(): string
    {
        return $this->apiBaseUrl;
    }

    /**
     * @param string|null $baseUrl
     */
    public function __construct(string $token, string $baseUrl = null)
    {
        $this->withTokenAuth($token);

        if (isset($baseUrl)) {
            $this->apiBaseUrl = $baseUrl;
        }
    }

    /**
     * Define any default headers.
     *
     * @return array
     */
    public function defaultHeaders(): array
    {
        return [];
    }

    /**
     * Define any default config.
     *
     * @return array
     */
    public function defaultConfig(): array
    {
        return [];
    }

    protected array $requests = [
       'accounts' => AccountsCollection::class,
        'calls' => CallsCollection::class,
        'callLogs' => CallLogsCollection::class,
        'extensions' => ExtensionsCollection::class,
    ];
}
