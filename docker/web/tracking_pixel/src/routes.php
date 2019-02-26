<?php

use App\Controllers\UserTrackPixelController;

// Routes

$app->group('/private84/testTracking/1.0.0', function () use ($app) {
    $app->post('/pixel', UserTrackPixelController::class . ':post');
    $app->post('/token', UserTrackPixelController::class . ':token');
});