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

/* reponse/_form.html.twig */
class __TwigTemplate_1aeca7325507d87956fcf23ebdc5b79a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/_form.html.twig"));

        // line 1
        yield "<div class=\"form-card\">
    <h2 class=\"form-title\">";
        // line 2
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier la réponse") : ("Ajouter une réponse"));
        yield "</h2>

    ";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        yield "

    <div class=\"row g-4\">
        <div class=\"col-12\">
            <div class=\"form-group\">
                ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "contenuRep", [], "any", false, false, false, 9), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "contenuRep", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez la réponse possible..."]]);
        yield "
                ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "contenuRep", [], "any", false, false, false, 11), 'errors');
        yield "
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group form-check mt-4\">
                <div class=\"d-flex align-items-center\">
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "is_correct", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-check-input me-3"]]);
        yield "
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "is_correct", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        yield "
                </div>
                <div class=\"form-help\">Cochez si cette réponse est la bonne</div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "score", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "score", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "5", "min" => 0, "step" => 0.5]]);
        yield "
                <div class=\"form-help\">Points attribués si cette réponse est correcte</div>
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "score", [], "any", false, false, false, 30), 'errors');
        yield "
            </div>
        </div>

        <div class=\"col-12\">
            <div class=\"form-group\">
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Id_question", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Id_question", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "Id_question", [], "any", false, false, false, 38), 'errors');
        yield "
            </div>
        </div>
    </div>

    <div class=\"d-flex gap-3 mt-5\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 45, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
        </button>
        <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
        </a>
    </div>

    ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        yield "
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reponse/_form.html.twig";
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
        return array (  146 => 52,  138 => 47,  133 => 45,  123 => 38,  119 => 37,  115 => 36,  106 => 30,  101 => 28,  97 => 27,  86 => 19,  82 => 18,  72 => 11,  68 => 10,  64 => 9,  56 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"form-card\">
    <h2 class=\"form-title\">{{ reponse.id ? 'Modifier la réponse' : 'Ajouter une réponse' }}</h2>

    {{ form_start(form) }}

    <div class=\"row g-4\">
        <div class=\"col-12\">
            <div class=\"form-group\">
                {{ form_label(form.contenuRep, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.contenuRep, {'attr': {'class': 'form-control', 'placeholder': 'Entrez la réponse possible...'}}) }}
                {{ form_errors(form.contenuRep) }}
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group form-check mt-4\">
                <div class=\"d-flex align-items-center\">
                    {{ form_widget(form.is_correct, {'attr': {'class': 'form-check-input me-3'}}) }}
                    {{ form_label(form.is_correct, null, {'label_attr': {'class': 'form-check-label'}}) }}
                </div>
                <div class=\"form-help\">Cochez si cette réponse est la bonne</div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.score, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.score, {'attr': {'class': 'form-control', 'placeholder': '5', 'min': 0, 'step': 0.5}}) }}
                <div class=\"form-help\">Points attribués si cette réponse est correcte</div>
                {{ form_errors(form.score) }}
            </div>
        </div>

        <div class=\"col-12\">
            <div class=\"form-group\">
                {{ form_label(form.Id_question, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.Id_question, {'attr': {'class': 'form-select'}}) }}
                {{ form_errors(form.Id_question) }}
            </div>
        </div>
    </div>

    <div class=\"d-flex gap-3 mt-5\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i> {{ button_label|default('Enregistrer') }}
        </button>
        <a href=\"{{ path('app_reponse_index') }}\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
        </a>
    </div>

    {{ form_end(form) }}
</div>", "reponse/_form.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\reponse\\_form.html.twig");
    }
}
