<?php

/* C:\xampp\htdocs\ceeknew/themes/vojtasvoboda-vega pro/partials/modules/footer.htm */
class __TwigTemplate_273cf99d9b095e5b8ab0f1e51a6f441c28c93c892d7a043c87c93c8a9d1c81e8 extends Twig_Template
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
        echo "<div class=\"footer-widgets bg-footer\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Footer Col 1 -->
            <div class=\"col-md-3 footer-widget footer-widget-col-1 wow\">
                <div id=\"text-2\" class=\"widget widget_text\">
                    <h3 class=\"widget-title\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("footer.header.first"));
        echo "</h3>
                    <div class=\"textwidget\">
                        ";
        // line 10
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("footer/about"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 11
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_facebook", array())) {
            // line 12
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_facebook", array()), "html", null, true);
            echo "\" class=\"btn btn-social-icon btn-facebook\"><i class=\"fa fa-facebook\"></i></a>
                        ";
        }
        // line 14
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_google", array())) {
            // line 15
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_google", array()), "html", null, true);
            echo "\" class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-google\"></i></a>
                        ";
        }
        // line 17
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_twitter", array())) {
            // line 18
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_twitter", array()), "html", null, true);
            echo "\" class=\"btn btn-social-icon btn-twitter\"><i class=\"fa fa-twitter\"></i></a>
                        ";
        }
        // line 20
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_instagram", array())) {
            // line 21
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_instagram", array()), "html", null, true);
            echo "\" class=\"btn btn-social-icon btn-flickr\"><i class=\"fa fa-instagram\"></i></a>
                        ";
        }
        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_linkedin", array())) {
            // line 24
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_linkedin", array()), "html", null, true);
            echo "\" class=\"btn btn-social-icon btn-facebook\"><i class=\"fa fa-linkedin\"></i></a>
                        ";
        }
        // line 26
        echo "                    </div>
                </div>
            </div>
            <!-- /Footer Col 1 -->

            <!-- Footer Col 2 -->
            <div class=\"col-md-3 footer-widget footer-widget-col-2 wow\">
                <div id=\"categories-3\" class=\"widget widget_categories\">
                    <h3 class=\"widget-title\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("footer.header.second"));
        echo "</h3>
                    ";
        // line 35
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
        echo "                </div>
            </div>
            <!-- /Footer Col 2 -->

            <!-- Footer Col 3 -->
            <div class=\"col-md-3 footer-widget footer-widget-col-3 wow\">
                <div id=\"text-3\" class=\"widget widget_text\">
                    <h3 class=\"widget-title\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("footer.header.third"));
        echo "</h3>
                    <div class=\"textwidget\">
                        <ul class=\"icon-list\">
                            <li><i class=\"fa fa-home\"></i>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "footer_address", array()), "html", null, true);
        echo "</li>
                            <li><i class=\"fa fa-headphones\"></i>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "footer_phone", array()), "html", null, true);
        echo "</li>
                            <li><i class=\"fa fa-paper-plane\"></i>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "footer_email", array()), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Footer Col 3 -->

            <!-- Footer Col 4 -->
            <div class=\"col-md-3 footer-widget footer-widget-col-4 wow\">
                <div id=\"facebook-likebox-1\" class=\"widget widget_facebook_likebox\">
                    <h3 class=\"widget-title\">
                        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "footer_facebook", array()), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("footer.header.fourth"));
        echo "</a>
                    </h3>
                    <div id=\"fb-root\"></div>
                    <div class=\"fb-page\" data-href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "footer_facebook", array()), "html", null, true);
        echo "\" data-width=\"340\" data-height=\"130\" data-hide-cover=\"false\" data-show-facepile=\"false\" data-show-posts=\"false\">
                        <div class=\"fb-xfbml-parse-ignore\">
                            <blockquote cite=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "footer_facebook", array()), "html", null, true);
        echo "\">
                                <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "footer_facebook", array()), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("footer.facebook.like_us"));
        echo "</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer Col 4 -->

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/modules/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 65,  150 => 64,  145 => 62,  137 => 59,  123 => 48,  119 => 47,  115 => 46,  109 => 43,  100 => 36,  96 => 35,  92 => 34,  82 => 26,  76 => 24,  73 => 23,  67 => 21,  64 => 20,  58 => 18,  55 => 17,  49 => 15,  46 => 14,  40 => 12,  37 => 11,  33 => 10,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-widgets bg-footer\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Footer Col 1 -->
            <div class=\"col-md-3 footer-widget footer-widget-col-1 wow\">
                <div id=\"text-2\" class=\"widget widget_text\">
                    <h3 class=\"widget-title\">{{ 'footer.header.first' | _ }}</h3>
                    <div class=\"textwidget\">
                        {% content 'footer/about' %}
                        {% if this.theme.social_facebook %}
                        <a href=\"{{ this.theme.social_facebook }}\" class=\"btn btn-social-icon btn-facebook\"><i class=\"fa fa-facebook\"></i></a>
                        {% endif %}
                        {% if this.theme.social_google %}
                        <a href=\"{{ this.theme.social_google }}\" class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-google\"></i></a>
                        {% endif %}
                        {% if this.theme.social_twitter %}
                        <a href=\"{{ this.theme.social_twitter }}\" class=\"btn btn-social-icon btn-twitter\"><i class=\"fa fa-twitter\"></i></a>
                        {% endif %}
                        {% if this.theme.social_instagram %}
                        <a href=\"{{ this.theme.social_instagram }}\" class=\"btn btn-social-icon btn-flickr\"><i class=\"fa fa-instagram\"></i></a>
                        {% endif %}
                        {% if this.theme.social_linkedin %}
                        <a href=\"{{ this.theme.social_linkedin }}\" class=\"btn btn-social-icon btn-facebook\"><i class=\"fa fa-linkedin\"></i></a>
                        {% endif %}
                    </div>
                </div>
            </div>
            <!-- /Footer Col 1 -->

            <!-- Footer Col 2 -->
            <div class=\"col-md-3 footer-widget footer-widget-col-2 wow\">
                <div id=\"categories-3\" class=\"widget widget_categories\">
                    <h3 class=\"widget-title\">{{ 'footer.header.second' | _ }}</h3>
                    {% component 'blogCategories' %}
                </div>
            </div>
            <!-- /Footer Col 2 -->

            <!-- Footer Col 3 -->
            <div class=\"col-md-3 footer-widget footer-widget-col-3 wow\">
                <div id=\"text-3\" class=\"widget widget_text\">
                    <h3 class=\"widget-title\">{{ 'footer.header.third' | _ }}</h3>
                    <div class=\"textwidget\">
                        <ul class=\"icon-list\">
                            <li><i class=\"fa fa-home\"></i>{{ this.theme.footer_address }}</li>
                            <li><i class=\"fa fa-headphones\"></i>{{ this.theme.footer_phone }}</li>
                            <li><i class=\"fa fa-paper-plane\"></i>{{ this.theme.footer_email }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Footer Col 3 -->

            <!-- Footer Col 4 -->
            <div class=\"col-md-3 footer-widget footer-widget-col-4 wow\">
                <div id=\"facebook-likebox-1\" class=\"widget widget_facebook_likebox\">
                    <h3 class=\"widget-title\">
                        <a href=\"{{ this.theme.footer_facebook }}\">{{ 'footer.header.fourth' | _ }}</a>
                    </h3>
                    <div id=\"fb-root\"></div>
                    <div class=\"fb-page\" data-href=\"{{ this.theme.footer_facebook }}\" data-width=\"340\" data-height=\"130\" data-hide-cover=\"false\" data-show-facepile=\"false\" data-show-posts=\"false\">
                        <div class=\"fb-xfbml-parse-ignore\">
                            <blockquote cite=\"{{ this.theme.footer_facebook }}\">
                                <a href=\"{{ this.theme.footer_facebook }}\">{{ 'footer.facebook.like_us' | _ }}</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer Col 4 -->

        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/modules/footer.htm", "");
    }
}
