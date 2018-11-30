<?php

/* native.html.twig */
class __TwigTemplate_6832f376085cf6426a16d466c27d96b2ad1c407a3ee7d781d543d6bb9ce5c882 extends Twig_Template
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
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "native.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "native.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>Otaku-Stream </title>
        <meta name=\"description\" content=\"Otaku-Stream\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Google Font -->

        <!-- Favicon -->
        <link rel=\"shortcut icon\" href=\"http://localhost/otaku-stream/public/img/background/header-home.png\" type=\"image/x-icon\">

        <!-- Stylesheet -->
        

        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "        
        <style>
                .back-box {
                    background-color: white;
                    width: 100%;
                }
        </style>
    </head>
    <body class=\"o-page\" style=\"background-color: #<hite\">

        ";
        // line 36
        echo "        <div class=\"o-page__sidebar js-page-sidebar\">
            <div class=\"c-sidebar\">
                <a class=\"c-sidebar__brand\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                    <img class=\"c-sidebar__brand-img\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"> Otaku-Stream
                </a>
                <h4 class=\"c-sidebar__title\">Dashboards</h4>
                <ul class=\"c-sidebar__list\">
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                            <i class=\"fa fa-home u-mr-xsmall\"></i>Acceuil
                        </a>
                    </li>
                    <li class=\"c-sidebar__item has-submenu\">
                        <a class=\"c-sidebar__link\" data-toggle=\"collapse\" href=\"#tube\" aria-expanded=\"false\" aria-controls=\"tube\">
                            <i class=\"fa fa-tachometer u-mr-xsmall\"></i>Airi Tube<span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span>
                        </a>
                        <ul class=\"c-sidebar__submenu collapse\" id=\"tube\">
                            <li><a class=\"c-sidebar__link\" href=\"#\">Video</a></li>
                            <li><a class=\"c-sidebar__link\" href=\"#\">Favoris</a></li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" target=\"_blank\" href=\"events.html\">
                                    <i class=\"fa fa-clock-o u-mr-xsmall\"></i>Historique
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"c-sidebar__item has-submenu\">
                        <a class=\"c-sidebar__link\" data-toggle=\"collapse\" href=\"#stream\" aria-expanded=\"false\" aria-controls=\"stream\">
                            <i class=\"fa fa-list-alt u-mr-xsmall\"></i>Streaming
                        </a>
                        <ul class=\"c-sidebar__submenu collapse\" id=\"stream\">
                            <li><a class=\"c-sidebar__link\" href=\"#\">Anime</a></li>
                            <li><a class=\"c-sidebar__link\" href=\"#\">Serie</a></li>
                            <li><a class=\"c-sidebar__link\" href=\"#\">Scan</a></li>
                            <li><a class=\"c-sidebar__link\" href=\"#\">Favoris</a></li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" target=\"_blank\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique-streaming");
        echo "\">
                                    <i class=\"fa fa-clock-o u-mr-xsmall\"></i>Historique
                                </a>
                            </li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" href=\"calendar.html\">
                                    <i class=\"fa fa-calendar u-mr-xsmall\"></i>Calendar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"c-sidebar__item has-submenu\">
                        <a class=\"c-sidebar__link\" data-toggle=\"collapse\" href=\"#social\" aria-expanded=\"false\" aria-controls=\"social\">
                            <i class=\"fa fa-street-view u-mr-xsmall\"></i>Airi Social
                        </a>
                        <ul class=\"c-sidebar__submenu collapse\" id=\"social\">
                            <li><a class=\"c-sidebar__link\" href=\"#\">Feed</a></li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" href=\"#\">
                                    <i class=\"fa fa-user-plus u-mr-xsmall\"></i>Amis
                                </a>
                            </li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" href=\"#\">
                                    <i class=\"fa fa-users u-mr-xsmall\"></i>Groupes
                                </a>
                            </li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" href=\"#\">
                                    <i class=\"fa fa-comments-o u-mr-xsmall\"></i>Messanger
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"news-feed.html\">
                            <i class=\"fa fa-newspaper-o u-mr-xsmall\"></i>News
                        </a>
                    </li> 

                    <li class=\"c-sidebar__item has-submenu\">
                        <a class=\"c-sidebar__link\" data-toggle=\"collapse\" href=\"#profil\" aria-expanded=\"false\" aria-controls=\"profil\">
                            <i class=\"fa fa-list-alt u-mr-xsmall\"></i>Profil
                        </a>
                        <ul class=\"c-sidebar__submenu collapse\" id=\"profil\">
                        ";
        // line 117
        if (((isset($context["level"]) || array_key_exists("level", $context)) &&  !(null === (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 117, $this->source); })())))) {
            // line 118
            echo "                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" target=\"_blank\" href=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
                                    <i class=\"fa fa-user-circle u-mr-xsmall\"></i>Account Details
                                </a>
                            </li>
                            
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" href=\"account-settings.html\">
                                    <i class=\"fa fa-cog u-mr-xsmall\"></i>Parametres
                                </a>
                            </li>

                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" target=\"_blank\" href=\"reset-password.html\">
                                    <i class=\"fa fa-refresh u-mr-xsmall\"></i>Reset Password
                                </a>
                            </li>
                        ";
        }
        // line 136
        echo "                        ";
        if (( !(isset($context["level"]) || array_key_exists("level", $context)) || (null === (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 136, $this->source); })())))) {
            // line 137
            echo "                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" href=\"";
            // line 138
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
                                    <i class=\"fa fa-sign-in u-mr-xsmall\"></i>Login / Register
                                </a>
                            </li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" target=\"_blank\" href=\"forgot-password.html\">
                                    <i class=\"fa fa-lock u-mr-xsmall\"></i>Forgot Password
                                </a>
                            </li>
                        ";
        }
        // line 148
        echo "                        </ul>
                    </li>
                    <br />
                    ";
        // line 151
        if (((isset($context["level"]) || array_key_exists("level", $context)) &&  !(null === (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 151, $this->source); })())))) {
            // line 152
            echo "                        ";
            $this->loadTemplate("level/print-level.html.twig", "native.html.twig", 152)->display($context);
            // line 153
            echo "                    ";
        }
        // line 154
        echo "                <h4 class=\"c-sidebar__title\">Info App</h4>
                <li class=\"c-sidebar__item has-submenu\">
                        <a class=\"c-sidebar__link\" data-toggle=\"collapse\" href=\"#details\" aria-expanded=\"false\" aria-controls=\"details\">
                            <i class=\"fa fa-tachometer u-mr-xsmall\"></i>Details
                        </a>
                        <ul class=\"c-sidebar__submenu collapse\" id=\"details\">
                            <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"ui-overview.html\">
                            <i class=\"fa fa-mouse-pointer u-mr-xsmall\"></i>UI Overview <span class=\"c-badge c-badge--info c-badge--xsmall u-ml-xsmall\">Updated</span>
                        </a>
                    </li>
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"under-maintenance.html\">
                            <i class=\"fa fa-cogs u-mr-xsmall\"></i>Under Maintenance 
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"404.html\">
                            <i class=\"fa fa-chain-broken u-mr-xsmall\"></i>404 Page
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"https://zawiastudio.com/dashboard/docs\">
                            <i class=\"fa fa-file-text-o u-mr-xsmall\"></i>Documentation
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"https://zawiastudio.com/dashboard/changelog\">
                            <i class=\"fa fa-tag u-mr-xsmall\"></i>Changelog
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"chat-dialogue.html\">
                            <i class=\"fa fa-comment-o u-mr-xsmall\"></i>Chat Dialogue <span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span>
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"events.html\">
                            <i class=\"fa fa-clock-o u-mr-xsmall\"></i>Events
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"ios-apps-list.html\">
                            <i class=\"fa fa-apple u-mr-xsmall\"></i>iOS Apps List
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"plans.html\">
                            <i class=\"fa fa-bullhorn u-mr-xsmall\"></i>Pricing
                        </a>
                    </li>
                        </ul>
                    </li>
                    

            </div><!-- // .c-sidebar -->
        </div><!-- // .o-page__sidebar -->
        
        <div class=\"o-page__content\" style=\"background-color: #524D4C\">

            ";
        // line 222
        echo "             <header class=\"c-navbar\" style=\"background-color: #2e333a;border-bottom: 1px solid #b1e1e7;\">

                <button class=\"c-sidebar-toggle js-sidebar-toggle\">
                    <span class=\"c-sidebar-toggle__bar\"></span>
                    <span class=\"c-sidebar-toggle__bar\"></span>
                    <span class=\"c-sidebar-toggle__bar\"></span>
                </button>


                <h2 class=\"c-navbar__title u-mr-auto\" style=\"\"></h2>

<!-- Barre de recherche -->
    <div class=\"c-dropdown dropdown u-mr-medium u-hidden-down@mobile\" style=\"width: 300px\">
        <select class=\"c-select has-search\" id=\"select2\" onchange=\"jumpMenu('parent',this)\">
                            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listanime"]) || array_key_exists("listanime", $context) ? $context["listanime"] : (function () { throw new Twig_Error_Runtime('Variable "listanime" does not exist.', 236, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 237
            echo "                                <option value=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "Anime/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
            echo "/1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", array()), "html", null, true);
            echo "</a></option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "        </select>
        <script language=\"JavaScript\" type=\"text/javascript\">
                function jumpMenu(targ,selObj,restore){ 
                    eval(targ+\".location='\"+selObj.options[selObj.selectedIndex].value+\"'\");
                }
        </script>
    </div>

                <div class=\"c-dropdown dropdown u-mr-medium\">
                    <a class=\"c-notification dropdown-toggle\" href=\"#\" id=\"dropdownMenuAlerts\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"c-notification__icon\">
                            <i class=\"fa fa-bell-o\"></i>
                        </span>
                        <span class=\"c-notification__number\">3</span>
                    </a>

                    <div class=\"c-dropdown__menu c-dropdown__menu--large dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuAlerts\">
                        <a href=\"#\" class=\"c-dropdown__item dropdown-item o-media\">
                            <span class=\"o-media__img u-mr-xsmall\">
                                <span class=\"c-avatar c-avatar--xsmall\">
                                    <span class=\"c-avatar__img u-bg-success u-flex u-justify-center u-align-items-center\">
                                        <i class=\"fa fa-check u-text-large u-color-white\"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class=\"o-media__body\">
                                <h6 class=\"u-mb-zero\">Completed a task</h6>
                                <p class=\"u-text-mute\">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>

                        <a href=\"#\" class=\"c-dropdown__item dropdown-item o-media\">
                            <span class=\"o-media__img u-mr-xsmall\">
                                <span class=\"c-avatar c-avatar--xsmall\">
                                    <span class=\"c-avatar__img u-bg-fancy u-flex u-justify-center u-align-items-center\">
                                        <i class=\"fa fa-calendar u-text-large u-color-white\"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class=\"o-media__body\">
                                <h6 class=\"u-mb-zero\">Company meetup</h6>
                                <p class=\"u-text-mute\">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                        <a href=\"#\" class=\"c-dropdown__item dropdown-item o-media\">
                            <span class=\"o-media__img u-mr-xsmall\">
                                <span class=\"c-avatar c-avatar--xsmall\">
                                    <span class=\"c-avatar__img u-bg-primary u-flex u-justify-center u-align-items-center\">
                                        <i class=\"fa fa-info u-text-large u-color-white\"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class=\"o-media__body\">
                                <h6 class=\"u-mb-zero\">Someone mentioned you</h6>
                                <p class=\"u-text-mute\">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"c-dropdown dropdown\">
                    <a  class=\"c-avatar c-avatar--xsmall has-dropdown dropdown-toggle\" href=\"#\" id=\"dropdwonMenuAvatar\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"c-avatar__img\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatar-72.jpg"), "html", null, true);
        echo "\" alt=\"User's Profile Picture\">
                    </a>

                    <div class=\"c-dropdown__menu dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdwonMenuAvatar\">
                        ";
        // line 308
        if (((isset($context["level"]) || array_key_exists("level", $context)) &&  !(null === (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 308, $this->source); })())))) {
            // line 309
            echo "                        <a class=\"c-dropdown__item dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Edit Profile</a>
                            <a class=\"c-dropdown__item dropdown-item\" href=\"#\">View Activity</a>
                            <a class=\"c-dropdown__item dropdown-item\" href=\"";
            // line 311
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Logout</a>
                        ";
        }
        // line 313
        echo "                        ";
        if (( !(isset($context["level"]) || array_key_exists("level", $context)) || (null === (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new Twig_Error_Runtime('Variable "level" does not exist.', 313, $this->source); })())))) {
            // line 314
            echo "                            <a class=\"c-dropdown__item dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connection</a>
                            <a class=\"c-dropdown__item dropdown-item\" href=\"";
            // line 315
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Insciption</a>
                            <a class=\"c-dropdown__item dropdown-item\" href=\"#\">Mdp oublié</a>
                        ";
        }
        // line 318
        echo "                    </div>
            </header>
            
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"back-box\">
                        ";
        // line 325
        echo "
                        ";
        // line 327
        echo "
                        <div id=\"load\" style=\"display:true;\">
                            <center>
                                <i class=\"fa fa-circle-o-notch fa-spin\" style=\"font-size: 2.3em\"></i>
                                Chargement en cours
                            </center>
                        </div>
                        
                        ";
        // line 336
        echo "                        
                        ";
        // line 337
        $this->displayBlock('body_home', $context, $blocks);
        // line 339
        echo "
                    </div>
                </div>
            </div>
        </div>
    </body>
        ";
        // line 345
        $this->displayBlock('js', $context, $blocks);
        // line 348
        echo "
        <!-- show/hide load bar -->
        <script>
            var load = document.getElementById('load');
            window.onload = function(){
                load.style.display= \"none\";
            }
        </script>
         ";
        // line 356
        $this->loadTemplate("tchat.html.twig", "native.html.twig", 356)->display(array_merge($context, array("message" => (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 356, $this->source); })()))));
        // line 357
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "                            <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600\" rel=\"stylesheet\">
                            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.min.css"), "html", null, true);
        echo "\">
                            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
                            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
                            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>               
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 337
    public function block_body_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_home"));

        // line 338
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 345
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 346
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "native.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 346,  525 => 345,  515 => 338,  506 => 337,  491 => 20,  488 => 19,  479 => 18,  468 => 357,  466 => 356,  456 => 348,  454 => 345,  446 => 339,  444 => 337,  441 => 336,  431 => 327,  428 => 325,  420 => 318,  414 => 315,  409 => 314,  406 => 313,  401 => 311,  395 => 309,  393 => 308,  386 => 304,  319 => 239,  306 => 237,  302 => 236,  286 => 222,  217 => 154,  214 => 153,  211 => 152,  209 => 151,  204 => 148,  191 => 138,  188 => 137,  185 => 136,  165 => 119,  162 => 118,  160 => 117,  112 => 72,  81 => 44,  73 => 39,  69 => 38,  65 => 36,  53 => 25,  51 => 18,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>Otaku-Stream </title>
        <meta name=\"description\" content=\"Otaku-Stream\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Google Font -->

        <!-- Favicon -->
        <link rel=\"shortcut icon\" href=\"http://localhost/otaku-stream/public/img/background/header-home.png\" type=\"image/x-icon\">

        <!-- Stylesheet -->
        

        {% block stylesheets %}
                            <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600\" rel=\"stylesheet\">
                            <link rel=\"stylesheet\" href=\"{{ asset('css/main.min.css') }}\">
                            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
                            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
                            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>               
        {% endblock %}
        
        <style>
                .back-box {
                    background-color: white;
                    width: 100%;
                }
        </style>
    </head>
    <body class=\"o-page\" style=\"background-color: #<hite\">

        {# left menu #}
        <div class=\"o-page__sidebar js-page-sidebar\">
            <div class=\"c-sidebar\">
                <a class=\"c-sidebar__brand\" href=\"{{ path('index') }}\">
                    <img class=\"c-sidebar__brand-img\" src=\"{{ asset('assets/img/logo.png') }}\" alt=\"Logo\"> Otaku-Stream
                </a>
                <h4 class=\"c-sidebar__title\">Dashboards</h4>
                <ul class=\"c-sidebar__list\">
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"{{ path('index') }}\">
                            <i class=\"fa fa-home u-mr-xsmall\"></i>Acceuil
                        </a>
                    </li>
                    <li class=\"c-sidebar__item has-submenu\">
                        <a class=\"c-sidebar__link\" data-toggle=\"collapse\" href=\"#tube\" aria-expanded=\"false\" aria-controls=\"tube\">
                            <i class=\"fa fa-tachometer u-mr-xsmall\"></i>Airi Tube<span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span>
                        </a>
                        <ul class=\"c-sidebar__submenu collapse\" id=\"tube\">
                            <li><a class=\"c-sidebar__link\" href=\"#\">Video</a></li>
                            <li><a class=\"c-sidebar__link\" href=\"#\">Favoris</a></li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" target=\"_blank\" href=\"events.html\">
                                    <i class=\"fa fa-clock-o u-mr-xsmall\"></i>Historique
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"c-sidebar__item has-submenu\">
                        <a class=\"c-sidebar__link\" data-toggle=\"collapse\" href=\"#stream\" aria-expanded=\"false\" aria-controls=\"stream\">
                            <i class=\"fa fa-list-alt u-mr-xsmall\"></i>Streaming
                        </a>
                        <ul class=\"c-sidebar__submenu collapse\" id=\"stream\">
                            <li><a class=\"c-sidebar__link\" href=\"#\">Anime</a></li>
                            <li><a class=\"c-sidebar__link\" href=\"#\">Serie</a></li>
                            <li><a class=\"c-sidebar__link\" href=\"#\">Scan</a></li>
                            <li><a class=\"c-sidebar__link\" href=\"#\">Favoris</a></li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" target=\"_blank\" href=\"{{ path('historique-streaming') }}\">
                                    <i class=\"fa fa-clock-o u-mr-xsmall\"></i>Historique
                                </a>
                            </li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" href=\"calendar.html\">
                                    <i class=\"fa fa-calendar u-mr-xsmall\"></i>Calendar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"c-sidebar__item has-submenu\">
                        <a class=\"c-sidebar__link\" data-toggle=\"collapse\" href=\"#social\" aria-expanded=\"false\" aria-controls=\"social\">
                            <i class=\"fa fa-street-view u-mr-xsmall\"></i>Airi Social
                        </a>
                        <ul class=\"c-sidebar__submenu collapse\" id=\"social\">
                            <li><a class=\"c-sidebar__link\" href=\"#\">Feed</a></li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" href=\"#\">
                                    <i class=\"fa fa-user-plus u-mr-xsmall\"></i>Amis
                                </a>
                            </li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" href=\"#\">
                                    <i class=\"fa fa-users u-mr-xsmall\"></i>Groupes
                                </a>
                            </li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" href=\"#\">
                                    <i class=\"fa fa-comments-o u-mr-xsmall\"></i>Messanger
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"news-feed.html\">
                            <i class=\"fa fa-newspaper-o u-mr-xsmall\"></i>News
                        </a>
                    </li> 

                    <li class=\"c-sidebar__item has-submenu\">
                        <a class=\"c-sidebar__link\" data-toggle=\"collapse\" href=\"#profil\" aria-expanded=\"false\" aria-controls=\"profil\">
                            <i class=\"fa fa-list-alt u-mr-xsmall\"></i>Profil
                        </a>
                        <ul class=\"c-sidebar__submenu collapse\" id=\"profil\">
                        {% if level is defined and level is not null %}
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" target=\"_blank\" href=\"{{ path('login') }}\">
                                    <i class=\"fa fa-user-circle u-mr-xsmall\"></i>Account Details
                                </a>
                            </li>
                            
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" href=\"account-settings.html\">
                                    <i class=\"fa fa-cog u-mr-xsmall\"></i>Parametres
                                </a>
                            </li>

                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" target=\"_blank\" href=\"reset-password.html\">
                                    <i class=\"fa fa-refresh u-mr-xsmall\"></i>Reset Password
                                </a>
                            </li>
                        {% endif %}
                        {% if level is not defined or level is null %}
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" href=\"{{ path('login') }}\">
                                    <i class=\"fa fa-sign-in u-mr-xsmall\"></i>Login / Register
                                </a>
                            </li>
                            <li class=\"c-sidebar__item\">
                                <a class=\"c-sidebar__link\" target=\"_blank\" href=\"forgot-password.html\">
                                    <i class=\"fa fa-lock u-mr-xsmall\"></i>Forgot Password
                                </a>
                            </li>
                        {% endif %}
                        </ul>
                    </li>
                    <br />
                    {% if level is defined and level is not null %}
                        {% include 'level/print-level.html.twig' %}
                    {% endif %}
                <h4 class=\"c-sidebar__title\">Info App</h4>
                <li class=\"c-sidebar__item has-submenu\">
                        <a class=\"c-sidebar__link\" data-toggle=\"collapse\" href=\"#details\" aria-expanded=\"false\" aria-controls=\"details\">
                            <i class=\"fa fa-tachometer u-mr-xsmall\"></i>Details
                        </a>
                        <ul class=\"c-sidebar__submenu collapse\" id=\"details\">
                            <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"ui-overview.html\">
                            <i class=\"fa fa-mouse-pointer u-mr-xsmall\"></i>UI Overview <span class=\"c-badge c-badge--info c-badge--xsmall u-ml-xsmall\">Updated</span>
                        </a>
                    </li>
                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"under-maintenance.html\">
                            <i class=\"fa fa-cogs u-mr-xsmall\"></i>Under Maintenance 
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"404.html\">
                            <i class=\"fa fa-chain-broken u-mr-xsmall\"></i>404 Page
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"https://zawiastudio.com/dashboard/docs\">
                            <i class=\"fa fa-file-text-o u-mr-xsmall\"></i>Documentation
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"https://zawiastudio.com/dashboard/changelog\">
                            <i class=\"fa fa-tag u-mr-xsmall\"></i>Changelog
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"chat-dialogue.html\">
                            <i class=\"fa fa-comment-o u-mr-xsmall\"></i>Chat Dialogue <span class=\"c-badge c-badge--success c-badge--xsmall u-ml-xsmall\">New</span>
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"events.html\">
                            <i class=\"fa fa-clock-o u-mr-xsmall\"></i>Events
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" target=\"_blank\" href=\"ios-apps-list.html\">
                            <i class=\"fa fa-apple u-mr-xsmall\"></i>iOS Apps List
                        </a>
                    </li>

                    <li class=\"c-sidebar__item\">
                        <a class=\"c-sidebar__link\" href=\"plans.html\">
                            <i class=\"fa fa-bullhorn u-mr-xsmall\"></i>Pricing
                        </a>
                    </li>
                        </ul>
                    </li>
                    

            </div><!-- // .c-sidebar -->
        </div><!-- // .o-page__sidebar -->
        
        <div class=\"o-page__content\" style=\"background-color: #524D4C\">

            {# top menu #}
             <header class=\"c-navbar\" style=\"background-color: #2e333a;border-bottom: 1px solid #b1e1e7;\">

                <button class=\"c-sidebar-toggle js-sidebar-toggle\">
                    <span class=\"c-sidebar-toggle__bar\"></span>
                    <span class=\"c-sidebar-toggle__bar\"></span>
                    <span class=\"c-sidebar-toggle__bar\"></span>
                </button>


                <h2 class=\"c-navbar__title u-mr-auto\" style=\"\"></h2>

<!-- Barre de recherche -->
    <div class=\"c-dropdown dropdown u-mr-medium u-hidden-down@mobile\" style=\"width: 300px\">
        <select class=\"c-select has-search\" id=\"select2\" onchange=\"jumpMenu('parent',this)\">
                            {% for article in listanime %}
                                <option value=\"{{ path('index') }}Anime/{{ article.id }}/1\">{{ article.nom }}</a></option>
                            {% endfor %}
        </select>
        <script language=\"JavaScript\" type=\"text/javascript\">
                function jumpMenu(targ,selObj,restore){ 
                    eval(targ+\".location='\"+selObj.options[selObj.selectedIndex].value+\"'\");
                }
        </script>
    </div>

                <div class=\"c-dropdown dropdown u-mr-medium\">
                    <a class=\"c-notification dropdown-toggle\" href=\"#\" id=\"dropdownMenuAlerts\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"c-notification__icon\">
                            <i class=\"fa fa-bell-o\"></i>
                        </span>
                        <span class=\"c-notification__number\">3</span>
                    </a>

                    <div class=\"c-dropdown__menu c-dropdown__menu--large dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuAlerts\">
                        <a href=\"#\" class=\"c-dropdown__item dropdown-item o-media\">
                            <span class=\"o-media__img u-mr-xsmall\">
                                <span class=\"c-avatar c-avatar--xsmall\">
                                    <span class=\"c-avatar__img u-bg-success u-flex u-justify-center u-align-items-center\">
                                        <i class=\"fa fa-check u-text-large u-color-white\"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class=\"o-media__body\">
                                <h6 class=\"u-mb-zero\">Completed a task</h6>
                                <p class=\"u-text-mute\">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>

                        <a href=\"#\" class=\"c-dropdown__item dropdown-item o-media\">
                            <span class=\"o-media__img u-mr-xsmall\">
                                <span class=\"c-avatar c-avatar--xsmall\">
                                    <span class=\"c-avatar__img u-bg-fancy u-flex u-justify-center u-align-items-center\">
                                        <i class=\"fa fa-calendar u-text-large u-color-white\"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class=\"o-media__body\">
                                <h6 class=\"u-mb-zero\">Company meetup</h6>
                                <p class=\"u-text-mute\">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                        <a href=\"#\" class=\"c-dropdown__item dropdown-item o-media\">
                            <span class=\"o-media__img u-mr-xsmall\">
                                <span class=\"c-avatar c-avatar--xsmall\">
                                    <span class=\"c-avatar__img u-bg-primary u-flex u-justify-center u-align-items-center\">
                                        <i class=\"fa fa-info u-text-large u-color-white\"></i>
                                    </span>
                                </span>
                                
                            </span>
                            <div class=\"o-media__body\">
                                <h6 class=\"u-mb-zero\">Someone mentioned you</h6>
                                <p class=\"u-text-mute\">You have recieved a mention on twitter, check it out!</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"c-dropdown dropdown\">
                    <a  class=\"c-avatar c-avatar--xsmall has-dropdown dropdown-toggle\" href=\"#\" id=\"dropdwonMenuAvatar\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"c-avatar__img\" src=\"{{ asset('assets/img/avatar-72.jpg') }}\" alt=\"User's Profile Picture\">
                    </a>

                    <div class=\"c-dropdown__menu dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdwonMenuAvatar\">
                        {% if level is defined and level is not null %}
                        <a class=\"c-dropdown__item dropdown-item\" href=\"{{ path('login') }}\">Edit Profile</a>
                            <a class=\"c-dropdown__item dropdown-item\" href=\"#\">View Activity</a>
                            <a class=\"c-dropdown__item dropdown-item\" href=\"{{ path('logout') }}\">Logout</a>
                        {% endif %}
                        {% if level is not defined or level is null %}
                            <a class=\"c-dropdown__item dropdown-item\" href=\"{{ path('login') }}\">Connection</a>
                            <a class=\"c-dropdown__item dropdown-item\" href=\"{{ path('register') }}\">Insciption</a>
                            <a class=\"c-dropdown__item dropdown-item\" href=\"#\">Mdp oublié</a>
                        {% endif %}
                    </div>
            </header>
            
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"back-box\">
                        {# <div class=\"col-12 col-xl-9 u-p-zero\" style=\"background-color: #524D4C\"> #}

                        {# Chargement en cour #}

                        <div id=\"load\" style=\"display:true;\">
                            <center>
                                <i class=\"fa fa-circle-o-notch fa-spin\" style=\"font-size: 2.3em\"></i>
                                Chargement en cours
                            </center>
                        </div>
                        
                        {# affichage des pages #}
                        
                        {% block body_home %}
                        {% endblock %}

                    </div>
                </div>
            </div>
        </div>
    </body>
        {% block js %}
            <script src=\"{{ asset('js/main.min.js') }}\"></script>
        {% endblock %}

        <!-- show/hide load bar -->
        <script>
            var load = document.getElementById('load');
            window.onload = function(){
                load.style.display= \"none\";
            }
        </script>
         {% include 'tchat.html.twig' with {\"message\": message } %}
</html>
", "native.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\native.html.twig");
    }
}
