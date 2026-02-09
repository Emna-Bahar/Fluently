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

/* niveau/new.html.twig */
class __TwigTemplate_0caca78438ddec7358d99a7cf5a10145 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau/new.html.twig"));

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

        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier le niveau : " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3)), "html", null, true)) : ("Créer un niveau"));
        
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
                        ";
        // line 15
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier le niveau : " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15)), "html", null, true)) : ("Créer un nouveau niveau"));
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        ";
        // line 18
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifiez les informations du niveau") : ("Ajoutez un nouveau niveau pour une langue"));
        yield "
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
            </div>
        </div>

        <!-- Formulaire principal -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-primary text-white py-4 px-5 d-flex align-items-center gap-3\">
                        <div class=\"avatar avatar-lg bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow\">
                            <i class=\"feather-plus fs-4\"></i>
                        </div>
                        <div>
                            <h6 class=\"m-0 fw-bold fs-5\">
                                ";
        // line 39
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier le niveau : " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 39, $this->source); })()), "titre", [], "any", false, false, false, 39)), "html", null, true)) : ("Créer un nouveau niveau"));
        yield "
                            </h6>
                            <small class=\"opacity-90\">
                                Remplissez les informations avec soin
                            </small>
                        </div>
                    </div>

                    <div class=\"card-body p-5\">
                        ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4 needs-validation", "novalidate" => "novalidate"]]);
        yield "

                        <div class=\"row g-4\">

                            <!-- Langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Langue</label>
                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "Id_langue", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "Id_langue", [], "any", false, false, false, 56), 'errors');
        yield "
                            </div>

                            <!-- Titre du niveau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Titre du niveau</label>
                                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "titre", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "titre", [], "any", false, false, false, 63), 'errors');
        yield "
                            </div>

                            <!-- Description détaillée -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Description détaillée</label>
                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control", "rows" => 5, "style" => "min-height: 140px;"]]);
        yield "
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), 'errors');
        yield "
                            </div>

                            <!-- Image de couverture -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2 d-block\">
                                    Image de couverture
                                    <small class=\"text-muted ms-2\">(jpg, png, webp – recommandé 800×450 px)</small>
                                </label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text bg-light\">
                                        <i class=\"feather-image\"></i>
                                    </span>
                                    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "imageCouvertureFile", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "imageCouvertureFile", [], "any", false, false, false, 85), 'errors');
        yield "

                                ";
        // line 87
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 87, $this->source); })()), "imageCouverture", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "                                    <div class=\"mt-4 text-center\">
                                        <p class=\"small text-muted mb-2\">Image actuelle :</p>
                                        <div class=\"d-inline-block p-2 bg-light rounded-3 shadow-sm\">
                                            <img src=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/niveaux/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 91, $this->source); })()), "imageCouverture", [], "any", false, false, false, 91))), "html", null, true);
            yield "\" 
                                                 alt=\"Couverture actuelle\" 
                                                 class=\"img-fluid rounded\" 
                                                 style=\"max-height: 180px; border: 1px solid #dee2e6;\">
                                        </div>
                                    </div>
                                ";
        }
        // line 98
        yield "                            </div>

                            <!-- Difficulté + Ordre -->
                            <div class=\"col-md-6\">
                                <div class=\"row g-3\">
                                    <div class=\"col-6\">
                                        <label class=\"form-label fw-bold mb-2\">Difficulté</label>
                                        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "difficulte", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                                        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "difficulte", [], "any", false, false, false, 106), 'errors');
        yield "
                                    </div>
                                    <div class=\"col-6\">
                                        <label class=\"form-label fw-bold mb-2\">Ordre (1 = A1, 2 = A2, etc.)</label>
                                        ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "ordre", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                                        ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "ordre", [], "any", false, false, false, 111), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>

                            <!-- Seuils de score -->
                            <div class=\"col-12\">
                                <h6 class=\"fw-bold mb-3 text-dark\">Seuils de score</h6>
                                <div class=\"row g-4\">
                                    <div class=\"col-md-6\">
                                        <label class=\"form-label fw-bold mb-2\">Score minimum pour réussir</label>
                                        ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "seuil_score_min", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                                        ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "seuil_score_min", [], "any", false, false, false, 123), 'errors');
        yield "
                                    </div>
                                    <div class=\"col-md-6\">
                                        <label class=\"form-label fw-bold mb-2\">Score maximum possible</label>
                                        ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "seuil_score_max", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                                        ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "seuil_score_max", [], "any", false, false, false, 128), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>

                            <!-- Bouton de soumission -->
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i>
                                    ";
        // line 137
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour le niveau") : ("Créer le niveau"));
        yield "
                                </button>
                            </div>

                        </div>

                        ";
        // line 143
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), 'form_end');
        yield "
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
        return "niveau/new.html.twig";
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
        return array (  313 => 143,  304 => 137,  292 => 128,  288 => 127,  281 => 123,  277 => 122,  263 => 111,  259 => 110,  252 => 106,  248 => 105,  239 => 98,  229 => 91,  224 => 88,  222 => 87,  217 => 85,  212 => 83,  196 => 70,  192 => 69,  183 => 63,  179 => 62,  170 => 56,  166 => 55,  156 => 48,  144 => 39,  125 => 23,  117 => 18,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}{{ niveau.id ? 'Modifier le niveau : ' ~ niveau.titre : 'Créer un niveau' }}{% endblock %}

{% block body %}

    <div class=\"nxl-content\">

        <!-- En-tête de page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-layers text-primary me-2\"></i>
                        {{ niveau.id ? 'Modifier le niveau : ' ~ niveau.titre : 'Créer un nouveau niveau' }}
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        {{ niveau.id ? 'Modifiez les informations du niveau' : 'Ajoutez un nouveau niveau pour une langue' }}
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_niveau_index') }}\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour à la liste
                </a>
            </div>
        </div>

        <!-- Formulaire principal -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-primary text-white py-4 px-5 d-flex align-items-center gap-3\">
                        <div class=\"avatar avatar-lg bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow\">
                            <i class=\"feather-plus fs-4\"></i>
                        </div>
                        <div>
                            <h6 class=\"m-0 fw-bold fs-5\">
                                {{ niveau.id ? 'Modifier le niveau : ' ~ niveau.titre : 'Créer un nouveau niveau' }}
                            </h6>
                            <small class=\"opacity-90\">
                                Remplissez les informations avec soin
                            </small>
                        </div>
                    </div>

                    <div class=\"card-body p-5\">
                        {{ form_start(form, {'attr': {'class': 'row g-4 needs-validation', 'novalidate': 'novalidate'}}) }}

                        <div class=\"row g-4\">

                            <!-- Langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Langue</label>
                                {{ form_widget(form.Id_langue, {'attr': {'class': 'form-select form-select-lg'}}) }}
                                {{ form_errors(form.Id_langue) }}
                            </div>

                            <!-- Titre du niveau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Titre du niveau</label>
                                {{ form_widget(form.titre, {'attr': {'class': 'form-control form-control-lg'}}) }}
                                {{ form_errors(form.titre) }}
                            </div>

                            <!-- Description détaillée -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Description détaillée</label>
                                {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 5, 'style': 'min-height: 140px;'}}) }}
                                {{ form_errors(form.description) }}
                            </div>

                            <!-- Image de couverture -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2 d-block\">
                                    Image de couverture
                                    <small class=\"text-muted ms-2\">(jpg, png, webp – recommandé 800×450 px)</small>
                                </label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text bg-light\">
                                        <i class=\"feather-image\"></i>
                                    </span>
                                    {{ form_widget(form.imageCouvertureFile, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.imageCouvertureFile) }}

                                {% if niveau.imageCouverture %}
                                    <div class=\"mt-4 text-center\">
                                        <p class=\"small text-muted mb-2\">Image actuelle :</p>
                                        <div class=\"d-inline-block p-2 bg-light rounded-3 shadow-sm\">
                                            <img src=\"{{ asset('uploads/niveaux/' ~ niveau.imageCouverture) }}\" 
                                                 alt=\"Couverture actuelle\" 
                                                 class=\"img-fluid rounded\" 
                                                 style=\"max-height: 180px; border: 1px solid #dee2e6;\">
                                        </div>
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Difficulté + Ordre -->
                            <div class=\"col-md-6\">
                                <div class=\"row g-3\">
                                    <div class=\"col-6\">
                                        <label class=\"form-label fw-bold mb-2\">Difficulté</label>
                                        {{ form_widget(form.difficulte, {'attr': {'class': 'form-control form-control-lg'}}) }}
                                        {{ form_errors(form.difficulte) }}
                                    </div>
                                    <div class=\"col-6\">
                                        <label class=\"form-label fw-bold mb-2\">Ordre (1 = A1, 2 = A2, etc.)</label>
                                        {{ form_widget(form.ordre, {'attr': {'class': 'form-control form-control-lg'}}) }}
                                        {{ form_errors(form.ordre) }}
                                    </div>
                                </div>
                            </div>

                            <!-- Seuils de score -->
                            <div class=\"col-12\">
                                <h6 class=\"fw-bold mb-3 text-dark\">Seuils de score</h6>
                                <div class=\"row g-4\">
                                    <div class=\"col-md-6\">
                                        <label class=\"form-label fw-bold mb-2\">Score minimum pour réussir</label>
                                        {{ form_widget(form.seuil_score_min, {'attr': {'class': 'form-control form-control-lg'}}) }}
                                        {{ form_errors(form.seuil_score_min) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                        <label class=\"form-label fw-bold mb-2\">Score maximum possible</label>
                                        {{ form_widget(form.seuil_score_max, {'attr': {'class': 'form-control form-control-lg'}}) }}
                                        {{ form_errors(form.seuil_score_max) }}
                                    </div>
                                </div>
                            </div>

                            <!-- Bouton de soumission -->
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i>
                                    {{ niveau.id ? 'Mettre à jour le niveau' : 'Créer le niveau' }}
                                </button>
                            </div>

                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "niveau/new.html.twig", "C:\\Users\\emnab\\Documents\\Fluently\\templates\\niveau\\new.html.twig");
    }
}
