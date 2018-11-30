<?php

/* nav.html.twig */
class __TwigTemplate_99bf488343acf0cb9df83fd4bcf205701355990c0a302f11442be6182747798c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    ";
        // line 11
        $this->displayBlock('nav', $context, $blocks);
        // line 223
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
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_nav($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 12
        echo " <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Otaku-Stream</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Acceuil</a>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Categorie
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

          
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <span class=\"text-uppercase text-blue\">oui</span>
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"non\">shojo</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <a href=\"\">
                  <img src=\"https://dummyimage.com/200x100/ccc/000&text=image+link\" alt=\"\" class=\"img-fluid\">
                </a>
                <p class=\"text-white\">Short image call to action</p>

              </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Category 2
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">


          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <span class=\"text-uppercase text-white\">Category 2</span>
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <a href=\"\">
                  <img src=\"https://dummyimage.com/200x100/ccc/000&text=image+link\" alt=\"\" class=\"img-fluid\">
                </a>
                <p class=\"text-white\">Short image call to action</p>

              </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Category 3
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">


          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-4\">
               <span class=\"text-uppercase text-white\">Category 3</span>
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">

                <a href=\"\">
                  <img src=\"https://dummyimage.com/200x100/ccc/000&text=image+link\" alt=\"\" class=\"img-fluid\">
                </a>
                <p class=\"text-white\">Short image call to action</p>
              
                
              </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
  
    </ul>
    <form class=\"form-inline my-2 my-lg-0\" methode=\"GET\">
      <input class=\"form-control mr-sm-2\" type=\"search\" name=\"recherche\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
    <div class=\"my-2 my-sm-0 pl-ld-0 pl-sm-0 pl-md-0 pl-xl-4\">
    


   ";
        // line 194
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 195
            echo "   <button type=\"button\" class=\"form-control mr-sm-2\">
      <a href=\"";
            // line 196
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" style=\"color:black\"><img href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icon/user.svg"), "html", null, true);
            echo "\">Profil</a>
      </button>
";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 199
            echo "<button type=\"button\" class=\"form-control mr-sm-2\">
      <a href=\"";
            // line 200
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" style=\"color:blue\"><img href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icon/user.svg"), "html", null, true);
            echo "\">Profil</a>
      </button>
";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 203
            echo "    <button type=\"button\" class=\"form-control mr-sm-2\">
      <a href=\"";
            // line 204
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" style=\"color:blue\"><img href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icon/sign-in.svg"), "html", null, true);
            echo "\">Login</a>
      </button>
";
        }
        // line 207
        echo "
      
    </div>
  </div>


</nav>

";
        // line 216
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 216, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "recherche"), "method"))) {
            // line 217
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\MainController::recherche", array("nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 219
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 219, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "recherche"), "method"))));
            // line 220
            echo "
";
        }
        // line 222
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  338 => 222,  334 => 220,  332 => 219,  331 => 217,  329 => 216,  319 => 207,  309 => 204,  306 => 203,  296 => 200,  293 => 199,  283 => 196,  280 => 195,  278 => 194,  102 => 21,  91 => 13,  88 => 12,  79 => 11,  63 => 5,  54 => 4,  43 => 223,  41 => 11,  38 => 10,  36 => 4,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% block stylesheets %}
            <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        {% endblock %}
    </head>
    {% block nav %}
 <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"{{ path('index') }}\">Otaku-Stream</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('index') }}\">Acceuil</a>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Categorie
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

          
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <span class=\"text-uppercase text-blue\">oui</span>
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"non\">shojo</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <a href=\"\">
                  <img src=\"https://dummyimage.com/200x100/ccc/000&text=image+link\" alt=\"\" class=\"img-fluid\">
                </a>
                <p class=\"text-white\">Short image call to action</p>

              </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Category 2
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">


          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <span class=\"text-uppercase text-white\">Category 2</span>
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <a href=\"\">
                  <img src=\"https://dummyimage.com/200x100/ccc/000&text=image+link\" alt=\"\" class=\"img-fluid\">
                </a>
                <p class=\"text-white\">Short image call to action</p>

              </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Category 3
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">


          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-4\">
               <span class=\"text-uppercase text-white\">Category 3</span>
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">
                <ul class=\"nav flex-column\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active\" href=\"#\">Active</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class=\"col-md-4\">

                <a href=\"\">
                  <img src=\"https://dummyimage.com/200x100/ccc/000&text=image+link\" alt=\"\" class=\"img-fluid\">
                </a>
                <p class=\"text-white\">Short image call to action</p>
              
                
              </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
  
    </ul>
    <form class=\"form-inline my-2 my-lg-0\" methode=\"GET\">
      <input class=\"form-control mr-sm-2\" type=\"search\" name=\"recherche\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
    <div class=\"my-2 my-sm-0 pl-ld-0 pl-sm-0 pl-md-0 pl-xl-4\">
    


   {% if is_granted('IS_AUTHENTICATED_FULLY') %}
   <button type=\"button\" class=\"form-control mr-sm-2\">
      <a href=\"{{ path('login') }}\" style=\"color:black\"><img href=\"{{ path('login') }}\" src=\"{{ asset('icon/user.svg') }}\">Profil</a>
      </button>
{% elseif is_granted('IS_AUTHENTICATED_REMEMBERED') %}
<button type=\"button\" class=\"form-control mr-sm-2\">
      <a href=\"{{ path('login') }}\" style=\"color:blue\"><img href=\"{{ path('login') }}\" src=\"{{ asset('icon/user.svg') }}\">Profil</a>
      </button>
{% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
    <button type=\"button\" class=\"form-control mr-sm-2\">
      <a href=\"{{ path('login') }}\" style=\"color:blue\"><img href=\"{{ path('login') }}\" src=\"{{ asset('icon/sign-in.svg') }}\">Login</a>
      </button>
{% endif %}

      
    </div>
  </div>


</nav>

{# Recherche #}
{% if app.request.query.get(\"recherche\") is not empty %}
{{ render(controller(
        'App\\\\Controller\\\\MainController::recherche',
        { 'nom': app.request.query.get(\"recherche\") }
    )) }}
{% endif %}
 {% endblock %}
</html>
", "nav.html.twig", "C:\\xampp\\htdocs\\airi\\templates\\nav.html.twig");
    }
}
