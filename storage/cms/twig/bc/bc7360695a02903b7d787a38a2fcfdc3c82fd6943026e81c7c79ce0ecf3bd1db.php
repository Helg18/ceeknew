<?php

/* C:\wamp\www\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/intro.htm */
class __TwigTemplate_afebd010a7ea09006e766e2932f7cd6316bf229b331bbedb65b18cb4d4eaca93 extends Twig_Template
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
        echo "<div
    class=\"image-banner frontpage-banner frontpage-banner-parallax-bg";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "intro_fullscreen", array())) {
            echo " full-screen";
        }
        echo "\"
    data-parallax=\"scroll\"
    data-image-src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/samples/vega-banner2-1-1.jpg");
        echo "\"
    id=\"intro\">
    <div class=\"container\">
        <div class=\"inner\">
            <h1 class=\"block-title wow zoomIn\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.intro.headline"));
        echo "</h1>
            <div class=\"text-center hidden-xs wow zoomIn description\">
                ";
        // line 10
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("intro/content"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 11
        echo "                <p><a class=\"btn btn-primary-custom btn-margin-top\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.intro.button"));
        echo "</a></p>
            </div>
        </div>
        <div class=\"helper\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  41 => 10,  36 => 8,  29 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div
    class=\"image-banner frontpage-banner frontpage-banner-parallax-bg{% if this.theme.intro_fullscreen %} full-screen{% endif %}\"
    data-parallax=\"scroll\"
    data-image-src=\"{{ 'assets/images/samples/vega-banner2-1-1.jpg' | theme }}\"
    id=\"intro\">
    <div class=\"container\">
        <div class=\"inner\">
            <h1 class=\"block-title wow zoomIn\">{{ 'section.intro.headline' | _ }}</h1>
            <div class=\"text-center hidden-xs wow zoomIn description\">
                {% content 'intro/content' %}
                <p><a class=\"btn btn-primary-custom btn-margin-top\" href=\"{{ link }}\">{{ 'section.intro.button' | _ }}</a></p>
            </div>
        </div>
        <div class=\"helper\"></div>
    </div>
</div>", "C:\\wamp\\www\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/intro.htm", "");
    }
}
