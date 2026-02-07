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

/* niveau/show.html.twig */
class __TwigTemplate_dae61f52ead171253b81b421d42f466b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau/show.html.twig"));

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

        yield "Niveau : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #5b21b6 100%); min-height: 100vh; padding: 100px 20px 60px; color: #000000;\">
<br><br><br><br>
    <div class=\"container\" style=\"max-width: 1000px;\">

        <!-- Titre principal -->
        <div class=\"text-center mb-5\">
            <h1 class=\"fw-bold\" style=\"font-size: 3rem; color: #000000; text-shadow: 0 4px 12px rgba(0,0,0,0.2);\">
                Niveau : ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13), "html", null, true);
        yield "
            </h1>
            <p class=\"text-secondary mt-2\" style=\"font-size: 1.3rem;\">
                ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 16, $this->source); })()), "IdLangue", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
        yield " • Ordre ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 16, $this->source); })()), "ordre", [], "any", false, false, false, 16), "html", null, true);
        yield "
            </p>
        </div>

        <!-- Carte détails -->
        <div class=\"card shadow-xl border-0 rounded-4 overflow-hidden\" style=\"background: rgba(255,255,255,0.98); backdrop-filter: blur(10px);\">
            <div class=\"card-body p-5\">
                <div class=\"row g-5\">
                    <!-- Colonne gauche : infos texte -->
                    <div class=\"col-lg-6\">
                        <dl class=\"row g-3\">
                            <dt class=\"col-sm-4 fw-bold text-dark\">Langue</dt>
                            <dd class=\"col-sm-8 text-dark\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 28, $this->source); })()), "IdLangue", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "</dd>

                            <dt class=\"col-sm-4 fw-bold text-dark\">Titre</dt>
                            <dd class=\"col-sm-8 text-dark fw-bold\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 31, $this->source); })()), "titre", [], "any", false, false, false, 31), "html", null, true);
        yield "</dd>

                            <dt class=\"col-sm-4 fw-bold text-dark\">Ordre</dt>
                            <dd class=\"col-sm-8 text-dark\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 34, $this->source); })()), "ordre", [], "any", false, false, false, 34), "html", null, true);
        yield "</dd>

                            <dt class=\"col-sm-4 fw-bold text-dark\">Difficulté</dt>
                            <dd class=\"col-sm-8 text-dark\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 37, $this->source); })()), "difficulte", [], "any", false, false, false, 37), "html", null, true);
        yield "</dd>

                            <dt class=\"col-sm-4 fw-bold text-dark\">Score minimum</dt>
                            <dd class=\"col-sm-8 text-dark\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 40, $this->source); })()), "seuilScoreMin", [], "any", false, false, false, 40), "html", null, true);
        yield "</dd>

                            <dt class=\"col-sm-4 fw-bold text-dark\">Score maximum</dt>
                            <dd class=\"col-sm-8 text-dark\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 43, $this->source); })()), "seuilScoreMax", [], "any", false, false, false, 43), "html", null, true);
        yield "</dd>
                        </dl>

                        <!-- Description -->
                        <div class=\"mt-4\">
                            <h5 class=\"fw-bold text-dark mb-2\">Description :</h5>
                            <p class=\"text-dark\" style=\"white-space: pre-wrap;\">";
        // line 49
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), "html", null, true));
        yield "</p>
                        </div>
                    </div>

                    <!-- Colonne droite : image -->
                    <div class=\"col-lg-6 text-center\">
                        ";
        // line 55
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 55, $this->source); })()), "imageCouverture", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/niveaux/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 56, $this->source); })()), "imageCouverture", [], "any", false, false, false, 56))), "html", null, true);
            yield "\" alt=\"Image de couverture\" class=\"img-fluid rounded-4 shadow-lg\" style=\"max-height: 380px; object-fit: cover;\">
                        ";
        } else {
            // line 58
            yield "                            <div class=\"bg-light rounded-4 p-5 text-muted d-flex align-items-center justify-content-center\" style=\"height: 380px;\">
                                <p class=\"fs-4\">Aucune image de couverture</p>
                            </div>
                        ";
        }
        // line 62
        yield "                    </div>
                </div>
            </div>
        </div>

        <!-- Boutons actions -->
        <div class=\"mt-5 d-flex flex-wrap gap-3 justify-content-center justify-content-md-end\">
            <a href=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-lg px-5 fw-bold shadow\">
                Modifier
            </a>
            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_index");
        yield "\" class=\"btn btn-secondary btn-lg px-5 fw-bold shadow\">
                Retour à la liste
            </a>
            <form method=\"post\" action=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce niveau ? Cette action est irréversible.');\" class=\"d-inline\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-danger btn-lg px-5 fw-bold shadow\">
                    Supprimer
                </button>
            </form>
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
        return "niveau/show.html.twig";
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
        return array (  220 => 76,  216 => 75,  210 => 72,  204 => 69,  195 => 62,  189 => 58,  183 => 56,  181 => 55,  172 => 49,  163 => 43,  157 => 40,  151 => 37,  145 => 34,  139 => 31,  133 => 28,  116 => 16,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Niveau : {{ niveau.titre }}{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #5b21b6 100%); min-height: 100vh; padding: 100px 20px 60px; color: #000000;\">
<br><br><br><br>
    <div class=\"container\" style=\"max-width: 1000px;\">

        <!-- Titre principal -->
        <div class=\"text-center mb-5\">
            <h1 class=\"fw-bold\" style=\"font-size: 3rem; color: #000000; text-shadow: 0 4px 12px rgba(0,0,0,0.2);\">
                Niveau : {{ niveau.titre }}
            </h1>
            <p class=\"text-secondary mt-2\" style=\"font-size: 1.3rem;\">
                {{ niveau.IdLangue.nom }} • Ordre {{ niveau.ordre }}
            </p>
        </div>

        <!-- Carte détails -->
        <div class=\"card shadow-xl border-0 rounded-4 overflow-hidden\" style=\"background: rgba(255,255,255,0.98); backdrop-filter: blur(10px);\">
            <div class=\"card-body p-5\">
                <div class=\"row g-5\">
                    <!-- Colonne gauche : infos texte -->
                    <div class=\"col-lg-6\">
                        <dl class=\"row g-3\">
                            <dt class=\"col-sm-4 fw-bold text-dark\">Langue</dt>
                            <dd class=\"col-sm-8 text-dark\">{{ niveau.IdLangue.nom }}</dd>

                            <dt class=\"col-sm-4 fw-bold text-dark\">Titre</dt>
                            <dd class=\"col-sm-8 text-dark fw-bold\">{{ niveau.titre }}</dd>

                            <dt class=\"col-sm-4 fw-bold text-dark\">Ordre</dt>
                            <dd class=\"col-sm-8 text-dark\">{{ niveau.ordre }}</dd>

                            <dt class=\"col-sm-4 fw-bold text-dark\">Difficulté</dt>
                            <dd class=\"col-sm-8 text-dark\">{{ niveau.difficulte }}</dd>

                            <dt class=\"col-sm-4 fw-bold text-dark\">Score minimum</dt>
                            <dd class=\"col-sm-8 text-dark\">{{ niveau.seuilScoreMin }}</dd>

                            <dt class=\"col-sm-4 fw-bold text-dark\">Score maximum</dt>
                            <dd class=\"col-sm-8 text-dark\">{{ niveau.seuilScoreMax }}</dd>
                        </dl>

                        <!-- Description -->
                        <div class=\"mt-4\">
                            <h5 class=\"fw-bold text-dark mb-2\">Description :</h5>
                            <p class=\"text-dark\" style=\"white-space: pre-wrap;\">{{ niveau.description|nl2br }}</p>
                        </div>
                    </div>

                    <!-- Colonne droite : image -->
                    <div class=\"col-lg-6 text-center\">
                        {% if niveau.imageCouverture %}
                            <img src=\"{{ asset('uploads/niveaux/' ~ niveau.imageCouverture) }}\" alt=\"Image de couverture\" class=\"img-fluid rounded-4 shadow-lg\" style=\"max-height: 380px; object-fit: cover;\">
                        {% else %}
                            <div class=\"bg-light rounded-4 p-5 text-muted d-flex align-items-center justify-content-center\" style=\"height: 380px;\">
                                <p class=\"fs-4\">Aucune image de couverture</p>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        <!-- Boutons actions -->
        <div class=\"mt-5 d-flex flex-wrap gap-3 justify-content-center justify-content-md-end\">
            <a href=\"{{ path('app_niveau_edit', {'id': niveau.id}) }}\" class=\"btn btn-warning btn-lg px-5 fw-bold shadow\">
                Modifier
            </a>
            <a href=\"{{ path('app_niveau_index') }}\" class=\"btn btn-secondary btn-lg px-5 fw-bold shadow\">
                Retour à la liste
            </a>
            <form method=\"post\" action=\"{{ path('app_niveau_delete', {'id': niveau.id}) }}\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce niveau ? Cette action est irréversible.');\" class=\"d-inline\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ niveau.id) }}\">
                <button type=\"submit\" class=\"btn btn-danger btn-lg px-5 fw-bold shadow\">
                    Supprimer
                </button>
            </form>
        </div>

    </div>
</div>
{% endblock %}", "niveau/show.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\niveau\\show.html.twig");
    }
}
