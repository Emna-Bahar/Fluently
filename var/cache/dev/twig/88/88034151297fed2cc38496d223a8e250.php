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

/* reservation/professeur.html.twig */
class __TwigTemplate_55565cb98e86c342869986e26510458b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/professeur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/professeur.html.twig"));

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

        yield "Professeur - Gestion des Réservations";
        
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
        yield "<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center fw-bold text-primary mb-5\">
        <i class=\"fa fa-bookmark me-2\"></i>
        Espace Professeur - Gestion des Réservations
    </h1>

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 13
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "            <div class=\"alert alert-";
                yield ((($context["label"] == "success")) ? ("success") : ("danger"));
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
    <div class=\"mb-4 text-end\">
        <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_prof_dashboard");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"fa fa-arrow-left me-2\"></i> Retour au Dashboard
        </a>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <table class=\"table table-hover table-bordered align-middle\">
                <thead class=\"table-dark text-center\">
                    <tr>
                        <th>Date Réservation</th>
                        <th>Statut</th>
                        <th>Session</th>
                        <th>Groupe</th>
                        <th>Étudiant</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 42
            yield "                        <tr>
                            <td class=\"text-center\">
                                ";
            // line 44
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true)) : ("—"));
            yield "
                            </td>
                            <td class=\"text-center\">
                                <span class=\"badge fs-6 px-3 py-2
                                    ";
            // line 48
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 48) == "confirmée")) {
                yield "bg-success text-white
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 49
$context["reservation"], "statut", [], "any", false, false, false, 49) == "en attente")) {
                yield "bg-warning text-dark
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 50
$context["reservation"], "statut", [], "any", false, false, false, 50) == "refusée")) {
                yield "bg-danger text-white
                                    ";
            } else {
                // line 51
                yield "bg-secondary text-white";
            }
            yield "\">
                                    ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 52)), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td class=\"text-center\">
                                ";
            // line 56
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 56), "dateHeure", [], "any", false, false, false, 56), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "
                            </td>
                            <td class=\"text-center\">
                                ";
            // line 59
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 59) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 59), "group", [], "any", false, false, false, 59))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 59), "group", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true)) : ("—"));
            yield "
                            </td>
                            <td class=\"text-center\">
                                ";
            // line 62
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 62), "prenom", [], "any", false, false, false, 62) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62)), "html", null, true)) : ("—"));
            yield "
                            </td>
                            <td class=\"text-center\">
                                <div class=\"d-flex flex-wrap gap-1 justify-content-center\">

                                    ";
            // line 67
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 67) == "en attente")) {
                // line 68
                yield "                                        ";
                // line 69
                yield "                                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_update_statut", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                yield "\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"statut\" value=\"confirmée\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("resa_statut_" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 71))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-success\"
                                                    onclick=\"return confirm('Confirmer cette réservation ?')\">
                                                <i class=\"fa fa-check me-1\"></i> Confirmer
                                            </button>
                                        </form>
                                        ";
                // line 78
                yield "                                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_update_statut", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                yield "\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"statut\" value=\"refusée\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("resa_statut_" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 80))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-danger\"
                                                    onclick=\"return confirm('Refuser cette réservation ?')\">
                                                <i class=\"fa fa-times me-1\"></i> Refuser
                                            </button>
                                        </form>
                                    ";
            }
            // line 87
            yield "
                                    ";
            // line 88
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 88) == "confirmée")) {
                // line 89
                yield "                                        ";
                // line 90
                yield "                                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_update_statut", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"statut\" value=\"annulée\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("resa_statut_" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 92))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-warning text-dark\"
                                                    onclick=\"return confirm('Annuler cette réservation ?')\">
                                                <i class=\"fa fa-ban me-1\"></i> Annuler
                                            </button>
                                        </form>
                                    ";
            }
            // line 99
            yield "
                                    ";
            // line 101
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">
                                        <i class=\"fa fa-eye\"></i> Voir
                                    </a>

                                    ";
            // line 106
            yield "                                    <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\"
                                          onsubmit=\"return confirm('Supprimer définitivement cette réservation ?');\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 108))), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                            <i class=\"fa fa-trash\"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 117
        if (!$context['_iterated']) {
            // line 118
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center py-5 text-muted fs-5\">
                                <i class=\"fa fa-folder-open fa-2x mb-3 d-block\"></i>
                                Aucune demande de réservation trouvée
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "                </tbody>
            </table>
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
        return "reservation/professeur.html.twig";
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
        return array (  328 => 125,  316 => 118,  314 => 117,  300 => 108,  294 => 106,  286 => 101,  283 => 99,  273 => 92,  267 => 90,  265 => 89,  263 => 88,  260 => 87,  250 => 80,  244 => 78,  235 => 71,  229 => 69,  227 => 68,  225 => 67,  217 => 62,  211 => 59,  205 => 56,  198 => 52,  193 => 51,  188 => 50,  184 => 49,  180 => 48,  173 => 44,  169 => 42,  164 => 41,  142 => 22,  138 => 20,  132 => 19,  122 => 15,  117 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Professeur - Gestion des Réservations{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center fw-bold text-primary mb-5\">
        <i class=\"fa fa-bookmark me-2\"></i>
        Espace Professeur - Gestion des Réservations
    </h1>

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label == 'success' ? 'success' : 'danger' }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    <div class=\"mb-4 text-end\">
        <a href=\"{{ path('session_prof_dashboard') }}\" class=\"btn btn-secondary\">
            <i class=\"fa fa-arrow-left me-2\"></i> Retour au Dashboard
        </a>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <table class=\"table table-hover table-bordered align-middle\">
                <thead class=\"table-dark text-center\">
                    <tr>
                        <th>Date Réservation</th>
                        <th>Statut</th>
                        <th>Session</th>
                        <th>Groupe</th>
                        <th>Étudiant</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for reservation in reservations %}
                        <tr>
                            <td class=\"text-center\">
                                {{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y') : '—' }}
                            </td>
                            <td class=\"text-center\">
                                <span class=\"badge fs-6 px-3 py-2
                                    {% if reservation.statut == 'confirmée' %}bg-success text-white
                                    {% elseif reservation.statut == 'en attente' %}bg-warning text-dark
                                    {% elseif reservation.statut == 'refusée' %}bg-danger text-white
                                    {% else %}bg-secondary text-white{% endif %}\">
                                    {{ reservation.statut|capitalize }}
                                </span>
                            </td>
                            <td class=\"text-center\">
                                {{ reservation.session ? reservation.session.dateHeure|date('d/m/Y H:i') : '—' }}
                            </td>
                            <td class=\"text-center\">
                                {{ reservation.session and reservation.session.group ? reservation.session.group.nom : '—' }}
                            </td>
                            <td class=\"text-center\">
                                {{ reservation.user ? reservation.user.prenom ~ ' ' ~ reservation.user.nom : '—' }}
                            </td>
                            <td class=\"text-center\">
                                <div class=\"d-flex flex-wrap gap-1 justify-content-center\">

                                    {% if reservation.statut == 'en attente' %}
                                        {# Confirmer #}
                                        <form method=\"post\" action=\"{{ path('app_reservation_update_statut', {'id': reservation.id}) }}\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"statut\" value=\"confirmée\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('resa_statut_' ~ reservation.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-success\"
                                                    onclick=\"return confirm('Confirmer cette réservation ?')\">
                                                <i class=\"fa fa-check me-1\"></i> Confirmer
                                            </button>
                                        </form>
                                        {# Refuser #}
                                        <form method=\"post\" action=\"{{ path('app_reservation_update_statut', {'id': reservation.id}) }}\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"statut\" value=\"refusée\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('resa_statut_' ~ reservation.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-danger\"
                                                    onclick=\"return confirm('Refuser cette réservation ?')\">
                                                <i class=\"fa fa-times me-1\"></i> Refuser
                                            </button>
                                        </form>
                                    {% endif %}

                                    {% if reservation.statut == 'confirmée' %}
                                        {# Annuler #}
                                        <form method=\"post\" action=\"{{ path('app_reservation_update_statut', {'id': reservation.id}) }}\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"statut\" value=\"annulée\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('resa_statut_' ~ reservation.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-warning text-dark\"
                                                    onclick=\"return confirm('Annuler cette réservation ?')\">
                                                <i class=\"fa fa-ban me-1\"></i> Annuler
                                            </button>
                                        </form>
                                    {% endif %}

                                    {# Voir #}
                                    <a href=\"{{ path('app_reservation_show', {'id': reservation.id}) }}\" class=\"btn btn-sm btn-info\">
                                        <i class=\"fa fa-eye\"></i> Voir
                                    </a>

                                    {# Supprimer #}
                                    <form method=\"post\" action=\"{{ path('app_reservation_delete', {'id': reservation.id}) }}\"
                                          onsubmit=\"return confirm('Supprimer définitivement cette réservation ?');\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reservation.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                                            <i class=\"fa fa-trash\"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center py-5 text-muted fs-5\">
                                <i class=\"fa fa-folder-open fa-2x mb-3 d-block\"></i>
                                Aucune demande de réservation trouvée
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}", "reservation/professeur.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\reservation\\professeur.html.twig");
    }
}
