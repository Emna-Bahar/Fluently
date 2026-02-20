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
class __TwigTemplate_7944a0afe67c0f7b7525c867db1a2965 extends Template
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

    <!-- Statistiques rapides -->
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

    <!-- Filtres -->
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
                                <option value=\"en_cours\" ";
        // line 69
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 69, $this->source); })()) == "en_cours")) ? ("selected") : (""));
        yield ">En cours</option>
                                <option value=\"termine\" ";
        // line 70
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 70, $this->source); })()) == "termine")) ? ("selected") : (""));
        yield ">Terminé</option>
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

    <!-- Tableau principal -->
    <div class=\"row\">
        <div class=\"col-12 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Historique des passages</h4>
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
                                    <th>Statut</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["passages"]) || array_key_exists("passages", $context) ? $context["passages"] : (function () { throw new RuntimeError('Variable "passages" does not exist.', 107, $this->source); })()));
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
            // line 108
            yield "                                    <tr>
                                        <td>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 109), "html", null, true);
            yield "</td>
                                        <td>";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "user", [], "any", false, false, false, 110), "email", [], "any", false, false, false, 110), "html", null, true);
            yield "</td>
                                        <td>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "test", [], "any", false, false, false, 111), "titre", [], "any", false, false, false, 111), "html", null, true);
            yield "</td>
                                        <td>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "test", [], "any", false, false, false, 112), "langue", [], "any", false, false, false, 112), "nom", [], "any", false, false, false, 112), "html", null, true);
            yield "</td>
                                        <td>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "score", [], "any", false, false, false, 113), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "scoreMax", [], "any", false, false, false, 113), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge ";
            // line 115
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "resultat", [], "any", false, false, false, 115) >= 70)) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "resultat", [], "any", false, false, false, 115) >= 50)) ? ("bg-warning") : ("bg-danger"))));
            yield "\">
                                                ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "resultat", [], "any", false, false, false, 116), 1), "html", null, true);
            yield "%
                                            </span>
                                        </td>
                                        <td>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "tempsPasse", [], "any", false, false, false, 119) / 60), 0), "html", null, true);
            yield " min</td>
                                        <td>
                                            <span class=\"badge ";
            // line 121
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 121) == "termine")) ? ("bg-success") : ("bg-warning"));
            yield "\">
                                                ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 122)), "html", null, true);
            yield "
                                            </span>
                                        </td>
                                        <td>";
            // line 125
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "dateFin", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "dateFin", [], "any", false, false, false, 125), "d/m/Y H:i"), "html", null, true)) : ("En cours"));
            yield "</td>
                                        <td>
                                            <a href=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "test", [], "any", false, false, false, 127), "id", [], "any", false, false, false, 127)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
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
        // line 132
        if (!$context['_iterated']) {
            // line 133
            yield "                                    <tr>
                                        <td colspan=\"10\" class=\"text-center py-4 text-muted\">
                                            Aucun passage trouvé
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['passage'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "                            </tbody>
                        </table>
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
        return array (  332 => 139,  321 => 133,  319 => 132,  301 => 127,  296 => 125,  290 => 122,  286 => 121,  281 => 119,  275 => 116,  271 => 115,  264 => 113,  260 => 112,  256 => 111,  252 => 110,  248 => 109,  245 => 108,  227 => 107,  187 => 70,  183 => 69,  175 => 64,  159 => 51,  148 => 43,  137 => 35,  126 => 27,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

    <!-- Statistiques rapides -->
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

    <!-- Filtres -->
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
                                <option value=\"en_cours\" {{ statut == 'en_cours' ? 'selected' }}>En cours</option>
                                <option value=\"termine\" {{ statut == 'termine' ? 'selected' }}>Terminé</option>
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

    <!-- Tableau principal -->
    <div class=\"row\">
        <div class=\"col-12 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Historique des passages</h4>
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
                                    <th>Statut</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for passage in passages %}
                                    <tr>
                                        <td>{{ loop.index }}</td>
                                        <td>{{ passage.user.email }}</td>
                                        <td>{{ passage.test.titre }}</td>
                                        <td>{{ passage.test.langue.nom }}</td>
                                        <td>{{ passage.score }} / {{ passage.scoreMax }}</td>
                                        <td>
                                            <span class=\"badge {{ passage.resultat >= 70 ? 'bg-success' : (passage.resultat >= 50 ? 'bg-warning' : 'bg-danger') }}\">
                                                {{ passage.resultat|number_format(1) }}%
                                            </span>
                                        </td>
                                        <td>{{ (passage.tempsPasse / 60)|number_format(0) }} min</td>
                                        <td>
                                            <span class=\"badge {{ passage.statut == 'termine' ? 'bg-success' : 'bg-warning' }}\">
                                                {{ passage.statut|capitalize }}
                                            </span>
                                        </td>
                                        <td>{{ passage.dateFin ? passage.dateFin|date('d/m/Y H:i') : 'En cours' }}</td>
                                        <td>
                                            <a href=\"{{ path('app_test_show', {'id': passage.test.id}) }}\" class=\"btn btn-sm btn-info\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"10\" class=\"text-center py-4 text-muted\">
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
</div>
{% endblock %}", "test/passages.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\test\\passages.html.twig");
    }
}
