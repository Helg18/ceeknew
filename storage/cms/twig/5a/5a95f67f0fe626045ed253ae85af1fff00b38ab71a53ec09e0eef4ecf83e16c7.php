<?php

/* C:\xampp\htdocs\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/contact.htm */
class __TwigTemplate_d7abf727dda59813ffc49880469281436c33ddd8338119d6e3b7df1a3c739b74 extends Twig_Template
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
        echo "<div class=\"section frontpage-open1 bg-white\" id=\"open\">
    <div class=\"container\">
        <h2 class=\"block-title wow zoomIn\">";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.contact.headline"));
        echo "</h2>
        <div class=\"wow fadeIn\">
            ";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("contact/content"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "            <p>&nbsp;</p>
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <h4>";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.contact.map"));
        echo "</h4>
                    <div class=\"map\">
                        <div class=\"googlemaps\">
                            <iframe
                                width=\"600\"
                                height=\"375\"
                                frameborder=\"0\"
                                scrolling=\"no\"
                                marginheight=\"0\"
                                marginwidth=\"0\"
                                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3463.7041933046044!2d-95.35770718459221!3d29.757273039035468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640bf26db794291:0x81457f66271a17e1!2sMinute Maid Park!5e0!3m2!1sen!2sus!4v1470766063041\">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-5\">
                    <h4>";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.contact.form"));
        echo "</h4>
                    <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f400-o1\">
                        ";
        // line 27
        echo $this->getAttribute($this->getAttribute((isset($context["simpleContact"]) ? $context["simpleContact"] : null), "settings", array()), "text_top_form", array());
        echo "
                        <form id=\"simpleContactForm\" method=\"post\" data-request=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["simpleContact"]) ? $context["simpleContact"] : null), "html", null, true);
        echo "::onFormSubmit\">
                            <div class=\"screen-reader-response\" id=\"simple_contact_flash_message\"></div>
                            <div class=\"form-group\">
                                <span class=\"wpcf7-form-control-wrap\">
                                    <input type=\"text\" name=\"name\" value=\"\" size=\"40\" class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control\" aria-required=\"true\" aria-invalid=\"false\" placeholder=\"";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.contact.name"));
        echo "\" />
                                </span>
                            </div>
                            <div class=\"form-group\">
                                <span class=\"wpcf7-form-control-wrap\">
                                    <input type=\"email\" name=\"email\" value=\"\" size=\"40\" class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control\" aria-required=\"true\" aria-invalid=\"false\" placeholder=\"";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.contact.email"));
        echo "\" />
                                </span>
                            </div>
                            <div class=\"form-group\">
                                <span class=\"wpcf7-form-control-wrap\">
                                    <textarea name=\"message\" cols=\"40\" rows=\"10\" class=\"wpcf7-form-control wpcf7-textarea form-control\" aria-invalid=\"false\" placeholder=\"";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.contact.message"));
        echo "\"></textarea>
                                </span>
                            </div>
                            <div class=\"form-action\">
                                <input type=\"hidden\" name=\"subject\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "\" />
                                <input type=\"submit\" value=\"";
        // line 47
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.contact.button"));
        echo "\" class=\"wpcf7-form-control wpcf7-submit btn btn-primary-custom btn-block btn-lg\" />
                            </div>
                            <div class=\"wpcf7-response-output wpcf7-display-none\"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 47,  95 => 46,  88 => 42,  80 => 37,  72 => 32,  65 => 28,  61 => 27,  56 => 25,  37 => 9,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section frontpage-open1 bg-white\" id=\"open\">
    <div class=\"container\">
        <h2 class=\"block-title wow zoomIn\">{{ 'section.contact.headline' | _ }}</h2>
        <div class=\"wow fadeIn\">
            {% content 'contact/content' %}
            <p>&nbsp;</p>
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <h4>{{ 'section.contact.map' | _ }}</h4>
                    <div class=\"map\">
                        <div class=\"googlemaps\">
                            <iframe
                                width=\"600\"
                                height=\"375\"
                                frameborder=\"0\"
                                scrolling=\"no\"
                                marginheight=\"0\"
                                marginwidth=\"0\"
                                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3463.7041933046044!2d-95.35770718459221!3d29.757273039035468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640bf26db794291:0x81457f66271a17e1!2sMinute Maid Park!5e0!3m2!1sen!2sus!4v1470766063041\">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-5\">
                    <h4>{{ 'section.contact.form' | _ }}</h4>
                    <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f400-o1\">
                        {{ simpleContact.settings.text_top_form | raw }}
                        <form id=\"simpleContactForm\" method=\"post\" data-request=\"{{ simpleContact }}::onFormSubmit\">
                            <div class=\"screen-reader-response\" id=\"simple_contact_flash_message\"></div>
                            <div class=\"form-group\">
                                <span class=\"wpcf7-form-control-wrap\">
                                    <input type=\"text\" name=\"name\" value=\"\" size=\"40\" class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control\" aria-required=\"true\" aria-invalid=\"false\" placeholder=\"{{ 'section.contact.name' | _ }}\" />
                                </span>
                            </div>
                            <div class=\"form-group\">
                                <span class=\"wpcf7-form-control-wrap\">
                                    <input type=\"email\" name=\"email\" value=\"\" size=\"40\" class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control\" aria-required=\"true\" aria-invalid=\"false\" placeholder=\"{{ 'section.contact.email' | _ }}\" />
                                </span>
                            </div>
                            <div class=\"form-group\">
                                <span class=\"wpcf7-form-control-wrap\">
                                    <textarea name=\"message\" cols=\"40\" rows=\"10\" class=\"wpcf7-form-control wpcf7-textarea form-control\" aria-invalid=\"false\" placeholder=\"{{ 'section.contact.message' | _ }}\"></textarea>
                                </span>
                            </div>
                            <div class=\"form-action\">
                                <input type=\"hidden\" name=\"subject\" value=\"{{ baseUrl }}\" />
                                <input type=\"submit\" value=\"{{ 'section.contact.button' | _ }}\" class=\"wpcf7-form-control wpcf7-submit btn btn-primary-custom btn-block btn-lg\" />
                            </div>
                            <div class=\"wpcf7-response-output wpcf7-display-none\"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/contact.htm", "");
    }
}
