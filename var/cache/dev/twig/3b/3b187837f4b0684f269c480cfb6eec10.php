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
class __TwigTemplate_d6d23450622e61487de787dfddbeb0ec extends Template
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

        yield "Tâche — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
    margin-bottom: 80px;
}
.tache-card {
    max-width: 720px;
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
    line-height: 1.7;
}
.info-row {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 14px 0;
    border-bottom: 1px solid #f0f2f7;
}
.info-row:last-child { border-bottom: none; }
.info-label {
    min-width: 140px;
    font-weight: 600;
    color: #444;
}
.badge-custom {
    padding: 7px 14px;
    border-radius: 20px;
    font-size: 13px;
}
.badge-s-a_faire  { background: #95a5a6; color: #fff; }
.badge-s-en_cours { background: #4f6df5; color: #fff; }
.badge-s-terminee { background: #2ecc71; color: #fff; }
.badge-s-bloquee  { background: #e74c3c; color: #fff; }
.badge-p-basse    { background: #2ecc71; color: #fff; }
.badge-p-moyenne  { background: #f1c40f; color: #000; }
.badge-p-haute    { background: #e74c3c; color: #fff; }
.badge-p-urgente  { background: #c0392b; color: #fff; }
.btn-rounded      { border-radius: 30px; padding: 10px 22px; }
</style>

<section class=\"tache-page\">
<div class=\"container\">
<div class=\"card tache-card border-0\">
<div class=\"card-body p-5\">

    ";
        // line 63
        yield "    <h2 class=\"tache-title mb-2\">
        📝 ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 64, $this->source); })()), "titre", [], "any", false, false, false, 64), "html", null, true);
        yield "
    </h2>

    ";
        // line 68
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 68, $this->source); })()), "idObjectif", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "        <p class=\"mb-4\">
            🎯 Objectif :
            <a href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 71, $this->source); })()), "idObjectif", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\"
               class=\"badge bg-light text-primary text-decoration-none fs-6\">
                ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 73, $this->source); })()), "idObjectif", [], "any", false, false, false, 73), "titre", [], "any", false, false, false, 73), "html", null, true);
            yield "
            </a>
        </p>
    ";
        }
        // line 77
        yield "
    ";
        // line 79
        yield "    <p class=\"tache-desc mb-4\">
        ";
        // line 80
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), "html", null, true)) : ("Aucune description fournie."));
        yield "
    </p>

    ";
        // line 84
        yield "    <div class=\"mb-4\">

        <div class=\"info-row\">
            <span class=\"info-label\">📅 Date limite</span>
            <span>";
        // line 88
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 88, $this->source); })()), "dateLimite", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 88, $this->source); })()), "dateLimite", [], "any", false, false, false, 88), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</span>
        </div>

        <div class=\"info-row\">
            <span class=\"info-label\">⚡ Priorité</span>
            <span class=\"badge badge-custom badge-p-";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 93, $this->source); })()), "priorite", [], "any", false, false, false, 93), "html", null, true);
        yield "\">
                ";
        // line 94
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 94, $this->source); })()), "priorite", [], "any", false, false, false, 94) == "urgente")) {
            yield "🔴 Urgente
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 95
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 95, $this->source); })()), "priorite", [], "any", false, false, false, 95) == "haute")) {
            yield "Haute
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 96
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 96, $this->source); })()), "priorite", [], "any", false, false, false, 96) == "moyenne")) {
            yield "Moyenne
                ";
        } else {
            // line 97
            yield "Basse
                ";
        }
        // line 99
        yield "            </span>
        </div>

        <div class=\"info-row\">
            <span class=\"info-label\">📌 Statut</span>
            <span class=\"badge badge-custom badge-s-";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 104, $this->source); })()), "statut", [], "any", false, false, false, 104), "html", null, true);
        yield "\">
                ";
        // line 105
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 105, $this->source); })()), "statut", [], "any", false, false, false, 105) == "terminee")) {
            yield "✔ Terminée
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 106
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 106, $this->source); })()), "statut", [], "any", false, false, false, 106) == "en_cours")) {
            yield "⏳ En cours
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 107
(isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 107, $this->source); })()), "statut", [], "any", false, false, false, 107) == "bloquee")) {
            yield "🚫 Bloquée
                ";
        } else {
            // line 108
            yield "📋 À faire
                ";
        }
        // line 110
        yield "            </span>
        </div>

    </div>

    ";
        // line 116
        yield "    <div class=\"d-flex justify-content-between align-items-center mt-4\">

        ";
        // line 119
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 119, $this->source); })()), "idObjectif", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 120, $this->source); })()), "idObjectif", [], "any", false, false, false, 120), "id", [], "any", false, false, false, 120)]), "html", null, true);
            yield "\"
               class=\"btn btn-secondary btn-rounded\">
                ← Retour à l'objectif
            </a>
        ";
        } else {
            // line 125
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
            yield "\"
               class=\"btn btn-secondary btn-rounded\">
                ← Retour à la liste
            </a>
        ";
        }
        // line 130
        yield "
        <div class=\"d-flex gap-2\">

            ";
        // line 134
        yield "            <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134)]), "html", null, true);
        yield "\"
               class=\"btn btn-warning btn-rounded\">
                ✏️ Modifier
            </a>

            ";
        // line 140
        yield "            <form method=\"post\"
                  action=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141)]), "html", null, true);
        yield "\"
                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');\">
                <input type=\"hidden\" name=\"_token\"
                       value=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-danger btn-rounded\">
                    🗑 Supprimer
                </button>
            </form>

        </div>
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
        return array (  317 => 144,  311 => 141,  308 => 140,  299 => 134,  294 => 130,  285 => 125,  276 => 120,  273 => 119,  269 => 116,  262 => 110,  258 => 108,  253 => 107,  249 => 106,  245 => 105,  241 => 104,  234 => 99,  230 => 97,  225 => 96,  221 => 95,  217 => 94,  213 => 93,  205 => 88,  199 => 84,  193 => 80,  190 => 79,  187 => 77,  180 => 73,  175 => 71,  171 => 69,  168 => 68,  162 => 64,  159 => 63,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tâche — {{ tache.titre }}{% endblock %}

{% block body %}

<style>
.tache-page {
    margin-top: 120px;
    margin-bottom: 80px;
}
.tache-card {
    max-width: 720px;
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
    line-height: 1.7;
}
.info-row {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 14px 0;
    border-bottom: 1px solid #f0f2f7;
}
.info-row:last-child { border-bottom: none; }
.info-label {
    min-width: 140px;
    font-weight: 600;
    color: #444;
}
.badge-custom {
    padding: 7px 14px;
    border-radius: 20px;
    font-size: 13px;
}
.badge-s-a_faire  { background: #95a5a6; color: #fff; }
.badge-s-en_cours { background: #4f6df5; color: #fff; }
.badge-s-terminee { background: #2ecc71; color: #fff; }
.badge-s-bloquee  { background: #e74c3c; color: #fff; }
.badge-p-basse    { background: #2ecc71; color: #fff; }
.badge-p-moyenne  { background: #f1c40f; color: #000; }
.badge-p-haute    { background: #e74c3c; color: #fff; }
.badge-p-urgente  { background: #c0392b; color: #fff; }
.btn-rounded      { border-radius: 30px; padding: 10px 22px; }
</style>

<section class=\"tache-page\">
<div class=\"container\">
<div class=\"card tache-card border-0\">
<div class=\"card-body p-5\">

    {# ── Titre ── #}
    <h2 class=\"tache-title mb-2\">
        📝 {{ tache.titre }}
    </h2>

    {# ── Objectif lié ── #}
    {% if tache.idObjectif %}
        <p class=\"mb-4\">
            🎯 Objectif :
            <a href=\"{{ path('app_objectif_show', {id: tache.idObjectif.id}) }}\"
               class=\"badge bg-light text-primary text-decoration-none fs-6\">
                {{ tache.idObjectif.titre }}
            </a>
        </p>
    {% endif %}

    {# ── Description ── #}
    <p class=\"tache-desc mb-4\">
        {{ tache.description ?: 'Aucune description fournie.' }}
    </p>

    {# ── Informations ── #}
    <div class=\"mb-4\">

        <div class=\"info-row\">
            <span class=\"info-label\">📅 Date limite</span>
            <span>{{ tache.dateLimite ? tache.dateLimite|date('d/m/Y') : '-' }}</span>
        </div>

        <div class=\"info-row\">
            <span class=\"info-label\">⚡ Priorité</span>
            <span class=\"badge badge-custom badge-p-{{ tache.priorite }}\">
                {% if tache.priorite == 'urgente' %}🔴 Urgente
                {% elseif tache.priorite == 'haute' %}Haute
                {% elseif tache.priorite == 'moyenne' %}Moyenne
                {% else %}Basse
                {% endif %}
            </span>
        </div>

        <div class=\"info-row\">
            <span class=\"info-label\">📌 Statut</span>
            <span class=\"badge badge-custom badge-s-{{ tache.statut }}\">
                {% if tache.statut == 'terminee' %}✔ Terminée
                {% elseif tache.statut == 'en_cours' %}⏳ En cours
                {% elseif tache.statut == 'bloquee' %}🚫 Bloquée
                {% else %}📋 À faire
                {% endif %}
            </span>
        </div>

    </div>

    {# ── Actions ── #}
    <div class=\"d-flex justify-content-between align-items-center mt-4\">

        {# Retour #}
        {% if tache.idObjectif %}
            <a href=\"{{ path('app_objectif_show', {id: tache.idObjectif.id}) }}\"
               class=\"btn btn-secondary btn-rounded\">
                ← Retour à l'objectif
            </a>
        {% else %}
            <a href=\"{{ path('app_tache_index') }}\"
               class=\"btn btn-secondary btn-rounded\">
                ← Retour à la liste
            </a>
        {% endif %}

        <div class=\"d-flex gap-2\">

            {# Modifier #}
            <a href=\"{{ path('app_tache_edit', {id: tache.id}) }}\"
               class=\"btn btn-warning btn-rounded\">
                ✏️ Modifier
            </a>

            {# Supprimer #}
            <form method=\"post\"
                  action=\"{{ path('app_tache_delete', {id: tache.id}) }}\"
                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');\">
                <input type=\"hidden\" name=\"_token\"
                       value=\"{{ csrf_token('delete' ~ tache.id) }}\">
                <button type=\"submit\" class=\"btn btn-danger btn-rounded\">
                    🗑 Supprimer
                </button>
            </form>

        </div>
    </div>

</div>
</div>
</div>
</section>

{% endblock %}
", "tache/show.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\tache\\show.html.twig");
    }
}
