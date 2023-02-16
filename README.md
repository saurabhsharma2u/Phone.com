# Phone.com SDK
###(WIP)


## Installation

```bash
composer require saurabhsharma/phonedotcom
```

## Usage

```php
$request = new PhoneDotCom('bearer-token');

$request->accounts()->ListAccounts();
$request->accounts()->getAccount($voip_id);

```


## Credits

- [Saurabh Sharma](https://github.com/SaurabhSharma2u)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

