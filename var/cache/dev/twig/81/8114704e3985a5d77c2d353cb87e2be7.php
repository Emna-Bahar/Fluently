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

/* cours/index.html.twig */
class __TwigTemplate_15527b966eec95254a7394f893a8e26e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

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

        yield "Gestion des Cours - Admin";
        
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
                        <i class=\"feather-book-open text-primary me-2\"></i>
                        Gestion des Cours
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_new");
        yield "\" class=\"btn btn-primary px-4\">
                    <i class=\"feather-plus me-2\"></i> Créer un cours
                </a>
            </div>
        </div>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 27
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 28
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show mb-4 rounded-3\" role=\"alert\">
                    ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "
        <!-- Filtres -->
        <div class=\"card border-0 shadow-sm mb-5\">
            <div class=\"card-body p-4\">
                <form method=\"get\" class=\"row g-4 align-items-end\">
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"langue\" class=\"form-label fw-bold\">Langue</label>
                        <select name=\"langue\" id=\"langue\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes les langues</option>
                            ";
        // line 43
        $context["languesUniques"] = [];
        // line 44
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 45
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 45) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), (isset($context["languesUniques"]) || array_key_exists("languesUniques", $context) ? $context["languesUniques"] : (function () { throw new RuntimeError('Variable "languesUniques" does not exist.', 45, $this->source); })())))) {
                // line 46
                yield "                                    ";
                $context["languesUniques"] = Twig\Extension\CoreExtension::merge((isset($context["languesUniques"]) || array_key_exists("languesUniques", $context) ? $context["languesUniques"] : (function () { throw new RuntimeError('Variable "languesUniques" does not exist.', 46, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46)]);
                // line 47
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "query", [], "any", false, false, false, 47), "get", ["langue"], "method", false, false, false, 47) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47))) {
                    yield "selected";
                }
                yield ">
                                        ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 48), "nom", [], "any", false, false, false, 48), "html", null, true);
                yield "
                                    </option>
                                ";
            }
            // line 51
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "                        </select>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"difficulte\" class=\"form-label fw-bold\">Difficulté</label>
                        <select name=\"difficulte\" id=\"difficulte\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes les difficultés</option>
                            ";
        // line 58
        $context["difficultes"] = [];
        // line 59
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 60
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 60) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 60), (isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 60, $this->source); })())))) {
                // line 61
                yield "                                    ";
                $context["difficultes"] = Twig\Extension\CoreExtension::merge((isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 61, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 61)]);
                // line 62
                yield "                                ";
            }
            // line 63
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 64, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["diff"]) {
            // line 65
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["diff"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "query", [], "any", false, false, false, 65), "get", ["difficulte"], "method", false, false, false, 65) == $context["diff"])) {
                yield "selected";
            }
            yield ">
                                    ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["diff"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['diff'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "                        </select>
                    </div>
                    <div class=\"col-lg-4 col-12 d-flex flex-wrap gap-3 justify-content-lg-end\">
                        <button type=\"submit\" class=\"btn btn-primary px-5\">
                            <i class=\"feather-filter me-2\"></i> Filtrer
                        </button>
                        <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\" class=\"btn btn-outline-secondary px-5\">
                            Réinitialiser
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Tableau des cours -->
        <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
            <div class=\"card-header bg-light border-bottom\">
                <h6 class=\"m-0 fw-bold\">
                    <i class=\"feather-list text-primary me-2\"></i>
                    Liste des cours
                </h6>
            </div>

            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-striped align-middle mb-0\">
                        <thead style=\"background-color: #2872e1; color: white;\">
                            <tr>
                                <th class=\"ps-4\">ID</th>
                                <th>Langue / Niveau</th>
                                <th class=\"text-center\">N°</th>
                                <th class=\"text-center\">Ressources</th>
                                <th class=\"text-center\">Créé le</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 105, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 106
            yield "                            <tr>
                                <td class=\"ps-4 fw-medium\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 107), "html", null, true);
            yield "</td>
                                <td class=\"fw-medium\">
                                    <div>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "IdNiveau", [], "any", false, false, false, 109), "IdLangue", [], "any", false, false, false, 109), "nom", [], "any", false, false, false, 109), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted d-block\">
                                        ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "IdNiveau", [], "any", false, false, false, 111), "titre", [], "any", false, false, false, 111), "html", null, true);
            yield " • ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "IdNiveau", [], "any", false, false, false, 111), "difficulte", [], "any", false, false, false, 111), "html", null, true);
            yield "
                                    </small>
                                </td>
                                <td class=\"text-center fw-bold\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "numero", [], "any", false, false, false, 114), "html", null, true);
            yield "</td>
                                <td class=\"text-center\">
                                    ";
            // line 116
            $context["nb"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "ressource", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "ressource", [], "any", false, false, false, 116), "
"), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return Twig\Extension\CoreExtension::trim((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 116, $this->source); })())); }))) : (0));
            // line 117
            yield "                                    <span class=\"badge ";
            yield ((((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 117, $this->source); })()) > 0)) ? ("bg-success") : ("bg-secondary"));
            yield " px-3 py-2\">
                                        ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 118, $this->source); })()), "html", null, true);
            yield " fichier";
            yield ((((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 118, $this->source); })()) != 1)) ? ("s") : (""));
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center text-muted\">
                                    ";
            // line 122
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "dateCreation", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "dateCreation", [], "any", false, false, false, 122), "d/m/Y"), "html", null, true)) : ("—"));
            yield "
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\" role=\"group\">
                                        <a href=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 126)]), "html", null, true);
            yield "\" class=\"btn btn-info\">
    <i class=\"feather-eye\"></i>
</a>
                                        <a href=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 129)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-warning\" 
                                           data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                            <i class=\"feather-edit-2\"></i>
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\" 
                                              onsubmit=\"return confirm('Supprimer ce cours ?\\nCette action est irréversible.');\" 
                                              class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 137))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger\" 
                                                    data-bs-toggle=\"tooltip\" title=\"Supprimer\">
                                                <i class=\"feather-trash-2\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 146
        if (!$context['_iterated']) {
            // line 147
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                    <div class=\"d-flex flex-column align-items-center\">
                                        <i class=\"feather-folder-open fs-1 mb-3 text-muted\"></i>
                                        <h5 class=\"mb-2\">Aucun cours trouvé</h5>
                                        <p class=\"text-muted mb-4\">Créez votre premier cours maintenant</p>
                                        <a href=\"";
            // line 153
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_new");
            yield "\" class=\"btn btn-primary\">
                                            <i class=\"feather-plus me-2\"></i> Créer un cours
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cour'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
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
        return "cours/index.html.twig";
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
        return array (  406 => 160,  393 => 153,  385 => 147,  383 => 146,  369 => 137,  363 => 134,  355 => 129,  349 => 126,  342 => 122,  333 => 118,  328 => 117,  325 => 116,  320 => 114,  312 => 111,  307 => 109,  302 => 107,  299 => 106,  294 => 105,  261 => 75,  253 => 69,  244 => 66,  235 => 65,  230 => 64,  224 => 63,  221 => 62,  218 => 61,  215 => 60,  210 => 59,  208 => 58,  200 => 52,  194 => 51,  188 => 48,  179 => 47,  176 => 46,  173 => 45,  168 => 44,  166 => 43,  155 => 34,  149 => 33,  139 => 29,  134 => 28,  129 => 27,  125 => 26,  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Gestion des Cours - Admin{% endblock %}

{% block body %}

    <div class=\"nxl-content\">
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-book-open text-primary me-2\"></i>
                        Gestion des Cours
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_admin_cours_new') }}\" class=\"btn btn-primary px-4\">
                    <i class=\"feather-plus me-2\"></i> Créer un cours
                </a>
            </div>
        </div>
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
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"langue\" class=\"form-label fw-bold\">Langue</label>
                        <select name=\"langue\" id=\"langue\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes les langues</option>
                            {% set languesUniques = [] %}
                            {% for niveau in niveaux %}
                                {% if niveau.IdLangue and niveau.IdLangue.id not in languesUniques %}
                                    {% set languesUniques = languesUniques|merge([niveau.IdLangue.id]) %}
                                    <option value=\"{{ niveau.IdLangue.id }}\" {% if app.request.query.get('langue') == niveau.IdLangue.id %}selected{% endif %}>
                                        {{ niveau.IdLangue.nom }}
                                    </option>
                                {% endif %}
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"difficulte\" class=\"form-label fw-bold\">Difficulté</label>
                        <select name=\"difficulte\" id=\"difficulte\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes les difficultés</option>
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
                    <div class=\"col-lg-4 col-12 d-flex flex-wrap gap-3 justify-content-lg-end\">
                        <button type=\"submit\" class=\"btn btn-primary px-5\">
                            <i class=\"feather-filter me-2\"></i> Filtrer
                        </button>
                        <a href=\"{{ path('app_cours_index') }}\" class=\"btn btn-outline-secondary px-5\">
                            Réinitialiser
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Tableau des cours -->
        <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
            <div class=\"card-header bg-light border-bottom\">
                <h6 class=\"m-0 fw-bold\">
                    <i class=\"feather-list text-primary me-2\"></i>
                    Liste des cours
                </h6>
            </div>

            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-striped align-middle mb-0\">
                        <thead style=\"background-color: #2872e1; color: white;\">
                            <tr>
                                <th class=\"ps-4\">ID</th>
                                <th>Langue / Niveau</th>
                                <th class=\"text-center\">N°</th>
                                <th class=\"text-center\">Ressources</th>
                                <th class=\"text-center\">Créé le</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for cour in cours %}
                            <tr>
                                <td class=\"ps-4 fw-medium\">{{ cour.id }}</td>
                                <td class=\"fw-medium\">
                                    <div>{{ cour.IdNiveau.IdLangue.nom }}</div>
                                    <small class=\"text-muted d-block\">
                                        {{ cour.IdNiveau.titre }} • {{ cour.IdNiveau.difficulte }}
                                    </small>
                                </td>
                                <td class=\"text-center fw-bold\">{{ cour.numero }}</td>
                                <td class=\"text-center\">
                                    {% set nb = cour.ressource ? cour.ressource|split('\\n')|filter(v => v|trim)|length : 0 %}
                                    <span class=\"badge {{ nb > 0 ? 'bg-success' : 'bg-secondary' }} px-3 py-2\">
                                        {{ nb }} fichier{{ nb != 1 ? 's' : '' }}
                                    </span>
                                </td>
                                <td class=\"text-center text-muted\">
                                    {{ cour.dateCreation ? cour.dateCreation|date('d/m/Y') : '—' }}
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\" role=\"group\">
                                        <a href=\"{{ path('app_admin_cours_show', {'id': cour.id}) }}\" class=\"btn btn-info\">
    <i class=\"feather-eye\"></i>
</a>
                                        <a href=\"{{ path('app_cours_edit', {'id': cour.id}) }}\" 
                                           class=\"btn btn-warning\" 
                                           data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                            <i class=\"feather-edit-2\"></i>
                                        </a>
                                        <form method=\"post\" action=\"{{ path('app_cours_delete', {'id': cour.id}) }}\" 
                                              onsubmit=\"return confirm('Supprimer ce cours ?\\nCette action est irréversible.');\" 
                                              class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ cour.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-danger\" 
                                                    data-bs-toggle=\"tooltip\" title=\"Supprimer\">
                                                <i class=\"feather-trash-2\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                    <div class=\"d-flex flex-column align-items-center\">
                                        <i class=\"feather-folder-open fs-1 mb-3 text-muted\"></i>
                                        <h5 class=\"mb-2\">Aucun cours trouvé</h5>
                                        <p class=\"text-muted mb-4\">Créez votre premier cours maintenant</p>
                                        <a href=\"{{ path('app_admin_cours_new') }}\" class=\"btn btn-primary\">
                                            <i class=\"feather-plus me-2\"></i> Créer un cours
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

{% endblock %}", "cours/index.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\cours\\index.html.twig");
    }
}
