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
class __TwigTemplate_4ad00b795089f9f93fc993290820013f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

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

        yield "Gestion des Cours";
        
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
        yield "<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 100px 20px 60px; color: white;\">
<br><br><br><br>
    <div class=\"container\" style=\"max-width: 1400px;\">

        <!-- Titre + Bouton Ajouter -->
        <div class=\"d-flex justify-content-between align-items-center mb-5 flex-wrap gap-4\">
            <h1 class=\"mb-0 fw-bold\" style=\"font-size: 2.8rem; text-shadow: 0 4px 16px rgba(0,0,0,0.5);\">
                Gestion des Cours
            </h1>
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_new");
        yield "\" class=\"btn btn-success btn-lg shadow px-5 py-3 fw-bold\">
                + Créer un cours
            </a>
        </div>

        <!-- Filtres : Langue + Difficulté -->
        <div class=\"card mb-5 shadow-lg border-0 rounded-4 overflow-hidden\" style=\"background: rgba(255,255,255,0.12); backdrop-filter: blur(12px);\">
            <div class=\"card-body p-4\">
                <form method=\"get\" class=\"row g-4 align-items-end\">
                    <!-- Filtre Langue -->
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"langue\" class=\"form-label fw-bold text-white\">Filtrer par langue</label>
                        <select name=\"langue\" id=\"langue\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes les langues</option>
                            ";
        // line 29
        $context["languesUniques"] = [];
        // line 30
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 31
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 31) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), (isset($context["languesUniques"]) || array_key_exists("languesUniques", $context) ? $context["languesUniques"] : (function () { throw new RuntimeError('Variable "languesUniques" does not exist.', 31, $this->source); })())))) {
                // line 32
                yield "                                    ";
                $context["languesUniques"] = Twig\Extension\CoreExtension::merge((isset($context["languesUniques"]) || array_key_exists("languesUniques", $context) ? $context["languesUniques"] : (function () { throw new RuntimeError('Variable "languesUniques" does not exist.', 32, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]);
                // line 33
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "query", [], "any", false, false, false, 33), "get", ["langue"], "method", false, false, false, 33) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33))) {
                    yield "selected";
                }
                yield ">
                                        ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
                yield "
                                    </option>
                                ";
            }
            // line 37
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "                        </select>
                    </div>

                    <!-- Filtre Difficulté -->
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"difficulte\" class=\"form-label fw-bold text-white\">Filtrer par difficulté</label>
                        <select name=\"difficulte\" id=\"difficulte\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes les difficultés</option>
                            ";
        // line 46
        $context["difficultes"] = [];
        // line 47
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 48
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 48) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 48), (isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 48, $this->source); })())))) {
                // line 49
                yield "                                    ";
                $context["difficultes"] = Twig\Extension\CoreExtension::merge((isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 49, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 49)]);
                // line 50
                yield "                                ";
            }
            // line 51
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 52, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["diff"]) {
            // line 53
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["diff"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "query", [], "any", false, false, false, 53), "get", ["difficulte"], "method", false, false, false, 53) == $context["diff"])) {
                yield "selected";
            }
            yield ">
                                    ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["diff"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['diff'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                        </select>
                    </div>

                    <!-- Boutons -->
                    <div class=\"col-lg-4 col-12 d-flex flex-wrap gap-3 justify-content-lg-end mt-3 mt-lg-0\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 fw-bold shadow\">
                            Filtrer
                        </button>
                        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\" class=\"btn btn-outline-light btn-lg px-5 fw-bold\">
                            Réinitialiser
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Messages flash -->
        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "flashes", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 75
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 76
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show mb-4 rounded-3\" role=\"alert\">
                    ";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "
        <!-- Tableau des cours -->
        <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden\" style=\"background: rgba(255,255,255,0.95);\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-striped mb-0 align-middle\">
                        <thead class=\"table-dark\">
                            <tr>
                                <th class=\"ps-4\">ID</th>
                                <th>Langue / Niveau</th>
                                <th class=\"text-center\">Numéro</th>
                                <th>Ressources</th>
                                <th class=\"text-center\">Date création</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 99, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 100
            yield "                            <tr>
                                <td class=\"ps-4 fw-bold\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 101), "html", null, true);
            yield "</td>
                                <td class=\"fw-bold\">
                                    ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "IdNiveau", [], "any", false, false, false, 103), "IdLangue", [], "any", false, false, false, 103), "nom", [], "any", false, false, false, 103), "html", null, true);
            yield " 
                                    <small class=\"text-muted d-block\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "IdNiveau", [], "any", false, false, false, 104), "titre", [], "any", false, false, false, 104), "html", null, true);
            yield " — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "IdNiveau", [], "any", false, false, false, 104), "difficulte", [], "any", false, false, false, 104), "html", null, true);
            yield "</small>
                                </td>
                                <td class=\"text-center fw-bold\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "numero", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
                                <td class=\"text-center\">
                                    ";
            // line 108
            $context["nb"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "ressource", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "ressource", [], "any", false, false, false, 108), "
"), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return Twig\Extension\CoreExtension::trim((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 108, $this->source); })())); }))) : (0));
            // line 109
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 109, $this->source); })()), "html", null, true);
            yield " fichier";
            yield ((((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 109, $this->source); })()) != 1)) ? ("s") : (""));
            yield "
                                </td>
                                <td class=\"text-center\">
                                    ";
            // line 112
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "dateCreation", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "dateCreation", [], "any", false, false, false, 112), "d/m/Y"), "html", null, true)) : ("—"));
            yield "
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\" role=\"group\">
                                        <a href=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            yield "\" class=\"btn btn-info\">Voir</a>
                                        <a href=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 117)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modifier</a>
                                        <form method=\"post\" action=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce cours ?\\nCette action est irréversible.');\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 119))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 125
        if (!$context['_iterated']) {
            // line 126
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5 text-muted fs-4 fw-bold bg-light\">
                                    Aucun cours trouvé pour le moment.
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cour'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "                        </tbody>
                    </table>
                </div>
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
        return array (  372 => 132,  361 => 126,  359 => 125,  348 => 119,  344 => 118,  340 => 117,  336 => 116,  329 => 112,  320 => 109,  317 => 108,  312 => 106,  305 => 104,  301 => 103,  296 => 101,  293 => 100,  288 => 99,  269 => 82,  263 => 81,  253 => 77,  248 => 76,  243 => 75,  239 => 74,  227 => 65,  217 => 57,  208 => 54,  199 => 53,  194 => 52,  188 => 51,  185 => 50,  182 => 49,  179 => 48,  174 => 47,  172 => 46,  162 => 38,  156 => 37,  150 => 34,  141 => 33,  138 => 32,  135 => 31,  130 => 30,  128 => 29,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Cours{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 100px 20px 60px; color: white;\">
<br><br><br><br>
    <div class=\"container\" style=\"max-width: 1400px;\">

        <!-- Titre + Bouton Ajouter -->
        <div class=\"d-flex justify-content-between align-items-center mb-5 flex-wrap gap-4\">
            <h1 class=\"mb-0 fw-bold\" style=\"font-size: 2.8rem; text-shadow: 0 4px 16px rgba(0,0,0,0.5);\">
                Gestion des Cours
            </h1>
            <a href=\"{{ path('app_admin_cours_new') }}\" class=\"btn btn-success btn-lg shadow px-5 py-3 fw-bold\">
                + Créer un cours
            </a>
        </div>

        <!-- Filtres : Langue + Difficulté -->
        <div class=\"card mb-5 shadow-lg border-0 rounded-4 overflow-hidden\" style=\"background: rgba(255,255,255,0.12); backdrop-filter: blur(12px);\">
            <div class=\"card-body p-4\">
                <form method=\"get\" class=\"row g-4 align-items-end\">
                    <!-- Filtre Langue -->
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"langue\" class=\"form-label fw-bold text-white\">Filtrer par langue</label>
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

                    <!-- Filtre Difficulté -->
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"difficulte\" class=\"form-label fw-bold text-white\">Filtrer par difficulté</label>
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

                    <!-- Boutons -->
                    <div class=\"col-lg-4 col-12 d-flex flex-wrap gap-3 justify-content-lg-end mt-3 mt-lg-0\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 fw-bold shadow\">
                            Filtrer
                        </button>
                        <a href=\"{{ path('app_cours_index') }}\" class=\"btn btn-outline-light btn-lg px-5 fw-bold\">
                            Réinitialiser
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Messages flash -->
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show mb-4 rounded-3\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        <!-- Tableau des cours -->
        <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden\" style=\"background: rgba(255,255,255,0.95);\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-striped mb-0 align-middle\">
                        <thead class=\"table-dark\">
                            <tr>
                                <th class=\"ps-4\">ID</th>
                                <th>Langue / Niveau</th>
                                <th class=\"text-center\">Numéro</th>
                                <th>Ressources</th>
                                <th class=\"text-center\">Date création</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for cour in cours %}
                            <tr>
                                <td class=\"ps-4 fw-bold\">{{ cour.id }}</td>
                                <td class=\"fw-bold\">
                                    {{ cour.IdNiveau.IdLangue.nom }} 
                                    <small class=\"text-muted d-block\">{{ cour.IdNiveau.titre }} — {{ cour.IdNiveau.difficulte }}</small>
                                </td>
                                <td class=\"text-center fw-bold\">{{ cour.numero }}</td>
                                <td class=\"text-center\">
                                    {% set nb = cour.ressource ? cour.ressource|split('\\n')|filter(v => v|trim)|length : 0 %}
                                    {{ nb }} fichier{{ nb != 1 ? 's' : '' }}
                                </td>
                                <td class=\"text-center\">
                                    {{ cour.dateCreation ? cour.dateCreation|date('d/m/Y') : '—' }}
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\" role=\"group\">
                                        <a href=\"{{ path('app_cours_show', {'id': cour.id}) }}\" class=\"btn btn-info\">Voir</a>
                                        <a href=\"{{ path('app_cours_edit', {'id': cour.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                                        <form method=\"post\" action=\"{{ path('app_cours_delete', {'id': cour.id}) }}\" onsubmit=\"return confirm('Supprimer ce cours ?\\nCette action est irréversible.');\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ cour.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5 text-muted fs-4 fw-bold bg-light\">
                                    Aucun cours trouvé pour le moment.
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
{% endblock %}", "cours/index.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\cours\\index.html.twig");
    }
}
