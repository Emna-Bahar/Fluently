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

/* dashboard/user_show.html.twig */
class __TwigTemplate_a9381784bdd0379f6c9e722d707ffbf8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user_show.html.twig"));

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

        yield "Admin - Gestion des utilisateurs";
        
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
<div class=\"nxl-content\">

    <!-- Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Gestion des utilisateurs</h5>
            </div>
        </div>
       <div class=\"page-header-right ms-auto d-flex gap-3\">
       <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_export_google_sheets");
        yield "\" class=\"btn btn-success btn-lg\">
    <img src=\"https://www.google.com/favicon.ico\" width=\"16\" class=\"me-2\"> Ouvrir Google Sheets
</a>
       <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_users_viewer");
        yield "\" class=\"btn btn-info btn-lg\">
        <i class=\"feather-grid me-2\"></i> Voir Table
    </a>
    <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_export_users");
        yield "\" class=\"btn btn-success btn-lg\" onclick=\"setTimeout(() => window.location.href=this.href, 100)\" download>
    <i class=\"feather-download me-2\"></i> Exporter Excel
</a>
</div>
    </div>

    <div class=\"main-content\">
        <div class=\"card border-0 shadow-sm\">
            <div class=\"card-header bg-white border-bottom\">
                <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-3\">
                    <h6 class=\"m-0\">Liste des utilisateurs</h6>

                    <!-- Filters -->
                    <form method=\"GET\" class=\"d-flex align-items-center gap-3 flex-wrap\">
                        <div class=\"input-group\" style=\"width: 280px;\">
                            <span class=\"input-group-text bg-white border-end-0\">
                                <i class=\"feather-search\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "query", [], "any", false, false, false, 41), "get", ["search"], "method", false, false, false, 41), "html", null, true);
        yield "\" 
                                   class=\"form-control\" placeholder=\"Rechercher un utilisateur...\">
                        </div>

                        <div class=\"input-group\" style=\"width: 180px;\">
                            <select name=\"role\" class=\"form-select\">
                                <option value=\"\">Tous les rôles</option>
                                <option value=\"ROLE_USER\" ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "query", [], "any", false, false, false, 48), "get", ["role"], "method", false, false, false, 48) == "ROLE_USER")) {
            yield "selected";
        }
        yield ">Utilisateur</option>
                                <option value=\"ROLE_ADMIN\" ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "query", [], "any", false, false, false, 49), "get", ["role"], "method", false, false, false, 49) == "ROLE_ADMIN")) {
            yield "selected";
        }
        yield ">Administrateur</option>
                                <option value=\"ROLE_TEACHER\" ";
        // line 50
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "query", [], "any", false, false, false, 50), "get", ["role"], "method", false, false, false, 50) == "ROLE_TEACHER")) {
            yield "selected";
        }
        yield ">Professeur</option>
                                <option value=\"ROLE_STUDENT\" ";
        // line 51
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "query", [], "any", false, false, false, 51), "get", ["role"], "method", false, false, false, 51) == "ROLE_STUDENT")) {
            yield "selected";
        }
        yield ">Étudiant</option>
                            </select>
                        </div>

                        <div class=\"input-group\" style=\"width: 180px;\">
                            <select name=\"status\" class=\"form-select\">
                                <option value=\"\">Tous les statuts</option>
                                <option value=\"online\" ";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "query", [], "any", false, false, false, 58), "get", ["status"], "method", false, false, false, 58) == "online")) {
            yield "selected";
        }
        yield ">En ligne</option>
                                <option value=\"offline\" ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "query", [], "any", false, false, false, 59), "get", ["status"], "method", false, false, false, 59) == "offline")) {
            yield "selected";
        }
        yield ">Hors ligne</option>
                            </select>
                        </div>

                        <button type=\"submit\" class=\"btn btn-outline-primary\">
                            <i class=\"feather-filter me-2\"></i> Filtrer
                        </button>
                    </form>
                </div>
            </div>

            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Rôle</th>
                                <th>Statut</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 84
        if (array_key_exists("users", $context)) {
            // line 85
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 85, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 86
                yield "                                <tr>
                                    <td class=\"fw-medium\">";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 87), "html", null, true);
                yield "</td>
                                    <td class=\"fw-bold\">";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 88), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 88), "html", null, true);
                yield "</td>
                                    <td>";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 89), "html", null, true);
                yield "</td>
                                    <td>";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 90), 0, [], "array", false, false, false, 90), ["ROLE_" => ""]), "html", null, true);
                yield "</td>
                                    <td>
                                        ";
                // line 92
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 92) == "online")) {
                    // line 93
                    yield "                                            <span class=\"badge bg-success-subtle text-success px-3 py-2\">En ligne</span>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 94
$context["user"], "statut", [], "any", false, false, false, 94) == "disabled")) {
                    // line 95
                    yield "                                            <span class=\"badge bg-secondary-subtle text-secondary px-3 py-2\">Désactivé</span>
                                        ";
                } else {
                    // line 97
                    yield "                                            <span class=\"badge bg-danger-subtle text-danger px-3 py-2\">Hors ligne</span>
                                        ";
                }
                // line 99
                yield "                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex gap-2 justify-content-center\">
                                            <a href=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 102)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm btn-outline-warning\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                <i class=\"feather-edit-2\"></i>
                                            </a>

                                            ";
                // line 107
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 107) != "disabled")) {
                    // line 108
                    yield "                                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_disable_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 108)]), "html", null, true);
                    yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir désactiver cet utilisateur ?');\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-secondary\" data-bs-toggle=\"tooltip\" title=\"Désactiver\">
                                                        <i class=\"feather-x-circle\"></i>
                                                    </button>
                                                </form>
                                            ";
                } else {
                    // line 114
                    yield "                                                <span class=\"badge bg-secondary\">Désactivé</span>
                                            ";
                }
                // line 116
                yield "
                                            <form method=\"post\" action=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 117)]), "html", null, true);
                yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Confirmer la suppression de cet utilisateur ?');\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" data-bs-toggle=\"tooltip\" title=\"Supprimer\">
                                                    <i class=\"feather-trash-2\"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            ";
                $context['_iterated'] = true;
            }
            // line 125
            if (!$context['_iterated']) {
                // line 126
                yield "                                <tr>
                                    <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                        <h5 class=\"mb-3\">Aucun utilisateur trouvé</h5>
                                        <a href=\"";
                // line 129
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
                yield "\" class=\"btn btn-primary\">
                                            <i class=\"feather-plus me-2\"></i> Ajouter un utilisateur
                                        </a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            yield "                        ";
        }
        // line 136
        yield "                        </tbody>
                    </table>
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
        return "dashboard/user_show.html.twig";
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
        return array (  334 => 136,  331 => 135,  319 => 129,  314 => 126,  312 => 125,  299 => 117,  296 => 116,  292 => 114,  282 => 108,  280 => 107,  272 => 102,  267 => 99,  263 => 97,  259 => 95,  257 => 94,  254 => 93,  252 => 92,  247 => 90,  243 => 89,  237 => 88,  233 => 87,  230 => 86,  224 => 85,  222 => 84,  192 => 59,  186 => 58,  174 => 51,  168 => 50,  162 => 49,  156 => 48,  146 => 41,  125 => 23,  119 => 20,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Admin - Gestion des utilisateurs{% endblock %}

{% block body %}

<div class=\"nxl-content\">

    <!-- Header -->
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Gestion des utilisateurs</h5>
            </div>
        </div>
       <div class=\"page-header-right ms-auto d-flex gap-3\">
       <a href=\"{{ path('dashboard_export_google_sheets') }}\" class=\"btn btn-success btn-lg\">
    <img src=\"https://www.google.com/favicon.ico\" width=\"16\" class=\"me-2\"> Ouvrir Google Sheets
</a>
       <a href=\"{{ path('dashboard_users_viewer') }}\" class=\"btn btn-info btn-lg\">
        <i class=\"feather-grid me-2\"></i> Voir Table
    </a>
    <a href=\"{{ path('dashboard_export_users') }}\" class=\"btn btn-success btn-lg\" onclick=\"setTimeout(() => window.location.href=this.href, 100)\" download>
    <i class=\"feather-download me-2\"></i> Exporter Excel
</a>
</div>
    </div>

    <div class=\"main-content\">
        <div class=\"card border-0 shadow-sm\">
            <div class=\"card-header bg-white border-bottom\">
                <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-3\">
                    <h6 class=\"m-0\">Liste des utilisateurs</h6>

                    <!-- Filters -->
                    <form method=\"GET\" class=\"d-flex align-items-center gap-3 flex-wrap\">
                        <div class=\"input-group\" style=\"width: 280px;\">
                            <span class=\"input-group-text bg-white border-end-0\">
                                <i class=\"feather-search\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" value=\"{{ app.request.query.get('search') }}\" 
                                   class=\"form-control\" placeholder=\"Rechercher un utilisateur...\">
                        </div>

                        <div class=\"input-group\" style=\"width: 180px;\">
                            <select name=\"role\" class=\"form-select\">
                                <option value=\"\">Tous les rôles</option>
                                <option value=\"ROLE_USER\" {% if app.request.query.get('role') == 'ROLE_USER' %}selected{% endif %}>Utilisateur</option>
                                <option value=\"ROLE_ADMIN\" {% if app.request.query.get('role') == 'ROLE_ADMIN' %}selected{% endif %}>Administrateur</option>
                                <option value=\"ROLE_TEACHER\" {% if app.request.query.get('role') == 'ROLE_TEACHER' %}selected{% endif %}>Professeur</option>
                                <option value=\"ROLE_STUDENT\" {% if app.request.query.get('role') == 'ROLE_STUDENT' %}selected{% endif %}>Étudiant</option>
                            </select>
                        </div>

                        <div class=\"input-group\" style=\"width: 180px;\">
                            <select name=\"status\" class=\"form-select\">
                                <option value=\"\">Tous les statuts</option>
                                <option value=\"online\" {% if app.request.query.get('status') == 'online' %}selected{% endif %}>En ligne</option>
                                <option value=\"offline\" {% if app.request.query.get('status') == 'offline' %}selected{% endif %}>Hors ligne</option>
                            </select>
                        </div>

                        <button type=\"submit\" class=\"btn btn-outline-primary\">
                            <i class=\"feather-filter me-2\"></i> Filtrer
                        </button>
                    </form>
                </div>
            </div>

            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Rôle</th>
                                <th>Statut</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% if users is defined %}
                            {% for user in users %}
                                <tr>
                                    <td class=\"fw-medium\">{{ user.id }}</td>
                                    <td class=\"fw-bold\">{{ user.nom }} {{ user.prenom }}</td>
                                    <td>{{ user.email }}</td>
                                    <td>{{ user.roles[0]|replace({'ROLE_':''}) }}</td>
                                    <td>
                                        {% if user.statut == 'online' %}
                                            <span class=\"badge bg-success-subtle text-success px-3 py-2\">En ligne</span>
                                        {% elseif user.statut == 'disabled' %}
                                            <span class=\"badge bg-secondary-subtle text-secondary px-3 py-2\">Désactivé</span>
                                        {% else %}
                                            <span class=\"badge bg-danger-subtle text-danger px-3 py-2\">Hors ligne</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex gap-2 justify-content-center\">
                                            <a href=\"{{ path('dashboard_edit_user', {'id': user.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-warning\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                <i class=\"feather-edit-2\"></i>
                                            </a>

                                            {% if user.statut != 'disabled' %}
                                                <form method=\"post\" action=\"{{ path('dashboard_disable_user', {'id': user.id}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir désactiver cet utilisateur ?');\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-secondary\" data-bs-toggle=\"tooltip\" title=\"Désactiver\">
                                                        <i class=\"feather-x-circle\"></i>
                                                    </button>
                                                </form>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">Désactivé</span>
                                            {% endif %}

                                            <form method=\"post\" action=\"{{ path('dashboard_delete_user', {'id': user.id}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Confirmer la suppression de cet utilisateur ?');\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" data-bs-toggle=\"tooltip\" title=\"Supprimer\">
                                                    <i class=\"feather-trash-2\"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                        <h5 class=\"mb-3\">Aucun utilisateur trouvé</h5>
                                        <a href=\"{{ path('dashboard') }}\" class=\"btn btn-primary\">
                                            <i class=\"feather-plus me-2\"></i> Ajouter un utilisateur
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                        {% endif %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

{% endblock %}
", "dashboard/user_show.html.twig", "C:\\Users\\sarra\\Desktop\\PIW\\Fluently\\templates\\dashboard\\user_show.html.twig");
    }
}
