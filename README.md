# Storage

[![Total Downloads](https://img.shields.io/packagist/dt/bpartner/storage.svg?style=popout-square)](https://packagist.org/packages/bpartner/storage)
[![Latest Stable Version](https://img.shields.io/packagist/v/bpartner/storage.svg?style=popout-square)](https://packagist.org/packages/bpartner/storage)
[![PHP version](https://img.shields.io/packagist/php-v/bpartner/storage.svg?style=popout-square)](https://packagist.org/packages/bpartner/storage)
[![](https://img.shields.io/github/license/bpartner/storage.svg?style=popout-square)](https://github.com/bpartner/storage)

### Storage for global variable.
Save global variables as an array and access this array from anywhere in the program.

An interface is provided for implementing storage on disk or in a database, such as a sqlite.

## Install with composer

```bash
$ composer require bpartner/storage
```

## Usage
Save variable

```php
<?php
use Bpartner\Storage\StorageInMemory;

$key = 'user';
$value = [
    'first_name' => 'John',
    'last_name'  => 'Doe',
    'email'      => 'jdoe@mail.com'
];
StorageInMemory::setParam($key, $value);
```

Get variable

```php
<?php
use Bpartner\Storage\StorageInMemory;

$user = StorageInMemory::getParam('user');

echo $user['first_name'];
```
