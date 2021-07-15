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
class __TwigTemplate_ef36ee6c439988267bc5b8245f895923b255aa159ed294f860b97648225d000f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "planque/detail.html.twig", 1);
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
    <h1>Détails de la planque : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "code", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
    <hr />
    <table id=\"table\" class=\"table mt-3 table-hover table-borderless row-border\">
        <tr><td>Adresse de la planque : </td><td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "adresse", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
        <tr><td>Code postal de la planque : </td><td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "CP", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
        <tr><td>Ville de la planque : </td><td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "CP", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
        <tr><td>Pays de la planque : </td><td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "pays", [], "any", false, false, false, 20), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
        <tr><td>Type de la planque : </td><td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "type", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
        <tr><td>Missions de la Planque : </td><td>";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "missions", [], "any", false, false, false, 22));
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planque-modification", ["id" => twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\" class =\"btn btn-sm btn-success\" style=\"float: left;\">
            <i class =\"glyphicon glyphicon-edit\" >
            Modifier cette planque
            </i>
        </a>
</html>
";
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
        return array (  125 => 25,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  77 => 14,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "planque/detail.html.twig", "C:\\xampp\\apps\\symfony\\templates\\planque\\detail.html.twig");
    }
}
