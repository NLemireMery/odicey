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

/* backoffice/mode/index.html.twig */
class __TwigTemplate_7960cc4e8c2b38858d88ef0745c91870308cc756b725ff07691222d1604ecef2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/mode/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/mode/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "backoffice/mode/index.html.twig", 1);
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

        echo "Modes de jeu";
        
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
    <h1 class=\"mt-3 mx-3\">Modes de jeu</h1>

    ";
        // line 9
        $this->loadTemplate("backoffice/fragments/_flash_message.html.twig", "backoffice/mode/index.html.twig", 9)->display($context);
        // line 10
        echo "
    ";
        // line 11
        echo twig_include($this->env, $context, "backoffice/mode/_search.html.twig");
        echo "

    <div class=\"text-end mb-3\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_mode_getModes", ["sort" => "id", "order" => ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", [0 => "sort"], "method", false, false, false, 14), "id")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", [0 => "order"], "method", false, false, false, 14), "asc")))) ? ("desc") : ("asc"))]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_mode_getModes", ["sort" => "name", "order" => ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "get", [0 => "sort"], "method", false, false, false, 17), "name")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "get", [0 => "order"], "method", false, false, false, 17), "asc")))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\" class=\"btn btn-outline-primary mx-1\">
            Trier par Name ";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_mode_postModes");
        echo "\" class=\"btn btn-outline-info mx-3\">Créer un nouveau mode de jeu</a>
    </div>
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Statistiques</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modes"]) || array_key_exists("modes", $context) ? $context["modes"] : (function () { throw new RuntimeError('Variable "modes" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
            // line 33
            echo "            <tr class=\"table-active\">
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["mode"], "jsonstats", [], "any", false, false, false, 37)) {
                // line 38
                echo "                        ";
                $context["truncatedJsonstats"] = (twig_slice($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["mode"], "jsonstats", [], "any", false, false, false, 38)), 0, 50) . (((1 === twig_compare(twig_length_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["mode"], "jsonstats", [], "any", false, false, false, 38))), 50))) ? ("...") : ("")));
                // line 39
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["truncatedJsonstats"]) || array_key_exists("truncatedJsonstats", $context) ? $context["truncatedJsonstats"] : (function () { throw new RuntimeError('Variable "truncatedJsonstats" does not exist.', 39, $this->source); })()), "html", null, true);
                echo "
                    ";
            } else {
                // line 41
                echo "                        N/A
                    ";
            }
            // line 43
            echo "                </td>
                <td>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_mode_getModesById", ["id" => twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><i class=\"bi bi-eye btn btn-sm btn-success rounded\"></i></a>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_mode_editModes", ["id" => twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "            <tr>
                <td colspan=\"5\">Aucun mode trouvé.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>

    <!-- pagination -->
        ";
        // line 58
        $this->loadTemplate("backoffice/fragments/_pagination.html.twig", "backoffice/mode/index.html.twig", 58)->display($context);
        // line 59
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/mode/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 59,  213 => 58,  207 => 54,  198 => 50,  189 => 46,  185 => 45,  181 => 43,  177 => 41,  171 => 39,  168 => 38,  166 => 37,  161 => 35,  157 => 34,  154 => 33,  149 => 32,  134 => 20,  131 => 19,  123 => 18,  119 => 17,  116 => 16,  108 => 15,  104 => 14,  98 => 11,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modes de jeu{% endblock %}

{% block body %}

    <h1 class=\"mt-3 mx-3\">Modes de jeu</h1>

    {% include \"backoffice/fragments/_flash_message.html.twig\" %}

    {{ include('backoffice/mode/_search.html.twig') }}

    <div class=\"text-end mb-3\">
        <a href=\"{{ path('app_backoffice_mode_getModes', { 'sort': 'id', 'order': (app.request.query.get('sort') == 'id' and app.request.query.get('order') == 'asc') ? 'desc' : 'asc' }) }}\" class=\"btn btn-outline-primary mx-1\">
            Trier par ID {% if sort == 'id' %}{% if order == 'asc' %}<i class=\"bi bi-caret-up-fill\"></i>{% else %}<i class=\"bi bi-caret-down-fill\"></i>{% endif %}{% endif %}
        </a>
        <a href=\"{{ path('app_backoffice_mode_getModes', { 'sort': 'name', 'order': (app.request.query.get('sort') == 'name' and app.request.query.get('order') == 'asc') ? 'desc' : 'asc' }) }}\" class=\"btn btn-outline-primary mx-1\">
            Trier par Name {% if sort == 'name' %}{% if order == 'asc' %}<i class=\"bi bi-caret-up-fill\"></i>{% else %}<i class=\"bi bi-caret-down-fill\"></i>{% endif %}{% endif %}
        </a>
        <a href=\"{{ path('app_backoffice_mode_postModes') }}\" class=\"btn btn-outline-info mx-3\">Créer un nouveau mode de jeu</a>
    </div>
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Statistiques</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for mode in modes %}
            <tr class=\"table-active\">
                <td>{{ mode.id }}</td>
                <td>{{ mode.name }}</td>
                <td>
                    {% if mode.jsonstats %}
                        {% set truncatedJsonstats = mode.jsonstats|json_encode|slice(0, 50) ~ (mode.jsonstats|json_encode|length > 50 ? '...' : '') %}
                        {{ truncatedJsonstats }}
                    {% else %}
                        N/A
                    {% endif %}
                </td>
                <td>
                    <a href=\"{{ path('app_backoffice_mode_getModesById', {'id': mode.id}) }}\"><i class=\"bi bi-eye btn btn-sm btn-success rounded\"></i></a>
                    <a href=\"{{ path('app_backoffice_mode_editModes', {'id': mode.id}) }}\"><i class=\"bi bi-pencil btn btn-sm btn-warning rounded\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">Aucun mode trouvé.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <!-- pagination -->
        {% include 'backoffice/fragments/_pagination.html.twig' %}

{% endblock %}
", "backoffice/mode/index.html.twig", "/var/www/html/Protons/ODicey/projet-04-o-dicey-back/templates/backoffice/mode/index.html.twig");
    }
}
