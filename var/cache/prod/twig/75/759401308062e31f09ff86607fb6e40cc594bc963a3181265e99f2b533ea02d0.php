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

/* contact/modification.html.twig */
class __TwigTemplate_7c93e58de7b3c50a116d9c9e9e6e6b3c2bfa805e6c8d32213eaa5c8d9593df12 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "contact/modification.html.twig", 1);
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
        <h1>Modification du contact : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationContact"] ?? null), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationContact"] ?? null), "prenom", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
        <hr />
        ";
        // line 16
        echo twig_include($this->env, $context, "contact/formulaireContact.html.twig");
        echo "
        <p>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact-details", ["id" => twig_get_attribute($this->env, $this->source, ($context["modificationContact"] ?? null), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\">
        Retour au détail du contact : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationContact"] ?? null), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationContact"] ?? null), "prenom", [], "any", false, false, false, 20), "html", null, true);
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
        return "contact/modification.html.twig";
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
        return new Source("", "contact/modification.html.twig", "C:\\xampp\\apps\\symfony\\templates\\contact\\modification.html.twig");
    }
}
