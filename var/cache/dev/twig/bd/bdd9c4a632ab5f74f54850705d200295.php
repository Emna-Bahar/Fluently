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

/* reservation/new.html.twig */
class __TwigTemplate_10ade0ae6ea587d17462cc6cc87b829b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

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

        yield "Nouvelle réservation - Fluently";
        
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
        yield "    <div class=\"container py-5\" style=\"margin-top: 100px;\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                
                <!-- Messages Flash -->
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "                    <div class=\"alert alert-danger alert-dismissible fade show shadow-sm mb-4\" role=\"alert\">
                        <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                        <strong>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
                <div class=\"card shadow-lg border-0 rounded-4\">
                    <div class=\"card-header bg-success text-white py-4\">
                        <h4 class=\"mb-0 fw-bold\">
                            <i class=\"bi bi-plus-circle me-2\"></i> Créer une nouvelle réservation
                        </h4>
                    </div>
                    <div class=\"card-body p-4\">
                        ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "dateReservation", [], "any", false, false, false, 29), 'row');
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "statut", [], "any", false, false, false, 32), 'row');
        yield "
                                </div>
                                <div class=\"col-12\">
                                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), 'row');
        yield "
                                </div>
                                <div class=\"col-12\">
                                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), 'row');
        yield "
                                </div>
                            </div>
                            
                            <div class=\"mt-4 d-flex gap-2\">
                                <button type=\"submit\" class=\"btn btn-success px-4\">
                                    <i class=\"bi bi-check-circle me-1\"></i> Créer la réservation
                                </button>
                                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-secondary px-4\">
                                    <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                                </a>
                            </div>
                        ";
        // line 50
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .form-control:focus, .form-select:focus {
            border-color: #198754;
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
        }
        label {
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
        }
    </style>
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
        return "reservation/new.html.twig";
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
        return array (  177 => 50,  170 => 46,  159 => 38,  153 => 35,  147 => 32,  141 => 29,  135 => 26,  125 => 18,  115 => 14,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle réservation - Fluently{% endblock %}

{% block body %}
    <div class=\"container py-5\" style=\"margin-top: 100px;\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                
                <!-- Messages Flash -->
                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger alert-dismissible fade show shadow-sm mb-4\" role=\"alert\">
                        <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                        <strong>{{ message }}</strong>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                {% endfor %}

                <div class=\"card shadow-lg border-0 rounded-4\">
                    <div class=\"card-header bg-success text-white py-4\">
                        <h4 class=\"mb-0 fw-bold\">
                            <i class=\"bi bi-plus-circle me-2\"></i> Créer une nouvelle réservation
                        </h4>
                    </div>
                    <div class=\"card-body p-4\">
                        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    {{ form_row(form.dateReservation) }}
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_row(form.statut) }}
                                </div>
                                <div class=\"col-12\">
                                    {{ form_row(form.session) }}
                                </div>
                                <div class=\"col-12\">
                                    {{ form_row(form.user) }}
                                </div>
                            </div>
                            
                            <div class=\"mt-4 d-flex gap-2\">
                                <button type=\"submit\" class=\"btn btn-success px-4\">
                                    <i class=\"bi bi-check-circle me-1\"></i> Créer la réservation
                                </button>
                                <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-secondary px-4\">
                                    <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                                </a>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .form-control:focus, .form-select:focus {
            border-color: #198754;
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
        }
        label {
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
        }
    </style>
{% endblock %}", "reservation/new.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\reservation\\new.html.twig");
    }
}
