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

/* langue/edit.html.twig */
class __TwigTemplate_bde8a4a726c385d2a7bf0c7fd8bc9e1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/edit.html.twig"));

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

        <!-- En-tête de page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        ";
        // line 17
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", ["_route"], "method", false, false, false, 17) == "app_admin_langue_new")) ? ("Nouvelle Langue") : ("Modifier la Langue"));
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "attributes", [], "any", false, false, false, 20), "get", ["_route"], "method", false, false, false, 20) == "app_admin_langue_new")) {
            // line 21
            yield "                            Ajouter une nouvelle langue au catalogue Fluently
                        ";
        } else {
            // line 23
            yield "                            Modifier les informations de cette langue
                        ";
        }
        // line 25
        yield "                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
            </div>
        </div>

        <!-- Formulaire principal -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-primary text-white py-4 px-5 d-flex align-items-center gap-3\">
                        <div class=\"avatar avatar-lg bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow\">
                            <i class=\"feather-plus fs-4\"></i>
                        </div>
                        <div>
                            <h6 class=\"m-0 fw-bold fs-5\">
                                ";
        // line 45
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", ["_route"], "method", false, false, false, 45) == "app_admin_langue_new")) ? ("Créer une nouvelle langue") : ("Modifier la langue"));
        yield "
                            </h6>
                            <small class=\"opacity-90\">
                                Remplissez les informations avec soin pour enrichir Fluently
                            </small>
                        </div>
                    </div>

                    <div class=\"card-body p-5\">
                        ";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4 needs-validation", "novalidate" => "novalidate"]]);
        yield "

                        <div class=\"row g-4\">

                            <!-- Nom de la langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Nom de la langue *</label>
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control form-control-lg", "required" => "required"]]);
        yield "
                                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "nom", [], "any", false, false, false, 62), 'errors');
        yield "
                            </div>

                            <!-- Popularité -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Popularité (optionnel)</label>
                                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "popularite", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                            </div>

                            <!-- Description détaillée -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Description détaillée</label>
                                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control form-control-lg", "rows" => 5, "style" => "min-height: 140px;"]]);
        yield "
                                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "description", [], "any", false, false, false, 75), 'errors');
        yield "
                            </div>

                            <!-- Statut de la langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Statut de la langue</label>
                                ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "isActive", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                                <small class=\"form-text text-muted mt-1\">
                                    \"Oui\" → visible pour les étudiants | \"Non\" → masquée temporairement
                                </small>
                                ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "isActive", [], "any", false, false, false, 85), 'errors');
        yield "
                            </div>

                            <!-- Drapeau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2 d-block\">
                                    Drapeau de la langue
                                    <small class=\"text-muted ms-2\">(PNG, JPG – recommandé 120×80 px)</small>
                                </label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text bg-light\">
                                        <i class=\"feather-image\"></i>
                                    </span>
                                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "drapeauFile", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "drapeauFile", [], "any", false, false, false, 100), 'errors');
        yield "

                                ";
        // line 102
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "request", [], "any", false, false, false, 102), "attributes", [], "any", false, false, false, 102), "get", ["_route"], "method", false, false, false, 102) != "app_admin_langue_new") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 102, $this->source); })()), "drapeau", [], "any", false, false, false, 102))) {
            // line 103
            yield "                                    <div class=\"mt-4 text-center\">
                                        <p class=\"small text-muted mb-2\">Drapeau actuel :</p>
                                        <div class=\"d-inline-block p-2 bg-light rounded-3 shadow-sm\">
                                            <img src=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/langues/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 106, $this->source); })()), "drapeau", [], "any", false, false, false, 106))), "html", null, true);
            yield "\" 
                                                 alt=\"Drapeau ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 107, $this->source); })()), "nom", [], "any", false, false, false, 107), "html", null, true);
            yield "\" 
                                                 class=\"img-fluid rounded\" 
                                                 style=\"max-height: 100px;\">
                                        </div>
                                    </div>
                                ";
        }
        // line 113
        yield "                            </div>

                            <!-- Bouton de soumission -->
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i>
                                    ";
        // line 119
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "request", [], "any", false, false, false, 119), "attributes", [], "any", false, false, false, 119), "get", ["_route"], "method", false, false, false, 119) == "app_admin_langue_new")) ? ("Créer la langue") : ("Mettre à jour la langue"));
        yield "
                                </button>
                            </div>

                        </div>

                        ";
        // line 125
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), 'form_end');
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
        return "langue/edit.html.twig";
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
        return array (  283 => 125,  274 => 119,  266 => 113,  257 => 107,  253 => 106,  248 => 103,  246 => 102,  241 => 100,  236 => 98,  220 => 85,  213 => 81,  204 => 75,  200 => 74,  191 => 68,  182 => 62,  178 => 61,  168 => 54,  156 => 45,  137 => 29,  131 => 25,  127 => 23,  123 => 21,  121 => 20,  115 => 17,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}
    {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Nouvelle Langue' : 'Modifier Langue' }}
{% endblock %}

{% block body %}

    <div class=\"nxl-content\">

        <!-- En-tête de page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Nouvelle Langue' : 'Modifier la Langue' }}
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        {% if app.request.attributes.get('_route') == 'app_admin_langue_new' %}
                            Ajouter une nouvelle langue au catalogue Fluently
                        {% else %}
                            Modifier les informations de cette langue
                        {% endif %}
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_admin_langue_index') }}\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
            </div>
        </div>

        <!-- Formulaire principal -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-primary text-white py-4 px-5 d-flex align-items-center gap-3\">
                        <div class=\"avatar avatar-lg bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow\">
                            <i class=\"feather-plus fs-4\"></i>
                        </div>
                        <div>
                            <h6 class=\"m-0 fw-bold fs-5\">
                                {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Créer une nouvelle langue' : 'Modifier la langue' }}
                            </h6>
                            <small class=\"opacity-90\">
                                Remplissez les informations avec soin pour enrichir Fluently
                            </small>
                        </div>
                    </div>

                    <div class=\"card-body p-5\">
                        {{ form_start(form, {'attr': {'class': 'row g-4 needs-validation', 'novalidate': 'novalidate'}}) }}

                        <div class=\"row g-4\">

                            <!-- Nom de la langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Nom de la langue *</label>
                                {{ form_widget(form.nom, {'attr': {'class': 'form-control form-control-lg', 'required': 'required'}}) }}
                                {{ form_errors(form.nom) }}
                            </div>

                            <!-- Popularité -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Popularité (optionnel)</label>
                                {{ form_widget(form.popularite, {'attr': {'class': 'form-control form-control-lg'}}) }}
                            </div>

                            <!-- Description détaillée -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Description détaillée</label>
                                {{ form_widget(form.description, {'attr': {'class': 'form-control form-control-lg', 'rows': 5, 'style': 'min-height: 140px;'}}) }}
                                {{ form_errors(form.description) }}
                            </div>

                            <!-- Statut de la langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Statut de la langue</label>
                                {{ form_widget(form.isActive, {'attr': {'class': 'form-select form-select-lg'}}) }}
                                <small class=\"form-text text-muted mt-1\">
                                    \"Oui\" → visible pour les étudiants | \"Non\" → masquée temporairement
                                </small>
                                {{ form_errors(form.isActive) }}
                            </div>

                            <!-- Drapeau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2 d-block\">
                                    Drapeau de la langue
                                    <small class=\"text-muted ms-2\">(PNG, JPG – recommandé 120×80 px)</small>
                                </label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text bg-light\">
                                        <i class=\"feather-image\"></i>
                                    </span>
                                    {{ form_widget(form.drapeauFile, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.drapeauFile) }}

                                {% if app.request.attributes.get('_route') != 'app_admin_langue_new' and langue.drapeau %}
                                    <div class=\"mt-4 text-center\">
                                        <p class=\"small text-muted mb-2\">Drapeau actuel :</p>
                                        <div class=\"d-inline-block p-2 bg-light rounded-3 shadow-sm\">
                                            <img src=\"{{ asset('images/langues/' ~ langue.drapeau) }}\" 
                                                 alt=\"Drapeau {{ langue.nom }}\" 
                                                 class=\"img-fluid rounded\" 
                                                 style=\"max-height: 100px;\">
                                        </div>
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Bouton de soumission -->
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i>
                                    {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Créer la langue' : 'Mettre à jour la langue' }}
                                </button>
                            </div>

                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "langue/edit.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\langue\\edit.html.twig");
    }
}
