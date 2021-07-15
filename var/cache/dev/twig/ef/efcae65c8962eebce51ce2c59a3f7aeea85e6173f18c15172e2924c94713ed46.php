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

/* mission/detail.html.twig */
class __TwigTemplate_226e71404a3aa4ed174592a92a5c0810a7cd007a310cd9c15f33d7115bd4097b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/detail.html.twig"));

        $this->parent = $this->loadTemplate("basetemplate.html.twig", "mission/detail.html.twig", 1);
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
    <h1>Détails de la mission : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
    <hr />
    <table id=\"table\" class=\"table mt-3 table-hover table-borderless row-border\">
        <tr><td>Description de la mission : </td><td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "</td></tr>
        <tr><td>Nom de code de la mission : </td><td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 18, $this->source); })()), "nomCode", [], "any", false, false, false, 18), "html", null, true);
        echo "</td></tr>
        <tr><td>Pays de la mission : </td><td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 19, $this->source); })()), "pays", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
        echo "</td></tr>
        <tr><td>Spécialité de la mission : </td><td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 20, $this->source); })()), "specialite", [], "any", false, false, false, 20), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td></tr>
        <tr><td>Statut de la mission : </td><td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 21, $this->source); })()), "statut", [], "any", false, false, false, 21), "html", null, true);
        echo "</td></tr>
        <tr><td>Date de début de la mission : </td><td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 22, $this->source); })()), "dateDebut", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true);
        echo "</td></tr>
        <tr><td>Date de fin de la mission : </td><td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 23, $this->source); })()), "dateFin", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true);
        echo "</td></tr>
        <tr><td>Agents sur la mission : </td><td>";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 24, $this->source); })()), "agent", [], "any", false, false, false, 24));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "prenom", [], "any", false, false, false, 24), "html", null, true);
            echo "<br/>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo " Aucun agent ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td></tr>
        <tr><td>Contacts sur la mission : </td><td>";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 25, $this->source); })()), "contact", [], "any", false, false, false, 25));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 25), "html", null, true);
            echo "<br/>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo " Aucun contact ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td></tr>
        <tr><td>Planques disponible : </td><td>";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 26, $this->source); })()), "planque", [], "any", false, false, false, 26));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["planque"]) {
            echo " 
                Code de la planque : ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "code", [], "any", false, false, false, 27), "html", null, true);
            echo " <br/> 
                Adresse : ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "adresse", [], "any", false, false, false, 28), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "CP", [], "any", false, false, false, 28), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "ville", [], "any", false, false, false, 28), "html", null, true);
            echo " <br/>
                Type de planque : ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "type", [], "any", false, false, false, 29), "html", null, true);
            echo "
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo " Aucune planque ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td></tr>
        <tr><td>Cibles de la mission : </td><td>";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 31, $this->source); })()), "Cible", [], "any", false, false, false, 31));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cible"]) {
            echo " 
                Identité : ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "prenom", [], "any", false, false, false, 32), "html", null, true);
            echo "<br/>
                Nationnalité : ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cible"], "nationnalite", [], "any", false, false, false, 33), "nomNatio", [], "any", false, false, false, 33), "html", null, true);
            echo "<br/>
                Nom de Code : ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "nomCode", [], "any", false, false, false, 34), "html", null, true);
            echo "<br/>
                Née le : ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "DateNaissance", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
            echo "<br/><br/>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo " Aucune Cible ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cible'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td></tr>
    </table>
</div>
    ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "        <a href =\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-modification", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["detailMission"]) || array_key_exists("detailMission", $context) ? $context["detailMission"] : (function () { throw new RuntimeError('Variable "detailMission" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class =\"btn btn-sm btn-success\" style=\"float: left;\">
            <i class =\"glyphicon glyphicon-edit\" >
            Modifier cette mission
            </i>
        </a>
    ";
        }
        // line 46
        echo "</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mission/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 46,  267 => 40,  265 => 39,  255 => 36,  248 => 35,  244 => 34,  240 => 33,  234 => 32,  227 => 31,  219 => 30,  212 => 29,  204 => 28,  200 => 27,  193 => 26,  173 => 25,  153 => 24,  149 => 23,  145 => 22,  141 => 21,  137 => 20,  133 => 19,  129 => 18,  125 => 17,  119 => 14,  114 => 11,  104 => 10,  91 => 7,  81 => 6,  70 => 3,  60 => 2,  37 => 1,);
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
    <h1>Détails de la mission : {{ detailMission.titre }}</h1>
    <hr />
    <table id=\"table\" class=\"table mt-3 table-hover table-borderless row-border\">
        <tr><td>Description de la mission : </td><td>{{ detailMission.description }}</td></tr>
        <tr><td>Nom de code de la mission : </td><td>{{ detailMission.nomCode }}</td></tr>
        <tr><td>Pays de la mission : </td><td>{{ detailMission.pays.nom }}</td></tr>
        <tr><td>Spécialité de la mission : </td><td>{{ detailMission.specialite.nom }}</td></tr>
        <tr><td>Statut de la mission : </td><td>{{ detailMission.statut }}</td></tr>
        <tr><td>Date de début de la mission : </td><td>{{ detailMission.dateDebut|date('Y-m-d') }}</td></tr>
        <tr><td>Date de fin de la mission : </td><td>{{ detailMission.dateFin|date('Y-m-d') }}</td></tr>
        <tr><td>Agents sur la mission : </td><td>{% for agent in detailMission.agent %} - {{ agent.nom }} {{ agent.prenom }}<br/>{% else %} Aucun agent {% endfor %}</td></tr>
        <tr><td>Contacts sur la mission : </td><td>{% for contact in detailMission.contact %} - {{ contact.nom }} {{ contact.prenom }}<br/>{% else %} Aucun contact {% endfor %}</td></tr>
        <tr><td>Planques disponible : </td><td>{% for planque in detailMission.planque %} 
                Code de la planque : {{ planque.code }} <br/> 
                Adresse : {{ planque.adresse }}, {{ planque.CP }}, {{ planque.ville }} <br/>
                Type de planque : {{ planque.type }}
            {% else %} Aucune planque {% endfor %}</td></tr>
        <tr><td>Cibles de la mission : </td><td>{% for cible in detailMission.Cible %} 
                Identité : {{ cible.nom }} {{ cible.prenom }}<br/>
                Nationnalité : {{ cible.nationnalite.nomNatio }}<br/>
                Nom de Code : {{ cible.nomCode }}<br/>
                Née le : {{ cible.DateNaissance|date('Y-m-d') }}<br/><br/>
            {% else %} Aucune Cible {% endfor %}</td></tr>
    </table>
</div>
    {% if is_granted('ROLE_ADMIN') %}
        <a href =\"{{ path('mission-modification', {id: detailMission.id}) }}\" class =\"btn btn-sm btn-success\" style=\"float: left;\">
            <i class =\"glyphicon glyphicon-edit\" >
            Modifier cette mission
            </i>
        </a>
    {% endif %}
</html>
{% endblock %}", "mission/detail.html.twig", "C:\\xampp\\apps\\symfony\\templates\\mission\\detail.html.twig");
    }
}
