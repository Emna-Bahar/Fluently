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

/* tache_admin/show.html.twig */
class __TwigTemplate_5bf1d0cc60cd189d44381752e765c1c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache_admin/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache_admin/show.html.twig"));

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

        yield "Détails Tâche";
        
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
                <h5 class=\"m-b-10\">Détails de la Tâche</h5>
            </div>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"feather-arrow-left\"></i> Retour
            </a>
            <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                <i class=\"feather-edit\"></i> Modifier
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 28, $this->source); })()), "titre", [], "any", false, false, false, 28), "html", null, true);
        yield "</h5>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th width=\"200\">ID</th>
                                    <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Titre</th>
                                    <td>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 39, $this->source); })()), "titre", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Date limite</th>
                                    <td>";
        // line 47
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 47, $this->source); })()), "dateLimite", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 47, $this->source); })()), "dateLimite", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>
                                        ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 52, $this->source); })()), "statut", [], "any", false, false, false, 52) == "terminee")) {
            // line 53
            yield "                                            <span class=\"badge bg-success\">Terminée</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 54
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 54, $this->source); })()), "statut", [], "any", false, false, false, 54) == "en_cours")) {
            // line 55
            yield "                                            <span class=\"badge bg-primary\">En cours</span>
                                        ";
        } else {
            // line 57
            yield "                                            <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 57, $this->source); })()), "statut", [], "any", false, false, false, 57), "html", null, true);
            yield "</span>
                                        ";
        }
        // line 59
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <th>Priorité</th>
                                    <td>
                                        ";
        // line 64
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 64, $this->source); })()), "priorite", [], "any", false, false, false, 64) == "urgente")) {
            // line 65
            yield "                                            <span class=\"badge bg-danger\">Urgente</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 66
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 66, $this->source); })()), "priorite", [], "any", false, false, false, 66) == "haute")) {
            // line 67
            yield "                                            <span class=\"badge bg-warning\">Haute</span>
                                        ";
        } else {
            // line 69
            yield "                                            <span class=\"badge bg-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 69, $this->source); })()), "priorite", [], "any", false, false, false, 69), "html", null, true);
            yield "</span>
                                        ";
        }
        // line 71
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <th>Objectif</th>
                                    <td>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 75, $this->source); })()), "idObjectif", [], "any", false, false, false, 75), "titre", [], "any", false, false, false, 75), "html", null, true);
        yield "</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class=\"mt-4\">
                            <form method=\"post\" action=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"feather-trash\"></i> Supprimer
                                </button>
                            </form>
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
        return "tache_admin/show.html.twig";
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
        return array (  229 => 82,  225 => 81,  216 => 75,  210 => 71,  204 => 69,  200 => 67,  198 => 66,  195 => 65,  193 => 64,  186 => 59,  180 => 57,  176 => 55,  174 => 54,  171 => 53,  169 => 52,  161 => 47,  154 => 43,  147 => 39,  140 => 35,  130 => 28,  116 => 17,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Détails Tâche{% endblock %}

{% block body %}
<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Détails de la Tâche</h5>
            </div>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"{{ path('app_tache_admin_index') }}\" class=\"btn btn-secondary\">
                <i class=\"feather-arrow-left\"></i> Retour
            </a>
            <a href=\"{{ path('app_tache_admin_edit', {'id': tache.id}) }}\" class=\"btn btn-warning\">
                <i class=\"feather-edit\"></i> Modifier
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">{{ tache.titre }}</h5>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th width=\"200\">ID</th>
                                    <td>{{ tache.id }}</td>
                                </tr>
                                <tr>
                                    <th>Titre</th>
                                    <td>{{ tache.titre }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ tache.description }}</td>
                                </tr>
                                <tr>
                                    <th>Date limite</th>
                                    <td>{{ tache.dateLimite ? tache.dateLimite|date('d/m/Y') : '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>
                                        {% if tache.statut == 'terminee' %}
                                            <span class=\"badge bg-success\">Terminée</span>
                                        {% elseif tache.statut == 'en_cours' %}
                                            <span class=\"badge bg-primary\">En cours</span>
                                        {% else %}
                                            <span class=\"badge bg-secondary\">{{ tache.statut }}</span>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Priorité</th>
                                    <td>
                                        {% if tache.priorite == 'urgente' %}
                                            <span class=\"badge bg-danger\">Urgente</span>
                                        {% elseif tache.priorite == 'haute' %}
                                            <span class=\"badge bg-warning\">Haute</span>
                                        {% else %}
                                            <span class=\"badge bg-info\">{{ tache.priorite }}</span>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Objectif</th>
                                    <td>{{ tache.idObjectif.titre }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class=\"mt-4\">
                            <form method=\"post\" action=\"{{ path('app_tache_admin_delete', {'id': tache.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ tache.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"feather-trash\"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "tache_admin/show.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\tache_admin\\show.html.twig");
    }
}
