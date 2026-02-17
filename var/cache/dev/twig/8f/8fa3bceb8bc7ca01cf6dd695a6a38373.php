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
class __TwigTemplate_299a2f843e73bc4873a275574d2a2fa4 extends Template
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
        // line 24
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
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        
                        ";
        // line 39
        yield "                        <div class=\"form-group mb-4\">
                            <label for=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "titre", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                <i class=\"fa fa-heading text-primary\"></i> Titre de l'objectif *
                            </label>
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "titre", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ex: Maîtriser le français conversationnel", "autofocus" => "autofocus"]]);
        // line 49
        yield "
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "titre", [], "any", false, false, false, 50), 'errors');
        yield "
                            <small class=\"form-text text-muted\">Soyez spécifique et concis (max. 50 caractères)</small>
                        </div>

                        ";
        // line 55
        yield "                        <div class=\"form-group mb-4\">
                            <label for=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                <i class=\"fa fa-align-left text-primary\"></i> Description détaillée *
                            </label>
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Décrivez votre objectif : Que voulez-vous accomplir ? Pourquoi est-ce important pour vous ?"]]);
        // line 65
        yield "
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'errors');
        yield "
                            <small class=\"form-text text-muted\">Expliquez clairement votre objectif (max. 255 caractères)</small>
                        </div>

                        ";
        // line 71
        yield "                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "date_deb", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-calendar text-success\"></i> Date de début *
                                    </label>
                                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "date_deb", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 79
        yield "
                                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "date_deb", [], "any", false, false, false, 80), 'errors');
        yield "
                                    <small class=\"form-text text-muted\">Quand commencez-vous ?</small>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "date_fin", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-calendar-check-o text-danger\"></i> Date de fin *
                                    </label>
                                    ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "date_fin", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 91
        yield "
                                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "date_fin", [], "any", false, false, false, 92), 'errors');
        yield "
                                    <small class=\"form-text text-muted\">Échéance visée</small>
                                </div>
                            </div>
                        </div>

                        ";
        // line 99
        yield "                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "statut", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "id", [], "any", false, false, false, 102), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-flag text-warning\"></i> Statut initial *
                                    </label>
                                    ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "statut", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control custom-select"]]);
        // line 107
        yield "
                                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "statut", [], "any", false, false, false, 108), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "Id_user", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-user text-info\"></i> Assigner à *
                                    </label>
                                    ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "Id_user", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control custom-select"]]);
        // line 118
        yield "
                                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "Id_user", [], "any", false, false, false, 119), 'errors');
        yield "
                                </div>
                            </div>
                        </div>

                        ";
        // line 125
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
        // line 142
        yield "                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\" class=\"btn btn-outline-secondary btn-lg\">
                                <i class=\"fa fa-times\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary btn-lg shadow\">
                                <i class=\"fa fa-rocket\"></i> Créer mon objectif
                            </button>
                        </div>

                        ";
        // line 151
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>

                ";
        // line 156
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
        return array (  314 => 156,  307 => 151,  296 => 143,  293 => 142,  275 => 125,  267 => 119,  264 => 118,  262 => 116,  256 => 113,  248 => 108,  245 => 107,  243 => 105,  237 => 102,  232 => 99,  223 => 92,  220 => 91,  218 => 89,  212 => 86,  203 => 80,  200 => 79,  198 => 77,  192 => 74,  187 => 71,  180 => 66,  177 => 65,  175 => 59,  169 => 56,  166 => 55,  159 => 50,  156 => 49,  154 => 43,  148 => 40,  145 => 39,  140 => 36,  126 => 24,  115 => 15,  111 => 14,  100 => 7,  87 => 5,  64 => 3,  41 => 1,);
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
", "objectif/new.html.twig", "C:\\Users\\emnab\\Documents\\Integration1\\templates\\objectif\\new.html.twig");
    }
}
