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

/* specialite/formulaireSpecialite.html.twig */
class __TwigTemplate_e33e894b8aabe5970708d4d7fb015092792e6948963725050798bd05bbdf10cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specialite/formulaireSpecialite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "specialite/formulaireSpecialite.html.twig"));

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Nom de la spécialité"]);
        echo "
            ";
        // line 16
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 19
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 23
        echo "        <div class=\"form-group\">
            ";
        // line 25
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "agent", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Nom de l'agent"]);
        echo "
            ";
        // line 27
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "agent", [], "any", false, false, false, 27), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 30
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "agent", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        <p>
        ";
        // line 35
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'rest');
        echo "
        ";
        // line 37
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Sauvegarde", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
        ";
        // line 39
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
    </div>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "specialite/formulaireSpecialite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  110 => 37,  105 => 35,  97 => 30,  91 => 27,  86 => 25,  83 => 23,  76 => 19,  70 => 16,  65 => 14,  62 => 12,  60 => 11,  54 => 8,  49 => 5,  43 => 1,);
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
        {# Nom de la spécialité #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.nom, \"Nom de la spécialité\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.nom) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Nom de l'agent #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.agent, \"Nom de l'agent\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.agent) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.agent, {'attr': {'class': 'form-control'}}) }}
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
", "specialite/formulaireSpecialite.html.twig", "C:\\xampp\\apps\\symfony\\templates\\specialite\\formulaireSpecialite.html.twig");
    }
}
