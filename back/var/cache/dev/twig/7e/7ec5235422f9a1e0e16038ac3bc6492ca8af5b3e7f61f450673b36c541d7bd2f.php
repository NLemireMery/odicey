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
class __TwigTemplate_59dde879e10fbaf5b27acfbfd73fe80999e1cc92e9ace2cca9217677a2c6214f extends Template
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

    <table class=\"table table-hover\">
        <tbody>
            <tr class=\"table-active\">
                <th scope=\"col\">Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Email</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Rôles</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "roles", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "roles", [], "any", false, false, false, 20)), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr class=\"table-active\">
                <th scope=\"col\">Mot de passe</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "password", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 26
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "picture", [], "any", false, false, false, 26), null))) {
            // line 27
            echo "            
                <tr class=\"table-active\">
                    <th scope=\"col\">Photo de profil</th>
                    <td><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "picture", [], "any", false, false, false, 30), "html", null, true);
            echo "\" height=\"150\" width=\"150\"></td>
                </tr>

            ";
        }
        // line 34
        echo "
            ";
        // line 35
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "gamesDm", [], "any", false, false, false, 35), null))) {
            // line 36
            echo "                <tr class=\"table-active\">
                    <th scope=\"col\">Maître du jeu</th>
                    <td>
                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "gamesDm", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["gameDm"]) {
                // line 40
                echo "                        
                        Partie : ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gameDm"], "name", [], "any", false, false, false, 41), "html", null, true);
                echo "
                        ";
                // line 43
                echo "                        <a href=\"#\"><i class=\"bi bi-eye btn btn-sm btn-success rounded\"></i></a>
                        <a href=\"#\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                        <a onclick=\"return confirm('Confirmer la suppression')\" href=\"#\"><i class=\"bi bi-trash btn btn-sm btn-danger rounded\"></i></a>
                        <br>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gameDm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                    </td>
                </tr>
            ";
        }
        // line 52
        echo "
            ";
        // line 53
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "characters", [], "any", false, false, false, 53), null))) {
            // line 54
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "characters", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
                // line 55
                echo "                <tr class=\"table-active\">
                    <th scope=\"col\">Partie : ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["character"], "game", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
                echo "</th>
                        
                        <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["character"], "name", [], "any", false, false, false, 58), "html", null, true);
                echo "
                        <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_character_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["character"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a></td>

                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            ";
        }
        // line 64
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_user_list");
        echo "\" class=\"btn btn-sm btn-outline-info mx-3\">Retour à la liste</a>

    <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-warning mx-3\">Modifier</a>
    ";
        // line 70
        echo twig_include($this->env, $context, "backoffice/user/_delete_form.html.twig");
        echo "
";
        
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
        return array (  224 => 70,  220 => 69,  215 => 67,  210 => 64,  207 => 63,  197 => 59,  193 => 58,  188 => 56,  185 => 55,  180 => 54,  178 => 53,  175 => 52,  170 => 49,  159 => 43,  155 => 41,  152 => 40,  148 => 39,  143 => 36,  141 => 35,  138 => 34,  131 => 30,  126 => 27,  124 => 26,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ user.login }}{% endblock %}

{% block body %}
    <h1 class=\"mt-3 mx-3\">{{ user.login }}</h1>

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
            <tr class=\"table-active\">
                <th scope=\"col\">Mot de passe</th>
                <td>{{ user.password }}</td>
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
                        {# ! Link the partie's show/edit/delete with the proper routes #}
                        <a href=\"#\"><i class=\"bi bi-eye btn btn-sm btn-success rounded\"></i></a>
                        <a href=\"#\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                        <a onclick=\"return confirm('Confirmer la suppression')\" href=\"#\"><i class=\"bi bi-trash btn btn-sm btn-danger rounded\"></i></a>
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
                        <a href=\"{{ path('app_backoffice_character_edit', {'id': character.id}) }}\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a></td>

                </tr>
                {% endfor %}
            {% endif %}
        </tbody>
    </table>

    <a href=\"{{ path('app_backoffice_user_list') }}\" class=\"btn btn-sm btn-outline-info mx-3\">Retour à la liste</a>

    <a href=\"{{ path('app_backoffice_user_edit', {'id': user.id}) }}\" class=\"btn btn-sm btn-outline-warning mx-3\">Modifier</a>
    {{ include('backoffice/user/_delete_form.html.twig') }}
{% endblock %}", "backoffice/user/show.html.twig", "/var/www/html/Protons/ODicey/projet-04-o-dicey-back/templates/backoffice/user/show.html.twig");
    }
}
