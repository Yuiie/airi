<?php

/* main/Anime.html.twig */
class __TwigTemplate_6d6e7214c3cf09eb80d26b470d0342ef9d7ef8e717618a9e901a0c644f07df62 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("native.html.twig", "main/Anime.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/Anime.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/Anime.html.twig"));

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
    public function block_body_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "<head>
    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
            background-color: white;
        }

        .content{
            margin: 0;
        }
        p{
            display: inline;
            padding-right: 10px;
            font-size: 0.6em;
        }
        a{
            font-size: 0.5em;
        }
        p, h1, a{
            color: white;
        }

        th, td {
    border-bottom: 1px solid #ddd;
}
    </style>
</head>
<h1><h1>
<div class=\"row\" style=\"margin-left:2%;margin-right:2%;padding: 10px;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
    <div class=\"col-sm-5\" >
<center>

        <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 74, $this->source); })()), "image", array()), "html", null, true);
        echo "\" style=\"width: 450px;height:300px;\" class=\"rounded mx-auto d-block\" alt=\"...\">
</center>

    </div>
    <div class=\"col-sm-5\">
        <div style=\"padding: 10px;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
        <table>
            <tr style=\"padding: 0;margin: 0\">
                <td>
                    <p>Titre :</p>
                    <a>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 84, $this->source); })()), "nom", array()), "html", null, true);
        echo "</a>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Genre :</p>
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
            // line 91
            echo "                        <a href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categories"], "categorie", array()), "html", null, true);
            echo ",</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                </td>
            </tr>
            <tr>
                <td>
                    <p>Date de sortie :</p>
                    <a>";
        // line 98
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 98, $this->source); })()), "date", array()), "m/d/Y"), "html", null, true);
        echo "</a>
                </td>
            </tr>
            <tr>
                    
            </tr>
        </table>
        </div>
    </div>
</div>
<div class=\"content\" style=\"background-color: #404040; margin-top: 1%;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
<center>
  <p style=\"font-size:0.47em\">";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 110, $this->source); })()), "content", array()), "html", null, true);
        echo "</p>
</center>

</div>
<div class=\"tab\">
  <button class=\"tablinks\" onclick=\"openCity(event, 'Video')\">Video</button>
  <button class=\"tablinks\" onclick=\"openCity(event, 'Commentaire')\">Commentaire</button>
</div>

<div id=\"Video\" class=\"tabcontent\">
    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new Twig_Error_Runtime('Variable "episode" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["episodes"]) {
            // line 121
            echo "        <div class=\"col\">
            <div class=\"card\" style=\"background-color:#ccccff; margin-top: 10px;\">
            <div class=\"embed-responsive embed-responsive-16by9\">
                    <embed class=\"embed-responsive-item\" width=\"640\" height=\"480\" src=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episodes"], "url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></embed>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episodes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "</div>

<div id=\"Commentaire\" class=\"tabcontent\" style=\"background-color:#EEEDE8\">
                                    <form method=\"post\">
                                   
                                        <div class=\"c-field u-mb-small\">
                                            <label class=\"c-field__label\" for=\"input1\">Destinataire:</label> 
                                            <input class=\"c-input\" name=\"destinataire\">
                                        </div>
                                           
                                            <input class=\"c-form\" name=\"message\" type=\"text\" placeholder=\"Clark\">
                                    </form><br />
</div><br />

";
        // line 143
        $this->loadTemplate("historique/stream.html.twig", "main/Anime.html.twig", 143)->display($context);
        // line 144
        $this->loadTemplate("carousel-episode.html.twig", "main/Anime.html.twig", 144)->display($context);
        // line 145
        echo "<br />
";
        // line 147
        echo "<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName(\"tabcontent\");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = \"none\";
        }
        tablinks = document.getElementsByClassName(\"tablinks\");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
        }
        document.getElementById(cityName).style.display = \"block\";
        evt.currentTarget.className += \" active\";
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/Anime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 7,  266 => 6,  241 => 147,  238 => 145,  236 => 144,  234 => 143,  218 => 129,  207 => 124,  202 => 121,  198 => 120,  185 => 110,  170 => 98,  163 => 93,  154 => 91,  150 => 90,  141 => 84,  128 => 74,  61 => 9,  59 => 6,  50 => 5,  40 => 1,  38 => 3,  36 => 2,  15 => 1,);
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
<head>
    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
            background-color: white;
        }

        .content{
            margin: 0;
        }
        p{
            display: inline;
            padding-right: 10px;
            font-size: 0.6em;
        }
        a{
            font-size: 0.5em;
        }
        p, h1, a{
            color: white;
        }

        th, td {
    border-bottom: 1px solid #ddd;
}
    </style>
</head>
<h1><h1>
<div class=\"row\" style=\"margin-left:2%;margin-right:2%;padding: 10px;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
    <div class=\"col-sm-5\" >
<center>

        <img src=\"{{ article.image }}\" style=\"width: 450px;height:300px;\" class=\"rounded mx-auto d-block\" alt=\"...\">
</center>

    </div>
    <div class=\"col-sm-5\">
        <div style=\"padding: 10px;background-color: #404040;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
        <table>
            <tr style=\"padding: 0;margin: 0\">
                <td>
                    <p>Titre :</p>
                    <a>{{ article.nom }}</a>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Genre :</p>
                    {% for categories in categorie %}
                        <a href=\"#\">{{categories.categorie}},</a>
                    {% endfor %}
                </td>
            </tr>
            <tr>
                <td>
                    <p>Date de sortie :</p>
                    <a>{{ article.date|date(\"m/d/Y\") }}</a>
                </td>
            </tr>
            <tr>
                    
            </tr>
        </table>
        </div>
    </div>
</div>
<div class=\"content\" style=\"background-color: #404040; margin-top: 1%;margin-bottom: 1%;box-shadow: 0 0 1em black;\">
<center>
  <p style=\"font-size:0.47em\">{{ article.content }}</p>
</center>

</div>
<div class=\"tab\">
  <button class=\"tablinks\" onclick=\"openCity(event, 'Video')\">Video</button>
  <button class=\"tablinks\" onclick=\"openCity(event, 'Commentaire')\">Commentaire</button>
</div>

<div id=\"Video\" class=\"tabcontent\">
    {% for episodes in episode %}
        <div class=\"col\">
            <div class=\"card\" style=\"background-color:#ccccff; margin-top: 10px;\">
            <div class=\"embed-responsive embed-responsive-16by9\">
                    <embed class=\"embed-responsive-item\" width=\"640\" height=\"480\" src=\"{{ episodes.url }}\" frameborder=\"0\" allowfullscreen></embed>
                </div>
            </div>
        </div>
    {% endfor %}
</div>

<div id=\"Commentaire\" class=\"tabcontent\" style=\"background-color:#EEEDE8\">
                                    <form method=\"post\">
                                   
                                        <div class=\"c-field u-mb-small\">
                                            <label class=\"c-field__label\" for=\"input1\">Destinataire:</label> 
                                            <input class=\"c-input\" name=\"destinataire\">
                                        </div>
                                           
                                            <input class=\"c-form\" name=\"message\" type=\"text\" placeholder=\"Clark\">
                                    </form><br />
</div><br />

{% include 'historique/stream.html.twig' %}
{% include 'carousel-episode.html.twig' %}
<br />
{# Tab #}
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName(\"tabcontent\");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = \"none\";
        }
        tablinks = document.getElementsByClassName(\"tablinks\");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
        }
        document.getElementById(cityName).style.display = \"block\";
        evt.currentTarget.className += \" active\";
    }
</script>
{% endblock %}", "main/Anime.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\main\\Anime.html.twig");
    }
}
