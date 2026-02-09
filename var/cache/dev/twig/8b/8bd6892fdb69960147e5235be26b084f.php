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

/* langue/apprentissage.html.twig */
class __TwigTemplate_4954821a33d1e48eeae6c8a2dc1917ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/apprentissage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/apprentissage.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " – Ton parcours d'apprentissage";
        
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
        yield "<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #6d28d9 100%); min-height: 100vh; padding: 60px 20px; color: white; position: relative; overflow-x: hidden;\">
<br><br><br><br><br>
    <!-- Étoiles décoratives pour ambiance jeu -->
    <div style=\"position: absolute; inset: 0; pointer-events: none; opacity: 0.12; font-size: 3.5rem; user-select: none;\">
        <div style=\"position: absolute; top: 10%; left: 8%; animation: float 14s infinite;\">✨</div>
        <div style=\"position: absolute; top: 35%; right: 14%; animation: float 16s infinite;\">⭐</div>
        <div style=\"position: absolute; bottom: 22%; left: 16%; animation: float 20s infinite;\">🌟</div>
        <div style=\"position: absolute; bottom: 48%; right: 18%; animation: float 12s infinite;\">💫</div>
    </div>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-40px) rotate(10deg); }
        }
    </style>

    <div style=\"max-width: 1100px; margin: 0 auto; position: relative; z-index: 2;\">

        <!-- Retour + Titre langue -->
        <div style=\"text-align: center; margin-bottom: 70px;\">
            
            <h1 style=\"font-size: 3.8rem; font-weight: 900; margin: 0; color: white; text-shadow: 0 6px 20px rgba(0,0,0,0.5);\">
                ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        yield "
            </h1>
            <p style=\"font-size: 1.5rem; margin-top: 16px; opacity: 0.9; font-weight: 500;\">
                Complète les unités pour progresser niveau par niveau !
            </p>
        </div>

        <!-- Parcours principal -->
        <div style=\"position: relative; padding: 80px 0;\">

            <!-- Ligne centrale sinueuse -->
            <div style=\"position: absolute; top: 0; bottom: 0; left: 50%; width: 10px; background: linear-gradient(to bottom, rgba(255,255,255,0.6), rgba(255,255,255,0.15)); transform: translateX(-50%); border-radius: 5px; z-index: 1;\"></div>

<!-- Test de niveau (toujours visible en haut) -->
<!-- Test de niveau (toujours visible en haut) -->
<div style=\"position: relative; margin: 0 auto 180px; text-align: center; z-index: 3; max-width: 300px;\">
    ";
        // line 45
        if ((($tmp = (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 45, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "        ";
            // line 47
            yield "        
        ";
            // line 49
            yield "        ";
            $context["passageTermine"] = null;
            // line 50
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 51
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 51, $this->source); })()), "passages", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                    // line 52
                    yield "                ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "user", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)) && (CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 52) == "termine"))) {
                        // line 53
                        yield "                    ";
                        $context["passageTermine"] = $context["passage"];
                        // line 54
                        yield "                ";
                    }
                    // line 55
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['passage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                yield "        ";
            }
            // line 57
            yield "
        ";
            // line 58
            if ((($tmp = (isset($context["passageTermine"]) || array_key_exists("passageTermine", $context) ? $context["passageTermine"] : (function () { throw new RuntimeError('Variable "passageTermine" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "            ";
                // line 60
                yield "            ";
                $context["niveauObtenu"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageTermine"]) || array_key_exists("passageTermine", $context) ? $context["passageTermine"] : (function () { throw new RuntimeError('Variable "passageTermine" does not exist.', 60, $this->source); })()), "resultat", [], "any", false, false, false, 60) >= 90)) ? ("C2") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageTermine"]) || array_key_exists("passageTermine", $context) ? $context["passageTermine"] : (function () { throw new RuntimeError('Variable "passageTermine" does not exist.', 60, $this->source); })()), "resultat", [], "any", false, false, false, 60) >= 80)) ? ("C1") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageTermine"]) || array_key_exists("passageTermine", $context) ? $context["passageTermine"] : (function () { throw new RuntimeError('Variable "passageTermine" does not exist.', 60, $this->source); })()), "resultat", [], "any", false, false, false, 60) >= 70)) ? ("B2") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageTermine"]) || array_key_exists("passageTermine", $context) ? $context["passageTermine"] : (function () { throw new RuntimeError('Variable "passageTermine" does not exist.', 60, $this->source); })()), "resultat", [], "any", false, false, false, 60) >= 60)) ? ("B1") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageTermine"]) || array_key_exists("passageTermine", $context) ? $context["passageTermine"] : (function () { throw new RuntimeError('Variable "passageTermine" does not exist.', 60, $this->source); })()), "resultat", [], "any", false, false, false, 60) >= 50)) ? ("A2") : ("A1"))))))))));
                // line 61
                yield "            
            <div style=\"width: 220px; height: 220px; margin: 0 auto; background: linear-gradient(135deg, #10b981, #059669); border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 20px 70px rgba(16,185,129,0.6);\">
                <span style=\"font-size: 5.5rem; line-height: 1; color: white;\">";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauObtenu"]) || array_key_exists("niveauObtenu", $context) ? $context["niveauObtenu"] : (function () { throw new RuntimeError('Variable "niveauObtenu" does not exist.', 63, $this->source); })()), "html", null, true);
                yield "</span>
                <span style=\"font-size: 1.4rem; font-weight: 900; color: white; margin-top: 8px;\">Niveau</span>
            </div>
            <p style=\"margin-top: 32px; font-size: 1.9rem; font-weight: 800; color: white; text-shadow: 0 4px 12px rgba(0,0,0,0.5);\">
                Test de niveau terminé !
            </p>
            <p style=\"margin-top: 12px; font-size: 1.3rem; color: rgba(255,255,255,0.9);\">
                Score : ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageTermine"]) || array_key_exists("passageTermine", $context) ? $context["passageTermine"] : (function () { throw new RuntimeError('Variable "passageTermine" does not exist.', 70, $this->source); })()), "resultat", [], "any", false, false, false, 70), 1, ".", ""), "html", null, true);
                yield "% • 
                Temps : ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageTermine"]) || array_key_exists("passageTermine", $context) ? $context["passageTermine"] : (function () { throw new RuntimeError('Variable "passageTermine" does not exist.', 71, $this->source); })()), "tempsPasse", [], "any", false, false, false, 71) / 60), 0), "html", null, true);
                yield " min
            </p>
            <a href=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_results", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["passageTermine"]) || array_key_exists("passageTermine", $context) ? $context["passageTermine"] : (function () { throw new RuntimeError('Variable "passageTermine" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
                yield "\" 
               style=\"display: inline-block; margin-top: 20px; background: rgba(255,255,255,0.2); color: white; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 700; transition: all 0.3s;\"
               onmouseover=\"this.style.background='rgba(255,255,255,0.3)';\"
               onmouseout=\"this.style.background='rgba(255,255,255,0.2)';\">
                Voir les détails
            </a>
        ";
            } else {
                // line 80
                yield "            ";
                // line 81
                yield "            <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_start", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)]), "html", null, true);
                yield "\">
                <button type=\"submit\" 
                        style=\"width: 220px; height: 220px; margin: 0 auto; background: linear-gradient(135deg, #fbbf24, #f59e0b); border: none; border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 20px 70px rgba(251,191,36,0.6); cursor: pointer; transition: all 0.4s;\" 
                        onmouseover=\"this.style.transform='scale(1.12) rotate(8deg)';\" 
                        onmouseout=\"this.style.transform='scale(1) rotate(0deg)';\">
                    <span style=\"font-size: 7rem; line-height: 1;\">📝</span>
                    <span style=\"font-size: 1.8rem; font-weight: 900; color: #1e293b; margin-top: 12px;\">COMMENCER</span>
                </button>
            </form>
            <p style=\"margin-top: 32px; font-size: 2rem; font-weight: 800; color: white; text-shadow: 0 4px 12px rgba(0,0,0,0.5);\">
                Évalue ton niveau actuel
            </p>
            <p style=\"margin-top: 12px; font-size: 1.2rem; color: rgba(255,255,255,0.85);\">
                ";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 94, $this->source); })()), "questions", [], "any", false, false, false, 94)), "html", null, true);
                yield " questions • ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 94, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 94)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 94, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 94), "html", null, true)) : ("15"));
                yield " minutes
            </p>
        ";
            }
            // line 97
            yield "    ";
        } else {
            // line 98
            yield "        ";
            // line 99
            yield "        <div style=\"width: 220px; height: 220px; margin: 0 auto; background: linear-gradient(135deg, #9ca3af, #6b7280); border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 16px 60px rgba(107,114,128,0.4);\">
            <span style=\"font-size: 7rem; line-height: 1;\">🔒</span>
            <span style=\"font-size: 1.8rem; font-weight: 900; color: #1e293b; margin-top: 12px;\">NON DISPONIBLE</span>
        </div>
        <p style=\"margin-top: 32px; font-size: 1.8rem; font-weight: 700; color: white; text-shadow: 0 4px 12px rgba(0,0,0,0.5);\">
            Test de niveau bientôt disponible
        </p>
        <p style=\"margin-top: 12px; font-size: 1.1rem; color: rgba(255,255,255,0.8);\">
            Notre équipe travaille dessus !
        </p>
    ";
        }
        // line 110
        yield "</div>

            <!-- Les 18 cercles (6 niveaux × 3 cours) -->
            ";
        // line 113
        $context["niveaux"] = ["A1", "A2", "B1", "B2", "C1", "C2"];
        // line 114
        yield "            ";
        $context["couleurs"] = ["#22c55e", "#3b82f6", "#8b5cf6", "#f59e0b", "#ef4444", "#7c3aed"];
        // line 115
        yield "            ";
        $context["niveauIndex"] = 0;
        // line 116
        yield "
            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 118
            yield "                ";
            if ((($context["i"] % 3) == 1)) {
                // line 119
                yield "                    ";
                $context["niveauIndex"] = ((isset($context["niveauIndex"]) || array_key_exists("niveauIndex", $context) ? $context["niveauIndex"] : (function () { throw new RuntimeError('Variable "niveauIndex" does not exist.', 119, $this->source); })()) + 1);
                // line 120
                yield "                    <div style=\"position: relative; margin: 180px 0 140px; text-align: center; z-index: 3;\">
                        <div style=\"font-size: 3.5rem; font-weight: 900; color: white; margin-bottom: 50px; text-shadow: 0 6px 16px rgba(0,0,0,0.5);\">
                            Niveau ";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 122, $this->source); })()), ((isset($context["niveauIndex"]) || array_key_exists("niveauIndex", $context) ? $context["niveauIndex"] : (function () { throw new RuntimeError('Variable "niveauIndex" does not exist.', 122, $this->source); })()) - 1), [], "array", false, false, false, 122), "html", null, true);
                yield "
                        </div>
                    </div>
                ";
            }
            // line 126
            yield "
                ";
            // line 128
            yield "                
                ";
            // line 130
            yield "                ";
            $context["isUnlocked"] = ($context["i"] == 1);
            yield "  ";
            // line 131
            yield "
                <div style=\"position: relative; margin: 120px 0; text-align: center; z-index: 3; transform: translateX(";
            // line 132
            yield (((($context["i"] % 6) < 3)) ? ("120px") : ("-120px"));
            yield ");\">
                    <a href=\"";
            // line 133
            if ((((isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 133, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["allCours"] ?? null), ($context["i"] - 1), [], "array", true, true, false, 133)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["allCours"]) || array_key_exists("allCours", $context) ? $context["allCours"] : (function () { throw new RuntimeError('Variable "allCours" does not exist.', 133, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 133))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["allCours"]) || array_key_exists("allCours", $context) ? $context["allCours"] : (function () { throw new RuntimeError('Variable "allCours" does not exist.', 133, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 133), "id", [], "any", false, false, false, 133)]), "html", null, true);
            } else {
                yield "#";
            }
            yield "\">
                       style=\"text-decoration: none; pointer-events: ";
            // line 134
            yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 134, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("auto") : ("none"));
            yield "; opacity: ";
            yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 134, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0.45"));
            yield ";\">
                        <div style=\"
                            width: 180px;
                            height: 180px;
                            margin: 0 auto;
                            background: ";
            // line 139
            if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 139, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["couleurs"]) || array_key_exists("couleurs", $context) ? $context["couleurs"] : (function () { throw new RuntimeError('Variable "couleurs" does not exist.', 139, $this->source); })()), ((isset($context["niveauIndex"]) || array_key_exists("niveauIndex", $context) ? $context["niveauIndex"] : (function () { throw new RuntimeError('Variable "niveauIndex" does not exist.', 139, $this->source); })()) - 1), [], "array", false, false, false, 139), "html", null, true);
            } else {
                yield "#6b7280";
            }
            yield ";
                            border-radius: 50%;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;
                            box-shadow: 0 16px 60px rgba(0,0,0,0.45);
                            transition: all 0.45s ease;
                            position: relative;
                            border: 8px solid ";
            // line 148
            yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 148, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.7)") : ("rgba(255,255,255,0.25)"));
            yield ";
                        \" onmouseover=\"";
            // line 149
            if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 149, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "this.style.transform='scale(1.2) rotate(";
                yield (((($context["i"] % 2) == 0)) ? ("10") : ("-10"));
                yield "deg)'; this.style.boxShadow='0 40px 90px rgba(0,0,0,0.6)';";
            }
            yield "\" 
                           onmouseout=\"";
            // line 150
            if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 150, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 16px 60px rgba(0,0,0,0.45)';";
            }
            yield "\">
                            
                            <span style=\"font-size: 5rem; font-weight: 900; color: white; text-shadow: 5px 5px 14px rgba(0,0,0,0.6);\">
                                ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
                            </span>

                            ";
            // line 156
            if ((($tmp =  !(isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 156, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 157
                yield "                                <div style=\"position: absolute; top: -14px; right: -14px; background: #ef4444; color: white; width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.2rem; box-shadow: 0 10px 24px rgba(239,68,68,0.6); border: 5px solid white;\">
                                    🔒
                                </div>
                            ";
            }
            // line 161
            yield "                        </div>

                        <p style=\"margin-top: 28px; font-size: 1.5rem; font-weight: 700; color: white; text-shadow: 0 3px 10px rgba(0,0,0,0.5);\">
                            Unité ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["i"] - 1) % 3) + 1), "html", null, true);
            yield "
                        </p>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "
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
        return "langue/apprentissage.html.twig";
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
        return array (  407 => 169,  396 => 164,  391 => 161,  385 => 157,  383 => 156,  377 => 153,  369 => 150,  361 => 149,  357 => 148,  341 => 139,  331 => 134,  323 => 133,  319 => 132,  316 => 131,  312 => 130,  309 => 128,  306 => 126,  299 => 122,  295 => 120,  292 => 119,  289 => 118,  285 => 117,  282 => 116,  279 => 115,  276 => 114,  274 => 113,  269 => 110,  256 => 99,  254 => 98,  251 => 97,  243 => 94,  226 => 81,  224 => 80,  214 => 73,  209 => 71,  205 => 70,  195 => 63,  191 => 61,  188 => 60,  186 => 59,  184 => 58,  181 => 57,  178 => 56,  172 => 55,  169 => 54,  166 => 53,  163 => 52,  158 => 51,  155 => 50,  152 => 49,  149 => 47,  147 => 46,  145 => 45,  126 => 29,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ langue.nom }} – Ton parcours d'apprentissage{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #6d28d9 100%); min-height: 100vh; padding: 60px 20px; color: white; position: relative; overflow-x: hidden;\">
<br><br><br><br><br>
    <!-- Étoiles décoratives pour ambiance jeu -->
    <div style=\"position: absolute; inset: 0; pointer-events: none; opacity: 0.12; font-size: 3.5rem; user-select: none;\">
        <div style=\"position: absolute; top: 10%; left: 8%; animation: float 14s infinite;\">✨</div>
        <div style=\"position: absolute; top: 35%; right: 14%; animation: float 16s infinite;\">⭐</div>
        <div style=\"position: absolute; bottom: 22%; left: 16%; animation: float 20s infinite;\">🌟</div>
        <div style=\"position: absolute; bottom: 48%; right: 18%; animation: float 12s infinite;\">💫</div>
    </div>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-40px) rotate(10deg); }
        }
    </style>

    <div style=\"max-width: 1100px; margin: 0 auto; position: relative; z-index: 2;\">

        <!-- Retour + Titre langue -->
        <div style=\"text-align: center; margin-bottom: 70px;\">
            
            <h1 style=\"font-size: 3.8rem; font-weight: 900; margin: 0; color: white; text-shadow: 0 6px 20px rgba(0,0,0,0.5);\">
                {{ langue.nom }}
            </h1>
            <p style=\"font-size: 1.5rem; margin-top: 16px; opacity: 0.9; font-weight: 500;\">
                Complète les unités pour progresser niveau par niveau !
            </p>
        </div>

        <!-- Parcours principal -->
        <div style=\"position: relative; padding: 80px 0;\">

            <!-- Ligne centrale sinueuse -->
            <div style=\"position: absolute; top: 0; bottom: 0; left: 50%; width: 10px; background: linear-gradient(to bottom, rgba(255,255,255,0.6), rgba(255,255,255,0.15)); transform: translateX(-50%); border-radius: 5px; z-index: 1;\"></div>

<!-- Test de niveau (toujours visible en haut) -->
<!-- Test de niveau (toujours visible en haut) -->
<div style=\"position: relative; margin: 0 auto 180px; text-align: center; z-index: 3; max-width: 300px;\">
    {% if testNiveau %}
        {# Test de niveau existe pour cette langue #}
        
        {# Vérifier si l'utilisateur connecté a déjà passé ce test #}
        {% set passageTermine = null %}
        {% if app.user %}
            {% for passage in testNiveau.passages %}
                {% if passage.user.id == app.user.id and passage.statut == 'termine' %}
                    {% set passageTermine = passage %}
                {% endif %}
            {% endfor %}
        {% endif %}

        {% if passageTermine %}
            {# Déjà passé → afficher résultat + niveau #}
            {% set niveauObtenu = passageTermine.resultat >= 90 ? 'C2' : (passageTermine.resultat >= 80 ? 'C1' : (passageTermine.resultat >= 70 ? 'B2' : (passageTermine.resultat >= 60 ? 'B1' : (passageTermine.resultat >= 50 ? 'A2' : 'A1')))) %}
            
            <div style=\"width: 220px; height: 220px; margin: 0 auto; background: linear-gradient(135deg, #10b981, #059669); border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 20px 70px rgba(16,185,129,0.6);\">
                <span style=\"font-size: 5.5rem; line-height: 1; color: white;\">{{ niveauObtenu }}</span>
                <span style=\"font-size: 1.4rem; font-weight: 900; color: white; margin-top: 8px;\">Niveau</span>
            </div>
            <p style=\"margin-top: 32px; font-size: 1.9rem; font-weight: 800; color: white; text-shadow: 0 4px 12px rgba(0,0,0,0.5);\">
                Test de niveau terminé !
            </p>
            <p style=\"margin-top: 12px; font-size: 1.3rem; color: rgba(255,255,255,0.9);\">
                Score : {{ passageTermine.resultat|number_format(1, '.', '') }}% • 
                Temps : {{ (passageTermine.tempsPasse / 60)|number_format(0) }} min
            </p>
            <a href=\"{{ path('app_test_student_results', {id: passageTermine.id}) }}\" 
               style=\"display: inline-block; margin-top: 20px; background: rgba(255,255,255,0.2); color: white; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 700; transition: all 0.3s;\"
               onmouseover=\"this.style.background='rgba(255,255,255,0.3)';\"
               onmouseout=\"this.style.background='rgba(255,255,255,0.2)';\">
                Voir les détails
            </a>
        {% else %}
            {# Pas encore passé → bouton pour démarrer #}
            <form method=\"post\" action=\"{{ path('app_test_student_start', {id: testNiveau.id}) }}\">
                <button type=\"submit\" 
                        style=\"width: 220px; height: 220px; margin: 0 auto; background: linear-gradient(135deg, #fbbf24, #f59e0b); border: none; border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 20px 70px rgba(251,191,36,0.6); cursor: pointer; transition: all 0.4s;\" 
                        onmouseover=\"this.style.transform='scale(1.12) rotate(8deg)';\" 
                        onmouseout=\"this.style.transform='scale(1) rotate(0deg)';\">
                    <span style=\"font-size: 7rem; line-height: 1;\">📝</span>
                    <span style=\"font-size: 1.8rem; font-weight: 900; color: #1e293b; margin-top: 12px;\">COMMENCER</span>
                </button>
            </form>
            <p style=\"margin-top: 32px; font-size: 2rem; font-weight: 800; color: white; text-shadow: 0 4px 12px rgba(0,0,0,0.5);\">
                Évalue ton niveau actuel
            </p>
            <p style=\"margin-top: 12px; font-size: 1.2rem; color: rgba(255,255,255,0.85);\">
                {{ testNiveau.questions|length }} questions • {{ testNiveau.dureeEstimee ?: '15' }} minutes
            </p>
        {% endif %}
    {% else %}
        {# Pas de test de niveau défini pour cette langue #}
        <div style=\"width: 220px; height: 220px; margin: 0 auto; background: linear-gradient(135deg, #9ca3af, #6b7280); border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 16px 60px rgba(107,114,128,0.4);\">
            <span style=\"font-size: 7rem; line-height: 1;\">🔒</span>
            <span style=\"font-size: 1.8rem; font-weight: 900; color: #1e293b; margin-top: 12px;\">NON DISPONIBLE</span>
        </div>
        <p style=\"margin-top: 32px; font-size: 1.8rem; font-weight: 700; color: white; text-shadow: 0 4px 12px rgba(0,0,0,0.5);\">
            Test de niveau bientôt disponible
        </p>
        <p style=\"margin-top: 12px; font-size: 1.1rem; color: rgba(255,255,255,0.8);\">
            Notre équipe travaille dessus !
        </p>
    {% endif %}
</div>

            <!-- Les 18 cercles (6 niveaux × 3 cours) -->
            {% set niveaux = ['A1', 'A2', 'B1', 'B2', 'C1', 'C2'] %}
            {% set couleurs = ['#22c55e', '#3b82f6', '#8b5cf6', '#f59e0b', '#ef4444', '#7c3aed'] %}
            {% set niveauIndex = 0 %}

            {% for i in 1..18 %}
                {% if i % 3 == 1 %}
                    {% set niveauIndex = niveauIndex + 1 %}
                    <div style=\"position: relative; margin: 180px 0 140px; text-align: center; z-index: 3;\">
                        <div style=\"font-size: 3.5rem; font-weight: 900; color: white; margin-bottom: 50px; text-shadow: 0 6px 16px rgba(0,0,0,0.5);\">
                            Niveau {{ niveaux[niveauIndex-1] }}
                        </div>
                    </div>
                {% endif %}

                {# Déblocage basé sur l'ordre : premier cours toujours ouvert #}
                
                {# Les suivants sont verrouillés tant que pas de progression #}
                {% set isUnlocked = (i == 1) %}  {# Seul le premier cours est débloqué pour l'instant #}

                <div style=\"position: relative; margin: 120px 0; text-align: center; z-index: 3; transform: translateX({{ (i % 6 < 3) ? '120px' : '-120px' }});\">
                    <a href=\"{% if isUnlocked and allCours[i-1] is defined and allCours[i-1] %}{{ path('app_cours_show', {id: allCours[i-1].id}) }}{% else %}#{% endif %}\">
                       style=\"text-decoration: none; pointer-events: {{ isUnlocked ? 'auto' : 'none' }}; opacity: {{ isUnlocked ? '1' : '0.45' }};\">
                        <div style=\"
                            width: 180px;
                            height: 180px;
                            margin: 0 auto;
                            background: {% if isUnlocked %}{{ couleurs[niveauIndex-1] }}{% else %}#6b7280{% endif %};
                            border-radius: 50%;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;
                            box-shadow: 0 16px 60px rgba(0,0,0,0.45);
                            transition: all 0.45s ease;
                            position: relative;
                            border: 8px solid {{ isUnlocked ? 'rgba(255,255,255,0.7)' : 'rgba(255,255,255,0.25)' }};
                        \" onmouseover=\"{% if isUnlocked %}this.style.transform='scale(1.2) rotate({{ (i % 2 == 0) ? '10' : '-10' }}deg)'; this.style.boxShadow='0 40px 90px rgba(0,0,0,0.6)';{% endif %}\" 
                           onmouseout=\"{% if isUnlocked %}this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 16px 60px rgba(0,0,0,0.45)';{% endif %}\">
                            
                            <span style=\"font-size: 5rem; font-weight: 900; color: white; text-shadow: 5px 5px 14px rgba(0,0,0,0.6);\">
                                {{ i }}
                            </span>

                            {% if not isUnlocked %}
                                <div style=\"position: absolute; top: -14px; right: -14px; background: #ef4444; color: white; width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.2rem; box-shadow: 0 10px 24px rgba(239,68,68,0.6); border: 5px solid white;\">
                                    🔒
                                </div>
                            {% endif %}
                        </div>

                        <p style=\"margin-top: 28px; font-size: 1.5rem; font-weight: 700; color: white; text-shadow: 0 3px 10px rgba(0,0,0,0.5);\">
                            Unité {{ ((i-1) % 3) + 1 }}
                        </p>
                    </a>
                </div>
            {% endfor %}

        </div>
    </div>
</div>
{% endblock %}", "langue/apprentissage.html.twig", "C:\\Users\\emnab\\Documents\\Fluently\\templates\\langue\\apprentissage.html.twig");
    }
}
