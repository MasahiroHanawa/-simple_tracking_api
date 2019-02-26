<?php
namespace App\Services;

interface UserTrackPixelServiceInterface
{
    public function validate($request);

    public function register($params);
}