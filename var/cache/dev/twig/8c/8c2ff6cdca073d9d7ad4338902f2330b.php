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

/* dashboard/users_viewer.html.twig */
class __TwigTemplate_b97c7e6edea88885af704c21091be930 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/users_viewer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/users_viewer.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Users Viewer</title>
    <link href=\"https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;600&family=IBM+Plex+Sans:wght@300;400;600&display=swap\" rel=\"stylesheet\">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'IBM Plex Sans', sans-serif;
            background: #0f1117;
            color: #e2e8f0;
            min-height: 100vh;
        }

        .toolbar {
            background: #1a1d27;
            border-bottom: 1px solid #2d3148;
            padding: 12px 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .toolbar-title {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 13px;
            color: #7c85b3;
            margin-right: auto;
        }

        .toolbar-title span {
            color: #6ee7b7;
            font-weight: 600;
        }

        .btn-tool {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 11px;
            padding: 6px 14px;
            border-radius: 4px;
            border: 1px solid #2d3148;
            cursor: pointer;
            background: #252837;
            color: #a0aec0;
            transition: all 0.15s;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .btn-tool:hover {
            background: #2d3148;
            color: #e2e8f0;
            border-color: #4a5080;
        }

        .btn-tool.green {
            background: #064e3b;
            color: #6ee7b7;
            border-color: #065f46;
        }

        .btn-tool.green:hover {
            background: #065f46;
            color: #a7f3d0;
        }

        .search-box {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 12px;
            padding: 6px 12px;
            background: #252837;
            border: 1px solid #2d3148;
            border-radius: 4px;
            color: #e2e8f0;
            width: 220px;
            outline: none;
        }

        .search-box:focus {
            border-color: #6ee7b7;
        }

        .sheet-container {
            padding: 24px;
            overflow-x: auto;
        }

        .stats-bar {
            display: flex;
            gap: 16px;
            margin-bottom: 16px;
        }

        .stat-chip {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 11px;
            padding: 4px 10px;
            border-radius: 3px;
            background: #1a1d27;
            border: 1px solid #2d3148;
            color: #7c85b3;
        }

        .stat-chip span { color: #6ee7b7; font-weight: 600; }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        thead tr {
            background: #1a1d27;
            position: sticky;
            top: 57px;
        }

        thead th {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 11px;
            font-weight: 600;
            color: #7c85b3;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 10px 16px;
            text-align: left;
            border-bottom: 2px solid #2d3148;
            border-right: 1px solid #1a1d27;
            white-space: nowrap;
            cursor: pointer;
            user-select: none;
        }

        thead th:hover { color: #6ee7b7; }

        .row-num {
            color: #3d4466;
            font-family: 'IBM Plex Mono', monospace;
            font-size: 11px;
            width: 40px;
            text-align: center;
            background: #141620 !important;
            border-right: 2px solid #2d3148 !important;
        }

        tbody tr {
            border-bottom: 1px solid #1e2130;
            transition: background 0.1s;
        }

        tbody tr:hover { background: #1a1d2a; }
        tbody tr.selected { background: #1a2a20 !important; }

        tbody td {
            padding: 9px 16px;
            color: #c8d0e8;
            border-right: 1px solid #1a1d27;
            font-size: 12px;
        }

        .cell-id {
            font-family: 'IBM Plex Mono', monospace;
            color: #4a5568;
        }

        .badge-role {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 10px;
            padding: 2px 8px;
            border-radius: 2px;
            font-weight: 600;
        }

        .badge-admin { background: #312e81; color: #a5b4fc; }
        .badge-user { background: #1e3a5f; color: #93c5fd; }
        .badge-teacher { background: #3b1f5e; color: #c4b5fd; }
        .badge-student { background: #1f3a2e; color: #6ee7b7; }

        .badge-status {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 10px;
            padding: 2px 8px;
            border-radius: 2px;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .badge-status::before {
            content: '';
            width: 5px;
            height: 5px;
            border-radius: 50%;
        }

        .status-online { background: #1f3a2e; color: #6ee7b7; }
        .status-online::before { background: #6ee7b7; }
        .status-offline { background: #2d1f1f; color: #f87171; }
        .status-offline::before { background: #f87171; }
        .status-disabled { background: #252837; color: #4a5568; }
        .status-disabled::before { background: #4a5568; }

        .no-results {
            text-align: center;
            padding: 60px;
            font-family: 'IBM Plex Mono', monospace;
            color: #3d4466;
            font-size: 13px;
        }

        .col-header { display: flex; align-items: center; gap: 4px; }
        .sort-icon { opacity: 0.3; font-size: 10px; }
        .sort-asc .sort-icon, .sort-desc .sort-icon { opacity: 1; color: #6ee7b7; }

        @media print {
            .toolbar { display: none; }
            body { background: white; color: black; }
            table { font-size: 11px; }
        }
    </style>
</head>
<body>

<div class=\"toolbar\">
    <div class=\"toolbar-title\">
        fluently / users — <span id=\"rowCount\">";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 233, $this->source); })())), "html", null, true);
        yield "</span> rows
    </div>

    <input type=\"text\" class=\"search-box\" id=\"searchInput\" placeholder=\"Search...\">

    <select class=\"btn-tool\" id=\"roleFilter\" onchange=\"filterTable()\">
        <option value=\"\">All roles</option>
        <option value=\"ADMIN\">ADMIN</option>
        <option value=\"USER\">USER</option>
        <option value=\"TEACHER\">TEACHER</option>
        <option value=\"STUDENT\">STUDENT</option>
    </select>

    <select class=\"btn-tool\" id=\"statusFilter\" onchange=\"filterTable()\">
        <option value=\"\">All status</option>
        <option value=\"online\">online</option>
        <option value=\"offline\">offline</option>
        <option value=\"disabled\">disabled</option>
    </select>

    <button class=\"btn-tool\" onclick=\"window.print()\">🖨 Print</button>

    <a href=\"";
        // line 255
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_export_users");
        yield "\" class=\"btn-tool green\">⬇ Export .xlsx</a>

    <a href=\"";
        // line 257
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"btn-tool\">← Back</a>
</div>

<div class=\"sheet-container\">
    <div class=\"stats-bar\">
        <div class=\"stat-chip\">Total: <span>";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 262, $this->source); })())), "html", null, true);
        yield "</span></div>
        <div class=\"stat-chip\">Online: <span>";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 263, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 263, $this->source); })()), "statut", [], "any", false, false, false, 263) == "online"); })), "html", null, true);
        yield "</span></div>
        <div class=\"stat-chip\">Offline: <span>";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 264, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 264, $this->source); })()), "statut", [], "any", false, false, false, 264) == "offline"); })), "html", null, true);
        yield "</span></div>
        <div class=\"stat-chip\">Disabled: <span>";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 265, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 265, $this->source); })()), "statut", [], "any", false, false, false, 265) == "disabled"); })), "html", null, true);
        yield "</span></div>
    </div>

    <table id=\"usersTable\">
        <thead>
            <tr>
                <th class=\"row-num\">#</th>
                <th onclick=\"sortTable(1)\">ID <span class=\"sort-icon\">↕</span></th>
                <th onclick=\"sortTable(2)\">Nom <span class=\"sort-icon\">↕</span></th>
                <th onclick=\"sortTable(3)\">Email <span class=\"sort-icon\">↕</span></th>
                <th onclick=\"sortTable(4)\">Rôle <span class=\"sort-icon\">↕</span></th>
                <th onclick=\"sortTable(5)\">Statut <span class=\"sort-icon\">↕</span></th>
            </tr>
        </thead>
        <tbody id=\"tableBody\">
            ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 280, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 281
            yield "            <tr data-role=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 281), 0, [], "array", false, false, false, 281), ["ROLE_" => ""]), "html", null, true);
            yield "\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 281), "html", null, true);
            yield "\">
                <td class=\"row-num\">";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 282), "html", null, true);
            yield "</td>
                <td class=\"cell-id\">";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 283), "html", null, true);
            yield "</td>
                <td>";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 284), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 284), "html", null, true);
            yield "</td>
                <td>";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 285), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 287
            $context["role"] = Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 287), 0, [], "array", false, false, false, 287), ["ROLE_" => ""]);
            // line 288
            yield "                    <span class=\"badge-role badge-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 288, $this->source); })())), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 288, $this->source); })()), "html", null, true);
            yield "</span>
                </td>
                <td>
                    <span class=\"badge-status status-";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 291), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 291), "html", null, true);
            yield "</span>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 294
        if (!$context['_iterated']) {
            // line 295
            yield "            <tr><td colspan=\"6\" class=\"no-results\">No users found</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        yield "        </tbody>
    </table>
</div>

<script>
document.getElementById('searchInput').addEventListener('input', filterTable);

function filterTable() {
    const search = document.getElementById('searchInput').value.toLowerCase();
    const role = document.getElementById('roleFilter').value;
    const status = document.getElementById('statusFilter').value;
    const rows = document.querySelectorAll('#tableBody tr');
    let visible = 0;

    rows.forEach((row, i) => {
        const text = row.textContent.toLowerCase();
        const rowRole = row.dataset.role || '';
        const rowStatus = row.dataset.status || '';

        const matchSearch = text.includes(search);
        const matchRole = !role || rowRole === role;
        const matchStatus = !status || rowStatus === status;

        if (matchSearch && matchRole && matchStatus) {
            row.style.display = '';
            visible++;
            row.cells[0].textContent = visible;
        } else {
            row.style.display = 'none';
        }
    });

    document.getElementById('rowCount').textContent = visible;
}

let sortDir = {};
function sortTable(col) {
    const tbody = document.getElementById('tableBody');
    const rows = Array.from(tbody.querySelectorAll('tr'));
    sortDir[col] = !sortDir[col];

    rows.sort((a, b) => {
        const aVal = a.cells[col]?.textContent.trim() || '';
        const bVal = b.cells[col]?.textContent.trim() || '';
        return sortDir[col]
            ? aVal.localeCompare(bVal, undefined, {numeric: true})
            : bVal.localeCompare(aVal, undefined, {numeric: true});
    });

    rows.forEach((row, i) => {
        row.cells[0].textContent = i + 1;
        tbody.appendChild(row);
    });
}

// Row selection
document.getElementById('tableBody').addEventListener('click', e => {
    const row = e.target.closest('tr');
    if (row) {
        document.querySelectorAll('#tableBody tr').forEach(r => r.classList.remove('selected'));
        row.classList.add('selected');
    }
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
        return "dashboard/users_viewer.html.twig";
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
        return array (  432 => 297,  425 => 295,  423 => 294,  405 => 291,  396 => 288,  394 => 287,  389 => 285,  383 => 284,  379 => 283,  375 => 282,  368 => 281,  350 => 280,  332 => 265,  328 => 264,  324 => 263,  320 => 262,  312 => 257,  307 => 255,  282 => 233,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Users Viewer</title>
    <link href=\"https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;600&family=IBM+Plex+Sans:wght@300;400;600&display=swap\" rel=\"stylesheet\">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'IBM Plex Sans', sans-serif;
            background: #0f1117;
            color: #e2e8f0;
            min-height: 100vh;
        }

        .toolbar {
            background: #1a1d27;
            border-bottom: 1px solid #2d3148;
            padding: 12px 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .toolbar-title {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 13px;
            color: #7c85b3;
            margin-right: auto;
        }

        .toolbar-title span {
            color: #6ee7b7;
            font-weight: 600;
        }

        .btn-tool {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 11px;
            padding: 6px 14px;
            border-radius: 4px;
            border: 1px solid #2d3148;
            cursor: pointer;
            background: #252837;
            color: #a0aec0;
            transition: all 0.15s;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .btn-tool:hover {
            background: #2d3148;
            color: #e2e8f0;
            border-color: #4a5080;
        }

        .btn-tool.green {
            background: #064e3b;
            color: #6ee7b7;
            border-color: #065f46;
        }

        .btn-tool.green:hover {
            background: #065f46;
            color: #a7f3d0;
        }

        .search-box {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 12px;
            padding: 6px 12px;
            background: #252837;
            border: 1px solid #2d3148;
            border-radius: 4px;
            color: #e2e8f0;
            width: 220px;
            outline: none;
        }

        .search-box:focus {
            border-color: #6ee7b7;
        }

        .sheet-container {
            padding: 24px;
            overflow-x: auto;
        }

        .stats-bar {
            display: flex;
            gap: 16px;
            margin-bottom: 16px;
        }

        .stat-chip {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 11px;
            padding: 4px 10px;
            border-radius: 3px;
            background: #1a1d27;
            border: 1px solid #2d3148;
            color: #7c85b3;
        }

        .stat-chip span { color: #6ee7b7; font-weight: 600; }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        thead tr {
            background: #1a1d27;
            position: sticky;
            top: 57px;
        }

        thead th {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 11px;
            font-weight: 600;
            color: #7c85b3;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 10px 16px;
            text-align: left;
            border-bottom: 2px solid #2d3148;
            border-right: 1px solid #1a1d27;
            white-space: nowrap;
            cursor: pointer;
            user-select: none;
        }

        thead th:hover { color: #6ee7b7; }

        .row-num {
            color: #3d4466;
            font-family: 'IBM Plex Mono', monospace;
            font-size: 11px;
            width: 40px;
            text-align: center;
            background: #141620 !important;
            border-right: 2px solid #2d3148 !important;
        }

        tbody tr {
            border-bottom: 1px solid #1e2130;
            transition: background 0.1s;
        }

        tbody tr:hover { background: #1a1d2a; }
        tbody tr.selected { background: #1a2a20 !important; }

        tbody td {
            padding: 9px 16px;
            color: #c8d0e8;
            border-right: 1px solid #1a1d27;
            font-size: 12px;
        }

        .cell-id {
            font-family: 'IBM Plex Mono', monospace;
            color: #4a5568;
        }

        .badge-role {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 10px;
            padding: 2px 8px;
            border-radius: 2px;
            font-weight: 600;
        }

        .badge-admin { background: #312e81; color: #a5b4fc; }
        .badge-user { background: #1e3a5f; color: #93c5fd; }
        .badge-teacher { background: #3b1f5e; color: #c4b5fd; }
        .badge-student { background: #1f3a2e; color: #6ee7b7; }

        .badge-status {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 10px;
            padding: 2px 8px;
            border-radius: 2px;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .badge-status::before {
            content: '';
            width: 5px;
            height: 5px;
            border-radius: 50%;
        }

        .status-online { background: #1f3a2e; color: #6ee7b7; }
        .status-online::before { background: #6ee7b7; }
        .status-offline { background: #2d1f1f; color: #f87171; }
        .status-offline::before { background: #f87171; }
        .status-disabled { background: #252837; color: #4a5568; }
        .status-disabled::before { background: #4a5568; }

        .no-results {
            text-align: center;
            padding: 60px;
            font-family: 'IBM Plex Mono', monospace;
            color: #3d4466;
            font-size: 13px;
        }

        .col-header { display: flex; align-items: center; gap: 4px; }
        .sort-icon { opacity: 0.3; font-size: 10px; }
        .sort-asc .sort-icon, .sort-desc .sort-icon { opacity: 1; color: #6ee7b7; }

        @media print {
            .toolbar { display: none; }
            body { background: white; color: black; }
            table { font-size: 11px; }
        }
    </style>
</head>
<body>

<div class=\"toolbar\">
    <div class=\"toolbar-title\">
        fluently / users — <span id=\"rowCount\">{{ users|length }}</span> rows
    </div>

    <input type=\"text\" class=\"search-box\" id=\"searchInput\" placeholder=\"Search...\">

    <select class=\"btn-tool\" id=\"roleFilter\" onchange=\"filterTable()\">
        <option value=\"\">All roles</option>
        <option value=\"ADMIN\">ADMIN</option>
        <option value=\"USER\">USER</option>
        <option value=\"TEACHER\">TEACHER</option>
        <option value=\"STUDENT\">STUDENT</option>
    </select>

    <select class=\"btn-tool\" id=\"statusFilter\" onchange=\"filterTable()\">
        <option value=\"\">All status</option>
        <option value=\"online\">online</option>
        <option value=\"offline\">offline</option>
        <option value=\"disabled\">disabled</option>
    </select>

    <button class=\"btn-tool\" onclick=\"window.print()\">🖨 Print</button>

    <a href=\"{{ path('dashboard_export_users') }}\" class=\"btn-tool green\">⬇ Export .xlsx</a>

    <a href=\"{{ path('dashboard') }}\" class=\"btn-tool\">← Back</a>
</div>

<div class=\"sheet-container\">
    <div class=\"stats-bar\">
        <div class=\"stat-chip\">Total: <span>{{ users|length }}</span></div>
        <div class=\"stat-chip\">Online: <span>{{ users|filter(u => u.statut == 'online')|length }}</span></div>
        <div class=\"stat-chip\">Offline: <span>{{ users|filter(u => u.statut == 'offline')|length }}</span></div>
        <div class=\"stat-chip\">Disabled: <span>{{ users|filter(u => u.statut == 'disabled')|length }}</span></div>
    </div>

    <table id=\"usersTable\">
        <thead>
            <tr>
                <th class=\"row-num\">#</th>
                <th onclick=\"sortTable(1)\">ID <span class=\"sort-icon\">↕</span></th>
                <th onclick=\"sortTable(2)\">Nom <span class=\"sort-icon\">↕</span></th>
                <th onclick=\"sortTable(3)\">Email <span class=\"sort-icon\">↕</span></th>
                <th onclick=\"sortTable(4)\">Rôle <span class=\"sort-icon\">↕</span></th>
                <th onclick=\"sortTable(5)\">Statut <span class=\"sort-icon\">↕</span></th>
            </tr>
        </thead>
        <tbody id=\"tableBody\">
            {% for user in users %}
            <tr data-role=\"{{ user.roles[0]|replace({'ROLE_': ''}) }}\" data-status=\"{{ user.statut }}\">
                <td class=\"row-num\">{{ loop.index }}</td>
                <td class=\"cell-id\">{{ user.id }}</td>
                <td>{{ user.nom }} {{ user.prenom }}</td>
                <td>{{ user.email }}</td>
                <td>
                    {% set role = user.roles[0]|replace({'ROLE_': ''}) %}
                    <span class=\"badge-role badge-{{ role|lower }}\">{{ role }}</span>
                </td>
                <td>
                    <span class=\"badge-status status-{{ user.statut }}\">{{ user.statut }}</span>
                </td>
            </tr>
            {% else %}
            <tr><td colspan=\"6\" class=\"no-results\">No users found</td></tr>
            {% endfor %}
        </tbody>
    </table>
</div>

<script>
document.getElementById('searchInput').addEventListener('input', filterTable);

function filterTable() {
    const search = document.getElementById('searchInput').value.toLowerCase();
    const role = document.getElementById('roleFilter').value;
    const status = document.getElementById('statusFilter').value;
    const rows = document.querySelectorAll('#tableBody tr');
    let visible = 0;

    rows.forEach((row, i) => {
        const text = row.textContent.toLowerCase();
        const rowRole = row.dataset.role || '';
        const rowStatus = row.dataset.status || '';

        const matchSearch = text.includes(search);
        const matchRole = !role || rowRole === role;
        const matchStatus = !status || rowStatus === status;

        if (matchSearch && matchRole && matchStatus) {
            row.style.display = '';
            visible++;
            row.cells[0].textContent = visible;
        } else {
            row.style.display = 'none';
        }
    });

    document.getElementById('rowCount').textContent = visible;
}

let sortDir = {};
function sortTable(col) {
    const tbody = document.getElementById('tableBody');
    const rows = Array.from(tbody.querySelectorAll('tr'));
    sortDir[col] = !sortDir[col];

    rows.sort((a, b) => {
        const aVal = a.cells[col]?.textContent.trim() || '';
        const bVal = b.cells[col]?.textContent.trim() || '';
        return sortDir[col]
            ? aVal.localeCompare(bVal, undefined, {numeric: true})
            : bVal.localeCompare(aVal, undefined, {numeric: true});
    });

    rows.forEach((row, i) => {
        row.cells[0].textContent = i + 1;
        tbody.appendChild(row);
    });
}

// Row selection
document.getElementById('tableBody').addEventListener('click', e => {
    const row = e.target.closest('tr');
    if (row) {
        document.querySelectorAll('#tableBody tr').forEach(r => r.classList.remove('selected'));
        row.classList.add('selected');
    }
});
</script>

</body>
</html>", "dashboard/users_viewer.html.twig", "C:\\Users\\MSI\\Desktop\\Fuser\\Fluently\\Fluently\\Fluently\\Fluently\\templates\\dashboard\\users_viewer.html.twig");
    }
}
