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

/* tache/_form.html.twig */
class __TwigTemplate_a09170508dc8767426ba831e7d84720b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "

<style>
/* ==== PAGE ==== */
body {
    background-color: #f5f7fb;
}

/* ==== CONTAINER ==== */
.task-wrapper {
    max-width: 850px;
    margin: 120px auto 40px auto; /* décalage navbar */
}

/* ==== CARD ==== */
.task-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 35px 40px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

/* ==== TITRE ==== */
.task-title {
    text-align: center;
    font-size: 26px;
    font-weight: 600;
    color: #4f6df5;
    margin-bottom: 30px;
}

/* ==== INPUTS ==== */
.form-control {
    height: 52px;
    border-radius: 12px;
    border: 1px solid #ddd;
    padding: 10px 16px;
    font-size: 15px;
    transition: all 0.25s ease;
    background-color: #fafafa;
}

textarea.form-control {
    height: auto;
}

/* ==== FOCUS (curseur visible) ==== */
.form-control:focus {
    outline: none !important;
    border: 2px solid #4f6df5;
    background-color: #fff;
    box-shadow: 0 0 0 4px rgba(79,109,245,0.15);
}

/* ==== LABEL ==== */
label {
    font-weight: 500;
    margin-bottom: 6px;
    color: #444;
}

/* ==== BOUTONS ==== */
.btn-save {
    background: linear-gradient(135deg, #4f6df5, #6a82fb);
    color: white;
    border: none;
    border-radius: 30px;
    padding: 12px 40px;
    font-size: 16px;
    font-weight: 500;
    transition: all 0.2s ease;
}

.btn-save:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(79,109,245,0.35);
}

.btn-cancel {
    background: #e74c3c;
    color: white;
    border-radius: 30px;
    padding: 12px 30px;
    border: none;
}

.btn-back {
    background: #6c757d;
    color: white;
    border-radius: 30px;
    padding: 12px 30px;
    border: none;
}
</style>

<div class=\"task-wrapper\">
    <div class=\"task-card\">

        <div class=\"task-title\">
            📝 Gestion de la tâche
        </div>

        <div class=\"mb-3\">
            ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "titre", [], "any", false, false, false, 104), 'label');
        yield "
            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "titre", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre de la tâche"]]);
        yield "
        </div>

        <div class=\"mb-3\">
            ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "description", [], "any", false, false, false, 109), 'label');
        yield "
            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "description", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description de la tâche"]]);
        yield "
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "date_limite", [], "any", false, false, false, 115), 'label');
        yield "
                ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "date_limite", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            </div>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "priorite", [], "any", false, false, false, 119), 'label');
        yield "
                ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "priorite", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            </div>
        </div>

        <div class=\"mb-4\">
            ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "statut", [], "any", false, false, false, 125), 'label');
        yield "
            ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "statut", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>

        <!-- BOUTONS -->
        <div class=\"d-flex justify-content-end gap-3\">
            <button type=\"button\" class=\"btn-back\" onclick=\"history.back()\">
                ⬅ Retour
            </button>

            

            <button class=\"btn-save\">
                💾 Enregistrer
            </button>
        </div>

    </div>
</div>

";
        // line 145
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'form_end');
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
        return "tache/_form.html.twig";
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
        return array (  225 => 145,  203 => 126,  199 => 125,  191 => 120,  187 => 119,  181 => 116,  177 => 115,  169 => 110,  165 => 109,  158 => 105,  154 => 104,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}

<style>
/* ==== PAGE ==== */
body {
    background-color: #f5f7fb;
}

/* ==== CONTAINER ==== */
.task-wrapper {
    max-width: 850px;
    margin: 120px auto 40px auto; /* décalage navbar */
}

/* ==== CARD ==== */
.task-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 35px 40px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

/* ==== TITRE ==== */
.task-title {
    text-align: center;
    font-size: 26px;
    font-weight: 600;
    color: #4f6df5;
    margin-bottom: 30px;
}

/* ==== INPUTS ==== */
.form-control {
    height: 52px;
    border-radius: 12px;
    border: 1px solid #ddd;
    padding: 10px 16px;
    font-size: 15px;
    transition: all 0.25s ease;
    background-color: #fafafa;
}

textarea.form-control {
    height: auto;
}

/* ==== FOCUS (curseur visible) ==== */
.form-control:focus {
    outline: none !important;
    border: 2px solid #4f6df5;
    background-color: #fff;
    box-shadow: 0 0 0 4px rgba(79,109,245,0.15);
}

/* ==== LABEL ==== */
label {
    font-weight: 500;
    margin-bottom: 6px;
    color: #444;
}

/* ==== BOUTONS ==== */
.btn-save {
    background: linear-gradient(135deg, #4f6df5, #6a82fb);
    color: white;
    border: none;
    border-radius: 30px;
    padding: 12px 40px;
    font-size: 16px;
    font-weight: 500;
    transition: all 0.2s ease;
}

.btn-save:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(79,109,245,0.35);
}

.btn-cancel {
    background: #e74c3c;
    color: white;
    border-radius: 30px;
    padding: 12px 30px;
    border: none;
}

.btn-back {
    background: #6c757d;
    color: white;
    border-radius: 30px;
    padding: 12px 30px;
    border: none;
}
</style>

<div class=\"task-wrapper\">
    <div class=\"task-card\">

        <div class=\"task-title\">
            📝 Gestion de la tâche
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.titre) }}
            {{ form_widget(form.titre, {'attr': {'class': 'form-control', 'placeholder':'Titre de la tâche'}}) }}
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.description) }}
            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder':'Description de la tâche'}}) }}
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.date_limite) }}
                {{ form_widget(form.date_limite, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"col-md-6 mb-3\">
                {{ form_label(form.priorite) }}
                {{ form_widget(form.priorite, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>

        <div class=\"mb-4\">
            {{ form_label(form.statut) }}
            {{ form_widget(form.statut, {'attr': {'class': 'form-control'}}) }}
        </div>

        <!-- BOUTONS -->
        <div class=\"d-flex justify-content-end gap-3\">
            <button type=\"button\" class=\"btn-back\" onclick=\"history.back()\">
                ⬅ Retour
            </button>

            

            <button class=\"btn-save\">
                💾 Enregistrer
            </button>
        </div>

    </div>
</div>

{{ form_end(form) }}
", "tache/_form.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\tache\\_form.html.twig");
    }
}
