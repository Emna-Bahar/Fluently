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

/* langue/edit.html.twig */
class __TwigTemplate_bde8a4a726c385d2a7bf0c7fd8bc9e1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langue/edit.html.twig"));

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

        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", ["_route"], "method", false, false, false, 3) == "app_admin_langue_new")) ? ("Nouvelle Langue") : ("Modifier Langue"));
        
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
        yield "<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 80px 20px; color: #111827;\">
<br><br><br><br>
    <div style=\"max-width: 700px; margin: 0 auto; background: white; border-radius: 20px; padding: 50px 40px; box-shadow: 0 20px 60px rgba(0,0,0,0.25);\">

        <h1 style=\"text-align: center; font-size: 2.4rem; font-weight: 900; margin: 0 0 45px; color: #111827;\">
            ";
        // line 11
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "attributes", [], "any", false, false, false, 11), "get", ["_route"], "method", false, false, false, 11) == "app_admin_langue_new")) ? ("Créer une nouvelle langue") : ("Modifier la langue"));
        yield "
        </h1>

        ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        yield "

        <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 30px 40px;\">
            <!-- Nom -->
            <div>
                <label style=\"display: block; font-weight: 800; color: #111827; margin-bottom: 10px; font-size: 1.25rem;\">Nom de la langue *</label>
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'widget', ["attr" => ["style" => "width:100%; padding:16px 20px; border:2px solid #cbd5e1; border-radius:12px; font-size:1.15rem;"]]);
        yield "
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'errors', ["attr" => ["style" => "color:#dc2626; font-size:0.95rem; margin-top:6px;"]]);
        yield "
            </div>

            <!-- Popularité -->
            <div>
                <label style=\"display: block; font-weight: 800; color: #111827; margin-bottom: 10px; font-size: 1.25rem;\">Popularité</label>
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "popularite", [], "any", false, false, false, 27), 'widget', ["attr" => ["style" => "width:100%; padding:16px 20px; border:2px solid #cbd5e1; border-radius:12px; font-size:1.15rem;"]]);
        yield "
            </div>

            <!-- Description -->
            <div style=\"grid-column: 1 / -1;\">
                <label style=\"display: block; font-weight: 800; color: #111827; margin-bottom: 10px; font-size: 1.25rem;\">Description détaillée</label>
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), 'widget', ["attr" => ["style" => "width:100%; padding:16px 20px; border:2px solid #cbd5e1; border-radius:12px; font-size:1.15rem; min-height:160px; resize:vertical;"]]);
        yield "
            </div>

            <!-- Active (Oui/Non) -->
            <div>
                <label style=\"display: block; font-weight: 800; color: #111827; margin-bottom: 10px; font-size: 1.25rem;\">Active</label>
                <select name=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "isActive", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "full_name", [], "any", false, false, false, 39), "html", null, true);
        yield "\" style=\"width:100%; padding:16px 20px; border:2px solid #cbd5e1; border-radius:12px; font-size:1.15rem; background:white;\">
                    <option value=\"1\" ";
        // line 40
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 40, $this->source); })()), "isActive", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "selected";
        }
        yield ">Oui (visible aux étudiants)</option>
                    <option value=\"0\" ";
        // line 41
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 41, $this->source); })()), "isActive", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "selected";
        }
        yield ">Non</option>
                </select>
            </div>

            <!-- Drapeau -->
            <div>
                <label style=\"display: block; font-weight: 800; color: #111827; margin-bottom: 10px; font-size: 1.25rem;\">Drapeau (image)</label>
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "drapeauFile", [], "any", false, false, false, 48), 'widget', ["attr" => ["style" => "width:100%; padding:16px 20px; border:2px dashed #9ca3af; border-radius:12px; background:#f9fafb; cursor:pointer; font-size:1.1rem;"]]);
        yield "
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "drapeauFile", [], "any", false, false, false, 49), 'errors', ["attr" => ["style" => "color:#dc2626; font-size:0.95rem; margin-top:6px;"]]);
        yield "

                ";
        // line 51
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 51, $this->source); })()), "drapeau", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "                    <div style=\"margin-top: 16px; text-align: center;\">
                        <img src=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/langues/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new RuntimeError('Variable "langue" does not exist.', 53, $this->source); })()), "drapeau", [], "any", false, false, false, 53))), "html", null, true);
            yield "\" alt=\"Drapeau actuel\" style=\"max-height: 140px; border-radius: 12px; box-shadow: 0 6px 18px rgba(0,0,0,0.15);\">
                    </div>
                ";
        }
        // line 56
        yield "            </div>
        </div>

        <!-- Bouton soumission -->
        <div style=\"text-align: center; margin: 60px 0 30px;\">
            <button type=\"submit\" style=\"background: linear-gradient(135deg, #10b981, #059669); color: white; border: none; padding: 18px 70px; font-size: 1.4rem; font-weight: 800; border-radius: 16px; cursor: pointer; box-shadow: 0 10px 30px rgba(16,185,129,0.4); transition: all 0.3s;\" onmouseover=\"this.style.transform='scale(1.06) translateY(-3px)';\" onmouseout=\"this.style.transform='scale(1)';\">
                ";
        // line 62
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "attributes", [], "any", false, false, false, 62), "get", ["_route"], "method", false, false, false, 62) == "app_admin_langue_new")) ? ("Créer la langue") : ("Mettre à jour"));
        yield "
            </button>
        </div>

        ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        yield "

        <div style=\"text-align: center;\">
            <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\" style=\"color: #2563eb; font-weight: 700; font-size: 1.3rem; text-decoration: none;\">← Retour à la liste</a>
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
        return "langue/edit.html.twig";
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
        return array (  216 => 69,  210 => 66,  203 => 62,  195 => 56,  189 => 53,  186 => 52,  184 => 51,  179 => 49,  175 => 48,  163 => 41,  157 => 40,  153 => 39,  144 => 33,  135 => 27,  126 => 21,  122 => 20,  113 => 14,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Nouvelle Langue' : 'Modifier Langue' }}{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 80px 20px; color: #111827;\">
<br><br><br><br>
    <div style=\"max-width: 700px; margin: 0 auto; background: white; border-radius: 20px; padding: 50px 40px; box-shadow: 0 20px 60px rgba(0,0,0,0.25);\">

        <h1 style=\"text-align: center; font-size: 2.4rem; font-weight: 900; margin: 0 0 45px; color: #111827;\">
            {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Créer une nouvelle langue' : 'Modifier la langue' }}
        </h1>

        {{ form_start(form) }}

        <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 30px 40px;\">
            <!-- Nom -->
            <div>
                <label style=\"display: block; font-weight: 800; color: #111827; margin-bottom: 10px; font-size: 1.25rem;\">Nom de la langue *</label>
                {{ form_widget(form.nom, {'attr': {'style': 'width:100%; padding:16px 20px; border:2px solid #cbd5e1; border-radius:12px; font-size:1.15rem;'}}) }}
                {{ form_errors(form.nom, {'attr': {'style': 'color:#dc2626; font-size:0.95rem; margin-top:6px;'}}) }}
            </div>

            <!-- Popularité -->
            <div>
                <label style=\"display: block; font-weight: 800; color: #111827; margin-bottom: 10px; font-size: 1.25rem;\">Popularité</label>
                {{ form_widget(form.popularite, {'attr': {'style': 'width:100%; padding:16px 20px; border:2px solid #cbd5e1; border-radius:12px; font-size:1.15rem;'}}) }}
            </div>

            <!-- Description -->
            <div style=\"grid-column: 1 / -1;\">
                <label style=\"display: block; font-weight: 800; color: #111827; margin-bottom: 10px; font-size: 1.25rem;\">Description détaillée</label>
                {{ form_widget(form.description, {'attr': {'style': 'width:100%; padding:16px 20px; border:2px solid #cbd5e1; border-radius:12px; font-size:1.15rem; min-height:160px; resize:vertical;'}}) }}
            </div>

            <!-- Active (Oui/Non) -->
            <div>
                <label style=\"display: block; font-weight: 800; color: #111827; margin-bottom: 10px; font-size: 1.25rem;\">Active</label>
                <select name=\"{{ form.isActive.vars.full_name }}\" style=\"width:100%; padding:16px 20px; border:2px solid #cbd5e1; border-radius:12px; font-size:1.15rem; background:white;\">
                    <option value=\"1\" {% if langue.isActive %}selected{% endif %}>Oui (visible aux étudiants)</option>
                    <option value=\"0\" {% if not langue.isActive %}selected{% endif %}>Non</option>
                </select>
            </div>

            <!-- Drapeau -->
            <div>
                <label style=\"display: block; font-weight: 800; color: #111827; margin-bottom: 10px; font-size: 1.25rem;\">Drapeau (image)</label>
                {{ form_widget(form.drapeauFile, {'attr': {'style': 'width:100%; padding:16px 20px; border:2px dashed #9ca3af; border-radius:12px; background:#f9fafb; cursor:pointer; font-size:1.1rem;'}}) }}
                {{ form_errors(form.drapeauFile, {'attr': {'style': 'color:#dc2626; font-size:0.95rem; margin-top:6px;'}}) }}

                {% if langue.drapeau %}
                    <div style=\"margin-top: 16px; text-align: center;\">
                        <img src=\"{{ asset('images/langues/' ~ langue.drapeau) }}\" alt=\"Drapeau actuel\" style=\"max-height: 140px; border-radius: 12px; box-shadow: 0 6px 18px rgba(0,0,0,0.15);\">
                    </div>
                {% endif %}
            </div>
        </div>

        <!-- Bouton soumission -->
        <div style=\"text-align: center; margin: 60px 0 30px;\">
            <button type=\"submit\" style=\"background: linear-gradient(135deg, #10b981, #059669); color: white; border: none; padding: 18px 70px; font-size: 1.4rem; font-weight: 800; border-radius: 16px; cursor: pointer; box-shadow: 0 10px 30px rgba(16,185,129,0.4); transition: all 0.3s;\" onmouseover=\"this.style.transform='scale(1.06) translateY(-3px)';\" onmouseout=\"this.style.transform='scale(1)';\">
                {{ app.request.attributes.get('_route') == 'app_admin_langue_new' ? 'Créer la langue' : 'Mettre à jour' }}
            </button>
        </div>

        {{ form_end(form) }}

        <div style=\"text-align: center;\">
            <a href=\"{{ path('app_admin_langue_index') }}\" style=\"color: #2563eb; font-weight: 700; font-size: 1.3rem; text-decoration: none;\">← Retour à la liste</a>
        </div>

    </div>
</div>
{% endblock %}", "langue/edit.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\langue\\edit.html.twig");
    }
}
