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

/* tache/show.html.twig */
class __TwigTemplate_b273947c5d0a9f632a5057279750b626 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/show.html.twig"));

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

        yield "Détail de la tâche";
        
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
<style>
.tache-page {
    margin-top: 120px;
    margin-bottom: 120px;
}

.tache-card {
    max-width: 700px;
    margin: auto;
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}

.tache-title {
    font-size: 26px;
    font-weight: 600;
    color: #4f6df5;
}

.tache-desc {
    font-size: 15px;
    color: #6c757d;
}

.badge-custom {
    padding: 8px 14px;
    border-radius: 20px;
    font-size: 13px;
}

.badge-priority-basse { background: #2ecc71; }
.badge-priority-moyenne { background: #f1c40f; color: #000; }
.badge-priority-haute { background: #e74c3c; }

.badge-status-faire { background: #4f6df5; }
.badge-status-terminee { background: #2ecc71; }

.btn-rounded {
    border-radius: 30px;
    padding: 10px 20px;
}
</style>

<section class=\"tache-page\">
    <div class=\"container\">

        <div class=\"card tache-card border-0\">
            <div class=\"card-body p-5\">

                <!-- TITRE -->
                <h2 class=\"tache-title mb-2\">
                    📝 ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 58, $this->source); })()), "titre", [], "any", false, false, false, 58), "html", null, true);
        yield "
                </h2>

                ";
        // line 61
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 61, $this->source); })()), "idObjectif", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "                    <p class=\"mb-4\">
                        🎯 Objectif :
                        <span class=\"badge bg-light text-primary\">
                            ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 65, $this->source); })()), "idObjectif", [], "any", false, false, false, 65), "titre", [], "any", false, false, false, 65), "html", null, true);
            yield "
                        </span>
                    </p>
                ";
        }
        // line 69
        yield "
                <!-- DESCRIPTION -->
                <p class=\"tache-desc mb-4\">
                    ";
        // line 72
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), "html", null, true)) : ("Aucune description fournie."));
        yield "
                </p>

                <!-- INFOS -->
                <ul class=\"list-group list-group-flush mb-4\">
                    <li class=\"list-group-item\">
                        📅 <strong>Date limite :</strong>
                        ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 79, $this->source); })()), "dateLimite", [], "any", false, false, false, 79), "d/m/Y"), "html", null, true);
        yield "
                    </li>

                    <li class=\"list-group-item\">
                        ⚡ <strong>Priorité :</strong>
                        ";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 84, $this->source); })()), "priorite", [], "any", false, false, false, 84) == "haute")) {
            // line 85
            yield "                            <span class=\"badge badge-custom badge-priority-haute\">Haute</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 86
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 86, $this->source); })()), "priorite", [], "any", false, false, false, 86) == "moyenne")) {
            // line 87
            yield "                            <span class=\"badge badge-custom badge-priority-moyenne\">Moyenne</span>
                        ";
        } else {
            // line 89
            yield "                            <span class=\"badge badge-custom badge-priority-basse\">Basse</span>
                        ";
        }
        // line 91
        yield "                    </li>

                    <li class=\"list-group-item\">
                        📌 <strong>Statut :</strong>
                        ";
        // line 95
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 95, $this->source); })()), "statut", [], "any", false, false, false, 95) == "terminee")) {
            // line 96
            yield "                            <span class=\"badge badge-custom badge-status-terminee\">✔ Terminée</span>
                        ";
        } else {
            // line 98
            yield "                            <span class=\"badge badge-custom badge-status-faire\">⏳ À faire</span>
                        ";
        }
        // line 100
        yield "                    </li>
                </ul>

                <!-- ACTIONS -->
                <div class=\"d-flex justify-content-between mt-4\">

                    <a href=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
        yield "\"
                       class=\"btn btn-warning btn-rounded\">
                        ✏️ Modifier
                    </a>

                    ";
        // line 111
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 111, $this->source); })()), "idObjectif", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 112, $this->source); })()), "idObjectif", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112)]), "html", null, true);
            yield "\"
                           class=\"btn btn-primary btn-rounded\">
                            ← Retour à l’objectif
                        </a>
                    ";
        } else {
            // line 117
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
            yield "\"
                           class=\"btn btn-secondary btn-rounded\">
                            ← Retour
                        </a>
                    ";
        }
        // line 122
        yield "
                </div>

            </div>
        </div>

    </div>
</section>

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
        return "tache/show.html.twig";
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
        return array (  264 => 122,  255 => 117,  246 => 112,  244 => 111,  236 => 106,  228 => 100,  224 => 98,  220 => 96,  218 => 95,  212 => 91,  208 => 89,  204 => 87,  202 => 86,  199 => 85,  197 => 84,  189 => 79,  179 => 72,  174 => 69,  167 => 65,  162 => 62,  160 => 61,  154 => 58,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détail de la tâche{% endblock %}

{% block body %}

<style>
.tache-page {
    margin-top: 120px;
    margin-bottom: 120px;
}

.tache-card {
    max-width: 700px;
    margin: auto;
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}

.tache-title {
    font-size: 26px;
    font-weight: 600;
    color: #4f6df5;
}

.tache-desc {
    font-size: 15px;
    color: #6c757d;
}

.badge-custom {
    padding: 8px 14px;
    border-radius: 20px;
    font-size: 13px;
}

.badge-priority-basse { background: #2ecc71; }
.badge-priority-moyenne { background: #f1c40f; color: #000; }
.badge-priority-haute { background: #e74c3c; }

.badge-status-faire { background: #4f6df5; }
.badge-status-terminee { background: #2ecc71; }

.btn-rounded {
    border-radius: 30px;
    padding: 10px 20px;
}
</style>

<section class=\"tache-page\">
    <div class=\"container\">

        <div class=\"card tache-card border-0\">
            <div class=\"card-body p-5\">

                <!-- TITRE -->
                <h2 class=\"tache-title mb-2\">
                    📝 {{ tache.titre }}
                </h2>

                {% if tache.idObjectif %}
                    <p class=\"mb-4\">
                        🎯 Objectif :
                        <span class=\"badge bg-light text-primary\">
                            {{ tache.idObjectif.titre }}
                        </span>
                    </p>
                {% endif %}

                <!-- DESCRIPTION -->
                <p class=\"tache-desc mb-4\">
                    {{ tache.description ?: 'Aucune description fournie.' }}
                </p>

                <!-- INFOS -->
                <ul class=\"list-group list-group-flush mb-4\">
                    <li class=\"list-group-item\">
                        📅 <strong>Date limite :</strong>
                        {{ tache.dateLimite|date('d/m/Y') }}
                    </li>

                    <li class=\"list-group-item\">
                        ⚡ <strong>Priorité :</strong>
                        {% if tache.priorite == 'haute' %}
                            <span class=\"badge badge-custom badge-priority-haute\">Haute</span>
                        {% elseif tache.priorite == 'moyenne' %}
                            <span class=\"badge badge-custom badge-priority-moyenne\">Moyenne</span>
                        {% else %}
                            <span class=\"badge badge-custom badge-priority-basse\">Basse</span>
                        {% endif %}
                    </li>

                    <li class=\"list-group-item\">
                        📌 <strong>Statut :</strong>
                        {% if tache.statut == 'terminee' %}
                            <span class=\"badge badge-custom badge-status-terminee\">✔ Terminée</span>
                        {% else %}
                            <span class=\"badge badge-custom badge-status-faire\">⏳ À faire</span>
                        {% endif %}
                    </li>
                </ul>

                <!-- ACTIONS -->
                <div class=\"d-flex justify-content-between mt-4\">

                    <a href=\"{{ path('app_tache_edit', { id: tache.id }) }}\"
                       class=\"btn btn-warning btn-rounded\">
                        ✏️ Modifier
                    </a>

                    {% if tache.idObjectif %}
                        <a href=\"{{ path('app_objectif_show', { id: tache.idObjectif.id }) }}\"
                           class=\"btn btn-primary btn-rounded\">
                            ← Retour à l’objectif
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_tache_index') }}\"
                           class=\"btn btn-secondary btn-rounded\">
                            ← Retour
                        </a>
                    {% endif %}

                </div>

            </div>
        </div>

    </div>
</section>

{% endblock %}
", "tache/show.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\tache\\show.html.twig");
    }
}
