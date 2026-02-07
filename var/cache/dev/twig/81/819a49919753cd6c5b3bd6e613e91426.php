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
class __TwigTemplate_432d7a90ff9bba53cdbd01282f208e1b extends Template
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
        // line 58
        yield "    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                ";
        // line 62
        yield "                <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently Logo\" class=\"logo-img\">
                ";
        // line 64
        yield "                <span class=\"sr-only\">Fluently</span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>
            
            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item ";
        // line 72
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "request", [], "any", false, false, false, 72), "get", ["_route"], "method", false, false, false, 72) == "app_home")) ? ("active") : (""));
        yield "\">
                        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Accueil</a>
                    </li>
                    <li class=\"nav-item ";
        // line 75
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "get", ["_route"], "method", false, false, false, 75) == "app_langue_index")) ? ("active") : (""));
        yield "\">
                        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_index");
        yield "\" class=\"nav-link\">Langues</a>
                    </li>
                    
                    <li class=\"nav-item ";
        // line 79
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "request", [], "any", false, false, false, 79), "get", ["_route"], "method", false, false, false, 79) == "app_groupe")) ? ("active") : (""));
        yield "\">
                        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe");
        yield "\" class=\"nav-link\">Groupes</a>
                    </li>
                    <li class=\"nav-item ";
        // line 82
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "get", ["_route"], "method", false, false, false, 82) == "app_session")) ? ("active") : (""));
        yield "\">
                        <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session");
        yield "\" class=\"nav-link\">Sessions</a>
                    </li>
                    <li class=\"nav-item ";
        // line 85
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "get", ["_route"], "method", false, false, false, 85) == "app_objectif")) ? ("active") : (""));
        yield "\">
                        <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif");
        yield "\" class=\"nav-link\">Objectifs</a></li>
                ";
        // line 88
        yield "                    <li class=\"nav-item dropdown ml-lg-3\">
                        <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-user-circle mr-2\" style=\"font-size: 1.2rem;\"></i>
                            <span>Mon compte</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                            ";
        // line 95
        yield "                            <a class=\"dropdown-item\" href=\"#\">
                                ";
        // line 97
        yield "                                <i class=\"fa fa-user mr-2\"></i> Mon profil
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            ";
        // line 101
        yield "                            <a class=\"dropdown-item text-danger\" href=\"#\">
                                ";
        // line 103
        yield "                                <i class=\"fa fa-sign-out mr-2\"></i> Déconnexion
                            </a>
                        </div>
                    </li>
                    
                    ";
        // line 109
        yield "                    ";
        // line 121
        yield "                </ul>
            </div>
        </div>
    </nav>
    
    ";
        // line 127
        yield "    ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 128
        yield "    
    ";
        // line 130
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
        // line 164
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 180
        yield "</body>
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

    // line 127
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

    // line 164
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

        // line 165
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.stellar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.animateNumber.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-datepicker.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scrollax.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/google-map.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
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
        return array (  432 => 178,  428 => 177,  424 => 176,  420 => 175,  416 => 174,  412 => 173,  408 => 172,  404 => 171,  400 => 170,  396 => 169,  392 => 168,  388 => 167,  384 => 166,  379 => 165,  366 => 164,  344 => 127,  331 => 53,  327 => 52,  323 => 51,  319 => 50,  315 => 49,  311 => 48,  307 => 47,  303 => 46,  268 => 13,  255 => 12,  232 => 5,  220 => 180,  218 => 164,  182 => 130,  179 => 128,  176 => 127,  169 => 121,  167 => 109,  160 => 103,  157 => 101,  152 => 97,  149 => 95,  141 => 88,  137 => 86,  133 => 85,  128 => 83,  124 => 82,  119 => 80,  115 => 79,  109 => 76,  105 => 75,  100 => 73,  96 => 72,  86 => 64,  81 => 62,  77 => 60,  73 => 58,  69 => 55,  67 => 12,  57 => 5,  52 => 2,);
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
                    
                    <li class=\"nav-item {{ app.request.get('_route') == 'app_groupe' ? 'active' : '' }}\">
                        <a href=\"{{ path('app_groupe') }}\" class=\"nav-link\">Groupes</a>
                    </li>
                    <li class=\"nav-item {{ app.request.get('_route') == 'app_session' ? 'active' : '' }}\">
                        <a href=\"{{ path('app_session') }}\" class=\"nav-link\">Sessions</a>
                    </li>
                    <li class=\"nav-item {{ app.request.get('_route') == 'app_objectif' ? 'active' : '' }}\">
                        <a href=\"{{ path('app_objectif') }}\" class=\"nav-link\">Objectifs</a></li>
                {# Boutons utilisateur #}
                    <li class=\"nav-item dropdown ml-lg-3\">
                        <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-user-circle mr-2\" style=\"font-size: 1.2rem;\"></i>
                            <span>Mon compte</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                            {# Bouton Profil #}
                            <a class=\"dropdown-item\" href=\"#\">
                                {# <a class=\"dropdown-item\" href=\"{{ path('app_profile') }}\"> #}
                                <i class=\"fa fa-user mr-2\"></i> Mon profil
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            {# Bouton Déconnexion #}
                            <a class=\"dropdown-item text-danger\" href=\"#\">
                                {# <a class=\"dropdown-item text-danger\" href=\"{{ path('app_logout') }}\"> #}
                                <i class=\"fa fa-sign-out mr-2\"></i> Déconnexion
                            </a>
                        </div>
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
</body>
</html>", "base.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\base.html.twig");
    }
}
