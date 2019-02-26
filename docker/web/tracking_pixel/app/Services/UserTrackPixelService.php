<?php
namespace App\Services;

use App\Models\UserTrackPixel;
use Respect\Validation\Validator as V;
//use App\Validator\UniqueUser;
use Psr\Container\ContainerInterface;

class UserTrackPixelService implements UserTrackPixelServiceInterface
{
    protected $container;
    protected $userTrackPixel;

    public function __construct(
        ContainerInterface $container,
        UserTrackPixel $userTrackPixel
    ) {
        $this->container = $container;
        $this->userTrackPixel = $userTrackPixel;
    }

    public function validate($request) {
        return $this->container->get('validator')->validate($request, [
            'pixelType' => V::in(['jpg', 'png', 'gif'])->notEmpty(),
            'userId' => V::uniqueUser()->numeric()->notEmpty(),
            'occuredOn' => V::numeric()->notEmpty(),
            'portalId' => V::numeric()->notEmpty(),
        ]);

    }

    public function register($params) {
        $this->userTrackPixel->pixel_type = $params['pixelType'];
        $this->userTrackPixel->user_id = $params['userId'];
        $this->userTrackPixel->occured_on = $params['occuredOn'];
        $this->userTrackPixel->portal_id = $params['portalId'];
        return $this->userTrackPixel->saveOrFail();
    }


}