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

/* overall_header.html */
class __TwigTemplate_6854b8f6016f2940d7127e05ed46391d extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
<!-- Chrome, Firefox OS and Opera -->
<meta name=\"theme-color\" content=\"#171717\">
<!-- Windows Phone -->
<meta name=\"msapplication-navbutton-color\" content=\"#171717\">
<!-- iOS Safari -->
<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#171717\">
";
        // line 13
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 14
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 16
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 17
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 18
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 19
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 20
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 21
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 22
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 23
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 24
            echo "\t";
        }
        // line 26
        echo "
";
        // line 27
        if (($context["U_CANONICAL"] ?? null)) {
            // line 28
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 30
        echo "
";
        // line 31
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 32
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://cdn.jsdelivr.net/npm/webfontloader@1.6.28/webfontloader.min.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 47
        echo "<link href=\"";
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 48
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 49
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/css/hexagon.css\" rel=\"stylesheet\">
";
        // line 50
        $location = "options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("options.html", "overall_header.html", 50)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "ACCENTCOLOR", [], "any", false, false, false, 51) == "orange")) {
            // line 52
            echo "<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/orange.css\" rel=\"stylesheet\">
";
        }
        // line 54
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "ACCENTCOLOR", [], "any", false, false, false, 54) == "blue")) {
            // line 55
            echo "<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/blue.css\" rel=\"stylesheet\">
";
        }
        // line 57
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "ACCENTCOLOR", [], "any", false, false, false, 57) == "green")) {
            // line 58
            echo "<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/green.css\" rel=\"stylesheet\">
";
        }
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "ACCENTCOLOR", [], "any", false, false, false, 60) == "cyan")) {
            // line 61
            echo "<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/cyan.css\" rel=\"stylesheet\">
";
        }
        // line 63
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "ACCENTCOLOR", [], "any", false, false, false, 63) == "violet")) {
            // line 64
            echo "<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/violet.css\" rel=\"stylesheet\">
";
        }
        // line 66
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "ACCENTCOLOR", [], "any", false, false, false, 66) == "custom")) {
            // line 67
            echo "<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/custom.css\" rel=\"stylesheet\">
";
        }
        // line 69
        echo "<link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Roboto:normal,bold\" />

";
        // line 71
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 72
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 74
        echo "
";
        // line 75
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 76
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 78
        echo "
";
        // line 79
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 80
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">

";
        }
        // line 83
        echo "

<!--[if lte IE 9]>
\t<link href=\"";
        // line 86
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 89
        // line 90
        echo "
";
        // line 91
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 91);
        echo "

";
        // line 93
        // line 94
        echo "
</head>

<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 97
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">
";
        // line 98
        // line 99
        echo "\t
<div id=\"wrap\" class=\"wrap\">
";
        // line 101
        $location = "navbar_main.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_main.html", "overall_header.html", 101)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 102
        echo "\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>
\t
\t<div id=\"page-header\">
\t";
        // line 105
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "COLORPICKER", [], "any", false, false, false, 105) == "yes")) {
            // line 106
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "COLORPICKERPOSITION", [], "any", false, false, false, 106) == "global")) {
                // line 107
                echo "\t\t";
                if (($context["S_USER_LOGGED_IN"] ?? null)) {
                    // line 108
                    echo "\t\t<div id=\"slideout\">
\t\t\t <i class=\"icon fa-paint-brush fa-fw\" aria-hidden=\"true\" title=\"ColorSwitcher\"></i>
\t\t\t  <div id=\"slideout_inner\">
\t\t\t\t<a class=\"colorbutton colororange\" href=\"#\"></a>
\t\t\t\t<a class=\"colorbutton colorgreen\" href=\"#\"></a>
\t\t\t\t<a class=\"colorbutton colorblue\" href=\"#\"></a>
\t\t\t\t<a class=\"colorbutton colorcyan\" href=\"#\"></a>
\t\t\t\t<a class=\"colorbutton colorviolet\" href=\"#\"></a>
\t\t\t";
                    // line 116
                    if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "CUSTOMCOLORPICKERCOLOR", [], "any", false, false, false, 116) == "yes")) {
                        // line 117
                        echo "\t\t\t\t<a class=\"colorbutton colorcustom\" href=\"#\"></a>
\t\t\t";
                    }
                    // line 118
                    echo "\t
\t\t\t\t<a class=\"clearstorage\" href=\"#\" title=\"";
                    // line 119
                    echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
                    echo "\"><i class=\"icon fa-trash fa-fw icon-xl\"></i></a>
\t\t\t  </div>
\t\t</div>
\t\t";
                }
                // line 123
                echo "\t";
            }
            // line 124
            echo "\t";
        }
        // line 125
        echo "\t\t<div class=\"headerbar\" role=\"banner\">
\t
\t\t";
        // line 127
        // line 128
        echo "\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SEARCHBAR", [], "any", false, false, false, 128) == "headbar")) {
            // line 129
            echo "\t\t\t";
            // line 130
            echo "\t\t\t
\t\t\t";
            // line 131
            if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
                // line 132
                echo "\t\t\t<div id=\"search-box\" class=\"search-box search-header search-box-headbar\">
\t\t\t\t<form action=\"";
                // line 133
                echo ($context["U_SEARCH"] ?? null);
                echo "\" method=\"get\" id=\"search\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
                // line 135
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_KEYWORDS");
                echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
                echo ($context["SEARCH_WORDS"] ?? null);
                echo "\" placeholder=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_MINI");
                echo "\" />
\t\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
                // line 136
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 137
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "</span>
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"";
                // line 139
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button button-search-end\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 140
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t";
                // line 142
                echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
            }
            // line 147
            echo "\t\t\t";
            // line 148
            echo "\t\t\t";
        }
        // line 149
        echo "\t\t\t<div class=\"inner\">

\t\t\t<div id=\"site-description\" class=\"site-description\">
\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
        // line 152
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["U_SITE_HOME"] ?? null);
        } else {
            echo ($context["U_INDEX"] ?? null);
        }
        echo "\" title=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["L_SITE_HOME"] ?? null);
        } else {
            echo ($context["L_INDEX"] ?? null);
        }
        echo "\">
\t\t\t\t\t<span class=\"site_logo\"></span>
\t\t\t\t</a>\t\t\t\t<h1>";
        // line 154
        echo ($context["SITENAME"] ?? null);
        echo "</h1>
\t\t\t\t<p class=\"site-des\">";
        // line 155
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "</p>
\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 156
        echo $this->extensions['phpbb\template\twig\extension']->lang("SKIP");
        echo "</a></p>
\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t";
        // line 160
        // line 161
        echo "\t\t\t
\t\t</div>
\t\t
\t\t";
        // line 164
        // line 165
        echo "\t\t";
        $location = "navbar_bread.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_bread.html", "overall_header.html", 165)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 166
        echo "\t\t\t   ";
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SOCIALBUTTONS", [], "any", false, false, false, 166) == "yes")) {
            // line 167
            echo "\t";
            $location = "socialbuttons.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("socialbuttons.html", "overall_header.html", 167)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 168
            echo "\t";
        }
        // line 169
        echo "\t</div>

\t";
        // line 171
        // line 172
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>

\t<div id=\"page-body\" class=\"page-body\" role=\"main\">
\t";
        // line 176
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIDEBAR", [], "any", false, false, false, 176) == "yes")) {
            // line 177
            echo "\t<div class=\"page-body-inner\">
\t";
        }
        // line 179
        echo "
\t\t";
        // line 180
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 181
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 183
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 187
        echo "
\t\t";
        // line 188
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 188,  590 => 187,  580 => 183,  576 => 181,  574 => 180,  571 => 179,  567 => 177,  565 => 176,  559 => 172,  558 => 171,  554 => 169,  551 => 168,  538 => 167,  535 => 166,  522 => 165,  521 => 164,  516 => 161,  515 => 160,  508 => 156,  504 => 155,  500 => 154,  485 => 152,  480 => 149,  477 => 148,  475 => 147,  467 => 142,  462 => 140,  456 => 139,  451 => 137,  447 => 136,  439 => 135,  434 => 133,  431 => 132,  429 => 131,  426 => 130,  424 => 129,  421 => 128,  420 => 127,  416 => 125,  413 => 124,  410 => 123,  403 => 119,  400 => 118,  396 => 117,  394 => 116,  384 => 108,  381 => 107,  378 => 106,  376 => 105,  371 => 102,  359 => 101,  355 => 99,  354 => 98,  346 => 97,  341 => 94,  340 => 93,  335 => 91,  332 => 90,  331 => 89,  323 => 86,  318 => 83,  309 => 80,  307 => 79,  304 => 78,  296 => 76,  294 => 75,  291 => 74,  283 => 72,  281 => 71,  277 => 69,  271 => 67,  269 => 66,  263 => 64,  261 => 63,  255 => 61,  253 => 60,  247 => 58,  245 => 57,  239 => 55,  237 => 54,  231 => 52,  229 => 51,  217 => 50,  213 => 49,  209 => 48,  204 => 47,  187 => 32,  185 => 31,  182 => 30,  176 => 28,  174 => 27,  171 => 26,  168 => 24,  155 => 23,  142 => 22,  131 => 21,  120 => 20,  109 => 19,  98 => 18,  87 => 17,  85 => 16,  60 => 14,  56 => 13,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
