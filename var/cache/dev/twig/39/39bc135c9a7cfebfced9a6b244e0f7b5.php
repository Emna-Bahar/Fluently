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

/* niveau/index.html.twig */
class __TwigTemplate_e1082151919ae1914e698b8035074634 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau/index.html.twig"));

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

        yield "Gestion des Niveaux - Admin";
        
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
                        <i class=\"feather-layers text-primary me-2\"></i>
                        Gestion des Niveaux
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        Créer, modifier ou supprimer les niveaux de difficulté
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_new");
        yield "\" class=\"btn btn-primary px-4\">
                    <i class=\"feather-plus me-2\"></i> Ajouter un niveau
                </a>
            </div>
        </div>

        <!-- Messages flash -->
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 31
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show mb-4 rounded-3\" role=\"alert\">
                    ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
        <!-- Filtres -->
        <div class=\"card border-0 shadow-sm mb-5\">
            <div class=\"card-body p-4\">
                <form method=\"get\" class=\"row g-4 align-items-end\">
                    <!-- Langue -->
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"langue\" class=\"form-label fw-bold\">Langue</label>
                        <select name=\"langue\" id=\"langue\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes les langues</option>
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["langues"]) || array_key_exists("langues", $context) ? $context["langues"] : (function () { throw new RuntimeError('Variable "langues" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            // line 49
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "query", [], "any", false, false, false, 49), "get", ["langue"], "method", false, false, false, 49) == CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 49))) {
                yield "selected";
            }
            yield ">
                                    ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "nom", [], "any", false, false, false, 50), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['langue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                        </select>
                    </div>

                    <!-- Difficulté -->
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"difficulte\" class=\"form-label fw-bold\">Difficulté</label>
                        <select name=\"difficulte\" id=\"difficulte\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes</option>
                            ";
        // line 61
        $context["difficultes"] = [];
        // line 62
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 63
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 63) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 63), (isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 63, $this->source); })())))) {
                // line 64
                yield "                                    ";
                $context["difficultes"] = Twig\Extension\CoreExtension::merge((isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 64, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 64)]);
                // line 65
                yield "                                ";
            }
            // line 66
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 67, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["diff"]) {
            // line 68
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["diff"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "query", [], "any", false, false, false, 68), "get", ["difficulte"], "method", false, false, false, 68) == $context["diff"])) {
                yield "selected";
            }
            yield ">
                                    ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["diff"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['diff'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                        </select>
                    </div>

                    <!-- Boutons filtres -->
                    <div class=\"col-lg-4 col-12 d-flex flex-wrap gap-3 justify-content-lg-end\">
                        <button type=\"submit\" class=\"btn btn-primary px-5\">
                            <i class=\"feather-filter me-2\"></i> Filtrer
                        </button>
                        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_index");
        yield "\" class=\"btn btn-outline-secondary px-5\">
                            Réinitialiser
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tableau des niveaux -->
        <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
            <div class=\"card-header bg-light border-bottom\">
                <h6 class=\"m-0 fw-bold\">
                    <i class=\"feather-list text-primary me-2\"></i>
                    Liste des niveaux
                </h6>
            </div>

            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead style=\"background-color: #2872e1; color: white;\">
                            <tr>
                                <th class=\"ps-4\">ID</th>
                                <th>Langue</th>
                                <th>Titre</th>
                                <th class=\"text-center\">Ordre</th>
                                <th>Difficulté</th>
                                <th class=\"text-center\">Image couverture</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 112, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 113
            yield "                            <tr>
                                <td class=\"ps-4 fw-medium\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "id", [], "any", false, false, false, 114), "html", null, true);
            yield "</td>
                                <td class=\"fw-medium\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 115), "nom", [], "any", false, false, false, 115), "html", null, true);
            yield "</td>
                                <td class=\"fw-medium\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "titre", [], "any", false, false, false, 116), "html", null, true);
            yield "</td>
                                <td class=\"text-center\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "ordre", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                                <td class=\"text-center\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 118), "html", null, true);
            yield "</td>
                                <td class=\"text-center\">
                                    ";
            // line 120
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "imageCouverture", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 121
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/niveaux/" . CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "imageCouverture", [], "any", false, false, false, 121))), "html", null, true);
                yield "\" 
                                             alt=\"Couverture ";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "titre", [], "any", false, false, false, 122), "html", null, true);
                yield "\" 
                                             class=\"rounded shadow-sm\" 
                                             style=\"max-width: 100px; height: auto;\">
                                    ";
            } else {
                // line 126
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 128
            yield "                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\" role=\"group\">
                                        <a href=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "id", [], "any", false, false, false, 131)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-info\" 
                                           data-bs-toggle=\"tooltip\" title=\"Voir\">
                                            <i class=\"feather-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-warning\" 
                                           data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                            <i class=\"feather-edit-2\"></i>
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "id", [], "any", false, false, false, 141)]), "html", null, true);
            yield "\" 
                                              onsubmit=\"return confirm('Supprimer ce niveau ? Cette action est irréversible.');\" 
                                              class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "id", [], "any", false, false, false, 144))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger\" 
                                                    data-bs-toggle=\"tooltip\" title=\"Supprimer\">
                                                <i class=\"feather-trash-2\"></i>
                                            </button>
                                        </form>
                                        <a href=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 150), "id", [], "any", false, false, false, 150)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-primary\" 
                                           data-bs-toggle=\"tooltip\" title=\"Voir la langue\">
                                            <i class=\"feather-globe\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 158
        if (!$context['_iterated']) {
            // line 159
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-5 text-muted\">
                                    <div class=\"d-flex flex-column align-items-center\">
                                        <i class=\"feather-layers fs-1 mb-3 text-muted\"></i>
                                        <h5 class=\"mb-3\">Aucun niveau trouvé</h5>
                                        <a href=\"";
            // line 164
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_new");
            yield "\" class=\"btn btn-primary\">
                                            <i class=\"feather-plus me-2\"></i> Ajouter un niveau
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        yield "                        </tbody>
                    </table>
                </div>
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
        return "niveau/index.html.twig";
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
        return array (  411 => 171,  398 => 164,  391 => 159,  389 => 158,  376 => 150,  367 => 144,  361 => 141,  353 => 136,  345 => 131,  340 => 128,  336 => 126,  329 => 122,  324 => 121,  322 => 120,  317 => 118,  313 => 117,  309 => 116,  305 => 115,  301 => 114,  298 => 113,  293 => 112,  258 => 80,  248 => 72,  239 => 69,  230 => 68,  225 => 67,  219 => 66,  216 => 65,  213 => 64,  210 => 63,  205 => 62,  203 => 61,  193 => 53,  184 => 50,  175 => 49,  171 => 48,  159 => 38,  153 => 37,  143 => 33,  138 => 32,  133 => 31,  129 => 30,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Gestion des Niveaux - Admin{% endblock %}

{% block body %}

    <div class=\"nxl-content\">

        <!-- En-tête de page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-layers text-primary me-2\"></i>
                        Gestion des Niveaux
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        Créer, modifier ou supprimer les niveaux de difficulté
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_niveau_new') }}\" class=\"btn btn-primary px-4\">
                    <i class=\"feather-plus me-2\"></i> Ajouter un niveau
                </a>
            </div>
        </div>

        <!-- Messages flash -->
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show mb-4 rounded-3\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        <!-- Filtres -->
        <div class=\"card border-0 shadow-sm mb-5\">
            <div class=\"card-body p-4\">
                <form method=\"get\" class=\"row g-4 align-items-end\">
                    <!-- Langue -->
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"langue\" class=\"form-label fw-bold\">Langue</label>
                        <select name=\"langue\" id=\"langue\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes les langues</option>
                            {% for langue in langues %}
                                <option value=\"{{ langue.id }}\" {% if app.request.query.get('langue') == langue.id %}selected{% endif %}>
                                    {{ langue.nom }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>

                    <!-- Difficulté -->
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"difficulte\" class=\"form-label fw-bold\">Difficulté</label>
                        <select name=\"difficulte\" id=\"difficulte\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes</option>
                            {% set difficultes = [] %}
                            {% for niveau in niveaux %}
                                {% if niveau.difficulte and niveau.difficulte not in difficultes %}
                                    {% set difficultes = difficultes|merge([niveau.difficulte]) %}
                                {% endif %}
                            {% endfor %}
                            {% for diff in difficultes|sort %}
                                <option value=\"{{ diff }}\" {% if app.request.query.get('difficulte') == diff %}selected{% endif %}>
                                    {{ diff }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>

                    <!-- Boutons filtres -->
                    <div class=\"col-lg-4 col-12 d-flex flex-wrap gap-3 justify-content-lg-end\">
                        <button type=\"submit\" class=\"btn btn-primary px-5\">
                            <i class=\"feather-filter me-2\"></i> Filtrer
                        </button>
                        <a href=\"{{ path('app_niveau_index') }}\" class=\"btn btn-outline-secondary px-5\">
                            Réinitialiser
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tableau des niveaux -->
        <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
            <div class=\"card-header bg-light border-bottom\">
                <h6 class=\"m-0 fw-bold\">
                    <i class=\"feather-list text-primary me-2\"></i>
                    Liste des niveaux
                </h6>
            </div>

            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead style=\"background-color: #2872e1; color: white;\">
                            <tr>
                                <th class=\"ps-4\">ID</th>
                                <th>Langue</th>
                                <th>Titre</th>
                                <th class=\"text-center\">Ordre</th>
                                <th>Difficulté</th>
                                <th class=\"text-center\">Image couverture</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for niveau in niveaux %}
                            <tr>
                                <td class=\"ps-4 fw-medium\">{{ niveau.id }}</td>
                                <td class=\"fw-medium\">{{ niveau.IdLangue.nom }}</td>
                                <td class=\"fw-medium\">{{ niveau.titre }}</td>
                                <td class=\"text-center\">{{ niveau.ordre }}</td>
                                <td class=\"text-center\">{{ niveau.difficulte }}</td>
                                <td class=\"text-center\">
                                    {% if niveau.imageCouverture %}
                                        <img src=\"{{ asset('uploads/niveaux/' ~ niveau.imageCouverture) }}\" 
                                             alt=\"Couverture {{ niveau.titre }}\" 
                                             class=\"rounded shadow-sm\" 
                                             style=\"max-width: 100px; height: auto;\">
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\" role=\"group\">
                                        <a href=\"{{ path('app_niveau_show', {'id': niveau.id}) }}\" 
                                           class=\"btn btn-info\" 
                                           data-bs-toggle=\"tooltip\" title=\"Voir\">
                                            <i class=\"feather-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_niveau_edit', {'id': niveau.id}) }}\" 
                                           class=\"btn btn-warning\" 
                                           data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                            <i class=\"feather-edit-2\"></i>
                                        </a>
                                        <form method=\"post\" action=\"{{ path('app_niveau_delete', {'id': niveau.id}) }}\" 
                                              onsubmit=\"return confirm('Supprimer ce niveau ? Cette action est irréversible.');\" 
                                              class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ niveau.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-danger\" 
                                                    data-bs-toggle=\"tooltip\" title=\"Supprimer\">
                                                <i class=\"feather-trash-2\"></i>
                                            </button>
                                        </form>
                                        <a href=\"{{ path('app_langue_show', {'id': niveau.IdLangue.id}) }}\" 
                                           class=\"btn btn-primary\" 
                                           data-bs-toggle=\"tooltip\" title=\"Voir la langue\">
                                            <i class=\"feather-globe\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-5 text-muted\">
                                    <div class=\"d-flex flex-column align-items-center\">
                                        <i class=\"feather-layers fs-1 mb-3 text-muted\"></i>
                                        <h5 class=\"mb-3\">Aucun niveau trouvé</h5>
                                        <a href=\"{{ path('app_niveau_new') }}\" class=\"btn btn-primary\">
                                            <i class=\"feather-plus me-2\"></i> Ajouter un niveau
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

{% endblock %}", "niveau/index.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\niveau\\index.html.twig");
    }
}
