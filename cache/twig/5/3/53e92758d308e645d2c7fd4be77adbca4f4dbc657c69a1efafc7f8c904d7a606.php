<?php

/* mr_body.html */
class __TwigTemplate_53e92758d308e645d2c7fd4be77adbca4f4dbc657c69a1efafc7f8c904d7a606 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "mr_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form id=\"update_ranks\" name=\"update_ranks\" method=\"post\" action=\"";
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
<h2>";
        // line 3
        echo (isset($context["ACP_MR_USER"]) ? $context["ACP_MR_USER"] : null);
        echo "</h2>
<div class=\"panel\">
\t<div class=\"inner\">
\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"user_rank_one\">";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("UCP_RANK_ONE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t\t<dd><select name=\"user_rank_one\" id=\"user_rank_one\" disabled style=\"background-color: grey; color: white;\">";
        // line 9
        echo (isset($context["S_RANK_ONE_OPTIONS"]) ? $context["S_RANK_ONE_OPTIONS"] : null);
        echo "</select></dd>
\t\t\t\t<!-- <dd><select name=\"user_rank_one\" id=\"user_rank_one\" disabled>";
        // line 10
        echo (isset($context["S_RANK_ONE_OPTIONS"]) ? $context["S_RANK_ONE_OPTIONS"] : null);
        echo "</select></dd> -->
\t\t\t\t<dt><label for=\"user_rank_two\">";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("ACP_RANK_TWO");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t\t<dd><select name=\"user_rank_two\" id=\"user_rank_two\">";
        // line 12
        echo (isset($context["S_RANK_TWO_OPTIONS"]) ? $context["S_RANK_TWO_OPTIONS"] : null);
        echo "</select></dd>
\t\t\t\t<dt><label for=\"user_rank_three\">";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("ACP_RANK_THREE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t\t<dd><select name=\"user_rank_three\" id=\"user_rank_three\">";
        // line 14
        echo (isset($context["S_RANK_THREE_OPTIONS"]) ? $context["S_RANK_THREE_OPTIONS"] : null);
        echo "</select></dd>
\t\t\t</dl>
\t\t</fieldset>
\t</div>
</div>
";
        // line 19
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
<input type=\"hidden\" name=\"hidden_user_id\" id=\"hidden_user_id\" value=\"";
        // line 20
        echo (isset($context["HIDDEN_RANK_USER_ID"]) ? $context["HIDDEN_RANK_USER_ID"] : null);
        echo "\" />
<fieldset class=\"submit-buttons\">
\t<input type=\"reset\" value=\"";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" /> &nbsp;
\t<input type=\"submit\" name=\"submit-rank\" value=\"";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
</fieldset>
</form>
";
        // line 26
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "mr_body.html", 26)->display($context);
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
        return array (  98 => 26,  92 => 23,  88 => 22,  83 => 20,  79 => 19,  71 => 14,  66 => 13,  62 => 12,  57 => 11,  53 => 10,  49 => 9,  44 => 8,  36 => 3,  31 => 2,  19 => 1,);
    }
}
