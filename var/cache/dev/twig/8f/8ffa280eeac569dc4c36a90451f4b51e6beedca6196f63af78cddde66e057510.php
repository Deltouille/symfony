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

/* planque/index.html.twig */
class __TwigTemplate_2d701c5a799ba586daa6aba0672b7bede4257b3e327d944dd2c8ab2814492702 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planque/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planque/index.html.twig"));

        $this->parent = $this->loadTemplate("basetemplate.html.twig", "planque/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "
";
        
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div>
    <div class=\"pull-right\">
    </div>
    <h1>Listes des Planques
        <a href =\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planque-ajout");
        echo "\" class =\"btn btn-sm btn-success\" style=\"float: right;\">
            <i class =\"glyphicon glyphicon-edit\" >
            Ajouter une Planque
            </i>
        </a>
    </h1>

    <hr />
    ";
        // line 24
        echo "    <table id=\"table\" class=\"table table-striped table-bordered\" style=\"width:100%\">
    ";
        // line 26
        echo "        <thead>
            <tr>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Code</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Adresse</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Ville</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Code Postal</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Pays</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Type</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Action</th>
            </tr>
        </thead>
        ";
        // line 38
        echo "        <tbody>
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listePlanque"]) || array_key_exists("listePlanque", $context) ? $context["listePlanque"] : (function () { throw new RuntimeError('Variable "listePlanque" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["planque"]) {
            // line 40
            echo "            <tr>
                <td style=\"text-align: center;\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "code", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "adresse", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "ville", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "CP", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["planque"], "pays", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "type", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">
                    <a class=\"suppression btn btn-danger\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planque-suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["planque"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" style=\"text-align: center; margin-bottom: 1em;\" data-playground-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                        <i class =\"glyphicon glyphicon-chevron-left\"></i>
                        Supprimer la planque
                    </a>
                    <p>
                    <a class=\"btn btn-primary\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planque-details", ["id" => twig_get_attribute($this->env, $this->source, $context["planque"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" style=\"text-align: center;\">
                        <i class =\"glyphicon glyphicon-chevron-left\"></i>
                        Details de la planque
                    </a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>
</div>
<script>
    \$(document).ready(function(){
        \$(\".suppression\").click(function(){
            var id = \$(this).attr(\"data-playground-id\");
            var url = '";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planque-suppression", ["id" => 0]);
        echo "';
            var url = url.replace(\"0\",id);
            \$.ajax({
                url: url,
                type: 'delete',
                success:function(data){
                    console.log(data)
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            });
            \$(this).closest(\"tr\").hide();
        });
    });
</script>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "planque/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 67,  205 => 60,  192 => 53,  182 => 48,  177 => 46,  173 => 45,  169 => 44,  165 => 43,  161 => 42,  157 => 41,  154 => 40,  150 => 39,  147 => 38,  134 => 26,  131 => 24,  120 => 15,  114 => 11,  104 => 10,  91 => 7,  81 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basetemplate.html.twig\" %}
{% block title%}

{% endblock %}

{% block stylesheets %}
    {{ parent() }}
{% endblock %}

{% block body %}
<div>
    <div class=\"pull-right\">
    </div>
    <h1>Listes des Planques
        <a href =\"{{ path('planque-ajout')}}\" class =\"btn btn-sm btn-success\" style=\"float: right;\">
            <i class =\"glyphicon glyphicon-edit\" >
            Ajouter une Planque
            </i>
        </a>
    </h1>

    <hr />
    {# Tableau des différentes planque #}
    <table id=\"table\" class=\"table table-striped table-bordered\" style=\"width:100%\">
    {# En-tête des champs pour les différentes planque #}
        <thead>
            <tr>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Code</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Adresse</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Ville</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Code Postal</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Pays</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Type</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Action</th>
            </tr>
        </thead>
        {# On parcours l'array envoyer par le controller pour remplir le tableau #}
        <tbody>
            {% for planque in listePlanque %}
            <tr>
                <td style=\"text-align: center;\">{{ planque.code }}</td>
                <td style=\"text-align: center;\">{{ planque.adresse }}</td>
                <td style=\"text-align: center;\">{{ planque.ville }}</td>
                <td style=\"text-align: center;\">{{ planque.CP }}</td>
                <td style=\"text-align: center;\">{{ planque.pays.nom }}</td>
                <td style=\"text-align: center;\">{{ planque.type }}</td>
                <td style=\"text-align: center;\">
                    <a class=\"suppression btn btn-danger\" href=\"{{ path('planque-suppression', {id: planque.id}) }}\" style=\"text-align: center; margin-bottom: 1em;\" data-playground-id=\"{{ planque.id }}\">
                        <i class =\"glyphicon glyphicon-chevron-left\"></i>
                        Supprimer la planque
                    </a>
                    <p>
                    <a class=\"btn btn-primary\" href=\"{{ path('planque-details', {id: planque.id}) }}\" style=\"text-align: center;\">
                        <i class =\"glyphicon glyphicon-chevron-left\"></i>
                        Details de la planque
                    </a>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
<script>
    \$(document).ready(function(){
        \$(\".suppression\").click(function(){
            var id = \$(this).attr(\"data-playground-id\");
            var url = '{{path('planque-suppression', { 'id': 0}) }}';
            var url = url.replace(\"0\",id);
            \$.ajax({
                url: url,
                type: 'delete',
                success:function(data){
                    console.log(data)
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            });
            \$(this).closest(\"tr\").hide();
        });
    });
</script>
</html>
{% endblock %}", "planque/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\planque\\index.html.twig");
    }
}
