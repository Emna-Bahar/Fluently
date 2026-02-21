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

/* objectif/show.html.twig */
class __TwigTemplate_21bbf066615619828d24dbe367e30233 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - Fluently";
        
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
                <h1 class=\"mb-2 bread\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span class=\"mr-2\"><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\">Objectifs <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Détails</span>
                </p>
            </div>
        </div>
    </div>
</section>

";
        // line 24
        yield "<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 28
        yield "            <div class=\"col-lg-8\">
                ";
        // line 30
        yield "                <div class=\"card border-0 shadow-lg mb-4\" style=\"border-radius: 15px;\">
                    <div class=\"card-header bg-gradient text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px 15px 0 0; padding: 2rem;\">
                        <h3 class=\"mb-0\">
                            <i class=\"fa fa-bullseye\"></i> ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 33, $this->source); })()), "titre", [], "any", false, false, false, 33), "html", null, true);
        yield "
                        </h3>
                    </div>
                    <div class=\"card-body p-4\">
                        ";
        // line 38
        yield "                        <div class=\"mb-4\">
                            <h5 class=\"text-primary mb-3\">
                                <i class=\"fa fa-align-left\"></i> Description
                            </h5>
                            <p class=\"lead text-muted\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), "html", null, true);
        yield "</p>
                        </div>

                        <hr class=\"my-4\">

                        ";
        // line 48
        yield "                        <div class=\"row\">
                            <div class=\"col-md-6 mb-4\">
                                <div class=\"info-box p-3\" style=\"background: #f8f9fa; border-radius: 10px;\">
                                    <h6 class=\"text-muted mb-2\">
                                        <i class=\"fa fa-calendar text-primary\"></i> Date de début
                                    </h6>
                                    <p class=\"h5 mb-0\">";
        // line 54
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 54, $this->source); })()), "dateDeb", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 54, $this->source); })()), "dateDeb", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "</p>
                                </div>
                            </div>
                            
                            <div class=\"col-md-6 mb-4\">
                                <div class=\"info-box p-3\" style=\"background: #f8f9fa; border-radius: 10px;\">
                                    <h6 class=\"text-muted mb-2\">
                                        <i class=\"fa fa-calendar-check-o text-danger\"></i> Date de fin
                                    </h6>
                                    <p class=\"h5 mb-0\">";
        // line 63
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 63, $this->source); })()), "dateFin", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 63, $this->source); })()), "dateFin", [], "any", false, false, false, 63), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 mb-4\">
                                <div class=\"info-box p-3\" style=\"background: #f8f9fa; border-radius: 10px;\">
                                    <h6 class=\"text-muted mb-2\">
                                        <i class=\"fa fa-flag\"></i> Statut
                                    </h6>
                                    <p class=\"mb-0\">
                                        ";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 72, $this->source); })()), "statut", [], "any", false, false, false, 72) == "complete")) {
            // line 73
            yield "                                            <span class=\"badge badge-success p-2 h5 mb-0\">✓ Complété</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 74, $this->source); })()), "statut", [], "any", false, false, false, 74) == "en_cours")) {
            // line 75
            yield "                                            <span class=\"badge badge-primary p-2 h5 mb-0\">⟳ En cours</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 76
(isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 76, $this->source); })()), "statut", [], "any", false, false, false, 76) == "abandonne")) {
            // line 77
            yield "                                            <span class=\"badge badge-danger p-2 h5 mb-0\">✗ Abandonné</span>
                                        ";
        } else {
            // line 79
            yield "                                            <span class=\"badge badge-warning p-2 h5 mb-0\">⏸ En pause</span>
                                        ";
        }
        // line 81
        yield "                                    </p>
                                </div>
                            </div>
                            <div class=\"col-md-6 mb-4\">
                                <div class=\"info-box p-3\" style=\"background: #f8f9fa; border-radius: 10px;\">
                                    <h6 class=\"text-muted mb-2\">
                                        <i class=\"fa fa-user\"></i> Utilisateur
                                    </h6>
                                    <p class=\"h5 mb-0\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 89, $this->source); })()), "idUser", [], "any", false, false, false, 89), "prenom", [], "any", false, false, false, 89), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 89, $this->source); })()), "idUser", [], "any", false, false, false, 89), "nom", [], "any", false, false, false, 89), "html", null, true);
        yield "</p>
                                    <small class=\"text-muted\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 90, $this->source); })()), "idUser", [], "any", false, false, false, 90), "email", [], "any", false, false, false, 90), "html", null, true);
        yield "</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 98
        yield "                <div class=\"card border-0 shadow-lg\" style=\"border-radius: 15px;\">
                    <div class=\"card-header bg-success text-white\" style=\"border-radius: 15px 15px 0 0; padding: 1.5rem;\">
                        <h5 class=\"mb-0\">
                            <i class=\"fa fa-tasks\"></i> Tâches associées (";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 101, $this->source); })()), "taches", [], "any", false, false, false, 101)), "html", null, true);
        yield ")
                        </h5>
                    </div>
                    <div class=\"card-body p-0\">
                        ";
        // line 105
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 105, $this->source); })()), "taches", [], "any", false, false, false, 105))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                            <div class=\"list-group list-group-flush\">
                                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 107, $this->source); })()), "taches", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
                // line 108
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 108)]), "html", null, true);
                yield "\" class=\"list-group-item list-group-item-action\">
                                        <div class=\"d-flex w-100 justify-content-between align-items-start\">
                                            <div>
                                                <h6 class=\"mb-1 font-weight-bold\">
                                                    <i class=\"fa fa-check-square-o text-success\"></i> ";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "titre", [], "any", false, false, false, 112), "html", null, true);
                yield "
                                                </h6>
                                                <p class=\"mb-2 text-muted\">";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "description", [], "any", false, false, false, 114), "html", null, true);
                yield "</p>
                                                <small class=\"text-muted\">
                                                    <i class=\"fa fa-clock-o\"></i> Échéance: ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateLimite", [], "any", false, false, false, 116), "d/m/Y"), "html", null, true);
                yield "
                                                </small>
                                            </div>
                                            <div class=\"text-right\">
                                                ";
                // line 120
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 120) == "urgente")) {
                    // line 121
                    yield "                                                    <span class=\"badge badge-danger mb-1\">🔥 Urgente</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 122
$context["tache"], "priorite", [], "any", false, false, false, 122) == "haute")) {
                    // line 123
                    yield "                                                    <span class=\"badge badge-warning mb-1\">⬆ Haute</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 124
$context["tache"], "priorite", [], "any", false, false, false, 124) == "moyenne")) {
                    // line 125
                    yield "                                                    <span class=\"badge badge-info mb-1\">➡ Moyenne</span>
                                                ";
                } else {
                    // line 127
                    yield "                                                    <span class=\"badge badge-secondary mb-1\">⬇ Basse</span>
                                                ";
                }
                // line 129
                yield "                                                <br>
                                                ";
                // line 130
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 130) == "terminee")) {
                    // line 131
                    yield "                                                    <span class=\"badge badge-success\">✓ Terminée</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 132
$context["tache"], "statut", [], "any", false, false, false, 132) == "en_cours")) {
                    // line 133
                    yield "                                                    <span class=\"badge badge-primary\">⟳ En cours</span>
                                                ";
                } else {
                    // line 135
                    yield "                                                    <span class=\"badge badge-secondary\">À faire</span>
                                                ";
                }
                // line 137
                yield "                                            </div>
                                        </div>
                                    </a>
                                    
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            yield "                            </div>
                        ";
        } else {
            // line 144
            yield "                            <div class=\"p-5 text-center\">
                                <i class=\"fa fa-inbox fa-3x text-muted mb-3\" style=\"opacity: 0.3;\"></i>
                                <p class=\"text-muted mb-3\">Aucune tâche associée à cet objectif.</p>
                                <a href=\"";
            // line 147
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_new");
            yield "\" class=\"btn btn-success\">
                                    <i class=\"fa fa-plus\"></i> Créer une tâche
                                </a>
                            </div>
                        ";
        }
        // line 152
        yield "                    </div>
                </div>
            </div>

            ";
        // line 157
        yield "            <div class=\"col-lg-4\">
                ";
        // line 159
        yield "                <div class=\"card border-0 shadow mb-4\" style=\"border-radius: 15px;\">
                    <div class=\"card-header bg-dark text-white\" style=\"border-radius: 15px 15px 0 0;\">
                        <h5 class=\"mb-0\"><i class=\"fa fa-cog\"></i> Actions</h5>
                    </div>
                    <div class=\"card-body p-3\">
                    <a href=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_index", ["objectif" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 164, $this->source); })()), "id", [], "any", false, false, false, 164)]), "html", null, true);
        yield "\" 
   class=\"btn btn-success btn-block mb-2\">
    <i class=\"fa fa-tasks\"></i> Consulter les tâches
</a>

                        <a href=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 169, $this->source); })()), "id", [], "any", false, false, false, 169)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-block mb-2\">
                            <i class=\"fa fa-edit\"></i> Modifier l'objectif
                        </a>
                        <button type=\"button\" class=\"btn btn-danger btn-block mb-3\" data-toggle=\"modal\" data-target=\"#deleteModal\">
                            <i class=\"fa fa-trash\"></i> Supprimer l'objectif
                        </button>
                        <hr>
                        <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\" class=\"btn btn-secondary btn-block\">
                            <i class=\"fa fa-arrow-left\"></i> Retour à la liste
                        </a>
                    </div>
                </div>

                ";
        // line 183
        yield "                <div class=\"card border-0 shadow\" style=\"border-radius: 15px;\">
                    <div class=\"card-header text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px 15px 0 0;\">
                        <h5 class=\"mb-0\"><i class=\"fa fa-bar-chart\"></i> Progression</h5>
                    </div>
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <div class=\"stat-circle mx-auto mb-2\" style=\"width: 100px; height: 100px; background: #f0f0f0; border-radius: 50%; display: flex; align-items: center; justify-content: center;\">
                                <h2 class=\"text-primary mb-0\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 190, $this->source); })()), "taches", [], "any", false, false, false, 190)), "html", null, true);
        yield "</h2>
                            </div>
                            <small class=\"text-muted\">Tâches totales</small>
                        </div>
                        
                        ";
        // line 195
        $context["completedTasks"] = 0;
        // line 196
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 196, $this->source); })()), "taches", [], "any", false, false, false, 196));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 197
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 197) == "terminee")) {
                // line 198
                yield "                                ";
                $context["completedTasks"] = ((isset($context["completedTasks"]) || array_key_exists("completedTasks", $context) ? $context["completedTasks"] : (function () { throw new RuntimeError('Variable "completedTasks" does not exist.', 198, $this->source); })()) + 1);
                // line 199
                yield "                            ";
            }
            // line 200
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        yield "                        
                        <div class=\"mb-4\">
                            <div class=\"stat-circle mx-auto mb-2\" style=\"width: 100px; height: 100px; background: #d4edda; border-radius: 50%; display: flex; align-items: center; justify-content: center;\">
                                <h2 class=\"text-success mb-0\">";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["completedTasks"]) || array_key_exists("completedTasks", $context) ? $context["completedTasks"] : (function () { throw new RuntimeError('Variable "completedTasks" does not exist.', 204, $this->source); })()), "html", null, true);
        yield "</h2>
                            </div>
                            <small class=\"text-muted\">Tâches terminées</small>
                        </div>
                        
                        ";
        // line 209
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 209, $this->source); })()), "taches", [], "any", false, false, false, 209)) > 0)) {
            // line 210
            yield "                            ";
            $context["progress"] = Twig\Extension\CoreExtension::round((((isset($context["completedTasks"]) || array_key_exists("completedTasks", $context) ? $context["completedTasks"] : (function () { throw new RuntimeError('Variable "completedTasks" does not exist.', 210, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 210, $this->source); })()), "taches", [], "any", false, false, false, 210))) * 100));
            // line 211
            yield "                            <div class=\"progress mb-3\" style=\"height: 25px; border-radius: 15px;\">
                                <div class=\"progress-bar bg-success progress-bar-striped progress-bar-animated\" 
                                     role=\"progressbar\" 
                                     style=\"width: ";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 214, $this->source); })()), "html", null, true);
            yield "%; font-size: 14px; font-weight: bold;\"
                                     aria-valuenow=\"";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 215, $this->source); })()), "html", null, true);
            yield "\" 
                                     aria-valuemin=\"0\" 
                                     aria-valuemax=\"100\">
                                    ";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 218, $this->source); })()), "html", null, true);
            yield "%
                                </div>
                            </div>
                            <small class=\"text-muted\">Taux de complétion</small>
                        ";
        }
        // line 223
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 231
        yield "<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\">
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
                <p>Êtes-vous sûr de vouloir supprimer cet objectif ?</p>
                <div class=\"alert alert-warning\">
                    <strong>Attention :</strong> Cette action supprimera également toutes les ";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 245, $this->source); })()), "taches", [], "any", false, false, false, 245)), "html", null, true);
        yield " tâches associées et ne peut pas être annulée.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i> Annuler
                </button>
                <form method=\"post\" action=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 252, $this->source); })()), "id", [], "any", false, false, false, 252)]), "html", null, true);
        yield "\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 253, $this->source); })()), "id", [], "any", false, false, false, 253))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fa fa-trash\"></i> Supprimer définitivement
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .list-group-item:hover {
        background-color: #f8f9fa;
        transform: translateX(5px);
        transition: all 0.3s ease;
    }
    .info-box {
        transition: all 0.3s ease;
    }
    .info-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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
        return "objectif/show.html.twig";
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
        return array (  515 => 253,  511 => 252,  501 => 245,  485 => 231,  476 => 223,  468 => 218,  462 => 215,  458 => 214,  453 => 211,  450 => 210,  448 => 209,  440 => 204,  435 => 201,  429 => 200,  426 => 199,  423 => 198,  420 => 197,  415 => 196,  413 => 195,  405 => 190,  396 => 183,  387 => 176,  377 => 169,  369 => 164,  362 => 159,  359 => 157,  353 => 152,  345 => 147,  340 => 144,  336 => 142,  326 => 137,  322 => 135,  318 => 133,  316 => 132,  313 => 131,  311 => 130,  308 => 129,  304 => 127,  300 => 125,  298 => 124,  295 => 123,  293 => 122,  290 => 121,  288 => 120,  281 => 116,  276 => 114,  271 => 112,  263 => 108,  259 => 107,  256 => 106,  254 => 105,  247 => 101,  242 => 98,  232 => 90,  226 => 89,  216 => 81,  212 => 79,  208 => 77,  206 => 76,  203 => 75,  201 => 74,  198 => 73,  196 => 72,  184 => 63,  172 => 54,  164 => 48,  156 => 42,  150 => 38,  143 => 33,  138 => 30,  135 => 28,  130 => 24,  119 => 15,  115 => 14,  110 => 12,  101 => 7,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ objectif.titre }} - Fluently{% endblock %}

{% block body %}
{# Hero Section #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_1.jpg') }}');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">{{ objectif.titre }}</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"{{ path('app_home') }}\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span class=\"mr-2\"><a href=\"{{ path('app_objectif_index') }}\">Objectifs <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Détails</span>
                </p>
            </div>
        </div>
    </div>
</section>

{# Main Content #}
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            {# Colonne principale #}
            <div class=\"col-lg-8\">
                {# Card Détails #}
                <div class=\"card border-0 shadow-lg mb-4\" style=\"border-radius: 15px;\">
                    <div class=\"card-header bg-gradient text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px 15px 0 0; padding: 2rem;\">
                        <h3 class=\"mb-0\">
                            <i class=\"fa fa-bullseye\"></i> {{ objectif.titre }}
                        </h3>
                    </div>
                    <div class=\"card-body p-4\">
                        {# Description #}
                        <div class=\"mb-4\">
                            <h5 class=\"text-primary mb-3\">
                                <i class=\"fa fa-align-left\"></i> Description
                            </h5>
                            <p class=\"lead text-muted\">{{ objectif.description }}</p>
                        </div>

                        <hr class=\"my-4\">

                        {# Informations #}
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-4\">
                                <div class=\"info-box p-3\" style=\"background: #f8f9fa; border-radius: 10px;\">
                                    <h6 class=\"text-muted mb-2\">
                                        <i class=\"fa fa-calendar text-primary\"></i> Date de début
                                    </h6>
                                    <p class=\"h5 mb-0\">{{ objectif.dateDeb ? objectif.dateDeb|date('d/m/Y') : 'Non définie' }}</p>
                                </div>
                            </div>
                            
                            <div class=\"col-md-6 mb-4\">
                                <div class=\"info-box p-3\" style=\"background: #f8f9fa; border-radius: 10px;\">
                                    <h6 class=\"text-muted mb-2\">
                                        <i class=\"fa fa-calendar-check-o text-danger\"></i> Date de fin
                                    </h6>
                                    <p class=\"h5 mb-0\">{{ objectif.dateFin ? objectif.dateFin|date('d/m/Y') : 'Non définie' }}</p>
                                </div>
                            </div>
                            <div class=\"col-md-6 mb-4\">
                                <div class=\"info-box p-3\" style=\"background: #f8f9fa; border-radius: 10px;\">
                                    <h6 class=\"text-muted mb-2\">
                                        <i class=\"fa fa-flag\"></i> Statut
                                    </h6>
                                    <p class=\"mb-0\">
                                        {% if objectif.statut == 'complete' %}
                                            <span class=\"badge badge-success p-2 h5 mb-0\">✓ Complété</span>
                                        {% elseif objectif.statut == 'en_cours' %}
                                            <span class=\"badge badge-primary p-2 h5 mb-0\">⟳ En cours</span>
                                        {% elseif objectif.statut == 'abandonne' %}
                                            <span class=\"badge badge-danger p-2 h5 mb-0\">✗ Abandonné</span>
                                        {% else %}
                                            <span class=\"badge badge-warning p-2 h5 mb-0\">⏸ En pause</span>
                                        {% endif %}
                                    </p>
                                </div>
                            </div>
                            <div class=\"col-md-6 mb-4\">
                                <div class=\"info-box p-3\" style=\"background: #f8f9fa; border-radius: 10px;\">
                                    <h6 class=\"text-muted mb-2\">
                                        <i class=\"fa fa-user\"></i> Utilisateur
                                    </h6>
                                    <p class=\"h5 mb-0\">{{ objectif.idUser.prenom }} {{ objectif.idUser.nom }}</p>
                                    <small class=\"text-muted\">{{ objectif.idUser.email }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {# Tâches associées #}
                <div class=\"card border-0 shadow-lg\" style=\"border-radius: 15px;\">
                    <div class=\"card-header bg-success text-white\" style=\"border-radius: 15px 15px 0 0; padding: 1.5rem;\">
                        <h5 class=\"mb-0\">
                            <i class=\"fa fa-tasks\"></i> Tâches associées ({{ objectif.taches|length }})
                        </h5>
                    </div>
                    <div class=\"card-body p-0\">
                        {% if objectif.taches is not empty %}
                            <div class=\"list-group list-group-flush\">
                                {% for tache in objectif.taches %}
                                    <a href=\"{{ path('app_tache_show', {'id': tache.id}) }}\" class=\"list-group-item list-group-item-action\">
                                        <div class=\"d-flex w-100 justify-content-between align-items-start\">
                                            <div>
                                                <h6 class=\"mb-1 font-weight-bold\">
                                                    <i class=\"fa fa-check-square-o text-success\"></i> {{ tache.titre }}
                                                </h6>
                                                <p class=\"mb-2 text-muted\">{{ tache.description }}</p>
                                                <small class=\"text-muted\">
                                                    <i class=\"fa fa-clock-o\"></i> Échéance: {{ tache.dateLimite|date('d/m/Y') }}
                                                </small>
                                            </div>
                                            <div class=\"text-right\">
                                                {% if tache.priorite == 'urgente' %}
                                                    <span class=\"badge badge-danger mb-1\">🔥 Urgente</span>
                                                {% elseif tache.priorite == 'haute' %}
                                                    <span class=\"badge badge-warning mb-1\">⬆ Haute</span>
                                                {% elseif tache.priorite == 'moyenne' %}
                                                    <span class=\"badge badge-info mb-1\">➡ Moyenne</span>
                                                {% else %}
                                                    <span class=\"badge badge-secondary mb-1\">⬇ Basse</span>
                                                {% endif %}
                                                <br>
                                                {% if tache.statut == 'terminee' %}
                                                    <span class=\"badge badge-success\">✓ Terminée</span>
                                                {% elseif tache.statut == 'en_cours' %}
                                                    <span class=\"badge badge-primary\">⟳ En cours</span>
                                                {% else %}
                                                    <span class=\"badge badge-secondary\">À faire</span>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </a>
                                    
                                {% endfor %}
                            </div>
                        {% else %}
                            <div class=\"p-5 text-center\">
                                <i class=\"fa fa-inbox fa-3x text-muted mb-3\" style=\"opacity: 0.3;\"></i>
                                <p class=\"text-muted mb-3\">Aucune tâche associée à cet objectif.</p>
                                <a href=\"{{ path('app_tache_new') }}\" class=\"btn btn-success\">
                                    <i class=\"fa fa-plus\"></i> Créer une tâche
                                </a>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            {# Sidebar #}
            <div class=\"col-lg-4\">
                {# Actions #}
                <div class=\"card border-0 shadow mb-4\" style=\"border-radius: 15px;\">
                    <div class=\"card-header bg-dark text-white\" style=\"border-radius: 15px 15px 0 0;\">
                        <h5 class=\"mb-0\"><i class=\"fa fa-cog\"></i> Actions</h5>
                    </div>
                    <div class=\"card-body p-3\">
                    <a href=\"{{ path('app_tache_index', {'objectif': objectif.id}) }}\" 
   class=\"btn btn-success btn-block mb-2\">
    <i class=\"fa fa-tasks\"></i> Consulter les tâches
</a>

                        <a href=\"{{ path('app_objectif_edit', {'id': objectif.id}) }}\" class=\"btn btn-warning btn-block mb-2\">
                            <i class=\"fa fa-edit\"></i> Modifier l'objectif
                        </a>
                        <button type=\"button\" class=\"btn btn-danger btn-block mb-3\" data-toggle=\"modal\" data-target=\"#deleteModal\">
                            <i class=\"fa fa-trash\"></i> Supprimer l'objectif
                        </button>
                        <hr>
                        <a href=\"{{ path('app_objectif_index') }}\" class=\"btn btn-secondary btn-block\">
                            <i class=\"fa fa-arrow-left\"></i> Retour à la liste
                        </a>
                    </div>
                </div>

                {# Statistiques #}
                <div class=\"card border-0 shadow\" style=\"border-radius: 15px;\">
                    <div class=\"card-header text-white\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 15px 15px 0 0;\">
                        <h5 class=\"mb-0\"><i class=\"fa fa-bar-chart\"></i> Progression</h5>
                    </div>
                    <div class=\"card-body text-center p-4\">
                        <div class=\"mb-4\">
                            <div class=\"stat-circle mx-auto mb-2\" style=\"width: 100px; height: 100px; background: #f0f0f0; border-radius: 50%; display: flex; align-items: center; justify-content: center;\">
                                <h2 class=\"text-primary mb-0\">{{ objectif.taches|length }}</h2>
                            </div>
                            <small class=\"text-muted\">Tâches totales</small>
                        </div>
                        
                        {% set completedTasks = 0 %}
                        {% for tache in objectif.taches %}
                            {% if tache.statut == 'terminee' %}
                                {% set completedTasks = completedTasks + 1 %}
                            {% endif %}
                        {% endfor %}
                        
                        <div class=\"mb-4\">
                            <div class=\"stat-circle mx-auto mb-2\" style=\"width: 100px; height: 100px; background: #d4edda; border-radius: 50%; display: flex; align-items: center; justify-content: center;\">
                                <h2 class=\"text-success mb-0\">{{ completedTasks }}</h2>
                            </div>
                            <small class=\"text-muted\">Tâches terminées</small>
                        </div>
                        
                        {% if objectif.taches|length > 0 %}
                            {% set progress = (completedTasks / objectif.taches|length * 100)|round %}
                            <div class=\"progress mb-3\" style=\"height: 25px; border-radius: 15px;\">
                                <div class=\"progress-bar bg-success progress-bar-striped progress-bar-animated\" 
                                     role=\"progressbar\" 
                                     style=\"width: {{ progress }}%; font-size: 14px; font-weight: bold;\"
                                     aria-valuenow=\"{{ progress }}\" 
                                     aria-valuemin=\"0\" 
                                     aria-valuemax=\"100\">
                                    {{ progress }}%
                                </div>
                            </div>
                            <small class=\"text-muted\">Taux de complétion</small>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{# Modal de suppression #}
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\">
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
                <p>Êtes-vous sûr de vouloir supprimer cet objectif ?</p>
                <div class=\"alert alert-warning\">
                    <strong>Attention :</strong> Cette action supprimera également toutes les {{ objectif.taches|length }} tâches associées et ne peut pas être annulée.
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

<style>
    .list-group-item:hover {
        background-color: #f8f9fa;
        transform: translateX(5px);
        transition: all 0.3s ease;
    }
    .info-box {
        transition: all 0.3s ease;
    }
    .info-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
</style>
{% endblock %}
", "objectif/show.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\objectif\\show.html.twig");
    }
}
