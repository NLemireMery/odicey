<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_ef11cdab9ed7da3320682bd7f1a1913d9be9f4a43186838132912adf82e3f2a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">

\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- Bootstrap CSS -->
\t\t<link
\t\thref=\"https://bootswatch.com/5/lux/bootstrap.min.css\" rel=\"stylesheet\">
\t\t<!-- Bootstrap icons -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
\t\t<!-- Our custom CSS -->

\t\t<title>
\t\t\t";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        // line 21
        echo "\t\t</title>
\t</head>

\t<body>

\t\t<!-- Nav -->
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_home");
        echo "\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none header-logo\">
\t\t\t\t\t<span class=\"header-logo__title\">O'Dicey</span>
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t";
        // line 37
        $this->displayBlock('nav', $context, $blocks);
        // line 57
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        // line 58
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 59
            echo "\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\tclass=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<!-- Bootstrap CSS -->
\t\t\t\t\t\t\t\t\t<link
\t\t\t\t\t\t\t\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">
\t\t\t\t\t\t\t\t\t<!-- Bootstrap icons -->
\t\t\t\t\t\t\t\t\t<link
\t\t\t\t\t\t\t\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
\t\t\t\t\t\t\t\t\t<!-- Our custom CSS -->
\t\t\t\t\t\t\t\t\t<link
\t\t\t\t\t\t\t\t\trel=\"stylesheet\" href=\"css/oflix.css\">

\t\t\t\t\t\t\t\t\t<title>O'Dicey</title>
\t\t\t\t\t\t\t\t\t<span>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "email", [], "any", false, false, false, 74), "html", null, true);
            echo " | 
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person-square\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Profil</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Frontoffice</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        } else {
            // line 95
            echo "\t\t\t\t\t\t<a href=\"#\"  class=\"btn btn-danger me-2 rounded\">Connexion</a>
\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

        ";
        // line 101
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "
        <!-- footer -->
        <footer class=\"container-fluid py-4 border-top text-center\">
            <span class=\"text-muted\">O'Dicey made with &hearts; at O'clock !
                <br><small>Thème :<a href=\"\" class=\"link-secondary text-decoration-none\">
                        <i class=\"bi bi-toggle-on mx-1\"></i>Roll20</a>
                </small>
            </a>
        </span>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
    </body>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "O'Dicey - Backoffice
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 38
        echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_home");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_user_list");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t\t\t\tUtilisateurs</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_list");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dice-4\"></i>
\t\t\t\t\t\t\t\t\tParties</a>
\t\t\t\t\t\t\t</li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">
                                    <i class=\"bi bi-controller\"></i>
                                    Modes</a>
                            </li>
\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 101,  222 => 47,  214 => 42,  208 => 39,  205 => 38,  195 => 37,  175 => 19,  152 => 102,  150 => 101,  144 => 97,  140 => 95,  131 => 89,  113 => 74,  96 => 59,  94 => 58,  91 => 57,  89 => 37,  78 => 29,  68 => 21,  66 => 19,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">

\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- Bootstrap CSS -->
\t\t<link
\t\thref=\"https://bootswatch.com/5/lux/bootstrap.min.css\" rel=\"stylesheet\">
\t\t<!-- Bootstrap icons -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
\t\t<!-- Our custom CSS -->

\t\t<title>
\t\t\t{% block title %}O'Dicey - Backoffice
\t\t\t{% endblock %}
\t\t</title>
\t</head>

\t<body>

\t\t<!-- Nav -->
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a href=\"{{path(\"app_backoffice_home\")}}\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none header-logo\">
\t\t\t\t\t<span class=\"header-logo__title\">O'Dicey</span>
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t{% block nav %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path(\"app_backoffice_home\")}}\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path(\"app_backoffice_user_list\")}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t\t\t\tUtilisateurs</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path(\"app_backoffice_game_list\")}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dice-4\"></i>
\t\t\t\t\t\t\t\t\tParties</a>
\t\t\t\t\t\t\t</li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">
                                    <i class=\"bi bi-controller\"></i>
                                    Modes</a>
                            </li>
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t</ul>
\t\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\tclass=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<!-- Bootstrap CSS -->
\t\t\t\t\t\t\t\t\t<link
\t\t\t\t\t\t\t\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">
\t\t\t\t\t\t\t\t\t<!-- Bootstrap icons -->
\t\t\t\t\t\t\t\t\t<link
\t\t\t\t\t\t\t\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
\t\t\t\t\t\t\t\t\t<!-- Our custom CSS -->
\t\t\t\t\t\t\t\t\t<link
\t\t\t\t\t\t\t\t\trel=\"stylesheet\" href=\"css/oflix.css\">

\t\t\t\t\t\t\t\t\t<title>O'Dicey</title>
\t\t\t\t\t\t\t\t\t<span>{{app.user.email}} | 
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person-square\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Profil</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Frontoffice</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"#\"  class=\"btn btn-danger me-2 rounded\">Connexion</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

        {% block body %}{% endblock %}

        <!-- footer -->
        <footer class=\"container-fluid py-4 border-top text-center\">
            <span class=\"text-muted\">O'Dicey made with &hearts; at O'clock !
                <br><small>Thème :<a href=\"\" class=\"link-secondary text-decoration-none\">
                        <i class=\"bi bi-toggle-on mx-1\"></i>Roll20</a>
                </small>
            </a>
        </span>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
    </body>
</body>
</html>
", "base.html.twig", "/var/www/html/Protons/ODicey/projet-04-o-dicey-back/templates/base.html.twig");
    }
}
