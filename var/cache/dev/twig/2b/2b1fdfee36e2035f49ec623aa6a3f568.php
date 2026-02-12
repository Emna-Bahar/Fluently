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
class __TwigTemplate_be7aa9b2907eb2784a2f16085b2b766b extends Template
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
        yield "        </div>

        <div style=\"position: relative; padding: 80px 0;\">
            <div style=\"position: absolute; top: 0; bottom: 0; left: 50%; width: 10px; background: linear-gradient(to bottom, rgba(255,255,255,0.6), rgba(255,255,255,0.15)); transform: translateX(-50%); border-radius: 5px; z-index: 1;\"></div>

            <!-- TEST DE NIVEAU -->
            <div style=\"position: relative; margin: 0 auto 180px; text-align: center; z-index: 3; max-width: 300px;\">
                ";
        // line 46
        if ((($tmp = (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "                    ";
            if ((($tmp = (isset($context["dernierPassage"]) || array_key_exists("dernierPassage", $context) ? $context["dernierPassage"] : (function () { throw new RuntimeError('Variable "dernierPassage" does not exist.', 47, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 48
                yield "                        <div style=\"width: 220px; height: 220px; margin: 0 auto; background: linear-gradient(135deg, #10b981, #059669); border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 20px 70px rgba(16,185,129,0.6);\">
                            <span style=\"font-size: 5.5rem; line-height: 1; color: white;\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauObtenu"]) || array_key_exists("niveauObtenu", $context) ? $context["niveauObtenu"] : (function () { throw new RuntimeError('Variable "niveauObtenu" does not exist.', 49, $this->source); })()), "html", null, true);
                yield "</span>
                            <span style=\"font-size: 1.4rem; font-weight: 900; color: white; margin-top: 8px;\">Niveau</span>
                        </div>
                        <p style=\"margin-top: 32px; font-size: 1.9rem; font-weight: 800; color: white; text-shadow: 0 4px 12px rgba(0,0,0,0.5);\">
                            Test de niveau terminé !
                        </p>
                        <p style=\"margin-top: 12px; font-size: 1.3rem; color: rgba(255,255,255,0.9);\">
                            Score : ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dernierPassage"]) || array_key_exists("dernierPassage", $context) ? $context["dernierPassage"] : (function () { throw new RuntimeError('Variable "dernierPassage" does not exist.', 56, $this->source); })()), "resultat", [], "any", false, false, false, 56), 1, ".", ""), "html", null, true);
                yield "% • 
                            Temps : ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["dernierPassage"]) || array_key_exists("dernierPassage", $context) ? $context["dernierPassage"] : (function () { throw new RuntimeError('Variable "dernierPassage" does not exist.', 57, $this->source); })()), "tempsPasse", [], "any", false, false, false, 57) / 60), 0), "html", null, true);
                yield " min
                        </p>
                        <a href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_result", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["dernierPassage"]) || array_key_exists("dernierPassage", $context) ? $context["dernierPassage"] : (function () { throw new RuntimeError('Variable "dernierPassage" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\" 
                           style=\"display: inline-block; margin-top: 20px; background: rgba(255,255,255,0.2); color: white; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 700; transition: all 0.3s;\"
                           onmouseover=\"this.style.background='rgba(255,255,255,0.3)';\"
                           onmouseout=\"this.style.background='rgba(255,255,255,0.2)';\">
                            Voir les détails
                        </a>
                    ";
            } else {
                // line 66
                yield "                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_start", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
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
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 79, $this->source); })()), "questions", [], "any", false, false, false, 79)), "html", null, true);
                yield " questions • ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 79, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 79)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["testNiveau"]) || array_key_exists("testNiveau", $context) ? $context["testNiveau"] : (function () { throw new RuntimeError('Variable "testNiveau" does not exist.', 79, $this->source); })()), "dureeEstimee", [], "any", false, false, false, 79), "html", null, true)) : ("15"));
                yield " minutes
                        </p>
                    ";
            }
            // line 82
            yield "                ";
        } else {
            // line 83
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
        // line 94
        yield "            </div>

            ";
        // line 97
        yield "            ";
        // line 98
        yield "            
            ";
        // line 99
        $context["niveaux"] = ["A1", "A2", "B1", "B2", "C1", "C2"];
        // line 100
        yield "            ";
        $context["couleurs"] = ["#22c55e", "#3b82f6", "#8b5cf6", "#f59e0b", "#ef4444", "#7c3aed"];
        // line 101
        yield "            ";
        $context["ordreNiveaux"] = [1, 2, 3, 4, 5, 6];
        // line 102
        yield "            
            ";
        // line 104
        yield "            ";
        $context["niveauActuelOrdre"] = (((($tmp = (isset($context["niveauUtilisateur"]) || array_key_exists("niveauUtilisateur", $context) ? $context["niveauUtilisateur"] : (function () { throw new RuntimeError('Variable "niveauUtilisateur" does not exist.', 104, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauUtilisateur"]) || array_key_exists("niveauUtilisateur", $context) ? $context["niveauUtilisateur"] : (function () { throw new RuntimeError('Variable "niveauUtilisateur" does not exist.', 104, $this->source); })()), "ordre", [], "any", false, false, false, 104)) : (1));
        // line 105
        yield "            
            ";
        // line 107
        yield "            ";
        $context["dernierCoursTermine"] = (((($tmp = (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 107, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 107, $this->source); })()), "dernierNumeroCours", [], "any", false, false, false, 107)) : (0));
        // line 108
        yield "            
            ";
        // line 110
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["niveauIndex"]) {
            // line 111
            yield "                ";
            $context["niveauNom"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 111, $this->source); })()), $context["niveauIndex"], [], "array", false, false, false, 111);
            // line 112
            yield "                ";
            $context["niveauOrdre"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ordreNiveaux"]) || array_key_exists("ordreNiveaux", $context) ? $context["ordreNiveaux"] : (function () { throw new RuntimeError('Variable "ordreNiveaux" does not exist.', 112, $this->source); })()), $context["niveauIndex"], [], "array", false, false, false, 112);
            // line 113
            yield "                ";
            $context["niveauCouleur"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["couleurs"]) || array_key_exists("couleurs", $context) ? $context["couleurs"] : (function () { throw new RuntimeError('Variable "couleurs" does not exist.', 113, $this->source); })()), $context["niveauIndex"], [], "array", false, false, false, 113);
            // line 114
            yield "                
                ";
            // line 116
            yield "                ";
            $context["niveauEntity"] = null;
            // line 117
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allCours"]) || array_key_exists("allCours", $context) ? $context["allCours"] : (function () { throw new RuntimeError('Variable "allCours" does not exist.', 117, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                // line 118
                yield "                    ";
                if ((((null === (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 118, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 118), "difficulte", [], "any", false, false, false, 118) == (isset($context["niveauNom"]) || array_key_exists("niveauNom", $context) ? $context["niveauNom"] : (function () { throw new RuntimeError('Variable "niveauNom" does not exist.', 118, $this->source); })()))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 118), "IdLangue", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118)))) {
                    // line 119
                    yield "                        ";
                    $context["niveauEntity"] = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 119);
                    // line 120
                    yield "                    ";
                }
                // line 121
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "                
                ";
            // line 124
            yield "                ";
            if ((($tmp = (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 124, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 125
                yield "                    
                    <!-- TITRE DU NIVEAU -->
                    <div style=\"position: relative; margin: ";
                // line 127
                if (($context["niveauIndex"] == 0)) {
                    yield "0";
                } else {
                    yield "100";
                }
                yield "px 0 40px; text-align: center; z-index: 3;\">
                        <div style=\"font-size: 2.8rem; font-weight: 900; color: white; margin-bottom: 30px; text-shadow: 0 6px 16px rgba(0,0,0,0.5);\">
                            Niveau ";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauNom"]) || array_key_exists("niveauNom", $context) ? $context["niveauNom"] : (function () { throw new RuntimeError('Variable "niveauNom" does not exist.', 129, $this->source); })()), "html", null, true);
                yield "
                        </div>
                    </div>
                    
                    ";
                // line 134
                yield "                    ";
                $context["coursDuNiveau"] = [];
                // line 135
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allCours"]) || array_key_exists("allCours", $context) ? $context["allCours"] : (function () { throw new RuntimeError('Variable "allCours" does not exist.', 135, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                    // line 136
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136))) {
                        // line 137
                        yield "                            ";
                        $context["coursDuNiveau"] = Twig\Extension\CoreExtension::merge((isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 137, $this->source); })()), [$context["cours"]]);
                        // line 138
                        yield "                        ";
                    }
                    // line 139
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                yield "                    
                    ";
                // line 142
                yield "                    ";
                $context["coursDuNiveau"] = Twig\Extension\CoreExtension::sort($this->env, (isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 142, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 142, $this->source); })()), "numero", [], "any", false, false, false, 142) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 142, $this->source); })()), "numero", [], "any", false, false, false, 142)); });
                // line 143
                yield "                    
                    ";
                // line 145
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 145, $this->source); })()), 0, 3));
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
                    // line 146
                    yield "                        ";
                    $context["coursNumero"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 146);
                    // line 147
                    yield "                        ";
                    $context["coursReelNumero"] = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "numero", [], "any", false, false, false, 147);
                    // line 148
                    yield "                        
                        ";
                    // line 150
                    yield "                        ";
                    $context["isUnlocked"] = false;
                    // line 151
                    yield "                        
                        ";
                    // line 153
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 153, $this->source); })()) < (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 153, $this->source); })()))) {
                        // line 154
                        yield "                            ";
                        $context["isUnlocked"] = true;
                        // line 155
                        yield "                        ";
                    }
                    // line 156
                    yield "                        
                        ";
                    // line 158
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 158, $this->source); })()) == (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 158, $this->source); })()))) {
                        // line 159
                        yield "                            ";
                        // line 160
                        yield "                            ";
                        if (((isset($context["coursNumero"]) || array_key_exists("coursNumero", $context) ? $context["coursNumero"] : (function () { throw new RuntimeError('Variable "coursNumero" does not exist.', 160, $this->source); })()) == 1)) {
                            // line 161
                            yield "                                ";
                            $context["isUnlocked"] = true;
                            // line 162
                            yield "                            ";
                        } else {
                            // line 163
                            yield "                                ";
                            // line 164
                            yield "                                ";
                            $context["coursPrecedentTermine"] = false;
                            // line 165
                            yield "                                ";
                            if (((isset($context["dernierCoursTermine"]) || array_key_exists("dernierCoursTermine", $context) ? $context["dernierCoursTermine"] : (function () { throw new RuntimeError('Variable "dernierCoursTermine" does not exist.', 165, $this->source); })()) >= ((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 165, $this->source); })()) - 1))) {
                                // line 166
                                yield "                                    ";
                                $context["coursPrecedentTermine"] = true;
                                // line 167
                                yield "                                ";
                            }
                            // line 168
                            yield "                                ";
                            $context["isUnlocked"] = (isset($context["coursPrecedentTermine"]) || array_key_exists("coursPrecedentTermine", $context) ? $context["coursPrecedentTermine"] : (function () { throw new RuntimeError('Variable "coursPrecedentTermine" does not exist.', 168, $this->source); })());
                            // line 169
                            yield "                            ";
                        }
                        // line 170
                        yield "                        ";
                    }
                    // line 171
                    yield "                        
                        ";
                    // line 173
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 173, $this->source); })()) > (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 173, $this->source); })()))) {
                        // line 174
                        yield "                            ";
                        $context["isUnlocked"] = false;
                        // line 175
                        yield "                        ";
                    }
                    // line 176
                    yield "                        
                        ";
                    // line 178
                    yield "                        ";
                    $context["isCompleted"] = false;
                    // line 179
                    yield "                        ";
                    if ((((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 179, $this->source); })()) == (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 179, $this->source); })())) && ((isset($context["dernierCoursTermine"]) || array_key_exists("dernierCoursTermine", $context) ? $context["dernierCoursTermine"] : (function () { throw new RuntimeError('Variable "dernierCoursTermine" does not exist.', 179, $this->source); })()) >= (isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 179, $this->source); })())))) {
                        // line 180
                        yield "                            ";
                        $context["isCompleted"] = true;
                        // line 181
                        yield "                        ";
                    }
                    // line 182
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 182, $this->source); })()) < (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 182, $this->source); })()))) {
                        // line 183
                        yield "                            ";
                        $context["isCompleted"] = true;
                        // line 184
                        yield "                        ";
                    }
                    // line 185
                    yield "                        
                        <div style=\"position: relative; margin: 60px 0; text-align: center; z-index: 3; transform: translateX(";
                    // line 186
                    yield (((((isset($context["coursNumero"]) || array_key_exists("coursNumero", $context) ? $context["coursNumero"] : (function () { throw new RuntimeError('Variable "coursNumero" does not exist.', 186, $this->source); })()) % 2) == 0)) ? ("120px") : ("-120px"));
                    yield ");\">
                            ";
                    // line 187
                    if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 187, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 188
                        yield "                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 188)]), "html", null, true);
                        yield "\" style=\"text-decoration: none;\">
                            ";
                    }
                    // line 190
                    yield "                            
                            <div style=\"
                                width: 160px;
                                height: 160px;
                                margin: 0 auto;
                                background: ";
                    // line 195
                    if ((($tmp = (isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 195, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "#10b981";
                    } elseif ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 195, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauCouleur"]) || array_key_exists("niveauCouleur", $context) ? $context["niveauCouleur"] : (function () { throw new RuntimeError('Variable "niveauCouleur" does not exist.', 195, $this->source); })()), "html", null, true);
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
                    // line 204
                    yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 204, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.7)") : ("rgba(255,255,255,0.25)"));
                    yield ";
                                opacity: ";
                    // line 205
                    yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 205, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0.6"));
                    yield ";
                                cursor: ";
                    // line 206
                    yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 206, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pointer") : ("default"));
                    yield ";
                            \" 
                            ";
                    // line 208
                    if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 208, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 209
                        yield "                                onmouseover=\"this.style.transform='scale(1.15) rotate(";
                        yield (((((isset($context["coursNumero"]) || array_key_exists("coursNumero", $context) ? $context["coursNumero"] : (function () { throw new RuntimeError('Variable "coursNumero" does not exist.', 209, $this->source); })()) % 2) == 0)) ? ("10") : ("-10"));
                        yield "deg)'; this.style.boxShadow='0 40px 90px rgba(0,0,0,0.6)';\" 
                                onmouseout=\"this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 16px 60px rgba(0,0,0,0.45)';\"
                            ";
                    }
                    // line 211
                    yield ">
                                
                                <span style=\"font-size: 4.5rem; font-weight: 900; color: white; text-shadow: 5px 5px 14px rgba(0,0,0,0.6);\">
                                    ";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 214, $this->source); })()), "html", null, true);
                    yield "
                                </span>
                                
                                ";
                    // line 217
                    if ((($tmp = (isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 217, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 218
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #10b981; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(16,185,129,0.6); border: 4px solid white;\">
                                        ✓
                                    </div>
                                ";
                    } elseif ((($tmp =  !                    // line 221
(isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 221, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 222
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #ef4444; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(239,68,68,0.6); border: 4px solid white;\">
                                        🔒
                                    </div>
                                ";
                    }
                    // line 226
                    yield "                            </div>
                            
                            <p style=\"margin-top: 20px; font-size: 1.4rem; font-weight: 700; color: white; text-shadow: 0 3px 10px rgba(0,0,0,0.5);\">
                                Unité ";
                    // line 229
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 229, $this->source); })()), "html", null, true);
                    yield "
                                ";
                    // line 230
                    if ((($tmp = (isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 230, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 231
                        yield "                                    <span style=\"display: block; font-size: 1rem; color: #a5f3fc; margin-top: 5px;\">✓ Terminé</span>
                                ";
                    }
                    // line 233
                    yield "                            </p>
                            
                            ";
                    // line 235
                    if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 235, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 236
                        yield "                                </a>
                            ";
                    } else {
                        // line 238
                        yield "                                <p style=\"margin-top: 10px; font-size: 1rem; color: rgba(255,255,255,0.7); font-style: italic;\">
                                    ";
                        // line 239
                        if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 239, $this->source); })()) > (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 239, $this->source); })()))) {
                            // line 240
                            yield "                                        Niveau ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 240, $this->source); })()), "html", null, true);
                            yield " requis
                                    ";
                        } else {
                            // line 242
                            yield "                                        Termine l'unité ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 242, $this->source); })()) - 1), "html", null, true);
                            yield " d'abord
                                    ";
                        }
                        // line 244
                        yield "                                </p>
                            ";
                    }
                    // line 246
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
                // line 248
                yield "                ";
            }
            // line 249
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveauIndex'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        yield "        </div>
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
        return array (  638 => 250,  632 => 249,  629 => 248,  614 => 246,  610 => 244,  604 => 242,  598 => 240,  596 => 239,  593 => 238,  589 => 236,  587 => 235,  583 => 233,  579 => 231,  577 => 230,  573 => 229,  568 => 226,  562 => 222,  560 => 221,  555 => 218,  553 => 217,  547 => 214,  542 => 211,  535 => 209,  533 => 208,  528 => 206,  524 => 205,  520 => 204,  502 => 195,  495 => 190,  489 => 188,  487 => 187,  483 => 186,  480 => 185,  477 => 184,  474 => 183,  471 => 182,  468 => 181,  465 => 180,  462 => 179,  459 => 178,  456 => 176,  453 => 175,  450 => 174,  447 => 173,  444 => 171,  441 => 170,  438 => 169,  435 => 168,  432 => 167,  429 => 166,  426 => 165,  423 => 164,  421 => 163,  418 => 162,  415 => 161,  412 => 160,  410 => 159,  407 => 158,  404 => 156,  401 => 155,  398 => 154,  395 => 153,  392 => 151,  389 => 150,  386 => 148,  383 => 147,  380 => 146,  362 => 145,  359 => 143,  356 => 142,  353 => 140,  347 => 139,  344 => 138,  341 => 137,  338 => 136,  333 => 135,  330 => 134,  323 => 129,  314 => 127,  310 => 125,  307 => 124,  304 => 122,  298 => 121,  295 => 120,  292 => 119,  289 => 118,  284 => 117,  281 => 116,  278 => 114,  275 => 113,  272 => 112,  269 => 111,  264 => 110,  261 => 108,  258 => 107,  255 => 105,  252 => 104,  249 => 102,  246 => 101,  243 => 100,  241 => 99,  238 => 98,  236 => 97,  232 => 94,  219 => 83,  216 => 82,  208 => 79,  191 => 66,  181 => 59,  176 => 57,  172 => 56,  162 => 49,  159 => 48,  156 => 47,  154 => 46,  145 => 39,  138 => 35,  133 => 32,  131 => 31,  122 => 25,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
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
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", "langue/apprentissage.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\langue\\apprentissage.html.twig");
    }
}
