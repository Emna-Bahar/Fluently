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
class __TwigTemplate_efb04da7dcdae12dbc33838262164397 extends Template
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
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Annuler
                </a>
            </div>
        </div>
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 48
            yield "            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "flashes", ["success"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            yield "            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "        <div class=\"row justify-content-center\">
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
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4", "novalidate" => "novalidate"]]);
        yield "
                        ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'errors');
        yield "
                        <div class=\"row g-4\">
                            <!-- Langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Langue *</label>
                                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "langue", [], "any", false, false, false, 83), 'widget', ["attr" => ["id" => "cours_langue", "class" => ("form-select form-select-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 86
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "langue", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "errors", [], "any", false, false, false, 86))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
        // line 88
        yield "
                                ";
        // line 89
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "langue", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "errors", [], "any", false, false, false, 89))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 91
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "langue", [], "any", false, false, false, 91), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 94
        yield "                            </div>

                            <!-- Niveau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Niveau *</label>
                                ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "Id_niveau", [], "any", false, false, false, 99), 'widget', ["attr" => ["id" => "niveau-select", "class" => ("form-select form-select-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 102
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "Id_niveau", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "errors", [], "any", false, false, false, 102))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
        // line 104
        yield "
                                ";
        // line 105
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "Id_niveau", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "errors", [], "any", false, false, false, 105))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 107
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "Id_niveau", [], "any", false, false, false, 107), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 110
        yield "                            </div>

                            <!-- Numéro -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Numéro de la leçon *</label>
                                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "numero", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => ("form-control form-control-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 117
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "numero", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "errors", [], "any", false, false, false, 117))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "placeholder" => "Ex: 1, 2, 3..."]]);
        // line 120
        yield "
                                ";
        // line 121
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "numero", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "errors", [], "any", false, false, false, 121))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 122
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 123
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "numero", [], "any", false, false, false, 123), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 126
        yield "                            </div>

                            <!-- Cours précédent -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Cours précédent (optionnel)</label>
                                ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => ("form-select form-select-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 133
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 133), "vars", [], "any", false, false, false, 133), "errors", [], "any", false, false, false, 133))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
        // line 135
        yield "
                                ";
        // line 136
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 136), "vars", [], "any", false, false, false, 136), "errors", [], "any", false, false, false, 136))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 138
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 138), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 141
        yield "                            </div>
                            <div style=\"display: none;\">
                                ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "date_creation", [], "any", false, false, false, 143), 'widget');
        yield "
                            </div>
                            <!-- Liens YouTube -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Liens YouTube (optionnel)</label>
                                ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "youtubeLinks", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => ("form-control form-control-lg " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 150
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "youtubeLinks", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "errors", [], "any", false, false, false, 150))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "rows" => 4, "placeholder" => "https://www.youtube.com/watch?v=xxxxxxxxxxx
https://youtu.be/yyyyyyyyyyy"]]);
        // line 154
        yield "
                                <small class=\"text-muted\">Un lien par ligne. Seuls les liens YouTube sont acceptés.</small>
                                ";
        // line 156
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "youtubeLinks", [], "any", false, false, false, 156), "vars", [], "any", false, false, false, 156), "errors", [], "any", false, false, false, 156))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 157
            yield "                                    <div class=\"form-error-message mt-2\">
                                        ";
            // line 158
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "youtubeLinks", [], "any", false, false, false, 158), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 161
        yield "                            </div>
                            <!-- Ajout de ressources -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-3\">Fichiers ressources</label>
                                <div id=\"ressources-list\" 
                                     data-prototype=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "prototype", [], "any", false, false, false, 166), 'widget'), "html_attr");
        yield "\" 
                                     class=\"mb-3\">
                                    ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 168));
        foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
            // line 169
            yield "                                        <div class=\"input-group mb-3 align-items-center resource-item\">
                                            ";
            // line 170
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["ressource"], 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "vars", [], "any", false, false, false, 170), "errors", [], "any", false, false, false, 170))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
            yield "
                                            <button type=\"button\" class=\"btn btn-danger\" onclick=\"this.closest('.input-group').remove()\">
                                                <i class=\"feather-trash-2\"></i>
                                            </button>
                                            ";
            // line 174
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ressource"], "vars", [], "any", false, false, false, 174), "errors", [], "any", false, false, false, 174))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 175
                yield "                                                <div class=\"form-error-message mt-1\">
                                                    ";
                // line 176
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["ressource"], 'errors');
                yield "
                                                </div>
                                            ";
            }
            // line 179
            yield "                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ressource'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "                                </div>
                                <button type=\"button\" class=\"btn btn-outline-primary btn-lg px-4\" id=\"add-ressource-btn\">
                                    <i class=\"feather-plus me-2\"></i> Ajouter un fichier
                                </button>
                                <div class=\"text-muted small mt-2\">
                                    Formats acceptés : PDF, MP4, JPG, PNG, MP3, WAV, OGG... (max 50 Mo)
                                </div>
                                ";
        // line 188
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 188), "vars", [], "any", false, false, false, 188), "errors", [], "any", false, false, false, 188))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 189
            yield "                                    <div class=\"form-error-message mt-2\">
                                        ";
            // line 190
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 190), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 193
        yield "                            </div>
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i> 
                                    ";
        // line 197
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "request", [], "any", false, false, false, 197), "attributes", [], "any", false, false, false, 197), "get", ["_route"], "method", false, false, false, 197) == "app_admin_cours_new")) ? ("Créer le cours") : ("Modifier le cours"));
        yield "
                                </button>
                            </div>
                        </div>
                        ";
        // line 201
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), 'form_end');
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
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 244)), 0), "html", null, true);
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
        return array (  481 => 244,  435 => 201,  428 => 197,  422 => 193,  416 => 190,  413 => 189,  411 => 188,  402 => 181,  395 => 179,  389 => 176,  386 => 175,  384 => 174,  377 => 170,  374 => 169,  370 => 168,  365 => 166,  358 => 161,  352 => 158,  349 => 157,  347 => 156,  343 => 154,  340 => 150,  339 => 148,  331 => 143,  327 => 141,  321 => 138,  318 => 137,  316 => 136,  313 => 135,  311 => 133,  310 => 131,  303 => 126,  297 => 123,  294 => 122,  292 => 121,  289 => 120,  287 => 117,  286 => 115,  279 => 110,  273 => 107,  270 => 106,  268 => 105,  265 => 104,  263 => 102,  262 => 99,  255 => 94,  249 => 91,  246 => 90,  244 => 89,  241 => 88,  239 => 86,  238 => 83,  230 => 78,  226 => 77,  207 => 60,  197 => 56,  194 => 55,  190 => 54,  187 => 53,  177 => 49,  174 => 48,  170 => 47,  162 => 42,  146 => 28,  133 => 27,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
{% endblock %}", "cours/new.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\cours\\new.html.twig");
    }
}
