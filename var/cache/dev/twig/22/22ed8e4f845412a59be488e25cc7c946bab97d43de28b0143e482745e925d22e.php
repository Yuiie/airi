<?php

/* @FOSUser/Profile/show_profile.html.twig */
class __TwigTemplate_d62651ddb7215ee8864f52c533f7d4318ca39645dad4988a3cb7e1567f4625a3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_profile.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en-us\">
    <head>
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>

                    <div class=\"col-md-7 col-xl-6\">
                <main>
                        <h2 class=\"u-h3 u-mb-small\">Account Settings</h2>

                        <div class=\"c-card u-p-medium u-text-small u-mb-small\">
                            <h6 class=\"u-text-bold\">General Info</h6>

                            <dl class=\"u-flex u-pv-small u-border-bottom\">
                                <dt class=\"u-width-25\">Name</dt>
                                <dd>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->source); })()), "username", array()), "html", null, true);
        echo "</dd>
                            </dl>

                            <dl class=\"u-flex u-pv-small u-border-bottom\">
                                <dt class=\"u-width-25\">Email</dt>
                                <dd>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->source); })()), "email", array()), "html", null, true);
        echo "</dd>
                            </dl>

                            <dl class=\"u-flex u-pv-small u-border-bottom\">
                                <dt class=\"u-width-25\">Avatar 
                                    <small class=\"u-block u-text-mute\">JPG, max. 500KB</small>
                                </dt>

                                <dd>
                                    <a class=\"c-avatar c-avatar--small\" href=\"#\">
                                        <img class=\"c-avatar__img\" src=\"img/avatar-72.jpg\" alt=\"Edgar's Face\">
                                    </a>
                                </dd>
                                
                                    
                            </dl>

                            <dl class=\"u-flex u-pt-small\">
                                <dt class=\"u-width-25\">Country</dt>
                                <dd>London, United Kingdom</dd>
                            </dl>
                        </div>

                        <div class=\"c-card u-p-medium u-mb-small u-text-small\">
                            <h6 class=\"u-text-bold\">Jobs</h6>

                            <dl class=\"u-flex u-pv-small u-border-bottom\">
                                <dt class=\"u-width-25\">Available</dt>
                                <dd class=\"u-width-75\">
                                    <div class=\"c-toggle\">
                                        <div class=\"c-toggle__btn is-active\">
                                            <label class=\"c-toggle__label\" for=\"toggle1\">
                                                <input class=\"c-toggle__input\" id=\"toggle1\" name=\"toggles\" type=\"radio\" checked>Yes
                                            </label>
                                        </div>

                                        <div class=\"c-toggle__btn\">
                                            <label class=\"c-toggle__label\" for=\"toggle2\">
                                                <input class=\"c-toggle__input\" id=\"toggle2\" name=\"toggles\" type=\"radio\">No
                                            </label>
                                        </div>
                                    </div><!-- // .c-toggle -->
                                </dd>
                            </dl>

                            <dl class=\"u-flex u-pt-small\">
                                <dt class=\"u-width-25\">What are you looking for?</dt>
                                <dd class=\"u-width-75\">I am currently looking for a good job with a great company! To help you accelerate your career, we'd like to give you a free trial of Premium Job Seeker.</dd>
                            </dl>
                        </div>

                        <!-- DEV NOTE: 

                            Remove `c-settings` and replace it with flex utilities
                         --> 
                        <div class=\"c-card u-p-medium u-mb-large\">
                            <h6 class=\"u-text-bold\">Jobs</h6>

                            <div class=\"o-line u-pv-small u-border-bottom\">
                                <p>Go to next request after reply</p>
                                <div class=\"c-switch is-active\">
                                    <input class=\"c-switch__input\" id=\"switch1\" type=\"checkbox\" checked=\"checked\">
                                </div>
                            </div>

                            <div class=\"o-line u-pv-small u-border-bottom\">
                                <p>Allow keyboard arrow for switching between requests</p>
                                <div class=\"c-switch is-active\">
                                    <input class=\"c-switch__input\" type=\"checkbox\" checked=\"checked\">
                                </div>
                            </div>

                            <div class=\"o-line u-pt-small\">
                                <p>Show input as first method of answer</p>
                                <div class=\"c-switch is-active\">
                                    <input class=\"c-switch__input\" type=\"checkbox\" checked=\"checked\">
                                </div>
                            </div>
                        </div>
</main>
                    </div>
<div class=\"col-md-5 col-xl-3 u-mb-medium u-hidden-down@tablet\">
<div class=\"c-profile-card\">
                        <div class=\"c-profile-card__cover\">
                            <img src=\"../img/profile-card-cover.jpg\" alt=\"Adam's profile cover\">
                        </div>

                        <div class=\"c-profile-card__user\">
                            <div class=\"c-profile-card__avatar\">
                                <img src=\"../img/avatar-150.jpg\" alt=\"Adam's image\">
                            </div>

                            <h4 class=\"c-profile-card__name\">";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 113, $this->source); })()), "username", array()), "html", null, true);
        echo " 
                                <a class=\"c-profile-card__username\" href=\"#\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 114, $this->source); })()), "email", array()), "html", null, true);
        echo "</a>
                            </h4>
                        </div>

                        <ul class=\"c-profile-card__social\">
                            <li><a class=\"c-profile-card__social-icon u-bg-pinterest\" href=\"#\">
                                <i class=\"fa fa-pinterest\"></i>
                            </a></li>

                            <li><a class=\"c-profile-card__social-icon u-bg-twitter\" href=\"#\">
                                    <i class=\"fa fa-twitter\"></i>
                            </a></li>

                            <li><a class=\"c-profile-card__social-icon u-bg-behance\" href=\"#\">
                                    <i class=\"fa fa-behance\"></i>
                            </a></li>

                            <li><a class=\"c-profile-card__social-icon u-bg-dribbble\" href=\"#\">
                                <i class=\"fa fa-dribbble\"></i>
                            </a></li>

                            <li><a class=\"c-profile-card__social-icon u-bg-linkedin\" href=\"#\">
                                <i class=\"fa fa-linkedin\"></i>
                            </a></li>
                        </ul>

                        <ul class=\"c-profile-card__meta\">
                            <li class=\"c-profile-card__meta-item\">
                                <i class=\"fa fa-map-marker\"></i>London, United Kingdom
                            </li>

                            <li class=\"c-profile-card__meta-item\">
                                <i class=\"fa fa-bullhorn\"></i>UX Designer
                            </li>

                            <li class=\"c-profile-card__meta-item\">
                                <i class=\"fa fa-inbox\"></i>32 Offers
                            </li>
                        </ul>
                    </div><!--// .c-profile -->

                    <!-- FAQ -->
                    <h4 class=\"u-h6 u-text-bold u-mb-xsmall\">FAQ</h4>

                    <!-- DEVELOPER NOTE 
                        Modify this component to `c-list`
                    -->
                    <ul>
                        <li class=\"u-mb-xsmall\">
                            <a class=\"u-text-dark u-text-small\" href=\"#\">How can I connect my bank account?</a>
                        </li>

                        <li class=\"u-mb-xsmall\">
                            <a class=\"u-text-dark u-text-small\" href=\"#\">Why Dashboard doesn’t show any data?</a>
                        </li>
                        <li class=\"u-mb-xsmall\">
                            <a class=\"u-text-dark u-text-small\" href=\"#\">If I change my avatar in one version will it appears in next version?</a>
                        </li>
                    </ul>
                    <a class=\"u-text-small u-color-blue\" href=\"#\">Visit FAQ Page</a>
                      </div>
        <script src=\"js/main.min.js\"></script>
    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 114,  152 => 113,  57 => 21,  49 => 16,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en-us\">
    <head>
    <link href=\"{{ asset('css/main.min.css') }}\" rel=\"stylesheet\">
    </head>

                    <div class=\"col-md-7 col-xl-6\">
                <main>
                        <h2 class=\"u-h3 u-mb-small\">Account Settings</h2>

                        <div class=\"c-card u-p-medium u-text-small u-mb-small\">
                            <h6 class=\"u-text-bold\">General Info</h6>

                            <dl class=\"u-flex u-pv-small u-border-bottom\">
                                <dt class=\"u-width-25\">Name</dt>
                                <dd>{{ user.username }}</dd>
                            </dl>

                            <dl class=\"u-flex u-pv-small u-border-bottom\">
                                <dt class=\"u-width-25\">Email</dt>
                                <dd>{{ user.email }}</dd>
                            </dl>

                            <dl class=\"u-flex u-pv-small u-border-bottom\">
                                <dt class=\"u-width-25\">Avatar 
                                    <small class=\"u-block u-text-mute\">JPG, max. 500KB</small>
                                </dt>

                                <dd>
                                    <a class=\"c-avatar c-avatar--small\" href=\"#\">
                                        <img class=\"c-avatar__img\" src=\"img/avatar-72.jpg\" alt=\"Edgar's Face\">
                                    </a>
                                </dd>
                                
                                    
                            </dl>

                            <dl class=\"u-flex u-pt-small\">
                                <dt class=\"u-width-25\">Country</dt>
                                <dd>London, United Kingdom</dd>
                            </dl>
                        </div>

                        <div class=\"c-card u-p-medium u-mb-small u-text-small\">
                            <h6 class=\"u-text-bold\">Jobs</h6>

                            <dl class=\"u-flex u-pv-small u-border-bottom\">
                                <dt class=\"u-width-25\">Available</dt>
                                <dd class=\"u-width-75\">
                                    <div class=\"c-toggle\">
                                        <div class=\"c-toggle__btn is-active\">
                                            <label class=\"c-toggle__label\" for=\"toggle1\">
                                                <input class=\"c-toggle__input\" id=\"toggle1\" name=\"toggles\" type=\"radio\" checked>Yes
                                            </label>
                                        </div>

                                        <div class=\"c-toggle__btn\">
                                            <label class=\"c-toggle__label\" for=\"toggle2\">
                                                <input class=\"c-toggle__input\" id=\"toggle2\" name=\"toggles\" type=\"radio\">No
                                            </label>
                                        </div>
                                    </div><!-- // .c-toggle -->
                                </dd>
                            </dl>

                            <dl class=\"u-flex u-pt-small\">
                                <dt class=\"u-width-25\">What are you looking for?</dt>
                                <dd class=\"u-width-75\">I am currently looking for a good job with a great company! To help you accelerate your career, we'd like to give you a free trial of Premium Job Seeker.</dd>
                            </dl>
                        </div>

                        <!-- DEV NOTE: 

                            Remove `c-settings` and replace it with flex utilities
                         --> 
                        <div class=\"c-card u-p-medium u-mb-large\">
                            <h6 class=\"u-text-bold\">Jobs</h6>

                            <div class=\"o-line u-pv-small u-border-bottom\">
                                <p>Go to next request after reply</p>
                                <div class=\"c-switch is-active\">
                                    <input class=\"c-switch__input\" id=\"switch1\" type=\"checkbox\" checked=\"checked\">
                                </div>
                            </div>

                            <div class=\"o-line u-pv-small u-border-bottom\">
                                <p>Allow keyboard arrow for switching between requests</p>
                                <div class=\"c-switch is-active\">
                                    <input class=\"c-switch__input\" type=\"checkbox\" checked=\"checked\">
                                </div>
                            </div>

                            <div class=\"o-line u-pt-small\">
                                <p>Show input as first method of answer</p>
                                <div class=\"c-switch is-active\">
                                    <input class=\"c-switch__input\" type=\"checkbox\" checked=\"checked\">
                                </div>
                            </div>
                        </div>
</main>
                    </div>
<div class=\"col-md-5 col-xl-3 u-mb-medium u-hidden-down@tablet\">
<div class=\"c-profile-card\">
                        <div class=\"c-profile-card__cover\">
                            <img src=\"../img/profile-card-cover.jpg\" alt=\"Adam's profile cover\">
                        </div>

                        <div class=\"c-profile-card__user\">
                            <div class=\"c-profile-card__avatar\">
                                <img src=\"../img/avatar-150.jpg\" alt=\"Adam's image\">
                            </div>

                            <h4 class=\"c-profile-card__name\">{{ user.username }} 
                                <a class=\"c-profile-card__username\" href=\"#\">{{ user.email }}</a>
                            </h4>
                        </div>

                        <ul class=\"c-profile-card__social\">
                            <li><a class=\"c-profile-card__social-icon u-bg-pinterest\" href=\"#\">
                                <i class=\"fa fa-pinterest\"></i>
                            </a></li>

                            <li><a class=\"c-profile-card__social-icon u-bg-twitter\" href=\"#\">
                                    <i class=\"fa fa-twitter\"></i>
                            </a></li>

                            <li><a class=\"c-profile-card__social-icon u-bg-behance\" href=\"#\">
                                    <i class=\"fa fa-behance\"></i>
                            </a></li>

                            <li><a class=\"c-profile-card__social-icon u-bg-dribbble\" href=\"#\">
                                <i class=\"fa fa-dribbble\"></i>
                            </a></li>

                            <li><a class=\"c-profile-card__social-icon u-bg-linkedin\" href=\"#\">
                                <i class=\"fa fa-linkedin\"></i>
                            </a></li>
                        </ul>

                        <ul class=\"c-profile-card__meta\">
                            <li class=\"c-profile-card__meta-item\">
                                <i class=\"fa fa-map-marker\"></i>London, United Kingdom
                            </li>

                            <li class=\"c-profile-card__meta-item\">
                                <i class=\"fa fa-bullhorn\"></i>UX Designer
                            </li>

                            <li class=\"c-profile-card__meta-item\">
                                <i class=\"fa fa-inbox\"></i>32 Offers
                            </li>
                        </ul>
                    </div><!--// .c-profile -->

                    <!-- FAQ -->
                    <h4 class=\"u-h6 u-text-bold u-mb-xsmall\">FAQ</h4>

                    <!-- DEVELOPER NOTE 
                        Modify this component to `c-list`
                    -->
                    <ul>
                        <li class=\"u-mb-xsmall\">
                            <a class=\"u-text-dark u-text-small\" href=\"#\">How can I connect my bank account?</a>
                        </li>

                        <li class=\"u-mb-xsmall\">
                            <a class=\"u-text-dark u-text-small\" href=\"#\">Why Dashboard doesn’t show any data?</a>
                        </li>
                        <li class=\"u-mb-xsmall\">
                            <a class=\"u-text-dark u-text-small\" href=\"#\">If I change my avatar in one version will it appears in next version?</a>
                        </li>
                    </ul>
                    <a class=\"u-text-small u-color-blue\" href=\"#\">Visit FAQ Page</a>
                      </div>
        <script src=\"js/main.min.js\"></script>
    ", "@FOSUser/Profile/show_profile.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\bundles\\FOSUserBundle\\Profile\\show_profile.html.twig");
    }
}
