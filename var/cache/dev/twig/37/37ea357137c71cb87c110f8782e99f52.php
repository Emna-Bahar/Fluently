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

/* langue/index.html.twig */
class __TwigTemplate_4307c1c6b00b9cb4c5fc6db1f5f860ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/index.html.twig"));

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

        yield "Langues Disponibles - Fluently";
        
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
        yield "<div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 0;\">
<br><br><br><br><br>
    <!-- Barre de recherche et tri (style premium, proche navbar) -->
    <div style=\"background: rgba(255,255,255,0.12); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255,255,255,0.15); padding: 24px 0;\">
        <div style=\"max-width: 1200px; margin: 0 auto; padding: 0 20px;\">
            <div style=\"display: flex; flex-direction: column; align-items: center; gap: 16px;\">
                <!-- Titre principal (gros, gras, comme navbar) -->
                <h1 style=\"color: white; font-size: 2.5rem; font-weight: 900; margin: 0 0 8px; text-shadow: 0 4px 12px rgba(0,0,0,0.4);\">
                    Langues Disponibles
                </h1>

                <!-- Formulaire recherche + tri -->
                <form method=\"GET\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_index");
        yield "\" style=\"display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; align-items: center; width: 100%; max-width: 900px;\">
                    <!-- Recherche -->
                    <div style=\"flex: 1; min-width: 280px;\">
                        <input type=\"text\" name=\"search\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 21, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" 
                               placeholder=\"Rechercher une langue (ex: Français, Anglais...)\" 
                               style=\"width: 100%; padding: 16px 20px; border: none; border-radius: 50px; font-size: 1.1rem; background: rgba(255,255,255,0.95); box-shadow: 0 6px 16px rgba(0,0,0,0.15); outline: none; transition: all 0.3s;\" 
                               onfocus=\"this.style.boxShadow='0 8px 24px rgba(0,0,0,0.25)';\">
                    </div>

                    <!-- Tri -->
                    <div style=\"min-width: 220px;\">
                        <select name=\"sortBy\" style=\"width: 100%; padding: 16px 20px; border: none; border-radius: 50px; font-size: 1.1rem; background: rgba(255,255,255,0.95); box-shadow: 0 6px 16px rgba(0,0,0,0.15); outline: none; appearance: none; cursor: pointer; transition: all 0.3s;\">
                            <option value=\"\">-- Aucun tri --</option>
                            <option value=\"nom\"        ";
        // line 31
        if (((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 31, $this->source); })()) == "nom")) {
            yield "selected";
        }
        yield ">Nom (A-Z)</option>
                            <option value=\"popularite\" ";
        // line 32
        if (((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 32, $this->source); })()) == "popularite")) {
            yield "selected";
        }
        yield ">Popularité</option>
                        </select>
                    </div>

                    <!-- Bouton Filtrer -->
                    <button type=\"submit\" style=\"background: linear-gradient(135deg, #4f46e5, #7c3aed); color: white; border: none; border-radius: 50px; padding: 16px 40px; font-size: 1.1rem; font-weight: 700; cursor: pointer; box-shadow: 0 8px 20px rgba(79,70,229,0.4); transition: all 0.3s;\" onmouseover=\"this.style.transform='scale(1.05)'; this.style.boxShadow='0 12px 28px rgba(79,70,229,0.5)';\" onmouseout=\"this.style.transform='scale(1)'; this.style.boxShadow='0 8px 20px rgba(79,70,229,0.4)';\">
                        Filtrer
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Sous-titre -->
    <div style=\"padding: 40px 20px 20px; text-align: center;\">
        <p style=\"color: rgba(255,255,255,0.95); font-size: 1.4rem; margin: 0; max-width: 800px; margin: 0 auto; font-weight: 500;\">
            Choisissez une langue et commencez votre aventure linguistique dès aujourd'hui !
        </p>
    </div>

    <!-- Cartes des langues -->
    <div style=\"padding: 0 20px 100px;\">
        <div style=\"max-width: 1400px; margin: 0 auto;\">
            ";
        // line 55
        if ((($tmp = (isset($context["langues"]) || array_key_exists("langues", $context) ? $context["langues"] : (function () { throw new RuntimeError('Variable "langues" does not exist.', 55, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "                <div style=\"display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 40px;\">
                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["langues"]) || array_key_exists("langues", $context) ? $context["langues"] : (function () { throw new RuntimeError('Variable "langues" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
                // line 58
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_apprentissage", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                yield "\" style=\"text-decoration: none;\">
                            <div style=\"background: white; border-radius: 24px; overflow: hidden; box-shadow: 0 12px 40px rgba(0,0,0,0.2); transition: all 0.4s ease; height: 100%; display: flex; flex-direction: column;\" 
                                 onmouseover=\"this.style.transform='translateY(-16px)'; this.style.boxShadow='0 30px 80px rgba(0,0,0,0.3)';\" 
                                 onmouseout=\"this.style.transform='translateY(0)'; this.style.boxShadow='0 12px 40px rgba(0,0,0,0.2)';\">
                                
                                <!-- Drapeau (plus grand et centré) -->
                                <div style=\"height: 200px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center;\">
                                    ";
                // line 65
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "drapeau", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 66
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/langues/" . CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "drapeau", [], "any", false, false, false, 66))), "html", null, true);
                    yield "\" 
                                             alt=\"Drapeau ";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "nom", [], "any", false, false, false, 67), "html", null, true);
                    yield "\" 
                                             style=\"width: 100%; height: 100%; object-fit: cover;\">
                                    ";
                } else {
                    // line 70
                    yield "                                        <span style=\"color: white; font-size: 6rem; opacity: 0.5;\">🌍</span>
                                    ";
                }
                // line 72
                yield "                                </div>

                                <!-- Contenu -->
                                <div style=\"padding: 32px; display: flex; flex-direction: column; flex-grow: 1; text-align: center;\">
                                    <h3 style=\"font-size: 2.1rem; font-weight: 900; color: #111827; margin: 0 0 16px;\">";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "nom", [], "any", false, false, false, 76), "html", null, true);
                yield "</h3>
                                    <p style=\"color: #4b5563; margin: 0 0 32px; line-height: 1.6; flex-grow: 1; font-size: 1.15rem;\">
                                        ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "description", [], "any", false, false, false, 78), 0, 140), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "description", [], "any", false, false, false, 78)) > 140)) {
                    yield "...";
                }
                // line 79
                yield "                                    </p>
                                    <div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 18px 40px; border-radius: 50px; font-weight: 800; font-size: 1.3rem; margin-top: auto; box-shadow: 0 6px 20px rgba(102,110,234,0.4); transition: all 0.3s;\" onmouseover=\"this.style.transform='scale(1.08)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                        Commencer →
                                    </div>
                                </div>
                            </div>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['langue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "                </div>
            ";
        } else {
            // line 89
            yield "                <div style=\"background: white; border-radius: 24px; padding: 100px 40px; text-align: center; box-shadow: 0 20px 60px rgba(0,0,0,0.25);\">
                    <h3 style=\"color: #1e293b; font-size: 2rem; margin-bottom: 24px;\">Aucune langue trouvée</h3>
                    <p style=\"color: #4b5563; font-size: 1.3rem; margin-bottom: 40px;\">Essayez de modifier vos critères de recherche.</p>
                    <a href=\"";
            // line 92
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_index");
            yield "\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 18px 48px; border-radius: 50px; text-decoration: none; font-weight: 800; font-size: 1.3rem; box-shadow: 0 8px 24px rgba(102,110,234,0.4); transition: all 0.3s;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                        Réinitialiser les filtres
                    </a>
                </div>
            ";
        }
        // line 97
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
        return "langue/index.html.twig";
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
        return array (  250 => 97,  242 => 92,  237 => 89,  233 => 87,  220 => 79,  215 => 78,  210 => 76,  204 => 72,  200 => 70,  194 => 67,  189 => 66,  187 => 65,  176 => 58,  172 => 57,  169 => 56,  167 => 55,  139 => 32,  133 => 31,  120 => 21,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Langues Disponibles - Fluently{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 0;\">
<br><br><br><br><br>
    <!-- Barre de recherche et tri (style premium, proche navbar) -->
    <div style=\"background: rgba(255,255,255,0.12); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255,255,255,0.15); padding: 24px 0;\">
        <div style=\"max-width: 1200px; margin: 0 auto; padding: 0 20px;\">
            <div style=\"display: flex; flex-direction: column; align-items: center; gap: 16px;\">
                <!-- Titre principal (gros, gras, comme navbar) -->
                <h1 style=\"color: white; font-size: 2.5rem; font-weight: 900; margin: 0 0 8px; text-shadow: 0 4px 12px rgba(0,0,0,0.4);\">
                    Langues Disponibles
                </h1>

                <!-- Formulaire recherche + tri -->
                <form method=\"GET\" action=\"{{ path('app_langue_index') }}\" style=\"display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; align-items: center; width: 100%; max-width: 900px;\">
                    <!-- Recherche -->
                    <div style=\"flex: 1; min-width: 280px;\">
                        <input type=\"text\" name=\"search\" value=\"{{ search|default('') }}\" 
                               placeholder=\"Rechercher une langue (ex: Français, Anglais...)\" 
                               style=\"width: 100%; padding: 16px 20px; border: none; border-radius: 50px; font-size: 1.1rem; background: rgba(255,255,255,0.95); box-shadow: 0 6px 16px rgba(0,0,0,0.15); outline: none; transition: all 0.3s;\" 
                               onfocus=\"this.style.boxShadow='0 8px 24px rgba(0,0,0,0.25)';\">
                    </div>

                    <!-- Tri -->
                    <div style=\"min-width: 220px;\">
                        <select name=\"sortBy\" style=\"width: 100%; padding: 16px 20px; border: none; border-radius: 50px; font-size: 1.1rem; background: rgba(255,255,255,0.95); box-shadow: 0 6px 16px rgba(0,0,0,0.15); outline: none; appearance: none; cursor: pointer; transition: all 0.3s;\">
                            <option value=\"\">-- Aucun tri --</option>
                            <option value=\"nom\"        {% if sortBy == 'nom'        %}selected{% endif %}>Nom (A-Z)</option>
                            <option value=\"popularite\" {% if sortBy == 'popularite' %}selected{% endif %}>Popularité</option>
                        </select>
                    </div>

                    <!-- Bouton Filtrer -->
                    <button type=\"submit\" style=\"background: linear-gradient(135deg, #4f46e5, #7c3aed); color: white; border: none; border-radius: 50px; padding: 16px 40px; font-size: 1.1rem; font-weight: 700; cursor: pointer; box-shadow: 0 8px 20px rgba(79,70,229,0.4); transition: all 0.3s;\" onmouseover=\"this.style.transform='scale(1.05)'; this.style.boxShadow='0 12px 28px rgba(79,70,229,0.5)';\" onmouseout=\"this.style.transform='scale(1)'; this.style.boxShadow='0 8px 20px rgba(79,70,229,0.4)';\">
                        Filtrer
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Sous-titre -->
    <div style=\"padding: 40px 20px 20px; text-align: center;\">
        <p style=\"color: rgba(255,255,255,0.95); font-size: 1.4rem; margin: 0; max-width: 800px; margin: 0 auto; font-weight: 500;\">
            Choisissez une langue et commencez votre aventure linguistique dès aujourd'hui !
        </p>
    </div>

    <!-- Cartes des langues -->
    <div style=\"padding: 0 20px 100px;\">
        <div style=\"max-width: 1400px; margin: 0 auto;\">
            {% if langues %}
                <div style=\"display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 40px;\">
                    {% for langue in langues %}
                        <a href=\"{{ path('app_langue_apprentissage', {'id': langue.id}) }}\" style=\"text-decoration: none;\">
                            <div style=\"background: white; border-radius: 24px; overflow: hidden; box-shadow: 0 12px 40px rgba(0,0,0,0.2); transition: all 0.4s ease; height: 100%; display: flex; flex-direction: column;\" 
                                 onmouseover=\"this.style.transform='translateY(-16px)'; this.style.boxShadow='0 30px 80px rgba(0,0,0,0.3)';\" 
                                 onmouseout=\"this.style.transform='translateY(0)'; this.style.boxShadow='0 12px 40px rgba(0,0,0,0.2)';\">
                                
                                <!-- Drapeau (plus grand et centré) -->
                                <div style=\"height: 200px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center;\">
                                    {% if langue.drapeau %}
                                        <img src=\"{{ asset('images/langues/' ~ langue.drapeau) }}\" 
                                             alt=\"Drapeau {{ langue.nom }}\" 
                                             style=\"width: 100%; height: 100%; object-fit: cover;\">
                                    {% else %}
                                        <span style=\"color: white; font-size: 6rem; opacity: 0.5;\">🌍</span>
                                    {% endif %}
                                </div>

                                <!-- Contenu -->
                                <div style=\"padding: 32px; display: flex; flex-direction: column; flex-grow: 1; text-align: center;\">
                                    <h3 style=\"font-size: 2.1rem; font-weight: 900; color: #111827; margin: 0 0 16px;\">{{ langue.nom }}</h3>
                                    <p style=\"color: #4b5563; margin: 0 0 32px; line-height: 1.6; flex-grow: 1; font-size: 1.15rem;\">
                                        {{ langue.description|slice(0, 140) }}{% if langue.description|length > 140 %}...{% endif %}
                                    </p>
                                    <div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 18px 40px; border-radius: 50px; font-weight: 800; font-size: 1.3rem; margin-top: auto; box-shadow: 0 6px 20px rgba(102,110,234,0.4); transition: all 0.3s;\" onmouseover=\"this.style.transform='scale(1.08)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                        Commencer →
                                    </div>
                                </div>
                            </div>
                        </a>
                    {% endfor %}
                </div>
            {% else %}
                <div style=\"background: white; border-radius: 24px; padding: 100px 40px; text-align: center; box-shadow: 0 20px 60px rgba(0,0,0,0.25);\">
                    <h3 style=\"color: #1e293b; font-size: 2rem; margin-bottom: 24px;\">Aucune langue trouvée</h3>
                    <p style=\"color: #4b5563; font-size: 1.3rem; margin-bottom: 40px;\">Essayez de modifier vos critères de recherche.</p>
                    <a href=\"{{ path('app_langue_index') }}\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 18px 48px; border-radius: 50px; text-decoration: none; font-weight: 800; font-size: 1.3rem; box-shadow: 0 8px 24px rgba(102,110,234,0.4); transition: all 0.3s;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                        Réinitialiser les filtres
                    </a>
                </div>
            {% endif %}
        </div>
    </div>

</div>
{% endblock %}", "langue/index.html.twig", "C:\\Users\\emnab\\Documents\\Integration1\\templates\\langue\\index.html.twig");
    }
}
