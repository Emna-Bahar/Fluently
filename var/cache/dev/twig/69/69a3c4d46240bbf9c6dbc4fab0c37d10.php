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

/* tache/index.html.twig */
class __TwigTemplate_934dd7cd3f3344b9f4c9e8c49aa021fb extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

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

        yield "Tâches";
        
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
        yield "
<style>
.task-page { margin-top: 120px; }
.task-card { border-radius: 20px; box-shadow: 0 18px 40px rgba(0,0,0,0.08); }
.task-header h3 { color: #4f6df5; font-weight: 600; }
.task-filters select { border-radius: 20px; padding: 6px 14px; }
.table thead { background: #343a40; }
.table tbody tr:hover { background: #f5f7fb; }
.badge-priority-high { background: #e74c3c; }
.badge-priority-medium { background: #f1c40f; color: #000; }
.badge-priority-low { background: #2ecc71; }
.badge-status-done { background: #2ecc71; }
.badge-status-progress { background: #4f6df5; }
.objectif-badge {
    background: #eef3ff; color: #4f6df5;
    padding: 5px 12px; border-radius: 16px; font-size: 13px;
}
.progress { height: 7px; border-radius: 20px; }
.progress-bar { background: linear-gradient(135deg, #4f6df5, #6a82fb); }
.btn-action { border-radius: 10px; padding: 6px 10px; }
</style>

<section class=\"ftco-section task-page\">
<div class=\"container\">

<div class=\"card task-card border-0\">
<div class=\"card-body p-4\">

<!-- HEADER -->
<div class=\"d-flex justify-content-between align-items-center mb-4 task-header\">
    <h3><i class=\"fa fa-tasks\"></i> Liste des tâches</h3>

    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new");
        yield "\" class=\"btn btn-primary rounded-pill\">
        <i class=\"fa fa-plus\"></i> Nouvelle tâche
    </a>
</div>

<!-- FILTRES -->
<div class=\"task-filters d-flex gap-3 mb-4\">
    <select id=\"filterStatut\" class=\"form-select w-auto\">
        <option value=\"\">Tous les statuts</option>
        <option value=\"terminee\">Terminée</option>
        <option value=\"en_cours\">En cours</option>
    </select>

    <select id=\"filterPriorite\" class=\"form-select w-auto\">
        <option value=\"\">Toutes priorités</option>
        <option value=\"haute\">Haute</option>
        <option value=\"moyenne\">Moyenne</option>
        <option value=\"basse\">Basse</option>
    </select>
</div>

<!-- TABLE -->
<div class=\"table-responsive\">
<table class=\"table align-middle\">
<thead class=\"text-white\">
<tr>
    <th>Titre</th>
    <th>Objectif</th>
    <th>Date limite</th>
    <th>Priorité</th>
    <th>Statut</th>
    <th>Progression</th>
    <th>Actions</th>
</tr>
</thead>

<tbody id=\"taskTable\">
";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 76
            yield "<tr data-statut=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 76), "html", null, true);
            yield "\" data-priorite=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 76), "html", null, true);
            yield "\">

<td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "titre", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>

<td>
";
            // line 81
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "idObjectif", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "<span class=\"objectif-badge\">🎯 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "idObjectif", [], "any", false, false, false, 82), "titre", [], "any", false, false, false, 82), "html", null, true);
                yield "</span>
";
            } else {
                // line 83
                yield "-";
            }
            // line 84
            yield "</td>

<td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateLimite", [], "any", false, false, false, 86), "d/m/Y"), "html", null, true);
            yield "</td>

<td>
";
            // line 89
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 89) == "haute")) {
                // line 90
                yield "<span class=\"badge badge-priority-high\">Haute</span>
";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 91
$context["tache"], "priorite", [], "any", false, false, false, 91) == "moyenne")) {
                // line 92
                yield "<span class=\"badge badge-priority-medium\">Moyenne</span>
";
            } else {
                // line 94
                yield "<span class=\"badge badge-priority-low\">Basse</span>
";
            }
            // line 96
            yield "</td>

<td>
";
            // line 99
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 99) == "terminee")) {
                // line 100
                yield "<span class=\"badge badge-status-done\">✔ Terminée</span>
";
            } else {
                // line 102
                yield "<span class=\"badge badge-status-progress\">⏳ En cours</span>
";
            }
            // line 104
            yield "</td>

<td style=\"width:140px\">
<div class=\"progress\">
<div class=\"progress-bar\" style=\"width: ";
            // line 108
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 108) == "terminee")) ? (100) : (45));
            yield "%\"></div>
</div>
</td>

<!-- ACTIONS -->
<td class=\"d-flex gap-1\">

<a href=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            yield "\"
   class=\"btn btn-info btn-sm btn-action\">
<i class=\"fa fa-eye\"></i>
</a>

<a href=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 120)]), "html", null, true);
            yield "\"
   class=\"btn btn-warning btn-sm btn-action\">
<i class=\"fa fa-edit\"></i>
</a>

<form method=\"post\"
      action=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 126)]), "html", null, true);
            yield "\"
      onsubmit=\"return confirm('Supprimer cette tâche ?');\">
<input type=\"hidden\" name=\"_token\" value=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 128))), "html", null, true);
            yield "\">
<button class=\"btn btn-danger btn-sm btn-action\">
<i class=\"fa fa-trash\"></i>
</button>
</form>

</td>

</tr>
";
            $context['_iterated'] = true;
        }
        // line 137
        if (!$context['_iterated']) {
            // line 138
            yield "<tr>
<td colspan=\"7\" class=\"text-center text-muted\">Aucune tâche trouvée</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "</tbody>
</table>
</div>

</div>
</div>

</div>
</section>

<script>
const filterStatut = document.getElementById('filterStatut');
const filterPriorite = document.getElementById('filterPriorite');
const rows = document.querySelectorAll('#taskTable tr');

function applyFilters() {
rows.forEach(row => {
const statut = row.dataset.statut;
const priorite = row.dataset.priorite;
row.style.display =
(!filterStatut.value || statut === filterStatut.value) &&
(!filterPriorite.value || priorite === filterPriorite.value)
? '' : 'none';
});
}

filterStatut.addEventListener('change', applyFilters);
filterPriorite.addEventListener('change', applyFilters);
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
        return "tache/index.html.twig";
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
        return array (  307 => 142,  298 => 138,  296 => 137,  282 => 128,  277 => 126,  268 => 120,  260 => 115,  250 => 108,  244 => 104,  240 => 102,  236 => 100,  234 => 99,  229 => 96,  225 => 94,  221 => 92,  219 => 91,  216 => 90,  214 => 89,  208 => 86,  204 => 84,  201 => 83,  195 => 82,  193 => 81,  187 => 78,  179 => 76,  174 => 75,  134 => 38,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tâches{% endblock %}

{% block body %}

<style>
.task-page { margin-top: 120px; }
.task-card { border-radius: 20px; box-shadow: 0 18px 40px rgba(0,0,0,0.08); }
.task-header h3 { color: #4f6df5; font-weight: 600; }
.task-filters select { border-radius: 20px; padding: 6px 14px; }
.table thead { background: #343a40; }
.table tbody tr:hover { background: #f5f7fb; }
.badge-priority-high { background: #e74c3c; }
.badge-priority-medium { background: #f1c40f; color: #000; }
.badge-priority-low { background: #2ecc71; }
.badge-status-done { background: #2ecc71; }
.badge-status-progress { background: #4f6df5; }
.objectif-badge {
    background: #eef3ff; color: #4f6df5;
    padding: 5px 12px; border-radius: 16px; font-size: 13px;
}
.progress { height: 7px; border-radius: 20px; }
.progress-bar { background: linear-gradient(135deg, #4f6df5, #6a82fb); }
.btn-action { border-radius: 10px; padding: 6px 10px; }
</style>

<section class=\"ftco-section task-page\">
<div class=\"container\">

<div class=\"card task-card border-0\">
<div class=\"card-body p-4\">

<!-- HEADER -->
<div class=\"d-flex justify-content-between align-items-center mb-4 task-header\">
    <h3><i class=\"fa fa-tasks\"></i> Liste des tâches</h3>

    <a href=\"{{ path('app_tache_new') }}\" class=\"btn btn-primary rounded-pill\">
        <i class=\"fa fa-plus\"></i> Nouvelle tâche
    </a>
</div>

<!-- FILTRES -->
<div class=\"task-filters d-flex gap-3 mb-4\">
    <select id=\"filterStatut\" class=\"form-select w-auto\">
        <option value=\"\">Tous les statuts</option>
        <option value=\"terminee\">Terminée</option>
        <option value=\"en_cours\">En cours</option>
    </select>

    <select id=\"filterPriorite\" class=\"form-select w-auto\">
        <option value=\"\">Toutes priorités</option>
        <option value=\"haute\">Haute</option>
        <option value=\"moyenne\">Moyenne</option>
        <option value=\"basse\">Basse</option>
    </select>
</div>

<!-- TABLE -->
<div class=\"table-responsive\">
<table class=\"table align-middle\">
<thead class=\"text-white\">
<tr>
    <th>Titre</th>
    <th>Objectif</th>
    <th>Date limite</th>
    <th>Priorité</th>
    <th>Statut</th>
    <th>Progression</th>
    <th>Actions</th>
</tr>
</thead>

<tbody id=\"taskTable\">
{% for tache in taches %}
<tr data-statut=\"{{ tache.statut }}\" data-priorite=\"{{ tache.priorite }}\">

<td>{{ tache.titre }}</td>

<td>
{% if tache.idObjectif %}
<span class=\"objectif-badge\">🎯 {{ tache.idObjectif.titre }}</span>
{% else %}-{% endif %}
</td>

<td>{{ tache.dateLimite|date('d/m/Y') }}</td>

<td>
{% if tache.priorite == 'haute' %}
<span class=\"badge badge-priority-high\">Haute</span>
{% elseif tache.priorite == 'moyenne' %}
<span class=\"badge badge-priority-medium\">Moyenne</span>
{% else %}
<span class=\"badge badge-priority-low\">Basse</span>
{% endif %}
</td>

<td>
{% if tache.statut == 'terminee' %}
<span class=\"badge badge-status-done\">✔ Terminée</span>
{% else %}
<span class=\"badge badge-status-progress\">⏳ En cours</span>
{% endif %}
</td>

<td style=\"width:140px\">
<div class=\"progress\">
<div class=\"progress-bar\" style=\"width: {{ tache.statut == 'terminee' ? 100 : 45 }}%\"></div>
</div>
</td>

<!-- ACTIONS -->
<td class=\"d-flex gap-1\">

<a href=\"{{ path('app_tache_show', {'id': tache.id}) }}\"
   class=\"btn btn-info btn-sm btn-action\">
<i class=\"fa fa-eye\"></i>
</a>

<a href=\"{{ path('app_tache_edit', {'id': tache.id}) }}\"
   class=\"btn btn-warning btn-sm btn-action\">
<i class=\"fa fa-edit\"></i>
</a>

<form method=\"post\"
      action=\"{{ path('app_tache_delete', {'id': tache.id}) }}\"
      onsubmit=\"return confirm('Supprimer cette tâche ?');\">
<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ tache.id) }}\">
<button class=\"btn btn-danger btn-sm btn-action\">
<i class=\"fa fa-trash\"></i>
</button>
</form>

</td>

</tr>
{% else %}
<tr>
<td colspan=\"7\" class=\"text-center text-muted\">Aucune tâche trouvée</td>
</tr>
{% endfor %}
</tbody>
</table>
</div>

</div>
</div>

</div>
</section>

<script>
const filterStatut = document.getElementById('filterStatut');
const filterPriorite = document.getElementById('filterPriorite');
const rows = document.querySelectorAll('#taskTable tr');

function applyFilters() {
rows.forEach(row => {
const statut = row.dataset.statut;
const priorite = row.dataset.priorite;
row.style.display =
(!filterStatut.value || statut === filterStatut.value) &&
(!filterPriorite.value || priorite === filterPriorite.value)
? '' : 'none';
});
}

filterStatut.addEventListener('change', applyFilters);
filterPriorite.addEventListener('change', applyFilters);
</script>

{% endblock %}
", "tache/index.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\tache\\index.html.twig");
    }
}
