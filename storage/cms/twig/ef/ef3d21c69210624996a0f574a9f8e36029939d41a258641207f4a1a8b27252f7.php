<?php

/* C:\xampp\htdocs\ceeknew/themes/vojtasvoboda-vega pro/partials/my-footer.htm */
class __TwigTemplate_e4f30022a94b5dd0675d8aab29298acfb315aaa565560d7e31f811e8f568452f extends Twig_Template
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
        echo "<div class=\"footer\" style=\"padding: 10px 0 10px;background-color: #b7b7b7;\">
      <div class=\"container\">
        <div class=\"row\" style=\"margin-bottom: 0px;\">
 <!-- Copyright and Credits -->
            <div class=\"col s4\" style=\"padding: 12px 0;\">
                <div class=\"copyright\" style=\"text-align: left;font-weight: bold;\">
                    ";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "copyright_first", array());
        echo "
                   
                </div>
            </div>
            <div class=\"col s5\"></div>
            <!-- Navigation -->
            <div class=\"col s3\">
               <div class=\"textwidget\">
                        
                        ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_facebook", array())) {
            // line 17
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_facebook", array()), "html", null, true);
            echo "\" class=\"margena\"><img src=\"http://localhost/ceeknew/themes/vojtasvoboda-vega%20pro/assets/images/facebook.png\" style=\"width: 30px;\"></a>
                        ";
        }
        // line 19
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_twitter", array())) {
            // line 20
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_twitter", array()), "html", null, true);
            echo "\" class=\"margena\"><img src=\"http://localhost/ceeknew/themes/vojtasvoboda-vega%20pro/assets/images/twitter.png\" style=\"width: 30px;\"></a>
                        ";
        }
        // line 22
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_instagram", array())) {
            // line 23
            echo "                      <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_instagram", array()), "html", null, true);
            echo "\" class=\"margena\"><img src=\"http://localhost/ceeknew/themes/vojtasvoboda-vega%20pro/assets/images/instagram.png\" style=\"width: 30px;\"></a>
                        ";
        }
        // line 25
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_linkedin", array())) {
            // line 26
            echo "                       <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "social_facebook", array()), "html", null, true);
            echo "\" class=\"margena\"><img src=\"http://localhost/ceeknew/themes/vojtasvoboda-vega%20pro/assets/images/youtube.png\" style=\"width: 30px;\"></a>
                        ";
        }
        // line 28
        echo "                    </div>
            </div>
            
            
           

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/my-footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  68 => 26,  65 => 25,  59 => 23,  56 => 22,  50 => 20,  47 => 19,  41 => 17,  39 => 16,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer\" style=\"padding: 10px 0 10px;background-color: #b7b7b7;\">
      <div class=\"container\">
        <div class=\"row\" style=\"margin-bottom: 0px;\">
 <!-- Copyright and Credits -->
            <div class=\"col s4\" style=\"padding: 12px 0;\">
                <div class=\"copyright\" style=\"text-align: left;font-weight: bold;\">
                    {{ this.theme.copyright_first | raw }}
                   
                </div>
            </div>
            <div class=\"col s5\"></div>
            <!-- Navigation -->
            <div class=\"col s3\">
               <div class=\"textwidget\">
                        
                        {% if this.theme.social_facebook %}
                        <a href=\"{{ this.theme.social_facebook }}\" class=\"margena\"><img src=\"http://localhost/ceeknew/themes/vojtasvoboda-vega%20pro/assets/images/facebook.png\" style=\"width: 30px;\"></a>
                        {% endif %}
                        {% if this.theme.social_twitter %}
                        <a href=\"{{ this.theme.social_twitter }}\" class=\"margena\"><img src=\"http://localhost/ceeknew/themes/vojtasvoboda-vega%20pro/assets/images/twitter.png\" style=\"width: 30px;\"></a>
                        {% endif %}
                        {% if this.theme.social_instagram %}
                      <a href=\"{{ this.theme.social_instagram }}\" class=\"margena\"><img src=\"http://localhost/ceeknew/themes/vojtasvoboda-vega%20pro/assets/images/instagram.png\" style=\"width: 30px;\"></a>
                        {% endif %}
                        {% if this.theme.social_linkedin %}
                       <a href=\"{{ this.theme.social_facebook }}\" class=\"margena\"><img src=\"http://localhost/ceeknew/themes/vojtasvoboda-vega%20pro/assets/images/youtube.png\" style=\"width: 30px;\"></a>
                        {% endif %}
                    </div>
            </div>
            
            
           

        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\ceeknew/themes/vojtasvoboda-vega pro/partials/my-footer.htm", "");
    }
}
