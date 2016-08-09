<?php

/* @paybas_recenttopics/recent_topics_body.html */
class __TwigTemplate_8346f0322d5269b59702a245682a09ba59b2a5a5a11ef38cbd07475b4157412f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a id=\"recent_topics\"></a>
";
        // line 2
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 3
            echo "<div class=\"action-bar\">
\t<div class=\"pagination\">
\t\t";
            // line 5
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "@paybas_recenttopics/recent_topics_body.html", 5)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 6
            echo "\t</div>
</div>
";
        }
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "recent_topics", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recent_topics"]) {
            // line 11
            echo "\t";
            if (( !$this->getAttribute($context["recent_topics"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["recent_topics"], "S_FIRST_ROW", array()))) {
                // line 12
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 16
            echo "
\t";
            // line 17
            if (($this->getAttribute($context["recent_topics"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["recent_topics"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 18
                echo "\t<div class=\"forumbg recent-topics\">
\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 23
                echo $this->env->getExtension('phpbb')->lang("RECENT_TOPICS");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 24
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 25
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 26
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">
\t";
            }
            // line 32
            echo "
\t\t<li class=\"row";
            // line 33
            if (($this->getAttribute($context["recent_topics"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if ($this->getAttribute($context["recent_topics"], "S_POST_GLOBAL", array())) {
                echo " global-announce";
            }
            if ($this->getAttribute($context["recent_topics"], "S_POST_ANNOUNCE", array())) {
                echo " announce";
            }
            if ($this->getAttribute($context["recent_topics"], "S_POST_STICKY", array())) {
                echo " sticky";
            }
            if ($this->getAttribute($context["recent_topics"], "S_TOPIC_REPORTED", array())) {
                echo " reported";
            }
            echo "\">
\t\t\t<dl class=\"icon ";
            // line 34
            echo $this->getAttribute($context["recent_topics"], "TOPIC_IMG_STYLE", array());
            echo "\">
\t\t\t\t<dt";
            // line 35
            if (($this->getAttribute($context["recent_topics"], "TOPIC_ICON_IMG", array()) && (isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                echo " style=\"background-image: url(";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["recent_topics"], "TOPIC_ICON_IMG", array());
                echo "); background-repeat: no-repeat;\"";
            }
            echo " title=\"";
            echo $this->getAttribute($context["recent_topics"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">
\t\t\t\t\t";
            // line 36
            if (($this->getAttribute($context["recent_topics"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_NEWEST_POST", array());
                echo "\" class=\"icon-link\"></a>";
            }
            // line 37
            echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
            // line 38
            // line 39
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["recent_topics"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_NEWEST_POST", array());
                echo "\">";
                echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                echo "</a> ";
            }
            echo "<a href=\"";
            echo $this->getAttribute($context["recent_topics"], "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\">";
            echo $this->getAttribute($context["recent_topics"], "TOPIC_TITLE", array());
            echo "</a> ";
            if ($this->getAttribute($context["recent_topics"], "ATTACH_ICON_IMG", array())) {
                echo $this->getAttribute($context["recent_topics"], "ATTACH_ICON_IMG", array());
            }
            // line 40
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["recent_topics"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["recent_topics"], "S_POSTS_UNAPPROVED", array()))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_MCP_QUEUE", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "UNAPPROVED_IMG", array());
                echo "</a> ";
            }
            // line 41
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["recent_topics"], "S_TOPIC_DELETED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_MCP_QUEUE", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "DELETED_IMG", array());
                echo "</a> ";
            }
            // line 42
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["recent_topics"], "S_TOPIC_REPORTED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_MCP_REPORT", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "REPORTED_IMG", array());
                echo "</a>";
            }
            echo "<br />

\t\t\t\t\t\t";
            // line 44
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 45
                echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 46
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["recent_topics"], "LAST_POST_AUTHOR_FULL", array());
                echo " &laquo; <a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "LAST_POST_TIME", array());
                echo "</a>
\t\t\t\t\t\t\t";
                // line 47
                if (($this->getAttribute($context["recent_topics"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["recent_topics"], "FORUM_ID", array())))) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["recent_topics"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["recent_topics"], "FORUM_NAME", array());
                    echo "</a>";
                }
                // line 48
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 49
                if ($this->getAttribute($context["recent_topics"], "REPLIES", array())) {
                    echo "<span class=\"responsive-show left-box\" style=\"display: none;\">";
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["recent_topics"], "REPLIES", array());
                    echo "</strong></span>";
                }
                // line 50
                echo "\t\t\t\t\t\t";
            }
            // line 51
            echo "
\t\t\t\t\t\t";
            // line 52
            if (twig_length_filter($this->env, $this->getAttribute($context["recent_topics"], "pagination", array()))) {
                // line 53
                echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 55
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["recent_topics"], "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                        // line 57
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 58
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 59
$context["pagination"], "S_IS_NEXT", array())) {
                        // line 60
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 62
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 66
            echo "
\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
            // line 68
            if ($this->getAttribute($context["recent_topics"], "S_HAS_POLL", array())) {
                echo (isset($context["POLL_IMG"]) ? $context["POLL_IMG"] : null);
                echo " ";
            }
            // line 69
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["recent_topics"], "TOPIC_AUTHOR_FULL", array());
            echo " &raquo; ";
            echo $this->getAttribute($context["recent_topics"], "FIRST_POST_TIME", array());
            echo "
\t\t\t\t\t\t\t";
            // line 70
            if (($this->getAttribute($context["recent_topics"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["recent_topics"], "FORUM_ID", array())))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb')->lang("IN");
                echo " <a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 71
$context["recent_topics"], "U_VIEW_FORUM", array()) && $this->getAttribute($context["recent_topics"], "FORUM_NAME", array()))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb')->lang("IN");
                echo " ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["recent_topics"], "parent_forums", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["parent_forums"]) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["parent_forums"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["parent_forums"], "FORUM_NAME", array());
                    echo "</a> &raquo; ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent_forums'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "FORUM_NAME", array());
                echo "</a>";
            }
            // line 72
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 74
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('gfksx_ThanksForPosts', '__main__'));
            $this->env->loadTemplate('@gfksx_ThanksForPosts/event/topiclist_row_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('vse_topicpreview', '__main__'));
            $this->env->loadTemplate('@vse_topicpreview/event/topiclist_row_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 75
            echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
            // line 77
            echo $this->getAttribute($context["recent_topics"], "REPLIES", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb')->lang("REPLIES");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"views\">";
            // line 78
            echo $this->getAttribute($context["recent_topics"], "VIEWS", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb')->lang("VIEWS");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["recent_topics"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t\t\t";
            // line 80
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                echo "\">";
                echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                echo "</a> ";
            }
            echo "<br />";
            echo $this->getAttribute($context["recent_topics"], "LAST_POST_TIME", array());
            echo "</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</li>

\t";
            // line 85
            if ($this->getAttribute($context["recent_topics"], "S_LAST_ROW", array())) {
                // line 86
                echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 90
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recent_topics'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@paybas_recenttopics/recent_topics_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 94,  408 => 92,  402 => 90,  396 => 86,  394 => 85,  376 => 80,  368 => 79,  362 => 78,  356 => 77,  352 => 75,  343 => 74,  339 => 72,  316 => 71,  306 => 70,  297 => 69,  292 => 68,  288 => 66,  283 => 63,  277 => 62,  267 => 60,  265 => 59,  259 => 58,  252 => 57,  249 => 56,  245 => 55,  241 => 53,  239 => 52,  236 => 51,  233 => 50,  224 => 49,  221 => 48,  209 => 47,  195 => 46,  192 => 45,  190 => 44,  178 => 42,  169 => 41,  160 => 40,  143 => 39,  142 => 38,  139 => 37,  133 => 36,  122 => 35,  118 => 34,  98 => 33,  95 => 32,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  67 => 18,  65 => 17,  62 => 16,  56 => 12,  53 => 11,  48 => 10,  45 => 9,  40 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
