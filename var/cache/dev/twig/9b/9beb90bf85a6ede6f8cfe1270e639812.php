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
class __TwigTemplate_e0df56a1caa0e51fd9a0bc709b6d4dda extends Template
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
        return "dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau/show.html.twig"));

        $this->parent = $this->load("dashboard/index.html.twig", 1);
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

        yield "Détails du niveau : ";
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
        yield "
    <div class=\"nxl-content\">

        <!-- En-tête de page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-eye text-info me-2\"></i>
                        Détails du niveau : ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), "html", null, true);
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 18, $this->source); })()), "IdLangue", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
        yield " • Ordre ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 18, $this->source); })()), "ordre", [], "any", false, false, false, 18), "html", null, true);
        yield "
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto d-flex gap-3\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
                <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\" class=\"btn btn-warning px-4\">
                    <i class=\"feather-edit-2 me-2\"></i> Modifier
                </a>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-11 mx-auto\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-info text-white py-4 px-5\">
                        <h5 class=\"m-0 fw-bold\">
                            <i class=\"feather-info me-2\"></i> Informations du niveau
                        </h5>
                    </div>

                    <div class=\"card-body p-5\">
                        <div class=\"row g-5 align-items-center\">

                            <!-- Colonne gauche : détails texte -->
                            <div class=\"col-lg-6\">
                                <div class=\"row g-4\">
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">ID</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Langue</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 54, $this->source); })()), "IdLangue", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Titre</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 58, $this->source); })()), "titre", [], "any", false, false, false, 58), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Ordre</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 62, $this->source); })()), "ordre", [], "any", false, false, false, 62), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Difficulté</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 66, $this->source); })()), "difficulte", [], "any", false, false, false, 66), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Score minimum</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 70, $this->source); })()), "seuilScoreMin", [], "any", false, false, false, 70), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Score maximum</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 74, $this->source); })()), "seuilScoreMax", [], "any", false, false, false, 74), "html", null, true);
        yield "</p>
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class=\"mt-5\">
                                    <h6 class=\"fw-bold text-dark mb-3\">Description :</h6>
                                    <p class=\"text-dark lh-lg\" style=\"white-space: pre-wrap;\">
                                        ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), "html", null, true)), "Aucune description disponible."), "html", null, true);
        yield "
                                    </p>
                                </div>
                            </div>

                            <!-- Colonne droite : image de couverture -->
                            <div class=\"col-lg-6 text-center\">
                                ";
        // line 89
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 89, $this->source); })()), "imageCouverture", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/niveaux/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 90, $this->source); })()), "imageCouverture", [], "any", false, false, false, 90))), "html", null, true);
            yield "\" 
                                         alt=\"Couverture ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 91, $this->source); })()), "titre", [], "any", false, false, false, 91), "html", null, true);
            yield "\" 
                                         class=\"img-fluid rounded-4 shadow-lg\" 
                                         style=\"max-height: 380px; object-fit: cover; border: 1px solid rgba(0,0,0,0.1);\">
                                ";
        } else {
            // line 95
            yield "                                    <div class=\"bg-light rounded-4 p-5 d-flex align-items-center justify-content-center shadow\" style=\"height: 380px;\">
                                        <p class=\"text-muted fs-4\">Aucune image de couverture</p>
                                    </div>
                                ";
        }
        // line 99
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions admin -->
        <div class=\"text-center mt-5 pt-4\">
            <div class=\"btn-group btn-group-lg\">
                <a href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                    <i class=\"feather-edit-2 me-2\"></i> Modifier ce niveau
                </a>
                <form method=\"post\" action=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112)]), "html", null, true);
        yield "\" 
                      onsubmit=\"return confirm('Supprimer ce niveau ? Cette action est irréversible.');\" 
                      class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"feather-trash-2 me-2\"></i> Supprimer
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
        return array (  268 => 115,  262 => 112,  256 => 109,  244 => 99,  238 => 95,  231 => 91,  226 => 90,  224 => 89,  214 => 82,  203 => 74,  196 => 70,  189 => 66,  182 => 62,  175 => 58,  168 => 54,  161 => 50,  134 => 26,  128 => 23,  118 => 18,  112 => 15,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Détails du niveau : {{ niveau.titre }}{% endblock %}

{% block body %}

    <div class=\"nxl-content\">

        <!-- En-tête de page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-eye text-info me-2\"></i>
                        Détails du niveau : {{ niveau.titre }}
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        {{ niveau.IdLangue.nom }} • Ordre {{ niveau.ordre }}
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto d-flex gap-3\">
                <a href=\"{{ path('app_niveau_index') }}\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
                <a href=\"{{ path('app_niveau_edit', {'id': niveau.id}) }}\" class=\"btn btn-warning px-4\">
                    <i class=\"feather-edit-2 me-2\"></i> Modifier
                </a>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-11 mx-auto\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-info text-white py-4 px-5\">
                        <h5 class=\"m-0 fw-bold\">
                            <i class=\"feather-info me-2\"></i> Informations du niveau
                        </h5>
                    </div>

                    <div class=\"card-body p-5\">
                        <div class=\"row g-5 align-items-center\">

                            <!-- Colonne gauche : détails texte -->
                            <div class=\"col-lg-6\">
                                <div class=\"row g-4\">
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">ID</strong>
                                        <p class=\"mb-0 fw-medium\">{{ niveau.id }}</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Langue</strong>
                                        <p class=\"mb-0 fw-medium\">{{ niveau.IdLangue.nom }}</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Titre</strong>
                                        <p class=\"mb-0 fw-medium\">{{ niveau.titre }}</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Ordre</strong>
                                        <p class=\"mb-0 fw-medium\">{{ niveau.ordre }}</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Difficulté</strong>
                                        <p class=\"mb-0 fw-medium\">{{ niveau.difficulte }}</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Score minimum</strong>
                                        <p class=\"mb-0 fw-medium\">{{ niveau.seuilScoreMin }}</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Score maximum</strong>
                                        <p class=\"mb-0 fw-medium\">{{ niveau.seuilScoreMax }}</p>
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class=\"mt-5\">
                                    <h6 class=\"fw-bold text-dark mb-3\">Description :</h6>
                                    <p class=\"text-dark lh-lg\" style=\"white-space: pre-wrap;\">
                                        {{ niveau.description|nl2br|default('Aucune description disponible.') }}
                                    </p>
                                </div>
                            </div>

                            <!-- Colonne droite : image de couverture -->
                            <div class=\"col-lg-6 text-center\">
                                {% if niveau.imageCouverture %}
                                    <img src=\"{{ asset('uploads/niveaux/' ~ niveau.imageCouverture) }}\" 
                                         alt=\"Couverture {{ niveau.titre }}\" 
                                         class=\"img-fluid rounded-4 shadow-lg\" 
                                         style=\"max-height: 380px; object-fit: cover; border: 1px solid rgba(0,0,0,0.1);\">
                                {% else %}
                                    <div class=\"bg-light rounded-4 p-5 d-flex align-items-center justify-content-center shadow\" style=\"height: 380px;\">
                                        <p class=\"text-muted fs-4\">Aucune image de couverture</p>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions admin -->
        <div class=\"text-center mt-5 pt-4\">
            <div class=\"btn-group btn-group-lg\">
                <a href=\"{{ path('app_niveau_edit', {'id': niveau.id}) }}\" class=\"btn btn-warning\">
                    <i class=\"feather-edit-2 me-2\"></i> Modifier ce niveau
                </a>
                <form method=\"post\" action=\"{{ path('app_niveau_delete', {'id': niveau.id}) }}\" 
                      onsubmit=\"return confirm('Supprimer ce niveau ? Cette action est irréversible.');\" 
                      class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ niveau.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"feather-trash-2 me-2\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>

    </div>

{% endblock %}", "niveau/show.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\niveau\\show.html.twig");
    }
}
