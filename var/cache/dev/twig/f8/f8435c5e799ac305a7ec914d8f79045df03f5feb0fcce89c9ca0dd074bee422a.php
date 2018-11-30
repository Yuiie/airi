<?php

/* layout_profile.html.twig */
class __TwigTemplate_162dd7dab56df189411297061d2e085fdbd7f9c70d3429f5ca9fdb5166cd7eb6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'home' => array($this, 'block_home'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout_profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout_profile.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en-us\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>Account Details | Dashboard UI Kit</title>
        <meta name=\"description\" content=\"Dashboard UI Kit\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700\" rel=\"stylesheet\">

        <!-- Favicon -->
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <!-- Stylesheet -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <header class=\"c-navbar u-mb-medium\">
            <a class=\"c-navbar__brand\" href=\"#!\">
                <img src=\"../img/logo.png\" alt=\"Dashboard's Logo\">
            </a>
           
           <!-- Navigation items that will be collapes and toggle in small viewports -->
            <nav class=\"c-nav collapse\" id=\"main-nav\">
                <ul class=\"c-nav__list\">
                    <li class=\"c-nav__item\">
                        <a class=\"c-nav__link\" href=\"#!\">Events</a>
                    </li>
                    <li class=\"c-nav__item\">
                        <a class=\"c-nav__link\" href=\"#!\">Browse</a>
                    </li>
                    <li class=\"c-nav__item\">
                        <a class=\"c-nav__link\" href=\"#!\">Your Ticket</a>
                    </li>
                    <li class=\"c-nav__item\">
                        <div class=\"c-field c-field--inline has-icon-right u-hidden-up@tablet\">
                            <span class=\"c-field__icon\">
                                <i class=\"fa fa-search\"></i> 
                            </span>
                            
                            <label class=\"u-hidden-visually\" for=\"navbar-search-small\">Seach</label>
                            <input class=\"c-input\" id=\"navbar-search-small\" type=\"text\" placeholder=\"Search\">
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- // Navigation items  -->

            
            <div class=\"c-field has-icon-right c-navbar__search u-hidden-down@tablet u-ml-auto u-mr-small\">
                <span class=\"c-field__icon\">
                    <i class=\"fa fa-search\"></i> 
                </span>
                
                <label class=\"u-hidden-visually\" for=\"navbar-search\">Seach</label>
                <input class=\"c-input\" id=\"navbar-search\" type=\"text\" placeholder=\"Search\">
            </div>

            
            <div class=\"c-dropdown dropdown\">
                <a  class=\"c-avatar c-avatar--xsmall has-dropdown dropdown-toggle\" href=\"#\" id=\"dropdwonMenuAvatar\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <img class=\"c-avatar__img\" src=\"../img/avatar-72.jpg\" alt=\"User's Profile Picture\">
                </a>

                <div class=\"c-dropdown__menu dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdwonMenuAvatar\">
                    <a class=\"c-dropdown__item dropdown-item\" href=\"#\">Edit Profile</a>
                    <a class=\"c-dropdown__item dropdown-item\" href=\"#\">View Activity</a>
                    <a class=\"c-dropdown__item dropdown-item\" href=\"#\">Manage Roles</a>
                </div>
            </div>

            <button class=\"c-nav-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-nav\">
                <span class=\"c-nav-toggle__bar\"></span>
                <span class=\"c-nav-toggle__bar\"></span>
                <span class=\"c-nav-toggle__bar\"></span>
            </button><!-- // .c-nav-toggle -->
        </header>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-3 u-hidden-down@wide\">
                    <aside class=\"c-menu u-ml-medium\">
                        <h4 class=\"c-menu__title\">Menu</h4>
                        <ul class=\"u-mb-medium\">
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link is-active\" href=\"#\">
                                    <i class=\"fa fa-trophy u-mr-xsmall\"></i>Featured Events
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <i class=\"c-menu__icon fa fa-heart-o\"></i>Recommended
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <i class=\"c-menu__icon fa fa-bullhorn\"></i>Live Streams
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <i class=\"c-menu__icon fa fa-newspaper-o\"></i>Press
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <i class=\"c-menu__icon fa fa-diamond\"></i>Favourites
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <i class=\"c-menu__icon fa fa-map-o\"></i>Places
                                </a>
                            </li>
                        </ul>

                        <h4 class=\"c-menu__title\">Admin</h4>
                        <ul>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_anime");
        echo "\">
                                    <img src=\"../img/sidebar-icon1.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 1\">Ajouter un Anime
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_episode");
        echo "\">
                                    <img src=\"../img/sidebar-icon2.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 2\">Ajouter un Episode
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_video");
        echo "\">
                                    <img src=\"../img/sidebar-icon3.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 3\">Ajouter une Video
                                </a>
                            </li>
                        </ul>

                        <h4 class=\"c-menu__title\">Groupes</h4>
                        <ul>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group");
        echo "\">
                                    <img src=\"../img/sidebar-icon1.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 1\">Mes groupes
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_apply");
        echo "\">
                                    <img src=\"../img/sidebar-icon2.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 2\">Rejoindre un groupe
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_create");
        echo "\">
                                    <img src=\"../img/sidebar-icon3.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 3\">Créer un groupes
                                </a>
                            </li>
                        </ul>

                        <h4 class=\"c-menu__title\">Parametres</h4>
                        <ul>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <img src=\"../img/sidebar-icon1.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 1\">Edit profil
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <img src=\"../img/sidebar-icon2.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 2\">Configurer le site
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <img src=\"../img/sidebar-icon3.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 3\">Déconnexion
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
                ";
        // line 178
        $this->displayBlock('home', $context, $blocks);
        // line 179
        echo "            </div>
        </div>
        
        <script src=\"../js/main.min.js\"></script>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 178
    public function block_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "home"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 178,  232 => 179,  230 => 178,  201 => 152,  193 => 147,  185 => 142,  173 => 133,  165 => 128,  157 => 123,  49 => 18,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en-us\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>Account Details | Dashboard UI Kit</title>
        <meta name=\"description\" content=\"Dashboard UI Kit\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700\" rel=\"stylesheet\">

        <!-- Favicon -->
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <!-- Stylesheet -->
        <link href=\"{{ asset('css/main.min.css') }}\" rel=\"stylesheet\">
    </head>
    <body>
        <header class=\"c-navbar u-mb-medium\">
            <a class=\"c-navbar__brand\" href=\"#!\">
                <img src=\"../img/logo.png\" alt=\"Dashboard's Logo\">
            </a>
           
           <!-- Navigation items that will be collapes and toggle in small viewports -->
            <nav class=\"c-nav collapse\" id=\"main-nav\">
                <ul class=\"c-nav__list\">
                    <li class=\"c-nav__item\">
                        <a class=\"c-nav__link\" href=\"#!\">Events</a>
                    </li>
                    <li class=\"c-nav__item\">
                        <a class=\"c-nav__link\" href=\"#!\">Browse</a>
                    </li>
                    <li class=\"c-nav__item\">
                        <a class=\"c-nav__link\" href=\"#!\">Your Ticket</a>
                    </li>
                    <li class=\"c-nav__item\">
                        <div class=\"c-field c-field--inline has-icon-right u-hidden-up@tablet\">
                            <span class=\"c-field__icon\">
                                <i class=\"fa fa-search\"></i> 
                            </span>
                            
                            <label class=\"u-hidden-visually\" for=\"navbar-search-small\">Seach</label>
                            <input class=\"c-input\" id=\"navbar-search-small\" type=\"text\" placeholder=\"Search\">
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- // Navigation items  -->

            
            <div class=\"c-field has-icon-right c-navbar__search u-hidden-down@tablet u-ml-auto u-mr-small\">
                <span class=\"c-field__icon\">
                    <i class=\"fa fa-search\"></i> 
                </span>
                
                <label class=\"u-hidden-visually\" for=\"navbar-search\">Seach</label>
                <input class=\"c-input\" id=\"navbar-search\" type=\"text\" placeholder=\"Search\">
            </div>

            
            <div class=\"c-dropdown dropdown\">
                <a  class=\"c-avatar c-avatar--xsmall has-dropdown dropdown-toggle\" href=\"#\" id=\"dropdwonMenuAvatar\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <img class=\"c-avatar__img\" src=\"../img/avatar-72.jpg\" alt=\"User's Profile Picture\">
                </a>

                <div class=\"c-dropdown__menu dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdwonMenuAvatar\">
                    <a class=\"c-dropdown__item dropdown-item\" href=\"#\">Edit Profile</a>
                    <a class=\"c-dropdown__item dropdown-item\" href=\"#\">View Activity</a>
                    <a class=\"c-dropdown__item dropdown-item\" href=\"#\">Manage Roles</a>
                </div>
            </div>

            <button class=\"c-nav-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-nav\">
                <span class=\"c-nav-toggle__bar\"></span>
                <span class=\"c-nav-toggle__bar\"></span>
                <span class=\"c-nav-toggle__bar\"></span>
            </button><!-- // .c-nav-toggle -->
        </header>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-3 u-hidden-down@wide\">
                    <aside class=\"c-menu u-ml-medium\">
                        <h4 class=\"c-menu__title\">Menu</h4>
                        <ul class=\"u-mb-medium\">
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link is-active\" href=\"#\">
                                    <i class=\"fa fa-trophy u-mr-xsmall\"></i>Featured Events
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <i class=\"c-menu__icon fa fa-heart-o\"></i>Recommended
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <i class=\"c-menu__icon fa fa-bullhorn\"></i>Live Streams
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <i class=\"c-menu__icon fa fa-newspaper-o\"></i>Press
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <i class=\"c-menu__icon fa fa-diamond\"></i>Favourites
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <i class=\"c-menu__icon fa fa-map-o\"></i>Places
                                </a>
                            </li>
                        </ul>

                        <h4 class=\"c-menu__title\">Admin</h4>
                        <ul>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"{{ path('add_anime') }}\">
                                    <img src=\"../img/sidebar-icon1.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 1\">Ajouter un Anime
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"{{ path('add_episode') }}\">
                                    <img src=\"../img/sidebar-icon2.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 2\">Ajouter un Episode
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"{{ path('add_video') }}\">
                                    <img src=\"../img/sidebar-icon3.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 3\">Ajouter une Video
                                </a>
                            </li>
                        </ul>

                        <h4 class=\"c-menu__title\">Groupes</h4>
                        <ul>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"{{ path('group') }}\">
                                    <img src=\"../img/sidebar-icon1.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 1\">Mes groupes
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"{{ path('group_apply') }}\">
                                    <img src=\"../img/sidebar-icon2.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 2\">Rejoindre un groupe
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"{{ path('group_create') }}\">
                                    <img src=\"../img/sidebar-icon3.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 3\">Créer un groupes
                                </a>
                            </li>
                        </ul>

                        <h4 class=\"c-menu__title\">Parametres</h4>
                        <ul>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <img src=\"../img/sidebar-icon1.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 1\">Edit profil
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <img src=\"../img/sidebar-icon2.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 2\">Configurer le site
                                </a>
                            </li>
                            <li class=\"c-menu__item\">
                                <a class=\"c-menu__link\" href=\"#\">
                                    <img src=\"../img/sidebar-icon3.png\" class=\"u-mr-xsmall\" style=\"width: 14px;\" alt=\"Icon 3\">Déconnexion
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
                {% block home %}{% endblock %}
            </div>
        </div>
        
        <script src=\"../js/main.min.js\"></script>
    </body>
</html>", "layout_profile.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\layout_profile.html.twig");
    }
}
