# Laravel Migrations Generator Laravel 5/6/7/8/9/10
[![Latest Stable Version](https://poser.pugx.org/oscarafdev/migrations-generator/v/stable)](https://packagist.org/packages/oscarafdev/migrations-generator)
[![Monthly Downloads](https://poser.pugx.org/oscarafdev/migrations-generator/d/monthly)](//packagist.org/packages/oscarafdev/migrations-generator)
[![License](https://poser.pugx.org/oscarafdev/migrations-generator/license)](https://packagist.org/packages/oscarafdev/migrations-generator)

Generate Laravel Migrations from an existing database, including indexes and foreign keys!

# Versioning & compatibility

| Branch / Tag  | Laravel support | PHP support | Notes |
|---------------|-----------------|-------------|-------|
| `laravel-10.x` (`10.0.0`) | 10.x | >= 8.1 | New line for Laravel 10 projects. `composer require oscarafdev/migrations-generator:^10.0`. |
| `laravel-9.x` (`9.0.0`) | 9.x | >= 8.2 | Use for Laravel 9. |
| Legacy `2.x` (`2.0.24`) | 5.x – 8.x | ^5.6 &#124;&#124; ^7.0 &#124;&#124; ^8.0 | Last release for older apps (ships with the legacy generator dependency). |

Each Laravel major will get its own maintenance branch/tag series (e.g. `laravel-11.x` → `11.y.z`). See `doc/versions.md` for the full compatibility matrix.

# Contact

https://t.me/h0rnero


## Laravel 6/7/8/9/10 installation

The recommended way to install this is through composer:

```bash
composer require oscarafdev/migrations-generator --dev
```

In Laravel 5.5+ the service providers will automatically get registered. 

## Usage

To generate migrations from a database, you need to have your database setup in Laravel's Config.

Run `php artisan migrate:generate` to create migrations for all the tables, or you can specify the tables you wish to generate using `php artisan migrate:generate table1,table2,table3,table4,table5`. You can also ignore tables with `--ignore="table3,table4,table5"`

Laravel Migrations Generator will first generate all the tables, columns and indexes, and afterwards setup all the foreign key constraints. So make sure you include all the tables listed in the foreign keys so that they are present when the foreign keys are created.

You can also specify the connection name if you are not using your default connection with `--connection="connection_name"`

Run `php artisan help migrate:generate` for a list of options.

Check out Chung Tran's blog post for a quick step by step introduction: [Generate Migrations from an existing database in Laravel 4](http://codingtip.blogspot.com/2014/04/laravel-4-generate-migration-existed-dabase-laravel-4.html)

## Changelog

Changelog for Laravel Migrations Generator

### Jan 2021: v2.0.24
* Support for Laravel 8
* Fixed a issue where double single quotes were generated

### Ago 2020: v2.0.23
* Added support for precisions in timestamp.
* Fixed an issue with the text type.
* Fixed other reported bugs

### May 2020: v2.0.19
* Support for Laravel 7

## Thank You

Thanks to Jeffrey Way for his amazing Laravel-4-Generators package. This package depends greatly on his work.

## Contributors

Bernhard Breytenbach ([@BBreyten](https://twitter.com/BBreyten))

Oscar Fernandez ([@oscarafdev](https://www.linkedin.com/in/oscarafdev/))

oscarafdev@gmail.com

## License

The Laravel Migrations Generator is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
