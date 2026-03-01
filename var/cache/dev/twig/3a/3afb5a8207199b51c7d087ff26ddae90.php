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

/* base.html.twig */
class __TwigTemplate_3aaad79e349c3b996507c6124353e5c3 extends Template
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
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

    ";
        // line 12
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 55
        yield "</head>
<body>
";
        // line 57
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "    ";
            $context["user_role"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "roles", [], "any", false, false, false, 58), 0, [], "array", false, false, false, 58);
        } else {
            // line 60
            yield "    ";
            $context["user_role"] = null;
        }
        // line 62
        yield "
    ";
        // line 64
        yield "    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                ";
        // line 68
        yield "                <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently Logo\" class=\"logo-img\">
                ";
        // line 70
        yield "                <span class=\"sr-only\">Fluently</span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>
            
            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                   <li class=\"nav-item ";
        // line 78
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "get", ["_route"], "method", false, false, false, 78) == "app_home")) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Accueil</a>
</li>

<li class=\"nav-item ";
        // line 82
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "get", ["_route"], "method", false, false, false, 82) == "app_langue_index")) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_index");
        yield "\" class=\"nav-link\">Langues</a>
</li>

";
        // line 86
        if (((isset($context["user_role"]) || array_key_exists("user_role", $context) ? $context["user_role"] : (function () { throw new RuntimeError('Variable "user_role" does not exist.', 86, $this->source); })()) == "ROLE_PROF")) {
            // line 87
            yield "
    <li class=\"nav-item ";
            // line 88
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "get", ["_route"], "method", false, false, false, 88) == "app_groupe")) ? ("active") : (""));
            yield "\">
        <a href=\"";
            // line 89
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe");
            yield "\" class=\"nav-link\">Groupes</a>
    </li>
    <li class=\"nav-item ";
            // line 91
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "request", [], "any", false, false, false, 91), "get", ["_route"], "method", false, false, false, 91) == "app_session")) ? ("active") : (""));
            yield "\">
        <a href=\"";
            // line 92
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
            yield "\" class=\"nav-link\">Sessions</a>
    </li>
";
        } else {
            // line 95
            yield "    <li class=\"nav-item ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "get", ["_route"], "method", false, false, false, 95) == "app_groupe")) ? ("active") : (""));
            yield "\">
        <a href=\"";
            // line 96
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe");
            yield "\" class=\"nav-link\">Groupes</a>
    </li>
    <li class=\"nav-item ";
            // line 98
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "request", [], "any", false, false, false, 98), "get", ["_route"], "method", false, false, false, 98) == "app_session")) ? ("active") : (""));
            yield "\">
        <a href=\"";
            // line 99
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
            yield "\" class=\"nav-link\">Sessions</a>
    </li>
    <li class=\"nav-item ";
            // line 101
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "request", [], "any", false, false, false, 101), "get", ["_route"], "method", false, false, false, 101) == "app_objectif")) ? ("active") : (""));
            yield "\">
        <a href=\"";
            // line 102
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
            yield "\" class=\"nav-link\">Objectifs</a>
    </li>
";
        }
        // line 105
        yield "
                ";
        // line 108
        yield "<li class=\"nav-item dropdown ml-lg-3\">
    ";
        // line 109
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 110
            yield "
        <a class=\"nav-link dropdown-toggle d-flex align-items-center\"
           href=\"#\"
           id=\"userDropdown\"
           role=\"button\"
           data-toggle=\"dropdown\">

            <i class=\"fa fa-user-circle mr-2\" style=\"font-size:1.2rem;\"></i>
           <span>
    ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "nom", [], "any", false, false, false, 119), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "prenom", [], "any", false, false, false, 119), "html", null, true);
            yield "
    (";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "statut", [], "any", false, false, false, 120), "html", null, true);
            yield ")
</span>

        </a>

        <div class=\"dropdown-menu dropdown-menu-right\">
            <a class=\"dropdown-item\" href=\"";
            // line 126
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">
    <i class=\"fa fa-user mr-2\"></i> Mon profil
</a>


            <div class=\"dropdown-divider\"></div>

            <a class=\"dropdown-item text-danger\" href=\"";
            // line 133
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
    <i class=\"fa fa-sign-out mr-2\"></i> Déconnexion
</a>

        </div>

    ";
        } else {
            // line 140
            yield "        <a class=\"nav-link d-flex align-items-center\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
            <i class=\"fa fa-user-circle mr-2\" style=\"font-size:1.2rem;\"></i>
            <span>Se connecter</span>
        </a>
    ";
        }
        // line 145
        yield "</li>



                    
                    ";
        // line 151
        yield "                    ";
        // line 163
        yield "                </ul>
            </div>
        </div>
    </nav>
    
    ";
        // line 169
        yield "    ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 170
        yield "    
    ";
        // line 172
        yield "    <footer class=\"ftco-footer ftco-no-pt\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md pt-5\">
                    <div class=\"ftco-footer-widget pt-md-5 mb-4\">
                        <h2 class=\"ftco-heading-2\">About Fluently</h2>
                        <p>Online language learning platform that helps you master new languages through interactive courses and live sessions.</p>
                        <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft\">
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-instagram\"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md pt-5\">
                    <div class=\"ftco-footer-widget pt-md-5 mb-4\">
                        <h2 class=\"ftco-heading-2\">Popular Languages</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\" class=\"py-2 d-block\">English</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">French</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Spanish</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Fluently - Language Learning Platform</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- loader -->
    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>
    
    ";
        // line 206
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 222
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 227
        yield "
</body>
</html>   ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Fluently - Apprentissage de langues";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "    <style>
    /* Styles spécifiques pour le logo */
    .navbar-brand {
        display: flex;
        align-items: center;
        padding: 0;
        margin: 0;
        background: none !important; /* Important: enlève le dégradé */
    }
    
    .logo-img {
        height: 150px; /* Ajustez selon vos besoins */
        width: auto;
        padding: 0;
        margin: 0;
        border-radius: 0;
        background: transparent !important;
    }
    
    /* Ajustement du padding pour la navbar */
    @media (max-width: 991.98px) {
        .navbar-brand {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }
    }
    
    /* Pour la navbar en mode scrolled */
    .ftco-navbar-light.scrolled .navbar-brand {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.theme.default.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/magnific-popup.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-datepicker.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery.timepicker.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flaticon.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 169
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 206
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

        // line 207
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.stellar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.animateNumber.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-datepicker.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scrollax.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/google-map.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 222
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 223
        yield "


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
        return "base.html.twig";
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
        return array (  548 => 223,  535 => 222,  522 => 220,  518 => 219,  514 => 218,  510 => 217,  506 => 216,  502 => 215,  498 => 214,  494 => 213,  490 => 212,  486 => 211,  482 => 210,  478 => 209,  474 => 208,  469 => 207,  456 => 206,  434 => 169,  421 => 53,  417 => 52,  413 => 51,  409 => 50,  405 => 49,  401 => 48,  397 => 47,  393 => 46,  358 => 13,  345 => 12,  322 => 5,  309 => 227,  306 => 222,  304 => 206,  268 => 172,  265 => 170,  262 => 169,  255 => 163,  253 => 151,  246 => 145,  237 => 140,  227 => 133,  217 => 126,  208 => 120,  202 => 119,  191 => 110,  189 => 109,  186 => 108,  183 => 105,  177 => 102,  173 => 101,  168 => 99,  164 => 98,  159 => 96,  154 => 95,  148 => 92,  144 => 91,  139 => 89,  135 => 88,  132 => 87,  130 => 86,  124 => 83,  120 => 82,  114 => 79,  110 => 78,  100 => 70,  95 => 68,  91 => 66,  87 => 64,  84 => 62,  80 => 60,  76 => 58,  74 => 57,  70 => 55,  68 => 12,  58 => 5,  53 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/base.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>{% block title %}Fluently - Apprentissage de langues{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

    {% block css %}
    <style>
    /* Styles spécifiques pour le logo */
    .navbar-brand {
        display: flex;
        align-items: center;
        padding: 0;
        margin: 0;
        background: none !important; /* Important: enlève le dégradé */
    }
    
    .logo-img {
        height: 150px; /* Ajustez selon vos besoins */
        width: auto;
        padding: 0;
        margin: 0;
        border-radius: 0;
        background: transparent !important;
    }
    
    /* Ajustement du padding pour la navbar */
    @media (max-width: 991.98px) {
        .navbar-brand {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }
    }
    
    /* Pour la navbar en mode scrolled */
    .ftco-navbar-light.scrolled .navbar-brand {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    </style>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap-datepicker.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/jquery.timepicker.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    {% endblock %}
</head>
<body>
{% if app.user %}
    {% set user_role = app.user.roles[0] %}
{% else %}
    {% set user_role = null %}
{% endif %}

    {# Navigation #}
    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
                {# Remplacement du texte par l'image #}
                <img src=\"{{ asset('assets/images/fluently.png') }}\" alt=\"Fluently Logo\" class=\"logo-img\">
                {# Optionnel: garder le texte en span pour le référencement, mais le cacher visuellement #}
                <span class=\"sr-only\">Fluently</span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>
            
            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                   <li class=\"nav-item {{ app.request.get('_route') == 'app_home' ? 'active' : '' }}\">
    <a href=\"{{ path('app_home') }}\" class=\"nav-link\">Accueil</a>
</li>

<li class=\"nav-item {{ app.request.get('_route') == 'app_langue_index' ? 'active' : '' }}\">
    <a href=\"{{ path('app_langue_index') }}\" class=\"nav-link\">Langues</a>
</li>

{% if user_role == 'ROLE_PROF' %}

    <li class=\"nav-item {{ app.request.get('_route') == 'app_groupe' ? 'active' : '' }}\">
        <a href=\"{{ path('app_groupe') }}\" class=\"nav-link\">Groupes</a>
    </li>
    <li class=\"nav-item {{ app.request.get('_route') == 'app_session' ? 'active' : '' }}\">
        <a href=\"{{ path('app_session_index') }}\" class=\"nav-link\">Sessions</a>
    </li>
{% else %}
    <li class=\"nav-item {{ app.request.get('_route') == 'app_groupe' ? 'active' : '' }}\">
        <a href=\"{{ path('app_groupe') }}\" class=\"nav-link\">Groupes</a>
    </li>
    <li class=\"nav-item {{ app.request.get('_route') == 'app_session' ? 'active' : '' }}\">
        <a href=\"{{ path('app_session_index') }}\" class=\"nav-link\">Sessions</a>
    </li>
    <li class=\"nav-item {{ app.request.get('_route') == 'app_objectif' ? 'active' : '' }}\">
        <a href=\"{{ path('app_objectif_index') }}\" class=\"nav-link\">Objectifs</a>
    </li>
{% endif %}

                {# Boutons utilisateur #}
{# Boutons utilisateur #}
<li class=\"nav-item dropdown ml-lg-3\">
    {% if app.user %}

        <a class=\"nav-link dropdown-toggle d-flex align-items-center\"
           href=\"#\"
           id=\"userDropdown\"
           role=\"button\"
           data-toggle=\"dropdown\">

            <i class=\"fa fa-user-circle mr-2\" style=\"font-size:1.2rem;\"></i>
           <span>
    {{ app.user.nom }} {{ app.user.prenom }}
    ({{ app.user.statut }})
</span>

        </a>

        <div class=\"dropdown-menu dropdown-menu-right\">
            <a class=\"dropdown-item\" href=\"{{ path('app_profile') }}\">
    <i class=\"fa fa-user mr-2\"></i> Mon profil
</a>


            <div class=\"dropdown-divider\"></div>

            <a class=\"dropdown-item text-danger\" href=\"{{ path('app_logout') }}\">
    <i class=\"fa fa-sign-out mr-2\"></i> Déconnexion
</a>

        </div>

    {% else %}
        <a class=\"nav-link d-flex align-items-center\" href=\"{{ path('app_login') }}\">
            <i class=\"fa fa-user-circle mr-2\" style=\"font-size:1.2rem;\"></i>
            <span>Se connecter</span>
        </a>
    {% endif %}
</li>



                    
                    {# Version alternative avec boutons séparés (sans dropdown) #}
                    {#
                    <li class=\"nav-item ml-lg-2\">
                        <a class=\"nav-link btn btn-outline-light btn-sm py-1 px-3\" href=\"#\">
                            <i class=\"fa fa-user mr-1\"></i> Profil
                        </a>
                    </li>
                    <li class=\"nav-item ml-lg-2\">
                        <a class=\"nav-link btn btn-danger btn-sm py-1 px-3 text-white\" href=\"#\">
                            <i class=\"fa fa-sign-out mr-1\"></i> Déconnexion
                        </a>
                    </li>
                    #}
                </ul>
            </div>
        </div>
    </nav>
    
    {# Contenu principal - SERA REMPLI PAR LES TEMPLATES ENFANTS #}
    {% block body %}{% endblock %}
    
    {# Footer #}
    <footer class=\"ftco-footer ftco-no-pt\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md pt-5\">
                    <div class=\"ftco-footer-widget pt-md-5 mb-4\">
                        <h2 class=\"ftco-heading-2\">About Fluently</h2>
                        <p>Online language learning platform that helps you master new languages through interactive courses and live sessions.</p>
                        <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft\">
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-instagram\"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md pt-5\">
                    <div class=\"ftco-footer-widget pt-md-5 mb-4\">
                        <h2 class=\"ftco-heading-2\">Popular Languages</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\" class=\"py-2 d-block\">English</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">French</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Spanish</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Fluently - Language Learning Platform</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- loader -->
    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>
    
    {% block js %}
    <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.easing.1.3.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.stellar.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.animateNumber.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap-datepicker.js') }}\"></script>
    <script src=\"{{ asset('assets/js/scrollax.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/google-map.js') }}\"></script>
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>
    {% endblock %}
    {% block javascripts %}



{% endblock %}

</body>
</html>   ", "base.html.twig", "C:\\Users\\MSI\\Desktop\\5idma\\Fluently\\templates\\base.html.twig");
    }
}
