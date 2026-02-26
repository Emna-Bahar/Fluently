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

/* session/new.html.twig */
class __TwigTemplate_431a158994df35d8f094580e662495d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/new.html.twig"));

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

        yield "Nouvelle Session - Fluently";
        
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

                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["error"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "                    <div class=\"alert alert-danger alert-dismissible fade show shadow-sm mb-4\" role=\"alert\">
                        <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                        <strong>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
                <div class=\"card shadow-lg border-0 rounded-4\">
                    <div class=\"card-header bg-primary text-white py-4\">
                        <h4 class=\"mb-0 fw-bold\">
                            <i class=\"bi bi-plus-circle me-2\"></i> Créer une nouvelle session
                        </h4>
                    </div>
                    <div class=\"card-body p-4\">
                        ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        yield "
                        
                            <!-- Masquer le champ dateHeure original de Symfony -->
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "dateHeure", [], "any", false, false, false, 28), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "
                            
                            <!-- Date et heure - CHAMPS PERSONNALISÉS -->
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\">
                                    <i class=\"bi bi-calendar me-1\"></i> Date et heure *
                                </label>
                                <div class=\"row g-2\">
                                    <div class=\"col-md-6\">
                                        <input type=\"date\" 
                                               name=\"custom_date\" 
                                               id=\"custom_date\"
                                               class=\"form-control\" 
                                               required
                                               style=\"border: 2px solid #e0e0e0; border-radius: 8px;\">
                                    </div>
                                    <div class=\"col-md-6\">
                                        <input type=\"time\" 
                                               name=\"custom_time\" 
                                               id=\"custom_time\"
                                               class=\"form-control\" 
                                               required
                                               style=\"border: 2px solid #e0e0e0; border-radius: 8px;\">
                                    </div>
                                </div>
                                <small class=\"text-muted\">Sélectionnez une date et une heure</small>
                            </div>

                            <!-- Statut -->
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\">
                                    <i class=\"bi bi-tag me-1\"></i> Statut
                                </label>
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "statut", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-select", "style" => "border: 2px solid #e0e0e0; border-radius: 8px;"]]);
        // line 64
        yield "
                            </div>

                            <!-- Lien de réunion -->
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\">
                                    <i class=\"bi bi-link-45deg me-1\"></i> Lien de réunion (optionnel)
                                </label>
                                ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "lienReunion", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "style" => "border: 2px solid #e0e0e0; border-radius: 8px;", "placeholder" => "https://zoom.us/j/..."]]);
        // line 76
        yield "
                            </div>

                            <!-- Groupe -->
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\">
                                    <i class=\"bi bi-people me-1\"></i> Groupe
                                </label>
                                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "groupe", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-select", "style" => "border: 2px solid #e0e0e0; border-radius: 8px;"]]);
        // line 87
        yield "
                            </div>

                            <!-- Tuteur -->
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\">
                                    <i class=\"bi bi-person-badge me-1\"></i> Tuteur
                                </label>
                                ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-select", "style" => "border: 2px solid #e0e0e0; border-radius: 8px;"]]);
        // line 98
        yield "
                            </div>

                            <!-- CSRF Token -->
                            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "_token", [], "any", false, false, false, 102), 'widget');
        yield "

                            <div class=\"mt-4 d-flex gap-2\">
                                <button type=\"submit\" class=\"btn btn-primary px-4\">
                                    <i class=\"bi bi-check-circle me-1\"></i> Créer la session
                                </button>
                                <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
        yield "\" class=\"btn btn-secondary px-4\">
                                    <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                                </a>
                            </div>
                            
                        ";
        // line 113
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .form-control:focus, .form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        label {
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
        }
        .required:after {
            content: \" *\";
            color: #dc3545;
        }
    </style>

    <!-- Script pour combiner date et heure -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const dateInput = document.getElementById('custom_date');
        const timeInput = document.getElementById('custom_time');
        const dateTimeInput = document.getElementById('";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "dateHeure", [], "any", false, false, false, 142), "vars", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142), "html", null, true);
        yield "');
        
        // Définir la date d'aujourd'hui par défaut
        const today = new Date();
        const formattedDate = today.toISOString().split('T')[0];
        const formattedTime = today.getHours().toString().padStart(2, '0') + ':' + 
                              today.getMinutes().toString().padStart(2, '0');
        
        if (!dateInput.value) {
            dateInput.value = formattedDate;
        }
        if (!timeInput.value) {
            timeInput.value = formattedTime;
        }
        
        // Mettre à jour le champ Symfony avec la valeur par défaut
        updateDateTimeField();
        
        // Fonction pour mettre à jour le champ caché
        function updateDateTimeField() {
            const date = dateInput.value;
            const time = timeInput.value;
            
            if (date && time) {
                // Formater au format DateTime de Symfony: YYYY-MM-DD HH:MM:SS
                const dateTimeValue = date + ' ' + time + ':00';
                dateTimeInput.value = dateTimeValue;
            }
        }
        
        // Écouter les changements
        dateInput.addEventListener('change', updateDateTimeField);
        timeInput.addEventListener('change', updateDateTimeField);
        
        // Valider avant soumission
        form.addEventListener('submit', function(e) {
            updateDateTimeField();
            
            if (!dateInput.value || !timeInput.value) {
                e.preventDefault();
                alert('Veuillez sélectionner une date et une heure.');
                return false;
            }
            
            return true;
        });
    });
    </script>
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
        return "session/new.html.twig";
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
        return array (  269 => 142,  237 => 113,  229 => 108,  220 => 102,  214 => 98,  212 => 95,  202 => 87,  200 => 84,  190 => 76,  188 => 72,  178 => 64,  176 => 61,  140 => 28,  134 => 25,  124 => 17,  114 => 13,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Session - Fluently{% endblock %}

{% block body %}
    <div class=\"container py-5\" style=\"margin-top: 100px;\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">

                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger alert-dismissible fade show shadow-sm mb-4\" role=\"alert\">
                        <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                        <strong>{{ message }}</strong>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                {% endfor %}

                <div class=\"card shadow-lg border-0 rounded-4\">
                    <div class=\"card-header bg-primary text-white py-4\">
                        <h4 class=\"mb-0 fw-bold\">
                            <i class=\"bi bi-plus-circle me-2\"></i> Créer une nouvelle session
                        </h4>
                    </div>
                    <div class=\"card-body p-4\">
                        {{ form_start(form) }}
                        
                            <!-- Masquer le champ dateHeure original de Symfony -->
                            {{ form_widget(form.dateHeure, {'attr': {'style': 'display: none;'}}) }}
                            
                            <!-- Date et heure - CHAMPS PERSONNALISÉS -->
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\">
                                    <i class=\"bi bi-calendar me-1\"></i> Date et heure *
                                </label>
                                <div class=\"row g-2\">
                                    <div class=\"col-md-6\">
                                        <input type=\"date\" 
                                               name=\"custom_date\" 
                                               id=\"custom_date\"
                                               class=\"form-control\" 
                                               required
                                               style=\"border: 2px solid #e0e0e0; border-radius: 8px;\">
                                    </div>
                                    <div class=\"col-md-6\">
                                        <input type=\"time\" 
                                               name=\"custom_time\" 
                                               id=\"custom_time\"
                                               class=\"form-control\" 
                                               required
                                               style=\"border: 2px solid #e0e0e0; border-radius: 8px;\">
                                    </div>
                                </div>
                                <small class=\"text-muted\">Sélectionnez une date et une heure</small>
                            </div>

                            <!-- Statut -->
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\">
                                    <i class=\"bi bi-tag me-1\"></i> Statut
                                </label>
                                {{ form_widget(form.statut, {'attr': {
                                    'class': 'form-select',
                                    'style': 'border: 2px solid #e0e0e0; border-radius: 8px;'
                                }}) }}
                            </div>

                            <!-- Lien de réunion -->
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\">
                                    <i class=\"bi bi-link-45deg me-1\"></i> Lien de réunion (optionnel)
                                </label>
                                {{ form_widget(form.lienReunion, {'attr': {
                                    'class': 'form-control',
                                    'style': 'border: 2px solid #e0e0e0; border-radius: 8px;',
                                    'placeholder': 'https://zoom.us/j/...'
                                }}) }}
                            </div>

                            <!-- Groupe -->
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\">
                                    <i class=\"bi bi-people me-1\"></i> Groupe
                                </label>
                                {{ form_widget(form.groupe, {'attr': {
                                    'class': 'form-select',
                                    'style': 'border: 2px solid #e0e0e0; border-radius: 8px;'
                                }}) }}
                            </div>

                            <!-- Tuteur -->
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\">
                                    <i class=\"bi bi-person-badge me-1\"></i> Tuteur
                                </label>
                                {{ form_widget(form.user, {'attr': {
                                    'class': 'form-select',
                                    'style': 'border: 2px solid #e0e0e0; border-radius: 8px;'
                                }}) }}
                            </div>

                            <!-- CSRF Token -->
                            {{ form_widget(form._token) }}

                            <div class=\"mt-4 d-flex gap-2\">
                                <button type=\"submit\" class=\"btn btn-primary px-4\">
                                    <i class=\"bi bi-check-circle me-1\"></i> Créer la session
                                </button>
                                <a href=\"{{ path('app_session_index') }}\" class=\"btn btn-secondary px-4\">
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
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        label {
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
        }
        .required:after {
            content: \" *\";
            color: #dc3545;
        }
    </style>

    <!-- Script pour combiner date et heure -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const dateInput = document.getElementById('custom_date');
        const timeInput = document.getElementById('custom_time');
        const dateTimeInput = document.getElementById('{{ form.dateHeure.vars.id }}');
        
        // Définir la date d'aujourd'hui par défaut
        const today = new Date();
        const formattedDate = today.toISOString().split('T')[0];
        const formattedTime = today.getHours().toString().padStart(2, '0') + ':' + 
                              today.getMinutes().toString().padStart(2, '0');
        
        if (!dateInput.value) {
            dateInput.value = formattedDate;
        }
        if (!timeInput.value) {
            timeInput.value = formattedTime;
        }
        
        // Mettre à jour le champ Symfony avec la valeur par défaut
        updateDateTimeField();
        
        // Fonction pour mettre à jour le champ caché
        function updateDateTimeField() {
            const date = dateInput.value;
            const time = timeInput.value;
            
            if (date && time) {
                // Formater au format DateTime de Symfony: YYYY-MM-DD HH:MM:SS
                const dateTimeValue = date + ' ' + time + ':00';
                dateTimeInput.value = dateTimeValue;
            }
        }
        
        // Écouter les changements
        dateInput.addEventListener('change', updateDateTimeField);
        timeInput.addEventListener('change', updateDateTimeField);
        
        // Valider avant soumission
        form.addEventListener('submit', function(e) {
            updateDateTimeField();
            
            if (!dateInput.value || !timeInput.value) {
                e.preventDefault();
                alert('Veuillez sélectionner une date et une heure.');
                return false;
            }
            
            return true;
        });
    });
    </script>
{% endblock %}", "session/new.html.twig", "C:\\Users\\MSI\\Desktop\\Fuser\\Fluently\\Fluently\\Fluently\\Fluently\\templates\\session\\new.html.twig");
    }
}
