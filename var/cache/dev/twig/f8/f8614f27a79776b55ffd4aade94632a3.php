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

/* objectif/edit.html.twig */
class __TwigTemplate_5ec9e21b7607a3c2bc4ae9a8f338dfce extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Modifier Objectif - Fluently";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 7
        yield "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_1.jpg"), "html", null, true);
        yield "');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Modifier l'Objectif</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span class=\"mr-2\"><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\">Objectifs <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Modifier</span>
                </p>
            </div>
        </div>
    </div>
</section>

";
        // line 24
        yield "<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10 col-lg-8\">
                <div class=\"card border-0 shadow-lg\" style=\"border-radius: 15px;\">
                    <div class=\"card-header text-white\" style=\"background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 15px 15px 0 0; padding: 2rem;\">
                        <h4 class=\"mb-0\">
                            <i class=\"fa fa-edit\"></i> Modifier \"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 31, $this->source); })()), "titre", [], "any", false, false, false, 31), "html", null, true);
        yield "\"
                        </h4>
                    </div>
                    <div class=\"card-body p-5\">

                        ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                        ";
        // line 39
        yield "                        <div class=\"form-group mb-4\">
                            <label for=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "titre", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                <i class=\"fa fa-heading text-primary\"></i> Titre de l'objectif *
                            </label>
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "titre", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ex: Maîtriser le français conversationnel"]]);
        // line 48
        yield "
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "titre", [], "any", false, false, false, 49), 'errors');
        yield "
                            <small class=\"form-text text-muted\">Maximum 50 caractères</small>
                        </div>

                        ";
        // line 54
        yield "                        <div class=\"form-group mb-4\">
                            <label for=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                <i class=\"fa fa-align-left text-primary\"></i> Description *
                            </label>
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Décrivez votre objectif en détail..."]]);
        // line 64
        yield "
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), 'errors');
        yield "
                            <small class=\"form-text text-muted\">Maximum 255 caractères</small>
                        </div>

                        ";
        // line 70
        yield "                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "date_deb", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-calendar text-success\"></i> Date de début *
                                    </label>
                                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "date_deb", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 78
        yield "
                                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "date_deb", [], "any", false, false, false, 79), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "date_fin", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-calendar-check-o text-danger\"></i> Date de fin *
                                    </label>
                                    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "date_fin", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 89
        yield "
                                    ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "date_fin", [], "any", false, false, false, 90), 'errors');
        yield "
                                </div>
                            </div>
                        </div>

                        ";
        // line 96
        yield "                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "statut", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99), "html", null, true);
        yield "\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-flag text-warning\"></i> Statut *
                                    </label>
                                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "statut", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control custom-select"]]);
        // line 104
        yield "
                                    ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "statut", [], "any", false, false, false, 105), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 110
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "Id_user", [], "any", false, false, false, 110), 'widget', ["attr" => ["style" => "display:none;"]]);
        yield "

                                ";
        // line 113
        yield "                                <div class=\"form-group mb-4\">
                                    <label class=\"font-weight-bold\">
                                        <i class=\"fa fa-user text-info\"></i> Propriétaire
                                    </label>
                                    <div class=\"form-control d-flex align-items-center\" 
                                         style=\"background:#f8f9fa; cursor:default; height:auto; min-height:38px;\">
                                        <span class=\"mr-2\" style=\"font-size:1.2rem;\">👤</span>
                                        <span>
                                            ";
        // line 121
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 122
            yield "                                                <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "prenom", [], "any", false, false, false, 122), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "nom", [], "any", false, false, false, 122), "html", null, true);
            yield "</strong>
                                                <small class=\"text-muted d-block\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "email", [], "any", false, false, false, 123), "html", null, true);
            yield "</small>
                                            ";
        } else {
            // line 125
            yield "                                                Utilisateur connecté
                                            ";
        }
        // line 127
        yield "                                        </span>
                                        <span class=\"ml-auto badge badge-info\">Vous</span>
                                    </div>
                                    <small class=\"form-text text-muted\">Le propriétaire de l'objectif ne peut pas être modifié.</small>
                                </div>
                            </div>
                        </div>

                        <div class=\"alert alert-info border-0 shadow-sm\" style=\"border-radius: 10px;\">
                            <i class=\"fa fa-lightbulb-o\"></i> <strong>Conseil :</strong> Modifiez le statut pour refléter votre progression actuelle.
                        </div>

                        <hr class=\"my-4\">

                        ";
        // line 142
        yield "                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_index");
        yield "\" class=\"btn btn-secondary btn-lg\">
                                <i class=\"fa fa-times\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-warning btn-lg shadow\">
                                <i class=\"fa fa-save\"></i> Enregistrer les modifications
                            </button>
                        </div>

                        ";
        // line 151
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), 'form_end');
        yield "

                        ";
        // line 154
        yield "                        <hr class=\"my-4\">
                        <div class=\"text-center\">
                            <p class=\"text-muted mb-2\">Zone de danger</p>
                            <button type=\"button\" class=\"btn btn-outline-danger\" data-toggle=\"modal\" data-target=\"#deleteModal\">
                                <i class=\"fa fa-trash\"></i> Supprimer cet objectif
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 169
        yield "<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\" style=\"border-radius: 15px; border: none;\">
            <div class=\"modal-header bg-danger text-white\" style=\"border-radius: 15px 15px 0 0;\">
                <h5 class=\"modal-title\">
                    <i class=\"fa fa-exclamation-triangle\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"close text-white\" data-dismiss=\"modal\">
                    <span>&times;</span>
                </button>
            </div>
            <div class=\"modal-body p-4\">
                <p>Êtes-vous sûr de vouloir supprimer cet objectif ?</p>
                <div class=\"alert alert-warning\">
                    <i class=\"fa fa-warning\"></i> <strong>Attention :</strong> Cette action est irréversible et supprimera toutes les tâches associées.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i> Annuler
                </button>
                <form method=\"post\" action=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 190, $this->source); })()), "id", [], "any", false, false, false, 190)]), "html", null, true);
        yield "\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 191, $this->source); })()), "id", [], "any", false, false, false, 191))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fa fa-trash\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control:focus, .custom-select:focus {
        border-color: #f5576c;
        box-shadow: 0 0 0 0.2rem rgba(245, 87, 108, 0.25);
    }
    .card { overflow: hidden; }
</style>
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
        return "objectif/edit.html.twig";
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
        return array (  368 => 191,  364 => 190,  341 => 169,  325 => 154,  320 => 151,  309 => 143,  306 => 142,  290 => 127,  286 => 125,  281 => 123,  274 => 122,  272 => 121,  262 => 113,  256 => 110,  249 => 105,  246 => 104,  244 => 102,  238 => 99,  233 => 96,  225 => 90,  222 => 89,  220 => 87,  214 => 84,  206 => 79,  203 => 78,  201 => 76,  195 => 73,  190 => 70,  183 => 65,  180 => 64,  178 => 58,  172 => 55,  169 => 54,  162 => 49,  159 => 48,  157 => 43,  151 => 40,  148 => 39,  143 => 36,  135 => 31,  126 => 24,  115 => 15,  111 => 14,  100 => 7,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Objectif - Fluently{% endblock %}

{% block body %}
{# Hero Section #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_1.jpg') }}');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Modifier l'Objectif</h1>
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\"><a href=\"{{ path('app_home') }}\">Accueil <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span class=\"mr-2\"><a href=\"{{ path('app_objectif_index') }}\">Objectifs <i class=\"fa fa-chevron-right\"></i></a></span>
                    <span>Modifier</span>
                </p>
            </div>
        </div>
    </div>
</section>

{# Main Content #}
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10 col-lg-8\">
                <div class=\"card border-0 shadow-lg\" style=\"border-radius: 15px;\">
                    <div class=\"card-header text-white\" style=\"background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 15px 15px 0 0; padding: 2rem;\">
                        <h4 class=\"mb-0\">
                            <i class=\"fa fa-edit\"></i> Modifier \"{{ objectif.titre }}\"
                        </h4>
                    </div>
                    <div class=\"card-body p-5\">

                        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                        {# Titre #}
                        <div class=\"form-group mb-4\">
                            <label for=\"{{ form.titre.vars.id }}\" class=\"font-weight-bold\">
                                <i class=\"fa fa-heading text-primary\"></i> Titre de l'objectif *
                            </label>
                            {{ form_widget(form.titre, {
                                'attr': {
                                    'class': 'form-control form-control-lg',
                                    'placeholder': 'Ex: Maîtriser le français conversationnel'
                                }
                            }) }}
                            {{ form_errors(form.titre) }}
                            <small class=\"form-text text-muted\">Maximum 50 caractères</small>
                        </div>

                        {# Description #}
                        <div class=\"form-group mb-4\">
                            <label for=\"{{ form.description.vars.id }}\" class=\"font-weight-bold\">
                                <i class=\"fa fa-align-left text-primary\"></i> Description *
                            </label>
                            {{ form_widget(form.description, {
                                'attr': {
                                    'class': 'form-control',
                                    'rows': 4,
                                    'placeholder': 'Décrivez votre objectif en détail...'
                                }
                            }) }}
                            {{ form_errors(form.description) }}
                            <small class=\"form-text text-muted\">Maximum 255 caractères</small>
                        </div>

                        {# Dates #}
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"{{ form.date_deb.vars.id }}\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-calendar text-success\"></i> Date de début *
                                    </label>
                                    {{ form_widget(form.date_deb, {
                                        'attr': {'class': 'form-control'}
                                    }) }}
                                    {{ form_errors(form.date_deb) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"{{ form.date_fin.vars.id }}\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-calendar-check-o text-danger\"></i> Date de fin *
                                    </label>
                                    {{ form_widget(form.date_fin, {
                                        'attr': {'class': 'form-control'}
                                    }) }}
                                    {{ form_errors(form.date_fin) }}
                                </div>
                            </div>
                        </div>

                        {# Statut + Utilisateur connecté (lecture seule) #}
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group mb-4\">
                                    <label for=\"{{ form.statut.vars.id }}\" class=\"font-weight-bold\">
                                        <i class=\"fa fa-flag text-warning\"></i> Statut *
                                    </label>
                                    {{ form_widget(form.statut, {
                                        'attr': {'class': 'form-control custom-select'}
                                    }) }}
                                    {{ form_errors(form.statut) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                {# ── Champ Id_user caché — valeur forcée côté controller ── #}
                                {{ form_widget(form.Id_user, {'attr': {'style': 'display:none;'}}) }}

                                {# ── Affichage lecture seule de l'utilisateur connecté ── #}
                                <div class=\"form-group mb-4\">
                                    <label class=\"font-weight-bold\">
                                        <i class=\"fa fa-user text-info\"></i> Propriétaire
                                    </label>
                                    <div class=\"form-control d-flex align-items-center\" 
                                         style=\"background:#f8f9fa; cursor:default; height:auto; min-height:38px;\">
                                        <span class=\"mr-2\" style=\"font-size:1.2rem;\">👤</span>
                                        <span>
                                            {% if app.user %}
                                                <strong>{{ app.user.prenom }} {{ app.user.nom }}</strong>
                                                <small class=\"text-muted d-block\">{{ app.user.email }}</small>
                                            {% else %}
                                                Utilisateur connecté
                                            {% endif %}
                                        </span>
                                        <span class=\"ml-auto badge badge-info\">Vous</span>
                                    </div>
                                    <small class=\"form-text text-muted\">Le propriétaire de l'objectif ne peut pas être modifié.</small>
                                </div>
                            </div>
                        </div>

                        <div class=\"alert alert-info border-0 shadow-sm\" style=\"border-radius: 10px;\">
                            <i class=\"fa fa-lightbulb-o\"></i> <strong>Conseil :</strong> Modifiez le statut pour refléter votre progression actuelle.
                        </div>

                        <hr class=\"my-4\">

                        {# Boutons d'action #}
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"{{ path('app_objectif_index') }}\" class=\"btn btn-secondary btn-lg\">
                                <i class=\"fa fa-times\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-warning btn-lg shadow\">
                                <i class=\"fa fa-save\"></i> Enregistrer les modifications
                            </button>
                        </div>

                        {{ form_end(form) }}

                        {# Bouton de suppression #}
                        <hr class=\"my-4\">
                        <div class=\"text-center\">
                            <p class=\"text-muted mb-2\">Zone de danger</p>
                            <button type=\"button\" class=\"btn btn-outline-danger\" data-toggle=\"modal\" data-target=\"#deleteModal\">
                                <i class=\"fa fa-trash\"></i> Supprimer cet objectif
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{# Modal de suppression #}
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\" style=\"border-radius: 15px; border: none;\">
            <div class=\"modal-header bg-danger text-white\" style=\"border-radius: 15px 15px 0 0;\">
                <h5 class=\"modal-title\">
                    <i class=\"fa fa-exclamation-triangle\"></i> Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"close text-white\" data-dismiss=\"modal\">
                    <span>&times;</span>
                </button>
            </div>
            <div class=\"modal-body p-4\">
                <p>Êtes-vous sûr de vouloir supprimer cet objectif ?</p>
                <div class=\"alert alert-warning\">
                    <i class=\"fa fa-warning\"></i> <strong>Attention :</strong> Cette action est irréversible et supprimera toutes les tâches associées.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                    <i class=\"fa fa-times\"></i> Annuler
                </button>
                <form method=\"post\" action=\"{{ path('app_objectif_delete', {'id': objectif.id}) }}\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ objectif.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fa fa-trash\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control:focus, .custom-select:focus {
        border-color: #f5576c;
        box-shadow: 0 0 0 0.2rem rgba(245, 87, 108, 0.25);
    }
    .card { overflow: hidden; }
</style>
{% endblock %}
", "objectif/edit.html.twig", "C:\\Users\\sarra\\Desktop\\PIW\\Fluently\\templates\\objectif\\edit.html.twig");
    }
}
