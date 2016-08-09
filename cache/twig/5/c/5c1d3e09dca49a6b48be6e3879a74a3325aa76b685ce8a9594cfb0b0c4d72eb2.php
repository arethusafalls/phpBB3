<?php

/* @vse_topicpreview/event/topiclist_row_append.html */
class __TwigTemplate_5c1d3e09dca49a6b48be6e3879a74a3325aa76b685ce8a9594cfb0b0c4d72eb2 extends Twig_Template
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
        // line 2
        if ($this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "TOPIC_PREVIEW_FIRST_POST", array())) {
            // line 3
            echo "\t";
            $context["preview"] = (isset($context["topicrow"]) ? $context["topicrow"] : null);
            // line 4
            echo "\t";
            $this->loadTemplate("topicpreview.html", "@vse_topicpreview/event/topiclist_row_append.html", 4)->display($context);
        }
        // line 6
        echo "
";
        // line 8
        if ($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_PREVIEW_FIRST_POST", array())) {
            // line 9
            echo "\t";
            $context["preview"] = (isset($context["searchresults"]) ? $context["searchresults"] : null);
            // line 10
            echo "\t";
            $this->loadTemplate("topicpreview.html", "@vse_topicpreview/event/topiclist_row_append.html", 10)->display($context);
        }
        // line 12
        echo "
";
        // line 14
        if ($this->getAttribute((isset($context["similar"]) ? $context["similar"] : null), "TOPIC_PREVIEW_FIRST_POST", array())) {
            // line 15
            echo "\t";
            $context["preview"] = (isset($context["similar"]) ? $context["similar"] : null);
            // line 16
            echo "\t";
            $this->loadTemplate("topicpreview.html", "@vse_topicpreview/event/topiclist_row_append.html", 16)->display($context);
        }
        // line 18
        echo "
";
        // line 20
        if ($this->getAttribute((isset($context["recent_topics"]) ? $context["recent_topics"] : null), "TOPIC_PREVIEW_FIRST_POST", array())) {
            // line 21
            echo "\t";
            $context["preview"] = (isset($context["recent_topics"]) ? $context["recent_topics"] : null);
            // line 22
            echo "\t";
            $this->loadTemplate("topicpreview.html", "@vse_topicpreview/event/topiclist_row_append.html", 22)->display($context);
        }
        // line 24
        echo "
";
        // line 26
        if ($this->getAttribute((isset($context["top_five_topic"]) ? $context["top_five_topic"] : null), "TOPIC_PREVIEW_FIRST_POST", array())) {
            // line 27
            echo "\t";
            $context["preview"] = (isset($context["top_five_topic"]) ? $context["top_five_topic"] : null);
            // line 28
            echo "\t";
            $this->loadTemplate("topicpreview.html", "@vse_topicpreview/event/topiclist_row_append.html", 28)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@vse_topicpreview/event/topiclist_row_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  69 => 27,  67 => 26,  64 => 24,  60 => 22,  57 => 21,  55 => 20,  52 => 18,  48 => 16,  45 => 15,  43 => 14,  40 => 12,  36 => 10,  33 => 9,  31 => 8,  28 => 6,  24 => 4,  21 => 3,  19 => 2,);
    }
}
