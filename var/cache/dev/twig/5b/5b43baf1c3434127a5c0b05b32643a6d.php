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
class __TwigTemplate_0fb69efba6cf38df4cdc22b4d9cd5df2 extends Template
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
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_test_passages");
        yield "\">Test Passage</a></li>
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
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_session_index");
        yield "\">Session</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
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
        // line 116
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
        // line 130
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
        // line 191
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
        // line 206
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
        // line 221
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
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/1.png"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"img-fluid user-avtar me-0\" />
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown\">
                            <div class=\"dropdown-header\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/1.png"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"img-fluid user-avtar\" />
                                    <div>
                                        <h6 class=\"text-dark mb-0\">Alexandra Della <span class=\"badge bg-soft-success text-success ms-1\">PRO</span></h6>
                                        <span class=\"fs-12 fw-medium text-muted\">alex@example.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\" data-bs-toggle=\"dropdown\">
                                    <span class=\"hstack\">
                                        <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2\"></i>
                                        <span>Active</span>
                                    </span>
                                    <i class=\"feather-chevron-right ms-auto me-0\"></i>
                                </a>
                                <div class=\"dropdown-menu\">
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                        <span class=\"hstack\">
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-warning rounded-circle me-2\"></i>
                                            <span>Always</span>
                                        </span>
                                    </a>
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                        <span class=\"hstack\">
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2\"></i>
                                            <span>Active</span>
                                        </span>
                                    </a>
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                        <span class=\"hstack\">
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-danger rounded-circle me-2\"></i>
                                            <span>Bussy</span>
                                        </span>
                                    </a>
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                        <span class=\"hstack\">
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-info rounded-circle me-2\"></i>
                                            <span>Inactive</span>
                                        </span>
                                    </a>
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                        <span class=\"hstack\">
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-dark rounded-circle me-2\"></i>
                                            <span>Disabled</span>
                                        </span>
                                    </a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                        <span class=\"hstack\">
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-primary rounded-circle me-2\"></i>
                                            <span>Cutomization</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"dropdown-divider\"></div>
                            
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                <i class=\"feather-user\"></i>
                                <span>Profile Details</span>
                            </a>
                            <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                <i class=\"feather-activity\"></i>
                                <span>Activity Feed</span>
                            </a>
                            
                            <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                <i class=\"feather-bell\"></i>
                                <span>Notifications</span>
                            </a>
                            <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                <i class=\"feather-settings\"></i>
                                <span>Account Settings</span>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"./auth-login-minimal.html\" class=\"dropdown-item\">
                                <i class=\"feather-log-out\"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
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
        // line 341
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 360
        yield "    </main>
    
            </div>
            
        </div>
    </div>
   
    <!--! BEGIN: Vendors JS !-->
    <script src=\"";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src=\"";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/daterangepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/circle-progress.min.js"), "html", null, true);
        yield "\"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard-init.min.js"), "html", null, true);
        yield "\"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src=\"";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme-customizer-init.min.js"), "html", null, true);
        yield "\"></script>
   
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 341
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

        // line 342
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
        return array (  536 => 342,  523 => 341,  507 => 379,  501 => 376,  497 => 375,  491 => 372,  487 => 371,  483 => 370,  478 => 368,  468 => 360,  466 => 341,  369 => 247,  361 => 242,  337 => 221,  319 => 206,  301 => 191,  237 => 130,  220 => 116,  207 => 106,  203 => 105,  179 => 84,  175 => 83,  171 => 82,  167 => 81,  155 => 72,  151 => 71,  147 => 70,  143 => 69,  130 => 59,  113 => 45,  109 => 44,  87 => 25,  81 => 22,  77 => 21,  71 => 18,  65 => 15,  49 => 1,);
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
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('app_admin_test_passages') }}\">Test Passage</a></li>
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
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('admin_session_index') }}\">Session</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('admin_reservation_index') }}\">reservation</a></li>
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
                                        <h6 class=\"text-dark mb-0\">Alexandra Della <span class=\"badge bg-soft-success text-success ms-1\">PRO</span></h6>
                                        <span class=\"fs-12 fw-medium text-muted\">alex@example.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dropdown\">
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\" data-bs-toggle=\"dropdown\">
                                    <span class=\"hstack\">
                                        <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2\"></i>
                                        <span>Active</span>
                                    </span>
                                    <i class=\"feather-chevron-right ms-auto me-0\"></i>
                                </a>
                                <div class=\"dropdown-menu\">
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                        <span class=\"hstack\">
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-warning rounded-circle me-2\"></i>
                                            <span>Always</span>
                                        </span>
                                    </a>
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                        <span class=\"hstack\">
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2\"></i>
                                            <span>Active</span>
                                        </span>
                                    </a>
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                        <span class=\"hstack\">
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-danger rounded-circle me-2\"></i>
                                            <span>Bussy</span>
                                        </span>
                                    </a>
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                        <span class=\"hstack\">
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-info rounded-circle me-2\"></i>
                                            <span>Inactive</span>
                                        </span>
                                    </a>
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                        <span class=\"hstack\">
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-dark rounded-circle me-2\"></i>
                                            <span>Disabled</span>
                                        </span>
                                    </a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                        <span class=\"hstack\">
                                            <i class=\"wd-10 ht-10 border border-2 border-gray-1 bg-primary rounded-circle me-2\"></i>
                                            <span>Cutomization</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"dropdown-divider\"></div>
                            
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                <i class=\"feather-user\"></i>
                                <span>Profile Details</span>
                            </a>
                            <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                <i class=\"feather-activity\"></i>
                                <span>Activity Feed</span>
                            </a>
                            
                            <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                <i class=\"feather-bell\"></i>
                                <span>Notifications</span>
                            </a>
                            <a href=\"javascript:void(0);\" class=\"dropdown-item\">
                                <i class=\"feather-settings\"></i>
                                <span>Account Settings</span>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a href=\"./auth-login-minimal.html\" class=\"dropdown-item\">
                                <i class=\"feather-log-out\"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
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

</html>", "dashboard/index.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\dashboard\\index.html.twig");
    }
}
