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

/* objectif_admin/new.html.twig */
class __TwigTemplate_8ae0f292fb7910bb119d4ccb532a0db7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_admin/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_admin/new.html.twig"));

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

        yield "Créer un Objectif";
        
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
        yield "<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Créer un Objectif</h5>
            </div>
            <ul class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_index");
        yield "\">Objectifs</a></li>
                <li class=\"breadcrumb-item active\">Créer</li>
            </ul>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_index");
        yield "\" class=\"btn btn-light\">
                <i class=\"feather-arrow-left me-2\"></i>Retour à la liste
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xxl-8 col-lg-10\">
                <div class=\"card stretch stretch-full\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">
                            <i class=\"feather-target me-2\"></i>Nouvel Objectif
                        </h5>
                        <p class=\"text-muted mb-0\">Remplissez les informations ci-dessous pour créer un nouvel objectif</p>
                    </div>
                    
                    <div class=\"card-body\">
                        ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
                        
                        <div class=\"row\">
                            ";
        // line 40
        yield "                            <div class=\"col-12 mb-4\">
                                <label class=\"form-label\">
                                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "titre", [], "any", false, false, false, 42), 'label');
        yield "
                                    <span class=\"text-danger\">*</span>
                                </label>
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "titre", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 47
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "titre", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "Ex: Apprendre l'espagnol"]]);
        // line 50
        yield "
                                ";
        // line 51
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "titre", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "errors", [], "any", false, false, false, 51)) > 0)) {
            // line 52
            yield "                                    <div class=\"invalid-feedback d-block\">
                                        ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "titre", [], "any", false, false, false, 53), 'errors');
            yield "
                                    </div>
                                ";
        } else {
            // line 56
            yield "                                    <small class=\"form-text text-muted\">
                                        <i class=\"feather-info fs-12 me-1\"></i>Entre 3 et 50 caractères
                                    </small>
                                ";
        }
        // line 60
        yield "                            </div>

                            ";
        // line 63
        yield "                            <div class=\"col-12 mb-4\">
                                <label class=\"form-label\">
                                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), 'label');
        yield "
                                    <span class=\"text-danger\">*</span>
                                </label>
                                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 70
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70)) > 0)) ? (" is-invalid") : (""))), "rows" => 4, "placeholder" => "Décrivez votre objectif en détail..."]]);
        // line 74
        yield "
                                ";
        // line 75
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "description", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "errors", [], "any", false, false, false, 75)) > 0)) {
            // line 76
            yield "                                    <div class=\"invalid-feedback d-block\">
                                        ";
            // line 77
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), 'errors');
            yield "
                                    </div>
                                ";
        } else {
            // line 80
            yield "                                    <small class=\"form-text text-muted\">
                                        <i class=\"feather-info fs-12 me-1\"></i>Entre 10 et 255 caractères
                                    </small>
                                ";
        }
        // line 84
        yield "                            </div>

                            ";
        // line 87
        yield "                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "date_deb", [], "any", false, false, false, 89), 'label');
        yield "
                                    <span class=\"text-danger\">*</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"><i class=\"feather-calendar\"></i></span>
                                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "date_deb", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 96
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "date_deb", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "errors", [], "any", false, false, false, 96)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 98
        yield "
                                </div>
                                ";
        // line 100
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "date_deb", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "errors", [], "any", false, false, false, 100)) > 0)) {
            // line 101
            yield "                                    <div class=\"invalid-feedback d-block\">
                                        ";
            // line 102
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "date_deb", [], "any", false, false, false, 102), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 105
        yield "                            </div>

                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "date_fin", [], "any", false, false, false, 109), 'label');
        yield "
                                    <span class=\"text-danger\">*</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"><i class=\"feather-calendar\"></i></span>
                                    ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "date_fin", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 116
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "date_fin", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "errors", [], "any", false, false, false, 116)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 118
        yield "
                                </div>
                                ";
        // line 120
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "date_fin", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "errors", [], "any", false, false, false, 120)) > 0)) {
            // line 121
            yield "                                    <div class=\"invalid-feedback d-block\">
                                        ";
            // line 122
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "date_fin", [], "any", false, false, false, 122), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 125
        yield "                            </div>

                            ";
        // line 128
        yield "                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "statut", [], "any", false, false, false, 130), 'label');
        yield "
                                    <span class=\"text-danger\">*</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"><i class=\"feather-activity\"></i></span>
                                    ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "statut", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => ("form-select" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 137
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "statut", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "errors", [], "any", false, false, false, 137)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 139
        yield "
                                </div>
                                ";
        // line 141
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "statut", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "errors", [], "any", false, false, false, 141)) > 0)) {
            // line 142
            yield "                                    <div class=\"invalid-feedback d-block\">
                                        ";
            // line 143
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "statut", [], "any", false, false, false, 143), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 146
        yield "                            </div>

                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "Id_user", [], "any", false, false, false, 150), 'label');
        yield "
                                    <span class=\"text-danger\">*</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"><i class=\"feather-user\"></i></span>
                                    ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "Id_user", [], "any", false, false, false, 155), 'widget', ["attr" => ["class" => ("form-select" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 157
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "Id_user", [], "any", false, false, false, 157), "vars", [], "any", false, false, false, 157), "errors", [], "any", false, false, false, 157)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 159
        yield "
                                </div>
                                ";
        // line 161
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "Id_user", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "errors", [], "any", false, false, false, 161)) > 0)) {
            // line 162
            yield "                                    <div class=\"invalid-feedback d-block\">
                                        ";
            // line 163
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "Id_user", [], "any", false, false, false, 163), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 166
        yield "                            </div>
                        </div>

                        <hr class=\"my-4\">

                        ";
        // line 172
        yield "                        <div class=\"d-flex gap-2 justify-content-end\">
                            <a href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_index");
        yield "\" class=\"btn btn-light\">
                                <i class=\"feather-x me-2\"></i>Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"feather-save me-2\"></i>Enregistrer l'objectif
                            </button>
                        </div>

                        ";
        // line 181
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), 'form_end');
        yield "
                    </div>

                    ";
        // line 185
        yield "                    <div class=\"card-footer bg-soft-primary\">
                        <div class=\"d-flex align-items-start\">
                            <i class=\"feather-info text-primary fs-4 me-3\"></i>
                            <div>
                                <h6 class=\"text-dark mb-1\">Conseils pour définir un objectif SMART</h6>
                                <ul class=\"mb-0 ps-3\">
                                    <li class=\"text-muted fs-12\">Spécifique : Définissez clairement ce que vous voulez accomplir</li>
                                    <li class=\"text-muted fs-12\">Mesurable : Assurez-vous de pouvoir suivre vos progrès</li>
                                    <li class=\"text-muted fs-12\">Atteignable : Fixez un objectif réaliste</li>
                                    <li class=\"text-muted fs-12\">Relevant : Assurez-vous qu'il soit pertinent pour vous</li>
                                    <li class=\"text-muted fs-12\">Temporel : Définissez une échéance claire</li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
        return "objectif_admin/new.html.twig";
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
        return array (  373 => 185,  367 => 181,  356 => 173,  353 => 172,  346 => 166,  340 => 163,  337 => 162,  335 => 161,  331 => 159,  329 => 157,  328 => 155,  320 => 150,  314 => 146,  308 => 143,  305 => 142,  303 => 141,  299 => 139,  297 => 137,  296 => 135,  288 => 130,  284 => 128,  280 => 125,  274 => 122,  271 => 121,  269 => 120,  265 => 118,  263 => 116,  262 => 114,  254 => 109,  248 => 105,  242 => 102,  239 => 101,  237 => 100,  233 => 98,  231 => 96,  230 => 94,  222 => 89,  218 => 87,  214 => 84,  208 => 80,  202 => 77,  199 => 76,  197 => 75,  194 => 74,  192 => 70,  191 => 68,  185 => 65,  181 => 63,  177 => 60,  171 => 56,  165 => 53,  162 => 52,  160 => 51,  157 => 50,  155 => 47,  154 => 45,  148 => 42,  144 => 40,  138 => 36,  117 => 18,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Créer un Objectif{% endblock %}

{% block body %}
<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Créer un Objectif</h5>
            </div>
            <ul class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_objectif_admin_index') }}\">Objectifs</a></li>
                <li class=\"breadcrumb-item active\">Créer</li>
            </ul>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"{{ path('app_objectif_admin_index') }}\" class=\"btn btn-light\">
                <i class=\"feather-arrow-left me-2\"></i>Retour à la liste
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xxl-8 col-lg-10\">
                <div class=\"card stretch stretch-full\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title\">
                            <i class=\"feather-target me-2\"></i>Nouvel Objectif
                        </h5>
                        <p class=\"text-muted mb-0\">Remplissez les informations ci-dessous pour créer un nouvel objectif</p>
                    </div>
                    
                    <div class=\"card-body\">
                        {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}
                        
                        <div class=\"row\">
                            {# Titre #}
                            <div class=\"col-12 mb-4\">
                                <label class=\"form-label\">
                                    {{ form_label(form.titre) }}
                                    <span class=\"text-danger\">*</span>
                                </label>
                                {{ form_widget(form.titre, {
                                    'attr': {
                                        'class': 'form-control' ~ (form.titre.vars.errors|length > 0 ? ' is-invalid' : ''),
                                        'placeholder': 'Ex: Apprendre l\\'espagnol'
                                    }
                                }) }}
                                {% if form.titre.vars.errors|length > 0 %}
                                    <div class=\"invalid-feedback d-block\">
                                        {{ form_errors(form.titre) }}
                                    </div>
                                {% else %}
                                    <small class=\"form-text text-muted\">
                                        <i class=\"feather-info fs-12 me-1\"></i>Entre 3 et 50 caractères
                                    </small>
                                {% endif %}
                            </div>

                            {# Description #}
                            <div class=\"col-12 mb-4\">
                                <label class=\"form-label\">
                                    {{ form_label(form.description) }}
                                    <span class=\"text-danger\">*</span>
                                </label>
                                {{ form_widget(form.description, {
                                    'attr': {
                                        'class': 'form-control' ~ (form.description.vars.errors|length > 0 ? ' is-invalid' : ''),
                                        'rows': 4,
                                        'placeholder': 'Décrivez votre objectif en détail...'
                                    }
                                }) }}
                                {% if form.description.vars.errors|length > 0 %}
                                    <div class=\"invalid-feedback d-block\">
                                        {{ form_errors(form.description) }}
                                    </div>
                                {% else %}
                                    <small class=\"form-text text-muted\">
                                        <i class=\"feather-info fs-12 me-1\"></i>Entre 10 et 255 caractères
                                    </small>
                                {% endif %}
                            </div>

                            {# Dates #}
                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    {{ form_label(form.date_deb) }}
                                    <span class=\"text-danger\">*</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"><i class=\"feather-calendar\"></i></span>
                                    {{ form_widget(form.date_deb, {
                                        'attr': {
                                            'class': 'form-control' ~ (form.date_deb.vars.errors|length > 0 ? ' is-invalid' : '')
                                        }
                                    }) }}
                                </div>
                                {% if form.date_deb.vars.errors|length > 0 %}
                                    <div class=\"invalid-feedback d-block\">
                                        {{ form_errors(form.date_deb) }}
                                    </div>
                                {% endif %}
                            </div>

                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    {{ form_label(form.date_fin) }}
                                    <span class=\"text-danger\">*</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"><i class=\"feather-calendar\"></i></span>
                                    {{ form_widget(form.date_fin, {
                                        'attr': {
                                            'class': 'form-control' ~ (form.date_fin.vars.errors|length > 0 ? ' is-invalid' : '')
                                        }
                                    }) }}
                                </div>
                                {% if form.date_fin.vars.errors|length > 0 %}
                                    <div class=\"invalid-feedback d-block\">
                                        {{ form_errors(form.date_fin) }}
                                    </div>
                                {% endif %}
                            </div>

                            {# Statut et Utilisateur #}
                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    {{ form_label(form.statut) }}
                                    <span class=\"text-danger\">*</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"><i class=\"feather-activity\"></i></span>
                                    {{ form_widget(form.statut, {
                                        'attr': {
                                            'class': 'form-select' ~ (form.statut.vars.errors|length > 0 ? ' is-invalid' : '')
                                        }
                                    }) }}
                                </div>
                                {% if form.statut.vars.errors|length > 0 %}
                                    <div class=\"invalid-feedback d-block\">
                                        {{ form_errors(form.statut) }}
                                    </div>
                                {% endif %}
                            </div>

                            <div class=\"col-md-6 mb-4\">
                                <label class=\"form-label\">
                                    {{ form_label(form.Id_user) }}
                                    <span class=\"text-danger\">*</span>
                                </label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"><i class=\"feather-user\"></i></span>
                                    {{ form_widget(form.Id_user, {
                                        'attr': {
                                            'class': 'form-select' ~ (form.Id_user.vars.errors|length > 0 ? ' is-invalid' : '')
                                        }
                                    }) }}
                                </div>
                                {% if form.Id_user.vars.errors|length > 0 %}
                                    <div class=\"invalid-feedback d-block\">
                                        {{ form_errors(form.Id_user) }}
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        <hr class=\"my-4\">

                        {# Boutons d'action #}
                        <div class=\"d-flex gap-2 justify-content-end\">
                            <a href=\"{{ path('app_objectif_admin_index') }}\" class=\"btn btn-light\">
                                <i class=\"feather-x me-2\"></i>Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"feather-save me-2\"></i>Enregistrer l'objectif
                            </button>
                        </div>

                        {{ form_end(form) }}
                    </div>

                    {# Aide #}
                    <div class=\"card-footer bg-soft-primary\">
                        <div class=\"d-flex align-items-start\">
                            <i class=\"feather-info text-primary fs-4 me-3\"></i>
                            <div>
                                <h6 class=\"text-dark mb-1\">Conseils pour définir un objectif SMART</h6>
                                <ul class=\"mb-0 ps-3\">
                                    <li class=\"text-muted fs-12\">Spécifique : Définissez clairement ce que vous voulez accomplir</li>
                                    <li class=\"text-muted fs-12\">Mesurable : Assurez-vous de pouvoir suivre vos progrès</li>
                                    <li class=\"text-muted fs-12\">Atteignable : Fixez un objectif réaliste</li>
                                    <li class=\"text-muted fs-12\">Relevant : Assurez-vous qu'il soit pertinent pour vous</li>
                                    <li class=\"text-muted fs-12\">Temporel : Définissez une échéance claire</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "objectif_admin/new.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\objectif_admin\\new.html.twig");
    }
}
