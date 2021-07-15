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

/* planque/detail.html.twig */
class __TwigTemplate_22b3aa575d8922e7a0c4f3f3fe5e64eb2457709c685df1fa62371a79be9276c1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basetemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planque/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planque/detail.html.twig"));

        $this->parent = $this->loadTemplate("basetemplate.html.twig", "planque/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div>
    <div class=\"pull-right\">
    </div>
    <h1>Détails de la planque : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detailPlanque"]) || array_key_exists("detailPlanque", $context) ? $context["detailPlanque"] : (function () { throw new RuntimeError('Variable "detailPlanque" does not exist.', 14, $this->source); })()), "code", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
    <hr />
    <table id=\"table\" class=\"table mt-3 table-hover table-borderless row-border\">
        <tr><td>Adresse de la planque : </td><td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detailPlanque"]) || array_key_exists("detailPlanque", $context) ? $context["detailPlanque"] : (function () { throw new RuntimeError('Variable "detailPlanque" does not exist.', 17, $this->source); })()), "adresse", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
        <tr><td>Code postal de la planque : </td><td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detailPlanque"]) || array_key_exists("detailPlanque", $context) ? $context["detailPlanque"] : (function () { throw new RuntimeError('Variable "detailPlanque" does not exist.', 18, $this->source); })()), "CP", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
        <tr><td>Ville de la planque : </td><td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detailPlanque"]) || array_key_exists("detailPlanque", $context) ? $context["detailPlanque"] : (function () { throw new RuntimeError('Variable "detailPlanque" does not exist.', 19, $this->source); })()), "CP", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
        <tr><td>Pays de la planque : </td><td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["detailPlanque"]) || array_key_exists("detailPlanque", $context) ? $context["detailPlanque"] : (function () { throw new RuntimeError('Variable "detailPlanque" does not exist.', 20, $this->source); })()), "pays", [], "any", false, false, false, 20), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
        <tr><td>Type de la planque : </td><td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detailPlanque"]) || array_key_exists("detailPlanque", $context) ? $context["detailPlanque"] : (function () { throw new RuntimeError('Variable "detailPlanque" does not exist.', 21, $this->source); })()), "type", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
        <tr><td>Missions de la Planque : </td><td>";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["detailPlanque"]) || array_key_exists("detailPlanque", $context) ? $context["detailPlanque"] : (function () { throw new RuntimeError('Variable "detailPlanque" does not exist.', 22, $this->source); })()), "missions", [], "any", false, false, false, 22));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "titre", [], "any", false, false, false, 22), "html", null, true);
            echo "</a> <br/>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo " Aucune mission ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td></tr>
    </table>
</div>
        <a href =\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planque-modification", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["detailPlanque"]) || array_key_exists("detailPlanque", $context) ? $context["detailPlanque"] : (function () { throw new RuntimeError('Variable "detailPlanque" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\" class =\"btn btn-sm btn-success\" style=\"float: left;\">
            <i class =\"glyphicon glyphicon-edit\" >
            Modifier cette planque
            </i>
        </a>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "planque/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 25,  145 => 22,  141 => 21,  137 => 20,  133 => 19,  129 => 18,  125 => 17,  119 => 14,  114 => 11,  104 => 10,  91 => 7,  81 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basetemplate.html.twig\" %}
{% block title%}

{% endblock %}

{% block stylesheets %}
    {{ parent() }}
{% endblock %}

{% block body %}
<div>
    <div class=\"pull-right\">
    </div>
    <h1>Détails de la planque : {{ detailPlanque.code }}</h1>
    <hr />
    <table id=\"table\" class=\"table mt-3 table-hover table-borderless row-border\">
        <tr><td>Adresse de la planque : </td><td>{{ detailPlanque.adresse }}</td>
        <tr><td>Code postal de la planque : </td><td>{{ detailPlanque.CP }}</td>
        <tr><td>Ville de la planque : </td><td>{{ detailPlanque.CP }}</td>
        <tr><td>Pays de la planque : </td><td>{{ detailPlanque.pays.nom }}</td>
        <tr><td>Type de la planque : </td><td>{{ detailPlanque.type }}</td>
        <tr><td>Missions de la Planque : </td><td>{% for mission in detailPlanque.missions %} - <a href=\"{{ path('mission-details', {id: mission.id}) }}\">{{ mission.titre }}</a> <br/>{% else %} Aucune mission {% endfor %}</td></tr>
    </table>
</div>
        <a href =\"{{ path('planque-modification', {id: detailPlanque.id}) }}\" class =\"btn btn-sm btn-success\" style=\"float: left;\">
            <i class =\"glyphicon glyphicon-edit\" >
            Modifier cette planque
            </i>
        </a>
</html>
{% endblock %}", "planque/detail.html.twig", "C:\\xampp\\apps\\symfony\\templates\\planque\\detail.html.twig");
    }
}
