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

/* langue/new.html.twig */
class __TwigTemplate_8e8627f00311c71cbdf5aed5c30be8ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/new.html.twig"));

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

        // line 4
        yield "    ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "attributes", [], "any", false, false, false, 4), "get", ["_route"], "method", false, false, false, 4) == "app_admin_langue_new")) ? ("Nouvelle Langue") : ("Modifier Langue"));
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .status-buttons .btn-check:checked + label {
            border-width: 3px !important;
            box-shadow: 0 0 0 0.25rem rgba(25,135,84,0.25);
        }

        .status-buttons label:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }

        .status-buttons .btn-outline-success {
            border-color: #198754;
            color: #198754;
        }

        .status-buttons .btn-outline-danger {
            border-color: #dc3545;
            color: #dc3545;
        }

        .status-buttons .btn-check.is-invalid + label {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 0.25rem rgba(220,53,69,0.25) !important;
        }

        .transition-all {
            transition: all 0.25s ease;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
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

        // line 42
        yield "
    <div class=\"nxl-content\">

        <!-- En-tête -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        ";
        // line 51
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "attributes", [], "any", false, false, false, 51), "get", ["_route"], "method", false, false, false, 51) == "app_admin_langue_new")) ? ("Nouvelle Langue") : ("Modifier la Langue"));
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        ";
        // line 54
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", ["_route"], "method", false, false, false, 54) == "app_admin_langue_new")) {
            // line 55
            yield "                            Ajouter une nouvelle langue au catalogue
                        ";
        } else {
            // line 57
            yield "                            Modifier les informations de cette langue
                        ";
        }
        // line 59
        yield "                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour
                </a>
            </div>
        </div>

        <!-- Formulaire -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-primary text-white py-4 px-5\">
                        <h6 class=\"m-0 fw-bold fs-5\">
                            ";
        // line 75
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "attributes", [], "any", false, false, false, 75), "get", ["_route"], "method", false, false, false, 75) == "app_admin_langue_new")) ? ("Créer une nouvelle langue") : ("Modifier la langue"));
        yield "
                        </h6>
                        <small class=\"opacity-90\">Tous les champs marqués * sont obligatoires</small>
                    </div>

                    <div class=\"card-body p-5\">
                        ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4"]]);
        yield "

                        <div class=\"row g-4\">

                            <!-- Nom de la langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">
                                    Nom de la langue *
                                    ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "nom", [], "any", false, false, false, 89), 'errors', ["attr" => ["class" => "invalid-feedback d-block"]]);
        yield "
                                </label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-globe\"></i></span>
                                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "nom", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "nom", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "errors", [], "any", false, false, false, 93))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
        yield "
                                </div>
                            </div>

                            <!-- Popularité (texte) -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Popularité (optionnel)</label>
                                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "popularite", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ex : Haute, Très haute, Moyenne, Faible..."]]);
        yield "
                                ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "popularite", [], "any", false, false, false, 101), 'errors');
        yield "
                            </div>

                            <!-- Description détaillée (min 5) -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">
                                    Description détaillée *
                                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "description", [], "any", false, false, false, 108), 'errors', ["attr" => ["class" => "invalid-feedback d-block"]]);
        yield "
                                </label>
                                ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "description", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "description", [], "any", false, false, false, 110), "vars", [], "any", false, false, false, 110), "errors", [], "any", false, false, false, 110))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "rows" => 5]]);
        yield "
                            </div>

                            <!-- Statut de la langue - Design amélioré -->
                            <div class=\"col-md-6 status-buttons\">
                                <label class=\"form-label fw-bold mb-3\">
                                    Statut de la langue *
                                    ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "isActive", [], "any", false, false, false, 117), 'errors', ["attr" => ["class" => "invalid-feedback d-block"]]);
        yield "
                                </label>

                                <div class=\"row g-3\">
                                    <!-- Actif -->
                                    <div class=\"col-6\">
                                        <input class=\"btn-check\" type=\"radio\" 
                                               name=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "isActive", [], "any", false, false, false, 124), "vars", [], "any", false, false, false, 124), "full_name", [], "any", false, false, false, 124), "html", null, true);
        yield "\" 
                                               id=\"isActive_yes\" 
                                               value=\"1\" 
                                               autocomplete=\"off\"
                                               ";
        // line 128
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "isActive", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "value", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
                                               ";
        // line 129
        yield (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "isActive", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "errors", [], "any", false, false, false, 129))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""));
        yield ">

                                        <label class=\"btn btn-outline-success w-100 py-4 d-flex flex-column align-items-center justify-content-center gap-2 shadow-sm border-2 rounded-4 transition-all\" 
                                               for=\"isActive_yes\"
                                               style=\"cursor: pointer; ";
        // line 133
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "isActive", [], "any", false, false, false, 133), "vars", [], "any", false, false, false, 133), "value", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "border-color: #198754 !important; background-color: rgba(25,135,84,0.08);";
        }
        yield "\">
                                            <i class=\"feather-eye fs-1\"></i>
                                            <div class=\"text-center\">
                                                <div class=\"fw-bold fs-5 mb-1\">Active</div>
                                                <small class=\"opacity-85\">Visible aux étudiants</small>
                                            </div>
                                        </label>
                                    </div>

                                    <!-- Inactif -->
                                    <div class=\"col-6\">
                                        <input class=\"btn-check\" type=\"radio\" 
                                               name=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "isActive", [], "any", false, false, false, 145), "vars", [], "any", false, false, false, 145), "full_name", [], "any", false, false, false, 145), "html", null, true);
        yield "\" 
                                               id=\"isActive_no\" 
                                               value=\"0\" 
                                               autocomplete=\"off\"
                                               ";
        // line 149
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "isActive", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "value", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
                                               ";
        // line 150
        yield (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "isActive", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "errors", [], "any", false, false, false, 150))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""));
        yield ">

                                        <label class=\"btn btn-outline-danger w-100 py-4 d-flex flex-column align-items-center justify-content-center gap-2 shadow-sm border-2 rounded-4 transition-all\" 
                                               for=\"isActive_no\"
                                               style=\"cursor: pointer; ";
        // line 154
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "isActive", [], "any", false, false, false, 154), "vars", [], "any", false, false, false, 154), "value", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "border-color: #dc3545 !important; background-color: rgba(220,53,69,0.08);";
        }
        yield "\">
                                            <i class=\"feather-eye-off fs-1\"></i>
                                            <div class=\"text-center\">
                                                <div class=\"fw-bold fs-5 mb-1\">Inactive</div>
                                                <small class=\"opacity-85\">Masquée temporairement</small>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <!-- Message d'erreur global -->
                                <div class=\"invalid-feedback d-block mt-2\" style=\"";
        // line 165
        yield (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "isActive", [], "any", false, false, false, 165), "vars", [], "any", false, false, false, 165), "errors", [], "any", false, false, false, 165))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("display:none;"));
        yield "\">
                                    ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "isActive", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "errors", [], "any", false, false, false, 166)), "message", [], "any", true, true, false, 166)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "isActive", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "errors", [], "any", false, false, false, 166)), "message", [], "any", false, false, false, 166), "Veuillez sélectionner un statut.")) : ("Veuillez sélectionner un statut.")), "html", null, true);
        yield "
                                </div>
                            </div>

                            <!-- Drapeau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">
                                    Drapeau de la langue *
                                    <small class=\"text-muted ms-2\">(PNG, JPG, WebP – max 2 Mo)</small>
                                    ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "drapeauFile", [], "any", false, false, false, 175), 'errors', ["attr" => ["class" => "invalid-feedback d-block"]]);
        yield "
                                </label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-image\"></i></span>
                                    ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "drapeauFile", [], "any", false, false, false, 179), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "drapeauFile", [], "any", false, false, false, 179), "vars", [], "any", false, false, false, 179), "errors", [], "any", false, false, false, 179))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : ("")))]]);
        yield "
                                </div>

                                ";
        // line 182
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "request", [], "any", false, false, false, 182), "attributes", [], "any", false, false, false, 182), "get", ["_route"], "method", false, false, false, 182) != "app_admin_langue_new") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 182, $this->source); })()), "drapeau", [], "any", false, false, false, 182))) {
            // line 183
            yield "                                    <div class=\"mt-4 text-center\">
                                        <p class=\"small text-muted mb-2\">Drapeau actuel :</p>
                                        <img src=\"";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/langues/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 185, $this->source); })()), "drapeau", [], "any", false, false, false, 185))), "html", null, true);
            yield "\" 
                                             alt=\"Drapeau ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 186, $this->source); })()), "nom", [], "any", false, false, false, 186), "html", null, true);
            yield "\" 
                                             class=\"img-fluid rounded shadow-sm\" 
                                             style=\"max-height: 100px;\">
                                    </div>
                                ";
        }
        // line 191
        yield "                            </div>

                            <!-- Bouton soumission -->
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i>
                                    ";
        // line 197
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "request", [], "any", false, false, false, 197), "attributes", [], "any", false, false, false, 197), "get", ["_route"], "method", false, false, false, 197) == "app_admin_langue_new")) ? ("Créer la langue") : ("Mettre à jour la langue"));
        yield "
                                </button>
                            </div>

                        </div>

                        ";
        // line 203
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), 'form_end');
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
        return "langue/new.html.twig";
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
        return array (  419 => 203,  410 => 197,  402 => 191,  394 => 186,  390 => 185,  386 => 183,  384 => 182,  378 => 179,  371 => 175,  359 => 166,  355 => 165,  339 => 154,  332 => 150,  328 => 149,  321 => 145,  304 => 133,  297 => 129,  293 => 128,  286 => 124,  276 => 117,  266 => 110,  261 => 108,  251 => 101,  247 => 100,  237 => 93,  230 => 89,  219 => 81,  210 => 75,  195 => 63,  189 => 59,  185 => 57,  181 => 55,  179 => 54,  173 => 51,  162 => 42,  149 => 41,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}
    {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Nouvelle Langue' : 'Modifier Langue' }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .status-buttons .btn-check:checked + label {
            border-width: 3px !important;
            box-shadow: 0 0 0 0.25rem rgba(25,135,84,0.25);
        }

        .status-buttons label:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }

        .status-buttons .btn-outline-success {
            border-color: #198754;
            color: #198754;
        }

        .status-buttons .btn-outline-danger {
            border-color: #dc3545;
            color: #dc3545;
        }

        .status-buttons .btn-check.is-invalid + label {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 0.25rem rgba(220,53,69,0.25) !important;
        }

        .transition-all {
            transition: all 0.25s ease;
        }
    </style>
{% endblock %}

{% block body %}

    <div class=\"nxl-content\">

        <!-- En-tête -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Nouvelle Langue' : 'Modifier la Langue' }}
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        {% if app.request.attributes.get('_route') == 'app_admin_langue_new' %}
                            Ajouter une nouvelle langue au catalogue
                        {% else %}
                            Modifier les informations de cette langue
                        {% endif %}
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_admin_langue_index') }}\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour
                </a>
            </div>
        </div>

        <!-- Formulaire -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-primary text-white py-4 px-5\">
                        <h6 class=\"m-0 fw-bold fs-5\">
                            {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Créer une nouvelle langue' : 'Modifier la langue' }}
                        </h6>
                        <small class=\"opacity-90\">Tous les champs marqués * sont obligatoires</small>
                    </div>

                    <div class=\"card-body p-5\">
                        {{ form_start(form, {'attr': {'class': 'row g-4'}}) }}

                        <div class=\"row g-4\">

                            <!-- Nom de la langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">
                                    Nom de la langue *
                                    {{ form_errors(form.nom, {'attr': {'class': 'invalid-feedback d-block'}}) }}
                                </label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-globe\"></i></span>
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control ' ~ (form.nom.vars.errors|length ? 'is-invalid' : '')}}) }}
                                </div>
                            </div>

                            <!-- Popularité (texte) -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Popularité (optionnel)</label>
                                {{ form_widget(form.popularite, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Ex : Haute, Très haute, Moyenne, Faible...'}}) }}
                                {{ form_errors(form.popularite) }}
                            </div>

                            <!-- Description détaillée (min 5) -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">
                                    Description détaillée *
                                    {{ form_errors(form.description, {'attr': {'class': 'invalid-feedback d-block'}}) }}
                                </label>
                                {{ form_widget(form.description, {'attr': {'class': 'form-control ' ~ (form.description.vars.errors|length ? 'is-invalid' : ''), 'rows': 5}}) }}
                            </div>

                            <!-- Statut de la langue - Design amélioré -->
                            <div class=\"col-md-6 status-buttons\">
                                <label class=\"form-label fw-bold mb-3\">
                                    Statut de la langue *
                                    {{ form_errors(form.isActive, {'attr': {'class': 'invalid-feedback d-block'}}) }}
                                </label>

                                <div class=\"row g-3\">
                                    <!-- Actif -->
                                    <div class=\"col-6\">
                                        <input class=\"btn-check\" type=\"radio\" 
                                               name=\"{{ form.isActive.vars.full_name }}\" 
                                               id=\"isActive_yes\" 
                                               value=\"1\" 
                                               autocomplete=\"off\"
                                               {{ form.isActive.vars.value ? 'checked' : '' }}
                                               {{ form.isActive.vars.errors|length ? 'is-invalid' : '' }}>

                                        <label class=\"btn btn-outline-success w-100 py-4 d-flex flex-column align-items-center justify-content-center gap-2 shadow-sm border-2 rounded-4 transition-all\" 
                                               for=\"isActive_yes\"
                                               style=\"cursor: pointer; {% if form.isActive.vars.value %}border-color: #198754 !important; background-color: rgba(25,135,84,0.08);{% endif %}\">
                                            <i class=\"feather-eye fs-1\"></i>
                                            <div class=\"text-center\">
                                                <div class=\"fw-bold fs-5 mb-1\">Active</div>
                                                <small class=\"opacity-85\">Visible aux étudiants</small>
                                            </div>
                                        </label>
                                    </div>

                                    <!-- Inactif -->
                                    <div class=\"col-6\">
                                        <input class=\"btn-check\" type=\"radio\" 
                                               name=\"{{ form.isActive.vars.full_name }}\" 
                                               id=\"isActive_no\" 
                                               value=\"0\" 
                                               autocomplete=\"off\"
                                               {{ not form.isActive.vars.value ? 'checked' : '' }}
                                               {{ form.isActive.vars.errors|length ? 'is-invalid' : '' }}>

                                        <label class=\"btn btn-outline-danger w-100 py-4 d-flex flex-column align-items-center justify-content-center gap-2 shadow-sm border-2 rounded-4 transition-all\" 
                                               for=\"isActive_no\"
                                               style=\"cursor: pointer; {% if not form.isActive.vars.value %}border-color: #dc3545 !important; background-color: rgba(220,53,69,0.08);{% endif %}\">
                                            <i class=\"feather-eye-off fs-1\"></i>
                                            <div class=\"text-center\">
                                                <div class=\"fw-bold fs-5 mb-1\">Inactive</div>
                                                <small class=\"opacity-85\">Masquée temporairement</small>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <!-- Message d'erreur global -->
                                <div class=\"invalid-feedback d-block mt-2\" style=\"{{ form.isActive.vars.errors|length ? '' : 'display:none;' }}\">
                                    {{ form.isActive.vars.errors|first.message|default('Veuillez sélectionner un statut.') }}
                                </div>
                            </div>

                            <!-- Drapeau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">
                                    Drapeau de la langue *
                                    <small class=\"text-muted ms-2\">(PNG, JPG, WebP – max 2 Mo)</small>
                                    {{ form_errors(form.drapeauFile, {'attr': {'class': 'invalid-feedback d-block'}}) }}
                                </label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-image\"></i></span>
                                    {{ form_widget(form.drapeauFile, {'attr': {'class': 'form-control ' ~ (form.drapeauFile.vars.errors|length ? 'is-invalid' : '')}}) }}
                                </div>

                                {% if app.request.attributes.get('_route') != 'app_admin_langue_new' and langue.drapeau %}
                                    <div class=\"mt-4 text-center\">
                                        <p class=\"small text-muted mb-2\">Drapeau actuel :</p>
                                        <img src=\"{{ asset('images/langues/' ~ langue.drapeau) }}\" 
                                             alt=\"Drapeau {{ langue.nom }}\" 
                                             class=\"img-fluid rounded shadow-sm\" 
                                             style=\"max-height: 100px;\">
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Bouton soumission -->
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i>
                                    {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Créer la langue' : 'Mettre à jour la langue' }}
                                </button>
                            </div>

                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "langue/new.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\langue\\new.html.twig");
    }
}
