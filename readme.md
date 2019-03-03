Simple tracking api
====

Overview

## Description
This is simple tracking api.
when user send http://localhost/private84/testTracking/1.0.0/pixel,
it can add user picture information


## Requirement
docker for mac 2.0.0.3

## Usage
`docker-compose up`
then, you can access 'http://localhost/private84/testTracking/1.0.0/pixel'.
and, It is including jwt auth function.
If you want to access it, you need to make user table and
get jwt token.


## Author

[MasahiroHanawa](https://github.com/MasahiroHanawa)