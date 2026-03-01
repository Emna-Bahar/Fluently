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

/* login/index.html.twig */
class __TwigTemplate_e4fb7b25511d80a4708e8be1305948ae extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"keyword\" content=\"\">
    <meta name=\"author\" content=\"theme_ocean\">

    <title>Fluently || Login</title>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        yield "\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\">

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendors.min.css"), "html", null, true);
        yield "\">

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/theme.min.css"), "html", null, true);
        yield "\">
</head>

<body>

    ";
        // line 29
        $context["bg_image"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_k.jpg");
        // line 30
        yield "
    <main class=\"auth-minimal-wrapper\" style=\"background-image: url('";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bg_image"]) || array_key_exists("bg_image", $context) ? $context["bg_image"] : (function () { throw new RuntimeError('Variable "bg_image" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "'); background-size: cover; background-position: center;\">
        <div class=\"auth-minimal-inner\">
            <div class=\"minimal-card-wrapper\">
                <div class=\"card mb-4 mt-5 mx-4 mx-sm-0 position-relative\">
                    <div class=\"wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-0 start-50\">
                        <img src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-abbr.png"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid\">
                    </div>

                    <div class=\"card-body p-sm-5\">
                        <h2 class=\"fs-20 fw-bolder mb-4 text-center\">Login</h2>
                        <h4 class=\"fs-13 fw-bold mb-2 text-center\">Login to your account</h4>
                        <p class=\"fs-12 fw-medium text-muted text-center mb-4\">
                            Welcome back to <strong>Nelel</strong> web applications.
                        </p>

                        ";
        // line 47
        yield "                        

                        <form method=\"post\" action=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"w-100 mt-4 pt-2\">
    ";
        // line 50
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "        <div class=\"alert alert-danger alert-dismissible fade show mb-4\">
            ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })()), "messageKey", [], "any", false, false, false, 52), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })()), "messageData", [], "any", false, false, false, 52), "security"), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 55
        yield "
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

    <div class=\"mb-4\">
        <input type=\"email\"
               name=\"_username\"
               value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 61, $this->source); })()), "html", null, true);
        yield "\"
               class=\"form-control\"
               placeholder=\"Email or Username\"
               required>
               ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", ["error"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 66
            yield "    <div style=\"color:red; font-size:14px; margin-top:5px;\">
        ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "
    </div>

    <div class=\"mb-3\">
        <input type=\"password\"
               name=\"_password\"
               class=\"form-control\"
               placeholder=\"Password\"
               required>
    </div>

    <div class=\"form-check mb-3\">
        <input type=\"checkbox\"
               name=\"_remember_me\"
               class=\"form-check-input\">
        <label class=\"form-check-label\">Remember me</label>
    </div>
    <div class=\"mb-3 text-end\">
    <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\" class=\"fs-13 fw-medium text-primary\">
        Forgot Password?
    </a>
</div>

    <div class=\"mt-5\">
        <button type=\"submit\" class=\"btn btn-lg btn-primary w-100\">
            Login
        </button>
    </div>
</form>
</form>

<div class=\"mt-3\">
    <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google");
        yield "\" class=\"btn btn-lg btn-outline-danger w-100\">
        <img src=\"https://www.google.com/favicon.ico\" width=\"20\" style=\"margin-right:8px;\">
        Sign in with Google
    </a>
</div>

                        <div class=\"mt-5 text-muted text-center\">
                            <span>Don't have an account?</span>
                            <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"fw-bold\">Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Vendors JS -->
    <script src=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>

    <!-- App JS -->
    <script src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme-customizer-init.min.js"), "html", null, true);
        yield "\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/index.html.twig";
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
        return array (  239 => 123,  235 => 122,  229 => 119,  217 => 110,  206 => 102,  189 => 88,  169 => 70,  160 => 67,  157 => 66,  153 => 65,  146 => 61,  138 => 56,  135 => 55,  129 => 52,  126 => 51,  124 => 50,  120 => 49,  116 => 47,  103 => 36,  95 => 31,  92 => 30,  90 => 29,  82 => 24,  76 => 21,  70 => 18,  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"keyword\" content=\"\">
    <meta name=\"author\" content=\"theme_ocean\">

    <title>Fluently || Login</title>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('assets/images/favicon.ico') }}\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendors/css/vendors.min.css') }}\">

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/theme.min.css') }}\">
</head>

<body>

    {% set bg_image = asset('assets/images/bg_k.jpg') %}

    <main class=\"auth-minimal-wrapper\" style=\"background-image: url('{{ bg_image }}'); background-size: cover; background-position: center;\">
        <div class=\"auth-minimal-inner\">
            <div class=\"minimal-card-wrapper\">
                <div class=\"card mb-4 mt-5 mx-4 mx-sm-0 position-relative\">
                    <div class=\"wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-0 start-50\">
                        <img src=\"{{ asset('assets/images/logo-abbr.png') }}\" alt=\"\" class=\"img-fluid\">
                    </div>

                    <div class=\"card-body p-sm-5\">
                        <h2 class=\"fs-20 fw-bolder mb-4 text-center\">Login</h2>
                        <h4 class=\"fs-13 fw-bold mb-2 text-center\">Login to your account</h4>
                        <p class=\"fs-12 fw-medium text-muted text-center mb-4\">
                            Welcome back to <strong>Nelel</strong> web applications.
                        </p>

                        {# Flash error messages #}
                        

                        <form method=\"post\" action=\"{{ path('app_login') }}\" class=\"w-100 mt-4 pt-2\">
    {% if error %}
        <div class=\"alert alert-danger alert-dismissible fade show mb-4\">
            {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
    {% endif %}

    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

    <div class=\"mb-4\">
        <input type=\"email\"
               name=\"_username\"
               value=\"{{ last_username }}\"
               class=\"form-control\"
               placeholder=\"Email or Username\"
               required>
               {% for message in app.flashes('error') %}
    <div style=\"color:red; font-size:14px; margin-top:5px;\">
        {{ message }}
    </div>
{% endfor %}

    </div>

    <div class=\"mb-3\">
        <input type=\"password\"
               name=\"_password\"
               class=\"form-control\"
               placeholder=\"Password\"
               required>
    </div>

    <div class=\"form-check mb-3\">
        <input type=\"checkbox\"
               name=\"_remember_me\"
               class=\"form-check-input\">
        <label class=\"form-check-label\">Remember me</label>
    </div>
    <div class=\"mb-3 text-end\">
    <a href=\"{{ path('app_forgot_password') }}\" class=\"fs-13 fw-medium text-primary\">
        Forgot Password?
    </a>
</div>

    <div class=\"mt-5\">
        <button type=\"submit\" class=\"btn btn-lg btn-primary w-100\">
            Login
        </button>
    </div>
</form>
</form>

<div class=\"mt-3\">
    <a href=\"{{ path('connect_google') }}\" class=\"btn btn-lg btn-outline-danger w-100\">
        <img src=\"https://www.google.com/favicon.ico\" width=\"20\" style=\"margin-right:8px;\">
        Sign in with Google
    </a>
</div>

                        <div class=\"mt-5 text-muted text-center\">
                            <span>Don't have an account?</span>
                            <a href=\"{{ path('app_register') }}\" class=\"fw-bold\">Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Vendors JS -->
    <script src=\"{{ asset('assets/vendors/js/vendors.min.js') }}\"></script>

    <!-- App JS -->
    <script src=\"{{ asset('assets/js/common-init.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/theme-customizer-init.min.js') }}\"></script>

</body>
</html>", "login/index.html.twig", "C:\\Users\\MSI\\Desktop\\5idma\\Fluently\\templates\\login\\index.html.twig");
    }
}
