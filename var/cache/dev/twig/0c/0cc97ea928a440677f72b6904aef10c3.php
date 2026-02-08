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
class __TwigTemplate_facd60120316f130ddf13fde0b9727f0 extends Template
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

        yield "Résultat du test - Fluently";
        
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
    }
    .result-header {
        padding: 50px 30px;
        text-align: center;
        ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 26, $this->source); })()), "pourcentage", [], "any", false, false, false, 26) >= 80)) {
            // line 27
            yield "            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 28, $this->source); })()), "pourcentage", [], "any", false, false, false, 28) >= 50)) {
            // line 29
            yield "            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        ";
        } else {
            // line 31
            yield "            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        ";
        }
        // line 33
        yield "        color: white;
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
    .stat-item i {
        font-size: 2rem;
        margin-bottom: 10px;
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

    // line 93
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

        // line 94
        yield "<div class=\"result-container\">
    <div class=\"result-card\">
        <div class=\"result-header\">
            <div class=\"score-circle\">
                <div class=\"score-number\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 98, $this->source); })()), "pourcentage", [], "any", false, false, false, 98), "html", null, true);
        yield "%</div>
            </div>
            <h1 class=\"mb-3\">
                ";
        // line 101
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 101, $this->source); })()), "pourcentage", [], "any", false, false, false, 101) >= 80)) {
            // line 102
            yield "                    🎉 Excellent travail !
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 103
(isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 103, $this->source); })()), "pourcentage", [], "any", false, false, false, 103) >= 50)) {
            // line 104
            yield "                    👍 Bon résultat !
                ";
        } else {
            // line 106
            yield "                    💪 Continue tes efforts !
                ";
        }
        // line 108
        yield "            </h1>
            <p class=\"mb-0\" style=\"font-size: 1.2rem;\">
                Test : <strong>";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 110, $this->source); })()), "test_type", [], "any", false, false, false, 110), "html", null, true);
        yield "</strong> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 110, $this->source); })()), "langue", [], "any", false, false, false, 110), "html", null, true);
        yield "
            </p>
        </div>

        <div class=\"stats-grid\">
            <div class=\"stat-item\">
                <i class=\"fas fa-check-circle text-success\"></i>
                <h3 class=\"mb-1\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 117, $this->source); })()), "correct_answers", [], "any", false, false, false, 117), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Bonnes réponses</small>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-times-circle text-danger\"></i>
                <h3 class=\"mb-1\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 122, $this->source); })()), "total_questions", [], "any", false, false, false, 122) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 122, $this->source); })()), "correct_answers", [], "any", false, false, false, 122)), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Erreurs</small>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-question-circle text-primary\"></i>
                <h3 class=\"mb-1\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 127, $this->source); })()), "total_questions", [], "any", false, false, false, 127), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Questions</small>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-star text-warning\"></i>
                <h3 class=\"mb-1\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 132, $this->source); })()), "total_score", [], "any", false, false, false, 132), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 132, $this->source); })()), "max_score", [], "any", false, false, false, 132), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Score total</small>
            </div>
        </div>

        <div class=\"details-section\">
            <h3 class=\"mb-4\">
                <i class=\"fas fa-list-check\"></i> Détails des réponses
            </h3>
            
            ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 142, $this->source); })()), "details", [], "any", false, false, false, 142));
        foreach ($context['_seq'] as $context["questionId"] => $context["detail"]) {
            // line 143
            yield "                <div class=\"question-result ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "correct", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("correct") : ("incorrect"));
            yield "\">
                    <div class=\"d-flex justify-content-between align-items-start mb-2\">
                        <strong>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "question", [], "any", false, false, false, 145), "html", null, true);
            yield "</strong>
                        <span class=\"badge ";
            // line 146
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "correct", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                            ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "score", [], "any", false, false, false, 147), "html", null, true);
            yield " pts
                        </span>
                    </div>
                    <p class=\"mb-1\">
                        <strong>Votre réponse :</strong> ";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "selected", [], "any", false, false, false, 151), "html", null, true);
            yield "
                        ";
            // line 152
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "correct", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 153
                yield "                            <i class=\"fas fa-check text-success ms-2\"></i>
                        ";
            } else {
                // line 155
                yield "                            <i class=\"fas fa-times text-danger ms-2\"></i>
                        ";
            }
            // line 157
            yield "                    </p>
                    ";
            // line 158
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "correct", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 159
                yield "                        <p class=\"mb-0 text-success\">
                            <strong>Bonne réponse :</strong> ";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "correctAnswer", [], "any", false, false, false, 160), "html", null, true);
                yield "
                        </p>
                    ";
            }
            // line 163
            yield "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['questionId'], $context['detail'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "        </div>

        <div class=\"action-buttons\">
            <a href=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_apprentissage", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 168, $this->source); })()), "idLangue", [], "any", false, false, false, 168), "id", [], "any", false, false, false, 168)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-arrow-left\"></i> Retour au parcours
            </a>
            <a href=\"";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_index");
        yield "\" class=\"btn btn-outline-secondary btn-lg ms-2\">
                <i class=\"fas fa-home\"></i> Accueil
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
        return array (  374 => 171,  368 => 168,  363 => 165,  356 => 163,  350 => 160,  347 => 159,  345 => 158,  342 => 157,  338 => 155,  334 => 153,  332 => 152,  328 => 151,  321 => 147,  317 => 146,  313 => 145,  307 => 143,  303 => 142,  288 => 132,  280 => 127,  272 => 122,  264 => 117,  252 => 110,  248 => 108,  244 => 106,  240 => 104,  238 => 103,  235 => 102,  233 => 101,  227 => 98,  221 => 94,  208 => 93,  139 => 33,  135 => 31,  131 => 29,  129 => 28,  126 => 27,  124 => 26,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Résultat du test - Fluently{% endblock %}

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
    }
    .result-header {
        padding: 50px 30px;
        text-align: center;
        {% if results.pourcentage >= 80 %}
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        {% elseif results.pourcentage >= 50 %}
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        {% else %}
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        {% endif %}
        color: white;
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
    .stat-item i {
        font-size: 2rem;
        margin-bottom: 10px;
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
                <div class=\"score-number\">{{ results.pourcentage }}%</div>
            </div>
            <h1 class=\"mb-3\">
                {% if results.pourcentage >= 80 %}
                    🎉 Excellent travail !
                {% elseif results.pourcentage >= 50 %}
                    👍 Bon résultat !
                {% else %}
                    💪 Continue tes efforts !
                {% endif %}
            </h1>
            <p class=\"mb-0\" style=\"font-size: 1.2rem;\">
                Test : <strong>{{ results.test_type }}</strong> - {{ results.langue }}
            </p>
        </div>

        <div class=\"stats-grid\">
            <div class=\"stat-item\">
                <i class=\"fas fa-check-circle text-success\"></i>
                <h3 class=\"mb-1\">{{ results.correct_answers }}</h3>
                <small class=\"text-muted\">Bonnes réponses</small>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-times-circle text-danger\"></i>
                <h3 class=\"mb-1\">{{ results.total_questions - results.correct_answers }}</h3>
                <small class=\"text-muted\">Erreurs</small>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-question-circle text-primary\"></i>
                <h3 class=\"mb-1\">{{ results.total_questions }}</h3>
                <small class=\"text-muted\">Questions</small>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-star text-warning\"></i>
                <h3 class=\"mb-1\">{{ results.total_score }}/{{ results.max_score }}</h3>
                <small class=\"text-muted\">Score total</small>
            </div>
        </div>

        <div class=\"details-section\">
            <h3 class=\"mb-4\">
                <i class=\"fas fa-list-check\"></i> Détails des réponses
            </h3>
            
            {% for questionId, detail in results.details %}
                <div class=\"question-result {{ detail.correct ? 'correct' : 'incorrect' }}\">
                    <div class=\"d-flex justify-content-between align-items-start mb-2\">
                        <strong>{{ detail.question }}</strong>
                        <span class=\"badge {{ detail.correct ? 'bg-success' : 'bg-danger' }}\">
                            {{ detail.score }} pts
                        </span>
                    </div>
                    <p class=\"mb-1\">
                        <strong>Votre réponse :</strong> {{ detail.selected }}
                        {% if detail.correct %}
                            <i class=\"fas fa-check text-success ms-2\"></i>
                        {% else %}
                            <i class=\"fas fa-times text-danger ms-2\"></i>
                        {% endif %}
                    </p>
                    {% if not detail.correct %}
                        <p class=\"mb-0 text-success\">
                            <strong>Bonne réponse :</strong> {{ detail.correctAnswer }}
                        </p>
                    {% endif %}
                </div>
            {% endfor %}
        </div>

        <div class=\"action-buttons\">
            <a href=\"{{ path('app_langue_apprentissage', {id: test.idLangue.id}) }}\" class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-arrow-left\"></i> Retour au parcours
            </a>
            <a href=\"{{ path('app_langue_index') }}\" class=\"btn btn-outline-secondary btn-lg ms-2\">
                <i class=\"fas fa-home\"></i> Accueil
            </a>
        </div>
    </div>
</div>
{% endblock %}", "test_student/result.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\test_student\\result.html.twig");
    }
}
