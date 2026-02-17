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
class __TwigTemplate_c6ed23018657826a6f20b008523c62b1 extends Template
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
        /* Cacher le label généré automatiquement par Symfony pour isActive */
        .status-radio-group {
            display: none !important;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
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

        // line 45
        yield "    <div class=\"nxl-content\">
        <!-- En-tête -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-globe text-primary me-2\"></i>
                        ";
        // line 52
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "attributes", [], "any", false, false, false, 52), "get", ["_route"], "method", false, false, false, 52) == "app_admin_langue_new")) ? ("Nouvelle Langue") : ("Modifier la Langue"));
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "attributes", [], "any", false, false, false, 55), "get", ["_route"], "method", false, false, false, 55) == "app_admin_langue_new")) {
            // line 56
            yield "                            Ajouter une nouvelle langue au catalogue
                        ";
        } else {
            // line 58
            yield "                            Modifier les informations de cette langue
                        ";
        }
        // line 60
        yield "                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Retour
                </a>
            </div>
        </div>

        <!-- Messages Flash -->
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", ["error"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 72
            yield "            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "
        <!-- Formulaire -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-primary text-white py-4 px-5\">
                        <h6 class=\"m-0 fw-bold fs-5\">
                            ";
        // line 84
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "attributes", [], "any", false, false, false, 84), "get", ["_route"], "method", false, false, false, 84) == "app_admin_langue_new")) ? ("Créer une nouvelle langue") : ("Modifier la langue"));
        yield "
                        </h6>
                        <small class=\"opacity-90\">Tous les champs marqués * sont obligatoires</small>
                    </div>

                    <div class=\"card-body p-5\">
                        ";
        // line 91
        yield "                        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4", "novalidate" => "novalidate"]]);
        yield "

                        ";
        // line 94
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'errors');
        yield "

                        <div class=\"row g-4\">
                            <!-- Nom de la langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Nom de la langue *</label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-globe\"></i></span>
                                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "nom", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 103
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "nom", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "errors", [], "any", false, false, false, 103))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "placeholder" => "Ex : Anglais, Français, Espagnol..."]]);
        // line 105
        yield "
                                </div>
                                ";
        // line 107
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "nom", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "errors", [], "any", false, false, false, 107))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 109
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "nom", [], "any", false, false, false, 109), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 112
        yield "                            </div>

                            <!-- Popularité -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Popularité *</label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-star\"></i></span>
                                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "popularite", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 120
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "popularite", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "errors", [], "any", false, false, false, 120))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "placeholder" => "Ex : Très haute, Haute, Moyenne, Faible..."]]);
        // line 122
        yield "
                                </div>
                                ";
        // line 124
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "popularite", [], "any", false, false, false, 124), "vars", [], "any", false, false, false, 124), "errors", [], "any", false, false, false, 124))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 126
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "popularite", [], "any", false, false, false, 126), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 129
        yield "                            </div>

                            <!-- Description -->
                            <div class=\"col-12\">
                                <label class=\"form-label fw-bold mb-2\">Description détaillée *</label>
                                ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "description", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 135
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "description", [], "any", false, false, false, 135), "vars", [], "any", false, false, false, 135), "errors", [], "any", false, false, false, 135))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "rows" => 5, "placeholder" => "Décrivez la langue, son usage, son importance..."]]);
        // line 138
        yield "
                                ";
        // line 139
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "description", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "errors", [], "any", false, false, false, 139))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 140
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 141
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "description", [], "any", false, false, false, 141), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 144
        yield "                            </div>

                            <!-- NE PAS AFFICHER LE CHAMP isActive AUTO DE SYMFONY -->
                            ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "isActive", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "d-none"]]);
        yield "

                            <!-- Statut (Radio personnalisé) -->
                            <div class=\"col-md-6 status-buttons\">
                                <label class=\"form-label fw-bold mb-3\">Statut de la langue *</label>
                                
                                ";
        // line 153
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "isActive", [], "any", false, false, false, 153), "vars", [], "any", false, false, false, 153), "errors", [], "any", false, false, false, 153))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 154
            yield "                                    ";
            $context["radio_class"] = "is-invalid";
            // line 155
            yield "                                ";
        }
        // line 156
        yield "
                                <div class=\"row g-3\">
                                    <div class=\"col-6\">
                                        <input class=\"btn-check ";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("radio_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["radio_class"]) || array_key_exists("radio_class", $context) ? $context["radio_class"] : (function () { throw new RuntimeError('Variable "radio_class" does not exist.', 159, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" 
                                               type=\"radio\" 
                                               name=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "isActive", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "full_name", [], "any", false, false, false, 161), "html", null, true);
        yield "\" 
                                               id=\"isActive_yes\" 
                                               value=\"1\" 
                                               ";
        // line 164
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "isActive", [], "any", false, false, false, 164), "vars", [], "any", false, false, false, 164), "value", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                                        <label class=\"btn btn-outline-success w-100 py-4 text-center transition-all\" for=\"isActive_yes\">
                                            <div class=\"fw-bold fs-5\">Active</div>
                                            <small>Visible aux étudiants</small>
                                        </label>
                                    </div>

                                    <div class=\"col-6\">
                                        <input class=\"btn-check ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("radio_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["radio_class"]) || array_key_exists("radio_class", $context) ? $context["radio_class"] : (function () { throw new RuntimeError('Variable "radio_class" does not exist.', 172, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" 
                                               type=\"radio\" 
                                               name=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "isActive", [], "any", false, false, false, 174), "vars", [], "any", false, false, false, 174), "full_name", [], "any", false, false, false, 174), "html", null, true);
        yield "\" 
                                               id=\"isActive_no\" 
                                               value=\"0\" 
                                               ";
        // line 177
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "isActive", [], "any", false, false, false, 177), "vars", [], "any", false, false, false, 177), "value", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                                        <label class=\"btn btn-outline-danger w-100 py-4 text-center transition-all\" for=\"isActive_no\">
                                            <div class=\"fw-bold fs-5\">Inactive</div>
                                            <small>Masquée temporairement</small>
                                        </label>
                                    </div>
                                </div>

                                ";
        // line 185
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "isActive", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "errors", [], "any", false, false, false, 185))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 186
            yield "                                    <div class=\"form-error-message mt-2\">
                                        ";
            // line 187
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "isActive", [], "any", false, false, false, 187), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 190
        yield "                            </div>

                            <!-- Drapeau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">
                                    Drapeau de la langue 
                                    ";
        // line 196
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 196, $this->source); })()), "request", [], "any", false, false, false, 196), "attributes", [], "any", false, false, false, 196), "get", ["_route"], "method", false, false, false, 196) == "app_admin_langue_new")) {
            // line 197
            yield "                                        *
                                    ";
        }
        // line 199
        yield "                                </label>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-text\"><i class=\"feather-image\"></i></span>
                                    ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "drapeauFile", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => ("form-control " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 203
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "drapeauFile", [], "any", false, false, false, 203), "vars", [], "any", false, false, false, 203), "errors", [], "any", false, false, false, 203))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-invalid") : (""))), "accept" => "image/jpeg,image/png,image/webp"]]);
        // line 205
        yield "
                                </div>
                                <small class=\"text-muted\">
                                    Formats acceptés : JPG, PNG, WebP (max 2 Mo)
                                    ";
        // line 209
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 209, $this->source); })()), "request", [], "any", false, false, false, 209), "attributes", [], "any", false, false, false, 209), "get", ["_route"], "method", false, false, false, 209) != "app_admin_langue_new")) {
            // line 210
            yield "                                        - Laissez vide pour conserver le drapeau actuel
                                    ";
        }
        // line 212
        yield "                                </small>
                                ";
        // line 213
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "drapeauFile", [], "any", false, false, false, 213), "vars", [], "any", false, false, false, 213), "errors", [], "any", false, false, false, 213))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 214
            yield "                                    <div class=\"form-error-message\">
                                        ";
            // line 215
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "drapeauFile", [], "any", false, false, false, 215), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 218
        yield "
                                ";
        // line 219
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 219, $this->source); })()), "request", [], "any", false, false, false, 219), "attributes", [], "any", false, false, false, 219), "get", ["_route"], "method", false, false, false, 219) != "app_admin_langue_new") && CoreExtension::getAttribute($this->env, $this->source, ($context["langue"] ?? null), "drapeau", [], "any", true, true, false, 219)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 219, $this->source); })()), "drapeau", [], "any", false, false, false, 219))) {
            // line 220
            yield "                                    <div class=\"mt-4 text-center\">
                                        <p class=\"small text-muted mb-2\">Drapeau actuel :</p>
                                        <img src=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/langues/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 222, $this->source); })()), "drapeau", [], "any", false, false, false, 222))), "html", null, true);
            yield "\" alt=\"Drapeau\" class=\"img-fluid rounded shadow-sm\" style=\"max-height: 100px;\">
                                    </div>
                                ";
        }
        // line 225
        yield "                            </div>

                            <!-- Submit -->
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i>
                                    ";
        // line 231
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "request", [], "any", false, false, false, 231), "attributes", [], "any", false, false, false, 231), "get", ["_route"], "method", false, false, false, 231) == "app_admin_langue_new")) ? ("Créer la langue") : ("Mettre à jour la langue"));
        yield "
                                </button>
                            </div>
                        </div>

                        ";
        // line 236
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), 'form_end');
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
        return array (  489 => 236,  481 => 231,  473 => 225,  467 => 222,  463 => 220,  461 => 219,  458 => 218,  452 => 215,  449 => 214,  447 => 213,  444 => 212,  440 => 210,  438 => 209,  432 => 205,  430 => 203,  429 => 202,  424 => 199,  420 => 197,  418 => 196,  410 => 190,  404 => 187,  401 => 186,  399 => 185,  388 => 177,  382 => 174,  377 => 172,  366 => 164,  360 => 161,  355 => 159,  350 => 156,  347 => 155,  344 => 154,  342 => 153,  333 => 147,  328 => 144,  322 => 141,  319 => 140,  317 => 139,  314 => 138,  312 => 135,  311 => 134,  304 => 129,  298 => 126,  295 => 125,  293 => 124,  289 => 122,  287 => 120,  286 => 119,  277 => 112,  271 => 109,  268 => 108,  266 => 107,  262 => 105,  260 => 103,  259 => 102,  247 => 94,  241 => 91,  232 => 84,  223 => 77,  213 => 73,  210 => 72,  206 => 71,  196 => 64,  190 => 60,  186 => 58,  182 => 56,  180 => 55,  174 => 52,  165 => 45,  152 => 44,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
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
        /* Cacher le label généré automatiquement par Symfony pour isActive */
        .status-radio-group {
            display: none !important;
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

        <!-- Messages Flash -->
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
                        {# AJOUT DE NOVALIDATE POUR DÉSACTIVER LA VALIDATION HTML5 #}
                        {{ form_start(form, {'attr': {'class': 'row g-4', 'novalidate': 'novalidate'}}) }}

                        {# Affichage des erreurs globales du formulaire #}
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

                            <!-- NE PAS AFFICHER LE CHAMP isActive AUTO DE SYMFONY -->
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

                            <!-- Submit -->
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
{% endblock %}", "langue/edit.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\langue\\edit.html.twig");
    }
}
