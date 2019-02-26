<?php
namespace App\Controllers;
use Psr\Container\ContainerInterface;

class Controller implements ControllerInterface
{
    protected $container;

    public function __construct(
        ContainerInterface $container
    ) {
        $this->container = $container;
    }

    public function setStatus($result) {
        if (is_bool($result) && $result == true) {
            $status = 201;
        } elseif ($result) {
            $status = 401;
        } else {
            $status = 400;
        }
        return $status;
    }

    public function setResponse($result) {
        if (is_bool($result) && $result == true) {
            $response = 'data saved';
        } elseif ($result) {
            $response = 'an existing item already exists';
        } else {
            $response = 'invalid input, object invalid';
        }
        return $response;
    }
}