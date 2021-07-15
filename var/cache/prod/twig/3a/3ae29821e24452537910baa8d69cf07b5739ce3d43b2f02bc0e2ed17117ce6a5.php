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
class __TwigTemplate_e8e1ca036253a5aaa049302cd25c6847aa7418a2063b03b9b7743f99fafb1dde extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "mission/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div>
    <div class=\"pull-right\">
    </div>
    <h1>Détails de la mission : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "titre", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
    <hr />
    <table id=\"table\" class=\"table mt-3 table-hover table-borderless row-border\">
        <tr><td>Description de la mission : </td><td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "</td></tr>
        <tr><td>Nom de code de la mission : </td><td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "nomCode", [], "any", false, false, false, 18), "html", null, true);
        echo "</td></tr>
        <tr><td>Pays de la mission : </td><td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "pays", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
        echo "</td></tr>
        <tr><td>Spécialité de la mission : </td><td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "specialite", [], "any", false, false, false, 20), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td></tr>
        <tr><td>Statut de la mission : </td><td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "statut", [], "any", false, false, false, 21), "html", null, true);
        echo "</td></tr>
        <tr><td>Date de début de la mission : </td><td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "dateDebut", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true);
        echo "</td></tr>
        <tr><td>Date de fin de la mission : </td><td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "dateFin", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true);
        echo "</td></tr>
        <tr><td>Agents sur la mission : </td><td>";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "agent", [], "any", false, false, false, 24));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "contact", [], "any", false, false, false, 25));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "planque", [], "any", false, false, false, 26));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "Cible", [], "any", false, false, false, 31));
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-modification", ["id" => twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "id", [], "any", false, false, false, 40)]), "html", null, true);
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
        return array (  235 => 46,  225 => 40,  223 => 39,  213 => 36,  206 => 35,  202 => 34,  198 => 33,  192 => 32,  185 => 31,  177 => 30,  170 => 29,  162 => 28,  158 => 27,  151 => 26,  131 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  77 => 14,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mission/detail.html.twig", "C:\\xampp\\apps\\symfony\\templates\\mission\\detail.html.twig");
    }
}
