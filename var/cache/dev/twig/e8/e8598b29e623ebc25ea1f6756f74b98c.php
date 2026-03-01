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
class __TwigTemplate_d2bab1fe7f3f4d1da8df1f320e8b84b0 extends Template
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
</head>

<body>
    <!-- Sidebar same as user_show -->
    <nav class=\"nxl-navigation\">
        <div class=\"navbar-wrapper\">
            <div class=\"m-header\">
                <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"b-brand\">
                    <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently\" class=\"logo logo-lg\" />
                    <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fluently.png"), "html", null, true);
        yield "\" alt=\"Fluently\" class=\"logo logo-sm\" />
                </a>
            </div>
            <div class=\"navbar-content\">
                <ul class=\"nxl-navbar\">
                    <li class=\"nxl-item nxl-caption\"><label>Navigation</label></li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-airplay\"></i></span>
                            <span class=\"nxl-mtext\">Dashboards_User</span>
                            <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Gestion Utilisateurs</a></li>
                        </ul>
                    </li>
                    <!-- add other menu items same as user_show -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header same as user_show -->
    <header class=\"nxl-header\">
        <div class=\"header-wrapper\">
            <div class=\"header-right ms-auto\">
                <div class=\"d-flex align-items-center\">
                    <a href=\"";
        // line 50
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
                <h2 class=\"mb-4\">Modifier l'utilisateur</h2>

                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "flashes", ["success"], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 64
            yield "                    <div class=\"alert alert-success alert-dismissible fade show\">
                        ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "flashes", ["error"], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 71
            yield "                    <div class=\"alert alert-danger alert-dismissible fade show\">
                        ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "
                <div class=\"card\">
                    <div class=\"card-header bg-primary text-white\">
                        <h4 class=\"mb-0\">Modifier les informations</h4>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\">
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <label for=\"nom\" class=\"form-label\">Nom <span class=\"text-danger\">*</span></label>
                                    <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "nom", [], "any", false, false, false, 86), "html", null, true);
        yield "\" required>
                                </div>
                                <div class=\"col-md-6\">
                                    <label for=\"prenom\" class=\"form-label\">Prénom <span class=\"text-danger\">*</span></label>
                                    <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" value=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "prenom", [], "any", false, false, false, 90), "html", null, true);
        yield "\" required>
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <label for=\"email\" class=\"form-label\">Email <span class=\"text-danger\">*</span></label>
                                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "email", [], "any", false, false, false, 97), "html", null, true);
        yield "\" required>
                                </div>
                                <div class=\"col-md-6\">
                                    <label for=\"role\" class=\"form-label\">Rôle <span class=\"text-danger\">*</span></label>
                                    <select class=\"form-control\" id=\"role\" name=\"role\" required>
                                        ";
        // line 102
        $context["userRole"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "roles", [], "any", false, false, false, 102), 0, [], "array", false, false, false, 102), ["ROLE_" => ""]));
        // line 103
        yield "                                        <option value=\"user\" ";
        yield ((((isset($context["userRole"]) || array_key_exists("userRole", $context) ? $context["userRole"] : (function () { throw new RuntimeError('Variable "userRole" does not exist.', 103, $this->source); })()) == "user")) ? ("selected") : (""));
        yield ">Utilisateur</option>
                                        <option value=\"admin\" ";
        // line 104
        yield ((((isset($context["userRole"]) || array_key_exists("userRole", $context) ? $context["userRole"] : (function () { throw new RuntimeError('Variable "userRole" does not exist.', 104, $this->source); })()) == "admin")) ? ("selected") : (""));
        yield ">Administrateur</option>
                                        <option value=\"teacher\" ";
        // line 105
        yield ((((isset($context["userRole"]) || array_key_exists("userRole", $context) ? $context["userRole"] : (function () { throw new RuntimeError('Variable "userRole" does not exist.', 105, $this->source); })()) == "teacher")) ? ("selected") : (""));
        yield ">Enseignant</option>
                                        <option value=\"student\" ";
        // line 106
        yield ((((isset($context["userRole"]) || array_key_exists("userRole", $context) ? $context["userRole"] : (function () { throw new RuntimeError('Variable "userRole" does not exist.', 106, $this->source); })()) == "student")) ? ("selected") : (""));
        yield ">Étudiant</option>
                                    </select>
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <label for=\"statut\" class=\"form-label\">Statut</label>
                                    <select class=\"form-control\" id=\"statut\" name=\"statut\">
                                        <option value=\"online\" ";
        // line 115
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 115, $this->source); })()), "statut", [], "any", false, false, false, 115) == "online")) ? ("selected") : (""));
        yield ">En ligne</option>
                                        <option value=\"offline\" ";
        // line 116
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 116, $this->source); })()), "statut", [], "any", false, false, false, 116) == "offline")) ? ("selected") : (""));
        yield ">Hors ligne</option>
                                        <option value=\"disabled\" ";
        // line 117
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "statut", [], "any", false, false, false, 117) == "disabled")) ? ("selected") : (""));
        yield ">Désactivé</option>
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
        // line 136
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
    </main>

    <script src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/vendors.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 152
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
        return array (  292 => 152,  288 => 151,  270 => 136,  248 => 117,  244 => 116,  240 => 115,  228 => 106,  224 => 105,  220 => 104,  215 => 103,  213 => 102,  205 => 97,  195 => 90,  188 => 86,  176 => 76,  166 => 72,  163 => 71,  159 => 70,  156 => 69,  146 => 65,  143 => 64,  139 => 63,  123 => 50,  106 => 36,  90 => 23,  86 => 22,  82 => 21,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  48 => 1,);
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
</head>

<body>
    <!-- Sidebar same as user_show -->
    <nav class=\"nxl-navigation\">
        <div class=\"navbar-wrapper\">
            <div class=\"m-header\">
                <a href=\"{{ path('app_home') }}\" class=\"b-brand\">
                    <img src=\"{{ asset('assets/images/fluently.png') }}\" alt=\"Fluently\" class=\"logo logo-lg\" />
                    <img src=\"{{ asset('assets/images/fluently.png') }}\" alt=\"Fluently\" class=\"logo logo-sm\" />
                </a>
            </div>
            <div class=\"navbar-content\">
                <ul class=\"nxl-navbar\">
                    <li class=\"nxl-item nxl-caption\"><label>Navigation</label></li>
                    <li class=\"nxl-item nxl-hasmenu\">
                        <a href=\"javascript:void(0);\" class=\"nxl-link\">
                            <span class=\"nxl-micon\"><i class=\"feather-airplay\"></i></span>
                            <span class=\"nxl-mtext\">Dashboards_User</span>
                            <span class=\"nxl-arrow\"><i class=\"feather-chevron-right\"></i></span>
                        </a>
                        <ul class=\"nxl-submenu\">
                            <li class=\"nxl-item\"><a class=\"nxl-link\" href=\"{{ path('dashboard') }}\">Gestion Utilisateurs</a></li>
                        </ul>
                    </li>
                    <!-- add other menu items same as user_show -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header same as user_show -->
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
                <h2 class=\"mb-4\">Modifier l'utilisateur</h2>

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

                <div class=\"card\">
                    <div class=\"card-header bg-primary text-white\">
                        <h4 class=\"mb-0\">Modifier les informations</h4>
                    </div>
                    <div class=\"card-body\">
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
                                        {% set userRole = user.roles[0]|replace({'ROLE_':''})|lower %}
                                        <option value=\"user\" {{ userRole == 'user' ? 'selected' }}>Utilisateur</option>
                                        <option value=\"admin\" {{ userRole == 'admin' ? 'selected' }}>Administrateur</option>
                                        <option value=\"teacher\" {{ userRole == 'teacher' ? 'selected' }}>Enseignant</option>
                                        <option value=\"student\" {{ userRole == 'student' ? 'selected' }}>Étudiant</option>
                                    </select>
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <label for=\"statut\" class=\"form-label\">Statut</label>
                                    <select class=\"form-control\" id=\"statut\" name=\"statut\">
                                        <option value=\"online\" {{ user.statut == 'online' ? 'selected' }}>En ligne</option>
                                        <option value=\"offline\" {{ user.statut == 'offline' ? 'selected' }}>Hors ligne</option>
                                        <option value=\"disabled\" {{ user.statut == 'disabled' ? 'selected' }}>Désactivé</option>
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
    </main>

    <script src=\"{{ asset('assets/vendors/js/vendors.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/common-init.min.js') }}\"></script>
</body>

</html>
", "dashboard/edit_user.html.twig", "C:\\Users\\emnab\\Documents\\PI\\Fluently\\templates\\dashboard\\edit_user.html.twig");
    }
}
