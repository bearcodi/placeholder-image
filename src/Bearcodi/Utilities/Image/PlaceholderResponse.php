<?php

namespace Bearcodi\Utilities\Image;

class PlaceholderResponse
{
    public static function make()
    {
        return new Placeholder();
    }

    protected function getRequestParams()
    {
    }
}
