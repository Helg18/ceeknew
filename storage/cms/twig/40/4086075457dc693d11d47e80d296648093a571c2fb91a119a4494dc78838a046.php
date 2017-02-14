<?php

/* C:\wamp\www\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/features.htm */
class __TwigTemplate_b9e318ec0349a40ed80f96de207ea3572414fca27a12348883e016c1b561dba6 extends Twig_Template
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
        echo "<div class=\"section bg-grey-light frontpage-4cols\" id=\"features\">
    <div class=\"container\">
        <h2 class=\"wow zoomIn block-title\">";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.features.headline"));
        echo "</h2>
        <div class=\"wow zoomIn text-center description\">
            ";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("features/content"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "        </div>
        <div class=\"row cols\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-star\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">Multiple Blog Layouts</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>The theme supports multiple blog layouts with a right sidebar.</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.features.more"));
        echo "</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-magic\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">Pre-built Color Schemes</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>The theme comes packaged with three color schemes: Orange (default), Blue, and Green.</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.features.more"));
        echo "</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-cogs\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">Front Page Layout</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>The special front page layout shows the page content, call to action, featured pages, and recent blog posts.</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.features.more"));
        echo "</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-arrow-right\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">Flexible Banner Options</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>Use the Custom Header or Featured Image as the internal page banners.</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">";
        // line 76
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.features.more"));
        echo "</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 76,  92 => 58,  71 => 40,  50 => 22,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section bg-grey-light frontpage-4cols\" id=\"features\">
    <div class=\"container\">
        <h2 class=\"wow zoomIn block-title\">{{ 'section.features.headline' | _ }}</h2>
        <div class=\"wow zoomIn text-center description\">
            {% content 'features/content' %}
        </div>
        <div class=\"row cols\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-star\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">Multiple Blog Layouts</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>The theme supports multiple blog layouts with a right sidebar.</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">{{ 'section.features.more' | _ }}</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-magic\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">Pre-built Color Schemes</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>The theme comes packaged with three color schemes: Orange (default), Blue, and Green.</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">{{ 'section.features.more' | _ }}</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-cogs\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">Front Page Layout</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>The special front page layout shows the page content, call to action, featured pages, and recent blog posts.</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">{{ 'section.features.more' | _ }}</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-arrow-right\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">Flexible Banner Options</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>Use the Custom Header or Featured Image as the internal page banners.</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">{{ 'section.features.more' | _ }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\wamp\\www\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/features.htm", "");
    }
}
