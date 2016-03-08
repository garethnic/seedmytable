# SeedMyTable

This package creates a solid Laravel `DatabaseSeeder.php` file.

## Install

Via Composer

``` bash
$ composer require garethnic/seedmytable
```

Add the garethnic\ServiceProvider to your config/app.php providers array:

``` php
garethnic\seedmytable\seedmytableServiceProvider::class,
```

Then run the following command to copy over the `DatabaseSeeder.php` file.

``` bash
$ vendor:publish --force
```

This will overwrite your existing `DatabaseSeeder.php` file.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-packagist]: https://packagist.org/packages/garethnic/seedmytable
[link-downloads]: https://packagist.org/packages/garethnic/seedmytable
[link-author]: https://github.com/garethnic
