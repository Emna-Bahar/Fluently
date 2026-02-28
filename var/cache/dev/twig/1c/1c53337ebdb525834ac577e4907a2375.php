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

/* cours/edit.html.twig */
class __TwigTemplate_641b6f20a4d77f06689e7c6be22ba289 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/edit.html.twig"));

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

        yield "Créer un nouveau cours";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .form-error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: block;
        }
        .is-invalid {
            border-color: #dc3545 !important;
            background-color: rgba(220, 53, 69, 0.05);
        }
        .resource-item {
            transition: all 0.25s ease;
        }
        .resource-item:hover {
            background-color: rgba(13, 110, 253, 0.05);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
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

        // line 28
        yield "    <div class=\"nxl-content\">
        <!-- En-tête de page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-plus-circle text-success me-2\"></i>
                        Créer un nouveau cours
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        Ajouter une nouvelle leçon dans le parcours d'apprentissage
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Annuler
                </a>
            </div>
        </div>

        <!-- Messages Flash -->
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 51
            yield "            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "flashes", ["success"], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 58
            yield "            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "
        <!-- Formulaire principal -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-success text-white py-4 px-5 d-flex align-items-center gap-3\">
                        <div class=\"avatar avatar-lg bg-white text-success rounded-circle d-flex align-items-center justify-content-center shadow\">
                            <i class=\"feather-plus fs-4\"></i>
                        </div>
                        <div>
                            <h6 class=\"m-0 fw-bold fs-5\">
                                Créer un nouveau cours
                            </h6>
                            <small class=\"opacity-90\">
                                Tous les champs marqués * sont obligatoires
                            </small>
                        </div>
                    </div>

                    <div class=\"card-body p-5\">
                        ";
        // line 83
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4", "novalidate" => "novalidate"]]);
        yield "

                        ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'errors');
        yield "

                        <div class=\"row g-4\">
                            <!-- Langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Langue *</label>
                                ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "langue", [], "any", false, false, false, 91), 'widget', ["attr" => ["id" => "cours_langue", "class" => ("form-select form-select-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 94
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "langue", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "errors", [], "any", false, false, false, 94))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
        // line 96
        yield "
                                ";
        // line 97
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "langue", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "errors", [], "any", false, false, false, 97))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 99
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "langue", [], "any", false, false, false, 99), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 102
        yield "                            </div>

                            <!-- Niveau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Niveau *</label>
                                ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "Id_niveau", [], "any", false, false, false, 107), 'widget', ["attr" => ["id" => "niveau-select", "class" => ("form-select form-select-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 110
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "Id_niveau", [], "any", false, false, false, 110), "vars", [], "any", false, false, false, 110), "errors", [], "any", false, false, false, 110))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
        // line 112
        yield "
                                ";
        // line 113
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "Id_niveau", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "errors", [], "any", false, false, false, 113))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 114
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 115
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "Id_niveau", [], "any", false, false, false, 115), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 118
        yield "                            </div>

                            <!-- Numéro -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Numéro de la leçon *</label>
                                ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "numero", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => ("form-control form-control-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 125
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "numero", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "errors", [], "any", false, false, false, 125))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "placeholder" => "Ex: 1, 2, 3..."]]);
        // line 128
        yield "
                                ";
        // line 129
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "numero", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "errors", [], "any", false, false, false, 129))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 131
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "numero", [], "any", false, false, false, 131), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 134
        yield "                            </div>

                            <!-- Cours précédent -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Cours précédent (optionnel)</label>
                                ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => ("form-select form-select-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 141
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "errors", [], "any", false, false, false, 141))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
        // line 143
        yield "
                                ";
        // line 144
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 144), "vars", [], "any", false, false, false, 144), "errors", [], "any", false, false, false, 144))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 146
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 146), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 149
        yield "                            </div>

                            <!-- Date de création (cachée car auto-générée) -->
                            <div style=\"display: none;\">
                                ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "date_creation", [], "any", false, false, false, 153), 'widget');
        yield "
                            </div>

                            <!-- Liens YouTube -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Liens YouTube (optionnel)</label>
                                ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "youtubeLinks", [], "any", false, false, false, 159), 'widget', ["attr" => ["class" => ("form-control form-control-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 161
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "youtubeLinks", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "errors", [], "any", false, false, false, 161))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "rows" => 4, "placeholder" => "https://www.youtube.com/watch?v=xxxxxxxxxxx
https://youtu.be/yyyyyyyyyyy"]]);
        // line 165
        yield "
                                <small class=\"text-muted\">Un lien par ligne. Seuls les liens YouTube sont acceptés.</small>
                                ";
        // line 167
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "youtubeLinks", [], "any", false, false, false, 167), "vars", [], "any", false, false, false, 167), "errors", [], "any", false, false, false, 167))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "                                    <div class=\"form-error-message mt-2\">
                                        ";
            // line 169
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "youtubeLinks", [], "any", false, false, false, 169), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 172
        yield "                            </div>

                            <!-- Ajout de ressources -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-3\">Fichiers ressources</label>
                                
                                <div id=\"ressources-list\" 
                                     data-prototype=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 179), "vars", [], "any", false, false, false, 179), "prototype", [], "any", false, false, false, 179), 'widget'), "html_attr");
        yield "\" 
                                     class=\"mb-3\">
                                    ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 181));
        foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
            // line 182
            yield "                                        <div class=\"input-group mb-3 align-items-center resource-item\">
                                            ";
            // line 183
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["ressource"], 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "vars", [], "any", false, false, false, 183), "errors", [], "any", false, false, false, 183))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
            yield "
                                            <button type=\"button\" class=\"btn btn-danger\" onclick=\"this.closest('.input-group').remove()\">
                                                <i class=\"feather-trash-2\"></i>
                                            </button>
                                            ";
            // line 187
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "vars", [], "any", false, false, false, 187), "errors", [], "any", false, false, false, 187))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 188
                yield "                                                <div class=\"form-error-message mt-1\">
                                                    ";
                // line 189
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["ressource"], 'errors');
                yield "
                                                </div>
                                            ";
            }
            // line 192
            yield "                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ressource'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        yield "                                </div>

                                <button type=\"button\" class=\"btn btn-outline-primary btn-lg px-4\" id=\"add-ressource-btn\">
                                    <i class=\"feather-plus me-2\"></i> Ajouter un fichier
                                </button>

                                <div class=\"text-muted small mt-2\">
                                    Formats acceptés : PDF, MP4, JPG, PNG, MP3, WAV, OGG... (max 50 Mo)
                                </div>
                                ";
        // line 203
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 203), "vars", [], "any", false, false, false, 203), "errors", [], "any", false, false, false, 203))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 204
            yield "                                    <div class=\"form-error-message mt-2\">
                                        ";
            // line 205
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 205), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 208
        yield "                            </div>

                            <!-- Bouton de création -->
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i> 
                                    ";
        // line 214
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "request", [], "any", false, false, false, 214), "attributes", [], "any", false, false, false, 214), "get", ["_route"], "method", false, false, false, 214) == "app_admin_cours_new")) ? ("Créer le cours") : ("Modifier le cours"));
        yield "
                                </button>
                            </div>
                        </div>

                        ";
        // line 219
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const langueSelect = document.getElementById('cours_langue');
            const niveauSelect = document.getElementById('niveau-select');

            if (langueSelect && niveauSelect) {
                let allOptions = Array.from(niveauSelect.options).map(opt => ({
                    value: opt.value,
                    text: opt.text,
                    langueId: opt.dataset.langue
                }));

                function updateNiveaux() {
                    const selectedLangue = langueSelect.value;
                    const currentValue = niveauSelect.value;
                    niveauSelect.innerHTML = '';

                    const placeholder = new Option('Choisir un niveau', '');
                    placeholder.disabled = true;
                    placeholder.selected = !currentValue;
                    niveauSelect.add(placeholder);

                    allOptions.forEach(opt => {
                        if (opt.value && (opt.langueId == selectedLangue)) {
                            const option = new Option(opt.text, opt.value);
                            if (opt.langueId) option.dataset.langue = opt.langueId;
                            if (opt.value == currentValue) option.selected = true;
                            niveauSelect.add(option);
                        }
                    });
                }

                langueSelect.addEventListener('change', updateNiveaux);
                updateNiveaux();
            }

            const collectionHolder = document.getElementById('ressources-list');
            const addButton = document.getElementById('add-ressource-btn');
            let index = ";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 264)), 0), "html", null, true);
        yield ";

            if (addButton && collectionHolder.dataset.prototype) {
                addButton.addEventListener('click', function () {
                    const newForm = collectionHolder.dataset.prototype
                        .replace(/__name__/g, index++)
                        .replace(/__name__label__/g, '');
                    
                    const wrapper = document.createElement('div');
                    wrapper.className = 'input-group mb-3 align-items-center resource-item';
                    wrapper.innerHTML = newForm;

                    const removeBtn = document.createElement('button');
                    removeBtn.type = 'button';
                    removeBtn.className = 'btn btn-danger';
                    removeBtn.innerHTML = '<i class=\"feather-trash-2\"></i>';
                    removeBtn.onclick = function() { wrapper.remove(); };

                    wrapper.appendChild(removeBtn);
                    collectionHolder.appendChild(wrapper);
                });
            }
        });
    </script>
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
        return "cours/edit.html.twig";
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
        return array (  501 => 264,  453 => 219,  445 => 214,  437 => 208,  431 => 205,  428 => 204,  426 => 203,  415 => 194,  408 => 192,  402 => 189,  399 => 188,  397 => 187,  390 => 183,  387 => 182,  383 => 181,  378 => 179,  369 => 172,  363 => 169,  360 => 168,  358 => 167,  354 => 165,  351 => 161,  350 => 159,  341 => 153,  335 => 149,  329 => 146,  326 => 145,  324 => 144,  321 => 143,  319 => 141,  318 => 139,  311 => 134,  305 => 131,  302 => 130,  300 => 129,  297 => 128,  295 => 125,  294 => 123,  287 => 118,  281 => 115,  278 => 114,  276 => 113,  273 => 112,  271 => 110,  270 => 107,  263 => 102,  257 => 99,  254 => 98,  252 => 97,  249 => 96,  247 => 94,  246 => 91,  237 => 85,  232 => 83,  210 => 63,  200 => 59,  197 => 58,  193 => 57,  190 => 56,  180 => 52,  177 => 51,  173 => 50,  163 => 43,  146 => 28,  133 => 27,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Créer un nouveau cours{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .form-error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: block;
        }
        .is-invalid {
            border-color: #dc3545 !important;
            background-color: rgba(220, 53, 69, 0.05);
        }
        .resource-item {
            transition: all 0.25s ease;
        }
        .resource-item:hover {
            background-color: rgba(13, 110, 253, 0.05);
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"nxl-content\">
        <!-- En-tête de page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-plus-circle text-success me-2\"></i>
                        Créer un nouveau cours
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        Ajouter une nouvelle leçon dans le parcours d'apprentissage
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_cours_index') }}\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Annuler
                </a>
            </div>
        </div>

        <!-- Messages Flash -->
        {% for message in app.flashes('danger') %}
            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}

        <!-- Formulaire principal -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-success text-white py-4 px-5 d-flex align-items-center gap-3\">
                        <div class=\"avatar avatar-lg bg-white text-success rounded-circle d-flex align-items-center justify-content-center shadow\">
                            <i class=\"feather-plus fs-4\"></i>
                        </div>
                        <div>
                            <h6 class=\"m-0 fw-bold fs-5\">
                                Créer un nouveau cours
                            </h6>
                            <small class=\"opacity-90\">
                                Tous les champs marqués * sont obligatoires
                            </small>
                        </div>
                    </div>

                    <div class=\"card-body p-5\">
                        {{ form_start(form, {'attr': {'class': 'row g-4', 'novalidate': 'novalidate'}}) }}

                        {{ form_errors(form) }}

                        <div class=\"row g-4\">
                            <!-- Langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Langue *</label>
                                {{ form_widget(form.langue, {
                                    'attr': {
                                        'id': 'cours_langue',
                                        'class': 'form-select form-select-lg ' ~ (form.langue.vars.errors|length ? 'is-invalid' : '')
                                    }
                                }) }}
                                {% if form.langue.vars.errors|length %}
                                    <div class=\"form-error-message\">
                                        {{ form_errors(form.langue) }}
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Niveau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Niveau *</label>
                                {{ form_widget(form.Id_niveau, {
                                    'attr': {
                                        'id': 'niveau-select',
                                        'class': 'form-select form-select-lg ' ~ (form.Id_niveau.vars.errors|length ? 'is-invalid' : '')
                                    }
                                }) }}
                                {% if form.Id_niveau.vars.errors|length %}
                                    <div class=\"form-error-message\">
                                        {{ form_errors(form.Id_niveau) }}
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Numéro -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Numéro de la leçon *</label>
                                {{ form_widget(form.numero, {
                                    'attr': {
                                        'class': 'form-control form-control-lg ' ~ (form.numero.vars.errors|length ? 'is-invalid' : ''),
                                        'placeholder': 'Ex: 1, 2, 3...'
                                    }
                                }) }}
                                {% if form.numero.vars.errors|length %}
                                    <div class=\"form-error-message\">
                                        {{ form_errors(form.numero) }}
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Cours précédent -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Cours précédent (optionnel)</label>
                                {{ form_widget(form.cours_precedent_id, {
                                    'attr': {
                                        'class': 'form-select form-select-lg ' ~ (form.cours_precedent_id.vars.errors|length ? 'is-invalid' : '')
                                    }
                                }) }}
                                {% if form.cours_precedent_id.vars.errors|length %}
                                    <div class=\"form-error-message\">
                                        {{ form_errors(form.cours_precedent_id) }}
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Date de création (cachée car auto-générée) -->
                            <div style=\"display: none;\">
                                {{ form_widget(form.date_creation) }}
                            </div>

                            <!-- Liens YouTube -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Liens YouTube (optionnel)</label>
                                {{ form_widget(form.youtubeLinks, {
                                    'attr': {
                                        'class': 'form-control form-control-lg ' ~ (form.youtubeLinks.vars.errors|length ? 'is-invalid' : ''),
                                        'rows': 4,
                                        'placeholder': \"https://www.youtube.com/watch?v=xxxxxxxxxxx\\nhttps://youtu.be/yyyyyyyyyyy\"
                                    }
                                }) }}
                                <small class=\"text-muted\">Un lien par ligne. Seuls les liens YouTube sont acceptés.</small>
                                {% if form.youtubeLinks.vars.errors|length %}
                                    <div class=\"form-error-message mt-2\">
                                        {{ form_errors(form.youtubeLinks) }}
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Ajout de ressources -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-3\">Fichiers ressources</label>
                                
                                <div id=\"ressources-list\" 
                                     data-prototype=\"{{ form_widget(form.ressourcesFiles.vars.prototype)|e('html_attr') }}\" 
                                     class=\"mb-3\">
                                    {% for ressource in form.ressourcesFiles %}
                                        <div class=\"input-group mb-3 align-items-center resource-item\">
                                            {{ form_widget(ressource, {'attr': {'class': 'form-control ' ~ (ressource.vars.errors|length ? 'is-invalid' : '')}}) }}
                                            <button type=\"button\" class=\"btn btn-danger\" onclick=\"this.closest('.input-group').remove()\">
                                                <i class=\"feather-trash-2\"></i>
                                            </button>
                                            {% if ressource.vars.errors|length %}
                                                <div class=\"form-error-message mt-1\">
                                                    {{ form_errors(ressource) }}
                                                </div>
                                            {% endif %}
                                        </div>
                                    {% endfor %}
                                </div>

                                <button type=\"button\" class=\"btn btn-outline-primary btn-lg px-4\" id=\"add-ressource-btn\">
                                    <i class=\"feather-plus me-2\"></i> Ajouter un fichier
                                </button>

                                <div class=\"text-muted small mt-2\">
                                    Formats acceptés : PDF, MP4, JPG, PNG, MP3, WAV, OGG... (max 50 Mo)
                                </div>
                                {% if form.ressourcesFiles.vars.errors|length %}
                                    <div class=\"form-error-message mt-2\">
                                        {{ form_errors(form.ressourcesFiles) }}
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Bouton de création -->
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i> 
                                    {{ app.request.attributes.get('_route') == 'app_admin_cours_new' ? 'Créer le cours' : 'Modifier le cours' }}
                                </button>
                            </div>
                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const langueSelect = document.getElementById('cours_langue');
            const niveauSelect = document.getElementById('niveau-select');

            if (langueSelect && niveauSelect) {
                let allOptions = Array.from(niveauSelect.options).map(opt => ({
                    value: opt.value,
                    text: opt.text,
                    langueId: opt.dataset.langue
                }));

                function updateNiveaux() {
                    const selectedLangue = langueSelect.value;
                    const currentValue = niveauSelect.value;
                    niveauSelect.innerHTML = '';

                    const placeholder = new Option('Choisir un niveau', '');
                    placeholder.disabled = true;
                    placeholder.selected = !currentValue;
                    niveauSelect.add(placeholder);

                    allOptions.forEach(opt => {
                        if (opt.value && (opt.langueId == selectedLangue)) {
                            const option = new Option(opt.text, opt.value);
                            if (opt.langueId) option.dataset.langue = opt.langueId;
                            if (opt.value == currentValue) option.selected = true;
                            niveauSelect.add(option);
                        }
                    });
                }

                langueSelect.addEventListener('change', updateNiveaux);
                updateNiveaux();
            }

            const collectionHolder = document.getElementById('ressources-list');
            const addButton = document.getElementById('add-ressource-btn');
            let index = {{ form.ressourcesFiles|length|default(0) }};

            if (addButton && collectionHolder.dataset.prototype) {
                addButton.addEventListener('click', function () {
                    const newForm = collectionHolder.dataset.prototype
                        .replace(/__name__/g, index++)
                        .replace(/__name__label__/g, '');
                    
                    const wrapper = document.createElement('div');
                    wrapper.className = 'input-group mb-3 align-items-center resource-item';
                    wrapper.innerHTML = newForm;

                    const removeBtn = document.createElement('button');
                    removeBtn.type = 'button';
                    removeBtn.className = 'btn btn-danger';
                    removeBtn.innerHTML = '<i class=\"feather-trash-2\"></i>';
                    removeBtn.onclick = function() { wrapper.remove(); };

                    wrapper.appendChild(removeBtn);
                    collectionHolder.appendChild(wrapper);
                });
            }
        });
    </script>
{% endblock %}", "cours/edit.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\cours\\edit.html.twig");
    }
}
