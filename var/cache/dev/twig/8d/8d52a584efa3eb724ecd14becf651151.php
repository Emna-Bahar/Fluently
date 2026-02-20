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

/* dashboard/user_profile.html.twig */
class __TwigTemplate_b82d2cc5591ccf671749e9a180a6cadf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user_profile.html.twig"));

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

    <title>Mon Profil - Dashboard - Fluently</title>

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
        
        /* Profile card styling */
        .profile-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 20px;
        }
        
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #dee2e6;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 48px;
            color: #495057;
        }
        
        .profile-info {
            margin-bottom: 20px;
        }
        
        .info-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 5px;
        }
        
        .info-value {
            color: #212529;
            padding: 8px 0;
            border-bottom: 1px solid #f8f9fa;
        }
        
        /* Status badges */
        .badge-online {
            background-color: #28a745;
            color: white;
        }
        
        .badge-offline {
            background-color: #6c757d;
            color: white;
        }
        
        /* Role badges */
        .badge-admin {
            background-color: #dc3545;
            color: white;
        }
        
        .badge-user {
            background-color: #007bff;
            color: white;
        }
        
        .badge-student {
            background-color: #17a2b8;
            color: white;
        }
        
        .badge-teacher {
            background-color: #ffc107;
            color: white;
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
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"b-brand\">
                    <img src=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently\" class=\"logo logo-lg\" />
                    <img src=\"";
        // line 149
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
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_user_profile");
        yield "\">Mon Profil</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Gestion Utilisateurs</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-cast\"></i></span>
                            <span class=\"nxl-mtext\">Langues</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\">Langue</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\">Cours</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_index");
        yield "\">Niveau</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_stats");
        yield "\">Statistiques</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item\">
                       <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-cast\"></i></span>
                            <span class=\"nxl-mtext\">Test</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_index");
        yield "\">Tests</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_index");
        yield "\">Questions</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\">Reponse</a></li>
                            
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
        // line 268
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
                        
                                    
                            <div class=\"dropdown-header\">
                           
                                <div class=\"d-flex align-items-center\">
                                    
                        
                                    <div>
                                        <h6 class=\"text-dark mb-0\">
                                            ";
        // line 288
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 288, $this->source); })()), "session", [], "any", false, false, false, 288), "get", ["user_nom"], "method", false, false, false, 288) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 288, $this->source); })()), "session", [], "any", false, false, false, 288), "get", ["user_prenom"], "method", false, false, false, 288))) {
            // line 289
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 289, $this->source); })()), "session", [], "any", false, false, false, 289), "get", ["user_nom"], "method", false, false, false, 289), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 289, $this->source); })()), "session", [], "any", false, false, false, 289), "get", ["user_prenom"], "method", false, false, false, 289), "html", null, true);
            yield "
                                            ";
        } else {
            // line 291
            yield "                                                Utilisateur
                                            ";
        }
        // line 293
        yield "                                            <span class=\"badge bg-soft-success text-success ms-1\">
                                                ";
        // line 294
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 294, $this->source); })()), "session", [], "any", false, false, false, 294), "get", ["user_role"], "method", false, false, false, 294)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 295
            yield "                                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 295, $this->source); })()), "session", [], "any", false, false, false, 295), "get", ["user_role"], "method", false, false, false, 295)), "html", null, true);
            yield "
                                                ";
        } else {
            // line 297
            yield "                                                    USER
                                                ";
        }
        // line 299
        yield "                                            </span>
                                        </h6>
                                        <span class=\"fs-12 fw-medium text-muted\">
                                            ";
        // line 302
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 302, $this->source); })()), "session", [], "any", false, false, false, 302), "get", ["user_email"], "method", false, false, false, 302)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 303
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "session", [], "any", false, false, false, 303), "get", ["user_email"], "method", false, false, false, 303), "html", null, true);
            yield "
                                            ";
        } else {
            // line 305
            yield "                                                email@example.com
                                            ";
        }
        // line 307
        yield "                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                    <span class=\"hstack\">
                                        ";
        // line 315
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 315, $this->source); })()), "session", [], "any", false, false, false, 315), "get", ["user_statut"], "method", false, false, false, 315) == "online")) {
            // line 316
            yield "                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2\"></i>
                                            <span>En ligne</span>
                                        ";
        } else {
            // line 319
            yield "                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-secondary rounded-circle me-2\"></i>
                                            <span>Hors ligne</span>
                                        ";
        }
        // line 322
        yield "                                    </span>
                                </a>
                            </div>
                            
                            <div class=\"dropdown-divider\"></div>
                            
                            <a href=\"";
        // line 328
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_user_profile");
        yield "\" class=\"dropdown-item\">
                                <i class=\"feather-user\"></i>
                                <span>Mon Profil</span>
                            </a>
                            
                            <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                <i class=\"feather-bell\"></i>
                                <span>Notifications</span>
                            </a>
                            
                           
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
            <!-- PROFILE SECTION START -->
            <div class=\"container mt-4\">
                <h2 class=\"mb-4\">Mon Profil</h2>
                
                <div class=\"profile-card\">
                    <div class=\"profile-header\">
                        <div class=\"profile-avatar\">
                            <i class=\"feather-user\"></i>
                        </div>
                        <h3>";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 362, $this->source); })()), "nom", [], "any", false, false, false, 362), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 362, $this->source); })()), "prenom", [], "any", false, false, false, 362), "html", null, true);
        yield "</h3>
                        <div class=\"mt-2\">
                            ";
        // line 364
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 364, $this->source); })()), "role", [], "any", false, false, false, 364) == "admin")) {
            // line 365
            yield "                                <span class=\"badge badge-admin p-2\">ADMIN</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 366
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 366, $this->source); })()), "role", [], "any", false, false, false, 366) == "user")) {
            // line 367
            yield "                                <span class=\"badge badge-user p-2\">USER</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 368
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 368, $this->source); })()), "role", [], "any", false, false, false, 368) == "student")) {
            // line 369
            yield "                                <span class=\"badge badge-student p-2\">ÉTUDIANT</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 370
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 370, $this->source); })()), "role", [], "any", false, false, false, 370) == "teacher")) {
            // line 371
            yield "                                <span class=\"badge badge-teacher p-2\">PROFESSEUR</span>
                            ";
        } else {
            // line 373
            yield "                                <span class=\"badge bg-secondary p-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 373, $this->source); })()), "role", [], "any", false, false, false, 373)), "html", null, true);
            yield "</span>
                            ";
        }
        // line 375
        yield "                            
                            ";
        // line 376
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 376, $this->source); })()), "statut", [], "any", false, false, false, 376) == "online")) {
            // line 377
            yield "                                <span class=\"badge badge-online p-2 ms-2\">EN LIGNE</span>
                            ";
        } else {
            // line 379
            yield "                                <span class=\"badge badge-offline p-2 ms-2\">HORS LIGNE</span>
                            ";
        }
        // line 381
        yield "                        </div>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"profile-info\">
                                <div class=\"info-label\">Nom Complet</div>
                                <div class=\"info-value\">";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 388, $this->source); })()), "nom", [], "any", false, false, false, 388), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 388, $this->source); })()), "prenom", [], "any", false, false, false, 388), "html", null, true);
        yield "</div>
                            </div>
                            
                            <div class=\"profile-info\">
                                <div class=\"info-label\">Adresse Email</div>
                                <div class=\"info-value\">";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 393, $this->source); })()), "email", [], "any", false, false, false, 393), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <div class=\"profile-info\">
                                <div class=\"info-label\">Rôle</div>
                                <div class=\"info-value\">
                                    ";
        // line 401
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 401, $this->source); })()), "role", [], "any", false, false, false, 401) == "admin")) {
            // line 402
            yield "                                        Administrateur
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 403
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 403, $this->source); })()), "role", [], "any", false, false, false, 403) == "user")) {
            // line 404
            yield "                                        Utilisateur
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 405
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 405, $this->source); })()), "role", [], "any", false, false, false, 405) == "student")) {
            // line 406
            yield "                                        Étudiant
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 407
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 407, $this->source); })()), "role", [], "any", false, false, false, 407) == "teacher")) {
            // line 408
            yield "                                        Professeur
                                    ";
        } else {
            // line 410
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 410, $this->source); })()), "role", [], "any", false, false, false, 410), "html", null, true);
            yield "
                                    ";
        }
        // line 412
        yield "                                </div>
                            </div>
                            
                            <div class=\"profile-info\">
                                <div class=\"info-label\">Statut</div>
                                <div class=\"info-value\">
                                    ";
        // line 418
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 418, $this->source); })()), "statut", [], "any", false, false, false, 418) == "online")) {
            // line 419
            yield "                                        <span class=\"text-success\">● En ligne</span>
                                    ";
        } else {
            // line 421
            yield "                                        <span class=\"text-secondary\">● Hors ligne</span>
                                    ";
        }
        // line 423
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"text-center mt-4\">
                        <a href=\"";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 429, $this->source); })()), "id", [], "any", false, false, false, 429)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                            <i class=\"feather-edit me-2\"></i>Modifier mon profil
                        </a>
                        <a href=\"";
        // line 432
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"btn btn-outline-secondary ms-2\">
                            <i class=\"feather-arrow-left me-2\"></i>Retour au tableau de bord
                        </a>
                    </div>
                </div>
            </div>
            <!-- PROFILE SECTION END -->
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
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/daterangepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/circle-progress.min.js"), "html", null, true);
        yield "\"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src=\"";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard-init.min.js"), "html", null, true);
        yield "\"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src=\"";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme-customizer-init.min.js"), "html", null, true);
        yield "\"></script>
    
    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
   
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
        return "dashboard/user_profile.html.twig";
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
        return array (  699 => 470,  693 => 467,  689 => 466,  683 => 463,  679 => 462,  675 => 461,  671 => 460,  640 => 432,  634 => 429,  626 => 423,  622 => 421,  618 => 419,  616 => 418,  608 => 412,  602 => 410,  598 => 408,  596 => 407,  593 => 406,  591 => 405,  588 => 404,  586 => 403,  583 => 402,  581 => 401,  570 => 393,  560 => 388,  551 => 381,  547 => 379,  543 => 377,  541 => 376,  538 => 375,  532 => 373,  528 => 371,  526 => 370,  523 => 369,  521 => 368,  518 => 367,  516 => 366,  513 => 365,  511 => 364,  504 => 362,  467 => 328,  459 => 322,  454 => 319,  449 => 316,  447 => 315,  437 => 307,  433 => 305,  427 => 303,  425 => 302,  420 => 299,  416 => 297,  410 => 295,  408 => 294,  405 => 293,  401 => 291,  393 => 289,  391 => 288,  368 => 268,  284 => 187,  280 => 186,  276 => 185,  264 => 176,  260 => 175,  256 => 174,  252 => 173,  240 => 164,  236 => 163,  219 => 149,  215 => 148,  211 => 147,  86 => 25,  80 => 22,  76 => 21,  70 => 18,  64 => 15,  48 => 1,);
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

    <title>Mon Profil - Dashboard - Fluently</title>

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
        
        /* Profile card styling */
        .profile-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 20px;
        }
        
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #dee2e6;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 48px;
            color: #495057;
        }
        
        .profile-info {
            margin-bottom: 20px;
        }
        
        .info-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 5px;
        }
        
        .info-value {
            color: #212529;
            padding: 8px 0;
            border-bottom: 1px solid #f8f9fa;
        }
        
        /* Status badges */
        .badge-online {
            background-color: #28a745;
            color: white;
        }
        
        .badge-offline {
            background-color: #6c757d;
            color: white;
        }
        
        /* Role badges */
        .badge-admin {
            background-color: #dc3545;
            color: white;
        }
        
        .badge-user {
            background-color: #007bff;
            color: white;
        }
        
        .badge-student {
            background-color: #17a2b8;
            color: white;
        }
        
        .badge-teacher {
            background-color: #ffc107;
            color: white;
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
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('dashboard_user_profile') }}\">Mon Profil</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('dashboard') }}\">Gestion Utilisateurs</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-cast\"></i></span>
                            <span class=\"nxl-mtext\">Langues</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('app_admin_langue_index') }}\">Langue</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('app_cours_index') }}\">Cours</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('app_niveau_index') }}\">Niveau</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('app_admin_langue_stats') }}\">Statistiques</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item\">
                       <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-cast\"></i></span>
                            <span class=\"nxl-mtext\">Test</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('app_test_index') }}\">Tests</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('app_question_index') }}\">Questions</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('app_reponse_index') }}\">Reponse</a></li>
                            
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
                        
                                    
                            <div class=\"dropdown-header\">
                           
                                <div class=\"d-flex align-items-center\">
                                    
                        
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
                            
                            <a href=\"{{ path('dashboard_user_profile') }}\" class=\"dropdown-item\">
                                <i class=\"feather-user\"></i>
                                <span>Mon Profil</span>
                            </a>
                            
                            <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                <i class=\"feather-bell\"></i>
                                <span>Notifications</span>
                            </a>
                            
                           
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
            <!-- PROFILE SECTION START -->
            <div class=\"container mt-4\">
                <h2 class=\"mb-4\">Mon Profil</h2>
                
                <div class=\"profile-card\">
                    <div class=\"profile-header\">
                        <div class=\"profile-avatar\">
                            <i class=\"feather-user\"></i>
                        </div>
                        <h3>{{ user.nom }} {{ user.prenom }}</h3>
                        <div class=\"mt-2\">
                            {% if user.role == 'admin' %}
                                <span class=\"badge badge-admin p-2\">ADMIN</span>
                            {% elseif user.role == 'user' %}
                                <span class=\"badge badge-user p-2\">USER</span>
                            {% elseif user.role == 'student' %}
                                <span class=\"badge badge-student p-2\">ÉTUDIANT</span>
                            {% elseif user.role == 'teacher' %}
                                <span class=\"badge badge-teacher p-2\">PROFESSEUR</span>
                            {% else %}
                                <span class=\"badge bg-secondary p-2\">{{ user.role|upper }}</span>
                            {% endif %}
                            
                            {% if user.statut == 'online' %}
                                <span class=\"badge badge-online p-2 ms-2\">EN LIGNE</span>
                            {% else %}
                                <span class=\"badge badge-offline p-2 ms-2\">HORS LIGNE</span>
                            {% endif %}
                        </div>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"profile-info\">
                                <div class=\"info-label\">Nom Complet</div>
                                <div class=\"info-value\">{{ user.nom }} {{ user.prenom }}</div>
                            </div>
                            
                            <div class=\"profile-info\">
                                <div class=\"info-label\">Adresse Email</div>
                                <div class=\"info-value\">{{ user.email }}</div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <div class=\"profile-info\">
                                <div class=\"info-label\">Rôle</div>
                                <div class=\"info-value\">
                                    {% if user.role == 'admin' %}
                                        Administrateur
                                    {% elseif user.role == 'user' %}
                                        Utilisateur
                                    {% elseif user.role == 'student' %}
                                        Étudiant
                                    {% elseif user.role == 'teacher' %}
                                        Professeur
                                    {% else %}
                                        {{ user.role }}
                                    {% endif %}
                                </div>
                            </div>
                            
                            <div class=\"profile-info\">
                                <div class=\"info-label\">Statut</div>
                                <div class=\"info-value\">
                                    {% if user.statut == 'online' %}
                                        <span class=\"text-success\">● En ligne</span>
                                    {% else %}
                                        <span class=\"text-secondary\">● Hors ligne</span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"text-center mt-4\">
                        <a href=\"{{ path('dashboard_edit_user', {'id': user.id}) }}\" class=\"btn btn-primary\">
                            <i class=\"feather-edit me-2\"></i>Modifier mon profil
                        </a>
                        <a href=\"{{ path('dashboard') }}\" class=\"btn btn-outline-secondary ms-2\">
                            <i class=\"feather-arrow-left me-2\"></i>Retour au tableau de bord
                        </a>
                    </div>
                </div>
            </div>
            <!-- PROFILE SECTION END -->
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
    
    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
   
</body>

</html>", "dashboard/user_profile.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\dashboard\\user_profile.html.twig");
    }
}
