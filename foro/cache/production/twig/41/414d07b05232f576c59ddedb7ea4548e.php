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

/* options.html */
class __TwigTemplate_0fa89fe5f5881d5da1354f9549a08c4f extends \Twig\Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        echo "<!--
";
        // line 2
        $value = "no";
        $context['definition']->set('SIDEBAR', $value);
        echo " Options: YES | NO
";
        // line 3
        $value = "no";
        $context['definition']->set('SOCIALBUTTONS', $value);
        echo " Options: YES | NO
";
        // line 4
        $value = "orange";
        $context['definition']->set('ACCENTCOLOR', $value);
        echo " Options: ORANGE | BLUE | GREEN | CYAN | VIOLET | CUSTOM
";
        // line 5
        $value = "yes";
        $context['definition']->set('COLORPICKER', $value);
        echo " Options: YES | NO
";
        // line 6
        $value = "ucp";
        $context['definition']->set('COLORPICKERPOSITION', $value);
        echo " Options: GLOBAL | UCP
";
        // line 7
        $value = "yes";
        $context['definition']->set('CUSTOMCOLORPICKERCOLOR', $value);
        echo " Options: YES | NO
";
        // line 8
        $value = "top";
        $context['definition']->set('SUBFORUM', $value);
        echo " Options: TOP | BOTTOM
";
        // line 9
        $value = "right";
        $context['definition']->set('PROFILE', $value);
        echo " Options: LEFT | RIGHT
";
        // line 10
        $value = "headbar";
        $context['definition']->set('SEARCHBAR', $value);
        echo " Options: NAVIGATION | HEADBAR

-->

";
    }

    public function getTemplateName()
    {
        return "options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  75 => 9,  70 => 8,  65 => 7,  60 => 6,  55 => 5,  50 => 4,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "options.html", "");
    }
}
