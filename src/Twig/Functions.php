<?php

namespace Bolt\Extension\Ohlandt\UserProfiles\Twig;

use Bolt\Extension\Ohlandt\UserProfiles\Avatar\UrlResolver;
use Silex\Application;

class Functions
{
    /**
     * @var Application
     */
    private $app;
    /**
     * @var array
     */
    private $config;

    public function __construct(Application $app, array $config)
    {
        $this->app = $app;
        $this->config = $config;
    }

    public function avatar(array $user, $gravatar_size = 100, $fallback = null)
    {
        if ($fallback) {
            $this->config['avatars']['fallback_url'] = $fallback;
        }

        $resolver = new UrlResolver($this->app, $this->config);

        return $resolver->resolve($user, $gravatar_size);
    }

    public function profileLink(array $user)
    {

    }

    public function hasProfile(array $user)
    {

    }
}