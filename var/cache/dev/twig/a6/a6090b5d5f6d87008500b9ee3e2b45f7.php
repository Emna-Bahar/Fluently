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
class __TwigTemplate_4426915203f2098c8273b95231bb80da extends Template
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
<br><br><br><br>
    <!-- Zone de recherche et tri (centré et plus esthétique) -->
    <div style=\"padding: 60px 20px 40px; text-align: center;\">
        <div style=\"max-width: 900px; margin: 0 auto;\">
            <div style=\"background: rgba(255,255,255,0.95); border-radius: 20px; padding: 32px; box-shadow: 0 12px 40px rgba(0,0,0,0.25);\">
                <form method=\"GET\" action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_index");
        yield "\" style=\"display: grid; grid-template-columns: 2fr 1fr 160px; gap: 24px; align-items: end;\">
                    <div>
                        <label style=\"font-weight: 700; color: #1e293b; margin-bottom: 12px; display: block; font-size: 1.15rem;\">
                            Rechercher une langue
                        </label>
                        <input type=\"text\" name=\"search\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Ex: Français, Anglais...\" 
                               style=\"width: 100%; padding: 16px 20px; border: 2px solid #d1d5db; border-radius: 12px; font-size: 1.1rem; box-shadow: inset 0 2px 6px rgba(0,0,0,0.05);\">
                    </div>

                    <div>
                        <label style=\"font-weight: 700; color: #1e293b; margin-bottom: 12px; display: block; font-size: 1.15rem;\">
                            Trier par
                        </label>
                        <select name=\"sortBy\" style=\"width: 100%; padding: 16px 20px; border: 2px solid #d1d5db; border-radius: 12px; font-size: 1.1rem; background: white;\">
                            <option value=\"\">-- Aucun tri --</option>
                            <option value=\"nom\"        ";
        // line 27
        if (((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 27, $this->source); })()) == "nom")) {
            yield "selected";
        }
        yield ">Nom (A-Z)</option>
                            <option value=\"popularite\" ";
        // line 28
        if (((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 28, $this->source); })()) == "popularite")) {
            yield "selected";
        }
        yield ">Popularité</option>
                        </select>
                    </div>

                    <button type=\"submit\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 12px; padding: 16px 28px; font-weight: 700; font-size: 1.15rem; cursor: pointer; box-shadow: 0 6px 16px rgba(102,110,234,0.4); transition: all 0.25s;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                        Filtrer
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Titre principal -->
    <div style=\"padding: 0 20px 40px; text-align: center;\">
        <h1 style=\"color: white; font-size: 3rem; font-weight: 900; margin: 0 0 16px; text-shadow: 0 4px 12px rgba(0,0,0,0.4);\">
            Langues Disponibles
        </h1>
        <p style=\"color: rgba(255,255,255,0.95); font-size: 1.35rem; margin: 0;\">
            Choisissez une langue et commencez votre aventure linguistique dès aujourd'hui !
        </p>
    </div>

    <!-- Cartes des langues -->
    <div style=\"padding: 0 20px 80px;\">
        <div style=\"max-width: 1300px; margin: 0 auto;\">
            ";
        // line 53
        if ((($tmp = (isset($context["langues"]) || array_key_exists("langues", $context) ? $context["langues"] : (function () { throw new RuntimeError('Variable "langues" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                <div style=\"display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px;\">
                    ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["langues"]) || array_key_exists("langues", $context) ? $context["langues"] : (function () { throw new RuntimeError('Variable "langues" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
                // line 56
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_apprentissage", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" style=\"text-decoration: none;\">
                            <div style=\"background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 36px rgba(0,0,0,0.18); transition: all 0.4s ease; height: 100%; display: flex; flex-direction: column;\" 
                                 onmouseover=\"this.style.transform='translateY(-12px)'; this.style.boxShadow='0 24px 60px rgba(0,0,0,0.28)';\" 
                                 onmouseout=\"this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 36px rgba(0,0,0,0.18)';\">
                                
                                <!-- Drapeau -->
                                <div style=\"height: 180px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; position: relative;\">
                                    ";
                // line 63
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "drapeau", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 64
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/langues/" . CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "drapeau", [], "any", false, false, false, 64))), "html", null, true);
                    yield "\" 
                                             alt=\"Drapeau ";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "nom", [], "any", false, false, false, 65), "html", null, true);
                    yield "\" 
                                             style=\"width: 100%; height: 100%; object-fit: cover; border-bottom: 6px solid rgba(255,255,255,0.3);\">
                                    ";
                } else {
                    // line 68
                    yield "                                        <span style=\"color: white; font-size: 5rem; opacity: 0.4;\">🌍</span>
                                    ";
                }
                // line 70
                yield "                                </div>

                                <!-- Contenu -->
                                <div style=\"padding: 28px; display: flex; flex-direction: column; flex-grow: 1;\">
                                    <h3 style=\"font-size: 1.9rem; font-weight: 800; color: #111827; margin: 0 0 12px;\">";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "nom", [], "any", false, false, false, 74), "html", null, true);
                yield "</h3>
                                    <p style=\"color: #4b5563; margin: 0 0 24px; line-height: 1.6; flex-grow: 1; font-size: 1.1rem;\">
                                        ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "description", [], "any", false, false, false, 76), 0, 110), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "description", [], "any", false, false, false, 76)) > 110)) {
                    yield "...";
                }
                // line 77
                yield "                                    </p>
                                    <div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-align: center; padding: 16px; border-radius: 12px; font-weight: 700; font-size: 1.25rem; margin-top: auto; box-shadow: 0 4px 12px rgba(102,110,234,0.3); transition: all 0.3s;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
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
            // line 85
            yield "                </div>
            ";
        } else {
            // line 87
            yield "                <div style=\"background: white; border-radius: 20px; padding: 80px 40px; text-align: center; box-shadow: 0 12px 40px rgba(0,0,0,0.2);\">
                    <h3 style=\"color: #1e293b; font-size: 1.8rem; margin-bottom: 20px;\">Aucune langue trouvée</h3>
                    <p style=\"color: #4b5563; font-size: 1.2rem; margin-bottom: 32px;\">Essayez de modifier vos critères de recherche.</p>
                    <a href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_index");
            yield "\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 16px 40px; border-radius: 12px; text-decoration: none; font-weight: 700; font-size: 1.25rem; box-shadow: 0 6px 20px rgba(102,110,234,0.4);\">
                        Réinitialiser les filtres
                    </a>
                </div>
            ";
        }
        // line 95
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
        return array (  248 => 95,  240 => 90,  235 => 87,  231 => 85,  218 => 77,  213 => 76,  208 => 74,  202 => 70,  198 => 68,  192 => 65,  187 => 64,  185 => 63,  174 => 56,  170 => 55,  167 => 54,  165 => 53,  135 => 28,  129 => 27,  116 => 17,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Langues Disponibles - Fluently{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 0;\">
<br><br><br><br>
    <!-- Zone de recherche et tri (centré et plus esthétique) -->
    <div style=\"padding: 60px 20px 40px; text-align: center;\">
        <div style=\"max-width: 900px; margin: 0 auto;\">
            <div style=\"background: rgba(255,255,255,0.95); border-radius: 20px; padding: 32px; box-shadow: 0 12px 40px rgba(0,0,0,0.25);\">
                <form method=\"GET\" action=\"{{ path('app_langue_index') }}\" style=\"display: grid; grid-template-columns: 2fr 1fr 160px; gap: 24px; align-items: end;\">
                    <div>
                        <label style=\"font-weight: 700; color: #1e293b; margin-bottom: 12px; display: block; font-size: 1.15rem;\">
                            Rechercher une langue
                        </label>
                        <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"Ex: Français, Anglais...\" 
                               style=\"width: 100%; padding: 16px 20px; border: 2px solid #d1d5db; border-radius: 12px; font-size: 1.1rem; box-shadow: inset 0 2px 6px rgba(0,0,0,0.05);\">
                    </div>

                    <div>
                        <label style=\"font-weight: 700; color: #1e293b; margin-bottom: 12px; display: block; font-size: 1.15rem;\">
                            Trier par
                        </label>
                        <select name=\"sortBy\" style=\"width: 100%; padding: 16px 20px; border: 2px solid #d1d5db; border-radius: 12px; font-size: 1.1rem; background: white;\">
                            <option value=\"\">-- Aucun tri --</option>
                            <option value=\"nom\"        {% if sortBy == 'nom'        %}selected{% endif %}>Nom (A-Z)</option>
                            <option value=\"popularite\" {% if sortBy == 'popularite' %}selected{% endif %}>Popularité</option>
                        </select>
                    </div>

                    <button type=\"submit\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 12px; padding: 16px 28px; font-weight: 700; font-size: 1.15rem; cursor: pointer; box-shadow: 0 6px 16px rgba(102,110,234,0.4); transition: all 0.25s;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                        Filtrer
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Titre principal -->
    <div style=\"padding: 0 20px 40px; text-align: center;\">
        <h1 style=\"color: white; font-size: 3rem; font-weight: 900; margin: 0 0 16px; text-shadow: 0 4px 12px rgba(0,0,0,0.4);\">
            Langues Disponibles
        </h1>
        <p style=\"color: rgba(255,255,255,0.95); font-size: 1.35rem; margin: 0;\">
            Choisissez une langue et commencez votre aventure linguistique dès aujourd'hui !
        </p>
    </div>

    <!-- Cartes des langues -->
    <div style=\"padding: 0 20px 80px;\">
        <div style=\"max-width: 1300px; margin: 0 auto;\">
            {% if langues %}
                <div style=\"display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px;\">
                    {% for langue in langues %}
                        <a href=\"{{ path('app_langue_apprentissage', {'id': langue.id}) }}\" style=\"text-decoration: none;\">
                            <div style=\"background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 36px rgba(0,0,0,0.18); transition: all 0.4s ease; height: 100%; display: flex; flex-direction: column;\" 
                                 onmouseover=\"this.style.transform='translateY(-12px)'; this.style.boxShadow='0 24px 60px rgba(0,0,0,0.28)';\" 
                                 onmouseout=\"this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 36px rgba(0,0,0,0.18)';\">
                                
                                <!-- Drapeau -->
                                <div style=\"height: 180px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; position: relative;\">
                                    {% if langue.drapeau %}
                                        <img src=\"{{ asset('images/langues/' ~ langue.drapeau) }}\" 
                                             alt=\"Drapeau {{ langue.nom }}\" 
                                             style=\"width: 100%; height: 100%; object-fit: cover; border-bottom: 6px solid rgba(255,255,255,0.3);\">
                                    {% else %}
                                        <span style=\"color: white; font-size: 5rem; opacity: 0.4;\">🌍</span>
                                    {% endif %}
                                </div>

                                <!-- Contenu -->
                                <div style=\"padding: 28px; display: flex; flex-direction: column; flex-grow: 1;\">
                                    <h3 style=\"font-size: 1.9rem; font-weight: 800; color: #111827; margin: 0 0 12px;\">{{ langue.nom }}</h3>
                                    <p style=\"color: #4b5563; margin: 0 0 24px; line-height: 1.6; flex-grow: 1; font-size: 1.1rem;\">
                                        {{ langue.description|slice(0, 110) }}{% if langue.description|length > 110 %}...{% endif %}
                                    </p>
                                    <div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-align: center; padding: 16px; border-radius: 12px; font-weight: 700; font-size: 1.25rem; margin-top: auto; box-shadow: 0 4px 12px rgba(102,110,234,0.3); transition: all 0.3s;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                        Commencer →
                                    </div>
                                </div>
                            </div>
                        </a>
                    {% endfor %}
                </div>
            {% else %}
                <div style=\"background: white; border-radius: 20px; padding: 80px 40px; text-align: center; box-shadow: 0 12px 40px rgba(0,0,0,0.2);\">
                    <h3 style=\"color: #1e293b; font-size: 1.8rem; margin-bottom: 20px;\">Aucune langue trouvée</h3>
                    <p style=\"color: #4b5563; font-size: 1.2rem; margin-bottom: 32px;\">Essayez de modifier vos critères de recherche.</p>
                    <a href=\"{{ path('app_langue_index') }}\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 16px 40px; border-radius: 12px; text-decoration: none; font-weight: 700; font-size: 1.25rem; box-shadow: 0 6px 20px rgba(102,110,234,0.4);\">
                        Réinitialiser les filtres
                    </a>
                </div>
            {% endif %}
        </div>
    </div>

</div>
{% endblock %}", "langue/index.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\langue\\index.html.twig");
    }
}
