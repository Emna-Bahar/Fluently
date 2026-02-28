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
class __TwigTemplate_47d513c4664f8b410a2aed488c682462 extends Template
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

<div style=\"display: none;\">
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "isActive", [], "any", false, false, false, 4), 'widget');
        yield "
</div>

<div class=\"row\">
    <div class=\"col-md-6\">";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), 'row');
        yield "</div>
    <div class=\"col-md-6\">";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "popularite", [], "any", false, false, false, 9), 'row');
        yield "</div>
    <div class=\"col-12\">";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "description", [], "any", false, false, false, 10), 'row');
        yield "</div>
</div>

<div class=\"mb-3\">
    <label class=\"form-label fw-bold\">Statut de la langue *</label>
    <div class=\"row g-3\">
        <div class=\"col-6\">
            <input type=\"radio\" class=\"btn-check\" name=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "isActive", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "full_name", [], "any", false, false, false, 17), "html", null, true);
        yield "\" 
                   id=\"isActive_yes\" value=\"1\" ";
        // line 18
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "isActive", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
            <label class=\"btn btn-outline-success w-100 py-3\" for=\"isActive_yes\">Active</label>
        </div>
        <div class=\"col-6\">
            <input type=\"radio\" class=\"btn-check\" name=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "isActive", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "full_name", [], "any", false, false, false, 22), "html", null, true);
        yield "\" 
                   id=\"isActive_no\" value=\"0\" ";
        // line 23
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "isActive", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
            <label class=\"btn btn-outline-danger w-100 py-3\" for=\"isActive_no\">Inactive</label>
        </div>
    </div>
</div>

<div class=\"mb-3\">
    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "drapeauFile", [], "any", false, false, false, 30), 'label');
        yield "
    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "drapeauFile", [], "any", false, false, false, 31), 'widget');
        yield "
    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "drapeauFile", [], "any", false, false, false, 32), 'errors');
        yield "
</div>

<button class=\"btn btn-primary\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>

";
        // line 37
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        
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
        return array (  123 => 37,  118 => 35,  112 => 32,  108 => 31,  104 => 30,  94 => 23,  90 => 22,  83 => 18,  79 => 17,  69 => 10,  65 => 9,  61 => 8,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

<div style=\"display: none;\">
    {{ form_widget(form.isActive) }}
</div>

<div class=\"row\">
    <div class=\"col-md-6\">{{ form_row(form.nom) }}</div>
    <div class=\"col-md-6\">{{ form_row(form.popularite) }}</div>
    <div class=\"col-12\">{{ form_row(form.description) }}</div>
</div>

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

<div class=\"mb-3\">
    {{ form_label(form.drapeauFile) }}
    {{ form_widget(form.drapeauFile) }}
    {{ form_errors(form.drapeauFile) }}
</div>

<button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>

{{ form_end(form) }}", "langue/_form.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\langue\\_form.html.twig");
    }
}
