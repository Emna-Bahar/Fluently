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

/* session/edit.html.twig */
class __TwigTemplate_80e01af4c4cd92adfd1c8570ac1131d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/edit.html.twig"));

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

        yield "Modifier Session - Fluently";
        
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
        yield "<div class=\"min-vh-100\" style=\"background: linear-gradient(90deg, #b44bd8, #5f7ae6); padding-top: 100px; color: #ecf0f1;\">
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-9 col-xl-8\">
                
                <!-- Messages Flash -->
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            yield "                    <div class=\"alert alert-success alert-dismissible fade show shadow-sm mb-4 border-0\" role=\"alert\">
                        <i class=\"bi bi-check-circle-fill me-2\"></i>
                        <strong>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", ["error"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            yield "                    <div class=\"alert alert-danger alert-dismissible fade show shadow-sm mb-4 border-0\" role=\"alert\">
                        <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                        <strong>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
                <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-sky-blue py-4\">
                        <h4 class=\"mb-0 fw-bold text-dark\">
                            ✏️ Modifier la session #";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        yield "
                        </h4>
                        <small class=\"text-dark opacity-75\">Modifiez les détails de cette session</small>
                    </div>
                    
                    <!-- Formulaire avec scrolling -->
                    <div class=\"card-body p-0\" style=\"max-height: 700px; overflow-y: auto;\">
                        <div class=\"p-4 p-lg-5\">
                            ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["id" => "editSessionForm"]]);
        yield "
                            
                            <div class=\"form-section mb-4 pb-3 border-bottom\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-calendar-event me-2\"></i> Date et heure
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                📅 ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "dateHeure", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "label", [], "any", false, false, false, 49), "html", null, true);
        yield "
                                            </label>
                                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "dateHeure", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "dateHeure", [], "any", false, false, false, 52), 'errors');
        yield "
                                            <small class=\"form-text text-muted\">Date et heure de la session</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-section mb-4 pb-3 border-bottom\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-tag me-2\"></i> Statut
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                🏷️ ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "statut", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "label", [], "any", false, false, false, 67), "html", null, true);
        yield "
                                            </label>
                                            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "statut", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "statut", [], "any", false, false, false, 70), 'errors');
        yield "
                                            <small class=\"form-text text-muted\">Statut actuel de la session</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-section mb-4 pb-3 border-bottom\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-link-45deg me-2\"></i> Lien de réunion
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                🔗 Lien de réunion (optionnel)
                                            </label>
                                            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "lienReunion", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "https://meet.google.com/..."]]);
        yield "
                                            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "lienReunion", [], "any", false, false, false, 88), 'errors');
        yield "
                                            <small class=\"form-text text-muted\">Lien Google Meet, Zoom, Teams, etc.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-section mb-4 pb-3 border-bottom\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-people me-2\"></i> Groupe
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                👥 ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "groupe", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "label", [], "any", false, false, false, 103), "html", null, true);
        yield "
                                            </label>
                                            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "groupe", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                                            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "groupe", [], "any", false, false, false, 106), 'errors');
        yield "
                                            <small class=\"form-text text-muted\">Groupe d'apprenants pour cette session</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-section mb-4\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-person-badge me-2\"></i> Tuteur
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                👨‍🏫 ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "label", [], "any", false, false, false, 121), "html", null, true);
        yield "
                                            </label>
                                            ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                                            ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), 'errors');
        yield "
                                            <small class=\"form-text text-muted\">Tuteur responsable de cette session</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Informations actuelles (en lecture seule) -->
                            <div class=\"current-info bg-light rounded-3 p-4 mb-4\">
                                <h6 class=\"fw-bold text-dark mb-3\">
                                    <i class=\"bi bi-info-circle me-2\"></i> Informations actuelles
                                </h6>
                                <div class=\"row g-3\">
                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Date et heure:</span>
                                            <strong class=\"d-block\">";
        // line 140
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 140, $this->source); })()), "dateHeure", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 140, $this->source); })()), "dateHeure", [], "any", false, false, false, 140), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
        yield "</strong>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Statut actuel:</span>
                                            <span class=\"badge rounded-pill px-3 py-1 
                                                ";
        // line 147
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 147, $this->source); })()), "statut", [], "any", false, false, false, 147) == "planifiée")) {
            yield "bg-info
                                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 148
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 148, $this->source); })()), "statut", [], "any", false, false, false, 148) == "en_cours")) {
            yield "bg-warning text-dark
                                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 149
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 149, $this->source); })()), "statut", [], "any", false, false, false, 149) == "terminée")) {
            yield "bg-success
                                                ";
        } else {
            // line 150
            yield "bg-secondary";
        }
        yield "\">
                                                ";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 151, $this->source); })()), "statut", [], "any", false, false, false, 151)), "html", null, true);
        yield "
                                            </span>
                                        </div>
                                    </div>
                                    ";
        // line 155
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 155, $this->source); })()), "lienReunion", [], "any", false, false, false, 155)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 156
            yield "                                    <div class=\"col-12\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Lien de réunion:</span>
                                            <a href=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 159, $this->source); })()), "lienReunion", [], "any", false, false, false, 159), "html", null, true);
            yield "\" target=\"_blank\" class=\"d-block text-truncate\">
                                                🔗 ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 160, $this->source); })()), "lienReunion", [], "any", false, false, false, 160), 0, 50), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 160, $this->source); })()), "lienReunion", [], "any", false, false, false, 160)) > 50)) {
                yield " ";
            }
            // line 161
            yield "                                            </a>
                                        </div>
                                    </div>
                                    ";
        }
        // line 165
        yield "                                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 165, $this->source); })()), "groupe", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 166
            yield "                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Groupe:</span>
                                            <strong class=\"d-block\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 169, $this->source); })()), "groupe", [], "any", false, false, false, 169), "nom", [], "any", false, false, false, 169), "html", null, true);
            yield "</strong>
                                            <small class=\"text-muted\">ID: ";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 170, $this->source); })()), "groupe", [], "any", false, false, false, 170), "id", [], "any", false, false, false, 170), "html", null, true);
            yield "</small>
                                        </div>
                                    </div>
                                    ";
        }
        // line 174
        yield "                                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 174, $this->source); })()), "user", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Tuteur:</span>
                                            <strong class=\"d-block\">";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "nom", [], "any", false, false, false, 178), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "prenom", [], "any", false, false, false, 178), "html", null, true);
            yield "</strong>
                                            <small class=\"text-muted\">";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 179, $this->source); })()), "user", [], "any", false, false, false, 179), "email", [], "any", false, false, false, 179), "html", null, true);
            yield "</small>
                                        </div>
                                    </div>
                                    ";
        }
        // line 183
        yield "                                </div>
                            </div>

                            <div class=\"mt-5 pt-3 border-top\">
                                <div class=\"d-flex gap-3\">
                                    <button type=\"submit\" class=\"btn btn-success btn-lg flex-fill shadow-sm\">
                                        ✅ Enregistrer les modifications
                                    </button>
                                    <a href=\"";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
        yield "\" class=\"btn btn-danger btn-lg flex-fill shadow-sm\">
                                        ❌ Annuler
                                    </a>
                                </div>
                            </div>
                            
                            ";
        // line 197
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Même fond que les autres pages */
    body {
        background: linear-gradient(90deg, #b44bd8, #5f7ae6) !important;
        color: #ecf0f1 !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
        border: none !important;
        border-radius: 16px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3) !important;
    }

    /* En-tête en bleu ciel */
    .bg-sky-blue {
        background: linear-gradient(135deg, #87CEEB 0%, #A0D8F3 100%) !important;
        color: #2c3e50 !important;
    }

    /* Style des champs de formulaire */
    .form-control-lg, .form-select-lg {
        border: 2px solid #dee2e6 !important;
        border-radius: 10px !important;
        padding: 0.75rem 1rem !important;
        font-size: 1rem !important;
        background: #f8f9fa !important;
        color: #2c3e50 !important;
        transition: all 0.3s ease !important;
    }

    .form-control-lg:focus, .form-select-lg:focus {
        border-color: #3498db !important;
        box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.2) !important;
        background: white !important;
    }

    .form-label {
        font-weight: 600 !important;
        margin-bottom: 0.5rem !important;
        display: flex !important;
        align-items: center !important;
        gap: 0.5rem !important;
    }

    .form-section {
        background: white;
        padding: 1.5rem;
        border-radius: 12px;
        border: 1px solid #e9ecef;
    }

    .form-section h5 {
        color: #2c3e50;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
    }

    .form-text {
        font-size: 0.85rem;
        color: #6c757d !important;
        margin-top: 0.25rem;
    }

    /* Zone d'information actuelle */
    .current-info {
        border-left: 4px solid #87CEEB;
    }

    .info-item {
        margin-bottom: 0.5rem;
    }

    .info-item span.text-muted {
        font-size: 0.85rem;
        display: block;
        margin-bottom: 0.25rem;
    }

    .info-item a {
        color: #3498db !important;
        text-decoration: none !important;
    }

    .info-item a:hover {
        text-decoration: underline !important;
    }

    /* Style des boutons */
    .btn-success {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
        color: white !important;
        border: none !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #218838 0%, #1baa7e 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 15px rgba(40, 167, 69, 0.4) !important;
    }

    .btn-danger {
        background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%) !important;
        color: white !important;
        border: none !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, #c82333 0%, #e8590c 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 15px rgba(220, 53, 69, 0.4) !important;
    }

    .btn-lg {
        padding: 0.75rem 1.5rem !important;
        font-size: 1rem !important;
        border-radius: 12px !important;
    }

    .flex-fill {
        flex: 1 1 0 !important;
    }

    .gap-3 {
        gap: 1rem !important;
    }

    /* Style de la scrollbar */
    .card-body::-webkit-scrollbar {
        width: 8px;
    }

    .card-body::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }

    .card-body::-webkit-scrollbar-thumb {
        background: #87CEEB;
        border-radius: 4px;
    }

    .card-body::-webkit-scrollbar-thumb:hover {
        background: #5fa2e6;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .container {
            padding: 1rem !important;
        }
        
        .card-body {
            padding: 1.5rem !important;
            max-height: 500px !important;
        }
        
        .btn-lg {
            padding: 0.6rem 1rem !important;
            font-size: 0.95rem !important;
        }
        
        .form-control-lg, .form-select-lg {
            padding: 0.6rem 0.8rem !important;
            font-size: 0.95rem !important;
        }
        
        .form-section {
            padding: 1rem !important;
        }
    }
    
    @media (max-width: 576px) {
        .d-flex.gap-3 {
            flex-direction: column !important;
        }
        
        .btn-lg {
            width: 100% !important;
        }
        
        .card-header h4 {
            font-size: 1.25rem !important;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des champs de formulaire
    const formInputs = document.querySelectorAll('.form-control-lg, .form-select-lg');
    
    formInputs.forEach(input => {
        // Focus effect
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-2px)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
        
        // Validation visuelle pour le lien de réunion
        if (input.name.includes('lienReunion')) {
            input.addEventListener('input', function() {
                const urlPattern = /^(https?:\\/\\/)?([\\w-]+\\.)+[\\w-]+(\\/[\\w- .\\/?%&=]*)?\$/;
                if (this.value.trim() === '') {
                    this.style.borderColor = '#dee2e6';
                } else if (urlPattern.test(this.value)) {
                    this.style.borderColor = '#28a745';
                } else {
                    this.style.borderColor = '#dc3545';
                }
            });
        }
    });
    
    // Confirmation avant envoi
    const form = document.getElementById('editSessionForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            const changedFields = Array.from(formInputs).filter(input => {
                return input.value !== input.defaultValue;
            });
            
            if (changedFields.length === 0) {
                e.preventDefault();
                alert('Aucune modification n\\'a été effectuée.');
                return false;
            }
        });
    }
    
    // Formatage automatique de la date
    const dateInput = document.querySelector('input[name*=\"dateHeure\"]');
    if (dateInput) {
        // Si c'est un input datetime-local, on formate la valeur actuelle
        if (dateInput.type === 'datetime-local' && dateInput.value) {
            const date = new Date(dateInput.value);
            const formattedDate = date.toLocaleDateString('fr-FR') + ' ' + date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute:'2-digit'});
            console.log('Date formatée:', formattedDate);
        }
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
        return "session/edit.html.twig";
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
        return array (  426 => 197,  417 => 191,  407 => 183,  400 => 179,  394 => 178,  389 => 175,  386 => 174,  379 => 170,  375 => 169,  370 => 166,  367 => 165,  361 => 161,  356 => 160,  352 => 159,  347 => 156,  345 => 155,  338 => 151,  333 => 150,  328 => 149,  324 => 148,  320 => 147,  310 => 140,  291 => 124,  287 => 123,  282 => 121,  264 => 106,  260 => 105,  255 => 103,  237 => 88,  233 => 87,  213 => 70,  209 => 69,  204 => 67,  186 => 52,  182 => 51,  177 => 49,  164 => 39,  153 => 31,  147 => 27,  137 => 23,  133 => 21,  129 => 20,  126 => 19,  116 => 15,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Session - Fluently{% endblock %}

{% block body %}
<div class=\"min-vh-100\" style=\"background: linear-gradient(90deg, #b44bd8, #5f7ae6); padding-top: 100px; color: #ecf0f1;\">
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-9 col-xl-8\">
                
                <!-- Messages Flash -->
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success alert-dismissible fade show shadow-sm mb-4 border-0\" role=\"alert\">
                        <i class=\"bi bi-check-circle-fill me-2\"></i>
                        <strong>{{ message }}</strong>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                {% endfor %}

                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger alert-dismissible fade show shadow-sm mb-4 border-0\" role=\"alert\">
                        <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                        <strong>{{ message }}</strong>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                {% endfor %}

                <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden\">
                    <div class=\"card-header bg-sky-blue py-4\">
                        <h4 class=\"mb-0 fw-bold text-dark\">
                            ✏️ Modifier la session #{{ session.id }}
                        </h4>
                        <small class=\"text-dark opacity-75\">Modifiez les détails de cette session</small>
                    </div>
                    
                    <!-- Formulaire avec scrolling -->
                    <div class=\"card-body p-0\" style=\"max-height: 700px; overflow-y: auto;\">
                        <div class=\"p-4 p-lg-5\">
                            {{ form_start(form, {'attr': {'id': 'editSessionForm'}}) }}
                            
                            <div class=\"form-section mb-4 pb-3 border-bottom\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-calendar-event me-2\"></i> Date et heure
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                📅 {{ form.dateHeure.vars.label }}
                                            </label>
                                            {{ form_widget(form.dateHeure, {'attr': {'class': 'form-control form-control-lg'}}) }}
                                            {{ form_errors(form.dateHeure) }}
                                            <small class=\"form-text text-muted\">Date et heure de la session</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-section mb-4 pb-3 border-bottom\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-tag me-2\"></i> Statut
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                🏷️ {{ form.statut.vars.label }}
                                            </label>
                                            {{ form_widget(form.statut, {'attr': {'class': 'form-select form-select-lg'}}) }}
                                            {{ form_errors(form.statut) }}
                                            <small class=\"form-text text-muted\">Statut actuel de la session</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-section mb-4 pb-3 border-bottom\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-link-45deg me-2\"></i> Lien de réunion
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                🔗 Lien de réunion (optionnel)
                                            </label>
                                            {{ form_widget(form.lienReunion, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'https://meet.google.com/...'}}) }}
                                            {{ form_errors(form.lienReunion) }}
                                            <small class=\"form-text text-muted\">Lien Google Meet, Zoom, Teams, etc.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-section mb-4 pb-3 border-bottom\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-people me-2\"></i> Groupe
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                👥 {{ form.groupe.vars.label }}
                                            </label>
                                            {{ form_widget(form.groupe, {'attr': {'class': 'form-select form-select-lg'}}) }}
                                            {{ form_errors(form.groupe) }}
                                            <small class=\"form-text text-muted\">Groupe d'apprenants pour cette session</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-section mb-4\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-person-badge me-2\"></i> Tuteur
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                👨‍🏫 {{ form.user.vars.label }}
                                            </label>
                                            {{ form_widget(form.user, {'attr': {'class': 'form-select form-select-lg'}}) }}
                                            {{ form_errors(form.user) }}
                                            <small class=\"form-text text-muted\">Tuteur responsable de cette session</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Informations actuelles (en lecture seule) -->
                            <div class=\"current-info bg-light rounded-3 p-4 mb-4\">
                                <h6 class=\"fw-bold text-dark mb-3\">
                                    <i class=\"bi bi-info-circle me-2\"></i> Informations actuelles
                                </h6>
                                <div class=\"row g-3\">
                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Date et heure:</span>
                                            <strong class=\"d-block\">{{ session.dateHeure ? session.dateHeure|date('d/m/Y H:i') : 'Non définie' }}</strong>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Statut actuel:</span>
                                            <span class=\"badge rounded-pill px-3 py-1 
                                                {% if session.statut == 'planifiée' %}bg-info
                                                {% elseif session.statut == 'en_cours' %}bg-warning text-dark
                                                {% elseif session.statut == 'terminée' %}bg-success
                                                {% else %}bg-secondary{% endif %}\">
                                                {{ session.statut|capitalize }}
                                            </span>
                                        </div>
                                    </div>
                                    {% if session.lienReunion %}
                                    <div class=\"col-12\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Lien de réunion:</span>
                                            <a href=\"{{ session.lienReunion }}\" target=\"_blank\" class=\"d-block text-truncate\">
                                                🔗 {{ session.lienReunion|slice(0, 50) }}{% if session.lienReunion|length > 50 %} {% endif %}
                                            </a>
                                        </div>
                                    </div>
                                    {% endif %}
                                    {% if session.groupe %}
                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Groupe:</span>
                                            <strong class=\"d-block\">{{ session.groupe.nom }}</strong>
                                            <small class=\"text-muted\">ID: {{ session.groupe.id }}</small>
                                        </div>
                                    </div>
                                    {% endif %}
                                    {% if session.user %}
                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Tuteur:</span>
                                            <strong class=\"d-block\">{{ session.user.nom }} {{ session.user.prenom }}</strong>
                                            <small class=\"text-muted\">{{ session.user.email }}</small>
                                        </div>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>

                            <div class=\"mt-5 pt-3 border-top\">
                                <div class=\"d-flex gap-3\">
                                    <button type=\"submit\" class=\"btn btn-success btn-lg flex-fill shadow-sm\">
                                        ✅ Enregistrer les modifications
                                    </button>
                                    <a href=\"{{ path('app_session_index') }}\" class=\"btn btn-danger btn-lg flex-fill shadow-sm\">
                                        ❌ Annuler
                                    </a>
                                </div>
                            </div>
                            
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Même fond que les autres pages */
    body {
        background: linear-gradient(90deg, #b44bd8, #5f7ae6) !important;
        color: #ecf0f1 !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
        border: none !important;
        border-radius: 16px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3) !important;
    }

    /* En-tête en bleu ciel */
    .bg-sky-blue {
        background: linear-gradient(135deg, #87CEEB 0%, #A0D8F3 100%) !important;
        color: #2c3e50 !important;
    }

    /* Style des champs de formulaire */
    .form-control-lg, .form-select-lg {
        border: 2px solid #dee2e6 !important;
        border-radius: 10px !important;
        padding: 0.75rem 1rem !important;
        font-size: 1rem !important;
        background: #f8f9fa !important;
        color: #2c3e50 !important;
        transition: all 0.3s ease !important;
    }

    .form-control-lg:focus, .form-select-lg:focus {
        border-color: #3498db !important;
        box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.2) !important;
        background: white !important;
    }

    .form-label {
        font-weight: 600 !important;
        margin-bottom: 0.5rem !important;
        display: flex !important;
        align-items: center !important;
        gap: 0.5rem !important;
    }

    .form-section {
        background: white;
        padding: 1.5rem;
        border-radius: 12px;
        border: 1px solid #e9ecef;
    }

    .form-section h5 {
        color: #2c3e50;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
    }

    .form-text {
        font-size: 0.85rem;
        color: #6c757d !important;
        margin-top: 0.25rem;
    }

    /* Zone d'information actuelle */
    .current-info {
        border-left: 4px solid #87CEEB;
    }

    .info-item {
        margin-bottom: 0.5rem;
    }

    .info-item span.text-muted {
        font-size: 0.85rem;
        display: block;
        margin-bottom: 0.25rem;
    }

    .info-item a {
        color: #3498db !important;
        text-decoration: none !important;
    }

    .info-item a:hover {
        text-decoration: underline !important;
    }

    /* Style des boutons */
    .btn-success {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
        color: white !important;
        border: none !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #218838 0%, #1baa7e 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 15px rgba(40, 167, 69, 0.4) !important;
    }

    .btn-danger {
        background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%) !important;
        color: white !important;
        border: none !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, #c82333 0%, #e8590c 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 15px rgba(220, 53, 69, 0.4) !important;
    }

    .btn-lg {
        padding: 0.75rem 1.5rem !important;
        font-size: 1rem !important;
        border-radius: 12px !important;
    }

    .flex-fill {
        flex: 1 1 0 !important;
    }

    .gap-3 {
        gap: 1rem !important;
    }

    /* Style de la scrollbar */
    .card-body::-webkit-scrollbar {
        width: 8px;
    }

    .card-body::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }

    .card-body::-webkit-scrollbar-thumb {
        background: #87CEEB;
        border-radius: 4px;
    }

    .card-body::-webkit-scrollbar-thumb:hover {
        background: #5fa2e6;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .container {
            padding: 1rem !important;
        }
        
        .card-body {
            padding: 1.5rem !important;
            max-height: 500px !important;
        }
        
        .btn-lg {
            padding: 0.6rem 1rem !important;
            font-size: 0.95rem !important;
        }
        
        .form-control-lg, .form-select-lg {
            padding: 0.6rem 0.8rem !important;
            font-size: 0.95rem !important;
        }
        
        .form-section {
            padding: 1rem !important;
        }
    }
    
    @media (max-width: 576px) {
        .d-flex.gap-3 {
            flex-direction: column !important;
        }
        
        .btn-lg {
            width: 100% !important;
        }
        
        .card-header h4 {
            font-size: 1.25rem !important;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des champs de formulaire
    const formInputs = document.querySelectorAll('.form-control-lg, .form-select-lg');
    
    formInputs.forEach(input => {
        // Focus effect
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-2px)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
        
        // Validation visuelle pour le lien de réunion
        if (input.name.includes('lienReunion')) {
            input.addEventListener('input', function() {
                const urlPattern = /^(https?:\\/\\/)?([\\w-]+\\.)+[\\w-]+(\\/[\\w- .\\/?%&=]*)?\$/;
                if (this.value.trim() === '') {
                    this.style.borderColor = '#dee2e6';
                } else if (urlPattern.test(this.value)) {
                    this.style.borderColor = '#28a745';
                } else {
                    this.style.borderColor = '#dc3545';
                }
            });
        }
    });
    
    // Confirmation avant envoi
    const form = document.getElementById('editSessionForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            const changedFields = Array.from(formInputs).filter(input => {
                return input.value !== input.defaultValue;
            });
            
            if (changedFields.length === 0) {
                e.preventDefault();
                alert('Aucune modification n\\'a été effectuée.');
                return false;
            }
        });
    }
    
    // Formatage automatique de la date
    const dateInput = document.querySelector('input[name*=\"dateHeure\"]');
    if (dateInput) {
        // Si c'est un input datetime-local, on formate la valeur actuelle
        if (dateInput.type === 'datetime-local' && dateInput.value) {
            const date = new Date(dateInput.value);
            const formattedDate = date.toLocaleDateString('fr-FR') + ' ' + date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute:'2-digit'});
            console.log('Date formatée:', formattedDate);
        }
    }
});
</script>
{% endblock %}", "session/edit.html.twig", "C:\\Users\\sarra\\Desktop\\PIW\\Fluently\\templates\\session\\edit.html.twig");
    }
}
