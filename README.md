# The Nacosvel Components

[![GitHub Tag](https://img.shields.io/github/v/tag/nacosvel/mitt)](https://github.com/nacosvel/mitt/tags)
[![Total Downloads](https://img.shields.io/packagist/dt/nacosvel/mitt?style=flat-square)](https://packagist.org/packages/nacosvel/mitt)
[![Packagist Version](https://img.shields.io/packagist/v/nacosvel/mitt)](https://packagist.org/packages/nacosvel/mitt)
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/nacosvel/mitt)](https://github.com/nacosvel/mitt)
[![Packagist License](https://img.shields.io/github/license/nacosvel/mitt)](https://github.com/nacosvel/mitt)

## Installation

You can install the package via [Composer](https://getcomposer.org/):

```bash
composer require nacosvel/mitt
```

## Usage

### Registering an Event Listener

Use the on method to register a listener for an event:

```php
$mitt = new \Nacosvel\Mitt\Emitter();

$mitt->on('user.registered', function ($user) {
    echo "User registered: {$user->name}";
});
```

### Emitting Events

Use the emit method to trigger an event:

```php
$user = new User(['name' => 'John Doe']);
$mitt->emit('user.registered', $user);
```

### Removing an Event Listener

Use the off method to remove a listener:

```php
$mitt->off('user.registered');
```

### One-Time Listener

Use the once method to register a listener that will be triggered only once:

```php
$mitt->once('user.updated', function ($user) {
    echo "User updated: {$user->name}";
});
```

## Example

```php
$mitt = new \Nacosvel\Mitt\Emitter();

$mitt->on('order.created', function ($order) {
    echo "Order created: {$order->id}";
});

$mitt->emit('order.created', ['id' => 123]);
```

## License

Nacosvel Mitt is made available under the MIT License (MIT). Please see [License File](LICENSE) for more information.
