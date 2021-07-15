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

/* pays/ajout.html.twig */
class __TwigTemplate_b752c4be6d6aa3352092734c133a440f038a9be0aa822b2a4db3bf6896422d31 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "pays/ajout.html.twig", 1);
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
        <h1>Ajout d'un Pays</h1>
        <hr />
        ";
        // line 16
        echo twig_include($this->env, $context, "pays/formulairePays.html.twig");
        echo "
        

        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pays");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\">Retour à la liste des Pays</i>
        </a>
    </div>
</html>

";
        // line 25
        $this->displayBlock('JS', $context, $blocks);
        // line 28
        echo "
";
    }

    // line 25
    public function block_JS($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $this->displayParentBlock("JS", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "pays/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  102 => 25,  97 => 28,  95 => 25,  86 => 19,  80 => 16,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pays/ajout.html.twig", "C:\\xampp\\apps\\symfony\\templates\\pays\\ajout.html.twig");
    }
}
