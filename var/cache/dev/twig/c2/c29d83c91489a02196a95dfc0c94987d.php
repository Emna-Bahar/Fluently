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
class __TwigTemplate_2309c4205f55e9af5548897c830dd77e extends Template
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
    .btn-start, .btn-resume {
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
    .btn-start:hover, .btn-resume:hover {
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 131
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

        // line 132
        yield "<div class=\"test-container\">
    <div class=\"test-card\">
        <div class=\"test-header\">
            <h1 class=\"mb-3\">
                <i class=\"fas fa-clipboard-check\"></i> ";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 136, $this->source); })()), "type", [], "any", false, false, false, 136), "html", null, true);
        yield "
            </h1>
            <p class=\"mb-0\" style=\"font-size: 1.2rem; opacity: 0.95;\">
                Langue : <strong>";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 139, $this->source); })()), "langue", [], "any", false, false, false, 139), "nom", [], "any", false, false, false, 139), "html", null, true);
        yield "</strong>
            </p>
        </div>

        <div class=\"test-info\">
            <div class=\"test-info-item\">
                <i class=\"fas fa-question-circle fa-2x text-primary mb-2\"></i>
                <h5 class=\"mb-0\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 146, $this->source); })()), "questions", [], "any", false, false, false, 146)), "html", null, true);
        yield "</h5>
                <small class=\"text-muted\">Questions</small>
            </div>
            <div class=\"test-info-item\">
                <i class=\"fas fa-clock fa-2x text-warning mb-2\"></i>
                <h5 class=\"mb-0\">";
        // line 151
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 151, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 151)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 151, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 151), "html", null, true)) : ("15"));
        yield " min</h5>
                <small class=\"text-muted\">Durée estimée</small>
            </div>
            <div class=\"test-info-item\">
                <i class=\"fas fa-star fa-2x text-success mb-2\"></i>
                <h5 class=\"mb-0\">";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 156, $this->source); })()), "scoreMax", [], "any", false, false, false, 156), "html", null, true);
        yield "</h5>
                <small class=\"text-muted\">Points max</small>
            </div>
        </div>

        ";
        // line 161
        if ((($tmp = (isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 161, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "            <div class=\"text-center py-4\">
                <p class=\"lead text-warning mb-3\">
                    <i class=\"fas fa-play-circle\"></i> Test déjà commencé...
                </p>
                <a href=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 166, $this->source); })()), "id", [], "any", false, false, false, 166)]), "html", null, true);
            yield "\" class=\"btn btn-resume btn-lg\">
                    Reprendre le test
                </a>
            </div>
        ";
        } else {
            // line 171
            yield "            <div class=\"text-center py-4\">
                <form method=\"post\" action=\"";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_start", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 172, $this->source); })()), "id", [], "any", false, false, false, 172)]), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-start btn-lg\">
                        <i class=\"fas fa-play\"></i> Démarrer le test
                    </button>
                </form>
                <p class=\"text-muted mt-3\">
                    Une fois commencé, tu pourras le reprendre plus tard si besoin.
                </p>
            </div>
        ";
        }
        // line 182
        yield "
        <!-- Questions (affichées seulement si test démarré ou en cours) -->
        ";
        // line 184
        if (((isset($context["passageEnCours"]) || array_key_exists("passageEnCours", $context) ? $context["passageEnCours"] : (function () { throw new RuntimeError('Variable "passageEnCours" does not exist.', 184, $this->source); })()) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "request", [], "any", false, false, false, 184), "query", [], "any", false, false, false, 184), "get", ["started"], "method", false, false, false, 184))) {
            // line 185
            yield "            <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_submit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 185, $this->source); })()), "id", [], "any", false, false, false, 185)]), "html", null, true);
            yield "\" id=\"testForm\">
                <div class=\"progress-bar-container\">
                    <div class=\"progress-bar-fill\" id=\"progressBar\"></div>
                </div>

                ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 190, $this->source); })()), "questions", [], "any", false, false, false, 190));
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
                // line 191
                yield "                    <div class=\"question-card\" data-question=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 191), "html", null, true);
                yield "\">
                        <div class=\"d-flex align-items-start mb-3\">
                            <span class=\"question-number\">";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 193), "html", null, true);
                yield "</span>
                            <div class=\"question-text flex-grow-1\">
                                ";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 195), "html", null, true);
                yield "
                                <span class=\"badge bg-primary ms-2\">";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "scoreMax", [], "any", false, false, false, 196), "html", null, true);
                yield " pts</span>
                            </div>
                        </div>

                        ";
                // line 200
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 200)) > 0)) {
                    // line 201
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 201));
                    foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                        // line 202
                        yield "                                <div class=\"answer-option\">
                                    <input class=\"form-check-input\" 
                                           type=\"radio\" 
                                           name=\"question_";
                        // line 205
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 205), "html", null, true);
                        yield "\" 
                                           id=\"rep_";
                        // line 206
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 206), "html", null, true);
                        yield "\" 
                                           value=\"";
                        // line 207
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 207), "html", null, true);
                        yield "\"
                                           onchange=\"updateProgress()\"
                                           required>
                                    <label class=\"form-check-label\" for=\"rep_";
                        // line 210
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 210), "html", null, true);
                        yield "\">
                                        ";
                        // line 211
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "contenuRep", [], "any", false, false, false, 211), "html", null, true);
                        yield "
                                    </label>
                                </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 215
                    yield "                        ";
                } else {
                    // line 216
                    yield "                            <div class=\"alert alert-warning\">
                                Aucune réponse disponible pour cette question.
                            </div>
                        ";
                }
                // line 220
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
            // line 222
            yield "
                <div class=\"submit-section\">
                    <button type=\"submit\" class=\"btn btn-submit\" id=\"submitBtn\">
                        <i class=\"fas fa-paper-plane\"></i> Soumettre mes réponses
                    </button>
                </div>
            </form>
        ";
        }
        // line 230
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 234
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

        // line 235
        yield from $this->yieldParentBlock("js", $context, $blocks);
        yield "
<script>
    const totalQuestions = ";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 237, $this->source); })()), "questions", [], "any", false, false, false, 237)), "html", null, true);
        yield ";
    
    function updateProgress() {
        const answered = document.querySelectorAll('input[type=\"radio\"]:checked').length;
        const progress = (answered / totalQuestions) * 100;
        document.getElementById('progressBar').style.width = progress + '%';
        
        document.getElementById('submitBtn').disabled = answered < totalQuestions;
    }

    document.getElementById('testForm')?.addEventListener('submit', function(e) {
        const answered = document.querySelectorAll('input[type=\"radio\"]:checked').length;
        if (answered < totalQuestions) {
            e.preventDefault();
            alert('Veuillez répondre à toutes les questions !');
        }
    });

    updateProgress();
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
        return array (  490 => 237,  485 => 235,  472 => 234,  459 => 230,  449 => 222,  434 => 220,  428 => 216,  425 => 215,  415 => 211,  411 => 210,  405 => 207,  401 => 206,  397 => 205,  392 => 202,  387 => 201,  385 => 200,  378 => 196,  374 => 195,  369 => 193,  363 => 191,  346 => 190,  337 => 185,  335 => 184,  331 => 182,  318 => 172,  315 => 171,  307 => 166,  301 => 162,  299 => 161,  291 => 156,  283 => 151,  275 => 146,  265 => 139,  259 => 136,  253 => 132,  240 => 131,  105 => 6,  92 => 5,  66 => 3,  43 => 1,);
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
    .btn-start, .btn-resume {
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
    .btn-start:hover, .btn-resume:hover {
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
</style>
{% endblock %}

{% block body %}
<div class=\"test-container\">
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
            <div class=\"text-center py-4\">
                <p class=\"lead text-warning mb-3\">
                    <i class=\"fas fa-play-circle\"></i> Test déjà commencé...
                </p>
                <a href=\"{{ path('app_test_student_show', {id: test.id}) }}\" class=\"btn btn-resume btn-lg\">
                    Reprendre le test
                </a>
            </div>
        {% else %}
            <div class=\"text-center py-4\">
                <form method=\"post\" action=\"{{ path('app_test_student_start', {id: test.id}) }}\">
                    <button type=\"submit\" class=\"btn btn-start btn-lg\">
                        <i class=\"fas fa-play\"></i> Démarrer le test
                    </button>
                </form>
                <p class=\"text-muted mt-3\">
                    Une fois commencé, tu pourras le reprendre plus tard si besoin.
                </p>
            </div>
        {% endif %}

        <!-- Questions (affichées seulement si test démarré ou en cours) -->
        {% if passageEnCours or app.request.query.get('started') %}
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
                            </div>
                        </div>

                        {% if question.reponses|length > 0 %}
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
                    <button type=\"submit\" class=\"btn btn-submit\" id=\"submitBtn\">
                        <i class=\"fas fa-paper-plane\"></i> Soumettre mes réponses
                    </button>
                </div>
            </form>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block js %}
{{ parent() }}
<script>
    const totalQuestions = {{ test.questions|length }};
    
    function updateProgress() {
        const answered = document.querySelectorAll('input[type=\"radio\"]:checked').length;
        const progress = (answered / totalQuestions) * 100;
        document.getElementById('progressBar').style.width = progress + '%';
        
        document.getElementById('submitBtn').disabled = answered < totalQuestions;
    }

    document.getElementById('testForm')?.addEventListener('submit', function(e) {
        const answered = document.querySelectorAll('input[type=\"radio\"]:checked').length;
        if (answered < totalQuestions) {
            e.preventDefault();
            alert('Veuillez répondre à toutes les questions !');
        }
    });

    updateProgress();
</script>
{% endblock %}", "test_student/show.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\test_student\\show.html.twig");
    }
}
