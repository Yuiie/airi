<?php

/* feed/index.html.twig */
class __TwigTemplate_7b3307660732d11d6af044ef5caaeba3fa9046271f872481f4ea7a16b3949b2f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("native.html.twig", "feed/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "feed/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "feed/index.html.twig"));

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
        echo "    <link href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "css/feed/index.css\" rel=\"stylesheet\">
            <br /><br />
   
                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"my-card\">
                        <p style=\"margin-left: 20px\">message</p>
                        <div style=\"margin: 10px;display:true\">
                            <form method=\"POST\" name=\"form\" id=\"form\">
                                <input class=\"c-input\" id=\"msg\" type=\"text\">
                            </form>
                            <script type=\"text/javascript\">
                                \$(function(){
                                    \$('#form').submit(function(e){ 
                                        e.preventDefault();
                                            var msg = \$(\"#msg\").val();
                                            var parent = '0';
                                            var data = {
                                                parent: parent,
                                                msg: msg
                                            };
                                            \$.ajax({
                                                data: {
                                                    parent: parent,
                                                    msg: msg
                                                },
                                                type: \"POST\",
                                                url: \"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "dbfeed\",

                                            })
                                            conn.send(JSON.stringify(data));
                                    });
                                });
                            </script>
                        </div>
                        <!-- End Formulaire -->
                        <div style=\"margin-bottom:10px\"></div>
                    </div>
                </div>
        ";
        // line 49
        $context["count"] = 0;
        // line 50
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayFeed"]) || array_key_exists("arrayFeed", $context) ? $context["arrayFeed"] : (function () { throw new Twig_Error_Runtime('Variable "arrayFeed" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 51
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, $context["feed"], "parent", array()) == 0) && ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 51, $this->source); })()) == 0))) {
                // line 52
                echo "                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"my-card\">
                            <p style=\"padding-left: 20px\">";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "pseudo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "message", array()), "html", null, true);
                echo "</p>
                            <button style=\"margin-left: 10px;background-color: transparent;border:none;color:blue\" onclick=\"openCity(event, '";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "')\">Repondre</button>
                            <div style=\"margin-top: 10px\" id=\"";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" class=\"tabcontent\">
                                <!-- Formulaire -->
                                <form method=\"POST\" name=\"form_";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" id=\"form_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\">
                                    <input class=\"c-input\" id=\"msg_";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" type=\"text\">
                                </form>
                                <script type=\"text/javascript\">
                                    \$(function(){
                                        \$('#form_";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "').submit(function(e){ 
                                            e.preventDefault();
                                                var msg = \$(\"#msg_";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\").val();
                                                var parent = '";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "';
                                                var data = {
                                                    parent: parent,
                                                    msg: msg
                                                };
                                                \$.ajax({
                                                    data: {
                                                        parent: parent,
                                                        msg: msg
                                                    },
                                                    type: \"POST\",
                                                    url: \"";
                // line 77
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
                echo "dbfeed\",

                                                })
                                                conn.send(JSON.stringify(data));
                                        });
                                    });
                                </script>
                                <!-- End Formulaire -->
                            </div>
                            <div style=\"margin-bottom:10px\"></div>
            ";
            }
            // line 88
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, $context["feed"], "parent", array()) == 0) && ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 88, $this->source); })()) != 0))) {
                // line 89
                echo "                    </div>
                </div>
                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"my-card\">
                        <p style=\"margin-left: 20px\">";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "pseudo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "message", array()), "html", null, true);
                echo "</p>
                        <button style=\"margin-left: 10px;background-color: transparent;border:none;color:blue\" onclick=\"openCity(event, '";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "')\">Repondre</button>
                        <div style=\"margin-top: 10px\" id=\"";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" class=\"tabcontent\">
                            <!-- Formulaire -->
                            <form method=\"POST\" name=\"form_";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" id=\"form_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\">
                                <input class=\"c-input\" id=\"msg_";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" type=\"text\">
                            </form>
                            <script type=\"text/javascript\">
                                \$(function(){
                                    \$('#form_";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "').submit(function(e){ 
                                        e.preventDefault();
                                            var msg = \$(\"#msg_";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\").val();
                                            var parent = '";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "';
                                            var data = {
                                                parent: parent,
                                                msg: msg
                                            };
                                            \$.ajax({
                                                data: {
                                                    parent: parent,
                                                    msg: msg
                                                },
                                                type: \"POST\",
                                                url: \"";
                // line 116
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
                echo "dbfeed\",

                                            })
                                            conn.send(JSON.stringify(data));
                                    });
                                });
                            </script>
                            <!-- End Formulaire -->
                        </div>
                        <div style=\"margin-bottom:10px\"></div>
            ";
            }
            // line 127
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["feed"], "parent", array()) != 0)) {
                // line 128
                echo "                    <div class=\"my-card1\">
                        <div class=\"text\">
                            <p style=\"margin-left: 10px\">";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "pseudo", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "message", array()), "html", null, true);
                echo "</p>
                                <button style=\"margin-left: 10px;background-color: transparent;border:none;color:blue\" onclick=\"openCity(event, '";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "')\">Repondre</button>
                            <div style=\"margin-top: 10px\" id=\"";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" class=\"tabcontent\">
                                <!-- Formulaire -->
                                <form method=\"POST\" name=\"form_";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" id=\"form_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\">
                                    <input class=\"c-input\" id=\"msg_";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\" type=\"text\">
                                </form>
                                <script type=\"text/javascript\">
                                    \$(function(){
                                        \$('#form_";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "').submit(function(e){ 
                                            e.preventDefault();
                                                var msg = \$(\"#msg_";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "\").val();
                                                var parent = '";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "id", array()), "html", null, true);
                echo "';
                                                var data = {
                                                    parent: parent,
                                                    msg: msg
                                                };
                                                \$.ajax({
                                                    data: {
                                                        parent: parent,
                                                        msg: msg
                                                    },
                                                    type: \"POST\",
                                                    url: \"";
                // line 153
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
                echo "dbfeed\",

                                                })
                                                conn.send(JSON.stringify(data));
                                        });
                                    });
                                </script>
                                <!-- End Formulaire -->
                            </div>
                        </div>
                    </div>
            ";
            }
            // line 165
            echo "            ";
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 165, $this->source); })()) + 1);
            // line 166
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        </div>
    </div>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tabs.js"), "html", null, true);
        echo "\"></script>
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
        return "feed/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 9,  360 => 8,  348 => 169,  344 => 167,  338 => 166,  335 => 165,  320 => 153,  306 => 142,  302 => 141,  297 => 139,  290 => 135,  284 => 134,  279 => 132,  275 => 131,  269 => 130,  265 => 128,  262 => 127,  248 => 116,  234 => 105,  230 => 104,  225 => 102,  218 => 98,  212 => 97,  207 => 95,  203 => 94,  197 => 93,  191 => 89,  188 => 88,  174 => 77,  160 => 66,  156 => 65,  151 => 63,  144 => 59,  138 => 58,  133 => 56,  129 => 55,  123 => 54,  119 => 52,  116 => 51,  111 => 50,  109 => 49,  94 => 37,  64 => 11,  62 => 8,  59 => 7,  50 => 6,  40 => 1,  38 => 3,  36 => 2,  15 => 1,);
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
    <link href=\"{{ path('index') }}css/feed/index.css\" rel=\"stylesheet\">
            <br /><br />
   
                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"my-card\">
                        <p style=\"margin-left: 20px\">message</p>
                        <div style=\"margin: 10px;display:true\">
                            <form method=\"POST\" name=\"form\" id=\"form\">
                                <input class=\"c-input\" id=\"msg\" type=\"text\">
                            </form>
                            <script type=\"text/javascript\">
                                \$(function(){
                                    \$('#form').submit(function(e){ 
                                        e.preventDefault();
                                            var msg = \$(\"#msg\").val();
                                            var parent = '0';
                                            var data = {
                                                parent: parent,
                                                msg: msg
                                            };
                                            \$.ajax({
                                                data: {
                                                    parent: parent,
                                                    msg: msg
                                                },
                                                type: \"POST\",
                                                url: \"{{ path('index') }}dbfeed\",

                                            })
                                            conn.send(JSON.stringify(data));
                                    });
                                });
                            </script>
                        </div>
                        <!-- End Formulaire -->
                        <div style=\"margin-bottom:10px\"></div>
                    </div>
                </div>
        {% set count = 0 %}
        {% for feed in arrayFeed %}
            {% if feed.parent == 0 and count == 0 %}
                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"my-card\">
                            <p style=\"padding-left: 20px\">{{ feed.pseudo }} {{ feed.message }}</p>
                            <button style=\"margin-left: 10px;background-color: transparent;border:none;color:blue\" onclick=\"openCity(event, '{{ feed.id }}')\">Repondre</button>
                            <div style=\"margin-top: 10px\" id=\"{{ feed.id }}\" class=\"tabcontent\">
                                <!-- Formulaire -->
                                <form method=\"POST\" name=\"form_{{ feed.id }}\" id=\"form_{{ feed.id }}\">
                                    <input class=\"c-input\" id=\"msg_{{ feed.id }}\" type=\"text\">
                                </form>
                                <script type=\"text/javascript\">
                                    \$(function(){
                                        \$('#form_{{ feed.id }}').submit(function(e){ 
                                            e.preventDefault();
                                                var msg = \$(\"#msg_{{ feed.id }}\").val();
                                                var parent = '{{ feed.id }}';
                                                var data = {
                                                    parent: parent,
                                                    msg: msg
                                                };
                                                \$.ajax({
                                                    data: {
                                                        parent: parent,
                                                        msg: msg
                                                    },
                                                    type: \"POST\",
                                                    url: \"{{ path('index') }}dbfeed\",

                                                })
                                                conn.send(JSON.stringify(data));
                                        });
                                    });
                                </script>
                                <!-- End Formulaire -->
                            </div>
                            <div style=\"margin-bottom:10px\"></div>
            {% endif %}
            {% if feed.parent == 0 and count != 0 %}
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-8\">
                    <div class=\"my-card\">
                        <p style=\"margin-left: 20px\">{{ feed.pseudo }} {{ feed.message }}</p>
                        <button style=\"margin-left: 10px;background-color: transparent;border:none;color:blue\" onclick=\"openCity(event, '{{ feed.id }}')\">Repondre</button>
                        <div style=\"margin-top: 10px\" id=\"{{ feed.id }}\" class=\"tabcontent\">
                            <!-- Formulaire -->
                            <form method=\"POST\" name=\"form_{{ feed.id }}\" id=\"form_{{ feed.id }}\">
                                <input class=\"c-input\" id=\"msg_{{ feed.id }}\" type=\"text\">
                            </form>
                            <script type=\"text/javascript\">
                                \$(function(){
                                    \$('#form_{{ feed.id }}').submit(function(e){ 
                                        e.preventDefault();
                                            var msg = \$(\"#msg_{{ feed.id }}\").val();
                                            var parent = '{{ feed.id }}';
                                            var data = {
                                                parent: parent,
                                                msg: msg
                                            };
                                            \$.ajax({
                                                data: {
                                                    parent: parent,
                                                    msg: msg
                                                },
                                                type: \"POST\",
                                                url: \"{{ path('index') }}dbfeed\",

                                            })
                                            conn.send(JSON.stringify(data));
                                    });
                                });
                            </script>
                            <!-- End Formulaire -->
                        </div>
                        <div style=\"margin-bottom:10px\"></div>
            {% endif %}
            {% if feed.parent != 0 %}
                    <div class=\"my-card1\">
                        <div class=\"text\">
                            <p style=\"margin-left: 10px\">{{ feed.pseudo }} {{ feed.message }}</p>
                                <button style=\"margin-left: 10px;background-color: transparent;border:none;color:blue\" onclick=\"openCity(event, '{{ feed.id }}')\">Repondre</button>
                            <div style=\"margin-top: 10px\" id=\"{{ feed.id }}\" class=\"tabcontent\">
                                <!-- Formulaire -->
                                <form method=\"POST\" name=\"form_{{ feed.id }}\" id=\"form_{{ feed.id }}\">
                                    <input class=\"c-input\" id=\"msg_{{ feed.id }}\" type=\"text\">
                                </form>
                                <script type=\"text/javascript\">
                                    \$(function(){
                                        \$('#form_{{ feed.id }}').submit(function(e){ 
                                            e.preventDefault();
                                                var msg = \$(\"#msg_{{ feed.id }}\").val();
                                                var parent = '{{ feed.id }}';
                                                var data = {
                                                    parent: parent,
                                                    msg: msg
                                                };
                                                \$.ajax({
                                                    data: {
                                                        parent: parent,
                                                        msg: msg
                                                    },
                                                    type: \"POST\",
                                                    url: \"{{ path('index') }}dbfeed\",

                                                })
                                                conn.send(JSON.stringify(data));
                                        });
                                    });
                                </script>
                                <!-- End Formulaire -->
                            </div>
                        </div>
                    </div>
            {% endif %}
            {% set count = count + 1 %}
        {% endfor %}
        </div>
    </div>
    <script src=\"{{ asset('js/tabs.js') }}\"></script>
{% endblock %}

", "feed/index.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\feed\\index.html.twig");
    }
}
