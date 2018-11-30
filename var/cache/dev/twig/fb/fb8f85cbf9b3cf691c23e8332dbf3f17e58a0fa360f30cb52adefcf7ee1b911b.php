<?php

/* level/print-level.html.twig */
class __TwigTemplate_1c11ec9af940650d8e985f24c01992ee4b9ac457cf0ace1529c5493f07cc41df extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "level/print-level.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "level/print-level.html.twig"));

        // line 1
        echo "


<script>
\$(document).ready(function() {

        var MaBarreProgression = \$('#MaBarreProgression'),
            max = MaBarreProgression.attr('now'),
            time = 100, 
            value = MaBarreProgression.val();

        var Telechargement = function() {
            value += 1;
            addValue = MaBarreProgression.val(value);

            \$('.progress-value').html('Exp '+ value + '%');

            if (value == max) {
                clearInterval(animation);   
                \$('.progress-value').html('";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 20, $this->source); })()), "exp", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 20, $this->source); })()), "max", array()), "html", null, true);
        echo "');                 
            }
        };

        var animation = setInterval(function() {
            Telechargement();
        }, time);

});
</script>
<center>
Level ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 31, $this->source); })()), "lvl", array()), "html", null, true);
        echo "
<br>
<progress id=\"MaBarreProgression\" value=\"0\" now=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 33, $this->source); })()), "exp", array()), "html", null, true);
        echo "\" max=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 33, $this->source); })()), "max", array()), "html", null, true);
        echo "\"></progress>
<br>
<span class=\"progress-value\"></span>
</center>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "level/print-level.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 33,  66 => 31,  50 => 20,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("


<script>
\$(document).ready(function() {

        var MaBarreProgression = \$('#MaBarreProgression'),
            max = MaBarreProgression.attr('now'),
            time = 100, 
            value = MaBarreProgression.val();

        var Telechargement = function() {
            value += 1;
            addValue = MaBarreProgression.val(value);

            \$('.progress-value').html('Exp '+ value + '%');

            if (value == max) {
                clearInterval(animation);   
                \$('.progress-value').html('{{ level.exp }} / {{ level.max }}');                 
            }
        };

        var animation = setInterval(function() {
            Telechargement();
        }, time);

});
</script>
<center>
Level {{ level.lvl }}
<br>
<progress id=\"MaBarreProgression\" value=\"0\" now=\"{{ level.exp }}\" max=\"{{ level.max }}\"></progress>
<br>
<span class=\"progress-value\"></span>
</center>
", "level/print-level.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\level\\print-level.html.twig");
    }
}
