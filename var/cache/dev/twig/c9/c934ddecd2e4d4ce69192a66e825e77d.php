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
class __TwigTemplate_74dce1252a55d1d5487612bebae819b1 extends Template
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
    .btn-start, .btn-resume, .btn-submit {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        border: none;
        padding: 15px 50px;
        font-size: 1.2rem;
        font-weight: bold;
        border-radius: 50px;
        box-shadow: 0 10px 30px rgba(16, 185, 129, 0.4);
        transition: all 0.3s;
    }
    .btn-start:hover, .btn-resume:hover, .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(16, 185, 129, 0.5);
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 200
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

        // line 201
        yield "<div class=\"test-container\">
    ";
        // line 203
        yield "    ";
        if ((($tmp = (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 203, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 204
            yield "        <div class=\"timer-container\" id=\"timerContainer\">
            <div class=\"timer-icon\">⏱️</div>
            <div class=\"timer-time\" id=\"timerDisplay\">";
            // line 206
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 206, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 206)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 206, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 206), "html", null, true)) : ("15"));
            yield ":00</div>
            <div class=\"timer-label\">Temps restant</div>
        </div>
    ";
        }
        // line 210
        yield "
    <div class=\"test-card\">
        <div class=\"test-header\">
            <h1 class=\"mb-3\">
                <i class=\"fas fa-clipboard-check\"></i> ";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 214, $this->source); })()), "type", [], "any", false, false, false, 214), "html", null, true);
        yield "
            </h1>
            <p class=\"mb-0\" style=\"font-size: 1.2rem; opacity: 0.95;\">
                Langue : <strong>";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 217, $this->source); })()), "langue", [], "any", false, false, false, 217), "nom", [], "any", false, false, false, 217), "html", null, true);
        yield "</strong>
            </p>
        </div>

        <div class=\"test-info\">
            <div class=\"test-info-item\">
                <i class=\"fas fa-question-circle fa-2x text-primary mb-2\"></i>
                <h5 class=\"mb-0\">";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 224, $this->source); })()), "questions", [], "any", false, false, false, 224)), "html", null, true);
        yield "</h5>
                <small class=\"text-muted\">Questions</small>
            </div>
            <div class=\"test-info-item\">
                <i class=\"fas fa-clock fa-2x text-warning mb-2\"></i>
                <h5 class=\"mb-0\">";
        // line 229
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 229, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 229)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 229, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 229), "html", null, true)) : ("15"));
        yield " min</h5>
                <small class=\"text-muted\">Durée estimée</small>
            </div>
            <div class=\"test-info-item\">
                <i class=\"fas fa-star fa-2x text-success mb-2\"></i>
                <h5 class=\"mb-0\">";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 234, $this->source); })()), "scoreMax", [], "any", false, false, false, 234), "html", null, true);
        yield "</h5>
                <small class=\"text-muted\">Points max</small>
            </div>
        </div>

        ";
        // line 239
        if ((($tmp = (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 239, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 240
            yield "            <!-- Questions affichées si test en cours -->
            <form method=\"post\" action=\"";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_submit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 241, $this->source); })()), "id", [], "any", false, false, false, 241)]), "html", null, true);
            yield "\" id=\"testForm\">
                <div class=\"progress-bar-container\">
                    <div class=\"progress-bar-fill\" id=\"progressBar\"></div>
                </div>

                ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 246, $this->source); })()), "questions", [], "any", false, false, false, 246));
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
                // line 247
                yield "                    <div class=\"question-card\" data-question=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 247), "html", null, true);
                yield "\">
                        <div class=\"d-flex align-items-start mb-3\">
                            <span class=\"question-number\">";
                // line 249
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 249), "html", null, true);
                yield "</span>
                            <div class=\"question-text flex-grow-1\">
                                ";
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 251), "html", null, true);
                yield "
                                <span class=\"badge bg-primary ms-2\">";
                // line 252
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "scoreMax", [], "any", false, false, false, 252), "html", null, true);
                yield " pts</span>
                                ";
                // line 253
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 253) == "oral")) {
                    // line 254
                    yield "                                    <span class=\"badge bg-danger ms-2\">🎤 Question orale</span>
                                ";
                }
                // line 256
                yield "                            </div>
                        </div>

                        ";
                // line 259
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 259) == "oral")) {
                    // line 260
                    yield "                            ";
                    // line 261
                    yield "                            <div class=\"oral-question-container\" id=\"oral_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 261), "html", null, true);
                    yield "\">
                                <div class=\"oral-text\" style=\"background: white; border: 3px solid #4f46e5; border-radius: 12px; padding: 25px; margin-bottom: 20px; text-align: center;\">
                                    <div style=\"display: flex; align-items: center; justify-content: center; gap: 15px; margin-bottom: 15px;\">
                                        <i class=\"fas fa-volume-up\" 
                                           style=\"font-size: 2rem; color: #4f46e5; cursor: pointer;\" 
                                           data-text=\"";
                    // line 266
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 266), "html_attr");
                    yield "\"
                                           data-lang=\"";
                    // line 267
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 267, $this->source); })()), "langue", [], "any", false, false, false, 267), "nom", [], "any", false, false, false, 267), "html_attr");
                    yield "\"
                                           onclick=\"speakText(this.dataset.text, this.dataset.lang)\"></i>
                                        <p style=\"margin: 0; font-size: 1.8rem; font-weight: 700; color: #1e293b;\">
                                            ";
                    // line 270
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 270), "html", null, true);
                    yield "
                                        </p>
                                    </div>
                                    <small style=\"color: #64748b;\">Lis cette phrase à haute voix</small>
                                </div>

                                <div style=\"text-align: center; margin-bottom: 20px;\">
                                    <button type=\"button\" 
                                            class=\"btn-microphone\" 
                                            id=\"mic_btn_";
                    // line 279
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 279), "html", null, true);
                    yield "\"
                                            data-question-id=\"";
                    // line 280
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 280), "html", null, true);
                    yield "\"
                                            data-expected=\"";
                    // line 281
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 281), "html_attr");
                    yield "\"
                                            data-lang=\"";
                    // line 282
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 282, $this->source); })()), "langue", [], "any", false, false, false, 282), "nom", [], "any", false, false, false, 282), "html_attr");
                    yield "\"
                                            onclick=\"startRecognition(this.dataset.questionId, this.dataset.expected, this.dataset.lang)\">
                                        <i class=\"fas fa-microphone\"></i> TAP TO SPEAK
                                    </button>
                                </div>

                                <div class=\"oral-result\" id=\"result_";
                    // line 288
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 288), "html", null, true);
                    yield "\" style=\"display: none;\">
                                    <div class=\"alert\" id=\"alert_";
                    // line 289
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 289), "html", null, true);
                    yield "\"></div>
                                    <p><strong>Tu as dit :</strong> <span id=\"transcript_";
                    // line 290
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 290), "html", null, true);
                    yield "\"></span></p>
                                    <p><strong>Attendu :</strong> ";
                    // line 291
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 291), "html", null, true);
                    yield "</p>
                                </div>

                                <input type=\"hidden\" name=\"oral_";
                    // line 294
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 294), "html", null, true);
                    yield "\" id=\"oral_answer_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 294), "html", null, true);
                    yield "\" value=\"\">
                            </div>
                        ";
                } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,                 // line 296
$context["question"], "reponses", [], "any", false, false, false, 296)) > 0)) {
                    // line 297
                    yield "                            ";
                    // line 298
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 298));
                    foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                        // line 299
                        yield "                                <div class=\"answer-option\">
                                    <input class=\"form-check-input\" 
                                           type=\"radio\" 
                                           name=\"question_";
                        // line 302
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 302), "html", null, true);
                        yield "\" 
                                           id=\"rep_";
                        // line 303
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 303), "html", null, true);
                        yield "\" 
                                           value=\"";
                        // line 304
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 304), "html", null, true);
                        yield "\"
                                           onchange=\"updateProgress()\"
                                           required>
                                    <label class=\"form-check-label\" for=\"rep_";
                        // line 307
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 307), "html", null, true);
                        yield "\">
                                        ";
                        // line 308
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "contenuRep", [], "any", false, false, false, 308), "html", null, true);
                        yield "
                                    </label>
                                </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 312
                    yield "                        ";
                } else {
                    // line 313
                    yield "                            <div class=\"alert alert-warning\">
                                Aucune réponse disponible pour cette question.
                            </div>
                        ";
                }
                // line 317
                yield "                    </div>
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
            // line 319
            yield "
                <div class=\"submit-section\">
                    <button type=\"submit\" class=\"btn-submit\" id=\"submitBtn\">
                        <i class=\"fas fa-paper-plane\"></i> Soumettre mes réponses
                    </button>
                </div>
            </form>
        ";
        } else {
            // line 327
            yield "            <!-- Bouton pour démarrer le test -->
            <div class=\"text-center py-4\">
                <form method=\"post\" action=\"";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_start", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 329, $this->source); })()), "id", [], "any", false, false, false, 329)]), "html", null, true);
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
        // line 339
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 343
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

        // line 344
        yield from $this->yieldParentBlock("js", $context, $blocks);
        yield "
<script>
const totalQuestions = ";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 346, $this->source); })()), "questions", [], "any", false, false, false, 346)), "html", null, true);
        yield ";

function updateProgress() {
    const answeredQCM = document.querySelectorAll('input[type=\"radio\"]:checked').length;
    const oralInputs = document.querySelectorAll('input[id^=\"oral_answer_\"]');
    // ✅ Maintenant on vérifie juste si un transcript existe (pas vide)
    const validOral = Array.from(oralInputs).filter(input => input.value && input.value.trim().length > 0).length;
    
    const totalAnswered = answeredQCM + validOral;
    const progress = (totalAnswered / totalQuestions) * 100;
    
    const progressBar = document.getElementById('progressBar');
    if (progressBar) {
        progressBar.style.width = progress + '%';
    }
    
    const submitBtn = document.getElementById('submitBtn');
    if (submitBtn) {
        submitBtn.disabled = totalAnswered < totalQuestions;
    }
}

const testForm = document.getElementById('testForm');
if (testForm) {
    testForm.addEventListener('submit', function(e) {
        const answeredQCM = document.querySelectorAll('input[type=\"radio\"]:checked').length;
        const oralInputs = document.querySelectorAll('input[id^=\"oral_answer_\"]');
        // ✅ Vérifier que toutes les questions orales ont une transcription
        const validOral = Array.from(oralInputs).filter(input => input.value && input.value.trim().length > 0).length;
        
        if (answeredQCM + validOral < totalQuestions) {
            e.preventDefault();
            alert('Veuillez répondre à toutes les questions !');
        }
    });
    
    updateProgress();
}

// ========== MINUTEUR ==========
";
        // line 386
        if ((($tmp = (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 386, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 387
            yield "const dureeMinutes = ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 387, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 387)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 387, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 387), "html", null, true)) : (15));
            yield ";
const dateDebut = new Date(\"";
            // line 388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 388, $this->source); })()), "dateDebut", [], "any", false, false, false, 388), "Y-m-d H:i:s"), "html", null, true);
            yield "\");
const now = new Date();

const tempsEcoule = Math.floor((now - dateDebut) / 1000);
const dureeSecondes = dureeMinutes * 60;
let tempsRestant = dureeSecondes - tempsEcoule;

if (tempsRestant <= 0 && testForm) {
    alert('⏰ Temps écoulé ! Le test va être soumis automatiquement.');
    testForm.submit();
}

const timerDisplay = document.getElementById('timerDisplay');
const timerContainer = document.getElementById('timerContainer');

function updateTimer() {
    if (tempsRestant <= 0) {
        timerDisplay.textContent = '00:00';
        alert('⏰ Temps écoulé ! Le test est soumis automatiquement.');
        if (testForm) testForm.submit();
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

updateTimer();
const timerInterval = setInterval(updateTimer, 1000);

if (testForm) {
    testForm.addEventListener('submit', function() {
        clearInterval(timerInterval);
    });
}
";
        }
        // line 433
        yield "
// ========== RECONNAISSANCE VOCALE ==========
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
    console.log('🔊 Speaking:', text, 'in', langue);
    if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = languageMap[langue] || 'en-US';
        utterance.rate = 0.8;
        window.speechSynthesis.speak(utterance);
    } else {
        console.error('❌ Speech Synthesis not supported');
    }
}

function startRecognition(questionId, expectedText, langue) {
    console.log('🎤 Starting recognition for question', questionId);

    if (!('webkitSpeechRecognition' in window) && !('SpeechRecognition' in window)) {
        alert('❌ Ton navigateur ne supporte pas la reconnaissance vocale.\\n\\nUtilise Chrome, Edge ou Safari.');
        return;
    }

    if (window.location.protocol !== 'https:' && window.location.hostname !== 'localhost' && window.location.hostname !== '127.0.0.1') {
        alert('⚠️ La reconnaissance vocale nécessite HTTPS');
        return;
    }

    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    const recognition = new SpeechRecognition();
    
    recognition.lang = languageMap[langue] || 'en-US';
    recognition.continuous = false;
    recognition.interimResults = false;
    recognition.maxAlternatives = 3;

    const micBtn = document.getElementById(`mic_btn_\${questionId}`);
    const resultDiv = document.getElementById(`result_\${questionId}`);
    const alertDiv = document.getElementById(`alert_\${questionId}`);
    const transcriptSpan = document.getElementById(`transcript_\${questionId}`);
    const hiddenInput = document.getElementById(`oral_answer_\${questionId}`);

    micBtn.classList.add('recording');
    micBtn.innerHTML = '<i class=\"fas fa-circle\"></i> EN ÉCOUTE...';
    micBtn.disabled = true;

    try {
        recognition.start();
        console.log('✅ Recognition started');
    } catch (error) {
        console.error('❌ Error:', error);
        alert('Erreur : ' + error.message);
        micBtn.classList.remove('recording');
        micBtn.innerHTML = '<i class=\"fas fa-microphone\"></i> TAP TO SPEAK';
        micBtn.disabled = false;
        return;
    }

    recognition.onresult = function(event) {
        const transcript = event.results[0][0].transcript.trim();
        const confidence = event.results[0][0].confidence;

        console.log('Transcript:', transcript, 'Confidence:', confidence);

        transcriptSpan.textContent = transcript;
        resultDiv.style.display = 'block';

        // ✅ MODIFICATION ICI : On envoie juste la transcription au serveur
        // Le serveur PHP fera la validation avec SpeechEvaluationService
        hiddenInput.value = transcript;

        // Affichage temporaire (sera validé côté serveur)
        alertDiv.className = 'alert alert-info';
        alertDiv.innerHTML = '<i class=\"fas fa-microphone\"></i> <strong>Enregistré !</strong> La réponse sera évaluée lors de la soumission.';

        micBtn.classList.remove('recording');
        micBtn.innerHTML = '<i class=\"fas fa-redo\"></i> RÉESSAYER';
        micBtn.disabled = false;
        
        updateProgress();
    };

    recognition.onerror = function(event) {
        console.error('❌ Recognition error:', event.error);
        
        micBtn.classList.remove('recording');
        micBtn.innerHTML = '<i class=\"fas fa-microphone\"></i> TAP TO SPEAK';
        micBtn.disabled = false;
        
        if (event.error === 'no-speech') {
            alert('⚠️ Aucun son détecté. Parle plus fort près du micro.');
        } else if (event.error === 'not-allowed' || event.error === 'permission-denied') {
            alert('❌ ACCÈS AU MICRO REFUSÉ\\n\\n1. Clique sur l\\'icône 🔒 dans la barre d\\'adresse\\n2. Active les permissions pour le microphone\\n3. Recharge la page');
        } else if (event.error === 'audio-capture') {
            alert('❌ Aucun microphone détecté. Vérifie ta connexion audio.');
        } else {
            alert('❌ Erreur : ' + event.error);
        }
    };

    recognition.onend = function() {
        console.log('🏁 Recognition ended');
        micBtn.classList.remove('recording');
        micBtn.disabled = false;
        if (micBtn.innerHTML.includes('EN ÉCOUTE')) {
            micBtn.innerHTML = '<i class=\"fas fa-microphone\"></i> TAP TO SPEAK';
        }
    };
}

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
        return array (  748 => 433,  700 => 388,  695 => 387,  693 => 386,  650 => 346,  645 => 344,  632 => 343,  619 => 339,  606 => 329,  602 => 327,  592 => 319,  577 => 317,  571 => 313,  568 => 312,  558 => 308,  554 => 307,  548 => 304,  544 => 303,  540 => 302,  535 => 299,  530 => 298,  528 => 297,  526 => 296,  519 => 294,  513 => 291,  509 => 290,  505 => 289,  501 => 288,  492 => 282,  488 => 281,  484 => 280,  480 => 279,  468 => 270,  462 => 267,  458 => 266,  449 => 261,  447 => 260,  445 => 259,  440 => 256,  436 => 254,  434 => 253,  430 => 252,  426 => 251,  421 => 249,  415 => 247,  398 => 246,  390 => 241,  387 => 240,  385 => 239,  377 => 234,  369 => 229,  361 => 224,  351 => 217,  345 => 214,  339 => 210,  332 => 206,  328 => 204,  325 => 203,  322 => 201,  309 => 200,  105 => 6,  92 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ test.type }} - {{ test.langue.nom }} - Fluently{% endblock %}

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
    .btn-start, .btn-resume, .btn-submit {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        border: none;
        padding: 15px 50px;
        font-size: 1.2rem;
        font-weight: bold;
        border-radius: 50px;
        box-shadow: 0 10px 30px rgba(16, 185, 129, 0.4);
        transition: all 0.3s;
    }
    .btn-start:hover, .btn-resume:hover, .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(16, 185, 129, 0.5);
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
</style>
{% endblock %}

{% block body %}
<div class=\"test-container\">
    {# MINUTEUR - Affiché seulement si le test est démarré #}
    {% if passageEnCours %}
        <div class=\"timer-container\" id=\"timerContainer\">
            <div class=\"timer-icon\">⏱️</div>
            <div class=\"timer-time\" id=\"timerDisplay\">{{ test.dureeEstimee ?: '15' }}:00</div>
            <div class=\"timer-label\">Temps restant</div>
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
                <i class=\"fas fa-question-circle fa-2x text-primary mb-2\"></i>
                <h5 class=\"mb-0\">{{ test.questions|length }}</h5>
                <small class=\"text-muted\">Questions</small>
            </div>
            <div class=\"test-info-item\">
                <i class=\"fas fa-clock fa-2x text-warning mb-2\"></i>
                <h5 class=\"mb-0\">{{ test.dureeEstimee ?: '15' }} min</h5>
                <small class=\"text-muted\">Durée estimée</small>
            </div>
            <div class=\"test-info-item\">
                <i class=\"fas fa-star fa-2x text-success mb-2\"></i>
                <h5 class=\"mb-0\">{{ test.scoreMax }}</h5>
                <small class=\"text-muted\">Points max</small>
            </div>
        </div>

        {% if passageEnCours %}
            <!-- Questions affichées si test en cours -->
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
                                            onclick=\"startRecognition(this.dataset.questionId, this.dataset.expected, this.dataset.lang)\">
                                        <i class=\"fas fa-microphone\"></i> TAP TO SPEAK
                                    </button>
                                </div>

                                <div class=\"oral-result\" id=\"result_{{ question.id }}\" style=\"display: none;\">
                                    <div class=\"alert\" id=\"alert_{{ question.id }}\"></div>
                                    <p><strong>Tu as dit :</strong> <span id=\"transcript_{{ question.id }}\"></span></p>
                                    <p><strong>Attendu :</strong> {{ question.enonce }}</p>
                                </div>

                                <input type=\"hidden\" name=\"oral_{{ question.id }}\" id=\"oral_answer_{{ question.id }}\" value=\"\">
                            </div>
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
                    <button type=\"submit\" class=\"btn-submit\" id=\"submitBtn\">
                        <i class=\"fas fa-paper-plane\"></i> Soumettre mes réponses
                    </button>
                </div>
            </form>
        {% else %}
            <!-- Bouton pour démarrer le test -->
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
{% endblock %}

{% block js %}
{{ parent() }}
<script>
const totalQuestions = {{ test.questions|length }};

function updateProgress() {
    const answeredQCM = document.querySelectorAll('input[type=\"radio\"]:checked').length;
    const oralInputs = document.querySelectorAll('input[id^=\"oral_answer_\"]');
    // ✅ Maintenant on vérifie juste si un transcript existe (pas vide)
    const validOral = Array.from(oralInputs).filter(input => input.value && input.value.trim().length > 0).length;
    
    const totalAnswered = answeredQCM + validOral;
    const progress = (totalAnswered / totalQuestions) * 100;
    
    const progressBar = document.getElementById('progressBar');
    if (progressBar) {
        progressBar.style.width = progress + '%';
    }
    
    const submitBtn = document.getElementById('submitBtn');
    if (submitBtn) {
        submitBtn.disabled = totalAnswered < totalQuestions;
    }
}

const testForm = document.getElementById('testForm');
if (testForm) {
    testForm.addEventListener('submit', function(e) {
        const answeredQCM = document.querySelectorAll('input[type=\"radio\"]:checked').length;
        const oralInputs = document.querySelectorAll('input[id^=\"oral_answer_\"]');
        // ✅ Vérifier que toutes les questions orales ont une transcription
        const validOral = Array.from(oralInputs).filter(input => input.value && input.value.trim().length > 0).length;
        
        if (answeredQCM + validOral < totalQuestions) {
            e.preventDefault();
            alert('Veuillez répondre à toutes les questions !');
        }
    });
    
    updateProgress();
}

// ========== MINUTEUR ==========
{% if passageEnCours %}
const dureeMinutes = {{ test.dureeEstimee ?: 15 }};
const dateDebut = new Date(\"{{ passageEnCours.dateDebut|date('Y-m-d H:i:s') }}\");
const now = new Date();

const tempsEcoule = Math.floor((now - dateDebut) / 1000);
const dureeSecondes = dureeMinutes * 60;
let tempsRestant = dureeSecondes - tempsEcoule;

if (tempsRestant <= 0 && testForm) {
    alert('⏰ Temps écoulé ! Le test va être soumis automatiquement.');
    testForm.submit();
}

const timerDisplay = document.getElementById('timerDisplay');
const timerContainer = document.getElementById('timerContainer');

function updateTimer() {
    if (tempsRestant <= 0) {
        timerDisplay.textContent = '00:00';
        alert('⏰ Temps écoulé ! Le test est soumis automatiquement.');
        if (testForm) testForm.submit();
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

updateTimer();
const timerInterval = setInterval(updateTimer, 1000);

if (testForm) {
    testForm.addEventListener('submit', function() {
        clearInterval(timerInterval);
    });
}
{% endif %}

// ========== RECONNAISSANCE VOCALE ==========
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
    console.log('🔊 Speaking:', text, 'in', langue);
    if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = languageMap[langue] || 'en-US';
        utterance.rate = 0.8;
        window.speechSynthesis.speak(utterance);
    } else {
        console.error('❌ Speech Synthesis not supported');
    }
}

function startRecognition(questionId, expectedText, langue) {
    console.log('🎤 Starting recognition for question', questionId);

    if (!('webkitSpeechRecognition' in window) && !('SpeechRecognition' in window)) {
        alert('❌ Ton navigateur ne supporte pas la reconnaissance vocale.\\n\\nUtilise Chrome, Edge ou Safari.');
        return;
    }

    if (window.location.protocol !== 'https:' && window.location.hostname !== 'localhost' && window.location.hostname !== '127.0.0.1') {
        alert('⚠️ La reconnaissance vocale nécessite HTTPS');
        return;
    }

    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    const recognition = new SpeechRecognition();
    
    recognition.lang = languageMap[langue] || 'en-US';
    recognition.continuous = false;
    recognition.interimResults = false;
    recognition.maxAlternatives = 3;

    const micBtn = document.getElementById(`mic_btn_\${questionId}`);
    const resultDiv = document.getElementById(`result_\${questionId}`);
    const alertDiv = document.getElementById(`alert_\${questionId}`);
    const transcriptSpan = document.getElementById(`transcript_\${questionId}`);
    const hiddenInput = document.getElementById(`oral_answer_\${questionId}`);

    micBtn.classList.add('recording');
    micBtn.innerHTML = '<i class=\"fas fa-circle\"></i> EN ÉCOUTE...';
    micBtn.disabled = true;

    try {
        recognition.start();
        console.log('✅ Recognition started');
    } catch (error) {
        console.error('❌ Error:', error);
        alert('Erreur : ' + error.message);
        micBtn.classList.remove('recording');
        micBtn.innerHTML = '<i class=\"fas fa-microphone\"></i> TAP TO SPEAK';
        micBtn.disabled = false;
        return;
    }

    recognition.onresult = function(event) {
        const transcript = event.results[0][0].transcript.trim();
        const confidence = event.results[0][0].confidence;

        console.log('Transcript:', transcript, 'Confidence:', confidence);

        transcriptSpan.textContent = transcript;
        resultDiv.style.display = 'block';

        // ✅ MODIFICATION ICI : On envoie juste la transcription au serveur
        // Le serveur PHP fera la validation avec SpeechEvaluationService
        hiddenInput.value = transcript;

        // Affichage temporaire (sera validé côté serveur)
        alertDiv.className = 'alert alert-info';
        alertDiv.innerHTML = '<i class=\"fas fa-microphone\"></i> <strong>Enregistré !</strong> La réponse sera évaluée lors de la soumission.';

        micBtn.classList.remove('recording');
        micBtn.innerHTML = '<i class=\"fas fa-redo\"></i> RÉESSAYER';
        micBtn.disabled = false;
        
        updateProgress();
    };

    recognition.onerror = function(event) {
        console.error('❌ Recognition error:', event.error);
        
        micBtn.classList.remove('recording');
        micBtn.innerHTML = '<i class=\"fas fa-microphone\"></i> TAP TO SPEAK';
        micBtn.disabled = false;
        
        if (event.error === 'no-speech') {
            alert('⚠️ Aucun son détecté. Parle plus fort près du micro.');
        } else if (event.error === 'not-allowed' || event.error === 'permission-denied') {
            alert('❌ ACCÈS AU MICRO REFUSÉ\\n\\n1. Clique sur l\\'icône 🔒 dans la barre d\\'adresse\\n2. Active les permissions pour le microphone\\n3. Recharge la page');
        } else if (event.error === 'audio-capture') {
            alert('❌ Aucun microphone détecté. Vérifie ta connexion audio.');
        } else {
            alert('❌ Erreur : ' + event.error);
        }
    };

    recognition.onend = function() {
        console.log('🏁 Recognition ended');
        micBtn.classList.remove('recording');
        micBtn.disabled = false;
        if (micBtn.innerHTML.includes('EN ÉCOUTE')) {
            micBtn.innerHTML = '<i class=\"fas fa-microphone\"></i> TAP TO SPEAK';
        }
    };
}

</script>
{% endblock %}", "test_student/show.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\test_student\\show.html.twig");
    }
}
