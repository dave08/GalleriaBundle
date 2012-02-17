<?php

namespace Excell\GalleriaBundle\Imagine;

use Imagine\Image\Point;
use Imagine\Image\ImagineInterface;
use Imagine\Filter\Basic\Paste;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;

class WatermarkFilterLoader implements LoaderInterface
{
	private $imagine;

	public function __construct(ImagineInterface $imagine)
	{
		$this->imagine = $imagine;
	}

    public function load(array $options = array())
    {
        $watermark = $this->imagine->open($options['imagePath']);

        return new Paste($watermark, new Point(50, 50));
    }
}
