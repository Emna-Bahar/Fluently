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
class __TwigTemplate_2d2c71c28b9a0761711f483e2ed8abcc extends Template
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
            
        </div>
        <div class=\"page-header-right ms-auto\">
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                    <i class=\"feather-edit me-2\"></i>Modifier
                </a>
                <a href=\"";
        // line 17
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
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 35, $this->source); })()), "dateHeure", [], "any", false, false, false, 35), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Statut</label>
                            <p>
                                ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 40, $this->source); })()), "statut", [], "any", false, false, false, 40) == "planifiée")) {
            // line 41
            yield "                                    <span class=\"badge bg-soft-info text-info\">Planifiee</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 42
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 42, $this->source); })()), "statut", [], "any", false, false, false, 42) == "en_cours")) {
            // line 43
            yield "                                    <span class=\"badge bg-soft-warning text-warning\">En cours</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 44
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 44, $this->source); })()), "statut", [], "any", false, false, false, 44) == "terminée")) {
            // line 45
            yield "                                    <span class=\"badge bg-soft-success text-success\">Terminee</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 46, $this->source); })()), "statut", [], "any", false, false, false, 46) == "annulée")) {
            // line 47
            yield "                                    <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                ";
        }
        // line 49
        yield "                            </p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Lien de reunion</label>
                            <p>
                                <a href=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 54, $this->source); })()), "lienReunion", [], "any", false, false, false, 54), "html", null, true);
        yield "\" target=\"_blank\" class=\"text-primary\">
                                    <i class=\"feather-link me-1\"></i>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 55, $this->source); })()), "lienReunion", [], "any", false, false, false, 55), "html", null, true);
        yield "
                                </a>
                            </p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Groupe</label>
                            <p class=\"fw-semibold\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 61, $this->source); })()), "groupe", [], "any", false, false, false, 61), "nom", [], "any", false, false, false, 61), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"mb-0\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Tuteur</label>
                            <p class=\"fw-semibold\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "nom", [], "any", false, false, false, 65), "html", null, true);
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
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 75, $this->source); })()), "reservations", [], "any", false, false, false, 75)), "html", null, true);
        yield ")</h5>
                        <a href=\"";
        // line 76
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
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 93, $this->source); })()), "reservations", [], "any", false, false, false, 93));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 94
            yield "                                    <tr>
                                        <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 95), "html", null, true);
            yield "</td>
                                        <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 96), "d/m/Y"), "html", null, true);
            yield "</td>
                                        <td>
                                            ";
            // line 98
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 98) == "en_attente")) {
                // line 99
                yield "                                                <span class=\"badge bg-soft-secondary text-secondary\">En attente</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 100
$context["reservation"], "statut", [], "any", false, false, false, 100) == "confirmée")) {
                // line 101
                yield "                                                <span class=\"badge bg-soft-success text-success\">Confirmee</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 102
$context["reservation"], "statut", [], "any", false, false, false, 102) == "annulée")) {
                // line 103
                yield "                                                <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 104
$context["reservation"], "statut", [], "any", false, false, false, 104) == "terminée")) {
                // line 105
                yield "                                                <span class=\"badge bg-soft-info text-info\">Terminee</span>
                                            ";
            }
            // line 107
            yield "                                        </td>
                                        <td>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 108), "html", null, true);
            yield "</td>
                                        <td>
                                            <div class=\"hstack gap-2\">
                                                <a href=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\" class=\"avatar-text avatar-md\" data-bs-toggle=\"tooltip\" title=\"Voir\">
                                                    <i class=\"feather-eye\"></i>
                                                </a>
                                                <a href=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            yield "\" class=\"avatar-text avatar-md\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                    <i class=\"feather-edit\"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 120
        if (!$context['_iterated']) {
            // line 121
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center text-muted py-4\">Aucune reservation pour cette session.</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
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
        return array (  286 => 125,  277 => 121,  275 => 120,  264 => 114,  258 => 111,  252 => 108,  249 => 107,  245 => 105,  243 => 104,  240 => 103,  238 => 102,  235 => 101,  233 => 100,  230 => 99,  228 => 98,  223 => 96,  219 => 95,  216 => 94,  211 => 93,  191 => 76,  187 => 75,  174 => 65,  167 => 61,  158 => 55,  154 => 54,  147 => 49,  143 => 47,  141 => 46,  138 => 45,  136 => 44,  133 => 43,  131 => 42,  128 => 41,  126 => 40,  118 => 35,  97 => 17,  91 => 14,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
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
{% endblock %}", "dashboard/session/show.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\dashboard\\session\\show.html.twig");
    }
}
