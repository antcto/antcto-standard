<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* TemplateFunction.php */
class __TwigTemplate_673d1297f42a57a55c385e65db7474d0d10e2a6ece375454695e84299e08c7ea extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "TemplateFunction.php"));

        // line 1
        echo "<?php
/**
 * Project name: antcto.
 * Created by: mike
 * Date: 2019-04-04
 * Time: 01:06
 */

namespace AntCTO\\Theme;


use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class TemplateFunction extends AbstractExtension
{
    public function getFunctions()
    {
        return array(
            new TwigFunction('test', array(\$this, 'test')),
        );
    }

    public function test()
    {
        return 'this is a test.';
    }
}";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "TemplateFunction.php";
    }

    public function getDebugInfo()
    {
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Project name: antcto.
 * Created by: mike
 * Date: 2019-04-04
 * Time: 01:06
 */

namespace AntCTO\\Theme;


use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class TemplateFunction extends AbstractExtension
{
    public function getFunctions()
    {
        return array(
            new TwigFunction('test', array(\$this, 'test')),
        );
    }

    public function test()
    {
        return 'this is a test.';
    }
}", "TemplateFunction.php", "/private/var/www/projects/xiranst-projects/antcto/theme/Template/default/TemplateFunction.php");
    }
}
