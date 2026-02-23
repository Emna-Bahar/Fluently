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

/* test_student/analyse.html.twig */
class __TwigTemplate_d83e71f7497b8b7fab7c79541cea6e13 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_student/analyse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_student/analyse.html.twig"));

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

        yield "Analyse de Performance - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " - Fluently";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 6
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
<style>
    .dashboard-container {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 40px 20px;
    }
    
    .dashboard-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        margin-bottom: 30px;
        overflow: hidden;
    }
    
    .dashboard-header {
        background: linear-gradient(135deg, #4f46e5 0%, #6d28d9 100%);
        color: white;
        padding: 30px;
        text-align: center;
    }
    
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        padding: 30px;
        background: #f8f9fa;
    }
    
    .stat-card {
        background: white;
        padding: 25px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    
    .stat-value {
        font-size: 2.5rem;
        font-weight: 900;
        color: #4f46e5;
        margin: 10px 0;
    }
    
    .stat-label {
        color: #64748b;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .chart-container {
        position: relative;
        padding: 30px;
    }
    
    .competence-bar {
        margin-bottom: 20px;
    }
    
    .competence-label {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
        font-weight: 600;
    }
    
    .progress {
        height: 30px;
        border-radius: 15px;
        background: #e5e7eb;
    }
    
    .progress-bar {
        border-radius: 15px;
        transition: width 1s ease-in-out;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .recommendation-card {
        background: white;
        border-left: 5px solid;
        padding: 20px;
        margin-bottom: 15px;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    
    .recommendation-card.haute {
        border-color: #ef4444;
        background: #fef2f2;
    }
    
    .recommendation-card.moyenne {
        border-color: #f59e0b;
        background: #fffbeb;
    }
    
    .recommendation-card.basse {
        border-color: #10b981;
        background: #f0fdf4;
    }
    
    .recommendation-title {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 10px;
    }
    
    .recommendation-actions {
        list-style: none;
        padding: 0;
        margin: 10px 0;
    }
    
    .recommendation-actions li {
        padding: 5px 0;
        padding-left: 20px;
        position: relative;
    }
    
    .recommendation-actions li:before {
        content: \"→\";
        position: absolute;
        left: 0;
        color: #4f46e5;
        font-weight: bold;
    }
    
    .encouragement-banner {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        padding: 30px;
        text-align: center;
        border-radius: 15px;
        margin: 20px;
        font-size: 1.3rem;
        font-weight: 600;
    }
    
    .no-data-message {
        text-align: center;
        padding: 60px 20px;
        color: #64748b;
    }
    
    .no-data-message i {
        font-size: 5rem;
        margin-bottom: 20px;
        color: #cbd5e1;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 171
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

        // line 172
        yield "<div class=\"dashboard-container\">
    <div class=\"container\">
        ";
        // line 175
        yield "        <div class=\"dashboard-card\">
            <div class=\"dashboard-header\">
                <h1>📊 Analyse de Performance</h1>
                <p class=\"mb-0\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 178, $this->source); })()), "prenom", [], "any", false, false, false, 178), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 178, $this->source); })()), "nom", [], "any", false, false, false, 178), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 178, $this->source); })()), "nom", [], "any", false, false, false, 178), "html", null, true);
        yield "</p>
            </div>
        </div>

        ";
        // line 182
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 182, $this->source); })()), "has_data", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 183
            yield "            ";
            // line 184
            yield "            <div class=\"dashboard-card\">
                <div class=\"stats-grid\">
                    <div class=\"stat-card\">
                        <i class=\"fas fa-clipboard-check fa-2x text-primary mb-2\"></i>
                        <div class=\"stat-value\">";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 188, $this->source); })()), "stats_globales", [], "any", false, false, false, 188), "tests_passes", [], "any", false, false, false, 188), "html", null, true);
            yield "</div>
                        <div class=\"stat-label\">Tests passés</div>
                    </div>
                    
                    <div class=\"stat-card\">
                        <i class=\"fas fa-chart-line fa-2x text-success mb-2\"></i>
                        <div class=\"stat-value\">";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 194, $this->source); })()), "stats_globales", [], "any", false, false, false, 194), "score_moyen", [], "any", false, false, false, 194), "html", null, true);
            yield "%</div>
                        <div class=\"stat-label\">Score moyen</div>
                    </div>
                    
                    <div class=\"stat-card\">
                        <i class=\"fas fa-trophy fa-2x text-warning mb-2\"></i>
                        <div class=\"stat-value\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 200, $this->source); })()), "stats_globales", [], "any", false, false, false, 200), "meilleur_score", [], "any", false, false, false, 200), "html", null, true);
            yield "%</div>
                        <div class=\"stat-label\">Meilleur score</div>
                    </div>
                    
                    <div class=\"stat-card\">
                        <i class=\"fas fa-clock fa-2x text-info mb-2\"></i>
                        <div class=\"stat-value\">";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 206, $this->source); })()), "stats_globales", [], "any", false, false, false, 206), "temps_total_heures", [], "any", false, false, false, 206), "html", null, true);
            yield "h</div>
                        <div class=\"stat-label\">Temps total</div>
                    </div>
                </div>
            </div>

            ";
            // line 213
            yield "            <div class=\"dashboard-card\">
                <div class=\"chart-container\">
                    <h3 class=\"text-center mb-4\">
                        <i class=\"fas fa-radar\"></i> Radar des Compétences
                    </h3>
                    <canvas id=\"radarChart\" style=\"max-height: 400px;\"></canvas>
                </div>
            </div>

            ";
            // line 223
            yield "            <div class=\"dashboard-card\">
                <div class=\"chart-container\">
                    <h3 class=\"text-center mb-4\">
                        <i class=\"fas fa-bars-progress\"></i> Détail des Compétences
                    </h3>
                    
                    ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 229, $this->source); })()), "competences", [], "any", false, false, false, 229));
            foreach ($context['_seq'] as $context["competence"] => $context["data"]) {
                // line 230
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "count", [], "any", false, false, false, 230) > 0)) {
                    // line 231
                    yield "                            <div class=\"competence-bar\">
                                <div class=\"competence-label\">
                                    <span>
                                        <strong>";
                    // line 234
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["competence"]), "html", null, true);
                    yield "</strong>
                                        <small class=\"text-muted\">(";
                    // line 235
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "count", [], "any", false, false, false, 235), "html", null, true);
                    yield " évaluation";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "count", [], "any", false, false, false, 235) > 1)) ? ("s") : (""));
                    yield ")</small>
                                    </span>
                                    <span class=\"badge 
                                        ";
                    // line 238
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "score", [], "any", false, false, false, 238) >= 80)) {
                        yield "bg-success
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 239
$context["data"], "score", [], "any", false, false, false, 239) >= 60)) {
                        yield "bg-warning
                                        ";
                    } else {
                        // line 240
                        yield "bg-danger";
                    }
                    yield "\">
                                        ";
                    // line 241
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "niveau", [], "any", false, false, false, 241), "html", null, true);
                    yield "
                                    </span>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"progress-bar 
                                        ";
                    // line 246
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "score", [], "any", false, false, false, 246) >= 80)) {
                        yield "bg-success
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 247
$context["data"], "score", [], "any", false, false, false, 247) >= 60)) {
                        yield "bg-warning
                                        ";
                    } else {
                        // line 248
                        yield "bg-danger";
                    }
                    yield "\" 
                                         role=\"progressbar\" 
                                         style=\"width: 0%;\"
                                         data-target=\"";
                    // line 251
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "score", [], "any", false, false, false, 251), "html", null, true);
                    yield "\">
                                        ";
                    // line 252
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "score", [], "any", false, false, false, 252), "html", null, true);
                    yield "%
                                    </div>
                                </div>
                            </div>
                        ";
                }
                // line 257
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['competence'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            yield "                </div>
            </div>

            ";
            // line 262
            yield "            <div class=\"dashboard-card\">
                <div class=\"chart-container\">
                    <h3 class=\"text-center mb-4\">
                        <i class=\"fas fa-chart-area\"></i> Évolution de tes Résultats
                    </h3>
                    <canvas id=\"lineChart\" style=\"max-height: 300px;\"></canvas>
                </div>
            </div>

            ";
            // line 272
            yield "            ";
            if ((($tmp = (isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 272, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 273
                yield "                <div class=\"dashboard-card\">
                    <div class=\"chart-container\">
                        <h3 class=\"text-center mb-4\">
                            <i class=\"fas fa-lightbulb\"></i> Recommandations Personnalisées (IA)
                        </h3>
                        
                        ";
                // line 279
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 279, $this->source); })()), "recommandations", [], "any", false, false, false, 279));
                foreach ($context['_seq'] as $context["_key"] => $context["reco"]) {
                    // line 280
                    yield "                            <div class=\"recommendation-card ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "priorite", [], "any", false, false, false, 280), "html", null, true);
                    yield "\">
                                <div class=\"recommendation-title\">
                                    ";
                    // line 282
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "priorite", [], "any", false, false, false, 282) == "haute")) {
                        yield "🔴";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "priorite", [], "any", false, false, false, 282) == "moyenne")) {
                        yield "🟡";
                    } else {
                        yield "🟢";
                    }
                    // line 283
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "titre", [], "any", false, false, false, 283), "html", null, true);
                    yield "
                                </div>
                                <p class=\"mb-2\">";
                    // line 285
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "description", [], "any", false, false, false, 285), "html", null, true);
                    yield "</p>
                                <ul class=\"recommendation-actions\">
                                    ";
                    // line 287
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["reco"], "actions", [], "any", false, false, false, 287));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 288
                        yield "                                        <li>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                        yield "</li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 290
                    yield "                                </ul>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reco'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 293
                yield "                        
                        <div class=\"encouragement-banner\">
                            💪 ";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 295, $this->source); })()), "message_encouragement", [], "any", false, false, false, 295), "html", null, true);
                yield "
                        </div>
                    </div>
                </div>
            ";
            }
            // line 300
            yield "
        ";
        } else {
            // line 302
            yield "            ";
            // line 303
            yield "            <div class=\"dashboard-card\">
                <div class=\"no-data-message\">
                    <i class=\"fas fa-chart-pie\"></i>
                    <h3>Aucune donnée disponible</h3>
                    <p>Passe des tests pour voir ton analyse de performance !</p>
                    <a href=\"";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_apprentissage", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 308, $this->source); })()), "id", [], "any", false, false, false, 308)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-lg mt-3\">
                        <i class=\"fas fa-play\"></i> Commencer un test
                    </a>
                </div>
            </div>
        ";
        }
        // line 314
        yield "
        ";
        // line 316
        yield "        <div class=\"text-center mt-4 mb-4\">
            <a href=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_apprentissage", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 317, $this->source); })()), "id", [], "any", false, false, false, 317)]), "html", null, true);
        yield "\" class=\"btn btn-outline-light btn-lg\">
                <i class=\"fas fa-arrow-left\"></i> Retour au parcours
            </a>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 325
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 326
        yield from $this->yieldParentBlock("js", $context, $blocks);
        yield "

";
        // line 328
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 328, $this->source); })()), "has_data", [], "any", false, false, false, 328)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 330
            yield "<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>

<script>
// ========== DONNÉES PHP → JS ==========
const competencesData = ";
            // line 334
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 334, $this->source); })()), "competences", [], "any", false, false, false, 334));
            yield ";
const progressionData = ";
            // line 335
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 335, $this->source); })()), "progression", [], "any", false, false, false, 335));
            yield ";

// ========== GRAPHIQUE RADAR ==========
const radarCtx = document.getElementById('radarChart').getContext('2d');
const radarChart = new Chart(radarCtx, {
    type: 'radar',
    data: {
        labels: [
            'Grammaire',
            'Vocabulaire',
            'Compréhension',
            'Oral'
        ],
        datasets: [{
            label: 'Tes compétences',
            data: [
                competencesData.grammaire.score || 0,
                competencesData.vocabulaire.score || 0,
                competencesData.comprehension.score || 0,
                competencesData.oral.score || 0
            ],
            backgroundColor: 'rgba(79, 70, 229, 0.2)',
            borderColor: 'rgba(79, 70, 229, 1)',
            borderWidth: 3,
            pointBackgroundColor: 'rgba(79, 70, 229, 1)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgba(79, 70, 229, 1)',
            pointRadius: 6,
            pointHoverRadius: 8
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        scales: {
            r: {
                beginAtZero: true,
                max: 100,
                ticks: {
                    stepSize: 20,
                    font: {
                        size: 14
                    }
                },
                grid: {
                    color: 'rgba(0, 0, 0, 0.1)'
                },
                pointLabels: {
                    font: {
                        size: 16,
                        weight: 'bold'
                    }
                }
            }
        },
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        return context.parsed.r.toFixed(1) + '%';
                    }
                }
            }
        }
    }
});

// ========== GRAPHIQUE LIGNE (ÉVOLUTION) ==========
const lineCtx = document.getElementById('lineChart').getContext('2d');
const lineChart = new Chart(lineCtx, {
    type: 'line',
    data: {
        labels: progressionData.map(p => p.date),
        datasets: [{
            label: 'Score (%)',
            data: progressionData.map(p => p.score),
            backgroundColor: 'rgba(16, 185, 129, 0.1)',
            borderColor: 'rgba(16, 185, 129, 1)',
            borderWidth: 3,
            fill: true,
            tension: 0.4,
            pointRadius: 6,
            pointHoverRadius: 8,
            pointBackgroundColor: 'rgba(16, 185, 129, 1)',
            pointBorderColor: '#fff',
            pointBorderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        scales: {
            y: {
                beginAtZero: true,
                max: 100,
                ticks: {
                    callback: function(value) {
                        return value + '%';
                    }
                }
            }
        },
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        return 'Score : ' + context.parsed.y.toFixed(1) + '%';
                    },
                    afterLabel: function(context) {
                        return 'Test : ' + progressionData[context.dataIndex].test;
                    }
                }
            }
        }
    }
});

// ========== ANIMATION DES BARRES DE PROGRESSION ==========
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(() => {
        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(bar => {
            const target = bar.getAttribute('data-target');
            bar.style.width = target + '%';
        });
    }, 500);
});
</script>
";
        }
        // line 471
        yield "
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
        return "test_student/analyse.html.twig";
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
        return array (  761 => 471,  622 => 335,  618 => 334,  612 => 330,  610 => 328,  605 => 326,  592 => 325,  574 => 317,  571 => 316,  568 => 314,  559 => 308,  552 => 303,  550 => 302,  546 => 300,  538 => 295,  534 => 293,  526 => 290,  517 => 288,  513 => 287,  508 => 285,  502 => 283,  494 => 282,  488 => 280,  484 => 279,  476 => 273,  473 => 272,  462 => 262,  457 => 258,  451 => 257,  443 => 252,  439 => 251,  432 => 248,  427 => 247,  423 => 246,  415 => 241,  410 => 240,  405 => 239,  401 => 238,  393 => 235,  389 => 234,  384 => 231,  381 => 230,  377 => 229,  369 => 223,  358 => 213,  349 => 206,  340 => 200,  331 => 194,  322 => 188,  316 => 184,  314 => 183,  312 => 182,  301 => 178,  296 => 175,  292 => 172,  279 => 171,  104 => 6,  91 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Analyse de Performance - {{ langue.nom }} - Fluently{% endblock %}

{% block css %}
{{ parent() }}
<style>
    .dashboard-container {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 40px 20px;
    }
    
    .dashboard-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        margin-bottom: 30px;
        overflow: hidden;
    }
    
    .dashboard-header {
        background: linear-gradient(135deg, #4f46e5 0%, #6d28d9 100%);
        color: white;
        padding: 30px;
        text-align: center;
    }
    
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        padding: 30px;
        background: #f8f9fa;
    }
    
    .stat-card {
        background: white;
        padding: 25px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    
    .stat-value {
        font-size: 2.5rem;
        font-weight: 900;
        color: #4f46e5;
        margin: 10px 0;
    }
    
    .stat-label {
        color: #64748b;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .chart-container {
        position: relative;
        padding: 30px;
    }
    
    .competence-bar {
        margin-bottom: 20px;
    }
    
    .competence-label {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
        font-weight: 600;
    }
    
    .progress {
        height: 30px;
        border-radius: 15px;
        background: #e5e7eb;
    }
    
    .progress-bar {
        border-radius: 15px;
        transition: width 1s ease-in-out;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .recommendation-card {
        background: white;
        border-left: 5px solid;
        padding: 20px;
        margin-bottom: 15px;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    
    .recommendation-card.haute {
        border-color: #ef4444;
        background: #fef2f2;
    }
    
    .recommendation-card.moyenne {
        border-color: #f59e0b;
        background: #fffbeb;
    }
    
    .recommendation-card.basse {
        border-color: #10b981;
        background: #f0fdf4;
    }
    
    .recommendation-title {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 10px;
    }
    
    .recommendation-actions {
        list-style: none;
        padding: 0;
        margin: 10px 0;
    }
    
    .recommendation-actions li {
        padding: 5px 0;
        padding-left: 20px;
        position: relative;
    }
    
    .recommendation-actions li:before {
        content: \"→\";
        position: absolute;
        left: 0;
        color: #4f46e5;
        font-weight: bold;
    }
    
    .encouragement-banner {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        padding: 30px;
        text-align: center;
        border-radius: 15px;
        margin: 20px;
        font-size: 1.3rem;
        font-weight: 600;
    }
    
    .no-data-message {
        text-align: center;
        padding: 60px 20px;
        color: #64748b;
    }
    
    .no-data-message i {
        font-size: 5rem;
        margin-bottom: 20px;
        color: #cbd5e1;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"dashboard-container\">
    <div class=\"container\">
        {# HEADER #}
        <div class=\"dashboard-card\">
            <div class=\"dashboard-header\">
                <h1>📊 Analyse de Performance</h1>
                <p class=\"mb-0\">{{ user.prenom }} {{ user.nom }} - {{ langue.nom }}</p>
            </div>
        </div>

        {% if analysis.has_data %}
            {# STATS GLOBALES #}
            <div class=\"dashboard-card\">
                <div class=\"stats-grid\">
                    <div class=\"stat-card\">
                        <i class=\"fas fa-clipboard-check fa-2x text-primary mb-2\"></i>
                        <div class=\"stat-value\">{{ analysis.stats_globales.tests_passes }}</div>
                        <div class=\"stat-label\">Tests passés</div>
                    </div>
                    
                    <div class=\"stat-card\">
                        <i class=\"fas fa-chart-line fa-2x text-success mb-2\"></i>
                        <div class=\"stat-value\">{{ analysis.stats_globales.score_moyen }}%</div>
                        <div class=\"stat-label\">Score moyen</div>
                    </div>
                    
                    <div class=\"stat-card\">
                        <i class=\"fas fa-trophy fa-2x text-warning mb-2\"></i>
                        <div class=\"stat-value\">{{ analysis.stats_globales.meilleur_score }}%</div>
                        <div class=\"stat-label\">Meilleur score</div>
                    </div>
                    
                    <div class=\"stat-card\">
                        <i class=\"fas fa-clock fa-2x text-info mb-2\"></i>
                        <div class=\"stat-value\">{{ analysis.stats_globales.temps_total_heures }}h</div>
                        <div class=\"stat-label\">Temps total</div>
                    </div>
                </div>
            </div>

            {# GRAPHIQUE RADAR DES COMPÉTENCES #}
            <div class=\"dashboard-card\">
                <div class=\"chart-container\">
                    <h3 class=\"text-center mb-4\">
                        <i class=\"fas fa-radar\"></i> Radar des Compétences
                    </h3>
                    <canvas id=\"radarChart\" style=\"max-height: 400px;\"></canvas>
                </div>
            </div>

            {# BARRES DE PROGRESSION PAR COMPÉTENCE #}
            <div class=\"dashboard-card\">
                <div class=\"chart-container\">
                    <h3 class=\"text-center mb-4\">
                        <i class=\"fas fa-bars-progress\"></i> Détail des Compétences
                    </h3>
                    
                    {% for competence, data in analysis.competences %}
                        {% if data.count > 0 %}
                            <div class=\"competence-bar\">
                                <div class=\"competence-label\">
                                    <span>
                                        <strong>{{ competence|capitalize }}</strong>
                                        <small class=\"text-muted\">({{ data.count }} évaluation{{ data.count > 1 ? 's' : '' }})</small>
                                    </span>
                                    <span class=\"badge 
                                        {% if data.score >= 80 %}bg-success
                                        {% elseif data.score >= 60 %}bg-warning
                                        {% else %}bg-danger{% endif %}\">
                                        {{ data.niveau }}
                                    </span>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"progress-bar 
                                        {% if data.score >= 80 %}bg-success
                                        {% elseif data.score >= 60 %}bg-warning
                                        {% else %}bg-danger{% endif %}\" 
                                         role=\"progressbar\" 
                                         style=\"width: 0%;\"
                                         data-target=\"{{ data.score }}\">
                                        {{ data.score }}%
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>

            {# GRAPHIQUE D'ÉVOLUTION TEMPORELLE #}
            <div class=\"dashboard-card\">
                <div class=\"chart-container\">
                    <h3 class=\"text-center mb-4\">
                        <i class=\"fas fa-chart-area\"></i> Évolution de tes Résultats
                    </h3>
                    <canvas id=\"lineChart\" style=\"max-height: 300px;\"></canvas>
                </div>
            </div>

            {# RECOMMANDATIONS IA #}
            {% if recommendations %}
                <div class=\"dashboard-card\">
                    <div class=\"chart-container\">
                        <h3 class=\"text-center mb-4\">
                            <i class=\"fas fa-lightbulb\"></i> Recommandations Personnalisées (IA)
                        </h3>
                        
                        {% for reco in recommendations.recommandations %}
                            <div class=\"recommendation-card {{ reco.priorite }}\">
                                <div class=\"recommendation-title\">
                                    {% if reco.priorite == 'haute' %}🔴{% elseif reco.priorite == 'moyenne' %}🟡{% else %}🟢{% endif %}
                                    {{ reco.titre }}
                                </div>
                                <p class=\"mb-2\">{{ reco.description }}</p>
                                <ul class=\"recommendation-actions\">
                                    {% for action in reco.actions %}
                                        <li>{{ action }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endfor %}
                        
                        <div class=\"encouragement-banner\">
                            💪 {{ recommendations.message_encouragement }}
                        </div>
                    </div>
                </div>
            {% endif %}

        {% else %}
            {# PAS DE DONNÉES #}
            <div class=\"dashboard-card\">
                <div class=\"no-data-message\">
                    <i class=\"fas fa-chart-pie\"></i>
                    <h3>Aucune donnée disponible</h3>
                    <p>Passe des tests pour voir ton analyse de performance !</p>
                    <a href=\"{{ path('app_langue_apprentissage', {id: langue.id}) }}\" class=\"btn btn-primary btn-lg mt-3\">
                        <i class=\"fas fa-play\"></i> Commencer un test
                    </a>
                </div>
            </div>
        {% endif %}

        {# BOUTON RETOUR #}
        <div class=\"text-center mt-4 mb-4\">
            <a href=\"{{ path('app_langue_apprentissage', {id: langue.id}) }}\" class=\"btn btn-outline-light btn-lg\">
                <i class=\"fas fa-arrow-left\"></i> Retour au parcours
            </a>
        </div>
    </div>
</div>
{% endblock %}

{% block js %}
{{ parent() }}

{% if analysis.has_data %}
{# CHART.JS CDN #}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js\"></script>

<script>
// ========== DONNÉES PHP → JS ==========
const competencesData = {{ analysis.competences|json_encode|raw }};
const progressionData = {{ analysis.progression|json_encode|raw }};

// ========== GRAPHIQUE RADAR ==========
const radarCtx = document.getElementById('radarChart').getContext('2d');
const radarChart = new Chart(radarCtx, {
    type: 'radar',
    data: {
        labels: [
            'Grammaire',
            'Vocabulaire',
            'Compréhension',
            'Oral'
        ],
        datasets: [{
            label: 'Tes compétences',
            data: [
                competencesData.grammaire.score || 0,
                competencesData.vocabulaire.score || 0,
                competencesData.comprehension.score || 0,
                competencesData.oral.score || 0
            ],
            backgroundColor: 'rgba(79, 70, 229, 0.2)',
            borderColor: 'rgba(79, 70, 229, 1)',
            borderWidth: 3,
            pointBackgroundColor: 'rgba(79, 70, 229, 1)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgba(79, 70, 229, 1)',
            pointRadius: 6,
            pointHoverRadius: 8
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        scales: {
            r: {
                beginAtZero: true,
                max: 100,
                ticks: {
                    stepSize: 20,
                    font: {
                        size: 14
                    }
                },
                grid: {
                    color: 'rgba(0, 0, 0, 0.1)'
                },
                pointLabels: {
                    font: {
                        size: 16,
                        weight: 'bold'
                    }
                }
            }
        },
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        return context.parsed.r.toFixed(1) + '%';
                    }
                }
            }
        }
    }
});

// ========== GRAPHIQUE LIGNE (ÉVOLUTION) ==========
const lineCtx = document.getElementById('lineChart').getContext('2d');
const lineChart = new Chart(lineCtx, {
    type: 'line',
    data: {
        labels: progressionData.map(p => p.date),
        datasets: [{
            label: 'Score (%)',
            data: progressionData.map(p => p.score),
            backgroundColor: 'rgba(16, 185, 129, 0.1)',
            borderColor: 'rgba(16, 185, 129, 1)',
            borderWidth: 3,
            fill: true,
            tension: 0.4,
            pointRadius: 6,
            pointHoverRadius: 8,
            pointBackgroundColor: 'rgba(16, 185, 129, 1)',
            pointBorderColor: '#fff',
            pointBorderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        scales: {
            y: {
                beginAtZero: true,
                max: 100,
                ticks: {
                    callback: function(value) {
                        return value + '%';
                    }
                }
            }
        },
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        return 'Score : ' + context.parsed.y.toFixed(1) + '%';
                    },
                    afterLabel: function(context) {
                        return 'Test : ' + progressionData[context.dataIndex].test;
                    }
                }
            }
        }
    }
});

// ========== ANIMATION DES BARRES DE PROGRESSION ==========
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(() => {
        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(bar => {
            const target = bar.getAttribute('data-target');
            bar.style.width = target + '%';
        });
    }, 500);
});
</script>
{% endif %}

{% endblock %}", "test_student/analyse.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\test_student\\analyse.html.twig");
    }
}
