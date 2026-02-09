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

/* cours/_form.html.twig */
class __TwigTemplate_b25d4062b1bd702d70b65deb79f1c9b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "langue", [], "any", false, false, false, 4), 'row', ["attr" => ["id" => "langue-select"]]);
        yield "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "Id_niveau", [], "any", false, false, false, 7), 'row', ["attr" => ["id" => "niveau-select"]]);
        yield "
        </div>
    </div>
    
    ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'widget');
        yield "
    
    <button class=\"btn btn-primary\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 13, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const langueSelect = document.getElementById('langue-select');
    const niveauSelect = document.getElementById('niveau-select');
    // Store original options to restore them later
    // We need to clone them because appending them to a new select removes them from the original NodeList
    const niveauOptions = Array.from(niveauSelect.options).map(option => option.cloneNode(true));

    function filterNiveaux() {
        const selectedLangueId = langueSelect.value;
        const currentNiveauId = niveauSelect.value;
        
        // Reset selection if the current one is being hidden
        let isCurrentValid = false;

        niveauSelect.innerHTML = ''; // Clear existing
        
        niveauOptions.forEach(option => {
            if (option.value === '') {
                niveauSelect.appendChild(option.cloneNode(true)); // Always keep placeholder
                return;
            }
            
            const optionLangue = option.getAttribute('data-langue');
            if (optionLangue === selectedLangueId) {
                const clonedOption = option.cloneNode(true);
                niveauSelect.appendChild(clonedOption);
                if (clonedOption.value === currentNiveauId) isCurrentValid = true;
            }
        });

        if (!isCurrentValid) {
            niveauSelect.value = '';
        } else {
            niveauSelect.value = currentNiveauId; // Restore previous selection if still valid
        }
    }

    if(langueSelect) {
        langueSelect.addEventListener('change', filterNiveaux);
        // Trigger on load if langue is already selected (e.g. edit or back button)
        // Only filter if a langue is actually selected, otherwise show all
        if(langueSelect.value) {
            filterNiveaux();
        }
    }
});
</script>
";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cours/_form.html.twig";
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
        return array (  125 => 63,  72 => 13,  67 => 11,  60 => 7,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_row(form.langue, {'attr': {'id': 'langue-select'}}) }}
        </div>
        <div class=\"col-md-6\">
            {{ form_row(form.Id_niveau, {'attr': {'id': 'niveau-select'}}) }}
        </div>
    </div>
    
    {{ form_widget(form) }}
    
    <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const langueSelect = document.getElementById('langue-select');
    const niveauSelect = document.getElementById('niveau-select');
    // Store original options to restore them later
    // We need to clone them because appending them to a new select removes them from the original NodeList
    const niveauOptions = Array.from(niveauSelect.options).map(option => option.cloneNode(true));

    function filterNiveaux() {
        const selectedLangueId = langueSelect.value;
        const currentNiveauId = niveauSelect.value;
        
        // Reset selection if the current one is being hidden
        let isCurrentValid = false;

        niveauSelect.innerHTML = ''; // Clear existing
        
        niveauOptions.forEach(option => {
            if (option.value === '') {
                niveauSelect.appendChild(option.cloneNode(true)); // Always keep placeholder
                return;
            }
            
            const optionLangue = option.getAttribute('data-langue');
            if (optionLangue === selectedLangueId) {
                const clonedOption = option.cloneNode(true);
                niveauSelect.appendChild(clonedOption);
                if (clonedOption.value === currentNiveauId) isCurrentValid = true;
            }
        });

        if (!isCurrentValid) {
            niveauSelect.value = '';
        } else {
            niveauSelect.value = currentNiveauId; // Restore previous selection if still valid
        }
    }

    if(langueSelect) {
        langueSelect.addEventListener('change', filterNiveaux);
        // Trigger on load if langue is already selected (e.g. edit or back button)
        // Only filter if a langue is actually selected, otherwise show all
        if(langueSelect.value) {
            filterNiveaux();
        }
    }
});
</script>
{{ form_end(form) }}
", "cours/_form.html.twig", "C:\\Users\\emnab\\Documents\\Fluently\\templates\\cours\\_form.html.twig");
    }
}
