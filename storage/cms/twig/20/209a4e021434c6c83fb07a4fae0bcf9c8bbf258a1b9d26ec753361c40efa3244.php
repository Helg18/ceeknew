<?php

/* C:\wamp\www\ceeknew/themes/vojtasvoboda-vega pro/partials/modules/copyright.htm */
class __TwigTemplate_1c0bc6b0eaef0e7a5debc16dae8d97b0b41573e7ab3bafb2a3b1d107f0bdc665 extends Twig_Template
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
        echo "<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Navigation -->
            <div class=\"col-md-8\">
                <ul id=\"menu-footer\" class=\"nav-foot\">
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"#\">Contact</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"#\">Terms</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"#\">Privacy</a>
                    </li>
                </ul>
            </div>

            <!-- Copyright and Credits -->
            <div class=\"col-md-4\">
                <div class=\"copyright\">
                    ";
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "copyright_first", array());
        echo "<br />
                    ";
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "copyright_second", array());
        echo "
                </div>
            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ceeknew/themes/vojtasvoboda-vega pro/partials/modules/copyright.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 24,  43 => 23,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Navigation -->
            <div class=\"col-md-8\">
                <ul id=\"menu-footer\" class=\"nav-foot\">
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"#\">Contact</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"#\">Terms</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"#\">Privacy</a>
                    </li>
                </ul>
            </div>

            <!-- Copyright and Credits -->
            <div class=\"col-md-4\">
                <div class=\"copyright\">
                    {{ this.theme.copyright_first | raw }}<br />
                    {{ this.theme.copyright_second | raw }}
                </div>
            </div>

        </div>
    </div>
</div>", "C:\\wamp\\www\\ceeknew/themes/vojtasvoboda-vega pro/partials/modules/copyright.htm", "");
    }
}
