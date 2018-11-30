<?php

/* EuCookieLawBundle::cookie_law_bar.html.twig */
class __TwigTemplate_34d9a4143630ae1643fcd36e00492953d1f833b10e8515990577693a6c1fa82c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'eu_cookie_message' => array($this, 'block_eu_cookie_message'),
            'eu_cookie_message_js' => array($this, 'block_eu_cookie_message_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EuCookieLawBundle::cookie_law_bar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EuCookieLawBundle::cookie_law_bar.html.twig"));

        // line 1
        $this->displayBlock('eu_cookie_message', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('eu_cookie_message_js', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_eu_cookie_message($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "eu_cookie_message"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "eu_cookie_message"));

        // line 2
        echo "    <div id=\"cookie-law-info-bar\" style=\"width:100%; background: rgba(51, 221, 227, 0.75); position: fixed; bottom: 40px; left: 0;\">
        <p style=\"text-align:center; padding: 10px;\">
            ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.message", array(), "EuCookieLawBundle"), "html", null, true);
        echo "
            <a href=\"#\" id=\"cookie-law-close-button\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.message.accept", array(), "EuCookieLawBundle"), "html", null, true);
        echo "</a>
        </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_eu_cookie_message_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "eu_cookie_message_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "eu_cookie_message_js"));

        // line 11
        echo "    <script type=\"text/javascript\">
        var cookieBar = document.getElementById('cookie-law-info-bar'),
            button = document.getElementById('cookie-law-close-button');

        function hideCookieBar() {
            cookieBar.style.display = 'none';
        }

        function setCookieAccepted() {
            expiry = new Date();
            expiry.setTime(expiry.getTime()+(";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["cookieExpiryTime"]) || array_key_exists("cookieExpiryTime", $context) ? $context["cookieExpiryTime"] : (function () { throw new Twig_Error_Runtime('Variable "cookieExpiryTime" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " * 1000 * 60 * 60 * 24));
            document.cookie = \"cookie_law_accepted=1; expires=\" + expiry.toGMTString();
        }

        button.onclick = function() {
            hideCookieBar();
            setCookieAccepted();

            return false;
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EuCookieLawBundle::cookie_law_bar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  86 => 11,  77 => 10,  63 => 5,  59 => 4,  55 => 2,  46 => 1,  36 => 10,  33 => 9,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block eu_cookie_message %}
    <div id=\"cookie-law-info-bar\" style=\"width:100%; background: rgba(51, 221, 227, 0.75); position: fixed; bottom: 40px; left: 0;\">
        <p style=\"text-align:center; padding: 10px;\">
            {{ 'cookie.message'|trans({}, 'EuCookieLawBundle') }}
            <a href=\"#\" id=\"cookie-law-close-button\">{{ 'cookie.message.accept'|trans({}, 'EuCookieLawBundle') }}</a>
        </p>
    </div>
{% endblock %}

{% block eu_cookie_message_js %}
    <script type=\"text/javascript\">
        var cookieBar = document.getElementById('cookie-law-info-bar'),
            button = document.getElementById('cookie-law-close-button');

        function hideCookieBar() {
            cookieBar.style.display = 'none';
        }

        function setCookieAccepted() {
            expiry = new Date();
            expiry.setTime(expiry.getTime()+({{ cookieExpiryTime }} * 1000 * 60 * 60 * 24));
            document.cookie = \"cookie_law_accepted=1; expires=\" + expiry.toGMTString();
        }

        button.onclick = function() {
            hideCookieBar();
            setCookieAccepted();

            return false;
        }
    </script>
{% endblock %}
", "EuCookieLawBundle::cookie_law_bar.html.twig", "C:\\xampp\\htdocs\\airi\\vendor\\mustangx\\eu-cookie-law-bundle\\Eu\\CookieLawBundle\\Resources\\views\\cookie_law_bar.html.twig");
    }
}
