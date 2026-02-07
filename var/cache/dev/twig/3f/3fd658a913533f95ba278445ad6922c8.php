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

/* langue/show.html.twig */
class __TwigTemplate_26ac4cfe25a4ad3e6d513f3cbc7d5062 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/show.html.twig"));

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

        yield "Langue : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 60px 20px 100px; color: #111827;\">
<br><br><br><br>
    <div style=\"max-width: 1100px; margin: 0 auto;\">

        <!-- Titre + Retour -->
        <div style=\"text-align: center; margin-bottom: 50px;\">
            

            <h1 style=\"font-size: 3.2rem; font-weight: 900; margin: 0 0 12px; color: white; text-shadow: 0 4px 14px rgba(0,0,0,0.45);\">
                ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield "
            </h1>
            <p style=\"font-size: 1.4rem; color: rgba(255,255,255,0.9); opacity: 0.95;\">
                Découvrez tous les détails de cette langue sur Fluently
            </p>
        </div>

        <!-- Bloc principal -->
        <div style=\"background: rgba(255,255,255,0.96); border-radius: 24px; padding: 50px; box-shadow: 0 20px 70px rgba(0,0,0,0.28);\">

            <div style=\"display: grid; grid-template-columns: 1fr 2fr; gap: 50px; align-items: start;\">
                
                <!-- Colonne gauche : Drapeau + statut -->
                <div style=\"text-align: center;\">
                    ";
        // line 29
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 29, $this->source); })()), "drapeau", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                        <div style=\"background: white; border-radius: 20px; padding: 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.15);\">
                            <img src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/langues/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 31, $this->source); })()), "drapeau", [], "any", false, false, false, 31))), "html", null, true);
            yield "\" 
                                 alt=\"Drapeau ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), "html", null, true);
            yield "\" 
                                 style=\"max-height: 320px; width: auto; border-radius: 16px; box-shadow: 0 8px 30px rgba(0,0,0,0.2);\">
                        </div>
                    ";
        } else {
            // line 36
            yield "                        <div style=\"background: #f3f4f6; border-radius: 20px; padding: 80px 40px; text-align: center; color: #6b7280; font-size: 1.4rem; font-weight: 500;\">
                            Aucun drapeau défini
                        </div>
                    ";
        }
        // line 40
        yield "
                    <div style=\"margin-top: 30px;\">
                        <span style=\"padding: 12px 32px; border-radius: 50px; font-size: 1.4rem; font-weight: 700; background: ";
        // line 42
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 42, $this->source); })()), "isActive", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("#d1fae5") : ("#fee2e2"));
        yield "; color: ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 42, $this->source); })()), "isActive", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("#065f46") : ("#991b1b"));
        yield "; box-shadow: 0 4px 12px rgba(0,0,0,0.15);\">
                            ";
        // line 43
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 43, $this->source); })()), "isActive", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
        yield "
                        </span>
                    </div>
                </div>

                <!-- Colonne droite : Infos -->
                <div>
                    <div style=\"background: #f8fafc; border-radius: 16px; padding: 30px; margin-bottom: 30px; box-shadow: inset 0 2px 8px rgba(0,0,0,0.05);\">
                        <h2 style=\"font-size: 2rem; font-weight: 800; color: #1e293b; margin: 0 0 30px; border-bottom: 3px solid #6366f1; padding-bottom: 12px;\">
                            Informations générales
                        </h2>

                        <div style=\"display: grid; grid-template-columns: 1fr 2fr; gap: 20px 40px; font-size: 1.2rem;\">
                            <div style=\"font-weight: 700; color: #374151;\">ID</div>
                            <div style=\"color: #111827;\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
        yield "</div>

                            <div style=\"font-weight: 700; color: #374151;\">Nom</div>
                            <div style=\"color: #111827; font-weight: 600;\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), "html", null, true);
        yield "</div>

                            <div style=\"font-weight: 700; color: #374151;\">Popularité</div>
                            <div style=\"color: #111827;\">";
        // line 63
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 63, $this->source); })()), "popularite", [], "any", false, false, false, 63)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 63, $this->source); })()), "popularite", [], "any", false, false, false, 63), "html", null, true)) : ("Non définie"));
        yield "</div>

                            <div style=\"font-weight: 700; color: #374151;\">Date d'ajout</div>
                            <div style=\"color: #111827;\">";
        // line 66
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 66, $this->source); })()), "dateAjout", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 66, $this->source); })()), "dateAjout", [], "any", false, false, false, 66), "d/m/Y"), "html", null, true)) : ("Inconnue"));
        yield "</div>

                            <div style=\"font-weight: 700; color: #374151;\">Description</div>
                            <div style=\"color: #374151; line-height: 1.7;\">";
        // line 69
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), "html", null, true));
        yield "</div>
                        </div>
                    </div>

                    <!-- Actions (si admin) -->
                    ";
        // line 74
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "                        <div style=\"display: flex; gap: 20px; justify-content: center; margin: 40px 0;\">
                            <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" style=\"background: linear-gradient(135deg, #f59e0b, #d97706); color: white; padding: 16px 40px; border-radius: 14px; text-decoration: none; font-weight: 700; font-size: 1.25rem; box-shadow: 0 8px 24px rgba(245,158,11,0.4); transition: all 0.3s;\" onmouseover=\"this.style.transform='translateY(-3px) scale(1.04)';\" onmouseout=\"this.style.transform='translateY(0) scale(1)';\">
                                Modifier cette langue
                            </a>

                            <form method=\"post\" action=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette langue ? Cette action est irréversible.');\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81))), "html", null, true);
            yield "\">
                                <button type=\"submit\" style=\"background: linear-gradient(135deg, #ef4444, #dc2626); color: white; border: none; padding: 16px 40px; border-radius: 14px; font-weight: 700; font-size: 1.25rem; cursor: pointer; box-shadow: 0 8px 24px rgba(239,68,68,0.4); transition: all 0.3s;\" onmouseover=\"this.style.transform='translateY(-3px) scale(1.04)';\" onmouseout=\"this.style.transform='translateY(0) scale(1)';\">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    ";
        }
        // line 88
        yield "                </div>
            </div>

            <!-- Niveaux disponibles -->
            ";
        // line 92
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 92, $this->source); })()), "niveaux", [], "any", false, false, false, 92)) > 0)) {
            // line 93
            yield "                <div style=\"margin-top: 70px;\">
                    <h2 style=\"text-align: center; font-size: 2.4rem; font-weight: 800; color: white; margin-bottom: 40px; text-shadow: 0 3px 10px rgba(0,0,0,0.3);\">
                        Niveaux disponibles
                    </h2>

                    <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;\">
                        ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 99, $this->source); })()), "niveaux", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
                // line 100
                yield "                            <div style=\"background: rgba(255,255,255,0.95); border-radius: 16px; padding: 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.18); transition: all 0.3s; text-align: center;\" onmouseover=\"this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.25)';\" onmouseout=\"this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.18)';\">
                                <h3 style=\"font-size: 1.8rem; font-weight: 800; color: #1e293b; margin: 0 0 12px;\">
                                    ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "titre", [], "any", false, false, false, 102), "html", null, true);
                yield "
                                </h3>
                                <p style=\"font-size: 1.15rem; color: #4b5563; margin: 0 0 16px;\">
                                    Difficulté : <strong>";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 105), "html", null, true);
                yield "</strong>
                                </p>
                                <p style=\"font-size: 1.05rem; color: #6b7280; line-height: 1.6;\">
                                    ";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "description", [], "any", false, false, false, 108), 0, 120), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "description", [], "any", false, false, false, 108)) > 120)) {
                    yield "...";
                }
                // line 109
                yield "                                </p>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "                    </div>
                </div>
            ";
        } else {
            // line 115
            yield "                <div style=\"text-align: center; margin-top: 60px; color: rgba(255,255,255,0.9); font-size: 1.4rem; font-style: italic;\">
                    Aucun niveau créé pour cette langue pour le moment.
                </div>
            ";
        }
        // line 119
        yield "
        </div>
            <div style=\"text-align: center;\">
            <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\" style=\"color: #2563eb; font-weight: 700; font-size: 1.3rem; text-decoration: none;\">← Retour à la liste</a>
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
        return "langue/show.html.twig";
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
        return array (  301 => 122,  296 => 119,  290 => 115,  285 => 112,  277 => 109,  272 => 108,  266 => 105,  260 => 102,  256 => 100,  252 => 99,  244 => 93,  242 => 92,  236 => 88,  226 => 81,  222 => 80,  215 => 76,  212 => 75,  210 => 74,  202 => 69,  196 => 66,  190 => 63,  184 => 60,  178 => 57,  161 => 43,  155 => 42,  151 => 40,  145 => 36,  138 => 32,  134 => 31,  131 => 30,  129 => 29,  112 => 15,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Langue : {{ langue.nom }}{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 60px 20px 100px; color: #111827;\">
<br><br><br><br>
    <div style=\"max-width: 1100px; margin: 0 auto;\">

        <!-- Titre + Retour -->
        <div style=\"text-align: center; margin-bottom: 50px;\">
            

            <h1 style=\"font-size: 3.2rem; font-weight: 900; margin: 0 0 12px; color: white; text-shadow: 0 4px 14px rgba(0,0,0,0.45);\">
                {{ langue.nom }}
            </h1>
            <p style=\"font-size: 1.4rem; color: rgba(255,255,255,0.9); opacity: 0.95;\">
                Découvrez tous les détails de cette langue sur Fluently
            </p>
        </div>

        <!-- Bloc principal -->
        <div style=\"background: rgba(255,255,255,0.96); border-radius: 24px; padding: 50px; box-shadow: 0 20px 70px rgba(0,0,0,0.28);\">

            <div style=\"display: grid; grid-template-columns: 1fr 2fr; gap: 50px; align-items: start;\">
                
                <!-- Colonne gauche : Drapeau + statut -->
                <div style=\"text-align: center;\">
                    {% if langue.drapeau %}
                        <div style=\"background: white; border-radius: 20px; padding: 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.15);\">
                            <img src=\"{{ asset('images/langues/' ~ langue.drapeau) }}\" 
                                 alt=\"Drapeau {{ langue.nom }}\" 
                                 style=\"max-height: 320px; width: auto; border-radius: 16px; box-shadow: 0 8px 30px rgba(0,0,0,0.2);\">
                        </div>
                    {% else %}
                        <div style=\"background: #f3f4f6; border-radius: 20px; padding: 80px 40px; text-align: center; color: #6b7280; font-size: 1.4rem; font-weight: 500;\">
                            Aucun drapeau défini
                        </div>
                    {% endif %}

                    <div style=\"margin-top: 30px;\">
                        <span style=\"padding: 12px 32px; border-radius: 50px; font-size: 1.4rem; font-weight: 700; background: {{ langue.isActive ? '#d1fae5' : '#fee2e2' }}; color: {{ langue.isActive ? '#065f46' : '#991b1b' }}; box-shadow: 0 4px 12px rgba(0,0,0,0.15);\">
                            {{ langue.isActive ? 'Active' : 'Inactive' }}
                        </span>
                    </div>
                </div>

                <!-- Colonne droite : Infos -->
                <div>
                    <div style=\"background: #f8fafc; border-radius: 16px; padding: 30px; margin-bottom: 30px; box-shadow: inset 0 2px 8px rgba(0,0,0,0.05);\">
                        <h2 style=\"font-size: 2rem; font-weight: 800; color: #1e293b; margin: 0 0 30px; border-bottom: 3px solid #6366f1; padding-bottom: 12px;\">
                            Informations générales
                        </h2>

                        <div style=\"display: grid; grid-template-columns: 1fr 2fr; gap: 20px 40px; font-size: 1.2rem;\">
                            <div style=\"font-weight: 700; color: #374151;\">ID</div>
                            <div style=\"color: #111827;\">{{ langue.id }}</div>

                            <div style=\"font-weight: 700; color: #374151;\">Nom</div>
                            <div style=\"color: #111827; font-weight: 600;\">{{ langue.nom }}</div>

                            <div style=\"font-weight: 700; color: #374151;\">Popularité</div>
                            <div style=\"color: #111827;\">{{ langue.popularite ?: 'Non définie' }}</div>

                            <div style=\"font-weight: 700; color: #374151;\">Date d'ajout</div>
                            <div style=\"color: #111827;\">{{ langue.dateAjout ? langue.dateAjout|date('d/m/Y') : 'Inconnue' }}</div>

                            <div style=\"font-weight: 700; color: #374151;\">Description</div>
                            <div style=\"color: #374151; line-height: 1.7;\">{{ langue.description|nl2br }}</div>
                        </div>
                    </div>

                    <!-- Actions (si admin) -->
                    {% if is_granted('ROLE_ADMIN') %}
                        <div style=\"display: flex; gap: 20px; justify-content: center; margin: 40px 0;\">
                            <a href=\"{{ path('app_admin_langue_edit', {'id': langue.id}) }}\" style=\"background: linear-gradient(135deg, #f59e0b, #d97706); color: white; padding: 16px 40px; border-radius: 14px; text-decoration: none; font-weight: 700; font-size: 1.25rem; box-shadow: 0 8px 24px rgba(245,158,11,0.4); transition: all 0.3s;\" onmouseover=\"this.style.transform='translateY(-3px) scale(1.04)';\" onmouseout=\"this.style.transform='translateY(0) scale(1)';\">
                                Modifier cette langue
                            </a>

                            <form method=\"post\" action=\"{{ path('app_admin_langue_delete', {'id': langue.id}) }}\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette langue ? Cette action est irréversible.');\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ langue.id) }}\">
                                <button type=\"submit\" style=\"background: linear-gradient(135deg, #ef4444, #dc2626); color: white; border: none; padding: 16px 40px; border-radius: 14px; font-weight: 700; font-size: 1.25rem; cursor: pointer; box-shadow: 0 8px 24px rgba(239,68,68,0.4); transition: all 0.3s;\" onmouseover=\"this.style.transform='translateY(-3px) scale(1.04)';\" onmouseout=\"this.style.transform='translateY(0) scale(1)';\">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    {% endif %}
                </div>
            </div>

            <!-- Niveaux disponibles -->
            {% if langue.niveaux|length > 0 %}
                <div style=\"margin-top: 70px;\">
                    <h2 style=\"text-align: center; font-size: 2.4rem; font-weight: 800; color: white; margin-bottom: 40px; text-shadow: 0 3px 10px rgba(0,0,0,0.3);\">
                        Niveaux disponibles
                    </h2>

                    <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;\">
                        {% for niveau in langue.niveaux %}
                            <div style=\"background: rgba(255,255,255,0.95); border-radius: 16px; padding: 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.18); transition: all 0.3s; text-align: center;\" onmouseover=\"this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.25)';\" onmouseout=\"this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.18)';\">
                                <h3 style=\"font-size: 1.8rem; font-weight: 800; color: #1e293b; margin: 0 0 12px;\">
                                    {{ niveau.titre }}
                                </h3>
                                <p style=\"font-size: 1.15rem; color: #4b5563; margin: 0 0 16px;\">
                                    Difficulté : <strong>{{ niveau.difficulte }}</strong>
                                </p>
                                <p style=\"font-size: 1.05rem; color: #6b7280; line-height: 1.6;\">
                                    {{ niveau.description|slice(0, 120) }}{% if niveau.description|length > 120 %}...{% endif %}
                                </p>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                <div style=\"text-align: center; margin-top: 60px; color: rgba(255,255,255,0.9); font-size: 1.4rem; font-style: italic;\">
                    Aucun niveau créé pour cette langue pour le moment.
                </div>
            {% endif %}

        </div>
            <div style=\"text-align: center;\">
            <a href=\"{{ path('app_admin_langue_index') }}\" style=\"color: #2563eb; font-weight: 700; font-size: 1.3rem; text-decoration: none;\">← Retour à la liste</a>
        </div>
    </div>
</div>
{% endblock %}", "langue/show.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\langue\\show.html.twig");
    }
}
