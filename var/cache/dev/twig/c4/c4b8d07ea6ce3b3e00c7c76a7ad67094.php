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

/* tache_admin/edit.html.twig */
class __TwigTemplate_820edc2d51ecdf32fd62e73adec6eac2 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache_admin/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache_admin/edit.html.twig"));

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

        yield "Modifier Tâche";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<style>
.task-wrapper {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        // line 17
        yield "<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Modifier la Tâche</h5>
            </div>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"feather-arrow-left\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card task-wrapper\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Modifier la tâche</h5>
                    </div>

                    <div class=\"card-body\">
                        ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                        <div class=\"mb-3\">
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "titre", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Titre *"]);
        yield "
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "titre", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "titre", [], "any", false, false, false, 45), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description *"]);
        yield "
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "rows" => 4]]);
        yield "
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'errors');
        yield "
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "date_limite", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date limite *"]);
        yield "
                                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "date_limite", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "date_limite", [], "any", false, false, false, 58), 'errors');
        yield "
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "statut", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut *"]);
        yield "
                                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "statut", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "statut", [], "any", false, false, false, 64), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "priorite", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Priorité *"]);
        yield "
                                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "priorite", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "priorite", [], "any", false, false, false, 72), 'errors');
        yield "
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "Id_objectif", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Objectif *"]);
        yield "
                                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "Id_objectif", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "Id_objectif", [], "any", false, false, false, 78), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_index");
        yield "\" class=\"btn btn-secondary\">
                                <i class=\"feather-x\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-warning\">
                                <i class=\"feather-save\"></i> Mettre à jour
                            </button>
                        </div>

                        ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        yield "

                        <hr class=\"my-4\">

                        <div class=\"text-center\">
                            <form method=\"post\"
                                  action=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
        yield "\"
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99))), "html", null, true);
        yield "\">
                                <button class=\"btn btn-danger\">
                                    <i class=\"feather-trash\"></i> Supprimer cette tâche
                                </button>
                            </form>
                        </div>

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
        return "tache_admin/edit.html.twig";
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
        return array (  286 => 99,  281 => 97,  272 => 91,  261 => 83,  253 => 78,  249 => 77,  245 => 76,  238 => 72,  234 => 71,  230 => 70,  221 => 64,  217 => 63,  213 => 62,  206 => 58,  202 => 57,  198 => 56,  190 => 51,  186 => 50,  182 => 49,  175 => 45,  171 => 44,  167 => 43,  161 => 40,  143 => 25,  133 => 17,  120 => 16,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Modifier Tâche{% endblock %}

{% block stylesheets %}
<style>
.task-wrapper {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}
</style>
{% endblock %}

{% block body %}
<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Modifier la Tâche</h5>
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
                <div class=\"card task-wrapper\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Modifier la tâche</h5>
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
                            <button type=\"submit\" class=\"btn btn-warning\">
                                <i class=\"feather-save\"></i> Mettre à jour
                            </button>
                        </div>

                        {{ form_end(form) }}

                        <hr class=\"my-4\">

                        <div class=\"text-center\">
                            <form method=\"post\"
                                  action=\"{{ path('app_tache_admin_delete', {'id': tache.id}) }}\"
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ tache.id) }}\">
                                <button class=\"btn btn-danger\">
                                    <i class=\"feather-trash\"></i> Supprimer cette tâche
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "tache_admin/edit.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\tache_admin\\edit.html.twig");
    }
}
