# Laravel Package Start Toolkit


A simple toolkit to KickStart laravel package development with [Laravel Packager](https://github.com/Jeroen-G/laravel-packager)


## Install

Via Composer

``` bash 
    $ composer require jeroen-g/laravel-packager
```

Then add the service `jeroen-g/laravel-packager` provider in config/app.php:

``` bash
    JeroenG\Packager\PackagerServiceProvider::class,
```

Then run the following php artisan commands

```bash

php artisan packager:get https://github.com/shawnsandy/PkgStart MyVendor MyPackage

```

Go to `packages\MyVendor\MyPAckage` to and start coding your package, see [Laravel Packager](https://github.com/Jeroen-G/laravel-packager) for more info and options.



## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email shawnsandy04@gmail.com instead of using the issue tracker.

## Credits

- [:author_name][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
