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

/* langue/edit.html.twig */
class __TwigTemplate_1c0e0e0ea8951952a82ce7d61c079a78 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/edit.html.twig"));

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
        .transition-all { transition: all 0.25s ease; }
        .form-error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: block;
        }
        .status-radio-group {
            display: none !important;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
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

        // line 44
        yield "    <div class=\"nxl-content\">
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        ";
        // line 50
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "attributes", [], "any", false, false, false, 50), "get", ["_route"], "method", false, false, false, 50) == "app_admin_langue_new")) ? ("Nouvelle Langue") : ("Modifier la Langue"));
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "attributes", [], "any", false, false, false, 53), "get", ["_route"], "method", false, false, false, 53) == "app_admin_langue_new")) {
            // line 54
            yield "                            Ajouter une nouvelle langue au catalogue
                        ";
        } else {
            // line 56
            yield "                            Modifier les informations de cette langue
                        ";
        }
        // line 58
        yield "                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour
                </a>
            </div>
        </div>
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "flashes", ["error"], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            yield "            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "        <!-- Formulaire -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-primary text-white py-4 px-5\">
                        <h6 class=\"m-0 fw-bold fs-5\">
                            ";
        // line 79
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "request", [], "any", false, false, false, 79), "attributes", [], "any", false, false, false, 79), "get", ["_route"], "method", false, false, false, 79) == "app_admin_langue_new")) ? ("Créer une nouvelle langue") : ("Modifier la langue"));
        yield "
                        </h6>
                        <small class=\"opacity-90\">Tous les champs marqués * sont obligatoires</small>
                    </div>

                    <div class=\"card-body p-5\">
                        ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4", "novalidate" => "novalidate"]]);
        yield "
                        ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'errors');
        yield "

                        <div class=\"row g-4\">
                            <!-- Nom de la langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Nom de la langue *</label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-globe\"></i></span>
                                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "nom", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 95
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "nom", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "errors", [], "any", false, false, false, 95))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "placeholder" => "Ex : Anglais, Français, Espagnol..."]]);
        // line 97
        yield "
                                </div>
                                ";
        // line 99
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "nom", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "errors", [], "any", false, false, false, 99))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 101
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "nom", [], "any", false, false, false, 101), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 104
        yield "                            </div>

                            <!-- Popularité -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Popularité *</label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-star\"></i></span>
                                    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "popularite", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 112
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "popularite", [], "any", false, false, false, 112), "vars", [], "any", false, false, false, 112), "errors", [], "any", false, false, false, 112))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "placeholder" => "Ex : Très haute, Haute, Moyenne, Faible..."]]);
        // line 114
        yield "
                                </div>
                                ";
        // line 116
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "popularite", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "errors", [], "any", false, false, false, 116))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 117
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 118
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "popularite", [], "any", false, false, false, 118), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 121
        yield "                            </div>

                            <!-- Description -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Description détaillée *</label>
                                ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "description", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 127
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "description", [], "any", false, false, false, 127), "vars", [], "any", false, false, false, 127), "errors", [], "any", false, false, false, 127))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "rows" => 5, "placeholder" => "Décrivez la langue, son usage, son importance..."]]);
        // line 130
        yield "
                                ";
        // line 131
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "description", [], "any", false, false, false, 131), "vars", [], "any", false, false, false, 131), "errors", [], "any", false, false, false, 131))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 133
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "description", [], "any", false, false, false, 133), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 136
        yield "                            </div>
                            ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "isActive", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "d-none"]]);
        yield "
                            <!-- Statut (Radio personnalisé) -->
                            <div class=\"col-md-6 status-buttons\">
                                <label class=\"form-label fw-bold mb-3\">Statut de la langue *</label>
                                
                                ";
        // line 142
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "isActive", [], "any", false, false, false, 142), "vars", [], "any", false, false, false, 142), "errors", [], "any", false, false, false, 142))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 143
            yield "                                    ";
            $context["radio_class"] = "is-invalid";
            // line 144
            yield "                                ";
        }
        // line 145
        yield "
                                <div class=\"row g-3\">
                                    <div class=\"col-6\">
                                        <input class=\"btn-check ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("radio_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["radio_class"]) || array_key_exists("radio_class", $context) ? $context["radio_class"] : (function () { throw new RuntimeError('Variable "radio_class" does not exist.', 148, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" 
                                               type=\"radio\" 
                                               name=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "isActive", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "full_name", [], "any", false, false, false, 150), "html", null, true);
        yield "\" 
                                               id=\"isActive_yes\" 
                                               value=\"1\" 
                                               ";
        // line 153
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "isActive", [], "any", false, false, false, 153), "vars", [], "any", false, false, false, 153), "value", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                                        <label class=\"btn btn-outline-success w-100 py-4 text-center transition-all\" for=\"isActive_yes\">
                                            <div class=\"fw-bold fs-5\">Active</div>
                                            <small>Visible aux étudiants</small>
                                        </label>
                                    </div>

                                    <div class=\"col-6\">
                                        <input class=\"btn-check ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("radio_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["radio_class"]) || array_key_exists("radio_class", $context) ? $context["radio_class"] : (function () { throw new RuntimeError('Variable "radio_class" does not exist.', 161, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" 
                                               type=\"radio\" 
                                               name=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "isActive", [], "any", false, false, false, 163), "vars", [], "any", false, false, false, 163), "full_name", [], "any", false, false, false, 163), "html", null, true);
        yield "\" 
                                               id=\"isActive_no\" 
                                               value=\"0\" 
                                               ";
        // line 166
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "isActive", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "value", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                                        <label class=\"btn btn-outline-danger w-100 py-4 text-center transition-all\" for=\"isActive_no\">
                                            <div class=\"fw-bold fs-5\">Inactive</div>
                                            <small>Masquée temporairement</small>
                                        </label>
                                    </div>
                                </div>

                                ";
        // line 174
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "isActive", [], "any", false, false, false, 174), "vars", [], "any", false, false, false, 174), "errors", [], "any", false, false, false, 174))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                                    <div class=\"form-error-message mt-2\">
                                        ";
            // line 176
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "isActive", [], "any", false, false, false, 176), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 179
        yield "                            </div>
                            <!-- Drapeau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">
                                    Drapeau de la langue 
                                    ";
        // line 184
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "request", [], "any", false, false, false, 184), "attributes", [], "any", false, false, false, 184), "get", ["_route"], "method", false, false, false, 184) == "app_admin_langue_new")) {
            // line 185
            yield "                                        *
                                    ";
        }
        // line 187
        yield "                                </label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-image\"></i></span>
                                    ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "drapeauFile", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 191
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "drapeauFile", [], "any", false, false, false, 191), "vars", [], "any", false, false, false, 191), "errors", [], "any", false, false, false, 191))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "accept" => "image/jpeg,image/png,image/webp"]]);
        // line 193
        yield "
                                </div>
                                <small class=\"text-muted\">
                                    Formats acceptés : JPG, PNG, WebP (max 2 Mo)
                                    ";
        // line 197
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "request", [], "any", false, false, false, 197), "attributes", [], "any", false, false, false, 197), "get", ["_route"], "method", false, false, false, 197) != "app_admin_langue_new")) {
            // line 198
            yield "                                        - Laissez vide pour conserver le drapeau actuel
                                    ";
        }
        // line 200
        yield "                                </small>
                                ";
        // line 201
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "drapeauFile", [], "any", false, false, false, 201), "vars", [], "any", false, false, false, 201), "errors", [], "any", false, false, false, 201))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 202
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 203
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "drapeauFile", [], "any", false, false, false, 203), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 206
        yield "
                                ";
        // line 207
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 207, $this->source); })()), "request", [], "any", false, false, false, 207), "attributes", [], "any", false, false, false, 207), "get", ["_route"], "method", false, false, false, 207) != "app_admin_langue_new") && CoreExtension::getAttribute($this->env, $this->source, ($context["langue"] ?? null), "drapeau", [], "any", true, true, false, 207)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 207, $this->source); })()), "drapeau", [], "any", false, false, false, 207))) {
            // line 208
            yield "                                    <div class=\"mt-4 text-center\">
                                        <p class=\"small text-muted mb-2\">Drapeau actuel :</p>
                                        <img src=\"";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/langues/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 210, $this->source); })()), "drapeau", [], "any", false, false, false, 210))), "html", null, true);
            yield "\" alt=\"Drapeau\" class=\"img-fluid rounded shadow-sm\" style=\"max-height: 100px;\">
                                    </div>
                                ";
        }
        // line 213
        yield "                            </div>
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i>
                                    ";
        // line 217
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "request", [], "any", false, false, false, 217), "attributes", [], "any", false, false, false, 217), "get", ["_route"], "method", false, false, false, 217) == "app_admin_langue_new")) ? ("Créer la langue") : ("Mettre à jour la langue"));
        yield "
                                </button>
                            </div>
                        </div>

                        ";
        // line 222
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), 'form_end');
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
        return "langue/edit.html.twig";
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
        return array (  475 => 222,  467 => 217,  461 => 213,  455 => 210,  451 => 208,  449 => 207,  446 => 206,  440 => 203,  437 => 202,  435 => 201,  432 => 200,  428 => 198,  426 => 197,  420 => 193,  418 => 191,  417 => 190,  412 => 187,  408 => 185,  406 => 184,  399 => 179,  393 => 176,  390 => 175,  388 => 174,  377 => 166,  371 => 163,  366 => 161,  355 => 153,  349 => 150,  344 => 148,  339 => 145,  336 => 144,  333 => 143,  331 => 142,  323 => 137,  320 => 136,  314 => 133,  311 => 132,  309 => 131,  306 => 130,  304 => 127,  303 => 126,  296 => 121,  290 => 118,  287 => 117,  285 => 116,  281 => 114,  279 => 112,  278 => 111,  269 => 104,  263 => 101,  260 => 100,  258 => 99,  254 => 97,  252 => 95,  251 => 94,  240 => 86,  236 => 85,  227 => 79,  219 => 73,  209 => 69,  206 => 68,  202 => 67,  194 => 62,  188 => 58,  184 => 56,  180 => 54,  178 => 53,  172 => 50,  164 => 44,  151 => 43,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
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
        .transition-all { transition: all 0.25s ease; }
        .form-error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: block;
        }
        .status-radio-group {
            display: none !important;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"nxl-content\">
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
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
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
                        {{ form_start(form, {'attr': {'class': 'row g-4', 'novalidate': 'novalidate'}}) }}
                        {{ form_errors(form) }}

                        <div class=\"row g-4\">
                            <!-- Nom de la langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Nom de la langue *</label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-globe\"></i></span>
                                    {{ form_widget(form.nom, {'attr': {
                                        'class': 'form-control ' ~ (form.nom.vars.errors|length ? 'is-invalid' : ''),
                                        'placeholder': 'Ex : Anglais, Français, Espagnol...'
                                    }}) }}
                                </div>
                                {% if form.nom.vars.errors|length %}
                                    <div class=\"form-error-message\">
                                        {{ form_errors(form.nom) }}
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Popularité -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Popularité *</label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-star\"></i></span>
                                    {{ form_widget(form.popularite, {'attr': {
                                        'class': 'form-control ' ~ (form.popularite.vars.errors|length ? 'is-invalid' : ''),
                                        'placeholder': 'Ex : Très haute, Haute, Moyenne, Faible...'
                                    }}) }}
                                </div>
                                {% if form.popularite.vars.errors|length %}
                                    <div class=\"form-error-message\">
                                        {{ form_errors(form.popularite) }}
                                    </div>
                                {% endif %}
                            </div>

                            <!-- Description -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Description détaillée *</label>
                                {{ form_widget(form.description, {'attr': {
                                    'class': 'form-control ' ~ (form.description.vars.errors|length ? 'is-invalid' : ''),
                                    'rows': 5,
                                    'placeholder': 'Décrivez la langue, son usage, son importance...'
                                }}) }}
                                {% if form.description.vars.errors|length %}
                                    <div class=\"form-error-message\">
                                        {{ form_errors(form.description) }}
                                    </div>
                                {% endif %}
                            </div>
                            {{ form_widget(form.isActive, {'attr': {'class': 'd-none'}}) }}
                            <!-- Statut (Radio personnalisé) -->
                            <div class=\"col-md-6 status-buttons\">
                                <label class=\"form-label fw-bold mb-3\">Statut de la langue *</label>
                                
                                {% if form.isActive.vars.errors|length %}
                                    {% set radio_class = 'is-invalid' %}
                                {% endif %}

                                <div class=\"row g-3\">
                                    <div class=\"col-6\">
                                        <input class=\"btn-check {{ radio_class|default('') }}\" 
                                               type=\"radio\" 
                                               name=\"{{ form.isActive.vars.full_name }}\" 
                                               id=\"isActive_yes\" 
                                               value=\"1\" 
                                               {{ form.isActive.vars.value ? 'checked' : '' }}>
                                        <label class=\"btn btn-outline-success w-100 py-4 text-center transition-all\" for=\"isActive_yes\">
                                            <div class=\"fw-bold fs-5\">Active</div>
                                            <small>Visible aux étudiants</small>
                                        </label>
                                    </div>

                                    <div class=\"col-6\">
                                        <input class=\"btn-check {{ radio_class|default('') }}\" 
                                               type=\"radio\" 
                                               name=\"{{ form.isActive.vars.full_name }}\" 
                                               id=\"isActive_no\" 
                                               value=\"0\" 
                                               {{ not form.isActive.vars.value ? 'checked' : '' }}>
                                        <label class=\"btn btn-outline-danger w-100 py-4 text-center transition-all\" for=\"isActive_no\">
                                            <div class=\"fw-bold fs-5\">Inactive</div>
                                            <small>Masquée temporairement</small>
                                        </label>
                                    </div>
                                </div>

                                {% if form.isActive.vars.errors|length %}
                                    <div class=\"form-error-message mt-2\">
                                        {{ form_errors(form.isActive) }}
                                    </div>
                                {% endif %}
                            </div>
                            <!-- Drapeau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">
                                    Drapeau de la langue 
                                    {% if app.request.attributes.get('_route') == 'app_admin_langue_new' %}
                                        *
                                    {% endif %}
                                </label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-image\"></i></span>
                                    {{ form_widget(form.drapeauFile, {'attr': {
                                        'class': 'form-control ' ~ (form.drapeauFile.vars.errors|length ? 'is-invalid' : ''),
                                        'accept': 'image/jpeg,image/png,image/webp'
                                    }}) }}
                                </div>
                                <small class=\"text-muted\">
                                    Formats acceptés : JPG, PNG, WebP (max 2 Mo)
                                    {% if app.request.attributes.get('_route') != 'app_admin_langue_new' %}
                                        - Laissez vide pour conserver le drapeau actuel
                                    {% endif %}
                                </small>
                                {% if form.drapeauFile.vars.errors|length %}
                                    <div class=\"form-error-message\">
                                        {{ form_errors(form.drapeauFile) }}
                                    </div>
                                {% endif %}

                                {% if app.request.attributes.get('_route') != 'app_admin_langue_new' and langue.drapeau is defined and langue.drapeau %}
                                    <div class=\"mt-4 text-center\">
                                        <p class=\"small text-muted mb-2\">Drapeau actuel :</p>
                                        <img src=\"{{ asset('uploads/langues/' ~ langue.drapeau) }}\" alt=\"Drapeau\" class=\"img-fluid rounded shadow-sm\" style=\"max-height: 100px;\">
                                    </div>
                                {% endif %}
                            </div>
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
{% endblock %}", "langue/edit.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\langue\\edit.html.twig");
    }
}
