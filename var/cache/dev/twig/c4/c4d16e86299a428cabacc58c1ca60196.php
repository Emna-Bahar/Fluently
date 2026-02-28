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
class __TwigTemplate_be3c6a4e630494edddf74085e4c3df32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/show.html.twig"));

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
        yield "
    <div class=\"nxl-content\">
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        Détails complets de la langue sur Fluently
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto d-flex gap-3\">
                <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
                ";
        // line 24
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" class=\"btn btn-warning px-4\">
                        <i class=\"feather-edit-2 me-2\"></i> Modifier
                    </a>
                ";
        }
        // line 29
        yield "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-11 mx-auto\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-primary text-white py-5 px-5 d-flex align-items-center gap-4\">
                        <div class=\"avatar avatar-xl bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow\">
                            <i class=\"feather-globe fs-4\"></i>
                        </div>
                        <div>
                            <h4 class=\"m-0 fw-bold\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "html", null, true);
        yield "</h4>
                            <p class=\"m-0 opacity-90\">
                                ";
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 41, $this->source); })()), "isActive", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                                    <span class=\"badge bg-success-subtle text-success ms-2 px-3 py-2\">Active</span>
                                ";
        } else {
            // line 44
            yield "                                    <span class=\"badge bg-danger-subtle text-danger ms-2 px-3 py-2\">Inactive</span>
                                ";
        }
        // line 46
        yield "                            </p>
                        </div>
                    </div>

                    <div class=\"card-body p-5\">
                        <div class=\"row g-5\">
                            <div class=\"col-lg-4 text-center\">
                                ";
        // line 53
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 53, $this->source); })()), "drapeau", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                                    <div class=\"bg-light rounded-4 p-4 shadow-sm mb-4\">
                                        <img src=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/langues/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 55, $this->source); })()), "drapeau", [], "any", false, false, false, 55))), "html", null, true);
            yield "\" 
                                             alt=\"Drapeau ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 56, $this->source); })()), "nom", [], "any", false, false, false, 56), "html", null, true);
            yield "\" 
                                             class=\"img-fluid rounded-3 shadow\" 
                                             style=\"max-height: 280px; object-fit: contain;\">
                                    </div>
                                ";
        } else {
            // line 61
            yield "                                    <div class=\"bg-light rounded-4 p-5 text-center text-muted shadow-sm\">
                                        <i class=\"feather-image fs-1 mb-3 d-block\"></i>
                                        Aucun drapeau défini
                                    </div>
                                ";
        }
        // line 66
        yield "
                                <div class=\"mt-4\">
                                    <span class=\"badge fs-6 px-4 py-3 ";
        // line 68
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 68, $this->source); })()), "isActive", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                        ";
        // line 69
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 69, $this->source); })()), "isActive", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active – Visible aux étudiants") : ("Inactive – Masquée"));
        yield "
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"bg-light rounded-4 p-4 mb-4 shadow-sm\">
                                    <h5 class=\"fw-bold mb-4 pb-3 border-bottom border-primary\">
                                        Informations générales
                                    </h5>

                                    <div class=\"row g-4\">
                                        <div class=\"col-md-4 fw-bold text-muted\">ID</div>
                                        <div class=\"col-md-8\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81), "html", null, true);
        yield "</div>

                                        <div class=\"col-md-4 fw-bold text-muted\">Nom</div>
                                        <div class=\"col-md-8 fw-semibold\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 84, $this->source); })()), "nom", [], "any", false, false, false, 84), "html", null, true);
        yield "</div>

                                        <div class=\"col-md-4 fw-bold text-muted\">Popularité</div>
                                        <div class=\"col-md-8\">";
        // line 87
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 87, $this->source); })()), "popularite", [], "any", false, false, false, 87)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 87, $this->source); })()), "popularite", [], "any", false, false, false, 87), "html", null, true)) : ("Non définie"));
        yield "</div>

                                        <div class=\"col-md-4 fw-bold text-muted\">Date d'ajout</div>
                                        <div class=\"col-md-8\">";
        // line 90
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 90, $this->source); })()), "dateAjout", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 90, $this->source); })()), "dateAjout", [], "any", false, false, false, 90), "d/m/Y à H:i"), "html", null, true)) : ("Inconnue"));
        yield "</div>

                                        <div class=\"col-md-4 fw-bold text-muted\">Description</div>
                                        <div class=\"col-md-8 text-dark\" style=\"line-height: 1.7;\">
                                            ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 94, $this->source); })()), "description", [], "any", false, false, false, 94), "html", null, true)), "Aucune description"), "html", null, true);
        yield "
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 98
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "                                    <div class=\"d-flex gap-3 justify-content-center mt-5 pt-4 border-top\">
                                        <a href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-warning btn-lg px-5\">
                                            <i class=\"feather-edit-2 me-2\"></i> Modifier
                                        </a>

                                        <form method=\"post\" action=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105)]), "html", null, true);
            yield "\" 
                                              onsubmit=\"return confirm('Confirmer la suppression définitive de cette langue ?');\" 
                                              class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-lg px-5\">
                                                <i class=\"feather-trash-2 me-2\"></i> Supprimer
                                            </button>
                                        </form>
                                    </div>
                                ";
        }
        // line 115
        yield "                            </div>
                        </div>
                        ";
        // line 117
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 117, $this->source); })()), "niveaux", [], "any", false, false, false, 117)) > 0)) {
            // line 118
            yield "                            <div class=\"mt-5 pt-5 border-top\">
                                <h4 class=\"text-center fw-bold mb-5\">
                                    <i class=\"feather-layers me-2 text-primary\"></i>
                                    Niveaux disponibles pour ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 121, $this->source); })()), "nom", [], "any", false, false, false, 121), "html", null, true);
            yield "
                                </h4>

                                <div class=\"row g-4\">
                                    ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 125, $this->source); })()), "niveaux", [], "any", false, false, false, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
                // line 126
                yield "                                        <div class=\"col-md-6 col-lg-4\">
                                            <div class=\"card border-0 shadow-sm h-100 transition-all hover-lift\">
                                                <div class=\"card-body p-4 text-center\">
                                                    <h5 class=\"fw-bold mb-3\">";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "titre", [], "any", false, false, false, 129), "html", null, true);
                yield "</h5>
                                                    <span class=\"badge bg-primary-subtle text-primary px-3 py-2 mb-3 d-inline-block\">
                                                        ";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 131), "html", null, true);
                yield "
                                                    </span>
                                                    <p class=\"text-muted mb-0\">
                                                        ";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "description", [], "any", false, false, false, 134), 0, 100), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "description", [], "any", false, false, false, 134)) > 100)) {
                    yield "...";
                }
                // line 135
                yield "                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            yield "                                </div>
                            </div>
                        ";
        } else {
            // line 143
            yield "                            <div class=\"text-center mt-5 py-5 text-muted\">
                                <i class=\"feather-layers fs-1 mb-3 d-block\"></i>
                                Aucun niveau créé pour cette langue pour le moment.
                            </div>
                        ";
        }
        // line 148
        yield "                    </div>
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
        return array (  346 => 148,  339 => 143,  334 => 140,  324 => 135,  319 => 134,  313 => 131,  308 => 129,  303 => 126,  299 => 125,  292 => 121,  287 => 118,  285 => 117,  281 => 115,  271 => 108,  265 => 105,  257 => 100,  254 => 99,  252 => 98,  245 => 94,  238 => 90,  232 => 87,  226 => 84,  220 => 81,  205 => 69,  201 => 68,  197 => 66,  190 => 61,  182 => 56,  178 => 55,  175 => 54,  173 => 53,  164 => 46,  160 => 44,  156 => 42,  154 => 41,  149 => 39,  137 => 29,  129 => 25,  127 => 24,  121 => 21,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Langue : {{ langue.nom }}{% endblock %}

{% block body %}

    <div class=\"nxl-content\">
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        {{ langue.nom }}
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        Détails complets de la langue sur Fluently
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto d-flex gap-3\">
                <a href=\"{{ path('app_admin_langue_index') }}\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('app_admin_langue_edit', {'id': langue.id}) }}\" class=\"btn btn-warning px-4\">
                        <i class=\"feather-edit-2 me-2\"></i> Modifier
                    </a>
                {% endif %}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-11 mx-auto\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-primary text-white py-5 px-5 d-flex align-items-center gap-4\">
                        <div class=\"avatar avatar-xl bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow\">
                            <i class=\"feather-globe fs-4\"></i>
                        </div>
                        <div>
                            <h4 class=\"m-0 fw-bold\">{{ langue.nom }}</h4>
                            <p class=\"m-0 opacity-90\">
                                {% if langue.isActive %}
                                    <span class=\"badge bg-success-subtle text-success ms-2 px-3 py-2\">Active</span>
                                {% else %}
                                    <span class=\"badge bg-danger-subtle text-danger ms-2 px-3 py-2\">Inactive</span>
                                {% endif %}
                            </p>
                        </div>
                    </div>

                    <div class=\"card-body p-5\">
                        <div class=\"row g-5\">
                            <div class=\"col-lg-4 text-center\">
                                {% if langue.drapeau %}
                                    <div class=\"bg-light rounded-4 p-4 shadow-sm mb-4\">
                                        <img src=\"{{ asset('uploads/langues/' ~ langue.drapeau) }}\" 
                                             alt=\"Drapeau {{ langue.nom }}\" 
                                             class=\"img-fluid rounded-3 shadow\" 
                                             style=\"max-height: 280px; object-fit: contain;\">
                                    </div>
                                {% else %}
                                    <div class=\"bg-light rounded-4 p-5 text-center text-muted shadow-sm\">
                                        <i class=\"feather-image fs-1 mb-3 d-block\"></i>
                                        Aucun drapeau défini
                                    </div>
                                {% endif %}

                                <div class=\"mt-4\">
                                    <span class=\"badge fs-6 px-4 py-3 {{ langue.isActive ? 'bg-success' : 'bg-danger' }}\">
                                        {{ langue.isActive ? 'Active – Visible aux étudiants' : 'Inactive – Masquée' }}
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"bg-light rounded-4 p-4 mb-4 shadow-sm\">
                                    <h5 class=\"fw-bold mb-4 pb-3 border-bottom border-primary\">
                                        Informations générales
                                    </h5>

                                    <div class=\"row g-4\">
                                        <div class=\"col-md-4 fw-bold text-muted\">ID</div>
                                        <div class=\"col-md-8\">{{ langue.id }}</div>

                                        <div class=\"col-md-4 fw-bold text-muted\">Nom</div>
                                        <div class=\"col-md-8 fw-semibold\">{{ langue.nom }}</div>

                                        <div class=\"col-md-4 fw-bold text-muted\">Popularité</div>
                                        <div class=\"col-md-8\">{{ langue.popularite ?: 'Non définie' }}</div>

                                        <div class=\"col-md-4 fw-bold text-muted\">Date d'ajout</div>
                                        <div class=\"col-md-8\">{{ langue.dateAjout ? langue.dateAjout|date('d/m/Y à H:i') : 'Inconnue' }}</div>

                                        <div class=\"col-md-4 fw-bold text-muted\">Description</div>
                                        <div class=\"col-md-8 text-dark\" style=\"line-height: 1.7;\">
                                            {{ langue.description|nl2br|default('Aucune description') }}
                                        </div>
                                    </div>
                                </div>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <div class=\"d-flex gap-3 justify-content-center mt-5 pt-4 border-top\">
                                        <a href=\"{{ path('app_admin_langue_edit', {'id': langue.id}) }}\" 
                                           class=\"btn btn-warning btn-lg px-5\">
                                            <i class=\"feather-edit-2 me-2\"></i> Modifier
                                        </a>

                                        <form method=\"post\" action=\"{{ path('app_admin_langue_delete', {'id': langue.id}) }}\" 
                                              onsubmit=\"return confirm('Confirmer la suppression définitive de cette langue ?');\" 
                                              class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ langue.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-lg px-5\">
                                                <i class=\"feather-trash-2 me-2\"></i> Supprimer
                                            </button>
                                        </form>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                        {% if langue.niveaux|length > 0 %}
                            <div class=\"mt-5 pt-5 border-top\">
                                <h4 class=\"text-center fw-bold mb-5\">
                                    <i class=\"feather-layers me-2 text-primary\"></i>
                                    Niveaux disponibles pour {{ langue.nom }}
                                </h4>

                                <div class=\"row g-4\">
                                    {% for niveau in langue.niveaux %}
                                        <div class=\"col-md-6 col-lg-4\">
                                            <div class=\"card border-0 shadow-sm h-100 transition-all hover-lift\">
                                                <div class=\"card-body p-4 text-center\">
                                                    <h5 class=\"fw-bold mb-3\">{{ niveau.titre }}</h5>
                                                    <span class=\"badge bg-primary-subtle text-primary px-3 py-2 mb-3 d-inline-block\">
                                                        {{ niveau.difficulte }}
                                                    </span>
                                                    <p class=\"text-muted mb-0\">
                                                        {{ niveau.description|slice(0, 100) }}{% if niveau.description|length > 100 %}...{% endif %}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        {% else %}
                            <div class=\"text-center mt-5 py-5 text-muted\">
                                <i class=\"feather-layers fs-1 mb-3 d-block\"></i>
                                Aucun niveau créé pour cette langue pour le moment.
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "langue/show.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\langue\\show.html.twig");
    }
}
