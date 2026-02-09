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
class __TwigTemplate_7d6bd8cd80a3fcaaf791229956cf1d72 extends Template
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
            <ul class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Dashboard</a></li>
                <li class=\"breadcrumb-item\">Sessions</li>
            </ul>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"feather-plus me-2\"></i>
                <span>Nouvelle Session</span>
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 25
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 26
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
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
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 56
            yield "                                    <tr>
                                        <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                                        <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateHeure", [], "any", false, false, false, 58), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                        <td>
                                            ";
            // line 60
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "statut", [], "any", false, false, false, 60) == "planifiée")) {
                // line 61
                yield "                                                <span class=\"badge bg-soft-info text-info\">Planifiee</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 62
$context["session"], "statut", [], "any", false, false, false, 62) == "en_cours")) {
                // line 63
                yield "                                                <span class=\"badge bg-soft-warning text-warning\">En cours</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["session"], "statut", [], "any", false, false, false, 64) == "terminée")) {
                // line 65
                yield "                                                <span class=\"badge bg-soft-success text-success\">Terminee</span>
                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 66
$context["session"], "statut", [], "any", false, false, false, 66) == "annulée")) {
                // line 67
                yield "                                                <span class=\"badge bg-soft-danger text-danger\">Annulee</span>
                                            ";
            }
            // line 69
            yield "                                        </td>
                                        <td>
                                            <a href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "lienReunion", [], "any", false, false, false, 71), "html", null, true);
            yield "\" target=\"_blank\" class=\"text-primary\">
                                                <i class=\"feather-link me-1\"></i>Rejoindre
                                            </a>
                                        </td>
<td>";
            // line 75
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "groupe", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "groupe", [], "any", false, false, false, 75), "nom", [], "any", false, false, false, 75), "html", null, true)) : ("N/A"));
            yield "</td>
<td>";
            // line 76
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "user", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "user", [], "any", false, false, false, 76), "email", [], "any", false, false, false, 76), "html", null, true)) : ("N/A"));
            yield "</td>
                                        <td>
```plaintext
<span class=\"badge bg-soft-primary text-primary\">--</span>```                                        </td>
                                        <td>
                                            <div class=\"hstack gap-2\">
                                                <a href=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" class=\"avatar-text avatar-md\">
<a href=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\" class=\"avatar-text avatar-md\">
<form method=\"post\" action=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\">
    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 85))), "html", null, true);
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
        // line 93
        if (!$context['_iterated']) {
            // line 94
            yield "                                    <tr>
                                        <td colspan=\"8\" class=\"text-center text-muted py-4\">Aucune session trouvee.</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
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
        return array (  257 => 98,  248 => 94,  246 => 93,  233 => 85,  229 => 84,  225 => 83,  221 => 82,  212 => 76,  208 => 75,  201 => 71,  197 => 69,  193 => 67,  191 => 66,  188 => 65,  186 => 64,  183 => 63,  181 => 62,  178 => 61,  176 => 60,  171 => 58,  167 => 57,  164 => 56,  159 => 55,  134 => 32,  128 => 31,  118 => 27,  113 => 26,  108 => 25,  104 => 24,  93 => 16,  85 => 11,  76 => 4,  63 => 3,  40 => 1,);
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
            <ul class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_dashboard') }}\">Dashboard</a></li>
                <li class=\"breadcrumb-item\">Sessions</li>
            </ul>
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
{% endblock %}", "dashboard/session/index.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\dashboard\\session\\index.html.twig");
    }
}
