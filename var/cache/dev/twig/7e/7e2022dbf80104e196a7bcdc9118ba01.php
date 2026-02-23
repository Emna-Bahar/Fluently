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

/* cours/show.html.twig */
class __TwigTemplate_3159710843beb1948ec2b8a914a46760 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/show.html.twig"));

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

        yield "Admin - Détails du cours n°";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 3, $this->source); })()), "numero", [], "any", false, false, false, 3), "html", null, true);
        
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

        <!-- En-tête admin -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-eye text-info me-2\"></i>
                        Détails du cours n°";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 15, $this->source); })()), "numero", [], "any", false, false, false, 15), "html", null, true);
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 18, $this->source); })()), "idNiveau", [], "any", false, false, false, 18), "titre", [], "any", false, false, false, 18), "html", null, true);
        yield " • ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 18, $this->source); })()), "idNiveau", [], "any", false, false, false, 18), "idLangue", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
        yield "
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\" class=\"btn btn-outline-secondary px-4 me-2\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
                <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\" class=\"btn btn-warning px-4\">
                    <i class=\"feather-edit-2 me-2\"></i> Modifier
                </a>
            </div>
        </div>

        <!-- Contenu -->
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-11 mx-auto\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-info text-white py-4 px-5\">
                        <h5 class=\"m-0 fw-bold\">
                            <i class=\"feather-info me-2\"></i> 
                            Informations du cours
                        </h5>
                    </div>

                    <div class=\"card-body p-5\">
                        <div class=\"row g-4\">

                            <!-- Infos principales -->
                            <div class=\"col-md-6\">
                                <div class=\"bg-light rounded-3 p-4 shadow-sm\">
                                    <h6 class=\"fw-bold mb-3\">Détails</h6>
                                    <p><strong>ID :</strong> ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>
                                    <p><strong>Langue :</strong> ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 51, $this->source); })()), "idNiveau", [], "any", false, false, false, 51), "idLangue", [], "any", false, false, false, 51), "nom", [], "any", false, false, false, 51), "html", null, true);
        yield "</p>
                                    <p><strong>Niveau :</strong> ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 52, $this->source); })()), "idNiveau", [], "any", false, false, false, 52), "titre", [], "any", false, false, false, 52), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 52, $this->source); })()), "idNiveau", [], "any", false, false, false, 52), "difficulte", [], "any", false, false, false, 52), "html", null, true);
        yield ")</p>
                                    <p><strong>Numéro :</strong> ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 53, $this->source); })()), "numero", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
                                    ";
        // line 54
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 54, $this->source); })()), "coursPrecedentId", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "                                        <p><strong>Cours précédent :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 55, $this->source); })()), "coursPrecedentId", [], "any", false, false, false, 55), "numero", [], "any", false, false, false, 55), "html", null, true);
            yield "</p>
                                    ";
        } else {
            // line 57
            yield "                                        <p><strong>Cours précédent :</strong> Aucun</p>
                                    ";
        }
        // line 59
        yield "                                    <p><strong>Créé le :</strong> ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 59, $this->source); })()), "dateCreation", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 59, $this->source); })()), "dateCreation", [], "any", false, false, false, 59), "d/m/Y à H:i"), "html", null, true)) : ("—"));
        yield "</p>
                                </div>
                            </div>

                            <!-- Nombre de ressources (corrigé : on compte uniquement ce qui est en base) -->
                            <div class=\"col-md-6\">
                                <div class=\"bg-light rounded-3 p-4 shadow-sm text-center\">
                                    <h6 class=\"fw-bold mb-3\">Ressources</h6>
                                    ";
        // line 67
        $context["dbResources"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 67, $this->source); })()), "ressource", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 67, $this->source); })()), "ressource", [], "any", false, false, false, 67), "
"), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return Twig\Extension\CoreExtension::trim((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 67, $this->source); })())); })) : ([]));
        // line 68
        yield "                                    ";
        $context["nb"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["dbResources"]) || array_key_exists("dbResources", $context) ? $context["dbResources"] : (function () { throw new RuntimeError('Variable "dbResources" does not exist.', 68, $this->source); })()));
        // line 69
        yield "                                    <div class=\"display-4 fw-bold ";
        yield ((((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 69, $this->source); })()) > 0)) ? ("text-success") : ("text-muted"));
        yield "\">
                                        ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 70, $this->source); })()), "html", null, true);
        yield "
                                    </div>
                                    <p class=\"text-muted\">ressource";
        // line 72
        yield ((((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 72, $this->source); })()) != 1)) ? ("s") : (""));
        yield "</p>
                                </div>
                            </div>

                            <!-- Liste des ressources (seulement ce qui est stocké en base) -->
                            <div class=\"col-12\">
                                <h6 class=\"fw-bold mb-3\">Ressources du cours</h6>

                                ";
        // line 80
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["dbResources"]) || array_key_exists("dbResources", $context) ? $context["dbResources"] : (function () { throw new RuntimeError('Variable "dbResources" does not exist.', 80, $this->source); })())) > 0)) {
            // line 81
            yield "                                    <div class=\"list-group\">
                                        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dbResources"]) || array_key_exists("dbResources", $context) ? $context["dbResources"] : (function () { throw new RuntimeError('Variable "dbResources" does not exist.', 82, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 83
                yield "                                            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                                                <div class=\"d-flex align-items-center\">
                                                    ";
                // line 85
                if ((CoreExtension::inFilter("youtube.com", $context["res"]) || CoreExtension::inFilter("youtu.be", $context["res"]))) {
                    // line 86
                    yield "                                                        <i class=\"feather-video text-danger me-2\"></i>
                                                        <span>Vidéo YouTube</span>
                                                    ";
                } else {
                    // line 89
                    yield "                                                        <i class=\"feather-file-text text-primary me-2\"></i>
                                                        <span>";
                    // line 90
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["res"], "html", null, true);
                    yield "</span>
                                                    ";
                }
                // line 92
                yield "                                                </div>

                                                ";
                // line 94
                if ((CoreExtension::inFilter("youtube.com", $context["res"]) || CoreExtension::inFilter("youtu.be", $context["res"]))) {
                    // line 95
                    yield "                                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["res"], "html", null, true);
                    yield "\" target=\"_blank\" class=\"btn btn-sm btn-outline-primary\">
                                                        <i class=\"feather-external-link me-1\"></i> Ouvrir
                                                    </a>
                                                ";
                } else {
                    // line 99
                    yield "                                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["public_path"]) || array_key_exists("public_path", $context) ? $context["public_path"] : (function () { throw new RuntimeError('Variable "public_path" does not exist.', 99, $this->source); })()) . "/") . $context["res"]), "html", null, true);
                    yield "\" target=\"_blank\" class=\"btn btn-sm btn-outline-primary\">
                                                        <i class=\"feather-eye me-1\"></i> Voir
                                                    </a>
                                                ";
                }
                // line 103
                yield "                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['res'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "                                    </div>
                                ";
        } else {
            // line 107
            yield "                                    <div class=\"alert alert-info mb-0\">
                                        Aucune ressource enregistrée pour ce cours.
                                    </div>
                                ";
        }
        // line 111
        yield "                            </div>

                        </div>
                    </div>

                    <div class=\"card-footer bg-light text-muted small text-center py-3\">
                        Liste basée uniquement sur les ressources enregistrées en base de données
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
        return "cours/show.html.twig";
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
        return array (  297 => 111,  291 => 107,  287 => 105,  280 => 103,  272 => 99,  264 => 95,  262 => 94,  258 => 92,  253 => 90,  250 => 89,  245 => 86,  243 => 85,  239 => 83,  235 => 82,  232 => 81,  230 => 80,  219 => 72,  214 => 70,  209 => 69,  206 => 68,  203 => 67,  191 => 59,  187 => 57,  181 => 55,  179 => 54,  175 => 53,  169 => 52,  165 => 51,  161 => 50,  134 => 26,  128 => 23,  118 => 18,  112 => 15,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Admin - Détails du cours n°{{ cour.numero }}{% endblock %}

{% block body %}

    <div class=\"nxl-content\">

        <!-- En-tête admin -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-eye text-info me-2\"></i>
                        Détails du cours n°{{ cour.numero }}
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        {{ cour.idNiveau.titre }} • {{ cour.idNiveau.idLangue.nom }}
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_cours_index') }}\" class=\"btn btn-outline-secondary px-4 me-2\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
                <a href=\"{{ path('app_cours_edit', {'id': cour.id}) }}\" class=\"btn btn-warning px-4\">
                    <i class=\"feather-edit-2 me-2\"></i> Modifier
                </a>
            </div>
        </div>

        <!-- Contenu -->
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-11 mx-auto\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-info text-white py-4 px-5\">
                        <h5 class=\"m-0 fw-bold\">
                            <i class=\"feather-info me-2\"></i> 
                            Informations du cours
                        </h5>
                    </div>

                    <div class=\"card-body p-5\">
                        <div class=\"row g-4\">

                            <!-- Infos principales -->
                            <div class=\"col-md-6\">
                                <div class=\"bg-light rounded-3 p-4 shadow-sm\">
                                    <h6 class=\"fw-bold mb-3\">Détails</h6>
                                    <p><strong>ID :</strong> {{ cour.id }}</p>
                                    <p><strong>Langue :</strong> {{ cour.idNiveau.idLangue.nom }}</p>
                                    <p><strong>Niveau :</strong> {{ cour.idNiveau.titre }} ({{ cour.idNiveau.difficulte }})</p>
                                    <p><strong>Numéro :</strong> {{ cour.numero }}</p>
                                    {% if cour.coursPrecedentId %}
                                        <p><strong>Cours précédent :</strong> {{ cour.coursPrecedentId.numero }}</p>
                                    {% else %}
                                        <p><strong>Cours précédent :</strong> Aucun</p>
                                    {% endif %}
                                    <p><strong>Créé le :</strong> {{ cour.dateCreation ? cour.dateCreation|date('d/m/Y à H:i') : '—' }}</p>
                                </div>
                            </div>

                            <!-- Nombre de ressources (corrigé : on compte uniquement ce qui est en base) -->
                            <div class=\"col-md-6\">
                                <div class=\"bg-light rounded-3 p-4 shadow-sm text-center\">
                                    <h6 class=\"fw-bold mb-3\">Ressources</h6>
                                    {% set dbResources = cour.ressource ? cour.ressource|split('\\n')|filter(v => v|trim) : [] %}
                                    {% set nb = dbResources|length %}
                                    <div class=\"display-4 fw-bold {{ nb > 0 ? 'text-success' : 'text-muted' }}\">
                                        {{ nb }}
                                    </div>
                                    <p class=\"text-muted\">ressource{{ nb != 1 ? 's' : '' }}</p>
                                </div>
                            </div>

                            <!-- Liste des ressources (seulement ce qui est stocké en base) -->
                            <div class=\"col-12\">
                                <h6 class=\"fw-bold mb-3\">Ressources du cours</h6>

                                {% if dbResources|length > 0 %}
                                    <div class=\"list-group\">
                                        {% for res in dbResources %}
                                            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                                                <div class=\"d-flex align-items-center\">
                                                    {% if 'youtube.com' in res or 'youtu.be' in res %}
                                                        <i class=\"feather-video text-danger me-2\"></i>
                                                        <span>Vidéo YouTube</span>
                                                    {% else %}
                                                        <i class=\"feather-file-text text-primary me-2\"></i>
                                                        <span>{{ res }}</span>
                                                    {% endif %}
                                                </div>

                                                {% if 'youtube.com' in res or 'youtu.be' in res %}
                                                    <a href=\"{{ res }}\" target=\"_blank\" class=\"btn btn-sm btn-outline-primary\">
                                                        <i class=\"feather-external-link me-1\"></i> Ouvrir
                                                    </a>
                                                {% else %}
                                                    <a href=\"{{ public_path ~ '/' ~ res }}\" target=\"_blank\" class=\"btn btn-sm btn-outline-primary\">
                                                        <i class=\"feather-eye me-1\"></i> Voir
                                                    </a>
                                                {% endif %}
                                            </div>
                                        {% endfor %}
                                    </div>
                                {% else %}
                                    <div class=\"alert alert-info mb-0\">
                                        Aucune ressource enregistrée pour ce cours.
                                    </div>
                                {% endif %}
                            </div>

                        </div>
                    </div>

                    <div class=\"card-footer bg-light text-muted small text-center py-3\">
                        Liste basée uniquement sur les ressources enregistrées en base de données
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "cours/show.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\cours\\show.html.twig");
    }
}
