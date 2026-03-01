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

/* dashboard/session/show.html.twig */
class __TwigTemplate_08cf2b112e84a7c896c80f389b55e7f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/session/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/session/show.html.twig"));

        $this->parent = $this->load("dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Session #";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        yield "</h5>
            </div>
            <ul class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Dashboard</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
        yield "\">Sessions</a></li>
                <li class=\"breadcrumb-item\">Details</li>
            </ul>
        </div>
        <div class=\"page-header-right ms-auto\">
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                    <i class=\"feather-edit me-2\"></i>Modifier
                </a>
                <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"feather-arrow-left me-2\"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row\">
            <!-- Details de la session -->
            <div class=\"col-lg-4\">
                <div class=\"card stretch-card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Informations</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Date et Heure</label>
                            <p class=\"fw-semibold\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 39, $this->source); })()), "dateHeure", [], "any", false, false, false, 39), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Statut</label>
                            <p>
                                ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 44, $this->source); })()), "statut", [], "any", false, false, false, 44) == "planifiée")) {
            // line 45
            yield "                                    <span class=\"badge bg-soft-info text-info\">Planifiee</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 46, $this->source); })()), "statut", [], "any", false, false, false, 46) == "en_cours")) {
            // line 47
            yield "                                    <span class=\"badge bg-soft-warning text-warning\">En cours</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 48, $this->source); })()), "statut", [], "any", false, false, false, 48) == "terminée")) {
            // line 49
            yield "                                    <span class=\"badge bg-soft-success text-success\">Terminee</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 50, $this->source); })()), "statut", [], "any", false, false, false, 50) == "annulée")) {
            // line 51
            yield "                                    <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                ";
        }
        // line 53
        yield "                            </p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Lien de reunion</label>
                            <p>
                                <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 58, $this->source); })()), "lienReunion", [], "any", false, false, false, 58), "html", null, true);
        yield "\" target=\"_blank\" class=\"text-primary\">
                                    <i class=\"feather-link me-1\"></i>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 59, $this->source); })()), "lienReunion", [], "any", false, false, false, 59), "html", null, true);
        yield "
                                </a>
                            </p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Groupe</label>
                            <p class=\"fw-semibold\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 65, $this->source); })()), "groupe", [], "any", false, false, false, 65), "nom", [], "any", false, false, false, 65), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"mb-0\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Tuteur</label>
                            <p class=\"fw-semibold\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "nom", [], "any", false, false, false, 69), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reservations de la session -->
            <div class=\"col-lg-8\">
                <div class=\"card stretch-card\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title\">Reservations (";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 79, $this->source); })()), "reservations", [], "any", false, false, false, 79)), "html", null, true);
        yield ")</h5>
                        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
        yield "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"feather-plus me-1\"></i>Ajouter
                        </a>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date Reservation</th>
                                        <th>Statut</th>
                                        <th>Utilisateur</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 97, $this->source); })()), "reservations", [], "any", false, false, false, 97));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 98
            yield "                                    <tr>
                                        <td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
                                        <td>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 100), "d/m/Y"), "html", null, true);
            yield "</td>
                                        <td>
                                            ";
            // line 102
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 102) == "en_attente")) {
                // line 103
                yield "                                                <span class=\"badge bg-soft-secondary text-secondary\">En attente</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 104
$context["reservation"], "statut", [], "any", false, false, false, 104) == "confirmée")) {
                // line 105
                yield "                                                <span class=\"badge bg-soft-success text-success\">Confirmee</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 106
$context["reservation"], "statut", [], "any", false, false, false, 106) == "annulée")) {
                // line 107
                yield "                                                <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 108
$context["reservation"], "statut", [], "any", false, false, false, 108) == "terminée")) {
                // line 109
                yield "                                                <span class=\"badge bg-soft-info text-info\">Terminee</span>
                                            ";
            }
            // line 111
            yield "                                        </td>
                                        <td>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 112), "html", null, true);
            yield "</td>
                                        <td>
                                            <div class=\"hstack gap-2\">
                                                <a href=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            yield "\" class=\"avatar-text avatar-md\" data-bs-toggle=\"tooltip\" title=\"Voir\">
                                                    <i class=\"feather-eye\"></i>
                                                </a>
                                                <a href=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            yield "\" class=\"avatar-text avatar-md\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                    <i class=\"feather-edit\"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 124
        if (!$context['_iterated']) {
            // line 125
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center text-muted py-4\">Aucune reservation pour cette session.</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
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
        return "dashboard/session/show.html.twig";
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
        return array (  296 => 129,  287 => 125,  285 => 124,  274 => 118,  268 => 115,  262 => 112,  259 => 111,  255 => 109,  253 => 108,  250 => 107,  248 => 106,  245 => 105,  243 => 104,  240 => 103,  238 => 102,  233 => 100,  229 => 99,  226 => 98,  221 => 97,  201 => 80,  197 => 79,  184 => 69,  177 => 65,  168 => 59,  164 => 58,  157 => 53,  153 => 51,  151 => 50,  148 => 49,  146 => 48,  143 => 47,  141 => 46,  138 => 45,  136 => 44,  128 => 39,  107 => 21,  101 => 18,  92 => 12,  88 => 11,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block body %}
<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Session #{{ session.id }}</h5>
            </div>
            <ul class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_dashboard') }}\">Dashboard</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_session_index') }}\">Sessions</a></li>
                <li class=\"breadcrumb-item\">Details</li>
            </ul>
        </div>
        <div class=\"page-header-right ms-auto\">
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_session_edit', {'id': session.id}) }}\" class=\"btn btn-warning\">
                    <i class=\"feather-edit me-2\"></i>Modifier
                </a>
                <a href=\"{{ path('app_session_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"feather-arrow-left me-2\"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row\">
            <!-- Details de la session -->
            <div class=\"col-lg-4\">
                <div class=\"card stretch-card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Informations</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Date et Heure</label>
                            <p class=\"fw-semibold\">{{ session.dateHeure|date('d/m/Y H:i') }}</p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Statut</label>
                            <p>
                                {% if session.statut == 'planifiée' %}
                                    <span class=\"badge bg-soft-info text-info\">Planifiee</span>
                                {% elseif session.statut == 'en_cours' %}
                                    <span class=\"badge bg-soft-warning text-warning\">En cours</span>
                                {% elseif session.statut == 'terminée' %}
                                    <span class=\"badge bg-soft-success text-success\">Terminee</span>
                                {% elseif session.statut == 'annulée' %}
                                    <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                {% endif %}
                            </p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Lien de reunion</label>
                            <p>
                                <a href=\"{{ session.lienReunion }}\" target=\"_blank\" class=\"text-primary\">
                                    <i class=\"feather-link me-1\"></i>{{ session.lienReunion }}
                                </a>
                            </p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Groupe</label>
                            <p class=\"fw-semibold\">{{ session.groupe.nom }}</p>
                        </div>
                        <div class=\"mb-0\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Tuteur</label>
                            <p class=\"fw-semibold\">{{ session.user.nom }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reservations de la session -->
            <div class=\"col-lg-8\">
                <div class=\"card stretch-card\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title\">Reservations ({{ session.reservations|length }})</h5>
                        <a href=\"{{ path('app_reservation_new') }}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"feather-plus me-1\"></i>Ajouter
                        </a>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date Reservation</th>
                                        <th>Statut</th>
                                        <th>Utilisateur</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for reservation in session.reservations %}
                                    <tr>
                                        <td>{{ reservation.id }}</td>
                                        <td>{{ reservation.dateReservation|date('d/m/Y') }}</td>
                                        <td>
                                            {% if reservation.statut == 'en_attente' %}
                                                <span class=\"badge bg-soft-secondary text-secondary\">En attente</span>
                                            {% elseif reservation.statut == 'confirmée' %}
                                                <span class=\"badge bg-soft-success text-success\">Confirmee</span>
                                            {% elseif reservation.statut == 'annulée' %}
                                                <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                            {% elseif reservation.statut == 'terminée' %}
                                                <span class=\"badge bg-soft-info text-info\">Terminee</span>
                                            {% endif %}
                                        </td>
                                        <td>{{ reservation.user }}</td>
                                        <td>
                                            <div class=\"hstack gap-2\">
                                                <a href=\"{{ path('app_reservation_show', {'id': reservation.id}) }}\" class=\"avatar-text avatar-md\" data-bs-toggle=\"tooltip\" title=\"Voir\">
                                                    <i class=\"feather-eye\"></i>
                                                </a>
                                                <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\" class=\"avatar-text avatar-md\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                    <i class=\"feather-edit\"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"5\" class=\"text-center text-muted py-4\">Aucune reservation pour cette session.</td>
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
{% endblock %}", "dashboard/session/show.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\dashboard\\session\\show.html.twig");
    }
}
