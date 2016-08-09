<?php

/* @gfksx_ThanksForPosts/event/viewtopic_body_post_buttons_after.html */
class __TwigTemplate_282e0cdda38bb1be0656aa3406c5d12fcf36fbe72a72187a0070b9dc687a86f8 extends Twig_Template
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
        if (( !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_FIRST_POST_ONLY", array()) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_ONLY_TOPICSTART", array()))) {
            // line 2
            echo "\t";
            if (((((( !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_GLOBAL_POST_THANKS", array()) &&  !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_ANONYMOUS", array())) && (isset($context["S_FORUM_THANKS"]) ? $context["S_FORUM_THANKS"] : null)) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) &&  !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_IS_OWN_POST", array())) && ( !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_ALREADY_THANKED", array()) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_REMOVE_THANKS", array())))) {
                // line 3
                echo "\t\t<li>
\t\t\t<a id='lnk_thanks_post";
                // line 4
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
                echo "' href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_LINK", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANK_ALT", array());
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR", array());
                echo "\" class=\"button icon-button ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_IMG", array());
                echo "\"><span>";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANK_ALT_SHORT", array());
                echo "</span></a>
\t\t</li>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/viewtopic_body_post_buttons_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
