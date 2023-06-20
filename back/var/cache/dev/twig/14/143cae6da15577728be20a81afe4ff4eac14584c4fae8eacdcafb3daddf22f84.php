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

/* backoffice/mode/show.html.twig */
class __TwigTemplate_5b99d49b9b63b8a7224040217a3286e96e4ce53b7cb8ad5a87eab46fcd26a906 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/mode/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/mode/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "backoffice/mode/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <h1 class=\"mt-3 mx-3\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr class=\"table-active\">
                <th scope=\"col\">Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Statistiques</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 20, $this->source); })()), "jsonstats", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 20, $this->source); })()), "jsonstats", [], "any", false, false, false, 20)), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Parties</th>
                <td>
                    ";
        // line 25
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 25, $this->source); })()), "games", [], "any", false, false, false, 25))) {
            // line 26
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 26, $this->source); })()), "games", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
                // line 27
                echo "                            <span class=\"bold-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["game"], "dm", [], "any", false, false, false, 27), "login", [], "any", false, false, false, 27), "html", null, true);
                echo "</span>
                            est le maître de jeu de la partie : <span class=\"bold-text\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 28), "html", null, true);
                echo "</span>
                            <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_getGamesById", ["id" => twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\"><i class=\"bi bi-eye btn btn-sm btn-success rounded\"></i></a>
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_editGames", ["id" => twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                            <br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                    ";
        } else {
            // line 34
            echo "                    Aucune partie associée à ce mode de jeu.
                    ";
        }
        // line 36
        echo "                </td>
            </tr>

            
        </tbody>
    </table>

    <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_mode_getModes");
        echo "\" class=\"btn btn-sm btn-outline-info mx-3\">Retour à la liste</a>

    <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_mode_editModes", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-warning mx-3\">Modifier</a>

    ";
        // line 47
        echo twig_include($this->env, $context, "backoffice/mode/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/mode/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 47,  170 => 45,  165 => 43,  156 => 36,  152 => 34,  149 => 33,  140 => 30,  136 => 29,  132 => 28,  127 => 27,  122 => 26,  120 => 25,  112 => 20,  105 => 16,  98 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ mode.name }}{% endblock %}

{% block body %}
    <h1 class=\"mt-3 mx-3\">{{ mode.name }}</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr class=\"table-active\">
                <th scope=\"col\">Id</th>
                <td>{{ mode.id }}</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Nom</th>
                <td>{{ mode.name }}</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Statistiques</th>
                <td>{{ mode.jsonstats ? mode.jsonstats|json_encode : '' }}</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Parties</th>
                <td>
                    {% if mode.games is not empty %}
                        {% for game in mode.games %}
                            <span class=\"bold-text\">{{ game.dm.login }}</span>
                            est le maître de jeu de la partie : <span class=\"bold-text\">{{game.name}}</span>
                            <a href=\"{{ path('app_backoffice_game_getGamesById', {'id': game.id}) }}\"><i class=\"bi bi-eye btn btn-sm btn-success rounded\"></i></a>
                            <a href=\"{{ path('app_backoffice_game_editGames', {'id': game.id}) }}\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                            <br>
                        {% endfor %}
                    {% else %}
                    Aucune partie associée à ce mode de jeu.
                    {% endif %}
                </td>
            </tr>

            
        </tbody>
    </table>

    <a href=\"{{ path('app_backoffice_mode_getModes') }}\" class=\"btn btn-sm btn-outline-info mx-3\">Retour à la liste</a>

    <a href=\"{{ path('app_backoffice_mode_editModes', {'id': mode.id}) }}\" class=\"btn btn-sm btn-outline-warning mx-3\">Modifier</a>

    {{ include('backoffice/mode/_delete_form.html.twig') }}
{% endblock %}", "backoffice/mode/show.html.twig", "/var/www/html/Protons/ODicey/projet-04-o-dicey-back/templates/backoffice/mode/show.html.twig");
    }
}
