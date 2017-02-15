<?php

/* C:\xampp\htdocs\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/posts.htm */
class __TwigTemplate_8a124aa2943f3092b9735bf442b2a02534d4ba1344b09675e81840b2015d16a1 extends Twig_Template
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
        echo "<div class=\"section frontpage-recent-posts bg-white\" id=\"latest\">
    <div class=\"container\">

        <h2 class=\"block-title wow bounceIn\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.posts.headline"));
        echo "</h2>

        <div class=\"row\">

            ";
        // line 8
        $context["posts"] = $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "posts", array());
        // line 9
        echo "
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "            <div class=\"col-md-4 col-sm-4 wow zoomIn\">

                <div class=\"post-grid recent-entry\">
                    <div class=\"recent-entry-image image\">
                        <a class=\"post-thumbnail post-thumbnail-recent\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">
                            <img
                                src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "first", array()), "getThumb", array(0 => 350, 1 => 220, 2 => "crop"), "method"), "html", null, true);
            echo "\"
                                class=\"img-responsive wp-post-image\"
                                alt=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "\" />
                        </a>
                        <div class=\"caption\">
                            <div class=\"caption-inner\">
                                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\" class=\"icon-link white\"><i class=\"fa fa-link\"></i></a>
                            </div>
                            <div class=\"helper\"></div>
                        </div>
                    </div>

                    <!-- Post Title -->
                    <h4 class=\"recent-entry-title\">
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a>
                    </h4>
                    <!-- /Post Title -->

                    <div class=\"recent-entry-content\">
                        ";
            // line 36
            echo $this->getAttribute($context["post"], "summary", array());
            echo "
                    </div>

                    <!-- Post Meta -->
                    <div class=\"recent-entry-meta\">
                        ";
            // line 41
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("blog.post.posted"));
            echo ": ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "<br />
                        ";
            // line 42
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                // line 43
                echo "                        ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("blog.post.under"));
                echo ":
                        ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 45
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                    echo "\" rel=\"category tag\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ",";
                    }
                    // line 46
                    echo "                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                        ";
            }
            // line 48
            echo "                    </div>
                    <!-- /Post Meta -->
                </div>
            </div>

            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <p class=\"text-center\">";
            echo twig_escape_filter($this->env, (isset($context["noPostsMessage"]) ? $context["noPostsMessage"] : null), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
            ";
        // line 57
        if ((isset($context["posts"]) ? $context["posts"] : null)) {
            // line 58
            echo "            <div class=\"col-md-12\">
                <p class=\"text-center\">
                    <a
                        class=\"btn btn-primary-custom btn-margin-top\"
                        href=\"";
            // line 62
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog-list");
            echo "\">
                        ";
            // line 63
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("section.posts.more"));
            echo "
                    </a>
                </p>
            </div>
            ";
        }
        // line 68
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 68,  183 => 63,  179 => 62,  173 => 58,  171 => 57,  168 => 56,  159 => 54,  149 => 48,  146 => 47,  132 => 46,  123 => 45,  106 => 44,  101 => 43,  99 => 42,  93 => 41,  85 => 36,  75 => 31,  64 => 23,  57 => 19,  52 => 17,  47 => 15,  41 => 11,  36 => 10,  33 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section frontpage-recent-posts bg-white\" id=\"latest\">
    <div class=\"container\">

        <h2 class=\"block-title wow bounceIn\">{{ 'section.posts.headline' | _ }}</h2>

        <div class=\"row\">

            {% set posts = blogPosts.posts %}

            {% for post in posts %}
            <div class=\"col-md-4 col-sm-4 wow zoomIn\">

                <div class=\"post-grid recent-entry\">
                    <div class=\"recent-entry-image image\">
                        <a class=\"post-thumbnail post-thumbnail-recent\" href=\"{{ post.url }}\">
                            <img
                                src=\"{{ post.featured_images.first.getThumb(350, 220, 'crop') }}\"
                                class=\"img-responsive wp-post-image\"
                                alt=\"{{ post.title }}\" />
                        </a>
                        <div class=\"caption\">
                            <div class=\"caption-inner\">
                                <a href=\"{{ post.url }}\" class=\"icon-link white\"><i class=\"fa fa-link\"></i></a>
                            </div>
                            <div class=\"helper\"></div>
                        </div>
                    </div>

                    <!-- Post Title -->
                    <h4 class=\"recent-entry-title\">
                        <a href=\"{{ post.url }}\">{{ post.title }}</a>
                    </h4>
                    <!-- /Post Title -->

                    <div class=\"recent-entry-content\">
                        {{ post.summary | raw }}
                    </div>

                    <!-- Post Meta -->
                    <div class=\"recent-entry-meta\">
                        {{ 'blog.post.posted' | _ }}: {{ post.published_at | date('M d, Y') }}<br />
                        {% if post.categories.count %}
                        {{ 'blog.post.under' | _ }}:
                        {% for category in post.categories %}
                        <a href=\"{{ category.url }}\" rel=\"category tag\">{{ category.name }}</a>{% if not loop.last %},{% endif %}
                        {% endfor %}
                        {% endif %}
                    </div>
                    <!-- /Post Meta -->
                </div>
            </div>

            {% else %}
            <p class=\"text-center\">{{ noPostsMessage }}</p>
            {% endfor %}

            {% if posts %}
            <div class=\"col-md-12\">
                <p class=\"text-center\">
                    <a
                        class=\"btn btn-primary-custom btn-margin-top\"
                        href=\"{{ 'blog-list' | page }}\">
                        {{ 'section.posts.more' | _ }}
                    </a>
                </p>
            </div>
            {% endif %}

        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/sections/posts.htm", "");
    }
}
