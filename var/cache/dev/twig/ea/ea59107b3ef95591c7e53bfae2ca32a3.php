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

/* langue/index_admin.html.twig */
class __TwigTemplate_704af6787b4f7dd1f00b0bface278731 extends Template
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
        return "dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/index_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/index_admin.html.twig"));

        $this->parent = $this->load("dashboard/index.html.twig", 1);
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

        yield "Admin - Gestion des langues";
        
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
        yield "    <div class=\"nxl-content\">
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Gestion des Langues</h5>
                    
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_new");
        yield "\" class=\"btn btn-primary btn-lg\">
                    <i class=\"feather-plus me-2\"></i> Nouvelle langue
                </a>
            </div>
        </div>
        <div class=\"main-content\">

            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-bottom\">
                    <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-3\">
                        <h6 class=\"m-0\">Liste des langues</h6>
                        <!-- Filtres -->
                        <form method=\"GET\" class=\"d-flex align-items-center gap-3 flex-wrap\">
                            <div class=\"input-group\" style=\"width: 280px;\">
                                <span class=\"input-group-text bg-white border-end-0\">
                                    <i class=\"feather-search\"></i>
                                </span>
                                <input type=\"text\" name=\"search\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "query", [], "any", false, false, false, 32), "get", ["search"], "method", false, false, false, 32), "html", null, true);
        yield "\" 
                                       class=\"form-control\" placeholder=\"Rechercher une langue...\">
                            </div>

                            <div class=\"input-group\" style=\"width: 180px;\">
                                <select name=\"active\" class=\"form-select\">
                                    <option value=\"\">Tous les statuts</option>
                                    <option value=\"1\" ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "query", [], "any", false, false, false, 39), "get", ["active"], "method", false, false, false, 39) == "1")) {
            yield "selected";
        }
        yield ">Actives</option>
                                    <option value=\"0\" ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "query", [], "any", false, false, false, 40), "get", ["active"], "method", false, false, false, 40) == "0")) {
            yield "selected";
        }
        yield ">Inactives</option>
                                </select>
                            </div>

                            <button type=\"submit\" class=\"btn btn-outline-primary\">
                                <i class=\"feather-filter me-2\"></i> Filtrer
                            </button>
                        </form>
                    </div>
                </div>

                <div class=\"card-body p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle mb-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th class=\"text-center\">Drapeau</th>
                                    <th>Popularité</th>
                                    <th class=\"text-center\">Active</th>
                                    <th class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["langues"]) || array_key_exists("langues", $context) ? $context["langues"] : (function () { throw new RuntimeError('Variable "langues" does not exist.', 65, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            // line 66
            yield "                                <tr>
                                    <td class=\"fw-medium\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                                    <td class=\"fw-bold\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "nom", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                                    <td class=\"text-center\">
                                        ";
            // line 70
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "drapeau", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/langues/" . CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "drapeau", [], "any", false, false, false, 71))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "nom", [], "any", false, false, false, 72), "html", null, true);
                yield "\" 
                                                 class=\"rounded\" 
                                                 style=\"width: 60px; height: 40px; object-fit: cover; border: 1px solid #dee2e6;\">
                                        ";
            } else {
                // line 76
                yield "                                            <span class=\"text-muted\">—</span>
                                        ";
            }
            // line 78
            yield "                                    </td>
                                    <td>";
            // line 79
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "popularite", [], "any", false, false, false, 79)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "popularite", [], "any", false, false, false, 79), "html", null, true)) : ("—"));
            yield "</td>
                                    <td class=\"text-center\">
                                        ";
            // line 81
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "isActive", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "                                            <span class=\"badge bg-success-subtle text-success px-3 py-2\">Oui</span>
                                        ";
            } else {
                // line 84
                yield "                                            <span class=\"badge bg-danger-subtle text-danger px-3 py-2\">Non</span>
                                        ";
            }
            // line 86
            yield "                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex gap-2 justify-content-center\">
                                            <a href=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-sm btn-outline-info\" 
                                               data-bs-toggle=\"tooltip\" title=\"Voir\">
                                                <i class=\"feather-eye\"></i>
                                            </a>

                                            <a href=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-sm btn-outline-warning\" 
                                               data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                <i class=\"feather-edit-2\"></i>
                                            </a>

                                            <form method=\"post\" action=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" 
                                                  onsubmit=\"return confirm('Confirmer la suppression de cette langue ?');\" 
                                                  style=\"display: inline;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 104))), "html", null, true);
            yield "\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\"
                                                        data-bs-toggle=\"tooltip\" title=\"Supprimer\">
                                                    <i class=\"feather-trash-2\"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 113
        if (!$context['_iterated']) {
            // line 114
            yield "                                <tr>
                                    <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                        <h5 class=\"mb-3\">Aucune langue trouvée</h5>
                                        <a href=\"";
            // line 117
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_new");
            yield "\" class=\"btn btn-primary\">
                                            <i class=\"feather-plus me-2\"></i> Ajouter une langue
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['langue'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                            </tbody>
                        </table>
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
        return "langue/index_admin.html.twig";
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
        return array (  292 => 123,  280 => 117,  275 => 114,  273 => 113,  259 => 104,  253 => 101,  244 => 95,  235 => 89,  230 => 86,  226 => 84,  222 => 82,  220 => 81,  215 => 79,  212 => 78,  208 => 76,  201 => 72,  196 => 71,  194 => 70,  189 => 68,  185 => 67,  182 => 66,  177 => 65,  147 => 40,  141 => 39,  131 => 32,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}  

{% block title %}Admin - Gestion des langues{% endblock %}

{% block body %}
    <div class=\"nxl-content\">
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Gestion des Langues</h5>
                    
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_admin_langue_new') }}\" class=\"btn btn-primary btn-lg\">
                    <i class=\"feather-plus me-2\"></i> Nouvelle langue
                </a>
            </div>
        </div>
        <div class=\"main-content\">

            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-bottom\">
                    <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-3\">
                        <h6 class=\"m-0\">Liste des langues</h6>
                        <!-- Filtres -->
                        <form method=\"GET\" class=\"d-flex align-items-center gap-3 flex-wrap\">
                            <div class=\"input-group\" style=\"width: 280px;\">
                                <span class=\"input-group-text bg-white border-end-0\">
                                    <i class=\"feather-search\"></i>
                                </span>
                                <input type=\"text\" name=\"search\" value=\"{{ app.request.query.get('search') }}\" 
                                       class=\"form-control\" placeholder=\"Rechercher une langue...\">
                            </div>

                            <div class=\"input-group\" style=\"width: 180px;\">
                                <select name=\"active\" class=\"form-select\">
                                    <option value=\"\">Tous les statuts</option>
                                    <option value=\"1\" {% if app.request.query.get('active') == '1' %}selected{% endif %}>Actives</option>
                                    <option value=\"0\" {% if app.request.query.get('active') == '0' %}selected{% endif %}>Inactives</option>
                                </select>
                            </div>

                            <button type=\"submit\" class=\"btn btn-outline-primary\">
                                <i class=\"feather-filter me-2\"></i> Filtrer
                            </button>
                        </form>
                    </div>
                </div>

                <div class=\"card-body p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle mb-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th class=\"text-center\">Drapeau</th>
                                    <th>Popularité</th>
                                    <th class=\"text-center\">Active</th>
                                    <th class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for langue in langues %}
                                <tr>
                                    <td class=\"fw-medium\">{{ langue.id }}</td>
                                    <td class=\"fw-bold\">{{ langue.nom }}</td>
                                    <td class=\"text-center\">
                                        {% if langue.drapeau %}
                                            <img src=\"{{ asset('uploads/langues/' ~ langue.drapeau) }}\" 
                                                 alt=\"{{ langue.nom }}\" 
                                                 class=\"rounded\" 
                                                 style=\"width: 60px; height: 40px; object-fit: cover; border: 1px solid #dee2e6;\">
                                        {% else %}
                                            <span class=\"text-muted\">—</span>
                                        {% endif %}
                                    </td>
                                    <td>{{ langue.popularite ?: '—' }}</td>
                                    <td class=\"text-center\">
                                        {% if langue.isActive %}
                                            <span class=\"badge bg-success-subtle text-success px-3 py-2\">Oui</span>
                                        {% else %}
                                            <span class=\"badge bg-danger-subtle text-danger px-3 py-2\">Non</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex gap-2 justify-content-center\">
                                            <a href=\"{{ path('app_langue_show', {'id': langue.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-info\" 
                                               data-bs-toggle=\"tooltip\" title=\"Voir\">
                                                <i class=\"feather-eye\"></i>
                                            </a>

                                            <a href=\"{{ path('app_admin_langue_edit', {'id': langue.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-warning\" 
                                               data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                <i class=\"feather-edit-2\"></i>
                                            </a>

                                            <form method=\"post\" action=\"{{ path('app_admin_langue_delete', {'id': langue.id}) }}\" 
                                                  onsubmit=\"return confirm('Confirmer la suppression de cette langue ?');\" 
                                                  style=\"display: inline;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ langue.id) }}\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\"
                                                        data-bs-toggle=\"tooltip\" title=\"Supprimer\">
                                                    <i class=\"feather-trash-2\"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                        <h5 class=\"mb-3\">Aucune langue trouvée</h5>
                                        <a href=\"{{ path('app_admin_langue_new') }}\" class=\"btn btn-primary\">
                                            <i class=\"feather-plus me-2\"></i> Ajouter une langue
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

{% endblock %}", "langue/index_admin.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\langue\\index_admin.html.twig");
    }
}
