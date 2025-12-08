# Version Compatibility Guide

This document summarizes which platform combinations are supported by `oscarafdev/migrations-generator` and its dependency `oscarafdev/laravel-4-generators`.

## oscarafdev/migrations-generator

| Release tag | Date       | PHP constraint                     | Laravel constraint                    | Notes |
|-------------|------------|------------------------------------|---------------------------------------|-------|
| 2.0.17      | 2020-03-27 | ^7.2                               | ^6.0 &#124;&#124; ^7.0                | Matches Laravel 6/7 requirements. |
| 2.0.18      | 2020-04-09 | ^7.2                               | ^6.0 &#124;&#124; ^7.0                | Same as 2.0.17. |
| 2.0.19      | 2020-05-05 | ^7.2                               | ^6.0 &#124;&#124; ^7.0                | Same as 2.0.17. |
| 2.0.20      | 2020-05-18 | ^7.2                               | ^5.0 &#124;&#124; ^6.0 &#124;&#124; ^7.0 | Extends backwards to Laravel 5.x. |
| 2.0.21      | 2020-05-18 | ^7.0                               | ^5.0 &#124;&#124; ^6.0 &#124;&#124; ^7.0 | PHP 7.0/7.1 remain supported. |
| 2.0.22      | 2020-08-28 | ^7.0                               | ^5.0 &#124;&#124; ^6.0 &#124;&#124; ^7.0 | Maintenance release. |
| 2.0.23      | 2020-08-28 | ^7.0                               | ^5.0 &#124;&#124; ^6.0 &#124;&#124; ^7.0 | Adds Laravel 7 fixes. |
| 2.0.24      | 2021-01-25 | ^5.6 &#124;&#124; ^7.0 &#124;&#124; ^8.0 | ^5.0 &#124;&#124; ^6.0 &#124;&#124; ^7.0 &#124;&#124; ^8.0 | First release with Laravel 8. |
| 9.0.0       | 2025-07-12 | ^8.2                               | ^9.0                                   | Laravel 9 compatibility line; depends on `laravel-4-generators` 9.x. |
| 10.0.0      | 2025-07-12 | ^8.1                               | ^10.0                                  | Laravel 10 line; depends on `laravel-4-generators` 10.x. |
| 11.0.0      | 2025-07-12 | ^8.2                               | ^11.0                                  | Laravel 11 line; depends on `laravel-4-generators` 11.x. |

`master` tracks the latest development (currently Laravel 11). For long-term support on a particular Laravel major, use the matching `laravel-<major>.x` branch (e.g., `laravel-10.x`) and tags (`10.y.z`).

## oscarafdev/laravel-4-generators

| Release / Branch    | PHP constraint | Laravel constraint | Notes |
|---------------------|----------------|--------------------|-------|
| 11.0.0 (`laravel-11.x`) | ^8.2        | ^11.0 | Use for Laravel 11 installs. |
| 10.0.0 (`laravel-10.x`) | ^8.1        | ^10.0 | Use for Laravel 10 installs. |
| 9.0.0 (`laravel-9.x`) | ^8.0.2        | ^9.0 | Use for Laravel 9 installs. |
| Legacy 2.x (2.0.24) | ^5.6 &#124;&#124; ^7.0 &#124;&#124; ^8.0 | ^5.0 &#124;&#124; ^6.0 &#124;&#124; ^7.0 &#124;&#124; ^8.0 | Keep for older apps. |

## Next steps

- Add automated verification for MariaDB/MySQL permutations (see Docker env).
- When Laravel 10/11 support is ready, branch/tag accordingly and append new rows here.
