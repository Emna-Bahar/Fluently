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

/* objectif/edit.html.twig */
class __TwigTemplate_5ec9e21b7607a3c2bc4ae9a8f338dfce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/edit.html.twig"));

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

        yield "Modifier Objectif - Fluently";
        
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
                <h1 class=\"mb-2 bread\">Modifier l'Objectif</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span class=\"mr-2\"><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\">Objectifs <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Modifier</span>
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
                    <div class=\"card-header text-white\" style=\"background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 15px 15px 0 0; padding: 2rem;\">
                        <h4 class=\"mb-0\">
                            <i class=\"fa fa-edit\"></i> Modifier \"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 31, $this->source); })()), "titre", [], "any", false, false, false, 31), "html", null, true);
        yield "\"
                        </h4>
                    </div>
                    <div class=\"card-body p-5\">
                        ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        
                        ";
        // line 38
        yield "                        <div class=\"form-group mb-4\">
                            <label for=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "titre", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                <i class=\"fa fa-heading text-primary\"></i> Titre de l'objectif *
                            </label>
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "titre", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ex: Maîtriser le français conversationnel"]]);
        // line 47
        yield "
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "titre", [], "any", false, false, false, 48), 'errors');
        yield "
                            <small class=\"form-text text-muted\">Maximum 50 caractères</small>
                        </div>

                        ";
        // line 53
        yield "                        <div class=\"form-group mb-4\">
                            <label for=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                <i class=\"fa fa-align-left text-primary\"></i> Description *
                            </label>
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Décrivez votre objectif en détail..."]]);
        // line 63
        yield "
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), 'errors');
        yield "
                            <small class=\"form-text text-muted\">Maximum 255 caractères</small>
                        </div>

                        ";
        // line 69
        yield "                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "date_deb", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-calendar text-success\"></i> Date de début *
                                    </label>
                                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "date_deb", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 77
        yield "
                                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "date_deb", [], "any", false, false, false, 78), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "date_fin", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-calendar-check-o text-danger\"></i> Date de fin *
                                    </label>
                                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "date_fin", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 88
        yield "
                                    ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "date_fin", [], "any", false, false, false, 89), 'errors');
        yield "
                                </div>
                            </div>
                        </div>

                        ";
        // line 95
        yield "                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "statut", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-flag text-warning\"></i> Statut *
                                    </label>
                                    ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "statut", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control custom-select"]]);
        // line 103
        yield "
                                    ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "statut", [], "any", false, false, false, 104), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "Id_user", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-user text-info\"></i> Utilisateur *
                                    </label>
                                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "Id_user", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control custom-select"]]);
        // line 114
        yield "
                                    ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "Id_user", [], "any", false, false, false, 115), 'errors');
        yield "
                                </div>
                            </div>
                        </div>

                        <div class=\"alert alert-info border-0 shadow-sm\" style=\"border-radius: 10px;\">
                            <i class=\"fa fa-lightbulb-o\"></i> <strong>Conseil :</strong> Modifiez le statut pour refléter votre progression actuelle.
                        </div>

                        <hr class=\"my-4\">

                        ";
        // line 127
        yield "                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\" class=\"btn btn-secondary btn-lg\">
                                <i class=\"fa fa-times\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-warning btn-lg shadow\">
                                <i class=\"fa fa-save\"></i> Enregistrer les modifications
                            </button>
                        </div>

                        ";
        // line 136
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), 'form_end');
        yield "

                        ";
        // line 139
        yield "                        <hr class=\"my-4\">
                        <div class=\"text-center\">
                            <p class=\"text-muted mb-2\">Zone de danger</p>
                            <button type=\"button\" class=\"btn btn-outline-danger\" data-toggle=\"modal\" data-target=\"#deleteModal\">
                                <i class=\"fa fa-trash\"></i> Supprimer cet objectif
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 154
        yield "<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\" style=\"border-radius: 15px; border: none;\">
            <div class=\"modal-header bg-danger text-white\" style=\"border-radius: 15px 15px 0 0;\">
                <h5 class=\"modal-title\">
                    <i class=\"fa fa-exclamation-triangle\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"close text-white\" data-dismiss=\"modal\">
                    <span>&times;</span>
                </button>
            </div>
            <div class=\"modal-body p-4\">
                <p>Êtes-vous sûr de vouloir supprimer cet objectif ?</p>
                <div class=\"alert alert-warning\">
                    <i class=\"fa fa-warning\"></i> <strong>Attention :</strong> Cette action est irréversible et supprimera toutes les tâches associées.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i> Annuler
                </button>
                <form method=\"post\" action=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 175, $this->source); })()), "id", [], "any", false, false, false, 175)]), "html", null, true);
        yield "\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 176, $this->source); })()), "id", [], "any", false, false, false, 176))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fa fa-trash\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control:focus, .custom-select:focus {
        border-color: #f5576c;
        box-shadow: 0 0 0 0.2rem rgba(245, 87, 108, 0.25);
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
        return "objectif/edit.html.twig";
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
        return array (  343 => 176,  339 => 175,  316 => 154,  300 => 139,  295 => 136,  284 => 128,  281 => 127,  267 => 115,  264 => 114,  262 => 112,  256 => 109,  248 => 104,  245 => 103,  243 => 101,  237 => 98,  232 => 95,  224 => 89,  221 => 88,  219 => 86,  213 => 83,  205 => 78,  202 => 77,  200 => 75,  194 => 72,  189 => 69,  182 => 64,  179 => 63,  177 => 57,  171 => 54,  168 => 53,  161 => 48,  158 => 47,  156 => 42,  150 => 39,  147 => 38,  142 => 35,  135 => 31,  126 => 24,  115 => 15,  111 => 14,  100 => 7,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Objectif - Fluently{% endblock %}

{% block body %}
{# Hero Section #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_1.jpg') }}');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Modifier l'Objectif</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"{{ path('app_home') }}\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span class=\"mr-2\"><a href=\"{{ path('app_objectif_index') }}\">Objectifs <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Modifier</span>
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
                    <div class=\"card-header text-white\" style=\"background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 15px 15px 0 0; padding: 2rem;\">
                        <h4 class=\"mb-0\">
                            <i class=\"fa fa-edit\"></i> Modifier \"{{ objectif.titre }}\"
                        </h4>
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
                                    'placeholder': 'Ex: Maîtriser le français conversationnel'
                                }
                            }) }}
                            {{ form_errors(form.titre) }}
                            <small class=\"form-text text-muted\">Maximum 50 caractères</small>
                        </div>

                        {# Description #}
                        <div class=\"form-group mb-4\">
                            <label for=\"{{ form.description.vars.id }}\" class=\"font-weight-bold\">
                                <i class=\"fa fa-align-left text-primary\"></i> Description *
                            </label>
                            {{ form_widget(form.description, {
                                'attr': {
                                    'class': 'form-control',
                                    'rows': 4,
                                    'placeholder': 'Décrivez votre objectif en détail...'
                                }
                            }) }}
                            {{ form_errors(form.description) }}
                            <small class=\"form-text text-muted\">Maximum 255 caractères</small>
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
                                </div>
                            </div>
                        </div>

                        {# Statut et Utilisateur #}
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"{{ form.statut.vars.id }}\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-flag text-warning\"></i> Statut *
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
                                        <i class=\"fa fa-user text-info\"></i> Utilisateur *
                                    </label>
                                    {{ form_widget(form.Id_user, {
                                        'attr': {'class': 'form-control custom-select'}
                                    }) }}
                                    {{ form_errors(form.Id_user) }}
                                </div>
                            </div>
                        </div>

                        <div class=\"alert alert-info border-0 shadow-sm\" style=\"border-radius: 10px;\">
                            <i class=\"fa fa-lightbulb-o\"></i> <strong>Conseil :</strong> Modifiez le statut pour refléter votre progression actuelle.
                        </div>

                        <hr class=\"my-4\">

                        {# Boutons d'action #}
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"{{ path('app_objectif_index') }}\" class=\"btn btn-secondary btn-lg\">
                                <i class=\"fa fa-times\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-warning btn-lg shadow\">
                                <i class=\"fa fa-save\"></i> Enregistrer les modifications
                            </button>
                        </div>

                        {{ form_end(form) }}

                        {# Bouton de suppression #}
                        <hr class=\"my-4\">
                        <div class=\"text-center\">
                            <p class=\"text-muted mb-2\">Zone de danger</p>
                            <button type=\"button\" class=\"btn btn-outline-danger\" data-toggle=\"modal\" data-target=\"#deleteModal\">
                                <i class=\"fa fa-trash\"></i> Supprimer cet objectif
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{# Modal de suppression #}
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\" style=\"border-radius: 15px; border: none;\">
            <div class=\"modal-header bg-danger text-white\" style=\"border-radius: 15px 15px 0 0;\">
                <h5 class=\"modal-title\">
                    <i class=\"fa fa-exclamation-triangle\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"close text-white\" data-dismiss=\"modal\">
                    <span>&times;</span>
                </button>
            </div>
            <div class=\"modal-body p-4\">
                <p>Êtes-vous sûr de vouloir supprimer cet objectif ?</p>
                <div class=\"alert alert-warning\">
                    <i class=\"fa fa-warning\"></i> <strong>Attention :</strong> Cette action est irréversible et supprimera toutes les tâches associées.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i> Annuler
                </button>
                <form method=\"post\" action=\"{{ path('app_objectif_delete', {'id': objectif.id}) }}\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ objectif.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fa fa-trash\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control:focus, .custom-select:focus {
        border-color: #f5576c;
        box-shadow: 0 0 0 0.2rem rgba(245, 87, 108, 0.25);
    }
    .card {
        overflow: hidden;
    }
</style>
{% endblock %}
", "objectif/edit.html.twig", "C:\\Users\\emnab\\Documents\\PI\\Fluently\\templates\\objectif\\edit.html.twig");
    }
}
