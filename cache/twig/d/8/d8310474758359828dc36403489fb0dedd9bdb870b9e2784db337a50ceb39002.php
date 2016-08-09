<?php

/* mr_body.html */
class __TwigTemplate_d8310474758359828dc36403489fb0dedd9bdb870b9e2784db337a50ceb39002 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "mr_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a href=\"";
        // line 3
        echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
        echo "\" style=\"float: ";
        echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
        echo ";\">&laquo; ";
        echo $this->env->getExtension('phpbb')->lang("BACK");
        echo "</a>

";
        // line 5
        if ((isset($context["S_FIND_USER"]) ? $context["S_FIND_USER"] : null)) {
            // line 6
            echo "\t<h1>";
            echo $this->env->getExtension('phpbb')->lang("ACP_EDIT_RANKS");
            echo "</h1>
\t<form id=\"select_user\" method=\"post\" action=\"";
            // line 7
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("ACP_SELECT_USER");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"username\">";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("ENTER_USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"username\" name=\"username\" /></dd>
\t\t\t\t<dd>[ <a href=\"";
            // line 13
            echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
            echo "</a> ]</dd>
\t\t\t</dl>

\t\t\t<p class=\"quick\">
\t\t\t\t<input type=\"submit\" name=\"submit-user\" value=\"";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t\t\t</p>
\t\t</fieldset>
\t</form>
";
        }
        // line 22
        echo "
";
        // line 23
        if ((isset($context["S_EDIT_RANKS"]) ? $context["S_EDIT_RANKS"] : null)) {
            // line 24
            echo "\t<h1>";
            echo (isset($context["ACP_MR_USER"]) ? $context["ACP_MR_USER"] : null);
            echo "</h1>
\t<form id=\"update_ranks\" name=\"update_ranks\" method=\"post\" action=\"";
            // line 25
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 27
            echo $this->env->getExtension('phpbb')->lang("ACP_CHANGE_RANKS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"user_rank_one\">";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("ACP_RANK_ONE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><select name=\"user_rank_one\" id=\"user_rank_one\">";
            // line 30
            echo (isset($context["S_RANK_ONE_OPTIONS"]) ? $context["S_RANK_ONE_OPTIONS"] : null);
            echo "</select></dd>
\t\t\t\t<dt><label for=\"user_rank_two\">";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("ACP_RANK_TWO");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><select name=\"user_rank_two\" id=\"user_rank_two\">";
            // line 32
            echo (isset($context["S_RANK_TWO_OPTIONS"]) ? $context["S_RANK_TWO_OPTIONS"] : null);
            echo "</select></dd>
\t\t\t\t<dt><label for=\"user_rank_three\">";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("ACP_RANK_THREE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><select name=\"user_rank_three\" id=\"user_rank_three\">";
            // line 34
            echo (isset($context["S_RANK_THREE_OPTIONS"]) ? $context["S_RANK_THREE_OPTIONS"] : null);
            echo "</select></dd>
\t\t\t</dl>
\t\t\t";
            // line 36
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t<input type=\"hidden\" name=\"hidden_user_id\" id=\"hidden_user_id\" value=\"";
            // line 37
            echo (isset($context["HIDDEN_RANK_USER_ID"]) ? $context["HIDDEN_RANK_USER_ID"] : null);
            echo "\" />
\t\t\t<p class=\"quick\">
\t\t\t\t<input type=\"submit\" name=\"submit-rank\" value=\"";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t\t\t</p>
\t\t</fieldset>
\t</form>
";
        }
        // line 44
        echo "
";
        // line 45
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "mr_body.html", 45)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mr_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  148 => 44,  140 => 39,  135 => 37,  131 => 36,  126 => 34,  121 => 33,  117 => 32,  112 => 31,  108 => 30,  103 => 29,  98 => 27,  93 => 25,  88 => 24,  86 => 23,  83 => 22,  75 => 17,  66 => 13,  60 => 11,  55 => 9,  50 => 7,  45 => 6,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
