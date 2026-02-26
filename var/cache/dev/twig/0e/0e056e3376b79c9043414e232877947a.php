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

/* tache/edit.html.twig */
class __TwigTemplate_89ec7ff2dbdbc1c7287abfd13646ef51 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/edit.html.twig"));

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

        yield "Modifier la tâche — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "
<style>
.task-wrapper {
    max-width: 850px;
    margin: 120px auto 60px auto;
}
.task-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 40px 45px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}
.task-title {
    text-align: center;
    font-size: 24px;
    font-weight: 600;
    color: #e67e22;
    margin-bottom: 32px;
}
.form-control, .form-select {
    height: 52px;
    border-radius: 12px;
    border: 1px solid #dde3f0;
    padding: 10px 16px;
    font-size: 15px;
    background-color: #fafbff;
    transition: border 0.2s, box-shadow 0.2s;
}
textarea.form-control { height: auto; }
.form-control:focus, .form-select:focus {
    border: 2px solid #e67e22;
    background-color: #fff;
    box-shadow: 0 0 0 4px rgba(230,126,34,0.12);
    outline: none;
}
.form-control.is-invalid, .form-select.is-invalid {
    border-color: #e74c3c;
    background-color: #fff8f8;
}
.error-msg {
    display: flex;
    align-items: center;
    gap: 5px;
    color: #e74c3c;
    font-size: 13px;
    margin-top: 5px;
}
label {
    font-weight: 500;
    margin-bottom: 6px;
    color: #444;
    display: block;
}
.btn-save {
    background: linear-gradient(135deg, #e67e22, #f39c12);
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
    box-shadow: 0 10px 25px rgba(230,126,34,0.35);
    color: white;
}
.btn-back {
    background: #6c757d;
    color: white;
    border-radius: 30px;
    padding: 12px 30px;
    border: none;
    transition: all 0.2s;
}
.btn-back:hover { background: #5a6268; color: white; }

/* ── LanguageTool styles ── */
.grammar-box { margin-top: 8px; }
.grammar-checking { color: #e67e22; font-size: .83rem; }
.grammar-ok { color: #2ecc71; font-size: .83rem; }
.grammar-item {
    border-radius: 8px;
    padding: 8px 12px;
    margin-bottom: 6px;
    font-size: .85rem;
}
.grammar-item.spelling {
    background: #fdecea;
    border-left: 4px solid #e74c3c;
}
.grammar-item.grammar {
    background: #fff8e1;
    border-left: 4px solid #f39c12;
}
.fix-btn {
    background: #2ecc71;
    color: #fff;
    border: none;
    border-radius: 10px;
    padding: 2px 10px;
    font-size: .8rem;
    cursor: pointer;
    margin: 2px 2px 0 0;
}
.fix-btn:hover { background: #27ae60; }
</style>

<div class=\"task-wrapper\">
    <div class=\"task-card\">

        <div class=\"task-title\">
            ✏️ Modifier — ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 119, $this->source); })()), "titre", [], "any", false, false, false, 119), "html", null, true);
        yield "
        </div>

        ";
        // line 122
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        ";
        // line 125
        yield "        <div class=\"mb-4\">
            ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "titre", [], "any", false, false, false, 126), 'label');
        yield "
            ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "titre", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 129
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "titre", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "errors", [], "any", false, false, false, 129)) > 0)) ? (" is-invalid") : (""))), "id" => "tache_titre", "autocomplete" => "off"]]);
        // line 133
        yield "
            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "titre", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "errors", [], "any", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 135
            yield "                <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 135), "html", null, true);
            yield "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "            <div class=\"grammar-box\" id=\"grammar-titre\"></div>
        </div>

        ";
        // line 141
        yield "        <div class=\"mb-4\">
            ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "description", [], "any", false, false, false, 142), 'label');
        yield "
            ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "description", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 145
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "description", [], "any", false, false, false, 145), "vars", [], "any", false, false, false, 145), "errors", [], "any", false, false, false, 145)) > 0)) ? (" is-invalid") : (""))), "rows" => 4, "id" => "tache_description"]]);
        // line 149
        yield "
            ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "description", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "errors", [], "any", false, false, false, 150));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 151
            yield "                <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 151), "html", null, true);
            yield "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "            <div class=\"grammar-box\" id=\"grammar-description\"></div>
        </div>

        ";
        // line 157
        yield "        <div class=\"row\">
            <div class=\"col-md-6 mb-4\">
                ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "date_limite", [], "any", false, false, false, 159), 'label');
        yield "
                ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "date_limite", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 161
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "date_limite", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "errors", [], "any", false, false, false, 161)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 162
        yield "
                ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "date_limite", [], "any", false, false, false, 163), "vars", [], "any", false, false, false, 163), "errors", [], "any", false, false, false, 163));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 164
            yield "                    <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 164), "html", null, true);
            yield "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "            </div>
            <div class=\"col-md-6 mb-4\">
                ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "priorite", [], "any", false, false, false, 168), 'label');
        yield "
                ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "priorite", [], "any", false, false, false, 169), 'widget', ["attr" => ["class" => ("form-select" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 170
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "priorite", [], "any", false, false, false, 170), "vars", [], "any", false, false, false, 170), "errors", [], "any", false, false, false, 170)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 171
        yield "
                ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "priorite", [], "any", false, false, false, 172), "vars", [], "any", false, false, false, 172), "errors", [], "any", false, false, false, 172));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 173
            yield "                    <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 173), "html", null, true);
            yield "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        yield "            </div>
        </div>

        ";
        // line 179
        yield "        <div class=\"mb-4\">
            ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "statut", [], "any", false, false, false, 180), 'label');
        yield "
            ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "statut", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => ("form-select" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 182
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "statut", [], "any", false, false, false, 182), "vars", [], "any", false, false, false, 182), "errors", [], "any", false, false, false, 182)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 183
        yield "
            ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "statut", [], "any", false, false, false, 184), "vars", [], "any", false, false, false, 184), "errors", [], "any", false, false, false, 184));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 185
            yield "                <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 185), "html", null, true);
            yield "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        yield "        </div>

        ";
        // line 190
        yield "        <div class=\"mb-4\">
            ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "Id_objectif", [], "any", false, false, false, 191), 'label');
        yield "
            ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "Id_objectif", [], "any", false, false, false, 192), 'widget', ["attr" => ["class" => ("form-select" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 193
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "Id_objectif", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "errors", [], "any", false, false, false, 193)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 194
        yield "
            ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "Id_objectif", [], "any", false, false, false, 195), "vars", [], "any", false, false, false, 195), "errors", [], "any", false, false, false, 195));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 196
            yield "                <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 196), "html", null, true);
            yield "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "        </div>

        ";
        // line 201
        yield "        <div class=\"d-flex justify-content-between align-items-center mt-2\">
            <button type=\"button\" class=\"btn-back\" onclick=\"history.back()\">⬅ Retour</button>
            <button type=\"submit\" class=\"btn-save\">💾 Mettre à jour</button>
        </div>

        ";
        // line 206
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<script>
var timers = {};

function checkGrammar(text, boxId, fieldId) {
    var box = document.getElementById(boxId);
    if (!text || text.trim().length < 4) {
        box.innerHTML = '';
        return;
    }

    box.innerHTML = '<span class=\"grammar-checking\"><i class=\"fa fa-spinner fa-spin\"></i> Vérification en cours...</span>';

    var params = new URLSearchParams();
    params.append('text', text);
    params.append('language', 'fr');

    fetch('https://api.languagetool.org/v2/check', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: params.toString()
    })
    .then(function(r) { return r.json(); })
    .then(function(data) {
        box.innerHTML = '';

        if (!data.matches || data.matches.length === 0) {
            box.innerHTML = '<span class=\"grammar-ok\"><i class=\"fa fa-check-circle\"></i> Aucune erreur détectée ✅</span>';
            return;
        }

        data.matches.forEach(function(match) {
            var div = document.createElement('div');
            div.className = 'grammar-item ' + (match.rule.issueType === 'misspelling' ? 'spelling' : 'grammar');

            var icon = match.rule.issueType === 'misspelling' ? '❌' : '⚠️';
            var btns = '';
            match.replacements.slice(0, 4).forEach(function(r) {
                btns += '<button class=\"fix-btn\" onclick=\"appliquer(\\'' + fieldId + '\\','
                    + match.offset + ',' + match.length + ',\\'' + r.value.replace(/'/g, \"\\\\'\") + '\\',\\'' + boxId + '\\')\">'
                    + r.value + '</button>';
            });

            div.innerHTML = '<strong>' + icon + ' ' + match.message + '</strong>'
                + (btns ? '<br><small>💡 Corriger par : </small>' + btns : '');
            box.appendChild(div);
        });
    })
    .catch(function() {
        box.innerHTML = '<span style=\"color:#aaa;font-size:.82rem;\"><i class=\"fa fa-wifi\"></i> Vérification indisponible</span>';
    });
}

function appliquer(fieldId, offset, length, suggestion, boxId) {
    var field = document.getElementById(fieldId);
    field.value = field.value.substring(0, offset) + suggestion + field.value.substring(offset + length);
    checkGrammar(field.value, boxId, fieldId);
}

document.addEventListener('DOMContentLoaded', function() {
    var titre = document.getElementById('tache_titre');
    var desc  = document.getElementById('tache_description');

    if (titre) {
        titre.addEventListener('input', function() {
            clearTimeout(timers.titre);
            timers.titre = setTimeout(function() {
                checkGrammar(titre.value, 'grammar-titre', 'tache_titre');
            }, 900);
        });
    }

    if (desc) {
        desc.addEventListener('input', function() {
            clearTimeout(timers.desc);
            timers.desc = setTimeout(function() {
                checkGrammar(desc.value, 'grammar-description', 'tache_description');
            }, 900);
        });
    }
});
</script>

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
        return "tache/edit.html.twig";
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
        return array (  415 => 206,  408 => 201,  404 => 198,  395 => 196,  391 => 195,  388 => 194,  386 => 193,  385 => 192,  381 => 191,  378 => 190,  374 => 187,  365 => 185,  361 => 184,  358 => 183,  356 => 182,  355 => 181,  351 => 180,  348 => 179,  343 => 175,  334 => 173,  330 => 172,  327 => 171,  325 => 170,  324 => 169,  320 => 168,  316 => 166,  307 => 164,  303 => 163,  300 => 162,  298 => 161,  297 => 160,  293 => 159,  289 => 157,  284 => 153,  275 => 151,  271 => 150,  268 => 149,  266 => 145,  265 => 143,  261 => 142,  258 => 141,  253 => 137,  244 => 135,  240 => 134,  237 => 133,  235 => 129,  234 => 127,  230 => 126,  227 => 125,  222 => 122,  216 => 119,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier la tâche — {{ tache.titre }}{% endblock %}

{% block body %}

<style>
.task-wrapper {
    max-width: 850px;
    margin: 120px auto 60px auto;
}
.task-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 40px 45px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}
.task-title {
    text-align: center;
    font-size: 24px;
    font-weight: 600;
    color: #e67e22;
    margin-bottom: 32px;
}
.form-control, .form-select {
    height: 52px;
    border-radius: 12px;
    border: 1px solid #dde3f0;
    padding: 10px 16px;
    font-size: 15px;
    background-color: #fafbff;
    transition: border 0.2s, box-shadow 0.2s;
}
textarea.form-control { height: auto; }
.form-control:focus, .form-select:focus {
    border: 2px solid #e67e22;
    background-color: #fff;
    box-shadow: 0 0 0 4px rgba(230,126,34,0.12);
    outline: none;
}
.form-control.is-invalid, .form-select.is-invalid {
    border-color: #e74c3c;
    background-color: #fff8f8;
}
.error-msg {
    display: flex;
    align-items: center;
    gap: 5px;
    color: #e74c3c;
    font-size: 13px;
    margin-top: 5px;
}
label {
    font-weight: 500;
    margin-bottom: 6px;
    color: #444;
    display: block;
}
.btn-save {
    background: linear-gradient(135deg, #e67e22, #f39c12);
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
    box-shadow: 0 10px 25px rgba(230,126,34,0.35);
    color: white;
}
.btn-back {
    background: #6c757d;
    color: white;
    border-radius: 30px;
    padding: 12px 30px;
    border: none;
    transition: all 0.2s;
}
.btn-back:hover { background: #5a6268; color: white; }

/* ── LanguageTool styles ── */
.grammar-box { margin-top: 8px; }
.grammar-checking { color: #e67e22; font-size: .83rem; }
.grammar-ok { color: #2ecc71; font-size: .83rem; }
.grammar-item {
    border-radius: 8px;
    padding: 8px 12px;
    margin-bottom: 6px;
    font-size: .85rem;
}
.grammar-item.spelling {
    background: #fdecea;
    border-left: 4px solid #e74c3c;
}
.grammar-item.grammar {
    background: #fff8e1;
    border-left: 4px solid #f39c12;
}
.fix-btn {
    background: #2ecc71;
    color: #fff;
    border: none;
    border-radius: 10px;
    padding: 2px 10px;
    font-size: .8rem;
    cursor: pointer;
    margin: 2px 2px 0 0;
}
.fix-btn:hover { background: #27ae60; }
</style>

<div class=\"task-wrapper\">
    <div class=\"task-card\">

        <div class=\"task-title\">
            ✏️ Modifier — {{ tache.titre }}
        </div>

        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        {# ── Titre ── #}
        <div class=\"mb-4\">
            {{ form_label(form.titre) }}
            {{ form_widget(form.titre, {
                'attr': {
                    'class': 'form-control' ~ (form.titre.vars.errors|length > 0 ? ' is-invalid' : ''),
                    'id': 'tache_titre',
                    'autocomplete': 'off'
                }
            }) }}
            {% for error in form.titre.vars.errors %}
                <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> {{ error.message }}</p>
            {% endfor %}
            <div class=\"grammar-box\" id=\"grammar-titre\"></div>
        </div>

        {# ── Description ── #}
        <div class=\"mb-4\">
            {{ form_label(form.description) }}
            {{ form_widget(form.description, {
                'attr': {
                    'class': 'form-control' ~ (form.description.vars.errors|length > 0 ? ' is-invalid' : ''),
                    'rows': 4,
                    'id': 'tache_description'
                }
            }) }}
            {% for error in form.description.vars.errors %}
                <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> {{ error.message }}</p>
            {% endfor %}
            <div class=\"grammar-box\" id=\"grammar-description\"></div>
        </div>

        {# ── Date limite + Priorité ── #}
        <div class=\"row\">
            <div class=\"col-md-6 mb-4\">
                {{ form_label(form.date_limite) }}
                {{ form_widget(form.date_limite, {
                    'attr': {'class': 'form-control' ~ (form.date_limite.vars.errors|length > 0 ? ' is-invalid' : '')}
                }) }}
                {% for error in form.date_limite.vars.errors %}
                    <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> {{ error.message }}</p>
                {% endfor %}
            </div>
            <div class=\"col-md-6 mb-4\">
                {{ form_label(form.priorite) }}
                {{ form_widget(form.priorite, {
                    'attr': {'class': 'form-select' ~ (form.priorite.vars.errors|length > 0 ? ' is-invalid' : '')}
                }) }}
                {% for error in form.priorite.vars.errors %}
                    <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> {{ error.message }}</p>
                {% endfor %}
            </div>
        </div>

        {# ── Statut ── #}
        <div class=\"mb-4\">
            {{ form_label(form.statut) }}
            {{ form_widget(form.statut, {
                'attr': {'class': 'form-select' ~ (form.statut.vars.errors|length > 0 ? ' is-invalid' : '')}
            }) }}
            {% for error in form.statut.vars.errors %}
                <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> {{ error.message }}</p>
            {% endfor %}
        </div>

        {# ── Objectif associé ── #}
        <div class=\"mb-4\">
            {{ form_label(form.Id_objectif) }}
            {{ form_widget(form.Id_objectif, {
                'attr': {'class': 'form-select' ~ (form.Id_objectif.vars.errors|length > 0 ? ' is-invalid' : '')}
            }) }}
            {% for error in form.Id_objectif.vars.errors %}
                <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> {{ error.message }}</p>
            {% endfor %}
        </div>

        {# ── Boutons ── #}
        <div class=\"d-flex justify-content-between align-items-center mt-2\">
            <button type=\"button\" class=\"btn-back\" onclick=\"history.back()\">⬅ Retour</button>
            <button type=\"submit\" class=\"btn-save\">💾 Mettre à jour</button>
        </div>

        {{ form_end(form) }}
    </div>
</div>

<script>
var timers = {};

function checkGrammar(text, boxId, fieldId) {
    var box = document.getElementById(boxId);
    if (!text || text.trim().length < 4) {
        box.innerHTML = '';
        return;
    }

    box.innerHTML = '<span class=\"grammar-checking\"><i class=\"fa fa-spinner fa-spin\"></i> Vérification en cours...</span>';

    var params = new URLSearchParams();
    params.append('text', text);
    params.append('language', 'fr');

    fetch('https://api.languagetool.org/v2/check', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: params.toString()
    })
    .then(function(r) { return r.json(); })
    .then(function(data) {
        box.innerHTML = '';

        if (!data.matches || data.matches.length === 0) {
            box.innerHTML = '<span class=\"grammar-ok\"><i class=\"fa fa-check-circle\"></i> Aucune erreur détectée ✅</span>';
            return;
        }

        data.matches.forEach(function(match) {
            var div = document.createElement('div');
            div.className = 'grammar-item ' + (match.rule.issueType === 'misspelling' ? 'spelling' : 'grammar');

            var icon = match.rule.issueType === 'misspelling' ? '❌' : '⚠️';
            var btns = '';
            match.replacements.slice(0, 4).forEach(function(r) {
                btns += '<button class=\"fix-btn\" onclick=\"appliquer(\\'' + fieldId + '\\','
                    + match.offset + ',' + match.length + ',\\'' + r.value.replace(/'/g, \"\\\\'\") + '\\',\\'' + boxId + '\\')\">'
                    + r.value + '</button>';
            });

            div.innerHTML = '<strong>' + icon + ' ' + match.message + '</strong>'
                + (btns ? '<br><small>💡 Corriger par : </small>' + btns : '');
            box.appendChild(div);
        });
    })
    .catch(function() {
        box.innerHTML = '<span style=\"color:#aaa;font-size:.82rem;\"><i class=\"fa fa-wifi\"></i> Vérification indisponible</span>';
    });
}

function appliquer(fieldId, offset, length, suggestion, boxId) {
    var field = document.getElementById(fieldId);
    field.value = field.value.substring(0, offset) + suggestion + field.value.substring(offset + length);
    checkGrammar(field.value, boxId, fieldId);
}

document.addEventListener('DOMContentLoaded', function() {
    var titre = document.getElementById('tache_titre');
    var desc  = document.getElementById('tache_description');

    if (titre) {
        titre.addEventListener('input', function() {
            clearTimeout(timers.titre);
            timers.titre = setTimeout(function() {
                checkGrammar(titre.value, 'grammar-titre', 'tache_titre');
            }, 900);
        });
    }

    if (desc) {
        desc.addEventListener('input', function() {
            clearTimeout(timers.desc);
            timers.desc = setTimeout(function() {
                checkGrammar(desc.value, 'grammar-description', 'tache_description');
            }, 900);
        });
    }
});
</script>

{% endblock %}
", "tache/edit.html.twig", "C:\\Users\\MSI\\Desktop\\Fuser\\Fluently\\Fluently\\Fluently\\Fluently\\templates\\tache\\edit.html.twig");
    }
}
