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

/* backoffice/user/index.html.twig */
class __TwigTemplate_4bbc8ba5186827ebe6cda8c9001713632435023f8c99586fe65d825e0f26dd6b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "backoffice/user/index.html.twig", 1);
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

        echo "Utilisateurs";
        
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
    <h1 class=\"mt-3 mx-3\">Utilisateurs</h1>

    ";
        // line 9
        $this->loadTemplate("backoffice/fragments/_flash_message.html.twig", "backoffice/user/index.html.twig", 9)->display($context);
        // line 10
        echo "
    ";
        // line 11
        echo twig_include($this->env, $context, "backoffice/user/_search.html.twig");
        echo "

    <div class=\"text-end mb-3\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_user_getUsers", ["sort" => "id", "order" => ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", [0 => "sort"], "method", false, false, false, 14), "id")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", [0 => "order"], "method", false, false, false, 14), "asc")))) ? ("desc") : ("asc"))]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_user_getUsers", ["sort" => "email", "order" => ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "get", [0 => "sort"], "method", false, false, false, 17), "email")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "get", [0 => "order"], "method", false, false, false, 17), "asc")))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\" class=\"btn btn-outline-primary mx-1\">
            Trier par Email ";
        // line 18
        if ((0 === twig_compare((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 18, $this->source); })()), "email"))) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_user_getUsers", ["sort" => "login", "order" => ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "query", [], "any", false, false, false, 20), "get", [0 => "sort"], "method", false, false, false, 20), "login")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "query", [], "any", false, false, false, 20), "get", [0 => "order"], "method", false, false, false, 20), "asc")))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\" class=\"btn btn-outline-primary mx-1\">
            Trier par Login ";
        // line 21
        if ((0 === twig_compare((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 21, $this->source); })()), "login"))) {
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_user_postUsers");
        echo "\" class=\"btn btn-outline-info mx-3\">Créer un nouvel utilisateur</a>
    </div>
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Pseudo</th>
                <th scope=\"col\">Rôles</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 37
            echo "            <tr class=\"table-active\">
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "login", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 41)), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_user_getUsersById", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><i class=\"bi bi-eye btn btn-sm btn-success rounded\"></i></a>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_user_editUsers", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "            <tr>
                <td colspan=\"5\">Aucun utilisateur trouvé.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 52,  203 => 48,  194 => 44,  190 => 43,  185 => 41,  181 => 40,  177 => 39,  173 => 38,  170 => 37,  165 => 36,  149 => 23,  146 => 22,  138 => 21,  134 => 20,  131 => 19,  123 => 18,  119 => 17,  116 => 16,  108 => 15,  104 => 14,  98 => 11,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Utilisateurs{% endblock %}

{% block body %}

    <h1 class=\"mt-3 mx-3\">Utilisateurs</h1>

    {% include \"backoffice/fragments/_flash_message.html.twig\" %}

    {{ include('backoffice/user/_search.html.twig') }}

    <div class=\"text-end mb-3\">
        <a href=\"{{ path('app_backoffice_user_getUsers', { 'sort': 'id', 'order': (app.request.query.get('sort') == 'id' and app.request.query.get('order') == 'asc') ? 'desc' : 'asc' }) }}\" class=\"btn btn-outline-primary mx-1\">
            Trier par ID {% if sort == 'id' %}{% if order == 'asc' %}<i class=\"bi bi-caret-up-fill\"></i>{% else %}<i class=\"bi bi-caret-down-fill\"></i>{% endif %}{% endif %}
        </a>
        <a href=\"{{ path('app_backoffice_user_getUsers', { 'sort': 'email', 'order': (app.request.query.get('sort') == 'email' and app.request.query.get('order') == 'asc') ? 'desc' : 'asc' }) }}\" class=\"btn btn-outline-primary mx-1\">
            Trier par Email {% if sort == 'email' %}{% if order == 'asc' %}<i class=\"bi bi-caret-up-fill\"></i>{% else %}<i class=\"bi bi-caret-down-fill\"></i>{% endif %}{% endif %}
        </a>
        <a href=\"{{ path('app_backoffice_user_getUsers', { 'sort': 'login', 'order': (app.request.query.get('sort') == 'login' and app.request.query.get('order') == 'asc') ? 'desc' : 'asc' }) }}\" class=\"btn btn-outline-primary mx-1\">
            Trier par Login {% if sort == 'login' %}{% if order == 'asc' %}<i class=\"bi bi-caret-up-fill\"></i>{% else %}<i class=\"bi bi-caret-down-fill\"></i>{% endif %}{% endif %}
        </a>
        <a href=\"{{ path('app_backoffice_user_postUsers') }}\" class=\"btn btn-outline-info mx-3\">Créer un nouvel utilisateur</a>
    </div>
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Pseudo</th>
                <th scope=\"col\">Rôles</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr class=\"table-active\">
                <td>{{ user.id }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.login }}</td>
                <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
                <td>
                    <a href=\"{{ path('app_backoffice_user_getUsersById', {'id': user.id}) }}\"><i class=\"bi bi-eye btn btn-sm btn-success rounded\"></i></a>
                    <a href=\"{{ path('app_backoffice_user_editUsers', {'id': user.id}) }}\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">Aucun utilisateur trouvé.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "backoffice/user/index.html.twig", "/var/www/html/Protons/ODicey/projet-04-o-dicey-back/templates/backoffice/user/index.html.twig");
    }
}
