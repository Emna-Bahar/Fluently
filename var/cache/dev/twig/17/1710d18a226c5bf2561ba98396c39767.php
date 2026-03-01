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

/* objectif/new.html.twig */
class __TwigTemplate_b785188bcd6f69078f52c7209e8d1c74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/new.html.twig"));

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

        yield "Nouvel Objectif - Fluently";
        
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

        // line 7
        yield "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_1.jpg"), "html", null, true);
        yield "');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Créer un Nouvel Objectif</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span class=\"mr-2\"><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\">Objectifs <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Nouveau</span>
                </p>
            </div>
        </div>
        
    </div>
</section>

";
        // line 25
        yield "<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10 col-lg-8\">
                <div class=\"card border-0 shadow-lg\" style=\"border-radius: 15px;\">
                    <div class=\"card-header text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px 15px 0 0; padding: 2rem;\">
                        <h4 class=\"mb-0\">
                            <i class=\"fa fa-plus-circle\"></i> Définissez votre objectif d'apprentissage
                        </h4>
                        <p class=\"mb-0 mt-2\"><small>Fixez-vous des objectifs clairs pour progresser efficacement</small></p>
                    </div>
                    <div class=\"card-body p-5\">
                        ";
        // line 37
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        
                        ";
        // line 40
        yield "                        <div class=\"form-group mb-4\">
                            <label for=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "titre", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                <i class=\"fa fa-heading text-primary\"></i> Titre de l'objectif *
                            </label>
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "titre", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ex: Maîtriser le français conversationnel", "autofocus" => "autofocus"]]);
        // line 50
        yield "
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "titre", [], "any", false, false, false, 51), 'errors');
        yield "
                            <small class=\"form-text text-muted\">Soyez spécifique et concis (max. 50 caractères)</small>
                        </div>

                        ";
        // line 56
        yield "                        <div class=\"form-group mb-4\">
                            <label for=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                <i class=\"fa fa-align-left text-primary\"></i> Description détaillée *
                            </label>
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Décrivez votre objectif : Que voulez-vous accomplir ? Pourquoi est-ce important pour vous ?"]]);
        // line 66
        yield "
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "description", [], "any", false, false, false, 67), 'errors');
        yield "
                            <small class=\"form-text text-muted\">Expliquez clairement votre objectif (max. 255 caractères)</small>
                        </div>

                        ";
        // line 72
        yield "                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "date_deb", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-calendar text-success\"></i> Date de début *
                                    </label>
                                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "date_deb", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 80
        yield "
                                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "date_deb", [], "any", false, false, false, 81), 'errors');
        yield "
                                    <small class=\"form-text text-muted\">Quand commencez-vous ?</small>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "date_fin", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-calendar-check-o text-danger\"></i> Date de fin *
                                    </label>
                                    ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "date_fin", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 92
        yield "
                                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "date_fin", [], "any", false, false, false, 93), 'errors');
        yield "
                                    <small class=\"form-text text-muted\">Échéance visée</small>
                                </div>
                            </div>
                        </div>

                        ";
        // line 100
        yield "                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "statut", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-flag text-warning\"></i> Statut initial *
                                    </label>
                                    ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "statut", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control custom-select"]]);
        // line 108
        yield "
                                    ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "statut", [], "any", false, false, false, 109), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "Id_user", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-user text-info\"></i> Assigner à *
                                    </label>
                                    ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "Id_user", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "form-control custom-select"]]);
        // line 119
        yield "
                                    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "Id_user", [], "any", false, false, false, 120), 'errors');
        yield "
                                </div>
                            </div>
                        </div>

                        ";
        // line 126
        yield "                        <div class=\"alert border-0 shadow-sm\" style=\"background: linear-gradient(135deg, #f093fb20 0%, #f5576c20 100%); border-radius: 10px;\">
                            <h6 class=\"font-weight-bold\">
                                <i class=\"fa fa-lightbulb-o text-warning\"></i> Objectifs SMART
                            </h6>
                            <p class=\"mb-2 small\">Pour maximiser vos chances de réussite, assurez-vous que votre objectif soit :</p>
                            <ul class=\"mb-0 small\">
                                <li><strong>S</strong>pécifique - Clair et précis</li>
                                <li><strong>M</strong>esurable - Quantifiable</li>
                                <li><strong>A</strong>tteignable - Réaliste</li>
                                <li><strong>R</strong>elevant - Pertinent pour vous</li>
                                <li><strong>T</strong>emporellement défini - Avec une échéance</li>
                            </ul>
                        </div>

                        <hr class=\"my-4\">

                        ";
        // line 143
        yield "                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\" class=\"btn btn-outline-secondary btn-lg\">
                                <i class=\"fa fa-times\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary btn-lg shadow\">
                                <i class=\"fa fa-rocket\"></i> Créer mon objectif
                            </button>
                        </div>

                        ";
        // line 152
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>

                ";
        // line 157
        yield "                <div class=\"card border-0 shadow-sm mt-4\" style=\"border-radius: 15px; background: linear-gradient(135deg, #667eea10 0%, #764ba210 100%);\">
                    <div class=\"card-body text-center p-4\">
                        <i class=\"fa fa-trophy fa-3x text-warning mb-3\"></i>
                        <h5 class=\"mb-2\">Commencez votre parcours aujourd'hui !</h5>
                        <p class=\"text-muted mb-0\">Chaque objectif atteint est une victoire. Décomposez-le en tâches réalisables et célébrez vos progrès.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .form-control:focus, .custom-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }
    .card {
        overflow: hidden;
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
        return "objectif/new.html.twig";
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
        return array (  315 => 157,  308 => 152,  297 => 144,  294 => 143,  276 => 126,  268 => 120,  265 => 119,  263 => 117,  257 => 114,  249 => 109,  246 => 108,  244 => 106,  238 => 103,  233 => 100,  224 => 93,  221 => 92,  219 => 90,  213 => 87,  204 => 81,  201 => 80,  199 => 78,  193 => 75,  188 => 72,  181 => 67,  178 => 66,  176 => 60,  170 => 57,  167 => 56,  160 => 51,  157 => 50,  155 => 44,  149 => 41,  146 => 40,  141 => 37,  127 => 25,  115 => 15,  111 => 14,  100 => 7,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvel Objectif - Fluently{% endblock %}

{% block body %}
{# Hero Section #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_1.jpg') }}');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Créer un Nouvel Objectif</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"{{ path('app_home') }}\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span class=\"mr-2\"><a href=\"{{ path('app_objectif_index') }}\">Objectifs <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Nouveau</span>
                </p>
            </div>
        </div>
        
    </div>
</section>

{# Main Content #}
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10 col-lg-8\">
                <div class=\"card border-0 shadow-lg\" style=\"border-radius: 15px;\">
                    <div class=\"card-header text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px 15px 0 0; padding: 2rem;\">
                        <h4 class=\"mb-0\">
                            <i class=\"fa fa-plus-circle\"></i> Définissez votre objectif d'apprentissage
                        </h4>
                        <p class=\"mb-0 mt-2\"><small>Fixez-vous des objectifs clairs pour progresser efficacement</small></p>
                    </div>
                    <div class=\"card-body p-5\">
                        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                        
                        {# Titre #}
                        <div class=\"form-group mb-4\">
                            <label for=\"{{ form.titre.vars.id }}\" class=\"font-weight-bold\">
                                <i class=\"fa fa-heading text-primary\"></i> Titre de l'objectif *
                            </label>
                            {{ form_widget(form.titre, {
                                'attr': {
                                    'class': 'form-control form-control-lg',
                                    'placeholder': 'Ex: Maîtriser le français conversationnel',
                                    'autofocus': 'autofocus'
                                }
                            }) }}
                            {{ form_errors(form.titre) }}
                            <small class=\"form-text text-muted\">Soyez spécifique et concis (max. 50 caractères)</small>
                        </div>

                        {# Description #}
                        <div class=\"form-group mb-4\">
                            <label for=\"{{ form.description.vars.id }}\" class=\"font-weight-bold\">
                                <i class=\"fa fa-align-left text-primary\"></i> Description détaillée *
                            </label>
                            {{ form_widget(form.description, {
                                'attr': {
                                    'class': 'form-control',
                                    'rows': 4,
                                    'placeholder': 'Décrivez votre objectif : Que voulez-vous accomplir ? Pourquoi est-ce important pour vous ?'
                                }
                            }) }}
                            {{ form_errors(form.description) }}
                            <small class=\"form-text text-muted\">Expliquez clairement votre objectif (max. 255 caractères)</small>
                        </div>

                        {# Dates #}
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"{{ form.date_deb.vars.id }}\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-calendar text-success\"></i> Date de début *
                                    </label>
                                    {{ form_widget(form.date_deb, {
                                        'attr': {'class': 'form-control'}
                                    }) }}
                                    {{ form_errors(form.date_deb) }}
                                    <small class=\"form-text text-muted\">Quand commencez-vous ?</small>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"{{ form.date_fin.vars.id }}\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-calendar-check-o text-danger\"></i> Date de fin *
                                    </label>
                                    {{ form_widget(form.date_fin, {
                                        'attr': {'class': 'form-control'}
                                    }) }}
                                    {{ form_errors(form.date_fin) }}
                                    <small class=\"form-text text-muted\">Échéance visée</small>
                                </div>
                            </div>
                        </div>

                        {# Statut et Utilisateur #}
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"{{ form.statut.vars.id }}\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-flag text-warning\"></i> Statut initial *
                                    </label>
                                    {{ form_widget(form.statut, {
                                        'attr': {'class': 'form-control custom-select'}
                                    }) }}
                                    {{ form_errors(form.statut) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"{{ form.Id_user.vars.id }}\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-user text-info\"></i> Assigner à *
                                    </label>
                                    {{ form_widget(form.Id_user, {
                                        'attr': {'class': 'form-control custom-select'}
                                    }) }}
                                    {{ form_errors(form.Id_user) }}
                                </div>
                            </div>
                        </div>

                        {# Conseils SMART #}
                        <div class=\"alert border-0 shadow-sm\" style=\"background: linear-gradient(135deg, #f093fb20 0%, #f5576c20 100%); border-radius: 10px;\">
                            <h6 class=\"font-weight-bold\">
                                <i class=\"fa fa-lightbulb-o text-warning\"></i> Objectifs SMART
                            </h6>
                            <p class=\"mb-2 small\">Pour maximiser vos chances de réussite, assurez-vous que votre objectif soit :</p>
                            <ul class=\"mb-0 small\">
                                <li><strong>S</strong>pécifique - Clair et précis</li>
                                <li><strong>M</strong>esurable - Quantifiable</li>
                                <li><strong>A</strong>tteignable - Réaliste</li>
                                <li><strong>R</strong>elevant - Pertinent pour vous</li>
                                <li><strong>T</strong>emporellement défini - Avec une échéance</li>
                            </ul>
                        </div>

                        <hr class=\"my-4\">

                        {# Boutons d'action #}
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"{{ path('app_objectif_index') }}\" class=\"btn btn-outline-secondary btn-lg\">
                                <i class=\"fa fa-times\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary btn-lg shadow\">
                                <i class=\"fa fa-rocket\"></i> Créer mon objectif
                            </button>
                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>

                {# Carte d'encouragement #}
                <div class=\"card border-0 shadow-sm mt-4\" style=\"border-radius: 15px; background: linear-gradient(135deg, #667eea10 0%, #764ba210 100%);\">
                    <div class=\"card-body text-center p-4\">
                        <i class=\"fa fa-trophy fa-3x text-warning mb-3\"></i>
                        <h5 class=\"mb-2\">Commencez votre parcours aujourd'hui !</h5>
                        <p class=\"text-muted mb-0\">Chaque objectif atteint est une victoire. Décomposez-le en tâches réalisables et célébrez vos progrès.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .form-control:focus, .custom-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }
    .card {
        overflow: hidden;
    }
</style>
{% endblock %}
", "objectif/new.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\objectif\\new.html.twig");
    }
}
