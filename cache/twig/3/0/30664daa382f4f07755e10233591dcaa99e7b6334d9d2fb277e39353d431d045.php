<?php

/* @anavaro_eventmedals/event/viewtopic_body_postrow_custom_fields_after.html */
class __TwigTemplate_30664daa382f4f07755e10233591dcaa99e7b6334d9d2fb277e39353d431d045 extends Twig_Template
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
        echo "<dd class=\"medals_postrow\">";
        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "MEDALS", array());
        echo "</dd>";
    }

    public function getTemplateName()
    {
        return "@anavaro_eventmedals/event/viewtopic_body_postrow_custom_fields_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
