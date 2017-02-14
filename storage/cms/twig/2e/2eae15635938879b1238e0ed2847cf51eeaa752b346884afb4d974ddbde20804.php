<?php

/* C:\wamp\www\ceeknew/themes/vojtasvoboda-vega pro/layouts/plain.htm */
class __TwigTemplate_633a20ec9f048e31b3e4ecdd6eb6844067aa317d589b8d0ee255cc15b9bab11f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_locale", array()), "html", null, true);
        echo "\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

    <title>";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
            echo " &#124; ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_title", array()), "html", null, true);
        echo "</title>

    <link rel='stylesheet' href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/animate/animate.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Lato%3A400%2C400i%2C700%2C700i%2C900%2C900i&#038;ver=4.6.1' type='text/css' media='all' />
    <link rel='stylesheet' href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/font-awesome.min.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap-social.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter((("assets/css/color-schemes/" . $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "color", array())) . ".css"));
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/jetpack/jetpack.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/custom.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <style type=\"text/css\">
        .qtranxs_flag_en {
            background-image: url(";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/flags/en.png");
        echo "); background-repeat: no-repeat;
        }
        .qtranxs_flag_de {
            background-image: url(";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/flags/de.png");
        echo "); background-repeat: no-repeat;
        }
    </style>
    ";
        // line 27
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 28
        echo "
    <link hreflang=\"en\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/en/\" rel=\"alternate\" />
    <link hreflang=\"de\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/de/\" rel=\"alternate\" />
    <link hreflang=\"x-default\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "\" rel=\"alternate\" />

    <link rel=\"icon\" href=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicons/cropped-vega-favicon-150x150.png");
        echo "\" sizes=\"32x32\" />
    <link rel=\"icon\" href=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicons/cropped-vega-favicon-300x300.png");
        echo "\" sizes=\"192x192\" />
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicons/cropped-vega-favicon-180x180.png");
        echo "\" />
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicons/cropped-vega-favicon-300x300.png");
        echo "\" />

</head>
<body class=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()), "html", null, true);
        echo " page page-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()), "html", null, true);
        echo " layout-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "id", array()), "html", null, true);
        echo " ";
        $context['__placeholder_bodyclass_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('bodyclass', $context['__placeholder_bodyclass_default_contents']);
        unset($context['__placeholder_bodyclass_default_contents']);        echo "\">

";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("modules/analytics"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("modules/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("modules/nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "
";
        // line 45
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 46
        echo "
";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("modules/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("modules/copyright"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("modules/elevator"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "
<script type=\"text/javascript\" src=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery-migrate.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.form.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.blockUI.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 56
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.smartmenus.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.smartmenus.bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vega-wp-anim.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 60
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/parallax.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 61
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vega-wp.js");
        echo "\"></script>
<script type=\"text/javascript\">
/* <![CDATA[ */
var jpfbembed = {\"appid\":\"249643311490\", \"locale\":\"en_US\"};
/* ]]> */
</script>
<script type=\"text/javascript\" src=\"";
        // line 67
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jetpack/facebook-embed.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 68
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/wp-embed.min.js");
        echo "\"></script>
";
        // line 69
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 70
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 71
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\ceeknew/themes/vojtasvoboda-vega pro/layouts/plain.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 71,  234 => 70,  227 => 69,  223 => 68,  219 => 67,  210 => 61,  206 => 60,  202 => 59,  198 => 58,  194 => 57,  190 => 56,  186 => 55,  182 => 54,  178 => 53,  174 => 52,  170 => 51,  167 => 50,  163 => 49,  159 => 48,  155 => 47,  152 => 46,  150 => 45,  147 => 44,  143 => 43,  139 => 42,  135 => 41,  124 => 39,  118 => 36,  114 => 35,  110 => 34,  106 => 33,  101 => 31,  97 => 30,  93 => 29,  90 => 28,  87 => 27,  81 => 24,  75 => 21,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  40 => 10,  31 => 8,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ this.theme.site_locale }}\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

    <title>{% if this.page.title %}{{ this.page.title }} &#124; {% endif %}{{ this.theme.site_title }}</title>

    <link rel='stylesheet' href=\"{{ 'assets/css/animate/animate.css' | theme }}\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Lato%3A400%2C400i%2C700%2C700i%2C900%2C900i&#038;ver=4.6.1' type='text/css' media='all' />
    <link rel='stylesheet' href=\"{{ 'assets/css/bootstrap.min.css' | theme }}\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href=\"{{ 'assets/css/font-awesome.min.css' | theme }}\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href=\"{{ 'assets/css/bootstrap-social.css' | theme }}\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href=\"{{ 'assets/css/style.css' | theme }}\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href=\"{{ ('assets/css/color-schemes/' ~ this.theme.color ~ '.css') | theme }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/jetpack/jetpack.css' | theme }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/custom.css' | theme }}\" type=\"text/css\" media=\"all\" />
    <style type=\"text/css\">
        .qtranxs_flag_en {
            background-image: url({{ 'assets/images/flags/en.png' | theme }}); background-repeat: no-repeat;
        }
        .qtranxs_flag_de {
            background-image: url({{ 'assets/images/flags/de.png' | theme }}); background-repeat: no-repeat;
        }
    </style>
    {% styles %}

    <link hreflang=\"en\" href=\"{{ baseUrl }}/en/\" rel=\"alternate\" />
    <link hreflang=\"de\" href=\"{{ baseUrl }}/de/\" rel=\"alternate\" />
    <link hreflang=\"x-default\" href=\"{{ baseUrl }}\" rel=\"alternate\" />

    <link rel=\"icon\" href=\"{{ 'assets/images/favicons/cropped-vega-favicon-150x150.png' | theme }}\" sizes=\"32x32\" />
    <link rel=\"icon\" href=\"{{ 'assets/images/favicons/cropped-vega-favicon-300x300.png' | theme }}\" sizes=\"192x192\" />
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ 'assets/images/favicons/cropped-vega-favicon-180x180.png' | theme }}\" />
    <meta name=\"msapplication-TileImage\" content=\"{{ 'assets/images/favicons/cropped-vega-favicon-300x300.png' | theme }}\" />

</head>
<body class=\"{{ this.page.id }} page page-{{ this.page.id }} layout-{{ this.layout.id }} {% placeholder bodyclass title='Body class' %}\">

{% partial 'modules/analytics' %}
{% partial 'modules/header' %}
{% partial 'modules/nav' %}

{% page %}

{% partial 'modules/footer' %}
{% partial 'modules/copyright' %}
{% partial 'modules/elevator' %}

<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.js' | theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery-migrate.min.js' | theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.form.min.js' | theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.blockUI.min.js' | theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/bootstrap.min.js' | theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.smartmenus.min.js' | theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.smartmenus.bootstrap.min.js' | theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/wow.min.js' | theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/vega-wp-anim.js' | theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/parallax.min.js' | theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/vega-wp.js' | theme }}\"></script>
<script type=\"text/javascript\">
/* <![CDATA[ */
var jpfbembed = {\"appid\":\"249643311490\", \"locale\":\"en_US\"};
/* ]]> */
</script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jetpack/facebook-embed.js' | theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/wp-embed.min.js' | theme }}\"></script>
{% framework extras %}
{% scripts %}

</body>
</html>", "C:\\wamp\\www\\ceeknew/themes/vojtasvoboda-vega pro/layouts/plain.htm", "");
    }
}
