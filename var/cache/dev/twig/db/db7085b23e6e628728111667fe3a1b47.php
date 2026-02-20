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

/* session/index.html.twig */
class __TwigTemplate_0b0d5589875f1cd649d8f4163c96f915 extends Template
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
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Liste des Sessions - Fluently";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"min-vh-100\" style=\"background: linear-gradient(90deg, #b44bd8, #5f7ae6); padding-top: 100px; color: #ecf0f1;\">
    <div class=\"container py-5\">
        <h2 class=\"fw-bold text-center mb-4\" style=\"color: #fdfeff;\">
            📋 Liste des Sessions
        </h2>

        <!-- Filtres -->
        <div class=\"card shadow-lg border-0 rounded-4 mb-3 bg-white text-dark\">
            <div class=\"card-body p-3\">
                <form id=\"searchForm\" method=\"get\" class=\"row g-3 align-items-end\">
                    <!-- Champ Recherche -->
                    <div class=\"col-lg-3 col-md-6\">
                        <label for=\"searchInput\" class=\"form-label fw-bold mb-2\">
                            🔍 Recherche
                        </label>
                        <input type=\"text\" name=\"search\" id=\"searchInput\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\" 
                               class=\"form-control\" placeholder=\"Statut, groupe, formateur...\">
                    </div>

                    <!-- Champ Date -->
                    <div class=\"col-lg-3 col-md-6\">
                        <label for=\"dateFilter\" class=\"form-label fw-bold mb-2\">
                            📅 Date exacte
                        </label>
                        <input type=\"date\" name=\"date\" id=\"dateFilter\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "\" 
                               class=\"form-control\">
                    </div>

                    <!-- Boutons Actions en 2 lignes -->
                    <div class=\"col-lg-6 col-md-12\">
                        <div class=\"d-flex flex-column gap-2\">
                            <!-- Ligne 1: Validation et Annulation -->
                            <div class=\"d-flex gap-2\">
                                <button type=\"submit\" class=\"btn btn-success flex-fill shadow-sm\"> ✅ Valider</button>
                                   <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
        yield "\" class=\"btn btn-danger flex-fill shadow-sm\">
                                    ❌ Annuler
                                   </a>
                            </div> 
                             <br> 


                            <!-- Ligne 2: Tri et Nouvelle session -->
                            <div class=\"d-flex gap-2\">
                                <button type=\"button\" id=\"sortButton\" class=\"btn btn-info flex-fill shadow-sm\">
                                    🔄 Trier par ID

                                </button>

                                <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_new");
        yield "\" class=\"btn btn-primary flex-fill shadow-sm\">
                                    ➕ Nouvelle session
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
                
        <!-- Tableau -->
        <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden bg-white text-dark\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-sm mb-0 align-middle\" id=\"sortableTable\">
                        <thead class=\"table-sky-blue\">
                            <tr>
                                <th class=\"sortable px-3 py-2\" data-sort=\"id\" style=\"width: 8%;\">
                                    ID <i class=\"bi bi-arrow-down-up ms-1 small\"></i>
                                </th>
                                <th class=\"sortable px-3 py-2\" data-sort=\"dateHeure\" style=\"width: 18%;\">
                                    Date <i class=\"bi bi-arrow-down-up ms-1 small\"></i>
                                </th>
                                <th class=\"sortable px-3 py-2\" data-sort=\"statut\" style=\"width: 15%;\">
                                    Statut <i class=\"bi bi-arrow-down-up ms-1 small\"></i>
                                </th>
                                <th class=\"px-3 py-2\" style=\"width: 20%;\">Groupe</th>
                                <th class=\"px-3 py-2\" style=\"width: 17%;\">Formateur</th>
<th class=\"text-center px-3 py-2\" style=\"width: 8%;\">Réservations</th>
<th class=\"text-center px-3 py-2\" style=\"width: 27%;\">Actions</th>
                        </thead>
                        <tbody>
                            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 87
            yield "                                <tr class=\"align-middle\">
                                    <td class=\"px-3 py-2 fw-bold text-muted\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                                    <td class=\"px-3 py-2 small\">
                                        <i class=\"bi bi-calendar me-1 text-primary\"></i>
                                        ";
            // line 91
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateHeure", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "dateHeure", [], "any", false, false, false, 91), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "
                                    </td>
                                    <td class=\"px-3 py-2\">
                                        ";
            // line 94
            $context["color"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "statut", [], "any", false, false, false, 94) == "planifiée")) ? ("info") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 95
$context["session"], "statut", [], "any", false, false, false, 95) == "en_cours")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 96
$context["session"], "statut", [], "any", false, false, false, 96) == "terminée")) ? ("success") : ("danger"))))));
            // line 97
            yield "                                        <span class=\"badge rounded-pill px-2 py-1 fs-7 fw-medium bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 97, $this->source); })()), "html", null, true);
            yield " text-white\">
                                            ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["session"], "statut", [], "any", false, false, false, 98)), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td class=\"px-3 py-2 small\">";
            // line 101
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "groupe", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "groupe", [], "any", false, false, false, 101), "nom", [], "any", false, false, false, 101), "html", null, true)) : ("—"));
            yield "</td>
                                    <td class=\"px-3 py-2 small\">
                                        ";
            // line 103
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "user", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 104
                yield "                                            <i class=\"bi bi-person me-1 text-primary\"></i>
                                            ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "user", [], "any", false, false, false, 105), "prenom", [], "any", false, false, false, 105), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "user", [], "any", false, false, false, 105), "nom", [], "any", false, false, false, 105), "html", null, true);
                yield "
                                        ";
            } else {
                // line 107
                yield "                                            —
                                        ";
            }
            // line 109
            yield "                                    </td>
                                    <td class=\"px-3 py-2 text-center\">
                                        <span class=\"badge bg-info rounded-pill\">
                                            ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["session"], "reservations", [], "any", false, false, false, 112)), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td class=\"px-3 py-2 text-center\">
                                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                                            <a href=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 117)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-see\" title=\"Voir détails\">
                                                👁️ Voir
                                            </a>
                                            <a href=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-modify\" title=\"Modifier session\">
                                                ✏️ Modifier
                                            </a>
                                            <a href=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_reservations", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 125)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-reservations\" title=\"Voir réservations\">
                                                📋 Réservations
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"card-footer bg-light border-0 py-2\">
                <div class=\"d-flex justify-content-center\">
                    ";
        // line 140
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 140, $this->source); })()));
        yield "
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

    // line 148
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

        // line 149
        yield "<style>
    body {
        background: linear-gradient(90deg, #b44bd8, #5f7ae6) !important;
        color: #ecf0f1 !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h2 {
        color: #fdfeff !important;
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        font-size: 2rem;
    }

    .card {
        border: none !important;
        border-radius: 16px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3) !important;
        overflow: hidden;
    }

    /* En-tête de table en bleu ciel */
    .table-sky-blue {
        background: linear-gradient(135deg, #87CEEB 0%, #A0D8F3 50%, #87CEEB 100%) !important;
        color: #2c3e50 !important;
        border: none !important;
    }

    .table-sky-blue th {
        color: #2c3e50 !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
        border-bottom: 3px solid rgba(44, 62, 80, 0.15) !important;
        padding: 12px 16px !important;
        vertical-align: middle !important;
    }

    /* Boutons d'action avec emojis et couleurs différentes */
    .btn-see {
        background: linear-gradient(135deg, #3498db 0%, #2ecc71 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 8px !important;
        padding: 0.4rem 0.8rem !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 3px 8px rgba(52, 152, 219, 0.25) !important;
        margin: 0 3px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 5px !important;
    }

    .btn-modify {
        background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 8px !important;
        padding: 0.4rem 0.8rem !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 3px 8px rgba(155, 89, 182, 0.25) !important;
        margin: 0 3px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 5px !important;
    }
.btn-reservations {
        background: linear-gradient(135deg, #e67e22 0%, #f39c12 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 8px !important;
        padding: 0.4rem 0.6rem !important;
        font-size: 0.8rem !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 3px 8px rgba(230, 126, 34, 0.25) !important;
        margin: 0 2px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 3px !important;
    }
    .btn-see:hover {
        background: linear-gradient(135deg, #2980b9 0%, #27ae60 100%) !important;
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 6px 15px rgba(52, 152, 219, 0.4) !important;
    }

    .btn-modify:hover {
        background: linear-gradient(135deg, #8e44ad 0%, #7d3c98 100%) !important;
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 6px 15px rgba(155, 89, 182, 0.4) !important;
    }
.btn-reservations:hover {
        background: linear-gradient(135deg, #d35400 0%, #e67e22 100%) !important;
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 6px 15px rgba(230, 126, 34, 0.4) !important;
    }
    .btn-group-sm {
        gap: 6px !important;
        flex-wrap: nowrap !important;
    }

    /* Réduction de la taille du tableau */
    .table-sm th,
    .table-sm td {
        padding: 0.6rem 0.8rem !important;
        font-size: 0.9rem;
        vertical-align: middle !important;
    }

    .table-sm .small {
        font-size: 0.85rem !important;
    }

    /* Badges plus petits */
    .fs-7 {
        font-size: 0.8rem !important;
    }

    .badge {
        padding: 0.35rem 0.75rem !important;
        font-weight: 500 !important;
    }

    .sortable {
        cursor: pointer;
        user-select: none;
        position: relative;
        transition: all 0.2s ease;
    }

    .sortable:hover {
        background-color: rgba(44, 62, 80, 0.1) !important;
        border-radius: 4px !important;
    }

    input[type=\"date\"], input[type=\"text\"] {
        background: #f8f9fa !important;
        color: #2c3e50 !important;
        border: 1px solid #dee2e6 !important;
        border-radius: 8px !important;
        font-weight: 500;
    }

    input[type=\"date\"]:focus, input[type=\"text\"]:focus {
        border-color: #3498db !important;
        box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.2) !important;
        background: white !important;
    }

    tbody tr:hover {
        background-color: rgba(52, 152, 219, 0.05) !important;
        transition: background-color 0.2s ease;
    }

    /* Réduction de l'espacement */
    .card.mb-3 {
        margin-bottom: 0.75rem !important;
    }

    .card-body.p-3 {
        padding: 1.25rem !important;
    }

    .card-footer.py-2 {
        padding: 0.75rem 1.25rem !important;
    }

    /* Style des boutons avec emojis */
    .btn {
        font-weight: 500;
        padding: 0.65rem 1.25rem;
        transition: all 0.2s ease;
        border: none;
        font-size: 0.95rem;
        border-radius: 10px !important;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0,0,0,0.15) !important;
    }

    /* Flex-fill pour égaliser la largeur */
    .flex-fill {
        flex: 1 1 0 !important;
    }

    /* Espacement entre les lignes de boutons */
    .flex-column.gap-2 {
        gap: 0.75rem !important;
    }

    /* Espacement entre les boutons dans une ligne */
    .d-flex.gap-2 {
        gap: 0.75rem !important;
    }

    /* Couleurs des boutons du filtre */
    .btn-success {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
        color: white !important;
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #218838 0%, #1baa7e 100%) !important;
    }

    .btn-danger {
        background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%) !important;
        color: white !important;
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, #c82333 0%, #e8590c 100%) !important;
    }

    .btn-info {
        background: linear-gradient(135deg, #17a2b8 0%, #20c997 100%) !important;
        color: white !important;
    }

    .btn-info:hover {
        background: linear-gradient(135deg, #138496 0%, #1baa7e 100%) !important;
    }

    .btn-primary {
        background: linear-gradient(135deg, #007bff 0%, #6610f2 100%) !important;
        color: white !important;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #0056b3 0%, #520dc2 100%) !important;
    }

    /* Ombres pour séparer visuellement */
    .shadow-sm {
        box-shadow: 0 3px 8px rgba(0,0,0,0.1) !important;
    }

    .shadow-lg {
        box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
    }

    /* Animation des icônes de tri */
    .sortable i {
        transition: transform 0.3s ease;
        opacity: 0.7;
    }

    .sortable:hover i {
        opacity: 1;
    }

    .sortable.asc i {
        transform: rotate(180deg);
    }

    /* Effet de pulse pour les emojis des boutons */
    .btn-see:hover emoji, .btn-modify:hover emoji {
        animation: pulse 0.5s ease;
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.2); }
        100% { transform: scale(1); }
    }

    /* Responsive */
    @media (max-width: 768px) {
        h2 {
            font-size: 1.75rem;
        }
        
        .flex-column.gap-2 .d-flex {
            flex-direction: column;
        }
        
        .btn-see, .btn-modify {
            padding: 0.35rem 0.6rem !important;
            font-size: 0.8rem !important;
            gap: 3px !important;
        }
        
        .table-sky-blue th {
            padding: 10px 12px !important;
            font-size: 0.85rem;
        }
    }
    
    @media (max-width: 576px) {
        h2 {
            font-size: 1.5rem;
        }
        
        .btn-see, .btn-modify {
            padding: 0.3rem 0.5rem !important;
            font-size: 0.75rem !important;
            min-width: 70px;
        }
        
        .btn-see span, .btn-modify span {
            display: none;
        }
        
        .btn-see::before {
            content: \"👁️\";
            font-size: 1rem;
        }
        
        .btn-modify::before {
            content: \"✏️\";
            font-size: 1rem;
        }
        
        .btn-group {
            justify-content: center !important;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 483
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

        // line 484
        yield "<script>
document.addEventListener('DOMContentLoaded', function () {
    // Bouton de TRI par ID
    const sortButton = document.getElementById('sortButton');
    let sortOrder = 'asc'; // Par défaut croissant
    
    if (sortButton) {
        sortButton.addEventListener('click', function() {
            const table = document.getElementById('sortableTable');
            const tbody = table.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));
            
            // Trier les lignes par ID
            rows.sort((a, b) => {
                const idA = parseInt(a.cells[0].textContent.trim());
                const idB = parseInt(b.cells[0].textContent.trim());
                
                return sortOrder === 'asc' ? idA - idB : idB - idA;
            });
            
            // Vider et remplir le tableau
            tbody.innerHTML = '';
            rows.forEach(row => tbody.appendChild(row));
            
            // Inverser l'ordre pour le prochain clic
            sortOrder = sortOrder === 'asc' ? 'desc' : 'asc';
            
            // Changer le texte du bouton
            sortButton.innerHTML = sortOrder === 'asc' 
                ? '🔄 Trier par ID ↑' 
                : '🔄 Trier par ID ↓';
        });
    }

    // Tableau pour tri manuel sur colonnes
    const table = document.getElementById('sortableTable');
    if (table) {
        const headers = table.querySelectorAll('th.sortable');
        headers.forEach(header => {
            header.addEventListener('click', function () {
                const sortKey = this.dataset.sort;
                let direction = this.classList.contains('asc') ? 'desc' : 'asc';

                headers.forEach(h => h.classList.remove('asc', 'desc'));
                this.classList.add(direction);

                const tbody = table.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr'));

                rows.sort((a, b) => {
                    const index = Array.from(headers).indexOf(this);
                    let valA = a.cells[index].textContent.trim();
                    let valB = b.cells[index].textContent.trim();

                    if (sortKey === 'dateHeure') {
                        valA = new Date(valA.split(' ')[0].split('/').reverse().join('-') + ' ' + (valA.split(' ')[1] || '00:00'));
                        valB = new Date(valB.split(' ')[0].split('/').reverse().join('-') + ' ' + (valB.split(' ')[1] || '00:00'));
                        return direction === 'asc' ? valA - valB : valB - valA;
                    }

                    if (sortKey === 'id') {
                        return direction === 'asc' 
                            ? parseInt(valA) - parseInt(valB)
                            : parseInt(valB) - parseInt(valA);
                    }

                    return direction === 'asc' 
                        ? valA.localeCompare(valB) 
                        : valB.localeCompare(valA);
                });

                tbody.innerHTML = '';
                rows.forEach(row => tbody.appendChild(row));
            });
        });
    }
    
    // Animation des emojis au survol des boutons d'action
const actionButtons = document.querySelectorAll('.btn-see, .btn-modify, .btn-reservations');    actionButtons.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            const emoji = this.querySelector('span')?.previousSibling?.nodeValue || 
                         this.textContent.match(/[👁️✏️]/)?.[0];
            if (emoji) {
                this.style.setProperty('--emoji-scale', '1.2');
            }
        });
        
        btn.addEventListener('mouseleave', function() {
            this.style.setProperty('--emoji-scale', '1');
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
        return "session/index.html.twig";
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
        return array (  688 => 484,  675 => 483,  332 => 149,  319 => 148,  301 => 140,  292 => 133,  278 => 125,  271 => 121,  264 => 117,  256 => 112,  251 => 109,  247 => 107,  240 => 105,  237 => 104,  235 => 103,  230 => 101,  224 => 98,  219 => 97,  217 => 96,  216 => 95,  215 => 94,  209 => 91,  203 => 88,  200 => 87,  196 => 86,  161 => 54,  144 => 40,  131 => 30,  119 => 21,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Sessions - Fluently{% endblock %}

{% block body %}
<div class=\"min-vh-100\" style=\"background: linear-gradient(90deg, #b44bd8, #5f7ae6); padding-top: 100px; color: #ecf0f1;\">
    <div class=\"container py-5\">
        <h2 class=\"fw-bold text-center mb-4\" style=\"color: #fdfeff;\">
            📋 Liste des Sessions
        </h2>

        <!-- Filtres -->
        <div class=\"card shadow-lg border-0 rounded-4 mb-3 bg-white text-dark\">
            <div class=\"card-body p-3\">
                <form id=\"searchForm\" method=\"get\" class=\"row g-3 align-items-end\">
                    <!-- Champ Recherche -->
                    <div class=\"col-lg-3 col-md-6\">
                        <label for=\"searchInput\" class=\"form-label fw-bold mb-2\">
                            🔍 Recherche
                        </label>
                        <input type=\"text\" name=\"search\" id=\"searchInput\" value=\"{{ search }}\" 
                               class=\"form-control\" placeholder=\"Statut, groupe, formateur...\">
                    </div>

                    <!-- Champ Date -->
                    <div class=\"col-lg-3 col-md-6\">
                        <label for=\"dateFilter\" class=\"form-label fw-bold mb-2\">
                            📅 Date exacte
                        </label>
                        <input type=\"date\" name=\"date\" id=\"dateFilter\" value=\"{{ date }}\" 
                               class=\"form-control\">
                    </div>

                    <!-- Boutons Actions en 2 lignes -->
                    <div class=\"col-lg-6 col-md-12\">
                        <div class=\"d-flex flex-column gap-2\">
                            <!-- Ligne 1: Validation et Annulation -->
                            <div class=\"d-flex gap-2\">
                                <button type=\"submit\" class=\"btn btn-success flex-fill shadow-sm\"> ✅ Valider</button>
                                   <a href=\"{{ path('app_session_index') }}\" class=\"btn btn-danger flex-fill shadow-sm\">
                                    ❌ Annuler
                                   </a>
                            </div> 
                             <br> 


                            <!-- Ligne 2: Tri et Nouvelle session -->
                            <div class=\"d-flex gap-2\">
                                <button type=\"button\" id=\"sortButton\" class=\"btn btn-info flex-fill shadow-sm\">
                                    🔄 Trier par ID

                                </button>

                                <a href=\"{{ path('app_session_new') }}\" class=\"btn btn-primary flex-fill shadow-sm\">
                                    ➕ Nouvelle session
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
                
        <!-- Tableau -->
        <div class=\"card shadow-lg border-0 rounded-4 overflow-hidden bg-white text-dark\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-sm mb-0 align-middle\" id=\"sortableTable\">
                        <thead class=\"table-sky-blue\">
                            <tr>
                                <th class=\"sortable px-3 py-2\" data-sort=\"id\" style=\"width: 8%;\">
                                    ID <i class=\"bi bi-arrow-down-up ms-1 small\"></i>
                                </th>
                                <th class=\"sortable px-3 py-2\" data-sort=\"dateHeure\" style=\"width: 18%;\">
                                    Date <i class=\"bi bi-arrow-down-up ms-1 small\"></i>
                                </th>
                                <th class=\"sortable px-3 py-2\" data-sort=\"statut\" style=\"width: 15%;\">
                                    Statut <i class=\"bi bi-arrow-down-up ms-1 small\"></i>
                                </th>
                                <th class=\"px-3 py-2\" style=\"width: 20%;\">Groupe</th>
                                <th class=\"px-3 py-2\" style=\"width: 17%;\">Formateur</th>
<th class=\"text-center px-3 py-2\" style=\"width: 8%;\">Réservations</th>
<th class=\"text-center px-3 py-2\" style=\"width: 27%;\">Actions</th>
                        </thead>
                        <tbody>
                            {% for session in sessions %}
                                <tr class=\"align-middle\">
                                    <td class=\"px-3 py-2 fw-bold text-muted\">{{ session.id }}</td>
                                    <td class=\"px-3 py-2 small\">
                                        <i class=\"bi bi-calendar me-1 text-primary\"></i>
                                        {{ session.dateHeure ? session.dateHeure|date('d/m/Y H:i') : '—' }}
                                    </td>
                                    <td class=\"px-3 py-2\">
                                        {% set color = session.statut == 'planifiée' ? 'info' : 
                                                       (session.statut == 'en_cours' ? 'warning' : 
                                                       (session.statut == 'terminée' ? 'success' : 'danger')) %}
                                        <span class=\"badge rounded-pill px-2 py-1 fs-7 fw-medium bg-{{ color }} text-white\">
                                            {{ session.statut|capitalize }}
                                        </span>
                                    </td>
                                    <td class=\"px-3 py-2 small\">{{ session.groupe ? session.groupe.nom : '—' }}</td>
                                    <td class=\"px-3 py-2 small\">
                                        {% if session.user %}
                                            <i class=\"bi bi-person me-1 text-primary\"></i>
                                            {{ session.user.prenom }} {{ session.user.nom }}
                                        {% else %}
                                            —
                                        {% endif %}
                                    </td>
                                    <td class=\"px-3 py-2 text-center\">
                                        <span class=\"badge bg-info rounded-pill\">
                                            {{ session.reservations|length }}
                                        </span>
                                    </td>
                                    <td class=\"px-3 py-2 text-center\">
                                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                                            <a href=\"{{ path('app_session_show', {'id': session.id}) }}\" 
                                               class=\"btn btn-see\" title=\"Voir détails\">
                                                👁️ Voir
                                            </a>
                                            <a href=\"{{ path('app_session_edit', {'id': session.id}) }}\" 
                                               class=\"btn btn-modify\" title=\"Modifier session\">
                                                ✏️ Modifier
                                            </a>
                                            <a href=\"{{ path('app_session_reservations', {'id': session.id}) }}\" 
                                               class=\"btn btn-reservations\" title=\"Voir réservations\">
                                                📋 Réservations
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"card-footer bg-light border-0 py-2\">
                <div class=\"d-flex justify-content-center\">
                    {{ knp_pagination_render(sessions) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
    body {
        background: linear-gradient(90deg, #b44bd8, #5f7ae6) !important;
        color: #ecf0f1 !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h2 {
        color: #fdfeff !important;
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        font-size: 2rem;
    }

    .card {
        border: none !important;
        border-radius: 16px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3) !important;
        overflow: hidden;
    }

    /* En-tête de table en bleu ciel */
    .table-sky-blue {
        background: linear-gradient(135deg, #87CEEB 0%, #A0D8F3 50%, #87CEEB 100%) !important;
        color: #2c3e50 !important;
        border: none !important;
    }

    .table-sky-blue th {
        color: #2c3e50 !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
        border-bottom: 3px solid rgba(44, 62, 80, 0.15) !important;
        padding: 12px 16px !important;
        vertical-align: middle !important;
    }

    /* Boutons d'action avec emojis et couleurs différentes */
    .btn-see {
        background: linear-gradient(135deg, #3498db 0%, #2ecc71 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 8px !important;
        padding: 0.4rem 0.8rem !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 3px 8px rgba(52, 152, 219, 0.25) !important;
        margin: 0 3px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 5px !important;
    }

    .btn-modify {
        background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 8px !important;
        padding: 0.4rem 0.8rem !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 3px 8px rgba(155, 89, 182, 0.25) !important;
        margin: 0 3px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 5px !important;
    }
.btn-reservations {
        background: linear-gradient(135deg, #e67e22 0%, #f39c12 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 8px !important;
        padding: 0.4rem 0.6rem !important;
        font-size: 0.8rem !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 3px 8px rgba(230, 126, 34, 0.25) !important;
        margin: 0 2px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 3px !important;
    }
    .btn-see:hover {
        background: linear-gradient(135deg, #2980b9 0%, #27ae60 100%) !important;
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 6px 15px rgba(52, 152, 219, 0.4) !important;
    }

    .btn-modify:hover {
        background: linear-gradient(135deg, #8e44ad 0%, #7d3c98 100%) !important;
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 6px 15px rgba(155, 89, 182, 0.4) !important;
    }
.btn-reservations:hover {
        background: linear-gradient(135deg, #d35400 0%, #e67e22 100%) !important;
        transform: translateY(-3px) scale(1.05) !important;
        box-shadow: 0 6px 15px rgba(230, 126, 34, 0.4) !important;
    }
    .btn-group-sm {
        gap: 6px !important;
        flex-wrap: nowrap !important;
    }

    /* Réduction de la taille du tableau */
    .table-sm th,
    .table-sm td {
        padding: 0.6rem 0.8rem !important;
        font-size: 0.9rem;
        vertical-align: middle !important;
    }

    .table-sm .small {
        font-size: 0.85rem !important;
    }

    /* Badges plus petits */
    .fs-7 {
        font-size: 0.8rem !important;
    }

    .badge {
        padding: 0.35rem 0.75rem !important;
        font-weight: 500 !important;
    }

    .sortable {
        cursor: pointer;
        user-select: none;
        position: relative;
        transition: all 0.2s ease;
    }

    .sortable:hover {
        background-color: rgba(44, 62, 80, 0.1) !important;
        border-radius: 4px !important;
    }

    input[type=\"date\"], input[type=\"text\"] {
        background: #f8f9fa !important;
        color: #2c3e50 !important;
        border: 1px solid #dee2e6 !important;
        border-radius: 8px !important;
        font-weight: 500;
    }

    input[type=\"date\"]:focus, input[type=\"text\"]:focus {
        border-color: #3498db !important;
        box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.2) !important;
        background: white !important;
    }

    tbody tr:hover {
        background-color: rgba(52, 152, 219, 0.05) !important;
        transition: background-color 0.2s ease;
    }

    /* Réduction de l'espacement */
    .card.mb-3 {
        margin-bottom: 0.75rem !important;
    }

    .card-body.p-3 {
        padding: 1.25rem !important;
    }

    .card-footer.py-2 {
        padding: 0.75rem 1.25rem !important;
    }

    /* Style des boutons avec emojis */
    .btn {
        font-weight: 500;
        padding: 0.65rem 1.25rem;
        transition: all 0.2s ease;
        border: none;
        font-size: 0.95rem;
        border-radius: 10px !important;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0,0,0,0.15) !important;
    }

    /* Flex-fill pour égaliser la largeur */
    .flex-fill {
        flex: 1 1 0 !important;
    }

    /* Espacement entre les lignes de boutons */
    .flex-column.gap-2 {
        gap: 0.75rem !important;
    }

    /* Espacement entre les boutons dans une ligne */
    .d-flex.gap-2 {
        gap: 0.75rem !important;
    }

    /* Couleurs des boutons du filtre */
    .btn-success {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
        color: white !important;
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #218838 0%, #1baa7e 100%) !important;
    }

    .btn-danger {
        background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%) !important;
        color: white !important;
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, #c82333 0%, #e8590c 100%) !important;
    }

    .btn-info {
        background: linear-gradient(135deg, #17a2b8 0%, #20c997 100%) !important;
        color: white !important;
    }

    .btn-info:hover {
        background: linear-gradient(135deg, #138496 0%, #1baa7e 100%) !important;
    }

    .btn-primary {
        background: linear-gradient(135deg, #007bff 0%, #6610f2 100%) !important;
        color: white !important;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #0056b3 0%, #520dc2 100%) !important;
    }

    /* Ombres pour séparer visuellement */
    .shadow-sm {
        box-shadow: 0 3px 8px rgba(0,0,0,0.1) !important;
    }

    .shadow-lg {
        box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
    }

    /* Animation des icônes de tri */
    .sortable i {
        transition: transform 0.3s ease;
        opacity: 0.7;
    }

    .sortable:hover i {
        opacity: 1;
    }

    .sortable.asc i {
        transform: rotate(180deg);
    }

    /* Effet de pulse pour les emojis des boutons */
    .btn-see:hover emoji, .btn-modify:hover emoji {
        animation: pulse 0.5s ease;
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.2); }
        100% { transform: scale(1); }
    }

    /* Responsive */
    @media (max-width: 768px) {
        h2 {
            font-size: 1.75rem;
        }
        
        .flex-column.gap-2 .d-flex {
            flex-direction: column;
        }
        
        .btn-see, .btn-modify {
            padding: 0.35rem 0.6rem !important;
            font-size: 0.8rem !important;
            gap: 3px !important;
        }
        
        .table-sky-blue th {
            padding: 10px 12px !important;
            font-size: 0.85rem;
        }
    }
    
    @media (max-width: 576px) {
        h2 {
            font-size: 1.5rem;
        }
        
        .btn-see, .btn-modify {
            padding: 0.3rem 0.5rem !important;
            font-size: 0.75rem !important;
            min-width: 70px;
        }
        
        .btn-see span, .btn-modify span {
            display: none;
        }
        
        .btn-see::before {
            content: \"👁️\";
            font-size: 1rem;
        }
        
        .btn-modify::before {
            content: \"✏️\";
            font-size: 1rem;
        }
        
        .btn-group {
            justify-content: center !important;
        }
    }
</style>
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Bouton de TRI par ID
    const sortButton = document.getElementById('sortButton');
    let sortOrder = 'asc'; // Par défaut croissant
    
    if (sortButton) {
        sortButton.addEventListener('click', function() {
            const table = document.getElementById('sortableTable');
            const tbody = table.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));
            
            // Trier les lignes par ID
            rows.sort((a, b) => {
                const idA = parseInt(a.cells[0].textContent.trim());
                const idB = parseInt(b.cells[0].textContent.trim());
                
                return sortOrder === 'asc' ? idA - idB : idB - idA;
            });
            
            // Vider et remplir le tableau
            tbody.innerHTML = '';
            rows.forEach(row => tbody.appendChild(row));
            
            // Inverser l'ordre pour le prochain clic
            sortOrder = sortOrder === 'asc' ? 'desc' : 'asc';
            
            // Changer le texte du bouton
            sortButton.innerHTML = sortOrder === 'asc' 
                ? '🔄 Trier par ID ↑' 
                : '🔄 Trier par ID ↓';
        });
    }

    // Tableau pour tri manuel sur colonnes
    const table = document.getElementById('sortableTable');
    if (table) {
        const headers = table.querySelectorAll('th.sortable');
        headers.forEach(header => {
            header.addEventListener('click', function () {
                const sortKey = this.dataset.sort;
                let direction = this.classList.contains('asc') ? 'desc' : 'asc';

                headers.forEach(h => h.classList.remove('asc', 'desc'));
                this.classList.add(direction);

                const tbody = table.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr'));

                rows.sort((a, b) => {
                    const index = Array.from(headers).indexOf(this);
                    let valA = a.cells[index].textContent.trim();
                    let valB = b.cells[index].textContent.trim();

                    if (sortKey === 'dateHeure') {
                        valA = new Date(valA.split(' ')[0].split('/').reverse().join('-') + ' ' + (valA.split(' ')[1] || '00:00'));
                        valB = new Date(valB.split(' ')[0].split('/').reverse().join('-') + ' ' + (valB.split(' ')[1] || '00:00'));
                        return direction === 'asc' ? valA - valB : valB - valA;
                    }

                    if (sortKey === 'id') {
                        return direction === 'asc' 
                            ? parseInt(valA) - parseInt(valB)
                            : parseInt(valB) - parseInt(valA);
                    }

                    return direction === 'asc' 
                        ? valA.localeCompare(valB) 
                        : valB.localeCompare(valA);
                });

                tbody.innerHTML = '';
                rows.forEach(row => tbody.appendChild(row));
            });
        });
    }
    
    // Animation des emojis au survol des boutons d'action
const actionButtons = document.querySelectorAll('.btn-see, .btn-modify, .btn-reservations');    actionButtons.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            const emoji = this.querySelector('span')?.previousSibling?.nodeValue || 
                         this.textContent.match(/[👁️✏️]/)?.[0];
            if (emoji) {
                this.style.setProperty('--emoji-scale', '1.2');
            }
        });
        
        btn.addEventListener('mouseleave', function() {
            this.style.setProperty('--emoji-scale', '1');
        });
    });
});
</script>
{% endblock %}", "session/index.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\session\\index.html.twig");
    }
}
