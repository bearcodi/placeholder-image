<?php

namespace spec\Bearcodi\Utilities\Image;

use Bearcodi\Utilities\Image\Placeholder;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlaceholderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Placeholder::class);
    }
}
