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

/* session/show.html.twig */
class __TwigTemplate_f3d5a69a10e3ee10718086df3568cd48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/show.html.twig"));

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

        yield "Session #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
        <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-header bg-gradient-primary text-white text-center py-4\">
                <h2 class=\"mb-0\">
                    <i class=\"fa fa-info-circle me-2\"></i>
                    Détails de la Session #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "
                </h2>
            </div>

            <div class=\"card-body p-5\">
                <dl class=\"row g-4\">
                    <dt class=\"col-sm-4 fw-bold\">Date et heure</dt>
                    <dd class=\"col-sm-8\">";
        // line 18
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 18, $this->source); })()), "dateHeure", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 18, $this->source); })()), "dateHeure", [], "any", false, false, false, 18), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</dd>

                    <dt class=\"col-sm-4 fw-bold\">Statut</dt>
                    <dd class=\"col-sm-8\">
                        <span class=\"badge fs-5 px-4 py-2
                            ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 23, $this->source); })()), "statut", [], "any", false, false, false, 23) == "planifiée")) {
            yield "bg-warning text-dark
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 24, $this->source); })()), "statut", [], "any", false, false, false, 24) == "en cours")) {
            yield "bg-success text-white
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 25, $this->source); })()), "statut", [], "any", false, false, false, 25) == "terminée")) {
            yield "bg-secondary text-white
                            ";
        } else {
            // line 26
            yield "bg-danger text-white";
        }
        yield "\">
                            ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 27, $this->source); })()), "statut", [], "any", false, false, false, 27)), "html", null, true);
        yield "
                        </span>
                    </dd>

                    <dt class=\"col-sm-4 fw-bold\">Groupe</dt>
                    <dd class=\"col-sm-8\">";
        // line 32
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 32, $this->source); })()), "group", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 32, $this->source); })()), "group", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true)) : ("-"));
        yield "</dd>

                    <dt class=\"col-sm-4 fw-bold\">Lien de réunion</dt>
                    <dd class=\"col-sm-8\">
                        ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 36, $this->source); })()), "lienReunion", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 37, $this->source); })()), "lienReunion", [], "any", false, false, false, 37), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-success btn-lg\">
                                <i class=\"fa fa-video me-2\"></i> Rejoindre la réunion
                            </a>
                        ";
        } else {
            // line 41
            yield "                            -
                        ";
        }
        // line 43
        yield "                    </dd>

                    <dt class=\"col-sm-4 fw-bold\">Professeur</dt>
                    <dd class=\"col-sm-8\">";
        // line 46
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "prenom", [], "any", false, false, false, 46) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "nom", [], "any", false, false, false, 46)), "html", null, true)) : ("-"));
        yield "</dd>

                    <dt class=\"col-sm-4 fw-bold\">Note</dt>
                    <dd class=\"col-sm-8\">
                        ";
        // line 50
        $context["rating"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "rating", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 50, $this->source); })()), "rating", [], "any", false, false, false, 50), 0)) : (0));
        // line 51
        yield "                        <div class=\"star-rating\">
                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 53
            yield "                                <i class=\"fa fa-star fa-2x ";
            if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 53, $this->source); })()))) {
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
        // line 55
        yield "                            ";
        if (((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 55, $this->source); })()) == 0)) {
            // line 56
            yield "                                <span class=\"ms-3 text-muted\">(non notée)</span>
                            ";
        } else {
            // line 58
            yield "                                <span class=\"ms-3 text-muted\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "/5)</span>
                            ";
        }
        // line 60
        yield "                        </div>
                    </dd>
                </dl>
            </div>

            <div class=\"card-footer bg-light text-center py-4\">
                <div class=\"btn-group btn-group-lg\">
                    ";
        // line 67
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "role", [], "any", false, false, false, 67) == "professeur"))) {
            // line 68
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">
                            <i class=\"fa fa-edit me-2\"></i> Modifier
                        </a>
                        ";
            // line 71
            yield Twig\Extension\CoreExtension::include($this->env, $context, "session/_delete_form.html.twig");
            yield "
                    ";
        }
        // line 73
        yield "
                    <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_professeur");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fa fa-arrow-left me-2\"></i> Retour
                    </a>
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
        return "session/show.html.twig";
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
        return array (  246 => 74,  243 => 73,  238 => 71,  231 => 68,  229 => 67,  220 => 60,  214 => 58,  210 => 56,  207 => 55,  194 => 53,  190 => 52,  187 => 51,  185 => 50,  178 => 46,  173 => 43,  169 => 41,  161 => 37,  159 => 36,  152 => 32,  144 => 27,  139 => 26,  134 => 25,  130 => 24,  126 => 23,  118 => 18,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Session #{{ session.id }}{% endblock %}

{% block body %}
    <div class=\"container mt-5 pt-5\">
        <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-header bg-gradient-primary text-white text-center py-4\">
                <h2 class=\"mb-0\">
                    <i class=\"fa fa-info-circle me-2\"></i>
                    Détails de la Session #{{ session.id }}
                </h2>
            </div>

            <div class=\"card-body p-5\">
                <dl class=\"row g-4\">
                    <dt class=\"col-sm-4 fw-bold\">Date et heure</dt>
                    <dd class=\"col-sm-8\">{{ session.dateHeure ? session.dateHeure|date('d/m/Y H:i') : '-' }}</dd>

                    <dt class=\"col-sm-4 fw-bold\">Statut</dt>
                    <dd class=\"col-sm-8\">
                        <span class=\"badge fs-5 px-4 py-2
                            {% if session.statut == 'planifiée' %}bg-warning text-dark
                            {% elseif session.statut == 'en cours' %}bg-success text-white
                            {% elseif session.statut == 'terminée' %}bg-secondary text-white
                            {% else %}bg-danger text-white{% endif %}\">
                            {{ session.statut|capitalize }}
                        </span>
                    </dd>

                    <dt class=\"col-sm-4 fw-bold\">Groupe</dt>
                    <dd class=\"col-sm-8\">{{ session.group ? session.group.nom : '-' }}</dd>

                    <dt class=\"col-sm-4 fw-bold\">Lien de réunion</dt>
                    <dd class=\"col-sm-8\">
                        {% if session.lienReunion %}
                            <a href=\"{{ session.lienReunion }}\" target=\"_blank\" class=\"btn btn-success btn-lg\">
                                <i class=\"fa fa-video me-2\"></i> Rejoindre la réunion
                            </a>
                        {% else %}
                            -
                        {% endif %}
                    </dd>

                    <dt class=\"col-sm-4 fw-bold\">Professeur</dt>
                    <dd class=\"col-sm-8\">{{ session.user ? session.user.prenom ~ ' ' ~ session.user.nom : '-' }}</dd>

                    <dt class=\"col-sm-4 fw-bold\">Note</dt>
                    <dd class=\"col-sm-8\">
                        {% set rating = session.rating|default(0) %}
                        <div class=\"star-rating\">
                            {% for i in 1..5 %}
                                <i class=\"fa fa-star fa-2x {% if i <= rating %}text-warning{% else %}text-muted{% endif %}\"></i>
                            {% endfor %}
                            {% if rating == 0 %}
                                <span class=\"ms-3 text-muted\">(non notée)</span>
                            {% else %}
                                <span class=\"ms-3 text-muted\">({{ rating }}/5)</span>
                            {% endif %}
                        </div>
                    </dd>
                </dl>
            </div>

            <div class=\"card-footer bg-light text-center py-4\">
                <div class=\"btn-group btn-group-lg\">
                    {% if app.user and app.user.role == 'professeur' %}
                        <a href=\"{{ path('app_session_edit', {'id': session.id}) }}\" class=\"btn btn-warning\">
                            <i class=\"fa fa-edit me-2\"></i> Modifier
                        </a>
                        {{ include('session/_delete_form.html.twig') }}
                    {% endif %}

                    <a href=\"{{ path('session_professeur') }}\" class=\"btn btn-secondary\">
                        <i class=\"fa fa-arrow-left me-2\"></i> Retour
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "session/show.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\session\\show.html.twig");
    }
}
