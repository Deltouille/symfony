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

/* basetemplate.html.twig */
class __TwigTemplate_bb7f8bacc90aa9d363c2ade44020356af7999c24071c6def981c880522b3ac84 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'JS' => [$this, 'block_JS'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
<div class=\"w3-sidebar w3-light-grey w3-bar-block\" style=\"width:10%;\">
    ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 21
            echo "    <h3 class=\"w3-bar-item\" style=\"text-align: center;\">Menu</h3>
  
    <a class=\"btn btn-primary w3-bar-item w3-button\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"text-align: center; background-color: blue; color: white; margin-bottom: 1em;\">
        Déconnexion
    </a>
  <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission");
            echo "\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Missions</a>
  ";
        }
        // line 28
        echo "  ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 29
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent");
            echo "\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Agents</a>
    <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Contacts</a>
    <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cible");
            echo "\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Cibles</a>
    <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planque");
            echo "\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Planques</a>
    <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nationnalite");
            echo "\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Nationnalitées</a>
    <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pays");
            echo "\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Pays</a>
    <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specialite");
            echo "\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Specialitées</a>
  ";
        }
        // line 37
        echo "</div>

<div class=\"w3-container\" style=\"margin-left:10%; margin-right: 10%\">
";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 43
        $this->displayBlock('JS', $context, $blocks);
        // line 50
        echo "</div>    
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
            <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/fh-3.1.9/r-2.2.9/sc-2.0.4/sp-1.3.0/datatables.min.css\"/>
            <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/fh-3.1.9/r-2.2.9/sc-2.0.4/sp-1.3.0/datatables.min.js\"></script>
            <script type=\"text/javascript\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js\"></script>
        ";
    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "
";
    }

    // line 43
    public function block_JS($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    <script type=\"text/javascript\">
        \$(document).ready( function () {
            \$('#table').DataTable();
        } );
    </script>
";
    }

    public function getTemplateName()
    {
        return "basetemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 44,  162 => 43,  157 => 41,  153 => 40,  146 => 14,  135 => 7,  131 => 6,  124 => 5,  117 => 50,  115 => 43,  113 => 40,  108 => 37,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  78 => 29,  75 => 28,  70 => 26,  64 => 23,  60 => 21,  58 => 20,  53 => 17,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basetemplate.html.twig", "C:\\xampp\\apps\\symfony\\templates\\basetemplate.html.twig");
    }
}
