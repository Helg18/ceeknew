<?php

/* C:\xampp\htdocs\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/cta.htm */
class __TwigTemplate_56da234b7b763b39a4fb96c828df4a5ab587f002897fbbfbd898d18d07325f5e extends Twig_Template
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
        echo "<div class=\"shadow\"></div>
<div class=\"section frontpage-cta parallax-bg\" data-parallax=\"scroll\" data-image-src=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/samples/station-enhanced-2.jpg");
        echo "\" id=\"cta\">
    <div class=\"container wow zoomIn description\">
        <div class=\"description\">
            <h2>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.cta.heading"));
        echo "</h2>
            ";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("cta/subheading"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "            <p>&nbsp;</p>
            <p>
                <a class=\"btn btn-primary-custom btn-margin-top btn-margin-bottom\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.cta.button"));
        echo "</a>
            </p>
            <p>&nbsp;</p>
            ";
        // line 12
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("cta/content"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 13
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/cta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  48 => 12,  40 => 9,  36 => 7,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"shadow\"></div>
<div class=\"section frontpage-cta parallax-bg\" data-parallax=\"scroll\" data-image-src=\"{{ 'assets/images/samples/station-enhanced-2.jpg' | theme }}\" id=\"cta\">
    <div class=\"container wow zoomIn description\">
        <div class=\"description\">
            <h2>{{ 'section.cta.heading' | _ }}</h2>
            {% content 'cta/subheading' %}
            <p>&nbsp;</p>
            <p>
                <a class=\"btn btn-primary-custom btn-margin-top btn-margin-bottom\" href=\"{{ link }}\">{{ 'section.cta.button' | _ }}</a>
            </p>
            <p>&nbsp;</p>
            {% content 'cta/content' %}
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/cta.htm", "");
    }
}
