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

/* reservation/index.html.twig */
class __TwigTemplate_185e810b15f021b30534bd4f2e48c2b6 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

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

        yield "Reservations - Fluently";
        
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
        yield "    <div class=\"min-vh-100\" style=\"background: linear-gradient(90deg, #b44bd8, #5f7ae6); padding-top: 100px; color: #ecf0f1;\">
        <div class=\"container py-5\">
            <h2 class=\"fw-bold text-center mb-4\" style=\"color: #fdfeff;\">
                📋 Gerez les inscriptions aux sessions
            </h2>

            <!-- Messages Flash -->
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["success"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "                <div class=\"alert alert-success alert-dismissible fade show shadow-sm mb-4\" role=\"alert\">
                    <i class=\"bi bi-check-circle-fill me-2\"></i>
                    <strong>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["error"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            yield "                <div class=\"alert alert-danger alert-dismissible fade show shadow-sm mb-4\" role=\"alert\">
                    <i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
                    <strong>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
            <!-- Filtres -->
            <div class=\"card shadow-lg border-0 rounded-4 mb-3 bg-white text-dark\">
                <div class=\"card-body p-4\">
                    <div class=\"row g-3\">
                        <!-- Message badge -->
                        <div class=\"col-lg-6\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"badge-count p-3 rounded-3 shadow-sm\">
                                    <i class=\"bi bi-person-check-fill me-2\" style=\"color: #3498db;\"></i>
                                    <strong>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 38, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 38), "html", null, true);
        yield "</strong> reservation";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 38, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 38) > 1)) ? ("s") : (""));
        yield "
                                </div>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class=\"col-lg-6\">
                            <div class=\"d-flex gap-3\">
                                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
        yield "\" class=\"btn btn-info btn-md shadow-sm flex-fill\">
                                    👁️ Voir les sessions
                                </a>
                                <button type=\"button\" class=\"btn btn-primary btn-md shadow-sm flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#createReservationModal\">
                                    ➕ Nouvelle reservation
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <!-- Tableau -->
            <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden bg-white text-dark\">
                <div class=\"card-header bg-sky-blue text-dark py-3\">
                    <h5 class=\"mb-0 fw-bold\">
                        <i class=\"bi bi-list-ul me-2\"></i> Reservations enregistrees
                    </h5>
                </div>
                <div class=\"card-body p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-sm mb-0 align-middle\">
                            <thead class=\"sky-blue-header\">
                                <tr>
                                    <th class=\"px-4 py-3\" style=\"width: 8%;\">ID</th>
                                    <th class=\"px-4 py-3\" style=\"width: 15%;\">Date Reservation</th>
                                    <th class=\"px-4 py-3\" style=\"width: 15%;\">Statut</th>
                                    <th class=\"px-4 py-3\" style=\"width: 25%;\">Session</th>
                                    <th class=\"px-4 py-3\" style=\"width: 22%;\">Apprenant</th>
                                    <th class=\"text-center px-4 py-3\" style=\"width: 15%;\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 80
            yield "                                <tr class=\"align-middle\">
                                    <td class=\"px-4 py-3\">
                                        <span class=\"badge rounded-pill px-3 py-2\" style=\"background: linear-gradient(135deg, #9370DB 0%, #B19CD9 100%); color: white;\">
                                            #";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 83), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td class=\"px-4 py-3 small\">
                                        <i class=\"bi bi-calendar me-1 text-primary\"></i>
                                        ";
            // line 88
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 88), "d/m/Y"), "html", null, true)) : ("-"));
            yield "
                                    </td>
                                    <td class=\"px-4 py-3\">
                                        ";
            // line 91
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 91) == "confirmee")) {
                // line 92
                yield "                                            <span class=\"badge rounded-pill px-3 py-2 bg-success\">Confirmée</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 93
$context["reservation"], "statut", [], "any", false, false, false, 93) == "en_attente")) {
                // line 94
                yield "                                            <span class=\"badge rounded-pill px-3 py-2 bg-warning text-dark\">En attente</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 95
$context["reservation"], "statut", [], "any", false, false, false, 95) == "annulee")) {
                // line 96
                yield "                                            <span class=\"badge rounded-pill px-3 py-2 bg-danger\">Annulée</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 97
$context["reservation"], "statut", [], "any", false, false, false, 97) == "terminee")) {
                // line 98
                yield "                                            <span class=\"badge rounded-pill px-3 py-2 bg-info\">Terminée</span>
                                        ";
            } else {
                // line 100
                yield "                                            <span class=\"badge rounded-pill px-3 py-2 bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 100), "html", null, true);
                yield "</span>
                                        ";
            }
            // line 102
            yield "                                    </td>
                                    <td class=\"px-4 py-3 small\">
                                        ";
            // line 104
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "                                            <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 105), "dateHeure", [], "any", false, false, false, 105), "d/m/Y H:i"), "html", null, true);
                yield "</strong><br>
                                            <small class=\"text-muted\">";
                // line 106
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 106), "groupe", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "session", [], "any", false, false, false, 106), "groupe", [], "any", false, false, false, 106), "nom", [], "any", false, false, false, 106), "html", null, true)) : ("Sans groupe"));
                yield "</small>
                                        ";
            } else {
                // line 108
                yield "                                            --
                                        ";
            }
            // line 110
            yield "                                    </td>
                                    <td class=\"px-4 py-3 small\">
                                        ";
            // line 112
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 113
                yield "                                            <i class=\"bi bi-person me-1 text-primary\"></i>
                                            ";
                // line 114
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, true, false, 114), "prenom", [], "any", true, true, false, 114)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 114), "prenom", [], "any", false, false, false, 114), "html", null, true)) : (""));
                yield " ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, true, false, 114), "nom", [], "any", true, true, false, 114)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 114), "nom", [], "any", false, false, false, 114), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 114), "email", [], "any", false, false, false, 114), "html", null, true)));
                yield "
                                        ";
            } else {
                // line 116
                yield "                                            --
                                        ";
            }
            // line 118
            yield "                                    </td>
                                    <td class=\"px-4 py-3 text-center\">
                                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                                            <a href=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-see\" title=\"Voir détails\">
                                                👁️ Voir
                                            </a>
                                            <a href=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 125)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-modify\" title=\"Modifier reservation\">
                                                ✏️ Modifier
                                            </a>
                                            <button type=\"button\" class=\"btn btn-delete\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 129), "html", null, true);
            yield "\" title=\"Supprimer\">
                                                🗑️
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal suppression -->
                                <div class=\"modal fade\" id=\"deleteModal";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 137), "html", null, true);
            yield "\" tabindex=\"-1\">
                                    <div class=\"modal-dialog modal-dialog-centered\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header bg-danger text-white\">
                                                <h5 class=\"modal-title\">Confirmation de suppression</h5>
                                                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                Supprimer la reservation de <strong>";
            // line 145
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, true, false, 145), "prenom", [], "any", true, true, false, 145)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 145), "prenom", [], "any", false, false, false, 145) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 145), "nom", [], "any", false, false, false, 145)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 145), "email", [], "any", false, false, false, 145), "html", null, true)))) : ("cet apprenant"));
            yield "</strong> ?
                                                <br><br>
                                                <small class=\"text-muted\">Cette action est irreversible.</small>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                                <form method=\"post\" action=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 151)]), "html", null, true);
            yield "\" style=\"display: inline;\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 152))), "html", null, true);
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
        // line 162
        yield "                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"card-footer bg-light border-0 py-3\">
                    <div class=\"d-flex justify-content-center\">
                        ";
        // line 169
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 169, $this->source); })()));
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL CREATION -->
    <div class=\"modal fade\" id=\"createReservationModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\" style=\"max-width: 700px;\">
            <div class=\"modal-content\">
                ";
        // line 180
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 180, $this->source); })()), 'form_start', ["attr" => ["id" => "reservationForm"]]);
        yield "
                
                <div class=\"modal-header bg-sky-blue text-dark py-4\">
                    <h5 class=\"modal-title fw-bold\">
                        <i class=\"bi bi-plus-circle me-2\"></i> Creer une nouvelle reservation
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>

                <div class=\"modal-body p-5 bg-white\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <label class=\"form-label fw-bold\">";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 192, $this->source); })()), "dateReservation", [], "any", false, false, false, 192), "vars", [], "any", false, false, false, 192), "label", [], "any", false, false, false, 192), "html", null, true);
        yield "</label>
                            ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 193, $this->source); })()), "dateReservation", [], "any", false, false, false, 193), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 194, $this->source); })()), "dateReservation", [], "any", false, false, false, 194), 'errors');
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"form-label fw-bold\">";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 197, $this->source); })()), "statut", [], "any", false, false, false, 197), "vars", [], "any", false, false, false, 197), "label", [], "any", false, false, false, 197), "html", null, true);
        yield "</label>
                            ";
        // line 198
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 198, $this->source); })()), "statut", [], "any", false, false, false, 198), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 199, $this->source); })()), "statut", [], "any", false, false, false, 199), 'errors');
        yield "
                        </div>
                        <div class=\"col-12\">
                            <label class=\"form-label fw-bold\">";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 202, $this->source); })()), "session", [], "any", false, false, false, 202), "vars", [], "any", false, false, false, 202), "label", [], "any", false, false, false, 202), "html", null, true);
        yield "</label>
                            ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 203, $this->source); })()), "session", [], "any", false, false, false, 203), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            ";
        // line 204
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 204, $this->source); })()), "session", [], "any", false, false, false, 204), 'errors');
        yield "
                        </div>
                        <div class=\"col-12\">
                            <label class=\"form-label fw-bold\">";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 207, $this->source); })()), "user", [], "any", false, false, false, 207), "vars", [], "any", false, false, false, 207), "label", [], "any", false, false, false, 207), "html", null, true);
        yield "</label>
                            ";
        // line 208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 208, $this->source); })()), "user", [], "any", false, false, false, 208), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 209, $this->source); })()), "user", [], "any", false, false, false, 209), 'errors');
        yield "
                        </div>
                    </div>
                </div>

                <div class=\"modal-footer border-top-0 bg-white py-4 px-5\">
                    <div class=\"d-flex gap-3 w-100\">
                        <button type=\"button\" class=\"btn btn-secondary flex-fill\" data-bs-dismiss=\"modal\">
                            ❌ Annuler
                        </button>
                        <button type=\"submit\" class=\"btn btn-primary flex-fill\">
                            ✅ Creer
                        </button>
                    </div>
                </div>

                ";
        // line 225
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_create"]) || array_key_exists("form_create", $context) ? $context["form_create"] : (function () { throw new RuntimeError('Variable "form_create" does not exist.', 225, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 231
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 232
        yield "<style>
    body {
        background: linear-gradient(90deg, #b44bd8, #5f7ae6) !important;
        color: #ecf0f1 !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h2 {
        color: #fdfeff !important;
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        font-size: 2rem;
    }

    .card {
        border: none !important;
        border-radius: 16px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3) !important;
        overflow: hidden;
    }

    /* En-tête de table en bleu ciel */
    .sky-blue-header {
        background: linear-gradient(135deg, #87CEEB 0%, #A0D8F3 50%, #87CEEB 100%) !important;
        color: #2c3e50 !important;
        border: none !important;
    }

    .sky-blue-header th {
        color: #2c3e50 !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
        border-bottom: 3px solid rgba(44, 62, 80, 0.15) !important;
        padding: 16px 20px !important;
        vertical-align: middle !important;
    }

    /* Header spécifique pour la modal et card */
    .bg-sky-blue {
        background: linear-gradient(135deg, #87CEEB 0%, #A0D8F3 100%) !important;
        color: #2c3e50 !important;
    }

    /* Badge count */
    .badge-count {
        background: white;
        border: 2px solid #87CEEB;
        font-size: 1.1rem;
        font-weight: 600;
    }

    /* Boutons d'action avec emojis et couleurs différentes */
    .btn-see {
        background: linear-gradient(135deg, #3498db 0%, #2ecc71 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 8px !important;
        padding: 0.4rem 0.8rem !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 3px 8px rgba(52, 152, 219, 0.25) !important;
        margin: 0 2px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 5px !important;
    }

    .btn-modify {
        background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 8px !important;
        padding: 0.4rem 0.8rem !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 3px 8px rgba(155, 89, 182, 0.25) !important;
        margin: 0 2px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 5px !important;
    }

    .btn-delete {
        background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 8px !important;
        padding: 0.4rem 0.8rem !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 3px 8px rgba(231, 76, 60, 0.25) !important;
        margin: 0 2px !important;
    }

    .btn-see:hover {
        background: linear-gradient(135deg, #2980b9 0%, #27ae60 100%) !important;
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 6px 15px rgba(52, 152, 219, 0.4) !important;
    }

    .btn-modify:hover {
        background: linear-gradient(135deg, #8e44ad 0%, #7d3c98 100%) !important;
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 6px 15px rgba(155, 89, 182, 0.4) !important;
    }

    .btn-delete:hover {
        background: linear-gradient(135deg, #c0392b 0%, #a93226 100%) !important;
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 6px 15px rgba(231, 76, 60, 0.4) !important;
    }

    .btn-group-sm {
        gap: 4px !important;
        flex-wrap: nowrap !important;
    }

    /* Style des boutons de formulaire - TAILLE RÉDUITE */
    .btn-md {
        padding: 0.6rem 1.2rem !important;
        font-size: 0.95rem !important;
        font-weight: 600 !important;
        border-radius: 10px !important;
        transition: all 0.3s ease !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 8px !important;
    }

    /* Style des boutons standards */
    .btn-success {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
        color: white !important;
        border: none !important;
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #218838 0%, #1baa7e 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 5px 12px rgba(40, 167, 69, 0.4) !important;
    }

    .btn-danger {
        background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%) !important;
        color: white !important;
        border: none !important;
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, #c82333 0%, #e8590c 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 5px 12px rgba(220, 53, 69, 0.4) !important;
    }

    .btn-info {
        background: linear-gradient(135deg, #17a2b8 0%, #20c997 100%) !important;
        color: white !important;
        border: none !important;
    }

    .btn-info:hover {
        background: linear-gradient(135deg, #138496 0%, #1baa7e 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 5px 12px rgba(23, 162, 184, 0.4) !important;
    }

    .btn-primary {
        background: linear-gradient(135deg, #007bff 0%, #6610f2 100%) !important;
        color: white !important;
        border: none !important;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #0056b3 0%, #520dc2 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 5px 12px rgba(0, 123, 255, 0.4) !important;
    }

    .btn-secondary {
        background: linear-gradient(135deg, #6c757d 0%, #495057 100%) !important;
        color: white !important;
        border: none !important;
    }

    .btn-secondary:hover {
        background: linear-gradient(135deg, #5a6268 0%, #343a40 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 5px 12px rgba(108, 117, 125, 0.4) !important;
    }

    /* Espacement entre les boutons */
    .gap-3 {
        gap: 1rem !important;
    }

    /* Tableau */
    .table-sm th,
    .table-sm td {
        padding: 0.8rem 1rem !important;
        font-size: 0.9rem;
        vertical-align: middle !important;
    }

    .badge {
        padding: 0.35rem 0.75rem !important;
        font-weight: 500 !important;
    }

    /* Champs de formulaire */
    input[type=\"date\"], input[type=\"text\"], select {
        background: #f8f9fa !important;
        color: #2c3e50 !important;
        border: 1px solid #dee2e6 !important;
        border-radius: 10px !important;
        font-weight: 500;
        padding: 0.75rem 1rem !important;
    }

    input[type=\"date\"]:focus, input[type=\"text\"]:focus, select:focus {
        border-color: #3498db !important;
        box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.2) !important;
        background: white !important;
    }

    tbody tr:hover {
        background-color: rgba(52, 152, 219, 0.05) !important;
        transition: background-color 0.2s ease;
    }

    /* Modal */
    .modal-content {
        border-radius: 16px !important;
        overflow: hidden;
        border: none !important;
        box-shadow: 0 15px 40px rgba(0,0,0,0.25) !important;
    }

    /* Responsive */
    @media (max-width: 768px) {
        h2 {
            font-size: 1.75rem;
        }
        
        .btn-md {
            padding: 0.5rem 1rem !important;
            font-size: 0.9rem !important;
        }
        
        .gap-3 {
            gap: 0.75rem !important;
        }
        
        .sky-blue-header th {
            padding: 12px 15px !important;
            font-size: 0.85rem;
        }
        
        .btn-see, .btn-modify, .btn-delete {
            padding: 0.35rem 0.6rem !important;
            font-size: 0.8rem !important;
        }
    }
    
    @media (max-width: 576px) {
        h2 {
            font-size: 1.5rem;
        }
        
        .gap-3 {
            gap: 0.5rem !important;
        }
        
        .btn-md {
            padding: 0.5rem 0.75rem !important;
            font-size: 0.85rem !important;
        }
        
        .btn-see, .btn-modify, .btn-delete {
            padding: 0.3rem 0.5rem !important;
            font-size: 0.75rem !important;
            min-width: 60px;
        }
        
        .btn-see span, .btn-modify span {
            display: none;
        }
        
        .btn-see::before {
            content: \"👁️\";
            font-size: 1rem;
        }
        
        .btn-modify::before {
            content: \"✏️\";
            font-size: 1rem;
        }
        
        .btn-delete::before {
            content: \"🗑️\";
            font-size: 1rem;
        }
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
        return "reservation/index.html.twig";
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
        return array (  506 => 232,  493 => 231,  477 => 225,  458 => 209,  454 => 208,  450 => 207,  444 => 204,  440 => 203,  436 => 202,  430 => 199,  426 => 198,  422 => 197,  416 => 194,  412 => 193,  408 => 192,  393 => 180,  379 => 169,  370 => 162,  354 => 152,  350 => 151,  341 => 145,  330 => 137,  319 => 129,  312 => 125,  305 => 121,  300 => 118,  296 => 116,  289 => 114,  286 => 113,  284 => 112,  280 => 110,  276 => 108,  271 => 106,  266 => 105,  264 => 104,  260 => 102,  254 => 100,  250 => 98,  248 => 97,  245 => 96,  243 => 95,  240 => 94,  238 => 93,  235 => 92,  233 => 91,  227 => 88,  219 => 83,  214 => 80,  210 => 79,  174 => 46,  161 => 38,  149 => 28,  139 => 24,  135 => 22,  131 => 21,  128 => 20,  118 => 16,  114 => 14,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservations - Fluently{% endblock %}

{% block body %}
    <div class=\"min-vh-100\" style=\"background: linear-gradient(90deg, #b44bd8, #5f7ae6); padding-top: 100px; color: #ecf0f1;\">
        <div class=\"container py-5\">
            <h2 class=\"fw-bold text-center mb-4\" style=\"color: #fdfeff;\">
                📋 Gerez les inscriptions aux sessions
            </h2>

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

            <!-- Filtres -->
            <div class=\"card shadow-lg border-0 rounded-4 mb-3 bg-white text-dark\">
                <div class=\"card-body p-4\">
                    <div class=\"row g-3\">
                        <!-- Message badge -->
                        <div class=\"col-lg-6\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"badge-count p-3 rounded-3 shadow-sm\">
                                    <i class=\"bi bi-person-check-fill me-2\" style=\"color: #3498db;\"></i>
                                    <strong>{{ reservations.getTotalItemCount }}</strong> reservation{{ reservations.getTotalItemCount > 1 ? 's' : '' }}
                                </div>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class=\"col-lg-6\">
                            <div class=\"d-flex gap-3\">
                                <a href=\"{{ path('app_session_index') }}\" class=\"btn btn-info btn-md shadow-sm flex-fill\">
                                    👁️ Voir les sessions
                                </a>
                                <button type=\"button\" class=\"btn btn-primary btn-md shadow-sm flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#createReservationModal\">
                                    ➕ Nouvelle reservation
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <!-- Tableau -->
            <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden bg-white text-dark\">
                <div class=\"card-header bg-sky-blue text-dark py-3\">
                    <h5 class=\"mb-0 fw-bold\">
                        <i class=\"bi bi-list-ul me-2\"></i> Reservations enregistrees
                    </h5>
                </div>
                <div class=\"card-body p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-sm mb-0 align-middle\">
                            <thead class=\"sky-blue-header\">
                                <tr>
                                    <th class=\"px-4 py-3\" style=\"width: 8%;\">ID</th>
                                    <th class=\"px-4 py-3\" style=\"width: 15%;\">Date Reservation</th>
                                    <th class=\"px-4 py-3\" style=\"width: 15%;\">Statut</th>
                                    <th class=\"px-4 py-3\" style=\"width: 25%;\">Session</th>
                                    <th class=\"px-4 py-3\" style=\"width: 22%;\">Apprenant</th>
                                    <th class=\"text-center px-4 py-3\" style=\"width: 15%;\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for reservation in reservations %}
                                <tr class=\"align-middle\">
                                    <td class=\"px-4 py-3\">
                                        <span class=\"badge rounded-pill px-3 py-2\" style=\"background: linear-gradient(135deg, #9370DB 0%, #B19CD9 100%); color: white;\">
                                            #{{ reservation.id }}
                                        </span>
                                    </td>
                                    <td class=\"px-4 py-3 small\">
                                        <i class=\"bi bi-calendar me-1 text-primary\"></i>
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
                                    <td class=\"px-4 py-3 small\">
                                        {% if reservation.session %}
                                            <strong>{{ reservation.session.dateHeure|date('d/m/Y H:i') }}</strong><br>
                                            <small class=\"text-muted\">{{ reservation.session.groupe ? reservation.session.groupe.nom : 'Sans groupe' }}</small>
                                        {% else %}
                                            --
                                        {% endif %}
                                    </td>
                                    <td class=\"px-4 py-3 small\">
                                        {% if reservation.user %}
                                            <i class=\"bi bi-person me-1 text-primary\"></i>
                                            {{ reservation.user.prenom is defined ? reservation.user.prenom : '' }} {{ reservation.user.nom is defined ? reservation.user.nom : reservation.user.email }}
                                        {% else %}
                                            --
                                        {% endif %}
                                    </td>
                                    <td class=\"px-4 py-3 text-center\">
                                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                                            <a href=\"{{ path('app_reservation_show', {'id': reservation.id}) }}\" 
                                               class=\"btn btn-see\" title=\"Voir détails\">
                                                👁️ Voir
                                            </a>
                                            <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\" 
                                               class=\"btn btn-modify\" title=\"Modifier reservation\">
                                                ✏️ Modifier
                                            </a>
                                            <button type=\"button\" class=\"btn btn-delete\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ reservation.id }}\" title=\"Supprimer\">
                                                🗑️
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
                                                Supprimer la reservation de <strong>{{ reservation.user ? (reservation.user.prenom is defined ? reservation.user.prenom ~ ' ' ~ reservation.user.nom : reservation.user.email) : 'cet apprenant' }}</strong> ?
                                                <br><br>
                                                <small class=\"text-muted\">Cette action est irreversible.</small>
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

                <div class=\"card-footer bg-light border-0 py-3\">
                    <div class=\"d-flex justify-content-center\">
                        {{ knp_pagination_render(reservations) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL CREATION -->
    <div class=\"modal fade\" id=\"createReservationModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-dialog-centered\" style=\"max-width: 700px;\">
            <div class=\"modal-content\">
                {{ form_start(form_create, {'attr': {'id': 'reservationForm'}}) }}
                
                <div class=\"modal-header bg-sky-blue text-dark py-4\">
                    <h5 class=\"modal-title fw-bold\">
                        <i class=\"bi bi-plus-circle me-2\"></i> Creer une nouvelle reservation
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>

                <div class=\"modal-body p-5 bg-white\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <label class=\"form-label fw-bold\">{{ form_create.dateReservation.vars.label }}</label>
                            {{ form_widget(form_create.dateReservation, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form_create.dateReservation) }}
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"form-label fw-bold\">{{ form_create.statut.vars.label }}</label>
                            {{ form_widget(form_create.statut, {'attr': {'class': 'form-select'}}) }}
                            {{ form_errors(form_create.statut) }}
                        </div>
                        <div class=\"col-12\">
                            <label class=\"form-label fw-bold\">{{ form_create.session.vars.label }}</label>
                            {{ form_widget(form_create.session, {'attr': {'class': 'form-select'}}) }}
                            {{ form_errors(form_create.session) }}
                        </div>
                        <div class=\"col-12\">
                            <label class=\"form-label fw-bold\">{{ form_create.user.vars.label }}</label>
                            {{ form_widget(form_create.user, {'attr': {'class': 'form-select'}}) }}
                            {{ form_errors(form_create.user) }}
                        </div>
                    </div>
                </div>

                <div class=\"modal-footer border-top-0 bg-white py-4 px-5\">
                    <div class=\"d-flex gap-3 w-100\">
                        <button type=\"button\" class=\"btn btn-secondary flex-fill\" data-bs-dismiss=\"modal\">
                            ❌ Annuler
                        </button>
                        <button type=\"submit\" class=\"btn btn-primary flex-fill\">
                            ✅ Creer
                        </button>
                    </div>
                </div>

                {{ form_end(form_create) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    body {
        background: linear-gradient(90deg, #b44bd8, #5f7ae6) !important;
        color: #ecf0f1 !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h2 {
        color: #fdfeff !important;
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        font-size: 2rem;
    }

    .card {
        border: none !important;
        border-radius: 16px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3) !important;
        overflow: hidden;
    }

    /* En-tête de table en bleu ciel */
    .sky-blue-header {
        background: linear-gradient(135deg, #87CEEB 0%, #A0D8F3 50%, #87CEEB 100%) !important;
        color: #2c3e50 !important;
        border: none !important;
    }

    .sky-blue-header th {
        color: #2c3e50 !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
        border-bottom: 3px solid rgba(44, 62, 80, 0.15) !important;
        padding: 16px 20px !important;
        vertical-align: middle !important;
    }

    /* Header spécifique pour la modal et card */
    .bg-sky-blue {
        background: linear-gradient(135deg, #87CEEB 0%, #A0D8F3 100%) !important;
        color: #2c3e50 !important;
    }

    /* Badge count */
    .badge-count {
        background: white;
        border: 2px solid #87CEEB;
        font-size: 1.1rem;
        font-weight: 600;
    }

    /* Boutons d'action avec emojis et couleurs différentes */
    .btn-see {
        background: linear-gradient(135deg, #3498db 0%, #2ecc71 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 8px !important;
        padding: 0.4rem 0.8rem !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 3px 8px rgba(52, 152, 219, 0.25) !important;
        margin: 0 2px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 5px !important;
    }

    .btn-modify {
        background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 8px !important;
        padding: 0.4rem 0.8rem !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 3px 8px rgba(155, 89, 182, 0.25) !important;
        margin: 0 2px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 5px !important;
    }

    .btn-delete {
        background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 8px !important;
        padding: 0.4rem 0.8rem !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 3px 8px rgba(231, 76, 60, 0.25) !important;
        margin: 0 2px !important;
    }

    .btn-see:hover {
        background: linear-gradient(135deg, #2980b9 0%, #27ae60 100%) !important;
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 6px 15px rgba(52, 152, 219, 0.4) !important;
    }

    .btn-modify:hover {
        background: linear-gradient(135deg, #8e44ad 0%, #7d3c98 100%) !important;
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 6px 15px rgba(155, 89, 182, 0.4) !important;
    }

    .btn-delete:hover {
        background: linear-gradient(135deg, #c0392b 0%, #a93226 100%) !important;
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 6px 15px rgba(231, 76, 60, 0.4) !important;
    }

    .btn-group-sm {
        gap: 4px !important;
        flex-wrap: nowrap !important;
    }

    /* Style des boutons de formulaire - TAILLE RÉDUITE */
    .btn-md {
        padding: 0.6rem 1.2rem !important;
        font-size: 0.95rem !important;
        font-weight: 600 !important;
        border-radius: 10px !important;
        transition: all 0.3s ease !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 8px !important;
    }

    /* Style des boutons standards */
    .btn-success {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
        color: white !important;
        border: none !important;
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #218838 0%, #1baa7e 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 5px 12px rgba(40, 167, 69, 0.4) !important;
    }

    .btn-danger {
        background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%) !important;
        color: white !important;
        border: none !important;
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, #c82333 0%, #e8590c 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 5px 12px rgba(220, 53, 69, 0.4) !important;
    }

    .btn-info {
        background: linear-gradient(135deg, #17a2b8 0%, #20c997 100%) !important;
        color: white !important;
        border: none !important;
    }

    .btn-info:hover {
        background: linear-gradient(135deg, #138496 0%, #1baa7e 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 5px 12px rgba(23, 162, 184, 0.4) !important;
    }

    .btn-primary {
        background: linear-gradient(135deg, #007bff 0%, #6610f2 100%) !important;
        color: white !important;
        border: none !important;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #0056b3 0%, #520dc2 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 5px 12px rgba(0, 123, 255, 0.4) !important;
    }

    .btn-secondary {
        background: linear-gradient(135deg, #6c757d 0%, #495057 100%) !important;
        color: white !important;
        border: none !important;
    }

    .btn-secondary:hover {
        background: linear-gradient(135deg, #5a6268 0%, #343a40 100%) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 5px 12px rgba(108, 117, 125, 0.4) !important;
    }

    /* Espacement entre les boutons */
    .gap-3 {
        gap: 1rem !important;
    }

    /* Tableau */
    .table-sm th,
    .table-sm td {
        padding: 0.8rem 1rem !important;
        font-size: 0.9rem;
        vertical-align: middle !important;
    }

    .badge {
        padding: 0.35rem 0.75rem !important;
        font-weight: 500 !important;
    }

    /* Champs de formulaire */
    input[type=\"date\"], input[type=\"text\"], select {
        background: #f8f9fa !important;
        color: #2c3e50 !important;
        border: 1px solid #dee2e6 !important;
        border-radius: 10px !important;
        font-weight: 500;
        padding: 0.75rem 1rem !important;
    }

    input[type=\"date\"]:focus, input[type=\"text\"]:focus, select:focus {
        border-color: #3498db !important;
        box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.2) !important;
        background: white !important;
    }

    tbody tr:hover {
        background-color: rgba(52, 152, 219, 0.05) !important;
        transition: background-color 0.2s ease;
    }

    /* Modal */
    .modal-content {
        border-radius: 16px !important;
        overflow: hidden;
        border: none !important;
        box-shadow: 0 15px 40px rgba(0,0,0,0.25) !important;
    }

    /* Responsive */
    @media (max-width: 768px) {
        h2 {
            font-size: 1.75rem;
        }
        
        .btn-md {
            padding: 0.5rem 1rem !important;
            font-size: 0.9rem !important;
        }
        
        .gap-3 {
            gap: 0.75rem !important;
        }
        
        .sky-blue-header th {
            padding: 12px 15px !important;
            font-size: 0.85rem;
        }
        
        .btn-see, .btn-modify, .btn-delete {
            padding: 0.35rem 0.6rem !important;
            font-size: 0.8rem !important;
        }
    }
    
    @media (max-width: 576px) {
        h2 {
            font-size: 1.5rem;
        }
        
        .gap-3 {
            gap: 0.5rem !important;
        }
        
        .btn-md {
            padding: 0.5rem 0.75rem !important;
            font-size: 0.85rem !important;
        }
        
        .btn-see, .btn-modify, .btn-delete {
            padding: 0.3rem 0.5rem !important;
            font-size: 0.75rem !important;
            min-width: 60px;
        }
        
        .btn-see span, .btn-modify span {
            display: none;
        }
        
        .btn-see::before {
            content: \"👁️\";
            font-size: 1rem;
        }
        
        .btn-modify::before {
            content: \"✏️\";
            font-size: 1rem;
        }
        
        .btn-delete::before {
            content: \"🗑️\";
            font-size: 1rem;
        }
    }
</style>
{% endblock %}", "reservation/index.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\reservation\\index.html.twig");
    }
}
