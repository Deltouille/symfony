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

/* agent/index.html.twig */
class __TwigTemplate_687f60fd4332992136bc875f26e2a86caa6b84c39ba9e90e7544f3b01312b13a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "agent/index.html.twig", 1);
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
    <h1>Listes des Agents
        <a href =\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent-ajout");
        echo "\" class =\"btn btn-sm btn-success\" style=\"float: right;\">
            <i class =\"glyphicon glyphicon-edit\" >
            Ajouter un Agent
            </i>
        </a>
    </h1>

    <hr />
    <table id=\"table\" class=\"table table-striped table-bordered\" style=\"width:100%\">
        <thead>
            <tr>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Nom</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Prénom</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Code d'identification</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Date de Naissance</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Nationnalité</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Spécialités</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeAgent"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 37
            echo "            <tr>
                <td style=\"text-align: center;\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "prenom", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "codeIdentification", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "DateNaissance", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agent"], "Nationnalite", [], "any", false, false, false, 42), "nomNatio", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["agent"], "specialites", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["specialite"]) {
                echo " -";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["specialite"], "nom", [], "any", false, false, false, 43), "html", null, true);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specialite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                <td style=\"text-align: center;\">
                    <a class=\"suppression btn btn-danger\" style=\"text-align: center; margin-bottom: 1em;\" data-playground-id=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
                        <i class =\"glyphicon glyphicon-chevron-left\"></i>
                        Supprimer l'agent
                    </a>
                    <p>
                    <a class=\"btn btn-primary\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent-details", ["id" => twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" style=\"text-align: center;\">
                        <i class =\"glyphicon glyphicon-chevron-left\"></i>
                        Details de l'agent
                    </a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
</div>
<script>
    \$(document).ready(function(){
        \$(\".suppression\").click(function(){
            var id = \$(this).attr(\"data-playground-id\");
            var url = '";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent-suppression", ["id" => 0]);
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
        return "agent/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 64,  164 => 57,  151 => 50,  143 => 45,  140 => 44,  129 => 43,  125 => 42,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  106 => 37,  102 => 36,  78 => 15,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agent/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\agent\\index.html.twig");
    }
}
