<?php

namespace Bearcodi\Utilities\Image;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
