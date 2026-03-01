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
class __TwigTemplate_d9084cb97e689ba0ae9f554531106b3b extends Template
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
        yield "
        <!-- Formulaire -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-primary text-white py-4 px-5\">
                        <h6 class=\"m-0 fw-bold fs-5\">
                            ";
        // line 80
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "request", [], "any", false, false, false, 80), "attributes", [], "any", false, false, false, 80), "get", ["_route"], "method", false, false, false, 80) == "app_admin_langue_new")) ? ("Créer une nouvelle langue") : ("Modifier la langue"));
        yield "
                        </h6>
                        <small class=\"opacity-90\">Tous les champs marqués * sont obligatoires</small>
                    </div>

                    <div class=\"card-body p-5\">
                        ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4", "novalidate" => "novalidate"]]);
        yield "
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'errors');
        yield "

                        <div class=\"row g-4\">
                            <!-- Nom de la langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Nom de la langue *</label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-globe\"></i></span>
                                    ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "nom", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 96
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "nom", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "errors", [], "any", false, false, false, 96))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "placeholder" => "Ex : Anglais, Français, Espagnol..."]]);
        // line 98
        yield "
                                </div>
                                ";
        // line 100
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "nom", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "errors", [], "any", false, false, false, 100))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 102
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "nom", [], "any", false, false, false, 102), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 105
        yield "                            </div>

                            <!-- Popularité -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Popularité *</label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-star\"></i></span>
                                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "popularite", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 113
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "popularite", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "errors", [], "any", false, false, false, 113))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "placeholder" => "Ex : Très haute, Haute, Moyenne, Faible..."]]);
        // line 115
        yield "
                                </div>
                                ";
        // line 117
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "popularite", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "errors", [], "any", false, false, false, 117))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 119
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "popularite", [], "any", false, false, false, 119), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 122
        yield "                            </div>

                            <!-- Description -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Description détaillée *</label>
                                ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "description", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 128
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "description", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "errors", [], "any", false, false, false, 128))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "rows" => 5, "placeholder" => "Décrivez la langue, son usage, son importance..."]]);
        // line 131
        yield "
                                ";
        // line 132
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "description", [], "any", false, false, false, 132), "vars", [], "any", false, false, false, 132), "errors", [], "any", false, false, false, 132))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 134
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "description", [], "any", false, false, false, 134), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 137
        yield "                            </div>
                            ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "isActive", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "d-none"]]);
        yield "

                            <!-- Statut (Radio personnalisé) -->
                            <div class=\"col-md-6 status-buttons\">
                                <label class=\"form-label fw-bold mb-3\">Statut de la langue *</label>
                                
                                ";
        // line 144
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "isActive", [], "any", false, false, false, 144), "vars", [], "any", false, false, false, 144), "errors", [], "any", false, false, false, 144))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield "                                    ";
            $context["radio_class"] = "is-invalid";
            // line 146
            yield "                                ";
        }
        // line 147
        yield "
                                <div class=\"row g-3\">
                                    <div class=\"col-6\">
                                        <input class=\"btn-check ";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("radio_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["radio_class"]) || array_key_exists("radio_class", $context) ? $context["radio_class"] : (function () { throw new RuntimeError('Variable "radio_class" does not exist.', 150, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" 
                                               type=\"radio\" 
                                               name=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "isActive", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "full_name", [], "any", false, false, false, 152), "html", null, true);
        yield "\" 
                                               id=\"isActive_yes\" 
                                               value=\"1\" 
                                               ";
        // line 155
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "isActive", [], "any", false, false, false, 155), "vars", [], "any", false, false, false, 155), "value", [], "any", false, false, false, 155)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                                        <label class=\"btn btn-outline-success w-100 py-4 text-center transition-all\" for=\"isActive_yes\">
                                            <div class=\"fw-bold fs-5\">Active</div>
                                            <small>Visible aux étudiants</small>
                                        </label>
                                    </div>

                                    <div class=\"col-6\">
                                        <input class=\"btn-check ";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("radio_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["radio_class"]) || array_key_exists("radio_class", $context) ? $context["radio_class"] : (function () { throw new RuntimeError('Variable "radio_class" does not exist.', 163, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" 
                                               type=\"radio\" 
                                               name=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "isActive", [], "any", false, false, false, 165), "vars", [], "any", false, false, false, 165), "full_name", [], "any", false, false, false, 165), "html", null, true);
        yield "\" 
                                               id=\"isActive_no\" 
                                               value=\"0\" 
                                               ";
        // line 168
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "isActive", [], "any", false, false, false, 168), "vars", [], "any", false, false, false, 168), "value", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                                        <label class=\"btn btn-outline-danger w-100 py-4 text-center transition-all\" for=\"isActive_no\">
                                            <div class=\"fw-bold fs-5\">Inactive</div>
                                            <small>Masquée temporairement</small>
                                        </label>
                                    </div>
                                </div>

                                ";
        // line 176
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "isActive", [], "any", false, false, false, 176), "vars", [], "any", false, false, false, 176), "errors", [], "any", false, false, false, 176))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 177
            yield "                                    <div class=\"form-error-message mt-2\">
                                        ";
            // line 178
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "isActive", [], "any", false, false, false, 178), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 181
        yield "                            </div>

                            <!-- Drapeau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">
                                    Drapeau de la langue 
                                    ";
        // line 187
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "request", [], "any", false, false, false, 187), "attributes", [], "any", false, false, false, 187), "get", ["_route"], "method", false, false, false, 187) == "app_admin_langue_new")) {
            // line 188
            yield "                                        *
                                    ";
        }
        // line 190
        yield "                                </label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-image\"></i></span>
                                    ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "drapeauFile", [], "any", false, false, false, 193), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 194
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "drapeauFile", [], "any", false, false, false, 194), "vars", [], "any", false, false, false, 194), "errors", [], "any", false, false, false, 194))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "accept" => "image/jpeg,image/png,image/webp"]]);
        // line 196
        yield "
                                </div>
                                <small class=\"text-muted\">
                                    Formats acceptés : JPG, PNG, WebP (max 2 Mo)
                                    ";
        // line 200
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "request", [], "any", false, false, false, 200), "attributes", [], "any", false, false, false, 200), "get", ["_route"], "method", false, false, false, 200) != "app_admin_langue_new")) {
            // line 201
            yield "                                        - Laissez vide pour conserver le drapeau actuel
                                    ";
        }
        // line 203
        yield "                                </small>
                                ";
        // line 204
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "drapeauFile", [], "any", false, false, false, 204), "vars", [], "any", false, false, false, 204), "errors", [], "any", false, false, false, 204))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 205
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 206
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "drapeauFile", [], "any", false, false, false, 206), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 209
        yield "
                                ";
        // line 210
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "request", [], "any", false, false, false, 210), "attributes", [], "any", false, false, false, 210), "get", ["_route"], "method", false, false, false, 210) != "app_admin_langue_new") && CoreExtension::getAttribute($this->env, $this->source, ($context["langue"] ?? null), "drapeau", [], "any", true, true, false, 210)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 210, $this->source); })()), "drapeau", [], "any", false, false, false, 210))) {
            // line 211
            yield "                                    <div class=\"mt-4 text-center\">
                                        <p class=\"small text-muted mb-2\">Drapeau actuel :</p>
                                        <img src=\"";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/langues/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 213, $this->source); })()), "drapeau", [], "any", false, false, false, 213))), "html", null, true);
            yield "\" alt=\"Drapeau\" class=\"img-fluid rounded shadow-sm\" style=\"max-height: 100px;\">
                                    </div>
                                ";
        }
        // line 216
        yield "                            </div>

                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i>
                                    ";
        // line 221
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "request", [], "any", false, false, false, 221), "attributes", [], "any", false, false, false, 221), "get", ["_route"], "method", false, false, false, 221) == "app_admin_langue_new")) ? ("Créer la langue") : ("Mettre à jour la langue"));
        yield "
                                </button>
                            </div>
                        </div>

                        ";
        // line 226
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), 'form_end');
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
        return array (  479 => 226,  471 => 221,  464 => 216,  458 => 213,  454 => 211,  452 => 210,  449 => 209,  443 => 206,  440 => 205,  438 => 204,  435 => 203,  431 => 201,  429 => 200,  423 => 196,  421 => 194,  420 => 193,  415 => 190,  411 => 188,  409 => 187,  401 => 181,  395 => 178,  392 => 177,  390 => 176,  379 => 168,  373 => 165,  368 => 163,  357 => 155,  351 => 152,  346 => 150,  341 => 147,  338 => 146,  335 => 145,  333 => 144,  324 => 138,  321 => 137,  315 => 134,  312 => 133,  310 => 132,  307 => 131,  305 => 128,  304 => 127,  297 => 122,  291 => 119,  288 => 118,  286 => 117,  282 => 115,  280 => 113,  279 => 112,  270 => 105,  264 => 102,  261 => 101,  259 => 100,  255 => 98,  253 => 96,  252 => 95,  241 => 87,  237 => 86,  228 => 80,  219 => 73,  209 => 69,  206 => 68,  202 => 67,  194 => 62,  188 => 58,  184 => 56,  180 => 54,  178 => 53,  172 => 50,  164 => 44,  151 => 43,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
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
                                        <img src=\"{{ asset('images/langues/' ~ langue.drapeau) }}\" alt=\"Drapeau\" class=\"img-fluid rounded shadow-sm\" style=\"max-height: 100px;\">
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
{% endblock %}", "langue/new.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\langue\\new.html.twig");
    }
}
