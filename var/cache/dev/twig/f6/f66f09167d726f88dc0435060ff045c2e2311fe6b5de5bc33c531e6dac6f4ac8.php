<?php

/* messenger/index.html.twig */
class __TwigTemplate_43f1f5a743b9e40f0e351c93d0883e6fd3f69dc79247539603e52204e7cd39c9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("native.html.twig", "messenger/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "messenger/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "messenger/index.html.twig"));

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
        // line 75
        echo "
 <div class=\"container-fluid c-messanger\">
                <div class=\"row\">
                    <div class=\"col-sm-4 u-p-zero\">
                        <div class=\"u-p-small u-border-bottom u-border-right\">
                            <div class=\"c-field has-icon-right\">
                                <input class=\"c-input\" type=\"text\" placeholder=\"Search\">
                                <span class=\"c-field__icon\">
                                    <i class=\"fa fa-search\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-8 u-p-zero\">
                        <div class=\"u-height-100 u-flex u-align-items-center u-border-bottom\">
                            <h5 class=\"u-mb-zero u-ml-medium\">Messages</h5>
                            <span class=\"u-ml-xsmall u-text-tiny u-mr-auto\">
                                <i class=\"fa fa-circle u-color-success\"></i>
                            </span>

                            <div class=\"c-btn-group u-mr-medium u-hidden-down@tablet\">
                            <div class=\"tab\">
                                <a class=\"c-btn c-btn--secondary\" onclick=\"openCity(event, 'new-message')\">
                                    <i class=\"u-opacity-heavy fa fa-paper-plane-o\"></i>
                                </a>
                            </div>
                                <a class=\"c-btn c-btn--secondary\">
                                    <i class=\"u-opacity-heavy fa fa-trash-o\"></i>
                                </a>
                                <a class=\"c-btn c-btn--secondary\">
                                    <i class=\"u-opacity-heavy fa fa-hashtag\"></i>
                                </a>
                            </div>
                            <span class=\"u-text-mute u-text-small u-mr-small u-hidden-down@tablet\">1 of 28</span>
                            <div class=\"c-btn-group u-mr-small u-mv-small\">
                                <a class=\"c-btn c-btn--secondary\">
                                    <i class=\"u-opacity-heavy fa fa-caret-left\"></i>
                                </a>
                                <a class=\"c-btn c-btn--secondary\">
                                    <i class=\"u-opacity-heavy fa fa-caret-right\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- // .row -->

                <div class=\"row\">
                    <div class=\"col-sm-4 u-p-zero\">
                        <div class=\"c-messages\">
                            <!-- tab messages -->
                            <div class=\"tab\">
                                ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 127
            echo "                                <a class=\"c-message is-active\" onclick=\"openCity(event, '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "expediteur", array()), "id", array()), "html", null, true);
            echo "')\">
                                    <div class=\"o-media\">
                                        <div class=\"o-media__img u-mr-small\">
                                            <div class=\"c-avatar c-avatar--small\">
                                                <img class=\"c-avatar__img\" src=\"img/avatar-72.jpg\" alt=\"Adam's Face\">
                                            </div> 
                                        </div>
                                        <div class=\"o-media__body\">
                                            <h4 class=\"c-message__title\">";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "expediteur", array()), "html", null, true);
            echo "
                                            <span class=\"c-message__title-meta\">Twitter</span></h4>
                                            <span class=\"c-message__time\">";
            // line 137
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                                        </div>
                                    </div>
                                    <span class=\"c-message__counter u-hidden-down@desktop\">1</span>
                                    <p class=\"c-message__snippet\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", array()), "html", null, true);
            echo "</p>
                                </a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                            </div>
                        </div>
                    </div>

                    <!-- ################################################################### -->

                    <div class=\"col-sm-8 u-p-zero\">
                        <div class=\"c-chat\">
                            <div class=\"c-chat__body\">
                              
                                ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 154, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 155
            echo "                                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "expediteur", array()), "id", array()), "html", null, true);
            echo "\" class=\"tabcontent\">
                                <!-- Message -->
                                    <div class=\"c-chat__message o-media\">
                                        <div class=\"o-media__img u-mr-small\">
                                            <div class=\"c-avatar c-avatar--small\">
                                                <div class=\"c-avatar__img\">
                                                    <img src=\"img/avatar-72.jpg\" alt=\"Adam's Face\">
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"o-media__body\">
                                            <h4 class=\"c-chat__message-author\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "expediteur", array()), "html", null, true);
            echo "</h4>
                                            <span class=\"c-chat__message-time\">";
            // line 168
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                                            <p class=\"c-chat__message-content\">";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", array()), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                    <!-- send messages -->
                                    <form class=\"c-chat__composer\" method=\"post\">
                                        <div class=\"c-field has-addon-left\">
                                            <button class=\"c-field__addon\"><i class=\"fa fa-plus\"></i></button> 
                                            <input class=\"c-input\" name=\"message\" type=\"text\" placeholder=\"Clark\">
                                            <input class=\"hide\" value=\"";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "expediteur", array()), "html", null, true);
            echo "\" name=\"destinataire\">
                                        </div>
                                    </form>
                                <!-- Fin Message -->
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "


                            <!-- New Message -->
                            <div id=\"new-message\" class=\"tabcontent\">
                                    <form method=\"post\">
                                   
                                        <div class=\"c-field u-mb-small\">
                                            <label class=\"c-field__label\" for=\"input1\">Destinataire:</label> 
                                            <input class=\"c-input\" name=\"destinataire\"><br />
                                        </div>
                                        <div class=\"c-field has-addon-left\">
                                            <button class=\"c-field__addon\"><i class=\"fa fa-plus\"></i></button> 
                                            <input class=\"c-input\" name=\"message\" type=\"text\" placeholder=\"Clark\">
                                        </div>
                                    </form>
                                </div>
                                <!-- Fin New Message -->


</div>
                        </div>
                    </div>


                </div><!-- // .row -->
            </div><!-- // .container --> 


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

            <!--  Tab -->
            <style>
                    /* Style the tab */
                    .tab {
                        overflow: hidden;
                        background-color: transparent;
                    }

                    /* Style the buttons that are used to open the tab content */
                    .tab button {
                        background-color: inherit;
                        float: left;
                        border: none;
                        outline: none;
                        cursor: pointer;
                        padding: 14px 16px;
                        transition: 0.3s;
                    }

                    /* Change background color of buttons on hover */
                    .tab button:hover {
                        background-color: transparent;
                    }

                    /* Create an active/current tablink class */
                    .tab button.active {
                        background-color: transparent;
                    }

                    /* Style the tab content */
                    .tabcontent {
                        display: none;
                        padding: 6px 12px;
                        border-top: none;
                    }

                    .hide {
                        display: none;
                    }
            </style>
            <script>
                    function openCity(evt, cityName) {
                        // Declare all variables
                        var i, tabcontent, tablinks;

                        // Get all elements with class=\"tabcontent\" and hide them
                        tabcontent = document.getElementsByClassName(\"tabcontent\");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = \"none\";
                        }

                        // Get all elements with class=\"tablinks\" and remove the class \"active\"
                        tablinks = document.getElementsByClassName(\"tablinks\");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
                        }

                        // Show the current tab, and add an \"active\" class to the button that opened the tab
                        document.getElementById(cityName).style.display = \"block\";
                        evt.currentTarget.className += \" active\";
                    }
            </script>
            <!-- FIN Tab -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "messenger/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 9,  256 => 8,  217 => 183,  205 => 177,  194 => 169,  190 => 168,  186 => 167,  170 => 155,  166 => 154,  154 => 144,  145 => 141,  138 => 137,  133 => 135,  121 => 127,  117 => 126,  64 => 75,  62 => 8,  59 => 7,  50 => 6,  40 => 1,  38 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'native.html.twig' %}
{% set message = message %}
{% set listanime = anime %}


{% block body_home %}

    {% block stylesheets %}
            {{ parent() }}

            <!--  Tab -->
            <style>
                    /* Style the tab */
                    .tab {
                        overflow: hidden;
                        background-color: transparent;
                    }

                    /* Style the buttons that are used to open the tab content */
                    .tab button {
                        background-color: inherit;
                        float: left;
                        border: none;
                        outline: none;
                        cursor: pointer;
                        padding: 14px 16px;
                        transition: 0.3s;
                    }

                    /* Change background color of buttons on hover */
                    .tab button:hover {
                        background-color: transparent;
                    }

                    /* Create an active/current tablink class */
                    .tab button.active {
                        background-color: transparent;
                    }

                    /* Style the tab content */
                    .tabcontent {
                        display: none;
                        padding: 6px 12px;
                        border-top: none;
                    }

                    .hide {
                        display: none;
                    }
            </style>
            <script>
                    function openCity(evt, cityName) {
                        // Declare all variables
                        var i, tabcontent, tablinks;

                        // Get all elements with class=\"tabcontent\" and hide them
                        tabcontent = document.getElementsByClassName(\"tabcontent\");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = \"none\";
                        }

                        // Get all elements with class=\"tablinks\" and remove the class \"active\"
                        tablinks = document.getElementsByClassName(\"tablinks\");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
                        }

                        // Show the current tab, and add an \"active\" class to the button that opened the tab
                        document.getElementById(cityName).style.display = \"block\";
                        evt.currentTarget.className += \" active\";
                    }
            </script>
            <!-- FIN Tab -->
    {% endblock %}

 <div class=\"container-fluid c-messanger\">
                <div class=\"row\">
                    <div class=\"col-sm-4 u-p-zero\">
                        <div class=\"u-p-small u-border-bottom u-border-right\">
                            <div class=\"c-field has-icon-right\">
                                <input class=\"c-input\" type=\"text\" placeholder=\"Search\">
                                <span class=\"c-field__icon\">
                                    <i class=\"fa fa-search\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-8 u-p-zero\">
                        <div class=\"u-height-100 u-flex u-align-items-center u-border-bottom\">
                            <h5 class=\"u-mb-zero u-ml-medium\">Messages</h5>
                            <span class=\"u-ml-xsmall u-text-tiny u-mr-auto\">
                                <i class=\"fa fa-circle u-color-success\"></i>
                            </span>

                            <div class=\"c-btn-group u-mr-medium u-hidden-down@tablet\">
                            <div class=\"tab\">
                                <a class=\"c-btn c-btn--secondary\" onclick=\"openCity(event, 'new-message')\">
                                    <i class=\"u-opacity-heavy fa fa-paper-plane-o\"></i>
                                </a>
                            </div>
                                <a class=\"c-btn c-btn--secondary\">
                                    <i class=\"u-opacity-heavy fa fa-trash-o\"></i>
                                </a>
                                <a class=\"c-btn c-btn--secondary\">
                                    <i class=\"u-opacity-heavy fa fa-hashtag\"></i>
                                </a>
                            </div>
                            <span class=\"u-text-mute u-text-small u-mr-small u-hidden-down@tablet\">1 of 28</span>
                            <div class=\"c-btn-group u-mr-small u-mv-small\">
                                <a class=\"c-btn c-btn--secondary\">
                                    <i class=\"u-opacity-heavy fa fa-caret-left\"></i>
                                </a>
                                <a class=\"c-btn c-btn--secondary\">
                                    <i class=\"u-opacity-heavy fa fa-caret-right\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- // .row -->

                <div class=\"row\">
                    <div class=\"col-sm-4 u-p-zero\">
                        <div class=\"c-messages\">
                            <!-- tab messages -->
                            <div class=\"tab\">
                                {% for message in messages %}
                                <a class=\"c-message is-active\" onclick=\"openCity(event, '{{ message.expediteur.id }}')\">
                                    <div class=\"o-media\">
                                        <div class=\"o-media__img u-mr-small\">
                                            <div class=\"c-avatar c-avatar--small\">
                                                <img class=\"c-avatar__img\" src=\"img/avatar-72.jpg\" alt=\"Adam's Face\">
                                            </div> 
                                        </div>
                                        <div class=\"o-media__body\">
                                            <h4 class=\"c-message__title\">{{ message.expediteur }}
                                            <span class=\"c-message__title-meta\">Twitter</span></h4>
                                            <span class=\"c-message__time\">{{ message.date|date('Y-m-d') }}</span>
                                        </div>
                                    </div>
                                    <span class=\"c-message__counter u-hidden-down@desktop\">1</span>
                                    <p class=\"c-message__snippet\">{{ message.message }}</p>
                                </a>
                                {% endfor %}
                            </div>
                        </div>
                    </div>

                    <!-- ################################################################### -->

                    <div class=\"col-sm-8 u-p-zero\">
                        <div class=\"c-chat\">
                            <div class=\"c-chat__body\">
                              
                                {% for message in messages %}
                                <div id=\"{{ message.expediteur.id }}\" class=\"tabcontent\">
                                <!-- Message -->
                                    <div class=\"c-chat__message o-media\">
                                        <div class=\"o-media__img u-mr-small\">
                                            <div class=\"c-avatar c-avatar--small\">
                                                <div class=\"c-avatar__img\">
                                                    <img src=\"img/avatar-72.jpg\" alt=\"Adam's Face\">
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"o-media__body\">
                                            <h4 class=\"c-chat__message-author\">{{ message.expediteur }}</h4>
                                            <span class=\"c-chat__message-time\">{{ message.date|date('Y-m-d') }}</span>
                                            <p class=\"c-chat__message-content\">{{ message.message }}</p>
                                        </div>
                                    </div>
                                    <!-- send messages -->
                                    <form class=\"c-chat__composer\" method=\"post\">
                                        <div class=\"c-field has-addon-left\">
                                            <button class=\"c-field__addon\"><i class=\"fa fa-plus\"></i></button> 
                                            <input class=\"c-input\" name=\"message\" type=\"text\" placeholder=\"Clark\">
                                            <input class=\"hide\" value=\"{{ message.expediteur }}\" name=\"destinataire\">
                                        </div>
                                    </form>
                                <!-- Fin Message -->
                                </div>
                            {% endfor %}



                            <!-- New Message -->
                            <div id=\"new-message\" class=\"tabcontent\">
                                    <form method=\"post\">
                                   
                                        <div class=\"c-field u-mb-small\">
                                            <label class=\"c-field__label\" for=\"input1\">Destinataire:</label> 
                                            <input class=\"c-input\" name=\"destinataire\"><br />
                                        </div>
                                        <div class=\"c-field has-addon-left\">
                                            <button class=\"c-field__addon\"><i class=\"fa fa-plus\"></i></button> 
                                            <input class=\"c-input\" name=\"message\" type=\"text\" placeholder=\"Clark\">
                                        </div>
                                    </form>
                                </div>
                                <!-- Fin New Message -->


</div>
                        </div>
                    </div>


                </div><!-- // .row -->
            </div><!-- // .container --> 


{% endblock %}
", "messenger/index.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\messenger\\index.html.twig");
    }
}
