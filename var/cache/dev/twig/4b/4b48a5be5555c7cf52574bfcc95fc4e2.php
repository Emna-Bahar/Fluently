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
class __TwigTemplate_a5e7967bc85745899cd469b010d90c7b extends Template
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
            'css' => [$this, 'block_css'],
            'title' => [$this, 'block_title'],
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

    // line 2
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

        // line 3
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
<style>
.chat-msg{
  display:flex;
  justify-content:space-between;
  gap:12px;
  padding:8px 10px;
  border-radius:6px;
}

.chat-msg:hover{ background:rgba(0,0,0,0.04); }

.chat-left{ flex:1; min-width:0; }
.chat-line{ display:flex; gap:6px; align-items:baseline; }
.chat-text{ overflow-wrap:anywhere; }

.chat-right{
  display:flex;
  align-items:center;
  gap:10px;
  white-space:nowrap;
}

.chat-time{ font-size:12px; opacity:.6; }

.chat-actions{
  display:flex;
  gap:6px;
  opacity:0;
  pointer-events:none;
  transition:opacity .12s ease;
}

.chat-msg:hover .chat-actions{
  opacity:1;
  pointer-events:auto;
}

.chat-btn{
  border:0;
  background:transparent;
  cursor:pointer;
  padding:2px 4px;
  line-height:1;
}

.chat-btn:hover{
  background:rgba(0,0,0,0.08);
  border-radius:4px;
}

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 59
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

        yield "Groupe";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
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

        // line 62
        yield "<section class=\"ftco-section\">
  <div class=\"container\">

    <h2 class=\"mb-3\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 65, $this->source); })()), "nom", [], "any", false, false, false, 65), "html", null, true);
        yield "</h2>

    <p>
      <strong>Niveau :</strong>
      ";
        // line 69
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 69, $this->source); })()), "idNiveau", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 69, $this->source); })()), "idNiveau", [], "any", false, false, false, 69), "titre", [], "any", false, false, false, 69), "html", null, true)) : ("—"));
        yield "
    </p>

    <p>
      <strong>Langue :</strong>
      ";
        // line 74
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 74, $this->source); })()), "IDLangue", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 74, $this->source); })()), "IDLangue", [], "any", false, false, false, 74), "nom", [], "any", false, false, false, 74), "html", null, true)) : ("—"));
        yield "
    </p>

    <hr>

    <h4>Membres du groupe</h4>
    <ul>
      ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 81, $this->source); })()), "getIdUser", [], "method", false, false, false, 81));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 82
            yield "        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 82), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 82), "html", null, true);
            yield "</li>
      ";
            $context['_iterated'] = true;
        }
        // line 83
        if (!$context['_iterated']) {
            // line 84
            yield "        <li>Aucun membre</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "    </ul>

    <hr>

    <h4>Discussion</h4>

    <div class=\"border p-3 mb-3\" style=\"height: 250px; overflow-y: auto;\">
      ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 93, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 94
            yield "    <div class=\"chat-msg\">
  <div class=\"chat-left\">
    <div class=\"chat-line\">
      <strong class=\"chat-author\">
        ";
            // line 98
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getIdUser", [], "method", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 99
$context["message"], "getIdUser", [], "method", false, false, false, 99), "nom", [], "any", false, false, false, 99) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getIdUser", [], "method", false, false, false, 99), "prenom", [], "any", false, false, false, 99)), "html", null, true)) : ("Utilisateur inconnu"));
            // line 101
            yield "
      </strong>
      <span class=\"chat-sep\">:</span>
      <span class=\"chat-text\" data-text>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "contenu", [], "any", false, false, false, 104), "html", null, true);
            yield "</span>
    </div>

    ";
            // line 108
            yield "    <form class=\"chat-edit\" data-edit-form method=\"post\"
          action=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 109)]), "html", null, true);
            yield "\"
          style=\"display:none;\">
      <input type=\"hidden\" name=\"groupeId\" value=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111), "html", null, true);
            yield "\">
      <textarea class=\"form-control\" name=\"contenu\" rows=\"2\" data-edit-input>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "contenu", [], "any", false, false, false, 112), "html", null, true);
            yield "</textarea>
      <div class=\"mt-2\">
        <button class=\"btn btn-primary btn-sm\" type=\"submit\">Save</button>
        <button class=\"btn btn-secondary btn-sm\" type=\"button\" data-cancel>Cancel</button>
      </div>
    </form>
  </div>

  <div class=\"chat-right\">
    <span class=\"chat-time\" title=\"";
            // line 121
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 121), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "\">
      ";
            // line 122
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 122), "H:i"), "html", null, true)) : (""));
            yield "
    </span>

    ";
            // line 125
            if ((((isset($context["currentUserId"]) || array_key_exists("currentUserId", $context) ? $context["currentUserId"] : (function () { throw new RuntimeError('Variable "currentUserId" does not exist.', 125, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getIdUser", [], "method", false, false, false, 125)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getIdUser", [], "method", false, false, false, 125), "id", [], "any", false, false, false, 125) == (isset($context["currentUserId"]) || array_key_exists("currentUserId", $context) ? $context["currentUserId"] : (function () { throw new RuntimeError('Variable "currentUserId" does not exist.', 125, $this->source); })())))) {
                // line 126
                yield "      <div class=\"chat-actions\">
        <button type=\"button\" class=\"chat-btn\" data-edit-btn>✏️</button>

        <form method=\"post\" action=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 129)]), "html", null, true);
                yield "\">
          <input type=\"hidden\" name=\"groupeId\" value=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130), "html", null, true);
                yield "\">
          <input type=\"hidden\" name=\"_token\" value=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("del_msg_" . CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 131))), "html", null, true);
                yield "\">
          <button class=\"chat-btn\" type=\"submit\" onclick=\"return confirm('Supprimer ?')\">🗑️</button>
        </form>
      </div>
    ";
            }
            // line 136
            yield "  </div>
</div>

      ";
            $context['_iterated'] = true;
        }
        // line 139
        if (!$context['_iterated']) {
            // line 140
            yield "        <p>Aucun message pour le moment.</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "

    </div>

    <form method=\"post\" action=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_message", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 146, $this->source); })()), "id", [], "any", false, false, false, 146)]), "html", null, true);
        yield "\">
      <div class=\"form-group\">
        <textarea class=\"form-control\" name=\"contenu\" rows=\"3\" required></textarea>
      </div>
      <button class=\"btn btn-primary mt-2\">Envoyer</button>
    </form>

  </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 156
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

        // line 157
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
        return array (  379 => 157,  366 => 156,  345 => 146,  339 => 142,  332 => 140,  330 => 139,  323 => 136,  315 => 131,  311 => 130,  307 => 129,  302 => 126,  300 => 125,  294 => 122,  290 => 121,  278 => 112,  274 => 111,  269 => 109,  266 => 108,  260 => 104,  255 => 101,  253 => 99,  252 => 98,  246 => 94,  241 => 93,  232 => 86,  225 => 84,  223 => 83,  214 => 82,  209 => 81,  199 => 74,  191 => 69,  184 => 65,  179 => 62,  166 => 61,  143 => 59,  79 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block css %}
{{ parent() }}
<style>
.chat-msg{
  display:flex;
  justify-content:space-between;
  gap:12px;
  padding:8px 10px;
  border-radius:6px;
}

.chat-msg:hover{ background:rgba(0,0,0,0.04); }

.chat-left{ flex:1; min-width:0; }
.chat-line{ display:flex; gap:6px; align-items:baseline; }
.chat-text{ overflow-wrap:anywhere; }

.chat-right{
  display:flex;
  align-items:center;
  gap:10px;
  white-space:nowrap;
}

.chat-time{ font-size:12px; opacity:.6; }

.chat-actions{
  display:flex;
  gap:6px;
  opacity:0;
  pointer-events:none;
  transition:opacity .12s ease;
}

.chat-msg:hover .chat-actions{
  opacity:1;
  pointer-events:auto;
}

.chat-btn{
  border:0;
  background:transparent;
  cursor:pointer;
  padding:2px 4px;
  line-height:1;
}

.chat-btn:hover{
  background:rgba(0,0,0,0.08);
  border-radius:4px;
}

</style>
{% endblock %}



{% block title %}Groupe{% endblock %}

{% block body %}
<section class=\"ftco-section\">
  <div class=\"container\">

    <h2 class=\"mb-3\">{{ groupe.nom }}</h2>

    <p>
      <strong>Niveau :</strong>
      {{ groupe.idNiveau ? groupe.idNiveau.titre : '—' }}
    </p>

    <p>
      <strong>Langue :</strong>
      {{ groupe.IDLangue ? groupe.IDLangue.nom : '—' }}
    </p>

    <hr>

    <h4>Membres du groupe</h4>
    <ul>
      {% for user in groupe.getIdUser() %}
        <li>{{ user.nom }} {{ user.prenom }}</li>
      {% else %}
        <li>Aucun membre</li>
      {% endfor %}
    </ul>

    <hr>

    <h4>Discussion</h4>

    <div class=\"border p-3 mb-3\" style=\"height: 250px; overflow-y: auto;\">
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

    {# inline edit form (hidden by default) #}
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
      {{ message.dateCreation ? message.dateCreation|date('H:i') : '' }}
    </span>

    {% if currentUserId and message.getIdUser() and message.getIdUser().id == currentUserId %}
      <div class=\"chat-actions\">
        <button type=\"button\" class=\"chat-btn\" data-edit-btn>✏️</button>

        <form method=\"post\" action=\"{{ path('app_message_delete', {id: message.id}) }}\">
          <input type=\"hidden\" name=\"groupeId\" value=\"{{ groupe.id }}\">
          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('del_msg_' ~ message.id) }}\">
          <button class=\"chat-btn\" type=\"submit\" onclick=\"return confirm('Supprimer ?')\">🗑️</button>
        </form>
      </div>
    {% endif %}
  </div>
</div>

      {% else %}
        <p>Aucun message pour le moment.</p>
      {% endfor %}


    </div>

    <form method=\"post\" action=\"{{ path('app_groupe_message', {id: groupe.id}) }}\">
      <div class=\"form-group\">
        <textarea class=\"form-control\" name=\"contenu\" rows=\"3\" required></textarea>
      </div>
      <button class=\"btn btn-primary mt-2\">Envoyer</button>
    </form>

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
    </script>

{% endblock %}", "groupe/details.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\groupe\\details.html.twig");
    }
}
