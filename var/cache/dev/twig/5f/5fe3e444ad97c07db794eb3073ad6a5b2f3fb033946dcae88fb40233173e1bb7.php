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
class __TwigTemplate_2529fe4aa53e65d4b30b1e563b0000d849d4481fa680fdc5f2ab31b5427b954c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basetemplate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basetemplate.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_JS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JS"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JS"));

        // line 44
        echo "    <script type=\"text/javascript\">
        \$(document).ready( function () {
            \$('#table').DataTable();
        } );
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  220 => 44,  210 => 43,  199 => 41,  189 => 40,  176 => 14,  165 => 7,  155 => 6,  136 => 5,  123 => 50,  121 => 43,  119 => 40,  114 => 37,  109 => 35,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  84 => 29,  81 => 28,  76 => 26,  70 => 23,  66 => 21,  64 => 20,  59 => 17,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset ('css/style.css') }}\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
            <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/fh-3.1.9/r-2.2.9/sc-2.0.4/sp-1.3.0/datatables.min.css\"/>
            <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/fh-3.1.9/r-2.2.9/sc-2.0.4/sp-1.3.0/datatables.min.js\"></script>
            <script type=\"text/javascript\" href=\"{{ asset ('js/jquery.min.js') }}\"></script>
            <script type=\"text/javascript\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js\"></script>
        {% endblock %}
    </head>
    <body>
<div class=\"w3-sidebar w3-light-grey w3-bar-block\" style=\"width:10%;\">
    {% if is_granted('ROLE_USER') %}
    <h3 class=\"w3-bar-item\" style=\"text-align: center;\">Menu</h3>
  
    <a class=\"btn btn-primary w3-bar-item w3-button\" href=\"{{ path('app_logout') }}\" style=\"text-align: center; background-color: blue; color: white; margin-bottom: 1em;\">
        Déconnexion
    </a>
  <a href=\"{{ path('mission') }}\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Missions</a>
  {% endif %}
  {% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ path('agent') }}\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Agents</a>
    <a href=\"{{ path('contact') }}\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Contacts</a>
    <a href=\"{{ path('cible') }}\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Cibles</a>
    <a href=\"{{ path('planque') }}\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Planques</a>
    <a href=\"{{ path('nationnalite') }}\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Nationnalitées</a>
    <a href=\"{{ path('pays') }}\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Pays</a>
    <a href=\"{{ path('specialite') }}\" class=\"w3-bar-item w3-button\" style=\"margin-bottom: 1em;\">Liste des Specialitées</a>
  {% endif %}
</div>

<div class=\"w3-container\" style=\"margin-left:10%; margin-right: 10%\">
{% block body %}

{% endblock %}
{% block JS %}
    <script type=\"text/javascript\">
        \$(document).ready( function () {
            \$('#table').DataTable();
        } );
    </script>
{% endblock %}
</div>    
    </body>
</html>
", "basetemplate.html.twig", "C:\\xampp\\apps\\symfony\\templates\\basetemplate.html.twig");
    }
}
