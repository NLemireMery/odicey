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

/* backoffice/user/show.html.twig */
class __TwigTemplate_f3f2a03645131a8bebcfdb0296fd7622a66f55f09ae5e07e8000b205d405430b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "backoffice/user/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "login", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "login", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    ";
        // line 8
        $this->loadTemplate("backoffice/fragments/_flash_message.html.twig", "backoffice/user/show.html.twig", 8)->display($context);
        // line 9
        echo "
    <table class=\"table table-hover\">
        <tbody>
            <tr class=\"table-active\">
                <th scope=\"col\">Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Rôles</th>
                <td>";
        // line 22
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "roles", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "roles", [], "any", false, false, false, 22)), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            ";
        // line 24
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "picture", [], "any", false, false, false, 24), null))) {
            // line 25
            echo "            
                <tr class=\"table-active\">
                    <th scope=\"col\">Photo de profil</th>
                    <td><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "picture", [], "any", false, false, false, 28), "html", null, true);
            echo "\" height=\"150\" width=\"150\"></td>
                </tr>

            ";
        }
        // line 32
        echo "
            ";
        // line 33
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "gamesDm", [], "any", false, false, false, 33), null))) {
            // line 34
            echo "                <tr class=\"table-active\">
                    <th scope=\"col\">Maître du jeu</th>
                    <td>
                    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "gamesDm", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["gameDm"]) {
                // line 38
                echo "                        
                        Partie : ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gameDm"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "
                        <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_getGamesById", ["id" => twig_get_attribute($this->env, $this->source, $context["gameDm"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\"><i class=\"bi bi-eye btn btn-sm btn-success rounded\"></i></a>
                        <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_editGames", ["id" => twig_get_attribute($this->env, $this->source, $context["gameDm"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                        <br>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gameDm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                    </td>
                </tr>
            ";
        }
        // line 48
        echo "
            ";
        // line 49
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "characters", [], "any", false, false, false, 49), null))) {
            // line 50
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "characters", [], "any", false, false, false, 50));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
                // line 51
                echo "                <tr class=\"table-active\">
                    <th scope=\"col\">Partie : ";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["character"], "game", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
                echo "</th>
                        
                        <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["character"], "name", [], "any", false, false, false, 54), "html", null, true);
                echo "
                        ";
                // line 55
                echo twig_include($this->env, $context, "backoffice/character/_delete_form.html.twig");
                echo "</td>

                </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            ";
        }
        // line 60
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_user_getUsers");
        echo "\" class=\"btn btn-sm btn-outline-info mx-3\">Retour à la liste</a>

    ";
        // line 66
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 66,  237 => 63,  232 => 60,  229 => 59,  211 => 55,  207 => 54,  202 => 52,  199 => 51,  181 => 50,  179 => 49,  176 => 48,  171 => 45,  161 => 41,  157 => 40,  153 => 39,  150 => 38,  146 => 37,  141 => 34,  139 => 33,  136 => 32,  129 => 28,  124 => 25,  122 => 24,  117 => 22,  110 => 18,  103 => 14,  96 => 9,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ user.login }}{% endblock %}

{% block body %}
    <h1 class=\"mt-3 mx-3\">{{ user.login }}</h1>

    {% include \"backoffice/fragments/_flash_message.html.twig\" %}

    <table class=\"table table-hover\">
        <tbody>
            <tr class=\"table-active\">
                <th scope=\"col\">Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Email</th>
                <td>{{ user.email }}</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Rôles</th>
                <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
            </tr>
            {% if (user.picture != null) %}
            
                <tr class=\"table-active\">
                    <th scope=\"col\">Photo de profil</th>
                    <td><img src=\"{{ user.picture }}\" height=\"150\" width=\"150\"></td>
                </tr>

            {% endif %}

            {% if (user.gamesDm != null) %}
                <tr class=\"table-active\">
                    <th scope=\"col\">Maître du jeu</th>
                    <td>
                    {% for gameDm in user.gamesDm %}
                        
                        Partie : {{gameDm.name}}
                        <a href=\"{{ path('app_backoffice_game_getGamesById', {'id': gameDm.id}) }}\"><i class=\"bi bi-eye btn btn-sm btn-success rounded\"></i></a>
                        <a href=\"{{ path('app_backoffice_game_editGames', {'id': gameDm.id}) }}\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                        <br>

                    {% endfor %}
                    </td>
                </tr>
            {% endif %}

            {% if (user.characters != null) %}
                {% for character in user.characters %}
                <tr class=\"table-active\">
                    <th scope=\"col\">Partie : {{character.game.name}}</th>
                        
                        <td>{{ character.name }}
                        {{ include('backoffice/character/_delete_form.html.twig') }}</td>

                </tr>
                {% endfor %}
            {% endif %}
        </tbody>
    </table>

    <a href=\"{{ path('app_backoffice_user_getUsers') }}\" class=\"btn btn-sm btn-outline-info mx-3\">Retour à la liste</a>

    {# Edition of character not yet optimized #}
    {# <a href=\"{{ path('app_backoffice_user_editUsers', {'id': user.id}) }}\" class=\"btn btn-sm btn-outline-warning mx-3\">Modifier</a> #}
{% endblock %}", "backoffice/user/show.html.twig", "/var/www/html/Protons/ODicey/projet-04-o-dicey-back/templates/backoffice/user/show.html.twig");
    }
}
