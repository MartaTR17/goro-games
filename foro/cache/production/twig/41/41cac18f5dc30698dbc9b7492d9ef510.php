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

/* navbar_main.html */
class __TwigTemplate_e3af92e3275a35587a976a018dc4e2cc extends \Twig\Template
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
        echo "<div id=\"myNav\" class=\"overlay\">
  <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
  <div class=\"overlay-content\">
\t<ul role=\"menu\">
\t\t";
        // line 5
        // line 6
        echo "\t\t";
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 7
            echo "\t\t";
            // line 8
            echo "\t\t";
            // line 9
            echo "\t\t<li><a href=\"";
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"nav-avatar\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo " ";
            }
            echo " ";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a></li>
\t\t";
            // line 10
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 11
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 12
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">
\t\t\t\t<i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 13
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 17
            echo "\t\t";
            // line 18
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 19
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 20
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            // line 23
            if (($context["U_USER_PROFILE"] ?? null)) {
                // line 24
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 25
                echo ($context["U_USER_PROFILE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 26
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 30
            echo "\t\t";
            // line 31
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 32
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 33
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t</a>
\t\t</li>

\t\t";
            // line 37
            // line 38
            echo "\t\t
\t\t";
            // line 39
            // line 40
            echo "\t\t";
        } elseif ( !($context["S_IS_BOT"] ?? null)) {
            // line 41
            echo "\t\t<li class=\"rightside responsive-hide\"  data-skip-responsive=\"true\">
\t\t\t<a href=\"";
            // line 42
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 43
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            // line 46
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 47
                echo "\t\t<li class=\"rightside responsive-hide\" data-skip-responsive=\"true\">
\t\t\t<a href=\"";
                // line 48
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-pencil-square-o  fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 49
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 53
            echo "\t\t";
            // line 54
            echo "\t\t";
        }
        // line 55
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 56
            echo "\t\t<li data-last-responsive=\"true\">
\t\t\t<a href=\"";
            // line 57
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 58
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 62
        echo "\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 63
            echo "\t\t<li data-last-responsive=\"true\">
\t\t\t<a href=\"";
            // line 64
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 65
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 69
        echo "\t\t";
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 70
            echo "\t\t";
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 71
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 72
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
                // line 73
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 77
            echo "\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 78
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 79
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 80
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 84
            echo "\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 85
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 86
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 87
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 91
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 92
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 93
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
            // line 97
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 98
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
            // line 102
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 103
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 107
        echo "\t\t";
        // line 108
        echo "\t\t<li ";
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo ">
\t\t\t<a href=\"";
        // line 109
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 110
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        // line 113
        // line 114
        echo "\t\t";
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            echo "\t\t\t
\t\t";
            // line 115
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 116
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 117
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 118
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 122
            echo "\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 123
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 124
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 125
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 129
            echo "\t\t";
        }
        // line 130
        echo "\t\t";
        // line 131
        echo "  </ul>
  </div>
</div>

<ul id=\"nav-main\" class=\"nav-main linklist\" role=\"menubar\">
\t<li class=\"responsive-show\" style=\"display:none; position:absolute;\" onclick=\"openNav()\"><i class=\"icon fa-ellipsis-h fa-fw\" aria-hidden=\"true\"></i></li>
\t\t<li id=\"quick-links\" class=\"quick-links dropdown-container responsive-menu responsive-hide";
        // line 137
        if (( !($context["S_DISPLAY_QUICK_LINKS"] ?? null) &&  !($context["S_DISPLAY_SEARCH"] ?? null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t<a href=\"#\" class=\"dropdown-trigger\">
\t\t\t\t<i class=\"icon fa-ellipsis-h\" aria-hidden=\"true\"></i><span>";
        // line 139
        echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_LINKS");
        echo "</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t";
        // line 144
        // line 145
        echo "\t\t\t\t\t";
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 146
            echo "\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t";
            // line 147
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 148
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 149
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
                // line 150
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 154
            echo "\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 155
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 156
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 157
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 161
            echo "\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 162
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 163
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 164
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 168
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 169
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 170
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 174
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 175
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 180
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 181
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 185
        echo "
\t\t\t\t\t";
        // line 186
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 187
            echo "\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t";
            // line 188
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 189
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 190
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 191
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 195
            echo "\t\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 196
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 197
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 198
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 202
            echo "\t\t\t\t\t";
        }
        // line 203
        echo "\t\t\t\t\t<li class=\"separator\"></li>

\t\t\t\t\t";
        // line 205
        // line 206
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>

\t\t";
        // line 210
        // line 211
        echo "\t\t<li class=\"responsive-hide\" ";
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo ">
\t\t\t<a href=\"";
        // line 212
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 213
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        // line 216
        // line 217
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 218
            echo "\t\t<li class=\"responsive-hide\" data-last-responsive=\"true\">
\t\t\t<a href=\"";
            // line 219
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 220
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 224
        echo "\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 225
            echo "\t\t<li class=\"responsive-hide\" data-last-responsive=\"true\">
\t\t\t<a href=\"";
            // line 226
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 227
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 231
        echo "
\t\t";
        // line 232
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 233
            echo "\t\t";
            // line 234
            echo "\t\t<li id=\"username_logged_in\" class=\"rightside responsive-hide ";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t";
            // line 235
            // line 236
            echo "\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t<a href=\"";
            // line 237
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo " ";
            }
            echo " ";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t";
            // line 241
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 242
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 243
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 244
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 248
            echo "
\t\t\t\t\t\t";
            // line 249
            // line 250
            echo "
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 252
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 253
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 256
            if (($context["U_USER_PROFILE"] ?? null)) {
                // line 257
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 258
                echo ($context["U_USER_PROFILE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 259
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 263
            echo "\t\t\t\t\t\t";
            // line 264
            echo "
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 267
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 268
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 274
            // line 275
            echo "\t\t</li>
\t\t";
            // line 276
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 277
                echo "\t\t<li class=\"rightside\" data-skip-responsive=\"true\" style=\"display:block;\">
\t\t\t<a href=\"";
                // line 278
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-inbox fa-fw\" aria-hidden=\"true\"></i><span class=\"responsive-hide\">";
                // line 279
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_MESSAGES");
                echo "</span><strong class=\"badge ";
                if ( !($context["PRIVATE_MESSAGE_COUNT"] ?? null)) {
                    echo " hidden ";
                }
                echo "\">";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 282
            echo "\t\t
\t\t";
            // line 283
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                echo " 
\t\t<li class=\"dropdown-container dropdown-";
                // line 284
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " rightside\" data-skip-responsive=\"true\" style=\"display:block;\">
\t\t\t<a href=\"";
                // line 285
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\">
\t\t\t\t<i class=\"icon fa-bell fa-fw ";
                // line 286
                if (($context["NOTIFICATIONS_COUNT"] ?? null)) {
                    echo " faa-ring animated faa-slow";
                }
                echo "\" aria-hidden=\"true\"></i><span><span class=\"responsive-hide\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo "</span> <strong class=\"badge";
                if ( !($context["NOTIFICATIONS_COUNT"] ?? null)) {
                    echo " hidden ";
                }
                echo "\">";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong></span>
\t\t\t</a>
\t\t\t";
                // line 288
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "navbar_main.html", 288)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 289
                echo "\t\t</li>
\t\t";
            }
            // line 291
            echo "\t
\t\t";
            // line 292
            // line 293
            echo "\t\t";
        } elseif ( !($context["S_IS_BOT"] ?? null)) {
            // line 294
            echo "\t\t<li class=\"rightside\"  data-skip-responsive=\"true\" style=\"display:block;\">
\t\t\t<a href=\"";
            // line 295
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span class=\"responsive-hide\">";
            // line 296
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            // line 299
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 300
                echo "\t\t<li class=\"rightside\" data-skip-responsive=\"true\" style=\"display:block;\">
\t\t\t<a href=\"";
                // line 301
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-pencil-square-o  fa-fw\" aria-hidden=\"true\"></i><span class=\"responsive-hide\">";
                // line 302
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 306
            echo "\t\t";
            // line 307
            echo "\t\t";
        }
        // line 308
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "navbar_main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  827 => 308,  824 => 307,  822 => 306,  815 => 302,  811 => 301,  808 => 300,  806 => 299,  800 => 296,  794 => 295,  791 => 294,  788 => 293,  787 => 292,  784 => 291,  780 => 289,  768 => 288,  753 => 286,  749 => 285,  745 => 284,  741 => 283,  738 => 282,  725 => 279,  721 => 278,  718 => 277,  716 => 276,  713 => 275,  712 => 274,  703 => 268,  697 => 267,  692 => 264,  690 => 263,  683 => 259,  677 => 258,  674 => 257,  672 => 256,  666 => 253,  660 => 252,  656 => 250,  655 => 249,  652 => 248,  645 => 244,  641 => 243,  638 => 242,  636 => 241,  622 => 237,  619 => 236,  618 => 235,  611 => 234,  609 => 233,  607 => 232,  604 => 231,  597 => 227,  591 => 226,  588 => 225,  585 => 224,  578 => 220,  572 => 219,  569 => 218,  566 => 217,  565 => 216,  559 => 213,  553 => 212,  544 => 211,  543 => 210,  537 => 206,  536 => 205,  532 => 203,  529 => 202,  522 => 198,  518 => 197,  515 => 196,  512 => 195,  505 => 191,  501 => 190,  498 => 189,  496 => 188,  493 => 187,  491 => 186,  488 => 185,  481 => 181,  477 => 180,  469 => 175,  465 => 174,  458 => 170,  454 => 169,  451 => 168,  444 => 164,  440 => 163,  437 => 162,  434 => 161,  427 => 157,  423 => 156,  420 => 155,  417 => 154,  410 => 150,  406 => 149,  403 => 148,  401 => 147,  398 => 146,  395 => 145,  394 => 144,  386 => 139,  379 => 137,  371 => 131,  369 => 130,  366 => 129,  359 => 125,  355 => 124,  352 => 123,  349 => 122,  342 => 118,  338 => 117,  335 => 116,  333 => 115,  328 => 114,  327 => 113,  321 => 110,  315 => 109,  306 => 108,  304 => 107,  297 => 103,  293 => 102,  286 => 98,  282 => 97,  275 => 93,  271 => 92,  268 => 91,  261 => 87,  257 => 86,  254 => 85,  251 => 84,  244 => 80,  240 => 79,  237 => 78,  234 => 77,  227 => 73,  223 => 72,  220 => 71,  217 => 70,  214 => 69,  207 => 65,  201 => 64,  198 => 63,  195 => 62,  188 => 58,  182 => 57,  179 => 56,  176 => 55,  173 => 54,  171 => 53,  164 => 49,  160 => 48,  157 => 47,  155 => 46,  149 => 43,  143 => 42,  140 => 41,  137 => 40,  136 => 39,  133 => 38,  132 => 37,  125 => 33,  119 => 32,  116 => 31,  114 => 30,  107 => 26,  101 => 25,  98 => 24,  96 => 23,  90 => 20,  84 => 19,  81 => 18,  79 => 17,  72 => 13,  68 => 12,  65 => 11,  63 => 10,  51 => 9,  49 => 8,  47 => 7,  44 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_main.html", "");
    }
}
