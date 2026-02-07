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

/* langue/new.html.twig */
class __TwigTemplate_8e8627f00311c71cbdf5aed5c30be8ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/new.html.twig"));

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

        // line 4
        yield "    ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "attributes", [], "any", false, false, false, 4), "get", ["_route"], "method", false, false, false, 4) == "app_admin_langue_new")) ? ("Nouvelle Langue") : ("Modifier Langue"));
        yield "
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
        yield "
    <div class=\"nxl-content\">

        <!-- Header de la page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">
                        ";
        // line 16
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", ["_route"], "method", false, false, false, 16) == "app_admin_langue_new")) ? ("Nouvelle Langue") : ("Modifier la Langue"));
        yield "
                    </h5>
                    <h6 class=\"m-b-0\">
                        ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", ["_route"], "method", false, false, false, 19) == "app_admin_langue_new")) {
            // line 20
            yield "                            Ajouter une nouvelle langue au catalogue
                        ";
        } else {
            // line 22
            yield "                            Modifier les informations de la langue
                        ";
        }
        // line 24
        yield "                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
            </div>
        </div>

        <!-- Card principale -->
        <div class=\"main-content\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-bottom\">
                    <h6 class=\"m-0\">
                        <i class=\"feather-plus-circle text-primary me-2\"></i>
                        ";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "attributes", [], "any", false, false, false, 40), "get", ["_route"], "method", false, false, false, 40) == "app_admin_langue_new")) ? ("Créer une nouvelle langue") : ("Modifier la langue"));
        yield "
                    </h6>
                </div>

                <div class=\"card-body\">
                    ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4"]]);
        yield "

                    <!-- Nom -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "nom", [], "any", false, false, false, 50), 'widget', ["attr" => ["placeholder" => " "]]);
        yield "
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51), 'label');
        yield "
                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- Popularité -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "popularite", [], "any", false, false, false, 59), 'widget', ["attr" => ["placeholder" => " "]]);
        yield "
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "popularite", [], "any", false, false, false, 60), 'label');
        yield "
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "description", [], "any", false, false, false, 67), 'widget', ["attr" => ["placeholder" => " ", "style" => "min-height: 140px;"]]);
        yield "
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), 'label');
        yield "
                        </div>
                    </div>

                    <!-- Statut Active -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            <select class=\"form-select\" id=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "isActive", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "isActive", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "full_name", [], "any", false, false, false, 75), "html", null, true);
        yield "\">
                                <option value=\"1\" ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "isActive", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76) == true)) {
            yield "selected";
        }
        yield ">Oui - Visible aux étudiants</option>
                                <option value=\"0\" ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "isActive", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "value", [], "any", false, false, false, 77) == false)) {
            yield "selected";
        }
        yield ">Non - Masquée</option>
                            </select>
                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "isActive", [], "any", false, false, false, 79), 'label', ["label" => "Statut"]);
        yield "
                        </div>
                    </div>

                    <!-- Drapeau -->
                    <div class=\"col-md-6\">
                        <label class=\"form-label fw-bold\">Drapeau (image)</label>
                        <div class=\"input-group\">
                            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "drapeauFile", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "drapeauFile", [], "any", false, false, false, 89), 'errors');
        yield "

                        
                    </div>

                    <!-- Bouton Soumission -->
                    <div class=\"col-12 text-end mt-4 pt-3 border-top\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                            <i class=\"feather-save me-2\"></i>
                            ";
        // line 98
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "attributes", [], "any", false, false, false, 98), "get", ["_route"], "method", false, false, false, 98) == "app_admin_langue_new")) ? ("Créer la langue") : ("Enregistrer les modifications"));
        yield "
                        </button>
                    </div>

                    ";
        // line 102
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
        yield "
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
        return "langue/new.html.twig";
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
        return array (  267 => 102,  260 => 98,  248 => 89,  243 => 87,  232 => 79,  225 => 77,  219 => 76,  213 => 75,  203 => 68,  199 => 67,  189 => 60,  185 => 59,  175 => 52,  171 => 51,  167 => 50,  159 => 45,  151 => 40,  136 => 28,  130 => 24,  126 => 22,  122 => 20,  120 => 19,  114 => 16,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}
    {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Nouvelle Langue' : 'Modifier Langue' }}
{% endblock %}

{% block body %}

    <div class=\"nxl-content\">

        <!-- Header de la page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">
                        {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Nouvelle Langue' : 'Modifier la Langue' }}
                    </h5>
                    <h6 class=\"m-b-0\">
                        {% if app.request.attributes.get('_route') == 'app_admin_langue_new' %}
                            Ajouter une nouvelle langue au catalogue
                        {% else %}
                            Modifier les informations de la langue
                        {% endif %}
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_admin_langue_index') }}\" class=\"btn btn-outline-secondary\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
            </div>
        </div>

        <!-- Card principale -->
        <div class=\"main-content\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-bottom\">
                    <h6 class=\"m-0\">
                        <i class=\"feather-plus-circle text-primary me-2\"></i>
                        {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Créer une nouvelle langue' : 'Modifier la langue' }}
                    </h6>
                </div>

                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'class': 'row g-4'}}) }}

                    <!-- Nom -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.nom, {'attr': {'placeholder': ' '}}) }}
                            {{ form_label(form.nom) }}
                            {{ form_errors(form.nom) }}
                        </div>
                    </div>

                    <!-- Popularité -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.popularite, {'attr': {'placeholder': ' '}}) }}
                            {{ form_label(form.popularite) }}
                        </div>
                    </div>

                    <!-- Description -->
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.description, {'attr': {'placeholder': ' ', 'style': 'min-height: 140px;'}}) }}
                            {{ form_label(form.description) }}
                        </div>
                    </div>

                    <!-- Statut Active -->
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            <select class=\"form-select\" id=\"{{ form.isActive.vars.id }}\" name=\"{{ form.isActive.vars.full_name }}\">
                                <option value=\"1\" {% if form.isActive.vars.value == true %}selected{% endif %}>Oui - Visible aux étudiants</option>
                                <option value=\"0\" {% if form.isActive.vars.value == false %}selected{% endif %}>Non - Masquée</option>
                            </select>
                            {{ form_label(form.isActive, 'Statut') }}
                        </div>
                    </div>

                    <!-- Drapeau -->
                    <div class=\"col-md-6\">
                        <label class=\"form-label fw-bold\">Drapeau (image)</label>
                        <div class=\"input-group\">
                            {{ form_widget(form.drapeauFile, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        {{ form_errors(form.drapeauFile) }}

                        
                    </div>

                    <!-- Bouton Soumission -->
                    <div class=\"col-12 text-end mt-4 pt-3 border-top\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                            <i class=\"feather-save me-2\"></i>
                            {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Créer la langue' : 'Enregistrer les modifications' }}
                        </button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "langue/new.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\langue\\new.html.twig");
    }
}
