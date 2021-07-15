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

/* mission/formulaireMission.html.twig */
class __TwigTemplate_f7d4864b511158f8555518125cc618fdeafe904b81d4fb6dcaf7a4f87345a7c9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div>
<div class=\"pull-right\">
</div>
    <div class=\"well\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
        
        ";
        // line 8
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

        ";
        // line 11
        echo "        ";
        // line 12
        echo "        <div class=\"form-group\">
            ";
        // line 14
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Titre de la mission"]);
        echo "
            ";
        // line 16
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 16), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 19
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 23
        echo "        <div class=\"form-group\">
            ";
        // line 25
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Description de la mission"]);
        echo "
            ";
        // line 27
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 27), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 30
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 34
        echo "        <div class=\"form-group\">
            ";
        // line 36
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nomCode", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Nom de code de la mission"]);
        echo "
            ";
        // line 38
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nomCode", [], "any", false, false, false, 38), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 41
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nomCode", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 45
        echo "        <div class=\"form-group\">
            ";
        // line 47
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pays", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Pays de la mission"]);
        echo "
            ";
        // line 49
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pays", [], "any", false, false, false, 49), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 52
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pays", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 56
        echo "        <div class=\"form-group\">
            ";
        // line 58
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Statut", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Statut de la mission"]);
        echo "
            ";
        // line 60
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Statut", [], "any", false, false, false, 60), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 63
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Statut", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 67
        echo "        <div class=\"form-group\">
            ";
        // line 69
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Specialite", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Spécialité de la mission"]);
        echo "
            ";
        // line 71
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Specialite", [], "any", false, false, false, 71), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 74
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Specialite", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 78
        echo "        <div class=\"form-group\">
            ";
        // line 80
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateDebut", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Date de début de la mission"]);
        echo "
            ";
        // line 82
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateDebut", [], "any", false, false, false, 82), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 85
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateDebut", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 89
        echo "        <div class=\"form-group\">
            ";
        // line 91
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateFin", [], "any", false, false, false, 91), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Date de fin de la mission"]);
        echo "
            ";
        // line 93
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateFin", [], "any", false, false, false, 93), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 96
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateFin", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 100
        echo "        <div class=\"form-group\">
            ";
        // line 102
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Agent", [], "any", false, false, false, 102), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Agents de la mission"]);
        echo "
            ";
        // line 104
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Agent", [], "any", false, false, false, 104), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 107
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Agent", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 111
        echo "        <div class=\"form-group\">
            ";
        // line 113
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contact", [], "any", false, false, false, 113), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Contacts de la mission"]);
        echo "
            ";
        // line 115
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contact", [], "any", false, false, false, 115), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 118
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contact", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 122
        echo "        <div class=\"form-group\">
            ";
        // line 124
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Planque", [], "any", false, false, false, 124), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Planque de la mission"]);
        echo "
            ";
        // line 126
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Planque", [], "any", false, false, false, 126), 'errors');
        echo "
            <div class=\"col-sm-10\" id=\"planque\">
                ";
        // line 129
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Planque", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 133
        echo "        <div class=\"form-group\">
            ";
        // line 135
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Cible", [], "any", false, false, false, 135), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Cible de la mission"]);
        echo "
            ";
        // line 137
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Cible", [], "any", false, false, false, 137), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 140
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Cible", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        <p>
        ";
        // line 145
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        ";
        // line 147
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Sauvegarde", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
        ";
        // line 149
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
</html>
";
    }

    public function getTemplateName()
    {
        return "mission/formulaireMission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 149,  314 => 147,  309 => 145,  301 => 140,  295 => 137,  290 => 135,  287 => 133,  280 => 129,  274 => 126,  269 => 124,  266 => 122,  259 => 118,  253 => 115,  248 => 113,  245 => 111,  238 => 107,  232 => 104,  227 => 102,  224 => 100,  217 => 96,  211 => 93,  206 => 91,  203 => 89,  196 => 85,  190 => 82,  185 => 80,  182 => 78,  175 => 74,  169 => 71,  164 => 69,  161 => 67,  154 => 63,  148 => 60,  143 => 58,  140 => 56,  133 => 52,  127 => 49,  122 => 47,  119 => 45,  112 => 41,  106 => 38,  101 => 36,  98 => 34,  91 => 30,  85 => 27,  80 => 25,  77 => 23,  70 => 19,  64 => 16,  59 => 14,  56 => 12,  54 => 11,  48 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mission/formulaireMission.html.twig", "C:\\xampp\\apps\\symfony\\templates\\mission\\formulaireMission.html.twig");
    }
}
