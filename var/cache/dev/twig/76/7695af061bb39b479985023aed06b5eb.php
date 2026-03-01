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

/* question/_form.html.twig */
class __TwigTemplate_ff3642f3fa9bcded2f25360a4e4b4f4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/_form.html.twig"));

        // line 1
        yield "<div class=\"form-card\">
    <h2 class=\"form-title\">";
        // line 2
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier la question") : ("Ajouter une question"));
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "enonce", [], "any", false, false, false, 9), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "enonce", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Énoncez clairement la question ici..."]]);
        yield "
                ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "enonce", [], "any", false, false, false, 11), 'errors');
        yield "
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "type", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19), 'errors');
        yield "
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "score_max", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "score_max", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "10", "min" => 1]]);
        yield "
                <div class=\"form-help\">Points attribués à cette question</div>
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "score_max", [], "any", false, false, false, 28), 'errors');
        yield "
            </div>
        </div>

        <div class=\"col-12\">
            <div class=\"form-group\">
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Id_test", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "Id_test", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Id_test", [], "any", false, false, false, 36), 'errors');
        yield "
            </div>
        </div>
    </div>

    <div class=\"d-flex gap-3 mt-5\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i> ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 43, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
        </button>
        <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
        </a>
    </div>

    ";
        // line 50
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
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
        return "question/_form.html.twig";
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
        return array (  147 => 50,  139 => 45,  134 => 43,  124 => 36,  120 => 35,  116 => 34,  107 => 28,  102 => 26,  98 => 25,  89 => 19,  85 => 18,  81 => 17,  72 => 11,  68 => 10,  64 => 9,  56 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"form-card\">
    <h2 class=\"form-title\">{{ question.id ? 'Modifier la question' : 'Ajouter une question' }}</h2>

    {{ form_start(form) }}

    <div class=\"row g-4\">
        <div class=\"col-12\">
            <div class=\"form-group\">
                {{ form_label(form.enonce, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.enonce, {'attr': {'class': 'form-control', 'rows': 4, 'placeholder': 'Énoncez clairement la question ici...'}}) }}
                {{ form_errors(form.enonce) }}
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.type, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.type, {'attr': {'class': 'form-select'}}) }}
                {{ form_errors(form.type) }}
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.score_max, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.score_max, {'attr': {'class': 'form-control', 'placeholder': '10', 'min': 1}}) }}
                <div class=\"form-help\">Points attribués à cette question</div>
                {{ form_errors(form.score_max) }}
            </div>
        </div>

        <div class=\"col-12\">
            <div class=\"form-group\">
                {{ form_label(form.Id_test, null, {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.Id_test, {'attr': {'class': 'form-select'}}) }}
                {{ form_errors(form.Id_test) }}
            </div>
        </div>
    </div>

    <div class=\"d-flex gap-3 mt-5\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i> {{ button_label|default('Enregistrer') }}
        </button>
        <a href=\"{{ path('app_question_index') }}\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
        </a>
    </div>

    {{ form_end(form) }}
</div>", "question/_form.html.twig", "C:\\Users\\MSI\\Desktop\\5idma\\Fluently\\templates\\question\\_form.html.twig");
    }
}
