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
class __TwigTemplate_063ea1b99083dac4159fd0bf261051f9 extends Template
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

            <!-- ============ STATISTIQUES DE PROGRESSION ============ -->
            <div style=\"margin: 30px auto 50px; max-width: 900px;\">
                <div style=\"display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;\">
                    
                    <!-- Carte 1 : Cours complétés -->
                    <div style=\"background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 20px; padding: 25px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s;\" 
                         onmouseover=\"this.style.transform='translateY(-5px)'; this.style.background='rgba(255,255,255,0.25)';\"
                         onmouseout=\"this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.15)';\">
                        <div style=\"font-size: 3rem; margin-bottom: 10px;\">📊</div>
                        <div style=\"font-size: 2.5rem; font-weight: 800; color: white;\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coursCompletes"]) || array_key_exists("coursCompletes", $context) ? $context["coursCompletes"] : (function () { throw new RuntimeError('Variable "coursCompletes" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "</div>
                        <div style=\"color: rgba(255,255,255,0.8); font-size: 1.1rem;\">Cours complétés</div>
                    </div>
                    
                    <!-- Carte 2 : Temps d'étude -->
                    <div style=\"background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 20px; padding: 25px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s;\"
                         onmouseover=\"this.style.transform='translateY(-5px)'; this.style.background='rgba(255,255,255,0.25)';\"
                         onmouseout=\"this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.15)';\">
                        <div style=\"font-size: 3rem; margin-bottom: 10px;\">⏱️</div>
                        <div style=\"font-size: 2.5rem; font-weight: 800; color: white;\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tempsTotal"]) || array_key_exists("tempsTotal", $context) ? $context["tempsTotal"] : (function () { throw new RuntimeError('Variable "tempsTotal" does not exist.', 114, $this->source); })()), "html", null, true);
        yield " min</div>
                        <div style=\"color: rgba(255,255,255,0.8); font-size: 1.1rem;\">Temps d'étude</div>
                    </div>
                    
                    <!-- Carte 3 : Progression (remplace streak) -->
                    <div style=\"background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 20px; padding: 25px; text-align: center; border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s;\"
                         onmouseover=\"this.style.transform='translateY(-5px)'; this.style.background='rgba(255,255,255,0.25)';\"
                         onmouseout=\"this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.15)';\">
                        <div style=\"font-size: 3rem; margin-bottom: 10px;\">📈</div>
                        <div style=\"font-size: 2.5rem; font-weight: 800; color: white;\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["progression"]) || array_key_exists("progression", $context) ? $context["progression"] : (function () { throw new RuntimeError('Variable "progression" does not exist.', 123, $this->source); })())), "html", null, true);
        yield "%</div>
                        <div style=\"color: rgba(255,255,255,0.8); font-size: 1.1rem;\">Progression</div>
                    </div>
                </div>
            </div>

            <!-- ============ BARRE DE PROGRESSION ============ -->
            ";
        // line 130
        if ((($tmp = (isset($context["niveauUtilisateur"]) || array_key_exists("niveauUtilisateur", $context) ? $context["niveauUtilisateur"] : (function () { throw new RuntimeError('Variable "niveauUtilisateur" does not exist.', 130, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "            <div style=\"margin: 40px auto; max-width: 700px;\">
                <div style=\"display: flex; justify-content: space-between; color: white; margin-bottom: 15px;\">
                    <span style=\"font-size: 1.2rem; font-weight: 600;\">Progression vers le niveau suivant</span>
                    <span style=\"font-size: 1.5rem; font-weight: 800; background: rgba(255,255,255,0.2); padding: 5px 15px; border-radius: 50px;\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["progression"]) || array_key_exists("progression", $context) ? $context["progression"] : (function () { throw new RuntimeError('Variable "progression" does not exist.', 134, $this->source); })())), "html", null, true);
            yield "%</span>
                </div>
                
                <div style=\"width: 100%; height: 25px; background: rgba(255,255,255,0.2); border-radius: 15px; overflow: hidden; box-shadow: inset 0 2px 5px rgba(0,0,0,0.2);\">
                    <div style=\"width: ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progression"]) || array_key_exists("progression", $context) ? $context["progression"] : (function () { throw new RuntimeError('Variable "progression" does not exist.', 138, $this->source); })()), "html", null, true);
            yield "%; height: 100%; background: linear-gradient(90deg, #10b981, #059669); border-radius: 15px; transition: width 0.5s; box-shadow: 0 0 15px rgba(16,185,129,0.5);\"></div>
                </div>
                
                <div style=\"display: flex; justify-content: space-between; margin-top: 15px; color: rgba(255,255,255,0.8);\">
                    <span>Niveau actuel: <strong>";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauObtenu"]) || array_key_exists("niveauObtenu", $context) ? $context["niveauObtenu"] : (function () { throw new RuntimeError('Variable "niveauObtenu" does not exist.', 142, $this->source); })()), "html", null, true);
            yield "</strong></span>
                    <span>
                        ";
            // line 144
            if (((isset($context["totalCoursNiveau"]) || array_key_exists("totalCoursNiveau", $context) ? $context["totalCoursNiveau"] : (function () { throw new RuntimeError('Variable "totalCoursNiveau" does not exist.', 144, $this->source); })()) > 0)) {
                // line 145
                yield "                            Plus que <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["totalCoursNiveau"]) || array_key_exists("totalCoursNiveau", $context) ? $context["totalCoursNiveau"] : (function () { throw new RuntimeError('Variable "totalCoursNiveau" does not exist.', 145, $this->source); })()) - (isset($context["coursCompletes"]) || array_key_exists("coursCompletes", $context) ? $context["coursCompletes"] : (function () { throw new RuntimeError('Variable "coursCompletes" does not exist.', 145, $this->source); })())), "html", null, true);
                yield "</strong> cours pour passer au niveau suivant !
                        ";
            }
            // line 147
            yield "                    </span>
                </div>
            </div>
            ";
        }
        // line 151
        yield "
            ";
        // line 153
        yield "            ";
        // line 154
        yield "            
            ";
        // line 155
        $context["niveaux"] = ["A1", "A2", "B1", "B2", "C1", "C2"];
        // line 156
        yield "            ";
        $context["couleurs"] = ["#22c55e", "#3b82f6", "#8b5cf6", "#f59e0b", "#ef4444", "#7c3aed"];
        // line 157
        yield "            ";
        $context["ordreNiveaux"] = [1, 2, 3, 4, 5, 6];
        // line 158
        yield "            
            ";
        // line 160
        yield "            ";
        $context["niveauActuelOrdre"] = (((($tmp = (isset($context["niveauUtilisateur"]) || array_key_exists("niveauUtilisateur", $context) ? $context["niveauUtilisateur"] : (function () { throw new RuntimeError('Variable "niveauUtilisateur" does not exist.', 160, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauUtilisateur"]) || array_key_exists("niveauUtilisateur", $context) ? $context["niveauUtilisateur"] : (function () { throw new RuntimeError('Variable "niveauUtilisateur" does not exist.', 160, $this->source); })()), "ordre", [], "any", false, false, false, 160)) : (1));
        // line 161
        yield "            
            ";
        // line 163
        yield "            ";
        $context["dernierCoursTermine"] = (((($tmp = (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 163, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 163, $this->source); })()), "dernierNumeroCours", [], "any", false, false, false, 163)) : (0));
        // line 164
        yield "            
            ";
        // line 166
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["niveauIndex"]) {
            // line 167
            yield "                ";
            $context["niveauNom"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 167, $this->source); })()), $context["niveauIndex"], [], "array", false, false, false, 167);
            // line 168
            yield "                ";
            $context["niveauOrdre"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ordreNiveaux"]) || array_key_exists("ordreNiveaux", $context) ? $context["ordreNiveaux"] : (function () { throw new RuntimeError('Variable "ordreNiveaux" does not exist.', 168, $this->source); })()), $context["niveauIndex"], [], "array", false, false, false, 168);
            // line 169
            yield "                ";
            $context["niveauCouleur"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["couleurs"]) || array_key_exists("couleurs", $context) ? $context["couleurs"] : (function () { throw new RuntimeError('Variable "couleurs" does not exist.', 169, $this->source); })()), $context["niveauIndex"], [], "array", false, false, false, 169);
            // line 170
            yield "                
                ";
            // line 172
            yield "                ";
            $context["niveauEntity"] = null;
            // line 173
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allCours"]) || array_key_exists("allCours", $context) ? $context["allCours"] : (function () { throw new RuntimeError('Variable "allCours" does not exist.', 173, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                // line 174
                yield "                    ";
                if ((((null === (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 174, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 174), "difficulte", [], "any", false, false, false, 174) == (isset($context["niveauNom"]) || array_key_exists("niveauNom", $context) ? $context["niveauNom"] : (function () { throw new RuntimeError('Variable "niveauNom" does not exist.', 174, $this->source); })()))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 174), "IdLangue", [], "any", false, false, false, 174), "id", [], "any", false, false, false, 174) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 174, $this->source); })()), "id", [], "any", false, false, false, 174)))) {
                    // line 175
                    yield "                        ";
                    $context["niveauEntity"] = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 175);
                    // line 176
                    yield "                    ";
                }
                // line 177
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            yield "                
                ";
            // line 180
            yield "                ";
            if ((($tmp = (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 180, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 181
                yield "                    
                    <!-- TITRE DU NIVEAU -->
                    <div style=\"position: relative; margin: ";
                // line 183
                if (($context["niveauIndex"] == 0)) {
                    yield "0";
                } else {
                    yield "100";
                }
                yield "px 0 40px; text-align: center; z-index: 3;\">
                        <div style=\"font-size: 2.8rem; font-weight: 900; color: white; margin-bottom: 30px; text-shadow: 0 6px 16px rgba(0,0,0,0.5);\">
                            Niveau ";
                // line 185
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauNom"]) || array_key_exists("niveauNom", $context) ? $context["niveauNom"] : (function () { throw new RuntimeError('Variable "niveauNom" does not exist.', 185, $this->source); })()), "html", null, true);
                yield "
                        </div>
                    </div>
                    
                    ";
                // line 190
                yield "                    ";
                $context["coursDuNiveau"] = [];
                // line 191
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allCours"]) || array_key_exists("allCours", $context) ? $context["allCours"] : (function () { throw new RuntimeError('Variable "allCours" does not exist.', 191, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                    // line 192
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "IdNiveau", [], "any", false, false, false, 192), "id", [], "any", false, false, false, 192) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 192, $this->source); })()), "id", [], "any", false, false, false, 192))) {
                        // line 193
                        yield "                            ";
                        $context["coursDuNiveau"] = Twig\Extension\CoreExtension::merge((isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 193, $this->source); })()), [$context["cours"]]);
                        // line 194
                        yield "                        ";
                    }
                    // line 195
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                yield "                    
                    ";
                // line 198
                yield "                    ";
                $context["coursDuNiveau"] = Twig\Extension\CoreExtension::sort($this->env, (isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 198, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 198, $this->source); })()), "numero", [], "any", false, false, false, 198) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 198, $this->source); })()), "numero", [], "any", false, false, false, 198)); });
                // line 199
                yield "                    
                    ";
                // line 201
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 201, $this->source); })()), 0, 3));
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
                    // line 202
                    yield "                        ";
                    $context["coursNumero"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 202);
                    // line 203
                    yield "                        ";
                    $context["coursReelNumero"] = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "numero", [], "any", false, false, false, 203);
                    // line 204
                    yield "                        
                        ";
                    // line 206
                    yield "                        ";
                    $context["isUnlocked"] = false;
                    // line 207
                    yield "                        
                        ";
                    // line 209
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 209, $this->source); })()) < (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 209, $this->source); })()))) {
                        // line 210
                        yield "                            ";
                        $context["isUnlocked"] = true;
                        // line 211
                        yield "                        ";
                    }
                    // line 212
                    yield "                        
                        ";
                    // line 214
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 214, $this->source); })()) == (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 214, $this->source); })()))) {
                        // line 215
                        yield "                            ";
                        // line 216
                        yield "                            ";
                        if (((isset($context["coursNumero"]) || array_key_exists("coursNumero", $context) ? $context["coursNumero"] : (function () { throw new RuntimeError('Variable "coursNumero" does not exist.', 216, $this->source); })()) == 1)) {
                            // line 217
                            yield "                                ";
                            $context["isUnlocked"] = true;
                            // line 218
                            yield "                            ";
                        } else {
                            // line 219
                            yield "                                ";
                            // line 220
                            yield "                                ";
                            $context["coursPrecedentTermine"] = false;
                            // line 221
                            yield "                                ";
                            if (((isset($context["dernierCoursTermine"]) || array_key_exists("dernierCoursTermine", $context) ? $context["dernierCoursTermine"] : (function () { throw new RuntimeError('Variable "dernierCoursTermine" does not exist.', 221, $this->source); })()) >= ((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 221, $this->source); })()) - 1))) {
                                // line 222
                                yield "                                    ";
                                $context["coursPrecedentTermine"] = true;
                                // line 223
                                yield "                                ";
                            }
                            // line 224
                            yield "                                ";
                            $context["isUnlocked"] = (isset($context["coursPrecedentTermine"]) || array_key_exists("coursPrecedentTermine", $context) ? $context["coursPrecedentTermine"] : (function () { throw new RuntimeError('Variable "coursPrecedentTermine" does not exist.', 224, $this->source); })());
                            // line 225
                            yield "                            ";
                        }
                        // line 226
                        yield "                        ";
                    }
                    // line 227
                    yield "                        
                        ";
                    // line 229
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 229, $this->source); })()) > (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 229, $this->source); })()))) {
                        // line 230
                        yield "                            ";
                        $context["isUnlocked"] = false;
                        // line 231
                        yield "                        ";
                    }
                    // line 232
                    yield "                        
                        ";
                    // line 234
                    yield "                        ";
                    $context["isCompleted"] = false;
                    // line 235
                    yield "                        ";
                    if ((((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 235, $this->source); })()) == (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 235, $this->source); })())) && ((isset($context["dernierCoursTermine"]) || array_key_exists("dernierCoursTermine", $context) ? $context["dernierCoursTermine"] : (function () { throw new RuntimeError('Variable "dernierCoursTermine" does not exist.', 235, $this->source); })()) >= (isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 235, $this->source); })())))) {
                        // line 236
                        yield "                            ";
                        $context["isCompleted"] = true;
                        // line 237
                        yield "                        ";
                    }
                    // line 238
                    yield "                        ";
                    if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 238, $this->source); })()) < (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 238, $this->source); })()))) {
                        // line 239
                        yield "                            ";
                        $context["isCompleted"] = true;
                        // line 240
                        yield "                        ";
                    }
                    // line 241
                    yield "                        
                        <div style=\"position: relative; margin: 60px 0; text-align: center; z-index: 3; transform: translateX(";
                    // line 242
                    yield (((((isset($context["coursNumero"]) || array_key_exists("coursNumero", $context) ? $context["coursNumero"] : (function () { throw new RuntimeError('Variable "coursNumero" does not exist.', 242, $this->source); })()) % 2) == 0)) ? ("120px") : ("-120px"));
                    yield ");\">
                            ";
                    // line 243
                    if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 243, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 244
                        yield "                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 244)]), "html", null, true);
                        yield "\" style=\"text-decoration: none;\">
                            ";
                    }
                    // line 246
                    yield "                            
                            <div style=\"
                                width: 160px;
                                height: 160px;
                                margin: 0 auto;
                                background: ";
                    // line 251
                    if ((($tmp = (isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 251, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "#10b981";
                    } elseif ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 251, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauCouleur"]) || array_key_exists("niveauCouleur", $context) ? $context["niveauCouleur"] : (function () { throw new RuntimeError('Variable "niveauCouleur" does not exist.', 251, $this->source); })()), "html", null, true);
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
                    // line 260
                    yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 260, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.7)") : ("rgba(255,255,255,0.25)"));
                    yield ";
                                opacity: ";
                    // line 261
                    yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 261, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0.6"));
                    yield ";
                                cursor: ";
                    // line 262
                    yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 262, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pointer") : ("default"));
                    yield ";
                            \" 
                            ";
                    // line 264
                    if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 264, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 265
                        yield "                                onmouseover=\"this.style.transform='scale(1.15) rotate(";
                        yield (((((isset($context["coursNumero"]) || array_key_exists("coursNumero", $context) ? $context["coursNumero"] : (function () { throw new RuntimeError('Variable "coursNumero" does not exist.', 265, $this->source); })()) % 2) == 0)) ? ("10") : ("-10"));
                        yield "deg)'; this.style.boxShadow='0 40px 90px rgba(0,0,0,0.6)';\" 
                                onmouseout=\"this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 16px 60px rgba(0,0,0,0.45)';\"
                            ";
                    }
                    // line 267
                    yield ">
                                
                                <span style=\"font-size: 4.5rem; font-weight: 900; color: white; text-shadow: 5px 5px 14px rgba(0,0,0,0.6);\">
                                    ";
                    // line 270
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 270, $this->source); })()), "html", null, true);
                    yield "
                                </span>
                                
                                ";
                    // line 273
                    if ((($tmp = (isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 273, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 274
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #10b981; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(16,185,129,0.6); border: 4px solid white;\">
                                        ✓
                                    </div>
                                ";
                    } elseif ((($tmp =  !                    // line 277
(isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 277, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 278
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #ef4444; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(239,68,68,0.6); border: 4px solid white;\">
                                        🔒
                                    </div>
                                ";
                    }
                    // line 282
                    yield "                            </div>
                            
                            <p style=\"margin-top: 20px; font-size: 1.4rem; font-weight: 700; color: white; text-shadow: 0 3px 10px rgba(0,0,0,0.5);\">
                                Unité ";
                    // line 285
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 285, $this->source); })()), "html", null, true);
                    yield "
                                ";
                    // line 286
                    if ((($tmp = (isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 286, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 287
                        yield "                                    <span style=\"display: block; font-size: 1rem; color: #a5f3fc; margin-top: 5px;\">✓ Terminé</span>
                                ";
                    }
                    // line 289
                    yield "                            </p>
                            
                            ";
                    // line 291
                    if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 291, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 292
                        yield "                                </a>
                            ";
                    } else {
                        // line 294
                        yield "                                <p style=\"margin-top: 10px; font-size: 1rem; color: rgba(255,255,255,0.7); font-style: italic;\">
                                    ";
                        // line 295
                        if (((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 295, $this->source); })()) > (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 295, $this->source); })()))) {
                            // line 296
                            yield "                                        Niveau ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 296, $this->source); })()), "html", null, true);
                            yield " requis
                                    ";
                        } else {
                            // line 298
                            yield "                                        Termine l'unité ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 298, $this->source); })()) - 1), "html", null, true);
                            yield " d'abord
                                    ";
                        }
                        // line 300
                        yield "                                </p>
                            ";
                    }
                    // line 302
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
                // line 304
                yield "                ";
            }
            // line 305
            yield "                
                ";
            // line 307
            yield "                ";
            if ((($tmp = (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 307, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 308
                yield "                    ";
                // line 309
                yield "                    ";
                $context["testFinNiveau"] = null;
                // line 310
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["testsLangue"]) || array_key_exists("testsLangue", $context) ? $context["testsLangue"] : (function () { throw new RuntimeError('Variable "testsLangue" does not exist.', 310, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                    // line 311
                    yield "                        ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 311) == "Test de fin de niveau") && CoreExtension::getAttribute($this->env, $this->source, $context["test"], "niveau", [], "any", false, false, false, 311)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["test"], "niveau", [], "any", false, false, false, 311), "id", [], "any", false, false, false, 311) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauEntity"]) || array_key_exists("niveauEntity", $context) ? $context["niveauEntity"] : (function () { throw new RuntimeError('Variable "niveauEntity" does not exist.', 311, $this->source); })()), "id", [], "any", false, false, false, 311)))) {
                        // line 312
                        yield "                            ";
                        $context["testFinNiveau"] = $context["test"];
                        // line 313
                        yield "                        ";
                    }
                    // line 314
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 315
                yield "
                    ";
                // line 316
                if ((($tmp = (isset($context["testFinNiveau"]) || array_key_exists("testFinNiveau", $context) ? $context["testFinNiveau"] : (function () { throw new RuntimeError('Variable "testFinNiveau" does not exist.', 316, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 317
                    yield "                        ";
                    // line 318
                    yield "                        ";
                    $context["tousCoursTermines"] = true;
                    // line 319
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["coursDuNiveau"]) || array_key_exists("coursDuNiveau", $context) ? $context["coursDuNiveau"] : (function () { throw new RuntimeError('Variable "coursDuNiveau" does not exist.', 319, $this->source); })()), 0, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                        // line 320
                        yield "                            ";
                        $context["coursReelNumero"] = CoreExtension::getAttribute($this->env, $this->source, $context["cours"], "numero", [], "any", false, false, false, 320);
                        // line 321
                        yield "                            ";
                        if ((((isset($context["niveauOrdre"]) || array_key_exists("niveauOrdre", $context) ? $context["niveauOrdre"] : (function () { throw new RuntimeError('Variable "niveauOrdre" does not exist.', 321, $this->source); })()) == (isset($context["niveauActuelOrdre"]) || array_key_exists("niveauActuelOrdre", $context) ? $context["niveauActuelOrdre"] : (function () { throw new RuntimeError('Variable "niveauActuelOrdre" does not exist.', 321, $this->source); })())) && ((isset($context["dernierCoursTermine"]) || array_key_exists("dernierCoursTermine", $context) ? $context["dernierCoursTermine"] : (function () { throw new RuntimeError('Variable "dernierCoursTermine" does not exist.', 321, $this->source); })()) < (isset($context["coursReelNumero"]) || array_key_exists("coursReelNumero", $context) ? $context["coursReelNumero"] : (function () { throw new RuntimeError('Variable "coursReelNumero" does not exist.', 321, $this->source); })())))) {
                            // line 322
                            yield "                                ";
                            $context["tousCoursTermines"] = false;
                            // line 323
                            yield "                            ";
                        }
                        // line 324
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['cours'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 325
                    yield "
                        ";
                    // line 327
                    yield "                        ";
                    $context["testDejaPassé"] = false;
                    // line 328
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["testFinNiveau"]) || array_key_exists("testFinNiveau", $context) ? $context["testFinNiveau"] : (function () { throw new RuntimeError('Variable "testFinNiveau" does not exist.', 328, $this->source); })()), "passages", [], "any", false, false, false, 328));
                    foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                        // line 329
                        yield "                            ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "user", [], "any", false, false, false, 329), "id", [], "any", false, false, false, 329) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 329, $this->source); })()), "id", [], "any", false, false, false, 329)) && (CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 329) == "termine"))) {
                            // line 330
                            yield "                                ";
                            $context["testDejaPassé"] = true;
                            // line 331
                            yield "                            ";
                        }
                        // line 332
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['passage'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 333
                    yield "
                        ";
                    // line 335
                    yield "                        <div style=\"position: relative; margin: 100px 0; text-align: center; z-index: 3;\">
                            ";
                    // line 336
                    if (((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 336, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 336, $this->source); })()))) {
                        // line 337
                        yield "                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["testFinNiveau"]) || array_key_exists("testFinNiveau", $context) ? $context["testFinNiveau"] : (function () { throw new RuntimeError('Variable "testFinNiveau" does not exist.', 337, $this->source); })()), "id", [], "any", false, false, false, 337)]), "html", null, true);
                        yield "\" style=\"text-decoration: none;\">
                            ";
                    }
                    // line 339
                    yield "                            
                            <div style=\"
                                width: 200px;
                                height: 200px;
                                margin: 0 auto;
                                background: ";
                    // line 344
                    if ((($tmp = (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 344, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "linear-gradient(135deg, #10b981, #059669)";
                    } elseif ((($tmp = (isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 344, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                    // line 353
                    yield ((((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 353, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 353, $this->source); })()))) ? ("rgba(255,255,255,0.8)") : ("rgba(255,255,255,0.25)"));
                    yield ";
                                opacity: ";
                    // line 354
                    yield ((((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 354, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 354, $this->source); })()))) ? ("1") : ("0.5"));
                    yield ";
                                cursor: ";
                    // line 355
                    yield ((((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 355, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 355, $this->source); })()))) ? ("pointer") : ("default"));
                    yield ";
                            \" 
                            ";
                    // line 357
                    if (((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 357, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 357, $this->source); })()))) {
                        // line 358
                        yield "                                onmouseover=\"this.style.transform='scale(1.15) rotate(5deg)'; this.style.boxShadow='0 40px 90px rgba(0,0,0,0.7)';\" 
                                onmouseout=\"this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 20px 70px rgba(0,0,0,0.5)';\"
                            ";
                    }
                    // line 360
                    yield ">
                                
                                <span style=\"font-size: 6rem; line-height: 1;\">
                                    ";
                    // line 363
                    if ((($tmp = (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 363, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "✅";
                    } else {
                        yield "📝";
                    }
                    // line 364
                    yield "                                </span>
                                <span style=\"font-size: 1.3rem; font-weight: 900; color: white; margin-top: 10px; text-align: center; padding: 0 20px;\">
                                    TEST<br>FIN NIVEAU
                                </span>

                                ";
                    // line 369
                    if ((($tmp = (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 369, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 370
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #10b981; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(16,185,129,0.6); border: 4px solid white;\">
                                        ✓
                                    </div>
                                ";
                    } elseif ((($tmp =  !                    // line 373
(isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 373, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 374
                        yield "                                    <div style=\"position: absolute; top: -10px; right: -10px; background: #ef4444; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; box-shadow: 0 10px 24px rgba(239,68,68,0.6); border: 4px solid white;\">
                                        🔒
                                    </div>
                                ";
                    }
                    // line 378
                    yield "                            </div>

                            <p style=\"margin-top: 20px; font-size: 1.4rem; font-weight: 700; color: white; text-shadow: 0 3px 10px rgba(0,0,0,0.5);\">
                                ";
                    // line 381
                    if ((($tmp = (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 381, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 382
                        yield "                                    ✓ Validé
                                ";
                    } elseif ((($tmp =                     // line 383
(isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 383, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 384
                        yield "                                    Débloqué !
                                ";
                    } else {
                        // line 386
                        yield "                                    Termine tous les cours d'abord
                                ";
                    }
                    // line 388
                    yield "                            </p>

                            ";
                    // line 390
                    if (((isset($context["tousCoursTermines"]) || array_key_exists("tousCoursTermines", $context) ? $context["tousCoursTermines"] : (function () { throw new RuntimeError('Variable "tousCoursTermines" does not exist.', 390, $this->source); })()) || (isset($context["testDejaPassé"]) || array_key_exists("testDejaPassé", $context) ? $context["testDejaPassé"] : (function () { throw new RuntimeError('Variable "testDejaPassé" does not exist.', 390, $this->source); })()))) {
                        // line 391
                        yield "                                </a>
                            ";
                    }
                    // line 393
                    yield "                        </div>
                    ";
                }
                // line 395
                yield "                ";
            }
            // line 396
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveauIndex'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        yield "
            
            
            ";
        // line 401
        yield "            <div style=\"position: fixed; right: 30px; top: 50%; transform: translateY(-50%); z-index: 10; display: flex; flex-direction: column; gap: 30px;\">

                ";
        // line 403
        $context["testsHorsParcours"] = [];
        // line 404
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["testsLangue"]) || array_key_exists("testsLangue", $context) ? $context["testsLangue"] : (function () { throw new RuntimeError('Variable "testsLangue" does not exist.', 404, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            yield "  
                    ";
            // line 405
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "type", [], "any", false, false, false, 405), ["Test de niveau", "Test de fin de niveau"])) {
                // line 406
                yield "                        ";
                $context["testsHorsParcours"] = Twig\Extension\CoreExtension::merge((isset($context["testsHorsParcours"]) || array_key_exists("testsHorsParcours", $context) ? $context["testsHorsParcours"] : (function () { throw new RuntimeError('Variable "testsHorsParcours" does not exist.', 406, $this->source); })()), [$context["test"]]);
                // line 407
                yield "                    ";
            }
            // line 408
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 409
        yield "
                ";
        // line 410
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["testsHorsParcours"]) || array_key_exists("testsHorsParcours", $context) ? $context["testsHorsParcours"] : (function () { throw new RuntimeError('Variable "testsHorsParcours" does not exist.', 410, $this->source); })())) > 0)) {
            // line 411
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["testsHorsParcours"]) || array_key_exists("testsHorsParcours", $context) ? $context["testsHorsParcours"] : (function () { throw new RuntimeError('Variable "testsHorsParcours" does not exist.', 411, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                // line 412
                yield "                        ";
                // line 413
                yield "                        ";
                $context["testPassé"] = false;
                // line 414
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 414, $this->source); })()), "user", [], "any", false, false, false, 414)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 415
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "passages", [], "any", false, false, false, 415));
                    foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                        // line 416
                        yield "                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "user", [], "any", false, false, false, 416), "id", [], "any", false, false, false, 416) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 416, $this->source); })()), "user", [], "any", false, false, false, 416), "id", [], "any", false, false, false, 416)) && (CoreExtension::getAttribute($this->env, $this->source, $context["passage"], "statut", [], "any", false, false, false, 416) == "termine"))) {
                            // line 417
                            yield "                                    ";
                            $context["testPassé"] = true;
                            // line 418
                            yield "                                ";
                        }
                        // line 419
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['passage'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 420
                    yield "                        ";
                }
                // line 421
                yield "
                        <a href=\"";
                // line 422
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_student_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 422)]), "html", null, true);
                yield "\" 
                        style=\"text-decoration: none; display: block;\"
                        title=\"";
                // line 424
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["test"], "titre", [], "any", false, false, false, 424), "html", null, true);
                yield "\">
                            <div style=\"
                                width: 120px;
                                height: 120px;
                                background: ";
                // line 428
                if ((($tmp = (isset($context["testPassé"]) || array_key_exists("testPassé", $context) ? $context["testPassé"] : (function () { throw new RuntimeError('Variable "testPassé" does not exist.', 428, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                // line 444
                if ((($tmp = (isset($context["testPassé"]) || array_key_exists("testPassé", $context) ? $context["testPassé"] : (function () { throw new RuntimeError('Variable "testPassé" does not exist.', 444, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "✅";
                } else {
                    yield "📝";
                }
                // line 445
                yield "                                </span>
                                <span style=\"font-size: 0.9rem; font-weight: 800; color: white; margin-top: 5px; text-align: center; line-height: 1.1;\">
                                    TEST
                                </span>

                                ";
                // line 450
                if ((($tmp = (isset($context["testPassé"]) || array_key_exists("testPassé", $context) ? $context["testPassé"] : (function () { throw new RuntimeError('Variable "testPassé" does not exist.', 450, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 451
                    yield "                                    <div style=\"position: absolute; top: -8px; right: -8px; background: #10b981; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; box-shadow: 0 8px 20px rgba(16,185,129,0.6); border: 3px solid white;\">
                                        ✓
                                    </div>
                                ";
                }
                // line 455
                yield "                            </div>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['test'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            yield "                ";
        } else {
            // line 459
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
        // line 473
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
        return array (  1102 => 473,  1086 => 459,  1083 => 458,  1075 => 455,  1069 => 451,  1067 => 450,  1060 => 445,  1054 => 444,  1031 => 428,  1024 => 424,  1019 => 422,  1016 => 421,  1013 => 420,  1007 => 419,  1004 => 418,  1001 => 417,  998 => 416,  993 => 415,  990 => 414,  987 => 413,  985 => 412,  980 => 411,  978 => 410,  975 => 409,  969 => 408,  966 => 407,  963 => 406,  961 => 405,  954 => 404,  952 => 403,  948 => 401,  943 => 397,  937 => 396,  934 => 395,  930 => 393,  926 => 391,  924 => 390,  920 => 388,  916 => 386,  912 => 384,  910 => 383,  907 => 382,  905 => 381,  900 => 378,  894 => 374,  892 => 373,  887 => 370,  885 => 369,  878 => 364,  872 => 363,  867 => 360,  862 => 358,  860 => 357,  855 => 355,  851 => 354,  847 => 353,  829 => 344,  822 => 339,  816 => 337,  814 => 336,  811 => 335,  808 => 333,  802 => 332,  799 => 331,  796 => 330,  793 => 329,  788 => 328,  785 => 327,  782 => 325,  776 => 324,  773 => 323,  770 => 322,  767 => 321,  764 => 320,  759 => 319,  756 => 318,  754 => 317,  752 => 316,  749 => 315,  743 => 314,  740 => 313,  737 => 312,  734 => 311,  729 => 310,  726 => 309,  724 => 308,  721 => 307,  718 => 305,  715 => 304,  700 => 302,  696 => 300,  690 => 298,  684 => 296,  682 => 295,  679 => 294,  675 => 292,  673 => 291,  669 => 289,  665 => 287,  663 => 286,  659 => 285,  654 => 282,  648 => 278,  646 => 277,  641 => 274,  639 => 273,  633 => 270,  628 => 267,  621 => 265,  619 => 264,  614 => 262,  610 => 261,  606 => 260,  588 => 251,  581 => 246,  575 => 244,  573 => 243,  569 => 242,  566 => 241,  563 => 240,  560 => 239,  557 => 238,  554 => 237,  551 => 236,  548 => 235,  545 => 234,  542 => 232,  539 => 231,  536 => 230,  533 => 229,  530 => 227,  527 => 226,  524 => 225,  521 => 224,  518 => 223,  515 => 222,  512 => 221,  509 => 220,  507 => 219,  504 => 218,  501 => 217,  498 => 216,  496 => 215,  493 => 214,  490 => 212,  487 => 211,  484 => 210,  481 => 209,  478 => 207,  475 => 206,  472 => 204,  469 => 203,  466 => 202,  448 => 201,  445 => 199,  442 => 198,  439 => 196,  433 => 195,  430 => 194,  427 => 193,  424 => 192,  419 => 191,  416 => 190,  409 => 185,  400 => 183,  396 => 181,  393 => 180,  390 => 178,  384 => 177,  381 => 176,  378 => 175,  375 => 174,  370 => 173,  367 => 172,  364 => 170,  361 => 169,  358 => 168,  355 => 167,  350 => 166,  347 => 164,  344 => 163,  341 => 161,  338 => 160,  335 => 158,  332 => 157,  329 => 156,  327 => 155,  324 => 154,  322 => 153,  319 => 151,  313 => 147,  307 => 145,  305 => 144,  300 => 142,  293 => 138,  286 => 134,  281 => 131,  279 => 130,  269 => 123,  257 => 114,  245 => 105,  232 => 94,  219 => 83,  216 => 82,  208 => 79,  191 => 66,  181 => 59,  176 => 57,  172 => 56,  162 => 49,  159 => 48,  156 => 47,  154 => 46,  145 => 39,  138 => 35,  133 => 32,  131 => 31,  122 => 25,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
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
{% endblock %}", "langue/apprentissage.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\langue\\apprentissage.html.twig");
    }
}
