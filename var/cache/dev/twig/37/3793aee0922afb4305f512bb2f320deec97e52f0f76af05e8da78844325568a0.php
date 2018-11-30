<?php

/* historique/show-stream.html.twig */
class __TwigTemplate_11ac2763e2f7fa49301cf61f5cf07c5445e714d869c3cbd36074560f316e914a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("native.html.twig", "historique/show-stream.html.twig", 1);
        $this->blocks = array(
            'body_home' => array($this, 'block_body_home'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "native.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "historique/show-stream.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "historique/show-stream.html.twig"));

        // line 2
        $context["message"] = (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 2, $this->source); })());
        // line 3
        $context["listanime"] = (isset($context["anime"]) || array_key_exists("anime", $context) ? $context["anime"] : (function () { throw new Twig_Error_Runtime('Variable "anime" does not exist.', 3, $this->source); })());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <style>
            .box-header{
            }
            .c-project-card__meta {
                display: inline-block;
            }
    </style>
    <div class=\"box-header\" style=\"min-height: 300px;background-image: url('";
        // line 18
        echo twig_escape_filter($this->env, twig_random($this->env, array(0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/background/header-home.png"), 1 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/background/header-home1.png"), 2 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/background/header-home2.png"))), "html", null, true);
        echo "');background-size: cover;background-repeat:no-repeat;\">
    </div>

    <div class=\"row u-m-small\" style=\"margin-left:2%;margin-right:2%;padding: 10px;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;height\">
        <div style=\"width:100%;\">
            <font color=\"white\" size=\"6\">Historique Airi Stream</font>
        </div>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new Twig_Error_Runtime('Variable "historique" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "             <div class=\"col-sm-6 col-md-5\">
                <div class=\"c-project-card u-mb-medium\">

                    <div class=\"c-project-card__content\">
                        <div class=\"c-project-card__head\" style=\"min-height:150px;background-image: url(";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "5", array(), "array"), "html", null, true);
            echo ");background-size: cover;background-repeat:no-repeat;\">
                        </div>

                        <div class=\"c-project-card__meta\">
                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "0", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "3", array(), "array"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "2", array(), "array"), "html", null, true);
            echo "</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "historique/show-stream.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 9,  127 => 8,  116 => 40,  100 => 34,  93 => 30,  87 => 26,  83 => 25,  73 => 18,  64 => 11,  62 => 8,  59 => 7,  50 => 6,  40 => 1,  38 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'native.html.twig' %}
{% set message = message %}
{% set listanime = anime %}


{% block body_home %}

    {% block stylesheets %}
            {{ parent() }}
    {% endblock %}
    <style>
            .box-header{
            }
            .c-project-card__meta {
                display: inline-block;
            }
    </style>
    <div class=\"box-header\" style=\"min-height: 300px;background-image: url('{{ random([asset('img/background/header-home.png'), asset('img/background/header-home1.png'), asset('img/background/header-home2.png')]) }}');background-size: cover;background-repeat:no-repeat;\">
    </div>

    <div class=\"row u-m-small\" style=\"margin-left:2%;margin-right:2%;padding: 10px;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;height\">
        <div style=\"width:100%;\">
            <font color=\"white\" size=\"6\">Historique Airi Stream</font>
        </div>
        {% for article in historique %}
             <div class=\"col-sm-6 col-md-5\">
                <div class=\"c-project-card u-mb-medium\">

                    <div class=\"c-project-card__content\">
                        <div class=\"c-project-card__head\" style=\"min-height:150px;background-image: url({{ article['5'] }});background-size: cover;background-repeat:no-repeat;\">
                        </div>

                        <div class=\"c-project-card__meta\">
                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"{{ article['0'] }}\">{{ article['3'] }}  {{ article['2'] }}</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
    </div>
{% endblock %}

", "historique/show-stream.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\historique\\show-stream.html.twig");
    }
}
