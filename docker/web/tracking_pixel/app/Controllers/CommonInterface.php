<?php
namespace App\Controllers;
use Slim\Http\Request;
use Slim\Http\Response;

interface CommonInterface
{
    public function post(Request $request, Response $response);
}