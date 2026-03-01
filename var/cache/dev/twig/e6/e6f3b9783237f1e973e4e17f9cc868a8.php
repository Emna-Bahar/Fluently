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
                <a href=\"index.html\" class=\"b-brand\">
    <!-- ========   change your logo hear   ============ -->
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
        // line 37
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
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_langue_index");
        yield "\">Langue</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\">Cours</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_index");
        yield "\">Niveau</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 50
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
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_index");
        yield "\">Tests</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_index");
        yield "\">Questions</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\">Reponse</a></li>
                            
                        </ul>
                    </li>
                    <li class=\"nxl-item\">
                        <a href=\"";
        // line 66
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
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_prof_dashboard");
        yield "\">Session</a></li>
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 78
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
        // line 88
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
        // line 102
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
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "flashes", ["success"], "method", false, false, false, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 130
            yield "                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "flashes", ["error"], "method", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 136
            yield "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 141));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 142
            yield "                    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
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
        yield "
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h1 class=\"h2 mb-0\">Détails de la session #";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 149, $this->source); })()), "id", [], "any", false, false, false, 149), "html", null, true);
        yield "</h1>
                    <a href=\"";
        // line 150
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
        // line 162
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 162, $this->source); })()), "dateHeure", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 162, $this->source); })()), "dateHeure", [], "any", false, false, false, 162), "d/m/Y H:i"), "html", null, true)) : ("—"));
        yield "</dd>

                            <dt class=\"col-sm-3 fw-bold\">Statut</dt>
                            <dd class=\"col-sm-9\">
                                <span class=\"badge bg-";
        // line 166
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 166, $this->source); })()), "statut", [], "any", false, false, false, 166) == "terminée")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 166, $this->source); })()), "statut", [], "any", false, false, false, 166) == "planifiée")) ? ("warning") : ("secondary"))));
        yield "\">
                                    ";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 167, $this->source); })()), "statut", [], "any", false, false, false, 167)), "html", null, true);
        yield "
                                </span>
                            </dd>

                            <dt class=\"col-sm-3 fw-bold\">Groupe</dt>
                            <dd class=\"col-sm-9\">";
        // line 172
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 172, $this->source); })()), "group", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 172, $this->source); })()), "group", [], "any", false, false, false, 172), "nom", [], "any", false, false, false, 172), "html", null, true)) : ("—"));
        yield "</dd>

                            <dt class=\"col-sm-3 fw-bold\">Lien réunion</dt>
                            <dd class=\"col-sm-9\">
                                ";
        // line 176
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 176, $this->source); })()), "lienReunion", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 177
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 177, $this->source); })()), "lienReunion", [], "any", false, false, false, 177), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-success btn-sm\">
                                        <i class=\"fa fa-video me-1\"></i> Rejoindre
                                    </a>
                                ";
        } else {
            // line 181
            yield "                                    <span class=\"text-muted\">Aucun lien</span>
                                ";
        }
        // line 183
        yield "                            </dd>

                            <dt class=\"col-sm-3 fw-bold\">Note</dt>
                            <dd class=\"col-sm-9\">
                                ";
        // line 187
        $context["rating"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "rating", [], "any", true, true, false, 187)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 187, $this->source); })()), "rating", [], "any", false, false, false, 187), 0)) : (0));
        // line 188
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 189
            yield "                                    <i class=\"fa fa-star ";
            if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 189, $this->source); })()))) {
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
        // line 191
        yield "                                ";
        if (((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 191, $this->source); })()) == 0)) {
            yield "<small class=\"text-muted\"> (non notée)</small>";
        }
        // line 192
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
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/daterangepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/circle-progress.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 220
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
        return array (  436 => 220,  432 => 219,  428 => 218,  424 => 217,  420 => 216,  416 => 215,  412 => 214,  388 => 192,  383 => 191,  370 => 189,  365 => 188,  363 => 187,  357 => 183,  353 => 181,  345 => 177,  343 => 176,  336 => 172,  328 => 167,  324 => 166,  317 => 162,  302 => 150,  298 => 149,  294 => 147,  284 => 143,  281 => 142,  276 => 141,  266 => 137,  263 => 136,  258 => 135,  248 => 131,  245 => 130,  241 => 129,  211 => 102,  194 => 88,  181 => 78,  177 => 77,  163 => 66,  155 => 61,  151 => 60,  147 => 59,  135 => 50,  131 => 49,  127 => 48,  123 => 47,  110 => 37,  93 => 23,  89 => 22,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  48 => 1,);
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
