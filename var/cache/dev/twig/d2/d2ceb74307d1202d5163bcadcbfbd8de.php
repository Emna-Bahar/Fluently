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

/* tache_admin/index.html.twig */
class __TwigTemplate_61559cd3cf6bd7c906e845c50f16fd3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache_admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache_admin/index.html.twig"));

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

        yield "Liste des Tâches";
        
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
                <h5 class=\"m-b-10\">Gestion des Tâches</h5>
            </div>
        </div>
       <!-- <div class=\"page-header-right ms-auto\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"feather-plus\"></i> Créer une tâche
            </a>
        </div>  -->
        <div class=\"page-header-right ms-auto\">
    <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_export_pdf");
        yield "\"
       class=\"btn btn-danger\">
        <i class=\"feather-download\"></i> Exporter PDF
    </a>
</div>

    </div>

    <div class=\"main-content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card stretch stretch-full\">
                    <div class=\"card-body p-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover mb-0\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Date limite</th>
                                        <th>Statut</th>
                                        <th>Priorité</th>
                                        <th class=\"text-end\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 47
            yield "                                    <tr>
                                        <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                                        <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "titre", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                                        <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "description", [], "any", false, false, false, 50), 0, 40), "html", null, true);
            yield "...</td>
                                        <td>";
            // line 51
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateLimite", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateLimite", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                                        <td>
                                            ";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 53) == "terminee")) {
                // line 54
                yield "                                                <span class=\"badge bg-success\">Terminée</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 55
$context["tache"], "statut", [], "any", false, false, false, 55) == "en_cours")) {
                // line 56
                yield "                                                <span class=\"badge bg-primary\">En cours</span>
                                            ";
            } else {
                // line 58
                yield "                                                <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 58), "html", null, true);
                yield "</span>
                                            ";
            }
            // line 60
            yield "                                        </td>
                                        <td>
                                            ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 62) == "urgente")) {
                // line 63
                yield "                                                <span class=\"badge bg-danger\">Urgente</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["tache"], "priorite", [], "any", false, false, false, 64) == "haute")) {
                // line 65
                yield "                                                <span class=\"badge bg-warning\">Haute</span>
                                            ";
            } else {
                // line 67
                yield "                                                <span class=\"badge bg-info\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 67), "html", null, true);
                yield "</span>
                                            ";
            }
            // line 69
            yield "                                        </td>
                                        <td class=\"text-end\">
                                            <a href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-light\" title=\"Voir\">
                                                <i class=\"feather-eye\"></i>
                                            </a>
                                            <a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-light\" title=\"Modifier\">
                                                <i class=\"feather-edit\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 79
        if (!$context['_iterated']) {
            // line 80
            yield "                                    <tr>
                                        <td colspan=\"7\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-0\">Aucune tâche trouvée</p>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                                </tbody>
                            </table>
                        </div>
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
        return "tache_admin/index.html.twig";
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
        return array (  244 => 86,  233 => 80,  231 => 79,  221 => 74,  215 => 71,  211 => 69,  205 => 67,  201 => 65,  199 => 64,  196 => 63,  194 => 62,  190 => 60,  184 => 58,  180 => 56,  178 => 55,  175 => 54,  173 => 53,  168 => 51,  164 => 50,  160 => 49,  156 => 48,  153 => 47,  148 => 46,  118 => 19,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Liste des Tâches{% endblock %}

{% block body %}
<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Gestion des Tâches</h5>
            </div>
        </div>
       <!-- <div class=\"page-header-right ms-auto\">
            <a href=\"{{ path('app_tache_admin_new') }}\" class=\"btn btn-primary\">
                <i class=\"feather-plus\"></i> Créer une tâche
            </a>
        </div>  -->
        <div class=\"page-header-right ms-auto\">
    <a href=\"{{ path('app_tache_admin_export_pdf') }}\"
       class=\"btn btn-danger\">
        <i class=\"feather-download\"></i> Exporter PDF
    </a>
</div>

    </div>

    <div class=\"main-content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card stretch stretch-full\">
                    <div class=\"card-body p-0\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover mb-0\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Date limite</th>
                                        <th>Statut</th>
                                        <th>Priorité</th>
                                        <th class=\"text-end\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for tache in taches %}
                                    <tr>
                                        <td>{{ tache.id }}</td>
                                        <td>{{ tache.titre }}</td>
                                        <td>{{ tache.description|slice(0, 40) }}...</td>
                                        <td>{{ tache.dateLimite ? tache.dateLimite|date('d/m/Y') : '-' }}</td>
                                        <td>
                                            {% if tache.statut == 'terminee' %}
                                                <span class=\"badge bg-success\">Terminée</span>
                                            {% elseif tache.statut == 'en_cours' %}
                                                <span class=\"badge bg-primary\">En cours</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">{{ tache.statut }}</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if tache.priorite == 'urgente' %}
                                                <span class=\"badge bg-danger\">Urgente</span>
                                            {% elseif tache.priorite == 'haute' %}
                                                <span class=\"badge bg-warning\">Haute</span>
                                            {% else %}
                                                <span class=\"badge bg-info\">{{ tache.priorite }}</span>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-end\">
                                            <a href=\"{{ path('app_tache_admin_show', {'id': tache.id}) }}\" class=\"btn btn-sm btn-light\" title=\"Voir\">
                                                <i class=\"feather-eye\"></i>
                                            </a>
                                            <a href=\"{{ path('app_tache_admin_edit', {'id': tache.id}) }}\" class=\"btn btn-sm btn-light\" title=\"Modifier\">
                                                <i class=\"feather-edit\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"7\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-0\">Aucune tâche trouvée</p>
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
</div>
{% endblock %}
", "tache_admin/index.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\tache_admin\\index.html.twig");
    }
}
