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
class __TwigTemplate_3feb801c9d0a6cc20f2358f39225af6b01c262fbe1caf400c1047ee963fc92b7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "mission/index.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable(($context["listeMissions"] ?? null));
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
        return array (  185 => 71,  176 => 64,  164 => 58,  161 => 57,  152 => 52,  150 => 51,  145 => 49,  141 => 48,  137 => 47,  133 => 46,  129 => 45,  125 => 44,  121 => 43,  117 => 42,  114 => 41,  110 => 40,  91 => 23,  81 => 17,  79 => 16,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mission/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\mission\\index.html.twig");
    }
}
