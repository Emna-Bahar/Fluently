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
class __TwigTemplate_ba26d7d92bb68eb0de35803935db5df7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau/index.html.twig"));

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

        yield "Gestion des Niveaux";
        
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

        <!-- Titre + Ajouter -->
        <div class=\"d-flex justify-content-between align-items-center mb-5 flex-wrap gap-4\">
            <h1 class=\"mb-0\" style=\"font-weight: 900; text-shadow: 0 4px 16px rgba(0,0,0,0.5);\">
                Gestion des Niveaux
            </h1>
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_new");
        yield "\" class=\"btn btn-success btn-lg shadow px-5 py-3 fw-bold\">
                + Ajouter un niveau
            </a>
        </div>

        <!-- Filtres sur une seule ligne (grande taille) -->
        <div class=\"card mb-5 shadow-lg border-0 rounded-4 overflow-hidden\" style=\"background: rgba(255,255,255,0.12); backdrop-filter: blur(12px);\">
            <div class=\"card-body p-4\">
                <form method=\"get\" class=\"row g-4 align-items-end\">
                    <!-- Langue -->
                    <div class=\"col-lg-3 col-md-6\">
                        <label for=\"langue\" class=\"form-label fw-bold text-white\">Langue</label>
                        <select name=\"langue\" id=\"langue\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes les langues</option>
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["langues"]) || array_key_exists("langues", $context) ? $context["langues"] : (function () { throw new RuntimeError('Variable "langues" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            // line 30
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "query", [], "any", false, false, false, 30), "get", ["langue"], "method", false, false, false, 30) == CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 30))) {
                yield "selected";
            }
            yield ">
                                    ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langue"], "nom", [], "any", false, false, false, 31), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['langue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "                        </select>
                    </div>

                    <!-- Difficulté -->
                    <div class=\"col-lg-3 col-md-6\">
                        <label for=\"difficulte\" class=\"form-label fw-bold text-white\">Difficulté</label>
                        <select name=\"difficulte\" id=\"difficulte\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes</option>
                            ";
        // line 42
        $context["difficultes"] = [];
        // line 43
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 44
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["n"], "difficulte", [], "any", false, false, false, 44) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "difficulte", [], "any", false, false, false, 44), (isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 44, $this->source); })())))) {
                // line 45
                yield "                                    ";
                $context["difficultes"] = Twig\Extension\CoreExtension::merge((isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 45, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["n"], "difficulte", [], "any", false, false, false, 45)]);
                // line 46
                yield "                                ";
            }
            // line 47
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['n'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["difficultes"]) || array_key_exists("difficultes", $context) ? $context["difficultes"] : (function () { throw new RuntimeError('Variable "difficultes" does not exist.', 48, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["diff"]) {
            // line 49
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["diff"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "query", [], "any", false, false, false, 49), "get", ["difficulte"], "method", false, false, false, 49) == $context["diff"])) {
                yield "selected";
            }
            yield ">
                                    ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["diff"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['diff'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                        </select>
                    </div>

                    <!-- Seuil min -->
                    <div class=\"col-lg-3 col-md-6\">
                        <label class=\"form-label fw-bold text-white\">Seuil score min</label>
                        <input type=\"number\" name=\"seuil_min\" class=\"form-control form-control-lg\" 
                               placeholder=\"Ex: 0\" 
                               value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "query", [], "any", false, false, false, 61), "get", ["seuil_min"], "method", false, false, false, 61), "html", null, true);
        yield "\" 
                               min=\"0\" step=\"0.1\">
                    </div>

                    <!-- Seuil max -->
                    <div class=\"col-lg-3 col-md-6\">
                        <label class=\"form-label fw-bold text-white\">Seuil score max</label>
                        <input type=\"number\" name=\"seuil_max\" class=\"form-control form-control-lg\" 
                               placeholder=\"Ex: 100\" 
                               value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "query", [], "any", false, false, false, 70), "get", ["seuil_max"], "method", false, false, false, 70), "html", null, true);
        yield "\" 
                               min=\"0\" step=\"0.1\">
                    </div>

                    <!-- Boutons (à droite) -->
                    <div class=\"col-12 col-lg-auto d-flex flex-wrap gap-3 justify-content-lg-end mt-3 mt-lg-0\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 fw-bold shadow\">
                            Filtrer
                        </button>
                        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_index");
        yield "\" class=\"btn btn-outline-light btn-lg px-5 fw-bold\">
                            Réinitialiser
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Messages flash -->
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "flashes", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 89
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 90
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show mb-4 rounded-3\" role=\"alert\">
                    ";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "
        <!-- Tableau -->
        <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden\" style=\"background: rgba(255,255,255,0.95);\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-striped mb-0 align-middle\">
                        <thead class=\"table-dark\">
                            <tr>
                                <th class=\"ps-4\">ID</th>
                                <th>Langue</th>
                                <th>Titre</th>
                                <th class=\"text-center\">Ordre</th>
                                <th>Difficulté</th>
                                <th class=\"text-center\">Image</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 114, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
            // line 115
            yield "                            <tr>
                                <td class=\"ps-4 fw-bold\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "id", [], "any", false, false, false, 116), "html", null, true);
            yield "</td>
                                <td class=\"fw-bold\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 117), "nom", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                                <td class=\"fw-bold\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "titre", [], "any", false, false, false, 118), "html", null, true);
            yield "</td>
                                <td class=\"text-center\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "ordre", [], "any", false, false, false, 119), "html", null, true);
            yield "</td>
                                <td class=\"text-center\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "difficulte", [], "any", false, false, false, 120), "html", null, true);
            yield "</td>
                                <td class=\"text-center\">
                                    ";
            // line 122
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "imageCouverture", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 123
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/niveaux/" . CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "imageCouverture", [], "any", false, false, false, 123))), "html", null, true);
                yield "\" alt=\"Couverture\" style=\"max-width: 100px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.2);\">
                                    ";
            } else {
                // line 125
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 127
            yield "                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\" role=\"group\">
                                        <a href=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "id", [], "any", false, false, false, 130)]), "html", null, true);
            yield "\" class=\"btn btn-info\">Voir</a>
                                        <a href=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "id", [], "any", false, false, false, 131)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modifier</a>
                                        <form method=\"post\" action=\"";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "id", [], "any", false, false, false, 132)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce niveau ?');\" style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "id", [], "any", false, false, false, 133))), "html", null, true);
            yield "\">
                                            <button class=\"btn btn-danger\">Supprimer</button>
                                        </form>
                                        <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["niveau"], "IdLangue", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                                            Voir langue
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 142
        if (!$context['_iterated']) {
            // line 143
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-5 text-muted fs-4 fw-bold bg-light\">
                                    Aucun niveau trouvé pour le moment.
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['niveau'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
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
        return array (  389 => 149,  378 => 143,  376 => 142,  365 => 136,  359 => 133,  355 => 132,  351 => 131,  347 => 130,  342 => 127,  338 => 125,  332 => 123,  330 => 122,  325 => 120,  321 => 119,  317 => 118,  313 => 117,  309 => 116,  306 => 115,  301 => 114,  281 => 96,  275 => 95,  265 => 91,  260 => 90,  255 => 89,  251 => 88,  239 => 79,  227 => 70,  215 => 61,  205 => 53,  196 => 50,  187 => 49,  182 => 48,  176 => 47,  173 => 46,  170 => 45,  167 => 44,  162 => 43,  160 => 42,  150 => 34,  141 => 31,  132 => 30,  128 => 29,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Niveaux{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 100px 20px 60px; color: white;\">
<br><br><br><br>
    <div class=\"container\" style=\"max-width: 1400px;\">

        <!-- Titre + Ajouter -->
        <div class=\"d-flex justify-content-between align-items-center mb-5 flex-wrap gap-4\">
            <h1 class=\"mb-0\" style=\"font-weight: 900; text-shadow: 0 4px 16px rgba(0,0,0,0.5);\">
                Gestion des Niveaux
            </h1>
            <a href=\"{{ path('app_niveau_new') }}\" class=\"btn btn-success btn-lg shadow px-5 py-3 fw-bold\">
                + Ajouter un niveau
            </a>
        </div>

        <!-- Filtres sur une seule ligne (grande taille) -->
        <div class=\"card mb-5 shadow-lg border-0 rounded-4 overflow-hidden\" style=\"background: rgba(255,255,255,0.12); backdrop-filter: blur(12px);\">
            <div class=\"card-body p-4\">
                <form method=\"get\" class=\"row g-4 align-items-end\">
                    <!-- Langue -->
                    <div class=\"col-lg-3 col-md-6\">
                        <label for=\"langue\" class=\"form-label fw-bold text-white\">Langue</label>
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
                    <div class=\"col-lg-3 col-md-6\">
                        <label for=\"difficulte\" class=\"form-label fw-bold text-white\">Difficulté</label>
                        <select name=\"difficulte\" id=\"difficulte\" class=\"form-select form-select-lg\">
                            <option value=\"\">Toutes</option>
                            {% set difficultes = [] %}
                            {% for n in niveaux %}
                                {% if n.difficulte and n.difficulte not in difficultes %}
                                    {% set difficultes = difficultes|merge([n.difficulte]) %}
                                {% endif %}
                            {% endfor %}
                            {% for diff in difficultes|sort %}
                                <option value=\"{{ diff }}\" {% if app.request.query.get('difficulte') == diff %}selected{% endif %}>
                                    {{ diff }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>

                    <!-- Seuil min -->
                    <div class=\"col-lg-3 col-md-6\">
                        <label class=\"form-label fw-bold text-white\">Seuil score min</label>
                        <input type=\"number\" name=\"seuil_min\" class=\"form-control form-control-lg\" 
                               placeholder=\"Ex: 0\" 
                               value=\"{{ app.request.query.get('seuil_min') }}\" 
                               min=\"0\" step=\"0.1\">
                    </div>

                    <!-- Seuil max -->
                    <div class=\"col-lg-3 col-md-6\">
                        <label class=\"form-label fw-bold text-white\">Seuil score max</label>
                        <input type=\"number\" name=\"seuil_max\" class=\"form-control form-control-lg\" 
                               placeholder=\"Ex: 100\" 
                               value=\"{{ app.request.query.get('seuil_max') }}\" 
                               min=\"0\" step=\"0.1\">
                    </div>

                    <!-- Boutons (à droite) -->
                    <div class=\"col-12 col-lg-auto d-flex flex-wrap gap-3 justify-content-lg-end mt-3 mt-lg-0\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 fw-bold shadow\">
                            Filtrer
                        </button>
                        <a href=\"{{ path('app_niveau_index') }}\" class=\"btn btn-outline-light btn-lg px-5 fw-bold\">
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

        <!-- Tableau -->
        <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden\" style=\"background: rgba(255,255,255,0.95);\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-striped mb-0 align-middle\">
                        <thead class=\"table-dark\">
                            <tr>
                                <th class=\"ps-4\">ID</th>
                                <th>Langue</th>
                                <th>Titre</th>
                                <th class=\"text-center\">Ordre</th>
                                <th>Difficulté</th>
                                <th class=\"text-center\">Image</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for niveau in niveaux %}
                            <tr>
                                <td class=\"ps-4 fw-bold\">{{ niveau.id }}</td>
                                <td class=\"fw-bold\">{{ niveau.IdLangue.nom }}</td>
                                <td class=\"fw-bold\">{{ niveau.titre }}</td>
                                <td class=\"text-center\">{{ niveau.ordre }}</td>
                                <td class=\"text-center\">{{ niveau.difficulte }}</td>
                                <td class=\"text-center\">
                                    {% if niveau.imageCouverture %}
                                        <img src=\"{{ asset('uploads/niveaux/' ~ niveau.imageCouverture) }}\" alt=\"Couverture\" style=\"max-width: 100px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.2);\">
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\" role=\"group\">
                                        <a href=\"{{ path('app_niveau_show', {'id': niveau.id}) }}\" class=\"btn btn-info\">Voir</a>
                                        <a href=\"{{ path('app_niveau_edit', {'id': niveau.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                                        <form method=\"post\" action=\"{{ path('app_niveau_delete', {'id': niveau.id}) }}\" onsubmit=\"return confirm('Supprimer ce niveau ?');\" style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ niveau.id) }}\">
                                            <button class=\"btn btn-danger\">Supprimer</button>
                                        </form>
                                        <a href=\"{{ path('app_langue_show', {'id': niveau.IdLangue.id}) }}\" class=\"btn btn-primary\">
                                            Voir langue
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-5 text-muted fs-4 fw-bold bg-light\">
                                    Aucun niveau trouvé pour le moment.
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
{% endblock %}", "niveau/index.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\niveau\\index.html.twig");
    }
}
