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
class __TwigTemplate_cffdee84bdf683184352e69768fd8d9a extends Template
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
            'body' => [$this, 'block_body'],
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
    

    <!--! END:  Apps Title-->
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
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn\"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
\t\t\t<script src=\"https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t\t<script src=\"https:oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    <nav class=\"nxl-navigation\">
        <div class=\"navbar-wrapper\">
            <div class=\"m-header\">
                <a href=\"index.html\" class=\"b-brand\">
    <!-- ========   change your logo hear   ============ -->
    <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently\" class=\"logo logo-lg\" />
    <img src=\"";
        // line 45
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
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Users</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-cast\"></i></span>
                            <span class=\"nxl-mtext\">Langues</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\">Langue</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\">Cours</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_index");
        yield "\">Niveau</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 72
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
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_index");
        yield "\">Tests</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_index");
        yield "\">Questions</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\">Reponse</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"nxl-item\">
                        <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_group_index");
        yield "\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-at-sign\"></i></span>
                            <span class=\"nxl-mtext\">Groupes</span>
                        </a>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-dollar-sign\"></i></span>
                            <span class=\"nxl-mtext\">Sessions</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_prof_dashboard");
        yield "\">Session</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_professeur");
        yield "\">reservation</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-users\"></i></span>
                            <span class=\"nxl-mtext\">Objectifs</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
        <li class=\"nxl-item\">
            <a class=\"nxl-link\" href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_index");
        yield "\">
                Liste des objectifs
            </a>
        </li>
       
    </ul>
    <li class=\"nxl-item nxl-hasmenu\">
    <a href=\"javascript:void(0);\" class=\"nxl-link\">
        <span class=\"nxl-micon\"><i class=\"feather-check-square\"></i></span>
        <span class=\"nxl-mtext\">Tâches</span>
        <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
    </a>
    <ul class=\"nxl-submenu\">
        <li class=\"nxl-item\">
            <a class=\"nxl-link\" href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tache_admin_index");
        yield "\">
                Liste des tâches
            </a>
        </li>
       
    </ul>
</li>
                    </li>
                    
                </ul>
                
            </div>
        </div>
    </nav>
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    <header class=\"nxl-header\">
        <div class=\"header-wrapper\">
            <!--! [Start] Header Left !-->
            
            <!--! [End] Header Left !-->
            <!--! [Start] Header Right !-->
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
                                <a href=\"javascript:void(0);\" class=\"fs-11 text-success text-end ms-auto\" data-bs-toggle=\"tooltip\" title=\"Make as Read\">
                                    <i class=\"feather-check\"></i>
                                    <span>Make as Read</span>
                                </a>
                            </div>
                            <div class=\"notifications-item\">
                                <img src=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"rounded me-3 border\" />
                                <div class=\"notifications-desc\">
                                    <a href=\"javascript:void(0);\" class=\"font-body text-truncate-2-line\"> <span class=\"fw-semibold text-dark\">Malanie Hanvey</span> We should talk about that at lunch!</a>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"notifications-date text-muted border-bottom border-bottom-dashed\">2 minutes ago</div>
                                        <div class=\"d-flex align-items-center float-end gap-2\">
                                            <a href=\"javascript:void(0);\" class=\"d-block wd-8 ht-8 rounded-circle bg-gray-300\" data-bs-toggle=\"tooltip\" title=\"Make as Read\"></a>
                                            <a href=\"javascript:void(0);\" class=\"text-danger\" data-bs-toggle=\"tooltip\" title=\"Remove\">
                                                <i class=\"feather-x fs-12\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"notifications-item\">
                                <img src=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"rounded me-3 border\" />
                                <div class=\"notifications-desc\">
                                    <a href=\"javascript:void(0);\" class=\"font-body text-truncate-2-line\"> <span class=\"fw-semibold text-dark\">Valentine Maton</span> You can download the latest invoices now.</a>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"notifications-date text-muted border-bottom border-bottom-dashed\">36 minutes ago</div>
                                        <div class=\"d-flex align-items-center float-end gap-2\">
                                            <a href=\"javascript:void(0);\" class=\"d-block wd-8 ht-8 rounded-circle bg-gray-300\" data-bs-toggle=\"tooltip\" title=\"Make as Read\"></a>
                                            <a href=\"javascript:void(0);\" class=\"text-danger\" data-bs-toggle=\"tooltip\" title=\"Remove\">
                                                <i class=\"feather-x fs-12\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"notifications-item\">
                                <img src=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"rounded me-3 border\" />
                                <div class=\"notifications-desc\">
                                    <a href=\"javascript:void(0);\" class=\"font-body text-truncate-2-line\"> <span class=\"fw-semibold text-dark\">Archie Cantones</span> Don't forget to pickup Jeremy after school!</a>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"notifications-date text-muted border-bottom border-bottom-dashed\">53 minutes ago</div>
                                        <div class=\"d-flex align-items-center float-end gap-2\">
                                            <a href=\"javascript:void(0);\" class=\"d-block wd-8 ht-8 rounded-circle bg-gray-300\" data-bs-toggle=\"tooltip\" title=\"Make as Read\"></a>
                                            <a href=\"javascript:void(0);\" class=\"text-danger\" data-bs-toggle=\"tooltip\" title=\"Remove\">
                                                <i class=\"feather-x fs-12\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center notifications-footer\">
                                <a href=\"javascript:void(0);\" class=\"fs-13 fw-semibold text-dark\">Alls Notifications</a>
                            </div>
                        </div>
                    </div>
                   <div class=\"dropdown nxl-h-item\">
    <a href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" role=\"button\" data-bs-auto-close=\"outside\">
        <img src=\"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/1.png"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"img-fluid user-avtar me-0\" />
    </a>
    <div class=\"dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown\">
        <div class=\"dropdown-header\">
            <div class=\"d-flex align-items-center\">
                <img src=\"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/1.png"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"img-fluid user-avtar\" />
                <div>
                    <h6 class=\"text-dark mb-0\">
                        ";
        // line 244
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 244, $this->source); })()), "user", [], "any", false, false, false, 244)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 245
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 245, $this->source); })()), "user", [], "any", false, false, false, 245), "nom", [], "any", false, false, false, 245), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 245, $this->source); })()), "user", [], "any", false, false, false, 245), "prenom", [], "any", false, false, false, 245), "html", null, true);
            yield "
                            <span class=\"badge bg-soft-success text-success ms-1\">
                                ";
            // line 247
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 247), "roles", [], "any", true, true, false, 247) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 247, $this->source); })()), "user", [], "any", false, false, false, 247), "roles", [], "any", false, false, false, 247), 0, [], "array", false, false, false, 247))) {
                // line 248
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 248, $this->source); })()), "user", [], "any", false, false, false, 248), "roles", [], "any", false, false, false, 248), 0, [], "array", false, false, false, 248), ["ROLE_" => " "])), "html", null, true);
                yield "
                                ";
            } else {
                // line 250
                yield "                                    USER
                                ";
            }
            // line 252
            yield "                            </span>
                        ";
        } else {
            // line 254
            yield "                            Utilisateur
                        ";
        }
        // line 256
        yield "                    </h6>
                    <span class=\"fs-12 fw-medium text-muted\">
                        ";
        // line 258
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 258, $this->source); })()), "user", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 259
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 259, $this->source); })()), "user", [], "any", false, false, false, 259), "email", [], "any", false, false, false, 259), "html", null, true);
            yield "
                        ";
        } else {
            // line 261
            yield "                            email@example.com
                        ";
        }
        // line 263
        yield "                    </span>
                </div>
            </div>
        </div>

        <div class=\"dropdown-divider\"></div>

        <a href=\"";
        // line 270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_user_profile");
        yield "\" class=\"dropdown-item\">
            <i class=\"feather-user\"></i>
            <span>Mon Profil</span>
        </a>
        <a href=\"";
        // line 274
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"dropdown-item\">
            <i class=\"feather-log-out\"></i>
            <span>Logout</span>
        </a>
    </div>
</div>

            <!--! [End] Header Right !-->
        </div>
    </header>
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class=\"nxl-container\">
      ";
        // line 291
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 310
        yield "    </main>
    
            </div>
            
        </div>
    </div>
   
    <!--! BEGIN: Vendors JS !-->
    <script src=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src=\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/daterangepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/circle-progress.min.js"), "html", null, true);
        yield "\"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard-init.min.js"), "html", null, true);
        yield "\"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src=\"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme-customizer-init.min.js"), "html", null, true);
        yield "\"></script>
   
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 291
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

        // line 292
        yield "        
        <!-- [ Footer ] start -->
        <footer class=\"footer\">
            <p class=\"fs-11 text-muted fw-medium text-uppercase mb-0 copyright\">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <p><span>By: <a target=\"_blank\" href=\"https://wrapbootstrap.com/user/theme_ocean\" target=\"_blank\">theme_ocean</a></span> • <span>Distributed by: <a target=\"_blank\" href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a></span></p>
            <div class=\"d-flex align-items-center gap-4\">
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Help</a>
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Terms</a>
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
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
        return array (  521 => 292,  508 => 291,  492 => 329,  486 => 326,  482 => 325,  476 => 322,  472 => 321,  468 => 320,  463 => 318,  453 => 310,  451 => 291,  431 => 274,  424 => 270,  415 => 263,  411 => 261,  405 => 259,  403 => 258,  399 => 256,  395 => 254,  391 => 252,  387 => 250,  381 => 248,  379 => 247,  371 => 245,  369 => 244,  363 => 241,  355 => 236,  331 => 215,  313 => 200,  295 => 185,  231 => 124,  214 => 110,  201 => 100,  197 => 99,  183 => 88,  175 => 83,  171 => 82,  167 => 81,  155 => 72,  151 => 71,  147 => 70,  143 => 69,  130 => 59,  113 => 45,  109 => 44,  87 => 25,  81 => 22,  77 => 21,  71 => 18,  65 => 15,  49 => 1,);
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
    

    <!--! END:  Apps Title-->
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
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn\"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
\t\t\t<script src=\"https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t\t<script src=\"https:oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    <nav class=\"nxl-navigation\">
        <div class=\"navbar-wrapper\">
            <div class=\"m-header\">
                <a href=\"index.html\" class=\"b-brand\">
    <!-- ========   change your logo hear   ============ -->
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
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('dashboard') }}\">Users</a></li>
                            
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
                    <li class=\"nxl-item\">
                        <a href=\"{{ path('admin_group_index') }}\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-at-sign\"></i></span>
                            <span class=\"nxl-mtext\">Groupes</span>
                        </a>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-dollar-sign\"></i></span>
                            <span class=\"nxl-mtext\">Sessions</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('session_prof_dashboard') }}\">Session</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('reservation_professeur') }}\">reservation</a></li>
                        </ul>
                    </li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-users\"></i></span>
                            <span class=\"nxl-mtext\">Objectifs</span><span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
        <li class=\"nxl-item\">
            <a class=\"nxl-link\" href=\"{{ path('app_objectif_admin_index') }}\">
                Liste des objectifs
            </a>
        </li>
       
    </ul>
    <li class=\"nxl-item nxl-hasmenu\">
    <a href=\"javascript:void(0);\" class=\"nxl-link\">
        <span class=\"nxl-micon\"><i class=\"feather-check-square\"></i></span>
        <span class=\"nxl-mtext\">Tâches</span>
        <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
    </a>
    <ul class=\"nxl-submenu\">
        <li class=\"nxl-item\">
            <a class=\"nxl-link\" href=\"{{ path('app_tache_admin_index') }}\">
                Liste des tâches
            </a>
        </li>
       
    </ul>
</li>
                    </li>
                    
                </ul>
                
            </div>
        </div>
    </nav>
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    <header class=\"nxl-header\">
        <div class=\"header-wrapper\">
            <!--! [Start] Header Left !-->
            
            <!--! [End] Header Left !-->
            <!--! [Start] Header Right !-->
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
                                <a href=\"javascript:void(0);\" class=\"fs-11 text-success text-end ms-auto\" data-bs-toggle=\"tooltip\" title=\"Make as Read\">
                                    <i class=\"feather-check\"></i>
                                    <span>Make as Read</span>
                                </a>
                            </div>
                            <div class=\"notifications-item\">
                                <img src=\"{{ asset('assets/images/avatar/2.png') }}\" alt=\"\" class=\"rounded me-3 border\" />
                                <div class=\"notifications-desc\">
                                    <a href=\"javascript:void(0);\" class=\"font-body text-truncate-2-line\"> <span class=\"fw-semibold text-dark\">Malanie Hanvey</span> We should talk about that at lunch!</a>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"notifications-date text-muted border-bottom border-bottom-dashed\">2 minutes ago</div>
                                        <div class=\"d-flex align-items-center float-end gap-2\">
                                            <a href=\"javascript:void(0);\" class=\"d-block wd-8 ht-8 rounded-circle bg-gray-300\" data-bs-toggle=\"tooltip\" title=\"Make as Read\"></a>
                                            <a href=\"javascript:void(0);\" class=\"text-danger\" data-bs-toggle=\"tooltip\" title=\"Remove\">
                                                <i class=\"feather-x fs-12\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"notifications-item\">
                                <img src=\"{{ asset('assets/images/avatar/3.png') }}\" alt=\"\" class=\"rounded me-3 border\" />
                                <div class=\"notifications-desc\">
                                    <a href=\"javascript:void(0);\" class=\"font-body text-truncate-2-line\"> <span class=\"fw-semibold text-dark\">Valentine Maton</span> You can download the latest invoices now.</a>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"notifications-date text-muted border-bottom border-bottom-dashed\">36 minutes ago</div>
                                        <div class=\"d-flex align-items-center float-end gap-2\">
                                            <a href=\"javascript:void(0);\" class=\"d-block wd-8 ht-8 rounded-circle bg-gray-300\" data-bs-toggle=\"tooltip\" title=\"Make as Read\"></a>
                                            <a href=\"javascript:void(0);\" class=\"text-danger\" data-bs-toggle=\"tooltip\" title=\"Remove\">
                                                <i class=\"feather-x fs-12\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"notifications-item\">
                                <img src=\"{{ asset('assets/images/avatar/4.png') }}\" alt=\"\" class=\"rounded me-3 border\" />
                                <div class=\"notifications-desc\">
                                    <a href=\"javascript:void(0);\" class=\"font-body text-truncate-2-line\"> <span class=\"fw-semibold text-dark\">Archie Cantones</span> Don't forget to pickup Jeremy after school!</a>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"notifications-date text-muted border-bottom border-bottom-dashed\">53 minutes ago</div>
                                        <div class=\"d-flex align-items-center float-end gap-2\">
                                            <a href=\"javascript:void(0);\" class=\"d-block wd-8 ht-8 rounded-circle bg-gray-300\" data-bs-toggle=\"tooltip\" title=\"Make as Read\"></a>
                                            <a href=\"javascript:void(0);\" class=\"text-danger\" data-bs-toggle=\"tooltip\" title=\"Remove\">
                                                <i class=\"feather-x fs-12\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center notifications-footer\">
                                <a href=\"javascript:void(0);\" class=\"fs-13 fw-semibold text-dark\">Alls Notifications</a>
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
                        {% if app.user %}
                            {{ app.user.nom }} {{ app.user.prenom }}
                            <span class=\"badge bg-soft-success text-success ms-1\">
                                {% if app.user.roles is defined and app.user.roles[0] %}
                                    {{ app.user.roles[0]|replace({'ROLE_':' '})|upper }}
                                {% else %}
                                    USER
                                {% endif %}
                            </span>
                        {% else %}
                            Utilisateur
                        {% endif %}
                    </h6>
                    <span class=\"fs-12 fw-medium text-muted\">
                        {% if app.user %}
                            {{ app.user.email }}
                        {% else %}
                            email@example.com
                        {% endif %}
                    </span>
                </div>
            </div>
        </div>

        <div class=\"dropdown-divider\"></div>

        <a href=\"{{ path('dashboard_user_profile') }}\" class=\"dropdown-item\">
            <i class=\"feather-user\"></i>
            <span>Mon Profil</span>
        </a>
        <a href=\"{{ path('app_logout') }}\" class=\"dropdown-item\">
            <i class=\"feather-log-out\"></i>
            <span>Logout</span>
        </a>
    </div>
</div>

            <!--! [End] Header Right !-->
        </div>
    </header>
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class=\"nxl-container\">
      {% block body %}
        
        <!-- [ Footer ] start -->
        <footer class=\"footer\">
            <p class=\"fs-11 text-muted fw-medium text-uppercase mb-0 copyright\">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <p><span>By: <a target=\"_blank\" href=\"https://wrapbootstrap.com/user/theme_ocean\" target=\"_blank\">theme_ocean</a></span> • <span>Distributed by: <a target=\"_blank\" href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a></span></p>
            <div class=\"d-flex align-items-center gap-4\">
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Help</a>
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Terms</a>
                <a href=\"javascript:void(0);\" class=\"fs-11 fw-semibold text-uppercase\">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
     {% endblock %}
    </main>
    
            </div>
            
        </div>
    </div>
   
    <!--! BEGIN: Vendors JS !-->
    <script src=\"{{ asset('assets/vendors/js/vendors.min.js') }}\"></script>
    <!-- vendors.min.js {always must need to be top} -->
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
   
</body>

</html>", "dashboard/index.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\dashboard\\index.html.twig");
    }
}
