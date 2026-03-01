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
class __TwigTemplate_77b886e41f5e1e0333469e4a50634a6b extends Template
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
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-eye text-info me-2\"></i>
                        Détails du niveau : ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13), "html", null, true);
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 16, $this->source); })()), "IdLangue", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
        yield " • Ordre ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 16, $this->source); })()), "ordre", [], "any", false, false, false, 16), "html", null, true);
        yield "
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto d-flex gap-3\">
                <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
                <a href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
        yield "\" class=\"btn btn-warning px-4\">
                    <i class=\"feather-edit-2 me-2\"></i> Modifier
                </a>
            </div>
        </div>
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
                            <div class=\"col-lg-6\">
                                <div class=\"row g-4\">
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">ID</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Langue</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 48, $this->source); })()), "IdLangue", [], "any", false, false, false, 48), "nom", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Titre</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 52, $this->source); })()), "titre", [], "any", false, false, false, 52), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Ordre</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 56, $this->source); })()), "ordre", [], "any", false, false, false, 56), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Difficulté</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 60, $this->source); })()), "difficulte", [], "any", false, false, false, 60), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Score minimum</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 64, $this->source); })()), "seuilScoreMin", [], "any", false, false, false, 64), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6\">
                                        <strong class=\"d-block text-muted small\">Score maximum</strong>
                                        <p class=\"mb-0 fw-medium\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 68, $this->source); })()), "seuilScoreMax", [], "any", false, false, false, 68), "html", null, true);
        yield "</p>
                                    </div>
                                </div>

                                <div class=\"mt-5\">
                                    <h6 class=\"fw-bold text-dark mb-3\">Description :</h6>
                                    <p class=\"text-dark lh-lg\" style=\"white-space: pre-wrap;\">
                                        ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 75, $this->source); })()), "description", [], "any", false, false, false, 75), "html", null, true)), "Aucune description disponible."), "html", null, true);
        yield "
                                    </p>
                                </div>
                            </div>

                            <div class=\"col-lg-6 text-center\">
                                ";
        // line 81
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 81, $this->source); })()), "imageCouverture", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/niveaux/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 82, $this->source); })()), "imageCouverture", [], "any", false, false, false, 82))), "html", null, true);
            yield "\" 
                                         alt=\"Couverture ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 83, $this->source); })()), "titre", [], "any", false, false, false, 83), "html", null, true);
            yield "\" 
                                         class=\"img-fluid rounded-4 shadow-lg\" 
                                         style=\"max-height: 380px; object-fit: cover; border: 1px solid rgba(0,0,0,0.1);\">
                                ";
        } else {
            // line 87
            yield "                                    <div class=\"bg-light rounded-4 p-5 d-flex align-items-center justify-content-center shadow\" style=\"height: 380px;\">
                                        <p class=\"text-muted fs-4\">Aucune image de couverture</p>
                                    </div>
                                ";
        }
        // line 91
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"text-center mt-5 pt-4\">
            <div class=\"btn-group btn-group-lg\">
                <a href=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                    <i class=\"feather-edit-2 me-2\"></i> Modifier ce niveau
                </a>
                <form method=\"post\" action=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
        yield "\" 
                      onsubmit=\"return confirm('Supprimer ce niveau ? Cette action est irréversible.');\" 
                      class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106))), "html", null, true);
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
        return array (  259 => 106,  253 => 103,  247 => 100,  236 => 91,  230 => 87,  223 => 83,  218 => 82,  216 => 81,  207 => 75,  197 => 68,  190 => 64,  183 => 60,  176 => 56,  169 => 52,  162 => 48,  155 => 44,  132 => 24,  126 => 21,  116 => 16,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Détails du niveau : {{ niveau.titre }}{% endblock %}

{% block body %}

    <div class=\"nxl-content\">
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

                                <div class=\"mt-5\">
                                    <h6 class=\"fw-bold text-dark mb-3\">Description :</h6>
                                    <p class=\"text-dark lh-lg\" style=\"white-space: pre-wrap;\">
                                        {{ niveau.description|nl2br|default('Aucune description disponible.') }}
                                    </p>
                                </div>
                            </div>

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

{% endblock %}", "niveau/show.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\niveau\\show.html.twig");
    }
}
