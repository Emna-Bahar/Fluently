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
class __TwigTemplate_9885d19898336d5c5cc9c8788a9d4f1c extends Template
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
        yield "  <h3>Admin: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        yield "</h3>

  <form method=\"get\">
    <input name=\"q\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Rechercher contenu / nom / prénom\">
    <button type=\"submit\">Rechercher</button>
  </form>

  <hr>

  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "    <div class=\"chat-msg\">
      <div>
        <strong>
          ";
            // line 17
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "idUser", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "idUser", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "idUser", [], "any", false, false, false, 17), "prenom", [], "any", false, false, false, 17)), "html", null, true)) : ("Utilisateur inconnu"));
            yield "
        </strong>
        <span style=\"float:right; opacity:.6;\">
          ";
            // line 20
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "dateCreation", [], "any", false, false, false, 20), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "
        </span>
        <div>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "contenu", [], "any", false, false, false, 22), "html", null, true);
            yield "</div>
      </div>

      <form method=\"post\" action=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_message_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\"
            onsubmit=\"return confirm('Supprimer ce message ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("admin_del_msg_" . CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 27))), "html", null, true);
            yield "\">
        <button type=\"submit\">🗑️</button>
      </form>
    </div>
  ";
            $context['_iterated'] = true;
        }
        // line 31
        if (!$context['_iterated']) {
            // line 32
            yield "    <p>Aucun message.</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
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
        return array (  135 => 32,  133 => 31,  124 => 27,  119 => 25,  113 => 22,  108 => 20,  102 => 17,  97 => 14,  92 => 13,  83 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block body %}
  <h3>Admin: {{ groupe.nom }}</h3>

  <form method=\"get\">
    <input name=\"q\" value=\"{{ q }}\" placeholder=\"Rechercher contenu / nom / prénom\">
    <button type=\"submit\">Rechercher</button>
  </form>

  <hr>

  {% for message in messages %}
    <div class=\"chat-msg\">
      <div>
        <strong>
          {{ message.idUser ? (message.idUser.nom ~ ' ' ~ message.idUser.prenom) : 'Utilisateur inconnu' }}
        </strong>
        <span style=\"float:right; opacity:.6;\">
          {{ message.dateCreation ? message.dateCreation|date('d/m/Y H:i') : '' }}
        </span>
        <div>{{ message.contenu }}</div>
      </div>

      <form method=\"post\" action=\"{{ path('admin_message_delete', {id: message.id}) }}\"
            onsubmit=\"return confirm('Supprimer ce message ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('admin_del_msg_' ~ message.id) }}\">
        <button type=\"submit\">🗑️</button>
      </form>
    </div>
  {% else %}
    <p>Aucun message.</p>
  {% endfor %}
{% endblock %}
", "groupe/admin_group_chat.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\groupe\\admin_group_chat.html.twig");
    }
}
