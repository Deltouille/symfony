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
class __TwigTemplate_37aa978967d754131bdd19ba4e1d65051f74102585d4fb6ca7e239b855e11577 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/formulaireMission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/formulaireMission.html.twig"));

        // line 1
        echo "<div>
<div class=\"pull-right\">
</div>
    <div class=\"well\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
        
        ";
        // line 8
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'errors');
        echo "

        ";
        // line 11
        echo "        ";
        // line 12
        echo "        <div class=\"form-group\">
            ";
        // line 14
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Titre de la mission"]);
        echo "
            ";
        // line 16
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 19
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 23
        echo "        <div class=\"form-group\">
            ";
        // line 25
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Description de la mission"]);
        echo "
            ";
        // line 27
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 30
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 34
        echo "        <div class=\"form-group\">
            ";
        // line 36
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "nomCode", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Nom de code de la mission"]);
        echo "
            ";
        // line 38
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nomCode", [], "any", false, false, false, 38), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 41
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nomCode", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 45
        echo "        <div class=\"form-group\">
            ";
        // line 47
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "pays", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Pays de la mission"]);
        echo "
            ";
        // line 49
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "pays", [], "any", false, false, false, 49), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 52
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "pays", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 56
        echo "        <div class=\"form-group\">
            ";
        // line 58
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "Statut", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Statut de la mission"]);
        echo "
            ";
        // line 60
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "Statut", [], "any", false, false, false, 60), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 63
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "Statut", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 67
        echo "        <div class=\"form-group\">
            ";
        // line 69
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "Specialite", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Spécialité de la mission"]);
        echo "
            ";
        // line 71
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "Specialite", [], "any", false, false, false, 71), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 74
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "Specialite", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 78
        echo "        <div class=\"form-group\">
            ";
        // line 80
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "dateDebut", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Date de début de la mission"]);
        echo "
            ";
        // line 82
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "dateDebut", [], "any", false, false, false, 82), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 85
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "dateDebut", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 89
        echo "        <div class=\"form-group\">
            ";
        // line 91
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "dateFin", [], "any", false, false, false, 91), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Date de fin de la mission"]);
        echo "
            ";
        // line 93
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "dateFin", [], "any", false, false, false, 93), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 96
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "dateFin", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 100
        echo "        <div class=\"form-group\">
            ";
        // line 102
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "Agent", [], "any", false, false, false, 102), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Agents de la mission"]);
        echo "
            ";
        // line 104
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "Agent", [], "any", false, false, false, 104), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 107
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "Agent", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 111
        echo "        <div class=\"form-group\">
            ";
        // line 113
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "contact", [], "any", false, false, false, 113), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Contacts de la mission"]);
        echo "
            ";
        // line 115
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "contact", [], "any", false, false, false, 115), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 118
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "contact", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 122
        echo "        <div class=\"form-group\">
            ";
        // line 124
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "Planque", [], "any", false, false, false, 124), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Planque de la mission"]);
        echo "
            ";
        // line 126
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "Planque", [], "any", false, false, false, 126), 'errors');
        echo "
            <div class=\"col-sm-10\" id=\"planque\">
                ";
        // line 129
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "Planque", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 133
        echo "        <div class=\"form-group\">
            ";
        // line 135
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "Cible", [], "any", false, false, false, 135), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Cible de la mission"]);
        echo "
            ";
        // line 137
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "Cible", [], "any", false, false, false, 137), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 140
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "Cible", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        <p>
        ";
        // line 145
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'rest');
        echo "
        ";
        // line 147
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "Sauvegarde", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
        ";
        // line 149
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), 'form_end');
        echo "
    </div>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  325 => 149,  320 => 147,  315 => 145,  307 => 140,  301 => 137,  296 => 135,  293 => 133,  286 => 129,  280 => 126,  275 => 124,  272 => 122,  265 => 118,  259 => 115,  254 => 113,  251 => 111,  244 => 107,  238 => 104,  233 => 102,  230 => 100,  223 => 96,  217 => 93,  212 => 91,  209 => 89,  202 => 85,  196 => 82,  191 => 80,  188 => 78,  181 => 74,  175 => 71,  170 => 69,  167 => 67,  160 => 63,  154 => 60,  149 => 58,  146 => 56,  139 => 52,  133 => 49,  128 => 47,  125 => 45,  118 => 41,  112 => 38,  107 => 36,  104 => 34,  97 => 30,  91 => 27,  86 => 25,  83 => 23,  76 => 19,  70 => 16,  65 => 14,  62 => 12,  60 => 11,  54 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
<div class=\"pull-right\">
</div>
    <div class=\"well\">
        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
        
        {# Les erreurs générales du formulaire #}
        {{ form_errors(form) }}

        {# Génération manuelle du formulaire #}
        {# Titre de la mission #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.titre, \"Titre de la mission\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.titre) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# description de la mission #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.description, \"Description de la mission\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.description) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# nom de code de la mission #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.nomCode, \"Nom de code de la mission\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.nomCode) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.nomCode, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Pays de la mission #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.pays, \"Pays de la mission\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.pays) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.pays, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Statut de la mission #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.Statut, \"Statut de la mission\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.Statut) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.Statut, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Spécialité de la mission #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.Specialite, \"Spécialité de la mission\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.Specialite) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.Specialite, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Date de début de la mission #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.dateDebut, \"Date de début de la mission\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.dateDebut) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Date de fin de la mission #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.dateFin, \"Date de fin de la mission\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.dateFin) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.dateFin, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Agents de la mission #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.Agent, \"Agents de la mission\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.Agent) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.Agent, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Contacts de la mission #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.contact, \"Contacts de la mission\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.contact) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.contact, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Planque de la mission #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.Planque, \"Planque de la mission\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.Planque) }}
            <div class=\"col-sm-10\" id=\"planque\">
                {# Génération de l'input. #}
                {{ form_widget(form.Planque, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Cibles de la mission #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.Cible, \"Cible de la mission\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.Cible) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.Cible, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <p>
        {# Génération automatique des champs pas encore écrits #}
        {{ form_rest(form) }}
        {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
        {{ form_widget(form.Sauvegarde, {'attr': {'class': 'btn btn-primary'}}) }}
        {# Fermeture de la balise <form> de formulaire HTML #}
        {{ form_end(form) }}
    </div>
</html>
", "mission/formulaireMission.html.twig", "C:\\xampp\\apps\\symfony\\templates\\mission\\formulaireMission.html.twig");
    }
}
