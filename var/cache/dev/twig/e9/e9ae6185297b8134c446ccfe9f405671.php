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

/* reservation/index.html.twig */
class __TwigTemplate_e0dbc73af1a9731a25be32b983b4185a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

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

        yield "Réservations";
        
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
        yield "<br><br><br><br><br>
    <div class=\"container mt-5 pt-5\">
        <h1 class=\"fw-bold text-primary mb-5\">
            <i class=\"fa fa-bookmark me-2\"></i> Liste des Réservations
        </h1>

        ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "roles", [], "any", false, false, false, 12) == "ROLE_ADMIN"))) {
            // line 13
            yield "            <div class=\"mb-3 text-end\">
                <a href=\"";
            // line 14
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
            yield "\" class=\"btn btn-primary\">Nouvelle réservation</a>
            </a>
        ";
        }
        // line 17
        yield "
        <div class=\"table-responsive shadow-sm\">
            <table class=\"table table-hover table-bordered align-middle\">
                <thead class=\"table-dark\">
                    <tr class=\"text-center\">
                        <th>Date Réservation</th>
                        <th>Statut</th>
                        <th>Session</th>
                        <th>Étudiant</th>
                        ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "roles", [], "any", false, false, false, 26) == "ROLE_ADMIN"))) {
            // line 27
            yield "                            <th>Actions</th>
                        ";
        }
        // line 29
        yield "                    </tr>
                </thead>
                <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 33
            yield "                        <tr>
                            <td class=\"text-center\">";
            // line 34
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                            <td class=\"text-center\">
                                <span class=\"badge px-3 py-2
                                    ";
            // line 37
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 37) == "confirmée")) {
                yield "bg-success text-white
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 38
$context["reservation"], "statut", [], "any", false, false, false, 38) == "en attente")) {
                yield "bg-warning text-dark
                                    ";
            } else {
                // line 39
                yield "bg-danger text-white";
            }
            yield "\">
                                    ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 40)), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                ";
            // line 44
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 45), "dateHeure", [], "any", false, false, false, 45), "d/m/Y H:i"), "html", null, true);
                yield " (";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 45), "group", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 45), "group", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true)) : ("?"));
                yield ")
                                ";
            } else {
                // line 47
                yield "                                    -
                                ";
            }
            // line 49
            yield "                            </td>
                            <td>";
            // line 50
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50)), "html", null, true)) : ("-"));
            yield "</td>

                            ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "roles", [], "any", false, false, false, 52) == "ROLE_ADMIN"))) {
                // line 53
                yield "                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                yield "\" class=\"btn btn-info\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                        <a href=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                yield "\" class=\"btn btn-warning\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        ";
                // line 61
                yield Twig\Extension\CoreExtension::include($this->env, $context, "reservation/_delete_form.html.twig");
                yield "
                                    </div>
                                </td>
                            ";
            }
            // line 65
            yield "                        </tr>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 66
        if (!$context['_iterated']) {
            // line 67
            yield "                        <tr>
                            <td colspan=\"";
            // line 68
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "roles", [], "any", false, false, false, 68) == "admin"))) {
                yield "5";
            } else {
                yield "4";
            }
            yield "\" class=\"text-center py-5 text-muted fs-5\">
                                <i class=\"fa fa-folder-open fa-2x mb-3 d-block\"></i>
                                Aucune réservation trouvée
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "                </tbody>
            </table>
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
        return "reservation/index.html.twig";
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
        return array (  270 => 74,  254 => 68,  251 => 67,  249 => 66,  236 => 65,  229 => 61,  223 => 58,  217 => 55,  213 => 53,  211 => 52,  206 => 50,  203 => 49,  199 => 47,  191 => 45,  189 => 44,  182 => 40,  177 => 39,  172 => 38,  168 => 37,  162 => 34,  159 => 33,  141 => 32,  136 => 29,  132 => 27,  130 => 26,  119 => 17,  113 => 14,  110 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réservations{% endblock %}

{% block body %}
<br><br><br><br><br>
    <div class=\"container mt-5 pt-5\">
        <h1 class=\"fw-bold text-primary mb-5\">
            <i class=\"fa fa-bookmark me-2\"></i> Liste des Réservations
        </h1>

        {% if app.user and app.user.roles == 'ROLE_ADMIN' %}
            <div class=\"mb-3 text-end\">
                <a href=\"{{ path('app_reservation_new') }}\" class=\"btn btn-primary\">Nouvelle réservation</a>
            </a>
        {% endif %}

        <div class=\"table-responsive shadow-sm\">
            <table class=\"table table-hover table-bordered align-middle\">
                <thead class=\"table-dark\">
                    <tr class=\"text-center\">
                        <th>Date Réservation</th>
                        <th>Statut</th>
                        <th>Session</th>
                        <th>Étudiant</th>
                        {% if app.user and app.user.roles == 'ROLE_ADMIN' %}
                            <th>Actions</th>
                        {% endif %}
                    </tr>
                </thead>
                <tbody>
                    {% for reservation in reservations %}
                        <tr>
                            <td class=\"text-center\">{{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y') : '-' }}</td>
                            <td class=\"text-center\">
                                <span class=\"badge px-3 py-2
                                    {% if reservation.statut == 'confirmée' %}bg-success text-white
                                    {% elseif reservation.statut == 'en attente' %}bg-warning text-dark
                                    {% else %}bg-danger text-white{% endif %}\">
                                    {{ reservation.statut|capitalize }}
                                </span>
                            </td>
                            <td>
                                {% if reservation.session %}
                                    {{ reservation.session.dateHeure|date('d/m/Y H:i') }} ({{ reservation.session.group ? reservation.session.group.nom : '?' }})
                                {% else %}
                                    -
                                {% endif %}
                            </td>
                            <td>{{ reservation.user ? reservation.user.prenom ~ ' ' ~ reservation.user.nom : '-' }}</td>

                            {% if app.user and app.user.roles == 'ROLE_ADMIN' %}
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('app_reservation_show', {'id': reservation.id}) }}\" class=\"btn btn-info\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\" class=\"btn btn-warning\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        {{ include('reservation/_delete_form.html.twig') }}
                                    </div>
                                </td>
                            {% endif %}
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"{% if app.user and app.user.roles == 'admin' %}5{% else %}4{% endif %}\" class=\"text-center py-5 text-muted fs-5\">
                                <i class=\"fa fa-folder-open fa-2x mb-3 d-block\"></i>
                                Aucune réservation trouvée
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}", "reservation/index.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\reservation\\index.html.twig");
    }
}
