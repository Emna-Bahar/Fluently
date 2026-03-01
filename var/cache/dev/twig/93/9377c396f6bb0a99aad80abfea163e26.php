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

/* reservation/edit.html.twig */
class __TwigTemplate_52744e8dd12c5f1fa4937b7a06d31b7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

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

        yield "Modifier Réservation - Fluently";
        
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
                            ✏️ Modifier la réservation #";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        yield "
                        </h4>
                        <small class=\"text-dark opacity-75\">Modifiez les détails de cette réservation</small>
                    </div>
                    
                    <!-- Formulaire avec scrolling -->
                    <div class=\"card-body p-0\" style=\"max-height: 700px; overflow-y: auto;\">
                        <div class=\"p-4 p-lg-5\">
                            ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["id" => "editReservationForm"]]);
        yield "
                            
                            <div class=\"form-section mb-4 pb-3 border-bottom\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-calendar-week me-2\"></i> Informations de réservation
                                </h5>
                                <div class=\"row g-3\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                📅 ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "dateReservation", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "label", [], "any", false, false, false, 49), "html", null, true);
        yield "
                                            </label>
                                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "dateReservation", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        yield "
                                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "dateReservation", [], "any", false, false, false, 52), 'errors');
        yield "
                                            <small class=\"form-text text-muted\">Date à laquelle la réservation a été effectuée</small>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                🏷️ ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "statut", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59), "html", null, true);
        yield "
                                            </label>
                                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "statut", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                                            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "statut", [], "any", false, false, false, 62), 'errors');
        yield "
                                            <small class=\"form-text text-muted\">Statut actuel de la réservation</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-section mb-4 pb-3 border-bottom\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-calendar-event me-2\"></i> Session associée
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                🎯 ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "session", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "label", [], "any", false, false, false, 77), "html", null, true);
        yield "
                                            </label>
                                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "session", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "session", [], "any", false, false, false, 80), 'errors');
        yield "
                                            <small class=\"form-text text-muted\">Sélectionnez la session à laquelle cette réservation est liée</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-section mb-4\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-person me-2\"></i> Informations de l'apprenant
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                👤 ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "label", [], "any", false, false, false, 95), "html", null, true);
        yield "
                                            </label>
                                            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-select form-select-lg"]]);
        yield "
                                            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), 'errors');
        yield "
                                            <small class=\"form-text text-muted\">Apprenant qui a effectué la réservation</small>
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
                                            <span class=\"text-muted\">Date de création:</span>
                                            <strong class=\"d-block\">";
        // line 114
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 114, $this->source); })()), "dateReservation", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 114, $this->source); })()), "dateReservation", [], "any", false, false, false, 114), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "</strong>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Statut actuel:</span>
                                            <span class=\"badge rounded-pill px-3 py-1 
                                                ";
        // line 121
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 121, $this->source); })()), "statut", [], "any", false, false, false, 121) == "confirmee")) {
            yield "bg-success
                                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 122
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 122, $this->source); })()), "statut", [], "any", false, false, false, 122) == "en_attente")) {
            yield "bg-warning text-dark
                                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 123
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 123, $this->source); })()), "statut", [], "any", false, false, false, 123) == "annulee")) {
            yield "bg-danger
                                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 124
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 124, $this->source); })()), "statut", [], "any", false, false, false, 124) == "terminee")) {
            yield "bg-info
                                                ";
        } else {
            // line 125
            yield "bg-secondary";
        }
        yield "\">
                                                ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 126, $this->source); })()), "statut", [], "any", false, false, false, 126)), "html", null, true);
        yield "
                                            </span>
                                        </div>
                                    </div>
                                    ";
        // line 130
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 130, $this->source); })()), "session", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Session associée:</span>
                                            <strong class=\"d-block\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 134, $this->source); })()), "session", [], "any", false, false, false, 134), "dateHeure", [], "any", false, false, false, 134), "d/m/Y H:i"), "html", null, true);
            yield "</strong>
                                            <small class=\"text-muted\">";
            // line 135
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 135, $this->source); })()), "session", [], "any", false, false, false, 135), "groupe", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 135, $this->source); })()), "session", [], "any", false, false, false, 135), "groupe", [], "any", false, false, false, 135), "nom", [], "any", false, false, false, 135), "html", null, true)) : ("Sans groupe"));
            yield "</small>
                                        </div>
                                    </div>
                                    ";
        }
        // line 139
        yield "                                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 140
            yield "                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Apprenant:</span>
                                            <strong class=\"d-block\">
                                                ";
            // line 144
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "user", [], "any", false, true, false, 144), "prenom", [], "any", true, true, false, 144)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 144, $this->source); })()), "user", [], "any", false, false, false, 144), "prenom", [], "any", false, false, false, 144), "html", null, true)) : (""));
            yield " 
                                                ";
            // line 145
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "user", [], "any", false, true, false, 145), "nom", [], "any", true, true, false, 145)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "nom", [], "any", false, false, false, 145), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "email", [], "any", false, false, false, 145), "html", null, true)));
            yield "
                                            </strong>
                                        </div>
                                    </div>
                                    ";
        }
        // line 150
        yield "                                </div>
                            </div>

                            <div class=\"mt-5 pt-3 border-top\">
                                <div class=\"d-flex gap-3\">
                                    <button type=\"submit\" class=\"btn btn-success btn-lg flex-fill shadow-sm\">
                                        ✅ Enregistrer les modifications
                                    </button>
                                    <a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-danger btn-lg flex-fill shadow-sm\">
                                        ❌ Annuler
                                    </a>
                                </div>
                            </div>
                            
                            ";
        // line 164
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), 'form_end');
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
        
        // Validation visuelle
        input.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                this.style.borderColor = '#28a745';
            } else {
                this.style.borderColor = '#dee2e6';
            }
        });
    });
    
    // Confirmation avant envoi
    const form = document.getElementById('editReservationForm');
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
        return "reservation/edit.html.twig";
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
        return array (  375 => 164,  366 => 158,  356 => 150,  348 => 145,  344 => 144,  338 => 140,  335 => 139,  328 => 135,  324 => 134,  319 => 131,  317 => 130,  310 => 126,  305 => 125,  300 => 124,  296 => 123,  292 => 122,  288 => 121,  278 => 114,  259 => 98,  255 => 97,  250 => 95,  232 => 80,  228 => 79,  223 => 77,  205 => 62,  201 => 61,  196 => 59,  186 => 52,  182 => 51,  177 => 49,  164 => 39,  153 => 31,  147 => 27,  137 => 23,  133 => 21,  129 => 20,  126 => 19,  116 => 15,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Réservation - Fluently{% endblock %}

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
                            ✏️ Modifier la réservation #{{ reservation.id }}
                        </h4>
                        <small class=\"text-dark opacity-75\">Modifiez les détails de cette réservation</small>
                    </div>
                    
                    <!-- Formulaire avec scrolling -->
                    <div class=\"card-body p-0\" style=\"max-height: 700px; overflow-y: auto;\">
                        <div class=\"p-4 p-lg-5\">
                            {{ form_start(form, {'attr': {'id': 'editReservationForm'}}) }}
                            
                            <div class=\"form-section mb-4 pb-3 border-bottom\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-calendar-week me-2\"></i> Informations de réservation
                                </h5>
                                <div class=\"row g-3\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                📅 {{ form.dateReservation.vars.label }}
                                            </label>
                                            {{ form_widget(form.dateReservation, {'attr': {'class': 'form-control form-control-lg'}}) }}
                                            {{ form_errors(form.dateReservation) }}
                                            <small class=\"form-text text-muted\">Date à laquelle la réservation a été effectuée</small>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                🏷️ {{ form.statut.vars.label }}
                                            </label>
                                            {{ form_widget(form.statut, {'attr': {'class': 'form-select form-select-lg'}}) }}
                                            {{ form_errors(form.statut) }}
                                            <small class=\"form-text text-muted\">Statut actuel de la réservation</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-section mb-4 pb-3 border-bottom\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-calendar-event me-2\"></i> Session associée
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                🎯 {{ form.session.vars.label }}
                                            </label>
                                            {{ form_widget(form.session, {'attr': {'class': 'form-select form-select-lg'}}) }}
                                            {{ form_errors(form.session) }}
                                            <small class=\"form-text text-muted\">Sélectionnez la session à laquelle cette réservation est liée</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-section mb-4\">
                                <h5 class=\"fw-bold mb-3 text-dark\">
                                    <i class=\"bi bi-person me-2\"></i> Informations de l'apprenant
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label class=\"form-label fw-bold text-dark\">
                                                👤 {{ form.user.vars.label }}
                                            </label>
                                            {{ form_widget(form.user, {'attr': {'class': 'form-select form-select-lg'}}) }}
                                            {{ form_errors(form.user) }}
                                            <small class=\"form-text text-muted\">Apprenant qui a effectué la réservation</small>
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
                                            <span class=\"text-muted\">Date de création:</span>
                                            <strong class=\"d-block\">{{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y') : 'Non définie' }}</strong>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Statut actuel:</span>
                                            <span class=\"badge rounded-pill px-3 py-1 
                                                {% if reservation.statut == 'confirmee' %}bg-success
                                                {% elseif reservation.statut == 'en_attente' %}bg-warning text-dark
                                                {% elseif reservation.statut == 'annulee' %}bg-danger
                                                {% elseif reservation.statut == 'terminee' %}bg-info
                                                {% else %}bg-secondary{% endif %}\">
                                                {{ reservation.statut|capitalize }}
                                            </span>
                                        </div>
                                    </div>
                                    {% if reservation.session %}
                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Session associée:</span>
                                            <strong class=\"d-block\">{{ reservation.session.dateHeure|date('d/m/Y H:i') }}</strong>
                                            <small class=\"text-muted\">{{ reservation.session.groupe ? reservation.session.groupe.nom : 'Sans groupe' }}</small>
                                        </div>
                                    </div>
                                    {% endif %}
                                    {% if reservation.user %}
                                    <div class=\"col-md-6\">
                                        <div class=\"info-item\">
                                            <span class=\"text-muted\">Apprenant:</span>
                                            <strong class=\"d-block\">
                                                {{ reservation.user.prenom is defined ? reservation.user.prenom : '' }} 
                                                {{ reservation.user.nom is defined ? reservation.user.nom : reservation.user.email }}
                                            </strong>
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
                                    <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-danger btn-lg flex-fill shadow-sm\">
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
        
        // Validation visuelle
        input.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                this.style.borderColor = '#28a745';
            } else {
                this.style.borderColor = '#dee2e6';
            }
        });
    });
    
    // Confirmation avant envoi
    const form = document.getElementById('editReservationForm');
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
});
</script>
{% endblock %}", "reservation/edit.html.twig", "C:\\Users\\MSI\\Desktop\\5idma\\Fluently\\templates\\reservation\\edit.html.twig");
    }
}
