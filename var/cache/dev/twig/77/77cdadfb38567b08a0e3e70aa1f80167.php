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

/* langue/_form.html.twig */
class __TwigTemplate_95b946ecb5462f7b648347103f5f3dfc extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

";
        // line 4
        yield "<div style=\"display: none;\">
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "isActive", [], "any", false, false, false, 5), 'widget');
        yield "
</div>

";
        // line 9
        yield "<div class=\"row\">
    <div class=\"col-md-6\">";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), 'row');
        yield "</div>
    <div class=\"col-md-6\">";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "popularite", [], "any", false, false, false, 11), 'row');
        yield "</div>
    <div class=\"col-12\">";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), 'row');
        yield "</div>
</div>

<!-- Statut personnalisé -->
<div class=\"mb-3\">
    <label class=\"form-label fw-bold\">Statut de la langue *</label>
    <div class=\"row g-3\">
        <div class=\"col-6\">
            <input type=\"radio\" class=\"btn-check\" name=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "isActive", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "full_name", [], "any", false, false, false, 20), "html", null, true);
        yield "\" 
                   id=\"isActive_yes\" value=\"1\" ";
        // line 21
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "isActive", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "value", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
            <label class=\"btn btn-outline-success w-100 py-3\" for=\"isActive_yes\">Active</label>
        </div>
        <div class=\"col-6\">
            <input type=\"radio\" class=\"btn-check\" name=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "isActive", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "full_name", [], "any", false, false, false, 25), "html", null, true);
        yield "\" 
                   id=\"isActive_no\" value=\"0\" ";
        // line 26
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "isActive", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
            <label class=\"btn btn-outline-danger w-100 py-3\" for=\"isActive_no\">Inactive</label>
        </div>
    </div>
</div>

<!-- Drapeau avec VichUploader -->
<div class=\"mb-3\">
    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "drapeauFile", [], "any", false, false, false, 34), 'label');
        yield "
    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "drapeauFile", [], "any", false, false, false, 35), 'widget');
        yield "
    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "drapeauFile", [], "any", false, false, false, 36), 'errors');
        yield "
</div>

<button class=\"btn btn-primary\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 39, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>

";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "langue/_form.html.twig";
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
        return array (  129 => 41,  124 => 39,  118 => 36,  114 => 35,  110 => 34,  99 => 26,  95 => 25,  88 => 21,  84 => 20,  73 => 12,  69 => 11,  65 => 10,  62 => 9,  56 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

{# Cacher le champ isActive pour le gérer manuellement #}
<div style=\"display: none;\">
    {{ form_widget(form.isActive) }}
</div>

{# Afficher tous les champs sauf isActive et drapeauFile #}
<div class=\"row\">
    <div class=\"col-md-6\">{{ form_row(form.nom) }}</div>
    <div class=\"col-md-6\">{{ form_row(form.popularite) }}</div>
    <div class=\"col-12\">{{ form_row(form.description) }}</div>
</div>

<!-- Statut personnalisé -->
<div class=\"mb-3\">
    <label class=\"form-label fw-bold\">Statut de la langue *</label>
    <div class=\"row g-3\">
        <div class=\"col-6\">
            <input type=\"radio\" class=\"btn-check\" name=\"{{ form.isActive.vars.full_name }}\" 
                   id=\"isActive_yes\" value=\"1\" {{ form.isActive.vars.value ? 'checked' : '' }}>
            <label class=\"btn btn-outline-success w-100 py-3\" for=\"isActive_yes\">Active</label>
        </div>
        <div class=\"col-6\">
            <input type=\"radio\" class=\"btn-check\" name=\"{{ form.isActive.vars.full_name }}\" 
                   id=\"isActive_no\" value=\"0\" {{ not form.isActive.vars.value ? 'checked' : '' }}>
            <label class=\"btn btn-outline-danger w-100 py-3\" for=\"isActive_no\">Inactive</label>
        </div>
    </div>
</div>

<!-- Drapeau avec VichUploader -->
<div class=\"mb-3\">
    {{ form_label(form.drapeauFile) }}
    {{ form_widget(form.drapeauFile) }}
    {{ form_errors(form.drapeauFile) }}
</div>

<button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>

{{ form_end(form) }}", "langue/_form.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\langue\\_form.html.twig");
    }
}
