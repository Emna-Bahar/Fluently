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

/* tache/index.html.twig */
class __TwigTemplate_f63feb65129adb7a15cece3b2cc26742 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/index.html.twig"));

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

        yield "Mes Tâches - Fluently";
        
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
/* ── Page ── */
.task-page { margin-bottom: 60px; }

/* ── Card principale ── */
.task-card {
    border-radius: 20px;
    box-shadow: 0 18px 40px rgba(0,0,0,0.08);
}

/* ── En-tête ── */
.task-header h3 { color: #4f6df5; font-weight: 600; }

/* ── Filtres ── */
.filter-bar .form-select,
.filter-bar .form-control {
    border-radius: 20px;
    padding: 6px 16px;
    border: 1px solid #dde3f0;
    background: #fafbff;
}
.filter-bar .form-select:focus,
.filter-bar .form-control:focus {
    border-color: #4f6df5;
    box-shadow: 0 0 0 3px rgba(79,109,245,0.15);
}

/* ── Tableau ── */
.table thead th {
    background: #343a40;
    color: #fff;
    font-weight: 600;
    font-size: .9rem;
    letter-spacing: .3px;
    padding: 14px 12px;
    border: none;
}
.table tbody tr { transition: all 0.2s ease; }
.table tbody tr:hover { background: #f0f4ff; transform: scale(1.002); }
.table tbody td { vertical-align: middle; padding: 12px; border-color: #f0f0f0; }

/* ── Badges statut ── */
.badge-status-done     { background: #2ecc71; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }
.badge-status-progress { background: #4f6df5; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }
.badge-status-blocked  { background: #e74c3c; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }
.badge-status-todo     { background: #95a5a6; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }

/* ── Badges priorité ── */
.badge-priority-urgent { background: #c0392b; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }
.badge-priority-high   { background: #e74c3c; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }
.badge-priority-medium { background: #f1c40f; color: #000; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }
.badge-priority-low    { background: #2ecc71; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }

/* ── Badge objectif ── */
.objectif-badge {
    background: #eef3ff;
    color: #4f6df5;
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    transition: all 0.2s;
}
.objectif-badge:hover {
    background: #4f6df5;
    color: #fff;
}

/* ── Progression ── */
.progress { height: 8px; border-radius: 20px; background: #eee; }
.progress-bar { background: linear-gradient(135deg, #4f6df5, #6a82fb); border-radius: 20px; }

/* ── Boutons actions ── */
.btn-action {
    border-radius: 10px;
    padding: 6px 10px;
    transition: all 0.2s;
}
.btn-action:hover { transform: translateY(-2px); box-shadow: 0 4px 10px rgba(0,0,0,0.15); }

/* ── Stats rapides ── */
.stat-mini {
    background: #fff;
    border-radius: 14px;
    padding: 12px 18px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    text-align: center;
    transition: all 0.3s;
}
.stat-mini:hover { transform: translateY(-3px); box-shadow: 0 8px 25px rgba(0,0,0,0.1); }
</style>

";
        // line 100
        yield "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_1.jpg"), "html", null, true);
        yield "');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Mes Tâches</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span class=\"mr-2\"><a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\">Objectifs <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Tâches</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section bg-light task-page\">
<div class=\"container\">

    ";
        // line 120
        yield "    <div class=\"row mb-4\">
        <div class=\"col-md-3 mb-3\">
            <div class=\"stat-mini\">
                <div style=\"font-size:1.6rem;\">📋</div>
                <h4 class=\"mb-0\" style=\"color:#4f6df5; font-weight:800;\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 124, $this->source); })())), "html", null, true);
        yield "</h4>
                <small class=\"text-muted\">Total tâches</small>
            </div>
        </div>
        <div class=\"col-md-3 mb-3\">
            <div class=\"stat-mini\">
                <div style=\"font-size:1.6rem;\">✅</div>
                <h4 class=\"mb-0\" style=\"color:#2ecc71; font-weight:800;\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 131, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 131, $this->source); })()), "statut", [], "any", false, false, false, 131) == "terminee"); })), "html", null, true);
        yield "</h4>
                <small class=\"text-muted\">Terminées</small>
            </div>
        </div>
        <div class=\"col-md-3 mb-3\">
            <div class=\"stat-mini\">
                <div style=\"font-size:1.6rem;\">⏳</div>
                <h4 class=\"mb-0\" style=\"color:#4f6df5; font-weight:800;\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 138, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 138, $this->source); })()), "statut", [], "any", false, false, false, 138) == "en_cours"); })), "html", null, true);
        yield "</h4>
                <small class=\"text-muted\">En cours</small>
            </div>
        </div>
        <div class=\"col-md-3 mb-3\">
            <div class=\"stat-mini\">
                <div style=\"font-size:1.6rem;\">🔴</div>
                <h4 class=\"mb-0\" style=\"color:#e74c3c; font-weight:800;\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 145, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 145, $this->source); })()), "priorite", [], "any", false, false, false, 145) == "urgente"); })), "html", null, true);
        yield "</h4>
                <small class=\"text-muted\">Urgentes</small>
            </div>
        </div>
    </div>

<div class=\"card task-card border-0\">
<div class=\"card-body p-4\">

    ";
        // line 155
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "flashes", [], "any", false, false, false, 155));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 156
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 157
                yield "            <div class=\"alert alert-";
                yield ((($context["type"] == "success")) ? ("success") : ("danger"));
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "
    ";
        // line 165
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4 task-header\">
        <h3><i class=\"fa fa-tasks me-2\"></i>Liste des tâches</h3>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\" class=\"btn btn-outline-secondary rounded-pill\">
                <i class=\"fa fa-arrow-left me-1\"></i> Retour aux objectifs
            </a>
            <a href=\"";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gamification_index");
        yield "\" class=\"btn btn-outline-warning rounded-pill\">
                <i class=\"fa fa-trophy me-1\"></i> Gamification
            </a>
            <a href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new");
        yield "\" class=\"btn btn-primary rounded-pill\">
                <i class=\"fa fa-plus me-1\"></i> Nouvelle tâche
            </a>
        </div>
    </div>

    ";
        // line 181
        yield "    ";
        if (array_key_exists("gamification", $context)) {
            // line 182
            yield "    <div class=\"row mb-4\">
        ";
            // line 184
            yield "        <div class=\"col-md-3 mb-3\">
            <div class=\"card border-0 shadow-sm h-100 text-center p-3\"
                 style=\"border-radius:16px; background:linear-gradient(135deg, ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 186, $this->source); })()), "niveau", [], "any", false, false, false, 186), "couleur", [], "any", false, false, false, 186), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 186, $this->source); })()), "niveau", [], "any", false, false, false, 186), "couleur", [], "any", false, false, false, 186), "html", null, true);
            yield "bb);\">
                <div style=\"font-size:2.5rem;\">";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 187, $this->source); })()), "niveau", [], "any", false, false, false, 187), "icone", [], "any", false, false, false, 187), "html", null, true);
            yield "</div>
                <h5 class=\"text-white mt-1 mb-1\">";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 188, $this->source); })()), "niveau", [], "any", false, false, false, 188), "label", [], "any", false, false, false, 188), "html", null, true);
            yield "</h5>
                <div class=\"progress mb-1\" style=\"height:8px; border-radius:10px; background:rgba(255,255,255,0.3);\">
                    <div class=\"progress-bar bg-white\" style=\"width:";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 190, $this->source); })()), "progression", [], "any", false, false, false, 190), "html", null, true);
            yield "%; border-radius:10px;\"></div>
                </div>
                <small style=\"color:rgba(255,255,255,0.7);\">";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 192, $this->source); })()), "totalPoints", [], "any", false, false, false, 192), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 192, $this->source); })()), "niveau", [], "any", false, false, false, 192), "prochain", [], "any", false, false, false, 192), "html", null, true);
            yield " pts</small>
            </div>
        </div>

        ";
            // line 197
            yield "        <div class=\"col-md-3 mb-3\">
            <div class=\"card border-0 shadow-sm h-100 text-center p-3\" style=\"border-radius:16px;\">
                <div style=\"font-size:2rem;\">💎</div>
                <h3 class=\"mb-0 mt-1\" style=\"color:#4f6df5; font-weight:800;\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 200, $this->source); })()), "totalPoints", [], "any", false, false, false, 200), "html", null, true);
            yield "</h3>
                <p class=\"text-muted mb-0\" style=\"font-size:.85rem;\">Points totaux</p>
            </div>
        </div>

        ";
            // line 206
            yield "        <div class=\"col-md-3 mb-3\">
            <div class=\"card border-0 shadow-sm h-100 text-center p-3\" style=\"border-radius:16px;\">
                <div style=\"font-size:2rem;\">✅</div>
                <h3 class=\"mb-0 mt-1\" style=\"color:#2ecc71; font-weight:800;\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 209, $this->source); })()), "nbTaches", [], "any", false, false, false, 209), "html", null, true);
            yield "</h3>
                <p class=\"text-muted mb-0\" style=\"font-size:.85rem;\">Tâches terminées</p>
                <small class=\"text-success\">+";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 211, $this->source); })()), "pointsTaches", [], "any", false, false, false, 211), "html", null, true);
            yield " pts</small>
            </div>
        </div>

        ";
            // line 216
            yield "        <div class=\"col-md-3 mb-3\">
            <div class=\"card border-0 shadow-sm h-100 text-center p-3\" style=\"border-radius:16px;\">
                <div style=\"font-size:2rem;\">🏆</div>
                ";
            // line 219
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 219, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 219)) > 0)) {
                // line 220
                yield "                    <div style=\"display:flex; justify-content:center; flex-wrap:wrap; gap:4px; margin-top:6px;\">
                        ";
                // line 221
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 221, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 221), 0, 3));
                foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                    // line 222
                    yield "                            <span title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "nom", [], "any", false, false, false, 222), "html", null, true);
                    yield "\" style=\"font-size:1.3rem; cursor:pointer;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "icone", [], "any", false, false, false, 222), "html", null, true);
                    yield "</span>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['badge'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 224, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 224)) > 3)) {
                    // line 225
                    yield "                            <span style=\"font-size:.75rem; color:#999; align-self:center;\">+";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 225, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 225)) - 3), "html", null, true);
                    yield "</span>
                        ";
                }
                // line 227
                yield "                    </div>
                    <p class=\"text-muted mb-0 mt-1\" style=\"font-size:.8rem;\">";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 228, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 228)), "html", null, true);
                yield " badge(s)</p>
                ";
            } else {
                // line 230
                yield "                    <p class=\"text-muted mb-0 mt-2\" style=\"font-size:.8rem;\">Aucun badge encore</p>
                ";
            }
            // line 232
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gamification_index");
            yield "\" class=\"btn btn-sm btn-outline-primary mt-2\" style=\"border-radius:10px; font-size:.75rem;\">
                    Tout voir
                </a>
            </div>
        </div>
    </div>
    ";
        }
        // line 239
        yield "
    ";
        // line 241
        yield "    <div class=\"filter-bar d-flex flex-wrap gap-2 align-items-end mb-3\">

        ";
        // line 244
        yield "        <div style=\"min-width:220px; flex:1\">
            <label class=\"form-label mb-1 fw-semibold small\">
                <i class=\"fa fa-search me-1\"></i>Recherche
            </label>
            <input type=\"text\"
                   id=\"searchInput\"
                   class=\"form-control\"
                   placeholder=\"Titre ou description…\">
        </div>

        ";
        // line 255
        yield "        <div style=\"min-width:160px\">
            <label class=\"form-label mb-1 fw-semibold small\">Statut</label>
            <select id=\"filterStatut\" class=\"form-select\">
                <option value=\"\">Tous</option>
                <option value=\"a_faire\">À faire</option>
                <option value=\"en_cours\">En cours</option>
                <option value=\"terminee\">Terminée</option>
                <option value=\"bloquee\">Bloquée</option>
            </select>
        </div>

        ";
        // line 267
        yield "        <div style=\"min-width:160px\">
            <label class=\"form-label mb-1 fw-semibold small\">Priorité</label>
            <select id=\"filterPriorite\" class=\"form-select\">
                <option value=\"\">Toutes</option>
                <option value=\"basse\">Basse</option>
                <option value=\"moyenne\">Moyenne</option>
                <option value=\"haute\">Haute</option>
                <option value=\"urgente\">Urgente</option>
            </select>
        </div>

        ";
        // line 279
        yield "        <div>
            <label class=\"form-label mb-1 d-block\">&nbsp;</label>
            <button id=\"resetFilters\"
                    class=\"btn btn-outline-secondary rounded-pill\"
                    title=\"Réinitialiser les filtres\">
                <i class=\"fa fa-refresh me-1\"></i> Reset
            </button>
        </div>

    </div>

    ";
        // line 291
        yield "    <div class=\"mb-2\">
        <small id=\"resultCount\" class=\"text-muted fst-italic\"></small>
    </div>

    ";
        // line 296
        yield "    <div id=\"loadingSpinner\" class=\"text-center py-4 d-none\">
        <div class=\"spinner-border text-primary\" role=\"status\">
            <span class=\"visually-hidden\">Chargement…</span>
        </div>
        <p class=\"text-muted mt-2 small\">Recherche en cours…</p>
    </div>

    ";
        // line 304
        yield "    <div class=\"table-responsive\" id=\"tableWrapper\">
    <table class=\"table align-middle\">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Objectif</th>
                <th>Date limite</th>
                <th>Priorité</th>
                <th>Statut</th>
                <th>Progression</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"taskTableBody\">
            ";
        // line 319
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 319, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 320
            yield "            <tr>
                <td><strong>";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "titre", [], "any", false, false, false, 321), "html", null, true);
            yield "</strong></td>
                <td>
                    ";
            // line 323
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "idObjectif", [], "any", false, false, false, 323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 324
                yield "                        <span class=\"objectif-badge\">🎯 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "idObjectif", [], "any", false, false, false, 324), "titre", [], "any", false, false, false, 324), "html", null, true);
                yield "</span>
                    ";
            } else {
                // line 325
                yield "-";
            }
            // line 326
            yield "                </td>
                <td>";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateLimite", [], "any", false, false, false, 327), "d/m/Y"), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 329
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 329) == "urgente")) {
                // line 330
                yield "                        <span class=\"badge badge-priority-urgent\">🔴 Urgente</span>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 331
$context["tache"], "priorite", [], "any", false, false, false, 331) == "haute")) {
                // line 332
                yield "                        <span class=\"badge badge-priority-high\">Haute</span>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 333
$context["tache"], "priorite", [], "any", false, false, false, 333) == "moyenne")) {
                // line 334
                yield "                        <span class=\"badge badge-priority-medium\">Moyenne</span>
                    ";
            } else {
                // line 336
                yield "                        <span class=\"badge badge-priority-low\">Basse</span>
                    ";
            }
            // line 338
            yield "                </td>
                <td>
                    ";
            // line 340
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 340) == "terminee")) {
                // line 341
                yield "                        <span class=\"badge badge-status-done\">✔ Terminée</span>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 342
$context["tache"], "statut", [], "any", false, false, false, 342) == "en_cours")) {
                // line 343
                yield "                        <span class=\"badge badge-status-progress\">⏳ En cours</span>
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 344
$context["tache"], "statut", [], "any", false, false, false, 344) == "bloquee")) {
                // line 345
                yield "                        <span class=\"badge badge-status-blocked\">🚫 Bloquée</span>
                    ";
            } else {
                // line 347
                yield "                        <span class=\"badge badge-status-todo\">📋 À faire</span>
                    ";
            }
            // line 349
            yield "                </td>
                <td style=\"width:120px\">
                    <div class=\"progress\">
                        <div class=\"progress-bar\"
                             style=\"width:";
            // line 353
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 353) == "terminee")) ? (100) : ((((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 353) == "en_cours")) ? (50) : (0))));
            yield "%\">
                        </div>
                    </div>
                </td>
                <td class=\"d-flex gap-1\">
                    <a href=\"";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 358)]), "html", null, true);
            yield "\"
                       class=\"btn btn-info btn-sm btn-action\" title=\"Voir\">
                        <i class=\"fa fa-eye\"></i>
                    </a>
                    <a href=\"";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 362)]), "html", null, true);
            yield "\"
                       class=\"btn btn-warning btn-sm btn-action\" title=\"Modifier\">
                        <i class=\"fa fa-edit\"></i>
                    </a>
                    <form method=\"post\"
                          action=\"";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 367)]), "html", null, true);
            yield "\"
                          onsubmit=\"return confirm('Supprimer cette tâche ?');\">
                        <input type=\"hidden\" name=\"_token\"
                               value=\"";
            // line 370
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 370))), "html", null, true);
            yield "\">
                        <button class=\"btn btn-danger btn-sm btn-action\" title=\"Supprimer\">
                            <i class=\"fa fa-trash\"></i>
                        </button>
                    </form>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 377
        if (!$context['_iterated']) {
            // line 378
            yield "            <tr>
                <td colspan=\"7\" class=\"text-center text-muted py-4\">
                    Aucune tâche trouvée
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        yield "        </tbody>
    </table>
    </div>

</div>
</div>
</div>
</div>
</section>

";
        // line 397
        yield "<script>
(function () {
    'use strict';

    /* ── Références DOM ── */
    var searchInput    = document.getElementById('searchInput');
    var filterStatut   = document.getElementById('filterStatut');
    var filterPriorite = document.getElementById('filterPriorite');
    var resetBtn       = document.getElementById('resetFilters');
    var tableBody      = document.getElementById('taskTableBody');
    var spinner        = document.getElementById('loadingSpinner');
    var tableWrapper   = document.getElementById('tableWrapper');
    var resultCount    = document.getElementById('resultCount');

    /* ── URL Symfony générée côté serveur ── */
    var SEARCH_URL = '";
        // line 412
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_search");
        yield "';

    /* ── Debounce (évite trop de requêtes pendant la frappe) ── */
    var debounceTimer = null;
    function debounce(fn, delay) {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(fn, delay);
    }

    /* ── Échappe le HTML (anti-XSS) ── */
    function esc(str) {
        if (!str) return '-';
        return String(str)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/\"/g, '&quot;');
    }

    /* ── Badge Statut ── */
    function badgeStatut(statut) {
        var map = {
            terminee : '<span class=\"badge badge-status-done\">✔ Terminée</span>',
            en_cours : '<span class=\"badge badge-status-progress\">⏳ En cours</span>',
            bloquee  : '<span class=\"badge badge-status-blocked\">🚫 Bloquée</span>',
            a_faire  : '<span class=\"badge badge-status-todo\">📋 À faire</span>'
        };
        return map[statut] || '<span class=\"badge bg-secondary\">' + esc(statut) + '</span>';
    }

    /* ── Badge Priorité ── */
    function badgePriorite(priorite) {
        var map = {
            urgente : '<span class=\"badge badge-priority-urgent\">🔴 Urgente</span>',
            haute   : '<span class=\"badge badge-priority-high\">Haute</span>',
            moyenne : '<span class=\"badge badge-priority-medium\">Moyenne</span>',
            basse   : '<span class=\"badge badge-priority-low\">Basse</span>'
        };
        return map[priorite] || '<span class=\"badge bg-secondary\">' + esc(priorite) + '</span>';
    }

    /* ── Barre de progression ── */
    function progressBar(statut) {
        var pct = statut === 'terminee' ? 100 : (statut === 'en_cours' ? 50 : 0);
        return '<div class=\"progress\"><div class=\"progress-bar\" style=\"width:' + pct + '%\"></div></div>';
    }

    /* ── Objectif badge ── */
    function objectifBadge(objectif) {
        return objectif && objectif !== '-'
            ? '<span class=\"objectif-badge\">🎯 ' + esc(objectif) + '</span>'
            : '-';
    }

    /* ── Construit une ligne <tr> depuis les données JSON ── */
    function buildRow(t) {
        return '<tr>'
            + '<td><strong>' + esc(t.titre) + '</strong></td>'
            + '<td>' + objectifBadge(t.objectif) + '</td>'
            + '<td>' + esc(t.dateLimite) + '</td>'
            + '<td>' + badgePriorite(t.priorite) + '</td>'
            + '<td>' + badgeStatut(t.statut) + '</td>'
            + '<td style=\"width:120px\">' + progressBar(t.statut) + '</td>'
            + '<td class=\"d-flex gap-1\">'
            +   '<a href=\"' + t.urlShow + '\" class=\"btn btn-info btn-sm btn-action\" title=\"Voir\"><i class=\"fa fa-eye\"></i></a>'
            +   '<a href=\"' + t.urlEdit + '\" class=\"btn btn-warning btn-sm btn-action\" title=\"Modifier\"><i class=\"fa fa-edit\"></i></a>'
            + '</td>'
            + '</tr>';
    }

    /* ── Requête AJAX principale ── */
    function fetchTaches() {
        var formData = new FormData();
        formData.append('search',   searchInput.value.trim());
        formData.append('statut',   filterStatut.value);
        formData.append('priorite', filterPriorite.value);

        /* Affiche spinner, cache tableau */
        spinner.classList.remove('d-none');
        tableWrapper.classList.add('d-none');
        resultCount.textContent = '';

        fetch(SEARCH_URL, {
            method: 'POST',
            body:   formData,
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(function (response) {
            if (!response.ok) {
                throw new Error('Erreur serveur : ' + response.status);
            }
            return response.json();
        })
        .then(function (data) {
            tableBody.innerHTML = '';

            if (data.success && data.taches.length > 0) {
                data.taches.forEach(function (t) {
                    tableBody.insertAdjacentHTML('beforeend', buildRow(t));
                });
                resultCount.textContent = data.count + ' tâche(s) trouvée(s)';
            } else {
                tableBody.innerHTML =
                    '<tr><td colspan=\"7\" class=\"text-center text-muted py-4\">'
                    + 'Aucune tâche ne correspond aux critères'
                    + '</td></tr>';
                resultCount.textContent = '0 tâche trouvée';
            }
        })
        .catch(function (err) {
            tableBody.innerHTML =
                '<tr><td colspan=\"7\" class=\"text-center text-danger py-4\">'
                + '<i class=\"fa fa-exclamation-triangle me-1\"></i>'
                + 'Une erreur est survenue. Veuillez réessayer.'
                + '</td></tr>';
            console.error('AJAX error:', err);
        })
        .finally(function () {
            spinner.classList.add('d-none');
            tableWrapper.classList.remove('d-none');
        });
    }

    /* ── Écouteurs ── */
    searchInput.addEventListener('input', function () {
        debounce(fetchTaches, 350);   /* debounce 350 ms sur la frappe */
    });

    filterStatut.addEventListener('change', fetchTaches);     /* immédiat */
    filterPriorite.addEventListener('change', fetchTaches);   /* immédiat */

    resetBtn.addEventListener('click', function () {
        searchInput.value    = '';
        filterStatut.value   = '';
        filterPriorite.value = '';
        fetchTaches();
    });

}());
</script>

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
        return "tache/index.html.twig";
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
        return array (  713 => 412,  696 => 397,  684 => 384,  673 => 378,  671 => 377,  659 => 370,  653 => 367,  645 => 362,  638 => 358,  630 => 353,  624 => 349,  620 => 347,  616 => 345,  614 => 344,  611 => 343,  609 => 342,  606 => 341,  604 => 340,  600 => 338,  596 => 336,  592 => 334,  590 => 333,  587 => 332,  585 => 331,  582 => 330,  580 => 329,  575 => 327,  572 => 326,  569 => 325,  563 => 324,  561 => 323,  556 => 321,  553 => 320,  547 => 319,  531 => 304,  522 => 296,  516 => 291,  503 => 279,  490 => 267,  477 => 255,  465 => 244,  461 => 241,  458 => 239,  447 => 232,  443 => 230,  438 => 228,  435 => 227,  429 => 225,  426 => 224,  415 => 222,  411 => 221,  408 => 220,  406 => 219,  401 => 216,  394 => 211,  389 => 209,  384 => 206,  376 => 200,  371 => 197,  362 => 192,  357 => 190,  352 => 188,  348 => 187,  342 => 186,  338 => 184,  335 => 182,  332 => 181,  323 => 174,  317 => 171,  311 => 168,  306 => 165,  303 => 163,  297 => 162,  287 => 158,  282 => 157,  277 => 156,  272 => 155,  260 => 145,  250 => 138,  240 => 131,  230 => 124,  224 => 120,  210 => 108,  206 => 107,  195 => 100,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Tâches - Fluently{% endblock %}

{% block body %}

<style>
/* ── Page ── */
.task-page { margin-bottom: 60px; }

/* ── Card principale ── */
.task-card {
    border-radius: 20px;
    box-shadow: 0 18px 40px rgba(0,0,0,0.08);
}

/* ── En-tête ── */
.task-header h3 { color: #4f6df5; font-weight: 600; }

/* ── Filtres ── */
.filter-bar .form-select,
.filter-bar .form-control {
    border-radius: 20px;
    padding: 6px 16px;
    border: 1px solid #dde3f0;
    background: #fafbff;
}
.filter-bar .form-select:focus,
.filter-bar .form-control:focus {
    border-color: #4f6df5;
    box-shadow: 0 0 0 3px rgba(79,109,245,0.15);
}

/* ── Tableau ── */
.table thead th {
    background: #343a40;
    color: #fff;
    font-weight: 600;
    font-size: .9rem;
    letter-spacing: .3px;
    padding: 14px 12px;
    border: none;
}
.table tbody tr { transition: all 0.2s ease; }
.table tbody tr:hover { background: #f0f4ff; transform: scale(1.002); }
.table tbody td { vertical-align: middle; padding: 12px; border-color: #f0f0f0; }

/* ── Badges statut ── */
.badge-status-done     { background: #2ecc71; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }
.badge-status-progress { background: #4f6df5; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }
.badge-status-blocked  { background: #e74c3c; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }
.badge-status-todo     { background: #95a5a6; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }

/* ── Badges priorité ── */
.badge-priority-urgent { background: #c0392b; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }
.badge-priority-high   { background: #e74c3c; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }
.badge-priority-medium { background: #f1c40f; color: #000; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }
.badge-priority-low    { background: #2ecc71; color: #fff; padding: 5px 12px; border-radius: 20px; font-size: .8rem; }

/* ── Badge objectif ── */
.objectif-badge {
    background: #eef3ff;
    color: #4f6df5;
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    transition: all 0.2s;
}
.objectif-badge:hover {
    background: #4f6df5;
    color: #fff;
}

/* ── Progression ── */
.progress { height: 8px; border-radius: 20px; background: #eee; }
.progress-bar { background: linear-gradient(135deg, #4f6df5, #6a82fb); border-radius: 20px; }

/* ── Boutons actions ── */
.btn-action {
    border-radius: 10px;
    padding: 6px 10px;
    transition: all 0.2s;
}
.btn-action:hover { transform: translateY(-2px); box-shadow: 0 4px 10px rgba(0,0,0,0.15); }

/* ── Stats rapides ── */
.stat-mini {
    background: #fff;
    border-radius: 14px;
    padding: 12px 18px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    text-align: center;
    transition: all 0.3s;
}
.stat-mini:hover { transform: translateY(-3px); box-shadow: 0 8px 25px rgba(0,0,0,0.1); }
</style>

{# ── Hero Section ── #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_1.jpg') }}');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Mes Tâches</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"{{ path('app_home') }}\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span class=\"mr-2\"><a href=\"{{ path('app_objectif_index') }}\">Objectifs <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Tâches</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section bg-light task-page\">
<div class=\"container\">

    {# ── Statistiques rapides ── #}
    <div class=\"row mb-4\">
        <div class=\"col-md-3 mb-3\">
            <div class=\"stat-mini\">
                <div style=\"font-size:1.6rem;\">📋</div>
                <h4 class=\"mb-0\" style=\"color:#4f6df5; font-weight:800;\">{{ taches|length }}</h4>
                <small class=\"text-muted\">Total tâches</small>
            </div>
        </div>
        <div class=\"col-md-3 mb-3\">
            <div class=\"stat-mini\">
                <div style=\"font-size:1.6rem;\">✅</div>
                <h4 class=\"mb-0\" style=\"color:#2ecc71; font-weight:800;\">{{ taches|filter(t => t.statut == 'terminee')|length }}</h4>
                <small class=\"text-muted\">Terminées</small>
            </div>
        </div>
        <div class=\"col-md-3 mb-3\">
            <div class=\"stat-mini\">
                <div style=\"font-size:1.6rem;\">⏳</div>
                <h4 class=\"mb-0\" style=\"color:#4f6df5; font-weight:800;\">{{ taches|filter(t => t.statut == 'en_cours')|length }}</h4>
                <small class=\"text-muted\">En cours</small>
            </div>
        </div>
        <div class=\"col-md-3 mb-3\">
            <div class=\"stat-mini\">
                <div style=\"font-size:1.6rem;\">🔴</div>
                <h4 class=\"mb-0\" style=\"color:#e74c3c; font-weight:800;\">{{ taches|filter(t => t.priorite == 'urgente')|length }}</h4>
                <small class=\"text-muted\">Urgentes</small>
            </div>
        </div>
    </div>

<div class=\"card task-card border-0\">
<div class=\"card-body p-4\">

    {# ── Messages flash ── #}
    {% for type, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type == 'success' ? 'success' : 'danger' }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    {# ── En-tête ── #}
    <div class=\"d-flex justify-content-between align-items-center mb-4 task-header\">
        <h3><i class=\"fa fa-tasks me-2\"></i>Liste des tâches</h3>
        <div class=\"d-flex gap-2\">
            <a href=\"{{ path('app_objectif_index') }}\" class=\"btn btn-outline-secondary rounded-pill\">
                <i class=\"fa fa-arrow-left me-1\"></i> Retour aux objectifs
            </a>
            <a href=\"{{ path('app_gamification_index') }}\" class=\"btn btn-outline-warning rounded-pill\">
                <i class=\"fa fa-trophy me-1\"></i> Gamification
            </a>
            <a href=\"{{ path('app_tache_new') }}\" class=\"btn btn-primary rounded-pill\">
                <i class=\"fa fa-plus me-1\"></i> Nouvelle tâche
            </a>
        </div>
    </div>

    {# ── Widget Gamification ── #}
    {% if gamification is defined %}
    <div class=\"row mb-4\">
        {# Niveau #}
        <div class=\"col-md-3 mb-3\">
            <div class=\"card border-0 shadow-sm h-100 text-center p-3\"
                 style=\"border-radius:16px; background:linear-gradient(135deg, {{ gamification.niveau.couleur }}, {{ gamification.niveau.couleur }}bb);\">
                <div style=\"font-size:2.5rem;\">{{ gamification.niveau.icone }}</div>
                <h5 class=\"text-white mt-1 mb-1\">{{ gamification.niveau.label }}</h5>
                <div class=\"progress mb-1\" style=\"height:8px; border-radius:10px; background:rgba(255,255,255,0.3);\">
                    <div class=\"progress-bar bg-white\" style=\"width:{{ gamification.progression }}%; border-radius:10px;\"></div>
                </div>
                <small style=\"color:rgba(255,255,255,0.7);\">{{ gamification.totalPoints }} / {{ gamification.niveau.prochain }} pts</small>
            </div>
        </div>

        {# Points #}
        <div class=\"col-md-3 mb-3\">
            <div class=\"card border-0 shadow-sm h-100 text-center p-3\" style=\"border-radius:16px;\">
                <div style=\"font-size:2rem;\">💎</div>
                <h3 class=\"mb-0 mt-1\" style=\"color:#4f6df5; font-weight:800;\">{{ gamification.totalPoints }}</h3>
                <p class=\"text-muted mb-0\" style=\"font-size:.85rem;\">Points totaux</p>
            </div>
        </div>

        {# Tâches terminées #}
        <div class=\"col-md-3 mb-3\">
            <div class=\"card border-0 shadow-sm h-100 text-center p-3\" style=\"border-radius:16px;\">
                <div style=\"font-size:2rem;\">✅</div>
                <h3 class=\"mb-0 mt-1\" style=\"color:#2ecc71; font-weight:800;\">{{ gamification.nbTaches }}</h3>
                <p class=\"text-muted mb-0\" style=\"font-size:.85rem;\">Tâches terminées</p>
                <small class=\"text-success\">+{{ gamification.pointsTaches }} pts</small>
            </div>
        </div>

        {# Badges #}
        <div class=\"col-md-3 mb-3\">
            <div class=\"card border-0 shadow-sm h-100 text-center p-3\" style=\"border-radius:16px;\">
                <div style=\"font-size:2rem;\">🏆</div>
                {% if gamification.badgesObtenus|length > 0 %}
                    <div style=\"display:flex; justify-content:center; flex-wrap:wrap; gap:4px; margin-top:6px;\">
                        {% for badge in gamification.badgesObtenus|slice(0, 3) %}
                            <span title=\"{{ badge.nom }}\" style=\"font-size:1.3rem; cursor:pointer;\">{{ badge.icone }}</span>
                        {% endfor %}
                        {% if gamification.badgesObtenus|length > 3 %}
                            <span style=\"font-size:.75rem; color:#999; align-self:center;\">+{{ gamification.badgesObtenus|length - 3 }}</span>
                        {% endif %}
                    </div>
                    <p class=\"text-muted mb-0 mt-1\" style=\"font-size:.8rem;\">{{ gamification.badgesObtenus|length }} badge(s)</p>
                {% else %}
                    <p class=\"text-muted mb-0 mt-2\" style=\"font-size:.8rem;\">Aucun badge encore</p>
                {% endif %}
                <a href=\"{{ path('app_gamification_index') }}\" class=\"btn btn-sm btn-outline-primary mt-2\" style=\"border-radius:10px; font-size:.75rem;\">
                    Tout voir
                </a>
            </div>
        </div>
    </div>
    {% endif %}

    {# ── BARRE DE FILTRES AJAX ── #}
    <div class=\"filter-bar d-flex flex-wrap gap-2 align-items-end mb-3\">

        {# Recherche texte #}
        <div style=\"min-width:220px; flex:1\">
            <label class=\"form-label mb-1 fw-semibold small\">
                <i class=\"fa fa-search me-1\"></i>Recherche
            </label>
            <input type=\"text\"
                   id=\"searchInput\"
                   class=\"form-control\"
                   placeholder=\"Titre ou description…\">
        </div>

        {# Filtre Statut #}
        <div style=\"min-width:160px\">
            <label class=\"form-label mb-1 fw-semibold small\">Statut</label>
            <select id=\"filterStatut\" class=\"form-select\">
                <option value=\"\">Tous</option>
                <option value=\"a_faire\">À faire</option>
                <option value=\"en_cours\">En cours</option>
                <option value=\"terminee\">Terminée</option>
                <option value=\"bloquee\">Bloquée</option>
            </select>
        </div>

        {# Filtre Priorité #}
        <div style=\"min-width:160px\">
            <label class=\"form-label mb-1 fw-semibold small\">Priorité</label>
            <select id=\"filterPriorite\" class=\"form-select\">
                <option value=\"\">Toutes</option>
                <option value=\"basse\">Basse</option>
                <option value=\"moyenne\">Moyenne</option>
                <option value=\"haute\">Haute</option>
                <option value=\"urgente\">Urgente</option>
            </select>
        </div>

        {# Bouton reset #}
        <div>
            <label class=\"form-label mb-1 d-block\">&nbsp;</label>
            <button id=\"resetFilters\"
                    class=\"btn btn-outline-secondary rounded-pill\"
                    title=\"Réinitialiser les filtres\">
                <i class=\"fa fa-refresh me-1\"></i> Reset
            </button>
        </div>

    </div>

    {# Compteur de résultats #}
    <div class=\"mb-2\">
        <small id=\"resultCount\" class=\"text-muted fst-italic\"></small>
    </div>

    {# ── Spinner chargement ── #}
    <div id=\"loadingSpinner\" class=\"text-center py-4 d-none\">
        <div class=\"spinner-border text-primary\" role=\"status\">
            <span class=\"visually-hidden\">Chargement…</span>
        </div>
        <p class=\"text-muted mt-2 small\">Recherche en cours…</p>
    </div>

    {# ── Tableau ── #}
    <div class=\"table-responsive\" id=\"tableWrapper\">
    <table class=\"table align-middle\">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Objectif</th>
                <th>Date limite</th>
                <th>Priorité</th>
                <th>Statut</th>
                <th>Progression</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id=\"taskTableBody\">
            {# ── Chargement initial SSR ── #}
            {% for tache in taches %}
            <tr>
                <td><strong>{{ tache.titre }}</strong></td>
                <td>
                    {% if tache.idObjectif %}
                        <span class=\"objectif-badge\">🎯 {{ tache.idObjectif.titre }}</span>
                    {% else %}-{% endif %}
                </td>
                <td>{{ tache.dateLimite|date('d/m/Y') }}</td>
                <td>
                    {% if tache.priorite == 'urgente' %}
                        <span class=\"badge badge-priority-urgent\">🔴 Urgente</span>
                    {% elseif tache.priorite == 'haute' %}
                        <span class=\"badge badge-priority-high\">Haute</span>
                    {% elseif tache.priorite == 'moyenne' %}
                        <span class=\"badge badge-priority-medium\">Moyenne</span>
                    {% else %}
                        <span class=\"badge badge-priority-low\">Basse</span>
                    {% endif %}
                </td>
                <td>
                    {% if tache.statut == 'terminee' %}
                        <span class=\"badge badge-status-done\">✔ Terminée</span>
                    {% elseif tache.statut == 'en_cours' %}
                        <span class=\"badge badge-status-progress\">⏳ En cours</span>
                    {% elseif tache.statut == 'bloquee' %}
                        <span class=\"badge badge-status-blocked\">🚫 Bloquée</span>
                    {% else %}
                        <span class=\"badge badge-status-todo\">📋 À faire</span>
                    {% endif %}
                </td>
                <td style=\"width:120px\">
                    <div class=\"progress\">
                        <div class=\"progress-bar\"
                             style=\"width:{{ tache.statut == 'terminee' ? 100 : (tache.statut == 'en_cours' ? 50 : 0) }}%\">
                        </div>
                    </div>
                </td>
                <td class=\"d-flex gap-1\">
                    <a href=\"{{ path('app_tache_show', {'id': tache.id}) }}\"
                       class=\"btn btn-info btn-sm btn-action\" title=\"Voir\">
                        <i class=\"fa fa-eye\"></i>
                    </a>
                    <a href=\"{{ path('app_tache_edit', {'id': tache.id}) }}\"
                       class=\"btn btn-warning btn-sm btn-action\" title=\"Modifier\">
                        <i class=\"fa fa-edit\"></i>
                    </a>
                    <form method=\"post\"
                          action=\"{{ path('app_tache_delete', {'id': tache.id}) }}\"
                          onsubmit=\"return confirm('Supprimer cette tâche ?');\">
                        <input type=\"hidden\" name=\"_token\"
                               value=\"{{ csrf_token('delete' ~ tache.id) }}\">
                        <button class=\"btn btn-danger btn-sm btn-action\" title=\"Supprimer\">
                            <i class=\"fa fa-trash\"></i>
                        </button>
                    </form>
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"7\" class=\"text-center text-muted py-4\">
                    Aucune tâche trouvée
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
</section>

{# ══════════════════════════════════════════════
   SCRIPT AJAX — fetch POST → app_tache_search
   ══════════════════════════════════════════════ #}
<script>
(function () {
    'use strict';

    /* ── Références DOM ── */
    var searchInput    = document.getElementById('searchInput');
    var filterStatut   = document.getElementById('filterStatut');
    var filterPriorite = document.getElementById('filterPriorite');
    var resetBtn       = document.getElementById('resetFilters');
    var tableBody      = document.getElementById('taskTableBody');
    var spinner        = document.getElementById('loadingSpinner');
    var tableWrapper   = document.getElementById('tableWrapper');
    var resultCount    = document.getElementById('resultCount');

    /* ── URL Symfony générée côté serveur ── */
    var SEARCH_URL = '{{ path('app_tache_search') }}';

    /* ── Debounce (évite trop de requêtes pendant la frappe) ── */
    var debounceTimer = null;
    function debounce(fn, delay) {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(fn, delay);
    }

    /* ── Échappe le HTML (anti-XSS) ── */
    function esc(str) {
        if (!str) return '-';
        return String(str)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/\"/g, '&quot;');
    }

    /* ── Badge Statut ── */
    function badgeStatut(statut) {
        var map = {
            terminee : '<span class=\"badge badge-status-done\">✔ Terminée</span>',
            en_cours : '<span class=\"badge badge-status-progress\">⏳ En cours</span>',
            bloquee  : '<span class=\"badge badge-status-blocked\">🚫 Bloquée</span>',
            a_faire  : '<span class=\"badge badge-status-todo\">📋 À faire</span>'
        };
        return map[statut] || '<span class=\"badge bg-secondary\">' + esc(statut) + '</span>';
    }

    /* ── Badge Priorité ── */
    function badgePriorite(priorite) {
        var map = {
            urgente : '<span class=\"badge badge-priority-urgent\">🔴 Urgente</span>',
            haute   : '<span class=\"badge badge-priority-high\">Haute</span>',
            moyenne : '<span class=\"badge badge-priority-medium\">Moyenne</span>',
            basse   : '<span class=\"badge badge-priority-low\">Basse</span>'
        };
        return map[priorite] || '<span class=\"badge bg-secondary\">' + esc(priorite) + '</span>';
    }

    /* ── Barre de progression ── */
    function progressBar(statut) {
        var pct = statut === 'terminee' ? 100 : (statut === 'en_cours' ? 50 : 0);
        return '<div class=\"progress\"><div class=\"progress-bar\" style=\"width:' + pct + '%\"></div></div>';
    }

    /* ── Objectif badge ── */
    function objectifBadge(objectif) {
        return objectif && objectif !== '-'
            ? '<span class=\"objectif-badge\">🎯 ' + esc(objectif) + '</span>'
            : '-';
    }

    /* ── Construit une ligne <tr> depuis les données JSON ── */
    function buildRow(t) {
        return '<tr>'
            + '<td><strong>' + esc(t.titre) + '</strong></td>'
            + '<td>' + objectifBadge(t.objectif) + '</td>'
            + '<td>' + esc(t.dateLimite) + '</td>'
            + '<td>' + badgePriorite(t.priorite) + '</td>'
            + '<td>' + badgeStatut(t.statut) + '</td>'
            + '<td style=\"width:120px\">' + progressBar(t.statut) + '</td>'
            + '<td class=\"d-flex gap-1\">'
            +   '<a href=\"' + t.urlShow + '\" class=\"btn btn-info btn-sm btn-action\" title=\"Voir\"><i class=\"fa fa-eye\"></i></a>'
            +   '<a href=\"' + t.urlEdit + '\" class=\"btn btn-warning btn-sm btn-action\" title=\"Modifier\"><i class=\"fa fa-edit\"></i></a>'
            + '</td>'
            + '</tr>';
    }

    /* ── Requête AJAX principale ── */
    function fetchTaches() {
        var formData = new FormData();
        formData.append('search',   searchInput.value.trim());
        formData.append('statut',   filterStatut.value);
        formData.append('priorite', filterPriorite.value);

        /* Affiche spinner, cache tableau */
        spinner.classList.remove('d-none');
        tableWrapper.classList.add('d-none');
        resultCount.textContent = '';

        fetch(SEARCH_URL, {
            method: 'POST',
            body:   formData,
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(function (response) {
            if (!response.ok) {
                throw new Error('Erreur serveur : ' + response.status);
            }
            return response.json();
        })
        .then(function (data) {
            tableBody.innerHTML = '';

            if (data.success && data.taches.length > 0) {
                data.taches.forEach(function (t) {
                    tableBody.insertAdjacentHTML('beforeend', buildRow(t));
                });
                resultCount.textContent = data.count + ' tâche(s) trouvée(s)';
            } else {
                tableBody.innerHTML =
                    '<tr><td colspan=\"7\" class=\"text-center text-muted py-4\">'
                    + 'Aucune tâche ne correspond aux critères'
                    + '</td></tr>';
                resultCount.textContent = '0 tâche trouvée';
            }
        })
        .catch(function (err) {
            tableBody.innerHTML =
                '<tr><td colspan=\"7\" class=\"text-center text-danger py-4\">'
                + '<i class=\"fa fa-exclamation-triangle me-1\"></i>'
                + 'Une erreur est survenue. Veuillez réessayer.'
                + '</td></tr>';
            console.error('AJAX error:', err);
        })
        .finally(function () {
            spinner.classList.add('d-none');
            tableWrapper.classList.remove('d-none');
        });
    }

    /* ── Écouteurs ── */
    searchInput.addEventListener('input', function () {
        debounce(fetchTaches, 350);   /* debounce 350 ms sur la frappe */
    });

    filterStatut.addEventListener('change', fetchTaches);     /* immédiat */
    filterPriorite.addEventListener('change', fetchTaches);   /* immédiat */

    resetBtn.addEventListener('click', function () {
        searchInput.value    = '';
        filterStatut.value   = '';
        filterPriorite.value = '';
        fetchTaches();
    });

}());
</script>

{% endblock %}
", "tache/index.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\tache\\index.html.twig");
    }
}
