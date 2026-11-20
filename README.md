# TFA7 — Ember Café Account Forms

Laravel 12 implementation of IT0049 TFA7, built from the provided TFA6 POS project.

## Features

- Create and edit customer accounts with required name and valid, unique email validation.
- Create and edit user accounts with required, unique usernames.
- Preserve submitted values and display Laravel validation errors.
- Validate profile images up to 2 MB, prepare 240 × 240 JPEG thumbnails with Intervention Image, store them on the public disk, and save only the path.
- Display uploaded avatars with an initials placeholder when no image exists.

## Setup

Requirements: PHP 8.2 or newer with SQLite, GD, fileinfo, mbstring, and OpenSSL; Composer 2.

```sh
composer install
copy .env.example .env
php artisan key:generate
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
php artisan migrate:fresh --seed
php artisan storage:link
php artisan serve --port=8007
```

The official Intervention Image sources are retained under `packages/` so the project remains reproducible when Packagist is unavailable.

## Verification

```sh
php artisan test
php artisan route:list --except-vendor
```
