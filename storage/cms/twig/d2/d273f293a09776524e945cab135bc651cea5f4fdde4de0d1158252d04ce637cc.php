<?php

/* C:\xampp\htdocs\ceeknew/themes/vojtasvoboda-vega pro/partials/modules/nav.htm */
class __TwigTemplate_b8b5ae897f1bda388c8253edde7af6d78b122bd6b65c206b5f4491f0402a8e68 extends Twig_Template
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
        echo "<div class=\"nav-wrapper\">
    <div class=\"navbar navbar-custom\" role=\"navigation\">
        <div class=\"container\">
            <!-- Logo -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><i class=\"fa fa-bars\"></i></button>
                <a class=\"navbar-brand text-logo\" href=\"";
        // line 7
        echo url("/");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_title", array()), "html", null, true);
        echo "</a>
            </div>
            <!-- /Logo -->

            <!-- Navigation -->
            <div class=\"navbar-collapse collapse\">
                <ul id=\"menu-header\" class=\"nav navbar-nav navbar-right menu-header\">
                    <li class=\"page-scroll menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Home\" href=\"#intro\">Home</a>
                    </li>
                    <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Action\" href=\"#welcome\">Action</a>
                    </li>
                    <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Featured\" href=\"#features\">Featured</a>
                    </li>
                    <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Latest Posts\" href=\"#latest\">Latest Posts</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                        <a title=\"Features\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Pages <b class=\"fa fa-angle-down\"></b></a>
                        <ul role=\"menu\" class=\" dropdown-menu\">
                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                                <a title=\"Page - Normal\" href=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/page-normal");
        echo "\">Page &#8211; Normal</a>
                            </li>
                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                                <a title=\"Page - Full Width\" href=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/page-with-title");
        echo "\">Page &#8211; With title</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Page - With Sidebar\" href=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/page-with-sidebar");
        echo "\">Page &#8211; With Sidebar</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Page - With Sidebar and title\" href=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/page-with-sidebar-and-title");
        echo "\">Page &#8211; With Sidebar and title</a>
                            </li>
                            <li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                                <a title=\"Navigation Level 3\" href=\"#\">Navigation Level 3</a>
                                <ul role=\"menu\" class=\" dropdown-menu\">
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                        <a title=\"Level 3\" href=\"#\">Level 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>
                            <li class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                                <a title=\"English\" href=\"#\"><span class=\"glyphicon English\"></span>&nbsp;Language:&nbsp;<img src=\"";
        // line 56
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/flags/en.png");
        echo "\" alt=\"English\" /></a>
                                <ul role=\"menu\" class=\" dropdown-menu\">
                                    <li class=\"qtranxs-lang-menu-item qtranxs-lang-menu-item-en menu-item menu-item-type-custom menu-item-object-custom\">
                                        <a title=\"English\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/en/\"><span class=\"glyphicon English\"></span>&nbsp;<img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/flags/en.png");
        echo "\" alt=\"English\" />&nbsp;English</a>
                                    </li>
                                    <li class=\"qtranxs-lang-menu-item qtranxs-lang-menu-item-de menu-item menu-item-type-custom menu-item-object-custom\">
                                        <a title=\"Deutsch\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/de/\"><span class=\"glyphicon Deutsch\"></span>&nbsp;<img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/flags/de.png");
        echo "\" alt=\"Deutsch\" />&nbsp;Deutsch</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                        <a title=\"Blog Layouts\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Blog <b class=\"fa fa-angle-down\"></b></a>
                        <ul role=\"menu\" class=\" dropdown-menu\">
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Blog Layout - Full Posts\" href=\"";
        // line 72
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/blog-listing-full");
        echo "\">Blog Layout &#8211; Full Posts</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Blog Layout - Small Image and Excerpt\" href=\"";
        // line 75
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/blog-listing-normal");
        echo "\">Blog Layout &#8211; Small Image and Excerpt</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Blog Layout - Excerpts Only\" href=\"";
        // line 78
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/blog-listing-reduced");
        echo "\">Blog Layout &#8211; Excerpts Only</a>
                            </li>
                            <li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Post - Full Width\" href=\"";
        // line 84
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/blog-detail");
        echo "\">Post &#8211; Full Width</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Post - With Sidebar\" href=\"";
        // line 87
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/blog-detail-with-sidebar");
        echo "\">Post &#8211; With Sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                        <a title=\"Shop\" href=\"";
        // line 92
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/eshop");
        echo "\">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/modules/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 92,  149 => 87,  143 => 84,  134 => 78,  128 => 75,  122 => 72,  107 => 62,  99 => 59,  93 => 56,  73 => 39,  67 => 36,  61 => 33,  55 => 30,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"nav-wrapper\">
    <div class=\"navbar navbar-custom\" role=\"navigation\">
        <div class=\"container\">
            <!-- Logo -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><i class=\"fa fa-bars\"></i></button>
                <a class=\"navbar-brand text-logo\" href=\"{{ url('/') }}\">{{ this.theme.site_title }}</a>
            </div>
            <!-- /Logo -->

            <!-- Navigation -->
            <div class=\"navbar-collapse collapse\">
                <ul id=\"menu-header\" class=\"nav navbar-nav navbar-right menu-header\">
                    <li class=\"page-scroll menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Home\" href=\"#intro\">Home</a>
                    </li>
                    <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Action\" href=\"#welcome\">Action</a>
                    </li>
                    <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Featured\" href=\"#features\">Featured</a>
                    </li>
                    <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Latest Posts\" href=\"#latest\">Latest Posts</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                        <a title=\"Features\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Pages <b class=\"fa fa-angle-down\"></b></a>
                        <ul role=\"menu\" class=\" dropdown-menu\">
                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                                <a title=\"Page - Normal\" href=\"{{ 'samples/page-normal' | page }}\">Page &#8211; Normal</a>
                            </li>
                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                                <a title=\"Page - Full Width\" href=\"{{ 'samples/page-with-title' | page }}\">Page &#8211; With title</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Page - With Sidebar\" href=\"{{ 'samples/page-with-sidebar' | page }}\">Page &#8211; With Sidebar</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Page - With Sidebar and title\" href=\"{{ 'samples/page-with-sidebar-and-title' | page }}\">Page &#8211; With Sidebar and title</a>
                            </li>
                            <li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                                <a title=\"Navigation Level 3\" href=\"#\">Navigation Level 3</a>
                                <ul role=\"menu\" class=\" dropdown-menu\">
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                        <a title=\"Level 3\" href=\"#\">Level 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>
                            <li class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                                <a title=\"English\" href=\"#\"><span class=\"glyphicon English\"></span>&nbsp;Language:&nbsp;<img src=\"{{ 'assets/images/flags/en.png' | theme }}\" alt=\"English\" /></a>
                                <ul role=\"menu\" class=\" dropdown-menu\">
                                    <li class=\"qtranxs-lang-menu-item qtranxs-lang-menu-item-en menu-item menu-item-type-custom menu-item-object-custom\">
                                        <a title=\"English\" href=\"{{ baseUrl }}/en/\"><span class=\"glyphicon English\"></span>&nbsp;<img src=\"{{ 'assets/images/flags/en.png' | theme }}\" alt=\"English\" />&nbsp;English</a>
                                    </li>
                                    <li class=\"qtranxs-lang-menu-item qtranxs-lang-menu-item-de menu-item menu-item-type-custom menu-item-object-custom\">
                                        <a title=\"Deutsch\" href=\"{{ baseUrl }}/de/\"><span class=\"glyphicon Deutsch\"></span>&nbsp;<img src=\"{{ 'assets/images/flags/de.png' | theme }}\" alt=\"Deutsch\" />&nbsp;Deutsch</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                        <a title=\"Blog Layouts\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Blog <b class=\"fa fa-angle-down\"></b></a>
                        <ul role=\"menu\" class=\" dropdown-menu\">
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Blog Layout - Full Posts\" href=\"{{ 'samples/blog-listing-full' | page }}\">Blog Layout &#8211; Full Posts</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Blog Layout - Small Image and Excerpt\" href=\"{{ 'samples/blog-listing-normal' | page }}\">Blog Layout &#8211; Small Image and Excerpt</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Blog Layout - Excerpts Only\" href=\"{{ 'samples/blog-listing-reduced' | page }}\">Blog Layout &#8211; Excerpts Only</a>
                            </li>
                            <li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Post - Full Width\" href=\"{{ 'samples/blog-detail' | page }}\">Post &#8211; Full Width</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Post - With Sidebar\" href=\"{{ 'samples/blog-detail-with-sidebar' | page }}\">Post &#8211; With Sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                        <a title=\"Shop\" href=\"{{ 'samples/eshop' | page }}\">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
</div>", "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/modules/nav.htm", "");
    }
}
