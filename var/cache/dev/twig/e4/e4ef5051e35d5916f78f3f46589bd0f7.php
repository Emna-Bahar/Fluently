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
class __TwigTemplate_d83b835e4eb53e2970fb7a49b866f54a extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau/new.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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
        yield "<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #5b21b6 100%); min-height: 100vh; padding: 80px 20px; color: #000000;\">
<br><br><br><br>
    <div class=\"container\" style=\"max-width: 900px;\">

        <!-- Titre -->
        <div class=\"text-center mb-5\">
            <h1 class=\"fw-bold\" style=\"font-size: 2.8rem; color: #000000; text-shadow: 0 4px 12px rgba(0,0,0,0.2);\">
                ";
        // line 13
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier le niveau : " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13)), "html", null, true)) : ("Créer un nouveau niveau"));
        yield "
            </h1>
            <p class=\"mt-2\" style=\"font-size: 1.2rem; color: #111111;\">
                ";
        // line 16
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifiez les informations du niveau") : ("Ajoutez un nouveau niveau pour une langue"));
        yield "
            </p>
        </div>

        <!-- Formulaire -->
        <div class=\"card shadow-xl border-0 rounded-4 overflow-hidden\" style=\"background: rgba(255,255,255,0.98); backdrop-filter: blur(8px);\">
            <div class=\"card-body p-5\">
                ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => ""]]);
        yield "

                    <!-- Langue -->
                    <div class=\"mb-4\">
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "Id_langue", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #000000;"]]);
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Id_langue", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "Id_langue", [], "any", false, false, false, 29), 'errors', ["attr" => ["class" => "invalid-feedback d-block fw-bold"]]);
        yield "
                    </div>

                    <!-- Titre -->
                    <div class=\"mb-4\">
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "titre", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #000000;"]]);
        yield "
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "titre", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "titre", [], "any", false, false, false, 36), 'errors', ["attr" => ["class" => "invalid-feedback d-block fw-bold"]]);
        yield "
                    </div>

                    <!-- Description -->
                    <div class=\"mb-4\">
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #000000;"]]);
        yield "
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control form-control-lg", "rows" => 5]]);
        yield "
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), 'errors', ["attr" => ["class" => "invalid-feedback d-block fw-bold"]]);
        yield "
                    </div>

                    <!-- Image de couverture -->
                    <div class=\"mb-4\">
                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "imageCouvertureFile", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #000000;"], "label" => "Image de couverture (jpg, png, webp)"]);
        yield "
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "imageCouvertureFile", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "imageCouvertureFile", [], "any", false, false, false, 50), 'errors', ["attr" => ["class" => "invalid-feedback d-block fw-bold"]]);
        yield "

                        ";
        // line 52
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 52, $this->source); })()), "imageCouverture", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                            <div class=\"mt-3 text-center\">
                                <p class=\"fw-bold\" style=\"color: #000000;\">Image actuelle :</p>
                                <img src=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/niveaux/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 55, $this->source); })()), "imageCouverture", [], "any", false, false, false, 55))), "html", null, true);
            yield "\" alt=\"Couverture actuelle\" class=\"img-fluid rounded-3 shadow\" style=\"max-height: 220px; max-width: 100%;\">
                            </div>
                        ";
        }
        // line 58
        yield "                    </div>

                    <!-- Difficulté + Ordre -->
                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "difficulte", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #000000;"]]);
        yield "
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "difficulte", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "difficulte", [], "any", false, false, false, 65), 'errors', ["attr" => ["class" => "invalid-feedback d-block fw-bold"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "ordre", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #000000;"]]);
        yield "
                            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "ordre", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "ordre", [], "any", false, false, false, 70), 'errors', ["attr" => ["class" => "invalid-feedback d-block fw-bold"]]);
        yield "
                        </div>
                    </div>

                    <!-- Seuil min + max -->
                    <div class=\"row g-4 mb-5\">
                        <div class=\"col-md-6\">
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "seuil_score_min", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #000000;"], "label" => "Score minimum pour réussir"]);
        yield "
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "seuil_score_min", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "seuil_score_min", [], "any", false, false, false, 79), 'errors', ["attr" => ["class" => "invalid-feedback d-block fw-bold"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "seuil_score_max", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #000000;"], "label" => "Score maximum possible"]);
        yield "
                            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "seuil_score_max", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "seuil_score_max", [], "any", false, false, false, 84), 'errors', ["attr" => ["class" => "invalid-feedback d-block fw-bold"]]);
        yield "
                        </div>
                    </div>

                    <!-- Boutons -->
                    <div class=\"d-flex justify-content-end gap-3\">
                        <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_index");
        yield "\" class=\"btn btn-secondary btn-lg px-5 fw-bold\">Annuler</a>
                        <button type=\"submit\" class=\"btn btn-success btn-lg px-5 fw-bold shadow\">
                            ";
        // line 92
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour") : ("Créer le niveau"));
        yield "
                        </button>
                    </div>

                ";
        // line 96
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'form_end');
        yield "
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
        return array (  287 => 96,  280 => 92,  275 => 90,  266 => 84,  262 => 83,  258 => 82,  252 => 79,  248 => 78,  244 => 77,  234 => 70,  230 => 69,  226 => 68,  220 => 65,  216 => 64,  212 => 63,  205 => 58,  199 => 55,  195 => 53,  193 => 52,  188 => 50,  184 => 49,  180 => 48,  172 => 43,  168 => 42,  164 => 41,  156 => 36,  152 => 35,  148 => 34,  140 => 29,  136 => 28,  132 => 27,  125 => 23,  115 => 16,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ niveau.id ? 'Modifier le niveau : ' ~ niveau.titre : 'Créer un niveau' }}{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #5b21b6 100%); min-height: 100vh; padding: 80px 20px; color: #000000;\">
<br><br><br><br>
    <div class=\"container\" style=\"max-width: 900px;\">

        <!-- Titre -->
        <div class=\"text-center mb-5\">
            <h1 class=\"fw-bold\" style=\"font-size: 2.8rem; color: #000000; text-shadow: 0 4px 12px rgba(0,0,0,0.2);\">
                {{ niveau.id ? 'Modifier le niveau : ' ~ niveau.titre : 'Créer un nouveau niveau' }}
            </h1>
            <p class=\"mt-2\" style=\"font-size: 1.2rem; color: #111111;\">
                {{ niveau.id ? 'Modifiez les informations du niveau' : 'Ajoutez un nouveau niveau pour une langue' }}
            </p>
        </div>

        <!-- Formulaire -->
        <div class=\"card shadow-xl border-0 rounded-4 overflow-hidden\" style=\"background: rgba(255,255,255,0.98); backdrop-filter: blur(8px);\">
            <div class=\"card-body p-5\">
                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': ''}}) }}

                    <!-- Langue -->
                    <div class=\"mb-4\">
                        {{ form_label(form.Id_langue, null, {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #000000;'}}) }}
                        {{ form_widget(form.Id_langue, {'attr': {'class': 'form-select form-select-lg'}}) }}
                        {{ form_errors(form.Id_langue, {'attr': {'class': 'invalid-feedback d-block fw-bold'}}) }}
                    </div>

                    <!-- Titre -->
                    <div class=\"mb-4\">
                        {{ form_label(form.titre, null, {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #000000;'}}) }}
                        {{ form_widget(form.titre, {'attr': {'class': 'form-control form-control-lg'}}) }}
                        {{ form_errors(form.titre, {'attr': {'class': 'invalid-feedback d-block fw-bold'}}) }}
                    </div>

                    <!-- Description -->
                    <div class=\"mb-4\">
                        {{ form_label(form.description, null, {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #000000;'}}) }}
                        {{ form_widget(form.description, {'attr': {'class': 'form-control form-control-lg', 'rows': 5}}) }}
                        {{ form_errors(form.description, {'attr': {'class': 'invalid-feedback d-block fw-bold'}}) }}
                    </div>

                    <!-- Image de couverture -->
                    <div class=\"mb-4\">
                        {{ form_label(form.imageCouvertureFile, 'Image de couverture (jpg, png, webp)', {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #000000;'}}) }}
                        {{ form_widget(form.imageCouvertureFile, {'attr': {'class': 'form-control form-control-lg'}}) }}
                        {{ form_errors(form.imageCouvertureFile, {'attr': {'class': 'invalid-feedback d-block fw-bold'}}) }}

                        {% if niveau.imageCouverture %}
                            <div class=\"mt-3 text-center\">
                                <p class=\"fw-bold\" style=\"color: #000000;\">Image actuelle :</p>
                                <img src=\"{{ asset('uploads/niveaux/' ~ niveau.imageCouverture) }}\" alt=\"Couverture actuelle\" class=\"img-fluid rounded-3 shadow\" style=\"max-height: 220px; max-width: 100%;\">
                            </div>
                        {% endif %}
                    </div>

                    <!-- Difficulté + Ordre -->
                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-md-6\">
                            {{ form_label(form.difficulte, null, {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #000000;'}}) }}
                            {{ form_widget(form.difficulte, {'attr': {'class': 'form-control form-control-lg'}}) }}
                            {{ form_errors(form.difficulte, {'attr': {'class': 'invalid-feedback d-block fw-bold'}}) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_label(form.ordre, null, {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #000000;'}}) }}
                            {{ form_widget(form.ordre, {'attr': {'class': 'form-control form-control-lg'}}) }}
                            {{ form_errors(form.ordre, {'attr': {'class': 'invalid-feedback d-block fw-bold'}}) }}
                        </div>
                    </div>

                    <!-- Seuil min + max -->
                    <div class=\"row g-4 mb-5\">
                        <div class=\"col-md-6\">
                            {{ form_label(form.seuil_score_min, 'Score minimum pour réussir', {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #000000;'}}) }}
                            {{ form_widget(form.seuil_score_min, {'attr': {'class': 'form-control form-control-lg'}}) }}
                            {{ form_errors(form.seuil_score_min, {'attr': {'class': 'invalid-feedback d-block fw-bold'}}) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_label(form.seuil_score_max, 'Score maximum possible', {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #000000;'}}) }}
                            {{ form_widget(form.seuil_score_max, {'attr': {'class': 'form-control form-control-lg'}}) }}
                            {{ form_errors(form.seuil_score_max, {'attr': {'class': 'invalid-feedback d-block fw-bold'}}) }}
                        </div>
                    </div>

                    <!-- Boutons -->
                    <div class=\"d-flex justify-content-end gap-3\">
                        <a href=\"{{ path('app_niveau_index') }}\" class=\"btn btn-secondary btn-lg px-5 fw-bold\">Annuler</a>
                        <button type=\"submit\" class=\"btn btn-success btn-lg px-5 fw-bold shadow\">
                            {{ niveau.id ? 'Mettre à jour' : 'Créer le niveau' }}
                        </button>
                    </div>

                {{ form_end(form) }}
            </div>
        </div>

    </div>
</div>
{% endblock %}", "niveau/new.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\niveau\\new.html.twig");
    }
}
