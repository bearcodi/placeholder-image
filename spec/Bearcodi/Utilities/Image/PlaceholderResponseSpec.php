<?php

namespace spec\Bearcodi\Utilities\Image;

use Bearcodi\Utilities\Image\PlaceholderResponse;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlaceholderResponseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PlaceholderResponse::class);
    }
    
}
