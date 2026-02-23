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
class __TwigTemplate_890b5b997eb07efc9e238f1adb6c895d extends Template
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

    <title>Fluently || Register Minimal</title>

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
                    <h4 class=\"fs-13 fw-bold mb-2\">Manage all your Fluently </h4>
                    <p class=\"fs-12 fw-medium text-muted\">
                        Let's get you all setup, so you can verify your personal account and begin setting up your profile.
                    </p>

                    ";
        // line 47
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 48
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 49
                yield "                            <div class=\"alert alert-";
                yield ((($context["label"] == "success")) ? ("success") : ("danger"));
                yield " alert-dismissible fade show mb-4\" role=\"alert\">
                                ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "
                    ";
        // line 57
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "w-100 mt-4 pt-2"]]);
        yield "

                        <div class=\"mb-4\">
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "full_name", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Full Name"]]);
        yield "
                            <div class=\"text-danger mt-1 small\">";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "full_name", [], "any", false, false, false, 61), 'errors');
        yield "</div>
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        yield "
                            <div class=\"text-danger mt-1 small\">";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'errors');
        yield "</div>
                        </div>

                        <div class=\"mb-4\">
                            <select class=\"form-control\" name=\"role\" required>
                                <option value=\"\">Choose role</option>
                                <option value=\"etudiant\" ";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 72), "data", [], "any", false, true, false, 72), "role", [], "any", true, true, false, 72) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "data", [], "any", false, false, false, 72), "role", [], "any", false, false, false, 72) == "etudiant"))) {
            yield "selected";
        }
        yield ">Étudiant</option>
                                <option value=\"prof\" ";
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 73), "data", [], "any", false, true, false, 73), "role", [], "any", true, true, false, 73) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vars", [], "any", false, false, false, 73), "data", [], "any", false, false, false, 73), "role", [], "any", false, false, false, 73) == "prof"))) {
            yield "selected";
        }
        yield ">Prof</option>
                                <option value=\"admin\" ";
        // line 74
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 74), "data", [], "any", false, true, false, 74), "role", [], "any", true, true, false, 74) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "data", [], "any", false, false, false, 74), "role", [], "any", false, false, false, 74) == "admin"))) {
            yield "selected";
        }
        yield ">Admin</option>
                            </select>
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "username", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Username"]]);
        yield "
                            <div class=\"text-danger mt-1 small\">";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "username", [], "any", false, false, false, 80), 'errors');
        yield "</div>
                        </div>

                        ";
        // line 84
        yield "                        <div class=\"mb-4 generate-pass\">
                            <div class=\"input-group field\">
                                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "password", [], "any", false, false, false, 86), "first", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control password", "placeholder" => "Password"]]);
        yield "
                                <div class=\"input-group-text c-pointer gen-pass\"><i class=\"feather-hash\"></i></div>
                                <div class=\"input-group-text border-start bg-gray-2 c-pointer show-pass\"><i></i></div>
                            </div>
                            <div class=\"progress-bar mt-2\">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class=\"text-danger mt-1 small\">";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "password", [], "any", false, false, false, 96), "first", [], "any", false, false, false, 96), 'errors');
        yield "</div>
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "password", [], "any", false, false, false, 100), "second", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password again"]]);
        yield "
                            <div class=\"text-danger mt-1 small\">";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "password", [], "any", false, false, false, 101), "second", [], "any", false, false, false, 101), 'errors');
        yield "</div>
                        </div>

                        <div class=\"mt-4\">
                            <div class=\"custom-control custom-checkbox mb-2\">
                                ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "receiveMail", [], "any", false, false, false, 106), 'widget');
        yield "
                                <label class=\"custom-control-label text-muted\" for=\"receiveMail\">
                                    Yes, I want to receive Duralux community emails
                                </label>
                                <div class=\"text-danger mt-1 small\">";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "receiveMail", [], "any", false, false, false, 110), 'errors');
        yield "</div>
                            </div>

                            <div class=\"custom-control custom-checkbox\">
                                ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "termsCondition", [], "any", false, false, false, 114), 'widget');
        yield "
                                <label class=\"custom-control-label text-muted\" for=\"termsCondition\">
                                    I agree to all the <a href=\"#\">Terms & Conditions</a> and <a href=\"#\">Fees</a>.
                                </label>
                                <div class=\"text-danger mt-1 small\">";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "termsCondition", [], "any", false, false, false, 118), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"mt-5\">
                            ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "submit", [], "any", false, false, false, 123), 'widget');
        yield "
                        </div>

                    ";
        // line 126
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), 'form_end');
        yield "

                    <div class=\"mt-5 text-muted\">
                        <span>Already have an account?</span>
                        <a href=\"";
        // line 130
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
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/lslstrength.min.js"), "html", null, true);
        yield "\"></script>

<!-- App JS -->
<script src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme-customizer-init.min.js"), "html", null, true);
        yield "\"></script>

<!-- Initialize Password Strength -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordFields = document.querySelectorAll('.generate-pass .password');
        passwordFields.forEach(field => {
            new LSL_Strength(field);
        });
    });
</script>

</body>
</html>
";
        
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
        return array (  318 => 145,  314 => 144,  308 => 141,  304 => 140,  291 => 130,  284 => 126,  278 => 123,  270 => 118,  263 => 114,  256 => 110,  249 => 106,  241 => 101,  237 => 100,  230 => 96,  217 => 86,  213 => 84,  207 => 80,  203 => 79,  193 => 74,  187 => 73,  181 => 72,  172 => 66,  168 => 65,  161 => 61,  157 => 60,  150 => 57,  147 => 55,  141 => 54,  131 => 50,  126 => 49,  121 => 48,  116 => 47,  103 => 36,  95 => 31,  92 => 30,  90 => 29,  82 => 24,  76 => 21,  70 => 18,  64 => 15,  48 => 1,);
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

    <title>Fluently || Register Minimal</title>

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
                    <h4 class=\"fs-13 fw-bold mb-2\">Manage all your Fluently </h4>
                    <p class=\"fs-12 fw-medium text-muted\">
                        Let's get you all setup, so you can verify your personal account and begin setting up your profile.
                    </p>

                    {# Flash Messages #}
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert alert-{{ label == 'success' ? 'success' : 'danger' }} alert-dismissible fade show mb-4\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                    {% endfor %}

                    {# Symfony Form Start #}
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'w-100 mt-4 pt-2'}}) }}

                        <div class=\"mb-4\">
                            {{ form_widget(form.full_name, {'attr': {'class': 'form-control', 'placeholder': 'Full Name'}}) }}
                            <div class=\"text-danger mt-1 small\">{{ form_errors(form.full_name) }}</div>
                        </div>

                        <div class=\"mb-4\">
                            {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
                            <div class=\"text-danger mt-1 small\">{{ form_errors(form.email) }}</div>
                        </div>

                        <div class=\"mb-4\">
                            <select class=\"form-control\" name=\"role\" required>
                                <option value=\"\">Choose role</option>
                                <option value=\"etudiant\" {% if form.vars.data.role is defined and form.vars.data.role == 'etudiant' %}selected{% endif %}>Étudiant</option>
                                <option value=\"prof\" {% if form.vars.data.role is defined and form.vars.data.role == 'prof' %}selected{% endif %}>Prof</option>
                                <option value=\"admin\" {% if form.vars.data.role is defined and form.vars.data.role == 'admin' %}selected{% endif %}>Admin</option>
                            </select>
                        </div>

                        <div class=\"mb-4\">
                            {{ form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder': 'Username'}}) }}
                            <div class=\"text-danger mt-1 small\">{{ form_errors(form.username) }}</div>
                        </div>

                        {# Password Fields with Strength Bar #}
                        <div class=\"mb-4 generate-pass\">
                            <div class=\"input-group field\">
                                {{ form_widget(form.password.first, {'attr': {'class': 'form-control password', 'placeholder': 'Password'}}) }}
                                <div class=\"input-group-text c-pointer gen-pass\"><i class=\"feather-hash\"></i></div>
                                <div class=\"input-group-text border-start bg-gray-2 c-pointer show-pass\"><i></i></div>
                            </div>
                            <div class=\"progress-bar mt-2\">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class=\"text-danger mt-1 small\">{{ form_errors(form.password.first) }}</div>
                        </div>

                        <div class=\"mb-4\">
                            {{ form_widget(form.password.second, {'attr': {'class': 'form-control', 'placeholder': 'Password again'}}) }}
                            <div class=\"text-danger mt-1 small\">{{ form_errors(form.password.second) }}</div>
                        </div>

                        <div class=\"mt-4\">
                            <div class=\"custom-control custom-checkbox mb-2\">
                                {{ form_widget(form.receiveMail) }}
                                <label class=\"custom-control-label text-muted\" for=\"receiveMail\">
                                    Yes, I want to receive Duralux community emails
                                </label>
                                <div class=\"text-danger mt-1 small\">{{ form_errors(form.receiveMail) }}</div>
                            </div>

                            <div class=\"custom-control custom-checkbox\">
                                {{ form_widget(form.termsCondition) }}
                                <label class=\"custom-control-label text-muted\" for=\"termsCondition\">
                                    I agree to all the <a href=\"#\">Terms & Conditions</a> and <a href=\"#\">Fees</a>.
                                </label>
                                <div class=\"text-danger mt-1 small\">{{ form_errors(form.termsCondition) }}</div>
                            </div>
                        </div>

                        <div class=\"mt-5\">
                            {{ form_widget(form.submit) }}
                        </div>

                    {{ form_end(form) }}

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

<!-- Initialize Password Strength -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordFields = document.querySelectorAll('.generate-pass .password');
        passwordFields.forEach(field => {
            new LSL_Strength(field);
        });
    });
</script>

</body>
</html>
", "register/index.html.twig", "C:\\Users\\emnab\\Documents\\FluentlyLangue\\templates\\register\\index.html.twig");
    }
}
