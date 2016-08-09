<?php

/* @bb3mobi_lastpostavatar/event/forumlist_body_last_post_title_prepend.html */
class __TwigTemplate_04d75a506e0517772d9c637bdb2488920e07c5bf369f8e726b7c70a798213e01 extends Twig_Template
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
        if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "AVATAR_IMG", array())) {
            // line 2
            echo "<span class=\"lastpostavatar\">";
            echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "AVATAR_IMG", array());
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "@bb3mobi_lastpostavatar/event/forumlist_body_last_post_title_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
