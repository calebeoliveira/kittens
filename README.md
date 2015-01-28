# kittens
PHP ASCII random kitten generator.

Usage:

First, require it with composer:
```json
	"require": {
		"calebeoliveira/kittens": "dev-master"
	}
```
Then, call it:
```php
require 'vendor/autoload.php';

echo Kitten::get();
// Output: ~(=^‥^)/
```
