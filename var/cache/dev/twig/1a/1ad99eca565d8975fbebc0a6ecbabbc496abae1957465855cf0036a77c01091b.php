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

/* planque/formulairePlanque.html.twig */
class __TwigTemplate_6c7b6fd9dd3fa77704c0fa55da0f9dc310e1ea47a8d05c30fdbe190bea2412ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planque/formulairePlanque.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planque/formulairePlanque.html.twig"));

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "code", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Code de la planque"]);
        echo "
            ";
        // line 16
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "code", [], "any", false, false, false, 16), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 19
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "code", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 23
        echo "        <div class=\"form-group\">
            ";
        // line 25
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "adresse", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Adresse de la planque"]);
        echo "
            ";
        // line 27
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "adresse", [], "any", false, false, false, 27), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 30
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "adresse", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 34
        echo "        <div class=\"form-group\">
            ";
        // line 36
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "CP", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Code postal de la planque"]);
        echo "
            ";
        // line 38
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "CP", [], "any", false, false, false, 38), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 41
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "CP", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 45
        echo "        <div class=\"form-group\">
            ";
        // line 47
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "ville", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Ville de la planque"]);
        echo "
            ";
        // line 49
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "ville", [], "any", false, false, false, 49), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 52
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "ville", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 56
        echo "        <div class=\"form-group\">
            ";
        // line 58
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "pays", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Pays de la planque"]);
        echo "
            ";
        // line 60
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "pays", [], "any", false, false, false, 60), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 63
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "pays", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 67
        echo "        <div class=\"form-group\">
            ";
        // line 69
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "type", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Type de planque "]);
        echo "
            ";
        // line 71
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "type", [], "any", false, false, false, 71), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 74
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "type", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        ";
        // line 78
        echo "        <div class=\"form-group\">
            ";
        // line 80
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "missions", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "cal-sm-2 control-label"], "label" => "Mission ou la planque est utilisée (Optionnel, laisser vide si aucune mission) "]);
        echo "
            ";
        // line 82
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "missions", [], "any", false, false, false, 82), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 85
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "missions", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        <p>
        ";
        // line 90
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'rest');
        echo "
        ";
        // line 92
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "Sauvegarde", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
        ";
        // line 94
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
    </div>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "planque/formulairePlanque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 94,  215 => 92,  210 => 90,  202 => 85,  196 => 82,  191 => 80,  188 => 78,  181 => 74,  175 => 71,  170 => 69,  167 => 67,  160 => 63,  154 => 60,  149 => 58,  146 => 56,  139 => 52,  133 => 49,  128 => 47,  125 => 45,  118 => 41,  112 => 38,  107 => 36,  104 => 34,  97 => 30,  91 => 27,  86 => 25,  83 => 23,  76 => 19,  70 => 16,  65 => 14,  62 => 12,  60 => 11,  54 => 8,  49 => 5,  43 => 1,);
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
        {# Code de la planque #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.code, \"Code de la planque\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.code) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.code, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Adresse de la planque #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.adresse, \"Adresse de la planque\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.adresse) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Code postal de la planque #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.CP, \"Code postal de la planque\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.CP) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.CP, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Ville de la planque #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.ville, \"Ville de la planque\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.ville) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.ville, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Pays de la planque #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.pays, \"Pays de la planque\", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.pays) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.pays, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Type de planque #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.type, \"Type de planque \", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.type) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.type, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Mission ou se trouve la planque #}
        <div class=\"form-group\">
            {# Génération du label #}
            {{ form_label(form.missions, \"Mission ou la planque est utilisée (Optionnel, laisser vide si aucune mission) \", {'label_attr': {'class': 'cal-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis #}
            {{ form_errors(form.missions) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.missions, {'attr': {'class': 'form-control'}}) }}
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
", "planque/formulairePlanque.html.twig", "C:\\xampp\\apps\\symfony\\templates\\planque\\formulairePlanque.html.twig");
    }
}
