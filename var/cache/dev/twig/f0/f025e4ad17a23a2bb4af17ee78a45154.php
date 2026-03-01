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

/* dashboard/session/index.html.twig */
class __TwigTemplate_b9cb1519bee30cb64af86dbaa5ee20c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/session/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/session/index.html.twig"));

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
                <h5 class=\"m-b-10\">Sessions</h5>
            </div>
            
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"feather-plus me-2\"></i>
                <span>Nouvelle Session</span>
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
                        <h5 class=\"card-title\">Liste des Sessions</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\" id=\"sessionTable\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date et Heure</th>
                                        <th>Statut</th>
                                        <th>Lien Reunion</th>
                                        <th>Groupe</th>
                                        <th>Tuteur</th>
                                        <th>Reservations</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 53
            yield "                                    <tr>
                                        <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                                        <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateHeure", [], "any", false, false, false, 55), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                        <td>
                                            ";
            // line 57
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "statut", [], "any", false, false, false, 57) == "planifiée")) {
                // line 58
                yield "                                                <span class=\"badge bg-soft-info text-info\">Planifiee</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 59
$context["session"], "statut", [], "any", false, false, false, 59) == "en_cours")) {
                // line 60
                yield "                                                <span class=\"badge bg-soft-warning text-warning\">En cours</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 61
$context["session"], "statut", [], "any", false, false, false, 61) == "terminée")) {
                // line 62
                yield "                                                <span class=\"badge bg-soft-success text-success\">Terminee</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 63
$context["session"], "statut", [], "any", false, false, false, 63) == "annulée")) {
                // line 64
                yield "                                                <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                            ";
            }
            // line 66
            yield "                                        </td>
                                        <td>
                                            <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "lienReunion", [], "any", false, false, false, 68), "html", null, true);
            yield "\" target=\"_blank\" class=\"text-primary\">
                                                <i class=\"feather-link me-1\"></i>Rejoindre
                                            </a>
                                        </td>
<td>";
            // line 72
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "groupe", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "groupe", [], "any", false, false, false, 72), "nom", [], "any", false, false, false, 72), "html", null, true)) : ("N/A"));
            yield "</td>
<td>";
            // line 73
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "user", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "user", [], "any", false, false, false, 73), "email", [], "any", false, false, false, 73), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>
```plaintext
<span class=\"badge bg-soft-primary text-primary\">--</span>```                                        </td>
                                        <td>
                                            <div class=\"hstack gap-2\">
                                                <a href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" class=\"avatar-text avatar-md\">
<a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" class=\"avatar-text avatar-md\">
<form method=\"post\" action=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\">
    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 82))), "html", null, true);
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
        // line 90
        if (!$context['_iterated']) {
            // line 91
            yield "                                    <tr>
                                        <td colspan=\"8\" class=\"text-center text-muted py-4\">Aucune session trouvee.</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
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
        return "dashboard/session/index.html.twig";
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
        return array (  251 => 95,  242 => 91,  240 => 90,  227 => 82,  223 => 81,  219 => 80,  215 => 79,  206 => 73,  202 => 72,  195 => 68,  191 => 66,  187 => 64,  185 => 63,  182 => 62,  180 => 61,  177 => 60,  175 => 59,  172 => 58,  170 => 57,  165 => 55,  161 => 54,  158 => 53,  153 => 52,  128 => 29,  122 => 28,  112 => 24,  107 => 23,  102 => 22,  98 => 21,  87 => 13,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block body %}
<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Sessions</h5>
            </div>
            
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"{{ path('admin_session_new') }}\" class=\"btn btn-primary\">
                <i class=\"feather-plus me-2\"></i>
                <span>Nouvelle Session</span>
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
                        <h5 class=\"card-title\">Liste des Sessions</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\" id=\"sessionTable\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date et Heure</th>
                                        <th>Statut</th>
                                        <th>Lien Reunion</th>
                                        <th>Groupe</th>
                                        <th>Tuteur</th>
                                        <th>Reservations</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for session in sessions %}
                                    <tr>
                                        <td>{{ session.id }}</td>
                                        <td>{{ session.dateHeure|date('d/m/Y H:i') }}</td>
                                        <td>
                                            {% if session.statut == 'planifiée' %}
                                                <span class=\"badge bg-soft-info text-info\">Planifiee</span>
                                            {% elseif session.statut == 'en_cours' %}
                                                <span class=\"badge bg-soft-warning text-warning\">En cours</span>
                                            {% elseif session.statut == 'terminée' %}
                                                <span class=\"badge bg-soft-success text-success\">Terminee</span>
                                            {% elseif session.statut == 'annulée' %}
                                                <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            <a href=\"{{ session.lienReunion }}\" target=\"_blank\" class=\"text-primary\">
                                                <i class=\"feather-link me-1\"></i>Rejoindre
                                            </a>
                                        </td>
<td>{{ session.groupe ? session.groupe.nom : 'N/A' }}</td>
<td>{{ session.user ? session.user.email : 'N/A' }}</td>
                                        <td>
```plaintext
<span class=\"badge bg-soft-primary text-primary\">--</span>```                                        </td>
                                        <td>
                                            <div class=\"hstack gap-2\">
                                                <a href=\"{{ path('admin_session_show', {'id': session.id}) }}\" class=\"avatar-text avatar-md\">
<a href=\"{{ path('admin_session_edit', {'id': session.id}) }}\" class=\"avatar-text avatar-md\">
<form method=\"post\" action=\"{{ path('admin_session_delete', {'id': session.id}) }}\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ session.id) }}\">
                                                    <button type=\"submit\" class=\"avatar-text avatar-md bg-soft-danger\" data-bs-toggle=\"tooltip\" title=\"Supprimer\" style=\"border:none;cursor:pointer;\">
                                                        <i class=\"feather-trash-2 text-danger\"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"8\" class=\"text-center text-muted py-4\">Aucune session trouvee.</td>
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
{% endblock %}", "dashboard/session/index.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\dashboard\\session\\index.html.twig");
    }
}
