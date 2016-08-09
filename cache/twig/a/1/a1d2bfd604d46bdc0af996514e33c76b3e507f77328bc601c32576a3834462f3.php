<?php

/* @gfksx_ThanksForPosts/event/topiclist_row_append.html */
class __TwigTemplate_a1d2bfd604d46bdc0af996514e33c76b3e507f77328bc601c32576a3834462f3 extends Twig_Template
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
        if ((isset($context["topicrow"]) ? $context["topicrow"] : null)) {
            // line 2
            echo "    ";
            $context["rating"] = (isset($context["topicrow"]) ? $context["topicrow"] : null);
        } elseif (        // line 3
(isset($context["recent_topics"]) ? $context["recent_topics"] : null)) {
            // line 4
            echo "    ";
            $context["rating"] = (isset($context["recent_topics"]) ? $context["recent_topics"] : null);
        }
        // line 6
        $this->loadTemplate("topicrow_rating_body.html", "@gfksx_ThanksForPosts/event/topiclist_row_append.html", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/topiclist_row_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
