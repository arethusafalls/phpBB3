<?php

/* @posey_multiranks/event/viewtopic_body_postrow_rank_after.html */
class __TwigTemplate_2b76602324419eca910ae7a97e5f937b0e53e282bee576b9b22be487b16b7992 extends Twig_Template
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
        if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TWO_TITLE", array()) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TWO_IMG", array()))) {
            echo "<dd class=\"profile-rank\">";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TWO_IMG", array());
            echo "</dd>";
        }
        // line 2
        if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_THR_TITLE", array()) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_THR_IMG", array()))) {
            echo "<dd class=\"profile-rank\">";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_THR_IMG", array());
            echo "</dd>";
        }
    }

    public function getTemplateName()
    {
        return "@posey_multiranks/event/viewtopic_body_postrow_rank_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  19 => 1,);
    }
}
