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

/* test/show.html.twig */
class __TwigTemplate_5892c1f03b0ab8cac520804fd87f5e3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/show.html.twig"));

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

        yield "Détails du Test #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " - Fluently";
        
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
        yield "    <div class=\"container mt-5\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1>Détails du Test #";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>
            <div>
                <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" class=\"btn btn-warning me-2\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
                <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
            </div>
        </div>

        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header bg-info text-white\">
                <h5>Informations générales</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p><strong>Titre :</strong> ";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26), "html", null, true)) : ("Sans titre"));
        yield "</p>
                        <p><strong>Type :</strong> ";
        // line 27
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 27, $this->source); })()), "type", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 27, $this->source); })()), "type", [], "any", false, false, false, 27), "html", null, true)) : ("Non défini"));
        yield "</p>
                        <p><strong>Langue :</strong> 
                            ";
        // line 29
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 29, $this->source); })()), "langue", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                                <span class=\"badge bg-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 30, $this->source); })()), "langue", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
            yield "</span>
                            ";
        } else {
            // line 32
            yield "                                —
                            ";
        }
        // line 34
        yield "                        </p>
                    </div>
                    <div class=\"col-md-6\">
                        <p><strong>Durée estimée :</strong> 
                            ";
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 38, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 39, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 39), "html", null, true);
            yield " minutes
                            ";
        } else {
            // line 41
            yield "                                —
                            ";
        }
        // line 43
        yield "                        </p>
                        <p><strong>Nombre de questions :</strong> 
                            <span class=\"badge bg-secondary\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 45, $this->source); })()), "questions", [], "any", false, false, false, 45)), "html", null, true);
        yield "</span>
                        </p>
                        <p><strong>Score maximum possible :</strong> 
                            <span class=\"badge bg-dark\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 48, $this->source); })()), "scoreMax", [], "any", false, false, false, 48), "html", null, true);
        yield " points</span>
                        </p>
                        <p><strong>Tentatives enregistrées :</strong> 
                            <span class=\"badge bg-warning text-dark\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 51, $this->source); })()), "passages", [], "any", false, false, false, 51)), "html", null, true);
        yield "</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                <h5>Questions associées (";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 60, $this->source); })()), "questions", [], "any", false, false, false, 60)), "html", null, true);
        yield ")</h5>
                <a href=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_new", ["test_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
        yield "\" class=\"btn btn-light btn-sm\">
                    <i class=\"fas fa-plus\"></i> Ajouter une question
                </a>
            </div>
            <div class=\"card-body p-0\">
                ";
        // line 66
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 66, $this->source); })()), "questions", [], "any", false, false, false, 66)) > 0)) {
            // line 67
            yield "                    <table class=\"table table-hover mb-0\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>ID</th>
                                <th>Énoncé</th>
                                <th>Type</th>
                                <th>Score max</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 78, $this->source); })()), "questions", [], "any", false, false, false, 78));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 79
                yield "                                <tr>
                                    <td>";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 80), "html", null, true);
                yield "</td>
                                    <td>";
                // line 81
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 81)) > 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 81), 0, 80) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 81), "html", null, true)));
                yield "</td>
                                    <td>";
                // line 82
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 82)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 82), "html", null, true)) : ("-"));
                yield "</td>
                                    <td>";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "scoreMax", [], "any", false, false, false, 83), "html", null, true);
                yield " pts</td>
                                    <td>
                                        <a href=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-sm btn-info\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 89)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-sm btn-warning\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            yield "                        </tbody>
                    </table>
                ";
        } else {
            // line 99
            yield "                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-question-circle fa-3x text-muted mb-3\"></i>
                        <p class=\"lead\">Aucune question pour ce test pour le moment.</p>
                        <a href=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_new", ["test_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus me-2\"></i> Ajouter la première question
                        </a>
                    </div>
                ";
        }
        // line 107
        yield "            </div>
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
        return "test/show.html.twig";
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
        return array (  289 => 107,  281 => 102,  276 => 99,  271 => 96,  258 => 89,  251 => 85,  246 => 83,  242 => 82,  238 => 81,  234 => 80,  231 => 79,  227 => 78,  214 => 67,  212 => 66,  204 => 61,  200 => 60,  188 => 51,  182 => 48,  176 => 45,  172 => 43,  168 => 41,  162 => 39,  160 => 38,  154 => 34,  150 => 32,  144 => 30,  142 => 29,  137 => 27,  133 => 26,  117 => 13,  111 => 10,  106 => 8,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Détails du Test #{{ test.id }} - Fluently{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1>Détails du Test #{{ test.id }}</h1>
            <div>
                <a href=\"{{ path('app_test_edit', {'id': test.id}) }}\" class=\"btn btn-warning me-2\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
                <a href=\"{{ path('app_test_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
            </div>
        </div>

        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header bg-info text-white\">
                <h5>Informations générales</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p><strong>Titre :</strong> {{ test.titre ?: 'Sans titre' }}</p>
                        <p><strong>Type :</strong> {{ test.type ?: 'Non défini' }}</p>
                        <p><strong>Langue :</strong> 
                            {% if test.langue %}
                                <span class=\"badge bg-info\">{{ test.langue.nom }}</span>
                            {% else %}
                                —
                            {% endif %}
                        </p>
                    </div>
                    <div class=\"col-md-6\">
                        <p><strong>Durée estimée :</strong> 
                            {% if test.dureeEstimee %}
                                {{ test.dureeEstimee }} minutes
                            {% else %}
                                —
                            {% endif %}
                        </p>
                        <p><strong>Nombre de questions :</strong> 
                            <span class=\"badge bg-secondary\">{{ test.questions|length }}</span>
                        </p>
                        <p><strong>Score maximum possible :</strong> 
                            <span class=\"badge bg-dark\">{{ test.scoreMax }} points</span>
                        </p>
                        <p><strong>Tentatives enregistrées :</strong> 
                            <span class=\"badge bg-warning text-dark\">{{ test.passages|length }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                <h5>Questions associées ({{ test.questions|length }})</h5>
                <a href=\"{{ path('app_question_new', {'test_id': test.id}) }}\" class=\"btn btn-light btn-sm\">
                    <i class=\"fas fa-plus\"></i> Ajouter une question
                </a>
            </div>
            <div class=\"card-body p-0\">
                {% if test.questions|length > 0 %}
                    <table class=\"table table-hover mb-0\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>ID</th>
                                <th>Énoncé</th>
                                <th>Type</th>
                                <th>Score max</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for question in test.questions %}
                                <tr>
                                    <td>{{ question.id }}</td>
                                    <td>{{ question.enonce|length > 80 ? question.enonce|slice(0, 80) ~ '...' : question.enonce }}</td>
                                    <td>{{ question.type ?: '-' }}</td>
                                    <td>{{ question.scoreMax }} pts</td>
                                    <td>
                                        <a href=\"{{ path('app_question_show', {'id': question.id}) }}\" 
                                           class=\"btn btn-sm btn-info\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_question_edit', {'id': question.id}) }}\" 
                                           class=\"btn btn-sm btn-warning\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                {% else %}
                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-question-circle fa-3x text-muted mb-3\"></i>
                        <p class=\"lead\">Aucune question pour ce test pour le moment.</p>
                        <a href=\"{{ path('app_question_new', {'test_id': test.id}) }}\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus me-2\"></i> Ajouter la première question
                        </a>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}", "test/show.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\test\\show.html.twig");
    }
}
