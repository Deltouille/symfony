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

/* contact/detail.html.twig */
class __TwigTemplate_9ad6200098b7269d036d543c9e3940e711e1ae82027a641a9791d191a8b9c5d1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "contact/detail.html.twig", 1);
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
    <h1>Détails du contact : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailContact"] ?? null), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailContact"] ?? null), "prenom", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
    <hr />
    <table id=\"table\" class=\"table mt-3 table-hover table-borderless row-border\">
        <tr><td>Code d'identification : </td><td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailContact"] ?? null), "nomCode", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
        <tr><td>Date de naissance : </td><td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailContact"] ?? null), "DateNaissance", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true);
        echo "</td>
        <tr><td>Nationnalité : </td><td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["detailContact"] ?? null), "nationnalite", [], "any", false, false, false, 19), "nomNatio", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
        <tr><td>Missions de l'agent : </td><td>";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailContact"] ?? null), "missions", [], "any", false, false, false, 20));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "titre", [], "any", false, false, false, 20), "html", null, true);
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
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact-modification", ["id" => twig_get_attribute($this->env, $this->source, ($context["detailContact"] ?? null), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\" class =\"btn btn-sm btn-success\" style=\"float: left;\">
            <i class =\"glyphicon glyphicon-edit\" >
            Modifier ce contact
            </i>
        </a>
</html>
";
    }

    public function getTemplateName()
    {
        return "contact/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 23,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  77 => 14,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/detail.html.twig", "C:\\xampp\\apps\\symfony\\templates\\contact\\detail.html.twig");
    }
}
