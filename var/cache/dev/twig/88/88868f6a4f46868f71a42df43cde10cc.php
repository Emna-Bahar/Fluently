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

/* reservation/form.html.twig */
class __TwigTemplate_b1d05f98954163107bca1cd164c4b651 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/form.html.twig"));

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

        // line 4
        yield "    ";
        if ((($tmp = (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier";
        } else {
            yield "Nouvelle";
        }
        yield " Réservation
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <div class=\"container mt-5 pt-5\">
        ";
        // line 9
        if ((array_key_exists("successMessage", $context) && (isset($context["successMessage"]) || array_key_exists("successMessage", $context) ? $context["successMessage"] : (function () { throw new RuntimeError('Variable "successMessage" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "            <div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
                ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successMessage"]) || array_key_exists("successMessage", $context) ? $context["successMessage"] : (function () { throw new RuntimeError('Variable "successMessage" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        // line 15
        yield "
        <h1 class=\"text-center fw-bold text-primary mb-5\">
            <i class=\"fa fa-";
        // line 17
        if ((($tmp = (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 17, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "edit";
        } else {
            yield "plus-circle";
        }
        yield " me-2\"></i>
            ";
        // line 18
        if ((($tmp = (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Modifier la réservation";
        } else {
            yield "Créer une nouvelle réservation";
        }
        // line 19
        yield "        </h1>

        ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        yield "

        ";
        // line 24
        yield "        ";
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 26
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'errors');
            yield "
            </div>
        ";
        }
        // line 29
        yield "
        ";
        // line 31
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "dateReservation", [], "any", false, false, false, 31), 'row');
        yield "

        ";
        // line 34
        yield "        ";
        if ((($tmp = (isset($context["is_student_view"]) || array_key_exists("is_student_view", $context) ? $context["is_student_view"] : (function () { throw new RuntimeError('Variable "is_student_view" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "            <div class=\"mb-3\">
                <label class=\"form-label\">Statut</label>
                <input type=\"text\" class=\"form-control\" value=\"En attente (demande envoyée)\" readonly>
            </div>
        ";
        } else {
            // line 40
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "statut", [], "any", false, false, false, 40), 'row');
            yield "
        ";
        }
        // line 42
        yield "
        ";
        // line 44
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), 'row');
        yield "
        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), 'row');
        yield "

        <div class=\"mt-4 text-center\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                <i class=\"fa fa-save me-2\"></i> 
                ";
        // line 50
        if ((($tmp = (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Enregistrer les modifications";
        } else {
            yield "Envoyer la demande";
        }
        // line 51
        yield "            </button>
            <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
        yield "\" class=\"btn btn-secondary btn-lg px-5 ms-3\">
                <i class=\"fa fa-arrow-left me-2\"></i> Retour à la liste des sessions
            </a>
        </div>

        ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        yield "
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
        return "reservation/form.html.twig";
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
        return array (  220 => 57,  212 => 52,  209 => 51,  203 => 50,  195 => 45,  190 => 44,  187 => 42,  181 => 40,  174 => 35,  171 => 34,  165 => 31,  162 => 29,  156 => 26,  153 => 25,  150 => 24,  145 => 21,  141 => 19,  135 => 18,  127 => 17,  123 => 15,  116 => 11,  113 => 10,  111 => 9,  108 => 8,  95 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if edit %}Modifier{% else %}Nouvelle{% endif %} Réservation
{% endblock %}

{% block body %}
    <div class=\"container mt-5 pt-5\">
        {% if successMessage is defined and successMessage %}
            <div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
                {{ successMessage }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endif %}

        <h1 class=\"text-center fw-bold text-primary mb-5\">
            <i class=\"fa fa-{% if edit %}edit{% else %}plus-circle{% endif %} me-2\"></i>
            {% if edit %}Modifier la réservation{% else %}Créer une nouvelle réservation{% endif %}
        </h1>

        {{ form_start(form) }}

        {# Affichage des erreurs globales #}
        {% if form_errors(form) %}
            <div class=\"alert alert-danger\">
                {{ form_errors(form) }}
            </div>
        {% endif %}

        {# Date #}
        {{ form_row(form.dateReservation) }}

        {# Statut : différent selon le rôle #}
        {% if is_student_view %}
            <div class=\"mb-3\">
                <label class=\"form-label\">Statut</label>
                <input type=\"text\" class=\"form-control\" value=\"En attente (demande envoyée)\" readonly>
            </div>
        {% else %}
            {{ form_row(form.statut) }}
        {% endif %}

        {# Session et Utilisateur #}
        {{ form_row(form.session) }}
        {{ form_row(form.user) }}

        <div class=\"mt-4 text-center\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                <i class=\"fa fa-save me-2\"></i> 
                {% if edit %}Enregistrer les modifications{% else %}Envoyer la demande{% endif %}
            </button>
            <a href=\"{{ path('app_session_index') }}\" class=\"btn btn-secondary btn-lg px-5 ms-3\">
                <i class=\"fa fa-arrow-left me-2\"></i> Retour à la liste des sessions
            </a>
        </div>

        {{ form_end(form) }}
    </div>
{% endblock %}", "reservation/form.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\reservation\\form.html.twig");
    }
}
