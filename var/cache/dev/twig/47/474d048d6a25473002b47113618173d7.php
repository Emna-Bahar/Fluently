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

/* session/reservations.html.twig */
class __TwigTemplate_b3c72b8e91672586320f029ce47a8f83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/reservations.html.twig"));

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

        yield "Réservations de la Session #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " - Fluently";
        
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
        yield "    <div class=\"reservation-page\">
        <div class=\"container-fluid py-5\" style=\"margin-top: 100px; min-height: 100vh;\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 col-xl-9\">

                    <!-- Messages Flash -->
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            yield "                        <div class=\"alert alert-success alert-dismissible fade show shadow-sm mb-4\" role=\"alert\">
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
            yield "                        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm mb-4\" role=\"alert\">
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
                    <!-- Titre -->
                    <div class=\"text-center mb-5 pb-4\">
                        <h2 class=\"fw-bold text-white mb-3\">Réservations de la Session #";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
        yield "</h2>
                        <p class=\"text-white opacity-75 mb-2\">
                            <i class=\"bi bi-calendar-event me-2\"></i>";
        // line 32
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 32, $this->source); })()), "dateHeure", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 32, $this->source); })()), "dateHeure", [], "any", false, false, false, 32), "d/m/Y à H:i"), "html", null, true)) : ("-"));
        yield "
                        </p>
                        <p class=\"text-white opacity-75\">
                            <i class=\"bi bi-people me-2\"></i>";
        // line 35
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 35, $this->source); })()), "groupe", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 35, $this->source); })()), "groupe", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true)) : ("Sans groupe"));
        yield "
                        </p>
                    </div>

                    <!-- Message + boutons -->
                    <div class=\"text-center mb-5\">
                        ";
        // line 41
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 41, $this->source); })()))) {
            // line 42
            yield "                            <div class=\"alert alert-info border-0 shadow-sm py-4 bg-white\" role=\"alert\">
                                <i class=\"bi bi-info-circle-fill fs-4 me-2\" style=\"color: #7c3aed;\"></i>
                                <span class=\"fs-6\">Aucune réservation pour cette session.</span>
                            </div>
                        ";
        } else {
            // line 47
            yield "                            <div class=\"badge-count mb-4\">
                                <i class=\"bi bi-check-circle-fill me-2\"></i>
                                <strong>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 49, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 49), "html", null, true);
            yield "</strong> réservation";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 49, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 49) > 1)) ? ("s") : (""));
            yield "
                            </div>
                        ";
        }
        // line 52
        yield "
                        <div class=\"d-flex justify-content-center gap-3 flex-wrap mb-4\">
                            <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
        yield "\" class=\"btn btn-light-custom btn-lg px-5 py-3 shadow rounded-pill\">
                                <i class=\"bi bi-arrow-left-circle me-2\"></i> Retour aux sessions
                            </a>
                            <a href=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        yield "\" class=\"btn btn-info-custom btn-lg px-5 py-3 shadow rounded-pill\">
                                <i class=\"bi bi-info-circle me-2\"></i> Détails de la session
                            </a>
                            <a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new", ["session" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
        yield "\" class=\"btn btn-purple-custom btn-lg px-5 py-3 shadow-lg rounded-pill\">
                                <i class=\"bi bi-plus-circle-fill me-2\"></i> Nouvelle réservation
                            </a>
                        </div>
                    </div>

                    <!-- Tableau des réservations -->
                    ";
        // line 67
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 67, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "                        <div class=\"card-custom shadow-lg mb-5\">
                            <div class=\"card-header-custom\">
                                <h5 class=\"mb-0 fw-bold\"><i class=\"bi bi-list-ul me-2\"></i> Liste des réservations</h5>
                            </div>
                            <div class=\"card-body p-0 bg-white\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover mb-0 align-middle\">
                                        <thead class=\"table-head-custom\">
                                            <tr>
                                                <th class=\"px-4 py-3\">ID</th>
                                                <th class=\"px-4 py-3\">Date Réservation</th>
                                                <th class=\"px-4 py-3\">Statut</th>
                                                <th class=\"px-4 py-3\">Apprenant</th>
                                                <th class=\"px-4 py-3 text-center\">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 85, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 86
                yield "                                            <tr>
                                                <td class=\"px-4 py-3\">
                                                    <span class=\"badge badge-custom-purple\">#";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 88), "html", null, true);
                yield "</span>
                                                </td>
                                                <td class=\"px-4 py-3\">
                                                    ";
                // line 91
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 91), "d/m/Y"), "html", null, true)) : ("-"));
                yield "
                                                </td>
                                                <td class=\"px-4 py-3\">
                                                    ";
                // line 94
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 94) == "confirmee")) {
                    // line 95
                    yield "                                                        <span class=\"badge rounded-pill px-3 py-2 bg-success\">Confirmée</span>
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 96
$context["reservation"], "statut", [], "any", false, false, false, 96) == "en_attente")) {
                    // line 97
                    yield "                                                        <span class=\"badge rounded-pill px-3 py-2 bg-warning text-dark\">En attente</span>
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 98
$context["reservation"], "statut", [], "any", false, false, false, 98) == "annulee")) {
                    // line 99
                    yield "                                                        <span class=\"badge rounded-pill px-3 py-2 bg-danger\">Annulée</span>
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 100
$context["reservation"], "statut", [], "any", false, false, false, 100) == "terminee")) {
                    // line 101
                    yield "                                                        <span class=\"badge rounded-pill px-3 py-2 bg-info\">Terminée</span>
                                                    ";
                } else {
                    // line 103
                    yield "                                                        <span class=\"badge rounded-pill px-3 py-2 bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 103), "html", null, true);
                    yield "</span>
                                                    ";
                }
                // line 105
                yield "                                                </td>
                                                <td class=\"px-4 py-3\">
                                                    ";
                // line 107
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 108
                    yield "                                                        <strong>";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, true, false, 108), "prenom", [], "any", true, true, false, 108)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 108), "prenom", [], "any", false, false, false, 108), "html", null, true)) : (""));
                    yield " ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, true, false, 108), "nom", [], "any", true, true, false, 108)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 108), "nom", [], "any", false, false, false, 108), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 108), "email", [], "any", false, false, false, 108), "html", null, true)));
                    yield "</strong>
                                                        <br><small class=\"text-muted\">";
                    // line 109
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 109), "email", [], "any", false, false, false, 109), "html", null, true);
                    yield "</small>
                                                    ";
                } else {
                    // line 111
                    yield "                                                        --
                                                    ";
                }
                // line 113
                yield "                                                </td>
                                                <td class=\"px-4 py-3 text-center\">
                                                    <div class=\"btn-group btn-group-sm\">
                                                        <a href=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                yield "\" class=\"btn btn-outline-info\" title=\"Voir\">
                                                            <i class=\"bi bi-eye\"></i>
                                                        </a>
                                                        <a href=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                yield "\" class=\"btn btn-outline-warning\" title=\"Modifier\">
                                                            <i class=\"bi bi-pencil\"></i>
                                                        </a>
                                                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 122), "html", null, true);
                yield "\" title=\"Supprimer\">
                                                            <i class=\"bi bi-trash\"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal suppression -->
                                            <div class=\"modal fade\" id=\"deleteModal";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 130), "html", null, true);
                yield "\" tabindex=\"-1\">
                                                <div class=\"modal-dialog modal-dialog-centered\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header bg-danger text-white\">
                                                            <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            Supprimer la réservation de <strong>";
                // line 138
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, true, false, 138), "prenom", [], "any", true, true, false, 138)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 138), "prenom", [], "any", false, false, false, 138) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 138), "nom", [], "any", false, false, false, 138)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 138), "email", [], "any", false, false, false, 138), "html", null, true)))) : ("cet apprenant"));
                yield "</strong> ?
                                                            <br><br>
                                                            <small class=\"text-muted\">Cette action est irréversible.</small>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                            <form method=\"post\" action=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                yield "\" style=\"display: inline;\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 145))), "html", null, true);
                yield "\">
                                                                <button type=\"submit\" class=\"btn btn-danger\">
                                                                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- Pagination -->
                            <div class=\"card-footer-custom\">
                                <div class=\"d-flex justify-content-center\">
                                    ";
            // line 163
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 163, $this->source); })()));
            yield "
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 168
        yield "                </div>
            </div>
        </div>
    </div>

    <style>
        .reservation-page {
            background: linear-gradient(135deg, #7c3aed 0%, #a78bfa 50%, #60a5fa 100%);
            min-height: 100vh;
        }
        .badge-count {
            background: white;
            color: #7c3aed;
            padding: 15px 30px;
            border-radius: 50px;
            display: inline-block;
            font-size: 1.1rem;
            box-shadow: 0 4px 15px rgba(124, 58, 237, 0.3);
        }
        .badge-custom-purple {
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 600;
        }
        .btn-purple-custom {
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            color: white;
            border: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-purple-custom:hover {
            background: linear-gradient(135deg, #6d28d9, #8b5cf6);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(124, 58, 237, 0.4);
        }
        .btn-light-custom {
            background: white;
            color: #7c3aed;
            border: 2px solid #7c3aed;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-light-custom:hover {
            background: #7c3aed;
            color: white;
            transform: translateY(-2px);
        }
        .btn-info-custom {
            background: linear-gradient(135deg, #3b82f6, #60a5fa);
            color: white;
            border: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-info-custom:hover {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
            transform: translateY(-2px);
        }
        .card-custom {
            border-radius: 20px;
            overflow: hidden;
            border: none;
        }
        .card-header-custom {
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            color: white;
            padding: 20px 30px;
            border: none;
        }
        .card-footer-custom {
            background: #f9fafb;
            padding: 20px;
            border-top: 2px solid #e5e7eb;
        }
        .table-head-custom {
            background: linear-gradient(135deg, #ede9fe, #ddd6fe);
            color: #5b21b6;
            font-weight: 600;
        }
        .table-hover tbody tr:hover {
            background-color: #f5f3ff;
            cursor: pointer;
        }
        .pagination { gap: 0.5rem; }
        .pagination .page-link {
            border-radius: 10px;
            color: #7c3aed;
            border: 2px solid #7c3aed;
            font-weight: 600;
            padding: 8px 16px;
        }
        .pagination .page-link:hover {
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            color: white;
            border-color: #7c3aed;
        }
        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            border-color: #7c3aed;
        }
    </style>
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
        return "session/reservations.html.twig";
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
        return array (  397 => 168,  389 => 163,  379 => 155,  363 => 145,  359 => 144,  350 => 138,  339 => 130,  328 => 122,  322 => 119,  316 => 116,  311 => 113,  307 => 111,  302 => 109,  295 => 108,  293 => 107,  289 => 105,  283 => 103,  279 => 101,  277 => 100,  274 => 99,  272 => 98,  269 => 97,  267 => 96,  264 => 95,  262 => 94,  256 => 91,  250 => 88,  246 => 86,  242 => 85,  223 => 68,  221 => 67,  211 => 60,  205 => 57,  199 => 54,  195 => 52,  187 => 49,  183 => 47,  176 => 42,  174 => 41,  165 => 35,  159 => 32,  154 => 30,  149 => 27,  139 => 23,  135 => 21,  131 => 20,  128 => 19,  118 => 15,  114 => 13,  110 => 12,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réservations de la Session #{{ session.id }} - Fluently{% endblock %}

{% block body %}
    <div class=\"reservation-page\">
        <div class=\"container-fluid py-5\" style=\"margin-top: 100px; min-height: 100vh;\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 col-xl-9\">

                    <!-- Messages Flash -->
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success alert-dismissible fade show shadow-sm mb-4\" role=\"alert\">
                            <i class=\"bi bi-check-circle-fill me-2\"></i>
                            <strong>{{ message }}</strong>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    {% endfor %}

                    {% for message in app.flashes('error') %}
                        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm mb-4\" role=\"alert\">
                            <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                            <strong>{{ message }}</strong>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    {% endfor %}

                    <!-- Titre -->
                    <div class=\"text-center mb-5 pb-4\">
                        <h2 class=\"fw-bold text-white mb-3\">Réservations de la Session #{{ session.id }}</h2>
                        <p class=\"text-white opacity-75 mb-2\">
                            <i class=\"bi bi-calendar-event me-2\"></i>{{ session.dateHeure ? session.dateHeure|date('d/m/Y à H:i') : '-' }}
                        </p>
                        <p class=\"text-white opacity-75\">
                            <i class=\"bi bi-people me-2\"></i>{{ session.groupe ? session.groupe.nom : 'Sans groupe' }}
                        </p>
                    </div>

                    <!-- Message + boutons -->
                    <div class=\"text-center mb-5\">
                        {% if reservations is empty %}
                            <div class=\"alert alert-info border-0 shadow-sm py-4 bg-white\" role=\"alert\">
                                <i class=\"bi bi-info-circle-fill fs-4 me-2\" style=\"color: #7c3aed;\"></i>
                                <span class=\"fs-6\">Aucune réservation pour cette session.</span>
                            </div>
                        {% else %}
                            <div class=\"badge-count mb-4\">
                                <i class=\"bi bi-check-circle-fill me-2\"></i>
                                <strong>{{ reservations.getTotalItemCount }}</strong> réservation{{ reservations.getTotalItemCount > 1 ? 's' : '' }}
                            </div>
                        {% endif %}

                        <div class=\"d-flex justify-content-center gap-3 flex-wrap mb-4\">
                            <a href=\"{{ path('app_session_index') }}\" class=\"btn btn-light-custom btn-lg px-5 py-3 shadow rounded-pill\">
                                <i class=\"bi bi-arrow-left-circle me-2\"></i> Retour aux sessions
                            </a>
                            <a href=\"{{ path('app_session_show', {'id': session.id}) }}\" class=\"btn btn-info-custom btn-lg px-5 py-3 shadow rounded-pill\">
                                <i class=\"bi bi-info-circle me-2\"></i> Détails de la session
                            </a>
                            <a href=\"{{ path('app_reservation_new', {'session': session.id}) }}\" class=\"btn btn-purple-custom btn-lg px-5 py-3 shadow-lg rounded-pill\">
                                <i class=\"bi bi-plus-circle-fill me-2\"></i> Nouvelle réservation
                            </a>
                        </div>
                    </div>

                    <!-- Tableau des réservations -->
                    {% if reservations is not empty %}
                        <div class=\"card-custom shadow-lg mb-5\">
                            <div class=\"card-header-custom\">
                                <h5 class=\"mb-0 fw-bold\"><i class=\"bi bi-list-ul me-2\"></i> Liste des réservations</h5>
                            </div>
                            <div class=\"card-body p-0 bg-white\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover mb-0 align-middle\">
                                        <thead class=\"table-head-custom\">
                                            <tr>
                                                <th class=\"px-4 py-3\">ID</th>
                                                <th class=\"px-4 py-3\">Date Réservation</th>
                                                <th class=\"px-4 py-3\">Statut</th>
                                                <th class=\"px-4 py-3\">Apprenant</th>
                                                <th class=\"px-4 py-3 text-center\">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% for reservation in reservations %}
                                            <tr>
                                                <td class=\"px-4 py-3\">
                                                    <span class=\"badge badge-custom-purple\">#{{ reservation.id }}</span>
                                                </td>
                                                <td class=\"px-4 py-3\">
                                                    {{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y') : '-' }}
                                                </td>
                                                <td class=\"px-4 py-3\">
                                                    {% if reservation.statut == 'confirmee' %}
                                                        <span class=\"badge rounded-pill px-3 py-2 bg-success\">Confirmée</span>
                                                    {% elseif reservation.statut == 'en_attente' %}
                                                        <span class=\"badge rounded-pill px-3 py-2 bg-warning text-dark\">En attente</span>
                                                    {% elseif reservation.statut == 'annulee' %}
                                                        <span class=\"badge rounded-pill px-3 py-2 bg-danger\">Annulée</span>
                                                    {% elseif reservation.statut == 'terminee' %}
                                                        <span class=\"badge rounded-pill px-3 py-2 bg-info\">Terminée</span>
                                                    {% else %}
                                                        <span class=\"badge rounded-pill px-3 py-2 bg-secondary\">{{ reservation.statut }}</span>
                                                    {% endif %}
                                                </td>
                                                <td class=\"px-4 py-3\">
                                                    {% if reservation.user %}
                                                        <strong>{{ reservation.user.prenom is defined ? reservation.user.prenom : '' }} {{ reservation.user.nom is defined ? reservation.user.nom : reservation.user.email }}</strong>
                                                        <br><small class=\"text-muted\">{{ reservation.user.email }}</small>
                                                    {% else %}
                                                        --
                                                    {% endif %}
                                                </td>
                                                <td class=\"px-4 py-3 text-center\">
                                                    <div class=\"btn-group btn-group-sm\">
                                                        <a href=\"{{ path('app_reservation_show', {'id': reservation.id}) }}\" class=\"btn btn-outline-info\" title=\"Voir\">
                                                            <i class=\"bi bi-eye\"></i>
                                                        </a>
                                                        <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\" class=\"btn btn-outline-warning\" title=\"Modifier\">
                                                            <i class=\"bi bi-pencil\"></i>
                                                        </a>
                                                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ reservation.id }}\" title=\"Supprimer\">
                                                            <i class=\"bi bi-trash\"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal suppression -->
                                            <div class=\"modal fade\" id=\"deleteModal{{ reservation.id }}\" tabindex=\"-1\">
                                                <div class=\"modal-dialog modal-dialog-centered\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header bg-danger text-white\">
                                                            <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            Supprimer la réservation de <strong>{{ reservation.user ? (reservation.user.prenom is defined ? reservation.user.prenom ~ ' ' ~ reservation.user.nom : reservation.user.email) : 'cet apprenant' }}</strong> ?
                                                            <br><br>
                                                            <small class=\"text-muted\">Cette action est irréversible.</small>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                            <form method=\"post\" action=\"{{ path('app_reservation_delete', {'id': reservation.id}) }}\" style=\"display: inline;\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reservation.id) }}\">
                                                                <button type=\"submit\" class=\"btn btn-danger\">
                                                                    <i class=\"bi bi-trash me-1\"></i> Supprimer
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- Pagination -->
                            <div class=\"card-footer-custom\">
                                <div class=\"d-flex justify-content-center\">
                                    {{ knp_pagination_render(reservations) }}
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <style>
        .reservation-page {
            background: linear-gradient(135deg, #7c3aed 0%, #a78bfa 50%, #60a5fa 100%);
            min-height: 100vh;
        }
        .badge-count {
            background: white;
            color: #7c3aed;
            padding: 15px 30px;
            border-radius: 50px;
            display: inline-block;
            font-size: 1.1rem;
            box-shadow: 0 4px 15px rgba(124, 58, 237, 0.3);
        }
        .badge-custom-purple {
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 600;
        }
        .btn-purple-custom {
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            color: white;
            border: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-purple-custom:hover {
            background: linear-gradient(135deg, #6d28d9, #8b5cf6);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(124, 58, 237, 0.4);
        }
        .btn-light-custom {
            background: white;
            color: #7c3aed;
            border: 2px solid #7c3aed;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-light-custom:hover {
            background: #7c3aed;
            color: white;
            transform: translateY(-2px);
        }
        .btn-info-custom {
            background: linear-gradient(135deg, #3b82f6, #60a5fa);
            color: white;
            border: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-info-custom:hover {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
            transform: translateY(-2px);
        }
        .card-custom {
            border-radius: 20px;
            overflow: hidden;
            border: none;
        }
        .card-header-custom {
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            color: white;
            padding: 20px 30px;
            border: none;
        }
        .card-footer-custom {
            background: #f9fafb;
            padding: 20px;
            border-top: 2px solid #e5e7eb;
        }
        .table-head-custom {
            background: linear-gradient(135deg, #ede9fe, #ddd6fe);
            color: #5b21b6;
            font-weight: 600;
        }
        .table-hover tbody tr:hover {
            background-color: #f5f3ff;
            cursor: pointer;
        }
        .pagination { gap: 0.5rem; }
        .pagination .page-link {
            border-radius: 10px;
            color: #7c3aed;
            border: 2px solid #7c3aed;
            font-weight: 600;
            padding: 8px 16px;
        }
        .pagination .page-link:hover {
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            color: white;
            border-color: #7c3aed;
        }
        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #7c3aed, #a78bfa);
            border-color: #7c3aed;
        }
    </style>
{% endblock %}", "session/reservations.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\session\\reservations.html.twig");
    }
}
