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

/* dashboard/index.html.twig */
class __TwigTemplate_5bcbdd80c09b84d9435a3b42e1d154e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"keyword\" content=\"\" />
    <meta name=\"author\" content=\"flexilecode\" />

    <title>Dashboard - Fluently</title>

    <!--! BEGIN: Favicon-->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        yield "\" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendors.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/daterangepicker.min.css"), "html", null, true);
        yield "\" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/theme.min.css"), "html", null, true);
        yield "\" />
    <!--! END: Custom CSS-->
    
    <!-- DataTables CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css\">
    
    <style>
        /* Force navigation to always be expanded */
        .nxl-navigation {
            width: 280px !important;
        }
        
        .nxl-navigation .navbar-wrapper {
            width: 280px !important;
        }
        
        /* Adjust main container to account for expanded nav */
        .nxl-container {
            margin-left: 280px !important;
        }
        
        .nxl-header {
            left: 280px !important;
        }
        
        /* Make logo smaller */
        .m-header .b-brand {
            padding: 15px;
        }
        
        .m-header .logo-lg {
            max-width: 120px !important;
            height: auto !important;
        }
        
        .m-header .logo-sm {
            max-width: 40px !important;
        }
        
        /* Classic table styling */
        #usersTable {
            background: white;
        }
        
        #usersTable thead {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
        }
        
        #usersTable thead th {
            padding: 12px;
            font-weight: 600;
            color: #495057;
            border-bottom: 2px solid #dee2e6;
        }
        
        #usersTable tbody tr {
            border-bottom: 1px solid #dee2e6;
        }
        
        #usersTable tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        #usersTable tbody td {
            padding: 12px;
            vertical-align: middle;
            color: #212529;
        }
        
        /* Simple filter styling */
        .filter-group {
            margin-bottom: 20px;
        }
        
        .filter-group select {
            border: 1px solid #ced4da;
            padding: 6px 12px;
        }
        
        .filter-group select:focus {
            border-color: #80bdff;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }
        
        /* Classic delete button */
        .btn-danger {
            background-color: #dc3545;
            border: 1px solid #dc3545;
            padding: 5px 15px;
        }
        
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        
        /* Classic search box */
        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #ced4da;
            padding: 5px 10px;
            margin-left: 5px;
        }
        
        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: #80bdff;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }
        
        /* Page title */
        h2 {
            color: #212529;
            font-weight: 600;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Menu !-->
    <!--! ================================================================ !-->
    <nav class=\"nxl-navigation\">
        <div class=\"navbar-wrapper\">
            <div class=\"m-header\">
                <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"b-brand\">
                    <img src=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently\" class=\"logo logo-lg\" />
                    <img src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently\" class=\"logo logo-sm\" />
                </a>
            </div>
            <div class=\"navbar-content\">
                <ul class=\"nxl-navbar\">
                    <li class=\"nxl-item nxl-caption\">
                        <label>Navigation</label>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-airplay\"></i></span>
                            <span class=\"nxl-mtext\">Dashboards_User</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"index.html\">CRM</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"analytics.html\">Analytics</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-cast\"></i></span>
                            <span class=\"nxl-mtext\">Langues</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
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
                            <span class=\"nxl-mtext\">Test</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
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
                            <span class=\"nxl-mtext\">Groupes</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal.html\">Proposal</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal-view.html\">Proposal View</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal-edit.html\">Proposal Edit</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal-create.html\">Proposal Create</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-dollar-sign\"></i></span>
                            <span class=\"nxl-mtext\">Sessions</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"payment.html\">Payment</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"invoice-view.html\">Invoice View</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"invoice-create.html\">Invoice Create</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-users\"></i></span>
                            <span class=\"nxl-mtext\">Objectifs</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
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
                        <p class=\"fs-11 my-3 text-dark\">Fluently - Plateforme d'apprentissage des langues</p>
                        <a href=\"javascript:void(0);\" class=\"btn btn-primary text-dark w-100\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--! ================================================================ !-->
    <!--! [End] Navigation Menu !-->
    <!--! ================================================================ !-->
    
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    <header class=\"nxl-header\">
        <div class=\"header-wrapper\">
            <div class=\"header-right ms-auto\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"nxl-h-item d-none d-sm-flex\">
                        <div class=\"full-screen-switcher\">
                            <a href=\"javascript:void(0);\" class=\"nxl-head-link me-0\" onclick=\"\$('body').fullScreenHelper('toggle');\">
                                <i class=\"feather-maximize maximize\"></i>
                                <i class=\"feather-minimize minimize\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"nxl-h-item dark-light-theme\">
                        <a href=\"javascript:void(0);\" class=\"nxl-head-link me-0 dark-button\">
                            <i class=\"feather-moon\"></i>
                        </a>
                        <a href=\"javascript:void(0);\" class=\"nxl-head-link me-0 light-button\" style=\"display: none\">
                            <i class=\"feather-sun\"></i>
                        </a>
                    </div>
                    
                    <div class=\"dropdown nxl-h-item\">
                        <a class=\"nxl-head-link me-3\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" data-bs-auto-close=\"outside\">
                            <i class=\"feather-bell\"></i>
                            <span class=\"badge bg-danger nxl-h-badge\">3</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-notifications-menu\">
                            <div class=\"d-flex justify-content-between align-items-center notifications-head\">
                                <h6 class=\"fw-bold text-dark mb-0\">Notifications</h6>
                            </div>
                            <div class=\"notifications-item\">
                                <img src=\"";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"rounded me-3 border\" />
                                <div class=\"notifications-desc\">
                                    <a href=\"javascript:void(0);\" class=\"font-body text-truncate-2-line\">
                                        <span class=\"fw-semibold text-dark\">Nouvelle inscription</span> Un nouvel utilisateur s'est inscrit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"dropdown nxl-h-item\">
                        <a href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" role=\"button\" data-bs-auto-close=\"outside\">
                            <img src=\"";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/1.png"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"img-fluid user-avtar me-0\" />
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown\">
                            <div class=\"dropdown-header\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/1.png"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"img-fluid user-avtar\" />
                                    <div>
                                        <h6 class=\"text-dark mb-0\">
                                            ";
        // line 302
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 302, $this->source); })()), "session", [], "any", false, false, false, 302), "get", ["user_nom"], "method", false, false, false, 302) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 302, $this->source); })()), "session", [], "any", false, false, false, 302), "get", ["user_prenom"], "method", false, false, false, 302))) {
            // line 303
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "session", [], "any", false, false, false, 303), "get", ["user_nom"], "method", false, false, false, 303), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "session", [], "any", false, false, false, 303), "get", ["user_prenom"], "method", false, false, false, 303), "html", null, true);
            yield "
                                            ";
        } else {
            // line 305
            yield "                                                Utilisateur
                                            ";
        }
        // line 307
        yield "                                            <span class=\"badge bg-soft-success text-success ms-1\">
                                                ";
        // line 308
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 308, $this->source); })()), "session", [], "any", false, false, false, 308), "get", ["user_role"], "method", false, false, false, 308)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 309
            yield "                                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 309, $this->source); })()), "session", [], "any", false, false, false, 309), "get", ["user_role"], "method", false, false, false, 309)), "html", null, true);
            yield "
                                                ";
        } else {
            // line 311
            yield "                                                    USER
                                                ";
        }
        // line 313
        yield "                                            </span>
                                        </h6>
                                        <span class=\"fs-12 fw-medium text-muted\">
                                            ";
        // line 316
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "session", [], "any", false, false, false, 316), "get", ["user_email"], "method", false, false, false, 316)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 317
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 317, $this->source); })()), "session", [], "any", false, false, false, 317), "get", ["user_email"], "method", false, false, false, 317), "html", null, true);
            yield "
                                            ";
        } else {
            // line 319
            yield "                                                email@example.com
                                            ";
        }
        // line 321
        yield "                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                    <span class=\"hstack\">
                                        ";
        // line 329
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 329, $this->source); })()), "session", [], "any", false, false, false, 329), "get", ["user_statut"], "method", false, false, false, 329) == "online")) {
            // line 330
            yield "                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2\"></i>
                                            <span>En ligne</span>
                                        ";
        } else {
            // line 333
            yield "                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-secondary rounded-circle me-2\"></i>
                                            <span>Hors ligne</span>
                                        ";
        }
        // line 336
        yield "                                    </span>
                                </a>
                            </div>
                            
                            <div class=\"dropdown-divider\"></div>
                            
                            <a href=\"";
        // line 342
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"dropdown-item\">
                                <i class=\"feather-user\"></i>
                                <span>Mon Profil</span>
                            </a>
                            
                            <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                <i class=\"feather-bell\"></i>
                                <span>Notifications</span>
                            </a>
                            
                            <div class=\"dropdown-divider\"></div>
                            
                            <a href=\"";
        // line 354
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"dropdown-item\">
                                <i class=\"feather-log-out\"></i>
                                <span>Se déconnecter</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class=\"nxl-container\">
        <div class=\"nxl-content\">
            <!-- USER TABLE SECTION START -->
            <div class=\"container mt-4\">
                <h2 class=\"mb-4\">Tous les Utilisateurs</h2>
                
                <!-- Filters -->
                <div class=\"filter-group d-flex gap-3 mb-4\">
                    <select id=\"filterRole\" class=\"form-select w-auto\">
                        <option value=\"\">Tous les Rôles</option>
                        <option value=\"student\">Étudiant</option>
                        <option value=\"teacher\">Professeur</option>
                        <option value=\"admin\">Admin</option>
                        <option value=\"user\">User</option>
                    </select>
                    <select id=\"filterStatus\" class=\"form-select w-auto\">
                        <option value=\"\">Tous les Statuts</option>
                        <option value=\"online\">En ligne</option>
                        <option value=\"offline\">Hors ligne</option>
                    </select>
                </div>
                
                <!-- Users Table -->
                <table id=\"usersTable\" class=\"display table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 405
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 405, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 406
            yield "                            <tr>
                                <td>";
            // line 407
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 407), "html", null, true);
            yield "</td>
                                <td>";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 408), "html", null, true);
            yield "</td>
                                <td>";
            // line 409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 409), "html", null, true);
            yield "</td>
                                <td>";
            // line 410
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 410), "html", null, true);
            yield "</td>
                                <td class=\"table-actions\">
                                    <a href=\"";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 412)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm me-2\">Modifier</a>
                                    <form method=\"post\" action=\"";
            // line 413
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 413)]), "html", null, true);
            yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 419
        yield "                    </tbody>
                </table>
            </div>
            <!-- USER TABLE SECTION END -->
        </div>
        
        <!-- [ Footer ] start -->
        <footer class=\"footer\">
            <p class=\"fs-11 text-muted fw-medium text-uppercase mb-0 copyright\">
                <span>Copyright ©</span>
                <script>document.write(new Date().getFullYear());</script>
            </p>
            <div class=\"d-flex align-items-center gap-4\">
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Aide</a>
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Conditions</a>
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Confidentialité</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
   
    <!--! BEGIN: Vendors JS !-->
    <script src=\"";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/daterangepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/circle-progress.min.js"), "html", null, true);
        yield "\"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src=\"";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard-init.min.js"), "html", null, true);
        yield "\"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src=\"";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme-customizer-init.min.js"), "html", null, true);
        yield "\"></script>
    
    <!-- jQuery & DataTables -->
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
    <script>
        \$(document).ready(function() {
            var table = \$('#usersTable').DataTable({
                \"paging\": true,
                \"info\": true,
                \"lengthChange\": true,
                \"pageLength\": 10,
                \"language\": {
                    \"lengthMenu\": \"Afficher _MENU_ entrées\",
                    \"zeroRecords\": \"Aucun utilisateur trouvé\",
                    \"info\": \"Page _PAGE_ sur _PAGES_\",
                    \"infoEmpty\": \"Aucune entrée disponible\",
                    \"infoFiltered\": \"(filtré de _MAX_ entrées totales)\",
                    \"search\": \"Rechercher:\",
                    \"paginate\": {
                        \"first\": \"Premier\",
                        \"last\": \"Dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédent\"
                    }
                }
            });
            
            \$('#filterRole').on('change', function() {
                table.column(2).search(this.value).draw();
            });
            
            \$('#filterStatus').on('change', function() {
                table.column(3).search(this.value).draw();
            });
        });
    </script>
   
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/index.html.twig";
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
        return array (  624 => 454,  618 => 451,  614 => 450,  608 => 447,  604 => 446,  600 => 445,  596 => 444,  569 => 419,  557 => 413,  553 => 412,  548 => 410,  544 => 409,  540 => 408,  536 => 407,  533 => 406,  529 => 405,  475 => 354,  460 => 342,  452 => 336,  447 => 333,  442 => 330,  440 => 329,  430 => 321,  426 => 319,  420 => 317,  418 => 316,  413 => 313,  409 => 311,  403 => 309,  401 => 308,  398 => 307,  394 => 305,  386 => 303,  384 => 302,  378 => 299,  370 => 294,  355 => 282,  224 => 154,  220 => 153,  216 => 152,  86 => 25,  80 => 22,  76 => 21,  70 => 18,  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"keyword\" content=\"\" />
    <meta name=\"author\" content=\"flexilecode\" />

    <title>Dashboard - Fluently</title>

    <!--! BEGIN: Favicon-->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('assets/images/favicon.ico') }}\" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendors/css/vendors.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendors/css/daterangepicker.min.css') }}\" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/theme.min.css') }}\" />
    <!--! END: Custom CSS-->
    
    <!-- DataTables CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css\">
    
    <style>
        /* Force navigation to always be expanded */
        .nxl-navigation {
            width: 280px !important;
        }
        
        .nxl-navigation .navbar-wrapper {
            width: 280px !important;
        }
        
        /* Adjust main container to account for expanded nav */
        .nxl-container {
            margin-left: 280px !important;
        }
        
        .nxl-header {
            left: 280px !important;
        }
        
        /* Make logo smaller */
        .m-header .b-brand {
            padding: 15px;
        }
        
        .m-header .logo-lg {
            max-width: 120px !important;
            height: auto !important;
        }
        
        .m-header .logo-sm {
            max-width: 40px !important;
        }
        
        /* Classic table styling */
        #usersTable {
            background: white;
        }
        
        #usersTable thead {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
        }
        
        #usersTable thead th {
            padding: 12px;
            font-weight: 600;
            color: #495057;
            border-bottom: 2px solid #dee2e6;
        }
        
        #usersTable tbody tr {
            border-bottom: 1px solid #dee2e6;
        }
        
        #usersTable tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        #usersTable tbody td {
            padding: 12px;
            vertical-align: middle;
            color: #212529;
        }
        
        /* Simple filter styling */
        .filter-group {
            margin-bottom: 20px;
        }
        
        .filter-group select {
            border: 1px solid #ced4da;
            padding: 6px 12px;
        }
        
        .filter-group select:focus {
            border-color: #80bdff;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }
        
        /* Classic delete button */
        .btn-danger {
            background-color: #dc3545;
            border: 1px solid #dc3545;
            padding: 5px 15px;
        }
        
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        
        /* Classic search box */
        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #ced4da;
            padding: 5px 10px;
            margin-left: 5px;
        }
        
        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: #80bdff;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }
        
        /* Page title */
        h2 {
            color: #212529;
            font-weight: 600;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Menu !-->
    <!--! ================================================================ !-->
    <nav class=\"nxl-navigation\">
        <div class=\"navbar-wrapper\">
            <div class=\"m-header\">
                <a href=\"{{ path('app_home') }}\" class=\"b-brand\">
                    <img src=\"{{ asset('assets/images/fluently.png') }}\" alt=\"Fluently\" class=\"logo logo-lg\" />
                    <img src=\"{{ asset('assets/images/fluently.png') }}\" alt=\"Fluently\" class=\"logo logo-sm\" />
                </a>
            </div>
            <div class=\"navbar-content\">
                <ul class=\"nxl-navbar\">
                    <li class=\"nxl-item nxl-caption\">
                        <label>Navigation</label>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-airplay\"></i></span>
                            <span class=\"nxl-mtext\">Dashboards_User</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"index.html\">CRM</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"analytics.html\">Analytics</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-cast\"></i></span>
                            <span class=\"nxl-mtext\">Langues</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
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
                            <span class=\"nxl-mtext\">Test</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
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
                            <span class=\"nxl-mtext\">Groupes</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal.html\">Proposal</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal-view.html\">Proposal View</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal-edit.html\">Proposal Edit</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"proposal-create.html\">Proposal Create</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-dollar-sign\"></i></span>
                            <span class=\"nxl-mtext\">Sessions</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"payment.html\">Payment</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"invoice-view.html\">Invoice View</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"invoice-create.html\">Invoice Create</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-users\"></i></span>
                            <span class=\"nxl-mtext\">Objectifs</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
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
                        <p class=\"fs-11 my-3 text-dark\">Fluently - Plateforme d'apprentissage des langues</p>
                        <a href=\"javascript:void(0);\" class=\"btn btn-primary text-dark w-100\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--! ================================================================ !-->
    <!--! [End] Navigation Menu !-->
    <!--! ================================================================ !-->
    
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    <header class=\"nxl-header\">
        <div class=\"header-wrapper\">
            <div class=\"header-right ms-auto\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"nxl-h-item d-none d-sm-flex\">
                        <div class=\"full-screen-switcher\">
                            <a href=\"javascript:void(0);\" class=\"nxl-head-link me-0\" onclick=\"\$('body').fullScreenHelper('toggle');\">
                                <i class=\"feather-maximize maximize\"></i>
                                <i class=\"feather-minimize minimize\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"nxl-h-item dark-light-theme\">
                        <a href=\"javascript:void(0);\" class=\"nxl-head-link me-0 dark-button\">
                            <i class=\"feather-moon\"></i>
                        </a>
                        <a href=\"javascript:void(0);\" class=\"nxl-head-link me-0 light-button\" style=\"display: none\">
                            <i class=\"feather-sun\"></i>
                        </a>
                    </div>
                    
                    <div class=\"dropdown nxl-h-item\">
                        <a class=\"nxl-head-link me-3\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" data-bs-auto-close=\"outside\">
                            <i class=\"feather-bell\"></i>
                            <span class=\"badge bg-danger nxl-h-badge\">3</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-notifications-menu\">
                            <div class=\"d-flex justify-content-between align-items-center notifications-head\">
                                <h6 class=\"fw-bold text-dark mb-0\">Notifications</h6>
                            </div>
                            <div class=\"notifications-item\">
                                <img src=\"{{ asset('assets/images/avatar/2.png') }}\" alt=\"\" class=\"rounded me-3 border\" />
                                <div class=\"notifications-desc\">
                                    <a href=\"javascript:void(0);\" class=\"font-body text-truncate-2-line\">
                                        <span class=\"fw-semibold text-dark\">Nouvelle inscription</span> Un nouvel utilisateur s'est inscrit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"dropdown nxl-h-item\">
                        <a href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" role=\"button\" data-bs-auto-close=\"outside\">
                            <img src=\"{{ asset('assets/images/avatar/1.png') }}\" alt=\"user-image\" class=\"img-fluid user-avtar me-0\" />
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown\">
                            <div class=\"dropdown-header\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"{{ asset('assets/images/avatar/1.png') }}\" alt=\"user-image\" class=\"img-fluid user-avtar\" />
                                    <div>
                                        <h6 class=\"text-dark mb-0\">
                                            {% if app.session.get('user_nom') and app.session.get('user_prenom') %}
                                                {{ app.session.get('user_nom') }} {{ app.session.get('user_prenom') }}
                                            {% else %}
                                                Utilisateur
                                            {% endif %}
                                            <span class=\"badge bg-soft-success text-success ms-1\">
                                                {% if app.session.get('user_role') %}
                                                    {{ app.session.get('user_role')|upper }}
                                                {% else %}
                                                    USER
                                                {% endif %}
                                            </span>
                                        </h6>
                                        <span class=\"fs-12 fw-medium text-muted\">
                                            {% if app.session.get('user_email') %}
                                                {{ app.session.get('user_email') }}
                                            {% else %}
                                                email@example.com
                                            {% endif %}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                    <span class=\"hstack\">
                                        {% if app.session.get('user_statut') == 'online' %}
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2\"></i>
                                            <span>En ligne</span>
                                        {% else %}
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-secondary rounded-circle me-2\"></i>
                                            <span>Hors ligne</span>
                                        {% endif %}
                                    </span>
                                </a>
                            </div>
                            
                            <div class=\"dropdown-divider\"></div>
                            
                            <a href=\"{{ path('app_profile') }}\" class=\"dropdown-item\">
                                <i class=\"feather-user\"></i>
                                <span>Mon Profil</span>
                            </a>
                            
                            <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                <i class=\"feather-bell\"></i>
                                <span>Notifications</span>
                            </a>
                            
                            <div class=\"dropdown-divider\"></div>
                            
                            <a href=\"{{ path('app_logout') }}\" class=\"dropdown-item\">
                                <i class=\"feather-log-out\"></i>
                                <span>Se déconnecter</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class=\"nxl-container\">
        <div class=\"nxl-content\">
            <!-- USER TABLE SECTION START -->
            <div class=\"container mt-4\">
                <h2 class=\"mb-4\">Tous les Utilisateurs</h2>
                
                <!-- Filters -->
                <div class=\"filter-group d-flex gap-3 mb-4\">
                    <select id=\"filterRole\" class=\"form-select w-auto\">
                        <option value=\"\">Tous les Rôles</option>
                        <option value=\"student\">Étudiant</option>
                        <option value=\"teacher\">Professeur</option>
                        <option value=\"admin\">Admin</option>
                        <option value=\"user\">User</option>
                    </select>
                    <select id=\"filterStatus\" class=\"form-select w-auto\">
                        <option value=\"\">Tous les Statuts</option>
                        <option value=\"online\">En ligne</option>
                        <option value=\"offline\">Hors ligne</option>
                    </select>
                </div>
                
                <!-- Users Table -->
                <table id=\"usersTable\" class=\"display table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in users %}
                            <tr>
                                <td>{{ user.nom }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.role }}</td>
                                <td>{{ user.statut }}</td>
                                <td class=\"table-actions\">
                                    <a href=\"{{ path('dashboard_edit_user', {'id': user.id}) }}\" class=\"btn btn-primary btn-sm me-2\">Modifier</a>
                                    <form method=\"post\" action=\"{{ path('dashboard_delete_user', {'id': user.id}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <!-- USER TABLE SECTION END -->
        </div>
        
        <!-- [ Footer ] start -->
        <footer class=\"footer\">
            <p class=\"fs-11 text-muted fw-medium text-uppercase mb-0 copyright\">
                <span>Copyright ©</span>
                <script>document.write(new Date().getFullYear());</script>
            </p>
            <div class=\"d-flex align-items-center gap-4\">
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Aide</a>
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Conditions</a>
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Confidentialité</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
   
    <!--! BEGIN: Vendors JS !-->
    <script src=\"{{ asset('assets/vendors/js/vendors.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/js/daterangepicker.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/js/apexcharts.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/js/circle-progress.min.js') }}\"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src=\"{{ asset('assets/js/common-init.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/dashboard-init.min.js') }}\"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src=\"{{ asset('assets/js/theme-customizer-init.min.js') }}\"></script>
    
    <!-- jQuery & DataTables -->
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
    <script>
        \$(document).ready(function() {
            var table = \$('#usersTable').DataTable({
                \"paging\": true,
                \"info\": true,
                \"lengthChange\": true,
                \"pageLength\": 10,
                \"language\": {
                    \"lengthMenu\": \"Afficher _MENU_ entrées\",
                    \"zeroRecords\": \"Aucun utilisateur trouvé\",
                    \"info\": \"Page _PAGE_ sur _PAGES_\",
                    \"infoEmpty\": \"Aucune entrée disponible\",
                    \"infoFiltered\": \"(filtré de _MAX_ entrées totales)\",
                    \"search\": \"Rechercher:\",
                    \"paginate\": {
                        \"first\": \"Premier\",
                        \"last\": \"Dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédent\"
                    }
                }
            });
            
            \$('#filterRole').on('change', function() {
                table.column(2).search(this.value).draw();
            });
            
            \$('#filterStatus').on('change', function() {
                table.column(3).search(this.value).draw();
            });
        });
    </script>
   
</body>

</html>
", "dashboard/index.html.twig", "C:\\Users\\MSI\\Downloads\\Fluently\\Fluently\\templates\\dashboard\\index.html.twig");
    }
}
