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

/* backoffice/game/show.html.twig */
class __TwigTemplate_2a3197bcbd6aa304a3a805cda27d975d6ce2f8bbda6deae391c1d8ced158b307 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/game/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/game/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "backoffice/game/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr class=\"table-active\">
                <th scope=\"col\">Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Statut</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 16, $this->source); })()), "status", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Mode de jeu</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 20, $this->source); })()), "mode", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Maitre de jeu</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 24, $this->source); })()), "dm", [], "any", false, false, false, 24), "login", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 26
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 26, $this->source); })()), "galleries", [], "any", false, false, false, 26))) {
            // line 27
            echo "                <tr class=\"table-active\">
                    <th scope=\"col\">Images</th>
                    <td>
                        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 30, $this->source); })()), "galleries", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
                // line 31
                echo "                            ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["gallery"], "picture", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "picture", [], "any", false, false, false, 32), "html", null, true);
                    echo "\" height=\"150\" width=\"150\" alt=\"Image\">
                            ";
                }
                // line 34
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    </td>
                </tr>
            ";
        }
        // line 38
        echo "
                <tr class=\"table-active\">
                    <th scope=\"col\">Personnages</th>
                    <td>
                      ";
        // line 42
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 42, $this->source); })()), "characters", [], "any", false, false, false, 42))) {
            // line 43
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 43, $this->source); })()), "characters", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
                // line 44
                echo "                          ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["character"], "name", [], "any", false, false, false, 44), "html", null, true);
                echo "
                          appartient à : ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["character"], "user", [], "any", false, false, false, 45), "login", [], "any", false, false, false, 45), "html", null, true);
                echo "
                          <a href=\"#\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                          <a onclick=\"return confirm('Confirmer la suppression')\" href=\"#\"><i class=\"bi bi-trash btn btn-sm btn-danger rounded\"></i></a>
                          <br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                      ";
        } else {
            // line 51
            echo "                        Aucun personnage associé à cette partie.
                      ";
        }
        // line 53
        echo "                    </td>
                </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_list");
        echo "\" class=\"btn btn-sm btn-outline-info mx-3\">Retour à la liste</a>

    <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-warning mx-3\">Modifier</a>
    <form method=\"post\" action=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette partie ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62))), "html", null, true);
        echo "\">
        <button class=\"btn btn-sm btn-outline-danger mx-3 mt-2\">Supprimer</button>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/game/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 62,  207 => 61,  203 => 60,  198 => 58,  191 => 53,  187 => 51,  184 => 50,  173 => 45,  168 => 44,  163 => 43,  161 => 42,  155 => 38,  150 => 35,  144 => 34,  138 => 32,  135 => 31,  131 => 30,  126 => 27,  124 => 26,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ game.name }}{% endblock %}

{% block body %}
    <h1 class=\"mt-3 mx-3\">{{ game.name }}</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr class=\"table-active\">
                <th scope=\"col\">Id</th>
                <td>{{ game.id }}</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Statut</th>
                <td>{{ game.status }}</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Mode de jeu</th>
                <td>{{ game.mode.name }}</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Maitre de jeu</th>
                <td>{{ game.dm.login }}</td>
            </tr>
            {% if game.galleries is not empty %}
                <tr class=\"table-active\">
                    <th scope=\"col\">Images</th>
                    <td>
                        {% for gallery in game.galleries %}
                            {% if gallery.picture is not empty %}
                                <img src=\"{{ gallery.picture }}\" height=\"150\" width=\"150\" alt=\"Image\">
                            {% endif %}
                        {% endfor %}
                    </td>
                </tr>
            {% endif %}

                <tr class=\"table-active\">
                    <th scope=\"col\">Personnages</th>
                    <td>
                      {% if game.characters is not empty %}
                        {% for character in game.characters %}
                          {{ character.name }}
                          appartient à : {{ character.user.login }}
                          <a href=\"#\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                          <a onclick=\"return confirm('Confirmer la suppression')\" href=\"#\"><i class=\"bi bi-trash btn btn-sm btn-danger rounded\"></i></a>
                          <br>
                        {% endfor %}
                      {% else %}
                        Aucun personnage associé à cette partie.
                      {% endif %}
                    </td>
                </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_backoffice_game_list') }}\" class=\"btn btn-sm btn-outline-info mx-3\">Retour à la liste</a>

    <a href=\"{{ path('app_backoffice_game_edit', {'id': game.id}) }}\" class=\"btn btn-sm btn-outline-warning mx-3\">Modifier</a>
    <form method=\"post\" action=\"{{ path('app_backoffice_game_delete', {'id': game.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette partie ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ game.id) }}\">
        <button class=\"btn btn-sm btn-outline-danger mx-3 mt-2\">Supprimer</button>
    </form>
{% endblock %}", "backoffice/game/show.html.twig", "/var/www/html/Protons/ODicey/projet-04-o-dicey-back/templates/backoffice/game/show.html.twig");
    }
}
