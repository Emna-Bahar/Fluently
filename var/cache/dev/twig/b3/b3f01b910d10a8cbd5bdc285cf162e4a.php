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
                    <h1 class=\"h2 mb-0\">Bonjour ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", true, true, false, 149)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 149, $this->source); })()), "prenom", [], "any", false, false, false, 149), "Professeur")) : ("Professeur")), "html", null, true);
        yield "</h1>
                    <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_session_new");
        yield "\" class=\"btn btn-success\">
                        <i class=\"fa fa-plus me-2\"></i> Nouvelle session
                    </a>
                </div>

                ";
        // line 156
        yield "                <div class=\"card border-warning shadow mb-5\">
                    <div class=\"card-header bg-warning text-dark\">
                        <h5 class=\"mb-0\">
                            <i class=\"fa fa-exclamation-triangle me-2\"></i>
                            Réservations en attente (";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pendingReservations"]) || array_key_exists("pendingReservations", $context) ? $context["pendingReservations"] : (function () { throw new RuntimeError('Variable "pendingReservations" does not exist.', 160, $this->source); })())), "html", null, true);
        yield ")
                        </h5>
                    </div>
                    <div class=\"card-body p-0\">
                        ";
        // line 164
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pendingReservations"]) || array_key_exists("pendingReservations", $context) ? $context["pendingReservations"] : (function () { throw new RuntimeError('Variable "pendingReservations" does not exist.', 164, $this->source); })())) > 0)) {
            // line 165
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
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pendingReservations"]) || array_key_exists("pendingReservations", $context) ? $context["pendingReservations"] : (function () { throw new RuntimeError('Variable "pendingReservations" does not exist.', 177, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["resa"]) {
                // line 178
                yield "                    <tr>
                        <td>";
                // line 179
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "dateReservation", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "dateReservation", [], "any", false, false, false, 179), "d/m/Y"), "html", null, true)) : ("—"));
                yield "</td>
                        <td>
                            <strong>";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "user", [], "any", false, false, false, 181), "prenom", [], "any", false, false, false, 181), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "user", [], "any", false, false, false, 181), "nom", [], "any", false, false, false, 181), "html", null, true);
                yield "</strong>
                        </td>
                        <td>";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "session", [], "any", false, false, false, 183), "dateHeure", [], "any", false, false, false, 183), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                        <td>";
                // line 184
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "session", [], "any", false, true, false, 184), "group", [], "any", false, true, false, 184), "nom", [], "any", true, true, false, 184) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "session", [], "any", false, false, false, 184), "group", [], "any", false, false, false, 184), "nom", [], "any", false, false, false, 184)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "session", [], "any", false, false, false, 184), "group", [], "any", false, false, false, 184), "nom", [], "any", false, false, false, 184), "html", null, true)) : ("(sans groupe)"));
                yield "</td>
                        <td class=\"text-end\">

                            ";
                // line 188
                yield "                            <form method=\"post\"
                                  action=\"";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_update_statut", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "id", [], "any", false, false, false, 189)]), "html", null, true);
                yield "\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Confirmer cette réservation ?')\">
                                <input type=\"hidden\" name=\"statut\" value=\"confirmée\">
                                <input type=\"hidden\" name=\"_token\"
                                       value=\"";
                // line 194
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("resa_statut_" . CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "id", [], "any", false, false, false, 194))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-success me-1\"
                                        title=\"Confirmer\">
                                    <i class=\"fa fa-check\"></i> Confirmer
                                </button>
                            </form>

                            ";
                // line 202
                yield "                            <form method=\"post\"
                                  action=\"";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_update_statut", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "id", [], "any", false, false, false, 203)]), "html", null, true);
                yield "\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Refuser cette réservation ?')\">
                                <input type=\"hidden\" name=\"statut\" value=\"refusée\">
                                <input type=\"hidden\" name=\"_token\"
                                       value=\"";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("resa_statut_" . CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "id", [], "any", false, false, false, 208))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-warning me-1\"
                                        title=\"Refuser\">
                                    <i class=\"fa fa-times\"></i> Refuser
                                </button>
                            </form>

                            ";
                // line 216
                yield "                            <form method=\"post\"
                                  action=\"";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "id", [], "any", false, false, false, 217)]), "html", null, true);
                yield "\"
                                  class=\"d-inline\"
                                  onsubmit=\"return confirm('Supprimer définitivement cette réservation ?')\">
                                <input type=\"hidden\" name=\"_token\"
                                       value=\"";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["resa"], "id", [], "any", false, false, false, 221))), "html", null, true);
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
            // line 231
            yield "            </tbody>
        </table>
    </div>
";
        } else {
            // line 235
            yield "    <div class=\"text-center py-5 text-muted\">
        <i class=\"fa fa-check-circle fa-3x mb-3 d-block text-success\"></i>
        Aucune demande en attente pour le moment
    </div>
";
        }
        // line 240
        yield "                    </div>
                </div>

                ";
        // line 244
        yield "                <div class=\"card shadow mb-5\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Mes dernières sessions</h5>
                        <a href=\"";
        // line 247
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_professeur");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                            Voir toutes →
                        </a>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 252
        yield from $this->load("session/_table_prof_small.html.twig", 252)->unwrap()->yield(CoreExtension::merge($context, ["pagination" =>         // line 253
(isset($context["sessionsPagination"]) || array_key_exists("sessionsPagination", $context) ? $context["sessionsPagination"] : (function () { throw new RuntimeError('Variable "sessionsPagination" does not exist.', 253, $this->source); })()), "show_note_column" => true, "show_actions" => true]));
        // line 257
        yield "                    </div>
                </div>

                ";
        // line 261
        yield "                <div class=\"card shadow\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">Activité récente</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 266
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["recentReservations"]) || array_key_exists("recentReservations", $context) ? $context["recentReservations"] : (function () { throw new RuntimeError('Variable "recentReservations" does not exist.', 266, $this->source); })())) > 0)) {
            // line 267
            yield "                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 268
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentReservations"]) || array_key_exists("recentReservations", $context) ? $context["recentReservations"] : (function () { throw new RuntimeError('Variable "recentReservations" does not exist.', 268, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 269
                yield "                                    <li class=\"list-group-item\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <strong>";
                // line 272
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "user", [], "any", false, false, false, 272), "prenom", [], "any", false, false, false, 272), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "user", [], "any", false, false, false, 272), "nom", [], "any", false, false, false, 272), "html", null, true);
                yield "</strong><br>
                                                <small class=\"text-muted\">";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "session", [], "any", false, false, false, 273), "dateHeure", [], "any", false, false, false, 273), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                                            </div>
                                            <span class=\"badge
                                                ";
                // line 276
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 276) == "confirmée")) {
                    yield "bg-success
                                                ";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 277
$context["r"], "statut", [], "any", false, false, false, 277), ["refusée", "annulée"])) {
                    yield "bg-danger
                                                ";
                } else {
                    // line 278
                    yield "bg-secondary";
                }
                yield "\">
                                                ";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 279)), "html", null, true);
                yield "
                                            </span>
                                        </div>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            yield "                            </ul>
                        ";
        } else {
            // line 286
            yield "                            <p class=\"text-center text-muted py-4 mb-0\">Aucune activité récente</p>
                        ";
        }
        // line 288
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
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/daterangepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/circle-progress.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboard-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 314
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
        return array (  584 => 314,  580 => 313,  576 => 312,  572 => 311,  568 => 310,  564 => 309,  560 => 308,  538 => 288,  534 => 286,  530 => 284,  519 => 279,  514 => 278,  509 => 277,  505 => 276,  499 => 273,  493 => 272,  488 => 269,  484 => 268,  481 => 267,  479 => 266,  472 => 261,  467 => 257,  465 => 253,  464 => 252,  456 => 247,  451 => 244,  446 => 240,  439 => 235,  433 => 231,  417 => 221,  410 => 217,  407 => 216,  397 => 208,  389 => 203,  386 => 202,  376 => 194,  368 => 189,  365 => 188,  359 => 184,  355 => 183,  348 => 181,  343 => 179,  340 => 178,  336 => 177,  322 => 165,  320 => 164,  313 => 160,  307 => 156,  299 => 150,  295 => 149,  291 => 147,  281 => 143,  278 => 142,  273 => 141,  263 => 137,  260 => 136,  255 => 135,  245 => 131,  242 => 130,  238 => 129,  208 => 102,  191 => 88,  178 => 78,  174 => 77,  160 => 66,  152 => 61,  148 => 60,  144 => 59,  132 => 50,  128 => 49,  124 => 48,  120 => 47,  107 => 37,  90 => 23,  86 => 22,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
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
