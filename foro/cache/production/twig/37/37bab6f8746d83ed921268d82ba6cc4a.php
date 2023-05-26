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

/* jumpbox.html */
class __TwigTemplate_e97c8ef16536844c385420ecdef0a028 extends \Twig\Template
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
        echo "<div class=\"action-bar actions-jump\">

\t";
        // line 3
        if (($context["S_VIEWTOPIC"] ?? null)) {
            // line 4
            echo "\t<p class=\"jumpbox-return\">
\t\t<a href=\"";
            // line 5
            echo ($context["U_VIEW_FORUM"] ?? null);
            echo "\" class=\"left-box arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" accesskey=\"r\">
\t\t\t<i class=\"icon fa-angle-";
            // line 6
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_FORUM");
            echo "</span>
\t\t</a>
\t</p>
\t";
        } elseif (        // line 9
($context["S_VIEWFORUM"] ?? null)) {
            // line 10
            echo "\t<p class=\"jumpbox-return\">
\t\t<a href=\"";
            // line 11
            echo ($context["U_INDEX"] ?? null);
            echo "\" class=\"left-box arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" accesskey=\"r\">
\t\t\t<i class=\"icon fa-angle-";
            // line 12
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_INDEX");
            echo "</span>
\t\t</a>
\t</p>
\t";
        } elseif (        // line 15
($context["SEARCH_TOPIC"] ?? null)) {
            // line 16
            echo "\t<p class=\"jumpbox-return\">
\t\t<a class=\"left-box arrow-";
            // line 17
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\" accesskey=\"r\">
\t\t\t<i class=\"icon fa-angle-";
            // line 18
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_TOPIC");
            echo "</span>
\t\t</a>
\t</p>
\t";
        } elseif (        // line 21
($context["S_SEARCH_ACTION"] ?? null)) {
            // line 22
            echo "\t<p class=\"jumpbox-return\">
\t\t<a class=\"left-box arrow-";
            // line 23
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">
\t\t\t<i class=\"icon fa-angle-";
            // line 24
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO_TO_SEARCH_ADV");
            echo "</span>
\t\t</a>
\t</p>
\t";
        }
        // line 28
        echo "
\t";
        // line 29
        if (($context["S_DISPLAY_JUMPBOX"] ?? null)) {
            // line 30
            echo "\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t<span onclick=\"openJumpbox()\">
\t\t\t<span title=\"";
            // line 32
            echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO");
            echo "\" class=\"button button-secondary\" style=\"float:right;\">
\t\t\t\t<i class=\"icon fa-level-up fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</span>
\t\t</span>
\t</div>
\t<div id=\"jumpbox-responsive\" class=\"overlay\">
\t\t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeJumpbox()\">&times;</a>
\t\t<div class=\"overlay-content\">
\t\t\t<ul role=\"menu\">
\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "jumpbox_forums", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 42
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "FORUM_ID", [], "any", false, false, false, 42) !=  -1)) {
                    // line 43
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "LINK", [], "any", false, false, false, 43);
                    echo "\" class=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "level", [], "any", false, false, false, 43)) {
                        echo "jumpbox-sub-link";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "S_IS_CAT", [], "any", false, false, false, 43)) {
                        echo "jumpbox-cat-link";
                    } else {
                        echo "jumpbox-forum-link";
                    }
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "level", [], "any", false, false, false, 43));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "<span class=\"spacer\"></span>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <span>";
                    if (twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "level", [], "any", false, false, false, 43)) {
                        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
                            echo "&#8626;";
                        } else {
                            echo "&#8627;";
                        }
                        echo " &nbsp;";
                    }
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "FORUM_NAME", [], "any", false, false, false, 43);
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"jumpbox responsive-hide dropdown-container dropdown-container-right";
            // line 49
            if ( !($context["S_IN_MCP"] ?? null)) {
                echo " dropdown-up";
            }
            echo " dropdown-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " dropdown-button-control\" id=\"jumpbox\">
\t\t<span title=\"";
            // line 50
            if ((($context["S_IN_MCP"] ?? null) && ($context["S_MERGE_SELECT"] ?? null))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_TOPICS_FROM");
            } elseif (($context["S_IN_MCP"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE_FORUM");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO");
            }
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t<i class=\"icon fa-level-up fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t
\t\t</span>
\t\t<div class=\"dropdown\">
\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "jumpbox_forums", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 58
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "FORUM_ID", [], "any", false, false, false, 58) !=  -1)) {
                    // line 59
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "LINK", [], "any", false, false, false, 59);
                    echo "\" class=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "level", [], "any", false, false, false, 59)) {
                        echo "jumpbox-sub-link";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "S_IS_CAT", [], "any", false, false, false, 59)) {
                        echo "jumpbox-cat-link";
                    } else {
                        echo "jumpbox-forum-link";
                    }
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "level", [], "any", false, false, false, 59));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "<span class=\"spacer\"></span>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <span>";
                    if (twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "level", [], "any", false, false, false, 59)) {
                        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
                            echo "&#8626;";
                        } else {
                            echo "&#8627;";
                        }
                        echo " &nbsp;";
                    }
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "FORUM_NAME", [], "any", false, false, false, 59);
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t";
        } else {
            // line 67
            echo "\t<br /><br />
\t";
        }
        // line 69
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 69,  271 => 67,  264 => 62,  258 => 61,  224 => 59,  221 => 58,  217 => 57,  201 => 50,  193 => 49,  188 => 46,  182 => 45,  148 => 43,  145 => 42,  141 => 41,  129 => 32,  125 => 30,  123 => 29,  120 => 28,  111 => 24,  103 => 23,  100 => 22,  98 => 21,  90 => 18,  84 => 17,  81 => 16,  79 => 15,  71 => 12,  65 => 11,  62 => 10,  60 => 9,  52 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jumpbox.html", "");
    }
}
