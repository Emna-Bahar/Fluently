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

/* tache_admin/pdf.html.twig */
class __TwigTemplate_30a425f49aeff0dd6bdf7abcf6cca3a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache_admin/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tache_admin/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Liste des Tâches</title>
    <style>
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 12px;
            line-height: 1.4;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #333;
            padding-bottom: 15px;
        }
        
        h1 {
            color: #333;
            margin: 0;
            font-size: 24px;
        }
        
        .subtitle {
            color: #666;
            margin-top: 5px;
            font-size: 14px;
        }
        
        .date {
            text-align: right;
            margin-bottom: 20px;
            color: #666;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        
        td {
            padding: 8px 10px;
            border: 1px solid #ddd;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .badge {
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 10px;
            color: white;
            display: inline-block;
        }
        
        .badge-success {
            background-color: #28a745;
        }
        
        .badge-primary {
            background-color: #007bff;
        }
        
        .badge-warning {
            background-color: #ffc107;
            color: #333;
        }
        
        .badge-danger {
            background-color: #dc3545;
        }
        
        .badge-info {
            background-color: #17a2b8;
        }
        
        .badge-secondary {
            background-color: #6c757d;
        }
        
        .footer {
            margin-top: 50px;
            text-align: center;
            color: #666;
            font-size: 10px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        
        .summary {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border-left: 4px solid #007bff;
        }
        
        .text-danger {
            color: #dc3545;
            font-weight: bold;
        }
        
        .page-break {
            page-break-before: always;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Rapport des Tâches</h1>
        <div class=\"subtitle\">Système de Gestion Fluently</div>
    </div>
    
    <div class=\"date\">
        Généré le : ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 129, $this->source); })()), "d/m/Y à H:i"), "html", null, true);
        yield "
    </div>
    
    <div class=\"summary\">
        <strong>Résumé :</strong> ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 133, $this->source); })())), "html", null, true);
        yield " tâche(s) au total
    </div>
    
    <table>
        <thead>
            <tr>
                <th width=\"5%\">ID</th>
                <th width=\"20%\">Titre</th>
                <th width=\"25%\">Description</th>
                <th width=\"12%\">Date limite</th>
                <th width=\"10%\">Statut</th>
                <th width=\"10%\">Priorité</th>
                <th width=\"18%\">Objectif</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 149, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 150
            yield "                ";
            $context["isLate"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateLimite", [], "any", false, false, false, 150) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()) && (CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 150) != "terminee"));
            // line 151
            yield "                <tr>
                    <td>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 152), "html", null, true);
            yield "</td>
                    <td><strong>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "titre", [], "any", false, false, false, 153), "html", null, true);
            yield "</strong></td>
                    <td>";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "description", [], "any", false, false, false, 154), 0, 80), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "description", [], "any", false, false, false, 154)) > 80)) {
                yield "...";
            }
            yield "</td>
                    <td ";
            // line 155
            if ((($tmp = (isset($context["isLate"]) || array_key_exists("isLate", $context) ? $context["isLate"] : (function () { throw new RuntimeError('Variable "isLate" does not exist.', 155, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "class=\"text-danger\"";
            }
            yield ">
                        ";
            // line 156
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateLimite", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "dateLimite", [], "any", false, false, false, 156), "d/m/Y"), "html", null, true)) : ("-"));
            yield "
                        ";
            // line 157
            if ((($tmp = (isset($context["isLate"]) || array_key_exists("isLate", $context) ? $context["isLate"] : (function () { throw new RuntimeError('Variable "isLate" does not exist.', 157, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " ⚠";
            }
            // line 158
            yield "                    </td>
                    <td>
                        ";
            // line 160
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 160) == "terminee")) {
                // line 161
                yield "                            <span class=\"badge badge-success\">Terminée</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 162
$context["tache"], "statut", [], "any", false, false, false, 162) == "en_cours")) {
                // line 163
                yield "                            <span class=\"badge badge-primary\">En cours</span>
                        ";
            } else {
                // line 165
                yield "                            <span class=\"badge badge-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "statut", [], "any", false, false, false, 165), "html", null, true);
                yield "</span>
                        ";
            }
            // line 167
            yield "                    </td>
                    <td>
                        ";
            // line 169
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 169) == "urgente")) {
                // line 170
                yield "                            <span class=\"badge badge-danger\">Urgente</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 171
$context["tache"], "priorite", [], "any", false, false, false, 171) == "haute")) {
                // line 172
                yield "                            <span class=\"badge badge-warning\">Haute</span>
                        ";
            } else {
                // line 174
                yield "                            <span class=\"badge badge-info\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "priorite", [], "any", false, false, false, 174), "html", null, true);
                yield "</span>
                        ";
            }
            // line 176
            yield "                    </td>
                    <td>";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "idObjectif", [], "any", false, false, false, 177), "titre", [], "any", false, false, false, 177), 0, 40), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "idObjectif", [], "any", false, false, false, 177), "titre", [], "any", false, false, false, 177)) > 40)) {
                yield "...";
            }
            yield "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 179
        if (!$context['_iterated']) {
            // line 180
            yield "                <tr>
                    <td colspan=\"7\" style=\"text-align: center; padding: 20px;\">
                        Aucune tâche trouvée
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        yield "        </tbody>
    </table>
    
    <div class=\"footer\">
        <p>Document généré automatiquement par le système de gestion Fluently</p>
        <p>Page 1/1</p>
    </div>
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
        return "tache_admin/pdf.html.twig";
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
        return array (  312 => 186,  301 => 180,  299 => 179,  289 => 177,  286 => 176,  280 => 174,  276 => 172,  274 => 171,  271 => 170,  269 => 169,  265 => 167,  259 => 165,  255 => 163,  253 => 162,  250 => 161,  248 => 160,  244 => 158,  240 => 157,  236 => 156,  230 => 155,  223 => 154,  219 => 153,  215 => 152,  212 => 151,  209 => 150,  204 => 149,  185 => 133,  178 => 129,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Liste des Tâches</title>
    <style>
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 12px;
            line-height: 1.4;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #333;
            padding-bottom: 15px;
        }
        
        h1 {
            color: #333;
            margin: 0;
            font-size: 24px;
        }
        
        .subtitle {
            color: #666;
            margin-top: 5px;
            font-size: 14px;
        }
        
        .date {
            text-align: right;
            margin-bottom: 20px;
            color: #666;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        
        td {
            padding: 8px 10px;
            border: 1px solid #ddd;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .badge {
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 10px;
            color: white;
            display: inline-block;
        }
        
        .badge-success {
            background-color: #28a745;
        }
        
        .badge-primary {
            background-color: #007bff;
        }
        
        .badge-warning {
            background-color: #ffc107;
            color: #333;
        }
        
        .badge-danger {
            background-color: #dc3545;
        }
        
        .badge-info {
            background-color: #17a2b8;
        }
        
        .badge-secondary {
            background-color: #6c757d;
        }
        
        .footer {
            margin-top: 50px;
            text-align: center;
            color: #666;
            font-size: 10px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        
        .summary {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border-left: 4px solid #007bff;
        }
        
        .text-danger {
            color: #dc3545;
            font-weight: bold;
        }
        
        .page-break {
            page-break-before: always;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Rapport des Tâches</h1>
        <div class=\"subtitle\">Système de Gestion Fluently</div>
    </div>
    
    <div class=\"date\">
        Généré le : {{ date|date('d/m/Y à H:i') }}
    </div>
    
    <div class=\"summary\">
        <strong>Résumé :</strong> {{ taches|length }} tâche(s) au total
    </div>
    
    <table>
        <thead>
            <tr>
                <th width=\"5%\">ID</th>
                <th width=\"20%\">Titre</th>
                <th width=\"25%\">Description</th>
                <th width=\"12%\">Date limite</th>
                <th width=\"10%\">Statut</th>
                <th width=\"10%\">Priorité</th>
                <th width=\"18%\">Objectif</th>
            </tr>
        </thead>
        <tbody>
            {% for tache in taches %}
                {% set isLate = tache.dateLimite < date() and tache.statut != 'terminee' %}
                <tr>
                    <td>{{ tache.id }}</td>
                    <td><strong>{{ tache.titre }}</strong></td>
                    <td>{{ tache.description|slice(0, 80) }}{% if tache.description|length > 80 %}...{% endif %}</td>
                    <td {% if isLate %}class=\"text-danger\"{% endif %}>
                        {{ tache.dateLimite ? tache.dateLimite|date('d/m/Y') : '-' }}
                        {% if isLate %} ⚠{% endif %}
                    </td>
                    <td>
                        {% if tache.statut == 'terminee' %}
                            <span class=\"badge badge-success\">Terminée</span>
                        {% elseif tache.statut == 'en_cours' %}
                            <span class=\"badge badge-primary\">En cours</span>
                        {% else %}
                            <span class=\"badge badge-secondary\">{{ tache.statut }}</span>
                        {% endif %}
                    </td>
                    <td>
                        {% if tache.priorite == 'urgente' %}
                            <span class=\"badge badge-danger\">Urgente</span>
                        {% elseif tache.priorite == 'haute' %}
                            <span class=\"badge badge-warning\">Haute</span>
                        {% else %}
                            <span class=\"badge badge-info\">{{ tache.priorite }}</span>
                        {% endif %}
                    </td>
                    <td>{{ tache.idObjectif.titre|slice(0, 40) }}{% if tache.idObjectif.titre|length > 40 %}...{% endif %}</td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\" style=\"text-align: center; padding: 20px;\">
                        Aucune tâche trouvée
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    
    <div class=\"footer\">
        <p>Document généré automatiquement par le système de gestion Fluently</p>
        <p>Page 1/1</p>
    </div>
</body>
</html>", "tache_admin/pdf.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\tache_admin\\pdf.html.twig");
    }
}
