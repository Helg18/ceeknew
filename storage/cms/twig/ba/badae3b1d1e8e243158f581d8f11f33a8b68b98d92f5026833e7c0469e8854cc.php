<?php

/* C:\xampp\htdocs\ceeknew/themes/vojtasvoboda-vega pro/partials/localePicker/default.htm */
class __TwigTemplate_1e0ed8150d242275d236ab2ae64155fad74e6e42505fe35f7b39dfa481fb70bf extends Twig_Template
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
        echo "<ul class=\"locale-menu\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : null));
        foreach ($context['_seq'] as $context["code"] => $context["name"]) {
            // line 3
            echo "    ";
            if (((isset($context["activeLocale"]) ? $context["activeLocale"] : null) != $context["code"])) {
                // line 4
                echo "    <li>
        <a href=\"#\" class=\"lang\" data-request=\"onSwitchLocale\" data-request-data=\"locale: '";
                // line 5
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "'\">
            <img src=\"";
                // line 6
                echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter((("assets/images/flags/" . $context["code"]) . ".png"));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
        </a>
    </li>
    ";
            }
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/localePicker/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  45 => 10,  36 => 6,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"locale-menu\">
    {% for code, name in locales %}
    {% if activeLocale != code %}
    <li>
        <a href=\"#\" class=\"lang\" data-request=\"onSwitchLocale\" data-request-data=\"locale: '{{ code }}'\">
            <img src=\"{{ ('assets/images/flags/' ~ code ~ '.png') | theme }}\" alt=\"{{ code }}\">
        </a>
    </li>
    {% endif %}
    {% endfor %}
</ul>", "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/localePicker/default.htm", "");
    }
}
