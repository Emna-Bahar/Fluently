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
class __TwigTemplate_378d59e860e8fec0451a83c4b2c81394 extends Template
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

        <!-- Header principal -->
        <div class=\"page-header mb-5\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h3 class=\"m-0 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        Statistiques Mondiales des Langues
                    </h3>
                    <small class=\"text-muted\">
                        Aperçu des langues les plus parlées dans le monde (estimations récentes)
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

        ";
        // line 28
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["globalLanguages"]) || array_key_exists("globalLanguages", $context) ? $context["globalLanguages"] : (function () { throw new RuntimeError('Variable "globalLanguages" does not exist.', 28, $this->source); })()))) {
            // line 29
            yield "            <div class=\"alert alert-warning alert-dismissible fade show mb-5\" role=\"alert\">
                <strong>Données momentanément indisponibles</strong><br>
                Les statistiques mondiales ne peuvent pas être chargées pour le moment. Veuillez réessayer plus tard.
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        // line 35
        yield "
        <!-- === SECTION 1 : Tableau de classement === -->
        <div class=\"card border-0 shadow-lg rounded-4 mb-5 overflow-hidden\">
            <div class=\"card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-4\">
                <div>
                    <h5 class=\"m-0 fw-bold\">
                        <i class=\"feather-list me-2\"></i>
                        Classement des 20 langues les plus parlées
                    </h5>
                    <small class=\"opacity-75\">
                        Nombre de locuteurs totaux (langue maternelle + seconde langue)
                    </small>
                </div>
                <small class=\"opacity-75\">Données approximatives 2024–2025</small>
            </div>

            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-striped align-middle mb-0\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th class=\"text-center\" style=\"width: 80px;\">Rang</th>
                                <th>Family_Langue</th>
                                <th class=\"text-end\">Locuteurs totaux</th>
                                
                                <th class=\"text-center\">Part mondiale approx.</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["globalLanguages"]) || array_key_exists("globalLanguages", $context) ? $context["globalLanguages"] : (function () { throw new RuntimeError('Variable "globalLanguages" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 65
            yield "                            <tr>
                                <td class=\"text-center fw-bold text-primary\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "rank", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                                <td class=\"fw-medium\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                                <td class=\"text-end fw-bold\">
                                    ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "total_speakers", [], "any", false, false, false, 69) / 1000000), 1, ",", " "), "html", null, true);
            yield " M
                                </td>
                                
                                <td class=\"text-center\">
                                    ";
            // line 73
            $context["percent"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "total_speakers", [], "any", false, false, false, 73) / 8000000000) * 100);
            // line 74
            yield "                                    <span class=\"badge bg-info-subtle text-info px-3 py-2 fs-6\">
                                        ~";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 75, $this->source); })()), 1), "html", null, true);
            yield " %
                                    </span>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 79
        if (!$context['_iterated']) {
            // line 80
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-5 text-muted\">
                                    <i class=\"feather-alert-circle fs-1 d-block mb-3 opacity-50\"></i>
                                    Aucune donnée disponible pour le moment
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lang'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"card-footer bg-light text-center text-muted small py-3\">
                Source : estimations récentes (Ethnologue / Wikipédia) — Population mondiale ≈ 8 milliards
            </div>
        </div>

        <!-- === SECTION 2 : Graphique === -->
        ";
        // line 98
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["globalLanguages"]) || array_key_exists("globalLanguages", $context) ? $context["globalLanguages"] : (function () { throw new RuntimeError('Variable "globalLanguages" does not exist.', 98, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "            <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                <div class=\"card-header bg-gradient-info text-white py-4\">
                    <h5 class=\"m-0 fw-bold\">
                        <i class=\"feather-bar-chart-2 me-2\"></i>
                        Comparaison visuelle – Top 10 langues
                    </h5>
                    <small class=\"opacity-75\">
                        Visualisation du nombre de locuteurs totaux (en millions)
                    </small>
                </div>

                <div class=\"card-body p-4\">
                    <div style=\"height: 480px;\">
                        <canvas id=\"languagesChart\"></canvas>
                    </div>
                </div>

                <div class=\"card-footer bg-light text-center text-muted small py-3\">
                    Barre horizontale = nombre de locuteurs totaux (plus la barre est longue, plus la langue est parlée)
                </div>
            </div>
        ";
        }
        // line 121
        yield "
    </div>

    <!-- === Chart.js === -->
    ";
        // line 125
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["globalLanguages"]) || array_key_exists("globalLanguages", $context) ? $context["globalLanguages"] : (function () { throw new RuntimeError('Variable "globalLanguages" does not exist.', 125, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const ctx = document.getElementById('languagesChart').getContext('2d');
                const top10 = ";
            // line 130
            yield json_encode(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["globalLanguages"]) || array_key_exists("globalLanguages", $context) ? $context["globalLanguages"] : (function () { throw new RuntimeError('Variable "globalLanguages" does not exist.', 130, $this->source); })()), 0, 10));
            yield ";

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: top10.map(lang => lang.rank),
                        datasets: [{
                            label: 'Locuteurs totaux (millions)',
                            data: top10.map(lang => lang.total_speakers / 1000000),
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.8)',
                                'rgba(255, 99, 132, 0.8)',
                                'rgba(75, 192, 192, 0.8)',
                                'rgba(255, 159, 64, 0.8)',
                                'rgba(153, 102, 255, 0.8)',
                                'rgba(255, 205, 86, 0.8)',
                                'rgba(201, 203, 207, 0.8)',
                                'rgba(83, 109, 254, 0.8)',
                                'rgba(255, 99, 71, 0.8)',
                                'rgba(46, 204, 113, 0.8)'
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 99, 132, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 205, 86, 1)',
                                'rgba(201, 203, 207, 1)',
                                'rgba(83, 109, 254, 1)',
                                'rgba(255, 99, 71, 1)',
                                'rgba(46, 204, 113, 1)'
                            ],
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
                                title: { display: true, text: 'Millions de locuteurs', font: { size: 14 } },
                                ticks: { callback: value => value.toLocaleString() }
                            },
                            y: {
                                ticks: { font: { size: 13 } }
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
        // line 193
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
        return array (  339 => 193,  273 => 130,  267 => 126,  265 => 125,  259 => 121,  235 => 99,  233 => 98,  220 => 87,  208 => 80,  206 => 79,  197 => 75,  194 => 74,  192 => 73,  185 => 69,  180 => 67,  176 => 66,  173 => 65,  168 => 64,  137 => 35,  129 => 29,  127 => 28,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Statistiques des Langues - Top Mondial{% endblock %}

{% block body %}
    <div class=\"nxl-content\">

        <!-- Header principal -->
        <div class=\"page-header mb-5\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h3 class=\"m-0 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        Statistiques Mondiales des Langues
                    </h3>
                    <small class=\"text-muted\">
                        Aperçu des langues les plus parlées dans le monde (estimations récentes)
                    </small>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_admin_langue_index') }}\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour aux langues
                </a>
            </div>
        </div>

        {% if globalLanguages is empty %}
            <div class=\"alert alert-warning alert-dismissible fade show mb-5\" role=\"alert\">
                <strong>Données momentanément indisponibles</strong><br>
                Les statistiques mondiales ne peuvent pas être chargées pour le moment. Veuillez réessayer plus tard.
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endif %}

        <!-- === SECTION 1 : Tableau de classement === -->
        <div class=\"card border-0 shadow-lg rounded-4 mb-5 overflow-hidden\">
            <div class=\"card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-4\">
                <div>
                    <h5 class=\"m-0 fw-bold\">
                        <i class=\"feather-list me-2\"></i>
                        Classement des 20 langues les plus parlées
                    </h5>
                    <small class=\"opacity-75\">
                        Nombre de locuteurs totaux (langue maternelle + seconde langue)
                    </small>
                </div>
                <small class=\"opacity-75\">Données approximatives 2024–2025</small>
            </div>

            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-striped align-middle mb-0\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th class=\"text-center\" style=\"width: 80px;\">Rang</th>
                                <th>Family_Langue</th>
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
                                    {{ (lang.total_speakers / 1000000)|number_format(1, ',', ' ') }} M
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
                                <td colspan=\"5\" class=\"text-center py-5 text-muted\">
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

        <!-- === SECTION 2 : Graphique === -->
        {% if globalLanguages is not empty %}
            <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                <div class=\"card-header bg-gradient-info text-white py-4\">
                    <h5 class=\"m-0 fw-bold\">
                        <i class=\"feather-bar-chart-2 me-2\"></i>
                        Comparaison visuelle – Top 10 langues
                    </h5>
                    <small class=\"opacity-75\">
                        Visualisation du nombre de locuteurs totaux (en millions)
                    </small>
                </div>

                <div class=\"card-body p-4\">
                    <div style=\"height: 480px;\">
                        <canvas id=\"languagesChart\"></canvas>
                    </div>
                </div>

                <div class=\"card-footer bg-light text-center text-muted small py-3\">
                    Barre horizontale = nombre de locuteurs totaux (plus la barre est longue, plus la langue est parlée)
                </div>
            </div>
        {% endif %}

    </div>

    <!-- === Chart.js === -->
    {% if globalLanguages is not empty %}
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const ctx = document.getElementById('languagesChart').getContext('2d');
                const top10 = {{ globalLanguages|slice(0, 10)|json_encode|raw }};

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: top10.map(lang => lang.rank),
                        datasets: [{
                            label: 'Locuteurs totaux (millions)',
                            data: top10.map(lang => lang.total_speakers / 1000000),
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.8)',
                                'rgba(255, 99, 132, 0.8)',
                                'rgba(75, 192, 192, 0.8)',
                                'rgba(255, 159, 64, 0.8)',
                                'rgba(153, 102, 255, 0.8)',
                                'rgba(255, 205, 86, 0.8)',
                                'rgba(201, 203, 207, 0.8)',
                                'rgba(83, 109, 254, 0.8)',
                                'rgba(255, 99, 71, 0.8)',
                                'rgba(46, 204, 113, 0.8)'
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 99, 132, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 205, 86, 1)',
                                'rgba(201, 203, 207, 1)',
                                'rgba(83, 109, 254, 1)',
                                'rgba(255, 99, 71, 1)',
                                'rgba(46, 204, 113, 1)'
                            ],
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
                                title: { display: true, text: 'Millions de locuteurs', font: { size: 14 } },
                                ticks: { callback: value => value.toLocaleString() }
                            },
                            y: {
                                ticks: { font: { size: 13 } }
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

{% endblock %}", "langue/stats_admin.html.twig", "C:\\Users\\emnab\\Documents\\Fluently\\templates\\langue\\stats_admin.html.twig");
    }
}
