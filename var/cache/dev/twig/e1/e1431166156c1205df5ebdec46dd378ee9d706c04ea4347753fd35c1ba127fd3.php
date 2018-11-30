<?php

/* main/All-Anime.html.twig */
class __TwigTemplate_3f009efe4e8634a5c407655d4787d5e23ea18c200b452a96c70ec2da90e0b37d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("native.html.twig", "main/All-Anime.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_home' => array($this, 'block_body_home'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "native.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/All-Anime.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/All-Anime.html.twig"));

        // line 2
        $context["message"] = (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 2, $this->source); })());
        // line 3
        $context["listanime"] = (isset($context["anime"]) || array_key_exists("anime", $context) ? $context["anime"] : (function () { throw new Twig_Error_Runtime('Variable "anime" does not exist.', 3, $this->source); })());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"css/main.min.css\">
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        // line 16
        echo "
    <div class=\"c-field u-mb-medium\">
                        <label class=\"c-field__label\" for=\"select2\">Single Select (Search Enabled)</label>

                        <!-- Select2 jquery plugin is used -->
                        <select class=\"c-select has-search\" id=\"select2\">
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listanime"]) || array_key_exists("listanime", $context) ? $context["listanime"] : (function () { throw new Twig_Error_Runtime('Variable "listanime" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            echo "                                <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        </select>
                    </div>

     <div class=\"row u-m-small\">
     ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listanime"]) || array_key_exists("listanime", $context) ? $context["listanime"] : (function () { throw new Twig_Error_Runtime('Variable "listanime" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            echo "                            <div class=\"col-sm-6 col-md-4\">

                                <div class=\"c-project-card u-mb-medium\">
                                    <center>
                                    <img class=\"img-fluid\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", array()), "html", null, true);
            echo "\" style=\"width: 300px; height: 170px;\" alt=\"About the image\">
                                    </center>
                                    <div class=\"c-project-card__content\">
                                        <div class=\"c-project-card__head\">
                                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Anime", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "ep" => "1")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", array()), "html", null, true);
            echo "</a><span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span></h4>
                                            <p class=\"c-project-card__info\">Last Update: ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", array()), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo " ";
        // line 48
        echo "
        </div><!-- // .row -->
        <script src=\"../js/main.min.js\"></script>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/All-Anime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 48,  150 => 46,  137 => 39,  131 => 38,  124 => 34,  118 => 30,  114 => 29,  108 => 25,  99 => 23,  95 => 22,  87 => 16,  78 => 15,  59 => 6,  50 => 5,  40 => 1,  38 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'native.html.twig' %}
{% set message = message %}
{% set listanime = anime %}

{% block stylesheets %}
            <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"css/main.min.css\">
            
{% endblock %}

{% block body_home %}

    <div class=\"c-field u-mb-medium\">
                        <label class=\"c-field__label\" for=\"select2\">Single Select (Search Enabled)</label>

                        <!-- Select2 jquery plugin is used -->
                        <select class=\"c-select has-search\" id=\"select2\">
                            {% for article in listanime %}
                                <option>{{ article.nom }}</option>
                            {% endfor %}
                        </select>
                    </div>

     <div class=\"row u-m-small\">
     {% for article in listanime %}
                            <div class=\"col-sm-6 col-md-4\">

                                <div class=\"c-project-card u-mb-medium\">
                                    <center>
                                    <img class=\"img-fluid\" src=\"{{ article.image }}\" style=\"width: 300px; height: 170px;\" alt=\"About the image\">
                                    </center>
                                    <div class=\"c-project-card__content\">
                                        <div class=\"c-project-card__head\">
                                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"{{ path('Anime', { 'id': article.id , 'ep': '1' }) }}\">{{ article.nom }}</a><span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span></h4>
                                            <p class=\"c-project-card__info\">Last Update: {{ article.nom }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
 {% endfor %}
 {#
 #}

        </div><!-- // .row -->
        <script src=\"../js/main.min.js\"></script>
    

{% endblock %}
", "main/All-Anime.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\main\\All-Anime.html.twig");
    }
}
