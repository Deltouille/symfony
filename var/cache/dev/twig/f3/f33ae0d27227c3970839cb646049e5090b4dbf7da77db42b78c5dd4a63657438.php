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

/* mission/index.html.twig */
class __TwigTemplate_d4c447c0f76be3ccf9a20f70d36f9643f8faabbd2836a3f44f3a81490e04e6b6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/index.html.twig"));

        $this->parent = $this->loadTemplate("basetemplate.html.twig", "mission/index.html.twig", 1);
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
    
    <h1>Listes des Missions
    ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "    <a href =\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-ajout");
            echo "\" class =\"btn btn-sm btn-success\" style=\"float: right;\">
        <i class =\"glyphicon glyphicon-edit\" >
        Ajouter une mission
        </i>
    </a>
    ";
        }
        // line 23
        echo "    </h1>
    <hr />
    <table id=\"table\" class=\"table table-striped table-bordered\" style=\"width:100%; margin-left:auto;margin-right:auto;\">
        <thead>
            <tr>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Titre</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Description</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Nom de code</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Pays</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Statut</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Spécialité</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Date de Début</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Date de Fin</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMissions"]) || array_key_exists("listeMissions", $context) ? $context["listeMissions"] : (function () { throw new RuntimeError('Variable "listeMissions" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 41
            echo "            <tr>
                <td style=\"text-align: center;\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "titre", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "description", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "nomCode", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mission"], "pays", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "statut", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mission"], "Specialite", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "dateDebut", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "dateFin", [], "any", false, false, false, 49), "Y-m-d"), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">
                    ";
            // line 51
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 52
                echo "                    <a class=\"suppression btn btn-danger\" style=\"text-align: center; margin-bottom: 1em;\" data-playground-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 52), "html", null, true);
                echo "\">
                        <i class =\"glyphicon glyphicon-chevron-left\"></i>
                        Supprimer la mission
                    </a>
                    ";
            }
            // line 57
            echo "                    <p>
                    <a class=\"btn btn-primary\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" style=\"text-align: center;\">
                        Details de la mission 
                    </a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>
</div>
<script>
    \$(document).ready(function(){
        \$(\".suppression\").click(function(){
            var id = \$(this).attr(\"data-playground-id\");
            var url = '";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-suppression", ["id" => 0]);
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
        return "mission/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 71,  218 => 64,  206 => 58,  203 => 57,  194 => 52,  192 => 51,  187 => 49,  183 => 48,  179 => 47,  175 => 46,  171 => 45,  167 => 44,  163 => 43,  159 => 42,  156 => 41,  152 => 40,  133 => 23,  123 => 17,  121 => 16,  114 => 11,  104 => 10,  91 => 7,  81 => 6,  70 => 3,  60 => 2,  37 => 1,);
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
    
    <h1>Listes des Missions
    {% if is_granted('ROLE_ADMIN') %}
    <a href =\"{{ path('mission-ajout')}}\" class =\"btn btn-sm btn-success\" style=\"float: right;\">
        <i class =\"glyphicon glyphicon-edit\" >
        Ajouter une mission
        </i>
    </a>
    {% endif %}
    </h1>
    <hr />
    <table id=\"table\" class=\"table table-striped table-bordered\" style=\"width:100%; margin-left:auto;margin-right:auto;\">
        <thead>
            <tr>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Titre</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Description</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Nom de code</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Pays</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Statut</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Spécialité</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Date de Début</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Date de Fin</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Action</th>
            </tr>
        </thead>
        <tbody>
            {% for mission in listeMissions %}
            <tr>
                <td style=\"text-align: center;\">{{ mission.titre }}</td>
                <td style=\"text-align: center;\">{{ mission.description }}</td>
                <td style=\"text-align: center;\">{{ mission.nomCode }}</td>
                <td style=\"text-align: center;\">{{ mission.pays.nom }}</td>
                <td style=\"text-align: center;\">{{ mission.statut }}</td>
                <td style=\"text-align: center;\">{{ mission.Specialite.nom }}</td>
                <td style=\"text-align: center;\">{{ mission.dateDebut|date('Y-m-d') }}</td>
                <td style=\"text-align: center;\">{{ mission.dateFin|date('Y-m-d') }}</td>
                <td style=\"text-align: center;\">
                    {% if is_granted('ROLE_ADMIN') %}
                    <a class=\"suppression btn btn-danger\" style=\"text-align: center; margin-bottom: 1em;\" data-playground-id=\"{{ mission.id }}\">
                        <i class =\"glyphicon glyphicon-chevron-left\"></i>
                        Supprimer la mission
                    </a>
                    {% endif %}
                    <p>
                    <a class=\"btn btn-primary\" href=\"{{ path('mission-details', {id: mission.id}) }}\" style=\"text-align: center;\">
                        Details de la mission 
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
            var url = '{{path('mission-suppression', { 'id': 0}) }}';
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
{% endblock %}", "mission/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\mission\\index.html.twig");
    }
}
