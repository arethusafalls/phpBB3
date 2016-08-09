<?php

/* @gfksx_ThanksForPosts/event/navbar_header_quick_links_after.html */
class __TwigTemplate_0788a8d957701165bfd10d7f48018be4c20e1b0a236b4a362ad1fe3c8c12c3fd extends Twig_Template
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
        if ((isset($context["S_DISPLAY_TOPLIST"]) ? $context["S_DISPLAY_TOPLIST"] : null)) {
            echo "<li class=\"small-icon icon-thanks_toplist\"><a href=\"";
            echo (isset($context["U_REPUT_TOPLIST"]) ? $context["U_REPUT_TOPLIST"] : null);
            echo "\"  role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("TOPLIST");
            echo "</a></li>";
        }
        // line 2
        if ((isset($context["S_DISPLAY_THANKSLIST"]) ? $context["S_DISPLAY_THANKSLIST"] : null)) {
            echo "<li class=\"small-icon icon-thanks\"><a href=\"";
            echo (isset($context["U_THANKS_LIST"]) ? $context["U_THANKS_LIST"] : null);
            echo "\"  role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("GRATITUDES");
            echo "</a></li>";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/navbar_header_quick_links_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  19 => 1,);
    }
}
