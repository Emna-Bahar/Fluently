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

/* objectif_admin/stats.html.twig */
class __TwigTemplate_9623d03caa06b01e345e7bba1c31f61f extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_admin/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif_admin/stats.html.twig"));

        $this->parent = $this->load("dashboard/index.html.twig", 1);
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

        yield "Statistiques Objectifs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .stat-card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin: 0 auto 15px;
        }
        .stat-number {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        .stat-label {
            color: #6c757d;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .chart-container {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        .progress-circle {
            width: 120px;
            height: 120px;
            margin: 0 auto;
        }
        /* Nouvelle couleur pour abandonne */
        .border-danger-custom {
            border-top-color: #dc3545 !important;
        }
        .bg-danger-custom {
            background-color: #dc3545 !important;
        }
        /* Nouvelle couleur pour en_pause */
        .border-secondary-custom {
            border-top-color: #6c757d !important;
        }
        .bg-secondary-custom {
            background-color: #6c757d !important;
        }
        /* Couleurs des badges */
        .badge-abandonne {
            background-color: #dc3545;
            color: white;
        }
        .badge-enpause {
            background-color: #6c757d;
            color: white;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
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

        // line 77
        yield "<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Statistiques des Objectifs</h5>
            </div>
            <ul class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                    <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_index");
        yield "\">Objectifs</a>
                </li>
                <li class=\"breadcrumb-item active\">Statistiques</li>
            </ul>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"feather-list\"></i> Liste des objectifs
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <!-- Statistiques Principales -->
        <div class=\"row mb-4\">
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card stat-card border-top border-top-4 border-primary\">
                    <div class=\"card-body text-center\">
                        <div class=\"stat-icon bg-primary text-white\">
                            <i class=\"feather-target\"></i>
                        </div>
                        <div class=\"stat-number text-primary\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 109, $this->source); })()), "html", null, true);
        yield "</div>
                        <div class=\"stat-label\">Total Objectifs</div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card stat-card border-top border-top-4 border-info\">
                    <div class=\"card-body text-center\">
                        <div class=\"stat-icon bg-info text-white\">
                            <i class=\"feather-activity\"></i>
                        </div>
                        <div class=\"stat-number text-info\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enCours"]) || array_key_exists("enCours", $context) ? $context["enCours"] : (function () { throw new RuntimeError('Variable "enCours" does not exist.', 121, $this->source); })()), "html", null, true);
        yield "</div>
                        <div class=\"stat-label\">En Cours</div>
                        <small class=\"text-muted\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageEnCours"]) || array_key_exists("pourcentageEnCours", $context) ? $context["pourcentageEnCours"] : (function () { throw new RuntimeError('Variable "pourcentageEnCours" does not exist.', 123, $this->source); })()), "html", null, true);
        yield "% du total</small>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card stat-card border-top border-top-4 border-success\">
                    <div class=\"card-body text-center\">
                        <div class=\"stat-icon bg-success text-white\">
                            <i class=\"feather-check-circle\"></i>
                        </div>
                        <div class=\"stat-number text-success\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 134, $this->source); })()), "html", null, true);
        yield "</div>
                        <div class=\"stat-label\">Complétés</div>
                        <small class=\"text-muted\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageComplete"]) || array_key_exists("pourcentageComplete", $context) ? $context["pourcentageComplete"] : (function () { throw new RuntimeError('Variable "pourcentageComplete" does not exist.', 136, $this->source); })()), "html", null, true);
        yield "% du total</small>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card stat-card border-top border-top-4 border-danger-custom\">
                    <div class=\"card-body text-center\">
                        <div class=\"stat-icon bg-danger-custom text-white\">
                            <i class=\"feather-x-circle\"></i>
                        </div>
                        <div class=\"stat-number text-danger\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["abandonne"]) || array_key_exists("abandonne", $context) ? $context["abandonne"] : (function () { throw new RuntimeError('Variable "abandonne" does not exist.', 147, $this->source); })()), "html", null, true);
        yield "</div>
                        <div class=\"stat-label\">Abandonnés</div>
                        <small class=\"text-muted\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageAbandonne"]) || array_key_exists("pourcentageAbandonne", $context) ? $context["pourcentageAbandonne"] : (function () { throw new RuntimeError('Variable "pourcentageAbandonne" does not exist.', 149, $this->source); })()), "html", null, true);
        yield "% du total</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deuxième ligne pour En Pause -->
        <div class=\"row mb-4 justify-content-center\">
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card stat-card border-top border-top-4 border-secondary-custom\">
                    <div class=\"card-body text-center\">
                        <div class=\"stat-icon bg-secondary-custom text-white\">
                            <i class=\"feather-pause-circle\"></i>
                        </div>
                        <div class=\"stat-number text-secondary\">";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enPause"]) || array_key_exists("enPause", $context) ? $context["enPause"] : (function () { throw new RuntimeError('Variable "enPause" does not exist.', 163, $this->source); })()), "html", null, true);
        yield "</div>
                        <div class=\"stat-label\">En Pause</div>
                        <small class=\"text-muted\">";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageEnPause"]) || array_key_exists("pourcentageEnPause", $context) ? $context["pourcentageEnPause"] : (function () { throw new RuntimeError('Variable "pourcentageEnPause" does not exist.', 165, $this->source); })()), "html", null, true);
        yield "% du total</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques et Détails -->
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"chart-container\">
                    <h5 class=\"mb-4\">Répartition des Objectifs</h5>
                    <canvas id=\"objectifChart\" height=\"250\"></canvas>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"chart-container\">
                    <h5 class=\"mb-4\">Pourcentages</h5>
                    <div class=\"progress-circle\">
                        <canvas id=\"progressChart\" width=\"120\" height=\"120\"></canvas>
                    </div>
                    
                    <div class=\"mt-4\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"me-2\" style=\"width: 20px; height: 20px; background: #2196F3; border-radius: 3px;\"></div>
                            <span>En cours: ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enCours"]) || array_key_exists("enCours", $context) ? $context["enCours"] : (function () { throw new RuntimeError('Variable "enCours" does not exist.', 190, $this->source); })()), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageEnCours"]) || array_key_exists("pourcentageEnCours", $context) ? $context["pourcentageEnCours"] : (function () { throw new RuntimeError('Variable "pourcentageEnCours" does not exist.', 190, $this->source); })()), "html", null, true);
        yield "%)</span>
                        </div>
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"me-2\" style=\"width: 20px; height: 20px; background: #4CAF50; border-radius: 3px;\"></div>
                            <span>Complétés: ";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 194, $this->source); })()), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageComplete"]) || array_key_exists("pourcentageComplete", $context) ? $context["pourcentageComplete"] : (function () { throw new RuntimeError('Variable "pourcentageComplete" does not exist.', 194, $this->source); })()), "html", null, true);
        yield "%)</span>
                        </div>
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"me-2\" style=\"width: 20px; height: 20px; background: #dc3545; border-radius: 3px;\"></div>
                            <span>Abandonnés: ";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["abandonne"]) || array_key_exists("abandonne", $context) ? $context["abandonne"] : (function () { throw new RuntimeError('Variable "abandonne" does not exist.', 198, $this->source); })()), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageAbandonne"]) || array_key_exists("pourcentageAbandonne", $context) ? $context["pourcentageAbandonne"] : (function () { throw new RuntimeError('Variable "pourcentageAbandonne" does not exist.', 198, $this->source); })()), "html", null, true);
        yield "%)</span>
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"me-2\" style=\"width: 20px; height: 20px; background: #6c757d; border-radius: 3px;\"></div>
                            <span>En pause: ";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enPause"]) || array_key_exists("enPause", $context) ? $context["enPause"] : (function () { throw new RuntimeError('Variable "enPause" does not exist.', 202, $this->source); })()), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageEnPause"]) || array_key_exists("pourcentageEnPause", $context) ? $context["pourcentageEnPause"] : (function () { throw new RuntimeError('Variable "pourcentageEnPause" does not exist.', 202, $this->source); })()), "html", null, true);
        yield "%)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des Stats Détail -->
        <div class=\"row mt-4\">
            <div class=\"col-12\">
                <div class=\"chart-container\">
                    <h5 class=\"mb-4\">Détails Statistiques</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>Statut</th>
                                    <th>Nombre</th>
                                    <th>Pourcentage</th>
                                    <th>Barre de progression</th>
                                    <th>Tendance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class=\"badge bg-info\">En Cours</span>
                                    </td>
                                    <td>";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enCours"]) || array_key_exists("enCours", $context) ? $context["enCours"] : (function () { throw new RuntimeError('Variable "enCours" does not exist.', 230, $this->source); })()), "html", null, true);
        yield "</td>
                                    <td>";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageEnCours"]) || array_key_exists("pourcentageEnCours", $context) ? $context["pourcentageEnCours"] : (function () { throw new RuntimeError('Variable "pourcentageEnCours" does not exist.', 231, $this->source); })()), "html", null, true);
        yield "%</td>
                                    <td>
                                        <div class=\"progress\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-info\" style=\"width: ";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageEnCours"]) || array_key_exists("pourcentageEnCours", $context) ? $context["pourcentageEnCours"] : (function () { throw new RuntimeError('Variable "pourcentageEnCours" does not exist.', 234, $this->source); })()), "html", null, true);
        yield "%\"></div>
                                        </div>
                                    </td>
                                    <td>
                                        ";
        // line 238
        if (((isset($context["enCours"]) || array_key_exists("enCours", $context) ? $context["enCours"] : (function () { throw new RuntimeError('Variable "enCours" does not exist.', 238, $this->source); })()) > (isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 238, $this->source); })()))) {
            // line 239
            yield "                                            <i class=\"feather-activity text-primary\"></i> Active
                                        ";
        } else {
            // line 241
            yield "                                            <i class=\"feather-clock text-info\"></i> Stable
                                        ";
        }
        // line 243
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"badge bg-success\">Complétés</span>
                                    </td>
                                    <td>";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 249, $this->source); })()), "html", null, true);
        yield "</td>
                                    <td>";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageComplete"]) || array_key_exists("pourcentageComplete", $context) ? $context["pourcentageComplete"] : (function () { throw new RuntimeError('Variable "pourcentageComplete" does not exist.', 250, $this->source); })()), "html", null, true);
        yield "%</td>
                                    <td>
                                        <div class=\"progress\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-success\" style=\"width: ";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageComplete"]) || array_key_exists("pourcentageComplete", $context) ? $context["pourcentageComplete"] : (function () { throw new RuntimeError('Variable "pourcentageComplete" does not exist.', 253, $this->source); })()), "html", null, true);
        yield "%\"></div>
                                        </div>
                                    </td>
                                    <td>
                                        ";
        // line 257
        if (((isset($context["pourcentageComplete"]) || array_key_exists("pourcentageComplete", $context) ? $context["pourcentageComplete"] : (function () { throw new RuntimeError('Variable "pourcentageComplete" does not exist.', 257, $this->source); })()) >= 70)) {
            // line 258
            yield "                                            <i class=\"feather-trending-up text-success\"></i> Excellente
                                        ";
        } elseif ((        // line 259
(isset($context["pourcentageComplete"]) || array_key_exists("pourcentageComplete", $context) ? $context["pourcentageComplete"] : (function () { throw new RuntimeError('Variable "pourcentageComplete" does not exist.', 259, $this->source); })()) >= 40)) {
            // line 260
            yield "                                            <i class=\"feather-trending-up text-warning\"></i> Bonne
                                        ";
        } else {
            // line 262
            yield "                                            <i class=\"feather-trending-down text-danger\"></i> À améliorer
                                        ";
        }
        // line 264
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"badge badge-abandonne\">Abandonnés</span>
                                    </td>
                                    <td>";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["abandonne"]) || array_key_exists("abandonne", $context) ? $context["abandonne"] : (function () { throw new RuntimeError('Variable "abandonne" does not exist.', 270, $this->source); })()), "html", null, true);
        yield "</td>
                                    <td>";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageAbandonne"]) || array_key_exists("pourcentageAbandonne", $context) ? $context["pourcentageAbandonne"] : (function () { throw new RuntimeError('Variable "pourcentageAbandonne" does not exist.', 271, $this->source); })()), "html", null, true);
        yield "%</td>
                                    <td>
                                        <div class=\"progress\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-danger\" style=\"width: ";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageAbandonne"]) || array_key_exists("pourcentageAbandonne", $context) ? $context["pourcentageAbandonne"] : (function () { throw new RuntimeError('Variable "pourcentageAbandonne" does not exist.', 274, $this->source); })()), "html", null, true);
        yield "%\"></div>
                                        </div>
                                    </td>
                                    <td>
                                        ";
        // line 278
        if (((isset($context["pourcentageAbandonne"]) || array_key_exists("pourcentageAbandonne", $context) ? $context["pourcentageAbandonne"] : (function () { throw new RuntimeError('Variable "pourcentageAbandonne" does not exist.', 278, $this->source); })()) > 20)) {
            // line 279
            yield "                                            <i class=\"feather-alert-triangle text-danger\"></i> Critique
                                        ";
        } elseif ((        // line 280
(isset($context["pourcentageAbandonne"]) || array_key_exists("pourcentageAbandonne", $context) ? $context["pourcentageAbandonne"] : (function () { throw new RuntimeError('Variable "pourcentageAbandonne" does not exist.', 280, $this->source); })()) > 10)) {
            // line 281
            yield "                                            <i class=\"feather-alert-circle text-warning\"></i> Attention
                                        ";
        } else {
            // line 283
            yield "                                            <i class=\"feather-check text-muted\"></i> Normal
                                        ";
        }
        // line 285
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"badge badge-enpause\">En Pause</span>
                                    </td>
                                    <td>";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enPause"]) || array_key_exists("enPause", $context) ? $context["enPause"] : (function () { throw new RuntimeError('Variable "enPause" does not exist.', 291, $this->source); })()), "html", null, true);
        yield "</td>
                                    <td>";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageEnPause"]) || array_key_exists("pourcentageEnPause", $context) ? $context["pourcentageEnPause"] : (function () { throw new RuntimeError('Variable "pourcentageEnPause" does not exist.', 292, $this->source); })()), "html", null, true);
        yield "%</td>
                                    <td>
                                        <div class=\"progress\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-secondary\" style=\"width: ";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageEnPause"]) || array_key_exists("pourcentageEnPause", $context) ? $context["pourcentageEnPause"] : (function () { throw new RuntimeError('Variable "pourcentageEnPause" does not exist.', 295, $this->source); })()), "html", null, true);
        yield "%\"></div>
                                        </div>
                                    </td>
                                    <td>
                                        ";
        // line 299
        if (((isset($context["pourcentageEnPause"]) || array_key_exists("pourcentageEnPause", $context) ? $context["pourcentageEnPause"] : (function () { throw new RuntimeError('Variable "pourcentageEnPause" does not exist.', 299, $this->source); })()) > 30)) {
            // line 300
            yield "                                            <i class=\"feather-pause text-warning\"></i> Élevé
                                        ";
        } elseif ((        // line 301
(isset($context["pourcentageEnPause"]) || array_key_exists("pourcentageEnPause", $context) ? $context["pourcentageEnPause"] : (function () { throw new RuntimeError('Variable "pourcentageEnPause" does not exist.', 301, $this->source); })()) > 15)) {
            // line 302
            yield "                                            <i class=\"feather-clock text-info\"></i> Modéré
                                        ";
        } else {
            // line 304
            yield "                                            <i class=\"feather-check text-muted\"></i> Faible
                                        ";
        }
        // line 306
        yield "                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class=\"table-secondary\">
                                    <th>TOTAL</th>
                                    <th>";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 312, $this->source); })()), "html", null, true);
        yield "</th>
                                    <th>100%</th>
                                    <th>
                                        <div class=\"progress\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-secondary\" style=\"width: 100%\"></div>
                                        </div>
                                    </th>
                                    <th>
                                        ";
        // line 320
        $context["tauxReussite"] = (isset($context["pourcentageComplete"]) || array_key_exists("pourcentageComplete", $context) ? $context["pourcentageComplete"] : (function () { throw new RuntimeError('Variable "pourcentageComplete" does not exist.', 320, $this->source); })());
        // line 321
        yield "                                        ";
        if (((isset($context["tauxReussite"]) || array_key_exists("tauxReussite", $context) ? $context["tauxReussite"] : (function () { throw new RuntimeError('Variable "tauxReussite" does not exist.', 321, $this->source); })()) >= 60)) {
            // line 322
            yield "                                            <span class=\"text-success\">Performance élevée</span>
                                        ";
        } elseif ((        // line 323
(isset($context["tauxReussite"]) || array_key_exists("tauxReussite", $context) ? $context["tauxReussite"] : (function () { throw new RuntimeError('Variable "tauxReussite" does not exist.', 323, $this->source); })()) >= 30)) {
            // line 324
            yield "                                            <span class=\"text-warning\">Performance moyenne</span>
                                        ";
        } else {
            // line 326
            yield "                                            <span class=\"text-danger\">Performance faible</span>
                                        ";
        }
        // line 328
        yield "                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class=\"row mt-4\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title mb-3\">Analyse & Recommandations</h5>
                        <div class=\"d-flex flex-wrap justify-content-center gap-2\">
                            ";
        // line 344
        if (((isset($context["enCours"]) || array_key_exists("enCours", $context) ? $context["enCours"] : (function () { throw new RuntimeError('Variable "enCours" does not exist.', 344, $this->source); })()) > 0)) {
            // line 345
            yield "                                <span class=\"badge bg-info p-2\">
                                    <i class=\"feather-activity me-1\"></i>
                                    ";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enCours"]) || array_key_exists("enCours", $context) ? $context["enCours"] : (function () { throw new RuntimeError('Variable "enCours" does not exist.', 347, $this->source); })()), "html", null, true);
            yield " objectif(s) en cours
                                </span>
                            ";
        }
        // line 350
        yield "                            
                            ";
        // line 351
        if (((isset($context["pourcentageComplete"]) || array_key_exists("pourcentageComplete", $context) ? $context["pourcentageComplete"] : (function () { throw new RuntimeError('Variable "pourcentageComplete" does not exist.', 351, $this->source); })()) < 30)) {
            // line 352
            yield "                                <span class=\"badge bg-warning p-2\">
                                    <i class=\"feather-flag me-1\"></i>
                                    Taux de complétion faible (";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pourcentageComplete"]) || array_key_exists("pourcentageComplete", $context) ? $context["pourcentageComplete"] : (function () { throw new RuntimeError('Variable "pourcentageComplete" does not exist.', 354, $this->source); })()), "html", null, true);
            yield "%)
                                </span>
                            ";
        }
        // line 357
        yield "                            
                            ";
        // line 358
        if (((isset($context["abandonne"]) || array_key_exists("abandonne", $context) ? $context["abandonne"] : (function () { throw new RuntimeError('Variable "abandonne" does not exist.', 358, $this->source); })()) > 0)) {
            // line 359
            yield "                                <span class=\"badge bg-danger p-2\">
                                    <i class=\"feather-alert-triangle me-1\"></i>
                                    ";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["abandonne"]) || array_key_exists("abandonne", $context) ? $context["abandonne"] : (function () { throw new RuntimeError('Variable "abandonne" does not exist.', 361, $this->source); })()), "html", null, true);
            yield " objectif(s) abandonné(s)
                                </span>
                            ";
        }
        // line 364
        yield "                            
                            ";
        // line 365
        if (((isset($context["enPause"]) || array_key_exists("enPause", $context) ? $context["enPause"] : (function () { throw new RuntimeError('Variable "enPause" does not exist.', 365, $this->source); })()) > 0)) {
            // line 366
            yield "                                <span class=\"badge bg-secondary p-2\">
                                    <i class=\"feather-pause me-1\"></i>
                                    ";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enPause"]) || array_key_exists("enPause", $context) ? $context["enPause"] : (function () { throw new RuntimeError('Variable "enPause" does not exist.', 368, $this->source); })()), "html", null, true);
            yield " objectif(s) en pause
                                </span>
                            ";
        }
        // line 371
        yield "                            
                            <a href=\"";
        // line 372
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_new");
        yield "\" class=\"btn btn-primary\">
                                <i class=\"feather-plus me-1\"></i> Nouvel objectif
                            </a>
                            
                            <a href=\"";
        // line 376
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_admin_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"feather-filter me-1\"></i> Filtrer les objectifs
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 388
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 389
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Données pour les graphiques
            const statData = {
                labels: ['En Cours', 'Complétés', 'Abandonnés', 'En Pause'],
                datasets: [{
                    data: [";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enCours"]) || array_key_exists("enCours", $context) ? $context["enCours"] : (function () { throw new RuntimeError('Variable "enCours" does not exist.', 397, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 397, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["abandonne"]) || array_key_exists("abandonne", $context) ? $context["abandonne"] : (function () { throw new RuntimeError('Variable "abandonne" does not exist.', 397, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enPause"]) || array_key_exists("enPause", $context) ? $context["enPause"] : (function () { throw new RuntimeError('Variable "enPause" does not exist.', 397, $this->source); })()), "html", null, true);
        yield "],
                    backgroundColor: ['#2196F3', '#4CAF50', '#dc3545', '#6c757d'],
                    borderColor: ['#1976D2', '#388E3C', '#c82333', '#545b62'],
                    borderWidth: 1
                }]
            };

            // Graphique en barres
            const ctx1 = document.getElementById('objectifChart').getContext('2d');
            new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: statData.labels,
                    datasets: [{
                        label: 'Nombre d\\'objectifs',
                        data: statData.datasets[0].data,
                        backgroundColor: statData.datasets[0].backgroundColor,
                        borderColor: statData.datasets[0].borderColor,
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    }
                }
            });

            // Graphique circulaire
            const ctx2 = document.getElementById('progressChart').getContext('2d');
            new Chart(ctx2, {
                type: 'doughnut',
                data: {
                    labels: statData.labels,
                    datasets: [{
                        data: statData.datasets[0].data,
                        backgroundColor: statData.datasets[0].backgroundColor,
                        borderColor: statData.datasets[0].borderColor,
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    cutout: '70%'
                }
            });

            // Animation des cartes statistiques
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
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
        return "objectif_admin/stats.html.twig";
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
        return array (  723 => 397,  711 => 389,  698 => 388,  676 => 376,  669 => 372,  666 => 371,  660 => 368,  656 => 366,  654 => 365,  651 => 364,  645 => 361,  641 => 359,  639 => 358,  636 => 357,  630 => 354,  626 => 352,  624 => 351,  621 => 350,  615 => 347,  611 => 345,  609 => 344,  591 => 328,  587 => 326,  583 => 324,  581 => 323,  578 => 322,  575 => 321,  573 => 320,  562 => 312,  554 => 306,  550 => 304,  546 => 302,  544 => 301,  541 => 300,  539 => 299,  532 => 295,  526 => 292,  522 => 291,  514 => 285,  510 => 283,  506 => 281,  504 => 280,  501 => 279,  499 => 278,  492 => 274,  486 => 271,  482 => 270,  474 => 264,  470 => 262,  466 => 260,  464 => 259,  461 => 258,  459 => 257,  452 => 253,  446 => 250,  442 => 249,  434 => 243,  430 => 241,  426 => 239,  424 => 238,  417 => 234,  411 => 231,  407 => 230,  374 => 202,  365 => 198,  356 => 194,  347 => 190,  319 => 165,  314 => 163,  297 => 149,  292 => 147,  278 => 136,  273 => 134,  259 => 123,  254 => 121,  239 => 109,  221 => 94,  212 => 88,  206 => 85,  196 => 77,  183 => 76,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Statistiques Objectifs{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .stat-card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin: 0 auto 15px;
        }
        .stat-number {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        .stat-label {
            color: #6c757d;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .chart-container {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        .progress-circle {
            width: 120px;
            height: 120px;
            margin: 0 auto;
        }
        /* Nouvelle couleur pour abandonne */
        .border-danger-custom {
            border-top-color: #dc3545 !important;
        }
        .bg-danger-custom {
            background-color: #dc3545 !important;
        }
        /* Nouvelle couleur pour en_pause */
        .border-secondary-custom {
            border-top-color: #6c757d !important;
        }
        .bg-secondary-custom {
            background-color: #6c757d !important;
        }
        /* Couleurs des badges */
        .badge-abandonne {
            background-color: #dc3545;
            color: white;
        }
        .badge-enpause {
            background-color: #6c757d;
            color: white;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"nxl-content\">
    <div class=\"page-header\">
        <div class=\"page-header-left d-flex align-items-center\">
            <div class=\"page-header-title\">
                <h5 class=\"m-b-10\">Statistiques des Objectifs</h5>
            </div>
            <ul class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                    <a href=\"{{ path('app_home') }}\">Accueil</a>
                </li>
                <li class=\"breadcrumb-item\">
                    <a href=\"{{ path('app_objectif_admin_index') }}\">Objectifs</a>
                </li>
                <li class=\"breadcrumb-item active\">Statistiques</li>
            </ul>
        </div>
        <div class=\"page-header-right ms-auto\">
            <a href=\"{{ path('app_objectif_admin_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"feather-list\"></i> Liste des objectifs
            </a>
        </div>
    </div>

    <div class=\"main-content\">
        <!-- Statistiques Principales -->
        <div class=\"row mb-4\">
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card stat-card border-top border-top-4 border-primary\">
                    <div class=\"card-body text-center\">
                        <div class=\"stat-icon bg-primary text-white\">
                            <i class=\"feather-target\"></i>
                        </div>
                        <div class=\"stat-number text-primary\">{{ total }}</div>
                        <div class=\"stat-label\">Total Objectifs</div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card stat-card border-top border-top-4 border-info\">
                    <div class=\"card-body text-center\">
                        <div class=\"stat-icon bg-info text-white\">
                            <i class=\"feather-activity\"></i>
                        </div>
                        <div class=\"stat-number text-info\">{{ enCours }}</div>
                        <div class=\"stat-label\">En Cours</div>
                        <small class=\"text-muted\">{{ pourcentageEnCours }}% du total</small>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card stat-card border-top border-top-4 border-success\">
                    <div class=\"card-body text-center\">
                        <div class=\"stat-icon bg-success text-white\">
                            <i class=\"feather-check-circle\"></i>
                        </div>
                        <div class=\"stat-number text-success\">{{ complete }}</div>
                        <div class=\"stat-label\">Complétés</div>
                        <small class=\"text-muted\">{{ pourcentageComplete }}% du total</small>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card stat-card border-top border-top-4 border-danger-custom\">
                    <div class=\"card-body text-center\">
                        <div class=\"stat-icon bg-danger-custom text-white\">
                            <i class=\"feather-x-circle\"></i>
                        </div>
                        <div class=\"stat-number text-danger\">{{ abandonne }}</div>
                        <div class=\"stat-label\">Abandonnés</div>
                        <small class=\"text-muted\">{{ pourcentageAbandonne }}% du total</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deuxième ligne pour En Pause -->
        <div class=\"row mb-4 justify-content-center\">
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card stat-card border-top border-top-4 border-secondary-custom\">
                    <div class=\"card-body text-center\">
                        <div class=\"stat-icon bg-secondary-custom text-white\">
                            <i class=\"feather-pause-circle\"></i>
                        </div>
                        <div class=\"stat-number text-secondary\">{{ enPause }}</div>
                        <div class=\"stat-label\">En Pause</div>
                        <small class=\"text-muted\">{{ pourcentageEnPause }}% du total</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques et Détails -->
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"chart-container\">
                    <h5 class=\"mb-4\">Répartition des Objectifs</h5>
                    <canvas id=\"objectifChart\" height=\"250\"></canvas>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"chart-container\">
                    <h5 class=\"mb-4\">Pourcentages</h5>
                    <div class=\"progress-circle\">
                        <canvas id=\"progressChart\" width=\"120\" height=\"120\"></canvas>
                    </div>
                    
                    <div class=\"mt-4\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"me-2\" style=\"width: 20px; height: 20px; background: #2196F3; border-radius: 3px;\"></div>
                            <span>En cours: {{ enCours }} ({{ pourcentageEnCours }}%)</span>
                        </div>
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"me-2\" style=\"width: 20px; height: 20px; background: #4CAF50; border-radius: 3px;\"></div>
                            <span>Complétés: {{ complete }} ({{ pourcentageComplete }}%)</span>
                        </div>
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"me-2\" style=\"width: 20px; height: 20px; background: #dc3545; border-radius: 3px;\"></div>
                            <span>Abandonnés: {{ abandonne }} ({{ pourcentageAbandonne }}%)</span>
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"me-2\" style=\"width: 20px; height: 20px; background: #6c757d; border-radius: 3px;\"></div>
                            <span>En pause: {{ enPause }} ({{ pourcentageEnPause }}%)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des Stats Détail -->
        <div class=\"row mt-4\">
            <div class=\"col-12\">
                <div class=\"chart-container\">
                    <h5 class=\"mb-4\">Détails Statistiques</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>Statut</th>
                                    <th>Nombre</th>
                                    <th>Pourcentage</th>
                                    <th>Barre de progression</th>
                                    <th>Tendance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class=\"badge bg-info\">En Cours</span>
                                    </td>
                                    <td>{{ enCours }}</td>
                                    <td>{{ pourcentageEnCours }}%</td>
                                    <td>
                                        <div class=\"progress\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-info\" style=\"width: {{ pourcentageEnCours }}%\"></div>
                                        </div>
                                    </td>
                                    <td>
                                        {% if enCours > complete %}
                                            <i class=\"feather-activity text-primary\"></i> Active
                                        {% else %}
                                            <i class=\"feather-clock text-info\"></i> Stable
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"badge bg-success\">Complétés</span>
                                    </td>
                                    <td>{{ complete }}</td>
                                    <td>{{ pourcentageComplete }}%</td>
                                    <td>
                                        <div class=\"progress\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-success\" style=\"width: {{ pourcentageComplete }}%\"></div>
                                        </div>
                                    </td>
                                    <td>
                                        {% if pourcentageComplete >= 70 %}
                                            <i class=\"feather-trending-up text-success\"></i> Excellente
                                        {% elseif pourcentageComplete >= 40 %}
                                            <i class=\"feather-trending-up text-warning\"></i> Bonne
                                        {% else %}
                                            <i class=\"feather-trending-down text-danger\"></i> À améliorer
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"badge badge-abandonne\">Abandonnés</span>
                                    </td>
                                    <td>{{ abandonne }}</td>
                                    <td>{{ pourcentageAbandonne }}%</td>
                                    <td>
                                        <div class=\"progress\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-danger\" style=\"width: {{ pourcentageAbandonne }}%\"></div>
                                        </div>
                                    </td>
                                    <td>
                                        {% if pourcentageAbandonne > 20 %}
                                            <i class=\"feather-alert-triangle text-danger\"></i> Critique
                                        {% elseif pourcentageAbandonne > 10 %}
                                            <i class=\"feather-alert-circle text-warning\"></i> Attention
                                        {% else %}
                                            <i class=\"feather-check text-muted\"></i> Normal
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=\"badge badge-enpause\">En Pause</span>
                                    </td>
                                    <td>{{ enPause }}</td>
                                    <td>{{ pourcentageEnPause }}%</td>
                                    <td>
                                        <div class=\"progress\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-secondary\" style=\"width: {{ pourcentageEnPause }}%\"></div>
                                        </div>
                                    </td>
                                    <td>
                                        {% if pourcentageEnPause > 30 %}
                                            <i class=\"feather-pause text-warning\"></i> Élevé
                                        {% elseif pourcentageEnPause > 15 %}
                                            <i class=\"feather-clock text-info\"></i> Modéré
                                        {% else %}
                                            <i class=\"feather-check text-muted\"></i> Faible
                                        {% endif %}
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class=\"table-secondary\">
                                    <th>TOTAL</th>
                                    <th>{{ total }}</th>
                                    <th>100%</th>
                                    <th>
                                        <div class=\"progress\" style=\"height: 8px;\">
                                            <div class=\"progress-bar bg-secondary\" style=\"width: 100%\"></div>
                                        </div>
                                    </th>
                                    <th>
                                        {% set tauxReussite = pourcentageComplete %}
                                        {% if tauxReussite >= 60 %}
                                            <span class=\"text-success\">Performance élevée</span>
                                        {% elseif tauxReussite >= 30 %}
                                            <span class=\"text-warning\">Performance moyenne</span>
                                        {% else %}
                                            <span class=\"text-danger\">Performance faible</span>
                                        {% endif %}
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class=\"row mt-4\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title mb-3\">Analyse & Recommandations</h5>
                        <div class=\"d-flex flex-wrap justify-content-center gap-2\">
                            {% if enCours > 0 %}
                                <span class=\"badge bg-info p-2\">
                                    <i class=\"feather-activity me-1\"></i>
                                    {{ enCours }} objectif(s) en cours
                                </span>
                            {% endif %}
                            
                            {% if pourcentageComplete < 30 %}
                                <span class=\"badge bg-warning p-2\">
                                    <i class=\"feather-flag me-1\"></i>
                                    Taux de complétion faible ({{ pourcentageComplete }}%)
                                </span>
                            {% endif %}
                            
                            {% if abandonne > 0 %}
                                <span class=\"badge bg-danger p-2\">
                                    <i class=\"feather-alert-triangle me-1\"></i>
                                    {{ abandonne }} objectif(s) abandonné(s)
                                </span>
                            {% endif %}
                            
                            {% if enPause > 0 %}
                                <span class=\"badge bg-secondary p-2\">
                                    <i class=\"feather-pause me-1\"></i>
                                    {{ enPause }} objectif(s) en pause
                                </span>
                            {% endif %}
                            
                            <a href=\"{{ path('app_objectif_admin_new') }}\" class=\"btn btn-primary\">
                                <i class=\"feather-plus me-1\"></i> Nouvel objectif
                            </a>
                            
                            <a href=\"{{ path('app_objectif_admin_index') }}\" class=\"btn btn-outline-secondary\">
                                <i class=\"feather-filter me-1\"></i> Filtrer les objectifs
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Données pour les graphiques
            const statData = {
                labels: ['En Cours', 'Complétés', 'Abandonnés', 'En Pause'],
                datasets: [{
                    data: [{{ enCours }}, {{ complete }}, {{ abandonne }}, {{ enPause }}],
                    backgroundColor: ['#2196F3', '#4CAF50', '#dc3545', '#6c757d'],
                    borderColor: ['#1976D2', '#388E3C', '#c82333', '#545b62'],
                    borderWidth: 1
                }]
            };

            // Graphique en barres
            const ctx1 = document.getElementById('objectifChart').getContext('2d');
            new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: statData.labels,
                    datasets: [{
                        label: 'Nombre d\\'objectifs',
                        data: statData.datasets[0].data,
                        backgroundColor: statData.datasets[0].backgroundColor,
                        borderColor: statData.datasets[0].borderColor,
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    }
                }
            });

            // Graphique circulaire
            const ctx2 = document.getElementById('progressChart').getContext('2d');
            new Chart(ctx2, {
                type: 'doughnut',
                data: {
                    labels: statData.labels,
                    datasets: [{
                        data: statData.datasets[0].data,
                        backgroundColor: statData.datasets[0].backgroundColor,
                        borderColor: statData.datasets[0].borderColor,
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    cutout: '70%'
                }
            });

            // Animation des cartes statistiques
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
{% endblock %}", "objectif_admin/stats.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\objectif_admin\\stats.html.twig");
    }
}
