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
class __TwigTemplate_96c0d9e0517721986c12006fe6c84114 extends Template
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
        yield " - Test de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 3, $this->source); })()), "idLangue", [], "any", false, false, false, 3), "nom", [], "any", false, false, false, 3), "html", null, true);
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
    }
    .test-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        max-width: 900px;
        margin: 0 auto;
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
    .btn-submit {
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
    .btn-submit:hover {
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

    // line 129
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

        // line 130
        yield "<div class=\"test-container\">
    <div class=\"test-card\">
        <div class=\"test-header\">
            <h1 class=\"mb-3\">
                <i class=\"fas fa-clipboard-check\"></i> ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 134, $this->source); })()), "type", [], "any", false, false, false, 134), "html", null, true);
        yield "
            </h1>
            <p class=\"mb-0\" style=\"font-size: 1.2rem; opacity: 0.95;\">
                Test de langue : <strong>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 137, $this->source); })()), "idLangue", [], "any", false, false, false, 137), "nom", [], "any", false, false, false, 137), "html", null, true);
        yield "</strong>
            </p>
        </div>

        <div class=\"test-info\">
            <div class=\"test-info-item\">
                <i class=\"fas fa-question-circle fa-2x text-primary mb-2\"></i>
                <h5 class=\"mb-0\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 144, $this->source); })()), "questions", [], "any", false, false, false, 144)), "html", null, true);
        yield "</h5>
                <small class=\"text-muted\">Questions</small>
            </div>
            <div class=\"test-info-item\">
                <i class=\"fas fa-clock fa-2x text-warning mb-2\"></i>
                <h5 class=\"mb-0\">";
        // line 149
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 149, $this->source); })()), "duree", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 149, $this->source); })()), "duree", [], "any", false, false, false, 149), "i"), "html", null, true)) : ("15"));
        yield " min</h5>
                <small class=\"text-muted\">Durée estimée</small>
            </div>
            <div class=\"test-info-item\">
                <i class=\"fas fa-star fa-2x text-success mb-2\"></i>
                <h5 class=\"mb-0\">
                    ";
        // line 155
        $context["totalScore"] = 0;
        // line 156
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 156, $this->source); })()), "questions", [], "any", false, false, false, 156));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 157
            yield "                        ";
            $context["totalScore"] = ((isset($context["totalScore"]) || array_key_exists("totalScore", $context) ? $context["totalScore"] : (function () { throw new RuntimeError('Variable "totalScore" does not exist.', 157, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["question"], "scoreMax", [], "any", false, false, false, 157));
            // line 158
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalScore"]) || array_key_exists("totalScore", $context) ? $context["totalScore"] : (function () { throw new RuntimeError('Variable "totalScore" does not exist.', 159, $this->source); })()), "html", null, true);
        yield "
                </h5>
                <small class=\"text-muted\">Points max</small>
            </div>
        </div>

        <div class=\"progress-bar-container\">
            <div class=\"progress-bar-fill\" id=\"progressBar\"></div>
        </div>

        <form method=\"post\" action=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_submit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 169, $this->source); })()), "id", [], "any", false, false, false, 169)]), "html", null, true);
        yield "\" id=\"testForm\">
            ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 170, $this->source); })()), "questions", [], "any", false, false, false, 170));
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
            // line 171
            yield "                <div class=\"question-card\" data-question=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 171), "html", null, true);
            yield "\">
                    <div class=\"d-flex align-items-start mb-3\">
                        <span class=\"question-number\">";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 173), "html", null, true);
            yield "</span>
                        <div class=\"question-text flex-grow-1\">
                            ";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 175), "html", null, true);
            yield "
                            <span class=\"badge bg-primary ms-2\">";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "scoreMax", [], "any", false, false, false, 176), "html", null, true);
            yield " pts</span>
                        </div>
                    </div>

                    ";
            // line 180
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 180)) > 0)) {
                // line 181
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 181));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 182
                    yield "                            <div class=\"answer-option\">
                                <input class=\"form-check-input\" 
                                       type=\"radio\" 
                                       name=\"question_";
                    // line 185
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 185), "html", null, true);
                    yield "\" 
                                       id=\"rep_";
                    // line 186
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 186), "html", null, true);
                    yield "\" 
                                       value=\"";
                    // line 187
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 187), "html", null, true);
                    yield "\"
                                       onchange=\"updateProgress()\"
                                       required>
                                <label class=\"form-check-label flex-grow-1\" for=\"rep_";
                    // line 190
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 190), "html", null, true);
                    yield "\">
                                    ";
                    // line 191
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "contenuRep", [], "any", false, false, false, 191), "html", null, true);
                    yield "
                                </label>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                yield "                    ";
            } else {
                // line 196
                yield "                        <div class=\"alert alert-warning\">
                            Aucune réponse disponible pour cette question.
                        </div>
                    ";
            }
            // line 200
            yield "                </div>
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
        // line 202
        yield "
            <div class=\"submit-section\">
                <p class=\"text-muted mb-3\">
                    <i class=\"fas fa-info-circle\"></i> 
                    Vérifiez bien vos réponses avant de soumettre. Vous ne pourrez pas revenir en arrière.
                </p>
                <button type=\"submit\" class=\"btn btn-submit\" id=\"submitBtn\">
                    <i class=\"fas fa-paper-plane\"></i> Soumettre mes réponses
                </button>
                <br>
                <a href=\"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_apprentissage", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 212, $this->source); })()), "idLangue", [], "any", false, false, false, 212), "id", [], "any", false, false, false, 212)]), "html", null, true);
        yield "\" class=\"btn btn-link mt-3\">
                    <i class=\"fas fa-arrow-left\"></i> Annuler et retourner au parcours
                </a>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 221
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

        // line 222
        yield from $this->yieldParentBlock("js", $context, $blocks);
        yield "
<script>
    const totalQuestions = ";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 224, $this->source); })()), "questions", [], "any", false, false, false, 224)), "html", null, true);
        yield ";
    
    function updateProgress() {
        const answeredQuestions = document.querySelectorAll('input[type=\"radio\"]:checked').length;
        const progress = (answeredQuestions / totalQuestions) * 100;
        document.getElementById('progressBar').style.width = progress + '%';
        
        // Activer le bouton submit si toutes les questions sont répondues
        const submitBtn = document.getElementById('submitBtn');
        if (answeredQuestions === totalQuestions) {
            submitBtn.style.opacity = '1';
            submitBtn.style.cursor = 'pointer';
        } else {
            submitBtn.style.opacity = '0.7';
        }
    }
    
    // Confirmation avant soumission
    document.getElementById('testForm').addEventListener('submit', function(e) {
        const answeredQuestions = document.querySelectorAll('input[type=\"radio\"]:checked').length;
        
        if (answeredQuestions < totalQuestions) {
            e.preventDefault();
            alert('⚠️ Vous n\\'avez pas répondu à toutes les questions!\\n\\nQuestions répondues: ' + answeredQuestions + '/' + totalQuestions);
            return false;
        }
        
        if (!confirm('✅ Êtes-vous sûr de vouloir soumettre vos réponses?\\n\\nVous ne pourrez plus modifier vos réponses après validation.')) {
            e.preventDefault();
            return false;
        }
    });
    
    // Initialiser
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
        return array (  476 => 224,  471 => 222,  458 => 221,  439 => 212,  427 => 202,  412 => 200,  406 => 196,  403 => 195,  393 => 191,  389 => 190,  383 => 187,  379 => 186,  375 => 185,  370 => 182,  365 => 181,  363 => 180,  356 => 176,  352 => 175,  347 => 173,  341 => 171,  324 => 170,  320 => 169,  306 => 159,  300 => 158,  297 => 157,  292 => 156,  290 => 155,  281 => 149,  273 => 144,  263 => 137,  257 => 134,  251 => 130,  238 => 129,  105 => 6,  92 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ test.type }} - Test de {{ test.idLangue.nom }} - Fluently{% endblock %}

{% block css %}
{{ parent() }}
<style>
    .test-container {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 40px 20px;
    }
    .test-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        max-width: 900px;
        margin: 0 auto;
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
    .btn-submit {
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
    .btn-submit:hover {
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
                Test de langue : <strong>{{ test.idLangue.nom }}</strong>
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
                <h5 class=\"mb-0\">{{ test.duree ? test.duree|date('i') : '15' }} min</h5>
                <small class=\"text-muted\">Durée estimée</small>
            </div>
            <div class=\"test-info-item\">
                <i class=\"fas fa-star fa-2x text-success mb-2\"></i>
                <h5 class=\"mb-0\">
                    {% set totalScore = 0 %}
                    {% for question in test.questions %}
                        {% set totalScore = totalScore + question.scoreMax %}
                    {% endfor %}
                    {{ totalScore }}
                </h5>
                <small class=\"text-muted\">Points max</small>
            </div>
        </div>

        <div class=\"progress-bar-container\">
            <div class=\"progress-bar-fill\" id=\"progressBar\"></div>
        </div>

        <form method=\"post\" action=\"{{ path('app_test_student_submit', {id: test.id}) }}\" id=\"testForm\">
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
                                <label class=\"form-check-label flex-grow-1\" for=\"rep_{{ reponse.id }}\">
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
                <p class=\"text-muted mb-3\">
                    <i class=\"fas fa-info-circle\"></i> 
                    Vérifiez bien vos réponses avant de soumettre. Vous ne pourrez pas revenir en arrière.
                </p>
                <button type=\"submit\" class=\"btn btn-submit\" id=\"submitBtn\">
                    <i class=\"fas fa-paper-plane\"></i> Soumettre mes réponses
                </button>
                <br>
                <a href=\"{{ path('app_langue_apprentissage', {id: test.idLangue.id}) }}\" class=\"btn btn-link mt-3\">
                    <i class=\"fas fa-arrow-left\"></i> Annuler et retourner au parcours
                </a>
            </div>
        </form>
    </div>
</div>
{% endblock %}

{% block js %}
{{ parent() }}
<script>
    const totalQuestions = {{ test.questions|length }};
    
    function updateProgress() {
        const answeredQuestions = document.querySelectorAll('input[type=\"radio\"]:checked').length;
        const progress = (answeredQuestions / totalQuestions) * 100;
        document.getElementById('progressBar').style.width = progress + '%';
        
        // Activer le bouton submit si toutes les questions sont répondues
        const submitBtn = document.getElementById('submitBtn');
        if (answeredQuestions === totalQuestions) {
            submitBtn.style.opacity = '1';
            submitBtn.style.cursor = 'pointer';
        } else {
            submitBtn.style.opacity = '0.7';
        }
    }
    
    // Confirmation avant soumission
    document.getElementById('testForm').addEventListener('submit', function(e) {
        const answeredQuestions = document.querySelectorAll('input[type=\"radio\"]:checked').length;
        
        if (answeredQuestions < totalQuestions) {
            e.preventDefault();
            alert('⚠️ Vous n\\'avez pas répondu à toutes les questions!\\n\\nQuestions répondues: ' + answeredQuestions + '/' + totalQuestions);
            return false;
        }
        
        if (!confirm('✅ Êtes-vous sûr de vouloir soumettre vos réponses?\\n\\nVous ne pourrez plus modifier vos réponses après validation.')) {
            e.preventDefault();
            return false;
        }
    });
    
    // Initialiser
    updateProgress();
</script>
{% endblock %}", "test_student/show.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\test_student\\show.html.twig");
    }
}
