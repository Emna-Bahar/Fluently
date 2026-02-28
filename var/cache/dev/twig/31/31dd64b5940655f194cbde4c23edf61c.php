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

/* groupe/details.html.twig */
class __TwigTemplate_ba4978ae05143bf64d8d2671194e95b5 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe/details.html.twig"));

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

        yield "Groupe - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 6
        yield "  ";
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
  <style>
    .group-page-bg{
      position:relative;
      padding-top:185px;
      background:
        linear-gradient(rgba(0,0,0,.44), rgba(0,0,0,.52)),
        url('";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_2.jpg"), "html", null, true);
        yield "') center/cover no-repeat;
    }

    @media (max-width: 991.98px){
      .group-page-bg{ padding-top:30px; }
    }

    .group-page-bg::before{
      content:'';
      position:absolute;
      inset:0;
      background:linear-gradient(135deg, rgba(249,109,0,.16), rgba(0,0,0,.12));
      pointer-events:none;
    }

    .group-page-bg .container{
      position:relative;
      z-index:1;
    }

    .group-header{
      background:#fff;
      border-radius:10px;
      border:1px solid rgba(0,0,0,.06);
      box-shadow:0 10px 30px rgba(0,0,0,.08);
      padding:20px 22px;
      margin-bottom:18px;
    }

    .meta-badges .badge{
      font-weight:600;
      letter-spacing:.2px;
      padding:.5rem .7rem;
      border-radius:999px;
    }

    .panel{
      background:#fff;
      border-radius:10px;
      border:1px solid rgba(0,0,0,.06);
      box-shadow:0 10px 30px rgba(0,0,0,.08);
      overflow:hidden;
    }

    .panel-hd{
      padding:14px 18px;
      border-bottom:1px solid rgba(0,0,0,.08);
      background:rgba(249,109,0,.04);
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:10px;
    }

    .panel-bd{ padding:16px 18px; }

    .members-list{ list-style:none; padding-left:0; margin:0; }
    .members-list li{
      display:flex;
      align-items:center;
      gap:10px;
      padding:8px 0;
      border-bottom:1px dashed rgba(0,0,0,.10);
    }
    .members-list li:last-child{ border-bottom:0; }
    .avatar{
      width:34px; height:34px;
      border-radius:50%;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      background:rgba(0,0,0,.06);
      font-weight:700;
      text-transform:uppercase;
      flex:0 0 auto;
    }

    .chat-wrap{
      border:1px solid rgba(0,0,0,.10);
      border-radius:10px;
      height:360px;
      overflow:auto;
      background:rgba(255,255,255,.85);
      padding:10px;
    }

    .chat-msg{
      display:flex;
      justify-content:space-between;
      gap:12px;
      padding:10px 12px;
      border-radius:10px;
      background:#fff;
      border:1px solid rgba(0,0,0,.06);
      margin-bottom:10px;
      color:#4f4f4f;
    }

    .chat-left{ flex:1; min-width:0; }
    .chat-line{ display:flex; gap:6px; align-items:baseline; flex-wrap:wrap; }
    .chat-author{ font-weight:700; color:#3d3d3d; }
    .chat-text{ overflow-wrap:anywhere; color:#5f5f5f; }
    .chat-sep{ color:#808080; opacity:.95; }

    .chat-right{
      display:flex;
      align-items:flex-start;
      gap:10px;
      white-space:nowrap;
    }

    .chat-time{ font-size:12px; color:#777; opacity:1; padding-top:2px; }

    .chat-actions{
      display:flex;
      gap:6px;
      opacity:0;
      pointer-events:none;
      transition:opacity .12s ease;
    }

    .chat-msg:hover .chat-actions{ opacity:1; pointer-events:auto; }

    .chat-btn{
      border:0;
      background:transparent;
      cursor:pointer;
      padding:2px 6px;
      line-height:1;
    }

    .chat-btn:hover{
      background:rgba(0,0,0,0.08);
      border-radius:6px;
    }

    .chat-edit textarea{ resize:vertical; }

    .pagination{ margin-top:14px; justify-content:center; }
    .pagination li{ margin:0 4px; }
    .pagination a, .pagination span{ padding:6px 10px; border-radius:8px; }

    .composer-actions{ display:flex; gap:10px; flex-wrap:wrap; }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 159
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

        // line 160
        yield "<section class=\"ftco-section group-page-bg\">
  <div class=\"container\">

    <div class=\"group-header\">
      <div class=\"d-flex align-items-start justify-content-between flex-wrap\" style=\"gap:12px;\">
        <div>
          <h2 class=\"mb-2\">";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 166, $this->source); })()), "nom", [], "any", false, false, false, 166), "html", null, true);
        yield "</h2>
          <div class=\"meta-badges d-flex flex-wrap\" style=\"gap:8px;\">
            <span class=\"badge badge-pill badge-light\">
              Niveau: ";
        // line 169
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 169, $this->source); })()), "idNiveau", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 169, $this->source); })()), "idNiveau", [], "any", false, false, false, 169), "titre", [], "any", false, false, false, 169), "html", null, true)) : ("—"));
        yield "
            </span>
            <span class=\"badge badge-pill badge-light\">
              Langue: ";
        // line 172
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 172, $this->source); })()), "IDLangue", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 172, $this->source); })()), "IDLangue", [], "any", false, false, false, 172), "nom", [], "any", false, false, false, 172), "html", null, true)) : ("—"));
        yield "
            </span>
            <span class=\"badge badge-pill ";
        // line 174
        yield (((($tmp = (isset($context["isFull"]) || array_key_exists("isFull", $context) ? $context["isFull"] : (function () { throw new RuntimeError('Variable "isFull" does not exist.', 174, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("badge-danger") : ("badge-success"));
        yield "\">
              <i class=\"fa fa-users mr-1\"></i>";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["memberCount"]) || array_key_exists("memberCount", $context) ? $context["memberCount"] : (function () { throw new RuntimeError('Variable "memberCount" does not exist.', 175, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 175, $this->source); })()), "capacite", [], "any", false, false, false, 175), "html", null, true);
        yield " membres";
        if ((($tmp = (isset($context["isFull"]) || array_key_exists("isFull", $context) ? $context["isFull"] : (function () { throw new RuntimeError('Variable "isFull" does not exist.', 175, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " &mdash; Complet";
        }
        // line 176
        yield "            </span>
            ";
        // line 177
        if ((($tmp = (isset($context["isMember"]) || array_key_exists("isMember", $context) ? $context["isMember"] : (function () { throw new RuntimeError('Variable "isMember" does not exist.', 177, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 178
            yield "              <span class=\"badge badge-pill badge-primary\"><i class=\"fa fa-check mr-1\"></i>Vous êtes membre</span>
            ";
        }
        // line 180
        yield "          </div>

          ";
        // line 182
        $context["capPct"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 182, $this->source); })()), "capacite", [], "any", false, false, false, 182) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["memberCount"]) || array_key_exists("memberCount", $context) ? $context["memberCount"] : (function () { throw new RuntimeError('Variable "memberCount" does not exist.', 182, $this->source); })()) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 182, $this->source); })()), "capacite", [], "any", false, false, false, 182)) * 100))) : (0));
        // line 183
        yield "          <div class=\"mt-2\" style=\"max-width:260px;\">
            <div class=\"progress\" style=\"height:6px; border-radius:999px; background:rgba(0,0,0,.08);\">
              <div class=\"progress-bar ";
        // line 185
        yield (((($tmp = (isset($context["isFull"]) || array_key_exists("isFull", $context) ? $context["isFull"] : (function () { throw new RuntimeError('Variable "isFull" does not exist.', 185, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-danger") : (((((isset($context["capPct"]) || array_key_exists("capPct", $context) ? $context["capPct"] : (function () { throw new RuntimeError('Variable "capPct" does not exist.', 185, $this->source); })()) >= 75)) ? ("bg-warning") : ("bg-success"))));
        yield "\"
                   role=\"progressbar\"
                   style=\"width:";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["capPct"]) || array_key_exists("capPct", $context) ? $context["capPct"] : (function () { throw new RuntimeError('Variable "capPct" does not exist.', 187, $this->source); })()), "html", null, true);
        yield "%; border-radius:999px;\"
                   aria-valuenow=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["capPct"]) || array_key_exists("capPct", $context) ? $context["capPct"] : (function () { throw new RuntimeError('Variable "capPct" does not exist.', 188, $this->source); })()), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
              </div>
            </div>
          </div>
        </div>
        <div class=\"text-right\" style=\"min-width:200px;\">
          <a href=\"";
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
            <i class=\"fa fa-arrow-left mr-1\"></i> Retour
          </a>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-4 mb-4\">
        <div class=\"panel\">
          <div class=\"panel-hd\">
            <h4 class=\"mb-0\">Membres</h4>
            <span class=\"badge ";
        // line 206
        yield (((($tmp = (isset($context["isFull"]) || array_key_exists("isFull", $context) ? $context["isFull"] : (function () { throw new RuntimeError('Variable "isFull" does not exist.', 206, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("badge-danger") : ("badge-success"));
        yield "\" style=\"font-size:.8rem;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["memberCount"]) || array_key_exists("memberCount", $context) ? $context["memberCount"] : (function () { throw new RuntimeError('Variable "memberCount" does not exist.', 206, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 206, $this->source); })()), "capacite", [], "any", false, false, false, 206), "html", null, true);
        yield "</span>
          </div>
          <div class=\"panel-bd\">
            <ul class=\"members-list\">
              ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 210, $this->source); })()), "getIdUser", [], "method", false, false, false, 210));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 211
            yield "                ";
            $context["initials"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), (Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", true, true, false, 211)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 211), "")) : ("")), 0, 1) . Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", true, true, false, 211)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 211), "")) : ("")), 0, 1)));
            // line 212
            yield "                <li>
                  <span class=\"avatar\">";
            // line 213
            yield (((isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 213, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["initials"], "html", null, true)) : ("?"));
            yield "</span>
                  <span>";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 214), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 214), "html", null, true);
            yield "</span>
                </li>
              ";
            $context['_iterated'] = true;
        }
        // line 216
        if (!$context['_iterated']) {
            // line 217
            yield "                <li>
                  <span class=\"text-muted\">Aucun membre</span>
                </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        yield "            </ul>
          </div>
        </div>
      </div>

      <div class=\"col-lg-8\">
        <div class=\"panel\">
          <div class=\"panel-hd\">
            <h4 class=\"mb-0\">Discussion</h4>
            <small class=\"text-muted\">";
        // line 230
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "getTotalItemCount", [], "any", true, true, false, 230)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 230, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 230) . " message(s)"), "html", null, true)) : (""));
        yield "</small>
          </div>

          <div class=\"panel-bd\">

            ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "flashes", ["error"], "method", false, false, false, 235));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 236
            yield "              <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        yield "
            <div class=\"chat-wrap\" id=\"chat_wrap\">
              ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 240, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 241
            yield "                <div class=\"chat-msg\">
                  <div class=\"chat-left\">
                    <div class=\"chat-line\">
                      <strong class=\"chat-author\">
                        ";
            // line 245
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getIdUser", [], "method", false, false, false, 245)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 246
$context["message"], "getIdUser", [], "method", false, false, false, 246), "nom", [], "any", false, false, false, 246) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getIdUser", [], "method", false, false, false, 246), "prenom", [], "any", false, false, false, 246)), "html", null, true)) : ("Utilisateur inconnu"));
            // line 248
            yield "
                      </strong>
                      <span class=\"chat-sep\">:</span>
                      <span class=\"chat-text\" data-text>";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "contenu", [], "any", false, false, false, 251), "html", null, true);
            yield "</span>
                    </div>

                    <form class=\"chat-edit\" data-edit-form method=\"post\"
                          action=\"";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 255)]), "html", null, true);
            yield "\"
                          style=\"display:none;\">
                      <input type=\"hidden\" name=\"groupeId\" value=\"";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 257, $this->source); })()), "id", [], "any", false, false, false, 257), "html", null, true);
            yield "\">
                      <textarea class=\"form-control\" name=\"contenu\" rows=\"2\" data-edit-input>";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "contenu", [], "any", false, false, false, 258), "html", null, true);
            yield "</textarea>
                      <div class=\"mt-2\">
                        <button class=\"btn btn-primary btn-sm\" type=\"submit\">Save</button>
                        <button class=\"btn btn-secondary btn-sm\" type=\"button\" data-cancel>Cancel</button>
                      </div>
                    </form>
                  </div>

                  <div class=\"chat-right\">
                    <span class=\"chat-time\" title=\"";
            // line 267
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 267)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 267), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "\">
                      ";
            // line 268
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 268)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 268), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "
                    </span>

                    ";
            // line 271
            if ((((isset($context["currentUserId"]) || array_key_exists("currentUserId", $context) ? $context["currentUserId"] : (function () { throw new RuntimeError('Variable "currentUserId" does not exist.', 271, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getIdUser", [], "method", false, false, false, 271)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getIdUser", [], "method", false, false, false, 271), "id", [], "any", false, false, false, 271) == (isset($context["currentUserId"]) || array_key_exists("currentUserId", $context) ? $context["currentUserId"] : (function () { throw new RuntimeError('Variable "currentUserId" does not exist.', 271, $this->source); })())))) {
                // line 272
                yield "                      <div class=\"chat-actions\">
                        <button type=\"button\" class=\"chat-btn\" data-edit-btn title=\"Modifier\">✏️</button>

                        <form method=\"post\" action=\"";
                // line 275
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 275)]), "html", null, true);
                yield "\" class=\"m-0\">
                          <input type=\"hidden\" name=\"groupeId\" value=\"";
                // line 276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 276, $this->source); })()), "id", [], "any", false, false, false, 276), "html", null, true);
                yield "\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("del_msg_" . CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 277))), "html", null, true);
                yield "\">
                          <button class=\"chat-btn\" type=\"submit\" title=\"Supprimer\" onclick=\"return confirm('Supprimer ?')\">🗑️</button>
                        </form>
                      </div>
                    ";
            }
            // line 282
            yield "                  </div>
                </div>
              ";
            $context['_iterated'] = true;
        }
        // line 284
        if (!$context['_iterated']) {
            // line 285
            yield "                <p class=\"text-muted mb-0\">Aucun message pour le moment.</p>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        yield "            </div>

            <div class=\"mt-3\">
              ";
        // line 290
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 290, $this->source); })()));
        yield "
            </div>

            <hr>

            <form method=\"post\" action=\"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_message", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 295, $this->source); })()), "id", [], "any", false, false, false, 295)]), "html", null, true);
        yield "\">
              <div class=\"form-group mb-2\">
                <label class=\"sr-only\" for=\"msg_input\">Message</label>
                <textarea id=\"msg_input\" class=\"form-control\" name=\"contenu\" rows=\"3\" required placeholder=\"Écrire un message...\"></textarea>
              </div>

              <div class=\"composer-actions mt-2\">
                <button class=\"btn btn-primary\" type=\"submit\">
                  <i class=\"fa fa-paper-plane mr-1\"></i> Envoyer
                </button>
                <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"ai_btn\">
                  <i class=\"fa fa-magic mr-1\"></i> AI Suggest
                </button>
              </div>

              <div id=\"ai_box\" class=\"alert alert-info mt-3\" style=\"display:none;\">
                <div><strong>Suggestion:</strong></div>
                <div id=\"ai_text\" style=\"white-space:pre-wrap;\"></div>
                <button class=\"btn btn-sm btn-outline-primary mt-2\" type=\"button\" id=\"ai_use\">Use suggestion</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 326
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 327
        yield "  ";
        yield from $this->yieldParentBlock("js", $context, $blocks);
        yield "
  <script>
    document.addEventListener('click', function (e) {
      const editBtn = e.target.closest('[data-edit-btn]');
      if (editBtn) {
        const msg = editBtn.closest('.chat-msg');
        msg.querySelector('[data-text]').style.display = 'none';
        const form = msg.querySelector('[data-edit-form]');
        form.style.display = '';
        const input = msg.querySelector('[data-edit-input]');
        input.focus();
        return;
      }

      const cancelBtn = e.target.closest('[data-cancel]');
      if (cancelBtn) {
        const msg = cancelBtn.closest('.chat-msg');
        msg.querySelector('[data-edit-form]').style.display = 'none';
        msg.querySelector('[data-text]').style.display = '';
      }
    });

    document.addEventListener('DOMContentLoaded', () => {
      const input = document.getElementById('msg_input');
      const btn = document.getElementById('ai_btn');
      const box = document.getElementById('ai_box');
      const textEl = document.getElementById('ai_text');
      const useBtn = document.getElementById('ai_use');

      btn.addEventListener('click', async () => {
        const text = input.value.trim();
        if (!text) return;

        const url = \"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_ai_suggest", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 360, $this->source); })()), "id", [], "any", false, false, false, 360)]), "html", null, true);
        yield "\";

        let res, data;
        try {
          res = await fetch(url, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded',
              'Accept': 'application/json',
              'X-Requested-With': 'XMLHttpRequest'
            },
            body: new URLSearchParams({ text })
          });

          data = await res.json();
        } catch (e) {
          console.log('AI fetch error', e);
          alert('AI error');
          return;
        }

        if (!res.ok || !data || !data.ok) {
          console.log('AI error:', res.status, data);
          alert('AI error');
          return;
        }

        textEl.textContent = data.suggestion || '';
        box.style.display = '';
      });

      useBtn.addEventListener('click', () => {
        input.value = textEl.textContent;
      });

      const wrap = document.getElementById('chat_wrap');
      if (wrap) wrap.scrollTop = wrap.scrollHeight;
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
        return "groupe/details.html.twig";
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
        return array (  653 => 360,  616 => 327,  603 => 326,  562 => 295,  554 => 290,  549 => 287,  542 => 285,  540 => 284,  534 => 282,  526 => 277,  522 => 276,  518 => 275,  513 => 272,  511 => 271,  505 => 268,  501 => 267,  489 => 258,  485 => 257,  480 => 255,  473 => 251,  468 => 248,  466 => 246,  465 => 245,  459 => 241,  454 => 240,  450 => 238,  441 => 236,  437 => 235,  429 => 230,  418 => 221,  409 => 217,  407 => 216,  398 => 214,  394 => 213,  391 => 212,  388 => 211,  383 => 210,  372 => 206,  357 => 194,  348 => 188,  344 => 187,  339 => 185,  335 => 183,  333 => 182,  329 => 180,  325 => 178,  323 => 177,  320 => 176,  312 => 175,  308 => 174,  303 => 172,  297 => 169,  291 => 166,  283 => 160,  270 => 159,  114 => 13,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Groupe - {{ groupe.nom }}{% endblock %}

{% block css %}
  {{ parent() }}
  <style>
    .group-page-bg{
      position:relative;
      padding-top:185px;
      background:
        linear-gradient(rgba(0,0,0,.44), rgba(0,0,0,.52)),
        url('{{ asset(\"assets/images/bg_2.jpg\") }}') center/cover no-repeat;
    }

    @media (max-width: 991.98px){
      .group-page-bg{ padding-top:30px; }
    }

    .group-page-bg::before{
      content:'';
      position:absolute;
      inset:0;
      background:linear-gradient(135deg, rgba(249,109,0,.16), rgba(0,0,0,.12));
      pointer-events:none;
    }

    .group-page-bg .container{
      position:relative;
      z-index:1;
    }

    .group-header{
      background:#fff;
      border-radius:10px;
      border:1px solid rgba(0,0,0,.06);
      box-shadow:0 10px 30px rgba(0,0,0,.08);
      padding:20px 22px;
      margin-bottom:18px;
    }

    .meta-badges .badge{
      font-weight:600;
      letter-spacing:.2px;
      padding:.5rem .7rem;
      border-radius:999px;
    }

    .panel{
      background:#fff;
      border-radius:10px;
      border:1px solid rgba(0,0,0,.06);
      box-shadow:0 10px 30px rgba(0,0,0,.08);
      overflow:hidden;
    }

    .panel-hd{
      padding:14px 18px;
      border-bottom:1px solid rgba(0,0,0,.08);
      background:rgba(249,109,0,.04);
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:10px;
    }

    .panel-bd{ padding:16px 18px; }

    .members-list{ list-style:none; padding-left:0; margin:0; }
    .members-list li{
      display:flex;
      align-items:center;
      gap:10px;
      padding:8px 0;
      border-bottom:1px dashed rgba(0,0,0,.10);
    }
    .members-list li:last-child{ border-bottom:0; }
    .avatar{
      width:34px; height:34px;
      border-radius:50%;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      background:rgba(0,0,0,.06);
      font-weight:700;
      text-transform:uppercase;
      flex:0 0 auto;
    }

    .chat-wrap{
      border:1px solid rgba(0,0,0,.10);
      border-radius:10px;
      height:360px;
      overflow:auto;
      background:rgba(255,255,255,.85);
      padding:10px;
    }

    .chat-msg{
      display:flex;
      justify-content:space-between;
      gap:12px;
      padding:10px 12px;
      border-radius:10px;
      background:#fff;
      border:1px solid rgba(0,0,0,.06);
      margin-bottom:10px;
      color:#4f4f4f;
    }

    .chat-left{ flex:1; min-width:0; }
    .chat-line{ display:flex; gap:6px; align-items:baseline; flex-wrap:wrap; }
    .chat-author{ font-weight:700; color:#3d3d3d; }
    .chat-text{ overflow-wrap:anywhere; color:#5f5f5f; }
    .chat-sep{ color:#808080; opacity:.95; }

    .chat-right{
      display:flex;
      align-items:flex-start;
      gap:10px;
      white-space:nowrap;
    }

    .chat-time{ font-size:12px; color:#777; opacity:1; padding-top:2px; }

    .chat-actions{
      display:flex;
      gap:6px;
      opacity:0;
      pointer-events:none;
      transition:opacity .12s ease;
    }

    .chat-msg:hover .chat-actions{ opacity:1; pointer-events:auto; }

    .chat-btn{
      border:0;
      background:transparent;
      cursor:pointer;
      padding:2px 6px;
      line-height:1;
    }

    .chat-btn:hover{
      background:rgba(0,0,0,0.08);
      border-radius:6px;
    }

    .chat-edit textarea{ resize:vertical; }

    .pagination{ margin-top:14px; justify-content:center; }
    .pagination li{ margin:0 4px; }
    .pagination a, .pagination span{ padding:6px 10px; border-radius:8px; }

    .composer-actions{ display:flex; gap:10px; flex-wrap:wrap; }
  </style>
{% endblock %}

{% block body %}
<section class=\"ftco-section group-page-bg\">
  <div class=\"container\">

    <div class=\"group-header\">
      <div class=\"d-flex align-items-start justify-content-between flex-wrap\" style=\"gap:12px;\">
        <div>
          <h2 class=\"mb-2\">{{ groupe.nom }}</h2>
          <div class=\"meta-badges d-flex flex-wrap\" style=\"gap:8px;\">
            <span class=\"badge badge-pill badge-light\">
              Niveau: {{ groupe.idNiveau ? groupe.idNiveau.titre : '—' }}
            </span>
            <span class=\"badge badge-pill badge-light\">
              Langue: {{ groupe.IDLangue ? groupe.IDLangue.nom : '—' }}
            </span>
            <span class=\"badge badge-pill {{ isFull ? 'badge-danger' : 'badge-success' }}\">
              <i class=\"fa fa-users mr-1\"></i>{{ memberCount }} / {{ groupe.capacite }} membres{% if isFull %} &mdash; Complet{% endif %}
            </span>
            {% if isMember %}
              <span class=\"badge badge-pill badge-primary\"><i class=\"fa fa-check mr-1\"></i>Vous êtes membre</span>
            {% endif %}
          </div>

          {% set capPct = groupe.capacite > 0 ? ((memberCount / groupe.capacite) * 100)|round : 0 %}
          <div class=\"mt-2\" style=\"max-width:260px;\">
            <div class=\"progress\" style=\"height:6px; border-radius:999px; background:rgba(0,0,0,.08);\">
              <div class=\"progress-bar {{ isFull ? 'bg-danger' : (capPct >= 75 ? 'bg-warning' : 'bg-success') }}\"
                   role=\"progressbar\"
                   style=\"width:{{ capPct }}%; border-radius:999px;\"
                   aria-valuenow=\"{{ capPct }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">
              </div>
            </div>
          </div>
        </div>
        <div class=\"text-right\" style=\"min-width:200px;\">
          <a href=\"{{ path('app_groupe') }}\" class=\"btn btn-outline-secondary btn-sm\">
            <i class=\"fa fa-arrow-left mr-1\"></i> Retour
          </a>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-4 mb-4\">
        <div class=\"panel\">
          <div class=\"panel-hd\">
            <h4 class=\"mb-0\">Membres</h4>
            <span class=\"badge {{ isFull ? 'badge-danger' : 'badge-success' }}\" style=\"font-size:.8rem;\">{{ memberCount }}/{{ groupe.capacite }}</span>
          </div>
          <div class=\"panel-bd\">
            <ul class=\"members-list\">
              {% for user in groupe.getIdUser() %}
                {% set initials = (user.nom|default('')|slice(0,1) ~ user.prenom|default('')|slice(0,1))|upper %}
                <li>
                  <span class=\"avatar\">{{ initials ?: '?' }}</span>
                  <span>{{ user.nom }} {{ user.prenom }}</span>
                </li>
              {% else %}
                <li>
                  <span class=\"text-muted\">Aucun membre</span>
                </li>
              {% endfor %}
            </ul>
          </div>
        </div>
      </div>

      <div class=\"col-lg-8\">
        <div class=\"panel\">
          <div class=\"panel-hd\">
            <h4 class=\"mb-0\">Discussion</h4>
            <small class=\"text-muted\">{{ messages.getTotalItemCount is defined ? (messages.getTotalItemCount ~ ' message(s)') : '' }}</small>
          </div>

          <div class=\"panel-bd\">

            {% for msg in app.flashes('error') %}
              <div class=\"alert alert-danger\">{{ msg }}</div>
            {% endfor %}

            <div class=\"chat-wrap\" id=\"chat_wrap\">
              {% for message in messages %}
                <div class=\"chat-msg\">
                  <div class=\"chat-left\">
                    <div class=\"chat-line\">
                      <strong class=\"chat-author\">
                        {{ message.getIdUser()
                          ? (message.getIdUser().nom ~ ' ' ~ message.getIdUser().prenom)
                          : 'Utilisateur inconnu'
                        }}
                      </strong>
                      <span class=\"chat-sep\">:</span>
                      <span class=\"chat-text\" data-text>{{ message.contenu }}</span>
                    </div>

                    <form class=\"chat-edit\" data-edit-form method=\"post\"
                          action=\"{{ path('app_message_edit', {id: message.id}) }}\"
                          style=\"display:none;\">
                      <input type=\"hidden\" name=\"groupeId\" value=\"{{ groupe.id }}\">
                      <textarea class=\"form-control\" name=\"contenu\" rows=\"2\" data-edit-input>{{ message.contenu }}</textarea>
                      <div class=\"mt-2\">
                        <button class=\"btn btn-primary btn-sm\" type=\"submit\">Save</button>
                        <button class=\"btn btn-secondary btn-sm\" type=\"button\" data-cancel>Cancel</button>
                      </div>
                    </form>
                  </div>

                  <div class=\"chat-right\">
                    <span class=\"chat-time\" title=\"{{ message.dateCreation ? message.dateCreation|date('d/m/Y H:i') : '' }}\">
                      {{ message.dateCreation ? message.dateCreation|date('d/m/Y H:i') : '' }}
                    </span>

                    {% if currentUserId and message.getIdUser() and message.getIdUser().id == currentUserId %}
                      <div class=\"chat-actions\">
                        <button type=\"button\" class=\"chat-btn\" data-edit-btn title=\"Modifier\">✏️</button>

                        <form method=\"post\" action=\"{{ path('app_message_delete', {id: message.id}) }}\" class=\"m-0\">
                          <input type=\"hidden\" name=\"groupeId\" value=\"{{ groupe.id }}\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('del_msg_' ~ message.id) }}\">
                          <button class=\"chat-btn\" type=\"submit\" title=\"Supprimer\" onclick=\"return confirm('Supprimer ?')\">🗑️</button>
                        </form>
                      </div>
                    {% endif %}
                  </div>
                </div>
              {% else %}
                <p class=\"text-muted mb-0\">Aucun message pour le moment.</p>
              {% endfor %}
            </div>

            <div class=\"mt-3\">
              {{ knp_pagination_render(messages) }}
            </div>

            <hr>

            <form method=\"post\" action=\"{{ path('app_groupe_message', {id: groupe.id}) }}\">
              <div class=\"form-group mb-2\">
                <label class=\"sr-only\" for=\"msg_input\">Message</label>
                <textarea id=\"msg_input\" class=\"form-control\" name=\"contenu\" rows=\"3\" required placeholder=\"Écrire un message...\"></textarea>
              </div>

              <div class=\"composer-actions mt-2\">
                <button class=\"btn btn-primary\" type=\"submit\">
                  <i class=\"fa fa-paper-plane mr-1\"></i> Envoyer
                </button>
                <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"ai_btn\">
                  <i class=\"fa fa-magic mr-1\"></i> AI Suggest
                </button>
              </div>

              <div id=\"ai_box\" class=\"alert alert-info mt-3\" style=\"display:none;\">
                <div><strong>Suggestion:</strong></div>
                <div id=\"ai_text\" style=\"white-space:pre-wrap;\"></div>
                <button class=\"btn btn-sm btn-outline-primary mt-2\" type=\"button\" id=\"ai_use\">Use suggestion</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>
{% endblock %}

{% block js %}
  {{ parent() }}
  <script>
    document.addEventListener('click', function (e) {
      const editBtn = e.target.closest('[data-edit-btn]');
      if (editBtn) {
        const msg = editBtn.closest('.chat-msg');
        msg.querySelector('[data-text]').style.display = 'none';
        const form = msg.querySelector('[data-edit-form]');
        form.style.display = '';
        const input = msg.querySelector('[data-edit-input]');
        input.focus();
        return;
      }

      const cancelBtn = e.target.closest('[data-cancel]');
      if (cancelBtn) {
        const msg = cancelBtn.closest('.chat-msg');
        msg.querySelector('[data-edit-form]').style.display = 'none';
        msg.querySelector('[data-text]').style.display = '';
      }
    });

    document.addEventListener('DOMContentLoaded', () => {
      const input = document.getElementById('msg_input');
      const btn = document.getElementById('ai_btn');
      const box = document.getElementById('ai_box');
      const textEl = document.getElementById('ai_text');
      const useBtn = document.getElementById('ai_use');

      btn.addEventListener('click', async () => {
        const text = input.value.trim();
        if (!text) return;

        const url = \"{{ path('app_groupe_ai_suggest', {id: groupe.id}) }}\";

        let res, data;
        try {
          res = await fetch(url, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded',
              'Accept': 'application/json',
              'X-Requested-With': 'XMLHttpRequest'
            },
            body: new URLSearchParams({ text })
          });

          data = await res.json();
        } catch (e) {
          console.log('AI fetch error', e);
          alert('AI error');
          return;
        }

        if (!res.ok || !data || !data.ok) {
          console.log('AI error:', res.status, data);
          alert('AI error');
          return;
        }

        textEl.textContent = data.suggestion || '';
        box.style.display = '';
      });

      useBtn.addEventListener('click', () => {
        input.value = textEl.textContent;
      });

      const wrap = document.getElementById('chat_wrap');
      if (wrap) wrap.scrollTop = wrap.scrollHeight;
    });
  </script>
{% endblock %}", "groupe/details.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\groupe\\details.html.twig");
    }
}
