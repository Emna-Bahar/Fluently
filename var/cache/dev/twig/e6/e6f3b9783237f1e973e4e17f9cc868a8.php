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

/* dashboard/show.html.twig */
class __TwigTemplate_1aa756072a45dfe6559de6fa35edaf3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"zxx\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>Session #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</title>
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
                            <li class=\"nxl-item active\"><a class=\"nxl-link\" href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_prof_dashboard");
        yield "\">Tableau de bord</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_session_list");
        yield "\">Mes sessions</a></li>
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
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "flashes", ["success"], "method", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 128
            yield "                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "flashes", ["error"], "method", false, false, false, 133));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 134
            yield "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 139));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 140
            yield "                    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        yield "
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h1 class=\"h2 mb-0\">Détails de la session #";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147), "html", null, true);
        yield "</h1>
                    <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_session_list");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fa fa-arrow-left me-2\"></i> Retour à la liste
                    </a>
                </div>

                <div class=\"card shadow\">
                    <div class=\"card-header bg-info text-white\">
                        <h5 class=\"mb-0\">Informations de la session</h5>
                    </div>
                    <div class=\"card-body\">
                        <dl class=\"row\">
                            <dt class=\"col-sm-3 fw-bold\">Date & Heure</dt>
                            <dd class=\"col-sm-9\">";
        // line 160
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 160, $this->source); })()), "dateHeure", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 160, $this->source); })()), "dateHeure", [], "any", false, false, false, 160), "d/m/Y H:i"), "html", null, true)) : ("—"));
        yield "</dd>

                            <dt class=\"col-sm-3 fw-bold\">Statut</dt>
                            <dd class=\"col-sm-9\">
                                <span class=\"badge bg-";
        // line 164
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 164, $this->source); })()), "statut", [], "any", false, false, false, 164) == "terminée")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 164, $this->source); })()), "statut", [], "any", false, false, false, 164) == "planifiée")) ? ("warning") : ("secondary"))));
        yield "\">
                                    ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 165, $this->source); })()), "statut", [], "any", false, false, false, 165)), "html", null, true);
        yield "
                                </span>
                            </dd>

                            <dt class=\"col-sm-3 fw-bold\">Groupe</dt>
                            <dd class=\"col-sm-9\">";
        // line 170
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 170, $this->source); })()), "group", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 170, $this->source); })()), "group", [], "any", false, false, false, 170), "nom", [], "any", false, false, false, 170), "html", null, true)) : ("—"));
        yield "</dd>

                            <dt class=\"col-sm-3 fw-bold\">Lien réunion</dt>
                            <dd class=\"col-sm-9\">
                                ";
        // line 174
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 174, $this->source); })()), "lienReunion", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 175, $this->source); })()), "lienReunion", [], "any", false, false, false, 175), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-success btn-sm\">
                                        <i class=\"fa fa-video me-1\"></i> Rejoindre
                                    </a>
                                ";
        } else {
            // line 179
            yield "                                    <span class=\"text-muted\">Aucun lien</span>
                                ";
        }
        // line 181
        yield "                            </dd>

                            <dt class=\"col-sm-3 fw-bold\">Note</dt>
                            <dd class=\"col-sm-9\">
                                ";
        // line 185
        $context["rating"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "rating", [], "any", true, true, false, 185)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 185, $this->source); })()), "rating", [], "any", false, false, false, 185), 0)) : (0));
        // line 186
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 187
            yield "                                    <i class=\"fa fa-star ";
            if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 187, $this->source); })()))) {
                yield "text-warning";
            } else {
                yield "text-muted";
            }
            yield "\"></i>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        yield "                                ";
        if (((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 189, $this->source); })()) == 0)) {
            yield "<small class=\"text-muted\"> (non notée)</small>";
        }
        // line 190
        yield "                            </dd>
                        </dl>
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

    <script src=\"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/daterangepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/circle-progress.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 218
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
        return "dashboard/show.html.twig";
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
        return array (  407 => 218,  403 => 217,  399 => 216,  395 => 215,  391 => 214,  387 => 213,  383 => 212,  359 => 190,  354 => 189,  341 => 187,  336 => 186,  334 => 185,  328 => 181,  324 => 179,  316 => 175,  314 => 174,  307 => 170,  299 => 165,  295 => 164,  288 => 160,  273 => 148,  269 => 147,  265 => 145,  255 => 141,  252 => 140,  247 => 139,  237 => 135,  234 => 134,  229 => 133,  219 => 129,  216 => 128,  212 => 127,  169 => 87,  165 => 86,  111 => 35,  95 => 22,  91 => 21,  87 => 20,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>Session #{{ session.id }}</title>
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
                            <li class=\"nxl-item active\"><a class=\"nxl-link\" href=\"{{ path('session_prof_dashboard') }}\">Tableau de bord</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('prof_session_list') }}\">Mes sessions</a></li>
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
                    <h1 class=\"h2 mb-0\">Détails de la session #{{ session.id }}</h1>
                    <a href=\"{{ path('prof_session_list') }}\" class=\"btn btn-secondary\">
                        <i class=\"fa fa-arrow-left me-2\"></i> Retour à la liste
                    </a>
                </div>

                <div class=\"card shadow\">
                    <div class=\"card-header bg-info text-white\">
                        <h5 class=\"mb-0\">Informations de la session</h5>
                    </div>
                    <div class=\"card-body\">
                        <dl class=\"row\">
                            <dt class=\"col-sm-3 fw-bold\">Date & Heure</dt>
                            <dd class=\"col-sm-9\">{{ session.dateHeure ? session.dateHeure|date('d/m/Y H:i') : '—' }}</dd>

                            <dt class=\"col-sm-3 fw-bold\">Statut</dt>
                            <dd class=\"col-sm-9\">
                                <span class=\"badge bg-{{ session.statut == 'terminée' ? 'success' : (session.statut == 'planifiée' ? 'warning' : 'secondary') }}\">
                                    {{ session.statut|capitalize }}
                                </span>
                            </dd>

                            <dt class=\"col-sm-3 fw-bold\">Groupe</dt>
                            <dd class=\"col-sm-9\">{{ session.group ? session.group.nom : '—' }}</dd>

                            <dt class=\"col-sm-3 fw-bold\">Lien réunion</dt>
                            <dd class=\"col-sm-9\">
                                {% if session.lienReunion %}
                                    <a href=\"{{ session.lienReunion }}\" target=\"_blank\" class=\"btn btn-success btn-sm\">
                                        <i class=\"fa fa-video me-1\"></i> Rejoindre
                                    </a>
                                {% else %}
                                    <span class=\"text-muted\">Aucun lien</span>
                                {% endif %}
                            </dd>

                            <dt class=\"col-sm-3 fw-bold\">Note</dt>
                            <dd class=\"col-sm-9\">
                                {% set rating = session.rating|default(0) %}
                                {% for i in 1..5 %}
                                    <i class=\"fa fa-star {% if i <= rating %}text-warning{% else %}text-muted{% endif %}\"></i>
                                {% endfor %}
                                {% if rating == 0 %}<small class=\"text-muted\"> (non notée)</small>{% endif %}
                            </dd>
                        </dl>
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
</html>", "dashboard/show.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\dashboard\\show.html.twig");
    }
}
