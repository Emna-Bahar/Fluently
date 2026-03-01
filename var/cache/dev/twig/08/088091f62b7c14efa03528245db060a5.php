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
class __TwigTemplate_172d1965b9407dd61e9471f6360f05c2 extends Template
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

            <!-- ============ STATISTIQUES DE PROGRESSION ============ -->
            <div style=\"margin: 30px auto 50px; max-width: 900px;\">
                <div style=\"display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;\">
                    
                    <!-- Carte 1 : Cours complétés -->
                    <div style=\"background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 20px; padding: 25px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s;\" 
                         onmouseover=\"this.style.transform='translateY(-5px)'; this.style.background='rgba(255,255,255,0.25)';\"
                         onmouseout=\"this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.15)';\">
                        <div style=\"font-size: 3rem; margin-bottom: 10px;\">📊</div>
                        <div style=\"font-size: 2.5rem; font-weight: 800; color: white;\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coursCompletes"]) || array_key_exists("coursCompletes", $context) ? $context["coursCompletes"] : (function () { throw new RuntimeError('Variable "coursCompletes" does not exist.', 110, $this->source); })()), "html", null, true);
        yield "</div>
                        <div style=\"color: rgba(255,255,255,0.8); font-size: 1.1rem;\">Cours complétés</div>
                    </div>
                    
                    <!-- Carte 2 : Temps d'étude -->
                    <div style=\"background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 20px; padding: 25px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s;\"
                         onmouseover=\"this.style.transform='translateY(-5px)'; this.style.background='rgba(255,255,255,0.25)';\"
                         onmouseout=\"this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.15)';\">
                        <div style=\"font-size: 3rem; margin-bottom: 10px;\">⏱️</div>
                        <div style=\"font-size: 2.5rem; font-weight: 800; color: white;\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tempsTotal"]) || array_key_exists("tempsTotal", $context) ? $context["tempsTotal"] : (function () { throw new RuntimeError('Variable "tempsTotal" does not exist.', 119, $this->source); })()), "html", null, true);
        yield " min</div>
                        <div style=\"color: rgba(255,255,255,0.8); font-size: 1.1rem;\">Temps d'étude</div>
                    </div>
                    
                    <!-- Carte 3 : Progression (remplace streak) -->
                    <div style=\"background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 20px; padding: 25px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s;\"
                         onmouseover=\"this.style.transform='translateY(-5px)'; this.style.background='rgba(255,255,255,0.25)';\"
                         onmouseout=\"this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.15)';\">
                        <div style=\"font-size: 3rem; margin-bottom: 10px;\">📈</div>
                        <div style=\"font-size: 2.5rem; font-weight: 800; color: white;\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["progression"]) || array_key_exists("progression", $context) ? $context["progression"] : (function () { throw new RuntimeError('Variable "progression" does not exist.', 128, $this->source); })())), "html", null, true);
        yield "%</div>
                        <div style=\"color: rgba(255,255,255,0.8); font-size: 1.1rem;\">Progression</div>
                    </div>
                </div>
            </div>

            <!-- ============ BARRE DE PROGRESSION ============ -->
            ";
        // line 135
        if ((($tmp = (isset($context["niveauUtilisateur"]) || array_key_exists("niveauUtilisateur", $context) ? $context["niveauUtilisateur"] : (function () { throw new RuntimeError('Variable "niveauUtilisateur" does not exist.', 135, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 136
            yield "            <div style=\"margin: 40px auto; max-width: 700px;\">
                <div style=\"display: flex; justify-content: space-between; color: white; margin-bottom: 15px;\">
                    <span style=\"font-size: 1.2rem; font-weight: 600;\">Progression vers le niveau suivant</span>
                    <span style=\"font-size: 1.5rem; font-weight: 800; background: rgba(255,255,255,0.2); padding: 5px 15px; border-radius: 50px;\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["progression"]) || array_key_exists("progression", $context) ? $context["progression"] : (function () { throw new RuntimeError('Variable "progression" does not exist.', 139, $this->source); })())), "html", null, true);
            yield "%</span>
                </div>
                
                <div style=\"width: 100%; height: 25px; background: rgba(255,255,255,0.2); border-radius: 15px; overflow: hidden; box-shadow: inset 0 2px 5px rgba(0,0,0,0.2);\">
                    <div style=\"width: ";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progression"]) || array_key_exists("progression", $context) ? $context["progression"] : (function () { throw new RuntimeError('Variable "progression" does not exist.', 143, $this->source); })()), "html", null, true);
            yield "%; height: 100%; background: linear-gradient(90deg, #10b981, #059669); border-radius: 15px; transition: width 0.5s; box-shadow: 0 0 15px rgba(16,185,129,0.5);\"></div>
                </div>
                
                <div style=\"display: flex; justify-content: space-between; margin-top: 15px; color: rgba(255,255,255,0.8);\">
                    <span>Niveau actuel: <strong>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauObtenu"]) || array_key_exists("niveauObtenu", $context) ? $context["niveauObtenu"] : (function () { throw new RuntimeError('Variable "niveauObtenu" does not exist.', 147, $this->source); })()), "html", null, true);
            yield "</strong></span>
                    <span>
                        ";
            // line 149
            if (((isset($context["totalCoursNiveau"]) || array_key_exists("totalCoursNiveau", $context) ? $context["totalCoursNiveau"] : (function () { throw new RuntimeError('Variable "totalCoursNiveau" does not exist.', 149, $this->source); })()) > 0)) {
                // line 150
                yield "                            Plus que <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["totalCoursNiveau"]) || array_key_exists("totalCoursNiveau", $context) ? $context["totalCoursNiveau"] : (function () { throw new RuntimeError('Variable "totalCoursNiveau" does not exist.', 150, $this->source); })()) - (isset($context["coursCompletes"]) || array_key_exists("coursCompletes", $context) ? $context["coursCompletes"] : (function () { throw new RuntimeError('Variable "coursCompletes" does not exist.', 150, $this->source); })())), "html", null, true);
                yield "</strong> cours pour passer au niveau suivant !
                        ";
            }
            // line 152
            yield "                    </span>
                </div>
            </div>
            ";
        }
        // line 156
        yield "
            ";
        // line 158
        yield "            ";
        // line 159
        yield "            
            ";
        // line 160
        $context["niveaux"] = ["A1", "A2", "B1", "B2", "C1", "C2"];
        // line 161
        yield "            ";
        $context["couleurs"] = ["#22c55e", "#3b82f6", "#8b5cf6", "#f59e0b", "#ef4444", "#7c3aed"];
        // line 162
        yield "            ";
        $context["ordreNiveaux"] = [1, 2, 3, 4, 5, 6];
        // line 163
        yield "            
            ";
        // line 165
        yield "            ";
        $context["niveauActuelOrdre"] = (((($tmp = (isset($context["niveauUtilisateur"]) || array_key_exists("niveauUtilisateur", $context) ? $context["niveauUtilisateur"] : (function () { throw new RuntimeError('Variable "niveauUtilisateur" does not exist.', 165, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauUtilisateur"]) || array_key_exists("niveauUtilisateur", $context) ? $context["niveauUtilisateur"] : (function () { throw new RuntimeError('Variable "niveauUtilisateur" does not exist.', 165, $this->source); })()), "ordre", [], "any", false, false, false, 165)) : (1));
        // line 166
        yield "            
            ";
        // line 168
        yield "            ";
        $context["dernierCoursTermine"] = (((($tmp = (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 168, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 168, $this->source); })()), "dernierNumeroCours", [], "any", false, false, false, 168)) : (0));
        // line 169
        yield "            
            ";
        // line 171
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["niveauIndex"]) {
            // line 172
            yield "                ";
            $context["niveauNom"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 172, $this->source); })()), $context["niveauIndex"], [], "array", false, false, false, 172);
            // line 173
            yield "                ";
            $context["niveauOrdre"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ordreNiveaux"]) || array_key_exists("ordreNiveaux", $context) ? $context["ordreNiveaux"] : (function () { throw new RuntimeError('Variable "ordreNiveaux" does not exist.', 173, $this->source); })()), $context["niveauIndex"], [], "array", false, false, false, 173);
            // line 174
            yield "                ";
            $context["niveauCouleur"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["couleurs"]) || array_key_exists("couleurs", $context) ? $context["couleurs"] : (function () { throw new RuntimeError('Variable "couleurs" does not exist.', 174, $this->source); })()), $context["niveauIndex"], [], "array", false, false, false, 174);
            // line 175
            yield "                
                ";
            // line 177
            yield "                ";
            $context["niveauEntity"] = null;
            // line 178
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allCours"]) || array_key_exists("allCours", $context) ? $context["allCours"] : (function () { throw new RuntimeError('Variable "allCours" does not exist.', 178, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                // line 179
                yield "                    ";
                if ((((null === (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 179, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 179), "difficulte", [], "any", false, false, false, 179) == (isset($context["niveauNom"]) || array_key_exists("niveauNom", $context) ? $context["niveauNom"] : (function () { throw new RuntimeError('Variable "niveauNom" does not exist.', 179, $this->source); })()))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 179), "IdLangue", [], "any", false, false, false, 179), "id", [], "any", false, false, false, 179) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 179, $this->source); })()), "id", [], "any", false, false, false, 179)))) {
                    // line 180
                    yield "                        ";
                    $context["niveauEntity"] = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 180);
                    // line 181
                    yield "                    ";
                }
                // line 182
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            yield "                
                ";
            // line 185
            yield "                ";
            if ((($tmp = (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 185, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 186
                yield "                    
                    <!-- TITRE DU NIVEAU -->
                    <div style=\"position: relative; margin: ";
                // line 188
                if (($context["niveauIndex"] == 0)) {
                    yield "0";
                } else {
                    yield "100";
                }
                yield "px 0 40px; text-align: center; z-index: 3;\">
                        <div style=\"font-size: 2.8rem; font-weight: 900; color: white; margin-bottom: 30px; text-shadow: 0 6px 16px rgba(0,0,0,0.5);\">
                            Niveau ";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauNom"]) || array_key_exists("niveauNom", $context) ? $context["niveauNom"] : (function () { throw new RuntimeError('Variable "niveauNom" does not exist.', 190, $this->source); })()), "html", null, true);
                yield "
                        </div>
                    </div>
                    
                    ";
                // line 195
                yield "                    ";
                $context["coursDuNiveau"] = [];
                // line 196
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allCours"]) || array_key_exists("allCours", $context) ? $context["allCours"] : (function () { throw new RuntimeError('Variable "allCours" does not exist.', 196, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                    // line 197
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 197), "id", [], "any", false, false, false, 197) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 197, $this->source); })()), "id", [], "any", false, false, false, 197))) {
                        // line 198
                        yield "                            ";
                        $context["coursDuNiveau"] = Twig\Extension\CoreExtension::merge((isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 198, $this->source); })()), [$context["cours"]]);
                        // line 199
                        yield "                        ";
                    }
                    // line 200
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 201
                yield "                    
                    ";
                // line 203
                yield "                    ";
                $context["coursDuNiveau"] = Twig\Extension\CoreExtension::sort($this->env, (isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 203, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 203, $this->source); })()), "numero", [], "any", false, false, false, 203) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 203, $this->source); })()), "numero", [], "any", false, false, false, 203)); });
                // line 204
                yield "                    
                    ";
                // line 206
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 206, $this->source); })()), 0, 3));
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
                    // line 207
                    yield "                        ";
                    $context["coursNumero"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 207);
                    // line 208
                    yield "                        ";
                    $context["coursReelNumero"] = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "numero", [], "any", false, false, false, 208);
                    // line 209
                    yield "                        
                        ";
                    // line 211
                    yield "                        ";
                    $context["isUnlocked"] = false;
                    // line 212
                    yield "                        
                        ";
                    // line 214
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 214, $this->source); })()) < (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 214, $this->source); })()))) {
                        // line 215
                        yield "                            ";
                        $context["isUnlocked"] = true;
                        // line 216
                        yield "                        ";
                    }
                    // line 217
                    yield "                        
                        ";
                    // line 219
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 219, $this->source); })()) == (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 219, $this->source); })()))) {
                        // line 220
                        yield "                            ";
                        // line 221
                        yield "                            ";
                        if (((isset($context["coursNumero"]) || array_key_exists("coursNumero", $context) ? $context["coursNumero"] : (function () { throw new RuntimeError('Variable "coursNumero" does not exist.', 221, $this->source); })()) == 1)) {
                            // line 222
                            yield "                                ";
                            $context["isUnlocked"] = true;
                            // line 223
                            yield "                            ";
                        } else {
                            // line 224
                            yield "                                ";
                            // line 225
                            yield "                                ";
                            $context["coursPrecedentTermine"] = false;
                            // line 226
                            yield "                                ";
                            if (((isset($context["dernierCoursTermine"]) || array_key_exists("dernierCoursTermine", $context) ? $context["dernierCoursTermine"] : (function () { throw new RuntimeError('Variable "dernierCoursTermine" does not exist.', 226, $this->source); })()) >= ((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 226, $this->source); })()) - 1))) {
                                // line 227
                                yield "                                    ";
                                $context["coursPrecedentTermine"] = true;
                                // line 228
                                yield "                                ";
                            }
                            // line 229
                            yield "                                ";
                            $context["isUnlocked"] = (isset($context["coursPrecedentTermine"]) || array_key_exists("coursPrecedentTermine", $context) ? $context["coursPrecedentTermine"] : (function () { throw new RuntimeError('Variable "coursPrecedentTermine" does not exist.', 229, $this->source); })());
                            // line 230
                            yield "                            ";
                        }
                        // line 231
                        yield "                        ";
                    }
                    // line 232
                    yield "                        
                        ";
                    // line 234
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 234, $this->source); })()) > (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 234, $this->source); })()))) {
                        // line 235
                        yield "                            ";
                        $context["isUnlocked"] = false;
                        // line 236
                        yield "                        ";
                    }
                    // line 237
                    yield "                        
                        ";
                    // line 239
                    yield "                        ";
                    $context["isCompleted"] = false;
                    // line 240
                    yield "                        ";
                    if ((((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 240, $this->source); })()) == (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 240, $this->source); })())) && ((isset($context["dernierCoursTermine"]) || array_key_exists("dernierCoursTermine", $context) ? $context["dernierCoursTermine"] : (function () { throw new RuntimeError('Variable "dernierCoursTermine" does not exist.', 240, $this->source); })()) >= (isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 240, $this->source); })())))) {
                        // line 241
                        yield "                            ";
                        $context["isCompleted"] = true;
                        // line 242
                        yield "                        ";
                    }
                    // line 243
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 243, $this->source); })()) < (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 243, $this->source); })()))) {
                        // line 244
                        yield "                            ";
                        $context["isCompleted"] = true;
                        // line 245
                        yield "                        ";
                    }
                    // line 246
                    yield "                        
                        <div style=\"position: relative; margin: 60px 0; text-align: center; z-index: 3; transform: translateX(";
                    // line 247
                    yield (((((isset($context["coursNumero"]) || array_key_exists("coursNumero", $context) ? $context["coursNumero"] : (function () { throw new RuntimeError('Variable "coursNumero" does not exist.', 247, $this->source); })()) % 2) == 0)) ? ("120px") : ("-120px"));
                    yield ");\">
                            ";
                    // line 248
                    if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 248, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 249
                        yield "                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 249)]), "html", null, true);
                        yield "\" style=\"text-decoration: none;\">
                            ";
                    }
                    // line 251
                    yield "                            
                            <div style=\"
                                width: 160px;
                                height: 160px;
                                margin: 0 auto;
                                background: ";
                    // line 256
                    if ((($tmp = (isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 256, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "#10b981";
                    } elseif ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 256, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauCouleur"]) || array_key_exists("niveauCouleur", $context) ? $context["niveauCouleur"] : (function () { throw new RuntimeError('Variable "niveauCouleur" does not exist.', 256, $this->source); })()), "html", null, true);
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
                    // line 265
                    yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 265, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.7)") : ("rgba(255,255,255,0.25)"));
                    yield ";
                                opacity: ";
                    // line 266
                    yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 266, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0.6"));
                    yield ";
                                cursor: ";
                    // line 267
                    yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 267, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pointer") : ("default"));
                    yield ";
                            \" 
                            ";
                    // line 269
                    if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 269, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 270
                        yield "                                onmouseover=\"this.style.transform='scale(1.15) rotate(";
                        yield (((((isset($context["coursNumero"]) || array_key_exists("coursNumero", $context) ? $context["coursNumero"] : (function () { throw new RuntimeError('Variable "coursNumero" does not exist.', 270, $this->source); })()) % 2) == 0)) ? ("10") : ("-10"));
                        yield "deg)'; this.style.boxShadow='0 40px 90px rgba(0,0,0,0.6)';\" 
                                onmouseout=\"this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 16px 60px rgba(0,0,0,0.45)';\"
                            ";
                    }
                    // line 272
                    yield ">
                                
                                <span style=\"font-size: 4.5rem; font-weight: 900; color: white; text-shadow: 5px 5px 14px rgba(0,0,0,0.6);\">
                                    ";
                    // line 275
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 275, $this->source); })()), "html", null, true);
                    yield "
                                </span>
                                
                                ";
                    // line 278
                    if ((($tmp = (isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 278, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 279
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #10b981; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(16,185,129,0.6); border: 4px solid white;\">
                                        ✓
                                    </div>
                                ";
                    } elseif ((($tmp =  !                    // line 282
(isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 282, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 283
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #ef4444; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(239,68,68,0.6); border: 4px solid white;\">
                                        🔒
                                    </div>
                                ";
                    }
                    // line 287
                    yield "                            </div>
                            
                            <p style=\"margin-top: 20px; font-size: 1.4rem; font-weight: 700; color: white; text-shadow: 0 3px 10px rgba(0,0,0,0.5);\">
                                Unité ";
                    // line 290
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 290, $this->source); })()), "html", null, true);
                    yield "
                                ";
                    // line 291
                    if ((($tmp = (isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 291, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 292
                        yield "                                    <span style=\"display: block; font-size: 1rem; color: #a5f3fc; margin-top: 5px;\">✓ Terminé</span>
                                ";
                    }
                    // line 294
                    yield "                            </p>
                            
                            ";
                    // line 296
                    if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 296, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 297
                        yield "                                </a>
                            ";
                    } else {
                        // line 299
                        yield "                                <p style=\"margin-top: 10px; font-size: 1rem; color: rgba(255,255,255,0.7); font-style: italic;\">
                                    ";
                        // line 300
                        if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 300, $this->source); })()) > (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 300, $this->source); })()))) {
                            // line 301
                            yield "                                        Niveau ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 301, $this->source); })()), "html", null, true);
                            yield " requis
                                    ";
                        } else {
                            // line 303
                            yield "                                        Termine l'unité ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 303, $this->source); })()) - 1), "html", null, true);
                            yield " d'abord
                                    ";
                        }
                        // line 305
                        yield "                                </p>
                            ";
                    }
                    // line 307
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
                // line 309
                yield "                ";
            }
            // line 310
            yield "                
                ";
            // line 312
            yield "                ";
            if ((($tmp = (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 312, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 313
                yield "                    ";
                // line 314
                yield "                    ";
                $context["testFinNiveau"] = null;
                // line 315
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["testsLangue"]) || array_key_exists("testsLangue", $context) ? $context["testsLangue"] : (function () { throw new RuntimeError('Variable "testsLangue" does not exist.', 315, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                    // line 316
                    yield "                        ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 316) == "Test de fin de niveau") && CoreExtension::getAttribute($this->env, $this->source, $context["test"], "niveau", [], "any", false, false, false, 316)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "niveau", [], "any", false, false, false, 316), "id", [], "any", false, false, false, 316) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 316, $this->source); })()), "id", [], "any", false, false, false, 316)))) {
                        // line 317
                        yield "                            ";
                        $context["testFinNiveau"] = $context["test"];
                        // line 318
                        yield "                        ";
                    }
                    // line 319
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 320
                yield "
                    ";
                // line 321
                if ((($tmp = (isset($context["testFinNiveau"]) || array_key_exists("testFinNiveau", $context) ? $context["testFinNiveau"] : (function () { throw new RuntimeError('Variable "testFinNiveau" does not exist.', 321, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 322
                    yield "                        ";
                    // line 323
                    yield "                        ";
                    $context["tousCoursTermines"] = true;
                    // line 324
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 324, $this->source); })()), 0, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                        // line 325
                        yield "                            ";
                        $context["coursReelNumero"] = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "numero", [], "any", false, false, false, 325);
                        // line 326
                        yield "                            ";
                        if ((((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 326, $this->source); })()) == (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 326, $this->source); })())) && ((isset($context["dernierCoursTermine"]) || array_key_exists("dernierCoursTermine", $context) ? $context["dernierCoursTermine"] : (function () { throw new RuntimeError('Variable "dernierCoursTermine" does not exist.', 326, $this->source); })()) < (isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 326, $this->source); })())))) {
                            // line 327
                            yield "                                ";
                            $context["tousCoursTermines"] = false;
                            // line 328
                            yield "                            ";
                        }
                        // line 329
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 330
                    yield "
                        ";
                    // line 332
                    yield "                        ";
                    $context["testDejaPassé"] = false;
                    // line 333
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["testFinNiveau"]) || array_key_exists("testFinNiveau", $context) ? $context["testFinNiveau"] : (function () { throw new RuntimeError('Variable "testFinNiveau" does not exist.', 333, $this->source); })()), "passages", [], "any", false, false, false, 333));
                    foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                        // line 334
                        yield "                            ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "user", [], "any", false, false, false, 334), "id", [], "any", false, false, false, 334) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 334, $this->source); })()), "id", [], "any", false, false, false, 334)) && (CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 334) == "termine"))) {
                            // line 335
                            yield "                                ";
                            $context["testDejaPassé"] = true;
                            // line 336
                            yield "                            ";
                        }
                        // line 337
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['passage'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 338
                    yield "
                        ";
                    // line 340
                    yield "                        <div style=\"position: relative; margin: 100px 0; text-align: center; z-index: 3;\">
                            ";
                    // line 341
                    if (((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 341, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 341, $this->source); })()))) {
                        // line 342
                        yield "                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["testFinNiveau"]) || array_key_exists("testFinNiveau", $context) ? $context["testFinNiveau"] : (function () { throw new RuntimeError('Variable "testFinNiveau" does not exist.', 342, $this->source); })()), "id", [], "any", false, false, false, 342)]), "html", null, true);
                        yield "\" style=\"text-decoration: none;\">
                            ";
                    }
                    // line 344
                    yield "                            
                            <div style=\"
                                width: 200px;
                                height: 200px;
                                margin: 0 auto;
                                background: ";
                    // line 349
                    if ((($tmp = (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 349, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "linear-gradient(135deg, #10b981, #059669)";
                    } elseif ((($tmp = (isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 349, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                    // line 358
                    yield ((((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 358, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 358, $this->source); })()))) ? ("rgba(255,255,255,0.8)") : ("rgba(255,255,255,0.25)"));
                    yield ";
                                opacity: ";
                    // line 359
                    yield ((((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 359, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 359, $this->source); })()))) ? ("1") : ("0.5"));
                    yield ";
                                cursor: ";
                    // line 360
                    yield ((((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 360, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 360, $this->source); })()))) ? ("pointer") : ("default"));
                    yield ";
                            \" 
                            ";
                    // line 362
                    if (((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 362, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 362, $this->source); })()))) {
                        // line 363
                        yield "                                onmouseover=\"this.style.transform='scale(1.15) rotate(5deg)'; this.style.boxShadow='0 40px 90px rgba(0,0,0,0.7)';\" 
                                onmouseout=\"this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 20px 70px rgba(0,0,0,0.5)';\"
                            ";
                    }
                    // line 365
                    yield ">
                                
                                <span style=\"font-size: 6rem; line-height: 1;\">
                                    ";
                    // line 368
                    if ((($tmp = (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 368, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "✅";
                    } else {
                        yield "📝";
                    }
                    // line 369
                    yield "                                </span>
                                <span style=\"font-size: 1.3rem; font-weight: 900; color: white; margin-top: 10px; text-align: center; padding: 0 20px;\">
                                    TEST<br>FIN NIVEAU
                                </span>

                                ";
                    // line 374
                    if ((($tmp = (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 374, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 375
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #10b981; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(16,185,129,0.6); border: 4px solid white;\">
                                        ✓
                                    </div>
                                ";
                    } elseif ((($tmp =  !                    // line 378
(isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 378, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 379
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #ef4444; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(239,68,68,0.6); border: 4px solid white;\">
                                        🔒
                                    </div>
                                ";
                    }
                    // line 383
                    yield "                            </div>

                            <p style=\"margin-top: 20px; font-size: 1.4rem; font-weight: 700; color: white; text-shadow: 0 3px 10px rgba(0,0,0,0.5);\">
                                ";
                    // line 386
                    if ((($tmp = (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 386, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 387
                        yield "                                    ✓ Validé
                                ";
                    } elseif ((($tmp =                     // line 388
(isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 388, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 389
                        yield "                                    Débloqué !
                                ";
                    } else {
                        // line 391
                        yield "                                    Termine tous les cours d'abord
                                ";
                    }
                    // line 393
                    yield "                            </p>

                            ";
                    // line 395
                    if (((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 395, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 395, $this->source); })()))) {
                        // line 396
                        yield "                                </a>
                            ";
                    }
                    // line 398
                    yield "                        </div>
                    ";
                }
                // line 400
                yield "                ";
            }
            // line 401
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveauIndex'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        yield "
            
            
            ";
        // line 406
        yield "            <div style=\"position: fixed; right: 30px; top: 50%; transform: translateY(-50%); z-index: 10; display: flex; flex-direction: column; gap: 30px;\">

                ";
        // line 408
        $context["testsHorsParcours"] = [];
        // line 409
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["testsLangue"]) || array_key_exists("testsLangue", $context) ? $context["testsLangue"] : (function () { throw new RuntimeError('Variable "testsLangue" does not exist.', 409, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            yield "  
                    ";
            // line 410
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 410), ["Test de niveau", "Test de fin de niveau"])) {
                // line 411
                yield "                        ";
                $context["testsHorsParcours"] = Twig\Extension\CoreExtension::merge((isset($context["testsHorsParcours"]) || array_key_exists("testsHorsParcours", $context) ? $context["testsHorsParcours"] : (function () { throw new RuntimeError('Variable "testsHorsParcours" does not exist.', 411, $this->source); })()), [$context["test"]]);
                // line 412
                yield "                    ";
            }
            // line 413
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        yield "
                ";
        // line 415
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["testsHorsParcours"]) || array_key_exists("testsHorsParcours", $context) ? $context["testsHorsParcours"] : (function () { throw new RuntimeError('Variable "testsHorsParcours" does not exist.', 415, $this->source); })())) > 0)) {
            // line 416
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["testsHorsParcours"]) || array_key_exists("testsHorsParcours", $context) ? $context["testsHorsParcours"] : (function () { throw new RuntimeError('Variable "testsHorsParcours" does not exist.', 416, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                // line 417
                yield "                        ";
                // line 418
                yield "                        ";
                $context["testPassé"] = false;
                // line 419
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 419, $this->source); })()), "user", [], "any", false, false, false, 419)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 420
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "passages", [], "any", false, false, false, 420));
                    foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                        // line 421
                        yield "                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "user", [], "any", false, false, false, 421), "id", [], "any", false, false, false, 421) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 421, $this->source); })()), "user", [], "any", false, false, false, 421), "id", [], "any", false, false, false, 421)) && (CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 421) == "termine"))) {
                            // line 422
                            yield "                                    ";
                            $context["testPassé"] = true;
                            // line 423
                            yield "                                ";
                        }
                        // line 424
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['passage'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 425
                    yield "                        ";
                }
                // line 426
                yield "
                        <a href=\"";
                // line 427
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 427)]), "html", null, true);
                yield "\" 
                        style=\"text-decoration: none; display: block;\"
                        title=\"";
                // line 429
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "titre", [], "any", false, false, false, 429), "html", null, true);
                yield "\">
                            <div style=\"
                                width: 120px;
                                height: 120px;
                                background: ";
                // line 433
                if ((($tmp = (isset($context["testPassé"]) || array_key_exists("testPassé", $context) ? $context["testPassé"] : (function () { throw new RuntimeError('Variable "testPassé" does not exist.', 433, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                // line 449
                if ((($tmp = (isset($context["testPassé"]) || array_key_exists("testPassé", $context) ? $context["testPassé"] : (function () { throw new RuntimeError('Variable "testPassé" does not exist.', 449, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "✅";
                } else {
                    yield "📝";
                }
                // line 450
                yield "                                </span>
                                <span style=\"font-size: 0.9rem; font-weight: 800; color: white; margin-top: 5px; text-align: center; line-height: 1.1;\">
                                    TEST
                                </span>

                                ";
                // line 455
                if ((($tmp = (isset($context["testPassé"]) || array_key_exists("testPassé", $context) ? $context["testPassé"] : (function () { throw new RuntimeError('Variable "testPassé" does not exist.', 455, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 456
                    yield "                                    <div style=\"position: absolute; top: -8px; right: -8px; background: #10b981; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; box-shadow: 0 8px 20px rgba(16,185,129,0.6); border: 3px solid white;\">
                                        ✓
                                    </div>
                                ";
                }
                // line 460
                yield "                            </div>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 463
            yield "                ";
        } else {
            // line 464
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
        // line 478
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
        return array (  1110 => 478,  1094 => 464,  1091 => 463,  1083 => 460,  1077 => 456,  1075 => 455,  1068 => 450,  1062 => 449,  1039 => 433,  1032 => 429,  1027 => 427,  1024 => 426,  1021 => 425,  1015 => 424,  1012 => 423,  1009 => 422,  1006 => 421,  1001 => 420,  998 => 419,  995 => 418,  993 => 417,  988 => 416,  986 => 415,  983 => 414,  977 => 413,  974 => 412,  971 => 411,  969 => 410,  962 => 409,  960 => 408,  956 => 406,  951 => 402,  945 => 401,  942 => 400,  938 => 398,  934 => 396,  932 => 395,  928 => 393,  924 => 391,  920 => 389,  918 => 388,  915 => 387,  913 => 386,  908 => 383,  902 => 379,  900 => 378,  895 => 375,  893 => 374,  886 => 369,  880 => 368,  875 => 365,  870 => 363,  868 => 362,  863 => 360,  859 => 359,  855 => 358,  837 => 349,  830 => 344,  824 => 342,  822 => 341,  819 => 340,  816 => 338,  810 => 337,  807 => 336,  804 => 335,  801 => 334,  796 => 333,  793 => 332,  790 => 330,  784 => 329,  781 => 328,  778 => 327,  775 => 326,  772 => 325,  767 => 324,  764 => 323,  762 => 322,  760 => 321,  757 => 320,  751 => 319,  748 => 318,  745 => 317,  742 => 316,  737 => 315,  734 => 314,  732 => 313,  729 => 312,  726 => 310,  723 => 309,  708 => 307,  704 => 305,  698 => 303,  692 => 301,  690 => 300,  687 => 299,  683 => 297,  681 => 296,  677 => 294,  673 => 292,  671 => 291,  667 => 290,  662 => 287,  656 => 283,  654 => 282,  649 => 279,  647 => 278,  641 => 275,  636 => 272,  629 => 270,  627 => 269,  622 => 267,  618 => 266,  614 => 265,  596 => 256,  589 => 251,  583 => 249,  581 => 248,  577 => 247,  574 => 246,  571 => 245,  568 => 244,  565 => 243,  562 => 242,  559 => 241,  556 => 240,  553 => 239,  550 => 237,  547 => 236,  544 => 235,  541 => 234,  538 => 232,  535 => 231,  532 => 230,  529 => 229,  526 => 228,  523 => 227,  520 => 226,  517 => 225,  515 => 224,  512 => 223,  509 => 222,  506 => 221,  504 => 220,  501 => 219,  498 => 217,  495 => 216,  492 => 215,  489 => 214,  486 => 212,  483 => 211,  480 => 209,  477 => 208,  474 => 207,  456 => 206,  453 => 204,  450 => 203,  447 => 201,  441 => 200,  438 => 199,  435 => 198,  432 => 197,  427 => 196,  424 => 195,  417 => 190,  408 => 188,  404 => 186,  401 => 185,  398 => 183,  392 => 182,  389 => 181,  386 => 180,  383 => 179,  378 => 178,  375 => 177,  372 => 175,  369 => 174,  366 => 173,  363 => 172,  358 => 171,  355 => 169,  352 => 168,  349 => 166,  346 => 165,  343 => 163,  340 => 162,  337 => 161,  335 => 160,  332 => 159,  330 => 158,  327 => 156,  321 => 152,  315 => 150,  313 => 149,  308 => 147,  301 => 143,  294 => 139,  289 => 136,  287 => 135,  277 => 128,  265 => 119,  253 => 110,  240 => 99,  227 => 88,  224 => 87,  216 => 84,  199 => 71,  189 => 64,  184 => 62,  180 => 61,  170 => 54,  167 => 53,  164 => 52,  162 => 51,  148 => 40,  145 => 39,  138 => 35,  133 => 32,  131 => 31,  122 => 25,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
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

            <!-- ============ STATISTIQUES DE PROGRESSION ============ -->
            <div style=\"margin: 30px auto 50px; max-width: 900px;\">
                <div style=\"display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;\">
                    
                    <!-- Carte 1 : Cours complétés -->
                    <div style=\"background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 20px; padding: 25px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s;\" 
                         onmouseover=\"this.style.transform='translateY(-5px)'; this.style.background='rgba(255,255,255,0.25)';\"
                         onmouseout=\"this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.15)';\">
                        <div style=\"font-size: 3rem; margin-bottom: 10px;\">📊</div>
                        <div style=\"font-size: 2.5rem; font-weight: 800; color: white;\">{{ coursCompletes }}</div>
                        <div style=\"color: rgba(255,255,255,0.8); font-size: 1.1rem;\">Cours complétés</div>
                    </div>
                    
                    <!-- Carte 2 : Temps d'étude -->
                    <div style=\"background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 20px; padding: 25px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s;\"
                         onmouseover=\"this.style.transform='translateY(-5px)'; this.style.background='rgba(255,255,255,0.25)';\"
                         onmouseout=\"this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.15)';\">
                        <div style=\"font-size: 3rem; margin-bottom: 10px;\">⏱️</div>
                        <div style=\"font-size: 2.5rem; font-weight: 800; color: white;\">{{ tempsTotal }} min</div>
                        <div style=\"color: rgba(255,255,255,0.8); font-size: 1.1rem;\">Temps d'étude</div>
                    </div>
                    
                    <!-- Carte 3 : Progression (remplace streak) -->
                    <div style=\"background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 20px; padding: 25px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s;\"
                         onmouseover=\"this.style.transform='translateY(-5px)'; this.style.background='rgba(255,255,255,0.25)';\"
                         onmouseout=\"this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.15)';\">
                        <div style=\"font-size: 3rem; margin-bottom: 10px;\">📈</div>
                        <div style=\"font-size: 2.5rem; font-weight: 800; color: white;\">{{ progression|round }}%</div>
                        <div style=\"color: rgba(255,255,255,0.8); font-size: 1.1rem;\">Progression</div>
                    </div>
                </div>
            </div>

            <!-- ============ BARRE DE PROGRESSION ============ -->
            {% if niveauUtilisateur %}
            <div style=\"margin: 40px auto; max-width: 700px;\">
                <div style=\"display: flex; justify-content: space-between; color: white; margin-bottom: 15px;\">
                    <span style=\"font-size: 1.2rem; font-weight: 600;\">Progression vers le niveau suivant</span>
                    <span style=\"font-size: 1.5rem; font-weight: 800; background: rgba(255,255,255,0.2); padding: 5px 15px; border-radius: 50px;\">{{ progression|round }}%</span>
                </div>
                
                <div style=\"width: 100%; height: 25px; background: rgba(255,255,255,0.2); border-radius: 15px; overflow: hidden; box-shadow: inset 0 2px 5px rgba(0,0,0,0.2);\">
                    <div style=\"width: {{ progression }}%; height: 100%; background: linear-gradient(90deg, #10b981, #059669); border-radius: 15px; transition: width 0.5s; box-shadow: 0 0 15px rgba(16,185,129,0.5);\"></div>
                </div>
                
                <div style=\"display: flex; justify-content: space-between; margin-top: 15px; color: rgba(255,255,255,0.8);\">
                    <span>Niveau actuel: <strong>{{ niveauObtenu }}</strong></span>
                    <span>
                        {% if totalCoursNiveau > 0 %}
                            Plus que <strong>{{ totalCoursNiveau - coursCompletes }}</strong> cours pour passer au niveau suivant !
                        {% endif %}
                    </span>
                </div>
            </div>
            {% endif %}

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
{% endblock %}", "langue/apprentissage.html.twig", "C:\\Users\\MSI\\Desktop\\5idma\\Fluently\\templates\\langue\\apprentissage.html.twig");
    }
}
