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

/* session/edit.html.twig */
class __TwigTemplate_0ad6e6c8d8ced46dd35c6019c2f15b3a extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Modifier la Session";
        
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
        yield "    <div class=\"container mt-5 pt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden animate__animated animate__fadeIn\">
                    <div class=\"card-header bg-gradient-primary text-white text-center py-4\">
                        <h2 class=\"mb-0 fw-bold\">
                            <i class=\"fa fa-edit me-2\"></i>
                            Modifier la Session #";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "
                        </h2>
                    </div>

                    <div class=\"card-body p-5 bg-light\">
                        ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                        ";
        // line 20
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "                            <div class=\"alert alert-danger animate__animated animate__shakeX\">
                                ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 25
        yield "
                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "dateHeure", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        yield "
                                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "dateHeure", [], "any", false, false, false, 30), 'label');
        yield "
                                </div>
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "statut", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "statut", [], "any", false, false, false, 37), 'label');
        yield "
                                </div>
                            </div>

                            <div class=\"col-md-12\">
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "lienReunion", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        yield "
                                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "lienReunion", [], "any", false, false, false, 44), 'label');
        yield "
                                </div>
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "group", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "group", [], "any", false, false, false, 51), 'label');
        yield "
                                </div>
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), 'label', ["label" => "Enseignant"]);
        yield "
                                </div>
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-between mt-5\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 shadow animate__animated animate__pulse animate__infinite\">
                                <i class=\"fa fa-save me-2\"></i> Enregistrer les modifications
                            </button>
                            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_professeur");
        yield "\" class=\"btn btn-outline-secondary btn-lg px-5\">
                                <i class=\"fa fa-arrow-left me-2\"></i> Annuler
                            </a>
                        </div>

                        ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        yield "
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
        return "session/edit.html.twig";
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
        return array (  215 => 72,  207 => 67,  195 => 58,  191 => 57,  182 => 51,  178 => 50,  169 => 44,  165 => 43,  156 => 37,  152 => 36,  143 => 30,  139 => 29,  133 => 25,  127 => 22,  124 => 21,  122 => 20,  117 => 18,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier la Session{% endblock %}

{% block body %}
    <div class=\"container mt-5 pt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden animate__animated animate__fadeIn\">
                    <div class=\"card-header bg-gradient-primary text-white text-center py-4\">
                        <h2 class=\"mb-0 fw-bold\">
                            <i class=\"fa fa-edit me-2\"></i>
                            Modifier la Session #{{ session.id }}
                        </h2>
                    </div>

                    <div class=\"card-body p-5 bg-light\">
                        {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

                        {% if form_errors(form) %}
                            <div class=\"alert alert-danger animate__animated animate__shakeX\">
                                {{ form_errors(form) }}
                            </div>
                        {% endif %}

                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(form.dateHeure, {'attr': {'class': 'form-control', 'placeholder': ' '}}) }}
                                    {{ form_label(form.dateHeure) }}
                                </div>
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(form.statut, {'attr': {'class': 'form-select'}}) }}
                                    {{ form_label(form.statut) }}
                                </div>
                            </div>

                            <div class=\"col-md-12\">
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(form.lienReunion, {'attr': {'class': 'form-control', 'placeholder': ' '}}) }}
                                    {{ form_label(form.lienReunion) }}
                                </div>
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(form.group, {'attr': {'class': 'form-select'}}) }}
                                    {{ form_label(form.group) }}
                                </div>
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(form.user, {'attr': {'class': 'form-select'}}) }}
                                    {{ form_label(form.user, 'Enseignant') }}
                                </div>
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-between mt-5\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 shadow animate__animated animate__pulse animate__infinite\">
                                <i class=\"fa fa-save me-2\"></i> Enregistrer les modifications
                            </button>
                            <a href=\"{{ path('session_professeur') }}\" class=\"btn btn-outline-secondary btn-lg px-5\">
                                <i class=\"fa fa-arrow-left me-2\"></i> Annuler
                            </a>
                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "session/edit.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\session\\edit.html.twig");
    }
}
