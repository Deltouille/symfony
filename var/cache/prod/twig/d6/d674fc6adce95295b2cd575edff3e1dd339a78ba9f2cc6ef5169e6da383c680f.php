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

/* mission/ajout.html.twig */
class __TwigTemplate_04485d89127c93764df66e8227ca2ea390f03fc0d4a020fccfff5ab0b9e066d4 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "mission/ajout.html.twig", 1);
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
        <h1>Ajout d'une mission</h1>
        <hr />
        ";
        // line 16
        echo twig_include($this->env, $context, "mission/formulaireMission.html.twig");
        echo "
        
        <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\">Retour à la liste des missions</i>
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
        return "mission/ajout.html.twig";
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
        return new Source("", "mission/ajout.html.twig", "C:\\xampp\\apps\\symfony\\templates\\mission\\ajout.html.twig");
    }
}
