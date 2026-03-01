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

/* gamification/index.html.twig */
class __TwigTemplate_a4d4f71c5aa65c657153596f6db87d11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gamification/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gamification/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Gamification - Fluently";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_1.jpg"), "html", null, true);
        yield "');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">🏆 Mes Récompenses</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Gamification</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section bg-light\">
<div class=\"container\">

    ";
        // line 25
        yield "    <div class=\"row mb-4\">

        ";
        // line 28
        yield "        <div class=\"col-md-4 mb-3\">
            <div class=\"card border-0 shadow h-100 text-center p-4\"
                 style=\"border-radius:20px; background:linear-gradient(135deg, ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 30, $this->source); })()), "couleur", [], "any", false, false, false, 30), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 30, $this->source); })()), "couleur", [], "any", false, false, false, 30), "html", null, true);
        yield "bb);\">
                <div style=\"font-size:4rem;\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 31, $this->source); })()), "icone", [], "any", false, false, false, 31), "html", null, true);
        yield "</div>
                <h3 class=\"text-white mt-2 mb-1\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 32, $this->source); })()), "label", [], "any", false, false, false, 32), "html", null, true);
        yield "</h3>
                <p class=\"mb-2\" style=\"color:rgba(255,255,255,0.7);\">Votre niveau actuel</p>
                <div class=\"progress mb-2\" style=\"height:10px; border-radius:10px; background:rgba(255,255,255,0.3);\">
                    <div class=\"progress-bar bg-white\" style=\"width:";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progression"]) || array_key_exists("progression", $context) ? $context["progression"] : (function () { throw new RuntimeError('Variable "progression" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "%; border-radius:10px;\"></div>
                </div>
                <small style=\"color:rgba(255,255,255,0.7);\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPoints"]) || array_key_exists("totalPoints", $context) ? $context["totalPoints"] : (function () { throw new RuntimeError('Variable "totalPoints" does not exist.', 37, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 37, $this->source); })()), "prochain", [], "any", false, false, false, 37), "html", null, true);
        yield " pts</small>
            </div>
        </div>

        ";
        // line 42
        yield "        <div class=\"col-md-4 mb-3\">
            <div class=\"card border-0 shadow h-100 text-center p-4\" style=\"border-radius:20px;\">
                <div style=\"font-size:3rem;\">💎</div>
                <h2 class=\"mb-0 mt-2\" style=\"color:#4f6df5; font-weight:800;\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPoints"]) || array_key_exists("totalPoints", $context) ? $context["totalPoints"] : (function () { throw new RuntimeError('Variable "totalPoints" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "</h2>
                <p class=\"text-muted mb-3\">Points totaux</p>
                <div class=\"row\">
                    <div class=\"col-6 border-right\">
                        <p class=\"mb-0\"><span class=\"badge badge-success px-2\">+";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pointsTaches"]) || array_key_exists("pointsTaches", $context) ? $context["pointsTaches"] : (function () { throw new RuntimeError('Variable "pointsTaches" does not exist.', 49, $this->source); })()), "html", null, true);
        yield " pts</span></p>
                        <small class=\"text-muted\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbTaches"]) || array_key_exists("nbTaches", $context) ? $context["nbTaches"] : (function () { throw new RuntimeError('Variable "nbTaches" does not exist.', 50, $this->source); })()), "html", null, true);
        yield " tâche(s)</small>
                    </div>
                    <div class=\"col-6\">
                        <p class=\"mb-0\"><span class=\"badge badge-warning px-2\">+";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pointsObjectifs"]) || array_key_exists("pointsObjectifs", $context) ? $context["pointsObjectifs"] : (function () { throw new RuntimeError('Variable "pointsObjectifs" does not exist.', 53, $this->source); })()), "html", null, true);
        yield " pts</span></p>
                        <small class=\"text-muted\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbObjectifs"]) || array_key_exists("nbObjectifs", $context) ? $context["nbObjectifs"] : (function () { throw new RuntimeError('Variable "nbObjectifs" does not exist.', 54, $this->source); })()), "html", null, true);
        yield " objectif(s)</small>
                    </div>
                </div>
                <hr>
                <div class=\"text-left\" style=\"font-size:.82rem; color:#636e72;\">
                    <div>✅ Tâche terminée = <strong>+10 pts</strong></div>
                    <div>🎯 Objectif complété = <strong>+50 pts</strong></div>
                </div>
            </div>
        </div>

        ";
        // line 66
        yield "        <div class=\"col-md-4 mb-3\">
            <div class=\"card border-0 shadow h-100 text-center p-4\" style=\"border-radius:20px;\">
                <div style=\"font-size:3rem;\">🏅</div>
                <h2 class=\"mb-0 mt-2\" style=\"color:#f39c12; font-weight:800;\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["badgesObtenus"]) || array_key_exists("badgesObtenus", $context) ? $context["badgesObtenus"] : (function () { throw new RuntimeError('Variable "badgesObtenus" does not exist.', 69, $this->source); })())), "html", null, true);
        yield "</h2>
                <p class=\"text-muted\">/";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["badgesObtenus"]) || array_key_exists("badgesObtenus", $context) ? $context["badgesObtenus"] : (function () { throw new RuntimeError('Variable "badgesObtenus" does not exist.', 70, $this->source); })())) + Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["badgesLocked"]) || array_key_exists("badgesLocked", $context) ? $context["badgesLocked"] : (function () { throw new RuntimeError('Variable "badgesLocked" does not exist.', 70, $this->source); })()))), "html", null, true);
        yield " badges débloqués</p>
                <div style=\"font-size:1.8rem; line-height:2;\">
                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["badgesObtenus"]) || array_key_exists("badgesObtenus", $context) ? $context["badgesObtenus"] : (function () { throw new RuntimeError('Variable "badgesObtenus" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 73
            yield "                        <span title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "nom", [], "any", false, false, false, 73), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "icone", [], "any", false, false, false, 73), "html", null, true);
            yield "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['badge'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "                    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["badgesObtenus"]) || array_key_exists("badgesObtenus", $context) ? $context["badgesObtenus"] : (function () { throw new RuntimeError('Variable "badgesObtenus" does not exist.', 75, $this->source); })())) == 0)) {
            // line 76
            yield "                        <p class=\"text-muted small\">Complète des tâches !</p>
                    ";
        }
        // line 78
        yield "                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">

        ";
        // line 86
        yield "        <div class=\"col-md-8 mb-4\">

            ";
        // line 89
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["badgesObtenus"]) || array_key_exists("badgesObtenus", $context) ? $context["badgesObtenus"] : (function () { throw new RuntimeError('Variable "badgesObtenus" does not exist.', 89, $this->source); })())) > 0)) {
            // line 90
            yield "                <h4 class=\"mb-3\">✅ Badges débloqués</h4>
                <div class=\"row mb-4\">
                    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["badgesObtenus"]) || array_key_exists("badgesObtenus", $context) ? $context["badgesObtenus"] : (function () { throw new RuntimeError('Variable "badgesObtenus" does not exist.', 92, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 93
                yield "                        <div class=\"col-md-4 col-6 mb-3\">
                            <div class=\"card border-0 shadow-sm text-center p-3 badge-card\"
                                 style=\"border-radius:15px; border-top:4px solid ";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "couleur", [], "any", false, false, false, 95), "html", null, true);
                yield " !important;\">
                                <div style=\"font-size:2.5rem;\">";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "icone", [], "any", false, false, false, 96), "html", null, true);
                yield "</div>
                                <h6 class=\"mt-2 mb-1 font-weight-bold\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "nom", [], "any", false, false, false, 97), "html", null, true);
                yield "</h6>
                                <small class=\"text-muted\">";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "description", [], "any", false, false, false, 98), "html", null, true);
                yield "</small>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['badge'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "                </div>
            ";
        }
        // line 104
        yield "
            ";
        // line 106
        yield "            <h4 class=\"mb-3\">🔒 Badges à débloquer</h4>
            <div class=\"row\">
                ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["badgesLocked"]) || array_key_exists("badgesLocked", $context) ? $context["badgesLocked"] : (function () { throw new RuntimeError('Variable "badgesLocked" does not exist.', 108, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 109
            yield "                    <div class=\"col-md-4 col-6 mb-3\">
                        <div class=\"card border-0 shadow-sm text-center p-3\"
                             style=\"border-radius:15px; opacity:0.4; filter:grayscale(100%);\">
                            <div style=\"font-size:2.5rem;\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "icone", [], "any", false, false, false, 112), "html", null, true);
            yield "</div>
                            <h6 class=\"mt-2 mb-1\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "nom", [], "any", false, false, false, 113), "html", null, true);
            yield "</h6>
                            <small class=\"text-muted\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "description", [], "any", false, false, false, 114), "html", null, true);
            yield "</small>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['badge'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["badgesLocked"]) || array_key_exists("badgesLocked", $context) ? $context["badgesLocked"] : (function () { throw new RuntimeError('Variable "badgesLocked" does not exist.', 118, $this->source); })())) == 0)) {
            // line 119
            yield "                    <div class=\"col-12 text-center py-3\">
                        <span style=\"font-size:2rem;\">🎉</span>
                        <p class=\"text-success font-weight-bold mt-2\">Tous les badges débloqués !</p>
                    </div>
                ";
        }
        // line 124
        yield "            </div>
        </div>

        ";
        // line 128
        yield "        <div class=\"col-md-4 mb-4\">
            <h4 class=\"mb-3\">🏆 Classement</h4>
            <div class=\"card border-0 shadow\" style=\"border-radius:15px;\">
                <div class=\"card-body p-0\">
                    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["classement"]) || array_key_exists("classement", $context) ? $context["classement"] : (function () { throw new RuntimeError('Variable "classement" does not exist.', 132, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 133
            yield "                        <div class=\"d-flex align-items-center p-3 ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "border-bottom";
            }
            yield " classement-row\">
                            <div class=\"mr-3 text-center\" style=\"min-width:30px;\">
                                ";
            // line 135
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 135) == 1)) {
                yield "🥇
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 136
$context["loop"], "index", [], "any", false, false, false, 136) == 2)) {
                yield "🥈
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 137
$context["loop"], "index", [], "any", false, false, false, 137) == 3)) {
                yield "🥉
                                ";
            } else {
                // line 138
                yield "<span class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 138), "html", null, true);
                yield "</span>
                                ";
            }
            // line 140
            yield "                            </div>
                            <div class=\"mr-3 d-flex align-items-center justify-content-center text-white font-weight-bold\"
                                 style=\"width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#4f6df5,#6a82fb);font-size:.85rem;flex-shrink:0;\">
                                ";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 143), " "), 0, [], "array", false, false, false, 143), 0, 1)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 143), " "), 1, [], "array", true, true, false, 143)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 143), " "), 1, [], "array", false, false, false, 143), "")) : ("")), 0, 1)), "html", null, true);
            yield "
                            </div>
                            <div class=\"flex-grow-1\">
                                <strong style=\"font-size:.88rem;\">";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 146), "html", null, true);
            yield "</strong><br>
                                <small class=\"text-muted\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taches", [], "any", false, false, false, 147), "html", null, true);
            yield " tâches · ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "objectifs", [], "any", false, false, false, 147), "html", null, true);
            yield " objectifs</small>
                            </div>
                            <span class=\"badge badge-primary px-2 py-1\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "points", [], "any", false, false, false, 149), "html", null, true);
            yield " pts</span>
                        </div>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 151
        if (!$context['_iterated']) {
            // line 152
            yield "                        <div class=\"text-center p-4 text-muted\">
                            <div style=\"font-size:2rem;\">👥</div>
                            Pas encore de classement
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joueur'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "                </div>
            </div>

            <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\" class=\"btn btn-outline-primary btn-block mt-3\" style=\"border-radius:20px;\">
                <i class=\"fa fa-arrow-left mr-1\"></i> Mes Objectifs
            </a>
        </div>

    </div>
</div>
</section>

<style>
.badge-card { transition: transform 0.2s, box-shadow 0.2s; }
.badge-card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.12) !important; }
.classement-row:hover { background: #f8f9ff; }
.progress { background: rgba(255,255,255,0.3); }
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
        return "gamification/index.html.twig";
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
        return array (  450 => 160,  445 => 157,  435 => 152,  433 => 151,  418 => 149,  411 => 147,  407 => 146,  400 => 143,  395 => 140,  389 => 138,  384 => 137,  380 => 136,  376 => 135,  368 => 133,  350 => 132,  344 => 128,  339 => 124,  332 => 119,  329 => 118,  319 => 114,  315 => 113,  311 => 112,  306 => 109,  302 => 108,  298 => 106,  295 => 104,  291 => 102,  281 => 98,  277 => 97,  273 => 96,  269 => 95,  265 => 93,  261 => 92,  257 => 90,  254 => 89,  250 => 86,  241 => 78,  237 => 76,  234 => 75,  223 => 73,  219 => 72,  214 => 70,  210 => 69,  205 => 66,  191 => 54,  187 => 53,  181 => 50,  177 => 49,  170 => 45,  165 => 42,  156 => 37,  151 => 35,  145 => 32,  141 => 31,  135 => 30,  131 => 28,  127 => 25,  113 => 13,  103 => 6,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Gamification - Fluently{% endblock %}

{% block body %}

<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_1.jpg') }}');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">🏆 Mes Récompenses</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"{{ path('app_home') }}\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Gamification</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section bg-light\">
<div class=\"container\">

    {# ── Stats ── #}
    <div class=\"row mb-4\">

        {# Niveau #}
        <div class=\"col-md-4 mb-3\">
            <div class=\"card border-0 shadow h-100 text-center p-4\"
                 style=\"border-radius:20px; background:linear-gradient(135deg, {{ niveau.couleur }}, {{ niveau.couleur }}bb);\">
                <div style=\"font-size:4rem;\">{{ niveau.icone }}</div>
                <h3 class=\"text-white mt-2 mb-1\">{{ niveau.label }}</h3>
                <p class=\"mb-2\" style=\"color:rgba(255,255,255,0.7);\">Votre niveau actuel</p>
                <div class=\"progress mb-2\" style=\"height:10px; border-radius:10px; background:rgba(255,255,255,0.3);\">
                    <div class=\"progress-bar bg-white\" style=\"width:{{ progression }}%; border-radius:10px;\"></div>
                </div>
                <small style=\"color:rgba(255,255,255,0.7);\">{{ totalPoints }} / {{ niveau.prochain }} pts</small>
            </div>
        </div>

        {# Points #}
        <div class=\"col-md-4 mb-3\">
            <div class=\"card border-0 shadow h-100 text-center p-4\" style=\"border-radius:20px;\">
                <div style=\"font-size:3rem;\">💎</div>
                <h2 class=\"mb-0 mt-2\" style=\"color:#4f6df5; font-weight:800;\">{{ totalPoints }}</h2>
                <p class=\"text-muted mb-3\">Points totaux</p>
                <div class=\"row\">
                    <div class=\"col-6 border-right\">
                        <p class=\"mb-0\"><span class=\"badge badge-success px-2\">+{{ pointsTaches }} pts</span></p>
                        <small class=\"text-muted\">{{ nbTaches }} tâche(s)</small>
                    </div>
                    <div class=\"col-6\">
                        <p class=\"mb-0\"><span class=\"badge badge-warning px-2\">+{{ pointsObjectifs }} pts</span></p>
                        <small class=\"text-muted\">{{ nbObjectifs }} objectif(s)</small>
                    </div>
                </div>
                <hr>
                <div class=\"text-left\" style=\"font-size:.82rem; color:#636e72;\">
                    <div>✅ Tâche terminée = <strong>+10 pts</strong></div>
                    <div>🎯 Objectif complété = <strong>+50 pts</strong></div>
                </div>
            </div>
        </div>

        {# Badges obtenus #}
        <div class=\"col-md-4 mb-3\">
            <div class=\"card border-0 shadow h-100 text-center p-4\" style=\"border-radius:20px;\">
                <div style=\"font-size:3rem;\">🏅</div>
                <h2 class=\"mb-0 mt-2\" style=\"color:#f39c12; font-weight:800;\">{{ badgesObtenus|length }}</h2>
                <p class=\"text-muted\">/{{ badgesObtenus|length + badgesLocked|length }} badges débloqués</p>
                <div style=\"font-size:1.8rem; line-height:2;\">
                    {% for badge in badgesObtenus %}
                        <span title=\"{{ badge.nom }}\">{{ badge.icone }}</span>
                    {% endfor %}
                    {% if badgesObtenus|length == 0 %}
                        <p class=\"text-muted small\">Complète des tâches !</p>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">

        {# ── Badges ── #}
        <div class=\"col-md-8 mb-4\">

            {# Débloqués #}
            {% if badgesObtenus|length > 0 %}
                <h4 class=\"mb-3\">✅ Badges débloqués</h4>
                <div class=\"row mb-4\">
                    {% for badge in badgesObtenus %}
                        <div class=\"col-md-4 col-6 mb-3\">
                            <div class=\"card border-0 shadow-sm text-center p-3 badge-card\"
                                 style=\"border-radius:15px; border-top:4px solid {{ badge.couleur }} !important;\">
                                <div style=\"font-size:2.5rem;\">{{ badge.icone }}</div>
                                <h6 class=\"mt-2 mb-1 font-weight-bold\">{{ badge.nom }}</h6>
                                <small class=\"text-muted\">{{ badge.description }}</small>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}

            {# Locked #}
            <h4 class=\"mb-3\">🔒 Badges à débloquer</h4>
            <div class=\"row\">
                {% for badge in badgesLocked %}
                    <div class=\"col-md-4 col-6 mb-3\">
                        <div class=\"card border-0 shadow-sm text-center p-3\"
                             style=\"border-radius:15px; opacity:0.4; filter:grayscale(100%);\">
                            <div style=\"font-size:2.5rem;\">{{ badge.icone }}</div>
                            <h6 class=\"mt-2 mb-1\">{{ badge.nom }}</h6>
                            <small class=\"text-muted\">{{ badge.description }}</small>
                        </div>
                    </div>
                {% endfor %}
                {% if badgesLocked|length == 0 %}
                    <div class=\"col-12 text-center py-3\">
                        <span style=\"font-size:2rem;\">🎉</span>
                        <p class=\"text-success font-weight-bold mt-2\">Tous les badges débloqués !</p>
                    </div>
                {% endif %}
            </div>
        </div>

        {# ── Classement ── #}
        <div class=\"col-md-4 mb-4\">
            <h4 class=\"mb-3\">🏆 Classement</h4>
            <div class=\"card border-0 shadow\" style=\"border-radius:15px;\">
                <div class=\"card-body p-0\">
                    {% for joueur in classement %}
                        <div class=\"d-flex align-items-center p-3 {% if not loop.last %}border-bottom{% endif %} classement-row\">
                            <div class=\"mr-3 text-center\" style=\"min-width:30px;\">
                                {% if loop.index == 1 %}🥇
                                {% elseif loop.index == 2 %}🥈
                                {% elseif loop.index == 3 %}🥉
                                {% else %}<span class=\"text-muted\">{{ loop.index }}</span>
                                {% endif %}
                            </div>
                            <div class=\"mr-3 d-flex align-items-center justify-content-center text-white font-weight-bold\"
                                 style=\"width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#4f6df5,#6a82fb);font-size:.85rem;flex-shrink:0;\">
                                {{ joueur.nom|split(' ')[0]|slice(0,1)|upper }}{{ joueur.nom|split(' ')[1]|default('')|slice(0,1)|upper }}
                            </div>
                            <div class=\"flex-grow-1\">
                                <strong style=\"font-size:.88rem;\">{{ joueur.nom }}</strong><br>
                                <small class=\"text-muted\">{{ joueur.taches }} tâches · {{ joueur.objectifs }} objectifs</small>
                            </div>
                            <span class=\"badge badge-primary px-2 py-1\">{{ joueur.points }} pts</span>
                        </div>
                    {% else %}
                        <div class=\"text-center p-4 text-muted\">
                            <div style=\"font-size:2rem;\">👥</div>
                            Pas encore de classement
                        </div>
                    {% endfor %}
                </div>
            </div>

            <a href=\"{{ path('app_objectif_index') }}\" class=\"btn btn-outline-primary btn-block mt-3\" style=\"border-radius:20px;\">
                <i class=\"fa fa-arrow-left mr-1\"></i> Mes Objectifs
            </a>
        </div>

    </div>
</div>
</section>

<style>
.badge-card { transition: transform 0.2s, box-shadow 0.2s; }
.badge-card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.12) !important; }
.classement-row:hover { background: #f8f9ff; }
.progress { background: rgba(255,255,255,0.3); }
</style>

{% endblock %}
", "gamification/index.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\gamification\\index.html.twig");
    }
}
