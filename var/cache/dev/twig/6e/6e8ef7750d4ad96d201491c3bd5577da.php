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
class __TwigTemplate_da90a83ee7ade46a077c7152569a78bc extends Template
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
                            Welcome back to <strong>Fluently</strong> web applications.
                        </p>

                        ";
        // line 47
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", ["error"], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 48
            yield "                            <div class=\"alert alert-danger alert-dismissible fade show mb-4\" role=\"alert\">
                                ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "
                        ";
        // line 55
        yield "                        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "w-100 mt-4 pt-2"]]);
        yield "
                            
                            <div class=\"mb-4\">
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email or Username"]]);
        yield "
                                <div class=\"text-danger mt-1 small\">";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), 'errors');
        yield "</div>
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "password", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        yield "
                                <div class=\"text-danger mt-1 small\">";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "password", [], "any", false, false, false, 64), 'errors');
        yield "</div>
                            </div>

                            <div class=\"mt-5\">
                                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "submit", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "btn btn-lg btn-primary w-100"]]);
        yield "
                            </div>

                        ";
        // line 71
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        yield "

                        <div class=\"mt-5 text-muted text-center\">
                            <span>Don't have an account?</span>
                            <a href=\"";
        // line 75
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
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>

    <!-- App JS -->
    <script src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme-customizer-init.min.js"), "html", null, true);
        yield "\"></script>

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
        return array (  201 => 88,  197 => 87,  191 => 84,  179 => 75,  172 => 71,  166 => 68,  159 => 64,  155 => 63,  148 => 59,  144 => 58,  137 => 55,  134 => 53,  124 => 49,  121 => 48,  116 => 47,  103 => 36,  95 => 31,  92 => 30,  90 => 29,  82 => 24,  76 => 21,  70 => 18,  64 => 15,  48 => 1,);
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
                            Welcome back to <strong>Fluently</strong> web applications.
                        </p>

                        {# Flash error messages #}
                        {% for message in app.flashes('error') %}
                            <div class=\"alert alert-danger alert-dismissible fade show mb-4\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}

                        {# Symfony login form #}
                        {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'w-100 mt-4 pt-2'}}) }}
                            
                            <div class=\"mb-4\">
                                {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Email or Username'}}) }}
                                <div class=\"text-danger mt-1 small\">{{ form_errors(form.email) }}</div>
                            </div>

                            <div class=\"mb-3\">
                                {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder': 'Password'}}) }}
                                <div class=\"text-danger mt-1 small\">{{ form_errors(form.password) }}</div>
                            </div>

                            <div class=\"mt-5\">
                                {{ form_widget(form.submit, {'attr': {'class': 'btn btn-lg btn-primary w-100'}}) }}
                            </div>

                        {{ form_end(form) }}

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
</html>
", "login/index.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\login\\index.html.twig");
    }
}
