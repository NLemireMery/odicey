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

/* backoffice/game/_search.html.twig */
class __TwigTemplate_b37a00626c6d77b43e4e9829ef98ed8073c6913b15613aebca9254ac8ef7dfc2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/game/_search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/game/_search.html.twig"));

        // line 1
        echo "<!-- Formulaire de recherche -->
        <form action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_getGames");
        echo "\" method=\"GET\" class=\"form-inline mb-3 justify-content-end\">
            <div class=\"input-group input-group-sm \" style=\"max-width: 300px;\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par nom de partie\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-outline-secondary\" type=\"submit\">Rechercher</button>
                </div>
            </div>
        </form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/game/_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Formulaire de recherche -->
        <form action=\"{{ path('app_backoffice_game_getGames') }}\" method=\"GET\" class=\"form-inline mb-3 justify-content-end\">
            <div class=\"input-group input-group-sm \" style=\"max-width: 300px;\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par nom de partie\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-outline-secondary\" type=\"submit\">Rechercher</button>
                </div>
            </div>
        </form>", "backoffice/game/_search.html.twig", "/var/www/html/Protons/ODicey/projet-04-o-dicey-back/templates/backoffice/game/_search.html.twig");
    }
}
