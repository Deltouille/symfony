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

/* agent/modification.html.twig */
class __TwigTemplate_af60e1948ab96ec3a4bbb2ca5131ad6016a6f87da10d2852eae9954f7fe5a18c extends \Twig\Template
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
            'JS' => [$this, 'block_JS'],
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "agent/modification.html.twig", 1);
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
        <h1>Modification de l'agent : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationAgent"] ?? null), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationAgent"] ?? null), "prenom", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
        <hr />
        ";
        // line 16
        echo twig_include($this->env, $context, "agent/formulaireAgent.html.twig");
        echo "
        <p>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent-details", ["id" => twig_get_attribute($this->env, $this->source, ($context["modificationAgent"] ?? null), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\">
        Retour au détail de l'agent : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationAgent"] ?? null), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationAgent"] ?? null), "prenom", [], "any", false, false, false, 20), "html", null, true);
        echo "
        </i></a>
        </p>
    </div>
</html>

";
        // line 26
        $this->displayBlock('JS', $context, $blocks);
        // line 29
        echo "
";
    }

    // line 26
    public function block_JS($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayParentBlock("JS", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "agent/modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  113 => 26,  108 => 29,  106 => 26,  95 => 20,  90 => 18,  85 => 16,  78 => 14,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agent/modification.html.twig", "C:\\xampp\\apps\\symfony\\templates\\agent\\modification.html.twig");
    }
}
