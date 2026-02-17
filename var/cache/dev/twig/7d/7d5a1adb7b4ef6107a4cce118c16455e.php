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

/* objectif/index.html.twig */
class __TwigTemplate_e69b33dc8090d97e5c795a0b4f4221dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/index.html.twig"));

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

        yield "Nos Objectifs - Fluently";
        
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

        // line 7
        yield "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_1.jpg"), "html", null, true);
        yield "');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Mes Objectifs d'Apprentissage</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Objectifs</span>
                </p>
            </div>
        </div>
    </div>
</section>

";
        // line 23
        yield "<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        ";
        // line 26
        yield "        <div class=\"row mb-5\">
            <div class=\"col-md-8\">
                <h2 class=\"heading-section\">Gérez vos objectifs</h2>
                <p class=\"text-muted\">Suivez votre progression et atteignez vos objectifs d'apprentissage</p>
            </div>
            <div class=\"col-md-4 text-right\">
                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_new");
        yield "\" class=\"btn btn-primary btn-lg shadow\">
                    <i class=\"fa fa-plus-circle\"></i> Nouvel Objectif
                </a>
            </div>
        </div>

        ";
        // line 38
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 38, $this->source); })()))) {
            // line 39
            yield "            ";
            // line 40
            yield "            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card border-0 shadow-lg text-center p-5\" style=\"border-radius: 15px;\">
                        <div class=\"card-body\">
                            <i class=\"fa fa-bullseye fa-5x text-primary mb-4\" style=\"opacity: 0.3;\"></i>
                            <h3 class=\"mb-3\">Aucun objectif pour le moment</h3>
                            <p class=\"text-muted mb-4\">Commencez votre parcours d'apprentissage en définissant votre premier objectif !</p>
                            <a href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_new");
            yield "\" class=\"btn btn-primary btn-lg\">
                                <i class=\"fa fa-plus-circle\"></i> Créer mon premier objectif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 55
            yield "            ";
            // line 56
            yield "            <div class=\"row\">
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["objectif"]) {
                // line 58
                yield "                    <div class=\"col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated\">
                        <div class=\"card h-100 border-0 shadow-sm hover-card\" style=\"border-radius: 15px; overflow: hidden;\">
                            ";
                // line 61
                yield "                            <div class=\"card-header text-white 
                                ";
                // line 62
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 62) == "complete")) {
                    yield "bg-success";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 62) == "en_cours")) {
                    yield "bg-primary";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 62) == "abandonne")) {
                    yield "bg-danger";
                } else {
                    yield "bg-warning";
                }
                yield "\" 
                                style=\"padding: 1.5rem;\">
                                <div class=\"d-flex justify-content-between align-items-start\">
                                    <h5 class=\"card-title mb-0 font-weight-bold\">";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "titre", [], "any", false, false, false, 65), "html", null, true);
                yield "</h5>
                                    ";
                // line 66
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 66) == "complete")) {
                    // line 67
                    yield "                                        <i class=\"fa fa-check-circle fa-2x\"></i>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 68
$context["objectif"], "statut", [], "any", false, false, false, 68) == "en_cours")) {
                    // line 69
                    yield "                                        <i class=\"fa fa-spinner fa-2x\"></i>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 70
$context["objectif"], "statut", [], "any", false, false, false, 70) == "abandonne")) {
                    // line 71
                    yield "                                        <i class=\"fa fa-times-circle fa-2x\"></i>
                                    ";
                } else {
                    // line 73
                    yield "                                        <i class=\"fa fa-pause-circle fa-2x\"></i>
                                    ";
                }
                // line 75
                yield "                                </div>
                            </div>
                            
                            <div class=\"card-body p-4\">
                                ";
                // line 80
                yield "                                <p class=\"card-text text-muted mb-3\">
                                    ";
                // line 81
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "description", [], "any", false, false, false, 81)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "description", [], "any", false, false, false, 81), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "description", [], "any", false, false, false, 81), "html", null, true)));
                yield "
                                </p>
                                
                                ";
                // line 85
                yield "                                <div class=\"mb-3\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <i class=\"fa fa-calendar text-primary mr-2\"></i>
                                        <small class=\"text-muted\">
                                            <strong>Début:</strong> ";
                // line 89
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateDeb", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateDeb", [], "any", false, false, false, 89), "d/m/Y"), "html", null, true)) : ("Non défini"));
                yield "
                                        </small>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fa fa-calendar-check-o text-danger mr-2\"></i>
                                        <small class=\"text-muted\">
                                            <strong>Fin:</strong> ";
                // line 95
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateFin", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateFin", [], "any", false, false, false, 95), "d/m/Y"), "html", null, true)) : ("Non défini"));
                yield "
                                        </small>
                                    </div>
                                </div>

                                ";
                // line 101
                yield "                                <div class=\"mb-3 pb-3 border-bottom\">
                                    <i class=\"fa fa-user text-muted mr-2\"></i>
                                    <small class=\"text-muted\">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "idUser", [], "any", false, false, false, 103), "prenom", [], "any", false, false, false, 103), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "idUser", [], "any", false, false, false, 103), "nom", [], "any", false, false, false, 103), "html", null, true);
                yield "</small>
                                </div>

                                ";
                // line 107
                yield "                                <div class=\"mb-3\">
                                    ";
                // line 108
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 108) == "complete")) {
                    // line 109
                    yield "                                        <span class=\"badge badge-success badge-pill p-2\">✓ Complété</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 110
$context["objectif"], "statut", [], "any", false, false, false, 110) == "en_cours")) {
                    // line 111
                    yield "                                        <span class=\"badge badge-primary badge-pill p-2\">⟳ En cours</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 112
$context["objectif"], "statut", [], "any", false, false, false, 112) == "abandonne")) {
                    // line 113
                    yield "                                        <span class=\"badge badge-danger badge-pill p-2\">✗ Abandonné</span>
                                    ";
                } else {
                    // line 115
                    yield "                                        <span class=\"badge badge-warning badge-pill p-2\">⏸ En pause</span>
                                    ";
                }
                // line 117
                yield "                                </div>

                                ";
                // line 120
                yield "                                <div class=\"btn-group d-flex\" role=\"group\">
                                    <a href=\"";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 121)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-info btn-sm flex-fill\" title=\"Voir les détails\">
                                        <i class=\"fa fa-eye\"></i> Voir
                                    </a>
                                    <a href=\"";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 125)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-warning btn-sm flex-fill\" title=\"Modifier\">
                                        <i class=\"fa fa-edit\"></i> Modifier
                                    </a>
                                    <button type=\"button\" class=\"btn btn-danger btn-sm flex-fill\" 
                                            data-toggle=\"modal\" data-target=\"#deleteModal";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 130), "html", null, true);
                yield "\" title=\"Supprimer\">
                                        <i class=\"fa fa-trash\"></i> Supprimer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
                // line 139
                yield "                    <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 139), "html", null, true);
                yield "\" tabindex=\"-1\" role=\"dialog\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\" style=\"border-radius: 15px; border: none;\">
                                <div class=\"modal-header bg-danger text-white\" style=\"border-radius: 15px 15px 0 0;\">
                                    <h5 class=\"modal-title\">
                                        <i class=\"fa fa-exclamation-triangle\"></i> Confirmer la suppression
                                    </h5>
                                    <button type=\"button\" class=\"close text-white\" data-dismiss=\"modal\">
                                        <span>&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body p-4\">
                                    <p class=\"mb-2\">Êtes-vous sûr de vouloir supprimer l'objectif :</p>
                                    <p class=\"font-weight-bold text-primary\">\"";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "titre", [], "any", false, false, false, 152), "html", null, true);
                yield "\"</p>
                                    <div class=\"alert alert-warning mt-3\">
                                        <i class=\"fa fa-warning\"></i> <small>Cette action est irréversible et supprimera toutes les tâches associées.</small>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                                        <i class=\"fa fa-times\"></i> Annuler
                                    </button>
                                    <form method=\"post\" action=\"";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 161)]), "html", null, true);
                yield "\" style=\"display: inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 162))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger\">
                                            <i class=\"fa fa-trash\"></i> Supprimer définitivement
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['objectif'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            yield "            </div>
        ";
        }
        // line 174
        yield "    </div>
</section>

<style>
    .hover-card {
        transition: all 0.3s ease;
    }
    .hover-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15) !important;
    }
    .badge-pill {
        font-size: 0.85rem;
    }
    .btn-group .btn {
        border-radius: 0;
    }
    .btn-group .btn:first-child {
        border-radius: 0.25rem 0 0 0.25rem;
    }
    .btn-group .btn:last-child {
        border-radius: 0 0.25rem 0.25rem 0;
    }
</style>
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
        return "objectif/index.html.twig";
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
        return array (  380 => 174,  376 => 172,  360 => 162,  356 => 161,  344 => 152,  327 => 139,  316 => 130,  308 => 125,  301 => 121,  298 => 120,  294 => 117,  290 => 115,  286 => 113,  284 => 112,  281 => 111,  279 => 110,  276 => 109,  274 => 108,  271 => 107,  263 => 103,  259 => 101,  251 => 95,  242 => 89,  236 => 85,  230 => 81,  227 => 80,  221 => 75,  217 => 73,  213 => 71,  211 => 70,  208 => 69,  206 => 68,  203 => 67,  201 => 66,  197 => 65,  183 => 62,  180 => 61,  176 => 58,  172 => 57,  169 => 56,  167 => 55,  156 => 47,  147 => 40,  145 => 39,  143 => 38,  134 => 32,  126 => 26,  122 => 23,  111 => 14,  100 => 7,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos Objectifs - Fluently{% endblock %}

{% block body %}
{# Hero Section #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_1.jpg') }}');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Mes Objectifs d'Apprentissage</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"{{ path('app_home') }}\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Objectifs</span>
                </p>
            </div>
        </div>
    </div>
</section>

{# Main Content #}
<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        {# Header avec bouton #}
        <div class=\"row mb-5\">
            <div class=\"col-md-8\">
                <h2 class=\"heading-section\">Gérez vos objectifs</h2>
                <p class=\"text-muted\">Suivez votre progression et atteignez vos objectifs d'apprentissage</p>
            </div>
            <div class=\"col-md-4 text-right\">
                <a href=\"{{ path('app_objectif_new') }}\" class=\"btn btn-primary btn-lg shadow\">
                    <i class=\"fa fa-plus-circle\"></i> Nouvel Objectif
                </a>
            </div>
        </div>

        {% if objectifs is empty %}
            {# État vide #}
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card border-0 shadow-lg text-center p-5\" style=\"border-radius: 15px;\">
                        <div class=\"card-body\">
                            <i class=\"fa fa-bullseye fa-5x text-primary mb-4\" style=\"opacity: 0.3;\"></i>
                            <h3 class=\"mb-3\">Aucun objectif pour le moment</h3>
                            <p class=\"text-muted mb-4\">Commencez votre parcours d'apprentissage en définissant votre premier objectif !</p>
                            <a href=\"{{ path('app_objectif_new') }}\" class=\"btn btn-primary btn-lg\">
                                <i class=\"fa fa-plus-circle\"></i> Créer mon premier objectif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            {# Liste des objectifs en cartes #}
            <div class=\"row\">
                {% for objectif in objectifs %}
                    <div class=\"col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated\">
                        <div class=\"card h-100 border-0 shadow-sm hover-card\" style=\"border-radius: 15px; overflow: hidden;\">
                            {# Header coloré selon le statut #}
                            <div class=\"card-header text-white 
                                {% if objectif.statut == 'complete' %}bg-success{% elseif objectif.statut == 'en_cours' %}bg-primary{% elseif objectif.statut == 'abandonne' %}bg-danger{% else %}bg-warning{% endif %}\" 
                                style=\"padding: 1.5rem;\">
                                <div class=\"d-flex justify-content-between align-items-start\">
                                    <h5 class=\"card-title mb-0 font-weight-bold\">{{ objectif.titre }}</h5>
                                    {% if objectif.statut == 'complete' %}
                                        <i class=\"fa fa-check-circle fa-2x\"></i>
                                    {% elseif objectif.statut == 'en_cours' %}
                                        <i class=\"fa fa-spinner fa-2x\"></i>
                                    {% elseif objectif.statut == 'abandonne' %}
                                        <i class=\"fa fa-times-circle fa-2x\"></i>
                                    {% else %}
                                        <i class=\"fa fa-pause-circle fa-2x\"></i>
                                    {% endif %}
                                </div>
                            </div>
                            
                            <div class=\"card-body p-4\">
                                {# Description #}
                                <p class=\"card-text text-muted mb-3\">
                                    {{ objectif.description|length > 100 ? objectif.description|slice(0, 100) ~ '...' : objectif.description }}
                                </p>
                                
                                {# Dates #}
                                <div class=\"mb-3\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <i class=\"fa fa-calendar text-primary mr-2\"></i>
                                        <small class=\"text-muted\">
                                            <strong>Début:</strong> {{ objectif.dateDeb ? objectif.dateDeb|date('d/m/Y') : 'Non défini' }}
                                        </small>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fa fa-calendar-check-o text-danger mr-2\"></i>
                                        <small class=\"text-muted\">
                                            <strong>Fin:</strong> {{ objectif.dateFin ? objectif.dateFin|date('d/m/Y') : 'Non défini' }}
                                        </small>
                                    </div>
                                </div>

                                {# Utilisateur #}
                                <div class=\"mb-3 pb-3 border-bottom\">
                                    <i class=\"fa fa-user text-muted mr-2\"></i>
                                    <small class=\"text-muted\">{{ objectif.idUser.prenom }} {{ objectif.idUser.nom }}</small>
                                </div>

                                {# Badge de statut #}
                                <div class=\"mb-3\">
                                    {% if objectif.statut == 'complete' %}
                                        <span class=\"badge badge-success badge-pill p-2\">✓ Complété</span>
                                    {% elseif objectif.statut == 'en_cours' %}
                                        <span class=\"badge badge-primary badge-pill p-2\">⟳ En cours</span>
                                    {% elseif objectif.statut == 'abandonne' %}
                                        <span class=\"badge badge-danger badge-pill p-2\">✗ Abandonné</span>
                                    {% else %}
                                        <span class=\"badge badge-warning badge-pill p-2\">⏸ En pause</span>
                                    {% endif %}
                                </div>

                                {# Actions #}
                                <div class=\"btn-group d-flex\" role=\"group\">
                                    <a href=\"{{ path('app_objectif_show', {'id': objectif.id}) }}\" 
                                       class=\"btn btn-info btn-sm flex-fill\" title=\"Voir les détails\">
                                        <i class=\"fa fa-eye\"></i> Voir
                                    </a>
                                    <a href=\"{{ path('app_objectif_edit', {'id': objectif.id}) }}\" 
                                       class=\"btn btn-warning btn-sm flex-fill\" title=\"Modifier\">
                                        <i class=\"fa fa-edit\"></i> Modifier
                                    </a>
                                    <button type=\"button\" class=\"btn btn-danger btn-sm flex-fill\" 
                                            data-toggle=\"modal\" data-target=\"#deleteModal{{ objectif.id }}\" title=\"Supprimer\">
                                        <i class=\"fa fa-trash\"></i> Supprimer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {# Modal de suppression #}
                    <div class=\"modal fade\" id=\"deleteModal{{ objectif.id }}\" tabindex=\"-1\" role=\"dialog\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\" style=\"border-radius: 15px; border: none;\">
                                <div class=\"modal-header bg-danger text-white\" style=\"border-radius: 15px 15px 0 0;\">
                                    <h5 class=\"modal-title\">
                                        <i class=\"fa fa-exclamation-triangle\"></i> Confirmer la suppression
                                    </h5>
                                    <button type=\"button\" class=\"close text-white\" data-dismiss=\"modal\">
                                        <span>&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body p-4\">
                                    <p class=\"mb-2\">Êtes-vous sûr de vouloir supprimer l'objectif :</p>
                                    <p class=\"font-weight-bold text-primary\">\"{{ objectif.titre }}\"</p>
                                    <div class=\"alert alert-warning mt-3\">
                                        <i class=\"fa fa-warning\"></i> <small>Cette action est irréversible et supprimera toutes les tâches associées.</small>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                                        <i class=\"fa fa-times\"></i> Annuler
                                    </button>
                                    <form method=\"post\" action=\"{{ path('app_objectif_delete', {'id': objectif.id}) }}\" style=\"display: inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ objectif.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger\">
                                            <i class=\"fa fa-trash\"></i> Supprimer définitivement
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% endif %}
    </div>
</section>

<style>
    .hover-card {
        transition: all 0.3s ease;
    }
    .hover-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15) !important;
    }
    .badge-pill {
        font-size: 0.85rem;
    }
    .btn-group .btn {
        border-radius: 0;
    }
    .btn-group .btn:first-child {
        border-radius: 0.25rem 0 0 0.25rem;
    }
    .btn-group .btn:last-child {
        border-radius: 0 0.25rem 0.25rem 0;
    }
</style>
{% endblock %}
", "objectif/index.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\objectif\\index.html.twig");
    }
}
