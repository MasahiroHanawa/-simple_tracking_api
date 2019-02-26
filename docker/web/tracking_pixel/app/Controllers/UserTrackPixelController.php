<?php
namespace App\Controllers;

use App\Services\UserTrackPixelService;
use App\Models\UserTrackPixel;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class UserTrackPixelController extends Controller implements CommonInterface
{
    protected $container;
    protected $userTrackPixelService;
    protected $userTrackPixel;

    public function __construct(
        ContainerInterface $container
    ) {
        $this->container = $container;
        $this->userTrackPixel = new UserTrackPixel;
        $this->userTrackPixelService = new UserTrackPixelService($this->container, $this->userTrackPixel);
    }

    public function post(Request $request, Response $response) {
        $validate = $this->userTrackPixelService->validate($request);
        if ($validate->isValid()) {
            $result = $this->userTrackPixelService->register($request->getParams());
        } else {
            $result = $validate->getErrors();
        }
        return $response->withJson($this->setResponse($result), $this->setStatus($result));
    }
}