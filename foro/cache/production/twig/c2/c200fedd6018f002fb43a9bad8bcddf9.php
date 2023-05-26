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

/* forumlist_body.html */
class __TwigTemplate_3a3c553bed532272b7cb4f0126eed848 extends \Twig\Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "
\t";
            // line 4
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 4) &&  !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 4)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 4))) {
                // line 5
                echo "\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            // line 11
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 11) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 11)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 11))) {
                // line 12
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 16
                // line 17
                echo "\t\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 18)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 18);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 18);
                    echo "</a>";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 19
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                echo "<i class=\"icon fa-file-text-o fa-fw cat\" aria-hidden=\"true\"></i></dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                // line 20
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo "<i class=\"icon fa-commenting-o fa-fw cat\" aria-hidden=\"true\"></i></dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 21
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "<i class=\"icon fa-clock-o fa-fw cat\" aria-hidden=\"true\"></i></span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 23
                // line 24
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 28
            echo "\t";
            // line 29
            echo "
\t";
            // line 30
            if ( !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 30)) {
                // line 31
                echo "\t\t";
                // line 32
                echo "\t\t\t\t<li class=\"row\">
\t\t\t\t";
                // line 33
                // line 34
                echo "\t\t\t\t<dl class=\"row-item ";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMG_STYLE", [], "any", false, false, false, 34);
                echo "\">
\t\t\t\t\t<dt title=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_FOLDER_IMG_ALT", [], "any", false, false, false, 35);
                echo "\">
\t\t\t\t\t\t";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_UNREAD_FORUM", [], "any", false, false, false, 36)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 36);
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 37
                echo "\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t";
                // line 38
                if ((($context["S_ENABLE_FEEDS"] ?? null) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FEED_ENABLED", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 40
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 40);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 40);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 41
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 41);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t";
                    // line 47
                    echo "\t\t\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 47);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                    // line 48
                    // line 49
                    echo "\t\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 50);
                echo "\" class=\"forumtitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 50);
                echo "</a>
\t\t\t\t\t\t\t";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 51)) {
                    echo "<br />";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 51);
                }
                // line 52
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t<br /><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_MODERATOR_STR", [], "any", false, false, false, 53);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 53);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 55)) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LIST_SUBFORUMS", [], "any", false, false, false, 55))) {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t";
                    // line 57
                    echo "\t\t\t\t\t\t\t\t<br /><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_SUBFORUM_STR", [], "any", false, false, false, 57);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t\t";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 58));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 59
                        echo "\t\t\t\t\t\t\t\t";
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subforum"], "U_SUBFORUM", [], "any", false, false, false, 59);
                        echo "\" class=\"subforum";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 59)) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 59)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("UNREAD_POSTS");
                        } else {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon ";
                        // line 60
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "IS_LINK", [], "any", false, false, false, 60)) {
                            echo "fa-external-link";
                        } else {
                            echo "fa-file-o";
                        }
                        echo " fa-fw ";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 60)) {
                            echo " icon-red";
                        } else {
                            echo " icon-blue";
                        }
                        echo " icon-md\" aria-hidden=\"true\"></i>";
                        echo twig_get_attribute($this->env, $this->source, $context["subforum"], "SUBFORUM_NAME", [], "any", false, false, false, 60);
                        echo "</a>";
                        if ( !twig_get_attribute($this->env, $this->source, $context["subforum"], "S_LAST_ROW", [], "any", false, false, false, 60)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                        }
                        // line 61
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "\t\t\t\t\t\t\t\t";
                    // line 63
                    echo "\t\t\t\t\t\t\t";
                }
                // line 64
                echo "
\t\t\t\t\t\t\t";
                // line 65
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 66
                    echo "\t\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t\t";
                    // line 67
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 67)) {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 68);
                        echo "</strong>
\t\t\t\t\t\t\t\t";
                    } elseif (( !twig_get_attribute($this->env, $this->source,                     // line 69
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 69) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 69))) {
                        // line 70
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 70);
                        echo "</strong>
\t\t\t\t\t\t\t\t\t| ";
                        // line 71
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 71);
                        echo "</strong><br />";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                        echo " ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POSTER_FULL", [], "any", false, false, false, 71);
                        echo "<br />&laquo; ";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 71);
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    // line 73
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t\t";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "\t\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 78);
                    echo "</span></dd>
\t\t\t\t\t\t";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 79
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "\t\t\t\t\t\t<dd class=\"topics\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 80);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                    echo "</dfn></dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 81);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                    echo "</dfn></dd>
\t\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t";
                    // line 84
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 84)) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 85);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_UNAPPROVED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 86
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 88
$context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 88)) {
                        // line 89
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 89);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_UNAPPROVED_FORUM");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 90
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_UNAPPROVED_FORUM");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 93)) {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t<dfn>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t\t\t";
                        // line 95
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_DISPLAY_SUBJECT", [], "any", false, false, false, 95)) {
                            // line 96
                            echo "\t\t\t\t\t\t\t\t\t";
                            // line 97
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 97);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT", [], "any", false, false, false, 97);
                            echo "\" class=\"lastsubject\">";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 97);
                            echo "</a> <br />
\t\t\t\t\t\t\t\t";
                        }
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POSTER_FULL", [], "any", false, false, false, 99);
                        // line 100
                        echo "\t\t\t\t\t\t\t\t";
                        if ( !($context["S_IS_BOT"] ?? null)) {
                            // line 101
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 101);
                            echo "\" title=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_LATEST_POST");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 102
                            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_LATEST_POST");
                            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 105
                        echo "\t\t\t\t\t\t\t\t<br /><time datetime=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 105);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 105);
                        echo "</time>
\t\t\t\t\t\t\t";
                    } else {
                        // line 107
                        echo "\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 107)) {
                            // line 108
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED_FORUM", twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 108));
                            echo "
\t\t\t\t\t\t\t";
                        } else {
                            // line 110
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS");
                            echo "
\t\t\t\t\t\t\t";
                        }
                        // line 112
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 113
                    echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</dd>
\t\t\t\t\t\t";
                } else {
                    // line 116
                    echo "\t\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t\t\t";
                }
                // line 118
                echo "\t\t\t\t</dl>
\t\t\t\t\t";
                // line 119
                // line 120
                echo "\t\t\t\t</li>
\t\t\t\t";
                // line 121
                // line 122
                echo "\t\t\t";
            }
            // line 123
            echo "
\t\t\t";
            // line 124
            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LAST_ROW", [], "any", false, false, false, 124)) {
                // line 125
                echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
                // line 128
                // line 129
                echo "\t";
            }
            // line 130
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 132
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 134
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 134,  477 => 132,  471 => 130,  468 => 129,  467 => 128,  462 => 125,  460 => 124,  457 => 123,  454 => 122,  453 => 121,  450 => 120,  449 => 119,  446 => 118,  442 => 116,  437 => 113,  434 => 112,  428 => 110,  422 => 108,  419 => 107,  411 => 105,  405 => 102,  398 => 101,  395 => 100,  390 => 99,  380 => 97,  378 => 96,  376 => 95,  371 => 94,  368 => 93,  362 => 90,  355 => 89,  353 => 88,  348 => 86,  341 => 85,  339 => 84,  331 => 81,  324 => 80,  322 => 79,  314 => 78,  312 => 77,  308 => 75,  304 => 73,  288 => 71,  280 => 70,  278 => 69,  270 => 68,  268 => 67,  265 => 66,  263 => 65,  260 => 64,  257 => 63,  255 => 62,  249 => 61,  231 => 60,  213 => 59,  209 => 58,  203 => 57,  201 => 56,  198 => 55,  189 => 53,  186 => 52,  181 => 51,  174 => 50,  171 => 49,  170 => 48,  165 => 47,  163 => 46,  160 => 45,  151 => 41,  141 => 40,  138 => 39,  136 => 38,  133 => 37,  127 => 36,  123 => 35,  118 => 34,  117 => 33,  114 => 32,  112 => 31,  110 => 30,  107 => 29,  105 => 28,  99 => 24,  98 => 23,  93 => 21,  89 => 20,  85 => 19,  73 => 18,  70 => 17,  69 => 16,  63 => 12,  60 => 11,  59 => 10,  56 => 9,  50 => 5,  48 => 4,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_body.html", "");
    }
}
