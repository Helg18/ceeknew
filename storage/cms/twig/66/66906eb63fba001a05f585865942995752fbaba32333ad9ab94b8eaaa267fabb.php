<?php

/* C:\wamp\www\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/cta2.htm */
class __TwigTemplate_2956a9e6b7332ec68a40e6f733d23db2f4dd8c93bdecbf0f1240ef7ed5048133 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/samples/rural-enhanced-1.jpg");
        echo "\" id=\"cta2\">
    <div class=\"container wow zoomIn\">
        <div class=\"description\">
            <p>
                ";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("cta2/heading"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "                <p>&nbsp;</p>
                <p>
                    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-primary-custom btn-margin-top\"><strong>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.cta2.button"));
        echo "</strong></a>
                </p>
                <p>&nbsp;</p>
                ";
        // line 12
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("cta2/content"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 13
        echo "            </p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/cta2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  45 => 12,  37 => 9,  33 => 7,  29 => 6,  22 => 2,  19 => 1,);
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
<div class=\"section frontpage-cta parallax-bg\" data-parallax=\"scroll\" data-image-src=\"{{ 'assets/images/samples/rural-enhanced-1.jpg' | theme }}\" id=\"cta2\">
    <div class=\"container wow zoomIn\">
        <div class=\"description\">
            <p>
                {% content 'cta2/heading' %}
                <p>&nbsp;</p>
                <p>
                    <a href=\"{{ link }}\" target=\"_blank\" class=\"btn btn-primary-custom btn-margin-top\"><strong>{{ 'section.cta2.button' | _ }}</strong></a>
                </p>
                <p>&nbsp;</p>
                {% content 'cta2/content' %}
            </p>
        </div>
    </div>
</div>", "C:\\wamp\\www\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/cta2.htm", "");
    }
}
