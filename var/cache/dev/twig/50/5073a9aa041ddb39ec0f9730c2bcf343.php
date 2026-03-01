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

/* session/professeur.html.twig */
class __TwigTemplate_f9ed410ca3c4997ebc412329fe2ffdca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/professeur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/professeur.html.twig"));

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

        yield "Session - Espace Professeur";
        
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
        yield "    <div class=\"container mt-5 pt-5\">
        <h1 class=\"text-center fw-bold text-primary mb-5\">
            <i class=\"fa fa-chalkboard-teacher me-2\"></i> 
            Espace Professeur - Gestion des Sessions
        </h1>

        <div class=\"mb-4 text-end\">
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_new");
        yield "\" class=\"btn btn-success btn-lg shadow\">
                <i class=\"fa fa-plus me-2\"></i> Créer une nouvelle session
            </a>
        </div>

        <div class=\"mb-4 text-end\">
            ";
        // line 20
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_professeur");
        yield "\" class=\"btn btn-primary btn-lg shadow\">
                <i class=\"fa fa-cog me-2\"></i> Gérer les réservations
            </a>
        </div>

        <div class=\"card shadow mb-4\">
            <div class=\"card-body\">
                <table class=\"table table-hover table-bordered align-middle\">
                    <thead class=\"table-dark text-center\">
                        <tr>
                            <th>Date & Heure</th>
                            <th>Statut</th>
                            <th>Note</th>
                            <th>Groupe</th>
                            <th>Réunion</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 40
            yield "                            <tr>
                                <td class=\"text-center\">";
            // line 41
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateHeure", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateHeure", [], "any", false, false, false, 41), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</td>
                                <td class=\"text-center\">
                                    <span class=\"badge fs-6 px-3 py-2
                                        ";
            // line 44
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "statut", [], "any", false, false, false, 44) == "planifiée")) {
                yield "bg-warning text-dark
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 45
$context["session"], "statut", [], "any", false, false, false, 45) == "en cours")) {
                yield "bg-success text-white
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 46
$context["session"], "statut", [], "any", false, false, false, 46) == "terminée")) {
                yield "bg-secondary text-white
                                        ";
            } else {
                // line 47
                yield "bg-danger text-white";
            }
            yield "\">
                                        ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["session"], "statut", [], "any", false, false, false, 48)), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    ";
            // line 52
            $context["rating"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "rating", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "rating", [], "any", false, false, false, 52), 0)) : (0));
            // line 53
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 54
                yield "                                        <i class=\"fa fa-star ";
                if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 54, $this->source); })()))) {
                    yield "text-warning";
                } else {
                    yield "text-muted";
                }
                yield "\"></i>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                                    ";
            if (((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 56, $this->source); })()) == 0)) {
                // line 57
                yield "                                        <span class=\"text-muted ms-2 small\">(non notée)</span>
                                    ";
            }
            // line 59
            yield "                                </td>
                                <td>";
            // line 60
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "group", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "group", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true)) : ("—"));
            yield "</td>
                                <td class=\"text-center\">
                                    ";
            // line 62
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "lienReunion", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "lienReunion", [], "any", false, false, false, 63), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-sm btn-info\">
                                            <i class=\"fa fa-video me-1\"></i> Rejoindre
                                        </a>
                                    ";
            } else {
                // line 67
                yield "                                        —
                                    ";
            }
            // line 69
            yield "                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\" class=\"btn btn-info\">
                                            <i class=\"fa fa-eye\"></i> Voir
                                        </a>
                                        <a href=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">
                                            <i class=\"fa fa-edit\"></i> Modifier
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_session_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\" 
                                              onsubmit=\"return confirm('Vraiment supprimer cette session ?');\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 80))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger\">
                                                <i class=\"fa fa-trash\"></i> Supprimer
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
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5 text-muted fs-5\">
                                    <i class=\"fa fa-folder-open fa-2x mb-3 d-block\"></i>
                                    Aucune session trouvée
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"d-flex justify-content-center mt-4\">
            ";
        // line 102
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 102, $this->source); })()));
        yield "
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
        return "session/professeur.html.twig";
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
        return array (  286 => 102,  278 => 96,  266 => 89,  264 => 88,  251 => 80,  246 => 78,  240 => 75,  234 => 72,  229 => 69,  225 => 67,  217 => 63,  215 => 62,  210 => 60,  207 => 59,  203 => 57,  200 => 56,  187 => 54,  182 => 53,  180 => 52,  173 => 48,  168 => 47,  163 => 46,  159 => 45,  155 => 44,  149 => 41,  146 => 40,  141 => 39,  118 => 20,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Session - Espace Professeur{% endblock %}

{% block body %}
    <div class=\"container mt-5 pt-5\">
        <h1 class=\"text-center fw-bold text-primary mb-5\">
            <i class=\"fa fa-chalkboard-teacher me-2\"></i> 
            Espace Professeur - Gestion des Sessions
        </h1>

        <div class=\"mb-4 text-end\">
            <a href=\"{{ path('app_session_new') }}\" class=\"btn btn-success btn-lg shadow\">
                <i class=\"fa fa-plus me-2\"></i> Créer une nouvelle session
            </a>
        </div>

        <div class=\"mb-4 text-end\">
            {# ✅ CORRIGÉ : pointe vers la vue professeur des réservations #}
            <a href=\"{{ path('reservation_professeur') }}\" class=\"btn btn-primary btn-lg shadow\">
                <i class=\"fa fa-cog me-2\"></i> Gérer les réservations
            </a>
        </div>

        <div class=\"card shadow mb-4\">
            <div class=\"card-body\">
                <table class=\"table table-hover table-bordered align-middle\">
                    <thead class=\"table-dark text-center\">
                        <tr>
                            <th>Date & Heure</th>
                            <th>Statut</th>
                            <th>Note</th>
                            <th>Groupe</th>
                            <th>Réunion</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for session in pagination %}
                            <tr>
                                <td class=\"text-center\">{{ session.dateHeure ? session.dateHeure|date('d/m/Y H:i') : '—' }}</td>
                                <td class=\"text-center\">
                                    <span class=\"badge fs-6 px-3 py-2
                                        {% if session.statut == 'planifiée' %}bg-warning text-dark
                                        {% elseif session.statut == 'en cours' %}bg-success text-white
                                        {% elseif session.statut == 'terminée' %}bg-secondary text-white
                                        {% else %}bg-danger text-white{% endif %}\">
                                        {{ session.statut|capitalize }}
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    {% set rating = session.rating|default(0) %}
                                    {% for i in 1..5 %}
                                        <i class=\"fa fa-star {% if i <= rating %}text-warning{% else %}text-muted{% endif %}\"></i>
                                    {% endfor %}
                                    {% if rating == 0 %}
                                        <span class=\"text-muted ms-2 small\">(non notée)</span>
                                    {% endif %}
                                </td>
                                <td>{{ session.group ? session.group.nom : '—' }}</td>
                                <td class=\"text-center\">
                                    {% if session.lienReunion %}
                                        <a href=\"{{ session.lienReunion }}\" target=\"_blank\" class=\"btn btn-sm btn-info\">
                                            <i class=\"fa fa-video me-1\"></i> Rejoindre
                                        </a>
                                    {% else %}
                                        —
                                    {% endif %}
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('prof_session_show', {'id': session.id}) }}\" class=\"btn btn-info\">
                                            <i class=\"fa fa-eye\"></i> Voir
                                        </a>
                                        <a href=\"{{ path('prof_session_edit', {'id': session.id}) }}\" class=\"btn btn-warning\">
                                            <i class=\"fa fa-edit\"></i> Modifier
                                        </a>
                                        <form method=\"post\" action=\"{{ path('prof_session_delete', {'id': session.id}) }}\" 
                                              onsubmit=\"return confirm('Vraiment supprimer cette session ?');\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ session.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-danger\">
                                                <i class=\"fa fa-trash\"></i> Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5 text-muted fs-5\">
                                    <i class=\"fa fa-folder-open fa-2x mb-3 d-block\"></i>
                                    Aucune session trouvée
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"d-flex justify-content-center mt-4\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>
{% endblock %}", "session/professeur.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\session\\professeur.html.twig");
    }
}
