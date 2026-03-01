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

/* groupe/admin_group_chat.html.twig */
class __TwigTemplate_bc598d9fd82b8c1cb5eb632d9e95904d extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe/admin_group_chat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe/admin_group_chat.html.twig"));

        $this->parent = $this->load("dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<style>
  /* ── page wrapper ── */
  .ag-page { padding: 24px; }

  /* ── header card ── */
  .ag-header {
    background: #fff;
    border-radius: 12px;
    padding: 20px 24px;
    margin-bottom: 24px;
    border: 1px solid #e9ecef;
    box-shadow: 0 2px 8px rgba(0,0,0,.05);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
  }
  .ag-header h3 { margin: 0; font-size: 1.3rem; font-weight: 700; color: #1a1a2e; }
  .ag-badge {
    background: #f96d00;
    color: #fff;
    border-radius: 999px;
    padding: 2px 12px;
    font-size: .75rem;
    font-weight: 600;
  }

  /* ── search ── */
  .ag-search {
    display: flex;
    gap: 8px;
    margin-bottom: 24px;
  }
  .ag-search input {
    flex: 1;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    padding: 8px 14px;
    font-size: .9rem;
    outline: none;
  }
  .ag-search input:focus { border-color: #f96d00; box-shadow: 0 0 0 3px rgba(249,109,0,.15); }
  .ag-search button {
    background: #f96d00;
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 8px 20px;
    font-size: .9rem;
    cursor: pointer;
    font-weight: 600;
  }
  .ag-search button:hover { background: #d45e00; }

  /* ── two-column layout ── */
  .ag-cols { display: flex; gap: 24px; align-items: flex-start; }
  .ag-col-main { flex: 1; min-width: 0; }
  .ag-col-log  { width: 360px; flex-shrink: 0; }

  @media (max-width: 900px) {
    .ag-cols { flex-direction: column; }
    .ag-col-log { width: 100%; }
  }

  /* ── panel ── */
  .ag-panel {
    background: #fff;
    border-radius: 12px;
    border: 1px solid #e9ecef;
    box-shadow: 0 2px 8px rgba(0,0,0,.05);
    overflow: hidden;
  }
  .ag-panel-hd {
    padding: 14px 18px;
    border-bottom: 1px solid #e9ecef;
    background: #fafafa;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .ag-panel-hd h5 { margin: 0; font-weight: 700; font-size: .95rem; color: #1a1a2e; }
  .ag-panel-bd { padding: 14px; }

  /* ── message rows ── */
  .ag-msg {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 12px;
    padding: 12px 14px;
    border-radius: 8px;
    border: 1px solid #f0f0f0;
    margin-bottom: 8px;
    background: #fefefe;
    transition: background .15s;
  }
  .ag-msg:hover { background: #fff8f4; border-color: #fdd5b8; }
  .ag-msg-author { font-weight: 700; color: #3d3d3d; font-size: .88rem; }
  .ag-msg-text   { color: #5f5f5f; font-size: .9rem; margin-top: 2px; overflow-wrap: anywhere; }
  .ag-msg-time   { font-size: .75rem; color: #999; white-space: nowrap; margin-top: 2px; }
  .ag-delete-btn {
    background: #fff0f0;
    border: 1px solid #ffc9c9;
    color: #c0392b;
    border-radius: 6px;
    padding: 4px 10px;
    font-size: .8rem;
    cursor: pointer;
    white-space: nowrap;
    flex-shrink: 0;
  }
  .ag-delete-btn:hover { background: #ffdada; }

  /* ── empty state ── */
  .ag-empty { text-align:center; color:#aaa; padding: 32px 0; font-size:.9rem; }

  /* ── activity log entries ── */
  .log-entry {
    display: flex;
    gap: 12px;
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid #efefef;
    margin-bottom: 8px;
    position: relative;
  }
  .log-entry.log-edited  { border-left: 3px solid #3b82f6; background: #f0f7ff; }
  .log-entry.log-deleted { border-left: 3px solid #ef4444; background: #fff5f5; }

  .log-icon {
    width: 30px; height: 30px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 14px;
    flex-shrink: 0;
  }
  .log-edited  .log-icon { background: #dbeafe; }
  .log-deleted .log-icon { background: #fee2e2; }

  .log-body { flex: 1; min-width: 0; }
  .log-meta { font-size: .78rem; color: #888; margin-bottom: 3px; }
  .log-meta strong { color: #3d3d3d; font-weight: 700; }
  .log-meta .log-badge {
    display: inline-block;
    border-radius: 999px;
    padding: 1px 8px;
    font-size: .7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .3px;
    margin-left: 4px;
  }
  .log-badge-edited  { background: #dbeafe; color: #1d4ed8; }
  .log-badge-deleted { background: #fee2e2; color: #b91c1c; }

  .log-content {
    font-size: .82rem;
    color: #666;
    background: rgba(0,0,0,.03);
    border-radius: 6px;
    padding: 5px 8px;
    margin-top: 4px;
    overflow-wrap: anywhere;
  }
  .log-content del { color: #ef4444; text-decoration: line-through; }
  .log-content ins { color: #16a34a; text-decoration: none; }
  .log-arrow { color: #999; margin: 0 4px; }

  .log-time { font-size: .72rem; color: #aaa; margin-top: 4px; }
</style>

<div class=\"ag-page\">

  ";
        // line 179
        yield "  <div class=\"ag-header\">
    <div>
      <h3>";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 181, $this->source); })()), "nom", [], "any", false, false, false, 181), "html", null, true);
        yield "</h3>
      <small style=\"color:#888;\">Administration du groupe · ";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 182, $this->source); })())), "html", null, true);
        yield " message(s)</small>
    </div>
    <div style=\"display:flex; gap:8px; align-items:center;\">
      <span class=\"ag-badge\">Admin</span>
      <a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_group_index");
        yield "\" style=\"font-size:.85rem; color:#f96d00; text-decoration:none;\">
        ← Tous les groupes
      </a>
    </div>
  </div>

  ";
        // line 193
        yield "  <form method=\"get\" class=\"ag-search\">
    <input name=\"q\" value=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 194, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Rechercher par contenu, nom ou prénom…\">
    <button type=\"submit\">Rechercher</button>
  </form>

  ";
        // line 199
        yield "  <div class=\"ag-cols\">

    ";
        // line 202
        yield "    <div class=\"ag-col-main\">
      <div class=\"ag-panel\">
        <div class=\"ag-panel-hd\">
          <h5>Messages</h5>
          ";
        // line 206
        if ((($tmp = (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 206, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<small style=\"color:#888;\">Résultats pour « ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 206, $this->source); })()), "html", null, true);
            yield " »</small>";
        }
        // line 207
        yield "        </div>
        <div class=\"ag-panel-bd\">
          ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 209, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 210
            yield "            <div class=\"ag-msg\">
              <div style=\"flex:1; min-width:0;\">
                <div class=\"ag-msg-author\">
                  ";
            // line 213
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "idUser", [], "any", false, false, false, 213)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "idUser", [], "any", false, false, false, 213), "nom", [], "any", false, false, false, 213) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "idUser", [], "any", false, false, false, 213), "prenom", [], "any", false, false, false, 213)), "html", null, true)) : ("Utilisateur inconnu"));
            yield "
                </div>
                <div class=\"ag-msg-text\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "contenu", [], "any", false, false, false, 215), "html", null, true);
            yield "</div>
                <div class=\"ag-msg-time\">
                  ";
            // line 217
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 217), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "
                  ";
            // line 218
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateModif", [], "any", false, false, false, 218) && CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 218)) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateModif", [], "any", false, false, false, 218), "U") > $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 218), "U")))) {
                // line 219
                yield "                    <span style=\"color:#f96d00; margin-left:6px;\">(modifié ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateModif", [], "any", false, false, false, 219), "d/m/Y H:i"), "html", null, true);
                yield ")</span>
                  ";
            }
            // line 221
            yield "                </div>
              </div>
              <form method=\"post\" action=\"";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_message_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 223)]), "html", null, true);
            yield "\"
                    onsubmit=\"return confirm('Supprimer ce message ?');\" style=\"margin:0;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("admin_del_msg_" . CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 225))), "html", null, true);
            yield "\">
                <button class=\"ag-delete-btn\" type=\"submit\">🗑 Supprimer</button>
              </form>
            </div>
          ";
            $context['_iterated'] = true;
        }
        // line 229
        if (!$context['_iterated']) {
            // line 230
            yield "            <div class=\"ag-empty\">Aucun message dans ce groupe.</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        yield "        </div>
      </div>
    </div>

    ";
        // line 237
        yield "    <div class=\"ag-col-log\">
      <div class=\"ag-panel\">
        <div class=\"ag-panel-hd\">
          <h5>Activité récente</h5>
          <small style=\"color:#aaa;\">modifications · suppressions</small>
        </div>
        <div class=\"ag-panel-bd\" style=\"max-height:620px; overflow-y:auto;\">
          ";
        // line 244
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 244, $this->source); })()))) {
            // line 245
            yield "            <div class=\"ag-empty\">Aucune activité enregistrée.</div>
          ";
        } else {
            // line 247
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 247, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 248
                yield "              <div class=\"log-entry log-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 248), "html", null, true);
                yield "\">
                <div class=\"log-icon\">
                  ";
                // line 250
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 250) == "edited")) {
                    yield "✏️";
                } else {
                    yield "🗑";
                }
                // line 251
                yield "                </div>
                <div class=\"log-body\">
                  <div class=\"log-meta\">
                    <strong>";
                // line 254
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 254), "html", null, true);
                yield "</strong>
                    <span class=\"log-badge log-badge-";
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 255), "html", null, true);
                yield "\">
                      ";
                // line 256
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 256) == "edited")) ? ("Modifié") : ("Supprimé"));
                yield "
                    </span>
                  </div>
                  ";
                // line 259
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 259) == "edited")) {
                    // line 260
                    yield "                    <div class=\"log-content\">
                      <del>";
                    // line 261
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "originalContent", [], "any", false, false, false, 261)) > 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "originalContent", [], "any", false, false, false, 261), 0, 80) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "originalContent", [], "any", false, false, false, 261), "html", null, true)));
                    yield "</del>
                      <span class=\"log-arrow\">→</span>
                      <ins>";
                    // line 263
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["log"], "newContent", [], "any", false, false, false, 263)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "newContent", [], "any", false, false, false, 263)) > 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "newContent", [], "any", false, false, false, 263), 0, 80) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "newContent", [], "any", false, false, false, 263), "html", null, true)))) : ("—"));
                    yield "</ins>
                    </div>
                  ";
                } else {
                    // line 266
                    yield "                    <div class=\"log-content\">
                      <del>";
                    // line 267
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "originalContent", [], "any", false, false, false, 267)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "originalContent", [], "any", false, false, false, 267), 0, 100) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "originalContent", [], "any", false, false, false, 267), "html", null, true)));
                    yield "</del>
                    </div>
                  ";
                }
                // line 270
                yield "                  <div class=\"log-time\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "createdAt", [], "any", false, false, false, 270), "d/m/Y à H:i"), "html", null, true);
                yield "</div>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            yield "          ";
        }
        // line 275
        yield "        </div>
      </div>
    </div>

  </div>";
        // line 280
        yield "</div>
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
        return "groupe/admin_group_chat.html.twig";
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
        return array (  467 => 280,  461 => 275,  458 => 274,  447 => 270,  441 => 267,  438 => 266,  432 => 263,  427 => 261,  424 => 260,  422 => 259,  416 => 256,  412 => 255,  408 => 254,  403 => 251,  397 => 250,  391 => 248,  386 => 247,  382 => 245,  380 => 244,  371 => 237,  365 => 232,  358 => 230,  356 => 229,  347 => 225,  342 => 223,  338 => 221,  332 => 219,  330 => 218,  326 => 217,  321 => 215,  316 => 213,  311 => 210,  306 => 209,  302 => 207,  296 => 206,  290 => 202,  286 => 199,  279 => 194,  276 => 193,  267 => 186,  260 => 182,  256 => 181,  252 => 179,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block body %}
<style>
  /* ── page wrapper ── */
  .ag-page { padding: 24px; }

  /* ── header card ── */
  .ag-header {
    background: #fff;
    border-radius: 12px;
    padding: 20px 24px;
    margin-bottom: 24px;
    border: 1px solid #e9ecef;
    box-shadow: 0 2px 8px rgba(0,0,0,.05);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
  }
  .ag-header h3 { margin: 0; font-size: 1.3rem; font-weight: 700; color: #1a1a2e; }
  .ag-badge {
    background: #f96d00;
    color: #fff;
    border-radius: 999px;
    padding: 2px 12px;
    font-size: .75rem;
    font-weight: 600;
  }

  /* ── search ── */
  .ag-search {
    display: flex;
    gap: 8px;
    margin-bottom: 24px;
  }
  .ag-search input {
    flex: 1;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    padding: 8px 14px;
    font-size: .9rem;
    outline: none;
  }
  .ag-search input:focus { border-color: #f96d00; box-shadow: 0 0 0 3px rgba(249,109,0,.15); }
  .ag-search button {
    background: #f96d00;
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 8px 20px;
    font-size: .9rem;
    cursor: pointer;
    font-weight: 600;
  }
  .ag-search button:hover { background: #d45e00; }

  /* ── two-column layout ── */
  .ag-cols { display: flex; gap: 24px; align-items: flex-start; }
  .ag-col-main { flex: 1; min-width: 0; }
  .ag-col-log  { width: 360px; flex-shrink: 0; }

  @media (max-width: 900px) {
    .ag-cols { flex-direction: column; }
    .ag-col-log { width: 100%; }
  }

  /* ── panel ── */
  .ag-panel {
    background: #fff;
    border-radius: 12px;
    border: 1px solid #e9ecef;
    box-shadow: 0 2px 8px rgba(0,0,0,.05);
    overflow: hidden;
  }
  .ag-panel-hd {
    padding: 14px 18px;
    border-bottom: 1px solid #e9ecef;
    background: #fafafa;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .ag-panel-hd h5 { margin: 0; font-weight: 700; font-size: .95rem; color: #1a1a2e; }
  .ag-panel-bd { padding: 14px; }

  /* ── message rows ── */
  .ag-msg {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 12px;
    padding: 12px 14px;
    border-radius: 8px;
    border: 1px solid #f0f0f0;
    margin-bottom: 8px;
    background: #fefefe;
    transition: background .15s;
  }
  .ag-msg:hover { background: #fff8f4; border-color: #fdd5b8; }
  .ag-msg-author { font-weight: 700; color: #3d3d3d; font-size: .88rem; }
  .ag-msg-text   { color: #5f5f5f; font-size: .9rem; margin-top: 2px; overflow-wrap: anywhere; }
  .ag-msg-time   { font-size: .75rem; color: #999; white-space: nowrap; margin-top: 2px; }
  .ag-delete-btn {
    background: #fff0f0;
    border: 1px solid #ffc9c9;
    color: #c0392b;
    border-radius: 6px;
    padding: 4px 10px;
    font-size: .8rem;
    cursor: pointer;
    white-space: nowrap;
    flex-shrink: 0;
  }
  .ag-delete-btn:hover { background: #ffdada; }

  /* ── empty state ── */
  .ag-empty { text-align:center; color:#aaa; padding: 32px 0; font-size:.9rem; }

  /* ── activity log entries ── */
  .log-entry {
    display: flex;
    gap: 12px;
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid #efefef;
    margin-bottom: 8px;
    position: relative;
  }
  .log-entry.log-edited  { border-left: 3px solid #3b82f6; background: #f0f7ff; }
  .log-entry.log-deleted { border-left: 3px solid #ef4444; background: #fff5f5; }

  .log-icon {
    width: 30px; height: 30px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 14px;
    flex-shrink: 0;
  }
  .log-edited  .log-icon { background: #dbeafe; }
  .log-deleted .log-icon { background: #fee2e2; }

  .log-body { flex: 1; min-width: 0; }
  .log-meta { font-size: .78rem; color: #888; margin-bottom: 3px; }
  .log-meta strong { color: #3d3d3d; font-weight: 700; }
  .log-meta .log-badge {
    display: inline-block;
    border-radius: 999px;
    padding: 1px 8px;
    font-size: .7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .3px;
    margin-left: 4px;
  }
  .log-badge-edited  { background: #dbeafe; color: #1d4ed8; }
  .log-badge-deleted { background: #fee2e2; color: #b91c1c; }

  .log-content {
    font-size: .82rem;
    color: #666;
    background: rgba(0,0,0,.03);
    border-radius: 6px;
    padding: 5px 8px;
    margin-top: 4px;
    overflow-wrap: anywhere;
  }
  .log-content del { color: #ef4444; text-decoration: line-through; }
  .log-content ins { color: #16a34a; text-decoration: none; }
  .log-arrow { color: #999; margin: 0 4px; }

  .log-time { font-size: .72rem; color: #aaa; margin-top: 4px; }
</style>

<div class=\"ag-page\">

  {# ── Header ── #}
  <div class=\"ag-header\">
    <div>
      <h3>{{ groupe.nom }}</h3>
      <small style=\"color:#888;\">Administration du groupe · {{ messages|length }} message(s)</small>
    </div>
    <div style=\"display:flex; gap:8px; align-items:center;\">
      <span class=\"ag-badge\">Admin</span>
      <a href=\"{{ path('admin_group_index') }}\" style=\"font-size:.85rem; color:#f96d00; text-decoration:none;\">
        ← Tous les groupes
      </a>
    </div>
  </div>

  {# ── Search ── #}
  <form method=\"get\" class=\"ag-search\">
    <input name=\"q\" value=\"{{ q }}\" placeholder=\"Rechercher par contenu, nom ou prénom…\">
    <button type=\"submit\">Rechercher</button>
  </form>

  {# ── Two-column layout ── #}
  <div class=\"ag-cols\">

    {# ── Messages list ── #}
    <div class=\"ag-col-main\">
      <div class=\"ag-panel\">
        <div class=\"ag-panel-hd\">
          <h5>Messages</h5>
          {% if q %}<small style=\"color:#888;\">Résultats pour « {{ q }} »</small>{% endif %}
        </div>
        <div class=\"ag-panel-bd\">
          {% for message in messages %}
            <div class=\"ag-msg\">
              <div style=\"flex:1; min-width:0;\">
                <div class=\"ag-msg-author\">
                  {{ message.idUser ? (message.idUser.nom ~ ' ' ~ message.idUser.prenom) : 'Utilisateur inconnu' }}
                </div>
                <div class=\"ag-msg-text\">{{ message.contenu }}</div>
                <div class=\"ag-msg-time\">
                  {{ message.dateCreation ? message.dateCreation|date('d/m/Y H:i') : '—' }}
                  {% if message.dateModif and message.dateCreation and message.dateModif|date('U') > message.dateCreation|date('U') %}
                    <span style=\"color:#f96d00; margin-left:6px;\">(modifié {{ message.dateModif|date('d/m/Y H:i') }})</span>
                  {% endif %}
                </div>
              </div>
              <form method=\"post\" action=\"{{ path('admin_message_delete', {id: message.id}) }}\"
                    onsubmit=\"return confirm('Supprimer ce message ?');\" style=\"margin:0;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_del_msg_' ~ message.id) }}\">
                <button class=\"ag-delete-btn\" type=\"submit\">🗑 Supprimer</button>
              </form>
            </div>
          {% else %}
            <div class=\"ag-empty\">Aucun message dans ce groupe.</div>
          {% endfor %}
        </div>
      </div>
    </div>

    {# ── Activity log ── #}
    <div class=\"ag-col-log\">
      <div class=\"ag-panel\">
        <div class=\"ag-panel-hd\">
          <h5>Activité récente</h5>
          <small style=\"color:#aaa;\">modifications · suppressions</small>
        </div>
        <div class=\"ag-panel-bd\" style=\"max-height:620px; overflow-y:auto;\">
          {% if logs is empty %}
            <div class=\"ag-empty\">Aucune activité enregistrée.</div>
          {% else %}
            {% for log in logs %}
              <div class=\"log-entry log-{{ log.action }}\">
                <div class=\"log-icon\">
                  {% if log.action == 'edited' %}✏️{% else %}🗑{% endif %}
                </div>
                <div class=\"log-body\">
                  <div class=\"log-meta\">
                    <strong>{{ log.userName }}</strong>
                    <span class=\"log-badge log-badge-{{ log.action }}\">
                      {{ log.action == 'edited' ? 'Modifié' : 'Supprimé' }}
                    </span>
                  </div>
                  {% if log.action == 'edited' %}
                    <div class=\"log-content\">
                      <del>{{ log.originalContent|length > 80 ? log.originalContent|slice(0,80) ~ '…' : log.originalContent }}</del>
                      <span class=\"log-arrow\">→</span>
                      <ins>{{ log.newContent ? (log.newContent|length > 80 ? log.newContent|slice(0,80) ~ '…' : log.newContent) : '—' }}</ins>
                    </div>
                  {% else %}
                    <div class=\"log-content\">
                      <del>{{ log.originalContent|length > 100 ? log.originalContent|slice(0,100) ~ '…' : log.originalContent }}</del>
                    </div>
                  {% endif %}
                  <div class=\"log-time\">{{ log.createdAt|date('d/m/Y à H:i') }}</div>
                </div>
              </div>
            {% endfor %}
          {% endif %}
        </div>
      </div>
    </div>

  </div>{# end .ag-cols #}
</div>
{% endblock %}
", "groupe/admin_group_chat.html.twig", "C:\\Users\\MSI\\Desktop\\5idma\\Fluently\\templates\\groupe\\admin_group_chat.html.twig");
    }
}
