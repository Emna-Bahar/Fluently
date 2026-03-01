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

/* question/show.html.twig */
class __TwigTemplate_8820cd31f39c045d8c82646f63dc77a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

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

        yield "Détails de la Question - Fluently";
        
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
        <h1 class=\"mb-4\">Détails de la Question #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
        
        <div class=\"card mb-4\">
            <div class=\"card-header bg-info text-white\">
                <h5>Informations de la Question</h5>
            </div>
            <div class=\"card-body\">
                <p><strong>Énoncé :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 14, $this->source); })()), "enonce", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
                <p><strong>Type :</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15), "html", null, true);
        yield "</p>
                <p><strong>Score max :</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 16, $this->source); })()), "scoreMax", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
                <p><strong>Test associé :</strong> ";
        // line 17
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 17, $this->source); })()), "idTest", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 17, $this->source); })()), "idTest", [], "any", false, false, false, 17), "type", [], "any", false, false, false, 17), "html", null, true)) : ("-"));
        yield "</p>
            </div>
        </div>

        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h2>Réponses associées (";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 22, $this->source); })()), "reponses", [], "any", false, false, false, 22)), "html", null, true);
        yield ")</h2>
            <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new");
        yield "?question_id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter une réponse
            </a>
        </div>
        
        <table class=\"table table-bordered table-striped\">
            <thead class=\"table-dark\">
                <tr>
                    <th width=\"5%\">ID</th>
                    <th width=\"35%\">Contenu</th>
                    <th width=\"10%\" class=\"text-center\">Correct ?</th>
                    <th width=\"10%\" class=\"text-center\">Score</th>
                    <th width=\"15%\" class=\"text-center\">Date</th>
                    <th width=\"25%\" class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 40, $this->source); })()), "reponses", [], "any", false, false, false, 40));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 41
            yield "                    <tr>
                        <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                        <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "contenuRep", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">
                            ";
            // line 45
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "isCorrect", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "                                <span class=\"badge bg-success\">✓ Oui</span>
                            ";
            } else {
                // line 48
                yield "                                <span class=\"badge bg-danger\">✗ Non</span>
                            ";
            }
            // line 50
            yield "                        </td>
                        <td class=\"text-center\">
                            <span class=\"badge bg-primary\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "score", [], "any", false, false, false, 52), "html", null, true);
            yield " pts</span>
                        </td>
                        <td class=\"text-center\">
                            ";
            // line 55
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 55), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "
                        </td>
                        <td class=\"text-center\">
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" 
                                   class=\"btn btn-sm btn-info\" 
                                   title=\"Voir les détails\">
                                    <i class=\"fas fa-eye\"></i> Voir
                                </a>
                                <a href=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\" 
                                   class=\"btn btn-sm btn-warning\" 
                                   title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <form method=\"post\" 
                                      action=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" 
                                      style=\"display:inline-block;\" 
                                      onsubmit=\"return confirm('⚠️ Êtes-vous sûr de vouloir supprimer cette réponse ?\\n\\nContenu: ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "contenuRep", [], "any", false, false, false, 72), 0, 50), "html", null, true);
            yield "...');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 73))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" 
                                            class=\"btn btn-sm btn-danger\" 
                                            title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i> Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 83
        if (!$context['_iterated']) {
            // line 84
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center text-muted py-4\">
                            <i class=\"fas fa-inbox fa-3x mb-3 d-block\"></i>
                            <p class=\"mb-0\">Aucune réponse pour cette question</p>
                            <a href=\"";
            // line 88
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new");
            yield "?question_id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88), "html", null, true);
            yield "\" class=\"btn btn-success btn-sm mt-2\">
                                <i class=\"fas fa-plus\"></i> Ajouter la première réponse
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "            </tbody>
        </table>

        <div class=\"alert alert-info mt-4\">
            <i class=\"fas fa-info-circle\"></i> 
            <strong>Astuce :</strong> Au moins une réponse doit être marquée comme correcte. Le score de cette réponse sera attribué à l'étudiant s'il la sélectionne.
        </div>

        <div class=\"mt-4\">
            <a href=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                <i class=\"fas fa-edit\"></i> Modifier la question
            </a>
            <a href=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 106, $this->source); })()), "idTest", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour au test
            </a>
            <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-list\"></i> Liste des questions
            </a>
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
        return "question/show.html.twig";
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
        return array (  289 => 109,  283 => 106,  277 => 103,  266 => 94,  252 => 88,  246 => 84,  244 => 83,  229 => 73,  225 => 72,  220 => 70,  211 => 64,  203 => 59,  196 => 55,  190 => 52,  186 => 50,  182 => 48,  178 => 46,  176 => 45,  171 => 43,  167 => 42,  164 => 41,  159 => 40,  137 => 23,  133 => 22,  125 => 17,  121 => 16,  117 => 15,  113 => 14,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Détails de la Question - Fluently{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Détails de la Question #{{ question.id }}</h1>
        
        <div class=\"card mb-4\">
            <div class=\"card-header bg-info text-white\">
                <h5>Informations de la Question</h5>
            </div>
            <div class=\"card-body\">
                <p><strong>Énoncé :</strong> {{ question.enonce }}</p>
                <p><strong>Type :</strong> {{ question.type }}</p>
                <p><strong>Score max :</strong> {{ question.scoreMax }}</p>
                <p><strong>Test associé :</strong> {{ question.idTest ? question.idTest.type : '-' }}</p>
            </div>
        </div>

        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h2>Réponses associées ({{ question.reponses|length }})</h2>
            <a href=\"{{ path('app_reponse_new') }}?question_id={{ question.id }}\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter une réponse
            </a>
        </div>
        
        <table class=\"table table-bordered table-striped\">
            <thead class=\"table-dark\">
                <tr>
                    <th width=\"5%\">ID</th>
                    <th width=\"35%\">Contenu</th>
                    <th width=\"10%\" class=\"text-center\">Correct ?</th>
                    <th width=\"10%\" class=\"text-center\">Score</th>
                    <th width=\"15%\" class=\"text-center\">Date</th>
                    <th width=\"25%\" class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for reponse in question.reponses %}
                    <tr>
                        <td>{{ reponse.id }}</td>
                        <td>{{ reponse.contenuRep }}</td>
                        <td class=\"text-center\">
                            {% if reponse.isCorrect %}
                                <span class=\"badge bg-success\">✓ Oui</span>
                            {% else %}
                                <span class=\"badge bg-danger\">✗ Non</span>
                            {% endif %}
                        </td>
                        <td class=\"text-center\">
                            <span class=\"badge bg-primary\">{{ reponse.score }} pts</span>
                        </td>
                        <td class=\"text-center\">
                            {{ reponse.dateReponse ? reponse.dateReponse|date('d/m/Y H:i') : '-' }}
                        </td>
                        <td class=\"text-center\">
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"{{ path('app_reponse_show', {'id': reponse.id}) }}\" 
                                   class=\"btn btn-sm btn-info\" 
                                   title=\"Voir les détails\">
                                    <i class=\"fas fa-eye\"></i> Voir
                                </a>
                                <a href=\"{{ path('app_reponse_edit', {'id': reponse.id}) }}\" 
                                   class=\"btn btn-sm btn-warning\" 
                                   title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <form method=\"post\" 
                                      action=\"{{ path('app_reponse_delete', {'id': reponse.id}) }}\" 
                                      style=\"display:inline-block;\" 
                                      onsubmit=\"return confirm('⚠️ Êtes-vous sûr de vouloir supprimer cette réponse ?\\n\\nContenu: {{ reponse.contenuRep|slice(0, 50) }}...');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reponse.id) }}\">
                                    <button type=\"submit\" 
                                            class=\"btn btn-sm btn-danger\" 
                                            title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i> Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center text-muted py-4\">
                            <i class=\"fas fa-inbox fa-3x mb-3 d-block\"></i>
                            <p class=\"mb-0\">Aucune réponse pour cette question</p>
                            <a href=\"{{ path('app_reponse_new') }}?question_id={{ question.id }}\" class=\"btn btn-success btn-sm mt-2\">
                                <i class=\"fas fa-plus\"></i> Ajouter la première réponse
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <div class=\"alert alert-info mt-4\">
            <i class=\"fas fa-info-circle\"></i> 
            <strong>Astuce :</strong> Au moins une réponse doit être marquée comme correcte. Le score de cette réponse sera attribué à l'étudiant s'il la sélectionne.
        </div>

        <div class=\"mt-4\">
            <a href=\"{{ path('app_question_edit', {'id': question.id}) }}\" class=\"btn btn-warning\">
                <i class=\"fas fa-edit\"></i> Modifier la question
            </a>
            <a href=\"{{ path('app_test_show', {'id': question.idTest.id}) }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour au test
            </a>
            <a href=\"{{ path('app_question_index') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-list\"></i> Liste des questions
            </a>
        </div>
    </div>
{% endblock %}", "question/show.html.twig", "C:\\Users\\emnab\\Documents\\PI\\Fluently\\templates\\question\\show.html.twig");
    }
}
