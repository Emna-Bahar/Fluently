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

/* dashboard/edit_user.html.twig */
class __TwigTemplate_7e6f4aaf3fe288ba4ef92e16cd21fc3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/edit_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/edit_user.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>Modifier Utilisateur - Fluently</title>

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendors.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/theme.min.css"), "html", null, true);
        yield "\" />
    
    <style>
        .nxl-navigation {
            width: 280px !important;
        }
        
        .nxl-navigation .navbar-wrapper {
            width: 280px !important;
        }
        
        .nxl-container {
            margin-left: 280px !important;
        }
        
        .nxl-header {
            left: 280px !important;
        }
        
        .m-header .logo-lg {
            max-width: 120px !important;
        }
    </style>
</head>

<body>
    <nav class=\"nxl-navigation\">
        <div class=\"navbar-wrapper\">
            <div class=\"m-header\">
                <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"b-brand\">
                    <img src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently\" class=\"logo logo-lg\" />
                </a>
            </div>
        </div>
    </nav>

    <header class=\"nxl-header\">
        <div class=\"header-wrapper\">
            <div class=\"header-right ms-auto\">
                <div class=\"d-flex align-items-center\">
                    <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"btn btn-sm btn-light-brand\">
                        <i class=\"feather-arrow-left me-2\"></i>Retour au Dashboard
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class=\"nxl-container\">
        <div class=\"nxl-content\">
            <div class=\"container mt-4\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"card\">
                            <div class=\"card-header bg-primary text-white\">
                                <h4 class=\"mb-0\">Modifier l'utilisateur</h4>
                            </div>
                            <div class=\"card-body\">
                                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", ["success"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 72
            yield "                                    <div class=\"alert alert-success alert-dismissible fade show\">
                                        ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "                                
                                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "flashes", ["error"], "method", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 79
            yield "                                    <div class=\"alert alert-danger alert-dismissible fade show\">
                                        ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "                                
                                <form method=\"post\">
                                    <div class=\"row mb-3\">
                                        <div class=\"col-md-6\">
                                            <label for=\"nom\" class=\"form-label\">Nom <span class=\"text-danger\">*</span></label>
                                            <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "nom", [], "any", false, false, false, 89), "html", null, true);
        yield "\" required>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <label for=\"prenom\" class=\"form-label\">Prénom <span class=\"text-danger\">*</span></label>
                                            <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "prenom", [], "any", false, false, false, 93), "html", null, true);
        yield "\" required>
                                        </div>
                                    </div>
                                    
                                    <div class=\"row mb-3\">
                                        <div class=\"col-md-6\">
                                            <label for=\"email\" class=\"form-label\">Email <span class=\"text-danger\">*</span></label>
                                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "email", [], "any", false, false, false, 100), "html", null, true);
        yield "\" required>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <label for=\"role\" class=\"form-label\">Rôle <span class=\"text-danger\">*</span></label>
                                            <select class=\"form-control\" id=\"role\" name=\"role\" required>
                                                <option value=\"user\" ";
        // line 105
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "role", [], "any", false, false, false, 105) == "user")) {
            yield "selected";
        }
        yield ">Utilisateur</option>
                                                <option value=\"admin\" ";
        // line 106
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "role", [], "any", false, false, false, 106) == "admin")) {
            yield "selected";
        }
        yield ">Administrateur</option>
                                                <option value=\"teacher\" ";
        // line 107
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "role", [], "any", false, false, false, 107) == "teacher")) {
            yield "selected";
        }
        yield ">Enseignant</option>
                                                <option value=\"student\" ";
        // line 108
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "role", [], "any", false, false, false, 108) == "student")) {
            yield "selected";
        }
        yield ">Étudiant</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class=\"row mb-3\">
                                        <div class=\"col-md-6\">
                                            <label for=\"statut\" class=\"form-label\">Statut</label>
                                            <select class=\"form-control\" id=\"statut\" name=\"statut\">
                                                <option value=\"online\" ";
        // line 117
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "statut", [], "any", false, false, false, 117) == "online")) {
            yield "selected";
        }
        yield ">En ligne</option>
                                                <option value=\"offline\" ";
        // line 118
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "statut", [], "any", false, false, false, 118) == "offline")) {
            yield "selected";
        }
        yield ">Hors ligne</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <hr class=\"my-4\">
                                    
                                    <h5 class=\"mb-3\">Changer le mot de passe (optionnel)</h5>
                                    <div class=\"row mb-3\">
                                        <div class=\"col-md-6\">
                                            <label for=\"password\" class=\"form-label\">Nouveau mot de passe</label>
                                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Laisser vide pour ne pas changer\">
                                        </div>
                                        <div class=\"col-md-6\">
                                            <label for=\"confirm_password\" class=\"form-label\">Confirmer le mot de passe</label>
                                            <input type=\"password\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"btn btn-secondary\">
                                            <i class=\"feather-arrow-left me-2\"></i>Annuler
                                        </a>
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            <i class=\"feather-save me-2\"></i>Enregistrer les modifications
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common-init.min.js"), "html", null, true);
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
        return "dashboard/edit_user.html.twig";
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
        return array (  296 => 155,  292 => 154,  273 => 138,  248 => 118,  242 => 117,  228 => 108,  222 => 107,  216 => 106,  210 => 105,  202 => 100,  192 => 93,  185 => 89,  178 => 84,  168 => 80,  165 => 79,  161 => 78,  158 => 77,  148 => 73,  145 => 72,  141 => 71,  120 => 53,  107 => 43,  103 => 42,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>Modifier Utilisateur - Fluently</title>

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('assets/images/favicon.ico') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendors/css/vendors.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/theme.min.css') }}\" />
    
    <style>
        .nxl-navigation {
            width: 280px !important;
        }
        
        .nxl-navigation .navbar-wrapper {
            width: 280px !important;
        }
        
        .nxl-container {
            margin-left: 280px !important;
        }
        
        .nxl-header {
            left: 280px !important;
        }
        
        .m-header .logo-lg {
            max-width: 120px !important;
        }
    </style>
</head>

<body>
    <nav class=\"nxl-navigation\">
        <div class=\"navbar-wrapper\">
            <div class=\"m-header\">
                <a href=\"{{ path('app_home') }}\" class=\"b-brand\">
                    <img src=\"{{ asset('assets/images/fluently.png') }}\" alt=\"Fluently\" class=\"logo logo-lg\" />
                </a>
            </div>
        </div>
    </nav>

    <header class=\"nxl-header\">
        <div class=\"header-wrapper\">
            <div class=\"header-right ms-auto\">
                <div class=\"d-flex align-items-center\">
                    <a href=\"{{ path('dashboard') }}\" class=\"btn btn-sm btn-light-brand\">
                        <i class=\"feather-arrow-left me-2\"></i>Retour au Dashboard
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class=\"nxl-container\">
        <div class=\"nxl-content\">
            <div class=\"container mt-4\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"card\">
                            <div class=\"card-header bg-primary text-white\">
                                <h4 class=\"mb-0\">Modifier l'utilisateur</h4>
                            </div>
                            <div class=\"card-body\">
                                {% for message in app.flashes('success') %}
                                    <div class=\"alert alert-success alert-dismissible fade show\">
                                        {{ message }}
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                                    </div>
                                {% endfor %}
                                
                                {% for message in app.flashes('error') %}
                                    <div class=\"alert alert-danger alert-dismissible fade show\">
                                        {{ message }}
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                                    </div>
                                {% endfor %}
                                
                                <form method=\"post\">
                                    <div class=\"row mb-3\">
                                        <div class=\"col-md-6\">
                                            <label for=\"nom\" class=\"form-label\">Nom <span class=\"text-danger\">*</span></label>
                                            <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" value=\"{{ user.nom }}\" required>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <label for=\"prenom\" class=\"form-label\">Prénom <span class=\"text-danger\">*</span></label>
                                            <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" value=\"{{ user.prenom }}\" required>
                                        </div>
                                    </div>
                                    
                                    <div class=\"row mb-3\">
                                        <div class=\"col-md-6\">
                                            <label for=\"email\" class=\"form-label\">Email <span class=\"text-danger\">*</span></label>
                                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ user.email }}\" required>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <label for=\"role\" class=\"form-label\">Rôle <span class=\"text-danger\">*</span></label>
                                            <select class=\"form-control\" id=\"role\" name=\"role\" required>
                                                <option value=\"user\" {% if user.role == 'user' %}selected{% endif %}>Utilisateur</option>
                                                <option value=\"admin\" {% if user.role == 'admin' %}selected{% endif %}>Administrateur</option>
                                                <option value=\"teacher\" {% if user.role == 'teacher' %}selected{% endif %}>Enseignant</option>
                                                <option value=\"student\" {% if user.role == 'student' %}selected{% endif %}>Étudiant</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class=\"row mb-3\">
                                        <div class=\"col-md-6\">
                                            <label for=\"statut\" class=\"form-label\">Statut</label>
                                            <select class=\"form-control\" id=\"statut\" name=\"statut\">
                                                <option value=\"online\" {% if user.statut == 'online' %}selected{% endif %}>En ligne</option>
                                                <option value=\"offline\" {% if user.statut == 'offline' %}selected{% endif %}>Hors ligne</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <hr class=\"my-4\">
                                    
                                    <h5 class=\"mb-3\">Changer le mot de passe (optionnel)</h5>
                                    <div class=\"row mb-3\">
                                        <div class=\"col-md-6\">
                                            <label for=\"password\" class=\"form-label\">Nouveau mot de passe</label>
                                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Laisser vide pour ne pas changer\">
                                        </div>
                                        <div class=\"col-md-6\">
                                            <label for=\"confirm_password\" class=\"form-label\">Confirmer le mot de passe</label>
                                            <input type=\"password\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <a href=\"{{ path('dashboard') }}\" class=\"btn btn-secondary\">
                                            <i class=\"feather-arrow-left me-2\"></i>Annuler
                                        </a>
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            <i class=\"feather-save me-2\"></i>Enregistrer les modifications
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src=\"{{ asset('assets/vendors/js/vendors.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/common-init.min.js') }}\"></script>
</body>

</html>
", "dashboard/edit_user.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\dashboard\\edit_user.html.twig");
    }
}
