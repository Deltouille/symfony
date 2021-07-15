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

/* specialite/index.html.twig */
class __TwigTemplate_1ac792427d69ca915033720e622990bdc9794f4693cecb6da19d410e8e5bda53 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "specialite/index.html.twig", 1);
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
    <h1>Listes des Specialite
        <a href =\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specialite-ajout");
        echo "\" class =\"btn btn-sm btn-success\" style=\"float: right;\">
            <i class =\"glyphicon glyphicon-edit\" >
            Ajouter une Specialite
            </i>
        </a>
    </h1>

    <hr />
    <table id=\"table\" class=\"table table-striped table-bordered\" style=\"width:100%\">
        <thead>
            <tr>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Specialite</th>
                <th style=\"border-top:0px solid black; padding-left: 9px; text-align: center;\">Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeSpecialite"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["specialite"]) {
            // line 32
            echo "            <tr>
                <td style=\"text-align: center;\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["specialite"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td style=\"text-align: center;\">
                    <a class=\"suppression btn btn-danger\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specialite-suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["specialite"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" style=\"text-align: center; margin-bottom: 1em;\" data-playground-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["specialite"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
                        <i class =\"glyphicon glyphicon-chevron-left\"></i>
                        Supprimer la Specialite
                    </a>
                    <p>
                    <a class=\"btn btn-primary\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specialite-details", ["id" => twig_get_attribute($this->env, $this->source, $context["specialite"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" style=\"text-align: center;\">
                        <i class =\"glyphicon glyphicon-chevron-left\"></i>
                        Details de la Specialite
                    </a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specialite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
</div>
<script>
    \$(document).ready(function(){
        \$(\".suppression\").click(function(){
            var id = \$(this).attr(\"data-playground-id\");
            var url = '";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specialite-suppression", ["id" => 0]);
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
        return "specialite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 54,  132 => 47,  119 => 40,  109 => 35,  104 => 33,  101 => 32,  97 => 31,  78 => 15,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "specialite/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\specialite\\index.html.twig");
    }
}
