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

/* test/index.html.twig */
class __TwigTemplate_1c7ad157c7dddb2e5d293fbd1edb91b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

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

        yield "Admin - Gestion des Tests";
        
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
        yield "
    <!-- Contenu principal -->
    <div class=\"nxl-content\">

        <!-- Header de la page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Gestion des Tests</h5>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_new");
        yield "\" class=\"btn btn-primary btn-lg\">
                    <i class=\"feather-plus me-2\"></i> Nouveau test
                </a>
            </div>
        </div>

        <!-- Card principale -->
        <div class=\"main-content\">

            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-bottom\">
                    <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-3\">
                        <h6 class=\"m-0\">Liste des tests</h6>
                        
                        <!-- Filtres -->
                        <form method=\"GET\" class=\"d-flex align-items-center gap-3 flex-wrap\">
                            <!-- Recherche texte -->
                            <div class=\"input-group\" style=\"width: 280px;\">
                                <span class=\"input-group-text bg-white border-end-0\">
                                    <i class=\"feather-search\"></i>
                                </span>
                                <input type=\"text\" 
                                    name=\"search\" 
                                    value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "\" 
                                    class=\"form-control\" 
                                    placeholder=\"Rechercher un test...\">
                            </div>

                            <!-- Filtre par type -->
                            <div class=\"input-group\" style=\"width: 220px;\">
                                <select name=\"type\" class=\"form-select\">
                                    <option value=\"\">Tous les types</option>
                                    <option value=\"Test de niveau\"        ";
        // line 50
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 50, $this->source); })()) == "Test de niveau")) {
            yield "selected";
        }
        yield ">Test de niveau</option>
                                    <option value=\"Test de fin de niveau\" ";
        // line 51
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 51, $this->source); })()) == "Test de fin de niveau")) {
            yield "selected";
        }
        yield ">Test de fin de niveau</option>
                                    <option value=\"quiz_debutant\"         ";
        // line 52
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 52, $this->source); })()) == "quiz_debutant")) {
            yield "selected";
        }
        yield ">Quiz débutant</option>
                                    <!-- Ajoute ici tous les autres types que tu utilises -->
                                </select>
                            </div>

                            <!-- Filtre par langue -->
                            <div class=\"input-group\" style=\"width: 220px;\">
                                <select name=\"langue\" class=\"form-select\">
                                    <option value=\"\">Toutes les langues</option>
                                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["langues"]) || array_key_exists("langues", $context) ? $context["langues"] : (function () { throw new RuntimeError('Variable "langues" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            // line 62
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\" 
                                                ";
            // line 63
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 63) == ((array_key_exists("langueId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["langueId"]) || array_key_exists("langueId", $context) ? $context["langueId"] : (function () { throw new RuntimeError('Variable "langueId" does not exist.', 63, $this->source); })()), 0)) : (0)))) {
                yield "selected";
            }
            // line 64
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "nom", [], "any", false, false, false, 64), "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['langue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                                </select>
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
                                    <th>Titre</th>
                                    <th>Type</th>
                                    <th>Langue</th>
                                    <th>Durée estimée</th>
                                    <th>Questions</th>
                                    <th>Score max</th>
                                    <th>Tentatives</th>
                                    <th class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 94, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 95
            yield "                                <tr>
                                    <td class=\"fw-medium\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
                                    <td class=\"fw-bold\">";
            // line 97
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "titre", [], "any", false, false, false, 97)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "titre", [], "any", false, false, false, 97), "html", null, true)) : ("Sans titre"));
            yield "</td>
                                    <td>
                                        <span class=\"badge bg-primary-subtle text-primary px-3 py-2\">
                                            ";
            // line 100
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 100), "html", null, true)) : ("Non défini"));
            yield "
                                        </span>
                                    </td>
                                    <td>
                                        ";
            // line 104
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["test"], "langue", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "langue", [], "any", false, false, false, 105), "nom", [], "any", false, false, false, 105), "html", null, true);
                yield "
                                        ";
            } else {
                // line 107
                yield "                                            —
                                        ";
            }
            // line 109
            yield "                                    </td>
                                    <td>";
            // line 110
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "dureeEstimee", [], "any", false, false, false, 110)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "dureeEstimee", [], "any", false, false, false, 110), "html", null, true)) : ("—"));
            yield " min</td>
                                    <td class=\"text-center\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["test"], "questions", [], "any", false, false, false, 111)), "html", null, true);
            yield "</td>
                                    <td class=\"text-center\">";
            // line 112
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "scoreMax", [], "any", false, false, false, 112)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "scoreMax", [], "any", false, false, false, 112), "html", null, true)) : ("—"));
            yield " pts</td>
                                    <td class=\"text-center\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["test"], "passages", [], "any", false, false, false, 113)), "html", null, true);
            yield "</td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex gap-2 justify-content-center\">
                                            <a href=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-sm btn-outline-info\" 
                                               data-bs-toggle=\"tooltip\" title=\"Voir\">
                                                <i class=\"feather-eye\"></i>
                                            </a>

                                            <a href=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-sm btn-outline-warning\" 
                                               data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                <i class=\"feather-edit-2\"></i>
                                            </a>

                                            <form method=\"post\" action=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 128)]), "html", null, true);
            yield "\" 
                                                  onsubmit=\"return confirm('Confirmer la suppression de ce test ?');\" 
                                                  style=\"display: inline;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 131))), "html", null, true);
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
        // line 140
        if (!$context['_iterated']) {
            // line 141
            yield "                                <tr>
                                    <td colspan=\"9\" class=\"text-center py-5 text-muted\">
                                        <h5 class=\"mb-3\">Aucun test trouvé</h5>
                                        <a href=\"";
            // line 144
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_new");
            yield "\" class=\"btn btn-primary\">
                                            <i class=\"feather-plus me-2\"></i> Ajouter un test
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['test'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
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
        return "test/index.html.twig";
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
        return array (  345 => 150,  333 => 144,  328 => 141,  326 => 140,  312 => 131,  306 => 128,  297 => 122,  288 => 116,  282 => 113,  278 => 112,  274 => 111,  270 => 110,  267 => 109,  263 => 107,  257 => 105,  255 => 104,  248 => 100,  242 => 97,  238 => 96,  235 => 95,  230 => 94,  201 => 67,  191 => 64,  187 => 63,  182 => 62,  178 => 61,  164 => 52,  158 => 51,  152 => 50,  140 => 41,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Admin - Gestion des Tests{% endblock %}

{% block body %}

    <!-- Contenu principal -->
    <div class=\"nxl-content\">

        <!-- Header de la page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Gestion des Tests</h5>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_test_new') }}\" class=\"btn btn-primary btn-lg\">
                    <i class=\"feather-plus me-2\"></i> Nouveau test
                </a>
            </div>
        </div>

        <!-- Card principale -->
        <div class=\"main-content\">

            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-bottom\">
                    <div class=\"d-flex align-items-center justify-content-between flex-wrap gap-3\">
                        <h6 class=\"m-0\">Liste des tests</h6>
                        
                        <!-- Filtres -->
                        <form method=\"GET\" class=\"d-flex align-items-center gap-3 flex-wrap\">
                            <!-- Recherche texte -->
                            <div class=\"input-group\" style=\"width: 280px;\">
                                <span class=\"input-group-text bg-white border-end-0\">
                                    <i class=\"feather-search\"></i>
                                </span>
                                <input type=\"text\" 
                                    name=\"search\" 
                                    value=\"{{ search }}\" 
                                    class=\"form-control\" 
                                    placeholder=\"Rechercher un test...\">
                            </div>

                            <!-- Filtre par type -->
                            <div class=\"input-group\" style=\"width: 220px;\">
                                <select name=\"type\" class=\"form-select\">
                                    <option value=\"\">Tous les types</option>
                                    <option value=\"Test de niveau\"        {% if type == 'Test de niveau'        %}selected{% endif %}>Test de niveau</option>
                                    <option value=\"Test de fin de niveau\" {% if type == 'Test de fin de niveau' %}selected{% endif %}>Test de fin de niveau</option>
                                    <option value=\"quiz_debutant\"         {% if type == 'quiz_debutant'         %}selected{% endif %}>Quiz débutant</option>
                                    <!-- Ajoute ici tous les autres types que tu utilises -->
                                </select>
                            </div>

                            <!-- Filtre par langue -->
                            <div class=\"input-group\" style=\"width: 220px;\">
                                <select name=\"langue\" class=\"form-select\">
                                    <option value=\"\">Toutes les langues</option>
                                    {% for langue in langues %}
                                        <option value=\"{{ langue.id }}\" 
                                                {% if langue.id == langueId|default(0) %}selected{% endif %}
                                            {{ langue.nom }}
                                        </option>
                                    {% endfor %}
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
                                    <th>Titre</th>
                                    <th>Type</th>
                                    <th>Langue</th>
                                    <th>Durée estimée</th>
                                    <th>Questions</th>
                                    <th>Score max</th>
                                    <th>Tentatives</th>
                                    <th class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for test in tests %}
                                <tr>
                                    <td class=\"fw-medium\">{{ test.id }}</td>
                                    <td class=\"fw-bold\">{{ test.titre ?: 'Sans titre' }}</td>
                                    <td>
                                        <span class=\"badge bg-primary-subtle text-primary px-3 py-2\">
                                            {{ test.type ?: 'Non défini' }}
                                        </span>
                                    </td>
                                    <td>
                                        {% if test.langue %}
                                            {{ test.langue.nom }}
                                        {% else %}
                                            —
                                        {% endif %}
                                    </td>
                                    <td>{{ test.dureeEstimee ?: '—' }} min</td>
                                    <td class=\"text-center\">{{ test.questions|length }}</td>
                                    <td class=\"text-center\">{{ test.scoreMax ?: '—' }} pts</td>
                                    <td class=\"text-center\">{{ test.passages|length }}</td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex gap-2 justify-content-center\">
                                            <a href=\"{{ path('app_test_show', {id: test.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-info\" 
                                               data-bs-toggle=\"tooltip\" title=\"Voir\">
                                                <i class=\"feather-eye\"></i>
                                            </a>

                                            <a href=\"{{ path('app_test_edit', {id: test.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-warning\" 
                                               data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                <i class=\"feather-edit-2\"></i>
                                            </a>

                                            <form method=\"post\" action=\"{{ path('app_test_delete', {id: test.id}) }}\" 
                                                  onsubmit=\"return confirm('Confirmer la suppression de ce test ?');\" 
                                                  style=\"display: inline;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ test.id) }}\">
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
                                    <td colspan=\"9\" class=\"text-center py-5 text-muted\">
                                        <h5 class=\"mb-3\">Aucun test trouvé</h5>
                                        <a href=\"{{ path('app_test_new') }}\" class=\"btn btn-primary\">
                                            <i class=\"feather-plus me-2\"></i> Ajouter un test
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

{% endblock %}", "test/index.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\test\\index.html.twig");
    }
}
