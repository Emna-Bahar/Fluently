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
class __TwigTemplate_4495799a3f3d14189cdf5f5b84c81881 extends Template
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
        // line 59
        yield "    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                ";
        // line 63
        yield "                <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently Logo\" class=\"logo-img\">
                ";
        // line 65
        yield "                <span class=\"sr-only\">Fluently</span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>
            
            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                   <li class=\"nav-item ";
        // line 73
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "get", ["_route"], "method", false, false, false, 73) == "app_home")) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Accueil</a>
</li>

<li class=\"nav-item ";
        // line 77
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77), "get", ["_route"], "method", false, false, false, 77) == "app_langue_index")) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_index");
        yield "\" class=\"nav-link\">Langues</a>
</li>

";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "session", [], "any", false, false, false, 81), "get", ["user_role"], "method", false, false, false, 81) == "prof")) {
            // line 82
            yield "    <li class=\"nav-item ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "get", ["_route"], "method", false, false, false, 82) == "app_groupe")) ? ("active") : (""));
            yield "\">
        <a href=\"";
            // line 83
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe");
            yield "\" class=\"nav-link\">Groupes</a>
    </li>
    <li class=\"nav-item ";
            // line 85
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "get", ["_route"], "method", false, false, false, 85) == "app_session")) ? ("active") : (""));
            yield "\">
        <a href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
            yield "\" class=\"nav-link\">Sessions</a>
    </li>
";
        } else {
            // line 89
            yield "    <li class=\"nav-item ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "get", ["_route"], "method", false, false, false, 89) == "app_groupe")) ? ("active") : (""));
            yield "\">
        <a href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe");
            yield "\" class=\"nav-link\">Groupes</a>
    </li>
    <li class=\"nav-item ";
            // line 92
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "get", ["_route"], "method", false, false, false, 92) == "app_session")) ? ("active") : (""));
            yield "\">
        <a href=\"";
            // line 93
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
            yield "\" class=\"nav-link\">Sessions</a>
    </li>
    <li class=\"nav-item ";
            // line 95
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "get", ["_route"], "method", false, false, false, 95) == "app_objectif")) ? ("active") : (""));
            yield "\">
        <a href=\"";
            // line 96
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
            yield "\" class=\"nav-link\">Objectifs</a>
    </li>
";
        }
        // line 99
        yield "
                ";
        // line 102
        yield "<li class=\"nav-item dropdown ml-lg-3\">
    ";
        // line 103
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "session", [], "any", false, false, false, 103), "get", ["user_id"], "method", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "        <a class=\"nav-link dropdown-toggle d-flex align-items-center\"
           href=\"#\"
           id=\"userDropdown\"
           role=\"button\"
           data-toggle=\"dropdown\">

            <i class=\"fa fa-user-circle mr-2\" style=\"font-size:1.2rem;\"></i>
            <span>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "session", [], "any", false, false, false, 111), "get", ["user_name"], "method", false, false, false, 111), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "session", [], "any", false, false, false, 111), "get", ["user_status"], "method", false, false, false, 111), "html", null, true);
            yield ")</span>
        </a>

        <div class=\"dropdown-menu dropdown-menu-right\">
            <a class=\"dropdown-item\" href=\"";
            // line 115
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">
    <i class=\"fa fa-user mr-2\"></i> Mon profil
</a>


            <div class=\"dropdown-divider\"></div>

            <a class=\"dropdown-item text-danger\" href=\"";
            // line 122
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
    <i class=\"fa fa-sign-out mr-2\"></i> Déconnexion
</a>

        </div>

    ";
        } else {
            // line 129
            yield "        <a class=\"nav-link d-flex align-items-center\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
            <i class=\"fa fa-user-circle mr-2\" style=\"font-size:1.2rem;\"></i>
            <span>Se connecter</span>
        </a>
    ";
        }
        // line 134
        yield "</li>



                    
                    ";
        // line 140
        yield "                    ";
        // line 152
        yield "                </ul>
            </div>
        </div>
    </nav>
    
    ";
        // line 158
        yield "    ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 159
        yield "    
    ";
        // line 161
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
        // line 195
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 211
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 229
        yield "
</body>
</html>";
        
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

    // line 158
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

    // line 195
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

        // line 196
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.stellar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.animateNumber.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-datepicker.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scrollax.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/google-map.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 211
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

        // line 212
        yield "   <script>
function logoutUser(event) {
    event.preventDefault();

    fetch('/logout-ajax')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();   // refresh navbar state
            }
        });
}

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
        return array (  526 => 212,  513 => 211,  500 => 209,  496 => 208,  492 => 207,  488 => 206,  484 => 205,  480 => 204,  476 => 203,  472 => 202,  468 => 201,  464 => 200,  460 => 199,  456 => 198,  452 => 197,  447 => 196,  434 => 195,  412 => 158,  399 => 53,  395 => 52,  391 => 51,  387 => 50,  383 => 49,  379 => 48,  375 => 47,  371 => 46,  336 => 13,  323 => 12,  300 => 5,  287 => 229,  284 => 211,  282 => 195,  246 => 161,  243 => 159,  240 => 158,  233 => 152,  231 => 140,  224 => 134,  215 => 129,  205 => 122,  195 => 115,  186 => 111,  177 => 104,  175 => 103,  172 => 102,  169 => 99,  163 => 96,  159 => 95,  154 => 93,  150 => 92,  145 => 90,  140 => 89,  134 => 86,  130 => 85,  125 => 83,  120 => 82,  118 => 81,  112 => 78,  108 => 77,  102 => 74,  98 => 73,  88 => 65,  83 => 63,  79 => 61,  75 => 59,  70 => 55,  68 => 12,  58 => 5,  53 => 2,);
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

{% if app.session.get('user_role') == 'prof' %}
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
    {% if app.session.get('user_id') %}
        <a class=\"nav-link dropdown-toggle d-flex align-items-center\"
           href=\"#\"
           id=\"userDropdown\"
           role=\"button\"
           data-toggle=\"dropdown\">

            <i class=\"fa fa-user-circle mr-2\" style=\"font-size:1.2rem;\"></i>
            <span>{{ app.session.get('user_name') }} ({{ app.session.get('user_status') }})</span>
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
   <script>
function logoutUser(event) {
    event.preventDefault();

    fetch('/logout-ajax')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();   // refresh navbar state
            }
        });
}

</script>


{% endblock %}

</body>
</html>", "base.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\base.html.twig");
    }
}
