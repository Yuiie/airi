<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_e1fdd64f87ccf5a0a13c5ea6b55e28d7d61373d4e004e24963806f944cfff346 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_home' => array($this, 'block_body_home'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "<!doctype html>
<html lang=\"en-us\">
";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        $this->displayBlock('body_home', $context, $blocks);
        // line 78
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "      <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>MA CO</title>

        <meta name=\"description\" content=\"Dashboard UI Kit\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/login.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600\" rel=\"stylesheet\">
 <script src=\"js/main.min.js\"></script>
        <!-- Favicon -->
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        // line 20
        echo "
<div class=\"o-page__card\" >
            <div class=\"c-card u-mb-xsmall\">
                <header class=\"c-card__header u-pt-large\">
                <center>
                        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/log.jpg"), "html", null, true);
        echo "\" style=\"width: 200px\" alt=\"JePilote\">
                        </center>
                    <h1 class=\"u-h3 u-text-center u-mb-zero\">Welcome back! Please login.</h1>
                </header>                
                ";
        // line 29
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 30, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 30, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    <br/>
                ";
        }
        // line 33
        echo "                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\"/>
                    <div class=\"c-field u-mb-small\">
                        <label class=\"c-field__label\" for=\"input1\">Log in with your username</label> 
                        <input class=\"c-input\" type=\"text\" placeholder=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
                               id=\"username\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\" required=\"required\"> 
                    </div>

                    <div class=\"c-field u-mb-small\">
                        <label class=\"c-field__label\" for=\"input2\">Password</label> 
                        <input class=\"c-input\" type=\"password\" placeholder=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
                               id=\"password\" name=\"_password\" required=\"required\"> 
                    </div>

                    <button class=\"c-btn c-btn--info c-btn--fullwidth\" type=\"submit\" id=\"_submit\" name=\"_submit\"
                                   value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Sign in to Dashboard</button>

                    <span class=\"c-divider c-divider--small has-text u-mv-medium\">Login via social networks</span>

                    <div class=\"o-line\">
                        <a class=\"c-icon u-bg-twitter\" href=\"#!\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>

                        <a class=\"c-icon u-bg-facebook\" href=\"#!\">
                            <i class=\"fa fa-facebook\"></i>
                        </a>

                        <a class=\"c-icon u-bg-pinterest\" href=\"#!\">
                            <i class=\"fa fa-pinterest\"></i>
                        </a>

                        <a class=\"c-icon u-bg-dribbble\" href=\"#!\">
                            <i class=\"fa fa-dribbble\"></i>
                        </a>
                    </div>
                </form>
            </div>

            <div class=\"o-line\">
                <a class=\"u-text-mute u-text-small\" href=\"register.html\">Don’t have an account yet? Get Started</a>
                <a class=\"u-text-mute u-text-small\" href=\"forgot-password.html\">Forgot Password?</a>
            </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 48,  140 => 43,  132 => 38,  128 => 37,  122 => 34,  117 => 33,  110 => 30,  108 => 29,  101 => 25,  94 => 20,  85 => 19,  67 => 11,  59 => 5,  50 => 4,  39 => 78,  37 => 19,  35 => 4,  31 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<!doctype html>
<html lang=\"en-us\">
{% block stylesheets %}
      <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>MA CO</title>

        <meta name=\"description\" content=\"Dashboard UI Kit\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href=\"{{ asset('assets/css/login.min.css') }}\" rel=\"stylesheet\">
        <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600\" rel=\"stylesheet\">
 <script src=\"js/main.min.js\"></script>
        <!-- Favicon -->
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
{% endblock %}
{% block body_home %}

<div class=\"o-page__card\" >
            <div class=\"c-card u-mb-xsmall\">
                <header class=\"c-card__header u-pt-large\">
                <center>
                        <img src=\"{{ asset('uploads/log.jpg') }}\" style=\"width: 200px\" alt=\"JePilote\">
                        </center>
                    <h1 class=\"u-h3 u-text-center u-mb-zero\">Welcome back! Please login.</h1>
                </header>                
                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    <br/>
                {% endif %}
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"POST\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                    <div class=\"c-field u-mb-small\">
                        <label class=\"c-field__label\" for=\"input1\">Log in with your username</label> 
                        <input class=\"c-input\" type=\"text\" placeholder=\"{{ 'security.login.username'|trans }}\"
                               id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"> 
                    </div>

                    <div class=\"c-field u-mb-small\">
                        <label class=\"c-field__label\" for=\"input2\">Password</label> 
                        <input class=\"c-input\" type=\"password\" placeholder=\"{{ 'security.login.password'|trans }}\"
                               id=\"password\" name=\"_password\" required=\"required\"> 
                    </div>

                    <button class=\"c-btn c-btn--info c-btn--fullwidth\" type=\"submit\" id=\"_submit\" name=\"_submit\"
                                   value=\"{{ 'security.login.submit'|trans }}\">Sign in to Dashboard</button>

                    <span class=\"c-divider c-divider--small has-text u-mv-medium\">Login via social networks</span>

                    <div class=\"o-line\">
                        <a class=\"c-icon u-bg-twitter\" href=\"#!\">
                            <i class=\"fa fa-twitter\"></i>
                        </a>

                        <a class=\"c-icon u-bg-facebook\" href=\"#!\">
                            <i class=\"fa fa-facebook\"></i>
                        </a>

                        <a class=\"c-icon u-bg-pinterest\" href=\"#!\">
                            <i class=\"fa fa-pinterest\"></i>
                        </a>

                        <a class=\"c-icon u-bg-dribbble\" href=\"#!\">
                            <i class=\"fa fa-dribbble\"></i>
                        </a>
                    </div>
                </form>
            </div>

            <div class=\"o-line\">
                <a class=\"u-text-mute u-text-small\" href=\"register.html\">Don’t have an account yet? Get Started</a>
                <a class=\"u-text-mute u-text-small\" href=\"forgot-password.html\">Forgot Password?</a>
            </div>
        </div>
        {% endblock %}
</html>
", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\bundles\\FOSUserBundle\\Security\\login_content.html.twig");
    }
}
