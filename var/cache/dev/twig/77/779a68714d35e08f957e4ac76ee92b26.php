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
class __TwigTemplate_cae276208c8885a653b2bcace599e889 extends Template
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

        <!-- En-tête de page -->
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
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_new");
        yield "\" class=\"btn btn-primary px-4\">
                    <i class=\"feather-plus me-2\"></i> Créer un cours
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
                    <!-- Filtre par langue -->
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"langue\" class=\"form-label fw-bold\">Langue</label>
                        <select name=\"langue\" id=\"langue\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes les langues</option>
                            ";
        // line 48
        $context["languesUniques"] = [];
        // line 49
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 50
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 50) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), (isset($context["languesUniques"]) || array_key_exists("languesUniques", $context) ? $context["languesUniques"] : (function () { throw new RuntimeError('Variable "languesUniques" does not exist.', 50, $this->source); })())))) {
                // line 51
                yield "                                    ";
                $context["languesUniques"] = Twig\Extension\CoreExtension::merge((isset($context["languesUniques"]) || array_key_exists("languesUniques", $context) ? $context["languesUniques"] : (function () { throw new RuntimeError('Variable "languesUniques" does not exist.', 51, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]);
                // line 52
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "query", [], "any", false, false, false, 52), "get", ["langue"], "method", false, false, false, 52) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52))) {
                    yield "selected";
                }
                yield ">
                                        ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 53), "nom", [], "any", false, false, false, 53), "html", null, true);
                yield "
                                    </option>
                                ";
            }
            // line 56
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                        </select>
                    </div>

                    <!-- Filtre par difficulté -->
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"difficulte\" class=\"form-label fw-bold\">Difficulté</label>
                        <select name=\"difficulte\" id=\"difficulte\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes les difficultés</option>
                            ";
        // line 65
        $context["difficultes"] = [];
        // line 66
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 67
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 67) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 67), (isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 67, $this->source); })())))) {
                // line 68
                yield "                                    ";
                $context["difficultes"] = Twig\Extension\CoreExtension::merge((isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 68, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 68)]);
                // line 69
                yield "                                ";
            }
            // line 70
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 71, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["diff"]) {
            // line 72
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["diff"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "request", [], "any", false, false, false, 72), "query", [], "any", false, false, false, 72), "get", ["difficulte"], "method", false, false, false, 72) == $context["diff"])) {
                yield "selected";
            }
            yield ">
                                    ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["diff"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['diff'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                        </select>
                    </div>

                    <!-- Boutons filtres -->
                    <div class=\"col-lg-4 col-12 d-flex flex-wrap gap-3 justify-content-lg-end\">
                        <button type=\"submit\" class=\"btn btn-primary px-5\">
                            <i class=\"feather-filter me-2\"></i> Filtrer
                        </button>
                        <a href=\"";
        // line 84
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
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 115, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 116
            yield "                            <tr>
                                <td class=\"ps-4 fw-medium\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                                <td class=\"fw-medium\">
                                    <div>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "IdNiveau", [], "any", false, false, false, 119), "IdLangue", [], "any", false, false, false, 119), "nom", [], "any", false, false, false, 119), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted d-block\">
                                        ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "IdNiveau", [], "any", false, false, false, 121), "titre", [], "any", false, false, false, 121), "html", null, true);
            yield " • ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "IdNiveau", [], "any", false, false, false, 121), "difficulte", [], "any", false, false, false, 121), "html", null, true);
            yield "
                                    </small>
                                </td>
                                <td class=\"text-center fw-bold\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "numero", [], "any", false, false, false, 124), "html", null, true);
            yield "</td>
                                <td class=\"text-center\">
                                    ";
            // line 126
            $context["nb"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "ressource", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "ressource", [], "any", false, false, false, 126), "
"), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return Twig\Extension\CoreExtension::trim((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 126, $this->source); })())); }))) : (0));
            // line 127
            yield "                                    <span class=\"badge ";
            yield ((((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 127, $this->source); })()) > 0)) ? ("bg-success") : ("bg-secondary"));
            yield " px-3 py-2\">
                                        ";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 128, $this->source); })()), "html", null, true);
            yield " fichier";
            yield ((((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 128, $this->source); })()) != 1)) ? ("s") : (""));
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center text-muted\">
                                    ";
            // line 132
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "dateCreation", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "dateCreation", [], "any", false, false, false, 132), "d/m/Y"), "html", null, true)) : ("—"));
            yield "
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\" role=\"group\">
                                        <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" class=\"btn btn-info\">
    <i class=\"feather-eye\"></i>
</a>
                                        <a href=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 139)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-warning\" 
                                           data-bs-toggle=\"tooltip\" title=\"Modifier\">
                                            <i class=\"feather-edit-2\"></i>
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 144)]), "html", null, true);
            yield "\" 
                                              onsubmit=\"return confirm('Supprimer ce cours ?\\nCette action est irréversible.');\" 
                                              class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 147))), "html", null, true);
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
        // line 156
        if (!$context['_iterated']) {
            // line 157
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                    <div class=\"d-flex flex-column align-items-center\">
                                        <i class=\"feather-folder-open fs-1 mb-3 text-muted\"></i>
                                        <h5 class=\"mb-2\">Aucun cours trouvé</h5>
                                        <p class=\"text-muted mb-4\">Créez votre premier cours maintenant</p>
                                        <a href=\"";
            // line 163
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
        // line 170
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
        return array (  416 => 170,  403 => 163,  395 => 157,  393 => 156,  379 => 147,  373 => 144,  365 => 139,  359 => 136,  352 => 132,  343 => 128,  338 => 127,  335 => 126,  330 => 124,  322 => 121,  317 => 119,  312 => 117,  309 => 116,  304 => 115,  270 => 84,  260 => 76,  251 => 73,  242 => 72,  237 => 71,  231 => 70,  228 => 69,  225 => 68,  222 => 67,  217 => 66,  215 => 65,  205 => 57,  199 => 56,  193 => 53,  184 => 52,  181 => 51,  178 => 50,  173 => 49,  171 => 48,  159 => 38,  153 => 37,  143 => 33,  138 => 32,  133 => 31,  129 => 30,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Gestion des Cours - Admin{% endblock %}

{% block body %}

    <div class=\"nxl-content\">

        <!-- En-tête de page -->
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
                    <!-- Filtre par langue -->
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

                    <!-- Filtre par difficulté -->
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

                    <!-- Boutons filtres -->
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

{% endblock %}", "cours/index.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\cours\\index.html.twig");
    }
}
