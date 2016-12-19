#!/bin/bash
composer install -n

# The php-coveralls package does not work for PHP7
if [[ $TRAVIS_PHP_VERSION != "7.0" ]]; then
  composer require --dev satooshi/php-coveralls:~0.7@dev
fi
