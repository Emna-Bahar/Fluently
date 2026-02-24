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

/* profile/index.html.twig */
class __TwigTemplate_aeec7afc8f6609a0d1c5e23d06805a0e extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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

        yield "Mon Profil - Fluently";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "
<div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 0; margin: 0;\">

    ";
        // line 12
        yield "    <div style=\"padding: 20px 0; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.12);\">
        <div style=\"max-width: 1200px; margin: 0 auto; padding: 0 20px;\">
            
            <div style=\"margin-top: 8px; color: white; font-size: 1.1rem; font-weight: 500; opacity: 0.9;\">
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>

    ";
        // line 24
        yield "    <div class=\"container py-5\" style=\"padding-top: 40px !important;\">
        <div class=\"row\">

            ";
        // line 28
        yield "            <div class=\"col-md-4 col-lg-3\">

                <div class=\"card shadow mb-4\" style=\"background: rgba(255,255,255,0.94); backdrop-filter: blur(10px); border: none; border-radius: 12px;\">
                    <div class=\"card-body text-center\">
                        <div class=\"mb-3\">
                            <i class=\"feather-user\" style=\"font-size: 60px; color: #007bff;\"></i>
                        </div>
                        <h4>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), "html", null, true);
        yield "</h4>
                        <p class=\"text-muted\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
        yield "</p>
                        <div class=\"badge bg-info mb-3\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "role", [], "any", false, false, false, 37)), "html", null, true);
        yield "</div>
                        
                        <div class=\"mt-4\">
                            <h6 class=\"text-muted\">Statut du compte</h6>
                            ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "statut", [], "any", false, false, false, 41) == "online")) {
            // line 42
            yield "                                <span class=\"badge bg-success\">En ligne</span>
                            ";
        } else {
            // line 44
            yield "                                <span class=\"badge bg-secondary\">Hors ligne</span>
                            ";
        }
        // line 46
        yield "                        </div>
                    </div>
                </div>

                <div class=\"card shadow\" style=\"background: rgba(255,255,255,0.94); backdrop-filter: blur(10px); border: none; border-radius: 12px;\">
                    <div class=\"card-header bg-light\">
                        <h6 class=\"mb-0\">Menu rapide</h6>
                    </div>
                    <div class=\"list-group list-group-flush\">
                        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"list-group-item list-group-item-action\">
                            <i class=\"feather-home me-2\"></i>Accueil
                        </a>
                        <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"list-group-item list-group-item-action active\">
                            <i class=\"feather-user me-2\"></i>Mon profil
                        </a>
                        <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"list-group-item list-group-item-action text-danger\">
                            <i class=\"feather-log-out me-2\"></i>Déconnexion
                        </a>
                    </div>
                </div>

            </div>

            ";
        // line 70
        yield "            <div class=\"col-md-8 col-lg-9\">

                ";
        // line 73
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "flashes", ["success"], "method", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 74
            yield "                    <div class=\"alert alert-success alert-dismissible fade show mb-4\">
                        ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "flashes", ["error"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 81
            yield "                    <div class=\"alert alert-danger alert-dismissible fade show mb-4\">
                        ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "
                ";
        // line 88
        yield "                <div class=\"card shadow mb-4\" style=\"background: rgba(255,255,255,0.94); backdrop-filter: blur(10px); border: none; border-radius: 12px;\">
                    <div class=\"card-header bg-primary text-white\">
                        <h4 class=\"mb-0\"><i class=\"feather-edit-2 me-2\"></i>Modifier mon profil</h4>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\" novalidate>
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"nom\" class=\"form-label\">Nom <span class=\"text-danger\">*</span></label>
                                    <input type=\"text\" class=\"form-control ";
        // line 97
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "session", [], "any", false, false, false, 97), "get", ["error_nom"], "method", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" id=\"nom\" name=\"nom\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "request", [], "any", false, false, false, 97), "get", ["nom", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "nom", [], "any", false, false, false, 97)], "method", false, false, false, 97), "html", null, true);
        yield "\" required>
                                    <div class=\"form-text\">Votre nom de famille (sans chiffres)</div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"prenom\" class=\"form-label\">Prénom <span class=\"text-danger\">*</span></label>
                                    <input type=\"text\" class=\"form-control ";
        // line 102
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "session", [], "any", false, false, false, 102), "get", ["error_prenom"], "method", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" id=\"prenom\" name=\"prenom\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "request", [], "any", false, false, false, 102), "request", [], "any", false, false, false, 102), "get", ["prenom", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "prenom", [], "any", false, false, false, 102)], "method", false, false, false, 102), "html", null, true);
        yield "\" required>
                                    <div class=\"form-text\">Utilisé comme nom d'utilisateur</div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"email\" class=\"form-label\">Email <span class=\"text-danger\">*</span></label>
                                    <input type=\"email\" class=\"form-control ";
        // line 110
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "session", [], "any", false, false, false, 110), "get", ["error_email"], "method", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" id=\"email\" name=\"email\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "request", [], "any", false, false, false, 110), "get", ["email", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "email", [], "any", false, false, false, 110)], "method", false, false, false, 110), "html", null, true);
        yield "\" required>
                                    <div class=\"form-text\">Adresse email valide</div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"role\" class=\"form-label\">Rôle <span class=\"text-danger\">*</span></label>
                                    <select class=\"form-control ";
        // line 115
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "session", [], "any", false, false, false, 115), "get", ["error_role"], "method", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" id=\"role\" name=\"role\" required>
                                        <option value=\"\" disabled>Choisissez un rôle</option>
                                        <option value=\"user\" ";
        // line 117
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "role", [], "any", false, false, false, 117) == "user")) {
            yield "selected";
        }
        yield ">Utilisateur</option>
                                        <option value=\"admin\" ";
        // line 118
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "role", [], "any", false, false, false, 118) == "admin")) {
            yield "selected";
        }
        yield ">Administrateur</option>
                                        <option value=\"teacher\" ";
        // line 119
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "role", [], "any", false, false, false, 119) == "teacher")) {
            yield "selected";
        }
        yield ">Enseignant</option>
                                        <option value=\"student\" ";
        // line 120
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "role", [], "any", false, false, false, 120) == "student")) {
            yield "selected";
        }
        yield ">Étudiant</option>
                                    </select>
                                </div>
                            </div>

                            <hr class=\"my-4\">

                            <h5 class=\"mb-3\"><i class=\"feather-lock me-2\"></i>Changer le mot de passe</h5>
                            <p class=\"text-muted small\">Laissez les champs vides pour conserver votre mot de passe actuel.</p>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"password\" class=\"form-label\">Nouveau mot de passe</label>
                                    <input type=\"password\" class=\"form-control ";
        // line 133
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "session", [], "any", false, false, false, 133), "get", ["error_password"], "method", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" id=\"password\" name=\"password\" placeholder=\"Minimum 6 caractères\">
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"confirm_password\" class=\"form-label\">Confirmer le mot de passe</label>
                                    <input type=\"password\" class=\"form-control ";
        // line 137
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "session", [], "any", false, false, false, 137), "get", ["error_confirm_password"], "method", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "is-invalid";
        }
        yield "\" id=\"confirm_password\" name=\"confirm_password\" placeholder=\"Identique au mot de passe\">
                                </div>
                            </div>

                            <hr class=\"my-4\">

                            <div class=\"d-flex justify-content-between align-items-center\">
                                <a href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-outline-secondary\">
                                    <i class=\"feather-arrow-left me-2\"></i>Retour à l'accueil
                                </a>
                                <div>
                                    <button type=\"reset\" class=\"btn btn-secondary me-2\">Réinitialiser</button>
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                ";
        // line 157
        yield "                <div class=\"card shadow\" style=\"background: rgba(255,255,255,0.94); backdrop-filter: blur(10px); border: none; border-radius: 12px;\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"mb-0\"><i class=\"feather-activity me-2\"></i>Dernières activités</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"list-group list-group-flush\">
                            <div class=\"list-group-item\">
                                <div class=\"d-flex justify-content-between\">
                                    <small>Connexion réussie</small>
                                    <small class=\"text-muted\">Aujourd'hui, 10:30</small>
                                </div>
                            </div>
                            <div class=\"list-group-item\">
                                <div class=\"d-flex justify-content-between\">
                                    <small>Profil mis à jour</small>
                                    <small class=\"text-muted\">Hier, 14:20</small>
                                </div>
                            </div>
                            <div class=\"list-group-item\">
                                <div class=\"d-flex justify-content-between\">
                                    <small>Mot de passe changé</small>
                                    <small class=\"text-muted\">3 jours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

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
        return "profile/index.html.twig";
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
        return array (  367 => 157,  352 => 144,  340 => 137,  331 => 133,  313 => 120,  307 => 119,  301 => 118,  295 => 117,  288 => 115,  276 => 110,  261 => 102,  249 => 97,  238 => 88,  235 => 86,  225 => 82,  222 => 81,  218 => 80,  215 => 79,  205 => 75,  202 => 74,  197 => 73,  193 => 70,  182 => 61,  176 => 58,  170 => 55,  159 => 46,  155 => 44,  151 => 42,  149 => 41,  142 => 37,  138 => 36,  132 => 35,  123 => 28,  118 => 24,  105 => 12,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/profile/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Mon Profil - Fluently{% endblock %}

{% block body %}

<div style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 0; margin: 0;\">

    {# Header avec logo + pseudo (comme dans tes captures) #}
    <div style=\"padding: 20px 0; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.12);\">
        <div style=\"max-width: 1200px; margin: 0 auto; padding: 0 20px;\">
            
            <div style=\"margin-top: 8px; color: white; font-size: 1.1rem; font-weight: 500; opacity: 0.9;\">
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>

    {# Contenu principal #}
    <div class=\"container py-5\" style=\"padding-top: 40px !important;\">
        <div class=\"row\">

            {# Colonne de gauche - profil + menu #}
            <div class=\"col-md-4 col-lg-3\">

                <div class=\"card shadow mb-4\" style=\"background: rgba(255,255,255,0.94); backdrop-filter: blur(10px); border: none; border-radius: 12px;\">
                    <div class=\"card-body text-center\">
                        <div class=\"mb-3\">
                            <i class=\"feather-user\" style=\"font-size: 60px; color: #007bff;\"></i>
                        </div>
                        <h4>{{ user.nom }} {{ user.prenom }}</h4>
                        <p class=\"text-muted\">{{ user.email }}</p>
                        <div class=\"badge bg-info mb-3\">{{ user.role|capitalize }}</div>
                        
                        <div class=\"mt-4\">
                            <h6 class=\"text-muted\">Statut du compte</h6>
                            {% if user.statut == 'online' %}
                                <span class=\"badge bg-success\">En ligne</span>
                            {% else %}
                                <span class=\"badge bg-secondary\">Hors ligne</span>
                            {% endif %}
                        </div>
                    </div>
                </div>

                <div class=\"card shadow\" style=\"background: rgba(255,255,255,0.94); backdrop-filter: blur(10px); border: none; border-radius: 12px;\">
                    <div class=\"card-header bg-light\">
                        <h6 class=\"mb-0\">Menu rapide</h6>
                    </div>
                    <div class=\"list-group list-group-flush\">
                        <a href=\"{{ path('app_home') }}\" class=\"list-group-item list-group-item-action\">
                            <i class=\"feather-home me-2\"></i>Accueil
                        </a>
                        <a href=\"{{ path('app_profile') }}\" class=\"list-group-item list-group-item-action active\">
                            <i class=\"feather-user me-2\"></i>Mon profil
                        </a>
                        <a href=\"{{ path('app_logout') }}\" class=\"list-group-item list-group-item-action text-danger\">
                            <i class=\"feather-log-out me-2\"></i>Déconnexion
                        </a>
                    </div>
                </div>

            </div>

            {# Colonne de droite - formulaire + activités #}
            <div class=\"col-md-8 col-lg-9\">

                {# Messages flash #}
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success alert-dismissible fade show mb-4\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                {% endfor %}

                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger alert-dismissible fade show mb-4\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                {% endfor %}

                {# Formulaire principal #}
                <div class=\"card shadow mb-4\" style=\"background: rgba(255,255,255,0.94); backdrop-filter: blur(10px); border: none; border-radius: 12px;\">
                    <div class=\"card-header bg-primary text-white\">
                        <h4 class=\"mb-0\"><i class=\"feather-edit-2 me-2\"></i>Modifier mon profil</h4>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\" novalidate>
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"nom\" class=\"form-label\">Nom <span class=\"text-danger\">*</span></label>
                                    <input type=\"text\" class=\"form-control {% if app.session.get('error_nom') %}is-invalid{% endif %}\" id=\"nom\" name=\"nom\" value=\"{{ app.request.request.get('nom', user.nom) }}\" required>
                                    <div class=\"form-text\">Votre nom de famille (sans chiffres)</div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"prenom\" class=\"form-label\">Prénom <span class=\"text-danger\">*</span></label>
                                    <input type=\"text\" class=\"form-control {% if app.session.get('error_prenom') %}is-invalid{% endif %}\" id=\"prenom\" name=\"prenom\" value=\"{{ app.request.request.get('prenom', user.prenom) }}\" required>
                                    <div class=\"form-text\">Utilisé comme nom d'utilisateur</div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"email\" class=\"form-label\">Email <span class=\"text-danger\">*</span></label>
                                    <input type=\"email\" class=\"form-control {% if app.session.get('error_email') %}is-invalid{% endif %}\" id=\"email\" name=\"email\" value=\"{{ app.request.request.get('email', user.email) }}\" required>
                                    <div class=\"form-text\">Adresse email valide</div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"role\" class=\"form-label\">Rôle <span class=\"text-danger\">*</span></label>
                                    <select class=\"form-control {% if app.session.get('error_role') %}is-invalid{% endif %}\" id=\"role\" name=\"role\" required>
                                        <option value=\"\" disabled>Choisissez un rôle</option>
                                        <option value=\"user\" {% if user.role == 'user' %}selected{% endif %}>Utilisateur</option>
                                        <option value=\"admin\" {% if user.role == 'admin' %}selected{% endif %}>Administrateur</option>
                                        <option value=\"teacher\" {% if user.role == 'teacher' %}selected{% endif %}>Enseignant</option>
                                        <option value=\"student\" {% if user.role == 'student' %}selected{% endif %}>Étudiant</option>
                                    </select>
                                </div>
                            </div>

                            <hr class=\"my-4\">

                            <h5 class=\"mb-3\"><i class=\"feather-lock me-2\"></i>Changer le mot de passe</h5>
                            <p class=\"text-muted small\">Laissez les champs vides pour conserver votre mot de passe actuel.</p>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"password\" class=\"form-label\">Nouveau mot de passe</label>
                                    <input type=\"password\" class=\"form-control {% if app.session.get('error_password') %}is-invalid{% endif %}\" id=\"password\" name=\"password\" placeholder=\"Minimum 6 caractères\">
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"confirm_password\" class=\"form-label\">Confirmer le mot de passe</label>
                                    <input type=\"password\" class=\"form-control {% if app.session.get('error_confirm_password') %}is-invalid{% endif %}\" id=\"confirm_password\" name=\"confirm_password\" placeholder=\"Identique au mot de passe\">
                                </div>
                            </div>

                            <hr class=\"my-4\">

                            <div class=\"d-flex justify-content-between align-items-center\">
                                <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-secondary\">
                                    <i class=\"feather-arrow-left me-2\"></i>Retour à l'accueil
                                </a>
                                <div>
                                    <button type=\"reset\" class=\"btn btn-secondary me-2\">Réinitialiser</button>
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {# Dernières activités #}
                <div class=\"card shadow\" style=\"background: rgba(255,255,255,0.94); backdrop-filter: blur(10px); border: none; border-radius: 12px;\">
                    <div class=\"card-header bg-light\">
                        <h5 class=\"mb-0\"><i class=\"feather-activity me-2\"></i>Dernières activités</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"list-group list-group-flush\">
                            <div class=\"list-group-item\">
                                <div class=\"d-flex justify-content-between\">
                                    <small>Connexion réussie</small>
                                    <small class=\"text-muted\">Aujourd'hui, 10:30</small>
                                </div>
                            </div>
                            <div class=\"list-group-item\">
                                <div class=\"d-flex justify-content-between\">
                                    <small>Profil mis à jour</small>
                                    <small class=\"text-muted\">Hier, 14:20</small>
                                </div>
                            </div>
                            <div class=\"list-group-item\">
                                <div class=\"d-flex justify-content-between\">
                                    <small>Mot de passe changé</small>
                                    <small class=\"text-muted\">3 jours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

{% endblock %}", "profile/index.html.twig", "C:\\Users\\MSI\\Downloads\\Fluently\\Fluently\\templates\\profile\\index.html.twig");
    }
}
