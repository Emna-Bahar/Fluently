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

/* cours/edit.html.twig */
class __TwigTemplate_257f16fe5147f4c67aae5f69eb879021 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/edit.html.twig"));

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

        yield "Modifier le cours n°";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 3, $this->source); })()), "numero", [], "any", false, false, false, 3), "html", null, true);
        
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
            Modifier le cours n°";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 10, $this->source); })()), "numero", [], "any", false, false, false, 10), "html", null, true);
        yield "
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
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "langue", [], "any", false, false, false, 21), 'errors');
        yield "
                    </div>

                    <!-- Niveau (lié à la langue) -->
                    <div class=\"mb-4\">
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "Id_niveau", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "Id_niveau", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-select form-select-lg", "id" => "niveau-select"]]);
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Id_niveau", [], "any", false, false, false, 28), 'errors');
        yield "
                    </div>

                    <!-- Numéro -->
                    <div class=\"mb-4\">
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "numero", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "numero", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "numero", [], "any", false, false, false, 35), 'errors');
        yield "
                    </div>

                    <!-- Cours précédent -->
                    <div class=\"mb-4\">
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 42), 'errors');
        yield "
                    </div>

                    <!-- RESSOURCES EXISTANTES (seulement en modification) -->
                    ";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 46, $this->source); })()), "ressource", [], "any", false, false, false, 46) && Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 46, $this->source); })()), "ressource", [], "any", false, false, false, 46)))) {
            // line 47
            yield "                    <div class=\"mb-5\">
                        <label class=\"form-label fw-bold\">Ressources actuelles :</label>
                        <ul class=\"list-group mb-3\">
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 50, $this->source); })()), "ressource", [], "any", false, false, false, 50), "
"));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 51
                yield "                                ";
                if ((($tmp = Twig\Extension\CoreExtension::trim($context["file"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 52
                    yield "                                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    <span>
                                        <i class=\"fas fa-file me-2 text-primary\"></i> ";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["file"]), "html", null, true);
                    yield "
                                    </span>
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" 
                                               type=\"checkbox\" 
                                               name=\"delete_ressources[]\" 
                                               value=\"";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["file"]), "html", null, true);
                    yield "\" 
                                               id=\"delete_";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61), "html", null, true);
                    yield "\">
                                        <label class=\"form-check-label text-danger\" for=\"delete_";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62), "html", null, true);
                    yield "\">
                                            Supprimer
                                        </label>
                                    </div>
                                </li>
                                ";
                }
                // line 68
                yield "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                        </ul>
                    </div>
                    ";
        }
        // line 72
        yield "
                    <!-- AJOUT DE NOUVELLES RESSOURCES (identique à la création) -->
                    <div class=\"mb-5\">
                        <label class=\"form-label fw-bold\">Ajouter de nouvelles ressources</label>
                        <div id=\"ressources-list\" 
                             data-prototype=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "prototype", [], "any", false, false, false, 77), 'widget'), "html_attr");
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
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\" class=\"btn btn-secondary btn-lg px-5 fw-bold\">Annuler</a>
                        <button type=\"submit\" class=\"btn btn-success btn-lg px-5 fw-bold shadow\">Mettre à jour</button>
                    </div>

                ";
        // line 93
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Gestion des niveaux par langue (exactement comme dans new)
    const langueSelect = document.getElementById('cours_langue');
    const niveauSelect = document.getElementById('niveau-select'); 

    if (langueSelect && niveauSelect) {
        let allNiveauOptions = Array.from(niveauSelect.options).map(option => ({
            value: option.value,
            text: option.text,
            langueId: option.getAttribute('data-langue')
        }));

        function filterNiveaux() {
            const selectedLangueId = langueSelect.value;
            const currentNiveauId = niveauSelect.value;
            
            niveauSelect.innerHTML = ''; 

            allNiveauOptions.forEach(opt => {
                if (opt.value === '') {
                    const option = new Option(opt.text, opt.value);
                    niveauSelect.add(option);
                    return;
                }
                
                if (!selectedLangueId || opt.langueId == selectedLangueId) {
                    const option = new Option(opt.text, opt.value);
                    option.setAttribute('data-langue', opt.langueId);
                    niveauSelect.add(option);
                }
            });

            if (currentNiveauId) {
                niveauSelect.value = currentNiveauId;
            }
        }

        langueSelect.addEventListener('change', filterNiveaux);
        
        if (langueSelect.value) {
            filterNiveaux();
        }
    }

    // 2. Gestion de l'ajout dynamique de ressources (exactement comme dans new)
    const collectionHolder = document.getElementById('ressources-list');
    const addRessourceBtn = document.getElementById('add-ressource-btn');
    
    let index = 0;

    if (addRessourceBtn) {
        addRessourceBtn.addEventListener('click', function() {
            addElement(collectionHolder);
        });
    }

    function addElement(holder) {
        if (!holder || !holder.dataset.prototype) {
            console.error(\"Prototype non trouvé\");
            return;
        }

        const prototype = holder.dataset.prototype;
        const newForm = prototype.replace(/__name__/g, index);
        index++;

        const div = document.createElement('div');
        div.classList.add('d-flex', 'gap-2', 'mb-2', 'align-items-center');
        div.innerHTML = newForm;

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

    // Pas d'ajout automatique au chargement en mode édition (optionnel)
    // if (collectionHolder.children.length === 0) {
    //     addElement(collectionHolder);
    // }
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
        return "cours/edit.html.twig";
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
        return array (  291 => 93,  284 => 89,  269 => 77,  262 => 72,  257 => 69,  243 => 68,  234 => 62,  230 => 61,  226 => 60,  217 => 54,  213 => 52,  210 => 51,  192 => 50,  187 => 47,  185 => 46,  178 => 42,  174 => 41,  170 => 40,  162 => 35,  158 => 34,  154 => 33,  146 => 28,  142 => 27,  138 => 26,  130 => 21,  126 => 20,  122 => 19,  115 => 15,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le cours n°{{ cour.numero }}{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #5b21b6 100%); min-height: 100vh; padding: 80px 20px; color: #000;\">
<br><br>
    <div class=\"container\" style=\"max-width: 900px;\">
        <h1 class=\"text-center mb-5 text-white fw-bold\">
            Modifier le cours n°{{ cour.numero }}
        </h1>

        <div class=\"card shadow-lg border-0 rounded-4\" style=\"background: rgba(255,255,255,0.95);\">
            <div class=\"card-body p-5\">
                {{ form_start(form) }}

                    <!-- Langue -->
                    <div class=\"mb-4\">
                        {{ form_label(form.langue, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.langue, {'attr': {'class': 'form-select form-select-lg', 'id': 'cours_langue'}}) }}
                        {{ form_errors(form.langue) }}
                    </div>

                    <!-- Niveau (lié à la langue) -->
                    <div class=\"mb-4\">
                        {{ form_label(form.Id_niveau, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.Id_niveau, {'attr': {'class': 'form-select form-select-lg', 'id': 'niveau-select'}}) }}
                        {{ form_errors(form.Id_niveau) }}
                    </div>

                    <!-- Numéro -->
                    <div class=\"mb-4\">
                        {{ form_label(form.numero, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.numero, {'attr': {'class': 'form-control form-control-lg'}}) }}
                        {{ form_errors(form.numero) }}
                    </div>

                    <!-- Cours précédent -->
                    <div class=\"mb-4\">
                        {{ form_label(form.cours_precedent_id, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.cours_precedent_id, {'attr': {'class': 'form-select form-select-lg'}}) }}
                        {{ form_errors(form.cours_precedent_id) }}
                    </div>

                    <!-- RESSOURCES EXISTANTES (seulement en modification) -->
                    {% if cour.ressource and cour.ressource|trim %}
                    <div class=\"mb-5\">
                        <label class=\"form-label fw-bold\">Ressources actuelles :</label>
                        <ul class=\"list-group mb-3\">
                            {% for file in cour.ressource|split('\\n') %}
                                {% if file|trim %}
                                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    <span>
                                        <i class=\"fas fa-file me-2 text-primary\"></i> {{ file|trim }}
                                    </span>
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" 
                                               type=\"checkbox\" 
                                               name=\"delete_ressources[]\" 
                                               value=\"{{ file|trim }}\" 
                                               id=\"delete_{{ loop.index }}\">
                                        <label class=\"form-check-label text-danger\" for=\"delete_{{ loop.index }}\">
                                            Supprimer
                                        </label>
                                    </div>
                                </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    </div>
                    {% endif %}

                    <!-- AJOUT DE NOUVELLES RESSOURCES (identique à la création) -->
                    <div class=\"mb-5\">
                        <label class=\"form-label fw-bold\">Ajouter de nouvelles ressources</label>
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
                        <button type=\"submit\" class=\"btn btn-success btn-lg px-5 fw-bold shadow\">Mettre à jour</button>
                    </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Gestion des niveaux par langue (exactement comme dans new)
    const langueSelect = document.getElementById('cours_langue');
    const niveauSelect = document.getElementById('niveau-select'); 

    if (langueSelect && niveauSelect) {
        let allNiveauOptions = Array.from(niveauSelect.options).map(option => ({
            value: option.value,
            text: option.text,
            langueId: option.getAttribute('data-langue')
        }));

        function filterNiveaux() {
            const selectedLangueId = langueSelect.value;
            const currentNiveauId = niveauSelect.value;
            
            niveauSelect.innerHTML = ''; 

            allNiveauOptions.forEach(opt => {
                if (opt.value === '') {
                    const option = new Option(opt.text, opt.value);
                    niveauSelect.add(option);
                    return;
                }
                
                if (!selectedLangueId || opt.langueId == selectedLangueId) {
                    const option = new Option(opt.text, opt.value);
                    option.setAttribute('data-langue', opt.langueId);
                    niveauSelect.add(option);
                }
            });

            if (currentNiveauId) {
                niveauSelect.value = currentNiveauId;
            }
        }

        langueSelect.addEventListener('change', filterNiveaux);
        
        if (langueSelect.value) {
            filterNiveaux();
        }
    }

    // 2. Gestion de l'ajout dynamique de ressources (exactement comme dans new)
    const collectionHolder = document.getElementById('ressources-list');
    const addRessourceBtn = document.getElementById('add-ressource-btn');
    
    let index = 0;

    if (addRessourceBtn) {
        addRessourceBtn.addEventListener('click', function() {
            addElement(collectionHolder);
        });
    }

    function addElement(holder) {
        if (!holder || !holder.dataset.prototype) {
            console.error(\"Prototype non trouvé\");
            return;
        }

        const prototype = holder.dataset.prototype;
        const newForm = prototype.replace(/__name__/g, index);
        index++;

        const div = document.createElement('div');
        div.classList.add('d-flex', 'gap-2', 'mb-2', 'align-items-center');
        div.innerHTML = newForm;

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

    // Pas d'ajout automatique au chargement en mode édition (optionnel)
    // if (collectionHolder.children.length === 0) {
    //     addElement(collectionHolder);
    // }
});
</script>
{% endblock %}", "cours/edit.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\cours\\edit.html.twig");
    }
}
