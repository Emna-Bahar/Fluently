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

/* objectif/index.html.twig */
class __TwigTemplate_7195a03c7054d10a0dbd764ef487b5f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/index.html.twig"));

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

        yield "Nos Objectifs - Fluently";
        
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
";
        // line 10
        $context["alertes"] = [];
        // line 11
        yield "
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [["echec", "bientot"]], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 13
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "        ";
                $context["alertes"] = Twig\Extension\CoreExtension::merge((isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 14, $this->source); })()), [["titre" =>                 // line 15
$context["message"], "type" =>                 // line 16
$context["type"]]]);
                // line 18
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
";
        // line 21
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 21, $this->source); })())) == 0)) {
            // line 22
            yield "    ";
            $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
            // line 23
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["objectif"]) {
                // line 24
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateFin", [], "any", false, false, false, 24) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 24), ["complete", "abandonne"]))) {
                    // line 25
                    yield "            ";
                    $context["fin"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateFin", [], "any", false, false, false, 25), "Y-m-d");
                    // line 26
                    yield "            ";
                    if (((isset($context["fin"]) || array_key_exists("fin", $context) ? $context["fin"] : (function () { throw new RuntimeError('Variable "fin" does not exist.', 26, $this->source); })()) < (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 26, $this->source); })()))) {
                        // line 27
                        yield "                ";
                        $context["alertes"] = Twig\Extension\CoreExtension::merge((isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 27, $this->source); })()), [["titre" => CoreExtension::getAttribute($this->env, $this->source,                         // line 28
$context["objectif"], "titre", [], "any", false, false, false, 28), "type" => "echec", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source,                         // line 30
$context["objectif"], "id", [], "any", false, false, false, 30)])]]);
                        // line 32
                        yield "            ";
                    } elseif (((isset($context["fin"]) || array_key_exists("fin", $context) ? $context["fin"] : (function () { throw new RuntimeError('Variable "fin" does not exist.', 32, $this->source); })()) <= $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate("now", "+3 days"), "Y-m-d"))) {
                        // line 33
                        yield "                ";
                        $context["alertes"] = Twig\Extension\CoreExtension::merge((isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 33, $this->source); })()), [["titre" => CoreExtension::getAttribute($this->env, $this->source,                         // line 34
$context["objectif"], "titre", [], "any", false, false, false, 34), "type" => "bientot", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source,                         // line 36
$context["objectif"], "id", [], "any", false, false, false, 36)])]]);
                        // line 38
                        yield "            ";
                    }
                    // line 39
                    yield "        ";
                }
                // line 40
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['objectif'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 42
        yield "
";
        // line 43
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 43, $this->source); })())) > 0)) {
            // line 44
            yield "<div id=\"deadline-modal-overlay\">
    <div id=\"deadline-modal\">
        <button id=\"deadline-modal-close\">✕</button>
        <div style=\"text-align:center; margin-bottom:20px;\">
            <div style=\"font-size:2.5rem;\">🔔</div>
            <h4 style=\"color:#2d3436; font-weight:700; margin:8px 0 4px;\">Alertes Échéances</h4>
            <p style=\"color:#636e72; font-size:.88rem;\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 50, $this->source); })())), "html", null, true);
            yield " objectif(s) nécessite(nt) votre attention</p>
        </div>
        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
                // line 53
                yield "            <div class=\"deadline-item ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "type", [], "any", false, false, false, 53) == "echec")) {
                    yield "item-echec";
                } else {
                    yield "item-bientot";
                }
                yield "\">
                <div style=\"display:flex; align-items:center; gap:10px;\">
                    <span style=\"font-size:1.4rem;\">";
                // line 55
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "type", [], "any", false, false, false, 55) == "echec")) {
                    yield "❌";
                } else {
                    yield "⚠️";
                }
                yield "</span>
                    <div>
                        <strong>";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "titre", [], "any", false, false, false, 57), "html", null, true);
                yield "</strong><br>
                        <small>";
                // line 58
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "type", [], "any", false, false, false, 58) == "echec")) {
                    yield "Date dépassée !";
                } else {
                    yield "Expire bientôt !";
                }
                yield "</small>
                    </div>
                </div>
                ";
                // line 61
                if (CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "url", [], "any", true, true, false, 61)) {
                    // line 62
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "url", [], "any", false, false, false, 62), "html", null, true);
                    yield "\" class=\"deadline-btn\">Voir →</a>
                ";
                }
                // line 64
                yield "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['alerte'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "        <button id=\"deadline-modal-ok\">✅ J'ai compris</button>
    </div>
</div>
";
        }
        // line 70
        yield "
<style>
#deadline-modal-overlay {
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0,0,0,0.5);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding-left: 30px;
    animation: fadeIn 0.3s ease;
}
#deadline-modal {
    background: #fff;
    border-radius: 20px;
    padding: 30px 25px;
    width: 360px;
    max-height: 80vh;
    overflow-y: auto;
    box-shadow: 0 25px 60px rgba(0,0,0,0.25);
    position: relative;
    animation: slideInLeft 0.35s ease;
}
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes slideInLeft {
    from { transform: translateX(-60px); opacity:0; }
    to   { transform: translateX(0);     opacity:1; }
}
#deadline-modal-close {
    position: absolute;
    top: 12px; right: 15px;
    background: #f0f0f0;
    border: none;
    border-radius: 50%;
    width: 28px; height: 28px;
    cursor: pointer;
    font-size: 13px;
    color: #666;
}
#deadline-modal-close:hover { background: #e74c3c; color: #fff; }
.deadline-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 12px;
    padding: 12px 14px;
    margin-bottom: 10px;
}
.item-echec   { background: #fdecea; border-left: 4px solid #e74c3c; }
.item-bientot { background: #fff8e1; border-left: 4px solid #f39c12; }
.deadline-item strong { font-size: .9rem; color: #2d3436; }
.deadline-item small  { font-size: .78rem; color: #636e72; }
.deadline-btn {
    background: #4f6df5;
    color: #fff !important;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: .8rem;
    text-decoration: none !important;
    white-space: nowrap;
    font-weight: 600;
}
.deadline-btn:hover { background: #3a57d4; }
#deadline-modal-ok {
    width: 100%;
    margin-top: 15px;
    background: linear-gradient(135deg, #4f6df5, #6a82fb);
    color: #fff;
    border: none;
    border-radius: 30px;
    padding: 12px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(79,109,245,0.3);
}
#deadline-modal-ok:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(79,109,245,0.4);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var overlay = document.getElementById('deadline-modal-overlay');
    if (!overlay) return;
    document.getElementById('deadline-modal-close').addEventListener('click', function() {
        overlay.style.display = 'none';
    });
    document.getElementById('deadline-modal-ok').addEventListener('click', function() {
        overlay.style.display = 'none';
    });
    overlay.addEventListener('click', function(e) {
        if (e.target === overlay) overlay.style.display = 'none';
    });
});
</script>
";
        // line 169
        yield "
";
        // line 171
        yield "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_1.jpg"), "html", null, true);
        yield "');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Mes Objectifs d'Apprentissage</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Objectifs</span>
                </p>
            </div>
        </div>
    </div>
</section>

";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "flashes", [["success", "danger"]], "method", false, false, false, 187));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 188
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 189
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show m-3\" role=\"alert\">
            ";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span>&times;</span></button>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        yield "
";
        // line 197
        yield "<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-md-6\">
                <h2 class=\"heading-section\">Gérez vos objectifs</h2>
                ";
        // line 203
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "user", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 204
            yield "                    <p class=\"text-muted\">
                        Bonjour <strong>";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 205, $this->source); })()), "user", [], "any", false, false, false, 205), "prenom", [], "any", false, false, false, 205), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 205, $this->source); })()), "user", [], "any", false, false, false, 205), "nom", [], "any", false, false, false, 205), "html", null, true);
            yield "</strong>, 
                        suivez votre progression et atteignez vos objectifs d'apprentissage.
                    </p>
                ";
        }
        // line 209
        yield "            </div>
            <div class=\"col-md-6 text-right\">
                <a href=\"";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recommandation_index");
        yield "\" 
                   class=\"btn btn-gradient-ai btn-lg shadow-lg mr-2\" 
                   style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                          color: white; border: none; border-radius: 10px;
                          padding: 12px 24px; transition: all 0.3s ease;\">
                    <i class=\"fa fa-magic\"></i> 🤖 Recommandations IA
                </a>
                <a href=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_new");
        yield "\" class=\"btn btn-primary btn-lg shadow mr-2\" style=\"border-radius: 10px;\">
                    <i class=\"fa fa-plus-circle\"></i> Nouvel Objectif
                </a>
                <a href=\"";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\" class=\"btn btn-success btn-lg shadow mr-2\" style=\"border-radius: 10px;\">
                    <i class=\"fa fa-tasks\"></i> Mes Tâches
                </a>
                <a href=\"";
        // line 224
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_calendar");
        yield "\" class=\"btn btn-info btn-lg shadow\" style=\"border-radius:10px;\">
                    <i class=\"fa fa-calendar\"></i> Calendrier
                </a>
            </div>
        </div>

        ";
        // line 230
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 230, $this->source); })()))) {
            // line 231
            yield "            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card border-0 shadow-lg text-center p-5\" style=\"border-radius: 15px;\">
                        <div class=\"card-body\">
                            <i class=\"fa fa-bullseye fa-5x text-primary mb-4\" style=\"opacity: 0.3;\"></i>
                            <h3 class=\"mb-3\">Aucun objectif pour le moment</h3>
                            <p class=\"text-muted mb-4\">Commencez votre parcours d'apprentissage en définissant votre premier objectif !</p>
                            <div class=\"alert alert-info d-inline-block mb-4\" style=\"max-width: 500px;\">
                                <i class=\"fa fa-lightbulb-o\"></i> <strong>Besoin d'inspiration ?</strong><br>
                                <small>Notre IA peut vous suggérer des objectifs personnalisés basés sur vos besoins !</small>
                            </div>
                            <div class=\"d-flex justify-content-center gap-3 flex-wrap\">
                                <a href=\"";
            // line 243
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_new");
            yield "\" class=\"btn btn-primary btn-lg\">
                                    <i class=\"fa fa-plus-circle\"></i> Créer mon premier objectif
                                </a>
                                <a href=\"";
            // line 246
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recommandation_index");
            yield "\" class=\"btn btn-gradient-ai btn-lg\"
                                   style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none;\">
                                    <i class=\"fa fa-magic\"></i> Obtenir des suggestions IA
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 256
            yield "            <div class=\"row mb-4\">
                <div class=\"col-12\">
                    <div class=\"alert alert-dismissible fade show\" 
                         style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                                color: white; border: none; border-radius: 15px;
                                box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);\">
                        <button type=\"button\" class=\"close text-white\" data-dismiss=\"alert\">
                            <span>&times;</span>
                        </button>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"mr-3\" style=\"font-size: 3rem;\">🤖</div>
                            <div class=\"flex-grow-1\">
                                <h5 class=\"mb-1 font-weight-bold\">
                                    <i class=\"fa fa-magic\"></i> Découvrez vos prochains objectifs
                                </h5>
                                <p class=\"mb-2\">
                                    Notre IA analyse vos <strong>";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 272, $this->source); })())), "html", null, true);
            yield " objectifs</strong> pour vous recommander 
                                    les 3 meilleurs objectifs à poursuivre !
                                </p>
                            </div>
                            <a href=\"";
            // line 276
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recommandation_index");
            yield "\" 
                               class=\"btn btn-light btn-lg font-weight-bold ml-3\"
                               style=\"border-radius: 10px;\">
                                Voir les recommandations <i class=\"fa fa-arrow-right ml-2\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            ";
            // line 287
            yield "            ";
            if (array_key_exists("gamification", $context)) {
                // line 288
                yield "            <div class=\"row mb-4\">
                ";
                // line 290
                yield "                <div class=\"col-md-4 mb-3\">
                    <div class=\"card border-0 shadow h-100 text-center p-4\"
                         style=\"border-radius:20px; background:linear-gradient(135deg, ";
                // line 292
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 292, $this->source); })()), "niveau", [], "any", false, false, false, 292), "couleur", [], "any", false, false, false, 292), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 292, $this->source); })()), "niveau", [], "any", false, false, false, 292), "couleur", [], "any", false, false, false, 292), "html", null, true);
                yield "bb);\">
                        <div style=\"font-size:4rem;\">";
                // line 293
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 293, $this->source); })()), "niveau", [], "any", false, false, false, 293), "icone", [], "any", false, false, false, 293), "html", null, true);
                yield "</div>
                        <h3 class=\"text-white mt-2 mb-1\">";
                // line 294
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 294, $this->source); })()), "niveau", [], "any", false, false, false, 294), "label", [], "any", false, false, false, 294), "html", null, true);
                yield "</h3>
                        <p class=\"mb-2\" style=\"color:rgba(255,255,255,0.7);\">Votre niveau actuel</p>
                        <div class=\"progress mb-2\" style=\"height:10px; border-radius:10px; background:rgba(255,255,255,0.3);\">
                            <div class=\"progress-bar bg-white\" style=\"width:";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 297, $this->source); })()), "progression", [], "any", false, false, false, 297), "html", null, true);
                yield "%; border-radius:10px;\"></div>
                        </div>
                        <small style=\"color:rgba(255,255,255,0.7);\">";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 299, $this->source); })()), "totalPoints", [], "any", false, false, false, 299), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 299, $this->source); })()), "niveau", [], "any", false, false, false, 299), "prochain", [], "any", false, false, false, 299), "html", null, true);
                yield " pts</small>
                    </div>
                </div>

                ";
                // line 304
                yield "                <div class=\"col-md-4 mb-3\">
                    <div class=\"card border-0 shadow h-100 text-center p-4\" style=\"border-radius:20px;\">
                        <div style=\"font-size:3rem;\">💎</div>
                        <h2 class=\"mb-0 mt-2\" style=\"color:#4f6df5; font-weight:800;\">";
                // line 307
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 307, $this->source); })()), "totalPoints", [], "any", false, false, false, 307), "html", null, true);
                yield "</h2>
                        <p class=\"text-muted mb-3\">Points totaux</p>
                        <div class=\"row\">
                            <div class=\"col-6 border-right\">
                                <p class=\"mb-0\"><span class=\"badge badge-success px-2\">+";
                // line 311
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 311, $this->source); })()), "pointsTaches", [], "any", false, false, false, 311), "html", null, true);
                yield " pts</span></p>
                                <small class=\"text-muted\">";
                // line 312
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 312, $this->source); })()), "nbTaches", [], "any", false, false, false, 312), "html", null, true);
                yield " tâche(s)</small>
                            </div>
                            <div class=\"col-6\">
                                <p class=\"mb-0\"><span class=\"badge badge-warning px-2\">+";
                // line 315
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 315, $this->source); })()), "pointsObjectifs", [], "any", false, false, false, 315), "html", null, true);
                yield " pts</span></p>
                                <small class=\"text-muted\">";
                // line 316
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 316, $this->source); })()), "nbObjectifs", [], "any", false, false, false, 316), "html", null, true);
                yield " obj.</small>
                            </div>
                        </div>
                    </div>
                </div>

                ";
                // line 323
                yield "                <div class=\"col-md-4 mb-3\">
                    <div class=\"card border-0 shadow h-100 p-4\" style=\"border-radius:20px;\">
                        <div style=\"font-size:2rem; margin-bottom:15px;\">🏆</div>
                        <h5 class=\"mb-3\">Badges obtenus</h5>
                        ";
                // line 327
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 327, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 327)) > 0)) {
                    // line 328
                    yield "                            <div style=\"display:flex; flex-wrap:wrap; gap:8px;\">
                                ";
                    // line 329
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 329, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 329), 0, 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                        // line 330
                        yield "                                    <div title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "nom", [], "any", false, false, false, 330), "html", null, true);
                        yield ": ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "description", [], "any", false, false, false, 330), "html", null, true);
                        yield "\" 
                                         style=\"font-size:1.8rem; cursor:pointer; transition:transform 0.2s;\">
                                        ";
                        // line 332
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "icone", [], "any", false, false, false, 332), "html", null, true);
                        yield "
                                    </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['badge'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 335
                    yield "                                ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 335, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 335)) > 4)) {
                        // line 336
                        yield "                                    <div style=\"display: flex; align-items: center; justify-content: center; 
                                              width: 40px; height: 40px; background: #f0f0f0; 
                                              border-radius: 10px; font-weight: bold; color: #666;\">
                                        +";
                        // line 339
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 339, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 339)) - 4), "html", null, true);
                        yield "
                                    </div>
                                ";
                    }
                    // line 342
                    yield "                            </div>
                            <p class=\"text-muted mt-3 mb-0\" style=\"font-size: 0.85rem;\">
                                <strong>";
                    // line 344
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 344, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 344)), "html", null, true);
                    yield "</strong> badge(s) débloqué(s)
                            </p>
                        ";
                } else {
                    // line 347
                    yield "                            <p class=\"text-muted\">Aucun badge pour le moment. Continuez vos efforts ! 💪</p>
                        ";
                }
                // line 349
                yield "                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gamification_index");
                yield "\" 
                           class=\"btn btn-sm btn-outline-primary mt-3 w-100\" style=\"border-radius:10px;\">
                            Voir tous les badges
                        </a>
                    </div>
                </div>
            </div>
            ";
            }
            // line 357
            yield "
            <div class=\"row\">
                ";
            // line 359
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 359, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["objectif"]) {
                // line 360
                yield "                    ";
                // line 361
                yield "                    ";
                $context["isOwner"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 361, $this->source); })()), "user", [], "any", false, false, false, 361) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "idUser", [], "any", false, false, false, 361), "id", [], "any", false, false, false, 361) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 361, $this->source); })()), "user", [], "any", false, false, false, 361), "id", [], "any", false, false, false, 361)));
                // line 362
                yield "
                    <div class=\"col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated\">
                        <div class=\"card h-100 border-0 shadow-sm hover-card\" style=\"border-radius: 15px; overflow: hidden;\">
                            <div class=\"card-header text-white 
                                ";
                // line 366
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 366) == "complete")) {
                    yield "bg-success
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 367
$context["objectif"], "statut", [], "any", false, false, false, 367) == "en_cours")) {
                    yield "bg-primary
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 368
$context["objectif"], "statut", [], "any", false, false, false, 368) == "abandonne")) {
                    yield "bg-danger
                                ";
                } else {
                    // line 369
                    yield "bg-warning";
                }
                yield "\" 
                                style=\"padding: 1.5rem;\">
                                <div class=\"d-flex justify-content-between align-items-start\">
                                    <h5 class=\"card-title mb-0 font-weight-bold\">";
                // line 372
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "titre", [], "any", false, false, false, 372), "html", null, true);
                yield "</h5>
                                    ";
                // line 373
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 373) == "complete")) {
                    // line 374
                    yield "                                        <i class=\"fa fa-check-circle fa-2x\"></i>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 375
$context["objectif"], "statut", [], "any", false, false, false, 375) == "en_cours")) {
                    // line 376
                    yield "                                        <i class=\"fa fa-spinner fa-2x\"></i>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 377
$context["objectif"], "statut", [], "any", false, false, false, 377) == "abandonne")) {
                    // line 378
                    yield "                                        <i class=\"fa fa-times-circle fa-2x\"></i>
                                    ";
                } else {
                    // line 380
                    yield "                                        <i class=\"fa fa-pause-circle fa-2x\"></i>
                                    ";
                }
                // line 382
                yield "                                </div>
                            </div>
                            <div class=\"card-body p-4\">
                                <p class=\"card-text text-muted mb-3\">
                                    ";
                // line 386
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "description", [], "any", false, false, false, 386)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "description", [], "any", false, false, false, 386), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "description", [], "any", false, false, false, 386), "html", null, true)));
                yield "
                                </p>
                                <div class=\"mb-3\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <i class=\"fa fa-calendar text-primary mr-2\"></i>
                                        <small class=\"text-muted\">
                                            <strong>Début:</strong> ";
                // line 392
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateDeb", [], "any", false, false, false, 392)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateDeb", [], "any", false, false, false, 392), "d/m/Y"), "html", null, true)) : ("Non défini"));
                yield "
                                        </small>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fa fa-calendar-check-o text-danger mr-2\"></i>
                                        <small class=\"text-muted\">
                                            <strong>Fin:</strong> ";
                // line 398
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateFin", [], "any", false, false, false, 398)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateFin", [], "any", false, false, false, 398), "d/m/Y"), "html", null, true)) : ("Non défini"));
                yield "
                                        </small>
                                    </div>
                                </div>
                                <div class=\"mb-3 pb-3 border-bottom\">
                                    <i class=\"fa fa-user text-muted mr-2\"></i>
                                    <small class=\"text-muted\">";
                // line 404
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "idUser", [], "any", false, false, false, 404), "prenom", [], "any", false, false, false, 404), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "idUser", [], "any", false, false, false, 404), "nom", [], "any", false, false, false, 404), "html", null, true);
                yield "</small>
                                </div>
                                <div class=\"mb-3\">
                                    ";
                // line 407
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 407) == "complete")) {
                    // line 408
                    yield "                                        <span class=\"badge badge-success badge-pill p-2\">✓ Complété</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 409
$context["objectif"], "statut", [], "any", false, false, false, 409) == "en_cours")) {
                    // line 410
                    yield "                                        <span class=\"badge badge-primary badge-pill p-2\">⟳ En cours</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 411
$context["objectif"], "statut", [], "any", false, false, false, 411) == "abandonne")) {
                    // line 412
                    yield "                                        <span class=\"badge badge-danger badge-pill p-2\">✗ Abandonné</span>
                                    ";
                } else {
                    // line 414
                    yield "                                        <span class=\"badge badge-warning badge-pill p-2\">⏸ En pause</span>
                                    ";
                }
                // line 416
                yield "                                </div>

                                ";
                // line 419
                yield "                                <div class=\"mb-3\">
                                    <a href=\"";
                // line 420
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 420)]), "html", null, true);
                yield "#taches\" 
                                       class=\"d-flex align-items-center text-decoration-none\"
                                       style=\"background:#eef3ff; border-radius:12px; padding:10px 14px; transition:all 0.2s;\">
                                        <i class=\"fa fa-tasks\" style=\"color:#4f6df5; font-size:1.2rem; margin-right:10px;\"></i>
                                        <div class=\"flex-grow-1\">
                                            <strong style=\"color:#2d3436; font-size:.9rem;\">";
                // line 425
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "taches", [], "any", false, false, false, 425)), "html", null, true);
                yield " tâche(s)</strong><br>
                                            <small style=\"color:#636e72;\">";
                // line 426
                $context["done"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "taches", [], "any", false, false, false, 426), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 426, $this->source); })()), "statut", [], "any", false, false, false, 426) == "terminee"); }));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["done"]) || array_key_exists("done", $context) ? $context["done"] : (function () { throw new RuntimeError('Variable "done" does not exist.', 426, $this->source); })()), "html", null, true);
                yield " terminée(s)</small>
                                        </div>
                                        <span style=\"background:#4f6df5; color:#fff; border-radius:50%; width:28px; height:28px; display:flex; align-items:center; justify-content:center; font-size:.75rem;\">
                                            <i class=\"fa fa-arrow-right\"></i>
                                        </span>
                                    </a>
                                </div>

                                ";
                // line 438
                yield "                                <div class=\"btn-group d-flex\" role=\"group\">
                                    <a href=\"";
                // line 439
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 439)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-info btn-sm flex-fill\">
                                        <i class=\"fa fa-eye\"></i> Voir
                                    </a>
                                    ";
                // line 443
                if ((($tmp = (isset($context["isOwner"]) || array_key_exists("isOwner", $context) ? $context["isOwner"] : (function () { throw new RuntimeError('Variable "isOwner" does not exist.', 443, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 444
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 444)]), "html", null, true);
                    yield "\" 
                                           class=\"btn btn-warning btn-sm flex-fill\">
                                            <i class=\"fa fa-edit\"></i> Modifier
                                        </a>
                                        <button type=\"button\" class=\"btn btn-danger btn-sm flex-fill\" 
                                                data-toggle=\"modal\" data-target=\"#deleteModal";
                    // line 449
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 449), "html", null, true);
                    yield "\">
                                            <i class=\"fa fa-trash\"></i> Supprimer
                                        </button>
                                    ";
                } else {
                    // line 453
                    yield "                                        ";
                    // line 454
                    yield "                                        <button type=\"button\" class=\"btn btn-secondary btn-sm flex-fill\" disabled
                                                title=\"Vous n'êtes pas le propriétaire de cet objectif\">
                                            <i class=\"fa fa-lock\"></i> Non autorisé
                                        </button>
                                    ";
                }
                // line 459
                yield "                                </div>
                            </div>
                        </div>
                    </div>

                    ";
                // line 465
                yield "                    ";
                if ((($tmp = (isset($context["isOwner"]) || array_key_exists("isOwner", $context) ? $context["isOwner"] : (function () { throw new RuntimeError('Variable "isOwner" does not exist.', 465, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 466
                    yield "                    <div class=\"modal fade\" id=\"deleteModal";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 466), "html", null, true);
                    yield "\" tabindex=\"-1\" role=\"dialog\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\" style=\"border-radius: 15px; border: none;\">
                                <div class=\"modal-header bg-danger text-white\" style=\"border-radius: 15px 15px 0 0;\">
                                    <h5 class=\"modal-title\">
                                        <i class=\"fa fa-exclamation-triangle\"></i> Confirmer la suppression
                                    </h5>
                                    <button type=\"button\" class=\"close text-white\" data-dismiss=\"modal\">
                                        <span>&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body p-4\">
                                    <p class=\"mb-2\">Êtes-vous sûr de vouloir supprimer l'objectif :</p>
                                    <p class=\"font-weight-bold text-primary\">\"";
                    // line 479
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "titre", [], "any", false, false, false, 479), "html", null, true);
                    yield "\"</p>
                                    <div class=\"alert alert-warning mt-3\">
                                        <i class=\"fa fa-warning\"></i> <small>Cette action est irréversible et supprimera toutes les tâches associées.</small>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                                        <i class=\"fa fa-times\"></i> Annuler
                                    </button>
                                    <form method=\"post\" action=\"";
                    // line 488
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 488)]), "html", null, true);
                    yield "\" style=\"display: inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 489
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 489))), "html", null, true);
                    yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger\">
                                            <i class=\"fa fa-trash\"></i> Supprimer définitivement
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }
                // line 499
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['objectif'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 501
            yield "            </div>

            <div class=\"col-12 mt-5 d-flex justify-content-center\">
                ";
            // line 504
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 504, $this->source); })()));
            yield "
            </div>
        ";
        }
        // line 507
        yield "    </div>
</section>

<style>
.hover-card { transition: all 0.3s ease; }
.hover-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15) !important;
}
.badge-pill { font-size: 0.85rem; }
.btn-group .btn { border-radius: 0; }
.btn-group .btn:first-child { border-radius: 0.25rem 0 0 0.25rem; }
.btn-group .btn:last-child  { border-radius: 0 0.25rem 0.25rem 0; }
.btn-gradient-ai:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4) !important;
}
</style>

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
        return "objectif/index.html.twig";
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
        return array (  955 => 507,  949 => 504,  944 => 501,  937 => 499,  924 => 489,  920 => 488,  908 => 479,  891 => 466,  888 => 465,  881 => 459,  874 => 454,  872 => 453,  865 => 449,  856 => 444,  854 => 443,  847 => 439,  844 => 438,  832 => 426,  828 => 425,  820 => 420,  817 => 419,  813 => 416,  809 => 414,  805 => 412,  803 => 411,  800 => 410,  798 => 409,  795 => 408,  793 => 407,  785 => 404,  776 => 398,  767 => 392,  758 => 386,  752 => 382,  748 => 380,  744 => 378,  742 => 377,  739 => 376,  737 => 375,  734 => 374,  732 => 373,  728 => 372,  721 => 369,  716 => 368,  712 => 367,  708 => 366,  702 => 362,  699 => 361,  697 => 360,  693 => 359,  689 => 357,  677 => 349,  673 => 347,  667 => 344,  663 => 342,  657 => 339,  652 => 336,  649 => 335,  640 => 332,  632 => 330,  628 => 329,  625 => 328,  623 => 327,  617 => 323,  608 => 316,  604 => 315,  598 => 312,  594 => 311,  587 => 307,  582 => 304,  573 => 299,  568 => 297,  562 => 294,  558 => 293,  552 => 292,  548 => 290,  545 => 288,  542 => 287,  529 => 276,  522 => 272,  504 => 256,  491 => 246,  485 => 243,  471 => 231,  469 => 230,  460 => 224,  454 => 221,  448 => 218,  438 => 211,  434 => 209,  425 => 205,  422 => 204,  419 => 203,  412 => 197,  409 => 195,  395 => 190,  390 => 189,  385 => 188,  381 => 187,  370 => 178,  359 => 171,  356 => 169,  256 => 70,  250 => 66,  243 => 64,  237 => 62,  235 => 61,  225 => 58,  221 => 57,  212 => 55,  202 => 53,  198 => 52,  193 => 50,  185 => 44,  183 => 43,  180 => 42,  173 => 40,  170 => 39,  167 => 38,  165 => 36,  164 => 34,  162 => 33,  159 => 32,  157 => 30,  156 => 28,  154 => 27,  151 => 26,  148 => 25,  145 => 24,  140 => 23,  137 => 22,  135 => 21,  132 => 20,  122 => 18,  120 => 16,  119 => 15,  117 => 14,  112 => 13,  108 => 12,  105 => 11,  103 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos Objectifs - Fluently{% endblock %}

{% block body %}

{# ══════════════════════════════════════════
   MODALE ALERTES ÉCHÉANCES
   ══════════════════════════════════════════ #}
{% set alertes = [] %}

{% for type, messages in app.flashes(['echec', 'bientot']) %}
    {% for message in messages %}
        {% set alertes = alertes|merge([{
            'titre': message,
            'type': type
        }]) %}
    {% endfor %}
{% endfor %}

{% if alertes|length == 0 %}
    {% set now = \"now\"|date(\"Y-m-d\") %}
    {% for objectif in objectifs %}
        {% if objectif.dateFin and objectif.statut not in ['complete', 'abandonne'] %}
            {% set fin = objectif.dateFin|date(\"Y-m-d\") %}
            {% if fin < now %}
                {% set alertes = alertes|merge([{
                    'titre': objectif.titre,
                    'type': 'echec',
                    'url': path('app_objectif_show', {'id': objectif.id})
                }]) %}
            {% elseif fin <= \"now\"|date_modify(\"+3 days\")|date(\"Y-m-d\") %}
                {% set alertes = alertes|merge([{
                    'titre': objectif.titre,
                    'type': 'bientot',
                    'url': path('app_objectif_show', {'id': objectif.id})
                }]) %}
            {% endif %}
        {% endif %}
    {% endfor %}
{% endif %}

{% if alertes|length > 0 %}
<div id=\"deadline-modal-overlay\">
    <div id=\"deadline-modal\">
        <button id=\"deadline-modal-close\">✕</button>
        <div style=\"text-align:center; margin-bottom:20px;\">
            <div style=\"font-size:2.5rem;\">🔔</div>
            <h4 style=\"color:#2d3436; font-weight:700; margin:8px 0 4px;\">Alertes Échéances</h4>
            <p style=\"color:#636e72; font-size:.88rem;\">{{ alertes|length }} objectif(s) nécessite(nt) votre attention</p>
        </div>
        {% for alerte in alertes %}
            <div class=\"deadline-item {% if alerte.type == 'echec' %}item-echec{% else %}item-bientot{% endif %}\">
                <div style=\"display:flex; align-items:center; gap:10px;\">
                    <span style=\"font-size:1.4rem;\">{% if alerte.type == 'echec' %}❌{% else %}⚠️{% endif %}</span>
                    <div>
                        <strong>{{ alerte.titre }}</strong><br>
                        <small>{% if alerte.type == 'echec' %}Date dépassée !{% else %}Expire bientôt !{% endif %}</small>
                    </div>
                </div>
                {% if alerte.url is defined %}
                    <a href=\"{{ alerte.url }}\" class=\"deadline-btn\">Voir →</a>
                {% endif %}
            </div>
        {% endfor %}
        <button id=\"deadline-modal-ok\">✅ J'ai compris</button>
    </div>
</div>
{% endif %}

<style>
#deadline-modal-overlay {
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0,0,0,0.5);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding-left: 30px;
    animation: fadeIn 0.3s ease;
}
#deadline-modal {
    background: #fff;
    border-radius: 20px;
    padding: 30px 25px;
    width: 360px;
    max-height: 80vh;
    overflow-y: auto;
    box-shadow: 0 25px 60px rgba(0,0,0,0.25);
    position: relative;
    animation: slideInLeft 0.35s ease;
}
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes slideInLeft {
    from { transform: translateX(-60px); opacity:0; }
    to   { transform: translateX(0);     opacity:1; }
}
#deadline-modal-close {
    position: absolute;
    top: 12px; right: 15px;
    background: #f0f0f0;
    border: none;
    border-radius: 50%;
    width: 28px; height: 28px;
    cursor: pointer;
    font-size: 13px;
    color: #666;
}
#deadline-modal-close:hover { background: #e74c3c; color: #fff; }
.deadline-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 12px;
    padding: 12px 14px;
    margin-bottom: 10px;
}
.item-echec   { background: #fdecea; border-left: 4px solid #e74c3c; }
.item-bientot { background: #fff8e1; border-left: 4px solid #f39c12; }
.deadline-item strong { font-size: .9rem; color: #2d3436; }
.deadline-item small  { font-size: .78rem; color: #636e72; }
.deadline-btn {
    background: #4f6df5;
    color: #fff !important;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: .8rem;
    text-decoration: none !important;
    white-space: nowrap;
    font-weight: 600;
}
.deadline-btn:hover { background: #3a57d4; }
#deadline-modal-ok {
    width: 100%;
    margin-top: 15px;
    background: linear-gradient(135deg, #4f6df5, #6a82fb);
    color: #fff;
    border: none;
    border-radius: 30px;
    padding: 12px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(79,109,245,0.3);
}
#deadline-modal-ok:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(79,109,245,0.4);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var overlay = document.getElementById('deadline-modal-overlay');
    if (!overlay) return;
    document.getElementById('deadline-modal-close').addEventListener('click', function() {
        overlay.style.display = 'none';
    });
    document.getElementById('deadline-modal-ok').addEventListener('click', function() {
        overlay.style.display = 'none';
    });
    overlay.addEventListener('click', function(e) {
        if (e.target === overlay) overlay.style.display = 'none';
    });
});
</script>
{# ══════════════════════════════════════════ #}

{# Hero Section #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_1.jpg') }}');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Mes Objectifs d'Apprentissage</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"{{ path('app_home') }}\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Objectifs</span>
                </p>
            </div>
        </div>
    </div>
</section>

{# Flash messages #}
{% for label, messages in app.flashes(['success', 'danger']) %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }} alert-dismissible fade show m-3\" role=\"alert\">
            {{ message }}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span>&times;</span></button>
        </div>
    {% endfor %}
{% endfor %}

{# Main Content #}
<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-md-6\">
                <h2 class=\"heading-section\">Gérez vos objectifs</h2>
                {# ── Afficher le nom de l'utilisateur connecté ── #}
                {% if app.user %}
                    <p class=\"text-muted\">
                        Bonjour <strong>{{ app.user.prenom }} {{ app.user.nom }}</strong>, 
                        suivez votre progression et atteignez vos objectifs d'apprentissage.
                    </p>
                {% endif %}
            </div>
            <div class=\"col-md-6 text-right\">
                <a href=\"{{ path('app_recommandation_index') }}\" 
                   class=\"btn btn-gradient-ai btn-lg shadow-lg mr-2\" 
                   style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                          color: white; border: none; border-radius: 10px;
                          padding: 12px 24px; transition: all 0.3s ease;\">
                    <i class=\"fa fa-magic\"></i> 🤖 Recommandations IA
                </a>
                <a href=\"{{ path('app_objectif_new') }}\" class=\"btn btn-primary btn-lg shadow mr-2\" style=\"border-radius: 10px;\">
                    <i class=\"fa fa-plus-circle\"></i> Nouvel Objectif
                </a>
                <a href=\"{{ path('app_tache_index') }}\" class=\"btn btn-success btn-lg shadow mr-2\" style=\"border-radius: 10px;\">
                    <i class=\"fa fa-tasks\"></i> Mes Tâches
                </a>
                <a href=\"{{ path('app_objectif_calendar') }}\" class=\"btn btn-info btn-lg shadow\" style=\"border-radius:10px;\">
                    <i class=\"fa fa-calendar\"></i> Calendrier
                </a>
            </div>
        </div>

        {% if objectifs is empty %}
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card border-0 shadow-lg text-center p-5\" style=\"border-radius: 15px;\">
                        <div class=\"card-body\">
                            <i class=\"fa fa-bullseye fa-5x text-primary mb-4\" style=\"opacity: 0.3;\"></i>
                            <h3 class=\"mb-3\">Aucun objectif pour le moment</h3>
                            <p class=\"text-muted mb-4\">Commencez votre parcours d'apprentissage en définissant votre premier objectif !</p>
                            <div class=\"alert alert-info d-inline-block mb-4\" style=\"max-width: 500px;\">
                                <i class=\"fa fa-lightbulb-o\"></i> <strong>Besoin d'inspiration ?</strong><br>
                                <small>Notre IA peut vous suggérer des objectifs personnalisés basés sur vos besoins !</small>
                            </div>
                            <div class=\"d-flex justify-content-center gap-3 flex-wrap\">
                                <a href=\"{{ path('app_objectif_new') }}\" class=\"btn btn-primary btn-lg\">
                                    <i class=\"fa fa-plus-circle\"></i> Créer mon premier objectif
                                </a>
                                <a href=\"{{ path('app_recommandation_index') }}\" class=\"btn btn-gradient-ai btn-lg\"
                                   style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none;\">
                                    <i class=\"fa fa-magic\"></i> Obtenir des suggestions IA
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"row mb-4\">
                <div class=\"col-12\">
                    <div class=\"alert alert-dismissible fade show\" 
                         style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                                color: white; border: none; border-radius: 15px;
                                box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);\">
                        <button type=\"button\" class=\"close text-white\" data-dismiss=\"alert\">
                            <span>&times;</span>
                        </button>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"mr-3\" style=\"font-size: 3rem;\">🤖</div>
                            <div class=\"flex-grow-1\">
                                <h5 class=\"mb-1 font-weight-bold\">
                                    <i class=\"fa fa-magic\"></i> Découvrez vos prochains objectifs
                                </h5>
                                <p class=\"mb-2\">
                                    Notre IA analyse vos <strong>{{ objectifs|length }} objectifs</strong> pour vous recommander 
                                    les 3 meilleurs objectifs à poursuivre !
                                </p>
                            </div>
                            <a href=\"{{ path('app_recommandation_index') }}\" 
                               class=\"btn btn-light btn-lg font-weight-bold ml-3\"
                               style=\"border-radius: 10px;\">
                                Voir les recommandations <i class=\"fa fa-arrow-right ml-2\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {# ── Gamification Widget ── #}
            {% if gamification is defined %}
            <div class=\"row mb-4\">
                {# Niveau #}
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card border-0 shadow h-100 text-center p-4\"
                         style=\"border-radius:20px; background:linear-gradient(135deg, {{ gamification.niveau.couleur }}, {{ gamification.niveau.couleur }}bb);\">
                        <div style=\"font-size:4rem;\">{{ gamification.niveau.icone }}</div>
                        <h3 class=\"text-white mt-2 mb-1\">{{ gamification.niveau.label }}</h3>
                        <p class=\"mb-2\" style=\"color:rgba(255,255,255,0.7);\">Votre niveau actuel</p>
                        <div class=\"progress mb-2\" style=\"height:10px; border-radius:10px; background:rgba(255,255,255,0.3);\">
                            <div class=\"progress-bar bg-white\" style=\"width:{{ gamification.progression }}%; border-radius:10px;\"></div>
                        </div>
                        <small style=\"color:rgba(255,255,255,0.7);\">{{ gamification.totalPoints }} / {{ gamification.niveau.prochain }} pts</small>
                    </div>
                </div>

                {# Points #}
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card border-0 shadow h-100 text-center p-4\" style=\"border-radius:20px;\">
                        <div style=\"font-size:3rem;\">💎</div>
                        <h2 class=\"mb-0 mt-2\" style=\"color:#4f6df5; font-weight:800;\">{{ gamification.totalPoints }}</h2>
                        <p class=\"text-muted mb-3\">Points totaux</p>
                        <div class=\"row\">
                            <div class=\"col-6 border-right\">
                                <p class=\"mb-0\"><span class=\"badge badge-success px-2\">+{{ gamification.pointsTaches }} pts</span></p>
                                <small class=\"text-muted\">{{ gamification.nbTaches }} tâche(s)</small>
                            </div>
                            <div class=\"col-6\">
                                <p class=\"mb-0\"><span class=\"badge badge-warning px-2\">+{{ gamification.pointsObjectifs }} pts</span></p>
                                <small class=\"text-muted\">{{ gamification.nbObjectifs }} obj.</small>
                            </div>
                        </div>
                    </div>
                </div>

                {# Badges #}
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card border-0 shadow h-100 p-4\" style=\"border-radius:20px;\">
                        <div style=\"font-size:2rem; margin-bottom:15px;\">🏆</div>
                        <h5 class=\"mb-3\">Badges obtenus</h5>
                        {% if gamification.badgesObtenus|length > 0 %}
                            <div style=\"display:flex; flex-wrap:wrap; gap:8px;\">
                                {% for badge in gamification.badgesObtenus|slice(0, 4) %}
                                    <div title=\"{{ badge.nom }}: {{ badge.description }}\" 
                                         style=\"font-size:1.8rem; cursor:pointer; transition:transform 0.2s;\">
                                        {{ badge.icone }}
                                    </div>
                                {% endfor %}
                                {% if gamification.badgesObtenus|length > 4 %}
                                    <div style=\"display: flex; align-items: center; justify-content: center; 
                                              width: 40px; height: 40px; background: #f0f0f0; 
                                              border-radius: 10px; font-weight: bold; color: #666;\">
                                        +{{ gamification.badgesObtenus|length - 4 }}
                                    </div>
                                {% endif %}
                            </div>
                            <p class=\"text-muted mt-3 mb-0\" style=\"font-size: 0.85rem;\">
                                <strong>{{ gamification.badgesObtenus|length }}</strong> badge(s) débloqué(s)
                            </p>
                        {% else %}
                            <p class=\"text-muted\">Aucun badge pour le moment. Continuez vos efforts ! 💪</p>
                        {% endif %}
                        <a href=\"{{ path('app_gamification_index') }}\" 
                           class=\"btn btn-sm btn-outline-primary mt-3 w-100\" style=\"border-radius:10px;\">
                            Voir tous les badges
                        </a>
                    </div>
                </div>
            </div>
            {% endif %}

            <div class=\"row\">
                {% for objectif in objectifs %}
                    {# ── Vérifier si l'objectif appartient à l'user connecté ── #}
                    {% set isOwner = app.user and objectif.idUser.id == app.user.id %}

                    <div class=\"col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated\">
                        <div class=\"card h-100 border-0 shadow-sm hover-card\" style=\"border-radius: 15px; overflow: hidden;\">
                            <div class=\"card-header text-white 
                                {% if objectif.statut == 'complete' %}bg-success
                                {% elseif objectif.statut == 'en_cours' %}bg-primary
                                {% elseif objectif.statut == 'abandonne' %}bg-danger
                                {% else %}bg-warning{% endif %}\" 
                                style=\"padding: 1.5rem;\">
                                <div class=\"d-flex justify-content-between align-items-start\">
                                    <h5 class=\"card-title mb-0 font-weight-bold\">{{ objectif.titre }}</h5>
                                    {% if objectif.statut == 'complete' %}
                                        <i class=\"fa fa-check-circle fa-2x\"></i>
                                    {% elseif objectif.statut == 'en_cours' %}
                                        <i class=\"fa fa-spinner fa-2x\"></i>
                                    {% elseif objectif.statut == 'abandonne' %}
                                        <i class=\"fa fa-times-circle fa-2x\"></i>
                                    {% else %}
                                        <i class=\"fa fa-pause-circle fa-2x\"></i>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"card-body p-4\">
                                <p class=\"card-text text-muted mb-3\">
                                    {{ objectif.description|length > 100 ? objectif.description|slice(0, 100) ~ '...' : objectif.description }}
                                </p>
                                <div class=\"mb-3\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <i class=\"fa fa-calendar text-primary mr-2\"></i>
                                        <small class=\"text-muted\">
                                            <strong>Début:</strong> {{ objectif.dateDeb ? objectif.dateDeb|date('d/m/Y') : 'Non défini' }}
                                        </small>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fa fa-calendar-check-o text-danger mr-2\"></i>
                                        <small class=\"text-muted\">
                                            <strong>Fin:</strong> {{ objectif.dateFin ? objectif.dateFin|date('d/m/Y') : 'Non défini' }}
                                        </small>
                                    </div>
                                </div>
                                <div class=\"mb-3 pb-3 border-bottom\">
                                    <i class=\"fa fa-user text-muted mr-2\"></i>
                                    <small class=\"text-muted\">{{ objectif.idUser.prenom }} {{ objectif.idUser.nom }}</small>
                                </div>
                                <div class=\"mb-3\">
                                    {% if objectif.statut == 'complete' %}
                                        <span class=\"badge badge-success badge-pill p-2\">✓ Complété</span>
                                    {% elseif objectif.statut == 'en_cours' %}
                                        <span class=\"badge badge-primary badge-pill p-2\">⟳ En cours</span>
                                    {% elseif objectif.statut == 'abandonne' %}
                                        <span class=\"badge badge-danger badge-pill p-2\">✗ Abandonné</span>
                                    {% else %}
                                        <span class=\"badge badge-warning badge-pill p-2\">⏸ En pause</span>
                                    {% endif %}
                                </div>

                                {# Compteur de tâches #}
                                <div class=\"mb-3\">
                                    <a href=\"{{ path('app_objectif_show', {'id': objectif.id}) }}#taches\" 
                                       class=\"d-flex align-items-center text-decoration-none\"
                                       style=\"background:#eef3ff; border-radius:12px; padding:10px 14px; transition:all 0.2s;\">
                                        <i class=\"fa fa-tasks\" style=\"color:#4f6df5; font-size:1.2rem; margin-right:10px;\"></i>
                                        <div class=\"flex-grow-1\">
                                            <strong style=\"color:#2d3436; font-size:.9rem;\">{{ objectif.taches|length }} tâche(s)</strong><br>
                                            <small style=\"color:#636e72;\">{% set done = objectif.taches|filter(t => t.statut == 'terminee')|length %}{{ done }} terminée(s)</small>
                                        </div>
                                        <span style=\"background:#4f6df5; color:#fff; border-radius:50%; width:28px; height:28px; display:flex; align-items:center; justify-content:center; font-size:.75rem;\">
                                            <i class=\"fa fa-arrow-right\"></i>
                                        </span>
                                    </a>
                                </div>

                                {# ══════════════════════════════════════
                                   BOUTONS — Modifier/Supprimer uniquement
                                   si l'objectif appartient à l'user connecté
                                   ══════════════════════════════════════ #}
                                <div class=\"btn-group d-flex\" role=\"group\">
                                    <a href=\"{{ path('app_objectif_show', {'id': objectif.id}) }}\" 
                                       class=\"btn btn-info btn-sm flex-fill\">
                                        <i class=\"fa fa-eye\"></i> Voir
                                    </a>
                                    {% if isOwner %}
                                        <a href=\"{{ path('app_objectif_edit', {'id': objectif.id}) }}\" 
                                           class=\"btn btn-warning btn-sm flex-fill\">
                                            <i class=\"fa fa-edit\"></i> Modifier
                                        </a>
                                        <button type=\"button\" class=\"btn btn-danger btn-sm flex-fill\" 
                                                data-toggle=\"modal\" data-target=\"#deleteModal{{ objectif.id }}\">
                                            <i class=\"fa fa-trash\"></i> Supprimer
                                        </button>
                                    {% else %}
                                        {# Bouton désactivé si pas propriétaire (cas théorique, la liste est déjà filtrée) #}
                                        <button type=\"button\" class=\"btn btn-secondary btn-sm flex-fill\" disabled
                                                title=\"Vous n'êtes pas le propriétaire de cet objectif\">
                                            <i class=\"fa fa-lock\"></i> Non autorisé
                                        </button>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>

                    {# Modal suppression — affiché uniquement si propriétaire #}
                    {% if isOwner %}
                    <div class=\"modal fade\" id=\"deleteModal{{ objectif.id }}\" tabindex=\"-1\" role=\"dialog\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\" style=\"border-radius: 15px; border: none;\">
                                <div class=\"modal-header bg-danger text-white\" style=\"border-radius: 15px 15px 0 0;\">
                                    <h5 class=\"modal-title\">
                                        <i class=\"fa fa-exclamation-triangle\"></i> Confirmer la suppression
                                    </h5>
                                    <button type=\"button\" class=\"close text-white\" data-dismiss=\"modal\">
                                        <span>&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body p-4\">
                                    <p class=\"mb-2\">Êtes-vous sûr de vouloir supprimer l'objectif :</p>
                                    <p class=\"font-weight-bold text-primary\">\"{{ objectif.titre }}\"</p>
                                    <div class=\"alert alert-warning mt-3\">
                                        <i class=\"fa fa-warning\"></i> <small>Cette action est irréversible et supprimera toutes les tâches associées.</small>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                                        <i class=\"fa fa-times\"></i> Annuler
                                    </button>
                                    <form method=\"post\" action=\"{{ path('app_objectif_delete', {'id': objectif.id}) }}\" style=\"display: inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ objectif.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger\">
                                            <i class=\"fa fa-trash\"></i> Supprimer définitivement
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endif %}

                {% endfor %}
            </div>

            <div class=\"col-12 mt-5 d-flex justify-content-center\">
                {{ knp_pagination_render(objectifs) }}
            </div>
        {% endif %}
    </div>
</section>

<style>
.hover-card { transition: all 0.3s ease; }
.hover-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15) !important;
}
.badge-pill { font-size: 0.85rem; }
.btn-group .btn { border-radius: 0; }
.btn-group .btn:first-child { border-radius: 0.25rem 0 0 0.25rem; }
.btn-group .btn:last-child  { border-radius: 0 0.25rem 0.25rem 0; }
.btn-gradient-ai:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4) !important;
}
</style>

{% endblock %}
", "objectif/index.html.twig", "C:\\Users\\sarra\\Desktop\\PIW\\Fluently\\templates\\objectif\\index.html.twig");
    }
}
