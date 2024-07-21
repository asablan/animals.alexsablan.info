<?php

namespace App\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use League\Glide\Urls\UrlBuilderFactory;

class GlideExtension extends AbstractExtension
{
    protected $urlBuilder;

    public function __construct()
    {
        $this->urlBuilder = UrlBuilderFactory::create('/glide.php');
    }

    public function getFilters()
    {
        return [
            new TwigFilter('glide', [$this, 'glideFilter']),
        ];
    }

    public function glideFilter($path, $params = [])
    {
        // Ensure the 'w' parameter is not set if empty
        if (isset($params['w']) && $params['w'] === '') {
            unset($params['w']);
        }

        return $this->urlBuilder->getUrl($path, $params);
    }
}
