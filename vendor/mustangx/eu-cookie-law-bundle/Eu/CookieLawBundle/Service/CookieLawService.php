<?php

namespace Eu\CookieLawBundle\Service;

use Eu\CookieLawBundle\Service\CookieLawInterface;

class CookieLawService implements CookieLawInterface
{
    protected $template;

    /**
     *
     * @var \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine
     */
    protected $templating;

    public function __construct($templating, $template)
    {
        $this->templating = $templating;
        $this->template   = $template;
    }

    public function render(array $data = array())
    {
        return $this->templating->render($this->template, $data);
    }

}
