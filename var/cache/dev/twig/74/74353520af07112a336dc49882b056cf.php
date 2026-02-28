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

/* cours_personnalise/pdf_template.html.twig */
class __TwigTemplate_1575fec28741cd6dd29e6a9f57beae4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours_personnalise/pdf_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours_personnalise/pdf_template.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Cours personnalisé</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 40px;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        h2 {
            color: #34495e;
            margin-top: 30px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .date {
            color: #7f8c8d;
            font-size: 12px;
            text-align: right;
        }
        .content {
            margin-top: 30px;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            color: #bdc3c7;
            font-size: 11px;
            border-top: 1px solid #ecf0f1;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class=\"date\">Généré le ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 44, $this->source); })()), "d/m/Y à H:i"), "html", null, true);
        yield "</div>
    
    <div class=\"header\">
        <h1>Cours personnalisé - ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 47, $this->source); })()), "idNiveau", [], "any", false, false, false, 47), "titre", [], "any", false, false, false, 47), "html", null, true);
        yield "</h1>
        <p>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 48, $this->source); })()), "idNiveau", [], "any", false, false, false, 48), "idLangue", [], "any", false, false, false, 48), "nom", [], "any", false, false, false, 48), "html", null, true);
        yield " • Niveau ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 48, $this->source); })()), "idNiveau", [], "any", false, false, false, 48), "difficulte", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
    </div>
    
    <div class=\"content\">
        ";
        // line 52
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["contenu"]) || array_key_exists("contenu", $context) ? $context["contenu"] : (function () { throw new RuntimeError('Variable "contenu" does not exist.', 52, $this->source); })()), "html", null, true));
        yield "
    </div>
    
    <div class=\"footer\">
        Généré par IA - Fluently
    </div>
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
        return "cours_personnalise/pdf_template.html.twig";
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
        return array (  112 => 52,  103 => 48,  99 => 47,  93 => 44,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Cours personnalisé</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 40px;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        h2 {
            color: #34495e;
            margin-top: 30px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .date {
            color: #7f8c8d;
            font-size: 12px;
            text-align: right;
        }
        .content {
            margin-top: 30px;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            color: #bdc3c7;
            font-size: 11px;
            border-top: 1px solid #ecf0f1;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class=\"date\">Généré le {{ date|date('d/m/Y à H:i') }}</div>
    
    <div class=\"header\">
        <h1>Cours personnalisé - {{ cours.idNiveau.titre }}</h1>
        <p>{{ cours.idNiveau.idLangue.nom }} • Niveau {{ cours.idNiveau.difficulte }}</p>
    </div>
    
    <div class=\"content\">
        {{ contenu|nl2br }}
    </div>
    
    <div class=\"footer\">
        Généré par IA - Fluently
    </div>
</body>
</html>", "cours_personnalise/pdf_template.html.twig", "C:\\Users\\oumai\\Langue\\Fluently\\templates\\cours_personnalise\\pdf_template.html.twig");
    }
}
