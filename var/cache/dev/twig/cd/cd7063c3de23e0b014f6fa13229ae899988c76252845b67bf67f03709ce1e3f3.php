<?php

/* historique/stream.html.twig */
class __TwigTemplate_7221107dc3c9a8af0f5edb204b4eecb92ddce6089797b03c3afee2a7ef9cacb9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "historique/stream.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "historique/stream.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\HistoriqueController::streaming", array("path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "id" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 6, $this->source); })()), "id", array()), "ep" =>         // line 7
(isset($context["ep"]) || array_key_exists("ep", $context) ? $context["ep"] : (function () { throw new Twig_Error_Runtime('Variable "ep" does not exist.', 7, $this->source); })()), "nom" => twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 8, $this->source); })()), "nom", array()), "content" => twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 9, $this->source); })()), "content", array()), "image" => twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 10, $this->source); })()), "image", array()))));
        // line 13
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "historique/stream.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  36 => 10,  35 => 9,  34 => 8,  33 => 7,  32 => 6,  31 => 5,  30 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ render(controller(
        'App\\\\Controller\\\\HistoriqueController::streaming',
        { 
            'path': path(app.request.attributes.get('_route'),
            app.request.attributes.get('_route_params')),
            'id': article.id,
            'ep': ep,
            'nom': article.nom,
            'content': article.content,
            'image': article.image 
        }
    ))
}}
", "historique/stream.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\historique\\stream.html.twig");
    }
}
