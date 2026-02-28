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

/* question/index.html.twig */
class __TwigTemplate_4a686d8bb3abc693644d7182a4b835a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

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

        yield "Admin - Gestion des Questions";
        
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
    <div class=\"nxl-content\">

        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Gestion des Questions</h5>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_new");
        yield "\" class=\"btn btn-primary btn-lg\">
                    <i class=\"feather-plus me-2\"></i> Nouvelle question
                </a>
            </div>
        </div>

        <div class=\"main-content\">

            <div class=\"card border-0 shadow-sm\">
                

                <div class=\"card-body p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle mb-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th>ID</th>
                                    <th>Énoncé</th>
                                    <th>Type</th>
                                    <th>Score max</th>
                                    <th>Test associé</th>
                                    <th class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 42
            yield "                                <tr>
                                    <td class=\"fw-medium\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                    <td>";
            // line 44
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 44)) > 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 44), 0, 80) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "enonce", [], "any", false, false, false, 44), "html", null, true)));
            yield "</td>
                                    <td>";
            // line 45
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 45), "html", null, true)) : ("—"));
            yield "</td>
                                    <td class=\"text-center\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "scoreMax", [], "any", false, false, false, 46), "html", null, true);
            yield " pts</td>
                                    <td>
                                        ";
            // line 48
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idTest", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "                                            ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idTest", [], "any", false, false, false, 49), "titre", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idTest", [], "any", false, false, false, 49), "titre", [], "any", false, false, false, 49), "html", null, true)) : ("Sans titre"));
                yield "
                                        ";
            } else {
                // line 51
                yield "                                            —
                                        ";
            }
            // line 53
            yield "                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex gap-2 justify-content-center\">
                                            <a href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-sm btn-outline-info\" 
                                               data-bs-toggle=\"tooltip\" title=\"Voir\">
                                                <i class=\"feather-eye\"></i>
                                            </a>

                                            <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-sm btn-outline-warning\" 
                                               data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                <i class=\"feather-edit-2\"></i>
                                            </a>

                                            <form method=\"post\" action=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" 
                                                  onsubmit=\"return confirm('Confirmer la suppression ?');\" 
                                                  style=\"display: inline;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 71))), "html", null, true);
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
        // line 80
        if (!$context['_iterated']) {
            // line 81
            yield "                                <tr>
                                    <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                        <h5 class=\"mb-3\">Aucune question trouvée</h5>
                                        <a href=\"";
            // line 84
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_new");
            yield "\" class=\"btn btn-primary\">
                                            <i class=\"feather-plus me-2\"></i> Ajouter une question
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
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
        return "question/index.html.twig";
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
        return array (  239 => 90,  227 => 84,  222 => 81,  220 => 80,  206 => 71,  200 => 68,  191 => 62,  182 => 56,  177 => 53,  173 => 51,  167 => 49,  165 => 48,  160 => 46,  156 => 45,  152 => 44,  148 => 43,  145 => 42,  140 => 41,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Admin - Gestion des Questions{% endblock %}

{% block body %}

    <div class=\"nxl-content\">

        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Gestion des Questions</h5>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_question_new') }}\" class=\"btn btn-primary btn-lg\">
                    <i class=\"feather-plus me-2\"></i> Nouvelle question
                </a>
            </div>
        </div>

        <div class=\"main-content\">

            <div class=\"card border-0 shadow-sm\">
                

                <div class=\"card-body p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle mb-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th>ID</th>
                                    <th>Énoncé</th>
                                    <th>Type</th>
                                    <th>Score max</th>
                                    <th>Test associé</th>
                                    <th class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for question in questions %}
                                <tr>
                                    <td class=\"fw-medium\">{{ question.id }}</td>
                                    <td>{{ question.enonce|length > 80 ? question.enonce|slice(0, 80) ~ '...' : question.enonce }}</td>
                                    <td>{{ question.type ?: '—' }}</td>
                                    <td class=\"text-center\">{{ question.scoreMax }} pts</td>
                                    <td>
                                        {% if question.idTest %}
                                            {{ question.idTest.titre ?: 'Sans titre' }}
                                        {% else %}
                                            —
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\">
                                        <div class=\"d-flex gap-2 justify-content-center\">
                                            <a href=\"{{ path('app_question_show', {id: question.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-info\" 
                                               data-bs-toggle=\"tooltip\" title=\"Voir\">
                                                <i class=\"feather-eye\"></i>
                                            </a>

                                            <a href=\"{{ path('app_question_edit', {id: question.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-warning\" 
                                               data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                                <i class=\"feather-edit-2\"></i>
                                            </a>

                                            <form method=\"post\" action=\"{{ path('app_question_delete', {id: question.id}) }}\" 
                                                  onsubmit=\"return confirm('Confirmer la suppression ?');\" 
                                                  style=\"display: inline;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ question.id) }}\">
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
                                        <h5 class=\"mb-3\">Aucune question trouvée</h5>
                                        <a href=\"{{ path('app_question_new') }}\" class=\"btn btn-primary\">
                                            <i class=\"feather-plus me-2\"></i> Ajouter une question
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

{% endblock %}", "question/index.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\question\\index.html.twig");
    }
}
