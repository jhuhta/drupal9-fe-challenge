# Base setup for Drupal 9

This project sets up a [Lando](https://lando.dev) project that can be used as
a Drupal 9 project base. A very minimal setup is defined for simplicity.

To get it started:
- `lando start`

If you don't have Lando installed, get it first from https://lando.dev/download/.

That will also run `composer install`, but should you change `composer.json`
afterwards, do remember to use `lando composer install` or
`lando composer require` etc. to run Composer inside the Lando container.

To install Drupal, the necessary settings files are included so just:
- `lando drush si minimal` (or any other profile that you'd like)
