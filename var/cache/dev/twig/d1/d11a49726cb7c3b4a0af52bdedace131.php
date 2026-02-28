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
class __TwigTemplate_937c4878323a0729bc4b01f1317947ee extends Template
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
        yield "    <div class=\"nxl-content\">
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-eye text-info me-2\"></i>
                        Détails du cours n°";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 12, $this->source); })()), "numero", [], "any", false, false, false, 12), "html", null, true);
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 15, $this->source); })()), "idNiveau", [], "any", false, false, false, 15), "titre", [], "any", false, false, false, 15), "html", null, true);
        yield " • ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 15, $this->source); })()), "idNiveau", [], "any", false, false, false, 15), "idLangue", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield "
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\" class=\"btn btn-outline-secondary px-4 me-2\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
                <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\" class=\"btn btn-warning px-4\">
                    <i class=\"feather-edit-2 me-2\"></i> Modifier
                </a>
            </div>
        </div>

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
                            <div class=\"col-md-6\">
                                <div class=\"bg-light rounded-3 p-4 shadow-sm\">
                                    <h6 class=\"fw-bold mb-3\">Détails</h6>
                                    <p><strong>ID :</strong> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
                                    <p><strong>Langue :</strong> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 45, $this->source); })()), "idNiveau", [], "any", false, false, false, 45), "idLangue", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
        yield "</p>
                                    <p><strong>Niveau :</strong> ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 46, $this->source); })()), "idNiveau", [], "any", false, false, false, 46), "titre", [], "any", false, false, false, 46), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 46, $this->source); })()), "idNiveau", [], "any", false, false, false, 46), "difficulte", [], "any", false, false, false, 46), "html", null, true);
        yield ")</p>
                                    <p><strong>Numéro :</strong> ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 47, $this->source); })()), "numero", [], "any", false, false, false, 47), "html", null, true);
        yield "</p>
                                    ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 48, $this->source); })()), "coursPrecedentId", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                                        <p><strong>Cours précédent :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 49, $this->source); })()), "coursPrecedentId", [], "any", false, false, false, 49), "numero", [], "any", false, false, false, 49), "html", null, true);
            yield "</p>
                                    ";
        } else {
            // line 51
            yield "                                        <p><strong>Cours précédent :</strong> Aucun</p>
                                    ";
        }
        // line 53
        yield "                                    <p><strong>Créé le :</strong> ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 53, $this->source); })()), "dateCreation", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 53, $this->source); })()), "dateCreation", [], "any", false, false, false, 53), "d/m/Y à H:i"), "html", null, true)) : ("—"));
        yield "</p>
                                </div>
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"bg-light rounded-3 p-4 shadow-sm text-center\">
                                    <h6 class=\"fw-bold mb-3\">Ressources</h6>
                                    ";
        // line 60
        $context["dbResources"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 60, $this->source); })()), "ressource", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 60, $this->source); })()), "ressource", [], "any", false, false, false, 60), "
"), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return Twig\Extension\CoreExtension::trim((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 60, $this->source); })())); })) : ([]));
        // line 61
        yield "                                    ";
        $context["nb"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["dbResources"]) || array_key_exists("dbResources", $context) ? $context["dbResources"] : (function () { throw new RuntimeError('Variable "dbResources" does not exist.', 61, $this->source); })()));
        // line 62
        yield "                                    <div class=\"display-4 fw-bold ";
        yield ((((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 62, $this->source); })()) > 0)) ? ("text-success") : ("text-muted"));
        yield "\">
                                        ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 63, $this->source); })()), "html", null, true);
        yield "
                                    </div>
                                    <p class=\"text-muted\">ressource";
        // line 65
        yield ((((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 65, $this->source); })()) != 1)) ? ("s") : (""));
        yield "</p>
                                </div>
                            </div>

                            <div class=\"col-12\">
                                <h6 class=\"fw-bold mb-3\">Ressources du cours</h6>

                                ";
        // line 72
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["dbResources"]) || array_key_exists("dbResources", $context) ? $context["dbResources"] : (function () { throw new RuntimeError('Variable "dbResources" does not exist.', 72, $this->source); })())) > 0)) {
            // line 73
            yield "                                    <div class=\"list-group\">
                                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dbResources"]) || array_key_exists("dbResources", $context) ? $context["dbResources"] : (function () { throw new RuntimeError('Variable "dbResources" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 75
                yield "                                            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                                                <div class=\"d-flex align-items-center\">
                                                    ";
                // line 77
                if ((CoreExtension::inFilter("youtube.com", $context["res"]) || CoreExtension::inFilter("youtu.be", $context["res"]))) {
                    // line 78
                    yield "                                                        <i class=\"feather-video text-danger me-2\"></i>
                                                        <span>Vidéo YouTube</span>
                                                    ";
                } else {
                    // line 81
                    yield "                                                        <i class=\"feather-file-text text-primary me-2\"></i>
                                                        <span>";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["res"], "html", null, true);
                    yield "</span>
                                                    ";
                }
                // line 84
                yield "                                                </div>

                                                ";
                // line 86
                if ((CoreExtension::inFilter("youtube.com", $context["res"]) || CoreExtension::inFilter("youtu.be", $context["res"]))) {
                    // line 87
                    yield "                                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["res"], "html", null, true);
                    yield "\" target=\"_blank\" class=\"btn btn-sm btn-outline-primary\">
                                                        <i class=\"feather-external-link me-1\"></i> Ouvrir
                                                    </a>
                                                ";
                } else {
                    // line 91
                    yield "                                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["public_path"]) || array_key_exists("public_path", $context) ? $context["public_path"] : (function () { throw new RuntimeError('Variable "public_path" does not exist.', 91, $this->source); })()) . "/") . $context["res"]), "html", null, true);
                    yield "\" target=\"_blank\" class=\"btn btn-sm btn-outline-primary\">
                                                        <i class=\"feather-eye me-1\"></i> Voir
                                                    </a>
                                                ";
                }
                // line 95
                yield "                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['res'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "                                    </div>
                                ";
        } else {
            // line 99
            yield "                                    <div class=\"alert alert-info mb-0\">
                                        Aucune ressource enregistrée pour ce cours.
                                    </div>
                                ";
        }
        // line 103
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
        return array (  289 => 103,  283 => 99,  279 => 97,  272 => 95,  264 => 91,  256 => 87,  254 => 86,  250 => 84,  245 => 82,  242 => 81,  237 => 78,  235 => 77,  231 => 75,  227 => 74,  224 => 73,  222 => 72,  212 => 65,  207 => 63,  202 => 62,  199 => 61,  196 => 60,  185 => 53,  181 => 51,  175 => 49,  173 => 48,  169 => 47,  163 => 46,  159 => 45,  155 => 44,  131 => 23,  125 => 20,  115 => 15,  109 => 12,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Admin - Détails du cours n°{{ cour.numero }}{% endblock %}

{% block body %}
    <div class=\"nxl-content\">
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

{% endblock %}", "cours/show.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\cours\\show.html.twig");
    }
}
