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
class __TwigTemplate_26e264350097c9e8f8ed834fcf1f6744 extends Template
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
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-layers text-primary me-2\"></i>
                        ";
        // line 13
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier le niveau : " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13)), "html", null, true)) : ("Créer un nouveau niveau"));
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        ";
        // line 16
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifiez les informations du niveau") : ("Ajoutez un nouveau niveau pour une langue"));
        yield "
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 21
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
        // line 36
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier le niveau : " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 36, $this->source); })()), "titre", [], "any", false, false, false, 36)), "html", null, true)) : ("Créer un nouveau niveau"));
        yield "
                            </h6>
                            <small class=\"opacity-90\">
                                Remplissez les informations avec soin
                            </small>
                        </div>
                    </div>

                    <div class=\"card-body p-5\">
                        ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4 needs-validation", "novalidate" => "novalidate"]]);
        yield "

                        <div class=\"row g-4\">

                            <!-- Langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Langue</label>
                                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "Id_langue", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Id_langue", [], "any", false, false, false, 53), 'errors');
        yield "
                            </div>

                            <!-- Titre du niveau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Titre du niveau</label>
                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "titre", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "titre", [], "any", false, false, false, 60), 'errors');
        yield "
                            </div>

                            <!-- Description détaillée -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Description détaillée</label>
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "rows" => 5, "style" => "min-height: 140px;"]]);
        yield "
                                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "description", [], "any", false, false, false, 67), 'errors');
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
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "imageCouvertureFile", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "imageCouvertureFile", [], "any", false, false, false, 82), 'errors');
        yield "

                                ";
        // line 84
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 84, $this->source); })()), "imageCouverture", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "                                    <div class=\"mt-4 text-center\">
                                        <p class=\"small text-muted mb-2\">Image actuelle :</p>
                                        <div class=\"d-inline-block p-2 bg-light rounded-3 shadow-sm\">
                                            <img src=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/niveaux/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 88, $this->source); })()), "imageCouverture", [], "any", false, false, false, 88))), "html", null, true);
            yield "\" 
                                                 alt=\"Couverture actuelle\" 
                                                 class=\"img-fluid rounded\" 
                                                 style=\"max-height: 180px; border: 1px solid #dee2e6;\">
                                        </div>
                                    </div>
                                ";
        }
        // line 95
        yield "                            </div>

                            <!-- Difficulté + Ordre -->
                            <div class=\"col-md-6\">
                                <div class=\"row g-3\">
                                    <div class=\"col-6\">
                                        <label class=\"form-label fw-bold mb-2\">Difficulté</label>
                                        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "difficulte", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                                        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "difficulte", [], "any", false, false, false, 103), 'errors');
        yield "
                                    </div>
                                    <div class=\"col-6\">
                                        <label class=\"form-label fw-bold mb-2\">Ordre (1 = A1, 2 = A2, etc.)</label>
                                        ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "ordre", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                                        ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "ordre", [], "any", false, false, false, 108), 'errors');
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
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "seuil_score_min", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                                        ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "seuil_score_min", [], "any", false, false, false, 120), 'errors');
        yield "
                                    </div>
                                    <div class=\"col-md-6\">
                                        <label class=\"form-label fw-bold mb-2\">Score maximum possible</label>
                                        ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "seuil_score_max", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                                        ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "seuil_score_max", [], "any", false, false, false, 125), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i>
                                    ";
        // line 133
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 133, $this->source); })()), "id", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour le niveau") : ("Créer le niveau"));
        yield "
                                </button>
                            </div>

                        </div>

                        ";
        // line 139
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), 'form_end');
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
        return array (  309 => 139,  300 => 133,  289 => 125,  285 => 124,  278 => 120,  274 => 119,  260 => 108,  256 => 107,  249 => 103,  245 => 102,  236 => 95,  226 => 88,  221 => 85,  219 => 84,  214 => 82,  209 => 80,  193 => 67,  189 => 66,  180 => 60,  176 => 59,  167 => 53,  163 => 52,  153 => 45,  141 => 36,  123 => 21,  115 => 16,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}{{ niveau.id ? 'Modifier le niveau : ' ~ niveau.titre : 'Créer un niveau' }}{% endblock %}

{% block body %}

    <div class=\"nxl-content\">
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

{% endblock %}", "niveau/new.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\niveau\\new.html.twig");
    }
}
