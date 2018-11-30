<?php

/* tchat/tchat.html.twig */
class __TwigTemplate_f5b699f70038ac3b8c432fdc949903746cc819369a05be575f596d3e861737f3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tchat/tchat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tchat/tchat.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en-us\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>First Touch With App | Dashboard UI Kit</title>
        <meta name=\"description\" content=\"Dashboard UI Kit\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600\" rel=\"stylesheet\">

        <!-- Favicon -->
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <!-- Stylesheet -->
         <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body class=\"u-relative\">
        <!--[if lte IE 9]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        
        <header class=\"c-navbar\">
            <a class=\"c-navbar__brand\" href=\"#!\">
                <img src=\"img/logo.png\" alt=\"Dashboard's Logo\">
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
                
                <label class=\"u-hidden-visually\" for=\"navbar-search\">Search</label>
                <input class=\"c-input\" id=\"navbar-search\" type=\"text\" placeholder=\"Search\">
            </div>
            
            
            <div class=\"c-dropdown dropdown\">
                <a  class=\"c-avatar c-avatar--xsmall has-dropdown dropdown-toggle\" href=\"#\" id=\"dropdwonMenuAvatar\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <img class=\"c-avatar__img\" src=\"img/avatar-72.jpg\" alt=\"User's Profile Picture\">
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
                <div class=\"col-sm-12\">
                    <div class=\"u-mv-large u-text-center\">
                        <h2 class=\"u-mb-xsmall\">Hi Jessica! Welcome back to the Dashboard.</h2>
                        <p class=\"u-text-mute u-h6\">Check out your past searches and the content you’ve browsed in. <a href=\"#\">View last results</a></p>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-12 col-lg-4\">
                    <div class=\"c-card u-p-medium u-text-center u-mb-medium\" data-mh=\"landing-cards\">

                        <img class=\"u-mb-small\" src=\"img/icon-intro1.svg\" alt=\"iPhone icon\">

                        <h4 class=\"u-h6 u-text-bold u-mb-small\">
                            Check your performance. See the results of all your active campaings.
                        </h4>
                        <a class=\"c-btn c-btn--info\" href=\"#\">Start new Campaign</a>
                    </div>
                </div>

                <div class=\"col-sm-12 col-lg-4\">
                    <div class=\"c-card u-p-medium u-text-center u-mb-medium\" data-mh=\"landing-cards\">

                        <img class=\"u-mb-small\" src=\"img/icon-intro2.svg\" alt=\"iPhone icon\">

                        <h4 class=\"u-h6 u-text-bold u-mb-small\">
                            Start console and prepare new stuff for your customers or community!
                        </h4>
                        <a class=\"c-btn c-btn--info\" href=\"#\">View your reports</a>
                    </div>
                </div>

                <div class=\"col-sm-12 col-lg-4\">
                    <div class=\"c-card u-p-medium u-text-center u-mb-medium\" data-mh=\"landing-cards\">

                        <img class=\"u-mb-small\" src=\"img/icon-intro3.svg\" alt=\"iPhone icon\">

                        <h4 class=\"u-h6 u-text-bold u-mb-small\">
                            All Files ready? <br>Start promoting your apps today.
                        </h4>
                        <a class=\"c-btn c-btn--info\" href=\"#\">Start using Dashboar</a>
                    </div>
                </div>
            </div>

            <div class=\"row u-mt-small\">
                <div class=\"col-lg-6\">
                    <h3 class=\"u-mb-small\">Dashboard Overview</h3>
                    
                    <div class=\"c-card c-overview-card u-p-medium u-mb-medium\">
                        <div class=\"row\">
                            <div class=\"col-4 u-border-right\">
                                <div class=\"c-overview-card__section\">
                                    <h3 class=\"u-mb-zero\">801, 523</h3>
                                    <p class=\"u-text-mute u-mb-small\">Newsletters Sent</p>
                                    <canvas id=\"js-chart-newsletters\" width=\"300\" height=\"250\"></canvas>
                                </div>
                            </div>

                            <div class=\"col-4 u-border-right\">
                                <div class=\"c-overview-card__section\">
                                    <h3 class=\"u-mb-zero\">801, 523</h3>
                                    <p class=\"u-text-mute u-mb-small\">Newsletters Sent</p>
                                    <canvas id=\"js-chart-subscribers\" width=\"300\" height=\"250\"></canvas>
                                </div>
                                
                            </div>

                            <div class=\"col-4\">
                                <div class=\"c-overview-card__section\">
                                    <h3 class=\"u-mb-zero\">801, 523</h3>
                                    <p class=\"u-text-mute u-mb-small\">Newsletters Sent</p>
                                    <canvas id=\"js-chart-conversion\" width=\"300\" height=\"250\"></canvas>
                                </div>
                            </div>
                        </div>

                        <span class=\"c-divider u-mv-medium u-opacity-medium\"></span>

                        <div class=\"row\">
                            <div class=\"col-6 col-md-3 u-border-right\">
                                <div class=\"c-overview-card__section\">
                                    <p class=\"u-text-mute u-nospace\">Open Rate</p>
                                    <h3 class=\"u-nospace\">32.21%</h3>

                                    <div class=\"c-progress c-progress--info c-progress--small u-mb-zero\">
                                        <div class=\"c-progress__bar\" style=\"width:15%;\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-6 col-md-3 u-border-right\">
                                <div class=\"c-overview-card__section\">
                                    <p class=\"u-text-mute u-nospace\">Read Rate</p>
                                    <h3 class=\"u-nospace\">75.21%</h3>

                                    <div class=\"c-progress c-progress--info c-progress--small u-mb-zero\">
                                        <div class=\"c-progress__bar\" style=\"width:75.21%;\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-6 col-md-3\">
                                <div class=\"c-overview-card__section\">
                                    <p class=\"u-text-mute u-nospace\">Attachments</p>
                                    <h3 class=\"u-nospace\">63.45%</h3>

                                    <div class=\"c-progress c-progress--info c-progress--small u-mb-zero\">
                                        <div class=\"c-progress__bar\" style=\"width:63.45%;\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-6 col-md-3 u-border-left\">
                                <div class=\"c-overview-card__section\">
                                    <p class=\"u-text-mute u-nospace\">New Subs</p>
                                    <h3 class=\"u-nospace\">72.4%</h3>

                                    <div class=\"c-progress c-progress--success c-progress--small u-mb-zero\">
                                        <div class=\"c-progress__bar\" style=\"width:72.4%;\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <div class=\"u-flex u-justify-between\">
                        <h3 class=\"u-mb-small\">Recently Opened</h3>
                        
                        <div class=\"c-field u-width-25 u-mb-small\">
                            <label class=\"c-field__label u-hidden-visually\" for=\"select-recently\">Recently Opened</label>

                            <!-- Select2 jquery plugin is used -->
                            <select class=\"c-select\" name=\"recently-opened\" id=\"select-recently\">
                                <option value=\"value1\">All Types</option>
                                <option value=\"value2\">This day</option>
                                <option value=\"value3\">Last Week</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"c-card u-p-medium\">
                        <div class=\"c-fileitem\">
                            <div class=\"c-fileitem__content\">
                                <div class=\"c-fileitem__img\">
                                    <img src=\"img/recent1.jpg\" alt=\"File's image\">
                                </div>

                                <p class=\"c-fileitem__name\">
                                    <img src=\"img/icon-pdf.svg\" alt=\"PDF icon\">Santorini.pdf
                                </p>
                            </div>
                            
                            <div class=\"c-fileitem__date\">
                                25MB <span class=\"u-hidden-down@mobile\"> <i>|</i> Edited 1 minute ago</span>
                            </div>
                        </div><!-- // .c-fileitem -->

                        <div class=\"c-fileitem\">
                            <div class=\"c-fileitem__content\">
                                <div class=\"c-fileitem__img\">
                                    <img src=\"img/recent2.jpg\" alt=\"File's image\">
                                </div>

                                <p class=\"c-fileitem__name\">
                                    <img src=\"img/icon-pdf.svg\" alt=\"PDF icon\">Sea Presentation.pdf
                                </p>
                            </div>
                            
                            <div class=\"c-fileitem__date\">
                                12MB <span class=\"u-hidden-down@mobile\"> <i>|</i> Edited 3 minute ago</span>
                            </div>
                        </div><!-- // .c-fileitem -->

                        <div class=\"c-fileitem\">
                            <div class=\"c-fileitem__content\">
                                <div class=\"c-fileitem__img\">
                                    <img src=\"img/recent3.jpg\" alt=\"File's image\">
                                </div>

                                <p class=\"c-fileitem__name\">
                                    <img src=\"img/icon-doc.svg\" alt=\"PDF icon\">Lakes in Austria.doc
                                </p>
                            </div>
                            
                            <div class=\"c-fileitem__date\">
                                25MB <span class=\"u-hidden-down@mobile\"> <i>|</i> Edited 1 minute ago</span>
                            </div>
                        </div><!-- // .c-fileitem -->

                        <div class=\"c-fileitem\">
                            <div class=\"c-fileitem__content\">
                                <div class=\"c-fileitem__img\">
                                    <img src=\"img/recent4.jpg\" alt=\"File's image\">
                                </div>

                                <p class=\"c-fileitem__name\">
                                    <img src=\"img/icon-pdf.svg\" alt=\"PDF icon\">Mountain.pdf
                                </p>
                            </div>
                            
                            <div class=\"c-fileitem__date\">
                                54MB <span class=\"u-hidden-down@mobile\"> <i>|</i> Edited on 11/02/2017</span>
                            </div>
                        </div><!-- // .c-fileitem -->

                        <div class=\"c-fileitem\">
                            <div class=\"c-fileitem__content\">
                                <div class=\"c-fileitem__img\">
                                    <img src=\"img/recent5.jpg\" alt=\"File's image\">
                                </div>

                                <p class=\"c-fileitem__name\">
                                    <img src=\"img/icon-doc.svg\" alt=\"PDF icon\">Mountains in US.doc
                                </p>
                            </div>
                            
                            <div class=\"c-fileitem__date\">
                                8MB <span class=\"u-hidden-down@mobile\"> <i>|</i>Edited on 09/01/2017</span>
                            </div>
                        </div><!-- // .c-fileitem -->
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-chat-dialogue\">
            <div class=\"c-chat-dialogue__btn\">
                <i class=\"c-chat-dialogue__btn-open fa fa-comments\"></i>
                <i class=\"c-chat-dialogue__btn-close fa fa-close\"></i>
            </div>

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

                <div class=\"c-chat-dialogue__messages\">
                    <div class=\"c-chat-dialogue__message\">
                        <div class=\"c-chat-dialogue__message-content\">
                            Hi there! I just wanted to ask if there is any chance to get any discount on this UI Kit?
                        </div>
                    </div>

                    <div class=\"c-chat-dialogue__message c-chat-dialogue__message--self\">
                        <div class=\"c-chat-dialogue__message-content\">
                            Hello, yeah it is. Thanks for asking! Just use the coupon #getitcheaper and you’ll get 30% off! &#x1f600; 
                        </div>
                    </div>

                    <div class=\"c-chat-dialogue__message\">
                        <div class=\"c-chat-dialogue__message-content\">
                            That’s amazing! Thanks 
                        </div>
                    </div>
                </div>

                <div class=\"c-chat-dialogue__footer\">
                    <div class=\"c-field has-icon-right\">
                        <span class=\"c-field__icon\">
                            <i class=\"fa fa-smile-o\"></i>
                        </span>
                        <label class=\"c-field__label u-hidden-visually\" for=\"input-chat\">Begin Chat</label>
\t\t\t<input class=\"c-input\" id=\"input-chat\" name=\"ks\" type=\"text\" placeholder=\"Begin Chat..\">
\t\t    </div>
                </div>
            </div>
        </div><!-- // .c-chat-dialogue -->

        <!-- Main javascsript -->
        <script src=\"js/main.min.js\"></script>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tchat/tchat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  48 => 18,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en-us\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>First Touch With App | Dashboard UI Kit</title>
        <meta name=\"description\" content=\"Dashboard UI Kit\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600\" rel=\"stylesheet\">

        <!-- Favicon -->
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <!-- Stylesheet -->
         <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/main.min.css') }}\" rel=\"stylesheet\">
    </head>
    <body class=\"u-relative\">
        <!--[if lte IE 9]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        
        <header class=\"c-navbar\">
            <a class=\"c-navbar__brand\" href=\"#!\">
                <img src=\"img/logo.png\" alt=\"Dashboard's Logo\">
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
                
                <label class=\"u-hidden-visually\" for=\"navbar-search\">Search</label>
                <input class=\"c-input\" id=\"navbar-search\" type=\"text\" placeholder=\"Search\">
            </div>
            
            
            <div class=\"c-dropdown dropdown\">
                <a  class=\"c-avatar c-avatar--xsmall has-dropdown dropdown-toggle\" href=\"#\" id=\"dropdwonMenuAvatar\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <img class=\"c-avatar__img\" src=\"img/avatar-72.jpg\" alt=\"User's Profile Picture\">
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
                <div class=\"col-sm-12\">
                    <div class=\"u-mv-large u-text-center\">
                        <h2 class=\"u-mb-xsmall\">Hi Jessica! Welcome back to the Dashboard.</h2>
                        <p class=\"u-text-mute u-h6\">Check out your past searches and the content you’ve browsed in. <a href=\"#\">View last results</a></p>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-12 col-lg-4\">
                    <div class=\"c-card u-p-medium u-text-center u-mb-medium\" data-mh=\"landing-cards\">

                        <img class=\"u-mb-small\" src=\"img/icon-intro1.svg\" alt=\"iPhone icon\">

                        <h4 class=\"u-h6 u-text-bold u-mb-small\">
                            Check your performance. See the results of all your active campaings.
                        </h4>
                        <a class=\"c-btn c-btn--info\" href=\"#\">Start new Campaign</a>
                    </div>
                </div>

                <div class=\"col-sm-12 col-lg-4\">
                    <div class=\"c-card u-p-medium u-text-center u-mb-medium\" data-mh=\"landing-cards\">

                        <img class=\"u-mb-small\" src=\"img/icon-intro2.svg\" alt=\"iPhone icon\">

                        <h4 class=\"u-h6 u-text-bold u-mb-small\">
                            Start console and prepare new stuff for your customers or community!
                        </h4>
                        <a class=\"c-btn c-btn--info\" href=\"#\">View your reports</a>
                    </div>
                </div>

                <div class=\"col-sm-12 col-lg-4\">
                    <div class=\"c-card u-p-medium u-text-center u-mb-medium\" data-mh=\"landing-cards\">

                        <img class=\"u-mb-small\" src=\"img/icon-intro3.svg\" alt=\"iPhone icon\">

                        <h4 class=\"u-h6 u-text-bold u-mb-small\">
                            All Files ready? <br>Start promoting your apps today.
                        </h4>
                        <a class=\"c-btn c-btn--info\" href=\"#\">Start using Dashboar</a>
                    </div>
                </div>
            </div>

            <div class=\"row u-mt-small\">
                <div class=\"col-lg-6\">
                    <h3 class=\"u-mb-small\">Dashboard Overview</h3>
                    
                    <div class=\"c-card c-overview-card u-p-medium u-mb-medium\">
                        <div class=\"row\">
                            <div class=\"col-4 u-border-right\">
                                <div class=\"c-overview-card__section\">
                                    <h3 class=\"u-mb-zero\">801, 523</h3>
                                    <p class=\"u-text-mute u-mb-small\">Newsletters Sent</p>
                                    <canvas id=\"js-chart-newsletters\" width=\"300\" height=\"250\"></canvas>
                                </div>
                            </div>

                            <div class=\"col-4 u-border-right\">
                                <div class=\"c-overview-card__section\">
                                    <h3 class=\"u-mb-zero\">801, 523</h3>
                                    <p class=\"u-text-mute u-mb-small\">Newsletters Sent</p>
                                    <canvas id=\"js-chart-subscribers\" width=\"300\" height=\"250\"></canvas>
                                </div>
                                
                            </div>

                            <div class=\"col-4\">
                                <div class=\"c-overview-card__section\">
                                    <h3 class=\"u-mb-zero\">801, 523</h3>
                                    <p class=\"u-text-mute u-mb-small\">Newsletters Sent</p>
                                    <canvas id=\"js-chart-conversion\" width=\"300\" height=\"250\"></canvas>
                                </div>
                            </div>
                        </div>

                        <span class=\"c-divider u-mv-medium u-opacity-medium\"></span>

                        <div class=\"row\">
                            <div class=\"col-6 col-md-3 u-border-right\">
                                <div class=\"c-overview-card__section\">
                                    <p class=\"u-text-mute u-nospace\">Open Rate</p>
                                    <h3 class=\"u-nospace\">32.21%</h3>

                                    <div class=\"c-progress c-progress--info c-progress--small u-mb-zero\">
                                        <div class=\"c-progress__bar\" style=\"width:15%;\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-6 col-md-3 u-border-right\">
                                <div class=\"c-overview-card__section\">
                                    <p class=\"u-text-mute u-nospace\">Read Rate</p>
                                    <h3 class=\"u-nospace\">75.21%</h3>

                                    <div class=\"c-progress c-progress--info c-progress--small u-mb-zero\">
                                        <div class=\"c-progress__bar\" style=\"width:75.21%;\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-6 col-md-3\">
                                <div class=\"c-overview-card__section\">
                                    <p class=\"u-text-mute u-nospace\">Attachments</p>
                                    <h3 class=\"u-nospace\">63.45%</h3>

                                    <div class=\"c-progress c-progress--info c-progress--small u-mb-zero\">
                                        <div class=\"c-progress__bar\" style=\"width:63.45%;\"></div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-6 col-md-3 u-border-left\">
                                <div class=\"c-overview-card__section\">
                                    <p class=\"u-text-mute u-nospace\">New Subs</p>
                                    <h3 class=\"u-nospace\">72.4%</h3>

                                    <div class=\"c-progress c-progress--success c-progress--small u-mb-zero\">
                                        <div class=\"c-progress__bar\" style=\"width:72.4%;\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <div class=\"u-flex u-justify-between\">
                        <h3 class=\"u-mb-small\">Recently Opened</h3>
                        
                        <div class=\"c-field u-width-25 u-mb-small\">
                            <label class=\"c-field__label u-hidden-visually\" for=\"select-recently\">Recently Opened</label>

                            <!-- Select2 jquery plugin is used -->
                            <select class=\"c-select\" name=\"recently-opened\" id=\"select-recently\">
                                <option value=\"value1\">All Types</option>
                                <option value=\"value2\">This day</option>
                                <option value=\"value3\">Last Week</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"c-card u-p-medium\">
                        <div class=\"c-fileitem\">
                            <div class=\"c-fileitem__content\">
                                <div class=\"c-fileitem__img\">
                                    <img src=\"img/recent1.jpg\" alt=\"File's image\">
                                </div>

                                <p class=\"c-fileitem__name\">
                                    <img src=\"img/icon-pdf.svg\" alt=\"PDF icon\">Santorini.pdf
                                </p>
                            </div>
                            
                            <div class=\"c-fileitem__date\">
                                25MB <span class=\"u-hidden-down@mobile\"> <i>|</i> Edited 1 minute ago</span>
                            </div>
                        </div><!-- // .c-fileitem -->

                        <div class=\"c-fileitem\">
                            <div class=\"c-fileitem__content\">
                                <div class=\"c-fileitem__img\">
                                    <img src=\"img/recent2.jpg\" alt=\"File's image\">
                                </div>

                                <p class=\"c-fileitem__name\">
                                    <img src=\"img/icon-pdf.svg\" alt=\"PDF icon\">Sea Presentation.pdf
                                </p>
                            </div>
                            
                            <div class=\"c-fileitem__date\">
                                12MB <span class=\"u-hidden-down@mobile\"> <i>|</i> Edited 3 minute ago</span>
                            </div>
                        </div><!-- // .c-fileitem -->

                        <div class=\"c-fileitem\">
                            <div class=\"c-fileitem__content\">
                                <div class=\"c-fileitem__img\">
                                    <img src=\"img/recent3.jpg\" alt=\"File's image\">
                                </div>

                                <p class=\"c-fileitem__name\">
                                    <img src=\"img/icon-doc.svg\" alt=\"PDF icon\">Lakes in Austria.doc
                                </p>
                            </div>
                            
                            <div class=\"c-fileitem__date\">
                                25MB <span class=\"u-hidden-down@mobile\"> <i>|</i> Edited 1 minute ago</span>
                            </div>
                        </div><!-- // .c-fileitem -->

                        <div class=\"c-fileitem\">
                            <div class=\"c-fileitem__content\">
                                <div class=\"c-fileitem__img\">
                                    <img src=\"img/recent4.jpg\" alt=\"File's image\">
                                </div>

                                <p class=\"c-fileitem__name\">
                                    <img src=\"img/icon-pdf.svg\" alt=\"PDF icon\">Mountain.pdf
                                </p>
                            </div>
                            
                            <div class=\"c-fileitem__date\">
                                54MB <span class=\"u-hidden-down@mobile\"> <i>|</i> Edited on 11/02/2017</span>
                            </div>
                        </div><!-- // .c-fileitem -->

                        <div class=\"c-fileitem\">
                            <div class=\"c-fileitem__content\">
                                <div class=\"c-fileitem__img\">
                                    <img src=\"img/recent5.jpg\" alt=\"File's image\">
                                </div>

                                <p class=\"c-fileitem__name\">
                                    <img src=\"img/icon-doc.svg\" alt=\"PDF icon\">Mountains in US.doc
                                </p>
                            </div>
                            
                            <div class=\"c-fileitem__date\">
                                8MB <span class=\"u-hidden-down@mobile\"> <i>|</i>Edited on 09/01/2017</span>
                            </div>
                        </div><!-- // .c-fileitem -->
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-chat-dialogue\">
            <div class=\"c-chat-dialogue__btn\">
                <i class=\"c-chat-dialogue__btn-open fa fa-comments\"></i>
                <i class=\"c-chat-dialogue__btn-close fa fa-close\"></i>
            </div>

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

                <div class=\"c-chat-dialogue__messages\">
                    <div class=\"c-chat-dialogue__message\">
                        <div class=\"c-chat-dialogue__message-content\">
                            Hi there! I just wanted to ask if there is any chance to get any discount on this UI Kit?
                        </div>
                    </div>

                    <div class=\"c-chat-dialogue__message c-chat-dialogue__message--self\">
                        <div class=\"c-chat-dialogue__message-content\">
                            Hello, yeah it is. Thanks for asking! Just use the coupon #getitcheaper and you’ll get 30% off! &#x1f600; 
                        </div>
                    </div>

                    <div class=\"c-chat-dialogue__message\">
                        <div class=\"c-chat-dialogue__message-content\">
                            That’s amazing! Thanks 
                        </div>
                    </div>
                </div>

                <div class=\"c-chat-dialogue__footer\">
                    <div class=\"c-field has-icon-right\">
                        <span class=\"c-field__icon\">
                            <i class=\"fa fa-smile-o\"></i>
                        </span>
                        <label class=\"c-field__label u-hidden-visually\" for=\"input-chat\">Begin Chat</label>
\t\t\t<input class=\"c-input\" id=\"input-chat\" name=\"ks\" type=\"text\" placeholder=\"Begin Chat..\">
\t\t    </div>
                </div>
            </div>
        </div><!-- // .c-chat-dialogue -->

        <!-- Main javascsript -->
        <script src=\"js/main.min.js\"></script>
    </body>
</html>", "tchat/tchat.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\tchat\\tchat.html.twig");
    }
}
