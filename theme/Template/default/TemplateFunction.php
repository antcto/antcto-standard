<?php
/**
 * Project name: antcto.
 * Created by: mike
 * Date: 2019-04-04
 * Time: 01:06
 */

namespace AntCTO\Theme;


use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class TemplateFunction extends AbstractExtension
{
    public function getFunctions()
    {
        return array(
            new TwigFunction('test', array($this, 'test')),
        );
    }

    public function test()
    {
        return 'this is a test.';
    }
}