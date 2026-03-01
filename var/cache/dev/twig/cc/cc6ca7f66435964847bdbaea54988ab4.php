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

/* session/_table_prof_small.html.twig */
class __TwigTemplate_98589b51e3e775158820f6ae5af02350 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/_table_prof_small.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/_table_prof_small.html.twig"));

        // line 1
        yield "<div class=\"table-responsive shadow-sm\">
    <table class=\"table table-hover table-bordered align-middle\">
        <thead class=\"table-dark text-center\">
            <tr>
                <th>Date & Heure</th>
                <th>Statut</th>
                ";
        // line 7
        if ((array_key_exists("show_note_column", $context) && (isset($context["show_note_column"]) || array_key_exists("show_note_column", $context) ? $context["show_note_column"] : (function () { throw new RuntimeError('Variable "show_note_column" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield "                    <th>Note</th>
                ";
        }
        // line 10
        yield "                <th>Groupe</th>
                ";
        // line 11
        if ((array_key_exists("show_actions", $context) && (isset($context["show_actions"]) || array_key_exists("show_actions", $context) ? $context["show_actions"] : (function () { throw new RuntimeError('Variable "show_actions" does not exist.', 11, $this->source); })()))) {
            // line 12
            yield "                    <th>Actions</th>
                ";
        }
        // line 14
        yield "            </tr>
        </thead>
        <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 18
            yield "                <tr>
                    <td class=\"text-center\">";
            // line 19
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateHeure", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateHeure", [], "any", false, false, false, 19), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</td>
                    <td class=\"text-center\">
                        <span class=\"badge rounded-pill px-3 py-2
                            ";
            // line 22
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "statut", [], "any", false, false, false, 22) == "planifiée")) {
                yield "bg-warning text-dark
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 23
$context["session"], "statut", [], "any", false, false, false, 23) == "en cours")) {
                yield "bg-success text-white
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 24
$context["session"], "statut", [], "any", false, false, false, 24) == "terminée")) {
                yield "bg-secondary text-white
                            ";
            } else {
                // line 25
                yield "bg-danger text-white";
            }
            yield "\">
                            ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["session"], "statut", [], "any", false, false, false, 26)), "html", null, true);
            yield "
                        </span>
                    </td>

                    ";
            // line 30
            if ((array_key_exists("show_note_column", $context) && (isset($context["show_note_column"]) || array_key_exists("show_note_column", $context) ? $context["show_note_column"] : (function () { throw new RuntimeError('Variable "show_note_column" does not exist.', 30, $this->source); })()))) {
                // line 31
                yield "                        <td class=\"text-center\">
                            ";
                // line 32
                $context["rating"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "rating", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "rating", [], "any", false, false, false, 32), 0)) : (0));
                // line 33
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 34
                    yield "                                <i class=\"fa fa-star ";
                    if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 34, $this->source); })()))) {
                        yield "text-warning";
                    } else {
                        yield "text-muted";
                    }
                    yield " fa-sm\"></i>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "                            ";
                if (((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 36, $this->source); })()) == 0)) {
                    yield "<small class=\"text-muted\">(non notée)</small>";
                }
                // line 37
                yield "                        </td>
                    ";
            }
            // line 39
            yield "
                    <td>";
            // line 40
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "group", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "group", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true)) : ("—"));
            yield "</td>

                    ";
            // line 42
            if ((array_key_exists("show_actions", $context) && (isset($context["show_actions"]) || array_key_exists("show_actions", $context) ? $context["show_actions"] : (function () { throw new RuntimeError('Variable "show_actions" does not exist.', 42, $this->source); })()))) {
                // line 43
                yield "                        <td class=\"text-center\">
                            <div class=\"btn-group btn-group-sm\">
                                <!-- Voir -->
                                <a href=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                yield "\" class=\"btn btn-info\" title=\"Voir\">
                                    <i class=\"fa fa-eye\"></i>
                                </a>
                                <!-- Modifier -->
                                <a href=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" class=\"btn btn-warning\" title=\"Modifier\">
                                    <i class=\"fa fa-edit\"></i>
                                </a>
                                <!-- Supprimer -->
                                <form method=\"post\" action=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_session_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" 
                                      onsubmit=\"return confirm('Vraiment supprimer cette session ?');\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 56))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger\" title=\"Supprimer\">
                                        <i class=\"fa fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    ";
            }
            // line 64
            yield "                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 65
        if (!$context['_iterated']) {
            // line 66
            yield "                <tr>
                    <td colspan=\"";
            // line 67
            yield (((($tmp = (isset($context["show_note_column"]) || array_key_exists("show_note_column", $context) ? $context["show_note_column"] : (function () { throw new RuntimeError('Variable "show_note_column" does not exist.', 67, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (5) : (4));
            yield "\" class=\"text-center py-4 text-muted\">
                        <i class=\"fa fa-folder-open fa-2x mb-3 d-block\"></i>
                        Aucune session trouvée
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "        </tbody>
    </table>
</div>

";
        // line 78
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 78, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 78) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 78, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 78))) {
            // line 79
            yield "    <div class=\"d-flex justify-content-center mt-4\">
        ";
            // line 80
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 80, $this->source); })()));
            yield "
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "session/_table_prof_small.html.twig";
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
        return array (  227 => 80,  224 => 79,  222 => 78,  216 => 73,  204 => 67,  201 => 66,  199 => 65,  194 => 64,  183 => 56,  178 => 54,  171 => 50,  164 => 46,  159 => 43,  157 => 42,  152 => 40,  149 => 39,  145 => 37,  140 => 36,  127 => 34,  122 => 33,  120 => 32,  117 => 31,  115 => 30,  108 => 26,  103 => 25,  98 => 24,  94 => 23,  90 => 22,  84 => 19,  81 => 18,  76 => 17,  71 => 14,  67 => 12,  65 => 11,  62 => 10,  58 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive shadow-sm\">
    <table class=\"table table-hover table-bordered align-middle\">
        <thead class=\"table-dark text-center\">
            <tr>
                <th>Date & Heure</th>
                <th>Statut</th>
                {% if show_note_column is defined and show_note_column %}
                    <th>Note</th>
                {% endif %}
                <th>Groupe</th>
                {% if show_actions is defined and show_actions %}
                    <th>Actions</th>
                {% endif %}
            </tr>
        </thead>
        <tbody>
            {% for session in pagination %}
                <tr>
                    <td class=\"text-center\">{{ session.dateHeure ? session.dateHeure|date('d/m/Y H:i') : '—' }}</td>
                    <td class=\"text-center\">
                        <span class=\"badge rounded-pill px-3 py-2
                            {% if session.statut == 'planifiée' %}bg-warning text-dark
                            {% elseif session.statut == 'en cours' %}bg-success text-white
                            {% elseif session.statut == 'terminée' %}bg-secondary text-white
                            {% else %}bg-danger text-white{% endif %}\">
                            {{ session.statut|capitalize }}
                        </span>
                    </td>

                    {% if show_note_column is defined and show_note_column %}
                        <td class=\"text-center\">
                            {% set rating = session.rating|default(0) %}
                            {% for i in 1..5 %}
                                <i class=\"fa fa-star {% if i <= rating %}text-warning{% else %}text-muted{% endif %} fa-sm\"></i>
                            {% endfor %}
                            {% if rating == 0 %}<small class=\"text-muted\">(non notée)</small>{% endif %}
                        </td>
                    {% endif %}

                    <td>{{ session.group ? session.group.nom : '—' }}</td>

                    {% if show_actions is defined and show_actions %}
                        <td class=\"text-center\">
                            <div class=\"btn-group btn-group-sm\">
                                <!-- Voir -->
                                <a href=\"{{ path('prof_session_show', {id: session.id}) }}\" class=\"btn btn-info\" title=\"Voir\">
                                    <i class=\"fa fa-eye\"></i>
                                </a>
                                <!-- Modifier -->
                                <a href=\"{{ path('prof_session_edit', {id: session.id}) }}\" class=\"btn btn-warning\" title=\"Modifier\">
                                    <i class=\"fa fa-edit\"></i>
                                </a>
                                <!-- Supprimer -->
                                <form method=\"post\" action=\"{{ path('prof_session_delete', {id: session.id}) }}\" 
                                      onsubmit=\"return confirm('Vraiment supprimer cette session ?');\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ session.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-danger\" title=\"Supprimer\">
                                        <i class=\"fa fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"{{ show_note_column ? 5 : 4 }}\" class=\"text-center py-4 text-muted\">
                        <i class=\"fa fa-folder-open fa-2x mb-3 d-block\"></i>
                        Aucune session trouvée
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

{# Pagination corrigée #}
{% if pagination.getTotalItemCount > pagination.getItemNumberPerPage %}
    <div class=\"d-flex justify-content-center mt-4\">
        {{ knp_pagination_render(pagination) }}
    </div>
{% endif %}", "session/_table_prof_small.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\session\\_table_prof_small.html.twig");
    }
}
