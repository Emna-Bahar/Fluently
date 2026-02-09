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
class __TwigTemplate_913d7617195ad47f2c00b1b995736457 extends Template
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
        /* Ton style reste IDENTIQUE – je ne le répète pas ici pour gagner de la place */
        /* ... colle tout ton <style> précédent ici ... */
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
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
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_new");
        yield "\" class=\"btn btn-light btn-lg px-4 py-3\">
                    <i class=\"fas fa-plus-circle me-2\"></i> Créer un nouveau test
                </a>
            </div>
        </div>

        <!-- Cartes statistiques – version corrigée -->
        <div class=\"stats-grid\">
            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <div class=\"stats-label\">
                            <i class=\"fas fa-clipboard-list stats-icon text-primary\"></i>
                            Tests au total
                        </div>
                        <div class=\"stats-number text-primary\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 41, $this->source); })())), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </div>

            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <div class=\"stats-label\">
                            <i class=\"fas fa-check-circle stats-icon text-success\"></i>
                            Tentatives terminées
                        </div>
                        <div class=\"stats-number text-success\">
                            ";
        // line 54
        $context["totalPassages"] = 0;
        // line 55
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 56
            yield "                                ";
            $context["totalPassages"] = ((isset($context["totalPassages"]) || array_key_exists("totalPassages", $context) ? $context["totalPassages"] : (function () { throw new RuntimeError('Variable "totalPassages" does not exist.', 56, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["test"], "passages", [], "any", false, false, false, 56)));
            // line 57
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPassages"]) || array_key_exists("totalPassages", $context) ? $context["totalPassages"] : (function () { throw new RuntimeError('Variable "totalPassages" does not exist.', 58, $this->source); })()), "html", null, true);
        yield "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <div class=\"stats-label\">
                            <i class=\"fas fa-clock stats-icon text-warning\"></i>
                            En attente
                        </div>
                        <div class=\"stats-number text-warning\">
                            ";
        // line 73
        yield "                            0
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <div class=\"stats-label\">
                            <i class=\"fas fa-question-circle stats-icon text-info\"></i>
                            Questions totales
                        </div>
                        <div class=\"stats-number text-info\">
                            ";
        // line 87
        $context["totalQ"] = 0;
        // line 88
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 89
            yield "                                ";
            $context["totalQ"] = ((isset($context["totalQ"]) || array_key_exists("totalQ", $context) ? $context["totalQ"] : (function () { throw new RuntimeError('Variable "totalQ" does not exist.', 89, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["test"], "questions", [], "any", false, false, false, 89)));
            // line 90
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQ"]) || array_key_exists("totalQ", $context) ? $context["totalQ"] : (function () { throw new RuntimeError('Variable "totalQ" does not exist.', 91, $this->source); })()), "html", null, true);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtres – corrigé -->
        <div class=\"filter-card\">
            <form method=\"get\" action=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_index");
        yield "\" id=\"filterForm\" class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"search-box\">
                        <i class=\"fas fa-search\"></i>
                        <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Titre, type, langue...\" value=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "get", ["search"], "method", false, false, false, 104), "html", null, true);
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
        // line 114
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "request", [], "any", false, false, false, 114), "get", ["type"], "method", false, false, false, 114) == "Test de niveau")) ? ("selected") : (""));
        yield ">Test de niveau</option>
                        <option value=\"quiz_debutant\" ";
        // line 115
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "request", [], "any", false, false, false, 115), "get", ["type"], "method", false, false, false, 115) == "quiz_debutant")) ? ("selected") : (""));
        yield ">Quiz débutant</option>
                        <option value=\"test_intermediaire\" ";
        // line 116
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "get", ["type"], "method", false, false, false, 116) == "test_intermediaire")) ? ("selected") : (""));
        yield ">Test intermédiaire</option>
                        <option value=\"examen_final\" ";
        // line 117
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "request", [], "any", false, false, false, 117), "get", ["type"], "method", false, false, false, 117) == "examen_final")) ? ("selected") : (""));
        yield ">Examen final</option>
                        <option value=\"quiz_gamifie\" ";
        // line 118
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "request", [], "any", false, false, false, 118), "get", ["type"], "method", false, false, false, 118) == "quiz_gamifie")) ? ("selected") : (""));
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
        // line 128
        $context["languesAffichees"] = [];
        // line 129
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 130
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "langue", [], "any", false, false, false, 130) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "langue", [], "any", false, false, false, 130), "nom", [], "any", false, false, false, 130), (isset($context["languesAffichees"]) || array_key_exists("languesAffichees", $context) ? $context["languesAffichees"] : (function () { throw new RuntimeError('Variable "languesAffichees" does not exist.', 130, $this->source); })())))) {
                // line 131
                yield "                                ";
                $context["languesAffichees"] = Twig\Extension\CoreExtension::merge((isset($context["languesAffichees"]) || array_key_exists("languesAffichees", $context) ? $context["languesAffichees"] : (function () { throw new RuntimeError('Variable "languesAffichees" does not exist.', 131, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "langue", [], "any", false, false, false, 131), "nom", [], "any", false, false, false, 131)]);
                // line 132
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "langue", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132), "html", null, true);
                yield "\" ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "get", ["langue"], "method", false, false, false, 132) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "langue", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132))) ? ("selected") : (""));
                yield ">
                                    ";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "langue", [], "any", false, false, false, 133), "nom", [], "any", false, false, false, 133), "html", null, true);
                yield "
                                </option>
                            ";
            }
            // line 136
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "                    </select>
                </div>

                <div class=\"col-lg-2 col-md-6 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 btn-lg\">
                        <i class=\"fas fa-filter me-2\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>

        <!-- Tableau corrigé -->
        <div class=\"test-table\">
            <table class=\"table mb-0\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Type</th>
                        <th>Langue</th>
                        <th>Durée</th>
                        <th>Questions</th>
                        <th>Score max</th>
                        <th>Tentatives</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 165, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 166
            yield "                        <tr class=\"test-row\" data-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 166)), "html", null, true);
            yield "\" data-langue=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["test"], "langue", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "langue", [], "any", false, false, false, 166), "id", [], "any", false, false, false, 166), "html", null, true)) : (""));
            yield "\">
                            <td class=\"fw-bold text-primary\">#";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 167), "html", null, true);
            yield "</td>

                            <td>";
            // line 169
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "titre", [], "any", false, false, false, 169)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "titre", [], "any", false, false, false, 169), "html", null, true)) : ("Sans titre"));
            yield "</td>

                            <td>
                                <span class=\"badge badge-type bg-primary-subtle text-primary\">
                                    ";
            // line 173
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 173)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 173), "html", null, true)) : ("Non défini"));
            yield "
                                </span>
                            </td>

                            <td>
                                ";
            // line 178
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["test"], "langue", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 179
                yield "                                    <span class=\"badge bg-info-subtle text-info\">
                                        <i class=\"fas fa-language me-1\"></i> ";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "langue", [], "any", false, false, false, 180), "nom", [], "any", false, false, false, 180), "html", null, true);
                yield "
                                    </span>
                                ";
            } else {
                // line 183
                yield "                                    <span class=\"text-muted\">—</span>
                                ";
            }
            // line 185
            yield "                            </td>

                            <td>
                                ";
            // line 188
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["test"], "dureeEstimee", [], "any", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 189
                yield "                                    <i class=\"fas fa-stopwatch text-muted me-2\"></i>
                                    ";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "dureeEstimee", [], "any", false, false, false, 190), "html", null, true);
                yield " min
                                ";
            } else {
                // line 192
                yield "                                    <span class=\"text-muted\">—</span>
                                ";
            }
            // line 194
            yield "                            </td>

                            <td class=\"text-center\">
                                <span class=\"badge bg-secondary\">
                                    ";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["test"], "questions", [], "any", false, false, false, 198)), "html", null, true);
            yield "
                                </span>
                            </td>

                            <td class=\"text-center\">
                                <span class=\"badge bg-dark\">
                                    ";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "scoreMax", [], "any", false, false, false, 204), "html", null, true);
            yield " pts
                                </span>
                            </td>

                            <td class=\"text-center\">
                                <span class=\"badge bg-warning text-dark\">
                                    ";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["test"], "passages", [], "any", false, false, false, 210)), "html", null, true);
            yield "
                                </span>
                            </td>

                            <td>
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 216)]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-info btn-action\" 
                                       title=\"Voir les détails\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 221)]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-warning btn-action\" 
                                       title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 226)]), "html", null, true);
            yield "\" 
                                          onsubmit=\"return confirm('Supprimer ce test ?\\n\\nTitre: ";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "titre", [], "any", false, false, false, 227), "html", null, true);
            yield "\\nType: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 227), "html", null, true);
            yield "\\nCette action est irréversible.');\" 
                                          style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 229))), "html", null, true);
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
        // line 237
        if (!$context['_iterated']) {
            // line 238
            yield "                        <tr>
                            <td colspan=\"9\">
                                <div class=\"empty-state text-center py-5\">
                                    <i class=\"fas fa-inbox fa-3x text-muted mb-3\"></i>
                                    <h4>Aucun test trouvé</h4>
                                    <p>Commencez par créer votre premier test d'évaluation</p>
                                    <a href=\"";
            // line 244
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
        // line 251
        yield "                </tbody>
            </table>
        </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 258
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

        // line 259
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Soumission automatique des filtres (inchangé)
        document.querySelectorAll('#filterType, #filterLangue').forEach(el => {
            el.addEventListener('change', () => {
                document.getElementById('filterForm').submit();
            });
        });

        // Recherche en temps réel (inchangé)
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
        return array (  562 => 259,  549 => 258,  533 => 251,  520 => 244,  512 => 238,  510 => 237,  497 => 229,  490 => 227,  486 => 226,  478 => 221,  470 => 216,  461 => 210,  452 => 204,  443 => 198,  437 => 194,  433 => 192,  428 => 190,  425 => 189,  423 => 188,  418 => 185,  414 => 183,  408 => 180,  405 => 179,  403 => 178,  395 => 173,  388 => 169,  383 => 167,  376 => 166,  371 => 165,  341 => 137,  335 => 136,  329 => 133,  322 => 132,  319 => 131,  316 => 130,  311 => 129,  309 => 128,  296 => 118,  292 => 117,  288 => 116,  284 => 115,  280 => 114,  267 => 104,  260 => 100,  247 => 91,  241 => 90,  238 => 89,  233 => 88,  231 => 87,  215 => 73,  197 => 58,  191 => 57,  188 => 56,  183 => 55,  181 => 54,  165 => 41,  147 => 26,  133 => 14,  120 => 13,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Gestion des Tests - Fluently{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Ton style reste IDENTIQUE – je ne le répète pas ici pour gagner de la place */
        /* ... colle tout ton <style> précédent ici ... */
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

        <!-- Cartes statistiques – version corrigée -->
        <div class=\"stats-grid\">
            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <div class=\"stats-label\">
                            <i class=\"fas fa-clipboard-list stats-icon text-primary\"></i>
                            Tests au total
                        </div>
                        <div class=\"stats-number text-primary\">{{ tests|length }}</div>
                    </div>
                </div>
            </div>

            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <div class=\"stats-label\">
                            <i class=\"fas fa-check-circle stats-icon text-success\"></i>
                            Tentatives terminées
                        </div>
                        <div class=\"stats-number text-success\">
                            {% set totalPassages = 0 %}
                            {% for test in tests %}
                                {% set totalPassages = totalPassages + test.passages|length %}
                            {% endfor %}
                            {{ totalPassages }}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <div class=\"stats-label\">
                            <i class=\"fas fa-clock stats-icon text-warning\"></i>
                            En attente
                        </div>
                        <div class=\"stats-number text-warning\">
                            {# Pour l'instant on affiche 0 car on n'a plus de \"en attente\" direct #}
                            0
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"stats-card\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <div class=\"stats-label\">
                            <i class=\"fas fa-question-circle stats-icon text-info\"></i>
                            Questions totales
                        </div>
                        <div class=\"stats-number text-info\">
                            {% set totalQ = 0 %}
                            {% for test in tests %}
                                {% set totalQ = totalQ + test.questions|length %}
                            {% endfor %}
                            {{ totalQ }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtres – corrigé -->
        <div class=\"filter-card\">
            <form method=\"get\" action=\"{{ path('app_test_index') }}\" id=\"filterForm\" class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"search-box\">
                        <i class=\"fas fa-search\"></i>
                        <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Titre, type, langue...\" value=\"{{ app.request.get('search') }}\">
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
                        <option value=\"quiz_gamifie\" {{ app.request.get('type') == 'quiz_gamifie' ? 'selected' : '' }}>Quiz gamifié</option>
                    </select>
                </div>

                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-bold\">
                        <i class=\"fas fa-language text-primary me-1\"></i> Langue
                    </label>
                    <select class=\"form-select filter-select\" name=\"langue\">
                        <option value=\"\">Toutes les langues</option>
                        {% set languesAffichees = [] %}
                        {% for test in tests %}
                            {% if test.langue and test.langue.nom not in languesAffichees %}
                                {% set languesAffichees = languesAffichees|merge([test.langue.nom]) %}
                                <option value=\"{{ test.langue.id }}\" {{ app.request.get('langue') == test.langue.id ? 'selected' : '' }}>
                                    {{ test.langue.nom }}
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

        <!-- Tableau corrigé -->
        <div class=\"test-table\">
            <table class=\"table mb-0\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Type</th>
                        <th>Langue</th>
                        <th>Durée</th>
                        <th>Questions</th>
                        <th>Score max</th>
                        <th>Tentatives</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for test in tests %}
                        <tr class=\"test-row\" data-type=\"{{ test.type|lower }}\" data-langue=\"{{ test.langue ? test.langue.id : '' }}\">
                            <td class=\"fw-bold text-primary\">#{{ test.id }}</td>

                            <td>{{ test.titre ?: 'Sans titre' }}</td>

                            <td>
                                <span class=\"badge badge-type bg-primary-subtle text-primary\">
                                    {{ test.type ?: 'Non défini' }}
                                </span>
                            </td>

                            <td>
                                {% if test.langue %}
                                    <span class=\"badge bg-info-subtle text-info\">
                                        <i class=\"fas fa-language me-1\"></i> {{ test.langue.nom }}
                                    </span>
                                {% else %}
                                    <span class=\"text-muted\">—</span>
                                {% endif %}
                            </td>

                            <td>
                                {% if test.dureeEstimee %}
                                    <i class=\"fas fa-stopwatch text-muted me-2\"></i>
                                    {{ test.dureeEstimee }} min
                                {% else %}
                                    <span class=\"text-muted\">—</span>
                                {% endif %}
                            </td>

                            <td class=\"text-center\">
                                <span class=\"badge bg-secondary\">
                                    {{ test.questions|length }}
                                </span>
                            </td>

                            <td class=\"text-center\">
                                <span class=\"badge bg-dark\">
                                    {{ test.scoreMax }} pts
                                </span>
                            </td>

                            <td class=\"text-center\">
                                <span class=\"badge bg-warning text-dark\">
                                    {{ test.passages|length }}
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
                                          onsubmit=\"return confirm('Supprimer ce test ?\\n\\nTitre: {{ test.titre }}\\nType: {{ test.type }}\\nCette action est irréversible.');\" 
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
                            <td colspan=\"9\">
                                <div class=\"empty-state text-center py-5\">
                                    <i class=\"fas fa-inbox fa-3x text-muted mb-3\"></i>
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
        // Soumission automatique des filtres (inchangé)
        document.querySelectorAll('#filterType, #filterLangue').forEach(el => {
            el.addEventListener('change', () => {
                document.getElementById('filterForm').submit();
            });
        });

        // Recherche en temps réel (inchangé)
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
