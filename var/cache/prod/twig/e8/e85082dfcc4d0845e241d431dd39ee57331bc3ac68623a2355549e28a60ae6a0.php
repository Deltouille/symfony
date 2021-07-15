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

/* specialite/detail.html.twig */
class __TwigTemplate_2c0158a5ed7977b0e73950488b7f10c01c61872a25c51152b851d8cde5624dcb extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "specialite/detail.html.twig", 1);
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
    <h1>Détails de la spécialité : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailSpecialite"] ?? null), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
    <hr />
    <table id=\"table\" class=\"table mt-3 table-hover table-borderless row-border\">
        <tr><td>Agents ayant cette spécialité : </td><td>";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailSpecialite"] ?? null), "agent", [], "any", false, false, false, 17));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent-details", ["id" => twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "nom", [], "any", false, false, false, 17), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "prenom", [], "any", false, false, false, 17), "html", null, true);
            echo "</a> <br/>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo " Aucun Agents ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td></tr>
    </table>
</div>
        <a href =\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specialite-modification", ["id" => twig_get_attribute($this->env, $this->source, ($context["detailSpecialite"] ?? null), "id", [], "any", false, false, false, 20)]), "html", null, true);
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
        return "specialite/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 20,  83 => 17,  77 => 14,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "specialite/detail.html.twig", "C:\\xampp\\apps\\symfony\\templates\\specialite\\detail.html.twig");
    }
}
