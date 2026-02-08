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
class __TwigTemplate_d43904990e5fac6bdfcbcc4bd849c320 extends Template
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
            
            <div style=\"position: relative; margin: 0 auto 180px; text-align: center; z-index: 3; max-width: 240px;\">
                <a href=\"#\" onclick=\"alert('Lance le test de niveau (module à implémenter)'); return false;\" style=\"text-decoration: none;\">
                    <div style=\"width: 200px; height: 200px; margin: 0 auto; background: linear-gradient(135deg, #fbbf24, #f59e0b); border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 16px 60px rgba(251,191,36,0.6); transition: all 0.4s;\" onmouseover=\"this.style.transform='scale(1.15) rotate(12deg)';\" onmouseout=\"this.style.transform='scale(1) rotate(0deg)';\">
                        <span style=\"font-size: 6rem; line-height: 1;\">📝</span>
                        <span style=\"font-size: 1.6rem; font-weight: 900; color: #1e293b; margin-top: 12px;\">TEST</span>
                    </div>
                    <p style=\"margin-top: 32px; font-size: 1.8rem; font-weight: 800; color: white; text-shadow: 0 4px 12px rgba(0,0,0,0.5);\">
                        Évalue ton niveau actuel
                    </p>
                </a>
            </div>

            <!-- Les 18 cercles (6 niveaux × 3 cours) -->
            ";
        // line 57
        $context["niveaux"] = ["A1", "A2", "B1", "B2", "C1", "C2"];
        // line 58
        yield "            ";
        $context["couleurs"] = ["#22c55e", "#3b82f6", "#8b5cf6", "#f59e0b", "#ef4444", "#7c3aed"];
        // line 59
        yield "            ";
        $context["niveauIndex"] = 0;
        // line 60
        yield "
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 62
            yield "                ";
            if ((($context["i"] % 3) == 1)) {
                // line 63
                yield "                    ";
                $context["niveauIndex"] = ((isset($context["niveauIndex"]) || array_key_exists("niveauIndex", $context) ? $context["niveauIndex"] : (function () { throw new RuntimeError('Variable "niveauIndex" does not exist.', 63, $this->source); })()) + 1);
                // line 64
                yield "                    <div style=\"position: relative; margin: 180px 0 140px; text-align: center; z-index: 3;\">
                        <div style=\"font-size: 3.5rem; font-weight: 900; color: white; margin-bottom: 50px; text-shadow: 0 6px 16px rgba(0,0,0,0.5);\">
                            Niveau ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 66, $this->source); })()), ((isset($context["niveauIndex"]) || array_key_exists("niveauIndex", $context) ? $context["niveauIndex"] : (function () { throw new RuntimeError('Variable "niveauIndex" does not exist.', 66, $this->source); })()) - 1), [], "array", false, false, false, 66), "html", null, true);
                yield "
                        </div>
                    </div>
                ";
            }
            // line 70
            yield "
                ";
            // line 72
            yield "                
                ";
            // line 74
            yield "                ";
            $context["isUnlocked"] = ($context["i"] == 1);
            yield "  ";
            // line 75
            yield "
                <div style=\"position: relative; margin: 120px 0; text-align: center; z-index: 3; transform: translateX(";
            // line 76
            yield (((($context["i"] % 6) < 3)) ? ("120px") : ("-120px"));
            yield ");\">
                    <a href=\"";
            // line 77
            if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 77, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["allCours"]) || array_key_exists("allCours", $context) ? $context["allCours"] : (function () { throw new RuntimeError('Variable "allCours" does not exist.', 77, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 77), "id", [], "any", false, false, false, 77)]), "html", null, true);
            } else {
                yield "#";
            }
            yield "\" 
                       style=\"text-decoration: none; pointer-events: ";
            // line 78
            yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("auto") : ("none"));
            yield "; opacity: ";
            yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0.45"));
            yield ";\">
                        <div style=\"
                            width: 180px;
                            height: 180px;
                            margin: 0 auto;
                            background: ";
            // line 83
            if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 83, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["couleurs"]) || array_key_exists("couleurs", $context) ? $context["couleurs"] : (function () { throw new RuntimeError('Variable "couleurs" does not exist.', 83, $this->source); })()), ((isset($context["niveauIndex"]) || array_key_exists("niveauIndex", $context) ? $context["niveauIndex"] : (function () { throw new RuntimeError('Variable "niveauIndex" does not exist.', 83, $this->source); })()) - 1), [], "array", false, false, false, 83), "html", null, true);
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
            // line 92
            yield (((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 92, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rgba(255,255,255,0.7)") : ("rgba(255,255,255,0.25)"));
            yield ";
                        \" onmouseover=\"";
            // line 93
            if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 93, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "this.style.transform='scale(1.2) rotate(";
                yield (((($context["i"] % 2) == 0)) ? ("10") : ("-10"));
                yield "deg)'; this.style.boxShadow='0 40px 90px rgba(0,0,0,0.6)';";
            }
            yield "\" 
                           onmouseout=\"";
            // line 94
            if ((($tmp = (isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 94, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='0 16px 60px rgba(0,0,0,0.45)';";
            }
            yield "\">
                            
                            <span style=\"font-size: 5rem; font-weight: 900; color: white; text-shadow: 5px 5px 14px rgba(0,0,0,0.6);\">
                                ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
                            </span>

                            ";
            // line 100
            if ((($tmp =  !(isset($context["isUnlocked"]) || array_key_exists("isUnlocked", $context) ? $context["isUnlocked"] : (function () { throw new RuntimeError('Variable "isUnlocked" does not exist.', 100, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 101
                yield "                                <div style=\"position: absolute; top: -14px; right: -14px; background: #ef4444; color: white; width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.2rem; box-shadow: 0 10px 24px rgba(239,68,68,0.6); border: 5px solid white;\">
                                    🔒
                                </div>
                            ";
            }
            // line 105
            yield "                        </div>

                        <p style=\"margin-top: 28px; font-size: 1.5rem; font-weight: 700; color: white; text-shadow: 0 3px 10px rgba(0,0,0,0.5);\">
                            Unité ";
            // line 108
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
        // line 113
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
        return array (  290 => 113,  279 => 108,  274 => 105,  268 => 101,  266 => 100,  260 => 97,  252 => 94,  244 => 93,  240 => 92,  224 => 83,  214 => 78,  206 => 77,  202 => 76,  199 => 75,  195 => 74,  192 => 72,  189 => 70,  182 => 66,  178 => 64,  175 => 63,  172 => 62,  168 => 61,  165 => 60,  162 => 59,  159 => 58,  157 => 57,  126 => 29,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
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
            
            <div style=\"position: relative; margin: 0 auto 180px; text-align: center; z-index: 3; max-width: 240px;\">
                <a href=\"#\" onclick=\"alert('Lance le test de niveau (module à implémenter)'); return false;\" style=\"text-decoration: none;\">
                    <div style=\"width: 200px; height: 200px; margin: 0 auto; background: linear-gradient(135deg, #fbbf24, #f59e0b); border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 16px 60px rgba(251,191,36,0.6); transition: all 0.4s;\" onmouseover=\"this.style.transform='scale(1.15) rotate(12deg)';\" onmouseout=\"this.style.transform='scale(1) rotate(0deg)';\">
                        <span style=\"font-size: 6rem; line-height: 1;\">📝</span>
                        <span style=\"font-size: 1.6rem; font-weight: 900; color: #1e293b; margin-top: 12px;\">TEST</span>
                    </div>
                    <p style=\"margin-top: 32px; font-size: 1.8rem; font-weight: 800; color: white; text-shadow: 0 4px 12px rgba(0,0,0,0.5);\">
                        Évalue ton niveau actuel
                    </p>
                </a>
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
                    <a href=\"{% if isUnlocked %}{{ path('app_cours_show', {id: allCours[i-1].id}) }}{% else %}#{% endif %}\" 
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
{% endblock %}", "langue/apprentissage.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\langue\\apprentissage.html.twig");
    }
}
