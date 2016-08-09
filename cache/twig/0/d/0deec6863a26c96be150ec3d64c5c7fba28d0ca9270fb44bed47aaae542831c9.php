<?php

/* @gfksx_ThanksForPosts/event/index_body_stat_blocks_after.html */
class __TwigTemplate_0deec6863a26c96be150ec3d64c5c7fba28d0ca9270fb44bed47aaae542831c9 extends Twig_Template
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
        if ((isset($context["S_THANKS_LIST"]) ? $context["S_THANKS_LIST"] : null)) {
            // line 2
            echo "<div class=\"stat-block thanks-list\">
\t<h3><a href=\"";
            // line 3
            echo (isset($context["U_THANKS_LIST"]) ? $context["U_THANKS_LIST"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TOP_THANKS_LIST");
            echo "</a></h3>
\t<p>";
            // line 4
            echo (isset($context["THANKS_LIST"]) ? $context["THANKS_LIST"] : null);
            echo "</p>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/index_body_stat_blocks_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
