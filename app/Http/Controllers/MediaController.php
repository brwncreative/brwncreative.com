<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public static function saveFile($stream, $filename = '?', $destination = '?')
    {
        // Remove filename old ext
        $fn = function () use ($filename) {
            return str_replace(['.jpg', '.jpeg', '.png', '.webp'], '', $filename);
        };
        // Create from byte stream
        $image = imagecreatefromstring($stream);
        // Scale Image down
        $scaled = imagescale($image, (imagesx($image) - imagesx($image) * .35));
        imagedestroy($image);
        // Convert to Webp
        imagewebp($scaled, base_path('resources/' . $fn() . '.webp'), 75);
        imagedestroy($scaled);
    }

    public static function test()
    {
        fopen(base_path('.env'), 'r');
    }
}
