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

/* dashboard/prof_dashboard.html.twig */
class __TwigTemplate_2f5e3e27e8dee9ac304d6a9eef9a5626 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/prof_dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/prof_dashboard.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"zxx\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>Tableau de bord Professeur</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendors.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/daterangepicker.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/theme.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
</head>
<body>

    <nav class=\"nxl-navigation\">
        <div class=\"navbar-wrapper\">
            <div class=\"m-header\">
                <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"b-brand\">
                    <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently\" class=\"logo logo-lg\" />
                    <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently\" class=\"logo logo-sm\" />
                </a>
            </div>
            <div class=\"navbar-content\">
                <ul class=\"nxl-navbar\">
                    <li class=\"nxl-item nxl-caption\"><label>Navigation</label></li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-airplay\"></i></span>
                            <span class=\"nxl-mtext\">Dashboards_User</span>
                            <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Accueil</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-cast\"></i></span>
                            <span class=\"nxl-mtext\">Langues</span>
                            <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"reports-sales.html\">Sales Report</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"reports-leads.html\">Leads Report</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"reports-project.html\">Project Report</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"reports-timesheets.html\">Timesheets Report</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-send\"></i></span>
                            <span class=\"nxl-mtext\">Test</span>
                            <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"apps-chat.html\">Chat</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"apps-email.html\">Email</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"apps-tasks.html\">Tasks</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"apps-notes.html\">Notes</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"apps-storage.html\">Storage</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"apps-calendar.html\">Calendar</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-at-sign\"></i></span>
                            <span class=\"nxl-mtext\">Groupes</span>
                            <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal.html\">Proposal</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal-view.html\">Proposal View</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal-edit.html\">Proposal Edit</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal-create.html\">Proposal Create</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu active\">
    <a href=\"javascript:void(0);\" class=\"nxl-link\">
        <span class=\"nxl-micon\"><i class=\"feather-dollar-sign\"></i></span>
        <span class=\"nxl-mtext\">Sessions</span>
        <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
    </a>
    <ul class=\"nxl-submenu\">
        <li class=\"nxl-item active\">
            <a class=\"nxl-link\" href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_prof_dashboard");
        yield "\">Tableau de bord</a>
        </li>
        <li class=\"nxl-item\">
            <a class=\"nxl-link\" href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_session_list");
        yield "\">Mes sessions</a>
        </li>
        ";
        // line 93
        yield "        <li class=\"nxl-item\">
            <a class=\"nxl-link\" href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_professeur");
        yield "\">Mes réservations</a>
        </li>
    </ul>
</li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-users\"></i></span>
                            <span class=\"nxl-mtext\">Objectifs</span>
                            <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"customers.html\">Customers</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"customers-view.html\">Customers View</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"customers-create.html\">Customers Create</a></li>
                        </ul>
                    </li>
                </ul>
                <div class=\"card text-center\">
                    <div class=\"card-body\">
                        <i class=\"feather-sunrise fs-4 text-dark\"></i>
                        <h6 class=\"mt-4 text-dark fw-bolder\">Downloading Center</h6>
                        <p class=\"fs-11 my-3 text-dark\">Duralux is a production ready CRM to get started up and running easily.</p>
                        <a href=\"https://www.themewagon.com/themes/Duralux-admin\" target=\"_blank\" class=\"btn btn-primary text-dark w-100\">Download Now</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class=\"nxl-header\">
        <div class=\"header-wrapper\">
            <div class=\"header-right ms-auto\">
                <div class=\"d-flex align-items-center\"></div>
            </div>
        </div>
    </header>

    <main class=\"nxl-container\">
        <div class=\"main-content\">
            <div class=\"container-fluid py-4\">

                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "flashes", ["success"], "method", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 136
            yield "                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "flashes", ["error"], "method", false, false, false, 141));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 142
            yield "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 148
            yield "                    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h1 class=\"h2 mb-0\">Bonjour ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", true, true, false, 155)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 155, $this->source); })()), "prenom", [], "any", false, false, false, 155), "Professeur")) : ("Professeur")), "html", null, true);
        yield "</h1>
                    <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_session_new");
        yield "\" class=\"btn btn-success\">
                        <i class=\"fa fa-plus me-2\"></i> Nouvelle session
                    </a>
                </div>

                ";
        // line 162
        yield "                <div class=\"card border-warning shadow mb-5\">
                    <div class=\"card-header bg-warning text-dark\">
                        <h5 class=\"mb-0\">
                            <i class=\"fa fa-exclamation-triangle me-2\"></i>
                            Réservations en attente (";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pendingReservations"]) || array_key_exists("pendingReservations", $context) ? $context["pendingReservations"] : (function () { throw new RuntimeError('Variable "pendingReservations" does not exist.', 166, $this->source); })())), "html", null, true);
        yield ")
                        </h5>
                    </div>
                    <div class=\"card-body p-0\">
                        ";
        // line 170
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pendingReservations"]) || array_key_exists("pendingReservations", $context) ? $context["pendingReservations"] : (function () { throw new RuntimeError('Variable "pendingReservations" does not exist.', 170, $this->source); })())) > 0)) {
            // line 171
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover mb-0\">
            <thead class=\"table-light\">
                <tr>
                    <th>Date demande</th>
                    <th>Étudiant</th>
                    <th>Session</th>
                    <th>Groupe</th>
                    <th class=\"text-end\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pendingReservations"]) || array_key_exists("pendingReservations", $context) ? $context["pendingReservations"] : (function () { throw new RuntimeError('Variable "pendingReservations" does not exist.', 183, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["resa"]) {
                // line 184
                yield "                    <tr>
                        <td>";
                // line 185
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "dateReservation", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "dateReservation", [], "any", false, false, false, 185), "d/m/Y"), "html", null, true)) : ("—"));
                yield "</td>
                        <td>
                            <strong>";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "user", [], "any", false, false, false, 187), "prenom", [], "any", false, false, false, 187), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "user", [], "any", false, false, false, 187), "nom", [], "any", false, false, false, 187), "html", null, true);
                yield "</strong>
                        </td>
                        <td>";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "session", [], "any", false, false, false, 189), "dateHeure", [], "any", false, false, false, 189), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                        <td>";
                // line 190
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "session", [], "any", false, true, false, 190), "group", [], "any", false, true, false, 190), "nom", [], "any", true, true, false, 190) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "session", [], "any", false, false, false, 190), "group", [], "any", false, false, false, 190), "nom", [], "any", false, false, false, 190)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "session", [], "any", false, false, false, 190), "group", [], "any", false, false, false, 190), "nom", [], "any", false, false, false, 190), "html", null, true)) : ("(sans groupe)"));
                yield "</td>
                        <td class=\"text-end\">

                            ";
                // line 194
                yield "                            <form method=\"post\"
                                  action=\"";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_update_statut", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "id", [], "any", false, false, false, 195)]), "html", null, true);
                yield "\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Confirmer cette réservation ?')\">
                                <input type=\"hidden\" name=\"statut\" value=\"confirmée\">
                                <input type=\"hidden\" name=\"_token\"
                                       value=\"";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("resa_statut_" . CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "id", [], "any", false, false, false, 200))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-success me-1\"
                                        title=\"Confirmer\">
                                    <i class=\"fa fa-check\"></i> Confirmer
                                </button>
                            </form>

                            ";
                // line 208
                yield "                            <form method=\"post\"
                                  action=\"";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_update_statut", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "id", [], "any", false, false, false, 209)]), "html", null, true);
                yield "\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Refuser cette réservation ?')\">
                                <input type=\"hidden\" name=\"statut\" value=\"refusée\">
                                <input type=\"hidden\" name=\"_token\"
                                       value=\"";
                // line 214
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("resa_statut_" . CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "id", [], "any", false, false, false, 214))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-warning me-1\"
                                        title=\"Refuser\">
                                    <i class=\"fa fa-times\"></i> Refuser
                                </button>
                            </form>

                            ";
                // line 222
                yield "                            <form method=\"post\"
                                  action=\"";
                // line 223
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "id", [], "any", false, false, false, 223)]), "html", null, true);
                yield "\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Supprimer définitivement cette réservation ?')\">
                                <input type=\"hidden\" name=\"_token\"
                                       value=\"";
                // line 227
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "id", [], "any", false, false, false, 227))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\"
                                        title=\"Supprimer\">
                                    <i class=\"fa fa-trash\"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['resa'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            yield "            </tbody>
        </table>
    </div>
";
        } else {
            // line 241
            yield "    <div class=\"text-center py-5 text-muted\">
        <i class=\"fa fa-check-circle fa-3x mb-3 d-block text-success\"></i>
        Aucune demande en attente pour le moment
    </div>
";
        }
        // line 246
        yield "                    </div>
                </div>

                ";
        // line 250
        yield "                <div class=\"card shadow mb-5\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Mes dernières sessions</h5>
                        <a href=\"";
        // line 253
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_professeur");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                            Voir toutes →
                        </a>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 258
        yield from $this->load("session/_table_prof_small.html.twig", 258)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 259
(isset($context["sessionsPagination"]) || array_key_exists("sessionsPagination", $context) ? $context["sessionsPagination"] : (function () { throw new RuntimeError('Variable "sessionsPagination" does not exist.', 259, $this->source); })()), "show_note_column" => true, "show_actions" => true]));
        // line 263
        yield "                    </div>
                </div>

                ";
        // line 267
        yield "                <div class=\"card shadow\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">Activité récente</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 272
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["recentReservations"]) || array_key_exists("recentReservations", $context) ? $context["recentReservations"] : (function () { throw new RuntimeError('Variable "recentReservations" does not exist.', 272, $this->source); })())) > 0)) {
            // line 273
            yield "                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentReservations"]) || array_key_exists("recentReservations", $context) ? $context["recentReservations"] : (function () { throw new RuntimeError('Variable "recentReservations" does not exist.', 274, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 275
                yield "                                    <li class=\"list-group-item\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <strong>";
                // line 278
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "user", [], "any", false, false, false, 278), "prenom", [], "any", false, false, false, 278), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "user", [], "any", false, false, false, 278), "nom", [], "any", false, false, false, 278), "html", null, true);
                yield "</strong><br>
                                                <small class=\"text-muted\">";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "session", [], "any", false, false, false, 279), "dateHeure", [], "any", false, false, false, 279), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                                            </div>
                                            <span class=\"badge
                                                ";
                // line 282
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 282) == "confirmée")) {
                    yield "bg-success
                                                ";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 283
$context["r"], "statut", [], "any", false, false, false, 283), ["refusée", "annulée"])) {
                    yield "bg-danger
                                                ";
                } else {
                    // line 284
                    yield "bg-secondary";
                }
                yield "\">
                                                ";
                // line 285
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 285)), "html", null, true);
                yield "
                                            </span>
                                        </div>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 290
            yield "                            </ul>
                        ";
        } else {
            // line 292
            yield "                            <p class=\"text-center text-muted py-4 mb-0\">Aucune activité récente</p>
                        ";
        }
        // line 294
        yield "                    </div>
                </div>

            </div>
        </div>

        <footer class=\"footer\">
            <p class=\"fs-11 text-muted fw-medium text-uppercase mb-0 copyright\">
                <span>Copyright ©</span>
                <script>document.write(new Date().getFullYear());</script>
            </p>
            <p><span>By: <a target=\"_blank\" href=\"https://wrapbootstrap.com/user/theme_ocean\">theme_ocean</a></span> • <span>Distributed by: <a target=\"_blank\" href=\"https://themewagon.com\">ThemeWagon</a></span></p>
            <div class=\"d-flex align-items-center gap-4\">
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Help</a>
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Terms</a>
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Privacy</a>
            </div>
        </footer>
    </main>

    <script src=\"";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/daterangepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/circle-progress.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme-customizer-init.min.js"), "html", null, true);
        yield "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/prof_dashboard.html.twig";
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
        return array (  567 => 320,  563 => 319,  559 => 318,  555 => 317,  551 => 316,  547 => 315,  543 => 314,  521 => 294,  517 => 292,  513 => 290,  502 => 285,  497 => 284,  492 => 283,  488 => 282,  482 => 279,  476 => 278,  471 => 275,  467 => 274,  464 => 273,  462 => 272,  455 => 267,  450 => 263,  448 => 259,  447 => 258,  439 => 253,  434 => 250,  429 => 246,  422 => 241,  416 => 237,  400 => 227,  393 => 223,  390 => 222,  380 => 214,  372 => 209,  369 => 208,  359 => 200,  351 => 195,  348 => 194,  342 => 190,  338 => 189,  331 => 187,  326 => 185,  323 => 184,  319 => 183,  305 => 171,  303 => 170,  296 => 166,  290 => 162,  282 => 156,  278 => 155,  274 => 153,  264 => 149,  261 => 148,  256 => 147,  246 => 143,  243 => 142,  238 => 141,  228 => 137,  225 => 136,  221 => 135,  177 => 94,  174 => 93,  169 => 90,  163 => 87,  108 => 35,  92 => 22,  88 => 21,  84 => 20,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>Tableau de bord Professeur</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('assets/images/favicon.ico') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendors/css/vendors.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendors/css/daterangepicker.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/theme.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
</head>
<body>

    <nav class=\"nxl-navigation\">
        <div class=\"navbar-wrapper\">
            <div class=\"m-header\">
                <a href=\"{{ path('dashboard') }}\" class=\"b-brand\">
                    <img src=\"{{ asset('assets/images/fluently.png') }}\" alt=\"Fluently\" class=\"logo logo-lg\" />
                    <img src=\"{{ asset('assets/images/fluently.png') }}\" alt=\"Fluently\" class=\"logo logo-sm\" />
                </a>
            </div>
            <div class=\"navbar-content\">
                <ul class=\"nxl-navbar\">
                    <li class=\"nxl-item nxl-caption\"><label>Navigation</label></li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-airplay\"></i></span>
                            <span class=\"nxl-mtext\">Dashboards_User</span>
                            <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('dashboard') }}\">Accueil</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-cast\"></i></span>
                            <span class=\"nxl-mtext\">Langues</span>
                            <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"reports-sales.html\">Sales Report</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"reports-leads.html\">Leads Report</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"reports-project.html\">Project Report</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"reports-timesheets.html\">Timesheets Report</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-send\"></i></span>
                            <span class=\"nxl-mtext\">Test</span>
                            <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"apps-chat.html\">Chat</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"apps-email.html\">Email</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"apps-tasks.html\">Tasks</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"apps-notes.html\">Notes</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"apps-storage.html\">Storage</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"apps-calendar.html\">Calendar</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-at-sign\"></i></span>
                            <span class=\"nxl-mtext\">Groupes</span>
                            <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal.html\">Proposal</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal-view.html\">Proposal View</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal-edit.html\">Proposal Edit</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal-create.html\">Proposal Create</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu active\">
    <a href=\"javascript:void(0);\" class=\"nxl-link\">
        <span class=\"nxl-micon\"><i class=\"feather-dollar-sign\"></i></span>
        <span class=\"nxl-mtext\">Sessions</span>
        <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
    </a>
    <ul class=\"nxl-submenu\">
        <li class=\"nxl-item active\">
            <a class=\"nxl-link\" href=\"{{ path('session_prof_dashboard') }}\">Tableau de bord</a>
        </li>
        <li class=\"nxl-item\">
            <a class=\"nxl-link\" href=\"{{ path('prof_session_list') }}\">Mes sessions</a>
        </li>
        {# ✅ LIEN CORRIGÉ vers la page réservations professeur #}
        <li class=\"nxl-item\">
            <a class=\"nxl-link\" href=\"{{ path('reservation_professeur') }}\">Mes réservations</a>
        </li>
    </ul>
</li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-users\"></i></span>
                            <span class=\"nxl-mtext\">Objectifs</span>
                            <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"customers.html\">Customers</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"customers-view.html\">Customers View</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"customers-create.html\">Customers Create</a></li>
                        </ul>
                    </li>
                </ul>
                <div class=\"card text-center\">
                    <div class=\"card-body\">
                        <i class=\"feather-sunrise fs-4 text-dark\"></i>
                        <h6 class=\"mt-4 text-dark fw-bolder\">Downloading Center</h6>
                        <p class=\"fs-11 my-3 text-dark\">Duralux is a production ready CRM to get started up and running easily.</p>
                        <a href=\"https://www.themewagon.com/themes/Duralux-admin\" target=\"_blank\" class=\"btn btn-primary text-dark w-100\">Download Now</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class=\"nxl-header\">
        <div class=\"header-wrapper\">
            <div class=\"header-right ms-auto\">
                <div class=\"d-flex align-items-center\"></div>
            </div>
        </div>
    </header>

    <main class=\"nxl-container\">
        <div class=\"main-content\">
            <div class=\"container-fluid py-4\">

                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}
                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}
                {% for message in app.flashes('warning') %}
                    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}

                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h1 class=\"h2 mb-0\">Bonjour {{ user.prenom|default('Professeur') }}</h1>
                    <a href=\"{{ path('prof_session_new') }}\" class=\"btn btn-success\">
                        <i class=\"fa fa-plus me-2\"></i> Nouvelle session
                    </a>
                </div>

                {# ── Réservations en attente ── #}
                <div class=\"card border-warning shadow mb-5\">
                    <div class=\"card-header bg-warning text-dark\">
                        <h5 class=\"mb-0\">
                            <i class=\"fa fa-exclamation-triangle me-2\"></i>
                            Réservations en attente ({{ pendingReservations|length }})
                        </h5>
                    </div>
                    <div class=\"card-body p-0\">
                        {% if pendingReservations|length > 0 %}
    <div class=\"table-responsive\">
        <table class=\"table table-hover mb-0\">
            <thead class=\"table-light\">
                <tr>
                    <th>Date demande</th>
                    <th>Étudiant</th>
                    <th>Session</th>
                    <th>Groupe</th>
                    <th class=\"text-end\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for resa in pendingReservations %}
                    <tr>
                        <td>{{ resa.dateReservation ? resa.dateReservation|date('d/m/Y') : '—' }}</td>
                        <td>
                            <strong>{{ resa.user.prenom }} {{ resa.user.nom }}</strong>
                        </td>
                        <td>{{ resa.session.dateHeure|date('d/m/Y H:i') }}</td>
                        <td>{{ resa.session.group.nom ?? '(sans groupe)' }}</td>
                        <td class=\"text-end\">

                            {# ── Confirmer ── #}
                            <form method=\"post\"
                                  action=\"{{ path('app_reservation_update_statut', {id: resa.id}) }}\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Confirmer cette réservation ?')\">
                                <input type=\"hidden\" name=\"statut\" value=\"confirmée\">
                                <input type=\"hidden\" name=\"_token\"
                                       value=\"{{ csrf_token('resa_statut_' ~ resa.id) }}\">
                                <button type=\"submit\" class=\"btn btn-sm btn-success me-1\"
                                        title=\"Confirmer\">
                                    <i class=\"fa fa-check\"></i> Confirmer
                                </button>
                            </form>

                            {# ── Refuser ── #}
                            <form method=\"post\"
                                  action=\"{{ path('app_reservation_update_statut', {id: resa.id}) }}\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Refuser cette réservation ?')\">
                                <input type=\"hidden\" name=\"statut\" value=\"refusée\">
                                <input type=\"hidden\" name=\"_token\"
                                       value=\"{{ csrf_token('resa_statut_' ~ resa.id) }}\">
                                <button type=\"submit\" class=\"btn btn-sm btn-warning me-1\"
                                        title=\"Refuser\">
                                    <i class=\"fa fa-times\"></i> Refuser
                                </button>
                            </form>

                            {# ── Supprimer ── #}
                            <form method=\"post\"
                                  action=\"{{ path('app_reservation_delete', {id: resa.id}) }}\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Supprimer définitivement cette réservation ?')\">
                                <input type=\"hidden\" name=\"_token\"
                                       value=\"{{ csrf_token('delete' ~ resa.id) }}\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\"
                                        title=\"Supprimer\">
                                    <i class=\"fa fa-trash\"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% else %}
    <div class=\"text-center py-5 text-muted\">
        <i class=\"fa fa-check-circle fa-3x mb-3 d-block text-success\"></i>
        Aucune demande en attente pour le moment
    </div>
{% endif %}
                    </div>
                </div>

                {# ── Dernières sessions ── #}
                <div class=\"card shadow mb-5\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Mes dernières sessions</h5>
                        <a href=\"{{ path('session_professeur') }}\" class=\"btn btn-outline-secondary btn-sm\">
                            Voir toutes →
                        </a>
                    </div>
                    <div class=\"card-body\">
                        {% include 'session/_table_prof_small.html.twig' with {
                            'pagination': sessionsPagination,
                            'show_note_column': true,
                            'show_actions': true
                        } %}
                    </div>
                </div>

                {# ── Activité récente ── #}
                <div class=\"card shadow\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">Activité récente</h5>
                    </div>
                    <div class=\"card-body\">
                        {% if recentReservations|length > 0 %}
                            <ul class=\"list-group list-group-flush\">
                                {% for r in recentReservations %}
                                    <li class=\"list-group-item\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <strong>{{ r.user.prenom }} {{ r.user.nom }}</strong><br>
                                                <small class=\"text-muted\">{{ r.session.dateHeure|date('d/m/Y H:i') }}</small>
                                            </div>
                                            <span class=\"badge
                                                {% if r.statut == 'confirmée' %}bg-success
                                                {% elseif r.statut in ['refusée', 'annulée'] %}bg-danger
                                                {% else %}bg-secondary{% endif %}\">
                                                {{ r.statut|capitalize }}
                                            </span>
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul>
                        {% else %}
                            <p class=\"text-center text-muted py-4 mb-0\">Aucune activité récente</p>
                        {% endif %}
                    </div>
                </div>

            </div>
        </div>

        <footer class=\"footer\">
            <p class=\"fs-11 text-muted fw-medium text-uppercase mb-0 copyright\">
                <span>Copyright ©</span>
                <script>document.write(new Date().getFullYear());</script>
            </p>
            <p><span>By: <a target=\"_blank\" href=\"https://wrapbootstrap.com/user/theme_ocean\">theme_ocean</a></span> • <span>Distributed by: <a target=\"_blank\" href=\"https://themewagon.com\">ThemeWagon</a></span></p>
            <div class=\"d-flex align-items-center gap-4\">
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Help</a>
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Terms</a>
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Privacy</a>
            </div>
        </footer>
    </main>

    <script src=\"{{ asset('assets/vendors/js/vendors.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/js/daterangepicker.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/js/apexcharts.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/js/circle-progress.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/common-init.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/dashboard-init.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/theme-customizer-init.min.js') }}\"></script>
</body>
</html>", "dashboard/prof_dashboard.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\dashboard\\prof_dashboard.html.twig");
    }
}
