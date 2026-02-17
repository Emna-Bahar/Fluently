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

/* cours_personnalise/generer.html.twig */
class __TwigTemplate_d8d092bf20a3377935e79555dc66bf89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours_personnalise/generer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours_personnalise/generer.html.twig"));

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

        yield "Générer un cours personnalisé";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h2 class=\"h4 mb-0\">📝 Générer un cours personnalisé</h2>
                    <p class=\"mb-0 small\">Pour la leçon ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 12, $this->source); })()), "numero", [], "any", false, false, false, 12), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 12, $this->source); })()), "idNiveau", [], "any", false, false, false, 12), "titre", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
                </div>
                
                <div class=\"card-body\">
                    ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    
                    <div class=\"mb-4\">
                        <label class=\"fw-bold mb-2\">🎯 Vocabulaire à travailler</label>
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vocabulaire", [], "any", false, false, false, 20), 'widget');
        yield "
                        <small class=\"text-muted\">Laissez vide si vous n'avez pas de thème spécifique</small>
                    </div>
                    
                    <div class=\"mb-4\">
                        <label class=\"fw-bold mb-2\">📚 Points de grammaire</label>
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "grammaire", [], "any", false, false, false, 26), 'widget');
        yield "
                        <small class=\"text-muted\">Ex: Le présent simple, les prépositions...</small>
                    </div>
                    
                    <div class=\"mb-4\">
                        <label class=\"fw-bold mb-2\">🔤 Nouveaux mots</label>
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nouveauxMots", [], "any", false, false, false, 32), 'widget');
        yield "
                        <small class=\"text-muted\">Un mot par ligne</small>
                    </div>
                    
                    <div class=\"mb-4\">
                        <label class=\"fw-bold mb-2\">🎥 Thèmes YouTube</label>
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "themesYoutube", [], "any", false, false, false, 38), 'widget');
        yield "
                        <small class=\"text-muted\">Des vidéos seront ajoutées automatiquement</small>
                    </div>
                    
                    <div class=\"alert alert-info\">
                        <strong>🤖 L'IA va générer</strong> un cours personnalisé avec :
                        <ul class=\"mb-0 mt-2\">
                            <li>Un PDF avec explications et exercices</li>
                            <li>Des vidéos YouTube recommandées</li>
                            <li>Du contenu adapté à votre niveau ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 47, $this->source); })()), "idNiveau", [], "any", false, false, false, 47), "difficulte", [], "any", false, false, false, 47), "html", null, true);
        yield "</li>
                        </ul>
                    </div>
                    
                    <button type=\"submit\" class=\"btn btn-primary btn-lg w-100\">
                        🚀 Générer mon cours
                    </button>
                    
                    <div class=\"text-center mt-3\">
                        <a href=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        yield "\" class=\"text-muted\">
                            ← Retour à la leçon
                        </a>
         a           </div>
                    
                    ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        yield "
                </div>
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
        return "cours_personnalise/generer.html.twig";
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
        return array (  183 => 61,  175 => 56,  163 => 47,  151 => 38,  142 => 32,  133 => 26,  124 => 20,  117 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Générer un cours personnalisé{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h2 class=\"h4 mb-0\">📝 Générer un cours personnalisé</h2>
                    <p class=\"mb-0 small\">Pour la leçon {{ cours.numero }} - {{ cours.idNiveau.titre }}</p>
                </div>
                
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                    
                    <div class=\"mb-4\">
                        <label class=\"fw-bold mb-2\">🎯 Vocabulaire à travailler</label>
                        {{ form_widget(form.vocabulaire) }}
                        <small class=\"text-muted\">Laissez vide si vous n'avez pas de thème spécifique</small>
                    </div>
                    
                    <div class=\"mb-4\">
                        <label class=\"fw-bold mb-2\">📚 Points de grammaire</label>
                        {{ form_widget(form.grammaire) }}
                        <small class=\"text-muted\">Ex: Le présent simple, les prépositions...</small>
                    </div>
                    
                    <div class=\"mb-4\">
                        <label class=\"fw-bold mb-2\">🔤 Nouveaux mots</label>
                        {{ form_widget(form.nouveauxMots) }}
                        <small class=\"text-muted\">Un mot par ligne</small>
                    </div>
                    
                    <div class=\"mb-4\">
                        <label class=\"fw-bold mb-2\">🎥 Thèmes YouTube</label>
                        {{ form_widget(form.themesYoutube) }}
                        <small class=\"text-muted\">Des vidéos seront ajoutées automatiquement</small>
                    </div>
                    
                    <div class=\"alert alert-info\">
                        <strong>🤖 L'IA va générer</strong> un cours personnalisé avec :
                        <ul class=\"mb-0 mt-2\">
                            <li>Un PDF avec explications et exercices</li>
                            <li>Des vidéos YouTube recommandées</li>
                            <li>Du contenu adapté à votre niveau {{ cours.idNiveau.difficulte }}</li>
                        </ul>
                    </div>
                    
                    <button type=\"submit\" class=\"btn btn-primary btn-lg w-100\">
                        🚀 Générer mon cours
                    </button>
                    
                    <div class=\"text-center mt-3\">
                        <a href=\"{{ path('app_cours_show', {id: cours.id}) }}\" class=\"text-muted\">
                            ← Retour à la leçon
                        </a>
         a           </div>
                    
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "cours_personnalise/generer.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\cours_personnalise\\generer.html.twig");
    }
}
