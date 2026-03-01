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

/* objectif_admin/edit.html.twig */
class __TwigTemplate_b0f322d0cb88378300b1391b16ced8e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_admin/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_admin/edit.html.twig"));

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

        yield "Modifier l'Objectif #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
                <h5 class=\"m-b-10\">Modifier un Objectif</h5>
            </div>
            <ul class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_index");
        yield "\">Objectifs</a>
                </li>
                <li class=\"breadcrumb-item active\">Modifier #";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "</li>
            </ul>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_index");
        yield "\" class=\"btn btn-light\">
                <i class=\"feather-arrow-left me-2\"></i>Retour à la liste
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xxl-8 col-lg-10\">
                <div class=\"card stretch stretch-full\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">
                            <i class=\"feather-edit me-2\"></i>Modifier l'Objectif #";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
        yield "
                        </h5>
                        <p class=\"text-muted mb-0\">
                            Mettez à jour les informations de cet objectif
                        </p>
                    </div>

                    <div class=\"card-body\">
                        ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "

                        <div class=\"row\">
                            ";
        // line 44
        yield "                            <div class=\"col-12 mb-4\">
                                <label class=\"form-label\">
                                    Titre
                                    <span class=\"text-danger\">*</span>
                                </label>
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "titre", [], "any", false, false, false, 49), 'widget');
        yield "
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "titre", [], "any", false, false, false, 50), 'errors');
        yield "
                            </div>

                            ";
        // line 54
        yield "                            <div class=\"col-12 mb-4\">
                                <label class=\"form-label\">
                                    Description
                                    <span class=\"text-danger\">*</span>
                                </label>
                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59), 'widget');
        yield "
                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), 'errors');
        yield "
                            </div>

                            ";
        // line 64
        yield "                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    Date de début
                                    <span class=\"text-danger\">*</span>
                                </label>
                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "date_deb", [], "any", false, false, false, 69), 'widget');
        yield "
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "date_deb", [], "any", false, false, false, 70), 'errors');
        yield "
                            </div>

                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    Date de fin
                                    <span class=\"text-danger\">*</span>
                                </label>
                                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "date_fin", [], "any", false, false, false, 78), 'widget');
        yield "
                                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "date_fin", [], "any", false, false, false, 79), 'errors');
        yield "
                            </div>

                            ";
        // line 83
        yield "                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    Statut
                                    <span class=\"text-danger\">*</span>
                                </label>
                                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "statut", [], "any", false, false, false, 88), 'widget');
        yield "
                                ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "statut", [], "any", false, false, false, 89), 'errors');
        yield "
                            </div>

                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    Utilisateur
                                    <span class=\"text-danger\">*</span>
                                </label>
                                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "Id_user", [], "any", false, false, false, 97), 'widget');
        yield "  ";
        // line 98
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "Id_user", [], "any", false, false, false, 98), 'errors');
        yield "
                            </div>
                        </div>

                        <hr class=\"my-4\">

                        ";
        // line 105
        yield "                        <div class=\"d-flex justify-content-between align-items-center\">
                            ";
        // line 107
        yield "                            <div>
                                <a href=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)]), "html", null, true);
        yield "\" 
                                   class=\"btn btn-danger\"
                                   onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet objectif ?');\">
                                    <i class=\"feather-trash me-2\"></i>Supprimer
                                </a>
                            </div>

                            <div class=\"d-flex gap-2\">
                                <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_index");
        yield "\" class=\"btn btn-light\">
                                    <i class=\"feather-x me-2\"></i>Annuler
                                </a>
                                <button type=\"submit\" class=\"btn btn-warning\">
                                    <i class=\"feather-save me-2\"></i>Mettre à jour
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
        return "objectif_admin/edit.html.twig";
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
        return array (  285 => 125,  273 => 116,  262 => 108,  259 => 107,  256 => 105,  246 => 98,  243 => 97,  232 => 89,  228 => 88,  221 => 83,  215 => 79,  211 => 78,  200 => 70,  196 => 69,  189 => 64,  183 => 60,  179 => 59,  172 => 54,  166 => 50,  162 => 49,  155 => 44,  149 => 40,  138 => 32,  123 => 20,  116 => 16,  111 => 14,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Modifier l'Objectif #{{ objectif.id }}{% endblock %}

{% block body %}
<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Modifier un Objectif</h5>
            </div>
            <ul class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                    <a href=\"{{ path('app_objectif_admin_index') }}\">Objectifs</a>
                </li>
                <li class=\"breadcrumb-item active\">Modifier #{{ objectif.id }}</li>
            </ul>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"{{ path('app_objectif_admin_index') }}\" class=\"btn btn-light\">
                <i class=\"feather-arrow-left me-2\"></i>Retour à la liste
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xxl-8 col-lg-10\">
                <div class=\"card stretch stretch-full\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">
                            <i class=\"feather-edit me-2\"></i>Modifier l'Objectif #{{ objectif.id }}
                        </h5>
                        <p class=\"text-muted mb-0\">
                            Mettez à jour les informations de cet objectif
                        </p>
                    </div>

                    <div class=\"card-body\">
                        {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}

                        <div class=\"row\">
                            {# Titre #}
                            <div class=\"col-12 mb-4\">
                                <label class=\"form-label\">
                                    Titre
                                    <span class=\"text-danger\">*</span>
                                </label>
                                {{ form_widget(form.titre) }}
                                {{ form_errors(form.titre) }}
                            </div>

                            {# Description #}
                            <div class=\"col-12 mb-4\">
                                <label class=\"form-label\">
                                    Description
                                    <span class=\"text-danger\">*</span>
                                </label>
                                {{ form_widget(form.description) }}
                                {{ form_errors(form.description) }}
                            </div>

                            {# Dates #}
                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    Date de début
                                    <span class=\"text-danger\">*</span>
                                </label>
                                {{ form_widget(form.date_deb) }}
                                {{ form_errors(form.date_deb) }}
                            </div>

                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    Date de fin
                                    <span class=\"text-danger\">*</span>
                                </label>
                                {{ form_widget(form.date_fin) }}
                                {{ form_errors(form.date_fin) }}
                            </div>

                            {# Statut & Utilisateur #}
                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    Statut
                                    <span class=\"text-danger\">*</span>
                                </label>
                                {{ form_widget(form.statut) }}
                                {{ form_errors(form.statut) }}
                            </div>

                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    Utilisateur
                                    <span class=\"text-danger\">*</span>
                                </label>
                                {{ form_widget(form.Id_user) }}  {# NOTE: Majuscule I #}
                                {{ form_errors(form.Id_user) }}
                            </div>
                        </div>

                        <hr class=\"my-4\">

                        {# Actions #}
                        <div class=\"d-flex justify-content-between align-items-center\">
                            {# Séparer le formulaire de suppression #}
                            <div>
                                <a href=\"{{ path('app_objectif_admin_delete', {'id': objectif.id}) }}\" 
                                   class=\"btn btn-danger\"
                                   onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet objectif ?');\">
                                    <i class=\"feather-trash me-2\"></i>Supprimer
                                </a>
                            </div>

                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('app_objectif_admin_index') }}\" class=\"btn btn-light\">
                                    <i class=\"feather-x me-2\"></i>Annuler
                                </a>
                                <button type=\"submit\" class=\"btn btn-warning\">
                                    <i class=\"feather-save me-2\"></i>Mettre à jour
                                </button>
                            </div>
                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "objectif_admin/edit.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\objectif_admin\\edit.html.twig");
    }
}
