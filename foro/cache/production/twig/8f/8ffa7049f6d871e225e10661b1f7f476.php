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

/* navbar_bread.html */
class __TwigTemplate_13ca85115a3bcb3d2bef75a18e0c4639 extends \Twig\Template
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
        echo "\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 2
        $context["MICRODATA"] = "itemtype=\"https://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        // line 3
        echo "\t\t";
        $context["navlink_position"] = 1;
        // line 4
        echo "\t\t";
        // line 5
        echo "
\t\t<li class=\"breadcrumbs\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">

\t\t\t";
        // line 8
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 9
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo ($context["L_SITE_HOME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t";
        }
        // line 11
        echo "
\t\t\t";
        // line 12
        // line 13
        echo "\t\t\t\t<span class=\"crumb\" ";
        echo ($context["MICRODATA"] ?? null);
        echo "><a itemprop=\"item\" href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo ($context["L_INDEX"] ?? null);
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></span>

\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navlinks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navlink"]) {
            // line 16
            echo "\t\t\t\t";
            $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 16))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 16)));
            // line 17
            echo "\t\t\t\t";
            $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 17))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 17)));
            // line 18
            echo "
\t\t\t\t";
            // line 19
            // line 20
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            if (twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 20)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 20);
            }
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["NAVLINK_LINK"] ?? null);
            echo "\"><span itemprop=\"name\">";
            echo ($context["NAVLINK_NAME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t";
            // line 21
            // line 22
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
\t\t\t";
        // line 24
        // line 25
        echo "\t\t</li>
\t\t
\t\t";
        // line 27
        // line 28
        echo "
\t\t";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SEARCHBAR", [], "any", false, false, false, 29) == "navigation")) {
            // line 30
            echo "\t\t";
            // line 31
            echo "\t\t\t
\t\t";
            // line 32
            if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
                // line 33
                echo "\t\t<li id=\"search-box\" class=\"search-box search-header search-box-headbar\">
\t\t\t<form action=\"";
                // line 34
                echo ($context["U_SEARCH"] ?? null);
                echo "\" method=\"get\" id=\"search\">
\t\t\t<fieldset>
\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
                // line 36
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_KEYWORDS");
                echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
                echo ($context["SEARCH_WORDS"] ?? null);
                echo "\" placeholder=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_MINI");
                echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
                // line 37
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 38
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
                // line 40
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button button-search-end\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 41
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "</span>
\t\t\t\t</a>
\t\t\t\t";
                // line 43
                echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</li>
\t\t";
            }
            // line 48
            echo "\t\t";
            // line 49
            echo "\t\t";
        }
        // line 50
        echo "\t\t";
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 51
            echo "\t\t<li class=\"rightside responsive-search\">
\t\t\t\t<a href=\"";
            // line 52
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 53
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 57
        echo "\t</ul>";
    }

    public function getTemplateName()
    {
        return "navbar_bread.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 57,  207 => 53,  201 => 52,  198 => 51,  195 => 50,  192 => 49,  190 => 48,  182 => 43,  177 => 41,  171 => 40,  166 => 38,  162 => 37,  154 => 36,  149 => 34,  146 => 33,  144 => 32,  141 => 31,  139 => 30,  137 => 29,  134 => 28,  133 => 27,  129 => 25,  128 => 24,  125 => 23,  119 => 22,  118 => 21,  102 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  88 => 15,  71 => 13,  70 => 12,  67 => 11,  54 => 9,  52 => 8,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_bread.html", "");
    }
}
