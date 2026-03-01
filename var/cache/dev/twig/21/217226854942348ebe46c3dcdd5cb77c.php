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

/* session/index.html.twig */
class __TwigTemplate_89393e47730666e9638a6cb9e371ea7d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/index.html.twig"));

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

        yield "Sessions";
        
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
        yield "<br><br><br><br><br>
    <div class=\"container mt-4\">
        <h1 class=\"fw-bold text-primary mb-4 text-center\">
            <i class=\"fa fa-calendar-check-o me-2\"></i> Liste des Sessions
        </h1>
        <div class=\"text-center mb-4\">
    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_index");
        yield "\" class=\"btn btn-lg btn-primary\">
        <i class=\"fa fa-calendar-alt me-2\"></i> Ouvrir le Calendrier
    </a>
    
</div>
        <!-- CDN FullCalendar (pas dans base) -->

<style>
    /* Tuer le loader qui bloque probablement les clics */
    #ftco-loader {
        display: none !important;
        pointer-events: none !important;
        z-index: -1 !important;
    }

    /* Forcer la modale et ses enfants à être cliquables */
    #ratingModal,
    #ratingModal *,
    .modal-backdrop,
    .rating-star,
    #confirm-rating-btn,
    .btn-secondary[data-dismiss=\"modal\"] {
        pointer-events: auto !important;
        z-index: 999999 !important;
    }

    /* Debug : bordure rouge sur étoiles pour confirmer qu'elles sont cliquables */
    .rating-star {
        border: 2px solid red !important;
        box-sizing: border-box;
        cursor: pointer !important;
    }

    /* Forcer le backdrop à laisser passer les clics */
    .modal-backdrop {
        pointer-events: none !important;
    }
</style>
        ";
        // line 51
        yield "        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-body\">
                <form method=\"get\" class=\"row g-3\" id=\"filter-form\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold\">Statut</label>
                        <select name=\"statut\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"planifiée\" ";
        // line 58
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "query", [], "any", false, false, false, 58), "get", ["statut"], "method", false, false, false, 58) == "planifiée")) ? ("selected") : (""));
        yield ">Planifiée</option>
                            <option value=\"en cours\" ";
        // line 59
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "query", [], "any", false, false, false, 59), "get", ["statut"], "method", false, false, false, 59) == "en cours")) ? ("selected") : (""));
        yield ">En cours</option>
                            <option value=\"terminée\" ";
        // line 60
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "query", [], "any", false, false, false, 60), "get", ["statut"], "method", false, false, false, 60) == "terminée")) ? ("selected") : (""));
        yield ">Terminée</option>
                            <option value=\"annulée\" ";
        // line 61
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "query", [], "any", false, false, false, 61), "get", ["statut"], "method", false, false, false, 61) == "annulée")) ? ("selected") : (""));
        yield ">Annulée</option>
                        </select>
                    </div>

                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold\">Groupe</label>
                        <select name=\"groupe\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 70
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 70), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "query", [], "any", false, false, false, 70), "get", ["groupe"], "method", false, false, false, 70) == CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 70))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "nom", [], "any", false, false, false, 71), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "                        </select>
                    </div>

                    <div class=\"col-md-4 d-flex align-items-end\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Filtrer</button>
                    </div>
                </form>
            </div>
        </div>

        ";
        // line 85
        yield "        <div class=\"table-responsive shadow-sm\">
            <table class=\"table table-hover table-bordered table-sm\">
                <thead class=\"table-dark text-center\">
                    <tr>
                        <th>Date & Heure</th>
                        <th>Statut</th>
                        <th>Groupe</th>
                        <th>Réunion</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 97, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 98
            yield "                        <tr>
                            <td class=\"text-center\">";
            // line 99
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateHeure", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateHeure", [], "any", false, false, false, 99), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</td>
                            <td class=\"text-center\">
                                <span class=\"badge rounded-pill px-3 py-2
                                    ";
            // line 102
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "statut", [], "any", false, false, false, 102) == "planifiée")) {
                yield "bg-warning text-dark
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 103
$context["session"], "statut", [], "any", false, false, false, 103) == "en cours")) {
                yield "bg-success text-white
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 104
$context["session"], "statut", [], "any", false, false, false, 104) == "terminée")) {
                yield "bg-secondary text-white
                                    ";
            } else {
                // line 105
                yield "bg-danger text-white";
            }
            yield "\">
                                    ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["session"], "statut", [], "any", false, false, false, 106)), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>";
            // line 109
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "group", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "group", [], "any", false, false, false, 109), "nom", [], "any", false, false, false, 109), "html", null, true)) : ("—"));
            yield "</td>
                            <td class=\"text-center\">
                                ";
            // line 111
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "lienReunion", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 112
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "lienReunion", [], "any", false, false, false, 112), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-sm btn-success\">
                                        <i class=\"fa fa-video me-1\"></i> Rejoindre
                                    </a>
                                ";
            } else {
                // line 116
                yield "                                    —
                                ";
            }
            // line 118
            yield "                            </td>
                            <td class=\"text-center\">
                                <div class=\"btn-group btn-group-sm\">
                                   <button type=\"button\"
                        class=\"btn btn-primary note-session-btn\"
                        data-toggle=\"modal\"
                        data-target=\"#ratingModal\"
                        data-session-id=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 125), "html", null, true);
            yield "\"
                        data-current-rating=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "rating", [], "any", true, true, false, 126)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "rating", [], "any", false, false, false, 126), 0)) : (0)), "html", null, true);
            yield "\"
                        data-rate-url=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 127)]), "html", null, true);
            yield "\">
                    <i class=\"fa fa-star\"></i> <span class=\"note-label\">Note</span>
                </button>

                                    ";
            // line 131
            $context["maReservation"] = null;
            // line 132
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["myReservations"]) || array_key_exists("myReservations", $context) ? $context["myReservations"] : (function () { throw new RuntimeError('Variable "myReservations" does not exist.', 132, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 133
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 133), "id", [], "any", false, false, false, 133) == CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 133))) {
                    // line 134
                    yield "                                            ";
                    $context["maReservation"] = $context["reservation"];
                    // line 135
                    yield "                                        ";
                }
                // line 136
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield "
                                    ";
            // line 138
            if ((($tmp = (isset($context["maReservation"]) || array_key_exists("maReservation", $context) ? $context["maReservation"] : (function () { throw new RuntimeError('Variable "maReservation" does not exist.', 138, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 139
                yield "                                        <span class=\"badge ms-2 px-3 py-2
                                            ";
                // line 140
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["maReservation"]) || array_key_exists("maReservation", $context) ? $context["maReservation"] : (function () { throw new RuntimeError('Variable "maReservation" does not exist.', 140, $this->source); })()), "statut", [], "any", false, false, false, 140) == "confirmée")) {
                    yield "bg-success text-white
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 141
(isset($context["maReservation"]) || array_key_exists("maReservation", $context) ? $context["maReservation"] : (function () { throw new RuntimeError('Variable "maReservation" does not exist.', 141, $this->source); })()), "statut", [], "any", false, false, false, 141) == "en attente")) {
                    yield "bg-warning text-dark
                                            ";
                } else {
                    // line 142
                    yield "bg-danger text-white";
                }
                yield "\">
                                            ";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["maReservation"]) || array_key_exists("maReservation", $context) ? $context["maReservation"] : (function () { throw new RuntimeError('Variable "maReservation" does not exist.', 143, $this->source); })()), "statut", [], "any", false, false, false, 143)), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 146
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new", ["session_id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 146)]), "html", null, true);
                yield "\" class=\"btn btn-success ms-2\">
                                            <i class=\"fa fa-bookmark\"></i> Réserver
                                        </a>
                                    ";
            }
            // line 150
            yield "                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 153
        if (!$context['_iterated']) {
            // line 154
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                <i class=\"fa fa-folder-open fa-2x mb-3 d-block\"></i>
                                Aucune session trouvée
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "                </tbody>
            </table>
        </div>

        ";
        // line 166
        yield "        <div class=\"d-flex justify-content-center mt-4\">
            ";
        // line 167
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 167, $this->source); })()));
        yield "
        </div>

        ";
        // line 171
        yield "        <div class=\"modal fade\" id=\"ratingModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ratingModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-primary text-white\">
                        <h5 class=\"modal-title\" id=\"ratingModalLabel\">Noter cette session</h5>
                        <button type=\"button\" class=\"close text-white\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-center\">
                        <p id=\"modal-session-info\" class=\"mb-4 fw-bold\">Session du ...</p>

                        <div class=\"star-rating mb-4 d-inline-block\">
                            ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 185
            yield "                                <i class=\"fa fa-star fa-3x text-muted rating-star mx-2 cursor-pointer\" 
                                   data-value=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\"></i>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        yield "                        </div>

                        <input type=\"hidden\" id=\"selected-rating\" value=\"0\">
                        <div id=\"rating-message\" class=\"mt-3 fw-bold\" style=\"min-height: 24px;\"></div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                        <button type=\"button\" class=\"btn btn-success\" id=\"confirm-rating-btn\" disabled>Confirmer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
\$(document).ready(function() {

    console.log(\"Script notation chargé\");

    var selectedRating = 0;

    function updateStars(rating) {
        \$('#ratingModal .rating-star').each(function(index) {
            if (index + 1 <= rating) {
                \$(this).removeClass('text-muted').addClass('text-warning');
            } else {
                \$(this).removeClass('text-warning').addClass('text-muted');
            }
        });
    }
";
        // line 219
        yield "
    

    // IMPORTANT : attacher les événements seulement quand la modale est affichée
    \$('#ratingModal').on('shown.bs.modal', function () {
        console.log(\"Modale affichée → clics activés sur étoiles et boutons\");

        // Clic sur étoile
        \$('#ratingModal .rating-star').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();

            selectedRating = parseInt(\$(this).data('value'));
            \$('#selected-rating').val(selectedRating);
            updateStars(selectedRating);
            \$('#confirm-rating-btn').prop('disabled', false);
            console.log(\"Étoile cliquée → \" + selectedRating);
        });

        // Survol
        \$('#ratingModal .rating-star').on('mouseenter', function() {
            var val = parseInt(\$(this).data('value'));
            updateStars(val);
        }).on('mouseleave', function() {
            updateStars(selectedRating);
        });

        // Clic sur Confirmer (test simple pour vérifier)
        \$('#confirm-rating-btn').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log(\"Bouton Confirmer cliqué\");
            alert(\"Confirmer cliqué ! Note sélectionnée : \" + selectedRating);
        });
    });

    // Clic sur Annuler (test)
    \$('.btn-secondary[data-dismiss=\"modal\"]').on('click', function() {
        console.log(\"Annuler cliqué\");
    });
});
</script>
<script>
document.addEventListener(\"DOMContentLoaded\", () => {

    console.log(\"Système de notation v3 – version consolidée\");

    let currentRating = 0;
    let currentSessionId = null;
    let currentRateUrl = null;

    const modal = document.querySelector(\"#ratingModal\");
    if (!modal) {
        console.warn(\"Modal #ratingModal introuvable\");
        return;
    }

    // Fonction commune de mise à jour des étoiles
    function paintStars(rating) {
        const stars = modal.querySelectorAll(\".rating-star\");
        stars.forEach(star => {
            const value = parseInt(star.dataset.value, 10);
            star.classList.toggle(\"text-warning\", value <= rating);
            star.classList.toggle(\"text-muted\",   value >  rating);
        });
    }

    // 1. Quand on clique sur \"Note\" → ouvre la modale et initialise
    document.addEventListener(\"click\", function(e) {
        const btn = e.target.closest(\".note-session-btn\");
        if (!btn) return;

        e.preventDefault();

        currentSessionId = btn.dataset.sessionId;
        currentRateUrl   = btn.dataset.rateUrl;
        currentRating    = parseInt(btn.dataset.currentRating || \"0\", 10);

        // Mise à jour texte modale
        const dateCell = btn.closest(\"tr\")?.querySelector(\"td:first-child\");
        const dateText = dateCell ? dateCell.textContent.trim() : \"\";
        modal.querySelector(\"#modal-session-info\").textContent = dateText ? `Session du \${dateText}` : \"Noter cette session\";

        // Initialisation étoiles + bouton confirmer
        document.querySelector(\"#selected-rating\").value = currentRating;
        document.querySelector(\"#confirm-rating-btn\").disabled = (currentRating === 0);
        paintStars(currentRating);

        document.querySelector(\"#rating-message\").innerHTML = \"\";
    });


    // 2. Clic sur une étoile
    modal.addEventListener(\"click\", function(e) {
        const star = e.target.closest(\".rating-star\");
        if (!star) return;

        currentRating = parseInt(star.dataset.value, 10);
        document.querySelector(\"#selected-rating\").value = currentRating;
        paintStars(currentRating);
        document.querySelector(\"#confirm-rating-btn\").disabled = false;
    });


    // 3. Survol des étoiles (preview)
    modal.addEventListener(\"mouseover\", function(e) {
        const star = e.target.closest(\".rating-star\");
        if (!star) return;
        paintStars(parseInt(star.dataset.value, 10));
    });

    modal.addEventListener(\"mouseout\", function(e) {
        const star = e.target.closest(\".rating-star\");
        if (!star) return;
        paintStars(currentRating);
    });


    // 4. Clic sur \"Confirmer\" → AJAX
    document.querySelector(\"#confirm-rating-btn\").addEventListener(\"click\", function() {
        if (currentRating < 1) return;

        const btn = this;
        btn.disabled = true;
        btn.innerHTML = '<i class=\"fa fa-spinner fa-spin\"></i> Envoi...';

        fetch(currentRateUrl, {
            method: \"POST\",
            headers: {
                \"Content-Type\": \"application/x-www-form-urlencoded\",
                \"X-Requested-With\": \"XMLHttpRequest\"
            },
            body: `rating=\${currentRating}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Mise à jour visuelle du bouton dans le tableau
                const noteBtn = document.querySelector(`.note-session-btn[data-session-id=\"\${currentSessionId}\"]`);
                if (noteBtn) {
                    noteBtn.dataset.currentRating = currentRating;
                    noteBtn.querySelector(\".note-label\").textContent = `\${currentRating}/5`;
                    noteBtn.querySelector(\"i.fa-star\").classList.add(\"text-warning\");
                }

                const msg = modal.querySelector(\"#rating-message\");
                msg.innerHTML = '<i class=\"fa fa-check-circle text-success\"></i> Note enregistrée !';
                msg.className = \"mt-3 fw-bold text-success\";

                setTimeout(() => {
                    bootstrap.Modal.getInstance(modal).hide();
                }, 1100);
            } else {
                throw new Error(data.error || \"Erreur inconnue\");
            }
        })
        .catch(err => {
            const msg = modal.querySelector(\"#rating-message\");
            msg.innerHTML = `<i class=\"fa fa-times-circle text-danger\"></i> \${err.message}`;
            msg.className = \"mt-3 fw-bold text-danger\";
            console.error(err);
        })
        .finally(() => {
            btn.disabled = false;
            btn.textContent = \"Confirmer\";
        });
    });


    // 5. Reset quand la modale se ferme
    modal.addEventListener(\"hidden.bs.modal\", function () {
        currentRating = 0;
        currentSessionId = null;
        currentRateUrl = null;
        paintStars(0);
        document.querySelector(\"#rating-message\").innerHTML = \"\";
        document.querySelector(\"#selected-rating\").value = \"0\";
    });

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
        return "session/index.html.twig";
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
        return array (  464 => 219,  432 => 188,  424 => 186,  421 => 185,  417 => 184,  402 => 171,  396 => 167,  393 => 166,  387 => 161,  375 => 154,  373 => 153,  366 => 150,  358 => 146,  352 => 143,  347 => 142,  342 => 141,  338 => 140,  335 => 139,  333 => 138,  330 => 137,  324 => 136,  321 => 135,  318 => 134,  315 => 133,  310 => 132,  308 => 131,  301 => 127,  297 => 126,  293 => 125,  284 => 118,  280 => 116,  272 => 112,  270 => 111,  265 => 109,  259 => 106,  254 => 105,  249 => 104,  245 => 103,  241 => 102,  235 => 99,  232 => 98,  227 => 97,  213 => 85,  201 => 74,  192 => 71,  185 => 70,  181 => 69,  170 => 61,  166 => 60,  162 => 59,  158 => 58,  149 => 51,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sessions{% endblock %}

{% block body %}
<br><br><br><br><br>
    <div class=\"container mt-4\">
        <h1 class=\"fw-bold text-primary mb-4 text-center\">
            <i class=\"fa fa-calendar-check-o me-2\"></i> Liste des Sessions
        </h1>
        <div class=\"text-center mb-4\">
    <a href=\"{{ path('calendar_index') }}\" class=\"btn btn-lg btn-primary\">
        <i class=\"fa fa-calendar-alt me-2\"></i> Ouvrir le Calendrier
    </a>
    
</div>
        <!-- CDN FullCalendar (pas dans base) -->

<style>
    /* Tuer le loader qui bloque probablement les clics */
    #ftco-loader {
        display: none !important;
        pointer-events: none !important;
        z-index: -1 !important;
    }

    /* Forcer la modale et ses enfants à être cliquables */
    #ratingModal,
    #ratingModal *,
    .modal-backdrop,
    .rating-star,
    #confirm-rating-btn,
    .btn-secondary[data-dismiss=\"modal\"] {
        pointer-events: auto !important;
        z-index: 999999 !important;
    }

    /* Debug : bordure rouge sur étoiles pour confirmer qu'elles sont cliquables */
    .rating-star {
        border: 2px solid red !important;
        box-sizing: border-box;
        cursor: pointer !important;
    }

    /* Forcer le backdrop à laisser passer les clics */
    .modal-backdrop {
        pointer-events: none !important;
    }
</style>
        {# Filtres #}
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-body\">
                <form method=\"get\" class=\"row g-3\" id=\"filter-form\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold\">Statut</label>
                        <select name=\"statut\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"planifiée\" {{ app.request.query.get('statut') == 'planifiée' ? 'selected' : '' }}>Planifiée</option>
                            <option value=\"en cours\" {{ app.request.query.get('statut') == 'en cours' ? 'selected' : '' }}>En cours</option>
                            <option value=\"terminée\" {{ app.request.query.get('statut') == 'terminée' ? 'selected' : '' }}>Terminée</option>
                            <option value=\"annulée\" {{ app.request.query.get('statut') == 'annulée' ? 'selected' : '' }}>Annulée</option>
                        </select>
                    </div>

                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-bold\">Groupe</label>
                        <select name=\"groupe\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            {% for groupe in groupes %}
                                <option value=\"{{ groupe.id }}\" {{ app.request.query.get('groupe') == groupe.id ? 'selected' : '' }}>
                                    {{ groupe.nom }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>

                    <div class=\"col-md-4 d-flex align-items-end\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Filtrer</button>
                    </div>
                </form>
            </div>
        </div>

        {# Tableau #}
        <div class=\"table-responsive shadow-sm\">
            <table class=\"table table-hover table-bordered table-sm\">
                <thead class=\"table-dark text-center\">
                    <tr>
                        <th>Date & Heure</th>
                        <th>Statut</th>
                        <th>Groupe</th>
                        <th>Réunion</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for session in pagination %}
                        <tr>
                            <td class=\"text-center\">{{ session.dateHeure ? session.dateHeure|date('d/m/Y H:i') : '—' }}</td>
                            <td class=\"text-center\">
                                <span class=\"badge rounded-pill px-3 py-2
                                    {% if session.statut == 'planifiée' %}bg-warning text-dark
                                    {% elseif session.statut == 'en cours' %}bg-success text-white
                                    {% elseif session.statut == 'terminée' %}bg-secondary text-white
                                    {% else %}bg-danger text-white{% endif %}\">
                                    {{ session.statut|capitalize }}
                                </span>
                            </td>
                            <td>{{ session.group ? session.group.nom : '—' }}</td>
                            <td class=\"text-center\">
                                {% if session.lienReunion %}
                                    <a href=\"{{ session.lienReunion }}\" target=\"_blank\" class=\"btn btn-sm btn-success\">
                                        <i class=\"fa fa-video me-1\"></i> Rejoindre
                                    </a>
                                {% else %}
                                    —
                                {% endif %}
                            </td>
                            <td class=\"text-center\">
                                <div class=\"btn-group btn-group-sm\">
                                   <button type=\"button\"
                        class=\"btn btn-primary note-session-btn\"
                        data-toggle=\"modal\"
                        data-target=\"#ratingModal\"
                        data-session-id=\"{{ session.id }}\"
                        data-current-rating=\"{{ session.rating|default(0) }}\"
                        data-rate-url=\"{{ path('app_session_rate', {id: session.id}) }}\">
                    <i class=\"fa fa-star\"></i> <span class=\"note-label\">Note</span>
                </button>

                                    {% set maReservation = null %}
                                    {% for reservation in myReservations %}
                                        {% if reservation.session.id == session.id %}
                                            {% set maReservation = reservation %}
                                        {% endif %}
                                    {% endfor %}

                                    {% if maReservation %}
                                        <span class=\"badge ms-2 px-3 py-2
                                            {% if maReservation.statut == 'confirmée' %}bg-success text-white
                                            {% elseif maReservation.statut == 'en attente' %}bg-warning text-dark
                                            {% else %}bg-danger text-white{% endif %}\">
                                            {{ maReservation.statut|capitalize }}
                                        </span>
                                    {% else %}
                                        <a href=\"{{ path('app_reservation_new', {'session_id': session.id}) }}\" class=\"btn btn-success ms-2\">
                                            <i class=\"fa fa-bookmark\"></i> Réserver
                                        </a>
                                    {% endif %}
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                <i class=\"fa fa-folder-open fa-2x mb-3 d-block\"></i>
                                Aucune session trouvée
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        {# Pagination #}
        <div class=\"d-flex justify-content-center mt-4\">
            {{ knp_pagination_render(pagination) }}
        </div>

        {# Modale Bootstrap 4 #}
        <div class=\"modal fade\" id=\"ratingModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ratingModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-primary text-white\">
                        <h5 class=\"modal-title\" id=\"ratingModalLabel\">Noter cette session</h5>
                        <button type=\"button\" class=\"close text-white\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-center\">
                        <p id=\"modal-session-info\" class=\"mb-4 fw-bold\">Session du ...</p>

                        <div class=\"star-rating mb-4 d-inline-block\">
                            {% for i in 1..5 %}
                                <i class=\"fa fa-star fa-3x text-muted rating-star mx-2 cursor-pointer\" 
                                   data-value=\"{{ i }}\"></i>
                            {% endfor %}
                        </div>

                        <input type=\"hidden\" id=\"selected-rating\" value=\"0\">
                        <div id=\"rating-message\" class=\"mt-3 fw-bold\" style=\"min-height: 24px;\"></div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                        <button type=\"button\" class=\"btn btn-success\" id=\"confirm-rating-btn\" disabled>Confirmer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
\$(document).ready(function() {

    console.log(\"Script notation chargé\");

    var selectedRating = 0;

    function updateStars(rating) {
        \$('#ratingModal .rating-star').each(function(index) {
            if (index + 1 <= rating) {
                \$(this).removeClass('text-muted').addClass('text-warning');
            } else {
                \$(this).removeClass('text-warning').addClass('text-muted');
            }
        });
    }
{# Dans la boucle du tableau, remplace le bouton Note par ça : #}

    

    // IMPORTANT : attacher les événements seulement quand la modale est affichée
    \$('#ratingModal').on('shown.bs.modal', function () {
        console.log(\"Modale affichée → clics activés sur étoiles et boutons\");

        // Clic sur étoile
        \$('#ratingModal .rating-star').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();

            selectedRating = parseInt(\$(this).data('value'));
            \$('#selected-rating').val(selectedRating);
            updateStars(selectedRating);
            \$('#confirm-rating-btn').prop('disabled', false);
            console.log(\"Étoile cliquée → \" + selectedRating);
        });

        // Survol
        \$('#ratingModal .rating-star').on('mouseenter', function() {
            var val = parseInt(\$(this).data('value'));
            updateStars(val);
        }).on('mouseleave', function() {
            updateStars(selectedRating);
        });

        // Clic sur Confirmer (test simple pour vérifier)
        \$('#confirm-rating-btn').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log(\"Bouton Confirmer cliqué\");
            alert(\"Confirmer cliqué ! Note sélectionnée : \" + selectedRating);
        });
    });

    // Clic sur Annuler (test)
    \$('.btn-secondary[data-dismiss=\"modal\"]').on('click', function() {
        console.log(\"Annuler cliqué\");
    });
});
</script>
<script>
document.addEventListener(\"DOMContentLoaded\", () => {

    console.log(\"Système de notation v3 – version consolidée\");

    let currentRating = 0;
    let currentSessionId = null;
    let currentRateUrl = null;

    const modal = document.querySelector(\"#ratingModal\");
    if (!modal) {
        console.warn(\"Modal #ratingModal introuvable\");
        return;
    }

    // Fonction commune de mise à jour des étoiles
    function paintStars(rating) {
        const stars = modal.querySelectorAll(\".rating-star\");
        stars.forEach(star => {
            const value = parseInt(star.dataset.value, 10);
            star.classList.toggle(\"text-warning\", value <= rating);
            star.classList.toggle(\"text-muted\",   value >  rating);
        });
    }

    // 1. Quand on clique sur \"Note\" → ouvre la modale et initialise
    document.addEventListener(\"click\", function(e) {
        const btn = e.target.closest(\".note-session-btn\");
        if (!btn) return;

        e.preventDefault();

        currentSessionId = btn.dataset.sessionId;
        currentRateUrl   = btn.dataset.rateUrl;
        currentRating    = parseInt(btn.dataset.currentRating || \"0\", 10);

        // Mise à jour texte modale
        const dateCell = btn.closest(\"tr\")?.querySelector(\"td:first-child\");
        const dateText = dateCell ? dateCell.textContent.trim() : \"\";
        modal.querySelector(\"#modal-session-info\").textContent = dateText ? `Session du \${dateText}` : \"Noter cette session\";

        // Initialisation étoiles + bouton confirmer
        document.querySelector(\"#selected-rating\").value = currentRating;
        document.querySelector(\"#confirm-rating-btn\").disabled = (currentRating === 0);
        paintStars(currentRating);

        document.querySelector(\"#rating-message\").innerHTML = \"\";
    });


    // 2. Clic sur une étoile
    modal.addEventListener(\"click\", function(e) {
        const star = e.target.closest(\".rating-star\");
        if (!star) return;

        currentRating = parseInt(star.dataset.value, 10);
        document.querySelector(\"#selected-rating\").value = currentRating;
        paintStars(currentRating);
        document.querySelector(\"#confirm-rating-btn\").disabled = false;
    });


    // 3. Survol des étoiles (preview)
    modal.addEventListener(\"mouseover\", function(e) {
        const star = e.target.closest(\".rating-star\");
        if (!star) return;
        paintStars(parseInt(star.dataset.value, 10));
    });

    modal.addEventListener(\"mouseout\", function(e) {
        const star = e.target.closest(\".rating-star\");
        if (!star) return;
        paintStars(currentRating);
    });


    // 4. Clic sur \"Confirmer\" → AJAX
    document.querySelector(\"#confirm-rating-btn\").addEventListener(\"click\", function() {
        if (currentRating < 1) return;

        const btn = this;
        btn.disabled = true;
        btn.innerHTML = '<i class=\"fa fa-spinner fa-spin\"></i> Envoi...';

        fetch(currentRateUrl, {
            method: \"POST\",
            headers: {
                \"Content-Type\": \"application/x-www-form-urlencoded\",
                \"X-Requested-With\": \"XMLHttpRequest\"
            },
            body: `rating=\${currentRating}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Mise à jour visuelle du bouton dans le tableau
                const noteBtn = document.querySelector(`.note-session-btn[data-session-id=\"\${currentSessionId}\"]`);
                if (noteBtn) {
                    noteBtn.dataset.currentRating = currentRating;
                    noteBtn.querySelector(\".note-label\").textContent = `\${currentRating}/5`;
                    noteBtn.querySelector(\"i.fa-star\").classList.add(\"text-warning\");
                }

                const msg = modal.querySelector(\"#rating-message\");
                msg.innerHTML = '<i class=\"fa fa-check-circle text-success\"></i> Note enregistrée !';
                msg.className = \"mt-3 fw-bold text-success\";

                setTimeout(() => {
                    bootstrap.Modal.getInstance(modal).hide();
                }, 1100);
            } else {
                throw new Error(data.error || \"Erreur inconnue\");
            }
        })
        .catch(err => {
            const msg = modal.querySelector(\"#rating-message\");
            msg.innerHTML = `<i class=\"fa fa-times-circle text-danger\"></i> \${err.message}`;
            msg.className = \"mt-3 fw-bold text-danger\";
            console.error(err);
        })
        .finally(() => {
            btn.disabled = false;
            btn.textContent = \"Confirmer\";
        });
    });


    // 5. Reset quand la modale se ferme
    modal.addEventListener(\"hidden.bs.modal\", function () {
        currentRating = 0;
        currentSessionId = null;
        currentRateUrl = null;
        paintStars(0);
        document.querySelector(\"#rating-message\").innerHTML = \"\";
        document.querySelector(\"#selected-rating\").value = \"0\";
    });

});

</script>
{% endblock %}", "session/index.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\session\\index.html.twig");
    }
}
