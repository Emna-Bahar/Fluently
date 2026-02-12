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

/* session/show.html.twig */
class __TwigTemplate_c0f648f907dd7909a7af54ada94ac413 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/show.html.twig"));

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

        yield "Details Session - Fluently";
        
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
        yield "    <div class=\"container py-5\" style=\"margin-top: 100px;\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow-lg border-0 rounded-4\">
                    <div class=\"card-header bg-primary text-white py-4\">
                        <h4 class=\"mb-0 fw-bold\">
                            <i class=\"bi bi-info-circle me-2\"></i> Details de la session #";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "
                        </h4>
                    </div>
                    <div class=\"card-body p-4\">
                        <table class=\"table table-borderless\">
                            <tbody>
                                <tr>
                                    <th class=\"ps-0\" style=\"width: 250px;\">
                                        <i class=\"bi bi-calendar-event text-primary me-2\"></i> Date et heure:
                                    </th>
                                    <td class=\"fw-bold\">
                                        ";
        // line 23
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 23, $this->source); })()), "dateHeure", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 23, $this->source); })()), "dateHeure", [], "any", false, false, false, 23), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-flag text-primary me-2\"></i> Statut:
                                    </th>
                                    <td>
                                        ";
        // line 31
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 31, $this->source); })()), "statut", [], "any", false, false, false, 31) == "planifiée")) {
            // line 32
            yield "                                            <span class=\"badge rounded-pill px-3 py-2 bg-warning text-dark\">Planifiee</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 33, $this->source); })()), "statut", [], "any", false, false, false, 33) == "en_cours")) {
            // line 34
            yield "                                            <span class=\"badge rounded-pill px-3 py-2 bg-success\">En cours</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 35, $this->source); })()), "statut", [], "any", false, false, false, 35) == "terminée")) {
            // line 36
            yield "                                            <span class=\"badge rounded-pill px-3 py-2 bg-info\">Terminee</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 37, $this->source); })()), "statut", [], "any", false, false, false, 37) == "annulée")) {
            // line 38
            yield "                                            <span class=\"badge rounded-pill px-3 py-2 bg-danger\">Annulee</span>
                                        ";
        } else {
            // line 40
            yield "                                            <span class=\"badge rounded-pill px-3 py-2 bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 40, $this->source); })()), "statut", [], "any", false, false, false, 40), "html", null, true);
            yield "</span>
                                        ";
        }
        // line 42
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-link-45deg text-primary me-2\"></i> Lien reunion:
                                    </th>
                                    <td>
                                        ";
        // line 49
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 49, $this->source); })()), "lienReunion", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 50, $this->source); })()), "lienReunion", [], "any", false, false, false, 50), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-sm btn-outline-primary\">
                                                <i class=\"bi bi-box-arrow-up-right me-1\"></i> ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 51, $this->source); })()), "lienReunion", [], "any", false, false, false, 51), "html", null, true);
            yield "
                                            </a>
                                        ";
        } else {
            // line 54
            yield "                                            <span class=\"text-muted\">--</span>
                                        ";
        }
        // line 56
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-people text-primary me-2\"></i> Groupe:
                                    </th>
                                    <td>";
        // line 62
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 62, $this->source); })()), "groupe", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 62, $this->source); })()), "groupe", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), "html", null, true)) : ("--"));
        yield "</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-person text-primary me-2\"></i> Formateur:
                                    </th>
                                    <td>
                                        ";
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "                                            <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "prenom", [], "any", false, false, false, 70), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70), "html", null, true);
            yield "</strong>
                                            ";
            // line 71
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "user", [], "any", false, true, false, 71), "email", [], "any", true, true, false, 71) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "email", [], "any", false, false, false, 71))) {
                // line 72
                yield "                                                <br><small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "email", [], "any", false, false, false, 72), "html", null, true);
                yield "</small>
                                            ";
            }
            // line 74
            yield "                                        ";
        } else {
            // line 75
            yield "                                            <span class=\"text-muted\">--</span>
                                        ";
        }
        // line 77
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-bookmark-check text-primary me-2\"></i> Réservations:
                                    </th>
                                    <td>
                                        <span class=\"badge bg-primary rounded-pill px-3 py-2\">
                                            ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 85, $this->source); })()), "reservations", [], "any", false, false, false, 85)), "html", null, true);
        yield " réservation";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 85, $this->source); })()), "reservations", [], "any", false, false, false, 85)) > 1)) ? ("s") : (""));
        yield "
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class=\"mt-4 d-flex gap-2 flex-wrap\">
                            <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
        yield "\" class=\"btn btn-secondary px-4\">
                                <i class=\"bi bi-arrow-left me-1\"></i> Retour a la liste
                            </a>
                            <a href=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
        yield "\" class=\"btn btn-warning px-4\">
                                <i class=\"bi bi-pencil me-1\"></i> Modifier
                            </a>
                            <a href=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_reservations", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
        yield "\" class=\"btn btn-primary px-4\">
                                <i class=\"bi bi-bookmark-check me-1\"></i> Voir les réservations
                            </a>
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
        return "session/show.html.twig";
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
        return array (  263 => 99,  257 => 96,  251 => 93,  238 => 85,  228 => 77,  224 => 75,  221 => 74,  215 => 72,  213 => 71,  206 => 70,  204 => 69,  194 => 62,  186 => 56,  182 => 54,  176 => 51,  171 => 50,  169 => 49,  160 => 42,  154 => 40,  150 => 38,  148 => 37,  145 => 36,  143 => 35,  140 => 34,  138 => 33,  135 => 32,  133 => 31,  122 => 23,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Details Session - Fluently{% endblock %}

{% block body %}
    <div class=\"container py-5\" style=\"margin-top: 100px;\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow-lg border-0 rounded-4\">
                    <div class=\"card-header bg-primary text-white py-4\">
                        <h4 class=\"mb-0 fw-bold\">
                            <i class=\"bi bi-info-circle me-2\"></i> Details de la session #{{ session.id }}
                        </h4>
                    </div>
                    <div class=\"card-body p-4\">
                        <table class=\"table table-borderless\">
                            <tbody>
                                <tr>
                                    <th class=\"ps-0\" style=\"width: 250px;\">
                                        <i class=\"bi bi-calendar-event text-primary me-2\"></i> Date et heure:
                                    </th>
                                    <td class=\"fw-bold\">
                                        {{ session.dateHeure ? session.dateHeure|date('d/m/Y H:i') : '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-flag text-primary me-2\"></i> Statut:
                                    </th>
                                    <td>
                                        {% if session.statut == 'planifiée' %}
                                            <span class=\"badge rounded-pill px-3 py-2 bg-warning text-dark\">Planifiee</span>
                                        {% elseif session.statut == 'en_cours' %}
                                            <span class=\"badge rounded-pill px-3 py-2 bg-success\">En cours</span>
                                        {% elseif session.statut == 'terminée' %}
                                            <span class=\"badge rounded-pill px-3 py-2 bg-info\">Terminee</span>
                                        {% elseif session.statut == 'annulée' %}
                                            <span class=\"badge rounded-pill px-3 py-2 bg-danger\">Annulee</span>
                                        {% else %}
                                            <span class=\"badge rounded-pill px-3 py-2 bg-secondary\">{{ session.statut }}</span>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-link-45deg text-primary me-2\"></i> Lien reunion:
                                    </th>
                                    <td>
                                        {% if session.lienReunion %}
                                            <a href=\"{{ session.lienReunion }}\" target=\"_blank\" class=\"btn btn-sm btn-outline-primary\">
                                                <i class=\"bi bi-box-arrow-up-right me-1\"></i> {{ session.lienReunion }}
                                            </a>
                                        {% else %}
                                            <span class=\"text-muted\">--</span>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-people text-primary me-2\"></i> Groupe:
                                    </th>
                                    <td>{{ session.groupe ? session.groupe.nom : '--' }}</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-person text-primary me-2\"></i> Formateur:
                                    </th>
                                    <td>
                                        {% if session.user %}
                                            <strong>{{ session.user.prenom }} {{ session.user.nom }}</strong>
                                            {% if session.user.email is defined and session.user.email %}
                                                <br><small class=\"text-muted\">{{ session.user.email }}</small>
                                            {% endif %}
                                        {% else %}
                                            <span class=\"text-muted\">--</span>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-bookmark-check text-primary me-2\"></i> Réservations:
                                    </th>
                                    <td>
                                        <span class=\"badge bg-primary rounded-pill px-3 py-2\">
                                            {{ session.reservations|length }} réservation{{ session.reservations|length > 1 ? 's' : '' }}
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class=\"mt-4 d-flex gap-2 flex-wrap\">
                            <a href=\"{{ path('app_session_index') }}\" class=\"btn btn-secondary px-4\">
                                <i class=\"bi bi-arrow-left me-1\"></i> Retour a la liste
                            </a>
                            <a href=\"{{ path('app_session_edit', {'id': session.id}) }}\" class=\"btn btn-warning px-4\">
                                <i class=\"bi bi-pencil me-1\"></i> Modifier
                            </a>
                            <a href=\"{{ path('app_session_reservations', {'id': session.id}) }}\" class=\"btn btn-primary px-4\">
                                <i class=\"bi bi-bookmark-check me-1\"></i> Voir les réservations
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "session/show.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\session\\show.html.twig");
    }
}
