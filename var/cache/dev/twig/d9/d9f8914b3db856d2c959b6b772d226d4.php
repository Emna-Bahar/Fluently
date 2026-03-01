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

/* dashboard/new.html.twig */
class __TwigTemplate_5acdbb2535d94208170e0b0d24f7c8e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/new.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"zxx\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>Nouvelle Session - Backoffice</title>
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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.9.4/dist/css/tempus-dominus.min.css\">
</head>
<body>

<nav class=\"nxl-navigation\">
    <div class=\"navbar-wrapper\">
        <div class=\"m-header\">
            <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"b-brand\">
                <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently\" class=\"logo logo-lg\" />
                <img src=\"";
        // line 23
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
        // line 36
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
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_prof_dashboard");
        yield "\">Tableau de bord</a></li>
                        <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 88
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
                    <p class=\"fs-11 my-3 text-dark\">Duralux is a production ready CRM.</p>
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
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "flashes", ["success"], "method", false, false, false, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 129
            yield "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "flashes", ["error"], "method", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 135
            yield "                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 141
            yield "                <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"h2 mb-0\">Créer une nouvelle session</h1>
                <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_prof_dashboard");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fa fa-arrow-left me-2\"></i> Retour au dashboard
                </a>
            </div>

            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h5 class=\"mb-0\">Formulaire de création</h5>
                </div>
                <div class=\"card-body\">

                    ";
        // line 160
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                    <div class=\"row g-3\">

                        <div class=\"col-md-6\">
                            <label class=\"form-label fw-semibold\">Date et Heure</label>

                            <div class=\"input-group\">
                                <input type=\"text\"
                                       id=\"dt_display\"
                                       class=\"form-control\"
                                       placeholder=\"jj/mm/aaaa hh:mm\"
                                       autocomplete=\"off\"
                                       style=\"cursor:pointer;\" />
                                <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"dt_btn\">
                                    <i class=\"fa fa-calendar\"></i>
                                </button>
                            </div>

                            ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "dateHeure", [], "any", false, false, false, 179), 'widget', ["attr" => ["id" => "sf_date", "style" => "position:absolute;width:1px;height:1px;opacity:0;pointer-events:none;", "tabindex" => "-1"]]);
        // line 185
        yield "

                            <div class=\"text-danger mt-1\">";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "dateHeure", [], "any", false, false, false, 187), 'errors');
        yield "</div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "statut", [], "any", false, false, false, 192), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "statut", [], "any", false, false, false, 193), 'label');
        yield "
                                <div class=\"text-danger\">";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "statut", [], "any", false, false, false, 194), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "lienReunion", [], "any", false, false, false, 200), 'widget');
        yield "
                                ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "lienReunion", [], "any", false, false, false, 201), 'label');
        yield "
                                <div class=\"text-danger\">";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "lienReunion", [], "any", false, false, false, 202), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "group", [], "any", false, false, false, 208), 'widget');
        yield "
                                ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "group", [], "any", false, false, false, 209), 'label');
        yield "
                                <div class=\"text-danger\">";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "group", [], "any", false, false, false, 210), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "user", [], "any", false, false, false, 216), 'widget');
        yield "
                                ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217), 'label', ["label" => "Professeur"]);
        yield "
                                <div class=\"text-danger\">";
        // line 218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "user", [], "any", false, false, false, 218), 'errors');
        yield "</div>
                            </div>
                        </div>

                    </div>

                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                            <i class=\"fa fa-save me-2\"></i> Enregistrer la session
                        </button>
                        <a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_prof_dashboard");
        yield "\" class=\"btn btn-outline-secondary btn-lg px-5 ms-3\">
                            <i class=\"fa fa-times me-2\"></i> Annuler
                        </a>
                    </div>

                    ";
        // line 233
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), 'form_end');
        yield "
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

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.9.4/dist/js/tempus-dominus.min.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const display = document.getElementById('dt_display');
    const btn     = document.getElementById('dt_btn');
    const sfInput = document.querySelector('input[name=\"session[dateHeure]\"]');

    if (!sfInput) { console.error('Champ Symfony introuvable !'); return; }

    const picker = new tempusDominus.TempusDominus(display, {
        display: {
            viewMode: 'calendar',
            components: {
                decades: true, year: true, month: true,
                date: true, hours: true, minutes: true, seconds: false
            },
            icons: {
                time    : 'fa fa-clock',
                date    : 'fa fa-calendar',
                up      : 'fa fa-arrow-up',
                down    : 'fa fa-arrow-down',
                previous: 'fa fa-chevron-left',
                next    : 'fa fa-chevron-right',
                today   : 'fa fa-calendar-check',
                clear   : 'fa fa-trash',
                close   : 'fa fa-times'
            },
            buttons: { today: false, clear: true, close: true },
            theme: 'light'
        },
        localization: {
            locale        : 'fr',
            format        : 'dd/MM/yyyy HH:mm',
            startOfTheWeek: 1
        },
        stepping      : 15,
        useCurrent    : false,
        allowInputToggle: true
    });

    // Sync picker → champ Symfony (format dd/MM/yyyy HH:mm pour html5=false)
    display.addEventListener(tempusDominus.Namespace.events.change, function (e) {
        if (e.detail && e.detail.date) {
            const d   = e.detail.date;
            const pad = n => String(n).padStart(2, '0');
            const val = pad(d.date) + '/' + pad(d.month+1) + '/' + d.year
                      + ' ' + pad(d.hours) + ':' + pad(d.minutes);
            display.value = val;
            sfInput.value = val;
        } else {
            display.value = '';
            sfInput.value = '';
        }
    });

    // Bouton calendrier
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        picker.toggle();
    });

    // Bloque saisie clavier directe
    display.addEventListener('keydown', e => e.preventDefault());
});
</script>

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
        return "dashboard/new.html.twig";
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
        return array (  398 => 233,  390 => 228,  377 => 218,  373 => 217,  369 => 216,  360 => 210,  356 => 209,  352 => 208,  343 => 202,  339 => 201,  335 => 200,  326 => 194,  322 => 193,  318 => 192,  310 => 187,  306 => 185,  304 => 179,  282 => 160,  268 => 149,  263 => 146,  253 => 142,  250 => 141,  245 => 140,  235 => 136,  232 => 135,  227 => 134,  217 => 130,  214 => 129,  210 => 128,  167 => 88,  163 => 87,  109 => 36,  93 => 23,  89 => 22,  85 => 21,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>Nouvelle Session - Backoffice</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('assets/images/favicon.ico') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendors/css/vendors.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendors/css/daterangepicker.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/theme.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.9.4/dist/css/tempus-dominus.min.css\">
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
                    <p class=\"fs-11 my-3 text-dark\">Duralux is a production ready CRM.</p>
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
                <h1 class=\"h2 mb-0\">Créer une nouvelle session</h1>
                <a href=\"{{ path('session_prof_dashboard') }}\" class=\"btn btn-secondary\">
                    <i class=\"fa fa-arrow-left me-2\"></i> Retour au dashboard
                </a>
            </div>

            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h5 class=\"mb-0\">Formulaire de création</h5>
                </div>
                <div class=\"card-body\">

                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

                    <div class=\"row g-3\">

                        <div class=\"col-md-6\">
                            <label class=\"form-label fw-semibold\">Date et Heure</label>

                            <div class=\"input-group\">
                                <input type=\"text\"
                                       id=\"dt_display\"
                                       class=\"form-control\"
                                       placeholder=\"jj/mm/aaaa hh:mm\"
                                       autocomplete=\"off\"
                                       style=\"cursor:pointer;\" />
                                <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"dt_btn\">
                                    <i class=\"fa fa-calendar\"></i>
                                </button>
                            </div>

                            {{ form_widget(form.dateHeure, {
                                'attr': {
                                    'id'      : 'sf_date',
                                    'style'   : 'position:absolute;width:1px;height:1px;opacity:0;pointer-events:none;',
                                    'tabindex': '-1'
                                }
                            }) }}

                            <div class=\"text-danger mt-1\">{{ form_errors(form.dateHeure) }}</div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.statut, {'attr': {'class': 'form-select'}}) }}
                                {{ form_label(form.statut) }}
                                <div class=\"text-danger\">{{ form_errors(form.statut) }}</div>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.lienReunion) }}
                                {{ form_label(form.lienReunion) }}
                                <div class=\"text-danger\">{{ form_errors(form.lienReunion) }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.group) }}
                                {{ form_label(form.group) }}
                                <div class=\"text-danger\">{{ form_errors(form.group) }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.user) }}
                                {{ form_label(form.user, 'Professeur') }}
                                <div class=\"text-danger\">{{ form_errors(form.user) }}</div>
                            </div>
                        </div>

                    </div>

                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                            <i class=\"fa fa-save me-2\"></i> Enregistrer la session
                        </button>
                        <a href=\"{{ path('session_prof_dashboard') }}\" class=\"btn btn-outline-secondary btn-lg px-5 ms-3\">
                            <i class=\"fa fa-times me-2\"></i> Annuler
                        </a>
                    </div>

                    {{ form_end(form) }}
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

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.9.4/dist/js/tempus-dominus.min.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const display = document.getElementById('dt_display');
    const btn     = document.getElementById('dt_btn');
    const sfInput = document.querySelector('input[name=\"session[dateHeure]\"]');

    if (!sfInput) { console.error('Champ Symfony introuvable !'); return; }

    const picker = new tempusDominus.TempusDominus(display, {
        display: {
            viewMode: 'calendar',
            components: {
                decades: true, year: true, month: true,
                date: true, hours: true, minutes: true, seconds: false
            },
            icons: {
                time    : 'fa fa-clock',
                date    : 'fa fa-calendar',
                up      : 'fa fa-arrow-up',
                down    : 'fa fa-arrow-down',
                previous: 'fa fa-chevron-left',
                next    : 'fa fa-chevron-right',
                today   : 'fa fa-calendar-check',
                clear   : 'fa fa-trash',
                close   : 'fa fa-times'
            },
            buttons: { today: false, clear: true, close: true },
            theme: 'light'
        },
        localization: {
            locale        : 'fr',
            format        : 'dd/MM/yyyy HH:mm',
            startOfTheWeek: 1
        },
        stepping      : 15,
        useCurrent    : false,
        allowInputToggle: true
    });

    // Sync picker → champ Symfony (format dd/MM/yyyy HH:mm pour html5=false)
    display.addEventListener(tempusDominus.Namespace.events.change, function (e) {
        if (e.detail && e.detail.date) {
            const d   = e.detail.date;
            const pad = n => String(n).padStart(2, '0');
            const val = pad(d.date) + '/' + pad(d.month+1) + '/' + d.year
                      + ' ' + pad(d.hours) + ':' + pad(d.minutes);
            display.value = val;
            sfInput.value = val;
        } else {
            display.value = '';
            sfInput.value = '';
        }
    });

    // Bouton calendrier
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        picker.toggle();
    });

    // Bloque saisie clavier directe
    display.addEventListener('keydown', e => e.preventDefault());
});
</script>

</body>
</html>", "dashboard/new.html.twig", "C:\\Users\\Yosr\\OneDrive\\Desktop\\git pull\\Fluently\\templates\\dashboard\\new.html.twig");
    }
}
