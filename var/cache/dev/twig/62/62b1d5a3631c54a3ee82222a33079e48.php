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

/* dashboard/reservation/show.html.twig */
class __TwigTemplate_49544aa1a8b8658f9f724e949df0cd7d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/reservation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/reservation/show.html.twig"));

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
                <h5 class=\"m-b-10\">Reservation #";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        yield "</h5>
            </div>
            
        </div>
        <div class=\"page-header-right ms-auto\">
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                    <i class=\"feather-edit me-2\"></i>Modifier
                </a>
                <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"feather-arrow-left me-2\"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"card stretch-card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Informations de la Reservation</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Date de Reservation</label>
                            <p class=\"fw-semibold\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "dateReservation", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Statut</label>
                            <p>
                                ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 39, $this->source); })()), "statut", [], "any", false, false, false, 39) == "en_attente")) {
            // line 40
            yield "                                    <span class=\"badge bg-soft-secondary text-secondary\">En attente</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 41
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "statut", [], "any", false, false, false, 41) == "confirmée")) {
            // line 42
            yield "                                    <span class=\"badge bg-soft-success text-success\">Confirmee</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 43
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 43, $this->source); })()), "statut", [], "any", false, false, false, 43) == "annulée")) {
            // line 44
            yield "                                    <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 45
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 45, $this->source); })()), "statut", [], "any", false, false, false, 45) == "terminée")) {
            // line 46
            yield "                                    <span class=\"badge bg-soft-info text-info\">Terminee</span>
                                ";
        }
        // line 48
        yield "                            </p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Utilisateur</label>
                            <p class=\"fw-semibold\">
    ";
        // line 53
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "        ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "user", [], "any", false, true, false, 54), "nom", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true)) : (""));
            yield " ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "user", [], "any", false, true, false, 54), "prenom", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "prenom", [], "any", false, false, false, 54)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "prenom", [], "any", false, false, false, 54), "html", null, true)) : (""));
            yield "
    ";
        } else {
            // line 56
            yield "        <span class=\"text-muted\">Non défini</span>
    ";
        }
        // line 58
        yield "</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6\">
                <div class=\"card stretch-card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Session Associee</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Session</label>
                            <p>
                                <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 73, $this->source); })()), "session", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\" class=\"text-primary fw-semibold\">
                                    Session #";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 74, $this->source); })()), "session", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
        yield "

                                </a>
                            </p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Date et Heure</label>
                            <p class=\"fw-semibold\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 81, $this->source); })()), "session", [], "any", false, false, false, 81), "dateHeure", [], "any", false, false, false, 81), "d/m/Y H:i"), "html", null, true);
        yield "
</p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Statut Session</label>
                            <p>
                                ";
        // line 87
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 87, $this->source); })()), "session", [], "any", false, false, false, 87), "statut", [], "any", false, false, false, 87) == "planifiée")) {
            // line 88
            yield "                                    <span class=\"badge bg-soft-info text-info\">Planifiee</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 89
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 89, $this->source); })()), "session", [], "any", false, false, false, 89), "statut", [], "any", false, false, false, 89) == "en_cours")) {
            // line 90
            yield "                                    <span class=\"badge bg-soft-warning text-warning\">En cours</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 91
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 91, $this->source); })()), "session", [], "any", false, false, false, 91), "statut", [], "any", false, false, false, 91) == "terminée")) {
            // line 92
            yield "                                    <span class=\"badge bg-soft-success text-success\">Terminee</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 93
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 93, $this->source); })()), "session", [], "any", false, false, false, 93), "statut", [], "any", false, false, false, 93) == "annulée")) {
            // line 94
            yield "                                    <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                ";
        }
        // line 96
        yield "                            </p>
                        </div>
                        <div class=\"mb-0\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Lien Reunion</label>
                            <p>
                                <a href=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 101, $this->source); })()), "session", [], "any", false, false, false, 101), "lienReunion", [], "any", false, false, false, 101), "html", null, true);
        yield "
\" target=\"_blank\" class=\"text-primary\">
                                    <i class=\"feather-link me-1\"></i>";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 103, $this->source); })()), "session", [], "any", false, false, false, 103), "lienReunion", [], "any", false, false, false, 103), "html", null, true);
        yield "

                                </a>
                            </p>
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
        return "dashboard/reservation/show.html.twig";
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
        return array (  240 => 103,  235 => 101,  228 => 96,  224 => 94,  222 => 93,  219 => 92,  217 => 91,  214 => 90,  212 => 89,  209 => 88,  207 => 87,  198 => 81,  188 => 74,  184 => 73,  167 => 58,  163 => 56,  155 => 54,  153 => 53,  146 => 48,  142 => 46,  140 => 45,  137 => 44,  135 => 43,  132 => 42,  130 => 41,  127 => 40,  125 => 39,  117 => 34,  97 => 17,  91 => 14,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block body %}
<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Reservation #{{ reservation.id }}</h5>
            </div>
            
        </div>
        <div class=\"page-header-right ms-auto\">
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\" class=\"btn btn-warning\">
                    <i class=\"feather-edit me-2\"></i>Modifier
                </a>
                <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"feather-arrow-left me-2\"></i>Retour
                </a>
            </div>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"card stretch-card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Informations de la Reservation</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Date de Reservation</label>
                            <p class=\"fw-semibold\">{{ reservation.dateReservation|date('d/m/Y') }}</p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Statut</label>
                            <p>
                                {% if reservation.statut == 'en_attente' %}
                                    <span class=\"badge bg-soft-secondary text-secondary\">En attente</span>
                                {% elseif reservation.statut == 'confirmée' %}
                                    <span class=\"badge bg-soft-success text-success\">Confirmee</span>
                                {% elseif reservation.statut == 'annulée' %}
                                    <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                {% elseif reservation.statut == 'terminée' %}
                                    <span class=\"badge bg-soft-info text-info\">Terminee</span>
                                {% endif %}
                            </p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Utilisateur</label>
                            <p class=\"fw-semibold\">
    {% if reservation.user %}
        {{ reservation.user.nom ?? '' }} {{ reservation.user.prenom ?? '' }}
    {% else %}
        <span class=\"text-muted\">Non défini</span>
    {% endif %}
</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6\">
                <div class=\"card stretch-card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Session Associee</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Session</label>
                            <p>
                                <a href=\"{{ path('app_session_show', {'id': reservation.session.id}) }}\" class=\"text-primary fw-semibold\">
                                    Session #{{ reservation.session.id }}

                                </a>
                            </p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Date et Heure</label>
                            <p class=\"fw-semibold\">{{ reservation.session.dateHeure|date('d/m/Y H:i') }}
</p>
                        </div>
                        <div class=\"mb-4\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Statut Session</label>
                            <p>
                                {% if  reservation.session.statut == 'planifiée' %}
                                    <span class=\"badge bg-soft-info text-info\">Planifiee</span>
                                {% elseif reservation.session.statut == 'en_cours' %}
                                    <span class=\"badge bg-soft-warning text-warning\">En cours</span>
                                {% elseif  reservation.session.statut == 'terminée' %}
                                    <span class=\"badge bg-soft-success text-success\">Terminee</span>
                                {% elseif reservation.session.statut == 'annulée' %}
                                    <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                {% endif %}
                            </p>
                        </div>
                        <div class=\"mb-0\">
                            <label class=\"form-label text-muted fs-12 text-uppercase\">Lien Reunion</label>
                            <p>
                                <a href=\"{{ reservation.session.lienReunion }}
\" target=\"_blank\" class=\"text-primary\">
                                    <i class=\"feather-link me-1\"></i>{{ reservation.session.lienReunion }}

                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "dashboard/reservation/show.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\dashboard\\reservation\\show.html.twig");
    }
}
