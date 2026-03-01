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

/* test/passages.html.twig */
class __TwigTemplate_36b030c123cf70d466ae84aff9d118e3 extends Template
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
        return "dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/passages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/passages.html.twig"));

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

        yield "Passages des Tests - Admin";
        
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

        // line 6
        yield "<div class=\"content-wrapper\">
    <div class=\"page-header\">
        <h3 class=\"page-title\">
            <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                <i class=\"mdi mdi-chart-bar\"></i>
            </span> Passages des Tests
        </h3>
        <nav aria-label=\"breadcrumb\">
            <ul class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Dashboard</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Passages des Tests</li>
            </ul>
        </nav>
    </div>

    <!-- Statistiques rapides (garde comme avant) -->
    <div class=\"row\">
        <div class=\"col-md-3 grid-margin stretch-card\">
            <div class=\"card bg-gradient-primary text-white\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Total Passages</h4>
                    <h2 class=\"mb-0\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPassages"]) || array_key_exists("totalPassages", $context) ? $context["totalPassages"] : (function () { throw new RuntimeError('Variable "totalPassages" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 grid-margin stretch-card\">
            <div class=\"card bg-gradient-success text-white\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Tests Terminés</h4>
                    <h2 class=\"mb-0\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["termineCount"]) || array_key_exists("termineCount", $context) ? $context["termineCount"] : (function () { throw new RuntimeError('Variable "termineCount" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 grid-margin stretch-card\">
            <div class=\"card bg-gradient-info text-white\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">En Cours</h4>
                    <h2 class=\"mb-0\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enCoursCount"]) || array_key_exists("enCoursCount", $context) ? $context["enCoursCount"] : (function () { throw new RuntimeError('Variable "enCoursCount" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 grid-margin stretch-card\">
            <div class=\"card bg-gradient-warning text-white\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Score Moyen</h4>
                    <h2 class=\"mb-0\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreMoyen"]) || array_key_exists("scoreMoyen", $context) ? $context["scoreMoyen"] : (function () { throw new RuntimeError('Variable "scoreMoyen" does not exist.', 51, $this->source); })()), "html", null, true);
        yield "%</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres (garde comme avant) -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <form method=\"get\" class=\"row g-3\">
                        <div class=\"col-md-4\">
                            <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher (email, test, langue)\" value=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "\">
                        </div>
                        <div class=\"col-md-3\">
                            <select name=\"statut\" class=\"form-select\">
                                <option value=\"\">Tous statuts</option>
                                <option value=\"non_commence\" ";
        // line 69
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 69, $this->source); })()) == "non_commence")) ? ("selected") : (""));
        yield ">Non commencé</option>
                                <option value=\"en_cours\" ";
        // line 70
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 70, $this->source); })()) == "en_cours")) ? ("selected") : (""));
        yield ">En cours</option>
                                <option value=\"en_pause\" ";
        // line 71
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 71, $this->source); })()) == "en_pause")) ? ("selected") : (""));
        yield ">En pause</option>
                                <option value=\"soumis\" ";
        // line 72
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 72, $this->source); })()) == "soumis")) ? ("selected") : (""));
        yield ">Soumis</option>
                                <option value=\"termine\" ";
        // line 73
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 73, $this->source); })()) == "termine")) ? ("selected") : (""));
        yield ">Terminé</option>
                                <option value=\"expire\" ";
        // line 74
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 74, $this->source); })()) == "expire")) ? ("selected") : (""));
        yield ">Expiré</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <button type=\"submit\" class=\"btn btn-primary w-100\">
                                <i class=\"fas fa-search\"></i> Filtrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ✅ TABLEAU ENRICHI AVEC WORKFLOW -->
    <div class=\"row\">
        <div class=\"col-12 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">
                        Historique des passages 
                        <span class=\"badge bg-info\">Workflow activé</span>
                    </h4>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Utilisateur</th>
                                    <th>Test</th>
                                    <th>Langue</th>
                                    <th>Score</th>
                                    <th>Résultat</th>
                                    <th>Durée</th>
                                    <th>État actuel</th>
                                    <th>Transitions possibles</th>
                                    <th>Date</th>
                                    <th>Actions Workflow</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 115, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
            // line 116
            yield "                                    <tr>
                                        <td>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                                        <td>
                                            <strong>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "user", [], "any", false, false, false, 119), "nom", [], "any", false, false, false, 119), "html", null, true);
            yield "</strong><br>
                                            <small class=\"text-muted\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "user", [], "any", false, false, false, 120), "email", [], "any", false, false, false, 120), "html", null, true);
            yield "</small>
                                        </td>
                                        <td>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "test", [], "any", false, false, false, 122), "titre", [], "any", false, false, false, 122), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge bg-primary\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "test", [], "any", false, false, false, 124), "langue", [], "any", false, false, false, 124), "nom", [], "any", false, false, false, 124), "html", null, true);
            yield "</span>
                                        </td>
                                        <td>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "score", [], "any", false, false, false, 126), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "scoreMax", [], "any", false, false, false, 126), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge ";
            // line 128
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "resultat", [], "any", false, false, false, 128) >= 70)) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "resultat", [], "any", false, false, false, 128) >= 50)) ? ("bg-warning") : ("bg-danger"))));
            yield "\">
                                                ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "resultat", [], "any", false, false, false, 129), 1), "html", null, true);
            yield "%
                                            </span>
                                        </td>
                                        <td>
                                            ";
            // line 133
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "tempsPasse", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 134
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "tempsPasse", [], "any", false, false, false, 134) / 60), 0), "html", null, true);
                yield " min
                                            ";
            } else {
                // line 136
                yield "                                                <span class=\"text-muted\">-</span>
                                            ";
            }
            // line 138
            yield "                                        </td>
                                        
                                        ";
            // line 141
            yield "                                        <td>
                                            ";
            // line 142
            $context["statutColors"] = ["non_commence" => "secondary", "en_cours" => "info", "en_pause" => "warning", "soumis" => "primary", "en_correction" => "info", "termine" => "success", "expire" => "danger"];
            // line 151
            yield "                                            <span class=\"badge bg-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statutColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 151), [], "array", true, true, false, 151) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 151, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 151), [], "array", false, false, false, 151)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 151, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 151), [], "array", false, false, false, 151), "html", null, true)) : ("secondary"));
            yield "\">
                                                ";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 152)), "html", null, true);
            yield "
                                            </span>
                                        </td>
                                        
                                        ";
            // line 157
            yield "                                        <td>
                                            ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Symfony\Bridge\Twig\Extension\WorkflowExtension']->getEnabledTransitions($context["passage"], "test_passage"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["transition"]) {
                // line 159
                yield "                                                <span class=\"badge bg-light text-dark\" title=\"Peut ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transition"], "name", [], "any", false, false, false, 159), "html", null, true);
                yield "\">
                                                    ";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transition"], "name", [], "any", false, false, false, 160), "html", null, true);
                yield "
                                                </span>
                                            ";
                $context['_iterated'] = true;
            }
            // line 162
            if (!$context['_iterated']) {
                // line 163
                yield "                                                <span class=\"text-muted\">-</span>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transition'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "                                        </td>
                                        
                                        <td>";
            // line 167
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "dateFin", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "dateFin", [], "any", false, false, false, 167), "d/m/Y H:i"), "html", null, true)) : ("En cours"));
            yield "</td>
                                        
                                        ";
            // line 170
            yield "                                        <td>
                                            <div class=\"btn-group\" role=\"group\">
                                                ";
            // line 173
            yield "                                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "test", [], "any", false, false, false, 173), "id", [], "any", false, false, false, 173)]), "html", null, true);
            yield "\" 
                                                   class=\"btn btn-sm btn-info\" 
                                                   title=\"Voir le test\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                                
                                                ";
            // line 180
            yield "                                                ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\WorkflowExtension']->canTransition($context["passage"], "expirer", "test_passage")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 181
                yield "                                                    <form method=\"post\" 
                                                          action=\"";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_expire_passage", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "id", [], "any", false, false, false, 182)]), "html", null, true);
                yield "\" 
                                                          style=\"display:inline;\"
                                                          onsubmit=\"return confirm('⚠️ Expirer ce test ? Le score sera mis à 0.');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 185
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("expire" . CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "id", [], "any", false, false, false, 185))), "html", null, true);
                yield "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-danger\" title=\"Expirer\">
                                                            <i class=\"fas fa-clock\"></i>
                                                        </button>
                                                    </form>
                                                ";
            }
            // line 191
            yield "                                                
                                                ";
            // line 193
            yield "                                                ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\WorkflowExtension']->canTransition($context["passage"], "finaliser", "test_passage")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 194
                yield "                                                    <form method=\"post\" 
                                                          action=\"";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_finaliser_passage", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "id", [], "any", false, false, false, 195)]), "html", null, true);
                yield "\" 
                                                          style=\"display:inline;\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("finaliser" . CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "id", [], "any", false, false, false, 197))), "html", null, true);
                yield "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-success\" title=\"Finaliser\">
                                                            <i class=\"fas fa-check\"></i>
                                                        </button>
                                                    </form>
                                                ";
            }
            // line 203
            yield "                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 206
        if (!$context['_iterated']) {
            // line 207
            yield "                                    <tr>
                                        <td colspan=\"11\" class=\"text-center py-4 text-muted\">
                                            Aucun passage trouvé
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['passage'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 222
        yield "    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">🔄 Workflow - Légende des états</h5>
                    <div class=\"d-flex flex-wrap gap-3\">
                        <span class=\"badge bg-secondary\">NON_COMMENCE</span> → 
                        <span class=\"badge bg-info\">EN_COURS</span> ↔ 
                        <span class=\"badge bg-warning\">EN_PAUSE</span> → 
                        <span class=\"badge bg-primary\">SOUMIS</span> → 
                        <span class=\"badge bg-info\">EN_CORRECTION</span> → 
                        <span class=\"badge bg-success\">TERMINE</span>
                        <br>
                        <span class=\"badge bg-danger\">EXPIRE</span> (si temps écoulé)
                    </div>
                </div>
            </div>
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
        return "test/passages.html.twig";
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
        return array (  477 => 222,  467 => 213,  456 => 207,  454 => 206,  439 => 203,  430 => 197,  425 => 195,  422 => 194,  419 => 193,  416 => 191,  407 => 185,  401 => 182,  398 => 181,  395 => 180,  385 => 173,  381 => 170,  376 => 167,  372 => 165,  365 => 163,  363 => 162,  356 => 160,  351 => 159,  346 => 158,  343 => 157,  336 => 152,  331 => 151,  329 => 142,  326 => 141,  322 => 138,  318 => 136,  312 => 134,  310 => 133,  303 => 129,  299 => 128,  292 => 126,  287 => 124,  282 => 122,  277 => 120,  273 => 119,  268 => 117,  265 => 116,  247 => 115,  203 => 74,  199 => 73,  195 => 72,  191 => 71,  187 => 70,  183 => 69,  175 => 64,  159 => 51,  148 => 43,  137 => 35,  126 => 27,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Passages des Tests - Admin{% endblock %}

{% block body %}
<div class=\"content-wrapper\">
    <div class=\"page-header\">
        <h3 class=\"page-title\">
            <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                <i class=\"mdi mdi-chart-bar\"></i>
            </span> Passages des Tests
        </h3>
        <nav aria-label=\"breadcrumb\">
            <ul class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('dashboard') }}\">Dashboard</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Passages des Tests</li>
            </ul>
        </nav>
    </div>

    <!-- Statistiques rapides (garde comme avant) -->
    <div class=\"row\">
        <div class=\"col-md-3 grid-margin stretch-card\">
            <div class=\"card bg-gradient-primary text-white\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Total Passages</h4>
                    <h2 class=\"mb-0\">{{ totalPassages }}</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 grid-margin stretch-card\">
            <div class=\"card bg-gradient-success text-white\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Tests Terminés</h4>
                    <h2 class=\"mb-0\">{{ termineCount }}</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 grid-margin stretch-card\">
            <div class=\"card bg-gradient-info text-white\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">En Cours</h4>
                    <h2 class=\"mb-0\">{{ enCoursCount }}</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 grid-margin stretch-card\">
            <div class=\"card bg-gradient-warning text-white\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Score Moyen</h4>
                    <h2 class=\"mb-0\">{{ scoreMoyen }}%</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres (garde comme avant) -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <form method=\"get\" class=\"row g-3\">
                        <div class=\"col-md-4\">
                            <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher (email, test, langue)\" value=\"{{ search }}\">
                        </div>
                        <div class=\"col-md-3\">
                            <select name=\"statut\" class=\"form-select\">
                                <option value=\"\">Tous statuts</option>
                                <option value=\"non_commence\" {{ statut == 'non_commence' ? 'selected' }}>Non commencé</option>
                                <option value=\"en_cours\" {{ statut == 'en_cours' ? 'selected' }}>En cours</option>
                                <option value=\"en_pause\" {{ statut == 'en_pause' ? 'selected' }}>En pause</option>
                                <option value=\"soumis\" {{ statut == 'soumis' ? 'selected' }}>Soumis</option>
                                <option value=\"termine\" {{ statut == 'termine' ? 'selected' }}>Terminé</option>
                                <option value=\"expire\" {{ statut == 'expire' ? 'selected' }}>Expiré</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <button type=\"submit\" class=\"btn btn-primary w-100\">
                                <i class=\"fas fa-search\"></i> Filtrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ✅ TABLEAU ENRICHI AVEC WORKFLOW -->
    <div class=\"row\">
        <div class=\"col-12 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">
                        Historique des passages 
                        <span class=\"badge bg-info\">Workflow activé</span>
                    </h4>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Utilisateur</th>
                                    <th>Test</th>
                                    <th>Langue</th>
                                    <th>Score</th>
                                    <th>Résultat</th>
                                    <th>Durée</th>
                                    <th>État actuel</th>
                                    <th>Transitions possibles</th>
                                    <th>Date</th>
                                    <th>Actions Workflow</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for passage in passages %}
                                    <tr>
                                        <td>{{ loop.index }}</td>
                                        <td>
                                            <strong>{{ passage.user.nom }}</strong><br>
                                            <small class=\"text-muted\">{{ passage.user.email }}</small>
                                        </td>
                                        <td>{{ passage.test.titre }}</td>
                                        <td>
                                            <span class=\"badge bg-primary\">{{ passage.test.langue.nom }}</span>
                                        </td>
                                        <td>{{ passage.score }} / {{ passage.scoreMax }}</td>
                                        <td>
                                            <span class=\"badge {{ passage.resultat >= 70 ? 'bg-success' : (passage.resultat >= 50 ? 'bg-warning' : 'bg-danger') }}\">
                                                {{ passage.resultat|number_format(1) }}%
                                            </span>
                                        </td>
                                        <td>
                                            {% if passage.tempsPasse %}
                                                {{ (passage.tempsPasse / 60)|number_format(0) }} min
                                            {% else %}
                                                <span class=\"text-muted\">-</span>
                                            {% endif %}
                                        </td>
                                        
                                        {# ✅ ÉTAT AVEC WORKFLOW #}
                                        <td>
                                            {% set statutColors = {
                                                'non_commence': 'secondary',
                                                'en_cours': 'info',
                                                'en_pause': 'warning',
                                                'soumis': 'primary',
                                                'en_correction': 'info',
                                                'termine': 'success',
                                                'expire': 'danger'
                                            } %}
                                            <span class=\"badge bg-{{ statutColors[passage.statut] ?? 'secondary' }}\">
                                                {{ passage.statut|upper }}
                                            </span>
                                        </td>
                                        
                                        {# ✅ TRANSITIONS POSSIBLES #}
                                        <td>
                                            {% for transition in workflow_transitions(passage, 'test_passage') %}
                                                <span class=\"badge bg-light text-dark\" title=\"Peut {{ transition.name }}\">
                                                    {{ transition.name }}
                                                </span>
                                            {% else %}
                                                <span class=\"text-muted\">-</span>
                                            {% endfor %}
                                        </td>
                                        
                                        <td>{{ passage.dateFin ? passage.dateFin|date('d/m/Y H:i') : 'En cours' }}</td>
                                        
                                        {# ✅ ACTIONS WORKFLOW #}
                                        <td>
                                            <div class=\"btn-group\" role=\"group\">
                                                {# Bouton Voir #}
                                                <a href=\"{{ path('app_test_show', {'id': passage.test.id}) }}\" 
                                                   class=\"btn btn-sm btn-info\" 
                                                   title=\"Voir le test\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                                
                                                {# ✅ Bouton Expirer (si possible) #}
                                                {% if workflow_can(passage, 'expirer', 'test_passage') %}
                                                    <form method=\"post\" 
                                                          action=\"{{ path('admin_expire_passage', {id: passage.id}) }}\" 
                                                          style=\"display:inline;\"
                                                          onsubmit=\"return confirm('⚠️ Expirer ce test ? Le score sera mis à 0.');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('expire' ~ passage.id) }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-danger\" title=\"Expirer\">
                                                            <i class=\"fas fa-clock\"></i>
                                                        </button>
                                                    </form>
                                                {% endif %}
                                                
                                                {# ✅ Bouton Finaliser (si en correction) #}
                                                {% if workflow_can(passage, 'finaliser', 'test_passage') %}
                                                    <form method=\"post\" 
                                                          action=\"{{ path('admin_finaliser_passage', {id: passage.id}) }}\" 
                                                          style=\"display:inline;\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('finaliser' ~ passage.id) }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-success\" title=\"Finaliser\">
                                                            <i class=\"fas fa-check\"></i>
                                                        </button>
                                                    </form>
                                                {% endif %}
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"11\" class=\"text-center py-4 text-muted\">
                                            Aucun passage trouvé
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# ✅ LÉGENDE DES ÉTATS #}
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">🔄 Workflow - Légende des états</h5>
                    <div class=\"d-flex flex-wrap gap-3\">
                        <span class=\"badge bg-secondary\">NON_COMMENCE</span> → 
                        <span class=\"badge bg-info\">EN_COURS</span> ↔ 
                        <span class=\"badge bg-warning\">EN_PAUSE</span> → 
                        <span class=\"badge bg-primary\">SOUMIS</span> → 
                        <span class=\"badge bg-info\">EN_CORRECTION</span> → 
                        <span class=\"badge bg-success\">TERMINE</span>
                        <br>
                        <span class=\"badge bg-danger\">EXPIRE</span> (si temps écoulé)
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "test/passages.html.twig", "C:\\Users\\sarra\\Desktop\\PIW\\Fluently\\templates\\test\\passages.html.twig");
    }
}
