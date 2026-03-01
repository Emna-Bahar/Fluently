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

/* langue/stats_admin.html.twig */
class __TwigTemplate_e130778e2f84adf4ce09b2b528bc146a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/stats_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/stats_admin.html.twig"));

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

        yield "Statistiques des Langues - Top Mondial";
        
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
        yield "    <div class=\"nxl-content\">

        <!-- Header -->
        <div class=\"page-header mb-5\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h3 class=\"m-0 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        Statistiques Mondiales des Langues
                    </h3>
                    <small class=\"text-muted\">
                        Classement des langues les plus parlées dans le monde (estimations 2024–2025)
                    </small>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour aux langues
                </a>
            </div>
        </div>

        <!-- Alerte si données vides -->
        ";
        // line 29
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["globalLanguages"]) || array_key_exists("globalLanguages", $context) ? $context["globalLanguages"] : (function () { throw new RuntimeError('Variable "globalLanguages" does not exist.', 29, $this->source); })()))) {
            // line 30
            yield "            <div class=\"alert alert-warning alert-dismissible fade show mb-5\" role=\"alert\">
                <strong>Données momentanément indisponibles</strong><br>
                Les statistiques mondiales ne peuvent pas être chargées pour le moment.<br>
                Veuillez réessayer dans quelques minutes ou contactez l'administrateur.
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        // line 37
        yield "
        <!-- Tableau principal -->
        <div class=\"card border-0 shadow-lg rounded-4 mb-5 overflow-hidden\">
            <div class=\"card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-4\">
                <div>
                    <h5 class=\"m-0 fw-bold\">
                        <i class=\"feather-list me-2\"></i>
                        Top 20 des langues les plus parlées
                    </h5>
                </div>
                <small class=\"opacity-75\">Données approximatives 2024–2025</small>
            </div>

            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-striped align-middle mb-0\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th class=\"text-center\" style=\"width: 80px;\">Rang</th>
                                <th>Langue</th>
                                <th class=\"text-end\">Locuteurs totaux</th>
                                <th class=\"text-center\">Part mondiale approx.</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["globalLanguages"]) || array_key_exists("globalLanguages", $context) ? $context["globalLanguages"] : (function () { throw new RuntimeError('Variable "globalLanguages" does not exist.', 62, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 63
            yield "                            <tr>
                                <td class=\"text-center fw-bold text-primary\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "rank", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                                <td class=\"fw-medium\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                                <td class=\"text-end fw-bold\">
                                    ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "total_speakers", [], "any", false, false, false, 67) / 1000000), 0, ",", " "), "html", null, true);
            yield " M
                                </td>
                                <td class=\"text-center\">
                                    ";
            // line 70
            $context["percent"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "total_speakers", [], "any", false, false, false, 70) / 8000000000) * 100);
            // line 71
            yield "                                    <span class=\"badge bg-info-subtle text-info px-3 py-2 fs-6\">
                                        ~";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 72, $this->source); })()), 1), "html", null, true);
            yield " %
                                    </span>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 76
        if (!$context['_iterated']) {
            // line 77
            yield "                            <tr>
                                <td colspan=\"4\" class=\"text-center py-5 text-muted\">
                                    <i class=\"feather-alert-circle fs-1 d-block mb-3 opacity-50\"></i>
                                    Aucune donnée disponible pour le moment
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lang'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"card-footer bg-light text-center text-muted small py-3\">
                Source : estimations récentes (Ethnologue / Wikipédia) — Population mondiale ≈ 8 milliards
            </div>
        </div>

        <!-- Graphique (seulement si données présentes) -->
        ";
        // line 95
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["globalLanguages"]) || array_key_exists("globalLanguages", $context) ? $context["globalLanguages"] : (function () { throw new RuntimeError('Variable "globalLanguages" does not exist.', 95, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "            <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                <div class=\"card-header bg-gradient-info text-white py-4\">
                    <h5 class=\"m-0 fw-bold\">
                        <i class=\"feather-bar-chart-2 me-2\"></i>
                        Comparaison visuelle – Top 10
                    </h5>
                </div>

                <div class=\"card-body p-4\">
                    <div style=\"height: 480px;\">
                        <canvas id=\"languagesChart\"></canvas>
                    </div>
                </div>
            </div>
        ";
        }
        // line 111
        yield "
    </div>

    <!-- Chart.js -->
    ";
        // line 115
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["globalLanguages"]) || array_key_exists("globalLanguages", $context) ? $context["globalLanguages"] : (function () { throw new RuntimeError('Variable "globalLanguages" does not exist.', 115, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 116
            yield "        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const ctx = document.getElementById('languagesChart').getContext('2d');
                const data = ";
            // line 120
            yield json_encode(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["globalLanguages"]) || array_key_exists("globalLanguages", $context) ? $context["globalLanguages"] : (function () { throw new RuntimeError('Variable "globalLanguages" does not exist.', 120, $this->source); })()), 0, 10));
            yield ";

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: data.map(lang => lang.name),
                        datasets: [{
                            label: 'Locuteurs totaux (millions)',
                            data: data.map(lang => lang.total_speakers / 1000000),
                            backgroundColor: 'rgba(54, 162, 235, 0.7)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        indexAxis: 'y',
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            x: {
                                beginAtZero: true,
                                title: { display: true, text: 'Millions de locuteurs' }
                            }
                        },
                        plugins: {
                            legend: { display: false },
                            tooltip: {
                                callbacks: {
                                    label: ctx => ctx.raw.toLocaleString() + ' millions'
                                }
                            }
                        }
                    }
                });
            });
        </script>
    ";
        }
        // line 157
        yield "
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
        return "langue/stats_admin.html.twig";
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
        return array (  303 => 157,  263 => 120,  257 => 116,  255 => 115,  249 => 111,  232 => 96,  230 => 95,  217 => 84,  205 => 77,  203 => 76,  194 => 72,  191 => 71,  189 => 70,  183 => 67,  178 => 65,  174 => 64,  171 => 63,  166 => 62,  139 => 37,  130 => 30,  128 => 29,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Statistiques des Langues - Top Mondial{% endblock %}

{% block body %}
    <div class=\"nxl-content\">

        <!-- Header -->
        <div class=\"page-header mb-5\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h3 class=\"m-0 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        Statistiques Mondiales des Langues
                    </h3>
                    <small class=\"text-muted\">
                        Classement des langues les plus parlées dans le monde (estimations 2024–2025)
                    </small>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_admin_langue_index') }}\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour aux langues
                </a>
            </div>
        </div>

        <!-- Alerte si données vides -->
        {% if globalLanguages is empty %}
            <div class=\"alert alert-warning alert-dismissible fade show mb-5\" role=\"alert\">
                <strong>Données momentanément indisponibles</strong><br>
                Les statistiques mondiales ne peuvent pas être chargées pour le moment.<br>
                Veuillez réessayer dans quelques minutes ou contactez l'administrateur.
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endif %}

        <!-- Tableau principal -->
        <div class=\"card border-0 shadow-lg rounded-4 mb-5 overflow-hidden\">
            <div class=\"card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-4\">
                <div>
                    <h5 class=\"m-0 fw-bold\">
                        <i class=\"feather-list me-2\"></i>
                        Top 20 des langues les plus parlées
                    </h5>
                </div>
                <small class=\"opacity-75\">Données approximatives 2024–2025</small>
            </div>

            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-striped align-middle mb-0\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th class=\"text-center\" style=\"width: 80px;\">Rang</th>
                                <th>Langue</th>
                                <th class=\"text-end\">Locuteurs totaux</th>
                                <th class=\"text-center\">Part mondiale approx.</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for lang in globalLanguages %}
                            <tr>
                                <td class=\"text-center fw-bold text-primary\">{{ lang.rank }}</td>
                                <td class=\"fw-medium\">{{ lang.name }}</td>
                                <td class=\"text-end fw-bold\">
                                    {{ (lang.total_speakers / 1000000)|number_format(0, ',', ' ') }} M
                                </td>
                                <td class=\"text-center\">
                                    {% set percent = (lang.total_speakers / 8000000000 * 100) %}
                                    <span class=\"badge bg-info-subtle text-info px-3 py-2 fs-6\">
                                        ~{{ percent|number_format(1) }} %
                                    </span>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\" class=\"text-center py-5 text-muted\">
                                    <i class=\"feather-alert-circle fs-1 d-block mb-3 opacity-50\"></i>
                                    Aucune donnée disponible pour le moment
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"card-footer bg-light text-center text-muted small py-3\">
                Source : estimations récentes (Ethnologue / Wikipédia) — Population mondiale ≈ 8 milliards
            </div>
        </div>

        <!-- Graphique (seulement si données présentes) -->
        {% if globalLanguages is not empty %}
            <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                <div class=\"card-header bg-gradient-info text-white py-4\">
                    <h5 class=\"m-0 fw-bold\">
                        <i class=\"feather-bar-chart-2 me-2\"></i>
                        Comparaison visuelle – Top 10
                    </h5>
                </div>

                <div class=\"card-body p-4\">
                    <div style=\"height: 480px;\">
                        <canvas id=\"languagesChart\"></canvas>
                    </div>
                </div>
            </div>
        {% endif %}

    </div>

    <!-- Chart.js -->
    {% if globalLanguages is not empty %}
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const ctx = document.getElementById('languagesChart').getContext('2d');
                const data = {{ globalLanguages|slice(0, 10)|json_encode|raw }};

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: data.map(lang => lang.name),
                        datasets: [{
                            label: 'Locuteurs totaux (millions)',
                            data: data.map(lang => lang.total_speakers / 1000000),
                            backgroundColor: 'rgba(54, 162, 235, 0.7)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        indexAxis: 'y',
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            x: {
                                beginAtZero: true,
                                title: { display: true, text: 'Millions de locuteurs' }
                            }
                        },
                        plugins: {
                            legend: { display: false },
                            tooltip: {
                                callbacks: {
                                    label: ctx => ctx.raw.toLocaleString() + ' millions'
                                }
                            }
                        }
                    }
                });
            });
        </script>
    {% endif %}

{% endblock %}", "langue/stats_admin.html.twig", "C:\\Users\\emnab\\Documents\\PI\\Fluently\\templates\\langue\\stats_admin.html.twig");
    }
}
