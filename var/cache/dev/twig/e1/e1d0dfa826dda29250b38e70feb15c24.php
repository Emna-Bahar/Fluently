<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* tache_admin/new.html.twig */
class __TwigTemplate_82e636e77eeaf3da044947244b67c355 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache_admin/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache_admin/new.html.twig"));

        $this->parent = $this->load("dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Nouvelle Tâche";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Créer une Tâche</h5>
            </div>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"feather-arrow-left\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Nouvelle Tâche</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        
                        <div class=\"mb-3\">
                            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "titre", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Titre *"]);
        yield "
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "titre", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "titre", [], "any", false, false, false, 33), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description *"]);
        yield "
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "rows" => 4]]);
        yield "
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), 'errors');
        yield "
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "date_limite", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date limite *"]);
        yield "
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "date_limite", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "date_limite", [], "any", false, false, false, 46), 'errors');
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "statut", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut *"]);
        yield "
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "statut", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "statut", [], "any", false, false, false, 51), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "priorite", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Priorité *"]);
        yield "
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "priorite", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "priorite", [], "any", false, false, false, 59), 'errors');
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "Id_objectif", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Objectif *"]);
        yield "
                                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "Id_objectif", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "Id_objectif", [], "any", false, false, false, 64), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_index");
        yield "\" class=\"btn btn-secondary\">
                                <i class=\"feather-x\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"feather-save\"></i> Enregistrer
                            </button>
                        </div>

                        ";
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tache_admin/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  236 => 77,  225 => 69,  217 => 64,  213 => 63,  209 => 62,  203 => 59,  199 => 58,  195 => 57,  186 => 51,  182 => 50,  178 => 49,  172 => 46,  168 => 45,  164 => 44,  156 => 39,  152 => 38,  148 => 37,  141 => 33,  137 => 32,  133 => 31,  127 => 28,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Nouvelle Tâche{% endblock %}

{% block body %}
<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Créer une Tâche</h5>
            </div>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"{{ path('app_tache_admin_index') }}\" class=\"btn btn-secondary\">
                <i class=\"feather-arrow-left\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Nouvelle Tâche</h5>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                        
                        <div class=\"mb-3\">
                            {{ form_label(form.titre, 'Titre *', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.titre) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(form.description, 'Description *', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 4}}) }}
                            {{ form_errors(form.description) }}
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.date_limite, 'Date limite *', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.date_limite, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.date_limite) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.statut, 'Statut *', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.statut, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.statut) }}
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.priorite, 'Priorité *', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.priorite, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.priorite) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.Id_objectif, 'Objectif *', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.Id_objectif, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.Id_objectif) }}
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"{{ path('app_tache_admin_index') }}\" class=\"btn btn-secondary\">
                                <i class=\"feather-x\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"feather-save\"></i> Enregistrer
                            </button>
                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "tache_admin/new.html.twig", "C:\\Users\\sarra\\Desktop\\PIW\\Fluently\\templates\\tache_admin\\new.html.twig");
    }
}
