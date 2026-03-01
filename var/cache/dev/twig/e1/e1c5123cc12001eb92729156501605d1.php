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
class __TwigTemplate_d4c7d47ba41ea79b447b0a2eee3c5b31 extends Template
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

          ";
        // line 30
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", ["error"], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 31
            yield "            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\" style=\"border-radius:8px; margin-bottom:12px;\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              <i class=\"fa fa-lock mr-1\"></i> ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", ["success"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 37
            yield "            <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"border-radius:8px; margin-bottom:12px;\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "
            <div class=\"row\">
  ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 45
            yield "    ";
            $context["memberCount"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["g"], "getIdUser", [], "method", false, false, false, 45), "count", [], "method", false, false, false, 45);
            // line 46
            yield "    ";
            $context["capPct"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["g"], "capacite", [], "any", false, false, false, 46) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["memberCount"]) || array_key_exists("memberCount", $context) ? $context["memberCount"] : (function () { throw new RuntimeError('Variable "memberCount" does not exist.', 46, $this->source); })()) / CoreExtension::getAttribute($this->env, $this->source, $context["g"], "capacite", [], "any", false, false, false, 46)) * 100))) : (0));
            // line 47
            yield "    ";
            $context["isFull"] = ((isset($context["memberCount"]) || array_key_exists("memberCount", $context) ? $context["memberCount"] : (function () { throw new RuntimeError('Variable "memberCount" does not exist.', 47, $this->source); })()) >= CoreExtension::getAttribute($this->env, $this->source, $context["g"], "capacite", [], "any", false, false, false, 47));
            // line 48
            yield "    ";
            $context["hasProgress"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 48), (isset($context["unlockedGroupIds"]) || array_key_exists("unlockedGroupIds", $context) ? $context["unlockedGroupIds"] : (function () { throw new RuntimeError('Variable "unlockedGroupIds" does not exist.', 48, $this->source); })()));
            // line 49
            yield "    ";
            $context["isMember"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 49), (isset($context["userGroupIds"]) || array_key_exists("userGroupIds", $context) ? $context["userGroupIds"] : (function () { throw new RuntimeError('Variable "userGroupIds" does not exist.', 49, $this->source); })()));
            // line 50
            yield "    ";
            $context["canAccess"] = ((isset($context["hasProgress"]) || array_key_exists("hasProgress", $context) ? $context["hasProgress"] : (function () { throw new RuntimeError('Variable "hasProgress" does not exist.', 50, $this->source); })()) && ( !(isset($context["isFull"]) || array_key_exists("isFull", $context) ? $context["isFull"] : (function () { throw new RuntimeError('Variable "isFull" does not exist.', 50, $this->source); })()) || (isset($context["isMember"]) || array_key_exists("isMember", $context) ? $context["isMember"] : (function () { throw new RuntimeError('Variable "isMember" does not exist.', 50, $this->source); })())));
            // line 51
            yield "
    <div class=\"col-md-4 d-flex align-items-stretch ftco-animate mb-4\">
      <div class=\"staff bg-white\" style=\"border-radius:10px; overflow:hidden; position:relative; width:100%;\">

        ";
            // line 56
            yield "        <div style=\"height:5px; background:";
            yield (((($tmp = (isset($context["isFull"]) || array_key_exists("isFull", $context) ? $context["isFull"] : (function () { throw new RuntimeError('Variable "isFull" does not exist.', 56, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("#e74c3c") : ("#f96d00"));
            yield ";\"></div>

        ";
            // line 58
            if ((($tmp = (isset($context["isFull"]) || array_key_exists("isFull", $context) ? $context["isFull"] : (function () { throw new RuntimeError('Variable "isFull" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "          <div style=\"position:absolute; top:14px; right:12px;\">
            <span class=\"badge badge-danger\" style=\"font-size:.72rem; letter-spacing:.3px;\">COMPLET</span>
          </div>
        ";
            }
            // line 63
            yield "
        <div class=\"text pt-3 px-3 pb-4 text-center\">
          <h3 class=\"mb-1\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "nom", [], "any", false, false, false, 65), "html", null, true);
            yield "</h3>

          ";
            // line 68
            yield "          <div class=\"d-flex justify-content-center flex-wrap mb-2\" style=\"gap:6px;\">
            ";
            // line 69
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["g"], "IDLangue", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 70
                yield "              <span class=\"badge badge-pill badge-light\">
                <i class=\"fa fa-globe mr-1\"></i>";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["g"], "IDLangue", [], "any", false, false, false, 71), "nom", [], "any", false, false, false, 71), "html", null, true);
                yield "
              </span>
            ";
            }
            // line 74
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["g"], "idNiveau", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "              <span class=\"badge badge-pill badge-light\">
                <i class=\"fa fa-bar-chart mr-1\" style=\"font-size:.7rem;\"></i>";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["g"], "idNiveau", [], "any", false, false, false, 76), "titre", [], "any", false, false, false, 76), "html", null, true);
                yield "
              </span>
            ";
            }
            // line 79
            yield "          </div>

          ";
            // line 82
            yield "          <div class=\"mb-2 px-2\">
            <div class=\"d-flex justify-content-between\" style=\"font-size:.78rem; color:#555; margin-bottom:4px;\">
              <span><i class=\"fa fa-users mr-1\"></i>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["memberCount"]) || array_key_exists("memberCount", $context) ? $context["memberCount"] : (function () { throw new RuntimeError('Variable "memberCount" does not exist.', 84, $this->source); })()), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "capacite", [], "any", false, false, false, 84), "html", null, true);
            yield " membres</span>
              <span>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["capPct"]) || array_key_exists("capPct", $context) ? $context["capPct"] : (function () { throw new RuntimeError('Variable "capPct" does not exist.', 85, $this->source); })()), "html", null, true);
            yield "%</span>
            </div>
            <div class=\"progress\" style=\"height:6px; border-radius:999px; background:rgba(0,0,0,.08);\">
              <div class=\"progress-bar ";
            // line 88
            yield (((($tmp = (isset($context["isFull"]) || array_key_exists("isFull", $context) ? $context["isFull"] : (function () { throw new RuntimeError('Variable "isFull" does not exist.', 88, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-danger") : (((((isset($context["capPct"]) || array_key_exists("capPct", $context) ? $context["capPct"] : (function () { throw new RuntimeError('Variable "capPct" does not exist.', 88, $this->source); })()) >= 75)) ? ("bg-warning") : ("bg-success"))));
            yield "\"
                   role=\"progressbar\"
                   style=\"width:";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["capPct"]) || array_key_exists("capPct", $context) ? $context["capPct"] : (function () { throw new RuntimeError('Variable "capPct" does not exist.', 90, $this->source); })()), "html", null, true);
            yield "%; border-radius:999px;\"
                   aria-valuenow=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["capPct"]) || array_key_exists("capPct", $context) ? $context["capPct"] : (function () { throw new RuntimeError('Variable "capPct" does not exist.', 91, $this->source); })()), "html", null, true);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
              </div>
            </div>
          </div>

          <p class=\"mb-3\" style=\"font-size:.9rem; color:#555;\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "description", [], "any", false, false, false, 96), "html", null, true);
            yield "</p>

          ";
            // line 99
            yield "          ";
            if (( !(isset($context["hasProgress"]) || array_key_exists("hasProgress", $context) ? $context["hasProgress"] : (function () { throw new RuntimeError('Variable "hasProgress" does not exist.', 99, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["g"], "IDLangue", [], "any", false, false, false, 99))) {
                // line 100
                yield "            <div class=\"alert alert-warning py-1 px-2 mb-2\" style=\"font-size:.78rem; border-radius:8px;\">
              <i class=\"fa fa-lock mr-1\"></i>
              Complétez le test de
              ";
                // line 103
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["g"], "idNiveau", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["g"], "idNiveau", [], "any", false, false, false, 103), "titre", [], "any", false, false, false, 103), "html", null, true);
                    yield "</strong>";
                }
                // line 104
                yield "              en <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["g"], "IDLangue", [], "any", false, false, false, 104), "nom", [], "any", false, false, false, 104), "html", null, true);
                yield "</strong> pour débloquer ce groupe
            </div>
          ";
            }
            // line 107
            yield "
          ";
            // line 108
            if ((($tmp = (isset($context["isMember"]) || array_key_exists("isMember", $context) ? $context["isMember"] : (function () { throw new RuntimeError('Variable "isMember" does not exist.', 108, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "            <span class=\"badge badge-pill badge-primary mb-2 d-block\">
              <i class=\"fa fa-check mr-1\"></i>Vous êtes membre
            </span>
          ";
            }
            // line 113
            yield "
          ";
            // line 114
            if ((($tmp = (isset($context["canAccess"]) || array_key_exists("canAccess", $context) ? $context["canAccess"] : (function () { throw new RuntimeError('Variable "canAccess" does not exist.', 114, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 115
                yield "            <a class=\"btn btn-primary btn-sm\"
               href=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["g"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                yield "\">
              <i class=\"fa fa-sign-in mr-1\"></i> Ouvrir le groupe
            </a>
          ";
            } elseif ((            // line 119
(isset($context["isFull"]) || array_key_exists("isFull", $context) ? $context["isFull"] : (function () { throw new RuntimeError('Variable "isFull" does not exist.', 119, $this->source); })()) &&  !(isset($context["isMember"]) || array_key_exists("isMember", $context) ? $context["isMember"] : (function () { throw new RuntimeError('Variable "isMember" does not exist.', 119, $this->source); })()))) {
                // line 120
                yield "            <button class=\"btn btn-secondary btn-sm\" disabled title=\"Groupe complet\">
              <i class=\"fa fa-ban mr-1\"></i> Groupe complet
            </button>
          ";
            } else {
                // line 124
                yield "            <button class=\"btn btn-outline-secondary btn-sm\" disabled title=\"Langue requise\">
              <i class=\"fa fa-lock mr-1\"></i> Accès restreint
            </button>
          ";
            }
            // line 128
            yield "        </div>
      </div>
    </div>
  ";
            $context['_iterated'] = true;
        }
        // line 131
        if (!$context['_iterated']) {
            // line 132
            yield "    <div class=\"col-12\">
      <p>Aucun groupe.</p>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "</div>

        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 142
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

        // line 143
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
        return array (  397 => 143,  384 => 142,  369 => 136,  360 => 132,  358 => 131,  351 => 128,  345 => 124,  339 => 120,  337 => 119,  331 => 116,  328 => 115,  326 => 114,  323 => 113,  317 => 109,  315 => 108,  312 => 107,  305 => 104,  299 => 103,  294 => 100,  291 => 99,  286 => 96,  278 => 91,  274 => 90,  269 => 88,  263 => 85,  257 => 84,  253 => 82,  249 => 79,  243 => 76,  240 => 75,  237 => 74,  231 => 71,  228 => 70,  226 => 69,  223 => 68,  218 => 65,  214 => 63,  208 => 59,  206 => 58,  200 => 56,  194 => 51,  191 => 50,  188 => 49,  185 => 48,  182 => 47,  179 => 46,  176 => 45,  171 => 44,  167 => 42,  158 => 39,  154 => 37,  149 => 36,  140 => 33,  136 => 31,  131 => 30,  114 => 15,  104 => 8,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
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

          {# Flash messages from access-check redirects #}
          {% for msg in app.flashes('error') %}
            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\" style=\"border-radius:8px; margin-bottom:12px;\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              <i class=\"fa fa-lock mr-1\"></i> {{ msg }}
            </div>
          {% endfor %}
          {% for msg in app.flashes('success') %}
            <div class=\"alert alert-success alert-dismissible\" role=\"alert\" style=\"border-radius:8px; margin-bottom:12px;\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              {{ msg }}
            </div>
          {% endfor %}

            <div class=\"row\">
  {% for g in groupes %}
    {% set memberCount  = g.getIdUser().count() %}
    {% set capPct       = g.capacite > 0 ? ((memberCount / g.capacite) * 100)|round : 0 %}
    {% set isFull       = memberCount >= g.capacite %}
    {% set hasProgress  = g.id in unlockedGroupIds %}
    {% set isMember     = g.id in userGroupIds %}
    {% set canAccess    = hasProgress and (not isFull or isMember) %}

    <div class=\"col-md-4 d-flex align-items-stretch ftco-animate mb-4\">
      <div class=\"staff bg-white\" style=\"border-radius:10px; overflow:hidden; position:relative; width:100%;\">

        {# top accent strip: red if full, orange otherwise #}
        <div style=\"height:5px; background:{{ isFull ? '#e74c3c' : '#f96d00' }};\"></div>

        {% if isFull %}
          <div style=\"position:absolute; top:14px; right:12px;\">
            <span class=\"badge badge-danger\" style=\"font-size:.72rem; letter-spacing:.3px;\">COMPLET</span>
          </div>
        {% endif %}

        <div class=\"text pt-3 px-3 pb-4 text-center\">
          <h3 class=\"mb-1\">{{ g.nom }}</h3>

          {# language + level pills #}
          <div class=\"d-flex justify-content-center flex-wrap mb-2\" style=\"gap:6px;\">
            {% if g.IDLangue %}
              <span class=\"badge badge-pill badge-light\">
                <i class=\"fa fa-globe mr-1\"></i>{{ g.IDLangue.nom }}
              </span>
            {% endif %}
            {% if g.idNiveau %}
              <span class=\"badge badge-pill badge-light\">
                <i class=\"fa fa-bar-chart mr-1\" style=\"font-size:.7rem;\"></i>{{ g.idNiveau.titre }}
              </span>
            {% endif %}
          </div>

          {# capacity bar #}
          <div class=\"mb-2 px-2\">
            <div class=\"d-flex justify-content-between\" style=\"font-size:.78rem; color:#555; margin-bottom:4px;\">
              <span><i class=\"fa fa-users mr-1\"></i>{{ memberCount }} / {{ g.capacite }} membres</span>
              <span>{{ capPct }}%</span>
            </div>
            <div class=\"progress\" style=\"height:6px; border-radius:999px; background:rgba(0,0,0,.08);\">
              <div class=\"progress-bar {{ isFull ? 'bg-danger' : (capPct >= 75 ? 'bg-warning' : 'bg-success') }}\"
                   role=\"progressbar\"
                   style=\"width:{{ capPct }}%; border-radius:999px;\"
                   aria-valuenow=\"{{ capPct }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">
              </div>
            </div>
          </div>

          <p class=\"mb-3\" style=\"font-size:.9rem; color:#555;\">{{ g.description }}</p>

          {# access warning #}
          {% if not hasProgress and g.IDLangue %}
            <div class=\"alert alert-warning py-1 px-2 mb-2\" style=\"font-size:.78rem; border-radius:8px;\">
              <i class=\"fa fa-lock mr-1\"></i>
              Complétez le test de
              {% if g.idNiveau %}<strong>{{ g.idNiveau.titre }}</strong>{% endif %}
              en <strong>{{ g.IDLangue.nom }}</strong> pour débloquer ce groupe
            </div>
          {% endif %}

          {% if isMember %}
            <span class=\"badge badge-pill badge-primary mb-2 d-block\">
              <i class=\"fa fa-check mr-1\"></i>Vous êtes membre
            </span>
          {% endif %}

          {% if canAccess %}
            <a class=\"btn btn-primary btn-sm\"
               href=\"{{ path('app_groupe_details', {id: g.id}) }}\">
              <i class=\"fa fa-sign-in mr-1\"></i> Ouvrir le groupe
            </a>
          {% elseif isFull and not isMember %}
            <button class=\"btn btn-secondary btn-sm\" disabled title=\"Groupe complet\">
              <i class=\"fa fa-ban mr-1\"></i> Groupe complet
            </button>
          {% else %}
            <button class=\"btn btn-outline-secondary btn-sm\" disabled title=\"Langue requise\">
              <i class=\"fa fa-lock mr-1\"></i> Accès restreint
            </button>
          {% endif %}
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
{% endblock %}", "groupe/index.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\groupe\\index.html.twig");
    }
}
