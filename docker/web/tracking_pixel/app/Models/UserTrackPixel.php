<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserTrackPixel extends Model
{
    protected $table = 'user_track_pixels';
    protected $fillable = [
        'pixel_type',
        'user_id',
        'occured_on',
        'portal_id',
    ];
}