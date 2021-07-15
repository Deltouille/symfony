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

/* cible/detail.html.twig */
class __TwigTemplate_c3b50ac9f958b7e0d1ca8302096973f3a2080ffd4cb703ec38fa3733fc68e37c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "cible/detail.html.twig", 1);
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
    <h1>Détails de la cible : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailCible"] ?? null), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailCible"] ?? null), "prenom", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
    <hr />
    <table id=\"table\" class=\"table mt-3 table-hover table-borderless row-border\">
        <tr><td>Nom de code de la cible : </td><td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailCible"] ?? null), "nomCode", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
        <tr><td>Date de naissance : </td><td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailCible"] ?? null), "DateNaissance", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true);
        echo "</td>
        ";
        // line 19
        if ((null === twig_get_attribute($this->env, $this->source, ($context["detailCible"] ?? null), "nationnalite", [], "any", false, false, false, 19))) {
            // line 20
            echo "            <tr><td>Nationnalité : </td><td>Aucune nationnalité attribuée</td></tr>
        ";
        } else {
            // line 22
            echo "            <tr><td>Nationnalité : </td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["detailCible"] ?? null), "nationnalite", [], "any", false, false, false, 22), "nomNatio", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
        ";
        }
        // line 24
        echo "        <tr><td>Missions de la cible : </td><td>";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailCible"] ?? null), "missions", [], "any", false, false, false, 24));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "titre", [], "any", false, false, false, 24), "html", null, true);
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
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cible-modification", ["id" => twig_get_attribute($this->env, $this->source, ($context["detailCible"] ?? null), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\" class =\"btn btn-sm btn-success\" style=\"float: left;\">
            <i class =\"glyphicon glyphicon-edit\" >
            Modifier cette cible
            </i>
        </a>

</html>
";
    }

    public function getTemplateName()
    {
        return "cible/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 27,  105 => 24,  99 => 22,  95 => 20,  93 => 19,  89 => 18,  85 => 17,  77 => 14,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cible/detail.html.twig", "C:\\xampp\\apps\\symfony\\templates\\cible\\detail.html.twig");
    }
}
