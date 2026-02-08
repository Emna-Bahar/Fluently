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

/* register/index.html.twig */
class __TwigTemplate_355f02a427c15a1d82dd19214aa6c36a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

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

    <title>Duralux || Register Minimal</title>

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
                        <h2 class=\"fs-20 fw-bolder mb-4\">Register</h2>
                        <h4 class=\"fs-13 fw-bold mb-2\">Manage all your Duralux crm</h4>
                        <p class=\"fs-12 fw-medium text-muted\">
                            Let's get you all setup, so you can verify your personal account and begin setting up your profile.
                        </p>

                        ";
        // line 47
        yield "                        ";
        $context["error_messages"] = ["error_full_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "session", [], "any", false, false, false, 48), "get", ["error_full_name"], "method", false, false, false, 48), "error_email" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "session", [], "any", false, false, false, 49), "get", ["error_email"], "method", false, false, false, 49), "error_username" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "session", [], "any", false, false, false, 50), "get", ["error_username"], "method", false, false, false, 50), "error_password" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "session", [], "any", false, false, false, 51), "get", ["error_password"], "method", false, false, false, 51), "error_password_confirm" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "session", [], "any", false, false, false, 52), "get", ["error_password_confirm"], "method", false, false, false, 52), "error_receiveMail" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 53
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "get", ["error_receiveMail"], "method", false, false, false, 53), "error_termsCondition" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 54
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "session", [], "any", false, false, false, 54), "get", ["error_termsCondition"], "method", false, false, false, 54)];
        // line 56
        yield "                        
                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["error_messages"]) || array_key_exists("error_messages", $context) ? $context["error_messages"] : (function () { throw new RuntimeError('Variable "error_messages" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 58
            yield "                            ";
            if ((($tmp = $context["message"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "                                <div class=\"alert alert-danger alert-dismissible fade show mb-4\" role=\"alert\">
                                    ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            ";
            }
            // line 64
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "
                        <form method=\"post\" class=\"w-100 mt-4 pt-2\" novalidate>
                            <div class=\"mb-4\">
                                <input type=\"text\" class=\"form-control ";
        // line 68
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "session", [], "any", false, false, false, 68), "get", ["error_full_name"], "method", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" 
                                       placeholder=\"Full Name\" name=\"full_name\" 
                                       value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "request", [], "any", false, false, false, 70), "get", ["full_name", ""], "method", false, false, false, 70), "html", null, true);
        yield "\" 
                                       required>
                            </div>

                            <div class=\"mb-4\">
                                <input type=\"email\" class=\"form-control ";
        // line 75
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "session", [], "any", false, false, false, 75), "get", ["error_email"], "method", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" 
                                       placeholder=\"Email\" name=\"email\" 
                                       value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77), "request", [], "any", false, false, false, 77), "get", ["email", ""], "method", false, false, false, 77), "html", null, true);
        yield "\" 
                                       required>
                            </div>
                            <div class=\"mb-4\">
    <select class=\"form-control\" name=\"role\" required>
        <option value=\"\">Choose role</option>
        <option value=\"etudiant\">Étudiant</option>
        <option value=\"prof\">Prof</option>
        <option value=\"admin\">Admin</option>
    </select>
</div>


                            <div class=\"mb-4\">
                                <input type=\"text\" class=\"form-control ";
        // line 91
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "session", [], "any", false, false, false, 91), "get", ["error_username"], "method", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" 
                                       placeholder=\"Username\" name=\"username\" 
                                       value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "request", [], "any", false, false, false, 93), "request", [], "any", false, false, false, 93), "get", ["username", ""], "method", false, false, false, 93), "html", null, true);
        yield "\" 
                                       required>
                            </div>

                            <div class=\"mb-4 generate-pass\">
                                <div class=\"input-group field\">
                                    <input type=\"password\" class=\"form-control password ";
        // line 99
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "session", [], "any", false, false, false, 99), "get", ["error_password"], "method", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" 
                                           placeholder=\"Password\" name=\"password\" required>
                                    <div class=\"input-group-text c-pointer gen-pass\">
                                        <i class=\"feather-hash\"></i>
                                    </div>
                                    <div class=\"input-group-text border-start bg-gray-2 c-pointer show-pass\">
                                        <i></i>
                                    </div>
                                </div>
                                <div class=\"progress-bar mt-2\">
                                    <div></div><div></div><div></div><div></div>
                                </div>
                            </div>

                            <div class=\"mb-4\">
                                <input type=\"password\" class=\"form-control ";
        // line 114
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "session", [], "any", false, false, false, 114), "get", ["error_password_confirm"], "method", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" 
                                       placeholder=\"Password again\" name=\"password_confirm\" required>
                            </div>

                            <div class=\"mt-4\">
                                <div class=\"custom-control custom-checkbox mb-2\">
                                    <input type=\"checkbox\" class=\"custom-control-input ";
        // line 120
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "session", [], "any", false, false, false, 120), "get", ["error_receiveMail"], "method", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" 
                                           id=\"receiveMail\" name=\"receiveMail\" 
                                           ";
        // line 122
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "request", [], "any", false, false, false, 122), "request", [], "any", false, false, false, 122), "get", ["receiveMail"], "method", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "checked";
        }
        yield " 
                                           required>
                                    <label class=\"custom-control-label text-muted\" for=\"receiveMail\">
                                        Yes, I want to receive Duralux community emails
                                    </label>
                                </div>

                                <div class=\"custom-control custom-checkbox\">
                                    <input type=\"checkbox\" class=\"custom-control-input ";
        // line 130
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "session", [], "any", false, false, false, 130), "get", ["error_termsCondition"], "method", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" 
                                           id=\"termsCondition\" name=\"termsCondition\" 
                                           ";
        // line 132
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "request", [], "any", false, false, false, 132), "get", ["termsCondition"], "method", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "checked";
        }
        yield " 
                                           required>
                                    <label class=\"custom-control-label text-muted\" for=\"termsCondition\">
                                        I agree to all the <a href=\"#\">Terms & Conditions</a> and <a href=\"#\">Fees</a>.
                                    </label>
                                </div>
                            </div>

                            <div class=\"mt-5\">
                                <button type=\"submit\" class=\"btn btn-lg btn-primary w-100\">
                                    Create Account
                                </button>
                            </div>
                        </form>

                        <div class=\"mt-5 text-muted\">
                            <span>Already have an account?</span>
                            <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"fw-bold\">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Vendors JS -->
    <script src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/lslstrength.min.js"), "html", null, true);
        yield "\"></script>

    <!-- App JS -->
    <script src=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 163
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
        return "register/index.html.twig";
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
        return array (  318 => 163,  314 => 162,  308 => 159,  304 => 158,  292 => 149,  270 => 132,  263 => 130,  250 => 122,  243 => 120,  232 => 114,  212 => 99,  203 => 93,  196 => 91,  179 => 77,  172 => 75,  164 => 70,  157 => 68,  152 => 65,  146 => 64,  139 => 60,  136 => 59,  133 => 58,  129 => 57,  126 => 56,  124 => 54,  123 => 53,  122 => 52,  121 => 51,  120 => 50,  119 => 49,  118 => 48,  116 => 47,  103 => 36,  95 => 31,  92 => 30,  90 => 29,  82 => 24,  76 => 21,  70 => 18,  64 => 15,  48 => 1,);
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

    <title>Duralux || Register Minimal</title>

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
                        <h2 class=\"fs-20 fw-bolder mb-4\">Register</h2>
                        <h4 class=\"fs-13 fw-bold mb-2\">Manage all your Duralux crm</h4>
                        <p class=\"fs-12 fw-medium text-muted\">
                            Let's get you all setup, so you can verify your personal account and begin setting up your profile.
                        </p>

                        {# Message d'erreur unique #}
                        {% set error_messages = {
                            'error_full_name': app.session.get('error_full_name'),
                            'error_email': app.session.get('error_email'),
                            'error_username': app.session.get('error_username'),
                            'error_password': app.session.get('error_password'),
                            'error_password_confirm': app.session.get('error_password_confirm'),
                            'error_receiveMail': app.session.get('error_receiveMail'),
                            'error_termsCondition': app.session.get('error_termsCondition')
                        } %}
                        
                        {% for key, message in error_messages %}
                            {% if message %}
                                <div class=\"alert alert-danger alert-dismissible fade show mb-4\" role=\"alert\">
                                    {{ message }}
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            {% endif %}
                        {% endfor %}

                        <form method=\"post\" class=\"w-100 mt-4 pt-2\" novalidate>
                            <div class=\"mb-4\">
                                <input type=\"text\" class=\"form-control {% if app.session.get('error_full_name') %}is-invalid{% endif %}\" 
                                       placeholder=\"Full Name\" name=\"full_name\" 
                                       value=\"{{ app.request.request.get('full_name', '') }}\" 
                                       required>
                            </div>

                            <div class=\"mb-4\">
                                <input type=\"email\" class=\"form-control {% if app.session.get('error_email') %}is-invalid{% endif %}\" 
                                       placeholder=\"Email\" name=\"email\" 
                                       value=\"{{ app.request.request.get('email', '') }}\" 
                                       required>
                            </div>
                            <div class=\"mb-4\">
    <select class=\"form-control\" name=\"role\" required>
        <option value=\"\">Choose role</option>
        <option value=\"etudiant\">Étudiant</option>
        <option value=\"prof\">Prof</option>
        <option value=\"admin\">Admin</option>
    </select>
</div>


                            <div class=\"mb-4\">
                                <input type=\"text\" class=\"form-control {% if app.session.get('error_username') %}is-invalid{% endif %}\" 
                                       placeholder=\"Username\" name=\"username\" 
                                       value=\"{{ app.request.request.get('username', '') }}\" 
                                       required>
                            </div>

                            <div class=\"mb-4 generate-pass\">
                                <div class=\"input-group field\">
                                    <input type=\"password\" class=\"form-control password {% if app.session.get('error_password') %}is-invalid{% endif %}\" 
                                           placeholder=\"Password\" name=\"password\" required>
                                    <div class=\"input-group-text c-pointer gen-pass\">
                                        <i class=\"feather-hash\"></i>
                                    </div>
                                    <div class=\"input-group-text border-start bg-gray-2 c-pointer show-pass\">
                                        <i></i>
                                    </div>
                                </div>
                                <div class=\"progress-bar mt-2\">
                                    <div></div><div></div><div></div><div></div>
                                </div>
                            </div>

                            <div class=\"mb-4\">
                                <input type=\"password\" class=\"form-control {% if app.session.get('error_password_confirm') %}is-invalid{% endif %}\" 
                                       placeholder=\"Password again\" name=\"password_confirm\" required>
                            </div>

                            <div class=\"mt-4\">
                                <div class=\"custom-control custom-checkbox mb-2\">
                                    <input type=\"checkbox\" class=\"custom-control-input {% if app.session.get('error_receiveMail') %}is-invalid{% endif %}\" 
                                           id=\"receiveMail\" name=\"receiveMail\" 
                                           {% if app.request.request.get('receiveMail') %}checked{% endif %} 
                                           required>
                                    <label class=\"custom-control-label text-muted\" for=\"receiveMail\">
                                        Yes, I want to receive Duralux community emails
                                    </label>
                                </div>

                                <div class=\"custom-control custom-checkbox\">
                                    <input type=\"checkbox\" class=\"custom-control-input {% if app.session.get('error_termsCondition') %}is-invalid{% endif %}\" 
                                           id=\"termsCondition\" name=\"termsCondition\" 
                                           {% if app.request.request.get('termsCondition') %}checked{% endif %} 
                                           required>
                                    <label class=\"custom-control-label text-muted\" for=\"termsCondition\">
                                        I agree to all the <a href=\"#\">Terms & Conditions</a> and <a href=\"#\">Fees</a>.
                                    </label>
                                </div>
                            </div>

                            <div class=\"mt-5\">
                                <button type=\"submit\" class=\"btn btn-lg btn-primary w-100\">
                                    Create Account
                                </button>
                            </div>
                        </form>

                        <div class=\"mt-5 text-muted\">
                            <span>Already have an account?</span>
                            <a href=\"{{ path('app_login') }}\" class=\"fw-bold\">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Vendors JS -->
    <script src=\"{{ asset('assets/vendors/js/vendors.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendors/js/lslstrength.min.js') }}\"></script>

    <!-- App JS -->
    <script src=\"{{ asset('assets/js/common-init.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/theme-customizer-init.min.js') }}\"></script>

</body>
</html>", "register/index.html.twig", "C:\\Users\\MSI\\Downloads\\Fluently\\Fluently\\templates\\register\\index.html.twig");
    }
}
