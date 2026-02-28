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
        // line 12
        $context["alertes"] = [];
        // line 13
        yield "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [["echec", "bientot"]], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 15
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                yield "        ";
                $context["alertes"] = Twig\Extension\CoreExtension::merge((isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 16, $this->source); })()), [["titre" =>                 // line 17
$context["message"], "type" =>                 // line 18
$context["type"]]]);
                // line 20
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
";
        // line 24
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 24, $this->source); })())) == 0)) {
            // line 25
            yield "    ";
            $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
            // line 26
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["objectif"]) {
                // line 27
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateFin", [], "any", false, false, false, 27) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 27), ["complete", "abandonne"]))) {
                    // line 28
                    yield "            ";
                    $context["fin"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateFin", [], "any", false, false, false, 28), "Y-m-d");
                    // line 29
                    yield "            ";
                    if (((isset($context["fin"]) || array_key_exists("fin", $context) ? $context["fin"] : (function () { throw new RuntimeError('Variable "fin" does not exist.', 29, $this->source); })()) < (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 29, $this->source); })()))) {
                        // line 30
                        yield "                ";
                        $context["alertes"] = Twig\Extension\CoreExtension::merge((isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 30, $this->source); })()), [["titre" => CoreExtension::getAttribute($this->env, $this->source,                         // line 31
$context["objectif"], "titre", [], "any", false, false, false, 31), "type" => "echec", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source,                         // line 33
$context["objectif"], "id", [], "any", false, false, false, 33)])]]);
                        // line 35
                        yield "            ";
                    } elseif (((isset($context["fin"]) || array_key_exists("fin", $context) ? $context["fin"] : (function () { throw new RuntimeError('Variable "fin" does not exist.', 35, $this->source); })()) <= $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate("now", "+3 days"), "Y-m-d"))) {
                        // line 36
                        yield "                ";
                        $context["alertes"] = Twig\Extension\CoreExtension::merge((isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 36, $this->source); })()), [["titre" => CoreExtension::getAttribute($this->env, $this->source,                         // line 37
$context["objectif"], "titre", [], "any", false, false, false, 37), "type" => "bientot", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source,                         // line 39
$context["objectif"], "id", [], "any", false, false, false, 39)])]]);
                        // line 41
                        yield "            ";
                    }
                    // line 42
                    yield "        ";
                }
                // line 43
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['objectif'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 45
        yield "
";
        // line 46
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 46, $this->source); })())) > 0)) {
            // line 47
            yield "<div id=\"deadline-modal-overlay\">
    <div id=\"deadline-modal\">
        <button id=\"deadline-modal-close\">✕</button>
        <div style=\"text-align:center; margin-bottom:20px;\">
            <div style=\"font-size:2.5rem;\">🔔</div>
            <h4 style=\"color:#2d3436; font-weight:700; margin:8px 0 4px;\">Alertes Échéances</h4>
            <p style=\"color:#636e72; font-size:.88rem;\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 53, $this->source); })())), "html", null, true);
            yield " objectif(s) nécessite(nt) votre attention</p>
        </div>
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alertes"]) || array_key_exists("alertes", $context) ? $context["alertes"] : (function () { throw new RuntimeError('Variable "alertes" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
                // line 56
                yield "            <div class=\"deadline-item ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "type", [], "any", false, false, false, 56) == "echec")) {
                    yield "item-echec";
                } else {
                    yield "item-bientot";
                }
                yield "\">
                <div style=\"display:flex; align-items:center; gap:10px;\">
                    <span style=\"font-size:1.4rem;\">";
                // line 58
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "type", [], "any", false, false, false, 58) == "echec")) {
                    yield "❌";
                } else {
                    yield "⚠️";
                }
                yield "</span>
                    <div>
                        <strong>";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "titre", [], "any", false, false, false, 60), "html", null, true);
                yield "</strong><br>
                        <small>";
                // line 61
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "type", [], "any", false, false, false, 61) == "echec")) {
                    yield "Date dépassée !";
                } else {
                    yield "Expire bientôt !";
                }
                yield "</small>
                    </div>
                </div>
                ";
                // line 64
                if (CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "url", [], "any", true, true, false, 64)) {
                    // line 65
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alerte"], "url", [], "any", false, false, false, 65), "html", null, true);
                    yield "\" class=\"deadline-btn\">Voir →</a>
                ";
                }
                // line 67
                yield "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['alerte'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "        <button id=\"deadline-modal-ok\">✅ J'ai compris</button>
    </div>
</div>
";
        }
        // line 73
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
        // line 172
        yield "
";
        // line 174
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
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Objectifs</span>
                </p>
            </div>
        </div>
    </div>
</section>

";
        // line 190
        yield "<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-md-6\">
                <h2 class=\"heading-section\">Gérez vos objectifs</h2>
                <p class=\"text-muted\">Suivez votre progression et atteignez vos objectifs d'apprentissage</p>
            </div>
            <div class=\"col-md-6 text-right\">
                <a href=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recommandation_index");
        yield "\" 
                   class=\"btn btn-gradient-ai btn-lg shadow-lg mr-2\" 
                   style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                          color: white; border: none; border-radius: 10px;
                          padding: 12px 24px; transition: all 0.3s ease;\">
                    <i class=\"fa fa-magic\"></i> 🤖 Recommandations IA
                </a>
                <a href=\"";
        // line 205
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_new");
        yield "\" class=\"btn btn-primary btn-lg shadow mr-2\" style=\"border-radius: 10px;\">
                    <i class=\"fa fa-plus-circle\"></i> Nouvel Objectif
                </a>
                <a href=\"";
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index");
        yield "\" class=\"btn btn-success btn-lg shadow mr-2\" style=\"border-radius: 10px;\">
                    <i class=\"fa fa-tasks\"></i> Mes Tâches
                </a>
                <a href=\"";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_calendar");
        yield "\" class=\"btn btn-info btn-lg shadow\" style=\"border-radius:10px;\">
                    <i class=\"fa fa-calendar\"></i> Calendrier
                </a>
            </div>
        </div>

        ";
        // line 217
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 217, $this->source); })()))) {
            // line 218
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
            // line 230
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_new");
            yield "\" class=\"btn btn-primary btn-lg\">
                                    <i class=\"fa fa-plus-circle\"></i> Créer mon premier objectif
                                </a>
                                <a href=\"";
            // line 233
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
            // line 243
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
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 259, $this->source); })())), "html", null, true);
            yield " objectifs</strong> pour vous recommander 
                                    les 3 meilleurs objectifs à poursuivre !
                                </p>
                            </div>
                            <a href=\"";
            // line 263
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
            // line 274
            yield "            ";
            if (array_key_exists("gamification", $context)) {
                // line 275
                yield "            <div class=\"row mb-4\">
                ";
                // line 277
                yield "                <div class=\"col-md-4 mb-3\">
                    <div class=\"card border-0 shadow h-100 text-center p-4\"
                         style=\"border-radius:20px; background:linear-gradient(135deg, ";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 279, $this->source); })()), "niveau", [], "any", false, false, false, 279), "couleur", [], "any", false, false, false, 279), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 279, $this->source); })()), "niveau", [], "any", false, false, false, 279), "couleur", [], "any", false, false, false, 279), "html", null, true);
                yield "bb);\">
                        <div style=\"font-size:4rem;\">";
                // line 280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 280, $this->source); })()), "niveau", [], "any", false, false, false, 280), "icone", [], "any", false, false, false, 280), "html", null, true);
                yield "</div>
                        <h3 class=\"text-white mt-2 mb-1\">";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 281, $this->source); })()), "niveau", [], "any", false, false, false, 281), "label", [], "any", false, false, false, 281), "html", null, true);
                yield "</h3>
                        <p class=\"mb-2\" style=\"color:rgba(255,255,255,0.7);\">Votre niveau actuel</p>
                        <div class=\"progress mb-2\" style=\"height:10px; border-radius:10px; background:rgba(255,255,255,0.3);\">
                            <div class=\"progress-bar bg-white\" style=\"width:";
                // line 284
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 284, $this->source); })()), "progression", [], "any", false, false, false, 284), "html", null, true);
                yield "%; border-radius:10px;\"></div>
                        </div>
                        <small style=\"color:rgba(255,255,255,0.7);\">";
                // line 286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 286, $this->source); })()), "totalPoints", [], "any", false, false, false, 286), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 286, $this->source); })()), "niveau", [], "any", false, false, false, 286), "prochain", [], "any", false, false, false, 286), "html", null, true);
                yield " pts</small>
                    </div>
                </div>

                ";
                // line 291
                yield "                <div class=\"col-md-4 mb-3\">
                    <div class=\"card border-0 shadow h-100 text-center p-4\" style=\"border-radius:20px;\">
                        <div style=\"font-size:3rem;\">💎</div>
                        <h2 class=\"mb-0 mt-2\" style=\"color:#4f6df5; font-weight:800;\">";
                // line 294
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 294, $this->source); })()), "totalPoints", [], "any", false, false, false, 294), "html", null, true);
                yield "</h2>
                        <p class=\"text-muted mb-3\">Points totaux</p>
                        <div class=\"row\">
                            <div class=\"col-6 border-right\">
                                <p class=\"mb-0\"><span class=\"badge badge-success px-2\">+";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 298, $this->source); })()), "pointsTaches", [], "any", false, false, false, 298), "html", null, true);
                yield " pts</span></p>
                                <small class=\"text-muted\">";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 299, $this->source); })()), "nbTaches", [], "any", false, false, false, 299), "html", null, true);
                yield " tâche(s)</small>
                            </div>
                            <div class=\"col-6\">
                                <p class=\"mb-0\"><span class=\"badge badge-warning px-2\">+";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 302, $this->source); })()), "pointsObjectifs", [], "any", false, false, false, 302), "html", null, true);
                yield " pts</span></p>
                                <small class=\"text-muted\">";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 303, $this->source); })()), "nbObjectifs", [], "any", false, false, false, 303), "html", null, true);
                yield " obj.</small>
                            </div>
                        </div>
                    </div>
                </div>

                ";
                // line 310
                yield "                <div class=\"col-md-4 mb-3\">
                    <div class=\"card border-0 shadow h-100 p-4\" style=\"border-radius:20px;\">
                        <div style=\"font-size:2rem; margin-bottom:15px;\">🏆</div>
                        <h5 class=\"mb-3\">Badges obtenus</h5>
                        ";
                // line 314
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 314, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 314)) > 0)) {
                    // line 315
                    yield "                            <div style=\"display:flex; flex-wrap:wrap; gap:8px;\">
                                ";
                    // line 316
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 316, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 316), 0, 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                        // line 317
                        yield "                                    <div title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "nom", [], "any", false, false, false, 317), "html", null, true);
                        yield ": ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "description", [], "any", false, false, false, 317), "html", null, true);
                        yield "\" 
                                         style=\"font-size:1.8rem; cursor:pointer; transition:transform 0.2s;\">
                                        ";
                        // line 319
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "icone", [], "any", false, false, false, 319), "html", null, true);
                        yield "
                                    </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['badge'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 322
                    yield "                                ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 322, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 322)) > 4)) {
                        // line 323
                        yield "                                    <div style=\"display: flex; align-items: center; justify-content: center; 
                                              width: 40px; height: 40px; background: #f0f0f0; 
                                              border-radius: 10px; font-weight: bold; color: #666;\">
                                        +";
                        // line 326
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 326, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 326)) - 4), "html", null, true);
                        yield "
                                    </div>
                                ";
                    }
                    // line 329
                    yield "                            </div>
                            <p class=\"text-muted mt-3 mb-0\" style=\"font-size: 0.85rem;\">
                                <strong>";
                    // line 331
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["gamification"]) || array_key_exists("gamification", $context) ? $context["gamification"] : (function () { throw new RuntimeError('Variable "gamification" does not exist.', 331, $this->source); })()), "badgesObtenus", [], "any", false, false, false, 331)), "html", null, true);
                    yield "</strong> badge(s) débloqué(s)
                            </p>
                        ";
                } else {
                    // line 334
                    yield "                            <p class=\"text-muted\">Aucun badge pour le moment. Continuez vos efforts ! 💪</p>
                        ";
                }
                // line 336
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
            // line 344
            yield "
            <div class=\"row\">
                ";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 346, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["objectif"]) {
                // line 347
                yield "                    <div class=\"col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated\">
                        <div class=\"card h-100 border-0 shadow-sm hover-card\" style=\"border-radius: 15px; overflow: hidden;\">
                            <div class=\"card-header text-white 
                                ";
                // line 350
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 350) == "complete")) {
                    yield "bg-success
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 351
$context["objectif"], "statut", [], "any", false, false, false, 351) == "en_cours")) {
                    yield "bg-primary
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 352
$context["objectif"], "statut", [], "any", false, false, false, 352) == "abandonne")) {
                    yield "bg-danger
                                ";
                } else {
                    // line 353
                    yield "bg-warning";
                }
                yield "\" 
                                style=\"padding: 1.5rem;\">
                                <div class=\"d-flex justify-content-between align-items-start\">
                                    <h5 class=\"card-title mb-0 font-weight-bold\">";
                // line 356
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "titre", [], "any", false, false, false, 356), "html", null, true);
                yield "</h5>
                                    ";
                // line 357
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 357) == "complete")) {
                    // line 358
                    yield "                                        <i class=\"fa fa-check-circle fa-2x\"></i>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 359
$context["objectif"], "statut", [], "any", false, false, false, 359) == "en_cours")) {
                    // line 360
                    yield "                                        <i class=\"fa fa-spinner fa-2x\"></i>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 361
$context["objectif"], "statut", [], "any", false, false, false, 361) == "abandonne")) {
                    // line 362
                    yield "                                        <i class=\"fa fa-times-circle fa-2x\"></i>
                                    ";
                } else {
                    // line 364
                    yield "                                        <i class=\"fa fa-pause-circle fa-2x\"></i>
                                    ";
                }
                // line 366
                yield "                                </div>
                            </div>
                            <div class=\"card-body p-4\">
                                <p class=\"card-text text-muted mb-3\">
                                    ";
                // line 370
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "description", [], "any", false, false, false, 370)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "description", [], "any", false, false, false, 370), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "description", [], "any", false, false, false, 370), "html", null, true)));
                yield "
                                </p>
                                <div class=\"mb-3\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <i class=\"fa fa-calendar text-primary mr-2\"></i>
                                        <small class=\"text-muted\">
                                            <strong>Début:</strong> ";
                // line 376
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateDeb", [], "any", false, false, false, 376)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateDeb", [], "any", false, false, false, 376), "d/m/Y"), "html", null, true)) : ("Non défini"));
                yield "
                                        </small>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fa fa-calendar-check-o text-danger mr-2\"></i>
                                        <small class=\"text-muted\">
                                            <strong>Fin:</strong> ";
                // line 382
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateFin", [], "any", false, false, false, 382)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateFin", [], "any", false, false, false, 382), "d/m/Y"), "html", null, true)) : ("Non défini"));
                yield "
                                        </small>
                                    </div>
                                </div>
                                <div class=\"mb-3 pb-3 border-bottom\">
                                    <i class=\"fa fa-user text-muted mr-2\"></i>
                                    <small class=\"text-muted\">";
                // line 388
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "idUser", [], "any", false, false, false, 388), "prenom", [], "any", false, false, false, 388), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "idUser", [], "any", false, false, false, 388), "nom", [], "any", false, false, false, 388), "html", null, true);
                yield "</small>
                                </div>
                                <div class=\"mb-3\">
                                    ";
                // line 391
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 391) == "complete")) {
                    // line 392
                    yield "                                        <span class=\"badge badge-success badge-pill p-2\">✓ Complété</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 393
$context["objectif"], "statut", [], "any", false, false, false, 393) == "en_cours")) {
                    // line 394
                    yield "                                        <span class=\"badge badge-primary badge-pill p-2\">⟳ En cours</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 395
$context["objectif"], "statut", [], "any", false, false, false, 395) == "abandonne")) {
                    // line 396
                    yield "                                        <span class=\"badge badge-danger badge-pill p-2\">✗ Abandonné</span>
                                    ";
                } else {
                    // line 398
                    yield "                                        <span class=\"badge badge-warning badge-pill p-2\">⏸ En pause</span>
                                    ";
                }
                // line 400
                yield "                                </div>
                                ";
                // line 402
                yield "                                <div class=\"mb-3\">
                                    <a href=\"";
                // line 403
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 403)]), "html", null, true);
                yield "#taches\" 
                                       class=\"d-flex align-items-center text-decoration-none\"
                                       style=\"background:#eef3ff; border-radius:12px; padding:10px 14px; transition:all 0.2s;\">
                                        <i class=\"fa fa-tasks\" style=\"color:#4f6df5; font-size:1.2rem; margin-right:10px;\"></i>
                                        <div class=\"flex-grow-1\">
                                            <strong style=\"color:#2d3436; font-size:.9rem;\">";
                // line 408
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "taches", [], "any", false, false, false, 408)), "html", null, true);
                yield " tâche(s)</strong><br>
                                            <small style=\"color:#636e72;\">";
                // line 409
                $context["done"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "taches", [], "any", false, false, false, 409), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 409, $this->source); })()), "statut", [], "any", false, false, false, 409) == "terminee"); }));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["done"]) || array_key_exists("done", $context) ? $context["done"] : (function () { throw new RuntimeError('Variable "done" does not exist.', 409, $this->source); })()), "html", null, true);
                yield " terminée(s)</small>
                                        </div>
                                        <span style=\"background:#4f6df5; color:#fff; border-radius:50%; width:28px; height:28px; display:flex; align-items:center; justify-content:center; font-size:.75rem;\">
                                            <i class=\"fa fa-arrow-right\"></i>
                                        </span>
                                    </a>
                                </div>

                                <div class=\"btn-group d-flex\" role=\"group\">
                                    <a href=\"";
                // line 418
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 418)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-info btn-sm flex-fill\">
                                        <i class=\"fa fa-eye\"></i> Voir
                                    </a>
                                    <a href=\"";
                // line 422
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 422)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-warning btn-sm flex-fill\">
                                        <i class=\"fa fa-edit\"></i> Modifier
                                    </a>
                                    <button type=\"button\" class=\"btn btn-danger btn-sm flex-fill\" 
                                            data-toggle=\"modal\" data-target=\"#deleteModal";
                // line 427
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 427), "html", null, true);
                yield "\">
                                        <i class=\"fa fa-trash\"></i> Supprimer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"modal fade\" id=\"deleteModal";
                // line 435
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 435), "html", null, true);
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
                // line 448
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "titre", [], "any", false, false, false, 448), "html", null, true);
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
                // line 457
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 457)]), "html", null, true);
                yield "\" style=\"display: inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 458
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 458))), "html", null, true);
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
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['objectif'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 468
            yield "            </div>

            <div class=\"col-12 mt-5 d-flex justify-content-center\">
                ";
            // line 471
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 471, $this->source); })()));
            yield "
            </div>
        ";
        }
        // line 474
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
        return array (  876 => 474,  870 => 471,  865 => 468,  849 => 458,  845 => 457,  833 => 448,  817 => 435,  806 => 427,  798 => 422,  791 => 418,  778 => 409,  774 => 408,  766 => 403,  763 => 402,  760 => 400,  756 => 398,  752 => 396,  750 => 395,  747 => 394,  745 => 393,  742 => 392,  740 => 391,  732 => 388,  723 => 382,  714 => 376,  705 => 370,  699 => 366,  695 => 364,  691 => 362,  689 => 361,  686 => 360,  684 => 359,  681 => 358,  679 => 357,  675 => 356,  668 => 353,  663 => 352,  659 => 351,  655 => 350,  650 => 347,  646 => 346,  642 => 344,  630 => 336,  626 => 334,  620 => 331,  616 => 329,  610 => 326,  605 => 323,  602 => 322,  593 => 319,  585 => 317,  581 => 316,  578 => 315,  576 => 314,  570 => 310,  561 => 303,  557 => 302,  551 => 299,  547 => 298,  540 => 294,  535 => 291,  526 => 286,  521 => 284,  515 => 281,  511 => 280,  505 => 279,  501 => 277,  498 => 275,  495 => 274,  482 => 263,  475 => 259,  457 => 243,  444 => 233,  438 => 230,  424 => 218,  422 => 217,  413 => 211,  407 => 208,  401 => 205,  391 => 198,  381 => 190,  370 => 181,  359 => 174,  356 => 172,  256 => 73,  250 => 69,  243 => 67,  237 => 65,  235 => 64,  225 => 61,  221 => 60,  212 => 58,  202 => 56,  198 => 55,  193 => 53,  185 => 47,  183 => 46,  180 => 45,  173 => 43,  170 => 42,  167 => 41,  165 => 39,  164 => 37,  162 => 36,  159 => 35,  157 => 33,  156 => 31,  154 => 30,  151 => 29,  148 => 28,  145 => 27,  140 => 26,  137 => 25,  135 => 24,  132 => 22,  122 => 20,  120 => 18,  119 => 17,  117 => 16,  112 => 15,  108 => 14,  105 => 13,  103 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos Objectifs - Fluently{% endblock %}

{% block body %}

{# ══════════════════════════════════════════
   MODALE ALERTES ÉCHÉANCES — PHPFlasher bundle
   app.flashes() est alimenté par FlasherInterface
   depuis DeadlineNotificationSubscriber
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

{# Fallback Twig si pas de subscriber actif #}
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

{# Main Content #}
<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-md-6\">
                <h2 class=\"heading-section\">Gérez vos objectifs</h2>
                <p class=\"text-muted\">Suivez votre progression et atteignez vos objectifs d'apprentissage</p>
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

                                <div class=\"btn-group d-flex\" role=\"group\">
                                    <a href=\"{{ path('app_objectif_show', {'id': objectif.id}) }}\" 
                                       class=\"btn btn-info btn-sm flex-fill\">
                                        <i class=\"fa fa-eye\"></i> Voir
                                    </a>
                                    <a href=\"{{ path('app_objectif_edit', {'id': objectif.id}) }}\" 
                                       class=\"btn btn-warning btn-sm flex-fill\">
                                        <i class=\"fa fa-edit\"></i> Modifier
                                    </a>
                                    <button type=\"button\" class=\"btn btn-danger btn-sm flex-fill\" 
                                            data-toggle=\"modal\" data-target=\"#deleteModal{{ objectif.id }}\">
                                        <i class=\"fa fa-trash\"></i> Supprimer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

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
", "objectif/index.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\objectif\\index.html.twig");
    }
}
