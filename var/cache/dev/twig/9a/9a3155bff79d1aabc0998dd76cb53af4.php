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
class __TwigTemplate_f5ee1b4c9cbf05e7535a23bb0eda4c63 extends Template
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
        return "dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/edit.html.twig"));

        $this->parent = $this->load("dashboard/index.html.twig", 1);
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
        yield "
    <div class=\"nxl-content\">

        <!-- En-tête de page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-edit-3 text-warning me-2\"></i>
                        Modifier le cours n°";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 15, $this->source); })()), "numero", [], "any", false, false, false, 15), "html", null, true);
        yield "
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 18, $this->source); })()), "idNiveau", [], "any", false, false, false, 18), "titre", [], "any", false, false, false, 18), "html", null, true);
        yield " • ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 18, $this->source); })()), "idNiveau", [], "any", false, false, false, 18), "idLangue", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
        yield "
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Annuler
                </a>
            </div>
        </div>

        <!-- Formulaire principal -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-warning text-white py-4 px-5 d-flex align-items-center gap-3\">
                        <div class=\"avatar avatar-lg bg-white text-warning rounded-circle d-flex align-items-center justify-content-center shadow\">
                            <i class=\"feather-edit-2 fs-4\"></i>
                        </div>
                        <div>
                            <h6 class=\"m-0 fw-bold fs-5\">
                                Modifier le cours n°";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 39, $this->source); })()), "numero", [], "any", false, false, false, 39), "html", null, true);
        yield "
                            </h6>
                            <small class=\"opacity-90\">
                                ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 42, $this->source); })()), "idNiveau", [], "any", false, false, false, 42), "titre", [], "any", false, false, false, 42), "html", null, true);
        yield " • ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 42, $this->source); })()), "idNiveau", [], "any", false, false, false, 42), "idLangue", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), "html", null, true);
        yield "
                            </small>
                        </div>
                    </div>

                    <div class=\"card-body p-5\">
                        ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4 needs-validation", "novalidate" => "novalidate"]]);
        yield "

                        <div class=\"row g-4\">

                            <!-- Langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Langue</label>
                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "langue", [], "any", false, false, false, 55), 'widget', ["attr" => ["id" => "cours_langue", "class" => "form-select form-select-lg"]]);
        yield "
                            </div>

                            <!-- Niveau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Niveau</label>
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "Id_niveau", [], "any", false, false, false, 61), 'widget', ["attr" => ["id" => "niveau-select", "class" => "form-select form-select-lg"]]);
        yield "
                            </div>

                            <!-- Numéro -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Numéro de la leçon</label>
                                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "numero", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                            </div>

                            <!-- Cours précédent -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Cours précédent (optionnel)</label>
                                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "cours_precedent_id", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                            </div>

                            <!-- Ressources existantes -->
                            ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 77, $this->source); })()), "ressource", [], "any", false, false, false, 77) && Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 77, $this->source); })()), "ressource", [], "any", false, false, false, 77)))) {
            // line 78
            yield "                            <div class=\"col-12\">
                                <h6 class=\"fw-bold mb-3 text-dark\">Ressources actuelles</h6>
                                <div class=\"list-group border rounded-3 overflow-hidden shadow-sm\">
                                    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 81, $this->source); })()), "ressource", [], "any", false, false, false, 81), "
"), function ($__file__) use ($context, $macros) { $context["file"] = $__file__; return Twig\Extension\CoreExtension::trim($context["file"]); }));
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
                // line 82
                yield "                                        <div class=\"list-group-item d-flex justify-content-between align-items-center px-4 py-3\">
                                            <div class=\"d-flex align-items-center\">
                                                <i class=\"feather-file-text text-primary me-3\"></i>
                                                <span class=\"fw-medium\">";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["file"], "html", null, true);
                yield "</span>
                                            </div>
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"checkbox\" 
                                                       name=\"delete_ressources[]\" value=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["file"], "html", null, true);
                yield "\" 
                                                       id=\"delete-";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 90), "html", null, true);
                yield "\">
                                                <label class=\"form-check-label text-danger small fw-bold\" 
                                                       for=\"delete-";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 92), "html", null, true);
                yield "\">
                                                    Supprimer
                                                </label>
                                            </div>
                                        </div>
                                    ";
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
            // line 98
            yield "                                </div>
                            </div>
                            ";
        }
        // line 101
        yield "
                            <!-- Ajout de nouvelles ressources -->
                            <div class=\"col-12\">
                                <h6 class=\"fw-bold mb-3 text-dark\">Ajouter de nouvelles ressources</h6>
                                <div id=\"ressources-list\" 
                                     data-prototype=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "ressourcesFiles", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "prototype", [], "any", false, false, false, 106), 'widget'), "html_attr");
        yield "\" 
                                     class=\"mb-3\"></div>
                                
                                <button type=\"button\" class=\"btn btn-outline-primary btn-lg px-4\" id=\"add-ressource-btn\">
                                    <i class=\"feather-plus me-2\"></i> Ajouter une ressource
                                </button>

                                <div class=\"text-muted small mt-2\">
                                    Formats acceptés : PDF, MP4, JPG, PNG, MP3, WAV, OGG...
                                </div>
                            </div>

                            <!-- Bouton de soumission -->
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i> Mettre à jour le cours
                                </button>
                            </div>

                        </div>

                        ";
        // line 127
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Gestion dynamique des niveaux selon la langue
            const langueSelect = document.getElementById('cours_langue');
            const niveauSelect = document.getElementById('niveau-select');

            if (langueSelect && niveauSelect) {
                let allOptions = Array.from(niveauSelect.options).map(opt => ({
                    value: opt.value,
                    text: opt.text,
                    langueId: opt.dataset.langue
                }));

                function updateNiveaux() {
                    const selectedLangue = langueSelect.value;
                    const currentValue = niveauSelect.value;
                    niveauSelect.innerHTML = '';

                    allOptions.forEach(opt => {
                        if (!selectedLangue || opt.langueId == selectedLangue || opt.value === '') {
                            const option = new Option(opt.text, opt.value);
                            if (opt.langueId) option.dataset.langue = opt.langueId;
                            niveauSelect.add(option);
                        }
                    });

                    if (currentValue && niveauSelect.querySelector(`option[value=\"\${currentValue}\"]`)) {
                        niveauSelect.value = currentValue;
                    }
                }

                langueSelect.addEventListener('change', updateNiveaux);
                updateNiveaux(); // Appliquer au chargement
            }

            // Ajout dynamique de ressources
            const collectionHolder = document.getElementById('ressources-list');
            const addButton = document.getElementById('add-ressource-btn');
            let index = 0;

            if (addButton) {
                addButton.addEventListener('click', function () {
                    if (!collectionHolder.dataset.prototype) {
                        console.error(\"Prototype non trouvé\");
                        return;
                    }

                    const newForm = collectionHolder.dataset.prototype.replace(/__name__/g, index++);
                    const wrapper = document.createElement('div');
                    wrapper.className = 'input-group mb-3 align-items-center';
                    wrapper.innerHTML = newForm;

                    const removeBtn = document.createElement('button');
                    removeBtn.type = 'button';
                    removeBtn.className = 'btn btn-danger';
                    removeBtn.innerHTML = '<i class=\"feather-trash-2\"></i>';
                    removeBtn.onclick = () => wrapper.remove();

                    wrapper.appendChild(removeBtn);
                    collectionHolder.appendChild(wrapper);
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
        return array (  310 => 127,  286 => 106,  279 => 101,  274 => 98,  254 => 92,  249 => 90,  245 => 89,  238 => 85,  233 => 82,  215 => 81,  210 => 78,  208 => 77,  201 => 73,  192 => 67,  183 => 61,  174 => 55,  164 => 48,  153 => 42,  147 => 39,  128 => 23,  118 => 18,  112 => 15,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Modifier le cours n°{{ cour.numero }}{% endblock %}

{% block body %}

    <div class=\"nxl-content\">

        <!-- En-tête de page -->
        <div class=\"page-header\">
            <div class=\"page-header-left d-flex align-items-center\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10 fw-bold\">
                        <i class=\"feather-edit-3 text-warning me-2\"></i>
                        Modifier le cours n°{{ cour.numero }}
                    </h5>
                    <h6 class=\"m-b-0 text-muted\">
                        {{ cour.idNiveau.titre }} • {{ cour.idNiveau.idLangue.nom }}
                    </h6>
                </div>
            </div>
            <div class=\"page-header-right ms-auto\">
                <a href=\"{{ path('app_cours_index') }}\" class=\"btn btn-outline-secondary px-4\">
                    <i class=\"feather-arrow-left me-2\"></i> Annuler
                </a>
            </div>
        </div>

        <!-- Formulaire principal -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-10 col-lg-11\">
                <div class=\"card border-0 shadow-lg rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-gradient-warning text-white py-4 px-5 d-flex align-items-center gap-3\">
                        <div class=\"avatar avatar-lg bg-white text-warning rounded-circle d-flex align-items-center justify-content-center shadow\">
                            <i class=\"feather-edit-2 fs-4\"></i>
                        </div>
                        <div>
                            <h6 class=\"m-0 fw-bold fs-5\">
                                Modifier le cours n°{{ cour.numero }}
                            </h6>
                            <small class=\"opacity-90\">
                                {{ cour.idNiveau.titre }} • {{ cour.idNiveau.idLangue.nom }}
                            </small>
                        </div>
                    </div>

                    <div class=\"card-body p-5\">
                        {{ form_start(form, {'attr': {'class': 'row g-4 needs-validation', 'novalidate': 'novalidate'}}) }}

                        <div class=\"row g-4\">

                            <!-- Langue -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Langue</label>
                                {{ form_widget(form.langue, {'attr': {'id': 'cours_langue', 'class': 'form-select form-select-lg'}}) }}
                            </div>

                            <!-- Niveau -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Niveau</label>
                                {{ form_widget(form.Id_niveau, {'attr': {'id': 'niveau-select', 'class': 'form-select form-select-lg'}}) }}
                            </div>

                            <!-- Numéro -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Numéro de la leçon</label>
                                {{ form_widget(form.numero, {'attr': {'class': 'form-control form-control-lg'}}) }}
                            </div>

                            <!-- Cours précédent -->
                            <div class=\"col-md-6\">
                                <label class=\"form-label fw-bold mb-2\">Cours précédent (optionnel)</label>
                                {{ form_widget(form.cours_precedent_id, {'attr': {'class': 'form-select form-select-lg'}}) }}
                            </div>

                            <!-- Ressources existantes -->
                            {% if cour.ressource and cour.ressource|trim %}
                            <div class=\"col-12\">
                                <h6 class=\"fw-bold mb-3 text-dark\">Ressources actuelles</h6>
                                <div class=\"list-group border rounded-3 overflow-hidden shadow-sm\">
                                    {% for file in cour.ressource|split('\\n')|filter(file => file|trim) %}
                                        <div class=\"list-group-item d-flex justify-content-between align-items-center px-4 py-3\">
                                            <div class=\"d-flex align-items-center\">
                                                <i class=\"feather-file-text text-primary me-3\"></i>
                                                <span class=\"fw-medium\">{{ file }}</span>
                                            </div>
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"checkbox\" 
                                                       name=\"delete_ressources[]\" value=\"{{ file }}\" 
                                                       id=\"delete-{{ loop.index }}\">
                                                <label class=\"form-check-label text-danger small fw-bold\" 
                                                       for=\"delete-{{ loop.index }}\">
                                                    Supprimer
                                                </label>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                            {% endif %}

                            <!-- Ajout de nouvelles ressources -->
                            <div class=\"col-12\">
                                <h6 class=\"fw-bold mb-3 text-dark\">Ajouter de nouvelles ressources</h6>
                                <div id=\"ressources-list\" 
                                     data-prototype=\"{{ form_widget(form.ressourcesFiles.vars.prototype)|e('html_attr') }}\" 
                                     class=\"mb-3\"></div>
                                
                                <button type=\"button\" class=\"btn btn-outline-primary btn-lg px-4\" id=\"add-ressource-btn\">
                                    <i class=\"feather-plus me-2\"></i> Ajouter une ressource
                                </button>

                                <div class=\"text-muted small mt-2\">
                                    Formats acceptés : PDF, MP4, JPG, PNG, MP3, WAV, OGG...
                                </div>
                            </div>

                            <!-- Bouton de soumission -->
                            <div class=\"col-12 text-end mt-5 pt-4 border-top\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg px-5 py-3 fw-bold shadow-lg transition-all\">
                                    <i class=\"feather-save me-2\"></i> Mettre à jour le cours
                                </button>
                            </div>

                        </div>

                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Gestion dynamique des niveaux selon la langue
            const langueSelect = document.getElementById('cours_langue');
            const niveauSelect = document.getElementById('niveau-select');

            if (langueSelect && niveauSelect) {
                let allOptions = Array.from(niveauSelect.options).map(opt => ({
                    value: opt.value,
                    text: opt.text,
                    langueId: opt.dataset.langue
                }));

                function updateNiveaux() {
                    const selectedLangue = langueSelect.value;
                    const currentValue = niveauSelect.value;
                    niveauSelect.innerHTML = '';

                    allOptions.forEach(opt => {
                        if (!selectedLangue || opt.langueId == selectedLangue || opt.value === '') {
                            const option = new Option(opt.text, opt.value);
                            if (opt.langueId) option.dataset.langue = opt.langueId;
                            niveauSelect.add(option);
                        }
                    });

                    if (currentValue && niveauSelect.querySelector(`option[value=\"\${currentValue}\"]`)) {
                        niveauSelect.value = currentValue;
                    }
                }

                langueSelect.addEventListener('change', updateNiveaux);
                updateNiveaux(); // Appliquer au chargement
            }

            // Ajout dynamique de ressources
            const collectionHolder = document.getElementById('ressources-list');
            const addButton = document.getElementById('add-ressource-btn');
            let index = 0;

            if (addButton) {
                addButton.addEventListener('click', function () {
                    if (!collectionHolder.dataset.prototype) {
                        console.error(\"Prototype non trouvé\");
                        return;
                    }

                    const newForm = collectionHolder.dataset.prototype.replace(/__name__/g, index++);
                    const wrapper = document.createElement('div');
                    wrapper.className = 'input-group mb-3 align-items-center';
                    wrapper.innerHTML = newForm;

                    const removeBtn = document.createElement('button');
                    removeBtn.type = 'button';
                    removeBtn.className = 'btn btn-danger';
                    removeBtn.innerHTML = '<i class=\"feather-trash-2\"></i>';
                    removeBtn.onclick = () => wrapper.remove();

                    wrapper.appendChild(removeBtn);
                    collectionHolder.appendChild(wrapper);
                });
            }
        });
    </script>

{% endblock %}", "cours/edit.html.twig", "C:\\Users\\emnab\\Documents\\Fluently\\templates\\cours\\edit.html.twig");
    }
}
