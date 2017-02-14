<?php

/* C:\wamp\www\ceeknew/themes/vojtasvoboda-vega pro/partials/modules/header.htm */
class __TwigTemplate_32fb24ab75f12aeb8d03d15c2917ae3a6c3ba6ad00adc2fb3a0828f98788c6e1 extends Twig_Template
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
        echo "<div class=\"header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 header-left\">
                <ul id=\"menu-top-left\" class=\"top-menu\">
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"mailto:";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "header_email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "header_email", array()), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"tel:";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "header_phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "header_phone", array()), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </div>

            <div class=\"col-sm-6 header-right\">
                ";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "                <ul id=\"menu-top-right\" class=\"social-menu top-menu\">
                    ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_facebook", array())) {
            // line 19
            echo "                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_facebook", array()), "html", null, true);
            echo "\" target=\"_blank\">Facebook</a>
                    </li>
                    ";
        }
        // line 23
        echo "                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_google", array())) {
            // line 24
            echo "                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_google", array()), "html", null, true);
            echo "\" target=\"_blank\">Google</a>
                    </li>
                    ";
        }
        // line 28
        echo "                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_twitter", array())) {
            // line 29
            echo "                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_twitter", array()), "html", null, true);
            echo "\" target=\"_blank\">Twitter</a>
                    </li>
                    ";
        }
        // line 33
        echo "                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_instagram", array())) {
            // line 34
            echo "                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_instagram", array()), "html", null, true);
            echo "\" target=\"_blank\">Instagram</a>
                    </li>
                    ";
        }
        // line 38
        echo "                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_linkedin", array())) {
            // line 39
            echo "                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_linkedin", array()), "html", null, true);
            echo "\" target=\"_blank\">LinkedIn</a>
                    </li>
                    ";
        }
        // line 43
        echo "                </ul>
            </div>
        </div>
    </div>
</div>
<div class=\"header-toggle\"><i class=\"fa fa-angle-down\"></i></div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ceeknew/themes/vojtasvoboda-vega pro/partials/modules/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 43,  106 => 40,  103 => 39,  100 => 38,  94 => 35,  91 => 34,  88 => 33,  82 => 30,  79 => 29,  76 => 28,  70 => 25,  67 => 24,  64 => 23,  58 => 20,  55 => 19,  53 => 18,  50 => 17,  46 => 16,  35 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 header-left\">
                <ul id=\"menu-top-left\" class=\"top-menu\">
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"mailto:{{ this.theme.header_email }}\">{{ this.theme.header_email }}</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"tel:{{ this.theme.header_phone }}\">{{ this.theme.header_phone }}</a>
                    </li>
                </ul>
            </div>

            <div class=\"col-sm-6 header-right\">
                {% component 'localePicker' %}
                <ul id=\"menu-top-right\" class=\"social-menu top-menu\">
                    {% if this.theme.social_facebook %}
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"{{ this.theme.social_facebook }}\" target=\"_blank\">Facebook</a>
                    </li>
                    {% endif %}
                    {% if this.theme.social_google %}
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"{{ this.theme.social_google }}\" target=\"_blank\">Google</a>
                    </li>
                    {% endif %}
                    {% if this.theme.social_twitter %}
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"{{ this.theme.social_twitter }}\" target=\"_blank\">Twitter</a>
                    </li>
                    {% endif %}
                    {% if this.theme.social_instagram %}
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"{{ this.theme.social_instagram }}\" target=\"_blank\">Instagram</a>
                    </li>
                    {% endif %}
                    {% if this.theme.social_linkedin %}
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"{{ this.theme.social_linkedin }}\" target=\"_blank\">LinkedIn</a>
                    </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>
</div>
<div class=\"header-toggle\"><i class=\"fa fa-angle-down\"></i></div>", "C:\\wamp\\www\\ceeknew/themes/vojtasvoboda-vega pro/partials/modules/header.htm", "");
    }
}
