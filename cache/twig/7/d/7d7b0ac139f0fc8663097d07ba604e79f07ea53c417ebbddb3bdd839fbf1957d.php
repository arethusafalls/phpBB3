<?php

/* @gfksx_ThanksForPosts/event/forumlist_body_forum_row_append.html */
class __TwigTemplate_7d7b0ac139f0fc8663097d07ba604e79f07ea53c417ebbddb3bdd839fbf1957d extends Twig_Template
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
        if (((($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_THANKS_FORUM_REPUT_VIEW", array()) && $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_REPUT", array())) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) &&  !$this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_THANKS_FORUM_REPUT_VIEW_COLUMN", array()))) {
            // line 2
            echo "<div style=\"display: block; margin-left: 45px; padding-bottom: 5px;\">
\t";
            // line 3
            if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_THANKS_REPUT_GRAPHIC", array())) {
                // line 4
                echo "\t\t<span style=\"display: block; float: left; width: ";
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "THANKS_REPUT_GRAPHIC_WIDTH", array());
                echo "; height: ";
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "THANKS_REPUT_HEIGHT", array());
                echo "; background: url(";
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "THANKS_REPUT_IMAGE_BACK", array());
                echo "); background-repeat: repeat-x;\"><span style=\"display: block; height: ";
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "THANKS_REPUT_HEIGHT", array());
                echo "; width: ";
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_REPUT", array());
                echo "; background: url(";
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "THANKS_REPUT_IMAGE", array());
                echo "); background-repeat: repeat-x;\"></span></span>&nbsp;
\t";
            }
            // line 6
            echo "\t";
            echo $this->env->getExtension('phpbb')->lang("REPUT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_REPUT", array());
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/forumlist_body_forum_row_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
