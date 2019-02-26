<?php
namespace App\Validation\Rules;

use Respect\Validation\Rules\AbstractRule;
use App\Models\UserTrackPixel;
use App\Validation\Exceptions\UniqueUserException;

class UniqueUser extends AbstractRule
{
    public function validate($input)
    {
        return UserTrackPixel::where('user_id',  $input)->count() === 0;
    }
}