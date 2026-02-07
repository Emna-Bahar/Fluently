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

/* cours/new.html.twig */
class __TwigTemplate_9c88234997e0912a2630d4867ddf01d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/new.html.twig"));

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

        yield "Créer un cours";
        
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
        yield "<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #5b21b6 100%); min-height: 100vh; padding: 80px 20px; color: #000;\">
<br><br>
    <div class=\"container\" style=\"max-width: 900px;\">
        <h1 class=\"text-center mb-5 text-white fw-bold\">
            Créer un nouveau cours
        </h1>

        <div class=\"card shadow-lg border-0 rounded-4\" style=\"background: rgba(255,255,255,0.95);\">
            <div class=\"card-body p-5\">
                ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        yield "

                    <!-- Langue -->
                    <div class=\"mb-4\">
                        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "langue", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "langue", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-select form-select-lg", "id" => "cours_langue"]]);
        yield "
                    </div>

                    <!-- Niveau (lié à la langue) -->
                    <div class=\"mb-4\">
                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Id_niveau", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "Id_niveau", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-select form-select-lg", "id" => "niveau-select"]]);
        yield "
                    </div>

                    <!-- Numéro -->
                    <div class=\"mb-4\">
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "numero", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "numero", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                    </div>

                    <!-- Cours précédent -->
                    <div class=\"mb-4\">
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                    </div>

                    <!-- Ressources -->
                    <div class=\"mb-5\">
                        <label class=\"form-label fw-bold\">Ressources (Fichiers)</label>
                        <div id=\"ressources-list\" 
                             data-prototype=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "prototype", [], "any", false, false, false, 45), 'widget'), "html_attr");
        yield "\">
                        </div>
                        <button type=\"button\" class=\"btn btn-outline-primary mt-2\" id=\"add-ressource-btn\">
                            <i class=\"fas fa-plus\"></i> Ajouter une ressource
                        </button>
                        <small class=\"form-text text-muted d-block mt-2\">
                            Formats acceptés : PDF, MP4, JPG, PNG, MP3, WAV, OGG...
                        </small>
                    </div>

                    <!-- Boutons -->
                    <div class=\"d-flex gap-3 justify-content-end\">
                        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\" class=\"btn btn-secondary btn-lg px-5 fw-bold\">Annuler</a>
                        <button type=\"submit\" class=\"btn btn-success btn-lg px-5 fw-bold shadow\">Créer</button>
                    </div>

                ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Gestion des niveaux par langue
    const langueSelect = document.getElementById('cours_langue');
    const niveauSelect = document.getElementById('niveau-select'); 

    if (langueSelect && niveauSelect) {
        // Sauvegarde toutes les options initiales (tous les niveaux)
        // Mais attention! Il faut attendre que le DOM soit chargé, et surtout, 
        // si le formulaire est réaffiché après erreur, le choix actuel doit être préservé.
        
        let allNiveauOptions = Array.from(niveauSelect.options).map(option => ({
            value: option.value,
            text: option.text,
            langueId: option.getAttribute('data-langue')
        }));

        function filterNiveaux() {
            const selectedLangueId = langueSelect.value;
            const currentNiveauId = niveauSelect.value;
            
            // On vide le select
            niveauSelect.innerHTML = ''; 

            // On remet les options filtrées
            allNiveauOptions.forEach(opt => {
                // Toujours garder l'option vide/placeholder
                if (opt.value === '') {
                     const option = new Option(opt.text, opt.value);
                     niveauSelect.add(option);
                     return;
                }
                
                // Si ça matche la langue
                if (!selectedLangueId || opt.langueId == selectedLangueId) {
                    const option = new Option(opt.text, opt.value);
                    option.setAttribute('data-langue', opt.langueId);
                    niveauSelect.add(option);
                }
            });

        }

        langueSelect.addEventListener('change', filterNiveaux);
        
        // Appeler une fois au chargement pour filtrer si une langue est déjà sélectionnée
        if (langueSelect.value) {
            
             filterNiveaux();
        }
    }

    // 2. Gestion de l'ajout dynamique de ressources
    const collectionHolder = document.getElementById('ressources-list');
    const addRessourceBtn = document.getElementById('add-ressource-btn');
    
    // Index pour nommer les champs
    let index = 0;

    addRessourceBtn.addEventListener('click', function() {
        addElement(collectionHolder);
    });

    function addElement(holder) {
        // Récupère le prototype HTML
        const prototype = holder.dataset.prototype;

        // Remplace '__name__' par l'index
        const newForm = prototype.replace(/__name__/g, index);
        index++;

        // Crée une div wrapper
        const div = document.createElement('div');
        div.classList.add('d-flex', 'gap-2', 'mb-2', 'align-items-center');
        div.innerHTML = newForm;

        // Ajoute un bouton supprimer pour cette ligne
        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.classList.add('btn', 'btn-danger', 'btn-sm');
        removeBtn.innerHTML = '<i class=\"fas fa-trash\"></i>';
        removeBtn.onclick = function() {
            div.remove();
        };

        div.appendChild(removeBtn);
        holder.appendChild(div);
    }
    
    // Ajoute un premier champ au chargement s'il n'y en a pas
    // (optionnel, mais sympa pour l'UX)
    if (collectionHolder.children.length === 0) {
        addElement(collectionHolder);
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
        return "cours/new.html.twig";
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
        return array (  190 => 61,  183 => 57,  168 => 45,  158 => 38,  154 => 37,  146 => 32,  142 => 31,  134 => 26,  130 => 25,  122 => 20,  118 => 19,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un cours{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #5b21b6 100%); min-height: 100vh; padding: 80px 20px; color: #000;\">
<br><br>
    <div class=\"container\" style=\"max-width: 900px;\">
        <h1 class=\"text-center mb-5 text-white fw-bold\">
            Créer un nouveau cours
        </h1>

        <div class=\"card shadow-lg border-0 rounded-4\" style=\"background: rgba(255,255,255,0.95);\">
            <div class=\"card-body p-5\">
                {{ form_start(form) }}

                    <!-- Langue -->
                    <div class=\"mb-4\">
                        {{ form_label(form.langue, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.langue, {'attr': {'class': 'form-select form-select-lg', 'id': 'cours_langue'}}) }}
                    </div>

                    <!-- Niveau (lié à la langue) -->
                    <div class=\"mb-4\">
                        {{ form_label(form.Id_niveau, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.Id_niveau, {'attr': {'class': 'form-select form-select-lg', 'id': 'niveau-select'}}) }}
                    </div>

                    <!-- Numéro -->
                    <div class=\"mb-4\">
                        {{ form_label(form.numero, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.numero, {'attr': {'class': 'form-control form-control-lg'}}) }}
                    </div>

                    <!-- Cours précédent -->
                    <div class=\"mb-4\">
                        {{ form_label(form.cours_precedent_id, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.cours_precedent_id, {'attr': {'class': 'form-select form-select-lg'}}) }}
                    </div>

                    <!-- Ressources -->
                    <div class=\"mb-5\">
                        <label class=\"form-label fw-bold\">Ressources (Fichiers)</label>
                        <div id=\"ressources-list\" 
                             data-prototype=\"{{ form_widget(form.ressourcesFiles.vars.prototype)|e('html_attr') }}\">
                        </div>
                        <button type=\"button\" class=\"btn btn-outline-primary mt-2\" id=\"add-ressource-btn\">
                            <i class=\"fas fa-plus\"></i> Ajouter une ressource
                        </button>
                        <small class=\"form-text text-muted d-block mt-2\">
                            Formats acceptés : PDF, MP4, JPG, PNG, MP3, WAV, OGG...
                        </small>
                    </div>

                    <!-- Boutons -->
                    <div class=\"d-flex gap-3 justify-content-end\">
                        <a href=\"{{ path('app_cours_index') }}\" class=\"btn btn-secondary btn-lg px-5 fw-bold\">Annuler</a>
                        <button type=\"submit\" class=\"btn btn-success btn-lg px-5 fw-bold shadow\">Créer</button>
                    </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Gestion des niveaux par langue
    const langueSelect = document.getElementById('cours_langue');
    const niveauSelect = document.getElementById('niveau-select'); 

    if (langueSelect && niveauSelect) {
        // Sauvegarde toutes les options initiales (tous les niveaux)
        // Mais attention! Il faut attendre que le DOM soit chargé, et surtout, 
        // si le formulaire est réaffiché après erreur, le choix actuel doit être préservé.
        
        let allNiveauOptions = Array.from(niveauSelect.options).map(option => ({
            value: option.value,
            text: option.text,
            langueId: option.getAttribute('data-langue')
        }));

        function filterNiveaux() {
            const selectedLangueId = langueSelect.value;
            const currentNiveauId = niveauSelect.value;
            
            // On vide le select
            niveauSelect.innerHTML = ''; 

            // On remet les options filtrées
            allNiveauOptions.forEach(opt => {
                // Toujours garder l'option vide/placeholder
                if (opt.value === '') {
                     const option = new Option(opt.text, opt.value);
                     niveauSelect.add(option);
                     return;
                }
                
                // Si ça matche la langue
                if (!selectedLangueId || opt.langueId == selectedLangueId) {
                    const option = new Option(opt.text, opt.value);
                    option.setAttribute('data-langue', opt.langueId);
                    niveauSelect.add(option);
                }
            });

        }

        langueSelect.addEventListener('change', filterNiveaux);
        
        // Appeler une fois au chargement pour filtrer si une langue est déjà sélectionnée
        if (langueSelect.value) {
            
             filterNiveaux();
        }
    }

    // 2. Gestion de l'ajout dynamique de ressources
    const collectionHolder = document.getElementById('ressources-list');
    const addRessourceBtn = document.getElementById('add-ressource-btn');
    
    // Index pour nommer les champs
    let index = 0;

    addRessourceBtn.addEventListener('click', function() {
        addElement(collectionHolder);
    });

    function addElement(holder) {
        // Récupère le prototype HTML
        const prototype = holder.dataset.prototype;

        // Remplace '__name__' par l'index
        const newForm = prototype.replace(/__name__/g, index);
        index++;

        // Crée une div wrapper
        const div = document.createElement('div');
        div.classList.add('d-flex', 'gap-2', 'mb-2', 'align-items-center');
        div.innerHTML = newForm;

        // Ajoute un bouton supprimer pour cette ligne
        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.classList.add('btn', 'btn-danger', 'btn-sm');
        removeBtn.innerHTML = '<i class=\"fas fa-trash\"></i>';
        removeBtn.onclick = function() {
            div.remove();
        };

        div.appendChild(removeBtn);
        holder.appendChild(div);
    }
    
    // Ajoute un premier champ au chargement s'il n'y en a pas
    // (optionnel, mais sympa pour l'UX)
    if (collectionHolder.children.length === 0) {
        addElement(collectionHolder);
    }
});
</script>
{% endblock %}
", "cours/new.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\cours\\new.html.twig");
    }
}
