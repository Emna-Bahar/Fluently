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

/* groupe/index.html.twig */
class __TwigTemplate_728e6f63bb8f7fdd0ef739a1e68600be extends Template
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
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Instructeurs - Fluently";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <!-- Hero Section -->
    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_2.jpg"), "html", null, true);
        yield "');\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
                <div class=\"col-md-9 ftco-animate pb-5 text-center\">
                    <p class=\"breadcrumbs\">
                        <span class=\"mr-2\">
                            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home <i class=\"fa fa-chevron-right\"></i></a>
                        </span> 
                        <span>Groupes<i class=\"fa fa-chevron-right\"></i></span>
                    </p>
                    <h1 class=\"mb-0 bread\">Nos Groupes</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Instructors Grid -->
    <section class=\"ftco-section bg-light\">
        <div class=\"container\">
            <div class=\"row\">
  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 30
            yield "    <div class=\"col-md-4 d-flex align-items-stretch ftco-animate mb-4\">
      <div class=\"staff bg-white\">
        <div class=\"text pt-3 px-3 pb-4 text-center\">
          <h3 class=\"mb-2\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "nom", [], "any", false, false, false, 33), "html", null, true);
            yield "</h3>

          <p class=\"mb-2\">
            <strong>Niveau:</strong>
            ";
            // line 37
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["g"], "idNiveau", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["g"], "idNiveau", [], "any", false, false, false, 37), "titre", [], "any", false, false, false, 37), "html", null, true)) : ("—"));
            yield "
          </p>

          <p class=\"mb-2\">
            <strong>Langue:</strong>
            ";
            // line 42
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["g"], "IDLangue", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["g"], "IDLangue", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), "html", null, true)) : ("—"));
            yield "
          </p>

          <p class=\"mb-3\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "description", [], "any", false, false, false, 45), "html", null, true);
            yield "</p>

          <a class=\"btn btn-primary\"
             href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\">
            Ouvrir le groupe
          </a>
        </div>
      </div>
    </div>
  ";
            $context['_iterated'] = true;
        }
        // line 54
        if (!$context['_iterated']) {
            // line 55
            yield "    <div class=\"col-12\">
      <p>Aucun groupe.</p>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "</div>

        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
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

        // line 66
        yield "    ";
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
    <style>
        .staff {
            transition: transform 0.3s ease;
            height: 100%;
        }
        .staff:hover {
            transform: translateY(-10px);
        }
        .img-wrap {
            height: 250px;
        }
        .img {
            width: 100%;
            background-size: cover;
            background-position: center;
        }
    </style>
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
        return "groupe/index.html.twig";
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
        return array (  218 => 66,  205 => 65,  190 => 59,  181 => 55,  179 => 54,  168 => 48,  162 => 45,  156 => 42,  148 => 37,  141 => 33,  136 => 30,  131 => 29,  114 => 15,  104 => 8,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/instructor/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Instructeurs - Fluently{% endblock %}

{% block body %}
    <!-- Hero Section -->
    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_2.jpg') }}');\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
                <div class=\"col-md-9 ftco-animate pb-5 text-center\">
                    <p class=\"breadcrumbs\">
                        <span class=\"mr-2\">
                            <a href=\"{{ path('app_home') }}\">Home <i class=\"fa fa-chevron-right\"></i></a>
                        </span> 
                        <span>Groupes<i class=\"fa fa-chevron-right\"></i></span>
                    </p>
                    <h1 class=\"mb-0 bread\">Nos Groupes</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Instructors Grid -->
    <section class=\"ftco-section bg-light\">
        <div class=\"container\">
            <div class=\"row\">
  {% for g in groupes %}
    <div class=\"col-md-4 d-flex align-items-stretch ftco-animate mb-4\">
      <div class=\"staff bg-white\">
        <div class=\"text pt-3 px-3 pb-4 text-center\">
          <h3 class=\"mb-2\">{{ g.nom }}</h3>

          <p class=\"mb-2\">
            <strong>Niveau:</strong>
            {{ g.idNiveau ? g.idNiveau.titre : '—' }}
          </p>

          <p class=\"mb-2\">
            <strong>Langue:</strong>
            {{ g.IDLangue ? g.IDLangue.nom : '—' }}
          </p>

          <p class=\"mb-3\">{{ g.description }}</p>

          <a class=\"btn btn-primary\"
             href=\"{{ path('app_groupe_details', {id: g.id}) }}\">
            Ouvrir le groupe
          </a>
        </div>
      </div>
    </div>
  {% else %}
    <div class=\"col-12\">
      <p>Aucun groupe.</p>
    </div>
  {% endfor %}
</div>

        </div>
    </section>
{% endblock %}

{% block css %}
    {{ parent() }}
    <style>
        .staff {
            transition: transform 0.3s ease;
            height: 100%;
        }
        .staff:hover {
            transform: translateY(-10px);
        }
        .img-wrap {
            height: 250px;
        }
        .img {
            width: 100%;
            background-size: cover;
            background-position: center;
        }
    </style>
{% endblock %}", "groupe/index.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\groupe\\index.html.twig");
    }
}
