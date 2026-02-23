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
class __TwigTemplate_c3fe7ef23c4bd06d225fe86e7bdfb9b4 extends Template
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
        <div style=\"text-align: center; margin-bottom: 70px;\">
            <h1 style=\"font-size: 3.8rem; font-weight: 900; margin: 0; color: white; text-shadow: 0 6px 20px rgba(0,0,0,0.5);\">
                ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), "html", null, true);
        yield "
            </h1>
            <p style=\"font-size: 1.5rem; margin-top: 16px; opacity: 0.9; font-weight: 500;\">
                Complète les unités pour progresser niveau par niveau !
            </p>
            
            ";
        // line 31
        if ((($tmp = (isset($context["niveauUtilisateur"]) || array_key_exists("niveauUtilisateur", $context) ? $context["niveauUtilisateur"] : (function () { throw new RuntimeError('Variable "niveauUtilisateur" does not exist.', 31, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                <div style=\"margin-top: 30px; padding: 15px 30px; background: rgba(255,255,255,0.15); border-radius: 60px; display: inline-block; backdrop-filter: blur(10px); border: 2px solid rgba(255,255,255,0.3);\">
                    <span style=\"font-size: 1.3rem; font-weight: 600; margin-right: 15px;\">🎓 Ton niveau actuel :</span>
                    <span style=\"background: linear-gradient(135deg, #fbbf24, #f59e0b); padding: 10px 25px; border-radius: 40px; font-weight: 900; font-size: 1.6rem; color: #1e293b; box-shadow: 0 10px 25px rgba(0,0,0,0.3);\">
                        ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauObtenu"]) || array_key_exists("niveauObtenu", $context) ? $context["niveauObtenu"] : (function () { throw new RuntimeError('Variable "niveauObtenu" does not exist.', 35, $this->source); })()), "html", null, true);
            yield "
                    </span>
                </div>
            ";
        }
        // line 39
        yield "            <div style=\"margin-top: 30px; padding: 15px 30px; background: rgba(255,255,255,0.15); border-radius: 60px; display: inline-block; backdrop-filter: blur(10px); border: 2px solid rgba(255,255,255,0.3);\">
            <a href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_analyse", ["langueId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\" class=\"btn btn-lg btn-primary\">
                <i class=\"fas fa-chart-line\"></i> 📊 Mon Analyse de Performance
            </a>
            </div>
        </div>

        <div style=\"position: relative; padding: 80px 0;\">
            <div style=\"position: absolute; top: 0; bottom: 0; left: 50%; width: 10px; background: linear-gradient(to bottom, rgba(255,255,255,0.6), rgba(255,255,255,0.15)); transform: translateX(-50%); border-radius: 5px; z-index: 1;\"></div>

            <!-- TEST DE NIVEAU -->
            <div style=\"position: relative; margin: 0 auto 180px; text-align: center; z-index: 3; max-width: 300px;\">
                ";
        // line 51
        if ((($tmp = (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "                    ";
            if ((($tmp = (isset($context["dernierPassage"]) || array_key_exists("dernierPassage", $context) ? $context["dernierPassage"] : (function () { throw new RuntimeError('Variable "dernierPassage" does not exist.', 52, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "                        <div style=\"width: 220px; height: 220px; margin: 0 auto; background: linear-gradient(135deg, #10b981, #059669); border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 20px 70px rgba(16,185,129,0.6);\">
                            <span style=\"font-size: 5.5rem; line-height: 1; color: white;\">";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauObtenu"]) || array_key_exists("niveauObtenu", $context) ? $context["niveauObtenu"] : (function () { throw new RuntimeError('Variable "niveauObtenu" does not exist.', 54, $this->source); })()), "html", null, true);
                yield "</span>
                            <span style=\"font-size: 1.4rem; font-weight: 900; color: white; margin-top: 8px;\">Niveau</span>
                        </div>
                        <p style=\"margin-top: 32px; font-size: 1.9rem; font-weight: 800; color: white; text-shadow: 0 4px 12px rgba(0,0,0,0.5);\">
                            Test de niveau terminé !
                        </p>
                        <p style=\"margin-top: 12px; font-size: 1.3rem; color: rgba(255,255,255,0.9);\">
                            Score : ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dernierPassage"]) || array_key_exists("dernierPassage", $context) ? $context["dernierPassage"] : (function () { throw new RuntimeError('Variable "dernierPassage" does not exist.', 61, $this->source); })()), "resultat", [], "any", false, false, false, 61), 1, ".", ""), "html", null, true);
                yield "% • 
                            Temps : ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["dernierPassage"]) || array_key_exists("dernierPassage", $context) ? $context["dernierPassage"] : (function () { throw new RuntimeError('Variable "dernierPassage" does not exist.', 62, $this->source); })()), "tempsPasse", [], "any", false, false, false, 62) / 60), 0), "html", null, true);
                yield " min
                        </p>
                        <a href=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_result", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["dernierPassage"]) || array_key_exists("dernierPassage", $context) ? $context["dernierPassage"] : (function () { throw new RuntimeError('Variable "dernierPassage" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
                yield "\" 
                           style=\"display: inline-block; margin-top: 20px; background: rgba(255,255,255,0.2); color: white; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 700; transition: all 0.3s;\"
                           onmouseover=\"this.style.background='rgba(255,255,255,0.3)';\"
                           onmouseout=\"this.style.background='rgba(255,255,255,0.2)';\">
                            Voir les détails
                        </a>
                    ";
            } else {
                // line 71
                yield "                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_start", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
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
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 84, $this->source); })()), "questions", [], "any", false, false, false, 84)), "html", null, true);
                yield " questions • ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 84, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 84)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 84, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 84), "html", null, true)) : ("15"));
                yield " minutes
                        </p>
                    ";
            }
            // line 87
            yield "                ";
        } else {
            // line 88
            yield "                    <div style=\"width: 220px; height: 220px; margin: 0 auto; background: linear-gradient(135deg, #9ca3af, #6b7280); border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 16px 60px rgba(107,114,128,0.4);\">
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
        // line 99
        yield "            </div>

            ";
        // line 102
        yield "            ";
        // line 103
        yield "            
            ";
        // line 104
        $context["niveaux"] = ["A1", "A2", "B1", "B2", "C1", "C2"];
        // line 105
        yield "            ";
        $context["couleurs"] = ["#22c55e", "#3b82f6", "#8b5cf6", "#f59e0b", "#ef4444", "#7c3aed"];
        // line 106
        yield "            ";
        $context["ordreNiveaux"] = [1, 2, 3, 4, 5, 6];
        // line 107
        yield "            
            ";
        // line 109
        yield "            ";
        $context["niveauActuelOrdre"] = (((($tmp = (isset($context["niveauUtilisateur"]) || array_key_exists("niveauUtilisateur", $context) ? $context["niveauUtilisateur"] : (function () { throw new RuntimeError('Variable "niveauUtilisateur" does not exist.', 109, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauUtilisateur"]) || array_key_exists("niveauUtilisateur", $context) ? $context["niveauUtilisateur"] : (function () { throw new RuntimeError('Variable "niveauUtilisateur" does not exist.', 109, $this->source); })()), "ordre", [], "any", false, false, false, 109)) : (1));
        // line 110
        yield "            
            ";
        // line 112
        yield "            ";
        $context["dernierCoursTermine"] = (((($tmp = (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 112, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 112, $this->source); })()), "dernierNumeroCours", [], "any", false, false, false, 112)) : (0));
        // line 113
        yield "            
            ";
        // line 115
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["niveauIndex"]) {
            // line 116
            yield "                ";
            $context["niveauNom"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 116, $this->source); })()), $context["niveauIndex"], [], "array", false, false, false, 116);
            // line 117
            yield "                ";
            $context["niveauOrdre"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ordreNiveaux"]) || array_key_exists("ordreNiveaux", $context) ? $context["ordreNiveaux"] : (function () { throw new RuntimeError('Variable "ordreNiveaux" does not exist.', 117, $this->source); })()), $context["niveauIndex"], [], "array", false, false, false, 117);
            // line 118
            yield "                ";
            $context["niveauCouleur"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["couleurs"]) || array_key_exists("couleurs", $context) ? $context["couleurs"] : (function () { throw new RuntimeError('Variable "couleurs" does not exist.', 118, $this->source); })()), $context["niveauIndex"], [], "array", false, false, false, 118);
            // line 119
            yield "                
                ";
            // line 121
            yield "                ";
            $context["niveauEntity"] = null;
            // line 122
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allCours"]) || array_key_exists("allCours", $context) ? $context["allCours"] : (function () { throw new RuntimeError('Variable "allCours" does not exist.', 122, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                // line 123
                yield "                    ";
                if ((((null === (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 123, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 123), "difficulte", [], "any", false, false, false, 123) == (isset($context["niveauNom"]) || array_key_exists("niveauNom", $context) ? $context["niveauNom"] : (function () { throw new RuntimeError('Variable "niveauNom" does not exist.', 123, $this->source); })()))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 123), "IdLangue", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123)))) {
                    // line 124
                    yield "                        ";
                    $context["niveauEntity"] = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 124);
                    // line 125
                    yield "                    ";
                }
                // line 126
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            yield "                
                ";
            // line 129
            yield "                ";
            if ((($tmp = (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 129, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 130
                yield "                    
                    <!-- TITRE DU NIVEAU -->
                    <div style=\"position: relative; margin: ";
                // line 132
                if (($context["niveauIndex"] == 0)) {
                    yield "0";
                } else {
                    yield "100";
                }
                yield "px 0 40px; text-align: center; z-index: 3;\">
                        <div style=\"font-size: 2.8rem; font-weight: 900; color: white; margin-bottom: 30px; text-shadow: 0 6px 16px rgba(0,0,0,0.5);\">
                            Niveau ";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauNom"]) || array_key_exists("niveauNom", $context) ? $context["niveauNom"] : (function () { throw new RuntimeError('Variable "niveauNom" does not exist.', 134, $this->source); })()), "html", null, true);
                yield "
                        </div>
                    </div>
                    
                    ";
                // line 139
                yield "                    ";
                $context["coursDuNiveau"] = [];
                // line 140
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allCours"]) || array_key_exists("allCours", $context) ? $context["allCours"] : (function () { throw new RuntimeError('Variable "allCours" does not exist.', 140, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                    // line 141
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141))) {
                        // line 142
                        yield "                            ";
                        $context["coursDuNiveau"] = Twig\Extension\CoreExtension::merge((isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 142, $this->source); })()), [$context["cours"]]);
                        // line 143
                        yield "                        ";
                    }
                    // line 144
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                yield "                    
                    ";
                // line 147
                yield "                    ";
                $context["coursDuNiveau"] = Twig\Extension\CoreExtension::sort($this->env, (isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 147, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 147, $this->source); })()), "numero", [], "any", false, false, false, 147) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 147, $this->source); })()), "numero", [], "any", false, false, false, 147)); });
                // line 148
                yield "                    
                    ";
                // line 150
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 150, $this->source); })()), 0, 3));
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
                foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                    // line 151
                    yield "                        ";
                    $context["coursNumero"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 151);
                    // line 152
                    yield "                        ";
                    $context["coursReelNumero"] = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "numero", [], "any", false, false, false, 152);
                    // line 153
                    yield "                        
                        ";
                    // line 155
                    yield "                        ";
                    $context["isUnlocked"] = false;
                    // line 156
                    yield "                        
                        ";
                    // line 158
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 158, $this->source); })()) < (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 158, $this->source); })()))) {
                        // line 159
                        yield "                            ";
                        $context["isUnlocked"] = true;
                        // line 160
                        yield "                        ";
                    }
                    // line 161
                    yield "                        
                        ";
                    // line 163
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 163, $this->source); })()) == (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 163, $this->source); })()))) {
                        // line 164
                        yield "                            ";
                        // line 165
                        yield "                            ";
                        if (((isset($context["coursNumero"]) || array_key_exists("coursNumero", $context) ? $context["coursNumero"] : (function () { throw new RuntimeError('Variable "coursNumero" does not exist.', 165, $this->source); })()) == 1)) {
                            // line 166
                            yield "                                ";
                            $context["isUnlocked"] = true;
                            // line 167
                            yield "                            ";
                        } else {
                            // line 168
                            yield "                                ";
                            // line 169
                            yield "                                ";
                            $context["coursPrecedentTermine"] = false;
                            // line 170
                            yield "                                ";
                            if (((isset($context["dernierCoursTermine"]) || array_key_exists("dernierCoursTermine", $context) ? $context["dernierCoursTermine"] : (function () { throw new RuntimeError('Variable "dernierCoursTermine" does not exist.', 170, $this->source); })()) >= ((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 170, $this->source); })()) - 1))) {
                                // line 171
                                yield "                                    ";
                                $context["coursPrecedentTermine"] = true;
                                // line 172
                                yield "                                ";
                            }
                            // line 173
                            yield "                                ";
                            $context["isUnlocked"] = (isset($context["coursPrecedentTermine"]) || array_key_exists("coursPrecedentTermine", $context) ? $context["coursPrecedentTermine"] : (function () { throw new RuntimeError('Variable "coursPrecedentTermine" does not exist.', 173, $this->source); })());
                            // line 174
                            yield "                            ";
                        }
                        // line 175
                        yield "                        ";
                    }
                    // line 176
                    yield "                        
                        ";
                    // line 178
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 178, $this->source); })()) > (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 178, $this->source); })()))) {
                        // line 179
                        yield "                            ";
                        $context["isUnlocked"] = false;
                        // line 180
                        yield "                        ";
                    }
                    // line 181
                    yield "                        
                        ";
                    // line 183
                    yield "                        ";
                    $context["isCompleted"] = false;
                    // line 184
                    yield "                        ";
                    if ((((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 184, $this->source); })()) == (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 184, $this->source); })())) && ((isset($context["dernierCoursTermine"]) || array_key_exists("dernierCoursTermine", $context) ? $context["dernierCoursTermine"] : (function () { throw new RuntimeError('Variable "dernierCoursTermine" does not exist.', 184, $this->source); })()) >= (isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 184, $this->source); })())))) {
                        // line 185
                        yield "                            ";
                        $context["isCompleted"] = true;
                        // line 186
                        yield "                        ";
                    }
                    // line 187
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 187, $this->source); })()) < (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 187, $this->source); })()))) {
                        // line 188
                        yield "                            ";
                        $context["isCompleted"] = true;
                        // line 189
                        yield "                        ";
                    }
                    // line 190
                    yield "                        
                        <div style=\"position: relative; margin: 60px 0; text-align: center; z-index: 3; transform: translateX(";
                    // line 191
                    yield (((((isset($context["coursNumero"]) || array_key_exists("coursNumero", $context) ? $context["coursNumero"] : (function () { throw new RuntimeError('Variable "coursNumero" does not exist.', 191, $this->source); })()) % 2) == 0)) ? ("120px") : ("-120px"));
                    yield ");\">
                            ";
                    // line 192
                    if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 192, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 193
                        yield "                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 193)]), "html", null, true);
                        yield "\" style=\"text-decoration: none;\">
                            ";
                    }
                    // line 195
                    yield "                            
                            <div style=\"
                                width: 160px;
                                height: 160px;
                                margin: 0 auto;
                                background: ";
                    // line 200
                    if ((($tmp = (isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 200, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "#10b981";
                    } elseif ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 200, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauCouleur"]) || array_key_exists("niveauCouleur", $context) ? $context["niveauCouleur"] : (function () { throw new RuntimeError('Variable "niveauCouleur" does not exist.', 200, $this->source); })()), "html", null, true);
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
                    // line 209
                    yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 209, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.7)") : ("rgba(255,255,255,0.25)"));
                    yield ";
                                opacity: ";
                    // line 210
                    yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 210, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0.6"));
                    yield ";
                                cursor: ";
                    // line 211
                    yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 211, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pointer") : ("default"));
                    yield ";
                            \" 
                            ";
                    // line 213
                    if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 213, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 214
                        yield "                                onmouseover=\"this.style.transform='scale(1.15) rotate(";
                        yield (((((isset($context["coursNumero"]) || array_key_exists("coursNumero", $context) ? $context["coursNumero"] : (function () { throw new RuntimeError('Variable "coursNumero" does not exist.', 214, $this->source); })()) % 2) == 0)) ? ("10") : ("-10"));
                        yield "deg)'; this.style.boxShadow='0 40px 90px rgba(0,0,0,0.6)';\" 
                                onmouseout=\"this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 16px 60px rgba(0,0,0,0.45)';\"
                            ";
                    }
                    // line 216
                    yield ">
                                
                                <span style=\"font-size: 4.5rem; font-weight: 900; color: white; text-shadow: 5px 5px 14px rgba(0,0,0,0.6);\">
                                    ";
                    // line 219
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 219, $this->source); })()), "html", null, true);
                    yield "
                                </span>
                                
                                ";
                    // line 222
                    if ((($tmp = (isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 222, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 223
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #10b981; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(16,185,129,0.6); border: 4px solid white;\">
                                        ✓
                                    </div>
                                ";
                    } elseif ((($tmp =  !                    // line 226
(isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 226, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 227
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #ef4444; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(239,68,68,0.6); border: 4px solid white;\">
                                        🔒
                                    </div>
                                ";
                    }
                    // line 231
                    yield "                            </div>
                            
                            <p style=\"margin-top: 20px; font-size: 1.4rem; font-weight: 700; color: white; text-shadow: 0 3px 10px rgba(0,0,0,0.5);\">
                                Unité ";
                    // line 234
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 234, $this->source); })()), "html", null, true);
                    yield "
                                ";
                    // line 235
                    if ((($tmp = (isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 235, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 236
                        yield "                                    <span style=\"display: block; font-size: 1rem; color: #a5f3fc; margin-top: 5px;\">✓ Terminé</span>
                                ";
                    }
                    // line 238
                    yield "                            </p>
                            
                            ";
                    // line 240
                    if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 240, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 241
                        yield "                                </a>
                            ";
                    } else {
                        // line 243
                        yield "                                <p style=\"margin-top: 10px; font-size: 1rem; color: rgba(255,255,255,0.7); font-style: italic;\">
                                    ";
                        // line 244
                        if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 244, $this->source); })()) > (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 244, $this->source); })()))) {
                            // line 245
                            yield "                                        Niveau ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 245, $this->source); })()), "html", null, true);
                            yield " requis
                                    ";
                        } else {
                            // line 247
                            yield "                                        Termine l'unité ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 247, $this->source); })()) - 1), "html", null, true);
                            yield " d'abord
                                    ";
                        }
                        // line 249
                        yield "                                </p>
                            ";
                    }
                    // line 251
                    yield "                        </div>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                yield "                ";
            }
            // line 254
            yield "                
                                ";
            // line 256
            yield "                ";
            if ((($tmp = (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 256, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 257
                yield "                    ";
                // line 258
                yield "                    ";
                $context["testFinNiveau"] = null;
                // line 259
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["testsLangue"]) || array_key_exists("testsLangue", $context) ? $context["testsLangue"] : (function () { throw new RuntimeError('Variable "testsLangue" does not exist.', 259, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                    // line 260
                    yield "                        ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 260) == "Test de fin de niveau") && CoreExtension::getAttribute($this->env, $this->source, $context["test"], "niveau", [], "any", false, false, false, 260)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "niveau", [], "any", false, false, false, 260), "id", [], "any", false, false, false, 260) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 260, $this->source); })()), "id", [], "any", false, false, false, 260)))) {
                        // line 261
                        yield "                            ";
                        $context["testFinNiveau"] = $context["test"];
                        // line 262
                        yield "                        ";
                    }
                    // line 263
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 264
                yield "
                    ";
                // line 265
                if ((($tmp = (isset($context["testFinNiveau"]) || array_key_exists("testFinNiveau", $context) ? $context["testFinNiveau"] : (function () { throw new RuntimeError('Variable "testFinNiveau" does not exist.', 265, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 266
                    yield "                        ";
                    // line 267
                    yield "                        ";
                    $context["tousCoursTermines"] = true;
                    // line 268
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 268, $this->source); })()), 0, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                        // line 269
                        yield "                            ";
                        $context["coursReelNumero"] = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "numero", [], "any", false, false, false, 269);
                        // line 270
                        yield "                            ";
                        if ((((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 270, $this->source); })()) == (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 270, $this->source); })())) && ((isset($context["dernierCoursTermine"]) || array_key_exists("dernierCoursTermine", $context) ? $context["dernierCoursTermine"] : (function () { throw new RuntimeError('Variable "dernierCoursTermine" does not exist.', 270, $this->source); })()) < (isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 270, $this->source); })())))) {
                            // line 271
                            yield "                                ";
                            $context["tousCoursTermines"] = false;
                            // line 272
                            yield "                            ";
                        }
                        // line 273
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 274
                    yield "
                        ";
                    // line 276
                    yield "                        ";
                    // line 277
                    yield "                        ";
                    $context["testDejaPassé"] = false;
                    // line 278
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["testFinNiveau"]) || array_key_exists("testFinNiveau", $context) ? $context["testFinNiveau"] : (function () { throw new RuntimeError('Variable "testFinNiveau" does not exist.', 278, $this->source); })()), "passages", [], "any", false, false, false, 278));
                    foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                        // line 279
                        yield "                            ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "user", [], "any", false, false, false, 279), "id", [], "any", false, false, false, 279) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 279, $this->source); })()), "id", [], "any", false, false, false, 279)) && (CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 279) == "termine"))) {
                            // line 280
                            yield "                                ";
                            $context["testDejaPassé"] = true;
                            // line 281
                            yield "                            ";
                        }
                        // line 282
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['passage'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 283
                    yield "
                        ";
                    // line 285
                    yield "                        <div style=\"position: relative; margin: 100px 0; text-align: center; z-index: 3;\">
                            ";
                    // line 286
                    if (((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 286, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 286, $this->source); })()))) {
                        // line 287
                        yield "                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["testFinNiveau"]) || array_key_exists("testFinNiveau", $context) ? $context["testFinNiveau"] : (function () { throw new RuntimeError('Variable "testFinNiveau" does not exist.', 287, $this->source); })()), "id", [], "any", false, false, false, 287)]), "html", null, true);
                        yield "\" style=\"text-decoration: none;\">
                            ";
                    }
                    // line 289
                    yield "                            
                            <div style=\"
                                width: 200px;
                                height: 200px;
                                margin: 0 auto;
                                background: ";
                    // line 294
                    if ((($tmp = (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 294, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "linear-gradient(135deg, #10b981, #059669)";
                    } elseif ((($tmp = (isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 294, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "linear-gradient(135deg, #fbbf24, #f59e0b)";
                    } else {
                        yield "#6b7280";
                    }
                    yield ";
                                border-radius: 50%;
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                                justify-content: center;
                                box-shadow: 0 20px 70px rgba(0,0,0,0.5);
                                transition: all 0.45s ease;
                                position: relative;
                                border: 10px solid ";
                    // line 303
                    yield ((((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 303, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 303, $this->source); })()))) ? ("rgba(255,255,255,0.8)") : ("rgba(255,255,255,0.25)"));
                    yield ";
                                opacity: ";
                    // line 304
                    yield ((((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 304, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 304, $this->source); })()))) ? ("1") : ("0.5"));
                    yield ";
                                cursor: ";
                    // line 305
                    yield ((((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 305, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 305, $this->source); })()))) ? ("pointer") : ("default"));
                    yield ";
                            \" 
                            ";
                    // line 307
                    if (((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 307, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 307, $this->source); })()))) {
                        // line 308
                        yield "                                onmouseover=\"this.style.transform='scale(1.15) rotate(5deg)'; this.style.boxShadow='0 40px 90px rgba(0,0,0,0.7)';\" 
                                onmouseout=\"this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 20px 70px rgba(0,0,0,0.5)';\"
                            ";
                    }
                    // line 310
                    yield ">
                                
                                <span style=\"font-size: 6rem; line-height: 1;\">
                                    ";
                    // line 313
                    if ((($tmp = (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 313, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "✅";
                    } else {
                        yield "📝";
                    }
                    // line 314
                    yield "                                </span>
                                <span style=\"font-size: 1.3rem; font-weight: 900; color: white; margin-top: 10px; text-align: center; padding: 0 20px;\">
                                    TEST<br>FIN NIVEAU
                                </span>

                                ";
                    // line 319
                    if ((($tmp = (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 319, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 320
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #10b981; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(16,185,129,0.6); border: 4px solid white;\">
                                        ✓
                                    </div>
                                ";
                    } elseif ((($tmp =  !                    // line 323
(isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 323, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 324
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #ef4444; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(239,68,68,0.6); border: 4px solid white;\">
                                        🔒
                                    </div>
                                ";
                    }
                    // line 328
                    yield "                            </div>

                            <p style=\"margin-top: 20px; font-size: 1.4rem; font-weight: 700; color: white; text-shadow: 0 3px 10px rgba(0,0,0,0.5);\">
                                ";
                    // line 331
                    if ((($tmp = (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 331, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 332
                        yield "                                    ✓ Validé
                                ";
                    } elseif ((($tmp =                     // line 333
(isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 333, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 334
                        yield "                                    Débloqué !
                                ";
                    } else {
                        // line 336
                        yield "                                    Termine tous les cours d'abord
                                ";
                    }
                    // line 338
                    yield "                            </p>

                            ";
                    // line 340
                    if (((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 340, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 340, $this->source); })()))) {
                        // line 341
                        yield "                                </a>
                            ";
                    }
                    // line 343
                    yield "                        </div>
                    ";
                }
                // line 345
                yield "                ";
            }
            // line 346
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveauIndex'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 347
        yield "            
                        ";
        // line 349
        yield "            <div style=\"position: fixed; right: 30px; top: 50%; transform: translateY(-50%); z-index: 10; display: flex; flex-direction: column; gap: 30px;\">

                ";
        // line 351
        $context["testsHorsParcours"] = [];
        // line 352
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["testsLangue"]) || array_key_exists("testsLangue", $context) ? $context["testsLangue"] : (function () { throw new RuntimeError('Variable "testsLangue" does not exist.', 352, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            yield "  
                    ";
            // line 353
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 353), ["Test de niveau", "Test de fin de niveau"])) {
                // line 354
                yield "                        ";
                $context["testsHorsParcours"] = Twig\Extension\CoreExtension::merge((isset($context["testsHorsParcours"]) || array_key_exists("testsHorsParcours", $context) ? $context["testsHorsParcours"] : (function () { throw new RuntimeError('Variable "testsHorsParcours" does not exist.', 354, $this->source); })()), [$context["test"]]);
                // line 355
                yield "                    ";
            }
            // line 356
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        yield "
                ";
        // line 358
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["testsHorsParcours"]) || array_key_exists("testsHorsParcours", $context) ? $context["testsHorsParcours"] : (function () { throw new RuntimeError('Variable "testsHorsParcours" does not exist.', 358, $this->source); })())) > 0)) {
            // line 359
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["testsHorsParcours"]) || array_key_exists("testsHorsParcours", $context) ? $context["testsHorsParcours"] : (function () { throw new RuntimeError('Variable "testsHorsParcours" does not exist.', 359, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                // line 360
                yield "                        ";
                // line 361
                yield "                        ";
                $context["testPassé"] = false;
                // line 362
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 362, $this->source); })()), "user", [], "any", false, false, false, 362)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 363
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "passages", [], "any", false, false, false, 363));
                    foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                        // line 364
                        yield "                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "user", [], "any", false, false, false, 364), "id", [], "any", false, false, false, 364) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 364, $this->source); })()), "user", [], "any", false, false, false, 364), "id", [], "any", false, false, false, 364)) && (CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 364) == "termine"))) {
                            // line 365
                            yield "                                    ";
                            $context["testPassé"] = true;
                            // line 366
                            yield "                                ";
                        }
                        // line 367
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['passage'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 368
                    yield "                        ";
                }
                // line 369
                yield "
                        <a href=\"";
                // line 370
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 370)]), "html", null, true);
                yield "\" 
                        style=\"text-decoration: none; display: block;\"
                        title=\"";
                // line 372
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "titre", [], "any", false, false, false, 372), "html", null, true);
                yield "\">
                            <div style=\"
                                width: 120px;
                                height: 120px;
                                background: ";
                // line 376
                if ((($tmp = (isset($context["testPassé"]) || array_key_exists("testPassé", $context) ? $context["testPassé"] : (function () { throw new RuntimeError('Variable "testPassé" does not exist.', 376, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "linear-gradient(135deg, #10b981, #059669)";
                } else {
                    yield "linear-gradient(135deg, #3b82f6, #1d4ed8)";
                }
                yield ";
                                border-radius: 50%;
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                                justify-content: center;
                                box-shadow: 0 10px 40px rgba(0,0,0,0.4);
                                transition: all 0.3s ease;
                                border: 6px solid rgba(255,255,255,0.8);
                                position: relative;
                                cursor: pointer;
                            \" 
                            onmouseover=\"this.style.transform='scale(1.15) rotate(10deg)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.6)';\" 
                            onmouseout=\"this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.4)';\">
                                
                                <span style=\"font-size: 3.5rem; line-height: 1;\">
                                    ";
                // line 392
                if ((($tmp = (isset($context["testPassé"]) || array_key_exists("testPassé", $context) ? $context["testPassé"] : (function () { throw new RuntimeError('Variable "testPassé" does not exist.', 392, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "✅";
                } else {
                    yield "📝";
                }
                // line 393
                yield "                                </span>
                                <span style=\"font-size: 0.9rem; font-weight: 800; color: white; margin-top: 5px; text-align: center; line-height: 1.1;\">
                                    TEST
                                </span>

                                ";
                // line 398
                if ((($tmp = (isset($context["testPassé"]) || array_key_exists("testPassé", $context) ? $context["testPassé"] : (function () { throw new RuntimeError('Variable "testPassé" does not exist.', 398, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 399
                    yield "                                    <div style=\"position: absolute; top: -8px; right: -8px; background: #10b981; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; box-shadow: 0 8px 20px rgba(16,185,129,0.6); border: 3px solid white;\">
                                        ✓
                                    </div>
                                ";
                }
                // line 403
                yield "                            </div>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 406
            yield "                ";
        } else {
            // line 407
            yield "                    <div style=\"
                        width: 120px;
                        height: 120px;
                        background: linear-gradient(135deg, #9ca3af, #6b7280);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: 6px solid rgba(255,255,255,0.5);
                        opacity: 0.6;
                    \">
                        <span style=\"font-size: 3rem;\">🔒</span>
                    </div>
                ";
        }
        // line 421
        yield "            </div>
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
        return array (  1024 => 421,  1008 => 407,  1005 => 406,  997 => 403,  991 => 399,  989 => 398,  982 => 393,  976 => 392,  953 => 376,  946 => 372,  941 => 370,  938 => 369,  935 => 368,  929 => 367,  926 => 366,  923 => 365,  920 => 364,  915 => 363,  912 => 362,  909 => 361,  907 => 360,  902 => 359,  900 => 358,  897 => 357,  891 => 356,  888 => 355,  885 => 354,  883 => 353,  876 => 352,  874 => 351,  870 => 349,  867 => 347,  861 => 346,  858 => 345,  854 => 343,  850 => 341,  848 => 340,  844 => 338,  840 => 336,  836 => 334,  834 => 333,  831 => 332,  829 => 331,  824 => 328,  818 => 324,  816 => 323,  811 => 320,  809 => 319,  802 => 314,  796 => 313,  791 => 310,  786 => 308,  784 => 307,  779 => 305,  775 => 304,  771 => 303,  753 => 294,  746 => 289,  740 => 287,  738 => 286,  735 => 285,  732 => 283,  726 => 282,  723 => 281,  720 => 280,  717 => 279,  712 => 278,  709 => 277,  707 => 276,  704 => 274,  698 => 273,  695 => 272,  692 => 271,  689 => 270,  686 => 269,  681 => 268,  678 => 267,  676 => 266,  674 => 265,  671 => 264,  665 => 263,  662 => 262,  659 => 261,  656 => 260,  651 => 259,  648 => 258,  646 => 257,  643 => 256,  640 => 254,  637 => 253,  622 => 251,  618 => 249,  612 => 247,  606 => 245,  604 => 244,  601 => 243,  597 => 241,  595 => 240,  591 => 238,  587 => 236,  585 => 235,  581 => 234,  576 => 231,  570 => 227,  568 => 226,  563 => 223,  561 => 222,  555 => 219,  550 => 216,  543 => 214,  541 => 213,  536 => 211,  532 => 210,  528 => 209,  510 => 200,  503 => 195,  497 => 193,  495 => 192,  491 => 191,  488 => 190,  485 => 189,  482 => 188,  479 => 187,  476 => 186,  473 => 185,  470 => 184,  467 => 183,  464 => 181,  461 => 180,  458 => 179,  455 => 178,  452 => 176,  449 => 175,  446 => 174,  443 => 173,  440 => 172,  437 => 171,  434 => 170,  431 => 169,  429 => 168,  426 => 167,  423 => 166,  420 => 165,  418 => 164,  415 => 163,  412 => 161,  409 => 160,  406 => 159,  403 => 158,  400 => 156,  397 => 155,  394 => 153,  391 => 152,  388 => 151,  370 => 150,  367 => 148,  364 => 147,  361 => 145,  355 => 144,  352 => 143,  349 => 142,  346 => 141,  341 => 140,  338 => 139,  331 => 134,  322 => 132,  318 => 130,  315 => 129,  312 => 127,  306 => 126,  303 => 125,  300 => 124,  297 => 123,  292 => 122,  289 => 121,  286 => 119,  283 => 118,  280 => 117,  277 => 116,  272 => 115,  269 => 113,  266 => 112,  263 => 110,  260 => 109,  257 => 107,  254 => 106,  251 => 105,  249 => 104,  246 => 103,  244 => 102,  240 => 99,  227 => 88,  224 => 87,  216 => 84,  199 => 71,  189 => 64,  184 => 62,  180 => 61,  170 => 54,  167 => 53,  164 => 52,  162 => 51,  148 => 40,  145 => 39,  138 => 35,  133 => 32,  131 => 31,  122 => 25,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ langue.nom }} – Ton parcours d'apprentissage{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #6d28d9 100%); min-height: 100vh; padding: 60px 20px; color: white; position: relative; overflow-x: hidden;\">
<br><br><br><br><br>
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
        <div style=\"text-align: center; margin-bottom: 70px;\">
            <h1 style=\"font-size: 3.8rem; font-weight: 900; margin: 0; color: white; text-shadow: 0 6px 20px rgba(0,0,0,0.5);\">
                {{ langue.nom }}
            </h1>
            <p style=\"font-size: 1.5rem; margin-top: 16px; opacity: 0.9; font-weight: 500;\">
                Complète les unités pour progresser niveau par niveau !
            </p>
            
            {% if niveauUtilisateur %}
                <div style=\"margin-top: 30px; padding: 15px 30px; background: rgba(255,255,255,0.15); border-radius: 60px; display: inline-block; backdrop-filter: blur(10px); border: 2px solid rgba(255,255,255,0.3);\">
                    <span style=\"font-size: 1.3rem; font-weight: 600; margin-right: 15px;\">🎓 Ton niveau actuel :</span>
                    <span style=\"background: linear-gradient(135deg, #fbbf24, #f59e0b); padding: 10px 25px; border-radius: 40px; font-weight: 900; font-size: 1.6rem; color: #1e293b; box-shadow: 0 10px 25px rgba(0,0,0,0.3);\">
                        {{ niveauObtenu }}
                    </span>
                </div>
            {% endif %}
            <div style=\"margin-top: 30px; padding: 15px 30px; background: rgba(255,255,255,0.15); border-radius: 60px; display: inline-block; backdrop-filter: blur(10px); border: 2px solid rgba(255,255,255,0.3);\">
            <a href=\"{{ path('app_etudiant_analyse', {langueId: langue.id}) }}\" class=\"btn btn-lg btn-primary\">
                <i class=\"fas fa-chart-line\"></i> 📊 Mon Analyse de Performance
            </a>
            </div>
        </div>

        <div style=\"position: relative; padding: 80px 0;\">
            <div style=\"position: absolute; top: 0; bottom: 0; left: 50%; width: 10px; background: linear-gradient(to bottom, rgba(255,255,255,0.6), rgba(255,255,255,0.15)); transform: translateX(-50%); border-radius: 5px; z-index: 1;\"></div>

            <!-- TEST DE NIVEAU -->
            <div style=\"position: relative; margin: 0 auto 180px; text-align: center; z-index: 3; max-width: 300px;\">
                {% if testNiveau %}
                    {% if dernierPassage %}
                        <div style=\"width: 220px; height: 220px; margin: 0 auto; background: linear-gradient(135deg, #10b981, #059669); border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 20px 70px rgba(16,185,129,0.6);\">
                            <span style=\"font-size: 5.5rem; line-height: 1; color: white;\">{{ niveauObtenu }}</span>
                            <span style=\"font-size: 1.4rem; font-weight: 900; color: white; margin-top: 8px;\">Niveau</span>
                        </div>
                        <p style=\"margin-top: 32px; font-size: 1.9rem; font-weight: 800; color: white; text-shadow: 0 4px 12px rgba(0,0,0,0.5);\">
                            Test de niveau terminé !
                        </p>
                        <p style=\"margin-top: 12px; font-size: 1.3rem; color: rgba(255,255,255,0.9);\">
                            Score : {{ dernierPassage.resultat|number_format(1, '.', '') }}% • 
                            Temps : {{ (dernierPassage.tempsPasse / 60)|number_format(0) }} min
                        </p>
                        <a href=\"{{ path('app_test_student_result', {id: dernierPassage.id}) }}\" 
                           style=\"display: inline-block; margin-top: 20px; background: rgba(255,255,255,0.2); color: white; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 700; transition: all 0.3s;\"
                           onmouseover=\"this.style.background='rgba(255,255,255,0.3)';\"
                           onmouseout=\"this.style.background='rgba(255,255,255,0.2)';\">
                            Voir les détails
                        </a>
                    {% else %}
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

            {# ============ AFFICHAGE DES 6 NIVEAUX × 3 COURS ============ #}
            {# 18 CERCLES - TOUS LES NIVEAUX SONT VISIBLES #}
            
            {% set niveaux = ['A1', 'A2', 'B1', 'B2', 'C1', 'C2'] %}
            {% set couleurs = ['#22c55e', '#3b82f6', '#8b5cf6', '#f59e0b', '#ef4444', '#7c3aed'] %}
            {% set ordreNiveaux = [1, 2, 3, 4, 5, 6] %}
            
            {# Récupérer l'ordre du niveau de l'utilisateur #}
            {% set niveauActuelOrdre = niveauUtilisateur ? niveauUtilisateur.ordre : 1 %}
            
            {# Récupérer le dernier cours terminé depuis progress #}
            {% set dernierCoursTermine = progress ? progress.dernierNumeroCours : 0 %}
            
            {# Parcourir les 6 niveaux #}
            {% for niveauIndex in 0..5 %}
                {% set niveauNom = niveaux[niveauIndex] %}
                {% set niveauOrdre = ordreNiveaux[niveauIndex] %}
                {% set niveauCouleur = couleurs[niveauIndex] %}
                
                {# Récupérer l'entité Niveau correspondante #}
                {% set niveauEntity = null %}
                {% for cours in allCours %}
                    {% if niveauEntity is null and cours.IdNiveau.difficulte == niveauNom and cours.IdNiveau.IdLangue.id == langue.id %}
                        {% set niveauEntity = cours.IdNiveau %}
                    {% endif %}
                {% endfor %}
                
                {# Vérifier si le niveau existe pour cette langue #}
                {% if niveauEntity %}
                    
                    <!-- TITRE DU NIVEAU -->
                    <div style=\"position: relative; margin: {% if niveauIndex == 0 %}0{% else %}100{% endif %}px 0 40px; text-align: center; z-index: 3;\">
                        <div style=\"font-size: 2.8rem; font-weight: 900; color: white; margin-bottom: 30px; text-shadow: 0 6px 16px rgba(0,0,0,0.5);\">
                            Niveau {{ niveauNom }}
                        </div>
                    </div>
                    
                    {# Récupérer les cours de ce niveau #}
                    {% set coursDuNiveau = [] %}
                    {% for cours in allCours %}
                        {% if cours.IdNiveau.id == niveauEntity.id %}
                            {% set coursDuNiveau = coursDuNiveau|merge([cours]) %}
                        {% endif %}
                    {% endfor %}
                    
                    {# Trier les cours par numéro #}
                    {% set coursDuNiveau = coursDuNiveau|sort((a, b) => a.numero <=> b.numero) %}
                    
                    {# Afficher les 3 cours du niveau #}
                    {% for cours in coursDuNiveau|slice(0, 3) %}
                        {% set coursNumero = loop.index %}
                        {% set coursReelNumero = cours.numero %}
                        
                        {# Déterminer si le cours est débloqué #}
                        {% set isUnlocked = false %}
                        
                        {# Cas 1: Niveau inférieur au niveau actuel - TOUS débloqués #}
                        {% if niveauOrdre < niveauActuelOrdre %}
                            {% set isUnlocked = true %}
                        {% endif %}
                        
                        {# Cas 2: Niveau égal au niveau actuel #}
                        {% if niveauOrdre == niveauActuelOrdre %}
                            {# Premier cours toujours débloqué #}
                            {% if coursNumero == 1 %}
                                {% set isUnlocked = true %}
                            {% else %}
                                {# Vérifier si le cours précédent de ce niveau est terminé via progress #}
                                {% set coursPrecedentTermine = false %}
                                {% if dernierCoursTermine >= coursReelNumero - 1 %}
                                    {% set coursPrecedentTermine = true %}
                                {% endif %}
                                {% set isUnlocked = coursPrecedentTermine %}
                            {% endif %}
                        {% endif %}
                        
                        {# Cas 3: Niveau supérieur au niveau actuel - TOUS verrouillés #}
                        {% if niveauOrdre > niveauActuelOrdre %}
                            {% set isUnlocked = false %}
                        {% endif %}
                        
                        {# Vérifier si le cours est déjà terminé #}
                        {% set isCompleted = false %}
                        {% if niveauOrdre == niveauActuelOrdre and dernierCoursTermine >= coursReelNumero %}
                            {% set isCompleted = true %}
                        {% endif %}
                        {% if niveauOrdre < niveauActuelOrdre %}
                            {% set isCompleted = true %}
                        {% endif %}
                        
                        <div style=\"position: relative; margin: 60px 0; text-align: center; z-index: 3; transform: translateX({{ (coursNumero % 2 == 0) ? '120px' : '-120px' }});\">
                            {% if isUnlocked %}
                                <a href=\"{{ path('app_cours_show', {id: cours.id}) }}\" style=\"text-decoration: none;\">
                            {% endif %}
                            
                            <div style=\"
                                width: 160px;
                                height: 160px;
                                margin: 0 auto;
                                background: {% if isCompleted %}#10b981{% elseif isUnlocked %}{{ niveauCouleur }}{% else %}#6b7280{% endif %};
                                border-radius: 50%;
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                                justify-content: center;
                                box-shadow: 0 16px 60px rgba(0,0,0,0.45);
                                transition: all 0.45s ease;
                                position: relative;
                                border: 8px solid {{ isUnlocked ? 'rgba(255,255,255,0.7)' : 'rgba(255,255,255,0.25)' }};
                                opacity: {{ isUnlocked ? '1' : '0.6' }};
                                cursor: {{ isUnlocked ? 'pointer' : 'default' }};
                            \" 
                            {% if isUnlocked %}
                                onmouseover=\"this.style.transform='scale(1.15) rotate({{ (coursNumero % 2 == 0) ? '10' : '-10' }}deg)'; this.style.boxShadow='0 40px 90px rgba(0,0,0,0.6)';\" 
                                onmouseout=\"this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 16px 60px rgba(0,0,0,0.45)';\"
                            {% endif %}>
                                
                                <span style=\"font-size: 4.5rem; font-weight: 900; color: white; text-shadow: 5px 5px 14px rgba(0,0,0,0.6);\">
                                    {{ coursReelNumero }}
                                </span>
                                
                                {% if isCompleted %}
                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #10b981; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(16,185,129,0.6); border: 4px solid white;\">
                                        ✓
                                    </div>
                                {% elseif not isUnlocked %}
                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #ef4444; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(239,68,68,0.6); border: 4px solid white;\">
                                        🔒
                                    </div>
                                {% endif %}
                            </div>
                            
                            <p style=\"margin-top: 20px; font-size: 1.4rem; font-weight: 700; color: white; text-shadow: 0 3px 10px rgba(0,0,0,0.5);\">
                                Unité {{ coursReelNumero }}
                                {% if isCompleted %}
                                    <span style=\"display: block; font-size: 1rem; color: #a5f3fc; margin-top: 5px;\">✓ Terminé</span>
                                {% endif %}
                            </p>
                            
                            {% if isUnlocked %}
                                </a>
                            {% else %}
                                <p style=\"margin-top: 10px; font-size: 1rem; color: rgba(255,255,255,0.7); font-style: italic;\">
                                    {% if niveauOrdre > niveauActuelOrdre %}
                                        Niveau {{ niveauActuelOrdre }} requis
                                    {% else %}
                                        Termine l'unité {{ coursReelNumero - 1 }} d'abord
                                    {% endif %}
                                </p>
                            {% endif %}
                        </div>
                    {% endfor %}
                {% endif %}
                
                                {# ============ TEST DE FIN DE NIVEAU ============ #}
                {% if niveauEntity %}
                    {# Récupérer le test de fin de niveau pour ce niveau spécifique #}
                    {% set testFinNiveau = null %}
                    {% for test in testsLangue %}
                        {% if test.type == 'Test de fin de niveau' and test.niveau and test.niveau.id == niveauEntity.id %}
                            {% set testFinNiveau = test %}
                        {% endif %}
                    {% endfor %}

                    {% if testFinNiveau %}
                        {# Vérifier si tous les cours du niveau sont terminés #}
                        {% set tousCoursTermines = true %}
                        {% for cours in coursDuNiveau|slice(0, 3) %}
                            {% set coursReelNumero = cours.numero %}
                            {% if niveauOrdre == niveauActuelOrdre and dernierCoursTermine < coursReelNumero %}
                                {% set tousCoursTermines = false %}
                            {% endif %}
                        {% endfor %}

                        {# Vérifier si le test est déjà passé #}
                        {# Vérifier si le test est déjà passé #}
                        {% set testDejaPassé = false %}
                        {% for passage in testFinNiveau.passages %}
                            {% if passage.user.id == user.id and passage.statut == 'termine' %}
                                {% set testDejaPassé = true %}
                            {% endif %}
                        {% endfor %}

                        {# Afficher le cercle de test #}
                        <div style=\"position: relative; margin: 100px 0; text-align: center; z-index: 3;\">
                            {% if tousCoursTermines or testDejaPassé %}
                                <a href=\"{{ path('app_test_student_show', {id: testFinNiveau.id}) }}\" style=\"text-decoration: none;\">
                            {% endif %}
                            
                            <div style=\"
                                width: 200px;
                                height: 200px;
                                margin: 0 auto;
                                background: {% if testDejaPassé %}linear-gradient(135deg, #10b981, #059669){% elseif tousCoursTermines %}linear-gradient(135deg, #fbbf24, #f59e0b){% else %}#6b7280{% endif %};
                                border-radius: 50%;
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                                justify-content: center;
                                box-shadow: 0 20px 70px rgba(0,0,0,0.5);
                                transition: all 0.45s ease;
                                position: relative;
                                border: 10px solid {{ (tousCoursTermines or testDejaPassé) ? 'rgba(255,255,255,0.8)' : 'rgba(255,255,255,0.25)' }};
                                opacity: {{ (tousCoursTermines or testDejaPassé) ? '1' : '0.5' }};
                                cursor: {{ (tousCoursTermines or testDejaPassé) ? 'pointer' : 'default' }};
                            \" 
                            {% if tousCoursTermines or testDejaPassé %}
                                onmouseover=\"this.style.transform='scale(1.15) rotate(5deg)'; this.style.boxShadow='0 40px 90px rgba(0,0,0,0.7)';\" 
                                onmouseout=\"this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 20px 70px rgba(0,0,0,0.5)';\"
                            {% endif %}>
                                
                                <span style=\"font-size: 6rem; line-height: 1;\">
                                    {% if testDejaPassé %}✅{% else %}📝{% endif %}
                                </span>
                                <span style=\"font-size: 1.3rem; font-weight: 900; color: white; margin-top: 10px; text-align: center; padding: 0 20px;\">
                                    TEST<br>FIN NIVEAU
                                </span>

                                {% if testDejaPassé %}
                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #10b981; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(16,185,129,0.6); border: 4px solid white;\">
                                        ✓
                                    </div>
                                {% elseif not tousCoursTermines %}
                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #ef4444; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(239,68,68,0.6); border: 4px solid white;\">
                                        🔒
                                    </div>
                                {% endif %}
                            </div>

                            <p style=\"margin-top: 20px; font-size: 1.4rem; font-weight: 700; color: white; text-shadow: 0 3px 10px rgba(0,0,0,0.5);\">
                                {% if testDejaPassé %}
                                    ✓ Validé
                                {% elseif tousCoursTermines %}
                                    Débloqué !
                                {% else %}
                                    Termine tous les cours d'abord
                                {% endif %}
                            </p>

                            {% if tousCoursTermines or testDejaPassé %}
                                </a>
                            {% endif %}
                        </div>
                    {% endif %}
                {% endif %}
            {% endfor %}
            
                        {# ============ TESTS HORS PARCOURS (À DROITE) ============ #}
            <div style=\"position: fixed; right: 30px; top: 50%; transform: translateY(-50%); z-index: 10; display: flex; flex-direction: column; gap: 30px;\">

                {% set testsHorsParcours = [] %}
                {% for test in testsLangue %}  
                    {% if test.type not in ['Test de niveau', 'Test de fin de niveau'] %}
                        {% set testsHorsParcours = testsHorsParcours|merge([test]) %}
                    {% endif %}
                {% endfor %}

                {% if testsHorsParcours|length > 0 %}
                    {% for test in testsHorsParcours %}
                        {# Vérifier si déjà passé #}
                        {% set testPassé = false %}
                        {% if app.user %}
                            {% for passage in test.passages %}
                                {% if passage.user.id == app.user.id and passage.statut == 'termine' %}
                                    {% set testPassé = true %}
                                {% endif %}
                            {% endfor %}
                        {% endif %}

                        <a href=\"{{ path('app_test_student_show', {id: test.id}) }}\" 
                        style=\"text-decoration: none; display: block;\"
                        title=\"{{ test.titre }}\">
                            <div style=\"
                                width: 120px;
                                height: 120px;
                                background: {% if testPassé %}linear-gradient(135deg, #10b981, #059669){% else %}linear-gradient(135deg, #3b82f6, #1d4ed8){% endif %};
                                border-radius: 50%;
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                                justify-content: center;
                                box-shadow: 0 10px 40px rgba(0,0,0,0.4);
                                transition: all 0.3s ease;
                                border: 6px solid rgba(255,255,255,0.8);
                                position: relative;
                                cursor: pointer;
                            \" 
                            onmouseover=\"this.style.transform='scale(1.15) rotate(10deg)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.6)';\" 
                            onmouseout=\"this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.4)';\">
                                
                                <span style=\"font-size: 3.5rem; line-height: 1;\">
                                    {% if testPassé %}✅{% else %}📝{% endif %}
                                </span>
                                <span style=\"font-size: 0.9rem; font-weight: 800; color: white; margin-top: 5px; text-align: center; line-height: 1.1;\">
                                    TEST
                                </span>

                                {% if testPassé %}
                                    <div style=\"position: absolute; top: -8px; right: -8px; background: #10b981; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; box-shadow: 0 8px 20px rgba(16,185,129,0.6); border: 3px solid white;\">
                                        ✓
                                    </div>
                                {% endif %}
                            </div>
                        </a>
                    {% endfor %}
                {% else %}
                    <div style=\"
                        width: 120px;
                        height: 120px;
                        background: linear-gradient(135deg, #9ca3af, #6b7280);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: 6px solid rgba(255,255,255,0.5);
                        opacity: 0.6;
                    \">
                        <span style=\"font-size: 3rem;\">🔒</span>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "langue/apprentissage.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\langue\\apprentissage.html.twig");
    }
}
