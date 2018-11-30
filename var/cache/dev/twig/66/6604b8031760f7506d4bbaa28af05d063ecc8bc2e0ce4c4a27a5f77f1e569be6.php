<?php

/* main/recherche.html.twig */
class __TwigTemplate_8f78da7831c283c057926678b81490d75e235ea41e7f6fcb26a970b95bc8a37e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/recherche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/recherche.html.twig"));

        // line 1
        echo "
  <div class=\"row u-m-small\">
     ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listarticle"]) || array_key_exists("listarticle", $context) ? $context["listarticle"] : (function () { throw new Twig_Error_Runtime('Variable "listarticle" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "                            <div class=\"col-sm-6 col-md-4\">

                                <div class=\"c-project-card u-mb-medium\">
                                    <center>
                                    <img class=\"img-fluid\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", array()), "html", null, true);
            echo "\" style=\"width: 300px; height: 170px;\" alt=\"About the image\">
                                    </center>
                                    <div class=\"c-project-card__content\">
                                        <div class=\"c-project-card__head\">
                                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Anime", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "ep" => 1)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", array()), "html", null, true);
            echo "</a><span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span></h4>
                                            <p class=\"c-project-card__info\">Gourmet | Last Update: 29 Dec 2017</p>
                                        </div>
                                        

                                        <div class=\"c-project-card__meta\">
                                            <p>9,680 USD<small class=\"u-block u-text-mute\">Budget / Salary</small></p>
                                            <p>9,680 USD<small class=\"u-block u-text-mute\">Budget / Salary</small></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div><!-- // .row -->
        <script src=\"js/main.min.js\"></script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 26,  50 => 12,  43 => 8,  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
  <div class=\"row u-m-small\">
     {% for article in listarticle %}
                            <div class=\"col-sm-6 col-md-4\">

                                <div class=\"c-project-card u-mb-medium\">
                                    <center>
                                    <img class=\"img-fluid\" src=\"{{ article.image }}\" style=\"width: 300px; height: 170px;\" alt=\"About the image\">
                                    </center>
                                    <div class=\"c-project-card__content\">
                                        <div class=\"c-project-card__head\">
                                            <h4 class=\"c-project-card__title\"><a class=\"nav-item\" href=\"{{ path('Anime', { 'id': article.id , 'ep': 1 }) }}\">{{ article.nom }}</a><span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span></h4>
                                            <p class=\"c-project-card__info\">Gourmet | Last Update: 29 Dec 2017</p>
                                        </div>
                                        

                                        <div class=\"c-project-card__meta\">
                                            <p>9,680 USD<small class=\"u-block u-text-mute\">Budget / Salary</small></p>
                                            <p>9,680 USD<small class=\"u-block u-text-mute\">Budget / Salary</small></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
 {% endfor %}
        </div><!-- // .row -->
        <script src=\"js/main.min.js\"></script>

", "main/recherche.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\main\\recherche.html.twig");
    }
}
