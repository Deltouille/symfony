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

/* agent/ajout.html.twig */
class __TwigTemplate_e5fd39bf442806da20e58d79f24be8711e2b6c17d9138ce78c14136d4e1dec05 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "agent/ajout.html.twig", 1);
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
        <h1>Ajout d'un agent</h1>
        <hr />
        ";
        // line 16
        echo twig_include($this->env, $context, "agent/formulaireAgent.html.twig");
        echo "
        
        <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\">Retour à la liste des cibles</i>
        </a>
    </div>
</html>

";
        // line 24
        $this->displayBlock('JS', $context, $blocks);
        // line 27
        echo "
";
    }

    // line 24
    public function block_JS($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $this->displayParentBlock("JS", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "agent/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  101 => 24,  96 => 27,  94 => 24,  85 => 18,  80 => 16,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agent/ajout.html.twig", "C:\\xampp\\apps\\symfony\\templates\\agent\\ajout.html.twig");
    }
}
