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

/* viewtopic_body.html */
class __TwigTemplate_d221b1b9113951a7f6501af76b987bd1 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "<h2 class=\"topic-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 5
        // line 6
        echo "<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 7
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div style=\"display: none !important;\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 8
        echo "
";
        // line 9
        if (($context["MODERATORS"] ?? null)) {
            // line 10
            echo "<p>
\t<strong>";
            // line 11
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATORS");
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 14
        echo "
";
        // line 15
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 16
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 19
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 20
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 22
                echo "\t\t\t<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 23
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 25
            echo "
\t\t</div>
\t</div>
";
        }
        // line 29
        echo "
<div class=\"action-bar bar-top\">
\t";
        // line 31
        // line 32
        echo "
\t";
        // line 33
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 34
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button responsivebutton\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 35
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 36
                echo "\t\t\t<i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 38
                echo "\t\t\t<i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 40
            echo "\t\t</a>
\t";
        }
        // line 42
        echo "
\t";
        // line 43
        // line 44
        echo "\t";
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 44)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 45
        echo "\t";
        // line 46
        echo "
\t";
        // line 47
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 48
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 49
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 51
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
            // line 52
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 53
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
            // line 55
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 56
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "</span>
\t\t\t\t</a>
\t\t\t\t";
            // line 58
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 63
        echo "
\t";
        // line 64
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 64)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 65
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 66
            if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_VIEW_UNREAD_POST"] ?? null);
                echo "\" class=\"mark\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 67
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 67))) {
                // line 68
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 68)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 69
                echo "\t\t\t";
            } else {
                // line 70
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 72
            echo "\t\t</div>
\t";
        }
        // line 74
        echo "\t";
        // line 75
        echo "</div>

";
        // line 77
        // line 78
        echo "
";
        // line 79
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 80
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" data-refresh=\"true\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 86
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 87
            echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_LENGTH");
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                echo "<br />";
            }
            if (($context["S_CAN_VOTE"] ?? null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "poll_option", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 91
                echo "\t\t\t\t";
                // line 92
                echo "\t\t\t\t<dl class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 92)) {
                    echo "voted";
                }
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_MOST_VOTES", [], "any", false, false, false, 92)) {
                    echo " most-votes";
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 92)) {
                    echo " title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 92);
                echo "\">
\t\t\t\t\t<dt>";
                // line 93
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<label for=\"vote_";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 93);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 93);
                    echo "</label>";
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 93);
                }
                echo "</dt>
\t\t\t\t\t";
                // line 94
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 94);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 94);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 94)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 94);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 94);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 94)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 95
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 95) < 20)) {
                    echo "pollbar1";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 95) < 40)) {
                    echo "pollbar2";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 95) < 60)) {
                    echo "pollbar3";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 95) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT_REL", [], "any", false, false, false, 95);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 95);
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 96
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 96) == 0)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_VOTES");
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT", [], "any", false, false, false, 96);
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 98
                // line 99
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 101
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 103
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_VOTES");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 106
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 107
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 109
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 112
            echo "
\t\t\t";
            // line 113
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 114
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 116
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 119
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 120
            echo $this->extensions['phpbb\template\twig\extension']->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 124
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t";
            // line 125
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t</div>

\t</form>
\t<hr />
";
        }
        // line 131
        echo "
";
        // line 132
        // line 133
        echo "
";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 135
            echo "\t";
            // line 136
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_UNREAD", [], "any", false, false, false, 136)) {
                // line 137
                echo "\t<a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 137);
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 139
            echo "\t<div id=\"p";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 139);
            echo "\" class=\"post has-profile  ";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ROW_COUNT", [], "any", false, false, false, 139) % 2 != 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 139)) {
                echo " unreadpost";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_REPORTED", [], "any", false, false, false, 139)) {
                echo " reported";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 139)) {
                echo " deleted";
            }
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ONLINE", [], "any", false, false, false, 139) &&  !twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 139))) {
                echo " online";
            } else {
                echo " offline";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 139)) {
                echo " warned";
            }
            echo "\">
\t\t<div class=\"inner\">
\t\t
\t\t<dl class=\"postprofile ";
            // line 142
            if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "PROFILE", [], "any", false, false, false, 142) == "left")) {
                echo " profile-left";
            }
            echo "\" id=\"profile";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 142);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 142)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 143
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 143) || twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 143))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 143)) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
            // line 145
            // line 146
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 146)) {
                // line 147
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 147)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 147);
                    echo "\" class=\"avatar\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 147);
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 147);
                    echo "</span>";
                }
                // line 148
                echo "\t\t\t\t\t";
            }
            // line 149
            echo "\t\t\t\t\t";
            // line 150
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 151
            // line 152
            echo "\t\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 152)) {
                echo "<strong>";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 152);
                echo "</strong>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 152);
            }
            // line 153
            echo "\t\t\t\t";
            // line 154
            echo "\t\t\t</dt>

\t\t\t";
            // line 156
            // line 157
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 157) || twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 157))) {
                echo "<dd class=\"profile-rank\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 157);
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 157) && twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 157))) {
                    echo "<br />";
                }
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 157);
                echo "</dd>";
            }
            // line 158
            echo "\t\t\t";
            // line 159
            echo "
\t\t";
            // line 160
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_POSTS", [], "any", false, false, false, 160) != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 160) !== "")) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 160);
                    echo "\">";
                }
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_POSTS", [], "any", false, false, false, 160);
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 160) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 161
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_JOINED", [], "any", false, false, false, 161)) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_JOINED", [], "any", false, false, false, 161);
                echo "</dd>";
            }
            // line 162
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 162)) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 162);
                echo "</dd>";
            }
            // line 163
            echo "
\t\t\t\t";
            // line 164
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_PROFILE_FIELD1", [], "any", false, false, false, 164)) {
                // line 165
                echo "\t\t\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t<dd><strong>";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PROFILE_FIELD1_NAME", [], "any", false, false, false, 166);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PROFILE_FIELD1_VALUE", [], "any", false, false, false, 166);
                echo "</dd>
\t\t\t\t";
            }
            // line 168
            echo "
\t\t";
            // line 169
            // line 170
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "custom_fields", [], "any", false, false, false, 170));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 171
                echo "\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 171)) {
                    // line 172
                    echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_IDENT", [], "any", false, false, false, 172);
                    echo "\"><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 172);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 172);
                    echo "</dd>
\t\t\t";
                }
                // line 174
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "\t\t";
            // line 176
            echo "
\t\t";
            // line 177
            // line 178
            echo "\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 178)))) {
                // line 179
                echo "\t\t\t\t<dd class=\"profile-contact\">
\t\t\t\t\t<strong>";
                // line 180
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong>
\t\t\t\t\t<div class=\"dropdown-container dropdown-left button\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\" title=\"";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "CONTACT_USER", [], "any", false, false, false, 182);
                echo "\">
\t\t\t\t\t\t\t<i class=\"icon fa-commenting-o fa-fw icon-lg\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "CONTACT_USER", [], "any", false, false, false, 183);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t\t";
                // line 188
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 188));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 189
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["REMAINDER"] = (twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 189) % 4);
                    // line 190
                    echo "\t\t\t\t\t\t\t\t\t";
                    $value = ((($context["REMAINDER"] ?? null) == 3) || (twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 190) && (twig_get_attribute($this->env, $this->source, $context["contact"], "S_NUM_ROWS", [], "any", false, false, false, 190) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 191
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((($context["REMAINDER"] ?? null) == 0)) {
                        // line 192
                        echo "\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 194
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 194)) {
                        echo twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 194);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 194);
                    }
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 194);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "S_LAST_CELL", [], "any", false, false, false, 194)) {
                        echo " class=\"last-cell\"";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 194) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 195
                    echo "<span class=\"contact-icon ";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 195);
                    echo "-icon\">";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 195);
                    echo "</span>";
                    // line 196
                    echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    // line 197
                    if (((($context["REMAINDER"] ?? null) == 3) || twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 197))) {
                        // line 198
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 200
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 201
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</dd>
\t\t
\t\t";
            }
            // line 207
            echo "\t\t";
            // line 208
            echo "
\t\t</dl>
\t\t
\t\t<div class=\"postbody\">
\t\t\t";
            // line 212
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 212)) {
                // line 213
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 213)) {
                    // line 214
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 214);
                    echo "\">
\t\t\t\t\t\t";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_POST_DELETED_MESSAGE", [], "any", false, false, false, 215);
                    echo "<br>
\t\t\t\t\t\t<a class=\"display_post\" data-post-id=\"";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 216);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST_VIEW", [], "any", false, false, false, 216);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DISPLAY");
                    echo "</a>

\t\t\t\t\t</div>
\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 219
$context["postrow"], "S_IGNORE_POST", [], "any", false, false, false, 219)) {
                    // line 220
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 220);
                    echo "\">
\t\t\t\t\t\t";
                    // line 221
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_IGNORE_POST", [], "any", false, false, false, 221);
                    echo "<br>
\t\t\t\t\t\t<a class=\"display_post\" data-post-id=\"";
                    // line 222
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 222);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST_VIEW", [], "any", false, false, false, 222);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DISPLAY");
                    echo "</a>

\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 226
                echo "\t\t\t";
            }
            // line 227
            echo "\t\t\t<div id=\"post_content";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 227);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 227)) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t";
            // line 229
            // line 230
            echo "\t\t<h3 ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_ROW", [], "any", false, false, false, 230)) {
                echo "class=\"first\"";
            }
            echo ">
\t\t\t";
            // line 231
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 231)) {
                // line 232
                echo "\t\t\t\t<img src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 232);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_WIDTH", [], "any", false, false, false, 232);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_HEIGHT", [], "any", false, false, false, 232);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_ALT", [], "any", false, false, false, 232);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_ALT", [], "any", false, false, false, 232);
                echo "\">
\t\t\t";
            }
            // line 234
            echo "\t\t\t<a ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_UNREAD", [], "any", false, false, false, 234)) {
                echo "class=\"first-unread\" ";
            }
            echo "href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 234);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_SUBJECT", [], "any", false, false, false, 234);
            echo "</a>
\t\t</h3>

\t\t";
            // line 237
            $value = (((((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 237) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 237)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 237)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 237)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 237)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 237));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 238
            echo "\t\t";
            // line 239
            echo "\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 240
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_POST_BUTTONS", [], "any", false, false, false, 240)) {
                    // line 241
                    echo "\t\t\t
\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 243
                    // line 244
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 244)) {
                        // line 245
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 246
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 246);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 247
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_EDIT");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 251
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 251)) {
                        // line 252
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 253
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 253);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 254
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_DELETE");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 258
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 258)) {
                        // line 259
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 260
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 260);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 261
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_REPORT");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 265
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 265)) {
                        // line 266
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 267
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 267);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("WARN_USER");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 268
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_WARN");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 272
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 272)) {
                        // line 273
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 274
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 274);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 275
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_INFORMATION");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 279
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 279)) {
                        // line 280
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 281
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 281);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 282
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_QUOTE");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 286
                    echo "\t\t\t\t\t";
                    // line 287
                    echo "\t\t\t\t</ul>
\t\t\t\t
\t\t\t";
                }
                // line 290
                echo "\t\t\t";
            }
            // line 291
            echo "\t\t\t";
            // line 292
            echo "
\t\t\t";
            // line 293
            // line 294
            echo "\t\t\t\t<p class=\"author\">
\t\t\t\t";
            // line 295
            if (($context["S_IS_BOT"] ?? null)) {
                // line 296
                echo "\t\t\t\t\t<span><i class=\"icon fa-file fa-fw ";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 296)) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MINI_POST", [], "any", false, false, false, 296);
                echo "</span></span>
\t\t\t\t";
            } else {
                // line 298
                echo "\t\t\t\t\t<a class=\"unread\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 298);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MINI_POST", [], "any", false, false, false, 298);
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-file fa-fw ";
                // line 299
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 299)) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MINI_POST", [], "any", false, false, false, 299);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 302
            echo "\t\t\t\t\t<span class=\"responsive-hide\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 302);
            echo "</strong> &raquo; </span><time datetime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE_RFC3339", [], "any", false, false, false, 302);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE", [], "any", false, false, false, 302);
            echo "</time>
\t\t\t\t</p>
\t\t\t";
            // line 304
            // line 305
            echo "
\t\t\t";
            // line 306
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_UNAPPROVED", [], "any", false, false, false, 306)) {
                // line 307
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_CAN_APPROVE", [], "any", false, false, false, 307)) {
                    // line 308
                    echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_APPROVE_ACTION", [], "any", false, false, false, 308);
                    echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<span><i class=\"icon fa-question icon-red fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<strong>";
                    // line 311
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_UNAPPROVED_ACTION");
                    echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    // line 312
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE");
                    echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                    // line 313
                    echo $this->extensions['phpbb\template\twig\extension']->lang("APPROVE");
                    echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                    // line 314
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 314);
                    echo "\" />
\t\t\t\t\t";
                    // line 315
                    echo ($context["S_FORM_TOKEN"] ?? null);
                    echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
                } else {
                    // line 319
                    echo "\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<span><i class=\"icon fa-exclamation icon-red fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<strong>";
                    // line 321
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_UNAPPROVED_EXPLAIN");
                    echo "</strong>
\t\t\t\t</p>
\t\t\t";
                }
                // line 323
                echo "\t\t\t
\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 324
$context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 324)) {
                // line 325
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_APPROVE_ACTION", [], "any", false, false, false, 325);
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 327
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t";
                // line 328
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DELETE_PERMANENT", [], "any", false, false, false, 328)) {
                    // line 329
                    echo "\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t";
                }
                // line 331
                echo "\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 332
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 332);
                echo "\" />
\t\t\t\t\t";
                // line 333
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 337
            echo "
\t\t\t";
            // line 338
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_REPORTED", [], "any", false, false, false, 338)) {
                // line 339
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 340
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MCP_REPORT", [], "any", false, false, false, 340);
                echo "\"><i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 343
            echo "
\t\t\t<div class=\"content\">";
            // line 344
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MESSAGE", [], "any", false, false, false, 344);
            echo "</div>
\t\t\t\t";
            // line 345
            // line 346
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_HAS_ATTACHMENTS", [], "any", false, false, false, 346)) {
                // line 347
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 349
                echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 351
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "attachment", [], "any", false, false, false, 351));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 352
                    echo "\t\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 352);
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 354
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 356
            echo "
\t\t\t";
            // line 357
            // line 358
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DISPLAY_NOTICE", [], "any", false, false, false, 358)) {
                echo "<div class=\"rules\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 359
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETED_MESSAGE", [], "any", false, false, false, 359) || twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 359))) {
                // line 360
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 361
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETED_MESSAGE", [], "any", false, false, false, 361);
                echo "
\t\t\t\t\t";
                // line 362
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 362)) {
                    echo "<br /><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> <em>";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 362);
                    echo "</em>";
                }
                // line 363
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 364
$context["postrow"], "EDITED_MESSAGE", [], "any", false, false, false, 364) || twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 364))) {
                // line 365
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 366
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EDITED_MESSAGE", [], "any", false, false, false, 366);
                echo "
\t\t\t\t\t";
                // line 367
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 367)) {
                    echo "<br /><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> <em>";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 367);
                    echo "</em>";
                }
                // line 368
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 370
            echo "
\t\t\t";
            // line 371
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "BUMPED_MESSAGE", [], "any", false, false, false, 371)) {
                echo "<div class=\"notice\"><br /><br />";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "BUMPED_MESSAGE", [], "any", false, false, false, 371);
                echo "</div>";
            }
            // line 372
            echo "\t\t\t";
            // line 373
            echo "
\t\t\t";
            // line 374
            // line 375
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "SIGNATURE", [], "any", false, false, false, 375)) {
                echo "<div id=\"sig";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 375);
                echo "\" class=\"signature\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "SIGNATURE", [], "any", false, false, false, 375);
                echo "</div>";
            }
            // line 376
            echo "\t\t\t";
            // line 377
            echo "
\t\t\t";
            // line 378
            // line 379
            echo "\t\t\t</div>

\t\t</div>

\t\t";
            // line 383
            // line 384
            echo "\t\t<div class=\"back2top\">
\t\t\t";
            // line 385
            // line 386
            echo "\t\t\t<a href=\"#top\" class=\"top\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
            echo "\">
\t\t\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"sr-only\">";
            // line 388
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
            echo "</span>
\t\t\t</a>
\t\t\t";
            // line 390
            // line 391
            echo "\t\t</div>
\t\t";
            // line 392
            // line 393
            echo "
\t\t</div>
\t</div>


\t";
            // line 398
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 400
        echo "
";
        // line 401
        if (($context["S_QUICK_REPLY"] ?? null)) {
            // line 402
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 402)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 404
        echo "
";
        // line 405
        // line 406
        echo "
<div class=\"action-bar bar-bottom\">
";
        // line 408
        // line 409
        echo "
";
        // line 410
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 411
            echo "\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button responsive-hide\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY");
            }
            echo "\">
\t\t";
            // line 412
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 413
                echo "\t\t<i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t";
            } else {
                // line 415
                echo "\t\t<i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t";
            }
            // line 417
            echo "\t</a>
";
        }
        // line 419
        // line 420
        echo "
";
        // line 421
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 421)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 422
        echo "
";
        // line 423
        if ((((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 423))) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 424
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_TOPIC_ACTION"] ?? null);
            echo "\">
\t";
            // line 425
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewtopic_body.html", 425)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 426
            echo "\t</form>
";
        }
        // line 428
        echo "
\t";
        // line 429
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 429))) {
            // line 430
            echo "\t<div class=\"quickmod dropdown-container dropdown-container-left dropdown-up dropdown-";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t<span title=\"";
            // line 431
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_MOD");
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 432
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_MOD");
            echo "</span>
\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 438
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 438));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 439
                echo "\t\t\t\t\t";
                $value = twig_in_filter(twig_get_attribute($this->env, $this->source, $context["quickmod"], "VALUE", [], "any", false, false, false, 439), [0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"]);
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 440
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["quickmod"], "LINK", [], "any", false, false, false, 440);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "QUICKMOD_AJAX", [], "any", false, false, false, 440)) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["quickmod"], "TITLE", [], "any", false, false, false, 440);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 442
            echo "\t\t\t\t</ul>
\t\t</div>
\t</div>
\t";
        }
        // line 446
        echo "
\t";
        // line 447
        // line 448
        echo "
\t";
        // line 449
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 449)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 450
            echo "
\t<div class=\"pagination\">
\t\t";
            // line 452
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t";
            // line 453
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 453))) {
                // line 454
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 454)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 455
                echo "\t\t";
            } else {
                // line 456
                echo "\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t";
            }
            // line 458
            echo "\t</div>
\t";
        }
        // line 460
        echo "</div>

";
        // line 462
        // line 463
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 463)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 464
        echo "
";
        // line 465
        // line 466
        echo "
";
        // line 467
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 468
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><i class=\"icon fa-user fa-fw cat\" aria-hidden=\"true\"></i><a href=\"";
            // line 469
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 470
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 473
        echo "
";
        // line 474
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 474)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1620 => 474,  1617 => 473,  1611 => 470,  1605 => 469,  1602 => 468,  1600 => 467,  1597 => 466,  1596 => 465,  1593 => 464,  1581 => 463,  1580 => 462,  1576 => 460,  1572 => 458,  1566 => 456,  1563 => 455,  1550 => 454,  1548 => 453,  1544 => 452,  1540 => 450,  1538 => 449,  1535 => 448,  1534 => 447,  1531 => 446,  1525 => 442,  1510 => 440,  1506 => 439,  1502 => 438,  1493 => 432,  1489 => 431,  1484 => 430,  1482 => 429,  1479 => 428,  1475 => 426,  1463 => 425,  1458 => 424,  1456 => 423,  1453 => 422,  1441 => 421,  1438 => 420,  1437 => 419,  1433 => 417,  1429 => 415,  1425 => 413,  1423 => 412,  1412 => 411,  1410 => 410,  1407 => 409,  1406 => 408,  1402 => 406,  1401 => 405,  1398 => 404,  1384 => 402,  1382 => 401,  1379 => 400,  1374 => 398,  1367 => 393,  1366 => 392,  1363 => 391,  1362 => 390,  1357 => 388,  1351 => 386,  1350 => 385,  1347 => 384,  1346 => 383,  1340 => 379,  1339 => 378,  1336 => 377,  1334 => 376,  1325 => 375,  1324 => 374,  1321 => 373,  1319 => 372,  1313 => 371,  1310 => 370,  1306 => 368,  1297 => 367,  1293 => 366,  1290 => 365,  1288 => 364,  1285 => 363,  1276 => 362,  1272 => 361,  1269 => 360,  1266 => 359,  1259 => 358,  1258 => 357,  1255 => 356,  1251 => 354,  1242 => 352,  1238 => 351,  1233 => 349,  1229 => 347,  1226 => 346,  1225 => 345,  1221 => 344,  1218 => 343,  1210 => 340,  1207 => 339,  1205 => 338,  1202 => 337,  1195 => 333,  1191 => 332,  1186 => 331,  1180 => 329,  1178 => 328,  1174 => 327,  1168 => 325,  1166 => 324,  1163 => 323,  1157 => 321,  1153 => 319,  1146 => 315,  1142 => 314,  1138 => 313,  1134 => 312,  1130 => 311,  1123 => 308,  1120 => 307,  1118 => 306,  1115 => 305,  1114 => 304,  1102 => 302,  1090 => 299,  1083 => 298,  1071 => 296,  1069 => 295,  1066 => 294,  1065 => 293,  1062 => 292,  1060 => 291,  1057 => 290,  1052 => 287,  1050 => 286,  1043 => 282,  1037 => 281,  1034 => 280,  1031 => 279,  1024 => 275,  1018 => 274,  1015 => 273,  1012 => 272,  1005 => 268,  999 => 267,  996 => 266,  993 => 265,  986 => 261,  980 => 260,  977 => 259,  974 => 258,  967 => 254,  961 => 253,  958 => 252,  955 => 251,  948 => 247,  942 => 246,  939 => 245,  936 => 244,  935 => 243,  931 => 241,  928 => 240,  925 => 239,  923 => 238,  920 => 237,  907 => 234,  892 => 232,  890 => 231,  883 => 230,  882 => 229,  872 => 227,  869 => 226,  858 => 222,  854 => 221,  849 => 220,  847 => 219,  837 => 216,  833 => 215,  828 => 214,  825 => 213,  823 => 212,  817 => 208,  815 => 207,  807 => 201,  801 => 200,  797 => 198,  795 => 197,  792 => 196,  786 => 195,  768 => 194,  764 => 192,  761 => 191,  757 => 190,  754 => 189,  750 => 188,  742 => 183,  738 => 182,  732 => 180,  729 => 179,  726 => 178,  725 => 177,  722 => 176,  720 => 175,  714 => 174,  703 => 172,  700 => 171,  695 => 170,  694 => 169,  691 => 168,  683 => 166,  680 => 165,  678 => 164,  675 => 163,  665 => 162,  655 => 161,  638 => 160,  635 => 159,  633 => 158,  622 => 157,  621 => 156,  617 => 154,  615 => 153,  606 => 152,  605 => 151,  602 => 150,  600 => 149,  597 => 148,  584 => 147,  581 => 146,  580 => 145,  565 => 143,  553 => 142,  523 => 139,  513 => 137,  510 => 136,  508 => 135,  504 => 134,  501 => 133,  500 => 132,  497 => 131,  488 => 125,  484 => 124,  477 => 120,  474 => 119,  466 => 116,  462 => 114,  460 => 113,  457 => 112,  451 => 109,  447 => 107,  445 => 106,  436 => 103,  429 => 101,  426 => 100,  420 => 99,  419 => 98,  406 => 96,  383 => 95,  357 => 94,  345 => 93,  325 => 92,  323 => 91,  319 => 90,  305 => 87,  301 => 86,  291 => 80,  289 => 79,  286 => 78,  285 => 77,  281 => 75,  279 => 74,  275 => 72,  269 => 70,  266 => 69,  253 => 68,  251 => 67,  240 => 66,  237 => 65,  235 => 64,  232 => 63,  224 => 58,  219 => 56,  213 => 55,  208 => 53,  204 => 52,  200 => 51,  195 => 49,  192 => 48,  190 => 47,  187 => 46,  185 => 45,  172 => 44,  171 => 43,  168 => 42,  164 => 40,  160 => 38,  156 => 36,  154 => 35,  143 => 34,  141 => 33,  138 => 32,  137 => 31,  133 => 29,  127 => 25,  122 => 23,  117 => 22,  109 => 20,  107 => 19,  98 => 16,  96 => 15,  93 => 14,  80 => 11,  77 => 10,  75 => 9,  72 => 8,  66 => 7,  63 => 6,  62 => 5,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_body.html", "");
    }
}
