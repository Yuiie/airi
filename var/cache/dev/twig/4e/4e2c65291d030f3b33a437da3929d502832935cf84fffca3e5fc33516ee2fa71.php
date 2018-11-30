<?php

/* main/home.html.twig */
class __TwigTemplate_3943f58348ac4a50160d150895b3e44932a55552b93282c32ccaf635b627ce25 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("native.html.twig", "main/home.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/home.html.twig"));

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

    <div class=\"u-hidden-down@mobile\" style=\"margin-left:2%;margin-right:2%;margin-top:2%;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
        <center>
            ";
        // line 24
        echo "        </center>
    </div>
    <div class=\"row u-m-small\" style=\"margin-left:2%;margin-right:2%;padding: 10px;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
        <div style=\"width:100%;\">
            <font color=\"white\" style=\"float:left\" size=\"6\">Random</font>
            <font style=\"color:white; float:right\" size=\"4.5\">See More...</font>
        </div>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 32
            echo "            ";
            $context["randoms"] = (isset($context["random"]) || array_key_exists("random", $context) ? $context["random"] : (function () { throw new Twig_Error_Runtime('Variable "random" does not exist.', 32, $this->source); })());
            // line 33
            echo "            ";
            $context["rand"] = twig_random($this->env, (twig_length_filter($this->env, (isset($context["randoms"]) || array_key_exists("randoms", $context) ? $context["randoms"] : (function () { throw new Twig_Error_Runtime('Variable "randoms" does not exist.', 33, $this->source); })())) - 1));
            // line 34
            echo "            <div class=\"col-sm-6 col-md-3\">
                <div class=\"c-project-card u-mb-medium\">
                    <center>
                        <!-- <img class=\"img-fluid\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["randoms"]) || array_key_exists("randoms", $context) ? $context["randoms"] : (function () { throw new Twig_Error_Runtime('Variable "randoms" does not exist.', 37, $this->source); })()), (isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new Twig_Error_Runtime('Variable "rand" does not exist.', 37, $this->source); })()), array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width: 400px; height: 210px;\" alt=\"About the image\">-->
                    </center>
                    <div class=\"c-project-card__content\">
                        <div class=\"c-project-card__head\" style=\"min-height:150px;background-image: url(uploads/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["randoms"]) || array_key_exists("randoms", $context) ? $context["randoms"] : (function () { throw new Twig_Error_Runtime('Variable "randoms" does not exist.', 40, $this->source); })()), (isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new Twig_Error_Runtime('Variable "rand" does not exist.', 40, $this->source); })()), array(), "array"), "brochure", array()), "html", null, true);
            echo ");background-size: cover;background-repeat:no-repeat;\">
                        </div>

                        <div class=\"c-project-card__meta\">
                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Anime", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["randoms"]) || array_key_exists("randoms", $context) ? $context["randoms"] : (function () { throw new Twig_Error_Runtime('Variable "randoms" does not exist.', 44, $this->source); })()), (isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new Twig_Error_Runtime('Variable "rand" does not exist.', 44, $this->source); })()), array(), "array"), "id", array()), "ep" => "1")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["randoms"]) || array_key_exists("randoms", $context) ? $context["randoms"] : (function () { throw new Twig_Error_Runtime('Variable "randoms" does not exist.', 44, $this->source); })()), (isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new Twig_Error_Runtime('Variable "rand" does not exist.', 44, $this->source); })()), array(), "array"), "nom", array()), "html", null, true);
            echo "</a><span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span></h4>
                            <p class=\"c-project-card__info\" style=\"float:right\">Airi | Last Update: 29 Dec 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            <tfoot>
                    <tr>
                           
                    </tr>
            </tfoot>
        </div>

            <div class=\"row u-m-small\" style=\"margin-left:2%;margin-right:2%;padding: 10px;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
        <div style=\"width:100%;\">
            <font color=\"white\" style=\"float:left\" size=\"6\">Top de la semaine</font>
            <font style=\"color:white; float:right\" size=\"4.5\">See More...</font>
        </div>
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 64
            echo "            ";
            $context["randoms"] = (isset($context["random"]) || array_key_exists("random", $context) ? $context["random"] : (function () { throw new Twig_Error_Runtime('Variable "random" does not exist.', 64, $this->source); })());
            // line 65
            echo "            ";
            $context["rand"] = twig_random($this->env, (twig_length_filter($this->env, (isset($context["randoms"]) || array_key_exists("randoms", $context) ? $context["randoms"] : (function () { throw new Twig_Error_Runtime('Variable "randoms" does not exist.', 65, $this->source); })())) - 1));
            // line 66
            echo "            <div class=\"col-sm-6 col-md-3\">
                <div class=\"c-project-card u-mb-medium\">
                    <center>
                        <!-- <img class=\"img-fluid\" src=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["randoms"]) || array_key_exists("randoms", $context) ? $context["randoms"] : (function () { throw new Twig_Error_Runtime('Variable "randoms" does not exist.', 69, $this->source); })()), (isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new Twig_Error_Runtime('Variable "rand" does not exist.', 69, $this->source); })()), array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width: 400px; height: 210px;\" alt=\"About the image\">-->
                    </center>
                    <div class=\"c-project-card__content\">
                        <div class=\"c-project-card__head\" style=\"min-height:150px;background-image: url(uploads/";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["randoms"]) || array_key_exists("randoms", $context) ? $context["randoms"] : (function () { throw new Twig_Error_Runtime('Variable "randoms" does not exist.', 72, $this->source); })()), (isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new Twig_Error_Runtime('Variable "rand" does not exist.', 72, $this->source); })()), array(), "array"), "brochure", array()), "html", null, true);
            echo ");background-size: cover;background-repeat:no-repeat;\">
                        </div>

                        <div class=\"c-project-card__meta\">
                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Anime", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["randoms"]) || array_key_exists("randoms", $context) ? $context["randoms"] : (function () { throw new Twig_Error_Runtime('Variable "randoms" does not exist.', 76, $this->source); })()), (isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new Twig_Error_Runtime('Variable "rand" does not exist.', 76, $this->source); })()), array(), "array"), "id", array()), "ep" => "1")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["randoms"]) || array_key_exists("randoms", $context) ? $context["randoms"] : (function () { throw new Twig_Error_Runtime('Variable "randoms" does not exist.', 76, $this->source); })()), (isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new Twig_Error_Runtime('Variable "rand" does not exist.', 76, $this->source); })()), array(), "array"), "nom", array()), "html", null, true);
            echo "</a><span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span></h4>
                            <p class=\"c-project-card__info\" style=\"float:right\">Airi | Last Update: 29 Dec 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            <tfoot>
                    <tr>
                           
                    </tr>
            </tfoot>
        </div> 

     <div class=\"row u-m-small\" style=\"margin-left:2%;margin-right:2%;padding: 10px;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
        <div style=\"width:100%;\">
            <font color=\"white\" size=\"6\">Dernières sorties</font>
        </div>
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listarticle"]) || array_key_exists("listarticle", $context) ? $context["listarticle"] : (function () { throw new Twig_Error_Runtime('Variable "listarticle" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 95
            echo "            <div class=\"col-sm-6 col-md-3\">
                <div class=\"c-project-card u-mb-medium\">
                    <center>
                        <!-- <img class=\"img-fluid\" src=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "anime", array()), "image", array()), "html", null, true);
            echo "\" style=\"width: 400px; height: 210px;\" alt=\"About the image\">-->
                    </center>
                    <div class=\"c-project-card__content\">
                        <div class=\"c-project-card__head\" style=\"min-height:150px;background-image: url(uploads/";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "anime", array()), "brochure", array()), "html", null, true);
            echo ");background-size: cover;background-repeat:no-repeat;\">
                        </div>

                        <div class=\"c-project-card__meta\">
                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Anime", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "anime", array()), "id", array()), "ep" => twig_get_attribute($this->env, $this->source, $context["article"], "episode", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "anime", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "episode", array()), "html", null, true);
            echo "</a><span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span></h4>
                            <p class=\"c-project-card__info\">Airi | Last Update: 29 Dec 2017</p>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "            <tfoot>
                    <tr>
                            ";
        // line 114
        echo $this->extensions['Tiloweb\PaginationBundle\Twig\Extension\PaginationExtension']->paginationFunction((isset($context["listarticle"]) || array_key_exists("listarticle", $context) ? $context["listarticle"] : (function () { throw new Twig_Error_Runtime('Variable "listarticle" does not exist.', 114, $this->source); })()), "page");
        echo "
                    </tr>
            </tfoot>
        </div>
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
        return "main/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 9,  261 => 8,  246 => 114,  242 => 112,  225 => 105,  218 => 101,  212 => 98,  207 => 95,  203 => 94,  190 => 83,  175 => 76,  168 => 72,  162 => 69,  157 => 66,  154 => 65,  151 => 64,  147 => 63,  133 => 51,  118 => 44,  111 => 40,  105 => 37,  100 => 34,  97 => 33,  94 => 32,  90 => 31,  81 => 24,  73 => 18,  64 => 11,  62 => 8,  59 => 7,  50 => 6,  40 => 1,  38 => 3,  36 => 2,  15 => 1,);
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

    <div class=\"u-hidden-down@mobile\" style=\"margin-left:2%;margin-right:2%;margin-top:2%;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
        <center>
            {# include 'carousel.html.twig' #}
        </center>
    </div>
    <div class=\"row u-m-small\" style=\"margin-left:2%;margin-right:2%;padding: 10px;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
        <div style=\"width:100%;\">
            <font color=\"white\" style=\"float:left\" size=\"6\">Random</font>
            <font style=\"color:white; float:right\" size=\"4.5\">See More...</font>
        </div>
        {% for i in 0..3 %}
            {% set randoms = random %}
            {% set rand = random((randoms|length)-1) %}
            <div class=\"col-sm-6 col-md-3\">
                <div class=\"c-project-card u-mb-medium\">
                    <center>
                        <!-- <img class=\"img-fluid\" src=\"{{ randoms[rand].image }}\" style=\"width: 400px; height: 210px;\" alt=\"About the image\">-->
                    </center>
                    <div class=\"c-project-card__content\">
                        <div class=\"c-project-card__head\" style=\"min-height:150px;background-image: url(uploads/{{ randoms[rand].brochure }});background-size: cover;background-repeat:no-repeat;\">
                        </div>

                        <div class=\"c-project-card__meta\">
                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"{{ path('Anime', { 'id': randoms[rand].id , 'ep': '1' }) }}\">{{ randoms[rand].nom }}</a><span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span></h4>
                            <p class=\"c-project-card__info\" style=\"float:right\">Airi | Last Update: 29 Dec 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
            <tfoot>
                    <tr>
                           
                    </tr>
            </tfoot>
        </div>

            <div class=\"row u-m-small\" style=\"margin-left:2%;margin-right:2%;padding: 10px;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
        <div style=\"width:100%;\">
            <font color=\"white\" style=\"float:left\" size=\"6\">Top de la semaine</font>
            <font style=\"color:white; float:right\" size=\"4.5\">See More...</font>
        </div>
        {% for i in 0..3 %}
            {% set randoms = random %}
            {% set rand = random((randoms|length)-1) %}
            <div class=\"col-sm-6 col-md-3\">
                <div class=\"c-project-card u-mb-medium\">
                    <center>
                        <!-- <img class=\"img-fluid\" src=\"{{ randoms[rand].image }}\" style=\"width: 400px; height: 210px;\" alt=\"About the image\">-->
                    </center>
                    <div class=\"c-project-card__content\">
                        <div class=\"c-project-card__head\" style=\"min-height:150px;background-image: url(uploads/{{ randoms[rand].brochure }});background-size: cover;background-repeat:no-repeat;\">
                        </div>

                        <div class=\"c-project-card__meta\">
                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"{{ path('Anime', { 'id': randoms[rand].id , 'ep': '1' }) }}\">{{ randoms[rand].nom }}</a><span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span></h4>
                            <p class=\"c-project-card__info\" style=\"float:right\">Airi | Last Update: 29 Dec 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
            <tfoot>
                    <tr>
                           
                    </tr>
            </tfoot>
        </div> 

     <div class=\"row u-m-small\" style=\"margin-left:2%;margin-right:2%;padding: 10px;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
        <div style=\"width:100%;\">
            <font color=\"white\" size=\"6\">Dernières sorties</font>
        </div>
        {% for article in listarticle %}
            <div class=\"col-sm-6 col-md-3\">
                <div class=\"c-project-card u-mb-medium\">
                    <center>
                        <!-- <img class=\"img-fluid\" src=\"{{ article.anime.image }}\" style=\"width: 400px; height: 210px;\" alt=\"About the image\">-->
                    </center>
                    <div class=\"c-project-card__content\">
                        <div class=\"c-project-card__head\" style=\"min-height:150px;background-image: url(uploads/{{ article.anime.brochure }});background-size: cover;background-repeat:no-repeat;\">
                        </div>

                        <div class=\"c-project-card__meta\">
                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"{{ path('Anime', { 'id': article.anime.id , 'ep': article.episode }) }}\">{{ article.anime.nom }} {{ article.episode }}</a><span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span></h4>
                            <p class=\"c-project-card__info\">Airi | Last Update: 29 Dec 2017</p>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
            <tfoot>
                    <tr>
                            {{ pagination(listarticle, 'page') }}
                    </tr>
            </tfoot>
        </div>
{% endblock %}

", "main/home.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\main\\home.html.twig");
    }
}
