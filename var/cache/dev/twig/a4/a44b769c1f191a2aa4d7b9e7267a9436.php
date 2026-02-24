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

/* test_student/show.html.twig */
class __TwigTemplate_28281649c9d9d52cd61505f45c956a10 extends Template
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
            'js' => [$this, 'block_js'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_student/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_student/show.html.twig"));

        // line 6
        $context["isExamMode"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 6, $this->source); })()), "type", [], "any", false, false, false, 6) == "Test de niveau") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 6, $this->source); })()), "type", [], "any", false, false, false, 6) == "Test de fin de niveau"));
        // line 1
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 3, $this->source); })()), "langue", [], "any", false, false, false, 3), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " - Fluently";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
<style>
    .test-container {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 40px 20px;
        color: white;
    }
    .test-card {
        background: rgba(255,255,255,0.95);
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        max-width: 900px;
        margin: 0 auto;
        color: #1e293b;
    }
    .test-header {
        background: linear-gradient(135deg, #4f46e5 0%, #6d28d9 100%);
        color: white;
        padding: 30px;
        border-radius: 20px 20px 0 0;
        text-align: center;
    }
    .test-info {
        display: flex;
        justify-content: space-around;
        padding: 20px;
        background: #f8f9fa;
        border-bottom: 2px solid #e9ecef;
    }
    .test-info-item {
        text-align: center;
    }
    .question-card {
        margin: 30px;
        padding: 25px;
        background: #f8f9fa;
        border-radius: 15px;
        border-left: 5px solid #4f46e5;
        transition: all 0.3s;
    }
    .question-card:hover {
        box-shadow: 0 5px 20px rgba(79, 70, 229, 0.2);
        transform: translateX(5px);
    }
    .question-number {
        background: #4f46e5;
        color: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 15px;
    }
    .question-text {
        font-size: 1.2rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 20px;
    }
    .answer-option {
        background: white;
        border: 2px solid #e5e7eb;
        border-radius: 10px;
        padding: 15px 20px;
        margin-bottom: 12px;
        cursor: pointer;
        transition: all 0.3s;
    }
    .answer-option:hover {
        border-color: #4f46e5;
        background: #f0f4ff;
    }
    .answer-option input[type=\"radio\"] {
        margin-right: 12px;
        width: 20px;
        height: 20px;
        cursor: pointer;
    }
    .answer-option label {
        cursor: pointer;
        margin: 0;
        font-size: 1.05rem;
        color: #374151;
    }
    .submit-section {
        padding: 30px;
        text-align: center;
        background: #f8f9fa;
        border-radius: 0 0 20px 20px;
    }
    .btn-start, .btn-resume, .btn-submit, .btn-warning, .btn-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        border: none;
        padding: 15px 50px;
        font-size: 1.2rem;
        font-weight: bold;
        border-radius: 50px;
        box-shadow: 0 10px 30px rgba(16, 185, 129, 0.4);
        transition: all 0.3s;
        cursor: pointer;
    }
    .btn-start:hover, .btn-resume:hover, .btn-submit:hover, .btn-warning:hover, .btn-success:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(16, 185, 129, 0.5);
    }
    .btn-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        box-shadow: 0 10px 30px rgba(245, 158, 11, 0.4);
    }
    .btn-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        box-shadow: 0 10px 30px rgba(16, 185, 129, 0.4);
    }
    .progress-bar-container {
        background: #e5e7eb;
        height: 8px;
        border-radius: 10px;
        margin: 20px 30px;
        overflow: hidden;
    }
    .progress-bar-fill {
        background: linear-gradient(90deg, #10b981, #059669);
        height: 100%;
        width: 0%;
        transition: width 0.5s;
    }
    .timer-container {
        position: fixed;
        top: 100px;
        right: 30px;
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
        padding: 20px 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(239, 68, 68, 0.4);
        z-index: 1000;
        text-align: center;
        min-width: 150px;
    }
    .timer-container.warning {
        background: linear-gradient(135deg, #f59e0b, #d97706);
        animation: pulse 1s infinite;
    }
    .timer-container.critical {
        background: linear-gradient(135deg, #dc2626, #991b1b);
        animation: shake 0.5s infinite;
    }
    .timer-container.paused {
        background: linear-gradient(135deg, #64748b, #475569);
        opacity: 0.7;
    }
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    .timer-icon {
        font-size: 2rem;
        margin-bottom: 10px;
    }
    .timer-time {
        font-size: 2rem;
        font-weight: 900;
        margin: 10px 0;
    }
    .timer-label {
        font-size: 0.9rem;
        opacity: 0.9;
    }
    .btn-microphone {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
        border: none;
        padding: 20px 50px;
        font-size: 1.3rem;
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s;
        box-shadow: 0 10px 30px rgba(239, 68, 68, 0.4);
    }
    .btn-microphone:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(239, 68, 68, 0.6);
    }
    .btn-microphone.recording {
        background: linear-gradient(135deg, #10b981, #059669);
        animation: pulse 1.5s infinite;
    }
    .oral-result {
        margin-top: 20px;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 12px;
    }
    
    /* ✅ NOUVEAU : Style pour l'écran de pause */
    .paused-screen {
        padding: 60px 30px;
        text-align: center;
    }
    .paused-screen i {
        font-size: 5rem;
        color: #f59e0b;
        margin-bottom: 30px;
        animation: pulse 2s infinite;
    }
    .paused-screen h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 20px;
    }
    .paused-screen p {
        font-size: 1.2rem;
        color: #64748b;
        margin-bottom: 30px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 239
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

        // line 240
        yield "<div class=\"test-container\">
    ";
        // line 242
        yield "    ";
        if ((((isset($context["isExamMode"]) || array_key_exists("isExamMode", $context) ? $context["isExamMode"] : (function () { throw new RuntimeError('Variable "isExamMode" does not exist.', 242, $this->source); })()) && (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 242, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 242, $this->source); })()), "statut", [], "any", false, false, false, 242) == "en_cours"))) {
            // line 243
            yield "        <div style=\"position: fixed; top: 20px; left: 20px; z-index: 9999; background: linear-gradient(135deg, #ef4444, #dc2626); color: white; padding: 15px 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(239, 68, 68, 0.6); font-weight: bold; animation: pulse 2s infinite;\">
            🔒 MODE EXAMEN - Surveillance active
        </div>
    ";
        }
        // line 247
        yield "
    ";
        // line 249
        yield "    ";
        if (((isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 249, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 249, $this->source); })()), "statut", [], "any", false, false, false, 249) == "en_cours"))) {
            // line 250
            yield "        <div class=\"timer-container\" id=\"timerContainer\">
            <div class=\"timer-icon\">⏱️</div>
            <div class=\"timer-time\" id=\"timerDisplay\">";
            // line 252
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 252, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 252)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 252, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 252), "html", null, true)) : ("15"));
            yield ":00</div>
            <div class=\"timer-label\">Temps restant</div>
        </div>
    ";
        } elseif ((        // line 255
(isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 255, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 255, $this->source); })()), "statut", [], "any", false, false, false, 255) == "en_pause"))) {
            // line 256
            yield "        <div class=\"timer-container paused\" id=\"timerContainer\">
            <div class=\"timer-icon\">⏸️</div>
            <div class=\"timer-time\" id=\"timerDisplay\">EN PAUSE</div>
            <div class=\"timer-label\">Timer arrêté</div>
        </div>
    ";
        }
        // line 262
        yield "
    <div class=\"test-card\">
        <div class=\"test-header\">
            <h1 class=\"mb-3\">
                <i class=\"fas fa-clipboard-check\"></i> ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 266, $this->source); })()), "type", [], "any", false, false, false, 266), "html", null, true);
        yield "
            </h1>
            <p class=\"mb-0\" style=\"font-size: 1.2rem; opacity: 0.95;\">
                Langue : <strong>";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 269, $this->source); })()), "langue", [], "any", false, false, false, 269), "nom", [], "any", false, false, false, 269), "html", null, true);
        yield "</strong>
            </p>
        </div>

        <div class=\"test-info\">
            <div class=\"test-info-item\">
                
                <h5 class=\"mb-0\">";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 276, $this->source); })()), "questions", [], "any", false, false, false, 276)), "html", null, true);
        yield "</h5>
                <small class=\"text-muted\">Questions</small>
            </div>
            <div class=\"test-info-item\">
                
                <h5 class=\"mb-0\">";
        // line 281
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 281, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 281)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 281, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 281), "html", null, true)) : ("15"));
        yield " min</h5>
                <small class=\"text-muted\">Durée estimée</small>
            </div>
            <div class=\"test-info-item\">
                
                <h5 class=\"mb-0\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 286, $this->source); })()), "scoreMax", [], "any", false, false, false, 286), "html", null, true);
        yield "</h5>
                <small class=\"text-muted\">Points max</small>
            </div>
        </div>

        ";
        // line 291
        if ((($tmp = (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 291, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 292
            yield "            ";
            // line 293
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 293, $this->source); })()), "statut", [], "any", false, false, false, 293) == "en_pause")) {
                // line 294
                yield "                <div class=\"paused-screen\">
                    
                    <h2>⏸️ Test en pause</h2>
                    <p>Tu peux reprendre quand tu seras prêt(e).</p>
                    <p><small class=\"text-muted\">Tes réponses ont été sauvegardées.</small></p>
                    
                    <button type=\"button\" 
                            class=\"btn btn-success btn-lg me-3\" 
                            onclick=\"submitToResume(event)\">Reprendre le test</button>
                </div>
            ";
            } else {
                // line 305
                yield "                ";
                // line 306
                yield "                <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_submit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 306, $this->source); })()), "id", [], "any", false, false, false, 306)]), "html", null, true);
                yield "\" id=\"testForm\">
                    <div class=\"progress-bar-container\">
                        <div class=\"progress-bar-fill\" id=\"progressBar\"></div>
                    </div>

                    ";
                // line 311
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 311, $this->source); })()), "questions", [], "any", false, false, false, 311));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 312
                    yield "                        <div class=\"question-card\" data-question=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 312), "html", null, true);
                    yield "\">
                            <div class=\"d-flex align-items-start mb-3\">
                                <span class=\"question-number\">";
                    // line 314
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 314), "html", null, true);
                    yield "</span>
                                <div class=\"question-text flex-grow-1\">
                                    ";
                    // line 316
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 316), "html", null, true);
                    yield "
                                    <span class=\"badge bg-primary ms-2\">";
                    // line 317
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "scoreMax", [], "any", false, false, false, 317), "html", null, true);
                    yield " pts</span>
                                    ";
                    // line 318
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 318) == "oral")) {
                        // line 319
                        yield "                                        <span class=\"badge bg-danger ms-2\">🎤 Question orale</span>
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 320
$context["question"], "type", [], "any", false, false, false, 320) == "texte_libre")) {
                        // line 321
                        yield "                                        <span class=\"badge bg-info ms-2\">📝 Texte libre</span>
                                    ";
                    }
                    // line 323
                    yield "                                </div>
                            </div>

                            ";
                    // line 326
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 326) == "oral")) {
                        // line 327
                        yield "                                ";
                        // line 328
                        yield "                                <div class=\"oral-question-container\" id=\"oral_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 328), "html", null, true);
                        yield "\">
                                    <div class=\"oral-text\" style=\"background: white; border: 3px solid #4f46e5; border-radius: 12px; padding: 25px; margin-bottom: 20px; text-align: center;\">
                                        <div style=\"display: flex; align-items: center; justify-content: center; gap: 15px; margin-bottom: 15px;\">
                                            <i class=\"fas fa-volume-up\" 
                                               style=\"font-size: 2rem; color: #4f46e5; cursor: pointer;\" 
                                               data-text=\"";
                        // line 333
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 333), "html_attr");
                        yield "\"
                                               data-lang=\"";
                        // line 334
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 334, $this->source); })()), "langue", [], "any", false, false, false, 334), "nom", [], "any", false, false, false, 334), "html_attr");
                        yield "\"
                                               onclick=\"speakText(this.dataset.text, this.dataset.lang)\"></i>
                                            <p style=\"margin: 0; font-size: 1.8rem; font-weight: 700; color: #1e293b;\">
                                                ";
                        // line 337
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 337), "html", null, true);
                        yield "
                                            </p>
                                        </div>
                                        <small style=\"color: #64748b;\">Lis cette phrase à haute voix</small>
                                    </div>

                                    <div style=\"text-align: center; margin-bottom: 20px;\">
                                        <button type=\"button\" 
                                                class=\"btn-microphone\" 
                                                id=\"mic_btn_";
                        // line 346
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 346), "html", null, true);
                        yield "\"
                                                data-question-id=\"";
                        // line 347
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 347), "html", null, true);
                        yield "\"
                                                data-expected=\"";
                        // line 348
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 348), "html_attr");
                        yield "\"
                                                data-lang=\"";
                        // line 349
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 349, $this->source); })()), "langue", [], "any", false, false, false, 349), "nom", [], "any", false, false, false, 349), "html_attr");
                        yield "\"
                                                onclick=\"startRecognition(this.dataset.questionId, this.dataset.expected, this.dataset.lang)\">TAP TO SPEAK
                                        </button>
                                    </div>

                                    <div class=\"oral-result\" id=\"result_";
                        // line 354
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 354), "html", null, true);
                        yield "\" style=\"display: none;\">
                                        <div class=\"alert\" id=\"alert_";
                        // line 355
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 355), "html", null, true);
                        yield "\"></div>
                                        <p><strong>Tu as dit :</strong> <span id=\"transcript_";
                        // line 356
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 356), "html", null, true);
                        yield "\"></span></p>
                                        <p><strong>Attendu :</strong> ";
                        // line 357
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 357), "html", null, true);
                        yield "</p>
                                    </div>

                                    <input type=\"hidden\" name=\"oral_";
                        // line 360
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 360), "html", null, true);
                        yield "\" id=\"oral_answer_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 360), "html", null, true);
                        yield "\" value=\"\">
                                </div>

                            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 363
$context["question"], "type", [], "any", false, false, false, 363) == "texte_libre")) {
                        // line 364
                        yield "                                ";
                        // line 365
                        yield "                                <div class=\"text-libre-container\" id=\"texte_libre_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 365), "html", null, true);
                        yield "\">
                                    <div class=\"form-group\">
                                        <label for=\"texte_";
                        // line 367
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 367), "html", null, true);
                        yield "\" class=\"form-label fw-bold\">
                                            Écris ta réponse (minimum 50 mots) :
                                        </label>
                                        <textarea 
                                            class=\"form-control\" 
                                            name=\"texte_";
                        // line 372
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 372), "html", null, true);
                        yield "\" 
                                            id=\"texte_";
                        // line 373
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 373), "html", null, true);
                        yield "\"
                                            rows=\"10\"
                                            placeholder=\"Écris ta réponse ici...\"
                                            required
                                            minlength=\"50\"></textarea>
                                        <small class=\"text-muted\">
                                            <span id=\"word_count_";
                        // line 379
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 379), "html", null, true);
                        yield "\">0</span> mots
                                        </small>
                                    </div>
                                </div>

                                <script>
                                document.getElementById('texte_";
                        // line 385
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 385), "html", null, true);
                        yield "').addEventListener('input', function() {
                                    const text = this.value.trim();
                                    const wordCount = text ? text.split(/\\s+/).length : 0;
                                    document.getElementById('word_count_";
                        // line 388
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 388), "html", null, true);
                        yield "').textContent = wordCount;
                                    if (wordCount >= 50) {
                                        updateProgress();
                                    }
                                });
                                </script>

                            ";
                    } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,                     // line 395
$context["question"], "reponses", [], "any", false, false, false, 395)) > 0)) {
                        // line 396
                        yield "                                ";
                        // line 397
                        yield "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 397));
                        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                            // line 398
                            yield "                                    <div class=\"answer-option\">
                                        <input class=\"form-check-input\" 
                                               type=\"radio\" 
                                               name=\"question_";
                            // line 401
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 401), "html", null, true);
                            yield "\" 
                                               id=\"rep_";
                            // line 402
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 402), "html", null, true);
                            yield "\" 
                                               value=\"";
                            // line 403
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 403), "html", null, true);
                            yield "\"
                                               onchange=\"updateProgress()\"
                                               required>
                                        <label class=\"form-check-label\" for=\"rep_";
                            // line 406
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 406), "html", null, true);
                            yield "\">
                                            ";
                            // line 407
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "contenuRep", [], "any", false, false, false, 407), "html", null, true);
                            yield "
                                        </label>
                                    </div>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 411
                        yield "                            ";
                    } else {
                        // line 412
                        yield "                                <div class=\"alert alert-warning\">
                                    Aucune réponse disponible pour cette question.
                                </div>
                            ";
                    }
                    // line 416
                    yield "                        </div>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 418
                yield "
                    <div class=\"submit-section\">
                        ";
                // line 420
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\WorkflowExtension']->canTransition((isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 420, $this->source); })()), "mettre_en_pause", "test_passage")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 421
                    yield "                            <button type=\"button\" 
                                    class=\"btn btn-warning btn-lg me-3\" 
                                    onclick=\"submitToPause(event)\">Mettre en pause</button>
                                
                        ";
                }
                // line 426
                yield "
                        <button type=\"submit\" class=\"btn-submit\" id=\"submitBtn\">Soumettre mes réponses</button>
                    </div>
                </form>
            ";
            }
            // line 431
            yield "        ";
        } else {
            // line 432
            yield "            <div class=\"text-center py-4\">
                <form method=\"post\" action=\"";
            // line 433
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_start", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 433, $this->source); })()), "id", [], "any", false, false, false, 433)]), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn-start btn-lg\">
                        <i class=\"fas fa-play\"></i> Démarrer le test
                    </button>
                </form>
                <p class=\"text-muted mt-3\">
                    Une fois commencé, tu pourras le reprendre plus tard si besoin.
                </p>
            </div>
        ";
        }
        // line 443
        yield "    </div>
</div>

<form id=\"pauseForm\" method=\"post\" action=\"";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_pause", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 446, $this->source); })()), "id", [], "any", false, false, false, 446)]), "html", null, true);
        yield "\" style=\"display:none;\"></form>
<form id=\"resumeForm\" method=\"post\" action=\"";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_resume", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 447, $this->source); })()), "id", [], "any", false, false, false, 447)]), "html", null, true);
        yield "\" style=\"display:none;\"></form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 450
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 451
        yield from $this->yieldParentBlock("js", $context, $blocks);
        yield "
<script>
const totalQuestions = ";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 453, $this->source); })()), "questions", [], "any", false, false, false, 453)), "html", null, true);
        yield ";

function updateProgress() {
    const answeredQCM = document.querySelectorAll('input[type=\"radio\"]:checked').length;
    const oralInputs = document.querySelectorAll('input[id^=\"oral_answer_\"]');
    const validOral = Array.from(oralInputs).filter(input => input.value && input.value.trim().length > 0).length;
    
    const textLibreInputs = document.querySelectorAll('textarea[id^=\"texte_\"]');
    const validTextLibre = Array.from(textLibreInputs).filter(textarea => {
        const text = textarea.value.trim();
        const wordCount = text ? text.split(/\\s+/).length : 0;
        return wordCount >= 50;
    }).length;
    
    const totalAnswered = answeredQCM + validOral + validTextLibre;
    const progress = (totalAnswered / totalQuestions) * 100;
    
    const progressBar = document.getElementById('progressBar');
    if (progressBar) progressBar.style.width = progress + '%';
    
    const submitBtn = document.getElementById('submitBtn');
    if (submitBtn) submitBtn.disabled = totalAnswered < totalQuestions;
}

const testForm = document.getElementById('testForm');
if (testForm) {
    testForm.addEventListener('submit', function(e) {
        const answeredQCM = document.querySelectorAll('input[type=\"radio\"]:checked').length;
        const oralInputs = document.querySelectorAll('input[id^=\"oral_answer_\"]');
        const validOral = Array.from(oralInputs).filter(input => input.value && input.value.trim().length > 0).length;
        
        const textLibreInputs = document.querySelectorAll('textarea[id^=\"texte_\"]');
        const validTextLibre = Array.from(textLibreInputs).filter(textarea => {
            const text = textarea.value.trim();
            const wordCount = text ? text.split(/\\s+/).length : 0;
            return wordCount >= 50;
        }).length;
        
        if (answeredQCM + validOral + validTextLibre < totalQuestions) {
            e.preventDefault();
            alert('Veuillez répondre à toutes les questions (minimum 50 mots pour les questions texte libre) !');
        }
    });
    
    updateProgress();
}

// ✅ Variable globale pour le timer
let timerInterval;

function submitToPause(event) {
    event.preventDefault();
    if (confirm('Êtes-vous sûr de vouloir mettre le test en pause ?')) {
        // ✅ ARRÊTER LE TIMER
        if (timerInterval) {
            clearInterval(timerInterval);
            timerInterval = null;
            console.log('⏸️ Timer arrêté (pause)');
        }
        document.getElementById('pauseForm').submit();
    }
}

function submitToResume(event) {
    event.preventDefault();
    if (confirm('Êtes-vous sûr de vouloir reprendre le test ?')) {
        document.getElementById('resumeForm').submit();
    }
}

";
        // line 523
        if (((isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 523, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 523, $this->source); })()), "statut", [], "any", false, false, false, 523) == "en_cours"))) {
            // line 524
            yield "const dureeMinutes = ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 524, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 524)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 524, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 524), "html", null, true)) : (15));
            yield ";
const dateDebut = new Date(\"";
            // line 525
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 525, $this->source); })()), "dateDebut", [], "any", false, false, false, 525), "Y-m-d H:i:s"), "html", null, true);
            yield "\");
const now = new Date();
const tempsEcoule = Math.floor((now - dateDebut) / 1000);
const dureeSecondes = dureeMinutes * 60;
let tempsRestant = dureeSecondes - tempsEcoule;
window.testAlreadySubmitted = false;

const timerDisplay = document.getElementById('timerDisplay');
const timerContainer = document.getElementById('timerContainer');

function updateTimer() {
    if (tempsRestant <= 0) {
        timerDisplay.textContent = '00:00';
        if (testForm && !window.testAlreadySubmitted) {
            window.testAlreadySubmitted = true;
            clearInterval(timerInterval);
            alert('⏰ Temps écoulé ! Le test est soumis automatiquement.');
            testForm.submit();
        }
        return;
    }
    
    const minutes = Math.floor(tempsRestant / 60);
    const secondes = tempsRestant % 60;
    timerDisplay.textContent = String(minutes).padStart(2, '0') + ':' + String(secondes).padStart(2, '0');
    
    if (tempsRestant <= 60) {
        timerContainer.className = 'timer-container critical';
    } else if (tempsRestant <= 300) {
        timerContainer.className = 'timer-container warning';
    }
    
    tempsRestant--;
}

if (tempsRestant <= 0 && testForm && !window.testAlreadySubmitted) {
    window.testAlreadySubmitted = true;
    alert('⏰ Temps écoulé ! Le test va être soumis automatiquement.');
    testForm.submit();
} else {
    updateTimer();
    timerInterval = setInterval(updateTimer, 1000);
    
    if (testForm) {
        testForm.addEventListener('submit', function() {
            if (timerInterval) {
                clearInterval(timerInterval);
                timerInterval = null;
            }
            window.testAlreadySubmitted = true;
        });
    }
}
";
        }
        // line 579
        yield "
const languageMap = {
    'English': 'en-US',
    'Français': 'fr-FR',
    'Espagnol': 'es-ES',
    'Español': 'es-ES',
    'Allemand': 'de-DE',
    'Italien': 'it-IT',
    'Portugais': 'pt-PT',
    'Arabe': 'ar-SA',
    'Chinois': 'zh-CN',
    'Japonais': 'ja-JP',
    'Coréen': 'ko-KR',
    'Russe': 'ru-RU'
};

function speakText(text, langue) {
    if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = languageMap[langue] || 'en-US';
        utterance.rate = 0.8;
        window.speechSynthesis.speak(utterance);
    }
}

function startRecognition(questionId, expectedText, langue) {
    if (!('webkitSpeechRecognition' in window) && !('SpeechRecognition' in window)) {
        alert('Ton navigateur ne supporte pas la reconnaissance vocale.');
        return;
    }

    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    const recognition = new SpeechRecognition();
    
    recognition.lang = languageMap[langue] || 'en-US';
    recognition.continuous = false;
    recognition.interimResults = false;

    const micBtn = document.getElementById(`mic_btn_\${questionId}`);
    const resultDiv = document.getElementById(`result_\${questionId}`);
    const alertDiv = document.getElementById(`alert_\${questionId}`);
    const transcriptSpan = document.getElementById(`transcript_\${questionId}`);
    const hiddenInput = document.getElementById(`oral_answer_\${questionId}`);

    micBtn.classList.add('recording');
    micBtn.innerHTML = '<i class=\"fas fa-circle\"></i> EN ÉCOUTE...';
    micBtn.disabled = true;
    recognition.start();

    recognition.onresult = function(event) {
        const transcript = event.results[0][0].transcript.trim();
        transcriptSpan.textContent = transcript;
        resultDiv.style.display = 'block';
        hiddenInput.value = transcript;
        alertDiv.className = 'alert alert-info';
        alertDiv.innerHTML = '<i class=\"fas fa-microphone\"></i> <strong>Enregistré !</strong>';
        micBtn.classList.remove('recording');
        micBtn.innerHTML = '<i class=\"fas fa-redo\"></i> RÉESSAYER';
        micBtn.disabled = false;
        updateProgress();
    };

    recognition.onerror = function(event) {
        micBtn.classList.remove('recording');
        micBtn.innerHTML = '<i class=\"fas fa-microphone\"></i> TAP TO SPEAK';
        micBtn.disabled = false;
        alert('Erreur : ' + event.error);
    };

    recognition.onend = function() {
        micBtn.classList.remove('recording');
        micBtn.disabled = false;
    };
}
</script>

";
        // line 656
        if ((((isset($context["isExamMode"]) || array_key_exists("isExamMode", $context) ? $context["isExamMode"] : (function () { throw new RuntimeError('Variable "isExamMode" does not exist.', 656, $this->source); })()) && (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 656, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 656, $this->source); })()), "statut", [], "any", false, false, false, 656) == "en_cours"))) {
            // line 657
            yield "<script>
console.log('🔒 Mode examen activé - Surveillance active');

let examEvents = {
    tabSwitches: 0,
    copyPastes: 0,
    pageBlurs: 0,
    devtoolsAttempts: 0
};

function logExamEvent(eventType, details = {}) {
    fetch('";
            // line 668
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exam_log_event", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 668, $this->source); })()), "id", [], "any", false, false, false, 668)]), "html", null, true);
            yield "', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({event_type: eventType, details: details})
    }).catch(err => console.error('Log error:', err));
}

document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        examEvents.tabSwitches++;
        logExamEvent('tab_switch', {count: examEvents.tabSwitches, timestamp: new Date().toISOString()});
        if (examEvents.tabSwitches >= 3) {
            alert('⚠️ ATTENTION: Changement d\\'onglet détecté (' + examEvents.tabSwitches + ' fois)!\\n\\nCe comportement est enregistré.');
        }
    }
});

window.addEventListener('blur', function() {
    examEvents.pageBlurs++;
    if (examEvents.pageBlurs > 5) {
        logExamEvent('page_blur', {count: examEvents.pageBlurs});
    }
});

document.addEventListener('copy', function(e) {
    examEvents.copyPastes++;
    logExamEvent('copy_paste', {action: 'copy', count: examEvents.copyPastes});
    e.preventDefault();
    alert('❌ COPIER interdit en mode examen!');
    return false;
});

document.addEventListener('paste', function(e) {
    examEvents.copyPastes++;
    logExamEvent('copy_paste', {action: 'paste', count: examEvents.copyPastes});
    e.preventDefault();
    alert('❌ COLLER interdit en mode examen!');
    return false;
});

document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
    alert('❌ Clic droit désactivé en mode examen!');
    return false;
});

document.addEventListener('keydown', function(e) {
    if (e.keyCode === 123) {
        examEvents.devtoolsAttempts++;
        logExamEvent('devtools_attempt', {key: 'F12', count: examEvents.devtoolsAttempts});
        e.preventDefault();
        alert('❌ Outils de développement interdits!');
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode === 73) {
        examEvents.devtoolsAttempts++;
        logExamEvent('devtools_attempt', {key: 'Ctrl+Shift+I', count: examEvents.devtoolsAttempts});
        e.preventDefault();
        return false;
    }
    if (e.ctrlKey && e.keyCode === 85) {
        e.preventDefault();
        return false;
    }
});

logExamEvent('exam_started', {
    user_agent: navigator.userAgent,
    screen_size: window.screen.width + 'x' + window.screen.height
});

window.addEventListener('beforeunload', function() {
    logExamEvent('exam_summary', examEvents);
});

if (!sessionStorage.getItem('exam_warning_shown')) {
    alert('🔒 MODE EXAMEN ACTIVÉ\\n\\n⚠️ Ce test est surveillé.\\n\\n❌ Changer d\\'onglet\\n❌ Copier-coller\\n❌ Outils développeur\\n\\nBonne chance !');
    sessionStorage.setItem('exam_warning_shown', 'true');
}
</script>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "test_student/show.html.twig";
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
        return array (  1040 => 668,  1027 => 657,  1025 => 656,  947 => 579,  890 => 525,  885 => 524,  883 => 523,  810 => 453,  805 => 451,  792 => 450,  779 => 447,  775 => 446,  770 => 443,  757 => 433,  754 => 432,  751 => 431,  744 => 426,  737 => 421,  735 => 420,  731 => 418,  716 => 416,  710 => 412,  707 => 411,  697 => 407,  693 => 406,  687 => 403,  683 => 402,  679 => 401,  674 => 398,  669 => 397,  667 => 396,  665 => 395,  655 => 388,  649 => 385,  640 => 379,  631 => 373,  627 => 372,  619 => 367,  613 => 365,  611 => 364,  609 => 363,  601 => 360,  595 => 357,  591 => 356,  587 => 355,  583 => 354,  575 => 349,  571 => 348,  567 => 347,  563 => 346,  551 => 337,  545 => 334,  541 => 333,  532 => 328,  530 => 327,  528 => 326,  523 => 323,  519 => 321,  517 => 320,  514 => 319,  512 => 318,  508 => 317,  504 => 316,  499 => 314,  493 => 312,  476 => 311,  467 => 306,  465 => 305,  452 => 294,  449 => 293,  447 => 292,  445 => 291,  437 => 286,  429 => 281,  421 => 276,  411 => 269,  405 => 266,  399 => 262,  391 => 256,  389 => 255,  383 => 252,  379 => 250,  376 => 249,  373 => 247,  367 => 243,  364 => 242,  361 => 240,  348 => 239,  108 => 9,  95 => 8,  69 => 3,  58 => 1,  56 => 6,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ test.type }} - {{ test.langue.nom }} - Fluently{% endblock %}

{# ✅ DÉTECTION AUTOMATIQUE DU MODE EXAMEN - AVANT tout bloc #}
{% set isExamMode = test.type == 'Test de niveau' or test.type == 'Test de fin de niveau' %}

{% block css %}
{{ parent() }}
<style>
    .test-container {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 40px 20px;
        color: white;
    }
    .test-card {
        background: rgba(255,255,255,0.95);
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        max-width: 900px;
        margin: 0 auto;
        color: #1e293b;
    }
    .test-header {
        background: linear-gradient(135deg, #4f46e5 0%, #6d28d9 100%);
        color: white;
        padding: 30px;
        border-radius: 20px 20px 0 0;
        text-align: center;
    }
    .test-info {
        display: flex;
        justify-content: space-around;
        padding: 20px;
        background: #f8f9fa;
        border-bottom: 2px solid #e9ecef;
    }
    .test-info-item {
        text-align: center;
    }
    .question-card {
        margin: 30px;
        padding: 25px;
        background: #f8f9fa;
        border-radius: 15px;
        border-left: 5px solid #4f46e5;
        transition: all 0.3s;
    }
    .question-card:hover {
        box-shadow: 0 5px 20px rgba(79, 70, 229, 0.2);
        transform: translateX(5px);
    }
    .question-number {
        background: #4f46e5;
        color: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 15px;
    }
    .question-text {
        font-size: 1.2rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 20px;
    }
    .answer-option {
        background: white;
        border: 2px solid #e5e7eb;
        border-radius: 10px;
        padding: 15px 20px;
        margin-bottom: 12px;
        cursor: pointer;
        transition: all 0.3s;
    }
    .answer-option:hover {
        border-color: #4f46e5;
        background: #f0f4ff;
    }
    .answer-option input[type=\"radio\"] {
        margin-right: 12px;
        width: 20px;
        height: 20px;
        cursor: pointer;
    }
    .answer-option label {
        cursor: pointer;
        margin: 0;
        font-size: 1.05rem;
        color: #374151;
    }
    .submit-section {
        padding: 30px;
        text-align: center;
        background: #f8f9fa;
        border-radius: 0 0 20px 20px;
    }
    .btn-start, .btn-resume, .btn-submit, .btn-warning, .btn-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        border: none;
        padding: 15px 50px;
        font-size: 1.2rem;
        font-weight: bold;
        border-radius: 50px;
        box-shadow: 0 10px 30px rgba(16, 185, 129, 0.4);
        transition: all 0.3s;
        cursor: pointer;
    }
    .btn-start:hover, .btn-resume:hover, .btn-submit:hover, .btn-warning:hover, .btn-success:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(16, 185, 129, 0.5);
    }
    .btn-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        box-shadow: 0 10px 30px rgba(245, 158, 11, 0.4);
    }
    .btn-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        box-shadow: 0 10px 30px rgba(16, 185, 129, 0.4);
    }
    .progress-bar-container {
        background: #e5e7eb;
        height: 8px;
        border-radius: 10px;
        margin: 20px 30px;
        overflow: hidden;
    }
    .progress-bar-fill {
        background: linear-gradient(90deg, #10b981, #059669);
        height: 100%;
        width: 0%;
        transition: width 0.5s;
    }
    .timer-container {
        position: fixed;
        top: 100px;
        right: 30px;
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
        padding: 20px 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(239, 68, 68, 0.4);
        z-index: 1000;
        text-align: center;
        min-width: 150px;
    }
    .timer-container.warning {
        background: linear-gradient(135deg, #f59e0b, #d97706);
        animation: pulse 1s infinite;
    }
    .timer-container.critical {
        background: linear-gradient(135deg, #dc2626, #991b1b);
        animation: shake 0.5s infinite;
    }
    .timer-container.paused {
        background: linear-gradient(135deg, #64748b, #475569);
        opacity: 0.7;
    }
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    .timer-icon {
        font-size: 2rem;
        margin-bottom: 10px;
    }
    .timer-time {
        font-size: 2rem;
        font-weight: 900;
        margin: 10px 0;
    }
    .timer-label {
        font-size: 0.9rem;
        opacity: 0.9;
    }
    .btn-microphone {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
        border: none;
        padding: 20px 50px;
        font-size: 1.3rem;
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s;
        box-shadow: 0 10px 30px rgba(239, 68, 68, 0.4);
    }
    .btn-microphone:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(239, 68, 68, 0.6);
    }
    .btn-microphone.recording {
        background: linear-gradient(135deg, #10b981, #059669);
        animation: pulse 1.5s infinite;
    }
    .oral-result {
        margin-top: 20px;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 12px;
    }
    
    /* ✅ NOUVEAU : Style pour l'écran de pause */
    .paused-screen {
        padding: 60px 30px;
        text-align: center;
    }
    .paused-screen i {
        font-size: 5rem;
        color: #f59e0b;
        margin-bottom: 30px;
        animation: pulse 2s infinite;
    }
    .paused-screen h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 20px;
    }
    .paused-screen p {
        font-size: 1.2rem;
        color: #64748b;
        margin-bottom: 30px;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"test-container\">
    {# ✅ BADGE MODE EXAMEN #}
    {% if isExamMode and passageEnCours and passageEnCours.statut == 'en_cours' %}
        <div style=\"position: fixed; top: 20px; left: 20px; z-index: 9999; background: linear-gradient(135deg, #ef4444, #dc2626); color: white; padding: 15px 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(239, 68, 68, 0.6); font-weight: bold; animation: pulse 2s infinite;\">
            🔒 MODE EXAMEN - Surveillance active
        </div>
    {% endif %}

    {# ✅ MINUTEUR - Affiché seulement si en_cours (pas en pause) #}
    {% if passageEnCours and passageEnCours.statut == 'en_cours' %}
        <div class=\"timer-container\" id=\"timerContainer\">
            <div class=\"timer-icon\">⏱️</div>
            <div class=\"timer-time\" id=\"timerDisplay\">{{ test.dureeEstimee ?: '15' }}:00</div>
            <div class=\"timer-label\">Temps restant</div>
        </div>
    {% elseif passageEnCours and passageEnCours.statut == 'en_pause' %}
        <div class=\"timer-container paused\" id=\"timerContainer\">
            <div class=\"timer-icon\">⏸️</div>
            <div class=\"timer-time\" id=\"timerDisplay\">EN PAUSE</div>
            <div class=\"timer-label\">Timer arrêté</div>
        </div>
    {% endif %}

    <div class=\"test-card\">
        <div class=\"test-header\">
            <h1 class=\"mb-3\">
                <i class=\"fas fa-clipboard-check\"></i> {{ test.type }}
            </h1>
            <p class=\"mb-0\" style=\"font-size: 1.2rem; opacity: 0.95;\">
                Langue : <strong>{{ test.langue.nom }}</strong>
            </p>
        </div>

        <div class=\"test-info\">
            <div class=\"test-info-item\">
                
                <h5 class=\"mb-0\">{{ test.questions|length }}</h5>
                <small class=\"text-muted\">Questions</small>
            </div>
            <div class=\"test-info-item\">
                
                <h5 class=\"mb-0\">{{ test.dureeEstimee ?: '15' }} min</h5>
                <small class=\"text-muted\">Durée estimée</small>
            </div>
            <div class=\"test-info-item\">
                
                <h5 class=\"mb-0\">{{ test.scoreMax }}</h5>
                <small class=\"text-muted\">Points max</small>
            </div>
        </div>

        {% if passageEnCours %}
            {# ✅ ÉCRAN DE PAUSE (au lieu des questions) #}
            {% if passageEnCours.statut == 'en_pause' %}
                <div class=\"paused-screen\">
                    
                    <h2>⏸️ Test en pause</h2>
                    <p>Tu peux reprendre quand tu seras prêt(e).</p>
                    <p><small class=\"text-muted\">Tes réponses ont été sauvegardées.</small></p>
                    
                    <button type=\"button\" 
                            class=\"btn btn-success btn-lg me-3\" 
                            onclick=\"submitToResume(event)\">Reprendre le test</button>
                </div>
            {% else %}
                {# ✅ QUESTIONS (seulement si en_cours) #}
                <form method=\"post\" action=\"{{ path('app_test_student_submit', {id: test.id}) }}\" id=\"testForm\">
                    <div class=\"progress-bar-container\">
                        <div class=\"progress-bar-fill\" id=\"progressBar\"></div>
                    </div>

                    {% for question in test.questions %}
                        <div class=\"question-card\" data-question=\"{{ loop.index }}\">
                            <div class=\"d-flex align-items-start mb-3\">
                                <span class=\"question-number\">{{ loop.index }}</span>
                                <div class=\"question-text flex-grow-1\">
                                    {{ question.enonce }}
                                    <span class=\"badge bg-primary ms-2\">{{ question.scoreMax }} pts</span>
                                    {% if question.type == 'oral' %}
                                        <span class=\"badge bg-danger ms-2\">🎤 Question orale</span>
                                    {% elseif question.type == 'texte_libre' %}
                                        <span class=\"badge bg-info ms-2\">📝 Texte libre</span>
                                    {% endif %}
                                </div>
                            </div>

                            {% if question.type == 'oral' %}
                                {# QUESTION ORALE #}
                                <div class=\"oral-question-container\" id=\"oral_{{ question.id }}\">
                                    <div class=\"oral-text\" style=\"background: white; border: 3px solid #4f46e5; border-radius: 12px; padding: 25px; margin-bottom: 20px; text-align: center;\">
                                        <div style=\"display: flex; align-items: center; justify-content: center; gap: 15px; margin-bottom: 15px;\">
                                            <i class=\"fas fa-volume-up\" 
                                               style=\"font-size: 2rem; color: #4f46e5; cursor: pointer;\" 
                                               data-text=\"{{ question.enonce|e('html_attr') }}\"
                                               data-lang=\"{{ test.langue.nom|e('html_attr') }}\"
                                               onclick=\"speakText(this.dataset.text, this.dataset.lang)\"></i>
                                            <p style=\"margin: 0; font-size: 1.8rem; font-weight: 700; color: #1e293b;\">
                                                {{ question.enonce }}
                                            </p>
                                        </div>
                                        <small style=\"color: #64748b;\">Lis cette phrase à haute voix</small>
                                    </div>

                                    <div style=\"text-align: center; margin-bottom: 20px;\">
                                        <button type=\"button\" 
                                                class=\"btn-microphone\" 
                                                id=\"mic_btn_{{ question.id }}\"
                                                data-question-id=\"{{ question.id }}\"
                                                data-expected=\"{{ question.enonce|e('html_attr') }}\"
                                                data-lang=\"{{ test.langue.nom|e('html_attr') }}\"
                                                onclick=\"startRecognition(this.dataset.questionId, this.dataset.expected, this.dataset.lang)\">TAP TO SPEAK
                                        </button>
                                    </div>

                                    <div class=\"oral-result\" id=\"result_{{ question.id }}\" style=\"display: none;\">
                                        <div class=\"alert\" id=\"alert_{{ question.id }}\"></div>
                                        <p><strong>Tu as dit :</strong> <span id=\"transcript_{{ question.id }}\"></span></p>
                                        <p><strong>Attendu :</strong> {{ question.enonce }}</p>
                                    </div>

                                    <input type=\"hidden\" name=\"oral_{{ question.id }}\" id=\"oral_answer_{{ question.id }}\" value=\"\">
                                </div>

                            {% elseif question.type == 'texte_libre' %}
                                {# QUESTION TEXTE LIBRE #}
                                <div class=\"text-libre-container\" id=\"texte_libre_{{ question.id }}\">
                                    <div class=\"form-group\">
                                        <label for=\"texte_{{ question.id }}\" class=\"form-label fw-bold\">
                                            Écris ta réponse (minimum 50 mots) :
                                        </label>
                                        <textarea 
                                            class=\"form-control\" 
                                            name=\"texte_{{ question.id }}\" 
                                            id=\"texte_{{ question.id }}\"
                                            rows=\"10\"
                                            placeholder=\"Écris ta réponse ici...\"
                                            required
                                            minlength=\"50\"></textarea>
                                        <small class=\"text-muted\">
                                            <span id=\"word_count_{{ question.id }}\">0</span> mots
                                        </small>
                                    </div>
                                </div>

                                <script>
                                document.getElementById('texte_{{ question.id }}').addEventListener('input', function() {
                                    const text = this.value.trim();
                                    const wordCount = text ? text.split(/\\s+/).length : 0;
                                    document.getElementById('word_count_{{ question.id }}').textContent = wordCount;
                                    if (wordCount >= 50) {
                                        updateProgress();
                                    }
                                });
                                </script>

                            {% elseif question.reponses|length > 0 %}
                                {# QUESTION QCM #}
                                {% for reponse in question.reponses %}
                                    <div class=\"answer-option\">
                                        <input class=\"form-check-input\" 
                                               type=\"radio\" 
                                               name=\"question_{{ question.id }}\" 
                                               id=\"rep_{{ reponse.id }}\" 
                                               value=\"{{ reponse.id }}\"
                                               onchange=\"updateProgress()\"
                                               required>
                                        <label class=\"form-check-label\" for=\"rep_{{ reponse.id }}\">
                                            {{ reponse.contenuRep }}
                                        </label>
                                    </div>
                                {% endfor %}
                            {% else %}
                                <div class=\"alert alert-warning\">
                                    Aucune réponse disponible pour cette question.
                                </div>
                            {% endif %}
                        </div>
                    {% endfor %}

                    <div class=\"submit-section\">
                        {% if workflow_can(passageEnCours, 'mettre_en_pause', 'test_passage') %}
                            <button type=\"button\" 
                                    class=\"btn btn-warning btn-lg me-3\" 
                                    onclick=\"submitToPause(event)\">Mettre en pause</button>
                                
                        {% endif %}

                        <button type=\"submit\" class=\"btn-submit\" id=\"submitBtn\">Soumettre mes réponses</button>
                    </div>
                </form>
            {% endif %}
        {% else %}
            <div class=\"text-center py-4\">
                <form method=\"post\" action=\"{{ path('app_test_student_start', {id: test.id}) }}\">
                    <button type=\"submit\" class=\"btn-start btn-lg\">
                        <i class=\"fas fa-play\"></i> Démarrer le test
                    </button>
                </form>
                <p class=\"text-muted mt-3\">
                    Une fois commencé, tu pourras le reprendre plus tard si besoin.
                </p>
            </div>
        {% endif %}
    </div>
</div>

<form id=\"pauseForm\" method=\"post\" action=\"{{ path('app_test_student_pause', {id: test.id}) }}\" style=\"display:none;\"></form>
<form id=\"resumeForm\" method=\"post\" action=\"{{ path('app_test_student_resume', {id: test.id}) }}\" style=\"display:none;\"></form>
{% endblock %}

{% block js %}
{{ parent() }}
<script>
const totalQuestions = {{ test.questions|length }};

function updateProgress() {
    const answeredQCM = document.querySelectorAll('input[type=\"radio\"]:checked').length;
    const oralInputs = document.querySelectorAll('input[id^=\"oral_answer_\"]');
    const validOral = Array.from(oralInputs).filter(input => input.value && input.value.trim().length > 0).length;
    
    const textLibreInputs = document.querySelectorAll('textarea[id^=\"texte_\"]');
    const validTextLibre = Array.from(textLibreInputs).filter(textarea => {
        const text = textarea.value.trim();
        const wordCount = text ? text.split(/\\s+/).length : 0;
        return wordCount >= 50;
    }).length;
    
    const totalAnswered = answeredQCM + validOral + validTextLibre;
    const progress = (totalAnswered / totalQuestions) * 100;
    
    const progressBar = document.getElementById('progressBar');
    if (progressBar) progressBar.style.width = progress + '%';
    
    const submitBtn = document.getElementById('submitBtn');
    if (submitBtn) submitBtn.disabled = totalAnswered < totalQuestions;
}

const testForm = document.getElementById('testForm');
if (testForm) {
    testForm.addEventListener('submit', function(e) {
        const answeredQCM = document.querySelectorAll('input[type=\"radio\"]:checked').length;
        const oralInputs = document.querySelectorAll('input[id^=\"oral_answer_\"]');
        const validOral = Array.from(oralInputs).filter(input => input.value && input.value.trim().length > 0).length;
        
        const textLibreInputs = document.querySelectorAll('textarea[id^=\"texte_\"]');
        const validTextLibre = Array.from(textLibreInputs).filter(textarea => {
            const text = textarea.value.trim();
            const wordCount = text ? text.split(/\\s+/).length : 0;
            return wordCount >= 50;
        }).length;
        
        if (answeredQCM + validOral + validTextLibre < totalQuestions) {
            e.preventDefault();
            alert('Veuillez répondre à toutes les questions (minimum 50 mots pour les questions texte libre) !');
        }
    });
    
    updateProgress();
}

// ✅ Variable globale pour le timer
let timerInterval;

function submitToPause(event) {
    event.preventDefault();
    if (confirm('Êtes-vous sûr de vouloir mettre le test en pause ?')) {
        // ✅ ARRÊTER LE TIMER
        if (timerInterval) {
            clearInterval(timerInterval);
            timerInterval = null;
            console.log('⏸️ Timer arrêté (pause)');
        }
        document.getElementById('pauseForm').submit();
    }
}

function submitToResume(event) {
    event.preventDefault();
    if (confirm('Êtes-vous sûr de vouloir reprendre le test ?')) {
        document.getElementById('resumeForm').submit();
    }
}

{% if passageEnCours and passageEnCours.statut == 'en_cours' %}
const dureeMinutes = {{ test.dureeEstimee ?: 15 }};
const dateDebut = new Date(\"{{ passageEnCours.dateDebut|date('Y-m-d H:i:s') }}\");
const now = new Date();
const tempsEcoule = Math.floor((now - dateDebut) / 1000);
const dureeSecondes = dureeMinutes * 60;
let tempsRestant = dureeSecondes - tempsEcoule;
window.testAlreadySubmitted = false;

const timerDisplay = document.getElementById('timerDisplay');
const timerContainer = document.getElementById('timerContainer');

function updateTimer() {
    if (tempsRestant <= 0) {
        timerDisplay.textContent = '00:00';
        if (testForm && !window.testAlreadySubmitted) {
            window.testAlreadySubmitted = true;
            clearInterval(timerInterval);
            alert('⏰ Temps écoulé ! Le test est soumis automatiquement.');
            testForm.submit();
        }
        return;
    }
    
    const minutes = Math.floor(tempsRestant / 60);
    const secondes = tempsRestant % 60;
    timerDisplay.textContent = String(minutes).padStart(2, '0') + ':' + String(secondes).padStart(2, '0');
    
    if (tempsRestant <= 60) {
        timerContainer.className = 'timer-container critical';
    } else if (tempsRestant <= 300) {
        timerContainer.className = 'timer-container warning';
    }
    
    tempsRestant--;
}

if (tempsRestant <= 0 && testForm && !window.testAlreadySubmitted) {
    window.testAlreadySubmitted = true;
    alert('⏰ Temps écoulé ! Le test va être soumis automatiquement.');
    testForm.submit();
} else {
    updateTimer();
    timerInterval = setInterval(updateTimer, 1000);
    
    if (testForm) {
        testForm.addEventListener('submit', function() {
            if (timerInterval) {
                clearInterval(timerInterval);
                timerInterval = null;
            }
            window.testAlreadySubmitted = true;
        });
    }
}
{% endif %}

const languageMap = {
    'English': 'en-US',
    'Français': 'fr-FR',
    'Espagnol': 'es-ES',
    'Español': 'es-ES',
    'Allemand': 'de-DE',
    'Italien': 'it-IT',
    'Portugais': 'pt-PT',
    'Arabe': 'ar-SA',
    'Chinois': 'zh-CN',
    'Japonais': 'ja-JP',
    'Coréen': 'ko-KR',
    'Russe': 'ru-RU'
};

function speakText(text, langue) {
    if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = languageMap[langue] || 'en-US';
        utterance.rate = 0.8;
        window.speechSynthesis.speak(utterance);
    }
}

function startRecognition(questionId, expectedText, langue) {
    if (!('webkitSpeechRecognition' in window) && !('SpeechRecognition' in window)) {
        alert('Ton navigateur ne supporte pas la reconnaissance vocale.');
        return;
    }

    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    const recognition = new SpeechRecognition();
    
    recognition.lang = languageMap[langue] || 'en-US';
    recognition.continuous = false;
    recognition.interimResults = false;

    const micBtn = document.getElementById(`mic_btn_\${questionId}`);
    const resultDiv = document.getElementById(`result_\${questionId}`);
    const alertDiv = document.getElementById(`alert_\${questionId}`);
    const transcriptSpan = document.getElementById(`transcript_\${questionId}`);
    const hiddenInput = document.getElementById(`oral_answer_\${questionId}`);

    micBtn.classList.add('recording');
    micBtn.innerHTML = '<i class=\"fas fa-circle\"></i> EN ÉCOUTE...';
    micBtn.disabled = true;
    recognition.start();

    recognition.onresult = function(event) {
        const transcript = event.results[0][0].transcript.trim();
        transcriptSpan.textContent = transcript;
        resultDiv.style.display = 'block';
        hiddenInput.value = transcript;
        alertDiv.className = 'alert alert-info';
        alertDiv.innerHTML = '<i class=\"fas fa-microphone\"></i> <strong>Enregistré !</strong>';
        micBtn.classList.remove('recording');
        micBtn.innerHTML = '<i class=\"fas fa-redo\"></i> RÉESSAYER';
        micBtn.disabled = false;
        updateProgress();
    };

    recognition.onerror = function(event) {
        micBtn.classList.remove('recording');
        micBtn.innerHTML = '<i class=\"fas fa-microphone\"></i> TAP TO SPEAK';
        micBtn.disabled = false;
        alert('Erreur : ' + event.error);
    };

    recognition.onend = function() {
        micBtn.classList.remove('recording');
        micBtn.disabled = false;
    };
}
</script>

{# ✅ MODE EXAMEN : Surveillance JavaScript (seulement si en_cours) #}
{% if isExamMode and passageEnCours and passageEnCours.statut == 'en_cours' %}
<script>
console.log('🔒 Mode examen activé - Surveillance active');

let examEvents = {
    tabSwitches: 0,
    copyPastes: 0,
    pageBlurs: 0,
    devtoolsAttempts: 0
};

function logExamEvent(eventType, details = {}) {
    fetch('{{ path(\"app_exam_log_event\", {id: passageEnCours.id}) }}', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({event_type: eventType, details: details})
    }).catch(err => console.error('Log error:', err));
}

document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        examEvents.tabSwitches++;
        logExamEvent('tab_switch', {count: examEvents.tabSwitches, timestamp: new Date().toISOString()});
        if (examEvents.tabSwitches >= 3) {
            alert('⚠️ ATTENTION: Changement d\\'onglet détecté (' + examEvents.tabSwitches + ' fois)!\\n\\nCe comportement est enregistré.');
        }
    }
});

window.addEventListener('blur', function() {
    examEvents.pageBlurs++;
    if (examEvents.pageBlurs > 5) {
        logExamEvent('page_blur', {count: examEvents.pageBlurs});
    }
});

document.addEventListener('copy', function(e) {
    examEvents.copyPastes++;
    logExamEvent('copy_paste', {action: 'copy', count: examEvents.copyPastes});
    e.preventDefault();
    alert('❌ COPIER interdit en mode examen!');
    return false;
});

document.addEventListener('paste', function(e) {
    examEvents.copyPastes++;
    logExamEvent('copy_paste', {action: 'paste', count: examEvents.copyPastes});
    e.preventDefault();
    alert('❌ COLLER interdit en mode examen!');
    return false;
});

document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
    alert('❌ Clic droit désactivé en mode examen!');
    return false;
});

document.addEventListener('keydown', function(e) {
    if (e.keyCode === 123) {
        examEvents.devtoolsAttempts++;
        logExamEvent('devtools_attempt', {key: 'F12', count: examEvents.devtoolsAttempts});
        e.preventDefault();
        alert('❌ Outils de développement interdits!');
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode === 73) {
        examEvents.devtoolsAttempts++;
        logExamEvent('devtools_attempt', {key: 'Ctrl+Shift+I', count: examEvents.devtoolsAttempts});
        e.preventDefault();
        return false;
    }
    if (e.ctrlKey && e.keyCode === 85) {
        e.preventDefault();
        return false;
    }
});

logExamEvent('exam_started', {
    user_agent: navigator.userAgent,
    screen_size: window.screen.width + 'x' + window.screen.height
});

window.addEventListener('beforeunload', function() {
    logExamEvent('exam_summary', examEvents);
});

if (!sessionStorage.getItem('exam_warning_shown')) {
    alert('🔒 MODE EXAMEN ACTIVÉ\\n\\n⚠️ Ce test est surveillé.\\n\\n❌ Changer d\\'onglet\\n❌ Copier-coller\\n❌ Outils développeur\\n\\nBonne chance !');
    sessionStorage.setItem('exam_warning_shown', 'true');
}
</script>
{% endif %}
{% endblock %}", "test_student/show.html.twig", "C:\\Users\\Retr0\\Desktop\\Fuser\\Fuser\\Fluently\\Fluently\\Fluently\\USER_LANGUE_TEST_OBJ\\templates\\test_student\\show.html.twig");
    }
}
