<?php

/* @vse_topicpreview/event/overall_footer_after.html */
class __TwigTemplate_1e0c58a097f9c0df575d0d46ce59ba482142525c2ca58b81d47385c3ab8e9167 extends Twig_Template
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
        if (((isset($context["S_TOPICPREVIEW"]) ? $context["S_TOPICPREVIEW"] : null) && (isset($context["TOPICPREVIEW_THEME"]) ? $context["TOPICPREVIEW_THEME"] : null))) {
            // line 2
            echo "\t";
            $asset_file = "@vse_topicpreview/topicpreview.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('71');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 3
            echo "\t<script>
\t\tjQuery(function() {
\t\t\tjQuery('.topictitle').topicPreview({
\t\t\t\tdir: '";
            // line 6
            echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
            echo "',
\t\t\t\tdelay: ";
            // line 7
            echo (isset($context["TOPICPREVIEW_DELAY"]) ? $context["TOPICPREVIEW_DELAY"] : null);
            echo ",
\t\t\t\twidth: ";
            // line 8
            echo (isset($context["TOPICPREVIEW_WIDTH"]) ? $context["TOPICPREVIEW_WIDTH"] : null);
            echo ",
\t\t\t\tdrift: ";
            // line 9
            echo (isset($context["TOPICPREVIEW_DRIFT"]) ? $context["TOPICPREVIEW_DRIFT"] : null);
            echo ",
\t\t\t\tposition: {left: 35, top: 25},
\t\t\t\tnoavatar: '";
            // line 11
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/no_avatar.gif'
\t\t\t});
\t\t});
\t</script>
";
        } elseif ((        // line 15
(isset($context["S_TOPICPREVIEW"]) ? $context["S_TOPICPREVIEW"] : null) &&  !(isset($context["TOPICPREVIEW_THEME"]) ? $context["TOPICPREVIEW_THEME"] : null))) {
            // line 16
            echo "\t<script>
\t\tjQuery(function() {
\t\t\tjQuery('.topictitle').attr('title', function() {
\t\t\t\treturn jQuery(this).closest('li, tr').find('.topic_preview_first').text() || undefined;
\t\t\t});
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@vse_topicpreview/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  66 => 15,  59 => 11,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  37 => 3,  21 => 2,  19 => 1,);
    }
}
