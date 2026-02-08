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

/* test/index.html.twig */
class __TwigTemplate_1cb4135ad764cacc83aef944e338c7e4 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

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

        yield "Gestion des Tests - Fluently";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        /* En-tête principal */
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 30px;
            border-radius: 16px;
            margin-bottom: 40px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.18);
        }

        .page-header h1 {
            font-weight: 900;
            font-size: 2.6rem;
            margin: 0 0 8px;
            text-shadow: 0 3px 12px rgba(0,0,0,0.35);
        }

        .page-header p {
            font-size: 1.15rem;
            opacity: 0.92;
            margin: 0;
        }

        /* Cartes statistiques */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
            margin-bottom: 40px;
        }

        .stats-card {
            background: white;
            border-radius: 16px;
            padding: 28px 24px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.04);
        }

        .stats-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 40px rgba(0,0,0,0.14);
        }

        .stats-icon {
            font-size: 3rem;
            opacity: 0.85;
            transition: transform 0.3s;
        }

        .stats-card:hover .stats-icon {
            transform: scale(1.15);
        }

        .stats-number {
            font-size: 2.8rem;
            font-weight: 900;
            margin: 0 0 4px;
            line-height: 1;
        }

        .stats-label {
            font-size: 1.05rem;
            color: #64748b;
            margin: 0;
        }

        /* Filtres */
        .filter-card {
            background: white;
            border-radius: 16px;
            padding: 28px;
            margin-bottom: 40px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.04);
        }

        .filter-card .form-label {
            font-weight: 700;
            color: #334155;
            margin-bottom: 10px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding-left: 48px;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            height: 52px;
            transition: all 0.3s;
        }

        .search-box input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
            outline: none;
        }

        .search-box i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1.3rem;
        }

        .filter-select {
            height: 52px;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            padding: 0 16px;
            font-size: 1rem;
        }

        .btn-filter {
            height: 52px;
            padding: 0 28px;
            font-weight: 700;
            border-radius: 12px;
        }

        /* Tableau */
        .test-table {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.04);
        }

        .test-table thead {
            background: linear-gradient(135deg, #4f46e5 0%, #6d28d9 100%);
            color: white;
        }

        .test-table th {
            padding: 18px 16px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.4px;
            border: none;
        }

        .test-table td {
            padding: 18px 16px;
            vertical-align: middle;
            border-top: 1px solid #f1f5f9;
        }

        .test-table tbody tr:hover {
            background: #f8fafc;
        }

        .badge-type {
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        .badge-result {
            padding: 10px 18px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 800;
        }

        .btn-action {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            margin: 0 4px;
            font-size: 1.1rem;
            transition: all 0.25s;
        }

        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.18);
        }

        /* État vide */
        .empty-state {
            text-align: center;
            padding: 100px 30px;
            color: #64748b;
        }

        .empty-state i {
            font-size: 6rem;
            color: #e2e8f0;
            margin-bottom: 24px;
        }

        .empty-state h4 {
            font-weight: 700;
            color: #334155;
            margin-bottom: 12px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 217
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

        // line 218
        yield "    <div class=\"container-fluid mt-4\">

        <!-- En-tête principal -->
        <div class=\"page-header\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                <div>
                    <h1>
                        <i class=\"fas fa-clipboard-list me-3\"></i>
                        Gestion des Tests
                    </h1>
                    <p>Créer, modifier et superviser tous vos tests d'évaluation</p>
                </div>
                <a href=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_new");
        yield "\" class=\"btn btn-light btn-lg px-4 py-3\">
                    <i class=\"fas fa-plus-circle me-2\"></i> Créer un nouveau test
                </a>
            </div>
        </div>

        <!-- Cartes statistiques -->
        <div class=\"stats-grid\">
            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    
                        
                        <div class=\"stats-label\"><i class=\"fas fa-clipboard-list stats-icon text-primary\"></i>Tests au total<div class=\"stats-number text-primary\">";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 242, $this->source); })())), "html", null, true);
        yield "</div></div>
                        
                    
                    
                </div>
            </div>

            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div><div class=\"stats-label\"><i class=\"fas fa-check-circle stats-icon text-success\"></i>Tests passés</div>
                        <div class=\"stats-number text-success\">
                            ";
        // line 253
        $context["passed"] = 0;
        // line 254
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 254, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 255
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "resultat", [], "any", true, true, false, 255) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["test"], "resultat", [], "any", false, false, false, 255)))) {
                // line 256
                yield "                                    ";
                $context["passed"] = ((isset($context["passed"]) || array_key_exists("passed", $context) ? $context["passed"] : (function () { throw new RuntimeError('Variable "passed" does not exist.', 256, $this->source); })()) + 1);
                // line 257
                yield "                                ";
            }
            // line 258
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        yield "                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["passed"]) || array_key_exists("passed", $context) ? $context["passed"] : (function () { throw new RuntimeError('Variable "passed" does not exist.', 259, $this->source); })()), "html", null, true);
        yield "
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div><div class=\"stats-label\"><i class=\"fas fa-clock stats-icon text-warning\"></i>En attente</div>
                        <div class=\"stats-number text-warning\">
                            ";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 271, $this->source); })())) - (isset($context["passed"]) || array_key_exists("passed", $context) ? $context["passed"] : (function () { throw new RuntimeError('Variable "passed" does not exist.', 271, $this->source); })())), "html", null, true);
        yield "
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div><div class=\"stats-label\"><i class=\"fas fa-question-circle stats-icon text-info\"></i>Questions</div>
                        <div class=\"stats-number text-info\">
                            ";
        // line 283
        $context["totalQ"] = 0;
        // line 284
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 284, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 285
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["test"], "questions", [], "any", true, true, false, 285)) {
                // line 286
                yield "                                    ";
                $context["totalQ"] = ((isset($context["totalQ"]) || array_key_exists("totalQ", $context) ? $context["totalQ"] : (function () { throw new RuntimeError('Variable "totalQ" does not exist.', 286, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["test"], "questions", [], "any", false, false, false, 286)));
                // line 287
                yield "                                ";
            }
            // line 288
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        yield "                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQ"]) || array_key_exists("totalQ", $context) ? $context["totalQ"] : (function () { throw new RuntimeError('Variable "totalQ" does not exist.', 289, $this->source); })()), "html", null, true);
        yield "
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Filtres -->
        <div class=\"filter-card\">
            <form method=\"get\" action=\"";
        // line 300
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_index");
        yield "\" id=\"filterForm\" class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6\">
                    
                    <div class=\"search-box\">
                        <i class=\"fas fa-search\"></i>
                        <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Type, langue, ID...\" value=\"";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 305, $this->source); })()), "request", [], "any", false, false, false, 305), "get", ["search"], "method", false, false, false, 305), "html", null, true);
        yield "\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-bold\">
                        <i class=\"fas fa-filter text-primary me-1\"></i> Type de test
                    </label>
                    <select class=\"form-select filter-select\" name=\"type\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"Test de niveau\" ";
        // line 315
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 315, $this->source); })()), "request", [], "any", false, false, false, 315), "get", ["type"], "method", false, false, false, 315) == "Test de niveau")) ? ("selected") : (""));
        yield ">Test de niveau</option>
                        <option value=\"quiz_debutant\" ";
        // line 316
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "request", [], "any", false, false, false, 316), "get", ["type"], "method", false, false, false, 316) == "quiz_debutant")) ? ("selected") : (""));
        yield ">Quiz débutant</option>
                        <option value=\"test_intermediaire\" ";
        // line 317
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 317, $this->source); })()), "request", [], "any", false, false, false, 317), "get", ["type"], "method", false, false, false, 317) == "test_intermediaire")) ? ("selected") : (""));
        yield ">Test intermédiaire</option>
                        <option value=\"examen_final\" ";
        // line 318
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 318, $this->source); })()), "request", [], "any", false, false, false, 318), "get", ["type"], "method", false, false, false, 318) == "examen_final")) ? ("selected") : (""));
        yield ">Examen final</option>
                        <option value=\"placement\" ";
        // line 319
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "request", [], "any", false, false, false, 319), "get", ["type"], "method", false, false, false, 319) == "placement")) ? ("selected") : (""));
        yield ">Placement</option>
                        <option value=\"quiz_gamifie\" ";
        // line 320
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "request", [], "any", false, false, false, 320), "get", ["type"], "method", false, false, false, 320) == "quiz_gamifie")) ? ("selected") : (""));
        yield ">Quiz gamifié</option>
                    </select>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-bold\">
                        <i class=\"fas fa-language text-primary me-1\"></i> Langue
                    </label>
                    <select class=\"form-select filter-select\" name=\"langue\">
                        <option value=\"\">Toutes les langues</option>
                        ";
        // line 330
        $context["langues"] = [];
        // line 331
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 331, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 332
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "idLangue", [], "any", false, false, false, 332) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "idLangue", [], "any", false, false, false, 332), "nom", [], "any", false, false, false, 332), (isset($context["langues"]) || array_key_exists("langues", $context) ? $context["langues"] : (function () { throw new RuntimeError('Variable "langues" does not exist.', 332, $this->source); })())))) {
                // line 333
                yield "                                ";
                $context["langues"] = Twig\Extension\CoreExtension::merge((isset($context["langues"]) || array_key_exists("langues", $context) ? $context["langues"] : (function () { throw new RuntimeError('Variable "langues" does not exist.', 333, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "idLangue", [], "any", false, false, false, 333), "nom", [], "any", false, false, false, 333)]);
                // line 334
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "idLangue", [], "any", false, false, false, 334), "id", [], "any", false, false, false, 334), "html", null, true);
                yield "\" ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "request", [], "any", false, false, false, 334), "get", ["langue"], "method", false, false, false, 334) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "idLangue", [], "any", false, false, false, 334), "id", [], "any", false, false, false, 334))) ? ("selected") : (""));
                yield ">
                                    ";
                // line 335
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "idLangue", [], "any", false, false, false, 335), "nom", [], "any", false, false, false, 335), "html", null, true);
                yield "
                                </option>
                            ";
            }
            // line 338
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        yield "                    </select>
                </div>

                <div class=\"col-lg-2 col-md-6 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 btn-lg\">
                        <i class=\"fas fa-filter me-2\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>

        <!-- Tableau -->
        <div class=\"test-table\">
            <table class=\"table mb-0\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Résultat</th>
                        <th>Durée</th>
                        <th>Type</th>
                        <th>Langue</th>
                        <th>Questions</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 366, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 367
            yield "                        <tr class=\"test-row\" data-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 367)), "html", null, true);
            yield "\" data-langue=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["test"], "idLangue", [], "any", false, false, false, 367)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "idLangue", [], "any", false, false, false, 367), "id", [], "any", false, false, false, 367), "html", null, true)) : (""));
            yield "\">
                            <td class=\"fw-bold text-primary\">#";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 368), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 370
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["test"], "datePassage", [], "any", false, false, false, 370)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 371
                yield "                                    <i class=\"far fa-calendar-alt text-muted me-2\"></i>
                                    ";
                // line 372
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "datePassage", [], "any", false, false, false, 372), "d/m/Y"), "html", null, true);
                yield "
                                ";
            } else {
                // line 374
                yield "                                    <span class=\"text-muted\">—</span>
                                ";
            }
            // line 376
            yield "                            </td>
                            <td>
                                ";
            // line 378
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "resultat", [], "any", true, true, false, 378) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["test"], "resultat", [], "any", false, false, false, 378)))) {
                // line 379
                yield "                                    <span class=\"badge badge-result ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "resultat", [], "any", false, false, false, 379) >= 80)) {
                    yield "bg-success";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "resultat", [], "any", false, false, false, 379) >= 50)) {
                    yield "bg-warning text-dark";
                } else {
                    yield "bg-danger";
                }
                yield "\">
                                        ";
                // line 380
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "resultat", [], "any", false, false, false, 380)), "html", null, true);
                yield "%
                                    </span>
                                ";
            } else {
                // line 383
                yield "                                    <span class=\"badge bg-secondary\">N/A</span>
                                ";
            }
            // line 385
            yield "                            </td>
                            <td>
                                ";
            // line 387
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["test"], "duree", [], "any", false, false, false, 387)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 388
                yield "                                    <i class=\"fas fa-stopwatch text-muted me-2\"></i>
                                    ";
                // line 389
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "duree", [], "any", false, false, false, 389), "H:i:s"), "html", null, true);
                yield "
                                ";
            } else {
                // line 391
                yield "                                    <span class=\"text-muted\">—</span>
                                ";
            }
            // line 393
            yield "                            </td>
                            <td>
                                <span class=\"badge badge-type bg-primary-subtle text-primary\">
                                    ";
            // line 396
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 396)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 396), "html", null, true)) : ("Non défini"));
            yield "
                                </span>
                            </td>
                            <td>
                                ";
            // line 400
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["test"], "idLangue", [], "any", false, false, false, 400)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 401
                yield "                                    <span class=\"badge bg-info-subtle text-info\">
                                        <i class=\"fas fa-language me-1\"></i> ";
                // line 402
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "idLangue", [], "any", false, false, false, 402), "nom", [], "any", false, false, false, 402), "html", null, true);
                yield "
                                    </span>
                                ";
            } else {
                // line 405
                yield "                                    <span class=\"text-muted\">—</span>
                                ";
            }
            // line 407
            yield "                            </td>
                            <td class=\"text-center\">
                                <span class=\"badge bg-secondary\">
                                    ";
            // line 410
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["test"], "questions", [], "any", false, false, false, 410)), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"";
            // line 415
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 415)]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-info btn-action\" 
                                       title=\"Voir les détails\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 420)]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-warning btn-action\" 
                                       title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"";
            // line 425
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 425)]), "html", null, true);
            yield "\" 
                                          onsubmit=\"return confirm('Supprimer ce test ?\\n\\nType: ";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 426), "html", null, true);
            yield "\\nCette action est irréversible.');\" 
                                          style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 428
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 428))), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-action\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 436
        if (!$context['_iterated']) {
            // line 437
            yield "                        <tr>
                            <td colspan=\"8\">
                                <div class=\"empty-state\">
                                    <i class=\"fas fa-inbox\"></i>
                                    <h4>Aucun test trouvé</h4>
                                    <p>Commencez par créer votre premier test d'évaluation</p>
                                    <a href=\"";
            // line 443
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_new");
            yield "\" class=\"btn btn-primary mt-4 px-5 py-3\">
                                        <i class=\"fas fa-plus-circle me-2\"></i> Créer un test
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['test'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 450
        yield "                </tbody>
            </table>
        </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 457
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 458
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Soumission automatique des filtres
        document.querySelectorAll('#filterType, #filterLangue').forEach(el => {
            el.addEventListener('change', () => {
                document.getElementById('filterForm').submit();
            });
        });

        // Recherche en temps réel (optionnel mais fluide)
        const searchInput = document.getElementById('searchInput');
        let timeout;
        searchInput.addEventListener('input', () => {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                const value = searchInput.value.toLowerCase().trim();
                document.querySelectorAll('.test-row').forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(value) ? '' : 'none';
                });
            }, 300);
        });
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
        return "test/index.html.twig";
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
        return array (  791 => 458,  778 => 457,  762 => 450,  749 => 443,  741 => 437,  739 => 436,  726 => 428,  721 => 426,  717 => 425,  709 => 420,  701 => 415,  693 => 410,  688 => 407,  684 => 405,  678 => 402,  675 => 401,  673 => 400,  666 => 396,  661 => 393,  657 => 391,  652 => 389,  649 => 388,  647 => 387,  643 => 385,  639 => 383,  633 => 380,  622 => 379,  620 => 378,  616 => 376,  612 => 374,  607 => 372,  604 => 371,  602 => 370,  597 => 368,  590 => 367,  585 => 366,  556 => 339,  550 => 338,  544 => 335,  537 => 334,  534 => 333,  531 => 332,  526 => 331,  524 => 330,  511 => 320,  507 => 319,  503 => 318,  499 => 317,  495 => 316,  491 => 315,  478 => 305,  470 => 300,  455 => 289,  449 => 288,  446 => 287,  443 => 286,  440 => 285,  435 => 284,  433 => 283,  418 => 271,  402 => 259,  396 => 258,  393 => 257,  390 => 256,  387 => 255,  382 => 254,  380 => 253,  366 => 242,  351 => 230,  337 => 218,  324 => 217,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Gestion des Tests - Fluently{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* En-tête principal */
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 30px;
            border-radius: 16px;
            margin-bottom: 40px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.18);
        }

        .page-header h1 {
            font-weight: 900;
            font-size: 2.6rem;
            margin: 0 0 8px;
            text-shadow: 0 3px 12px rgba(0,0,0,0.35);
        }

        .page-header p {
            font-size: 1.15rem;
            opacity: 0.92;
            margin: 0;
        }

        /* Cartes statistiques */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
            margin-bottom: 40px;
        }

        .stats-card {
            background: white;
            border-radius: 16px;
            padding: 28px 24px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.04);
        }

        .stats-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 40px rgba(0,0,0,0.14);
        }

        .stats-icon {
            font-size: 3rem;
            opacity: 0.85;
            transition: transform 0.3s;
        }

        .stats-card:hover .stats-icon {
            transform: scale(1.15);
        }

        .stats-number {
            font-size: 2.8rem;
            font-weight: 900;
            margin: 0 0 4px;
            line-height: 1;
        }

        .stats-label {
            font-size: 1.05rem;
            color: #64748b;
            margin: 0;
        }

        /* Filtres */
        .filter-card {
            background: white;
            border-radius: 16px;
            padding: 28px;
            margin-bottom: 40px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.04);
        }

        .filter-card .form-label {
            font-weight: 700;
            color: #334155;
            margin-bottom: 10px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding-left: 48px;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            height: 52px;
            transition: all 0.3s;
        }

        .search-box input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
            outline: none;
        }

        .search-box i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1.3rem;
        }

        .filter-select {
            height: 52px;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            padding: 0 16px;
            font-size: 1rem;
        }

        .btn-filter {
            height: 52px;
            padding: 0 28px;
            font-weight: 700;
            border-radius: 12px;
        }

        /* Tableau */
        .test-table {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.04);
        }

        .test-table thead {
            background: linear-gradient(135deg, #4f46e5 0%, #6d28d9 100%);
            color: white;
        }

        .test-table th {
            padding: 18px 16px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.4px;
            border: none;
        }

        .test-table td {
            padding: 18px 16px;
            vertical-align: middle;
            border-top: 1px solid #f1f5f9;
        }

        .test-table tbody tr:hover {
            background: #f8fafc;
        }

        .badge-type {
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        .badge-result {
            padding: 10px 18px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 800;
        }

        .btn-action {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            margin: 0 4px;
            font-size: 1.1rem;
            transition: all 0.25s;
        }

        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.18);
        }

        /* État vide */
        .empty-state {
            text-align: center;
            padding: 100px 30px;
            color: #64748b;
        }

        .empty-state i {
            font-size: 6rem;
            color: #e2e8f0;
            margin-bottom: 24px;
        }

        .empty-state h4 {
            font-weight: 700;
            color: #334155;
            margin-bottom: 12px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid mt-4\">

        <!-- En-tête principal -->
        <div class=\"page-header\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                <div>
                    <h1>
                        <i class=\"fas fa-clipboard-list me-3\"></i>
                        Gestion des Tests
                    </h1>
                    <p>Créer, modifier et superviser tous vos tests d'évaluation</p>
                </div>
                <a href=\"{{ path('app_test_new') }}\" class=\"btn btn-light btn-lg px-4 py-3\">
                    <i class=\"fas fa-plus-circle me-2\"></i> Créer un nouveau test
                </a>
            </div>
        </div>

        <!-- Cartes statistiques -->
        <div class=\"stats-grid\">
            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    
                        
                        <div class=\"stats-label\"><i class=\"fas fa-clipboard-list stats-icon text-primary\"></i>Tests au total<div class=\"stats-number text-primary\">{{ tests|length }}</div></div>
                        
                    
                    
                </div>
            </div>

            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div><div class=\"stats-label\"><i class=\"fas fa-check-circle stats-icon text-success\"></i>Tests passés</div>
                        <div class=\"stats-number text-success\">
                            {% set passed = 0 %}
                            {% for test in tests %}
                                {% if test.resultat is defined and test.resultat is not null %}
                                    {% set passed = passed + 1 %}
                                {% endif %}
                            {% endfor %}
                            {{ passed }}
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div><div class=\"stats-label\"><i class=\"fas fa-clock stats-icon text-warning\"></i>En attente</div>
                        <div class=\"stats-number text-warning\">
                            {{ tests|length - passed }}
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div><div class=\"stats-label\"><i class=\"fas fa-question-circle stats-icon text-info\"></i>Questions</div>
                        <div class=\"stats-number text-info\">
                            {% set totalQ = 0 %}
                            {% for test in tests %}
                                {% if test.questions is defined %}
                                    {% set totalQ = totalQ + test.questions|length %}
                                {% endif %}
                            {% endfor %}
                            {{ totalQ }}
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Filtres -->
        <div class=\"filter-card\">
            <form method=\"get\" action=\"{{ path('app_test_index') }}\" id=\"filterForm\" class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6\">
                    
                    <div class=\"search-box\">
                        <i class=\"fas fa-search\"></i>
                        <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Type, langue, ID...\" value=\"{{ app.request.get('search') }}\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-bold\">
                        <i class=\"fas fa-filter text-primary me-1\"></i> Type de test
                    </label>
                    <select class=\"form-select filter-select\" name=\"type\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"Test de niveau\" {{ app.request.get('type') == 'Test de niveau' ? 'selected' : '' }}>Test de niveau</option>
                        <option value=\"quiz_debutant\" {{ app.request.get('type') == 'quiz_debutant' ? 'selected' : '' }}>Quiz débutant</option>
                        <option value=\"test_intermediaire\" {{ app.request.get('type') == 'test_intermediaire' ? 'selected' : '' }}>Test intermédiaire</option>
                        <option value=\"examen_final\" {{ app.request.get('type') == 'examen_final' ? 'selected' : '' }}>Examen final</option>
                        <option value=\"placement\" {{ app.request.get('type') == 'placement' ? 'selected' : '' }}>Placement</option>
                        <option value=\"quiz_gamifie\" {{ app.request.get('type') == 'quiz_gamifie' ? 'selected' : '' }}>Quiz gamifié</option>
                    </select>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-bold\">
                        <i class=\"fas fa-language text-primary me-1\"></i> Langue
                    </label>
                    <select class=\"form-select filter-select\" name=\"langue\">
                        <option value=\"\">Toutes les langues</option>
                        {% set langues = [] %}
                        {% for test in tests %}
                            {% if test.idLangue and test.idLangue.nom not in langues %}
                                {% set langues = langues|merge([test.idLangue.nom]) %}
                                <option value=\"{{ test.idLangue.id }}\" {{ app.request.get('langue') == test.idLangue.id ? 'selected' : '' }}>
                                    {{ test.idLangue.nom }}
                                </option>
                            {% endif %}
                        {% endfor %}
                    </select>
                </div>

                <div class=\"col-lg-2 col-md-6 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 btn-lg\">
                        <i class=\"fas fa-filter me-2\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>

        <!-- Tableau -->
        <div class=\"test-table\">
            <table class=\"table mb-0\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Résultat</th>
                        <th>Durée</th>
                        <th>Type</th>
                        <th>Langue</th>
                        <th>Questions</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for test in tests %}
                        <tr class=\"test-row\" data-type=\"{{ test.type|lower }}\" data-langue=\"{{ test.idLangue ? test.idLangue.id : '' }}\">
                            <td class=\"fw-bold text-primary\">#{{ test.id }}</td>
                            <td>
                                {% if test.datePassage %}
                                    <i class=\"far fa-calendar-alt text-muted me-2\"></i>
                                    {{ test.datePassage|date('d/m/Y') }}
                                {% else %}
                                    <span class=\"text-muted\">—</span>
                                {% endif %}
                            </td>
                            <td>
                                {% if test.resultat is defined and test.resultat is not null %}
                                    <span class=\"badge badge-result {% if test.resultat >= 80 %}bg-success{% elseif test.resultat >= 50 %}bg-warning text-dark{% else %}bg-danger{% endif %}\">
                                        {{ test.resultat|round }}%
                                    </span>
                                {% else %}
                                    <span class=\"badge bg-secondary\">N/A</span>
                                {% endif %}
                            </td>
                            <td>
                                {% if test.duree %}
                                    <i class=\"fas fa-stopwatch text-muted me-2\"></i>
                                    {{ test.duree|date('H:i:s') }}
                                {% else %}
                                    <span class=\"text-muted\">—</span>
                                {% endif %}
                            </td>
                            <td>
                                <span class=\"badge badge-type bg-primary-subtle text-primary\">
                                    {{ test.type ?: 'Non défini' }}
                                </span>
                            </td>
                            <td>
                                {% if test.idLangue %}
                                    <span class=\"badge bg-info-subtle text-info\">
                                        <i class=\"fas fa-language me-1\"></i> {{ test.idLangue.nom }}
                                    </span>
                                {% else %}
                                    <span class=\"text-muted\">—</span>
                                {% endif %}
                            </td>
                            <td class=\"text-center\">
                                <span class=\"badge bg-secondary\">
                                    {{ test.questions|length }}
                                </span>
                            </td>
                            <td>
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"{{ path('app_test_show', {'id': test.id}) }}\" 
                                       class=\"btn btn-info btn-action\" 
                                       title=\"Voir les détails\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('app_test_edit', {'id': test.id}) }}\" 
                                       class=\"btn btn-warning btn-action\" 
                                       title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_test_delete', {'id': test.id}) }}\" 
                                          onsubmit=\"return confirm('Supprimer ce test ?\\n\\nType: {{ test.type }}\\nCette action est irréversible.');\" 
                                          style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ test.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-action\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"8\">
                                <div class=\"empty-state\">
                                    <i class=\"fas fa-inbox\"></i>
                                    <h4>Aucun test trouvé</h4>
                                    <p>Commencez par créer votre premier test d'évaluation</p>
                                    <a href=\"{{ path('app_test_new') }}\" class=\"btn btn-primary mt-4 px-5 py-3\">
                                        <i class=\"fas fa-plus-circle me-2\"></i> Créer un test
                                    </a>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        // Soumission automatique des filtres
        document.querySelectorAll('#filterType, #filterLangue').forEach(el => {
            el.addEventListener('change', () => {
                document.getElementById('filterForm').submit();
            });
        });

        // Recherche en temps réel (optionnel mais fluide)
        const searchInput = document.getElementById('searchInput');
        let timeout;
        searchInput.addEventListener('input', () => {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                const value = searchInput.value.toLowerCase().trim();
                document.querySelectorAll('.test-row').forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(value) ? '' : 'none';
                });
            }, 300);
        });
    </script>
{% endblock %}", "test/index.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\test\\index.html.twig");
    }
}
