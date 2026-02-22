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

/* test_student/result.html.twig */
class __TwigTemplate_2300344101c0f266d19ac56d517ec603 extends Template
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
            'css' => [$this, 'block_css'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_student/result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_student/result.html.twig"));

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

        yield "Résultats de ton test - Fluently";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 6
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
<style>
    .result-container {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 60px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .result-card {
        background: white;
        border-radius: 30px;
        box-shadow: 0 30px 80px rgba(0,0,0,0.4);
        max-width: 800px;
        overflow: hidden;
        color: #1e293b;
    }
    .result-header {
        padding: 50px 30px;
        text-align: center;
        color: white;
        ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["passage"]) || array_key_exists("passage", $context) ? $context["passage"] : (function () { throw new RuntimeError('Variable "passage" does not exist.', 28, $this->source); })()), "resultat", [], "any", false, false, false, 28) >= 80)) {
            // line 29
            yield "            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["passage"]) || array_key_exists("passage", $context) ? $context["passage"] : (function () { throw new RuntimeError('Variable "passage" does not exist.', 30, $this->source); })()), "resultat", [], "any", false, false, false, 30) >= 50)) {
            // line 31
            yield "            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        ";
        } else {
            // line 33
            yield "            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        ";
        }
        // line 35
        yield "    }
    .score-circle {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
        border: 10px solid rgba(255,255,255,0.4);
    }
    .score-number {
        font-size: 4rem;
        font-weight: 900;
    }
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
        padding: 30px;
        background: #f8f9fa;
    }
    .stat-item {
        text-align: center;
        padding: 20px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .details-section {
        padding: 30px;
    }
    .question-result {
        padding: 20px;
        margin-bottom: 15px;
        border-radius: 12px;
        border-left: 5px solid;
    }
    .question-result.correct {
        background: #d1fae5;
        border-color: #10b981;
    }
    .question-result.incorrect {
        background: #fee2e2;
        border-color: #ef4444;
    }
    .action-buttons {
        padding: 30px;
        text-align: center;
        background: #f8f9fa;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 90
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

        // line 91
        yield "<div class=\"result-container\">
    <div class=\"result-card\">
        <div class=\"result-header\">
            <div class=\"score-circle\">
                <div class=\"score-number\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passage"]) || array_key_exists("passage", $context) ? $context["passage"] : (function () { throw new RuntimeError('Variable "passage" does not exist.', 95, $this->source); })()), "resultat", [], "any", false, false, false, 95), 1), "html", null, true);
        yield "%</div>
            </div>
            <h1 class=\"mb-3\">
                ";
        // line 98
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["passage"]) || array_key_exists("passage", $context) ? $context["passage"] : (function () { throw new RuntimeError('Variable "passage" does not exist.', 98, $this->source); })()), "resultat", [], "any", false, false, false, 98) >= 80)) {
            // line 99
            yield "                    🎉 Excellent !
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 100
(isset($context["passage"]) || array_key_exists("passage", $context) ? $context["passage"] : (function () { throw new RuntimeError('Variable "passage" does not exist.', 100, $this->source); })()), "resultat", [], "any", false, false, false, 100) >= 50)) {
            // line 101
            yield "                    👍 Bien joué !
                ";
        } else {
            // line 103
            yield "                    💪 Continue !
                ";
        }
        // line 105
        yield "            </h1>
            <p class=\"mb-0\">
                ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passage"]) || array_key_exists("passage", $context) ? $context["passage"] : (function () { throw new RuntimeError('Variable "passage" does not exist.', 107, $this->source); })()), "test", [], "any", false, false, false, 107), "type", [], "any", false, false, false, 107), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passage"]) || array_key_exists("passage", $context) ? $context["passage"] : (function () { throw new RuntimeError('Variable "passage" does not exist.', 107, $this->source); })()), "test", [], "any", false, false, false, 107), "langue", [], "any", false, false, false, 107), "nom", [], "any", false, false, false, 107), "html", null, true);
        yield "
            </p>
        </div>

        <div class=\"stats-grid\">
            <div class=\"stat-item\">
                <i class=\"fas fa-check-circle text-success fa-2x mb-2\"></i>
                <h3>";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passage"]) || array_key_exists("passage", $context) ? $context["passage"] : (function () { throw new RuntimeError('Variable "passage" does not exist.', 114, $this->source); })()), "score", [], "any", false, false, false, 114), "html", null, true);
        yield "</h3>
                <small>Ton score</small>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-star text-warning fa-2x mb-2\"></i>
                <h3>";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passage"]) || array_key_exists("passage", $context) ? $context["passage"] : (function () { throw new RuntimeError('Variable "passage" does not exist.', 119, $this->source); })()), "scoreMax", [], "any", false, false, false, 119), "html", null, true);
        yield "</h3>
                <small>Maximum</small>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-clock text-primary fa-2x mb-2\"></i>
                <h3>";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["passage"]) || array_key_exists("passage", $context) ? $context["passage"] : (function () { throw new RuntimeError('Variable "passage" does not exist.', 124, $this->source); })()), "tempsPasse", [], "any", false, false, false, 124) / 60), 0), "html", null, true);
        yield " min</h3>
                <small>Temps passé</small>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-calendar-check text-info fa-2x mb-2\"></i>
                <h3>";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passage"]) || array_key_exists("passage", $context) ? $context["passage"] : (function () { throw new RuntimeError('Variable "passage" does not exist.', 129, $this->source); })()), "dateFin", [], "any", false, false, false, 129), "d/m/Y H:i"), "html", null, true);
        yield "</h3>
                <small>Terminé le</small>
            </div>
        </div>

        <div class=\"details-section\">
            <h3 class=\"mb-4 text-center\">
                <i class=\"fas fa-list-check\"></i> Détails de tes réponses
            </h3>

            ";
        // line 140
        yield "            ";
        // line 141
        yield "            <div class=\"alert alert-info text-center\">
                <i class=\"fas fa-info-circle\"></i> 
                Détails des réponses par question bientôt disponibles !
            </div>
        </div>

        <div class=\"action-buttons\">
            <a href=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_apprentissage", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passage"]) || array_key_exists("passage", $context) ? $context["passage"] : (function () { throw new RuntimeError('Variable "passage" does not exist.', 148, $this->source); })()), "test", [], "any", false, false, false, 148), "langue", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-arrow-left\"></i> Retour au parcours
            </a>
            <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_index");
        yield "\" class=\"btn btn-outline-secondary btn-lg ms-2\">
                <i class=\"fas fa-home\"></i> Autres langues
            </a>
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
        return "test_student/result.html.twig";
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
        return array (  315 => 151,  309 => 148,  300 => 141,  298 => 140,  285 => 129,  277 => 124,  269 => 119,  261 => 114,  249 => 107,  245 => 105,  241 => 103,  237 => 101,  235 => 100,  232 => 99,  230 => 98,  224 => 95,  218 => 91,  205 => 90,  141 => 35,  137 => 33,  133 => 31,  131 => 30,  128 => 29,  126 => 28,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Résultats de ton test - Fluently{% endblock %}

{% block css %}
{{ parent() }}
<style>
    .result-container {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 60px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .result-card {
        background: white;
        border-radius: 30px;
        box-shadow: 0 30px 80px rgba(0,0,0,0.4);
        max-width: 800px;
        overflow: hidden;
        color: #1e293b;
    }
    .result-header {
        padding: 50px 30px;
        text-align: center;
        color: white;
        {% if passage.resultat >= 80 %}
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        {% elseif passage.resultat >= 50 %}
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        {% else %}
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        {% endif %}
    }
    .score-circle {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
        border: 10px solid rgba(255,255,255,0.4);
    }
    .score-number {
        font-size: 4rem;
        font-weight: 900;
    }
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
        padding: 30px;
        background: #f8f9fa;
    }
    .stat-item {
        text-align: center;
        padding: 20px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .details-section {
        padding: 30px;
    }
    .question-result {
        padding: 20px;
        margin-bottom: 15px;
        border-radius: 12px;
        border-left: 5px solid;
    }
    .question-result.correct {
        background: #d1fae5;
        border-color: #10b981;
    }
    .question-result.incorrect {
        background: #fee2e2;
        border-color: #ef4444;
    }
    .action-buttons {
        padding: 30px;
        text-align: center;
        background: #f8f9fa;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"result-container\">
    <div class=\"result-card\">
        <div class=\"result-header\">
            <div class=\"score-circle\">
                <div class=\"score-number\">{{ passage.resultat|number_format(1) }}%</div>
            </div>
            <h1 class=\"mb-3\">
                {% if passage.resultat >= 80 %}
                    🎉 Excellent !
                {% elseif passage.resultat >= 50 %}
                    👍 Bien joué !
                {% else %}
                    💪 Continue !
                {% endif %}
            </h1>
            <p class=\"mb-0\">
                {{ passage.test.type }} - {{ passage.test.langue.nom }}
            </p>
        </div>

        <div class=\"stats-grid\">
            <div class=\"stat-item\">
                <i class=\"fas fa-check-circle text-success fa-2x mb-2\"></i>
                <h3>{{ passage.score }}</h3>
                <small>Ton score</small>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-star text-warning fa-2x mb-2\"></i>
                <h3>{{ passage.scoreMax }}</h3>
                <small>Maximum</small>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-clock text-primary fa-2x mb-2\"></i>
                <h3>{{ (passage.tempsPasse / 60)|number_format(0) }} min</h3>
                <small>Temps passé</small>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-calendar-check text-info fa-2x mb-2\"></i>
                <h3>{{ passage.dateFin|date('d/m/Y H:i') }}</h3>
                <small>Terminé le</small>
            </div>
        </div>

        <div class=\"details-section\">
            <h3 class=\"mb-4 text-center\">
                <i class=\"fas fa-list-check\"></i> Détails de tes réponses
            </h3>

            {# Pour l'instant on n'affiche pas les détails par question car on ne stocke pas les réponses choisies dans TestPassage #}
            {# Si tu veux les ajouter plus tard, on créera une entité ReponseEtudiant #}
            <div class=\"alert alert-info text-center\">
                <i class=\"fas fa-info-circle\"></i> 
                Détails des réponses par question bientôt disponibles !
            </div>
        </div>

        <div class=\"action-buttons\">
            <a href=\"{{ path('app_langue_apprentissage', {id: passage.test.langue.id}) }}\" class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-arrow-left\"></i> Retour au parcours
            </a>
            <a href=\"{{ path('app_langue_index') }}\" class=\"btn btn-outline-secondary btn-lg ms-2\">
                <i class=\"fas fa-home\"></i> Autres langues
            </a>
        </div>
    </div>
</div>
{% endblock %}", "test_student/result.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\test_student\\result.html.twig");
    }
}
