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

/* backoffice/game/index.html.twig */
class __TwigTemplate_4dd14c8e474156840e133eb425b50cce8cdf7f144ba3c4dbd7fde43ab2469196 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/game/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/game/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "backoffice/game/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Parties";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1 class=\"mt-3 mx-3\">Parties</h1>

    ";
        // line 9
        $this->loadTemplate("backoffice/fragments/_flash_message.html.twig", "backoffice/game/index.html.twig", 9)->display($context);
        // line 10
        echo "
    ";
        // line 11
        echo twig_include($this->env, $context, "backoffice/game/_search.html.twig");
        echo "

    <div class=\"text-end mb-3\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_getGames", ["sort" => "id", "order" => ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", [0 => "sort"], "method", false, false, false, 14), "id")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", [0 => "order"], "method", false, false, false, 14), "asc")))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\" class=\"btn btn-outline-primary mx-1\">
            Trier par ID ";
        // line 15
        if ((0 === twig_compare((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 15, $this->source); })()), "id"))) {
            if ((0 === twig_compare((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "asc"))) {
                echo "<i class=\"bi bi-caret-up-fill\"></i>";
            } else {
                echo "<i class=\"bi bi-caret-down-fill\"></i>";
            }
        }
        // line 16
        echo "        </a>
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_getGames", ["sort" => "name", "order" => ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "get", [0 => "sort"], "method", false, false, false, 17), "name")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "get", [0 => "order"], "method", false, false, false, 17), "asc")))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\" class=\"btn btn-outline-primary mx-1\">
            Trier par name ";
        // line 18
        if ((0 === twig_compare((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 18, $this->source); })()), "name"))) {
            if ((0 === twig_compare((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "asc"))) {
                echo "<i class=\"bi bi-caret-up-fill\"></i>";
            } else {
                echo "<i class=\"bi bi-caret-down-fill\"></i>";
            }
        }
        // line 19
        echo "        </a>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_getGames", ["sort" => "dm", "order" => ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "query", [], "any", false, false, false, 20), "get", [0 => "sort"], "method", false, false, false, 20), "dm")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "query", [], "any", false, false, false, 20), "get", [0 => "order"], "method", false, false, false, 20), "asc")))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\" class=\"btn btn-outline-primary mx-1\">
            Trier par DM ";
        // line 21
        if ((0 === twig_compare((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 21, $this->source); })()), "dm"))) {
            if ((0 === twig_compare((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 21, $this->source); })()), "asc"))) {
                echo "<i class=\"bi bi-caret-up-fill\"></i>";
            } else {
                echo "<i class=\"bi bi-caret-down-fill\"></i>";
            }
        }
        // line 22
        echo "        </a>
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_postGames");
        echo "\" class=\"btn btn-outline-info mx-3\">Créer une nouvelle partie</a>
    </div>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Maître du jeu</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 38
            echo "            <tr class=\"table-active\">
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "status", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["game"], "dm", [], "any", false, false, false, 42), "login", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_getGamesById", ["id" => twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\"><i class=\"bi bi-eye btn btn-sm btn-success rounded\"></i></a>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_editGames", ["id" => twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "            <tr>
                <td colspan=\"5\">Aucune partie trouvée.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/game/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 53,  204 => 49,  195 => 45,  191 => 44,  186 => 42,  182 => 41,  178 => 40,  174 => 39,  171 => 38,  166 => 37,  149 => 23,  146 => 22,  138 => 21,  134 => 20,  131 => 19,  123 => 18,  119 => 17,  116 => 16,  108 => 15,  104 => 14,  98 => 11,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Parties{% endblock %}

{% block body %}

    <h1 class=\"mt-3 mx-3\">Parties</h1>

    {% include \"backoffice/fragments/_flash_message.html.twig\" %}

    {{ include('backoffice/game/_search.html.twig') }}

    <div class=\"text-end mb-3\">
        <a href=\"{{ path('app_backoffice_game_getGames', { 'sort': 'id', 'order': (app.request.query.get('sort') == 'id' and app.request.query.get('order') == 'asc') ? 'desc' : 'asc' }) }}\" class=\"btn btn-outline-primary mx-1\">
            Trier par ID {% if sort == 'id' %}{% if order == 'asc' %}<i class=\"bi bi-caret-up-fill\"></i>{% else %}<i class=\"bi bi-caret-down-fill\"></i>{% endif %}{% endif %}
        </a>
        <a href=\"{{ path('app_backoffice_game_getGames', { 'sort': 'name', 'order': (app.request.query.get('sort') == 'name' and app.request.query.get('order') == 'asc') ? 'desc' : 'asc' }) }}\" class=\"btn btn-outline-primary mx-1\">
            Trier par name {% if sort == 'name' %}{% if order == 'asc' %}<i class=\"bi bi-caret-up-fill\"></i>{% else %}<i class=\"bi bi-caret-down-fill\"></i>{% endif %}{% endif %}
        </a>
        <a href=\"{{ path('app_backoffice_game_getGames', { 'sort': 'dm', 'order': (app.request.query.get('sort') == 'dm' and app.request.query.get('order') == 'asc') ? 'desc' : 'asc' }) }}\" class=\"btn btn-outline-primary mx-1\">
            Trier par DM {% if sort == 'dm' %}{% if order == 'asc' %}<i class=\"bi bi-caret-up-fill\"></i>{% else %}<i class=\"bi bi-caret-down-fill\"></i>{% endif %}{% endif %}
        </a>
        <a href=\"{{ path('app_backoffice_game_postGames') }}\" class=\"btn btn-outline-info mx-3\">Créer une nouvelle partie</a>
    </div>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Maître du jeu</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for game in games %}
            <tr class=\"table-active\">
                <td>{{ game.id }}</td>
                <td>{{ game.name }}</td>
                <td>{{ game.status }}</td>
                <td>{{ game.dm.login }}</td>
                <td>
                    <a href=\"{{ path('app_backoffice_game_getGamesById', {'id': game.id}) }}\"><i class=\"bi bi-eye btn btn-sm btn-success rounded\"></i></a>
                    <a href=\"{{ path('app_backoffice_game_editGames', {'id': game.id}) }}\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">Aucune partie trouvée.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}", "backoffice/game/index.html.twig", "/var/www/html/Protons/ODicey/projet-04-o-dicey-back/templates/backoffice/game/index.html.twig");
    }
}
