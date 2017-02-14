<?php

/* C:\wamp\www\ceeknew/plugins/rainlab/blog/components/categories/items.htm */
class __TwigTemplate_c1db1532d461ca648c0ec3532a501d1063e3183df221f78139de7a1af9c223ba extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "    ";
            $context["postCount"] = $this->getAttribute($context["category"], "post_count", array());
            // line 3
            echo "    <li ";
            if (($this->getAttribute($context["category"], "slug", array()) == (isset($context["currentCategorySlug"]) ? $context["currentCategorySlug"] : null))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a> 
        ";
            // line 5
            if ((isset($context["postCount"]) ? $context["postCount"] : null)) {
                // line 6
                echo "            <span class=\"badge\">";
                echo twig_escape_filter($this->env, (isset($context["postCount"]) ? $context["postCount"] : null), "html", null, true);
                echo "</span>
        ";
            }
            // line 8
            echo "
        ";
            // line 9
            if ($this->getAttribute($context["category"], "children", array())) {
                // line 10
                echo "            <ul>
                ";
                // line 11
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['categories'] = $this->getAttribute(                // line 12
$context["category"], "children", array())                ;
                $context['__cms_partial_params']['currentCategorySlug'] =                 // line 13
(isset($context["currentCategorySlug"]) ? $context["currentCategorySlug"] : null)                ;
                echo $this->env->getExtension('CMS')->partialFunction((                // line 11
(isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::items")                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 15
                echo "            </ul>
        ";
            }
            // line 17
            echo "    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ceeknew/plugins/rainlab/blog/components/categories/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  64 => 15,  61 => 11,  59 => 13,  57 => 12,  55 => 11,  52 => 10,  50 => 9,  47 => 8,  41 => 6,  39 => 5,  33 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for category in categories %}
    {% set postCount = category.post_count %}
    <li {% if category.slug == currentCategorySlug %}class=\"active\"{% endif %}>
        <a href=\"{{ category.url }}\">{{ category.name }}</a> 
        {% if postCount %}
            <span class=\"badge\">{{ postCount }}</span>
        {% endif %}

        {% if category.children %}
            <ul>
                {% partial __SELF__ ~ \"::items\"
                    categories=category.children
                    currentCategorySlug=currentCategorySlug
                %}
            </ul>
        {% endif %}
    </li>
{% endfor %}
", "C:\\wamp\\www\\ceeknew/plugins/rainlab/blog/components/categories/items.htm", "");
    }
}
