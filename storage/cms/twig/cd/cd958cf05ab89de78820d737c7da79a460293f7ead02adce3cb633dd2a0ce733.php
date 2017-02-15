<?php

/* C:\xampp\htdocs\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/welcome.htm */
class __TwigTemplate_ad7bb2441815b6a947735f7459455b89807525545f31bb7687e23309945b139a extends Twig_Template
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
        echo "<div class=\"section frontpage-content bg-white\" id=\"welcome\">
    <div class=\"container\">
        <h2 class=\"block-title wow zoomIn\">";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.welcome.headline"));
        echo "</h2>
        <div class=\"wow fadeInUp description\">
            ";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("welcome/content"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "            ";
        if ((isset($context["enabled"]) ? $context["enabled"] : null)) {
            // line 7
            echo "            <p>
                <a class=\"btn btn-primary-custom btn-margin-top\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.welcome.button"));
            echo "</a>
            </p>
            ";
        }
        // line 11
        echo "            <p class=\"no-margin\">
                <img src=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/samples/preview-1.jpg");
        echo "\" class=\"img-responsive\" />
            </p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/welcome.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  46 => 11,  38 => 8,  35 => 7,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section frontpage-content bg-white\" id=\"welcome\">
    <div class=\"container\">
        <h2 class=\"block-title wow zoomIn\">{{ 'section.welcome.headline' | _ }}</h2>
        <div class=\"wow fadeInUp description\">
            {% content 'welcome/content' %}
            {% if enabled %}
            <p>
                <a class=\"btn btn-primary-custom btn-margin-top\" href=\"{{ link }}\">{{ 'section.welcome.button' | _ }}</a>
            </p>
            {% endif %}
            <p class=\"no-margin\">
                <img src=\"{{ 'assets/images/samples/preview-1.jpg' | theme }}\" class=\"img-responsive\" />
            </p>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/welcome.htm", "");
    }
}
