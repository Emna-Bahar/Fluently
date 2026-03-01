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

/* recommandation/index.html.twig */
class __TwigTemplate_a61c708711678844e11e9f52139f15be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recommandation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recommandation/index.html.twig"));

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

        yield "Recommandations IA - Fluently";
        
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

        // line 7
        yield "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_1.jpg"), "html", null, true);
        yield "');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">🤖 Recommandations IA</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Recommandations personnalisées</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section bg-light\">
    <div class=\"container\">

        <div class=\"row mb-4 align-items-center\">
            <div class=\"col-md-6\">
                <h2 class=\"heading-section mb-1\">Votre Dashboard</h2>
                <p class=\"text-muted mb-0\">Analyse intelligente de votre progression</p>
            </div>
            <div class=\"col-md-6 text-right\">
                <span class=\"badge badge-success px-3 py-2 mr-2\">
                    <i class=\"fa fa-bolt\"></i> Groq AI — Gratuit
                </span>
                <button id=\"btnGenerer\" class=\"btn btn-primary btn-lg\">
                    <i class=\"fa fa-magic\"></i> Générer recommandations
                </button>
            </div>
        </div>

        ";
        // line 41
        yield "        <div class=\"row mb-4\">
            <div class=\"col-md-3\">
                <div class=\"card border-0 shadow-sm text-center p-3\">
                    <div class=\"text-primary mb-2\" style=\"font-size: 2rem;\">📊</div>
                    <h3 class=\"mb-1\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 45, $this->source); })()), "total", [], "any", false, false, false, 45), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Total objectifs</small>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card border-0 shadow-sm text-center p-3\">
                    <div class=\"text-success mb-2\" style=\"font-size: 2rem;\">✓</div>
                    <h3 class=\"mb-1\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 52, $this->source); })()), "tauxCompletion", [], "any", false, false, false, 52), "html", null, true);
        yield "%</h3>
                    <small class=\"text-muted\">Taux complétion</small>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card border-0 shadow-sm text-center p-3\">
                    <div class=\"text-warning mb-2\" style=\"font-size: 2rem;\">⚡</div>
                    <h3 class=\"mb-1\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "tachesTerminees", [], "any", false, false, false, 59), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "totalTaches", [], "any", false, false, false, 59), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Tâches terminées</small>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card border-0 shadow-sm text-center p-3\">
                    <div class=\"text-danger mb-2\" style=\"font-size: 2rem;\">⏰</div>
                    <h3 class=\"mb-1\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 66, $this->source); })()), "tachesBloquees", [], "any", false, false, false, 66), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Tâches bloquées</small>
                </div>
            </div>
        </div>

        ";
        // line 73
        yield "        <div id=\"iaLoader\" style=\"display:none\" class=\"card border-0 shadow-sm mb-4\">
            <div class=\"card-body text-center py-5\">
                <div class=\"spinner-border text-primary mb-3\" style=\"width:3rem;height:3rem\"></div>
                <h5 class=\"fw-bold\">Analyse en cours...</h5>
                <p class=\"text-muted mb-0\">L'IA analyse vos ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 77, $this->source); })()), "total", [], "any", false, false, false, 77), "html", null, true);
        yield " objectifs ⚡</p>
            </div>
        </div>

        ";
        // line 82
        yield "        <div id=\"iaResultats\" style=\"display:none\">
            <div class=\"card border-0 shadow-lg mb-4\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px;\">
                <div class=\"card-body p-4 text-white\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-10\">
                            <div class=\"d-flex align-items-center mb-3\">
                                <div style=\"font-size:3rem\" class=\"mr-3\">🤖</div>
                                <div>
                                    <h4 class=\"mb-0\">Analyse IA complète</h4>
                                    <small>Basée sur vos données réelles</small>
                                </div>
                            </div>
                            <p id=\"analyseTexte\" class=\"mb-3\"></p>
                            <div class=\"d-flex gap-3 flex-wrap\">
                                <div class=\"mr-3\">
                                    <small class=\"d-block mb-1 opacity-75\">Niveau</small>
                                    <span id=\"niveauBadge\" class=\"badge badge-light text-dark px-3 py-2\"></span>
                                </div>
                                <div class=\"mr-3\">
                                    <small class=\"d-block mb-1 opacity-75\">Score</small>
                                    <span id=\"scoreBadge\" class=\"badge badge-light text-dark px-3 py-2\"></span>
                                </div>
                                <div>
                                    <small class=\"d-block mb-1 opacity-75\">Source</small>
                                    <span id=\"modeBadge\" class=\"badge badge-light text-dark px-3 py-2\"></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-2 text-center d-none d-md-block\">
                            <div id=\"iaEmoji\" style=\"font-size:4rem\">🎯</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                    <div class=\"card border-0 shadow-sm h-100\">
                        <div class=\"card-header bg-white border-0 py-3\">
                            <h6 class=\"mb-0 text-success\"><i class=\"fa fa-check-circle mr-2\"></i>Points forts</h6>
                        </div>
                        <div class=\"card-body\">
                            <ul id=\"pointsForts\" class=\"list-unstyled mb-0\"></ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"card border-0 shadow-sm h-100\">
                        <div class=\"card-header bg-white border-0 py-3\">
                            <h6 class=\"mb-0 text-warning\"><i class=\"fa fa-arrow-up mr-2\"></i>Axes d'amélioration</h6>
                        </div>
                        <div class=\"card-body\">
                            <ul id=\"axesAmelioration\" class=\"list-unstyled mb-0\"></ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                <h4 class=\"mb-0\"><i class=\"fa fa-star text-warning mr-2\"></i>3 Objectifs recommandés</h4>
                <button id=\"btnRegenerer\" class=\"btn btn-outline-primary btn-sm\">
                    <i class=\"fa fa-refresh mr-1\"></i>Régénérer
                </button>
            </div>

            <div id=\"recommandationsContainer\" class=\"row\"></div>
        </div>

        ";
        // line 151
        yield "        <div id=\"iaInitial\" class=\"card border-0 shadow-sm\">
            <div class=\"card-body text-center py-5\">
                <div style=\"font-size:5rem\" class=\"mb-3\">🤖</div>
                <h4 class=\"mb-2\">Prêt à analyser votre progression</h4>
                <p class=\"text-muted mb-1\">
                    L'IA va analyser vos <strong>";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 156, $this->source); })()), "total", [], "any", false, false, false, 156), "html", null, true);
        yield " objectifs</strong>
                    et <strong>";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 157, $this->source); })()), "totalTaches", [], "any", false, false, false, 157), "html", null, true);
        yield " tâches</strong>
                </p>
                <p class=\"text-muted mb-4\">pour proposer les <strong>3 meilleurs objectifs</strong> personnalisés.</p>

                ";
        // line 161
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 161, $this->source); })()), "total", [], "any", false, false, false, 161) == 0)) {
            // line 162
            yield "                    <div class=\"alert alert-warning d-inline-block\">
                        <i class=\"fa fa-warning mr-2\"></i>
                        Aucun objectif trouvé.
                        <a href=\"";
            // line 165
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_new");
            yield "\">Créez d'abord un objectif</a>
                    </div>
                ";
        } else {
            // line 168
            yield "                    <button id=\"btnGenererInitial\" class=\"btn btn-primary btn-lg px-5\">
                        <i class=\"fa fa-magic mr-2\"></i>Générer mes recommandations
                    </button>
                    <p class=\"text-muted small mt-3\">
                        <i class=\"fa fa-bolt mr-1\"></i>
                        Propulsé par <strong>Groq AI</strong> (LLaMA 3) — 100% gratuit
                    </p>
                ";
        }
        // line 176
        yield "            </div>
        </div>

    </div>
</section>

";
        // line 183
        yield "<div id=\"toast\" style=\"display:none; position:fixed; top:20px; right:20px; z-index:9999; min-width:300px;\">
    <div class=\"alert mb-0 shadow-lg\" role=\"alert\" id=\"toastContent\"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var btnGenerer        = document.getElementById('btnGenerer');
    var btnGenererInitial = document.getElementById('btnGenererInitial');
    var btnRegenerer      = document.getElementById('btnRegenerer');
    var iaLoader          = document.getElementById('iaLoader');
    var iaResultats       = document.getElementById('iaResultats');
    var iaInitial         = document.getElementById('iaInitial');

    var COLORS  = { facile: 'success', moyen: 'warning', difficile: 'danger' };
    var NIVEAUX = { 'débutant': '🌱 Débutant', 'intermédiaire': '🚀 Intermédiaire', 'avancé': '🏆 Avancé' };
    var EMOJIS  = { 'débutant': '🌱', 'intermédiaire': '🚀', 'avancé': '🏆' };

    // ── Toast ──
    function showToast(message, type) {
        type = type || 'success';
        var toast        = document.getElementById('toast');
        var toastContent = document.getElementById('toastContent');
        toastContent.className = 'alert mb-0 shadow-lg alert-' + type;
        toastContent.innerHTML = '<i class=\"fa fa-' + (type === 'success' ? 'check-circle' : type === 'info' ? 'info-circle' : 'exclamation-circle') + ' mr-2\"></i>' + message;
        toast.style.display = 'block';
        if (type !== 'info') {
            setTimeout(function() { toast.style.display = 'none'; }, 4000);
        }
    }

    // ── Lancer l'analyse IA ──
    function lancer() {
        iaInitial.style.display   = 'none';
        iaResultats.style.display = 'none';
        iaLoader.style.display    = 'block';
        btnGenerer.disabled       = true;
        btnGenerer.innerHTML      = '<i class=\"fa fa-spinner fa-spin mr-2\"></i>Analyse...';

        fetch('";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recommandation_generer");
        yield "', {
            method:  'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(function(r) { return r.json(); })
        .then(function(resp) {
            iaLoader.style.display  = 'none';
            btnGenerer.disabled     = false;
            btnGenerer.innerHTML    = '<i class=\"fa fa-refresh mr-2\"></i>Régénérer';

            if (resp.success) {
                afficher(resp.data, resp.mode || 'demo');
            } else {
                showToast(resp.message || 'Erreur inconnue', 'danger');
                iaInitial.style.display = 'block';
            }
        })
        .catch(function() {
            iaLoader.style.display  = 'none';
            btnGenerer.disabled     = false;
            btnGenerer.innerHTML    = '<i class=\"fa fa-magic mr-2\"></i>Générer recommandations';
            showToast('Erreur de connexion réseau', 'danger');
            iaInitial.style.display = 'block';
        });
    }

    // ── Créer objectif + redirection ──
    function creerObjectif(recommandation) {
        // Afficher toast + désactiver tous les boutons
        showToast('⏳ Création de l\\'objectif en cours...', 'info');
        document.querySelectorAll('.btn-creer').forEach(function(b) {
            b.disabled = true;
            b.innerHTML = '<i class=\"fa fa-spinner fa-spin mr-1\"></i>Création...';
        });

        fetch('";
        // line 256
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recommandation_creer_objectif");
        yield "', {
            method: 'POST',
            headers: {
                'Content-Type':    'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify(recommandation)
        })
        .then(function(r) { return r.json(); })
        .then(function(resp) {
            if (resp.success) {
                // ✅ Succès → toast + redirection automatique
                showToast('🎯 Objectif \"' + resp.objectif.titre + '\" créé avec succès ! Redirection...', 'success');
                setTimeout(function() {
                    window.location.href = '";
        // line 270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "';
                }, 1500);
            } else {
                showToast('Erreur : ' + (resp.message || 'Erreur inconnue'), 'danger');
                document.querySelectorAll('.btn-creer').forEach(function(b) {
                    b.disabled = false;
                    b.innerHTML = '<i class=\"fa fa-plus mr-1\"></i>Créer cet objectif';
                });
            }
        })
        .catch(function() {
            showToast('Erreur de connexion', 'danger');
            document.querySelectorAll('.btn-creer').forEach(function(b) {
                b.disabled = false;
                b.innerHTML = '<i class=\"fa fa-plus mr-1\"></i>Créer cet objectif';
            });
        });
    }

    // ── Afficher les résultats ──
    function afficher(data, mode) {
        document.getElementById('analyseTexte').textContent = data.analyse || '';
        document.getElementById('niveauBadge').textContent  = NIVEAUX[data.niveau] || data.niveau || '';
        document.getElementById('scoreBadge').textContent   = '📊 ' + (data.score_progression || 0) + '%';
        document.getElementById('iaEmoji').textContent      = EMOJIS[data.niveau] || '🎯';

        document.getElementById('modeBadge').textContent = mode === 'groq' ? '⚡ Groq AI' : '🔧 Mode démo';

        // Points forts
        var pfEl = document.getElementById('pointsForts');
        pfEl.innerHTML = '';
        (data.points_forts || []).forEach(function(p) {
            pfEl.innerHTML += '<li class=\"mb-2\"><i class=\"fa fa-check text-success mr-2\"></i>' + p + '</li>';
        });

        // Axes amélioration
        var aaEl = document.getElementById('axesAmelioration');
        aaEl.innerHTML = '';
        (data.axes_amelioration || []).forEach(function(a) {
            aaEl.innerHTML += '<li class=\"mb-2\"><i class=\"fa fa-arrow-up text-warning mr-2\"></i>' + a + '</li>';
        });

        // Cartes recommandations
        var container = document.getElementById('recommandationsContainer');
        container.innerHTML = '';

        (data.recommandations || []).forEach(function(reco) {
            var color = COLORS[reco.difficulte] || 'primary';

            var tachesHTML = '';
            (reco.taches || []).forEach(function(t) {
                tachesHTML += '<li class=\"mb-1\"><i class=\"fa fa-check-circle text-muted mr-2\" style=\"font-size:0.8rem\"></i>' + t.titre + '</li>';
            });

            container.innerHTML += '<div class=\"col-md-4 mb-4\">'
                + '<div class=\"card border-0 shadow-sm h-100 reco-card\">'
                + '<div class=\"card-body\">'
                + '<div class=\"d-flex justify-content-between align-items-start mb-3\">'
                + '<span class=\"badge badge-' + color + '\">' + reco.difficulte + '</span>'
                + '<span style=\"font-size:2rem\">' + (reco.emoji || '🎯') + '</span>'
                + '</div>'
                + '<h5 class=\"mb-2\">' + reco.titre + '</h5>'
                + '<p class=\"text-muted small mb-3\">' + reco.description + '</p>'
                + '<div class=\"bg-light p-2 rounded mb-3\"><small><strong>💡 Pourquoi ?</strong> ' + reco.pourquoi + '</small></div>'
                + '<div class=\"mb-2\">'
                + '<small class=\"text-muted\"><i class=\"fa fa-clock-o mr-1\"></i>' + reco.duree_semaines + ' semaines</small>'
                + '<span class=\"mx-2\">•</span>'
                + '<small class=\"text-muted\"><i class=\"fa fa-flag mr-1\"></i>Priorité ' + reco.priorite + '</small>'
                + '</div>'
                + '<p class=\"small mb-2 font-weight-bold\">Tâches suggérées :</p>'
                + '<ul class=\"small mb-3 pl-3\">' + tachesHTML + '</ul>'
                + '</div>'
                + '<div class=\"card-footer bg-white border-0\">'
                + '<button class=\"btn btn-' + color + ' btn-block btn-creer\" data-reco=\\'' + JSON.stringify(reco) + '\\'>'
                + '<i class=\"fa fa-plus mr-1\"></i>Créer cet objectif'
                + '</button>'
                + '</div>'
                + '</div>'
                + '</div>';
        });

        // ✅ Événements sur boutons \"Créer\"
        document.querySelectorAll('.btn-creer').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var reco = JSON.parse(this.getAttribute('data-reco'));
                creerObjectif(reco);
            });
        });

        iaResultats.style.display = 'block';
        iaResultats.scrollIntoView({ behavior: 'smooth' });
    }

    // Boutons
    if (btnGenerer)        btnGenerer.addEventListener('click', lancer);
    if (btnGenererInitial) btnGenererInitial.addEventListener('click', lancer);
    if (btnRegenerer)      btnRegenerer.addEventListener('click', lancer);
});
</script>

<style>
.reco-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border-radius: 12px !important;
}
.reco-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
}
.card { border-radius: 12px; }
#toast { animation: slideIn 0.3s ease; }
@keyframes slideIn {
    from { transform: translateX(100%); }
    to   { transform: translateX(0); }
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
        return "recommandation/index.html.twig";
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
        return array (  414 => 270,  397 => 256,  359 => 221,  319 => 183,  311 => 176,  301 => 168,  295 => 165,  290 => 162,  288 => 161,  281 => 157,  277 => 156,  270 => 151,  200 => 82,  193 => 77,  187 => 73,  178 => 66,  166 => 59,  156 => 52,  146 => 45,  140 => 41,  111 => 14,  100 => 7,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recommandations IA - Fluently{% endblock %}

{% block body %}
{# Hero Section #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_1.jpg') }}');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">🤖 Recommandations IA</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"{{ path('app_home') }}\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Recommandations personnalisées</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section bg-light\">
    <div class=\"container\">

        <div class=\"row mb-4 align-items-center\">
            <div class=\"col-md-6\">
                <h2 class=\"heading-section mb-1\">Votre Dashboard</h2>
                <p class=\"text-muted mb-0\">Analyse intelligente de votre progression</p>
            </div>
            <div class=\"col-md-6 text-right\">
                <span class=\"badge badge-success px-3 py-2 mr-2\">
                    <i class=\"fa fa-bolt\"></i> Groq AI — Gratuit
                </span>
                <button id=\"btnGenerer\" class=\"btn btn-primary btn-lg\">
                    <i class=\"fa fa-magic\"></i> Générer recommandations
                </button>
            </div>
        </div>

        {# Stats Cards #}
        <div class=\"row mb-4\">
            <div class=\"col-md-3\">
                <div class=\"card border-0 shadow-sm text-center p-3\">
                    <div class=\"text-primary mb-2\" style=\"font-size: 2rem;\">📊</div>
                    <h3 class=\"mb-1\">{{ stats.total }}</h3>
                    <small class=\"text-muted\">Total objectifs</small>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card border-0 shadow-sm text-center p-3\">
                    <div class=\"text-success mb-2\" style=\"font-size: 2rem;\">✓</div>
                    <h3 class=\"mb-1\">{{ stats.tauxCompletion }}%</h3>
                    <small class=\"text-muted\">Taux complétion</small>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card border-0 shadow-sm text-center p-3\">
                    <div class=\"text-warning mb-2\" style=\"font-size: 2rem;\">⚡</div>
                    <h3 class=\"mb-1\">{{ stats.tachesTerminees }}/{{ stats.totalTaches }}</h3>
                    <small class=\"text-muted\">Tâches terminées</small>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"card border-0 shadow-sm text-center p-3\">
                    <div class=\"text-danger mb-2\" style=\"font-size: 2rem;\">⏰</div>
                    <h3 class=\"mb-1\">{{ stats.tachesBloquees }}</h3>
                    <small class=\"text-muted\">Tâches bloquées</small>
                </div>
            </div>
        </div>

        {# Loader #}
        <div id=\"iaLoader\" style=\"display:none\" class=\"card border-0 shadow-sm mb-4\">
            <div class=\"card-body text-center py-5\">
                <div class=\"spinner-border text-primary mb-3\" style=\"width:3rem;height:3rem\"></div>
                <h5 class=\"fw-bold\">Analyse en cours...</h5>
                <p class=\"text-muted mb-0\">L'IA analyse vos {{ stats.total }} objectifs ⚡</p>
            </div>
        </div>

        {# Résultats IA #}
        <div id=\"iaResultats\" style=\"display:none\">
            <div class=\"card border-0 shadow-lg mb-4\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px;\">
                <div class=\"card-body p-4 text-white\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-10\">
                            <div class=\"d-flex align-items-center mb-3\">
                                <div style=\"font-size:3rem\" class=\"mr-3\">🤖</div>
                                <div>
                                    <h4 class=\"mb-0\">Analyse IA complète</h4>
                                    <small>Basée sur vos données réelles</small>
                                </div>
                            </div>
                            <p id=\"analyseTexte\" class=\"mb-3\"></p>
                            <div class=\"d-flex gap-3 flex-wrap\">
                                <div class=\"mr-3\">
                                    <small class=\"d-block mb-1 opacity-75\">Niveau</small>
                                    <span id=\"niveauBadge\" class=\"badge badge-light text-dark px-3 py-2\"></span>
                                </div>
                                <div class=\"mr-3\">
                                    <small class=\"d-block mb-1 opacity-75\">Score</small>
                                    <span id=\"scoreBadge\" class=\"badge badge-light text-dark px-3 py-2\"></span>
                                </div>
                                <div>
                                    <small class=\"d-block mb-1 opacity-75\">Source</small>
                                    <span id=\"modeBadge\" class=\"badge badge-light text-dark px-3 py-2\"></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-2 text-center d-none d-md-block\">
                            <div id=\"iaEmoji\" style=\"font-size:4rem\">🎯</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                    <div class=\"card border-0 shadow-sm h-100\">
                        <div class=\"card-header bg-white border-0 py-3\">
                            <h6 class=\"mb-0 text-success\"><i class=\"fa fa-check-circle mr-2\"></i>Points forts</h6>
                        </div>
                        <div class=\"card-body\">
                            <ul id=\"pointsForts\" class=\"list-unstyled mb-0\"></ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"card border-0 shadow-sm h-100\">
                        <div class=\"card-header bg-white border-0 py-3\">
                            <h6 class=\"mb-0 text-warning\"><i class=\"fa fa-arrow-up mr-2\"></i>Axes d'amélioration</h6>
                        </div>
                        <div class=\"card-body\">
                            <ul id=\"axesAmelioration\" class=\"list-unstyled mb-0\"></ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                <h4 class=\"mb-0\"><i class=\"fa fa-star text-warning mr-2\"></i>3 Objectifs recommandés</h4>
                <button id=\"btnRegenerer\" class=\"btn btn-outline-primary btn-sm\">
                    <i class=\"fa fa-refresh mr-1\"></i>Régénérer
                </button>
            </div>

            <div id=\"recommandationsContainer\" class=\"row\"></div>
        </div>

        {# État initial #}
        <div id=\"iaInitial\" class=\"card border-0 shadow-sm\">
            <div class=\"card-body text-center py-5\">
                <div style=\"font-size:5rem\" class=\"mb-3\">🤖</div>
                <h4 class=\"mb-2\">Prêt à analyser votre progression</h4>
                <p class=\"text-muted mb-1\">
                    L'IA va analyser vos <strong>{{ stats.total }} objectifs</strong>
                    et <strong>{{ stats.totalTaches }} tâches</strong>
                </p>
                <p class=\"text-muted mb-4\">pour proposer les <strong>3 meilleurs objectifs</strong> personnalisés.</p>

                {% if stats.total == 0 %}
                    <div class=\"alert alert-warning d-inline-block\">
                        <i class=\"fa fa-warning mr-2\"></i>
                        Aucun objectif trouvé.
                        <a href=\"{{ path('app_objectif_new') }}\">Créez d'abord un objectif</a>
                    </div>
                {% else %}
                    <button id=\"btnGenererInitial\" class=\"btn btn-primary btn-lg px-5\">
                        <i class=\"fa fa-magic mr-2\"></i>Générer mes recommandations
                    </button>
                    <p class=\"text-muted small mt-3\">
                        <i class=\"fa fa-bolt mr-1\"></i>
                        Propulsé par <strong>Groq AI</strong> (LLaMA 3) — 100% gratuit
                    </p>
                {% endif %}
            </div>
        </div>

    </div>
</section>

{# Toast notification #}
<div id=\"toast\" style=\"display:none; position:fixed; top:20px; right:20px; z-index:9999; min-width:300px;\">
    <div class=\"alert mb-0 shadow-lg\" role=\"alert\" id=\"toastContent\"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var btnGenerer        = document.getElementById('btnGenerer');
    var btnGenererInitial = document.getElementById('btnGenererInitial');
    var btnRegenerer      = document.getElementById('btnRegenerer');
    var iaLoader          = document.getElementById('iaLoader');
    var iaResultats       = document.getElementById('iaResultats');
    var iaInitial         = document.getElementById('iaInitial');

    var COLORS  = { facile: 'success', moyen: 'warning', difficile: 'danger' };
    var NIVEAUX = { 'débutant': '🌱 Débutant', 'intermédiaire': '🚀 Intermédiaire', 'avancé': '🏆 Avancé' };
    var EMOJIS  = { 'débutant': '🌱', 'intermédiaire': '🚀', 'avancé': '🏆' };

    // ── Toast ──
    function showToast(message, type) {
        type = type || 'success';
        var toast        = document.getElementById('toast');
        var toastContent = document.getElementById('toastContent');
        toastContent.className = 'alert mb-0 shadow-lg alert-' + type;
        toastContent.innerHTML = '<i class=\"fa fa-' + (type === 'success' ? 'check-circle' : type === 'info' ? 'info-circle' : 'exclamation-circle') + ' mr-2\"></i>' + message;
        toast.style.display = 'block';
        if (type !== 'info') {
            setTimeout(function() { toast.style.display = 'none'; }, 4000);
        }
    }

    // ── Lancer l'analyse IA ──
    function lancer() {
        iaInitial.style.display   = 'none';
        iaResultats.style.display = 'none';
        iaLoader.style.display    = 'block';
        btnGenerer.disabled       = true;
        btnGenerer.innerHTML      = '<i class=\"fa fa-spinner fa-spin mr-2\"></i>Analyse...';

        fetch('{{ path('app_recommandation_generer') }}', {
            method:  'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(function(r) { return r.json(); })
        .then(function(resp) {
            iaLoader.style.display  = 'none';
            btnGenerer.disabled     = false;
            btnGenerer.innerHTML    = '<i class=\"fa fa-refresh mr-2\"></i>Régénérer';

            if (resp.success) {
                afficher(resp.data, resp.mode || 'demo');
            } else {
                showToast(resp.message || 'Erreur inconnue', 'danger');
                iaInitial.style.display = 'block';
            }
        })
        .catch(function() {
            iaLoader.style.display  = 'none';
            btnGenerer.disabled     = false;
            btnGenerer.innerHTML    = '<i class=\"fa fa-magic mr-2\"></i>Générer recommandations';
            showToast('Erreur de connexion réseau', 'danger');
            iaInitial.style.display = 'block';
        });
    }

    // ── Créer objectif + redirection ──
    function creerObjectif(recommandation) {
        // Afficher toast + désactiver tous les boutons
        showToast('⏳ Création de l\\'objectif en cours...', 'info');
        document.querySelectorAll('.btn-creer').forEach(function(b) {
            b.disabled = true;
            b.innerHTML = '<i class=\"fa fa-spinner fa-spin mr-1\"></i>Création...';
        });

        fetch('{{ path('app_recommandation_creer_objectif') }}', {
            method: 'POST',
            headers: {
                'Content-Type':    'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify(recommandation)
        })
        .then(function(r) { return r.json(); })
        .then(function(resp) {
            if (resp.success) {
                // ✅ Succès → toast + redirection automatique
                showToast('🎯 Objectif \"' + resp.objectif.titre + '\" créé avec succès ! Redirection...', 'success');
                setTimeout(function() {
                    window.location.href = '{{ path('app_objectif_index') }}';
                }, 1500);
            } else {
                showToast('Erreur : ' + (resp.message || 'Erreur inconnue'), 'danger');
                document.querySelectorAll('.btn-creer').forEach(function(b) {
                    b.disabled = false;
                    b.innerHTML = '<i class=\"fa fa-plus mr-1\"></i>Créer cet objectif';
                });
            }
        })
        .catch(function() {
            showToast('Erreur de connexion', 'danger');
            document.querySelectorAll('.btn-creer').forEach(function(b) {
                b.disabled = false;
                b.innerHTML = '<i class=\"fa fa-plus mr-1\"></i>Créer cet objectif';
            });
        });
    }

    // ── Afficher les résultats ──
    function afficher(data, mode) {
        document.getElementById('analyseTexte').textContent = data.analyse || '';
        document.getElementById('niveauBadge').textContent  = NIVEAUX[data.niveau] || data.niveau || '';
        document.getElementById('scoreBadge').textContent   = '📊 ' + (data.score_progression || 0) + '%';
        document.getElementById('iaEmoji').textContent      = EMOJIS[data.niveau] || '🎯';

        document.getElementById('modeBadge').textContent = mode === 'groq' ? '⚡ Groq AI' : '🔧 Mode démo';

        // Points forts
        var pfEl = document.getElementById('pointsForts');
        pfEl.innerHTML = '';
        (data.points_forts || []).forEach(function(p) {
            pfEl.innerHTML += '<li class=\"mb-2\"><i class=\"fa fa-check text-success mr-2\"></i>' + p + '</li>';
        });

        // Axes amélioration
        var aaEl = document.getElementById('axesAmelioration');
        aaEl.innerHTML = '';
        (data.axes_amelioration || []).forEach(function(a) {
            aaEl.innerHTML += '<li class=\"mb-2\"><i class=\"fa fa-arrow-up text-warning mr-2\"></i>' + a + '</li>';
        });

        // Cartes recommandations
        var container = document.getElementById('recommandationsContainer');
        container.innerHTML = '';

        (data.recommandations || []).forEach(function(reco) {
            var color = COLORS[reco.difficulte] || 'primary';

            var tachesHTML = '';
            (reco.taches || []).forEach(function(t) {
                tachesHTML += '<li class=\"mb-1\"><i class=\"fa fa-check-circle text-muted mr-2\" style=\"font-size:0.8rem\"></i>' + t.titre + '</li>';
            });

            container.innerHTML += '<div class=\"col-md-4 mb-4\">'
                + '<div class=\"card border-0 shadow-sm h-100 reco-card\">'
                + '<div class=\"card-body\">'
                + '<div class=\"d-flex justify-content-between align-items-start mb-3\">'
                + '<span class=\"badge badge-' + color + '\">' + reco.difficulte + '</span>'
                + '<span style=\"font-size:2rem\">' + (reco.emoji || '🎯') + '</span>'
                + '</div>'
                + '<h5 class=\"mb-2\">' + reco.titre + '</h5>'
                + '<p class=\"text-muted small mb-3\">' + reco.description + '</p>'
                + '<div class=\"bg-light p-2 rounded mb-3\"><small><strong>💡 Pourquoi ?</strong> ' + reco.pourquoi + '</small></div>'
                + '<div class=\"mb-2\">'
                + '<small class=\"text-muted\"><i class=\"fa fa-clock-o mr-1\"></i>' + reco.duree_semaines + ' semaines</small>'
                + '<span class=\"mx-2\">•</span>'
                + '<small class=\"text-muted\"><i class=\"fa fa-flag mr-1\"></i>Priorité ' + reco.priorite + '</small>'
                + '</div>'
                + '<p class=\"small mb-2 font-weight-bold\">Tâches suggérées :</p>'
                + '<ul class=\"small mb-3 pl-3\">' + tachesHTML + '</ul>'
                + '</div>'
                + '<div class=\"card-footer bg-white border-0\">'
                + '<button class=\"btn btn-' + color + ' btn-block btn-creer\" data-reco=\\'' + JSON.stringify(reco) + '\\'>'
                + '<i class=\"fa fa-plus mr-1\"></i>Créer cet objectif'
                + '</button>'
                + '</div>'
                + '</div>'
                + '</div>';
        });

        // ✅ Événements sur boutons \"Créer\"
        document.querySelectorAll('.btn-creer').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var reco = JSON.parse(this.getAttribute('data-reco'));
                creerObjectif(reco);
            });
        });

        iaResultats.style.display = 'block';
        iaResultats.scrollIntoView({ behavior: 'smooth' });
    }

    // Boutons
    if (btnGenerer)        btnGenerer.addEventListener('click', lancer);
    if (btnGenererInitial) btnGenererInitial.addEventListener('click', lancer);
    if (btnRegenerer)      btnRegenerer.addEventListener('click', lancer);
});
</script>

<style>
.reco-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border-radius: 12px !important;
}
.reco-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
}
.card { border-radius: 12px; }
#toast { animation: slideIn 0.3s ease; }
@keyframes slideIn {
    from { transform: translateX(100%); }
    to   { transform: translateX(0); }
}
</style>

{% endblock %}
", "recommandation/index.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\recommandation\\index.html.twig");
    }
}
