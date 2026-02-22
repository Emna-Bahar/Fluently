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

/* reservation/show.html.twig */
class __TwigTemplate_80b05d5fe7439c541365251bc0beffbb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

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

        yield "Détails Réservation - Fluently";
        
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
                    <div class=\"card-header bg-success text-white py-4\">
                        <h4 class=\"mb-0 fw-bold\">
                            <i class=\"bi bi-info-circle me-2\"></i> Détails de la réservation #";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "
                        </h4>
                    </div>
                    <div class=\"card-body p-4\">
                        <table class=\"table table-borderless\">
                            <tbody>
                                <tr>
                                    <th class=\"ps-0\" style=\"width: 250px;\">
                                        <i class=\"bi bi-calendar-event text-success me-2\"></i> Date de réservation:
                                    </th>
                                    <td class=\"fw-bold\">
                                        ";
        // line 23
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "dateReservation", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "dateReservation", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true)) : ("-"));
        yield "
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-flag text-success me-2\"></i> Statut:
                                    </th>
                                    <td>
                                        <span class=\"badge rounded-pill px-3 py-2 bg-";
        // line 31
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 31, $this->source); })()), "statut", [], "any", false, false, false, 31) == "confirmee")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 31, $this->source); })()), "statut", [], "any", false, false, false, 31) == "en_attente")) ? ("warning text-dark") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 31, $this->source); })()), "statut", [], "any", false, false, false, 31) == "annulee")) ? ("danger") : ("secondary"))))));
        yield "\">
                                            ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 32, $this->source); })()), "statut", [], "any", false, false, false, 32), ["_" => " "])), "html", null, true);
        yield "
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-calendar-check text-success me-2\"></i> Session:
                                    </th>
                                    <td>
                                        ";
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "session", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                                            <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "dateHeure", [], "any", false, false, false, 42), "d/m/Y à H:i"), "html", null, true);
            yield "</strong>
                                            ";
            // line 43
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 43, $this->source); })()), "session", [], "any", false, false, false, 43), "groupe", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "                                                <br><small class=\"text-muted\">Groupe: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "groupe", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
                yield "</small>
                                            ";
            }
            // line 46
            yield "                                        ";
        } else {
            // line 47
            yield "                                            <span class=\"text-muted\">—</span>
                                        ";
        }
        // line 49
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-person text-success me-2\"></i> Apprenant:
                                    </th>
                                    <td>
                                        ";
        // line 56
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "                                            <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "prenom", [], "any", false, false, false, 57), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "nom", [], "any", false, false, false, 57), "html", null, true);
            yield "</strong>
                                            ";
            // line 58
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "email", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "                                                <br><small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59), "html", null, true);
                yield "</small>
                                            ";
            }
            // line 61
            yield "                                        ";
        } else {
            // line 62
            yield "                                            <span class=\"text-muted\">—</span>
                                        ";
        }
        // line 64
        yield "                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class=\"mt-4 d-flex gap-2\">
                            <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-secondary px-4\">
                                <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                            </a>
                            <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\" class=\"btn btn-warning px-4\">
                                <i class=\"bi bi-pencil me-1\"></i> Modifier
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
        return "reservation/show.html.twig";
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
        return array (  218 => 73,  212 => 70,  204 => 64,  200 => 62,  197 => 61,  191 => 59,  189 => 58,  182 => 57,  180 => 56,  171 => 49,  167 => 47,  164 => 46,  158 => 44,  156 => 43,  151 => 42,  149 => 41,  137 => 32,  133 => 31,  122 => 23,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails Réservation - Fluently{% endblock %}

{% block body %}
    <div class=\"container py-5\" style=\"margin-top: 100px;\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow-lg border-0 rounded-4\">
                    <div class=\"card-header bg-success text-white py-4\">
                        <h4 class=\"mb-0 fw-bold\">
                            <i class=\"bi bi-info-circle me-2\"></i> Détails de la réservation #{{ reservation.id }}
                        </h4>
                    </div>
                    <div class=\"card-body p-4\">
                        <table class=\"table table-borderless\">
                            <tbody>
                                <tr>
                                    <th class=\"ps-0\" style=\"width: 250px;\">
                                        <i class=\"bi bi-calendar-event text-success me-2\"></i> Date de réservation:
                                    </th>
                                    <td class=\"fw-bold\">
                                        {{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y') : '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-flag text-success me-2\"></i> Statut:
                                    </th>
                                    <td>
                                        <span class=\"badge rounded-pill px-3 py-2 bg-{{ reservation.statut == 'confirmee' ? 'success' : (reservation.statut == 'en_attente' ? 'warning text-dark' : (reservation.statut == 'annulee' ? 'danger' : 'secondary')) }}\">
                                            {{ reservation.statut|replace({'_': ' '})|capitalize }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-calendar-check text-success me-2\"></i> Session:
                                    </th>
                                    <td>
                                        {% if reservation.session %}
                                            <strong>{{ reservation.session.dateHeure|date('d/m/Y à H:i') }}</strong>
                                            {% if reservation.session.groupe %}
                                                <br><small class=\"text-muted\">Groupe: {{ reservation.session.groupe.nom }}</small>
                                            {% endif %}
                                        {% else %}
                                            <span class=\"text-muted\">—</span>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">
                                        <i class=\"bi bi-person text-success me-2\"></i> Apprenant:
                                    </th>
                                    <td>
                                        {% if reservation.user %}
                                            <strong>{{ reservation.user.prenom }} {{ reservation.user.nom }}</strong>
                                            {% if reservation.user.email %}
                                                <br><small class=\"text-muted\">{{ reservation.user.email }}</small>
                                            {% endif %}
                                        {% else %}
                                            <span class=\"text-muted\">—</span>
                                        {% endif %}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class=\"mt-4 d-flex gap-2\">
                            <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-secondary px-4\">
                                <i class=\"bi bi-arrow-left me-1\"></i> Retour à la liste
                            </a>
                            <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\" class=\"btn btn-warning px-4\">
                                <i class=\"bi bi-pencil me-1\"></i> Modifier
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "reservation/show.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\reservation\\show.html.twig");
    }
}
