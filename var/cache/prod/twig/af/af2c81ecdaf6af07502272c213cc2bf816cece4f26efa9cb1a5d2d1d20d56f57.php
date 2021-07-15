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

/* contact/formulaireContact.html.twig */
class __TwigTemplate_c135f210d41a671e344005d227ce3b3ef6da49a01fc8ffd39be6e52aa30fe570 extends \Twig\Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Nom du contact"]);
        echo "
            ";
        // line 16
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 16), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 19
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 23
        echo "        <div class=\"form-group\">
            ";
        // line 25
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Prénom du contact"]);
        echo "
            ";
        // line 27
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 27), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 30
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 34
        echo "        <div class=\"form-group\">
            ";
        // line 36
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DateNaissance", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Date de naissance du contact"]);
        echo "
            ";
        // line 38
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DateNaissance", [], "any", false, false, false, 38), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 41
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DateNaissance", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 45
        echo "        <div class=\"form-group\">
            ";
        // line 47
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nomCode", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Code d'identification du contact"]);
        echo "
            ";
        // line 49
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nomCode", [], "any", false, false, false, 49), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 52
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nomCode", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 56
        echo "        <div class=\"form-group\">
            ";
        // line 58
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "missions", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Missions disponibles (Optionnel, laissez vide si aucune mission)"]);
        echo "
            ";
        // line 60
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "missions", [], "any", false, false, false, 60), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 63
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "missions", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 67
        echo "        <div class=\"form-group\">
            ";
        // line 69
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nationnalite", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Nationnalité"]);
        echo "
            ";
        // line 71
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nationnalite", [], "any", false, false, false, 71), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 74
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nationnalite", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        <p>
        ";
        // line 79
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        ";
        // line 81
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Sauvegarde", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
        ";
        // line 83
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
</html>
";
    }

    public function getTemplateName()
    {
        return "contact/formulaireContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 83,  188 => 81,  183 => 79,  175 => 74,  169 => 71,  164 => 69,  161 => 67,  154 => 63,  148 => 60,  143 => 58,  140 => 56,  133 => 52,  127 => 49,  122 => 47,  119 => 45,  112 => 41,  106 => 38,  101 => 36,  98 => 34,  91 => 30,  85 => 27,  80 => 25,  77 => 23,  70 => 19,  64 => 16,  59 => 14,  56 => 12,  54 => 11,  48 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/formulaireContact.html.twig", "C:\\xampp\\apps\\symfony\\templates\\contact\\formulaireContact.html.twig");
    }
}
