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

/* dashboard/reservation/index.html.twig */
class __TwigTemplate_02b2f8aa4160f732c6f4c643a758bd36 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/reservation/index.html.twig"));

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
                <h5 class=\"m-b-10\">Reservations</h5>
            </div>
            
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"feather-plus me-2\"></i>
                <span>Nouvelle Reservation</span>
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 22
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card stretch-card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Liste des Reservations</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\" id=\"reservationTable\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date Reservation</th>
                                        <th>Statut</th>
                                        <th>Session</th>
                                        <th>Utilisateur</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 51
            yield "                                    <tr>
                                        <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                                        <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 53), "d/m/Y"), "html", null, true);
            yield "</td>
                                        <td>
                                            ";
            // line 55
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 55) == "en_attente")) {
                // line 56
                yield "                                                <span class=\"badge bg-soft-secondary text-secondary\">En attente</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 57
$context["reservation"], "statut", [], "any", false, false, false, 57) == "confirmée")) {
                // line 58
                yield "                                                <span class=\"badge bg-soft-success text-success\">Confirmee</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 59
$context["reservation"], "statut", [], "any", false, false, false, 59) == "annulée")) {
                // line 60
                yield "                                                <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 61
$context["reservation"], "statut", [], "any", false, false, false, 61) == "terminée")) {
                // line 62
                yield "                                                <span class=\"badge bg-soft-info text-info\">Terminee</span>
                                            ";
            }
            // line 64
            yield "                                        </td>
                                        <td>
                                            <a href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" class=\"text-primary\">
                                                Session #";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 67), "dateHeure", [], "any", false, false, false, 67), "d/m/Y H:i"), "html", null, true);
            yield "
                                            </a>
                                        </td>
                                        <td>";
            // line 70
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 70), "email", [], "any", false, false, false, 70), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>
                                            <div class=\"hstack gap-2\">
                                                <a href=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\" class=\"avatar-text avatar-md\" data-bs-toggle=\"tooltip\" title=\"Voir\">
                                                    <i class=\"feather-eye\"></i>
                                                </a>
                                                <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" class=\"avatar-text avatar-md\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                    <i class=\"feather-edit\"></i>
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer cette reservation ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 80))), "html", null, true);
            yield "\">
                                                    <button type=\"submit\" class=\"avatar-text avatar-md bg-soft-danger\" data-bs-toggle=\"tooltip\" title=\"Supprimer\" style=\"border:none;cursor:pointer;\">
                                                        <i class=\"feather-trash-2 text-danger\"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 88
        if (!$context['_iterated']) {
            // line 89
            yield "                                    <tr>
                                        <td colspan=\"6\" class=\"text-center text-muted py-4\">Aucune reservation trouvee.</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
        return "dashboard/reservation/index.html.twig";
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
        return array (  251 => 93,  242 => 89,  240 => 88,  227 => 80,  223 => 79,  217 => 76,  211 => 73,  205 => 70,  197 => 67,  193 => 66,  189 => 64,  185 => 62,  183 => 61,  180 => 60,  178 => 59,  175 => 58,  173 => 57,  170 => 56,  168 => 55,  163 => 53,  159 => 52,  156 => 51,  151 => 50,  128 => 29,  122 => 28,  112 => 24,  107 => 23,  102 => 22,  98 => 21,  87 => 13,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block body %}
<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Reservations</h5>
            </div>
            
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"{{ path('admin_reservation_new') }}\" class=\"btn btn-primary\">
                <i class=\"feather-plus me-2\"></i>
                <span>Nouvelle Reservation</span>
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card stretch-card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">Liste des Reservations</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\" id=\"reservationTable\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date Reservation</th>
                                        <th>Statut</th>
                                        <th>Session</th>
                                        <th>Utilisateur</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for reservation in reservations %}
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
                                        <td>
                                            <a href=\"{{ path('admin_session_show', {'id': reservation.session.id}) }}\" class=\"text-primary\">
                                                Session #{{ reservation.session.id }} - {{ reservation.session.dateHeure|date('d/m/Y H:i') }}
                                            </a>
                                        </td>
                                        <td>{{ reservation.user ? reservation.user.email : 'N/A' }}</td>
                                        <td>
                                            <div class=\"hstack gap-2\">
                                                <a href=\"{{ path('admin_reservation_show', {'id': reservation.id}) }}\" class=\"avatar-text avatar-md\" data-bs-toggle=\"tooltip\" title=\"Voir\">
                                                    <i class=\"feather-eye\"></i>
                                                </a>
                                                <a href=\"{{ path('admin_reservation_edit', {'id': reservation.id}) }}\" class=\"avatar-text avatar-md\" data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                    <i class=\"feather-edit\"></i>
                                                </a>
                                                <form method=\"post\" action=\"{{ path('admin_reservation_delete', {'id': reservation.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer cette reservation ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reservation.id) }}\">
                                                    <button type=\"submit\" class=\"avatar-text avatar-md bg-soft-danger\" data-bs-toggle=\"tooltip\" title=\"Supprimer\" style=\"border:none;cursor:pointer;\">
                                                        <i class=\"feather-trash-2 text-danger\"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"6\" class=\"text-center text-muted py-4\">Aucune reservation trouvee.</td>
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
{% endblock %}", "dashboard/reservation/index.html.twig", "C:\\Users\\sarra\\Desktop\\PIW\\Fluently\\templates\\dashboard\\reservation\\index.html.twig");
    }
}
