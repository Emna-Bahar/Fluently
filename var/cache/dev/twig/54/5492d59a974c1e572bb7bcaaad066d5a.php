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

/* cours/new.html.twig */
class __TwigTemplate_44c732077aa54857dc627fd40a65e6e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/new.html.twig"));

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
        // line 86
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'errors');
        yield "

                        <div class=\"row g-4\">
                            <!-- Langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Langue *</label>
                                ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "langue", [], "any", false, false, false, 92), 'widget', ["attr" => ["id" => "cours_langue", "class" => ("form-select form-select-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 95
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "langue", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "errors", [], "any", false, false, false, 95))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
        // line 97
        yield "
                                ";
        // line 98
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "langue", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "errors", [], "any", false, false, false, 98))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 100
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "langue", [], "any", false, false, false, 100), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 103
        yield "                            </div>

                            <!-- Niveau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Niveau *</label>
                                ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "Id_niveau", [], "any", false, false, false, 108), 'widget', ["attr" => ["id" => "niveau-select", "class" => ("form-select form-select-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 111
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "Id_niveau", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "errors", [], "any", false, false, false, 111))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
        // line 113
        yield "
                                ";
        // line 114
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "Id_niveau", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "errors", [], "any", false, false, false, 114))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 116
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "Id_niveau", [], "any", false, false, false, 116), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 119
        yield "                            </div>

                            <!-- Numéro -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Numéro de la leçon *</label>
                                ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "numero", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => ("form-control form-control-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 126
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "numero", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "errors", [], "any", false, false, false, 126))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "placeholder" => "Ex: 1, 2, 3..."]]);
        // line 129
        yield "
                                ";
        // line 130
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "numero", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "errors", [], "any", false, false, false, 130))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 132
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "numero", [], "any", false, false, false, 132), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 135
        yield "                            </div>

                            <!-- Cours précédent -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Cours précédent (optionnel)</label>
                                ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => ("form-select form-select-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 142
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 142), "vars", [], "any", false, false, false, 142), "errors", [], "any", false, false, false, 142))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
        // line 144
        yield "
                                ";
        // line 145
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 145), "vars", [], "any", false, false, false, 145), "errors", [], "any", false, false, false, 145))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 146
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 147
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 147), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 150
        yield "                            </div>

                            <!-- Date de création (cachée car auto-générée) -->
                            <div style=\"display: none;\">
                                ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "date_creation", [], "any", false, false, false, 154), 'widget');
        yield "
                            </div>

                            <!-- Liens YouTube -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Liens YouTube (optionnel)</label>
                                ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "youtubeLinks", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" => ("form-control form-control-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 162
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "youtubeLinks", [], "any", false, false, false, 162), "vars", [], "any", false, false, false, 162), "errors", [], "any", false, false, false, 162))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "rows" => 4, "placeholder" => "https://www.youtube.com/watch?v=xxxxxxxxxxx
https://youtu.be/yyyyyyyyyyy"]]);
        // line 166
        yield "
                                <small class=\"text-muted\">Un lien par ligne. Seuls les liens YouTube sont acceptés.</small>
                                ";
        // line 168
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "youtubeLinks", [], "any", false, false, false, 168), "vars", [], "any", false, false, false, 168), "errors", [], "any", false, false, false, 168))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 169
            yield "                                    <div class=\"form-error-message mt-2\">
                                        ";
            // line 170
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "youtubeLinks", [], "any", false, false, false, 170), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 173
        yield "                            </div>

                            <!-- Ajout de ressources -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-3\">Fichiers ressources</label>
                                
                                <div id=\"ressources-list\" 
                                     data-prototype=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 180), "vars", [], "any", false, false, false, 180), "prototype", [], "any", false, false, false, 180), 'widget'), "html_attr");
        yield "\" 
                                     class=\"mb-3\">
                                    ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 182));
        foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
            // line 183
            yield "                                        <div class=\"input-group mb-3 align-items-center resource-item\">
                                            ";
            // line 184
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["ressource"], 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "vars", [], "any", false, false, false, 184), "errors", [], "any", false, false, false, 184))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
            yield "
                                            <button type=\"button\" class=\"btn btn-danger\" onclick=\"this.closest('.input-group').remove()\">
                                                <i class=\"feather-trash-2\"></i>
                                            </button>
                                            ";
            // line 188
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "vars", [], "any", false, false, false, 188), "errors", [], "any", false, false, false, 188))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 189
                yield "                                                <div class=\"form-error-message mt-1\">
                                                    ";
                // line 190
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["ressource"], 'errors');
                yield "
                                                </div>
                                            ";
            }
            // line 193
            yield "                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ressource'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        yield "                                </div>

                                <button type=\"button\" class=\"btn btn-outline-primary btn-lg px-4\" id=\"add-ressource-btn\">
                                    <i class=\"feather-plus me-2\"></i> Ajouter un fichier
                                </button>

                                <div class=\"text-muted small mt-2\">
                                    Formats acceptés : PDF, MP4, JPG, PNG, MP3, WAV, OGG... (max 50 Mo)
                                </div>
                                ";
        // line 204
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 204), "vars", [], "any", false, false, false, 204), "errors", [], "any", false, false, false, 204))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 205
            yield "                                    <div class=\"form-error-message mt-2\">
                                        ";
            // line 206
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 206), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 209
        yield "                            </div>

                            <!-- Bouton de création -->
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i> 
                                    ";
        // line 215
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "request", [], "any", false, false, false, 215), "attributes", [], "any", false, false, false, 215), "get", ["_route"], "method", false, false, false, 215) == "app_admin_cours_new")) ? ("Créer le cours") : ("Modifier le cours"));
        yield "
                                </button>
                            </div>
                        </div>

                        ";
        // line 220
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Gestion dynamique des niveaux selon la langue
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

                    // Ajouter l'option placeholder
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

            // Ajout dynamique de ressources
            const collectionHolder = document.getElementById('ressources-list');
            const addButton = document.getElementById('add-ressource-btn');
            let index = ";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 268)), 0), "html", null, true);
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
        return "cours/new.html.twig";
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
        return array (  505 => 268,  454 => 220,  446 => 215,  438 => 209,  432 => 206,  429 => 205,  427 => 204,  416 => 195,  409 => 193,  403 => 190,  400 => 189,  398 => 188,  391 => 184,  388 => 183,  384 => 182,  379 => 180,  370 => 173,  364 => 170,  361 => 169,  359 => 168,  355 => 166,  352 => 162,  351 => 160,  342 => 154,  336 => 150,  330 => 147,  327 => 146,  325 => 145,  322 => 144,  320 => 142,  319 => 140,  312 => 135,  306 => 132,  303 => 131,  301 => 130,  298 => 129,  296 => 126,  295 => 124,  288 => 119,  282 => 116,  279 => 115,  277 => 114,  274 => 113,  272 => 111,  271 => 108,  264 => 103,  258 => 100,  255 => 99,  253 => 98,  250 => 97,  248 => 95,  247 => 92,  237 => 86,  232 => 83,  210 => 63,  200 => 59,  197 => 58,  193 => 57,  190 => 56,  180 => 52,  177 => 51,  173 => 50,  163 => 43,  146 => 28,  133 => 27,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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

                        {# Erreurs globales du formulaire #}
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
            // Gestion dynamique des niveaux selon la langue
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

                    // Ajouter l'option placeholder
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

            // Ajout dynamique de ressources
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
{% endblock %}", "cours/new.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\cours\\new.html.twig");
    }
}
