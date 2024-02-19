## Description
This package is useful for data encryption and decryption

## Installation
This package can be installed via composer

``` bash
composer require thegiant/aes:dev-master@dev
```

## Usage - Example
```php
<?php 
use Thegiant/aes/AES;

if (!function_exists('aes_decrypt')) {
    function aes_decrypt($encrypted_data) {
        return AES::decrypt($encrypted_data, env('AES_KEY'), env('AES_IV'));
    }
}

if (!function_exists('aes_encrypt')) {
    function aes_encrypt($encrypted_data) {
        return AES::encrypt($encrypted_data, env('AES_KEY'), env('AES_IV'));
    }
}
```
## Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information
