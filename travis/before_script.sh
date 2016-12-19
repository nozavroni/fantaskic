#!/bin/bash

echo 'date.timezone = "America/Los_Angeles"' >> ~/.phpenv/versions/$(phpenv version-name)/etc/conf.d/travis.ini

cp phpunit.xml.dist phpunit.xml