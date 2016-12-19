#!/bin/bash

# The php-coveralls package does not work for PHP7
if [[ $TRAVIS_PHP_VERSION != "7.0" ]]; then
  vendor/bin/coveralls -v
  wget https://scrutinizer-ci.com/ocular.phar
  php ocular.phar code-coverage:upload --format=php-clover ./build/logs/clover.xml
fi
