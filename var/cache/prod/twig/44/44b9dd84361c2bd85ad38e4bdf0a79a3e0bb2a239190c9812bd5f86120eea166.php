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

/* cible/index.html.twig */
class __TwigTemplate_f80f94a697e064376af3c3049be665093998bc4c0631f133b06e5153a78c9920 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "cible/index.html.twig", 1);
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
    <h1>Listes des Contacts
        <a href =\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cible-ajout");
        echo "\" class =\"btn btn-sm btn-success\" style=\"float: right;\">
            <i class =\"glyphicon glyphicon-edit\" >
            Ajouter une Cible
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
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeCible"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cible"]) {
            // line 36
            echo "            <tr>
                <td style=\"text-align: center;\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "nom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "prenom", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "nomCode", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "DateNaissance", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true);
            echo "</td>
                ";
            // line 41
            if ((null === twig_get_attribute($this->env, $this->source, $context["cible"], "nationnalite", [], "any", false, false, false, 41))) {
                // line 42
                echo "                    <td style=\"text-align: center;\">Aucune nationnalité attribuée</td>
                ";
            } else {
                // line 44
                echo "                    <td style=\"text-align: center;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cible"], "nationnalite", [], "any", false, false, false, 44), "nomNatio", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                ";
            }
            // line 46
            echo "                <td style=\"text-align: center;\">
                    <a class=\"suppression btn btn-danger\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cible-suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["cible"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" style=\"text-align: center; margin-bottom: 1em;\" data-playground-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\">
                        <i class =\"glyphicon glyphicon-chevron-left\"></i>
                        Supprimer la cible
                    </a>
                    <p>
                    <a class=\"btn btn-primary\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cible-details", ["id" => twig_get_attribute($this->env, $this->source, $context["cible"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" style=\"text-align: center;\">
                        <i class =\"glyphicon glyphicon-chevron-left\"></i>
                        Details de la cible
                    </a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cible'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
</div>
<script>
    \$(document).ready(function(){
        \$(\".suppression\").click(function(){
            var id = \$(this).attr(\"data-playground-id\");
            var url = '";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cible-suppression", ["id" => 0]);
        echo "';
            var url = url.replace(\"0\",id);
            \$.ajax({
                url: url,
                type: 'delete',
                success:function(data){
                    console.log(data);
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
        return "cible/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 66,  162 => 59,  149 => 52,  139 => 47,  136 => 46,  130 => 44,  126 => 42,  124 => 41,  120 => 40,  116 => 39,  112 => 38,  108 => 37,  105 => 36,  101 => 35,  78 => 15,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cible/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\cible\\index.html.twig");
    }
}
