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

/* groupe/admin_groups.html.twig */
class __TwigTemplate_d9dc355c8ccd8f24cb26c29ea9be4212 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe/admin_groups.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe/admin_groups.html.twig"));

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
  .grp-page { padding: 28px; }

  /* Page header */
  .grp-page-hd {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 28px;
  }
  .grp-page-hd h3 {
    margin: 0;
    font-size: 1.35rem;
    font-weight: 700;
    color: #1a1a2e;
  }
  .grp-page-hd small { color: #888; font-size: .85rem; }
  .grp-count-badge {
    background: #f96d00;
    color: #fff;
    border-radius: 999px;
    padding: 3px 14px;
    font-size: .78rem;
    font-weight: 700;
  }

  /* Add button */
  .grp-add-btn {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: #f96d00;
    color: #fff;
    border: none;
    border-radius: 9px;
    padding: 9px 18px;
    font-size: .88rem;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    transition: background .15s;
  }
  .grp-add-btn:hover { background: #d45e00; color: #fff; }

  /* Flash messages */
  .grp-flash { margin-bottom: 20px; }
  .grp-flash-error {
    background: #fff5f5; border: 1px solid #ffc9c9;
    color: #c0392b; border-radius: 8px; padding: 10px 14px;
    font-size: .87rem; margin-bottom: 6px;
    display: flex; align-items: center; gap: 8px;
  }
  .grp-flash-success {
    background: #f0fdf4; border: 1px solid #bbf7d0;
    color: #15803d; border-radius: 8px; padding: 10px 14px;
    font-size: .87rem; margin-bottom: 6px;
    display: flex; align-items: center; gap: 8px;
  }

  /* Modal overlay */
  .grp-modal-overlay {
    display: none;
    position: fixed; inset: 0; z-index: 9999;
    background: rgba(0,0,0,.45);
    align-items: center;
    justify-content: center;
  }
  .grp-modal-overlay.open { display: flex; }

  .grp-modal {
    background: #fff;
    border-radius: 14px;
    width: 100%;
    max-width: 560px;
    max-height: 92vh;
    overflow-y: auto;
    box-shadow: 0 20px 60px rgba(0,0,0,.18);
    animation: grp-fadeUp .2s ease;
  }
  @keyframes grp-fadeUp {
    from { opacity:0; transform:translateY(24px); }
    to   { opacity:1; transform:translateY(0); }
  }

  .grp-modal-hd {
    display: flex; align-items: center; justify-content: space-between;
    padding: 18px 22px;
    border-bottom: 1px solid #e9ecef;
    position: sticky; top: 0; background: #fff; z-index: 1;
    border-radius: 14px 14px 0 0;
  }
  .grp-modal-hd h5 { margin: 0; font-weight: 700; font-size: 1rem; color: #1a1a2e; }
  .grp-modal-close {
    background: #f3f4f6; border: none; border-radius: 50%;
    width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;
    cursor: pointer; font-size: 16px; color: #555; flex-shrink: 0;
  }
  .grp-modal-close:hover { background: #e5e7eb; }

  .grp-form { padding: 22px; }

  .grp-form-row { display: flex; gap: 16px; }
  .grp-form-row .grp-field { flex: 1; }

  .grp-field { margin-bottom: 16px; }
  .grp-field label {
    display: block; font-size: .82rem; font-weight: 600;
    color: #444; margin-bottom: 5px;
  }
  .grp-field label span { color: #e53e3e; margin-left: 2px; }
  .grp-field input,
  .grp-field textarea,
  .grp-field select {
    width: 100%;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    padding: 9px 12px;
    font-size: .88rem;
    outline: none;
    color: #333;
    background: #fff;
    transition: border-color .15s, box-shadow .15s;
  }
  .grp-field input:focus,
  .grp-field textarea:focus,
  .grp-field select:focus {
    border-color: #f96d00;
    box-shadow: 0 0 0 3px rgba(249,109,0,.15);
  }
  .grp-field input.is-invalid,
  .grp-field textarea.is-invalid,
  .grp-field select.is-invalid { border-color: #e53e3e; }
  .grp-field .field-err {
    font-size: .75rem; color: #e53e3e; margin-top: 4px; display: none;
  }
  .grp-field .field-hint {
    font-size: .75rem; color: #888; margin-top: 3px;
  }
  .grp-field textarea { resize: vertical; min-height: 72px; }
  .grp-field select option:disabled { color: #999; }

  .grp-char-counter { font-size: .72rem; color: #aaa; float: right; }
  .grp-char-counter.over { color: #e53e3e; }

  .grp-modal-footer {
    padding: 14px 22px;
    border-top: 1px solid #e9ecef;
    display: flex; justify-content: flex-end; gap: 10px;
    position: sticky; bottom: 0; background: #fff;
    border-radius: 0 0 14px 14px;
  }
  .grp-btn-cancel {
    background: #f3f4f6; border: none; border-radius: 8px;
    padding: 9px 18px; font-size: .88rem; font-weight: 600; cursor: pointer; color: #555;
  }
  .grp-btn-cancel:hover { background: #e5e7eb; }
  .grp-btn-submit {
    background: #f96d00; border: none; border-radius: 8px;
    padding: 9px 20px; font-size: .88rem; font-weight: 600;
    cursor: pointer; color: #fff; display: flex; align-items: center; gap: 6px;
    transition: background .15s;
  }
  .grp-btn-submit:hover { background: #d45e00; }

  /* Grid */
  .grp-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
  }

  /* Card */
  .grp-card {
    background: #fff;
    border-radius: 12px;
    border: 1px solid #e9ecef;
    box-shadow: 0 2px 10px rgba(0,0,0,.05);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: box-shadow .18s, transform .18s;
  }
  .grp-card:hover {
    box-shadow: 0 8px 24px rgba(249,109,0,.14);
    transform: translateY(-3px);
  }

  /* Coloured top strip */
  .grp-card-strip {
    height: 5px;
    background: linear-gradient(90deg, #f96d00, #ffb347);
  }

  .grp-card-body { padding: 18px 18px 14px; flex: 1; }

  .grp-card-title {
    font-size: 1rem;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0 0 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .grp-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin-bottom: 12px;
  }
  .grp-pill {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: .75rem;
    font-weight: 600;
    border-radius: 999px;
    padding: 3px 10px;
    background: #f5f5f5;
    color: #555;
  }
  .grp-pill i { font-size: 11px; }

  .grp-desc {
    font-size: .82rem;
    color: #777;
    line-height: 1.5;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .grp-card-footer {
    padding: 12px 18px;
    border-top: 1px solid #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .grp-statut {
    font-size: .75rem;
    font-weight: 600;
    border-radius: 999px;
    padding: 3px 10px;
    background: #e8f5e9;
    color: #2e7d32;
  }
  .grp-manage-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #f96d00;
    color: #fff;
    border-radius: 8px;
    padding: 6px 14px;
    font-size: .8rem;
    font-weight: 600;
    text-decoration: none;
    transition: background .15s;
  }
  .grp-manage-btn:hover { background: #d45e00; color: #fff; text-decoration: none; }

  /* Empty state */
  .grp-empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 0;
    color: #aaa;
  }
  .grp-empty i { font-size: 40px; display: block; margin-bottom: 14px; }
</style>

<div class=\"grp-page\">

  ";
        // line 283
        yield "  ";
        $context["errFlashes"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 283, $this->source); })()), "flashes", ["error"], "method", false, false, false, 283);
        // line 284
        yield "  ";
        $context["okFlashes"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "flashes", ["success"], "method", false, false, false, 284);
        // line 285
        yield "  ";
        if (((isset($context["errFlashes"]) || array_key_exists("errFlashes", $context) ? $context["errFlashes"] : (function () { throw new RuntimeError('Variable "errFlashes" does not exist.', 285, $this->source); })()) || (isset($context["okFlashes"]) || array_key_exists("okFlashes", $context) ? $context["okFlashes"] : (function () { throw new RuntimeError('Variable "okFlashes" does not exist.', 285, $this->source); })()))) {
            // line 286
            yield "    <div class=\"grp-flash\">
      ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errFlashes"]) || array_key_exists("errFlashes", $context) ? $context["errFlashes"] : (function () { throw new RuntimeError('Variable "errFlashes" does not exist.', 287, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 288
                yield "        <div class=\"grp-flash-error\"><i class=\"feather-alert-circle\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
                yield "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 290
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["okFlashes"]) || array_key_exists("okFlashes", $context) ? $context["okFlashes"] : (function () { throw new RuntimeError('Variable "okFlashes" does not exist.', 290, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 291
                yield "        <div class=\"grp-flash-success\"><i class=\"feather-check-circle\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
                yield "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            yield "    </div>
  ";
        }
        // line 295
        yield "
  <div class=\"grp-page-hd\">
    <div>
      <h3>Gestion des Groupes</h3>
      <small>Administration · messages et activité</small>
    </div>
    <div style=\"display:flex; align-items:center; gap:12px;\">
      <span class=\"grp-count-badge\">";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 302, $this->source); })())), "html", null, true);
        yield " groupe(s)</span>
      <button class=\"grp-add-btn\" id=\"openModal\">
        <i class=\"feather-plus\"></i> Ajouter un groupe
      </button>
    </div>
  </div>

  <div class=\"grp-grid\">
    ";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 310, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 311
            yield "      <div class=\"grp-card\">
        <div class=\"grp-card-strip\"></div>
        <div class=\"grp-card-body\">
          <h4 class=\"grp-card-title\" title=\"";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "nom", [], "any", false, false, false, 314), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "nom", [], "any", false, false, false, 314), "html", null, true);
            yield "</h4>
          <div class=\"grp-meta\">
            ";
            // line 316
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["g"], "idNiveau", [], "any", false, false, false, 316)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 317
                yield "              <span class=\"grp-pill\">
                <i class=\"feather-bar-chart-2\"></i> ";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["g"], "idNiveau", [], "any", false, false, false, 318), "titre", [], "any", false, false, false, 318), "html", null, true);
                yield "
              </span>
            ";
            }
            // line 321
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["g"], "IDLangue", [], "any", false, false, false, 321)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 322
                yield "              <span class=\"grp-pill\">
                <i class=\"feather-globe\"></i> ";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["g"], "IDLangue", [], "any", false, false, false, 323), "nom", [], "any", false, false, false, 323), "html", null, true);
                yield "
              </span>
            ";
            }
            // line 326
            yield "            <span class=\"grp-pill\">
              <i class=\"feather-users\"></i> ";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["g"], "getIdUser", [], "method", false, false, false, 327)), "html", null, true);
            yield " membre(s)
            </span>
          </div>
          ";
            // line 330
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["g"], "description", [], "any", false, false, false, 330)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 331
                yield "            <p class=\"grp-desc\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "description", [], "any", false, false, false, 331), "html", null, true);
                yield "</p>
          ";
            }
            // line 333
            yield "        </div>
        <div class=\"grp-card-footer\">
          ";
            // line 335
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["g"], "statut", [], "any", false, false, false, 335)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 336
                yield "            <span class=\"grp-statut\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "statut", [], "any", false, false, false, 336), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 338
                yield "            <span></span>
          ";
            }
            // line 340
            yield "          <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_group_manage", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 340)]), "html", null, true);
            yield "\" class=\"grp-manage-btn\">
            <i class=\"feather-settings\"></i> Gérer
          </a>
        </div>
      </div>
    ";
            $context['_iterated'] = true;
        }
        // line 345
        if (!$context['_iterated']) {
            // line 346
            yield "      <div class=\"grp-empty\">
        <i class=\"feather-inbox\"></i>
        Aucun groupe disponible.
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        yield "  </div>

</div>";
        // line 354
        yield "
";
        // line 357
        yield "<script>
const ALL_NIVEAUX = [
  ";
        // line 359
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 359, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 360
            yield "  { id: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 360), "html", null, true);
            yield ", titre: ";
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "titre", [], "any", false, false, false, 360));
            yield ", langueId: ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["n"], "idLangue", [], "any", false, false, false, 360)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["n"], "idLangue", [], "any", false, false, false, 360), "id", [], "any", false, false, false, 360), "html", null, true)) : (0));
            yield " }";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 360)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",";
            }
            // line 361
            yield "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
        yield "];
</script>

<div class=\"grp-modal-overlay\" id=\"grpModalOverlay\">
  <div class=\"grp-modal\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"modalTitle\">
    <div class=\"grp-modal-hd\">
      <h5 id=\"modalTitle\"><i class=\"feather-plus-circle\" style=\"color:#f96d00;margin-right:6px;\"></i>Ajouter un groupe</h5>
      <button class=\"grp-modal-close\" id=\"closeModal\" type=\"button\" aria-label=\"Fermer\">✕</button>
    </div>

    <form class=\"grp-form\" id=\"grpForm\" method=\"post\" action=\"";
        // line 372
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_group_create");
        yield "\" novalidate>

      ";
        // line 375
        yield "      <div class=\"grp-field\">
        <label for=\"grpNom\">Nom du groupe <span>*</span></label>
        <input type=\"text\" id=\"grpNom\" name=\"nom\" maxlength=\"50\"
               placeholder=\"ex. Anglais Débutants A1\"
               autocomplete=\"off\">
        <div class=\"grp-char-counter\" id=\"nomCounter\">0 / 50</div>
        <div class=\"field-err\" id=\"nomErr\"></div>
        <div class=\"field-hint\">2–50 caractères • lettres, chiffres, espaces, tirets.</div>
      </div>

      ";
        // line 386
        yield "      <div class=\"grp-field\">
        <label for=\"grpDesc\">Description <span>*</span></label>
        <textarea id=\"grpDesc\" name=\"description\" maxlength=\"255\"
                  placeholder=\"Décrivez brièvement le groupe…\"></textarea>
        <div class=\"grp-char-counter\" id=\"descCounter\">0 / 255</div>
        <div class=\"field-err\" id=\"descErr\"></div>
      </div>

      ";
        // line 395
        yield "      <div class=\"grp-form-row\">
        <div class=\"grp-field\">
          <label for=\"grpCap\">Capacité <span>*</span></label>
          <input type=\"number\" id=\"grpCap\" name=\"capacite\" min=\"2\" max=\"200\" placeholder=\"ex. 20\">
          <div class=\"field-err\" id=\"capErr\"></div>
          <div class=\"field-hint\">Entre 2 et 200 membres.</div>
        </div>
        <div class=\"grp-field\">
          <label for=\"grpStatut\">Statut <span>*</span></label>
          <select id=\"grpStatut\" name=\"statut\">
            <option value=\"\" disabled selected>— Choisir —</option>
            <option value=\"actif\">Actif</option>
            <option value=\"inactif\">Inactif</option>
            <option value=\"archivé\">Archivé</option>
          </select>
          <div class=\"field-err\" id=\"statutErr\"></div>
        </div>
      </div>

      ";
        // line 415
        yield "      <div class=\"grp-field\">
        <label for=\"grpLangue\">Langue <span>*</span></label>
        <select id=\"grpLangue\" name=\"langue\">
          <option value=\"\" disabled selected>— Sélectionner une langue —</option>
          ";
        // line 419
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["langues"]) || array_key_exists("langues", $context) ? $context["langues"] : (function () { throw new RuntimeError('Variable "langues" does not exist.', 419, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 420
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 420), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "nom", [], "any", false, false, false, 420), "html", null, true);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['l'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 422
        yield "        </select>
        <div class=\"field-err\" id=\"langueErr\"></div>
      </div>

      ";
        // line 427
        yield "      <div class=\"grp-field\">
        <label for=\"grpNiveau\">Niveau <span>*</span></label>
        <select id=\"grpNiveau\" name=\"niveau\" disabled>
          <option value=\"\">— Sélectionnez d'abord une langue —</option>
        </select>
        <div class=\"field-err\" id=\"niveauErr\"></div>
        <div class=\"field-hint\">Les niveaux dépendent de la langue choisie.</div>
      </div>

    </form>

    <div class=\"grp-modal-footer\">
      <button class=\"grp-btn-cancel\" id=\"closeModal2\" type=\"button\">Annuler</button>
      <button class=\"grp-btn-submit\" id=\"grpSubmitBtn\" type=\"button\">
        <i class=\"feather-check\"></i> Créer le groupe
      </button>
    </div>
  </div>
</div>

<script>
(function () {
  const overlay   = document.getElementById('grpModalOverlay');
  const form      = document.getElementById('grpForm');
  const openBtn   = document.getElementById('openModal');
  const closeBtn  = document.getElementById('closeModal');
  const closeBtn2 = document.getElementById('closeModal2');
  const submitBtn = document.getElementById('grpSubmitBtn');

  // -- open / close --
  openBtn.addEventListener('click', () => overlay.classList.add('open'));
  [closeBtn, closeBtn2].forEach(b => b.addEventListener('click', closeModal));
  overlay.addEventListener('click', e => { if (e.target === overlay) closeModal(); });
  document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
  function closeModal() { overlay.classList.remove('open'); }

  // -- char counters --
  function bindCounter(inputId, counterId, max) {
    const el = document.getElementById(inputId);
    const counter = document.getElementById(counterId);
    el.addEventListener('input', () => {
      const len = el.value.length;
      counter.textContent = len + ' / ' + max;
      counter.classList.toggle('over', len > max);
    });
  }
  bindCounter('grpNom',  'nomCounter',  50);
  bindCounter('grpDesc', 'descCounter', 255);

  // -- niveau filtering by langue --
  const langueSelect = document.getElementById('grpLangue');
  const niveauSelect = document.getElementById('grpNiveau');

  langueSelect.addEventListener('change', function () {
    const lid = parseInt(this.value, 10);
    const matching = ALL_NIVEAUX.filter(n => n.langueId === lid);

    niveauSelect.innerHTML = '';

    if (matching.length === 0) {
      const opt = document.createElement('option');
      opt.value = '';
      opt.textContent = '— Aucun niveau pour cette langue —';
      niveauSelect.appendChild(opt);
      niveauSelect.disabled = true;
    } else {
      const placeholder = document.createElement('option');
      placeholder.value = '';
      placeholder.disabled = true;
      placeholder.selected = true;
      placeholder.textContent = '— Choisir un niveau —';
      niveauSelect.appendChild(placeholder);

      matching.forEach(n => {
        const opt = document.createElement('option');
        opt.value = n.id;
        opt.textContent = n.titre;
        niveauSelect.appendChild(opt);
      });
      niveauSelect.disabled = false;
    }

    clearErr('niveauErr', niveauSelect);
    clearErr('langueErr', langueSelect);
  });

  // -- validation helpers --
  function showErr(errId, inputEl, msg) {
    const err = document.getElementById(errId);
    err.textContent = msg;
    err.style.display = 'block';
    inputEl.classList.add('is-invalid');
    return false;
  }
  function clearErr(errId, inputEl) {
    const err = document.getElementById(errId);
    err.style.display = 'none';
    err.textContent = '';
    if (inputEl) inputEl.classList.remove('is-invalid');
  }

  function validate() {
    let ok = true;
    const nom      = document.getElementById('grpNom');
    const desc     = document.getElementById('grpDesc');
    const cap      = document.getElementById('grpCap');
    const statut   = document.getElementById('grpStatut');
    const langue   = document.getElementById('grpLangue');
    const niveau   = document.getElementById('grpNiveau');

    clearErr('nomErr',    nom);
    clearErr('descErr',   desc);
    clearErr('capErr',    cap);
    clearErr('statutErr', statut);
    clearErr('langueErr', langue);
    clearErr('niveauErr', niveau);

    const nomVal = nom.value.trim();
    if (!nomVal) {
      ok = showErr('nomErr', nom, 'Le nom est obligatoire.') && ok;
    } else if (!/^[\\p{L}0-9 '\\-]{2,50}\$/u.test(nomVal)) {
      ok = showErr('nomErr', nom, 'Le nom doit contenir 2–50 caractères valides.') && ok;
    }

    if (!desc.value.trim()) {
      ok = showErr('descErr', desc, 'La description est obligatoire.') && ok;
    } else if (desc.value.trim().length > 255) {
      ok = showErr('descErr', desc, 'Maximum 255 caractères.') && ok;
    }

    const capVal = parseInt(cap.value, 10);
    if (isNaN(capVal) || capVal < 2 || capVal > 200) {
      ok = showErr('capErr', cap, 'Capacité entre 2 et 200.') && ok;
    }

    if (!statut.value) {
      ok = showErr('statutErr', statut, 'Choisissez un statut.') && ok;
    }

    if (!langue.value) {
      ok = showErr('langueErr', langue, 'Choisissez une langue.') && ok;
    }

    if (!niveau.value) {
      ok = showErr('niveauErr', niveau, 'Choisissez un niveau.') && ok;
    }

    return ok;
  }

  submitBtn.addEventListener('click', () => {
    if (validate()) form.submit();
  });
})();
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
        return "groupe/admin_groups.html.twig";
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
        return array (  655 => 427,  649 => 422,  638 => 420,  634 => 419,  628 => 415,  607 => 395,  597 => 386,  585 => 375,  580 => 372,  568 => 362,  554 => 361,  543 => 360,  526 => 359,  522 => 357,  519 => 354,  515 => 351,  505 => 346,  503 => 345,  492 => 340,  488 => 338,  482 => 336,  480 => 335,  476 => 333,  470 => 331,  468 => 330,  462 => 327,  459 => 326,  453 => 323,  450 => 322,  447 => 321,  441 => 318,  438 => 317,  436 => 316,  429 => 314,  424 => 311,  419 => 310,  408 => 302,  399 => 295,  395 => 293,  386 => 291,  381 => 290,  372 => 288,  368 => 287,  365 => 286,  362 => 285,  359 => 284,  356 => 283,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block body %}
<style>
  .grp-page { padding: 28px; }

  /* Page header */
  .grp-page-hd {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 28px;
  }
  .grp-page-hd h3 {
    margin: 0;
    font-size: 1.35rem;
    font-weight: 700;
    color: #1a1a2e;
  }
  .grp-page-hd small { color: #888; font-size: .85rem; }
  .grp-count-badge {
    background: #f96d00;
    color: #fff;
    border-radius: 999px;
    padding: 3px 14px;
    font-size: .78rem;
    font-weight: 700;
  }

  /* Add button */
  .grp-add-btn {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: #f96d00;
    color: #fff;
    border: none;
    border-radius: 9px;
    padding: 9px 18px;
    font-size: .88rem;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    transition: background .15s;
  }
  .grp-add-btn:hover { background: #d45e00; color: #fff; }

  /* Flash messages */
  .grp-flash { margin-bottom: 20px; }
  .grp-flash-error {
    background: #fff5f5; border: 1px solid #ffc9c9;
    color: #c0392b; border-radius: 8px; padding: 10px 14px;
    font-size: .87rem; margin-bottom: 6px;
    display: flex; align-items: center; gap: 8px;
  }
  .grp-flash-success {
    background: #f0fdf4; border: 1px solid #bbf7d0;
    color: #15803d; border-radius: 8px; padding: 10px 14px;
    font-size: .87rem; margin-bottom: 6px;
    display: flex; align-items: center; gap: 8px;
  }

  /* Modal overlay */
  .grp-modal-overlay {
    display: none;
    position: fixed; inset: 0; z-index: 9999;
    background: rgba(0,0,0,.45);
    align-items: center;
    justify-content: center;
  }
  .grp-modal-overlay.open { display: flex; }

  .grp-modal {
    background: #fff;
    border-radius: 14px;
    width: 100%;
    max-width: 560px;
    max-height: 92vh;
    overflow-y: auto;
    box-shadow: 0 20px 60px rgba(0,0,0,.18);
    animation: grp-fadeUp .2s ease;
  }
  @keyframes grp-fadeUp {
    from { opacity:0; transform:translateY(24px); }
    to   { opacity:1; transform:translateY(0); }
  }

  .grp-modal-hd {
    display: flex; align-items: center; justify-content: space-between;
    padding: 18px 22px;
    border-bottom: 1px solid #e9ecef;
    position: sticky; top: 0; background: #fff; z-index: 1;
    border-radius: 14px 14px 0 0;
  }
  .grp-modal-hd h5 { margin: 0; font-weight: 700; font-size: 1rem; color: #1a1a2e; }
  .grp-modal-close {
    background: #f3f4f6; border: none; border-radius: 50%;
    width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;
    cursor: pointer; font-size: 16px; color: #555; flex-shrink: 0;
  }
  .grp-modal-close:hover { background: #e5e7eb; }

  .grp-form { padding: 22px; }

  .grp-form-row { display: flex; gap: 16px; }
  .grp-form-row .grp-field { flex: 1; }

  .grp-field { margin-bottom: 16px; }
  .grp-field label {
    display: block; font-size: .82rem; font-weight: 600;
    color: #444; margin-bottom: 5px;
  }
  .grp-field label span { color: #e53e3e; margin-left: 2px; }
  .grp-field input,
  .grp-field textarea,
  .grp-field select {
    width: 100%;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    padding: 9px 12px;
    font-size: .88rem;
    outline: none;
    color: #333;
    background: #fff;
    transition: border-color .15s, box-shadow .15s;
  }
  .grp-field input:focus,
  .grp-field textarea:focus,
  .grp-field select:focus {
    border-color: #f96d00;
    box-shadow: 0 0 0 3px rgba(249,109,0,.15);
  }
  .grp-field input.is-invalid,
  .grp-field textarea.is-invalid,
  .grp-field select.is-invalid { border-color: #e53e3e; }
  .grp-field .field-err {
    font-size: .75rem; color: #e53e3e; margin-top: 4px; display: none;
  }
  .grp-field .field-hint {
    font-size: .75rem; color: #888; margin-top: 3px;
  }
  .grp-field textarea { resize: vertical; min-height: 72px; }
  .grp-field select option:disabled { color: #999; }

  .grp-char-counter { font-size: .72rem; color: #aaa; float: right; }
  .grp-char-counter.over { color: #e53e3e; }

  .grp-modal-footer {
    padding: 14px 22px;
    border-top: 1px solid #e9ecef;
    display: flex; justify-content: flex-end; gap: 10px;
    position: sticky; bottom: 0; background: #fff;
    border-radius: 0 0 14px 14px;
  }
  .grp-btn-cancel {
    background: #f3f4f6; border: none; border-radius: 8px;
    padding: 9px 18px; font-size: .88rem; font-weight: 600; cursor: pointer; color: #555;
  }
  .grp-btn-cancel:hover { background: #e5e7eb; }
  .grp-btn-submit {
    background: #f96d00; border: none; border-radius: 8px;
    padding: 9px 20px; font-size: .88rem; font-weight: 600;
    cursor: pointer; color: #fff; display: flex; align-items: center; gap: 6px;
    transition: background .15s;
  }
  .grp-btn-submit:hover { background: #d45e00; }

  /* Grid */
  .grp-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
  }

  /* Card */
  .grp-card {
    background: #fff;
    border-radius: 12px;
    border: 1px solid #e9ecef;
    box-shadow: 0 2px 10px rgba(0,0,0,.05);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: box-shadow .18s, transform .18s;
  }
  .grp-card:hover {
    box-shadow: 0 8px 24px rgba(249,109,0,.14);
    transform: translateY(-3px);
  }

  /* Coloured top strip */
  .grp-card-strip {
    height: 5px;
    background: linear-gradient(90deg, #f96d00, #ffb347);
  }

  .grp-card-body { padding: 18px 18px 14px; flex: 1; }

  .grp-card-title {
    font-size: 1rem;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0 0 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .grp-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin-bottom: 12px;
  }
  .grp-pill {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: .75rem;
    font-weight: 600;
    border-radius: 999px;
    padding: 3px 10px;
    background: #f5f5f5;
    color: #555;
  }
  .grp-pill i { font-size: 11px; }

  .grp-desc {
    font-size: .82rem;
    color: #777;
    line-height: 1.5;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .grp-card-footer {
    padding: 12px 18px;
    border-top: 1px solid #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .grp-statut {
    font-size: .75rem;
    font-weight: 600;
    border-radius: 999px;
    padding: 3px 10px;
    background: #e8f5e9;
    color: #2e7d32;
  }
  .grp-manage-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #f96d00;
    color: #fff;
    border-radius: 8px;
    padding: 6px 14px;
    font-size: .8rem;
    font-weight: 600;
    text-decoration: none;
    transition: background .15s;
  }
  .grp-manage-btn:hover { background: #d45e00; color: #fff; text-decoration: none; }

  /* Empty state */
  .grp-empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 0;
    color: #aaa;
  }
  .grp-empty i { font-size: 40px; display: block; margin-bottom: 14px; }
</style>

<div class=\"grp-page\">

  {# ── Flash messages ── #}
  {% set errFlashes = app.flashes('error') %}
  {% set okFlashes  = app.flashes('success') %}
  {% if errFlashes or okFlashes %}
    <div class=\"grp-flash\">
      {% for msg in errFlashes %}
        <div class=\"grp-flash-error\"><i class=\"feather-alert-circle\"></i> {{ msg }}</div>
      {% endfor %}
      {% for msg in okFlashes %}
        <div class=\"grp-flash-success\"><i class=\"feather-check-circle\"></i> {{ msg }}</div>
      {% endfor %}
    </div>
  {% endif %}

  <div class=\"grp-page-hd\">
    <div>
      <h3>Gestion des Groupes</h3>
      <small>Administration · messages et activité</small>
    </div>
    <div style=\"display:flex; align-items:center; gap:12px;\">
      <span class=\"grp-count-badge\">{{ groupes|length }} groupe(s)</span>
      <button class=\"grp-add-btn\" id=\"openModal\">
        <i class=\"feather-plus\"></i> Ajouter un groupe
      </button>
    </div>
  </div>

  <div class=\"grp-grid\">
    {% for g in groupes %}
      <div class=\"grp-card\">
        <div class=\"grp-card-strip\"></div>
        <div class=\"grp-card-body\">
          <h4 class=\"grp-card-title\" title=\"{{ g.nom }}\">{{ g.nom }}</h4>
          <div class=\"grp-meta\">
            {% if g.idNiveau %}
              <span class=\"grp-pill\">
                <i class=\"feather-bar-chart-2\"></i> {{ g.idNiveau.titre }}
              </span>
            {% endif %}
            {% if g.IDLangue %}
              <span class=\"grp-pill\">
                <i class=\"feather-globe\"></i> {{ g.IDLangue.nom }}
              </span>
            {% endif %}
            <span class=\"grp-pill\">
              <i class=\"feather-users\"></i> {{ g.getIdUser()|length }} membre(s)
            </span>
          </div>
          {% if g.description %}
            <p class=\"grp-desc\">{{ g.description }}</p>
          {% endif %}
        </div>
        <div class=\"grp-card-footer\">
          {% if g.statut %}
            <span class=\"grp-statut\">{{ g.statut }}</span>
          {% else %}
            <span></span>
          {% endif %}
          <a href=\"{{ path('admin_group_manage', {id: g.id}) }}\" class=\"grp-manage-btn\">
            <i class=\"feather-settings\"></i> Gérer
          </a>
        </div>
      </div>
    {% else %}
      <div class=\"grp-empty\">
        <i class=\"feather-inbox\"></i>
        Aucun groupe disponible.
      </div>
    {% endfor %}
  </div>

</div>{# end .grp-page #}

{# ══════════════════ ADD GROUP MODAL ══════════════════ #}
{# Niveaux data for JS filtering by langue #}
<script>
const ALL_NIVEAUX = [
  {% for n in niveaux %}
  { id: {{ n.id }}, titre: {{ n.titre|json_encode|raw }}, langueId: {{ n.idLangue ? n.idLangue.id : 0 }} }{% if not loop.last %},{% endif %}
  {% endfor %}
];
</script>

<div class=\"grp-modal-overlay\" id=\"grpModalOverlay\">
  <div class=\"grp-modal\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"modalTitle\">
    <div class=\"grp-modal-hd\">
      <h5 id=\"modalTitle\"><i class=\"feather-plus-circle\" style=\"color:#f96d00;margin-right:6px;\"></i>Ajouter un groupe</h5>
      <button class=\"grp-modal-close\" id=\"closeModal\" type=\"button\" aria-label=\"Fermer\">✕</button>
    </div>

    <form class=\"grp-form\" id=\"grpForm\" method=\"post\" action=\"{{ path('admin_group_create') }}\" novalidate>

      {# Nom #}
      <div class=\"grp-field\">
        <label for=\"grpNom\">Nom du groupe <span>*</span></label>
        <input type=\"text\" id=\"grpNom\" name=\"nom\" maxlength=\"50\"
               placeholder=\"ex. Anglais Débutants A1\"
               autocomplete=\"off\">
        <div class=\"grp-char-counter\" id=\"nomCounter\">0 / 50</div>
        <div class=\"field-err\" id=\"nomErr\"></div>
        <div class=\"field-hint\">2–50 caractères • lettres, chiffres, espaces, tirets.</div>
      </div>

      {# Description #}
      <div class=\"grp-field\">
        <label for=\"grpDesc\">Description <span>*</span></label>
        <textarea id=\"grpDesc\" name=\"description\" maxlength=\"255\"
                  placeholder=\"Décrivez brièvement le groupe…\"></textarea>
        <div class=\"grp-char-counter\" id=\"descCounter\">0 / 255</div>
        <div class=\"field-err\" id=\"descErr\"></div>
      </div>

      {# Capacité + Statut — same row #}
      <div class=\"grp-form-row\">
        <div class=\"grp-field\">
          <label for=\"grpCap\">Capacité <span>*</span></label>
          <input type=\"number\" id=\"grpCap\" name=\"capacite\" min=\"2\" max=\"200\" placeholder=\"ex. 20\">
          <div class=\"field-err\" id=\"capErr\"></div>
          <div class=\"field-hint\">Entre 2 et 200 membres.</div>
        </div>
        <div class=\"grp-field\">
          <label for=\"grpStatut\">Statut <span>*</span></label>
          <select id=\"grpStatut\" name=\"statut\">
            <option value=\"\" disabled selected>— Choisir —</option>
            <option value=\"actif\">Actif</option>
            <option value=\"inactif\">Inactif</option>
            <option value=\"archivé\">Archivé</option>
          </select>
          <div class=\"field-err\" id=\"statutErr\"></div>
        </div>
      </div>

      {# Langue #}
      <div class=\"grp-field\">
        <label for=\"grpLangue\">Langue <span>*</span></label>
        <select id=\"grpLangue\" name=\"langue\">
          <option value=\"\" disabled selected>— Sélectionner une langue —</option>
          {% for l in langues %}
            <option value=\"{{ l.id }}\">{{ l.nom }}</option>
          {% endfor %}
        </select>
        <div class=\"field-err\" id=\"langueErr\"></div>
      </div>

      {# Niveau (filtered by langue) #}
      <div class=\"grp-field\">
        <label for=\"grpNiveau\">Niveau <span>*</span></label>
        <select id=\"grpNiveau\" name=\"niveau\" disabled>
          <option value=\"\">— Sélectionnez d'abord une langue —</option>
        </select>
        <div class=\"field-err\" id=\"niveauErr\"></div>
        <div class=\"field-hint\">Les niveaux dépendent de la langue choisie.</div>
      </div>

    </form>

    <div class=\"grp-modal-footer\">
      <button class=\"grp-btn-cancel\" id=\"closeModal2\" type=\"button\">Annuler</button>
      <button class=\"grp-btn-submit\" id=\"grpSubmitBtn\" type=\"button\">
        <i class=\"feather-check\"></i> Créer le groupe
      </button>
    </div>
  </div>
</div>

<script>
(function () {
  const overlay   = document.getElementById('grpModalOverlay');
  const form      = document.getElementById('grpForm');
  const openBtn   = document.getElementById('openModal');
  const closeBtn  = document.getElementById('closeModal');
  const closeBtn2 = document.getElementById('closeModal2');
  const submitBtn = document.getElementById('grpSubmitBtn');

  // -- open / close --
  openBtn.addEventListener('click', () => overlay.classList.add('open'));
  [closeBtn, closeBtn2].forEach(b => b.addEventListener('click', closeModal));
  overlay.addEventListener('click', e => { if (e.target === overlay) closeModal(); });
  document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
  function closeModal() { overlay.classList.remove('open'); }

  // -- char counters --
  function bindCounter(inputId, counterId, max) {
    const el = document.getElementById(inputId);
    const counter = document.getElementById(counterId);
    el.addEventListener('input', () => {
      const len = el.value.length;
      counter.textContent = len + ' / ' + max;
      counter.classList.toggle('over', len > max);
    });
  }
  bindCounter('grpNom',  'nomCounter',  50);
  bindCounter('grpDesc', 'descCounter', 255);

  // -- niveau filtering by langue --
  const langueSelect = document.getElementById('grpLangue');
  const niveauSelect = document.getElementById('grpNiveau');

  langueSelect.addEventListener('change', function () {
    const lid = parseInt(this.value, 10);
    const matching = ALL_NIVEAUX.filter(n => n.langueId === lid);

    niveauSelect.innerHTML = '';

    if (matching.length === 0) {
      const opt = document.createElement('option');
      opt.value = '';
      opt.textContent = '— Aucun niveau pour cette langue —';
      niveauSelect.appendChild(opt);
      niveauSelect.disabled = true;
    } else {
      const placeholder = document.createElement('option');
      placeholder.value = '';
      placeholder.disabled = true;
      placeholder.selected = true;
      placeholder.textContent = '— Choisir un niveau —';
      niveauSelect.appendChild(placeholder);

      matching.forEach(n => {
        const opt = document.createElement('option');
        opt.value = n.id;
        opt.textContent = n.titre;
        niveauSelect.appendChild(opt);
      });
      niveauSelect.disabled = false;
    }

    clearErr('niveauErr', niveauSelect);
    clearErr('langueErr', langueSelect);
  });

  // -- validation helpers --
  function showErr(errId, inputEl, msg) {
    const err = document.getElementById(errId);
    err.textContent = msg;
    err.style.display = 'block';
    inputEl.classList.add('is-invalid');
    return false;
  }
  function clearErr(errId, inputEl) {
    const err = document.getElementById(errId);
    err.style.display = 'none';
    err.textContent = '';
    if (inputEl) inputEl.classList.remove('is-invalid');
  }

  function validate() {
    let ok = true;
    const nom      = document.getElementById('grpNom');
    const desc     = document.getElementById('grpDesc');
    const cap      = document.getElementById('grpCap');
    const statut   = document.getElementById('grpStatut');
    const langue   = document.getElementById('grpLangue');
    const niveau   = document.getElementById('grpNiveau');

    clearErr('nomErr',    nom);
    clearErr('descErr',   desc);
    clearErr('capErr',    cap);
    clearErr('statutErr', statut);
    clearErr('langueErr', langue);
    clearErr('niveauErr', niveau);

    const nomVal = nom.value.trim();
    if (!nomVal) {
      ok = showErr('nomErr', nom, 'Le nom est obligatoire.') && ok;
    } else if (!/^[\\p{L}0-9 '\\-]{2,50}\$/u.test(nomVal)) {
      ok = showErr('nomErr', nom, 'Le nom doit contenir 2–50 caractères valides.') && ok;
    }

    if (!desc.value.trim()) {
      ok = showErr('descErr', desc, 'La description est obligatoire.') && ok;
    } else if (desc.value.trim().length > 255) {
      ok = showErr('descErr', desc, 'Maximum 255 caractères.') && ok;
    }

    const capVal = parseInt(cap.value, 10);
    if (isNaN(capVal) || capVal < 2 || capVal > 200) {
      ok = showErr('capErr', cap, 'Capacité entre 2 et 200.') && ok;
    }

    if (!statut.value) {
      ok = showErr('statutErr', statut, 'Choisissez un statut.') && ok;
    }

    if (!langue.value) {
      ok = showErr('langueErr', langue, 'Choisissez une langue.') && ok;
    }

    if (!niveau.value) {
      ok = showErr('niveauErr', niveau, 'Choisissez un niveau.') && ok;
    }

    return ok;
  }

  submitBtn.addEventListener('click', () => {
    if (validate()) form.submit();
  });
})();
</script>
{% endblock %}
", "groupe/admin_groups.html.twig", "C:\\Users\\sarra\\Desktop\\PIW\\Fluently\\templates\\groupe\\admin_groups.html.twig");
    }
}
