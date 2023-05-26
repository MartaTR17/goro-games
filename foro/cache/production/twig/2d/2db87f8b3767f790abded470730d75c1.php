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

/* viewforum_body.html */
class __TwigTemplate_971d4f6c13efe2a0013475b3c987542a extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        echo "<h2 class=\"forum-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 4
        // line 5
        if (((($context["FORUM_DESC"] ?? null) || ($context["MODERATORS"] ?? null)) || ($context["U_MCP"] ?? null))) {
            // line 6
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 8
            if (($context["FORUM_DESC"] ?? null)) {
                echo "<div style=\"display: none !important;\">";
                echo ($context["FORUM_DESC"] ?? null);
                echo "<br /></div>";
            }
            // line 9
            echo "\t";
            if (($context["MODERATORS"] ?? null)) {
                echo "<p><strong>";
                if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATORS");
                }
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo ($context["MODERATORS"] ?? null);
                echo "</p>";
            }
            // line 10
            echo "</div>
";
        }
        // line 12
        echo "
";
        // line 13
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 14
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 17
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 18
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo "\t\t\t<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 21
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 23
            echo "
\t\t</div>
\t</div>
";
        }
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SUBFORUM", [], "any", false, false, false, 27) == "top")) {
            // line 28
            if (($context["S_HAS_SUBFORUM"] ?? null)) {
                // line 29
                if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                    // line 30
                    echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
                    // line 31
                    echo ($context["U_MARK_FORUMS"] ?? null);
                    echo "\" class=\"mark-read rightside\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
                    echo "\" data-ajax=\"mark_forums_read\"></a>
\t</div>
";
                }
                // line 34
                echo "\t";
                $location = "forumlist_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 34)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 35
                echo "\t";
            }
        }
        // line 37
        echo "
";
        // line 38
        if ((((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 38))) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 39
            echo "\t<div class=\"action-bar bar-top\">

\t";
            // line 41
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 42
                echo "\t\t\t";
                // line 43
                echo "
\t\t<a href=\"";
                // line 44
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button responsivebutton\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_LOCKED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t";
                // line 45
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 46
                    echo "\t\t\t<i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                } else {
                    // line 48
                    echo "\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                }
                // line 50
                echo "\t\t</a>
\t\t\t";
                // line 51
                // line 52
                echo "\t";
            }
            // line 53
            echo "
\t";
            // line 54
            if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
                // line 55
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"forum-search\" action=\"";
                // line 56
                echo ($context["S_SEARCHBOX_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
                // line 58
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
                // line 59
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 60
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
                // line 62
                echo ($context["U_SEARCH_FORUM"] ?? null);
                echo "\" class=\"button button-search-end\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 63
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "</span>
\t\t\t\t</a>
\t\t\t\t";
                // line 65
                echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 70
            echo "
\t<div class=\"pagination\">
\t\t";
            // line 72
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 72)))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark-read\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_TOPICS_READ");
                echo "\" data-ajax=\"mark_topics_read\"></a> &bull; ";
            }
            // line 73
            echo "\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t";
            // line 74
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 74))) {
                // line 75
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 75)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 76
                echo "\t\t";
            } else {
                // line 77
                echo "\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t";
            }
            // line 79
            echo "\t</div>

\t</div>
";
        }
        // line 83
        echo "
";
        // line 84
        if (($context["S_NO_READ_ACCESS"] ?? null)) {
            // line 85
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 88
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t</div>
\t</div>

\t";
            // line 92
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 93
                echo "
\t\t<form action=\"";
                // line 94
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\" method=\"post\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h3><a href=\"";
                // line 100
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
                echo "</a>";
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    echo "&nbsp; &bull; &nbsp;<a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
                // line 104
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 105
                echo ($context["USERNAME"] ?? null);
                echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"password\">";
                // line 108
                echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t\t\t";
                // line 110
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 111
                echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 115
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 117
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
\t\t\t\t";
                // line 118
                echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
                echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t";
            }
            // line 128
            echo "
";
        }
        // line 130
        echo "
";
        // line 131
        // line 132
        echo "
";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 133));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 134
            echo "
\t";
            // line 135
            if (( !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 135) &&  !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_FIRST_ROW", [], "any", false, false, false, 135))) {
                // line 136
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 140
            echo "
\t";
            // line 141
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_FIRST_ROW", [], "any", false, false, false, 141) ||  !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 141))) {
                // line 142
                echo "\t
\t\t<div class=\"forumbg";
                // line 143
                if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 143) && (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_ANNOUNCE", [], "any", false, false, false, 143) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 143)))) {
                    echo " announcement";
                }
                echo "\">
\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt";
                // line 148
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo " id=\"active_topics\"";
                }
                echo "><div class=\"list-inner\">";
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_TOPICS");
                } elseif ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 148) && (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_ANNOUNCE", [], "any", false, false, false, 148) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 148)))) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                }
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 149
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                echo "<i class=\"icon fa-comments fa-fw cat\" aria-hidden=\"true\"></i></dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 150
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                echo "<i class=\"icon fa-eye fa-fw cat\" aria-hidden=\"true\"></i></dd>
\t\t\t\t\t<dd class=\"lastpost\">";
                // line 151
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "<span><i class=\"icon fa-clock-o fa-fw cat\" aria-hidden=\"true\"></i></span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">
\t";
            }
            // line 157
            echo "
\t\t\t";
            // line 158
            // line 159
            echo "\t\t\t<li class=\"row";
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_ROW_COUNT", [], "any", false, false, false, 159) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 159)) {
                echo " global-announce";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_ANNOUNCE", [], "any", false, false, false, 159)) {
                echo " announce";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_STICKY", [], "any", false, false, false, 159)) {
                echo " sticky";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 159)) {
                echo " reported";
            }
            echo "\">
\t\t\t\t";
            // line 160
            // line 161
            echo "\t\t\t\t<dl class=\"row-item ";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_IMG_STYLE", [], "any", false, false, false, 161);
            echo "\">
\t\t\t\t\t<dt";
            // line 162
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 162) && ($context["S_TOPIC_ICONS"] ?? null))) {
                echo " style=\"background-image: url('";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 162);
                echo "'); background-repeat: no-repeat; position: relative;\"";
            }
            echo " title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 162);
            echo "\">
\t\t\t\t\t\t";
            // line 163
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 163) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 163);
                echo "\" class=\"row-item-link\"></a>";
            }
            // line 164
            echo "\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t";
            // line 165
            // line 166
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 166) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 167
                echo "\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 167);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 168
                echo ($context["NEW_POST"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 171
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_TOPIC", [], "any", false, false, false, 171)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_TOPIC", [], "any", false, false, false, 171);
                echo "\" class=\"topictitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_TITLE", [], "any", false, false, false, 171);
                echo "</a>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_TITLE", [], "any", false, false, false, 171);
            }
            // line 172
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 172) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POSTS_UNAPPROVED", [], "any", false, false, false, 172))) {
                // line 173
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_QUEUE", [], "any", false, false, false, 173);
                echo "\" title=\"";
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 173)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_UNAPPROVED");
                }
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 174
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 174)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_UNAPPROVED");
                }
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 177
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_DELETED", [], "any", false, false, false, 177)) {
                // line 178
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_QUEUE", [], "any", false, false, false, 178);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_DELETED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-recycle fa-fw icon-green\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 179
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_DELETED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 182
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 182)) {
                // line 183
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_REPORT", [], "any", false, false, false, 183);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 184
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 187
            echo "\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t";
            // line 188
            // line 189
            echo "
\t\t\t\t\t\t\t";
            // line 190
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 191
                echo "\t\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t\t";
                // line 192
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo " ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 192);
                echo " &laquo; <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 192);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                echo "\"><time datetime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 192);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 192);
                echo "</time></a>
\t\t\t\t\t\t\t\t";
                // line 193
                if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 193) && (($context["FORUM_ID"] ?? null) != twig_get_attribute($this->env, $this->source, $context["topicrow"], "FORUM_ID", [], "any", false, false, false, 193)))) {
                    echo "<br />";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTED");
                    echo " ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_FORUM", [], "any", false, false, false, 193);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FORUM_NAME", [], "any", false, false, false, 193);
                    echo "</a>";
                }
                // line 194
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 195
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "REPLIES", [], "any", false, false, false, 195)) {
                    // line 196
                    echo "\t\t\t\t\t\t\t<span class=\"responsive-show left-box\" style=\"display: none;\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "REPLIES", [], "any", false, false, false, 196);
                    echo "</strong></span>
\t\t\t\t\t\t\t";
                }
                // line 198
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "VIEWS", [], "any", false, false, false, 198)) {
                    // line 199
                    echo "\t\t\t\t\t\t\t<span class=\"responsive-show\" style=\"display: none;\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "VIEWS", [], "any", false, false, false, 199);
                    echo "</strong></span>
\t\t\t\t\t\t\t";
                }
                // line 201
                echo "\t\t\t\t\t\t\t";
            }
            // line 202
            echo "
\t\t\t\t\t\t\t<div class=\"topic-poster responsive-hide left-box\">
\t\t\t\t\t\t\t";
            // line 204
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_HAS_POLL", [], "any", false, false, false, 204)) {
                echo "<i class=\"icon fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 205
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 205)) {
                echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 206
            echo "\t\t\t\t\t\t\t";
            // line 207
            echo "\t\t\t\t\t\t\t";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 207);
            echo " &raquo; <time datetime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FIRST_POST_TIME_RFC3339", [], "any", false, false, false, 207);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FIRST_POST_TIME", [], "any", false, false, false, 207);
            echo "</time>
\t\t\t\t\t\t\t";
            // line 208
            // line 209
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 209) && (($context["FORUM_ID"] ?? null) != twig_get_attribute($this->env, $this->source, $context["topicrow"], "FORUM_ID", [], "any", false, false, false, 209)))) {
                echo " &raquo; ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_FORUM", [], "any", false, false, false, 209);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FORUM_NAME", [], "any", false, false, false, 209);
                echo "</a>";
            }
            // line 210
            echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            // line 212
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 212))) {
                // line 213
                echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 216
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 216));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 217
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 217)) {
                        // line 218
                        echo "\t\t\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 218)) {
                        echo "<li class=\"active\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 218);
                        echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 219
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 219)) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 220
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 220)) {
                        // line 221
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 221);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 221);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 223
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 227
            echo "
\t\t\t\t\t\t";
            // line 228
            // line 229
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"posts\">";
            // line 231
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "REPLIES", [], "any", false, false, false, 231);
            echo " <dfn>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
            echo "</dfn></dd>
\t\t\t\t\t<dd class=\"views\">";
            // line 232
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "VIEWS", [], "any", false, false, false, 232);
            echo " <dfn>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
            echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span><dfn>";
            // line 234
            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
            echo " </dfn>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 234);
            // line 235
            echo "\t\t\t\t\t\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 235))) {
                // line 236
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 236);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 237
                echo ($context["VIEW_LATEST_POST"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 240
            echo "\t\t\t\t\t\t\t<br /><time datetime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 240);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 240);
            echo "</time>
\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t";
            // line 244
            // line 245
            echo "\t\t\t</li>
\t\t\t";
            // line 246
            // line 247
            echo "
\t\t";
            // line 248
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_LAST_ROW", [], "any", false, false, false, 248)) {
                // line 249
                echo "\t\t</ul>
\t</div>
\t</div>
\t";
            }
            // line 253
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 255
            echo "\t";
            if (($context["S_IS_POSTABLE"] ?? null)) {
                // line 256
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
                // line 258
                echo $this->extensions['phpbb\template\twig\extension']->lang(((($context["S_SORT_DAYS"] ?? null)) ? ("NO_TOPICS_TIME_FRAME") : ("NO_TOPICS")));
                echo "</strong>
\t\t</div>
\t</div>
\t\t";
            } elseif ( !            // line 261
($context["S_HAS_SUBFORUM"] ?? null)) {
                // line 262
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 264
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_FORUMS_IN_CATEGORY");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "
";
        // line 270
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 270)) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 271
            echo "\t<div class=\"action-bar bar-bottom\">
\t\t";
            // line 272
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 273
                echo "\t\t\t";
                // line 274
                echo "
\t\t\t<a href=\"";
                // line 275
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_LOCKED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t";
                // line 276
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 277
                    echo "\t\t\t\t<i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                } else {
                    // line 279
                    echo "\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                }
                // line 281
                echo "\t\t\t</a>

\t\t\t";
                // line 283
                // line 284
                echo "\t\t";
            }
            // line 285
            echo "
\t\t";
            // line 286
            if ((($context["S_SELECT_SORT_DAYS"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 287
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["S_FORUM_ACTION"] ?? null);
                echo "\">
\t\t\t";
                // line 288
                $location = "display_options.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("display_options.html", "viewforum_body.html", 288)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 289
                echo "\t\t\t</form>
\t\t";
            }
            // line 291
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 293
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 293)))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark-read\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_TOPICS_READ");
                echo "\" data-ajax=\"mark_topics_read\"></a> &bull; ";
            }
            // line 294
            echo "\t\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t\t";
            // line 295
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 295))) {
                // line 296
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 296)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 297
                echo "\t\t\t";
            } else {
                // line 298
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 300
            echo "\t\t</div>
\t</div>
";
        }
        // line 303
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SUBFORUM", [], "any", false, false, false, 303) == "bottom")) {
            // line 304
            if (($context["S_HAS_SUBFORUM"] ?? null)) {
                // line 305
                if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                    // line 306
                    echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
                    // line 307
                    echo ($context["U_MARK_FORUMS"] ?? null);
                    echo "\" class=\"mark-read rightside\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
                    echo "\" data-ajax=\"mark_forums_read\"></a>
\t</div>
";
                }
                // line 310
                echo "\t";
                $location = "forumlist_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 310)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 311
                echo "\t";
            }
        }
        // line 313
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 313)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 314
        // line 315
        echo "
";
        // line 316
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 317
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><i class=\"icon fa-user fa-fw cat\" aria-hidden=\"true\"></i><a href=\"";
            // line 318
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 319
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 322
        echo "
";
        // line 323
        if ((($context["S_IS_POSTABLE"] ?? null) && twig_length_filter($this->env, ($context["rules"] ?? null)))) {
            // line 324
            echo "\t<div class=\"stat-block permissions\">
\t\t<h3><i class=\"icon fa fa-th-list fa-fw cat\" aria-hidden=\"true\"></i>";
            // line 325
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t<p>";
            // line 326
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "rules", [], "any", false, false, false, 326));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                echo twig_get_attribute($this->env, $this->source, $context["rules"], "RULE", [], "any", false, false, false, 326);
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t</div>
";
        }
        // line 329
        echo "
";
        // line 330
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 330)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1086 => 330,  1083 => 329,  1069 => 326,  1065 => 325,  1062 => 324,  1060 => 323,  1057 => 322,  1051 => 319,  1045 => 318,  1042 => 317,  1040 => 316,  1037 => 315,  1036 => 314,  1024 => 313,  1020 => 311,  1007 => 310,  999 => 307,  996 => 306,  994 => 305,  992 => 304,  990 => 303,  985 => 300,  979 => 298,  976 => 297,  963 => 296,  961 => 295,  956 => 294,  948 => 293,  944 => 291,  940 => 289,  928 => 288,  923 => 287,  921 => 286,  918 => 285,  915 => 284,  914 => 283,  910 => 281,  906 => 279,  902 => 277,  900 => 276,  890 => 275,  887 => 274,  885 => 273,  883 => 272,  880 => 271,  878 => 270,  875 => 269,  864 => 264,  860 => 262,  858 => 261,  852 => 258,  848 => 256,  845 => 255,  839 => 253,  833 => 249,  831 => 248,  828 => 247,  827 => 246,  824 => 245,  823 => 244,  813 => 240,  807 => 237,  800 => 236,  797 => 235,  791 => 234,  784 => 232,  778 => 231,  774 => 229,  773 => 228,  770 => 227,  765 => 224,  759 => 223,  749 => 221,  747 => 220,  741 => 219,  734 => 218,  731 => 217,  727 => 216,  722 => 213,  720 => 212,  716 => 210,  705 => 209,  704 => 208,  693 => 207,  691 => 206,  686 => 205,  682 => 204,  678 => 202,  675 => 201,  666 => 199,  663 => 198,  654 => 196,  652 => 195,  649 => 194,  637 => 193,  621 => 192,  618 => 191,  616 => 190,  613 => 189,  612 => 188,  609 => 187,  603 => 184,  596 => 183,  593 => 182,  587 => 179,  580 => 178,  577 => 177,  567 => 174,  556 => 173,  553 => 172,  542 => 171,  536 => 168,  531 => 167,  528 => 166,  527 => 165,  524 => 164,  518 => 163,  507 => 162,  502 => 161,  501 => 160,  480 => 159,  479 => 158,  476 => 157,  467 => 151,  463 => 150,  459 => 149,  445 => 148,  435 => 143,  432 => 142,  430 => 141,  427 => 140,  421 => 136,  419 => 135,  416 => 134,  411 => 133,  408 => 132,  407 => 131,  404 => 130,  400 => 128,  387 => 118,  383 => 117,  378 => 115,  370 => 111,  364 => 110,  358 => 108,  352 => 105,  347 => 104,  330 => 100,  321 => 94,  318 => 93,  316 => 92,  309 => 88,  304 => 85,  302 => 84,  299 => 83,  293 => 79,  287 => 77,  284 => 76,  271 => 75,  269 => 74,  264 => 73,  256 => 72,  252 => 70,  244 => 65,  239 => 63,  233 => 62,  228 => 60,  224 => 59,  220 => 58,  215 => 56,  212 => 55,  210 => 54,  207 => 53,  204 => 52,  203 => 51,  200 => 50,  196 => 48,  192 => 46,  190 => 45,  180 => 44,  177 => 43,  175 => 42,  173 => 41,  169 => 39,  167 => 38,  164 => 37,  160 => 35,  147 => 34,  139 => 31,  136 => 30,  134 => 29,  132 => 28,  130 => 27,  124 => 23,  119 => 21,  114 => 20,  106 => 18,  104 => 17,  95 => 14,  93 => 13,  90 => 12,  86 => 10,  72 => 9,  66 => 8,  62 => 6,  60 => 5,  59 => 4,  50 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewforum_body.html", "");
    }
}
