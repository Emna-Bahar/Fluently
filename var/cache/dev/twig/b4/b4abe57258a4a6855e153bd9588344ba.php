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

/* objectif_admin/index.html.twig */
class __TwigTemplate_59608f6dd4955036ba210b4fdc4a0bbf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_admin/index.html.twig"));

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

        yield "Liste des Objectifs";
        
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
        yield "<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Gestion des Objectifs</h5>
            </div>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"feather-plus\"></i> Créer un objectif
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card stretch stretch-full\">
                    <div class=\"card-header\">
                        <div class=\"row g-3\">
                            ";
        // line 27
        yield "                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"><i class=\"feather-search\"></i></span>
                                    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher par titre ou description...\">
                                </div>
                            </div>
                            
                            ";
        // line 35
        yield "                            <div class=\"col-md-4\">
                                <select id=\"statusFilter\" class=\"form-select\">
                                    <option value=\"\">Tous les statuts</option>
                                    <option value=\"en_cours\">En cours</option>
                                    <option value=\"complete\">Complété</option>
                                    <option value=\"abandonne\">Abandonné</option>
                                    <option value=\"en_pause\">En pause</option>
                                </select>
                            </div>

                            ";
        // line 46
        yield "                            <div class=\"col-md-2\">
                                <button type=\"button\" id=\"resetFilters\" class=\"btn btn-outline-danger w-200\">
    <i class=\"feather-refresh-cw me-1\"></i> Réinitialiser
</button>

                            </div>
                        </div>
                        <div class=\"col-md-2\">
    <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_stats");
        yield "\" class=\"btn btn-primary w-100\">
        <i class=\"feather-bar-chart-2 me-1\"></i> Statistiques
    </a>
</div>

                    </div>

                    <div class=\"card-body p-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover mb-0\" id=\"objectifsTable\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Date début</th>
                                        <th>Date fin</th>
                                        <th>Statut</th>
                                        <th class=\"text-end\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 76, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["objectif"]) {
            // line 77
            yield "                                    <tr class=\"objectif-row\" 
                                        data-titre=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "titre", [], "any", false, false, false, 78)), "html", null, true);
            yield "\" 
                                        data-description=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "description", [], "any", false, false, false, 79)), "html", null, true);
            yield "\" 
                                        data-statut=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 80), "html", null, true);
            yield "\">
                                        <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                                        <td class=\"fw-semibold\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "titre", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                                        <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "description", [], "any", false, false, false, 83), 0, 50), "html", null, true);
            yield "...</td>
                                        <td>";
            // line 84
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateDeb", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateDeb", [], "any", false, false, false, 84), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                                        <td>";
            // line 85
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateFin", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateFin", [], "any", false, false, false, 85), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                                        <td>
                                            ";
            // line 87
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 87) == "complete")) {
                // line 88
                yield "                                                <span class=\"badge bg-soft-success text-success\">
                                                    <i class=\"feather-check-circle fs-10 me-1\"></i>Complété
                                                </span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 91
$context["objectif"], "statut", [], "any", false, false, false, 91) == "en_cours")) {
                // line 92
                yield "                                                <span class=\"badge bg-soft-primary text-primary\">
                                                    <i class=\"feather-activity fs-10 me-1\"></i>En cours
                                                </span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 95
$context["objectif"], "statut", [], "any", false, false, false, 95) == "abandonne")) {
                // line 96
                yield "                                                <span class=\"badge bg-soft-danger text-danger\">
                                                    <i class=\"feather-x-circle fs-10 me-1\"></i>Abandonné
                                                </span>
                                            ";
            } else {
                // line 100
                yield "                                                <span class=\"badge bg-soft-warning text-warning\">
                                                    <i class=\"feather-pause-circle fs-10 me-1\"></i>En pause
                                                </span>
                                            ";
            }
            // line 104
            yield "                                        </td>
                                        <td class=\"text-end\">
                                            <div class=\"hstack gap-2 justify-content-end\">
                                                <a href=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            yield "\" 
                                                   class=\"avatar-text avatar-md\" 
                                                   data-bs-toggle=\"tooltip\" 
                                                   title=\"Voir les détails\">
                                                    <i class=\"feather-eye\"></i>
                                                </a>
                                                <a href=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            yield "\" 
                                                   class=\"avatar-text avatar-md\" 
                                                   data-bs-toggle=\"tooltip\" 
                                                   title=\"Modifier\">
                                                    <i class=\"feather-edit\"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 122
        if (!$context['_iterated']) {
            // line 123
            yield "                                    <tr id=\"noResults\">
                                        <td colspan=\"7\" class=\"text-center py-5\">
                                            <div class=\"text-muted\">
                                                <i class=\"feather-inbox fs-2 mb-2\"></i>
                                                <p class=\"mb-0\">Aucun objectif trouvé</p>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['objectif'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>

                    ";
        // line 138
        yield "                    <div class=\"card-footer\">
                        <div class=\"d-flex align-items-center justify-content-between\">
                            <span id=\"resultCount\" class=\"text-muted\">
                                Total : <strong>";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 141, $this->source); })())), "html", null, true);
        yield "</strong> objectif(s)
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 152
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const resetBtn = document.getElementById('resetFilters');
    const rows = document.querySelectorAll('.objectif-row');
    const noResults = document.getElementById('noResults');
    const resultCount = document.getElementById('resultCount');

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedStatus = statusFilter.value;
        let visibleCount = 0;

        rows.forEach(row => {
            const titre = row.dataset.titre;
            const description = row.dataset.description;
            const statut = row.dataset.statut;

            // Vérifier la recherche
            const matchesSearch = titre.includes(searchTerm) || description.includes(searchTerm);
            
            // Vérifier le filtre statut
            const matchesStatus = !selectedStatus || statut === selectedStatus;

            // Afficher ou masquer la ligne
            if (matchesSearch && matchesStatus) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        // Afficher \"Aucun résultat\" si nécessaire
        if (noResults) {
            noResults.style.display = visibleCount === 0 ? '' : 'none';
        }

        // Mettre à jour le compteur
        resultCount.innerHTML = `Affichage : <strong>\${visibleCount}</strong> sur ";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 192, $this->source); })())), "html", null, true);
        yield " objectif(s)`;
    }

    // Événements
    searchInput.addEventListener('keyup', filterTable);
    statusFilter.addEventListener('change', filterTable);
    
    resetBtn.addEventListener('click', function() {
        searchInput.value = '';
        statusFilter.value = '';
        filterTable();
    });

    // Initialiser les tooltips
    const tooltips = document.querySelectorAll('[data-bs-toggle=\"tooltip\"]');
    tooltips.forEach(tooltip => {
        new bootstrap.Tooltip(tooltip);
    });
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
        return "objectif_admin/index.html.twig";
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
        return array (  361 => 192,  319 => 152,  306 => 141,  301 => 138,  294 => 132,  280 => 123,  278 => 122,  264 => 113,  255 => 107,  250 => 104,  244 => 100,  238 => 96,  236 => 95,  231 => 92,  229 => 91,  224 => 88,  222 => 87,  217 => 85,  213 => 84,  209 => 83,  205 => 82,  201 => 81,  197 => 80,  193 => 79,  189 => 78,  186 => 77,  181 => 76,  156 => 54,  146 => 46,  134 => 35,  125 => 27,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Liste des Objectifs{% endblock %}

{% block body %}
<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Gestion des Objectifs</h5>
            </div>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"{{ path('app_objectif_admin_new') }}\" class=\"btn btn-primary\">
                <i class=\"feather-plus\"></i> Créer un objectif
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card stretch stretch-full\">
                    <div class=\"card-header\">
                        <div class=\"row g-3\">
                            {# Barre de recherche #}
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"><i class=\"feather-search\"></i></span>
                                    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher par titre ou description...\">
                                </div>
                            </div>
                            
                            {# Filtre par statut #}
                            <div class=\"col-md-4\">
                                <select id=\"statusFilter\" class=\"form-select\">
                                    <option value=\"\">Tous les statuts</option>
                                    <option value=\"en_cours\">En cours</option>
                                    <option value=\"complete\">Complété</option>
                                    <option value=\"abandonne\">Abandonné</option>
                                    <option value=\"en_pause\">En pause</option>
                                </select>
                            </div>

                            {# Bouton réinitialiser #}
                            <div class=\"col-md-2\">
                                <button type=\"button\" id=\"resetFilters\" class=\"btn btn-outline-danger w-200\">
    <i class=\"feather-refresh-cw me-1\"></i> Réinitialiser
</button>

                            </div>
                        </div>
                        <div class=\"col-md-2\">
    <a href=\"{{ path('app_objectif_admin_stats') }}\" class=\"btn btn-primary w-100\">
        <i class=\"feather-bar-chart-2 me-1\"></i> Statistiques
    </a>
</div>

                    </div>

                    <div class=\"card-body p-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover mb-0\" id=\"objectifsTable\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Date début</th>
                                        <th>Date fin</th>
                                        <th>Statut</th>
                                        <th class=\"text-end\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for objectif in objectifs %}
                                    <tr class=\"objectif-row\" 
                                        data-titre=\"{{ objectif.titre|lower }}\" 
                                        data-description=\"{{ objectif.description|lower }}\" 
                                        data-statut=\"{{ objectif.statut }}\">
                                        <td>{{ objectif.id }}</td>
                                        <td class=\"fw-semibold\">{{ objectif.titre }}</td>
                                        <td>{{ objectif.description|slice(0, 50) }}...</td>
                                        <td>{{ objectif.dateDeb ? objectif.dateDeb|date('d/m/Y') : '-' }}</td>
                                        <td>{{ objectif.dateFin ? objectif.dateFin|date('d/m/Y') : '-' }}</td>
                                        <td>
                                            {% if objectif.statut == 'complete' %}
                                                <span class=\"badge bg-soft-success text-success\">
                                                    <i class=\"feather-check-circle fs-10 me-1\"></i>Complété
                                                </span>
                                            {% elseif objectif.statut == 'en_cours' %}
                                                <span class=\"badge bg-soft-primary text-primary\">
                                                    <i class=\"feather-activity fs-10 me-1\"></i>En cours
                                                </span>
                                            {% elseif objectif.statut == 'abandonne' %}
                                                <span class=\"badge bg-soft-danger text-danger\">
                                                    <i class=\"feather-x-circle fs-10 me-1\"></i>Abandonné
                                                </span>
                                            {% else %}
                                                <span class=\"badge bg-soft-warning text-warning\">
                                                    <i class=\"feather-pause-circle fs-10 me-1\"></i>En pause
                                                </span>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-end\">
                                            <div class=\"hstack gap-2 justify-content-end\">
                                                <a href=\"{{ path('app_objectif_admin_show', {'id': objectif.id}) }}\" 
                                                   class=\"avatar-text avatar-md\" 
                                                   data-bs-toggle=\"tooltip\" 
                                                   title=\"Voir les détails\">
                                                    <i class=\"feather-eye\"></i>
                                                </a>
                                                <a href=\"{{ path('app_objectif_admin_edit', {'id': objectif.id}) }}\" 
                                                   class=\"avatar-text avatar-md\" 
                                                   data-bs-toggle=\"tooltip\" 
                                                   title=\"Modifier\">
                                                    <i class=\"feather-edit\"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr id=\"noResults\">
                                        <td colspan=\"7\" class=\"text-center py-5\">
                                            <div class=\"text-muted\">
                                                <i class=\"feather-inbox fs-2 mb-2\"></i>
                                                <p class=\"mb-0\">Aucun objectif trouvé</p>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {# Compteur de résultats #}
                    <div class=\"card-footer\">
                        <div class=\"d-flex align-items-center justify-content-between\">
                            <span id=\"resultCount\" class=\"text-muted\">
                                Total : <strong>{{ objectifs|length }}</strong> objectif(s)
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{# Script de recherche et filtre #}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const resetBtn = document.getElementById('resetFilters');
    const rows = document.querySelectorAll('.objectif-row');
    const noResults = document.getElementById('noResults');
    const resultCount = document.getElementById('resultCount');

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedStatus = statusFilter.value;
        let visibleCount = 0;

        rows.forEach(row => {
            const titre = row.dataset.titre;
            const description = row.dataset.description;
            const statut = row.dataset.statut;

            // Vérifier la recherche
            const matchesSearch = titre.includes(searchTerm) || description.includes(searchTerm);
            
            // Vérifier le filtre statut
            const matchesStatus = !selectedStatus || statut === selectedStatus;

            // Afficher ou masquer la ligne
            if (matchesSearch && matchesStatus) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        // Afficher \"Aucun résultat\" si nécessaire
        if (noResults) {
            noResults.style.display = visibleCount === 0 ? '' : 'none';
        }

        // Mettre à jour le compteur
        resultCount.innerHTML = `Affichage : <strong>\${visibleCount}</strong> sur {{ objectifs|length }} objectif(s)`;
    }

    // Événements
    searchInput.addEventListener('keyup', filterTable);
    statusFilter.addEventListener('change', filterTable);
    
    resetBtn.addEventListener('click', function() {
        searchInput.value = '';
        statusFilter.value = '';
        filterTable();
    });

    // Initialiser les tooltips
    const tooltips = document.querySelectorAll('[data-bs-toggle=\"tooltip\"]');
    tooltips.forEach(tooltip => {
        new bootstrap.Tooltip(tooltip);
    });
});
</script>
{% endblock %}
", "objectif_admin/index.html.twig", "C:\\Users\\MSI\\Desktop\\Fuser\\Fluently\\Fluently\\Fluently\\Fluently\\templates\\objectif_admin\\index.html.twig");
    }
}
