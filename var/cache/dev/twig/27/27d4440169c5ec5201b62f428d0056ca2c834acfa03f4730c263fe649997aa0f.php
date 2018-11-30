<?php

/* tchat.html.twig */
class __TwigTemplate_43fb86299c1d57cfa090424d92fc840bb46b59e96dc86a31586241e384952115 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tchat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tchat.html.twig"));

        // line 1
        echo "<div class=\"c-chat-dialogue\">
            <div class=\"c-chat-dialogue__btn\">
                <i class=\"c-chat-dialogue__btn-open fa fa-comments\"></i>
                <i class=\"c-chat-dialogue__btn-close fa fa-close\"></i>
            </div>
<!-- HEADER -->
            <div class=\"c-chat-dialogue__body\">
                <div class=\"c-chat-dialogue__header\">
                    <div class=\"c-chat-dialogue__team\">
                        <div class=\"c-avatar c-avatar--xsmall\">
                            <img class=\"c-avatar__img\" src=\"img/avatar5-72.jpg\" alt=\"Profile Title\">
                        </div>

                        <div class=\"c-avatar c-avatar--xsmall\">
                            <img class=\"c-avatar__img\" src=\"img/avatar6-72.jpg\" alt=\"Profile Title\">
                        </div>

                        <div class=\"c-avatar c-avatar--xsmall\">
                            <img class=\"c-avatar__img\" src=\"img/avatar4-72.jpg\" alt=\"Profile Title\">
                        </div>
                    </div>

                    <div class=\"c-chat-dialogue__intro\">
                        <h4 class=\"u-h6 u-mb-zero\">Workspace Support</h4>
                        <p class=\"u-text-mute\">Need help? Tell us about your problems. We’d love to help you!</p>
                    </div>
                </div>

<!-- AFFICHAGE MESSAGE -->


                <div class=\"c-chat-dialogue__messages\">

                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 35
            echo "
                        ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, $context["messages"], "nom", array()) == "moi")) {
                // line 37
                echo "                            <div class=\"c-chat-dialogue__message c-chat-dialogue__message--self\">
                                <div class=\"c-chat-dialogue__message-content\">
                                    ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messages"], "message", array()), "html", null, true);
                echo "
                                </div>
                            </div>
                        ";
            } else {
                // line 43
                echo "                            <div class=\"c-chat-dialogue__message\">
                                <div class=\"c-chat-dialogue__message-content\">
                                    ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messages"], "message", array()), "html", null, true);
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 49
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    <div id=\"local\">
    </div> 
                </div>
<!-- Form -->
                <div class=\"c-chat-dialogue__footer\">
                    <div class=\"c-field has-icon-right\">
                        <span class=\"c-field__icon\">
                            <i class=\"fa fa-smile-o\"></i>
                        </span>
                        <label class=\"c-field__label u-hidden-visually\" for=\"input-chat\">Begin Chat</label>
\t\t                    <input class=\"c-input\" id=\"msg\" name=\"msg\" type=\"text\" placeholder=\"Begin Chat..\">
                            <button class=\"btn btn-primary\" id=\"send\" type=\"button\">Submit form</button>
                    </div>
                </div>
            </div>

        </div><!-- // .c-chat-dialogue -->


        \t<script type=\"text/javascript\">
        \$(document).ready(function(){
            var conn = new WebSocket('ws://localhost:8080');
            conn.onopen = function(e) {
                console.log(\"Connection established!\");        
            };

            conn.onmessage = function(e) {
                obj = JSON.parse(e.data);
               document.getElementById('local').innerHTML = document.getElementById('local').innerHTML+\"<br />\"+'<div class=\"c-chat-dialogue__message\"><div class=\"c-chat-dialogue__message-content\">'+obj.msg+'</div></div>';
              // document.write(e.data);

\t\t\t   console.log(e.data);\t\t   
            };

            \$(\"#send\").click(function(){
                 var msg = \$(\"#msg\").val();
\t\t        var user = \"moi\";
                var data = {
                    user: user,
                    msg: msg
                };
                \$.ajax({
                    data: {
                        user: user,
                        msg: msg
                    },
                    type: \"POST\",
                    url: \"http://localhost/otaku-Stream/public/dbtchat\",

                })
                document.getElementById('local').innerHTML = document.getElementById('local').innerHTML+'<br /><div class=\"c-chat-dialogue__message c-chat-dialogue__message--self\"><div class=\"c-chat-dialogue__message-content\">'+msg+'</div></div>';
                conn.send(JSON.stringify(data));
            })
        })
    </script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tchat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 51,  95 => 49,  88 => 45,  84 => 43,  77 => 39,  73 => 37,  71 => 36,  68 => 35,  64 => 34,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"c-chat-dialogue\">
            <div class=\"c-chat-dialogue__btn\">
                <i class=\"c-chat-dialogue__btn-open fa fa-comments\"></i>
                <i class=\"c-chat-dialogue__btn-close fa fa-close\"></i>
            </div>
<!-- HEADER -->
            <div class=\"c-chat-dialogue__body\">
                <div class=\"c-chat-dialogue__header\">
                    <div class=\"c-chat-dialogue__team\">
                        <div class=\"c-avatar c-avatar--xsmall\">
                            <img class=\"c-avatar__img\" src=\"img/avatar5-72.jpg\" alt=\"Profile Title\">
                        </div>

                        <div class=\"c-avatar c-avatar--xsmall\">
                            <img class=\"c-avatar__img\" src=\"img/avatar6-72.jpg\" alt=\"Profile Title\">
                        </div>

                        <div class=\"c-avatar c-avatar--xsmall\">
                            <img class=\"c-avatar__img\" src=\"img/avatar4-72.jpg\" alt=\"Profile Title\">
                        </div>
                    </div>

                    <div class=\"c-chat-dialogue__intro\">
                        <h4 class=\"u-h6 u-mb-zero\">Workspace Support</h4>
                        <p class=\"u-text-mute\">Need help? Tell us about your problems. We’d love to help you!</p>
                    </div>
                </div>

<!-- AFFICHAGE MESSAGE -->


                <div class=\"c-chat-dialogue__messages\">

                {% for messages in message %}

                        {% if messages.nom == \"moi\" %}
                            <div class=\"c-chat-dialogue__message c-chat-dialogue__message--self\">
                                <div class=\"c-chat-dialogue__message-content\">
                                    {{ messages.message }}
                                </div>
                            </div>
                        {% else %}
                            <div class=\"c-chat-dialogue__message\">
                                <div class=\"c-chat-dialogue__message-content\">
                                    {{ messages.message }}
                                </div>
                            </div>
                        {% endif %}

                {% endfor %}
    <div id=\"local\">
    </div> 
                </div>
<!-- Form -->
                <div class=\"c-chat-dialogue__footer\">
                    <div class=\"c-field has-icon-right\">
                        <span class=\"c-field__icon\">
                            <i class=\"fa fa-smile-o\"></i>
                        </span>
                        <label class=\"c-field__label u-hidden-visually\" for=\"input-chat\">Begin Chat</label>
\t\t                    <input class=\"c-input\" id=\"msg\" name=\"msg\" type=\"text\" placeholder=\"Begin Chat..\">
                            <button class=\"btn btn-primary\" id=\"send\" type=\"button\">Submit form</button>
                    </div>
                </div>
            </div>

        </div><!-- // .c-chat-dialogue -->


        \t<script type=\"text/javascript\">
        \$(document).ready(function(){
            var conn = new WebSocket('ws://localhost:8080');
            conn.onopen = function(e) {
                console.log(\"Connection established!\");        
            };

            conn.onmessage = function(e) {
                obj = JSON.parse(e.data);
               document.getElementById('local').innerHTML = document.getElementById('local').innerHTML+\"<br />\"+'<div class=\"c-chat-dialogue__message\"><div class=\"c-chat-dialogue__message-content\">'+obj.msg+'</div></div>';
              // document.write(e.data);

\t\t\t   console.log(e.data);\t\t   
            };

            \$(\"#send\").click(function(){
                 var msg = \$(\"#msg\").val();
\t\t        var user = \"moi\";
                var data = {
                    user: user,
                    msg: msg
                };
                \$.ajax({
                    data: {
                        user: user,
                        msg: msg
                    },
                    type: \"POST\",
                    url: \"http://localhost/otaku-Stream/public/dbtchat\",

                })
                document.getElementById('local').innerHTML = document.getElementById('local').innerHTML+'<br /><div class=\"c-chat-dialogue__message c-chat-dialogue__message--self\"><div class=\"c-chat-dialogue__message-content\">'+msg+'</div></div>';
                conn.send(JSON.stringify(data));
            })
        })
    </script>", "tchat.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\tchat.html.twig");
    }
}
