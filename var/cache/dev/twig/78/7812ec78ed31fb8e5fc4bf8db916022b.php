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
class __TwigTemplate_83b1044e457d85cb4d8d48302dc703da extends Template
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

        <!-- En-tête de page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        Détails complets de la langue sur Fluently
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto d-flex gap-3\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
                ";
        // line 26
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"btn btn-warning px-4\">
                        <i class=\"feather-edit-2 me-2\"></i> Modifier
                    </a>
                ";
        }
        // line 31
        yield "            </div>
        </div>

        <!-- Contenu principal -->
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-11 mx-auto\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-primary text-white py-5 px-5 d-flex align-items-center gap-4\">
                        <div class=\"avatar avatar-xl bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow\">
                            <i class=\"feather-globe fs-4\"></i>
                        </div>
                        <div>
                            <h4 class=\"m-0 fw-bold\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), "html", null, true);
        yield "</h4>
                            <p class=\"m-0 opacity-90\">
                                ";
        // line 45
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 45, $this->source); })()), "isActive", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                                    <span class=\"badge bg-success-subtle text-success ms-2 px-3 py-2\">Active</span>
                                ";
        } else {
            // line 48
            yield "                                    <span class=\"badge bg-danger-subtle text-danger ms-2 px-3 py-2\">Inactive</span>
                                ";
        }
        // line 50
        yield "                            </p>
                        </div>
                    </div>

                    <div class=\"card-body p-5\">
                        <div class=\"row g-5\">

                            <!-- Colonne gauche : Drapeau + statut rapide -->
                            <div class=\"col-lg-4 text-center\">
                                ";
        // line 59
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 59, $this->source); })()), "drapeau", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                                    <div class=\"bg-light rounded-4 p-4 shadow-sm mb-4\">
                                        <img src=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/langues/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 61, $this->source); })()), "drapeau", [], "any", false, false, false, 61))), "html", null, true);
            yield "\" 
                                             alt=\"Drapeau ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 62, $this->source); })()), "nom", [], "any", false, false, false, 62), "html", null, true);
            yield "\" 
                                             class=\"img-fluid rounded-3 shadow\" 
                                             style=\"max-height: 280px; object-fit: contain;\">
                                    </div>
                                ";
        } else {
            // line 67
            yield "                                    <div class=\"bg-light rounded-4 p-5 text-center text-muted shadow-sm\">
                                        <i class=\"feather-image fs-1 mb-3 d-block\"></i>
                                        Aucun drapeau défini
                                    </div>
                                ";
        }
        // line 72
        yield "
                                <div class=\"mt-4\">
                                    <span class=\"badge fs-6 px-4 py-3 ";
        // line 74
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 74, $this->source); })()), "isActive", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                        ";
        // line 75
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 75, $this->source); })()), "isActive", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active – Visible aux étudiants") : ("Inactive – Masquée"));
        yield "
                                    </span>
                                </div>
                            </div>

                            <!-- Colonne droite : Informations -->
                            <div class=\"col-lg-8\">
                                <div class=\"bg-light rounded-4 p-4 mb-4 shadow-sm\">
                                    <h5 class=\"fw-bold mb-4 pb-3 border-bottom border-primary\">
                                        Informations générales
                                    </h5>

                                    <div class=\"row g-4\">
                                        <div class=\"col-md-4 fw-bold text-muted\">ID</div>
                                        <div class=\"col-md-8\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89), "html", null, true);
        yield "</div>

                                        <div class=\"col-md-4 fw-bold text-muted\">Nom</div>
                                        <div class=\"col-md-8 fw-semibold\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 92, $this->source); })()), "nom", [], "any", false, false, false, 92), "html", null, true);
        yield "</div>

                                        <div class=\"col-md-4 fw-bold text-muted\">Popularité</div>
                                        <div class=\"col-md-8\">";
        // line 95
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 95, $this->source); })()), "popularite", [], "any", false, false, false, 95)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 95, $this->source); })()), "popularite", [], "any", false, false, false, 95), "html", null, true)) : ("Non définie"));
        yield "</div>

                                        <div class=\"col-md-4 fw-bold text-muted\">Date d'ajout</div>
                                        <div class=\"col-md-8\">";
        // line 98
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 98, $this->source); })()), "dateAjout", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 98, $this->source); })()), "dateAjout", [], "any", false, false, false, 98), "d/m/Y à H:i"), "html", null, true)) : ("Inconnue"));
        yield "</div>

                                        <div class=\"col-md-4 fw-bold text-muted\">Description</div>
                                        <div class=\"col-md-8 text-dark\" style=\"line-height: 1.7;\">
                                            ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 102, $this->source); })()), "description", [], "any", false, false, false, 102), "html", null, true)), "Aucune description"), "html", null, true);
        yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Actions Admin -->
                                ";
        // line 108
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "                                    <div class=\"d-flex gap-3 justify-content-center mt-5 pt-4 border-top\">
                                        <a href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 110, $this->source); })()), "id", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-warning btn-lg px-5\">
                                            <i class=\"feather-edit-2 me-2\"></i> Modifier
                                        </a>

                                        <form method=\"post\" action=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115)]), "html", null, true);
            yield "\" 
                                              onsubmit=\"return confirm('Confirmer la suppression définitive de cette langue ?');\" 
                                              class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-lg px-5\">
                                                <i class=\"feather-trash-2 me-2\"></i> Supprimer
                                            </button>
                                        </form>
                                    </div>
                                ";
        }
        // line 125
        yield "                            </div>
                        </div>

                        <!-- Niveaux associés -->
                        ";
        // line 129
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 129, $this->source); })()), "niveaux", [], "any", false, false, false, 129)) > 0)) {
            // line 130
            yield "                            <div class=\"mt-5 pt-5 border-top\">
                                <h4 class=\"text-center fw-bold mb-5\">
                                    <i class=\"feather-layers me-2 text-primary\"></i>
                                    Niveaux disponibles pour ";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 133, $this->source); })()), "nom", [], "any", false, false, false, 133), "html", null, true);
            yield "
                                </h4>

                                <div class=\"row g-4\">
                                    ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 137, $this->source); })()), "niveaux", [], "any", false, false, false, 137));
            foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
                // line 138
                yield "                                        <div class=\"col-md-6 col-lg-4\">
                                            <div class=\"card border-0 shadow-sm h-100 transition-all hover-lift\">
                                                <div class=\"card-body p-4 text-center\">
                                                    <h5 class=\"fw-bold mb-3\">";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "titre", [], "any", false, false, false, 141), "html", null, true);
                yield "</h5>
                                                    <span class=\"badge bg-primary-subtle text-primary px-3 py-2 mb-3 d-inline-block\">
                                                        ";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 143), "html", null, true);
                yield "
                                                    </span>
                                                    <p class=\"text-muted mb-0\">
                                                        ";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "description", [], "any", false, false, false, 146), 0, 100), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "description", [], "any", false, false, false, 146)) > 100)) {
                    yield "...";
                }
                // line 147
                yield "                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            yield "                                </div>
                            </div>
                        ";
        } else {
            // line 155
            yield "                            <div class=\"text-center mt-5 py-5 text-muted\">
                                <i class=\"feather-layers fs-1 mb-3 d-block\"></i>
                                Aucun niveau créé pour cette langue pour le moment.
                            </div>
                        ";
        }
        // line 160
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
        return array (  358 => 160,  351 => 155,  346 => 152,  336 => 147,  331 => 146,  325 => 143,  320 => 141,  315 => 138,  311 => 137,  304 => 133,  299 => 130,  297 => 129,  291 => 125,  281 => 118,  275 => 115,  267 => 110,  264 => 109,  262 => 108,  253 => 102,  246 => 98,  240 => 95,  234 => 92,  228 => 89,  211 => 75,  207 => 74,  203 => 72,  196 => 67,  188 => 62,  184 => 61,  181 => 60,  179 => 59,  168 => 50,  164 => 48,  160 => 46,  158 => 45,  153 => 43,  139 => 31,  131 => 27,  129 => 26,  123 => 23,  112 => 15,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Langue : {{ langue.nom }}{% endblock %}

{% block body %}

    <div class=\"nxl-content\">

        <!-- En-tête de page -->
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

        <!-- Contenu principal -->
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

                            <!-- Colonne gauche : Drapeau + statut rapide -->
                            <div class=\"col-lg-4 text-center\">
                                {% if langue.drapeau %}
                                    <div class=\"bg-light rounded-4 p-4 shadow-sm mb-4\">
                                        <img src=\"{{ asset('images/langues/' ~ langue.drapeau) }}\" 
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

                            <!-- Colonne droite : Informations -->
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

                                <!-- Actions Admin -->
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

                        <!-- Niveaux associés -->
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

{% endblock %}", "langue/show.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\langue\\show.html.twig");
    }
}
