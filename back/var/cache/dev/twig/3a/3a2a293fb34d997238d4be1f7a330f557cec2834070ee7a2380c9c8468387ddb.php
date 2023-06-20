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

/* backoffice/game/_form.html.twig */
class __TwigTemplate_0deb650e48445d8af2f2af8c2a53bf315bb75fd434628bcf7dfbf3370e81f3da extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/game/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/game/_form.html.twig"));

        // line 1
        echo "<div class=\"container mx-4 mt-2 mb-2\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "

        ";
        // line 5
        echo "        ";
        if (twig_in_filter("backoffice", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "get", [0 => "_route"], "method", false, false, false, 5))) {
            // line 6
            echo "            <div style=\"display: none;\">
                ";
            // line 7
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "galleries", [], "any", false, false, false, 7), "setRendered", [], "method", false, false, false, 7);
            // line 8
            echo "            </div>
        ";
        }
        // line 10
        echo "        

        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'rest');
        echo "
        <button class=\"btn btn-outline-primary mb-3 mt-3 mx-3\">";
        // line 13
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 13, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>
        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backoffice_game_getGames");
        echo "\" class=\"btn btn-sm btn-outline-info mx-3 float-end\">Retour à la liste</a>
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_end');
        echo "
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/game/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  54 => 6,  51 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mx-4 mt-2 mb-2\">
    {{ form_start(form) }}

        {# If we create a new game via the backoffice, we can't add a picture because it is reserved for the DM of the game #}
        {% if \"backoffice\" in app.request.get(\"_route\") %}
            <div style=\"display: none;\">
                {% do form.galleries.setRendered() %}
            </div>
        {% endif %}
        

        {{ form_rest(form) }}
        <button class=\"btn btn-outline-primary mb-3 mt-3 mx-3\">{{ button_label|default('Sauvegarder') }}</button>
        <a href=\"{{ path('app_backoffice_game_getGames') }}\" class=\"btn btn-sm btn-outline-info mx-3 float-end\">Retour à la liste</a>
    {{ form_end(form) }}
</div>", "backoffice/game/_form.html.twig", "/var/www/html/Protons/ODicey/projet-04-o-dicey-back/templates/backoffice/game/_form.html.twig");
    }
}
