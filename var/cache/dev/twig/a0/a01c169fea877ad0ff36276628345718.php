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

/* tache/new.html.twig */
class __TwigTemplate_c63a7206033098f0defd6c91e3878b65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache/new.html.twig"));

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

        yield "Nouvelle Tâche";
        
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
    font-size: 26px;
    font-weight: 600;
    color: #4f6df5;
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
    border: 2px solid #4f6df5;
    background-color: #fff;
    box-shadow: 0 0 0 4px rgba(79,109,245,0.12);
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
.error-msg i { font-size: 14px; }
label {
    font-weight: 500;
    margin-bottom: 6px;
    color: #444;
    display: block;
}
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
.grammar-checking { color: #4f6df5; font-size: .83rem; }
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
            📝 ";
        // line 120
        if ((array_key_exists("objectif", $context) && (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 120, $this->source); })()))) {
            // line 121
            yield "                Nouvelle tâche — <span style=\"font-size:18px;color:#6a82fb\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 121, $this->source); })()), "titre", [], "any", false, false, false, 121), "html", null, true);
            yield "</span>
            ";
        } else {
            // line 123
            yield "                Nouvelle tâche
            ";
        }
        // line 125
        yield "        </div>

        ";
        // line 127
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        ";
        // line 130
        yield "        <div class=\"mb-4\">
            ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "titre", [], "any", false, false, false, 131), 'label');
        yield "
            ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "titre", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 134
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "titre", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "errors", [], "any", false, false, false, 134)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "Ex : Pratiquer la conjugaison", "id" => "tache_titre", "autocomplete" => "off"]]);
        // line 139
        yield "
            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "titre", [], "any", false, false, false, 140), "vars", [], "any", false, false, false, 140), "errors", [], "any", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 141
            yield "                <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 141), "html", null, true);
            yield "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        yield "            <div class=\"grammar-box\" id=\"grammar-titre\"></div>
        </div>

        ";
        // line 147
        yield "        <div class=\"mb-4\">
            ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "description", [], "any", false, false, false, 148), 'label');
        yield "
            ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "description", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 151
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "description", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "errors", [], "any", false, false, false, 151)) > 0)) ? (" is-invalid") : (""))), "rows" => 4, "placeholder" => "Décrivez la tâche en détail…", "id" => "tache_description"]]);
        // line 156
        yield "
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "description", [], "any", false, false, false, 157), "vars", [], "any", false, false, false, 157), "errors", [], "any", false, false, false, 157));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 158
            yield "                <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 158), "html", null, true);
            yield "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        yield "            <div class=\"grammar-box\" id=\"grammar-description\"></div>
        </div>

        ";
        // line 164
        yield "        <div class=\"row\">
            <div class=\"col-md-6 mb-4\">
                ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "date_limite", [], "any", false, false, false, 166), 'label');
        yield "
                ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "date_limite", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 168
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "date_limite", [], "any", false, false, false, 168), "vars", [], "any", false, false, false, 168), "errors", [], "any", false, false, false, 168)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 169
        yield "
                ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "date_limite", [], "any", false, false, false, 170), "vars", [], "any", false, false, false, 170), "errors", [], "any", false, false, false, 170));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 171
            yield "                    <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 171), "html", null, true);
            yield "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "            </div>
            <div class=\"col-md-6 mb-4\">
                ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "priorite", [], "any", false, false, false, 175), 'label');
        yield "
                ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "priorite", [], "any", false, false, false, 176), 'widget', ["attr" => ["class" => ("form-select" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 177
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "priorite", [], "any", false, false, false, 177), "vars", [], "any", false, false, false, 177), "errors", [], "any", false, false, false, 177)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 178
        yield "
                ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "priorite", [], "any", false, false, false, 179), "vars", [], "any", false, false, false, 179), "errors", [], "any", false, false, false, 179));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 180
            yield "                    <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 180), "html", null, true);
            yield "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        yield "            </div>
        </div>

        ";
        // line 186
        yield "        <div class=\"mb-4\">
            ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "statut", [], "any", false, false, false, 187), 'label');
        yield "
            ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "statut", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => ("form-select" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 189
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "statut", [], "any", false, false, false, 189), "vars", [], "any", false, false, false, 189), "errors", [], "any", false, false, false, 189)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 190
        yield "
            ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "statut", [], "any", false, false, false, 191), "vars", [], "any", false, false, false, 191), "errors", [], "any", false, false, false, 191));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 192
            yield "                <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 192), "html", null, true);
            yield "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        yield "        </div>

        ";
        // line 197
        yield "        <div class=\"mb-4\">
            ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "Id_objectif", [], "any", false, false, false, 198), 'label');
        yield "
            ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "Id_objectif", [], "any", false, false, false, 199), 'widget', ["attr" => ["class" => ("form-select" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 200
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "Id_objectif", [], "any", false, false, false, 200), "vars", [], "any", false, false, false, 200), "errors", [], "any", false, false, false, 200)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 201
        yield "
            ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "Id_objectif", [], "any", false, false, false, 202), "vars", [], "any", false, false, false, 202), "errors", [], "any", false, false, false, 202));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 203
            yield "                <p class=\"error-msg\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 203), "html", null, true);
            yield "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "        </div>

        ";
        // line 208
        yield "        <div class=\"d-flex justify-content-between align-items-center mt-2\">
            <button type=\"button\" class=\"btn-back\" onclick=\"history.back()\">⬅ Retour</button>
            <button type=\"submit\" class=\"btn-save\">💾 Enregistrer</button>
        </div>

        ";
        // line 213
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), 'form_end');
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

    // ✅ API officielle LanguageTool (publique, gratuite)
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

            var icon  = match.rule.issueType === 'misspelling' ? '❌' : '⚠️';
            var btns  = '';
            match.replacements.slice(0, 4).forEach(function(r) {
                btns += '<button class=\"fix-btn\" onclick=\"appliquer(\\'' + fieldId + '\\','
                    + match.offset + ',' + match.length + ',\\'' + r.value.replace(/'/g,\"\\\\'\") + '\\',\\'' + boxId + '\\')\">'
                    + r.value + '</button>';
            });

            div.innerHTML = '<strong>' + icon + ' ' + match.message + '</strong>'
                + (btns ? '<br><small>💡 Corriger par : </small>' + btns : '');
            box.appendChild(div);
        });
    })
    .catch(function(err) {
        console.error(err);
        box.innerHTML = '<span style=\"color:#aaa;font-size:.82rem;\"><i class=\"fa fa-wifi\"></i> Vérification indisponible (réseau)</span>';
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
        return "tache/new.html.twig";
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
        return array (  425 => 213,  418 => 208,  414 => 205,  405 => 203,  401 => 202,  398 => 201,  396 => 200,  395 => 199,  391 => 198,  388 => 197,  384 => 194,  375 => 192,  371 => 191,  368 => 190,  366 => 189,  365 => 188,  361 => 187,  358 => 186,  353 => 182,  344 => 180,  340 => 179,  337 => 178,  335 => 177,  334 => 176,  330 => 175,  326 => 173,  317 => 171,  313 => 170,  310 => 169,  308 => 168,  307 => 167,  303 => 166,  299 => 164,  294 => 160,  285 => 158,  281 => 157,  278 => 156,  276 => 151,  275 => 149,  271 => 148,  268 => 147,  263 => 143,  254 => 141,  250 => 140,  247 => 139,  245 => 134,  244 => 132,  240 => 131,  237 => 130,  232 => 127,  228 => 125,  224 => 123,  218 => 121,  216 => 120,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Tâche{% endblock %}

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
    font-size: 26px;
    font-weight: 600;
    color: #4f6df5;
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
    border: 2px solid #4f6df5;
    background-color: #fff;
    box-shadow: 0 0 0 4px rgba(79,109,245,0.12);
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
.error-msg i { font-size: 14px; }
label {
    font-weight: 500;
    margin-bottom: 6px;
    color: #444;
    display: block;
}
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
.grammar-checking { color: #4f6df5; font-size: .83rem; }
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
            📝 {% if objectif is defined and objectif %}
                Nouvelle tâche — <span style=\"font-size:18px;color:#6a82fb\">{{ objectif.titre }}</span>
            {% else %}
                Nouvelle tâche
            {% endif %}
        </div>

        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        {# ── Titre ── #}
        <div class=\"mb-4\">
            {{ form_label(form.titre) }}
            {{ form_widget(form.titre, {
                'attr': {
                    'class': 'form-control' ~ (form.titre.vars.errors|length > 0 ? ' is-invalid' : ''),
                    'placeholder': 'Ex : Pratiquer la conjugaison',
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
                    'placeholder': 'Décrivez la tâche en détail…',
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
            <button type=\"submit\" class=\"btn-save\">💾 Enregistrer</button>
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

    // ✅ API officielle LanguageTool (publique, gratuite)
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

            var icon  = match.rule.issueType === 'misspelling' ? '❌' : '⚠️';
            var btns  = '';
            match.replacements.slice(0, 4).forEach(function(r) {
                btns += '<button class=\"fix-btn\" onclick=\"appliquer(\\'' + fieldId + '\\','
                    + match.offset + ',' + match.length + ',\\'' + r.value.replace(/'/g,\"\\\\'\") + '\\',\\'' + boxId + '\\')\">'
                    + r.value + '</button>';
            });

            div.innerHTML = '<strong>' + icon + ' ' + match.message + '</strong>'
                + (btns ? '<br><small>💡 Corriger par : </small>' + btns : '');
            box.appendChild(div);
        });
    })
    .catch(function(err) {
        console.error(err);
        box.innerHTML = '<span style=\"color:#aaa;font-size:.82rem;\"><i class=\"fa fa-wifi\"></i> Vérification indisponible (réseau)</span>';
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
", "tache/new.html.twig", "C:\\Users\\MSI\\Desktop\\Fuser\\Fluently\\Fluently\\Fluently\\Fluently\\templates\\tache\\new.html.twig");
    }
}
