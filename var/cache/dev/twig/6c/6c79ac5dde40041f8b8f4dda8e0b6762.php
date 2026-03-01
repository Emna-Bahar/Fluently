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

/* objectif/calendar.html.twig */
class __TwigTemplate_73e6e725924189cfed17a121063c6991 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/calendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/calendar.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Calendrier des Objectifs - Fluently";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "
";
        // line 7
        yield "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_1.jpg"), "html", null, true);
        yield "');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Calendrier des Objectifs</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span class=\"mr-2\"><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\">Objectifs <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Calendrier</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section bg-light\">
<div class=\"container\">

    ";
        // line 27
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h2 class=\"heading-section mb-1\">📅 Calendrier visuel</h2>
            <p class=\"text-muted\">Cliquez sur un objectif pour voir ses détails</p>
        </div>
        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\" class=\"btn btn-secondary\" style=\"border-radius:10px;\">
            <i class=\"fa fa-list\"></i> Vue liste
        </a>
    </div>

    ";
        // line 38
        yield "    <div class=\"mb-4 d-flex flex-wrap\" style=\"gap:10px;\">
        <span class=\"legend-badge\" style=\"background:#4f6df5;\"><i class=\"fa fa-circle\"></i> En cours</span>
        <span class=\"legend-badge\" style=\"background:#e74c3c;\"><i class=\"fa fa-circle\"></i> En retard</span>
        <span class=\"legend-badge\" style=\"background:#f39c12;\"><i class=\"fa fa-circle\"></i> En pause</span>
        <span class=\"legend-badge\" style=\"background:#2ecc71;\"><i class=\"fa fa-circle\"></i> Complété</span>
        <span class=\"legend-badge\" style=\"background:#95a5a6;\"><i class=\"fa fa-circle\"></i> Abandonné</span>
    </div>

    ";
        // line 47
        yield "    <div class=\"card border-0 shadow-sm p-4\" style=\"border-radius:20px; background:#fff;\">
        <div id=\"calendar\"></div>
    </div>

    ";
        // line 52
        yield "    <div id=\"event-popup\" style=\"display:none;\">
        <div id=\"popup-content\">
            <button id=\"popup-close\">✕</button>
            <div id=\"popup-icon\">📌</div>
            <h4 id=\"popup-title\"></h4>
            <div id=\"popup-dates\"></div>
            <a id=\"popup-link\" href=\"#\" class=\"popup-btn\">👁️ Voir l'objectif</a>
        </div>
    </div>

</div>
</section>

";
        // line 66
        yield "<link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js\"></script>

<style>
/* ── Légende ── */
.legend-badge {
    color: #fff;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: .85rem;
    font-weight: 500;
    box-shadow: 0 2px 8px rgba(0,0,0,0.10);
}

/* ── Calendrier général ── */
#calendar {
    font-family: 'Poppins', sans-serif;
}

/* ── Toolbar (nav) ── */
.fc-toolbar-title {
    font-size: 1.5rem !important;
    font-weight: 700 !important;
    color: #2d3436;
}
.fc-button-primary {
    background: linear-gradient(135deg, #4f6df5, #6a82fb) !important;
    border: none !important;
    border-radius: 10px !important;
    padding: 6px 16px !important;
    font-weight: 500 !important;
    box-shadow: 0 3px 10px rgba(79,109,245,0.25) !important;
    transition: all 0.2s !important;
}
.fc-button-primary:hover {
    transform: translateY(-1px) !important;
    box-shadow: 0 6px 18px rgba(79,109,245,0.35) !important;
}
.fc-button-primary:not(:disabled).fc-button-active {
    background: linear-gradient(135deg, #3a57d4, #4f6df5) !important;
}

/* ── En-tête des jours ── */
.fc-col-header-cell {
    background: linear-gradient(135deg, #4f6df5, #6a82fb);
    color: #fff !important;
    padding: 10px 0 !important;
    font-weight: 600 !important;
    font-size: .9rem !important;
}
.fc-col-header-cell a {
    color: #fff !important;
}

/* ── Cellules jours ── */
.fc-daygrid-day {
    transition: background 0.15s;
}
.fc-daygrid-day:hover {
    background: #f0f4ff !important;
}
.fc-day-today {
    background: #eef2ff !important;
}
.fc-day-today .fc-daygrid-day-number {
    background: #4f6df5;
    color: #fff !important;
    border-radius: 50%;
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
}

/* ── Événements ── */
.fc-event {
    border: none !important;
    border-radius: 8px !important;
    padding: 3px 8px !important;
    font-size: .82rem !important;
    font-weight: 500 !important;
    box-shadow: 0 2px 6px rgba(0,0,0,0.12) !important;
    cursor: pointer !important;
    transition: transform 0.15s, box-shadow 0.15s !important;
}
.fc-event:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 16px rgba(0,0,0,0.18) !important;
    opacity: 1 !important;
}

/* ── Popup ── */
#event-popup {
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0,0,0,0.45);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
}
#popup-content {
    background: #fff;
    border-radius: 20px;
    padding: 40px 35px 30px;
    max-width: 380px;
    width: 90%;
    text-align: center;
    box-shadow: 0 20px 60px rgba(0,0,0,0.2);
    position: relative;
    animation: popIn 0.25s ease;
}
@keyframes popIn {
    from { transform: scale(0.85); opacity: 0; }
    to   { transform: scale(1);    opacity: 1; }
}
#popup-close {
    position: absolute;
    top: 14px; right: 18px;
    background: #f0f0f0;
    border: none;
    border-radius: 50%;
    width: 30px; height: 30px;
    font-size: 14px;
    cursor: pointer;
    color: #666;
}
#popup-close:hover { background: #e74c3c; color: #fff; }
#popup-icon { font-size: 2.5rem; margin-bottom: 10px; }
#popup-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 12px;
}
#popup-dates {
    font-size: .88rem;
    color: #636e72;
    margin-bottom: 20px;
    line-height: 1.8;
}
.popup-btn {
    display: inline-block;
    background: linear-gradient(135deg, #4f6df5, #6a82fb);
    color: #fff !important;
    padding: 10px 28px;
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none !important;
    box-shadow: 0 4px 15px rgba(79,109,245,0.3);
    transition: all 0.2s;
}
.popup-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(79,109,245,0.4);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var popup      = document.getElementById('event-popup');
    var popupTitle = document.getElementById('popup-title');
    var popupDates = document.getElementById('popup-dates');
    var popupLink  = document.getElementById('popup-link');
    var popupIcon  = document.getElementById('popup-icon');

    // Icône selon couleur
    function getIcon(color) {
        if (color === '#2ecc71') return '✅';
        if (color === '#e74c3c') return '❌';
        if (color === '#f39c12') return '⏸️';
        if (color === '#95a5a6') return '🚫';
        return '🎯';
    }

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'fr',
        headerToolbar: {
            left:   'prev,next today',
            center: 'title',
            right:  'dayGridMonth,listMonth'
        },
        buttonText: {
            today: \"Aujourd'hui\",
            month: 'Mois',
            list:  'Liste'
        },
        events: '";
        // line 257
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_calendar_events");
        yield "',

        // ✅ Clic sur un événement → popup au lieu de redirection directe
        eventClick: function(info) {
            info.jsEvent.preventDefault();

            var e     = info.event;
            var color = e.backgroundColor;
            var start = e.start ? e.start.toLocaleDateString('fr-FR') : '-';
            var end   = e.end   ? e.end.toLocaleDateString('fr-FR')   : '-';

            popupIcon.textContent  = getIcon(color);
            popupTitle.textContent = e.title;
            popupTitle.style.color = color;
            popupDates.innerHTML   = '📅 Début : <strong>' + start + '</strong><br>🏁 Fin : <strong>' + end + '</strong>';
            popupLink.href         = e.url;

            popup.style.display = 'flex';
        },

        eventMouseEnter: function(info) {
            info.el.style.cursor = 'pointer';
        },
        height: 'auto',
        eventDisplay: 'block',
        dayMaxEvents: 3,
    });

    calendar.render();

    // Fermer popup
    document.getElementById('popup-close').addEventListener('click', function() {
        popup.style.display = 'none';
    });
    popup.addEventListener('click', function(e) {
        if (e.target === popup) popup.style.display = 'none';
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
        return "objectif/calendar.html.twig";
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
        return array (  371 => 257,  178 => 66,  163 => 52,  157 => 47,  147 => 38,  139 => 32,  132 => 27,  118 => 15,  114 => 14,  103 => 7,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Calendrier des Objectifs - Fluently{% endblock %}

{% block body %}

{# Hero #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_1.jpg') }}');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Calendrier des Objectifs</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"{{ path('app_home') }}\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span class=\"mr-2\"><a href=\"{{ path('app_objectif_index') }}\">Objectifs <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Calendrier</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section bg-light\">
<div class=\"container\">

    {# Header #}
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h2 class=\"heading-section mb-1\">📅 Calendrier visuel</h2>
            <p class=\"text-muted\">Cliquez sur un objectif pour voir ses détails</p>
        </div>
        <a href=\"{{ path('app_objectif_index') }}\" class=\"btn btn-secondary\" style=\"border-radius:10px;\">
            <i class=\"fa fa-list\"></i> Vue liste
        </a>
    </div>

    {# Légende #}
    <div class=\"mb-4 d-flex flex-wrap\" style=\"gap:10px;\">
        <span class=\"legend-badge\" style=\"background:#4f6df5;\"><i class=\"fa fa-circle\"></i> En cours</span>
        <span class=\"legend-badge\" style=\"background:#e74c3c;\"><i class=\"fa fa-circle\"></i> En retard</span>
        <span class=\"legend-badge\" style=\"background:#f39c12;\"><i class=\"fa fa-circle\"></i> En pause</span>
        <span class=\"legend-badge\" style=\"background:#2ecc71;\"><i class=\"fa fa-circle\"></i> Complété</span>
        <span class=\"legend-badge\" style=\"background:#95a5a6;\"><i class=\"fa fa-circle\"></i> Abandonné</span>
    </div>

    {# Calendrier #}
    <div class=\"card border-0 shadow-sm p-4\" style=\"border-radius:20px; background:#fff;\">
        <div id=\"calendar\"></div>
    </div>

    {# Popup détail objectif #}
    <div id=\"event-popup\" style=\"display:none;\">
        <div id=\"popup-content\">
            <button id=\"popup-close\">✕</button>
            <div id=\"popup-icon\">📌</div>
            <h4 id=\"popup-title\"></h4>
            <div id=\"popup-dates\"></div>
            <a id=\"popup-link\" href=\"#\" class=\"popup-btn\">👁️ Voir l'objectif</a>
        </div>
    </div>

</div>
</section>

{# FullCalendar CDN #}
<link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js\"></script>

<style>
/* ── Légende ── */
.legend-badge {
    color: #fff;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: .85rem;
    font-weight: 500;
    box-shadow: 0 2px 8px rgba(0,0,0,0.10);
}

/* ── Calendrier général ── */
#calendar {
    font-family: 'Poppins', sans-serif;
}

/* ── Toolbar (nav) ── */
.fc-toolbar-title {
    font-size: 1.5rem !important;
    font-weight: 700 !important;
    color: #2d3436;
}
.fc-button-primary {
    background: linear-gradient(135deg, #4f6df5, #6a82fb) !important;
    border: none !important;
    border-radius: 10px !important;
    padding: 6px 16px !important;
    font-weight: 500 !important;
    box-shadow: 0 3px 10px rgba(79,109,245,0.25) !important;
    transition: all 0.2s !important;
}
.fc-button-primary:hover {
    transform: translateY(-1px) !important;
    box-shadow: 0 6px 18px rgba(79,109,245,0.35) !important;
}
.fc-button-primary:not(:disabled).fc-button-active {
    background: linear-gradient(135deg, #3a57d4, #4f6df5) !important;
}

/* ── En-tête des jours ── */
.fc-col-header-cell {
    background: linear-gradient(135deg, #4f6df5, #6a82fb);
    color: #fff !important;
    padding: 10px 0 !important;
    font-weight: 600 !important;
    font-size: .9rem !important;
}
.fc-col-header-cell a {
    color: #fff !important;
}

/* ── Cellules jours ── */
.fc-daygrid-day {
    transition: background 0.15s;
}
.fc-daygrid-day:hover {
    background: #f0f4ff !important;
}
.fc-day-today {
    background: #eef2ff !important;
}
.fc-day-today .fc-daygrid-day-number {
    background: #4f6df5;
    color: #fff !important;
    border-radius: 50%;
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
}

/* ── Événements ── */
.fc-event {
    border: none !important;
    border-radius: 8px !important;
    padding: 3px 8px !important;
    font-size: .82rem !important;
    font-weight: 500 !important;
    box-shadow: 0 2px 6px rgba(0,0,0,0.12) !important;
    cursor: pointer !important;
    transition: transform 0.15s, box-shadow 0.15s !important;
}
.fc-event:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 16px rgba(0,0,0,0.18) !important;
    opacity: 1 !important;
}

/* ── Popup ── */
#event-popup {
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0,0,0,0.45);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
}
#popup-content {
    background: #fff;
    border-radius: 20px;
    padding: 40px 35px 30px;
    max-width: 380px;
    width: 90%;
    text-align: center;
    box-shadow: 0 20px 60px rgba(0,0,0,0.2);
    position: relative;
    animation: popIn 0.25s ease;
}
@keyframes popIn {
    from { transform: scale(0.85); opacity: 0; }
    to   { transform: scale(1);    opacity: 1; }
}
#popup-close {
    position: absolute;
    top: 14px; right: 18px;
    background: #f0f0f0;
    border: none;
    border-radius: 50%;
    width: 30px; height: 30px;
    font-size: 14px;
    cursor: pointer;
    color: #666;
}
#popup-close:hover { background: #e74c3c; color: #fff; }
#popup-icon { font-size: 2.5rem; margin-bottom: 10px; }
#popup-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 12px;
}
#popup-dates {
    font-size: .88rem;
    color: #636e72;
    margin-bottom: 20px;
    line-height: 1.8;
}
.popup-btn {
    display: inline-block;
    background: linear-gradient(135deg, #4f6df5, #6a82fb);
    color: #fff !important;
    padding: 10px 28px;
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none !important;
    box-shadow: 0 4px 15px rgba(79,109,245,0.3);
    transition: all 0.2s;
}
.popup-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(79,109,245,0.4);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var popup      = document.getElementById('event-popup');
    var popupTitle = document.getElementById('popup-title');
    var popupDates = document.getElementById('popup-dates');
    var popupLink  = document.getElementById('popup-link');
    var popupIcon  = document.getElementById('popup-icon');

    // Icône selon couleur
    function getIcon(color) {
        if (color === '#2ecc71') return '✅';
        if (color === '#e74c3c') return '❌';
        if (color === '#f39c12') return '⏸️';
        if (color === '#95a5a6') return '🚫';
        return '🎯';
    }

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'fr',
        headerToolbar: {
            left:   'prev,next today',
            center: 'title',
            right:  'dayGridMonth,listMonth'
        },
        buttonText: {
            today: \"Aujourd'hui\",
            month: 'Mois',
            list:  'Liste'
        },
        events: '{{ path('app_objectif_calendar_events') }}',

        // ✅ Clic sur un événement → popup au lieu de redirection directe
        eventClick: function(info) {
            info.jsEvent.preventDefault();

            var e     = info.event;
            var color = e.backgroundColor;
            var start = e.start ? e.start.toLocaleDateString('fr-FR') : '-';
            var end   = e.end   ? e.end.toLocaleDateString('fr-FR')   : '-';

            popupIcon.textContent  = getIcon(color);
            popupTitle.textContent = e.title;
            popupTitle.style.color = color;
            popupDates.innerHTML   = '📅 Début : <strong>' + start + '</strong><br>🏁 Fin : <strong>' + end + '</strong>';
            popupLink.href         = e.url;

            popup.style.display = 'flex';
        },

        eventMouseEnter: function(info) {
            info.el.style.cursor = 'pointer';
        },
        height: 'auto',
        eventDisplay: 'block',
        dayMaxEvents: 3,
    });

    calendar.render();

    // Fermer popup
    document.getElementById('popup-close').addEventListener('click', function() {
        popup.style.display = 'none';
    });
    popup.addEventListener('click', function(e) {
        if (e.target === popup) popup.style.display = 'none';
    });
});
</script>

{% endblock %}
", "objectif/calendar.html.twig", "C:\\Users\\MSI\\Desktop\\5idma\\Fluently\\templates\\objectif\\calendar.html.twig");
    }
}
