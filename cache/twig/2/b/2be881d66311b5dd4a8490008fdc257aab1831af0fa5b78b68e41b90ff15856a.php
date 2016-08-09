<?php

/* @paybas_recenttopics/event/index_body_markforums_before.html */
class __TwigTemplate_2be881d66311b5dd4a8490008fdc257aab1831af0fa5b78b68e41b90ff15856a extends Twig_Template
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
        if (((isset($context["RECENT_TOPICS_DISPLAY"]) ? $context["RECENT_TOPICS_DISPLAY"] : null) && ((isset($context["recent_topics_included"]) ? $context["recent_topics_included"] : null) != true))) {
            $location = "recent_topics_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("recent_topics_body.html", "@paybas_recenttopics/event/index_body_markforums_before.html", 1)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            echo "<!-- DEFINE recent_topics_included = true -->";
        }
    }

    public function getTemplateName()
    {
        return "@paybas_recenttopics/event/index_body_markforums_before.html";
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
