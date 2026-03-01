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

/* cours/base_apprentissage.html.twig */
class __TwigTemplate_fa5ee1a69c0cd8cbfaae1ce971bdf3ad extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/base_apprentissage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/base_apprentissage.html.twig"));

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

        yield "Leçon ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 3, $this->source); })()), "numero", [], "any", false, false, false, 3), "html", null, true);
        yield " – ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 3, $this->source); })()), "idNiveau", [], "any", false, false, false, 3), "titre", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 60px 20px; color: white; font-family: system-ui, sans-serif;\">
    <div style=\"max-width: 1100px; margin: 0 auto;\">
        <br><br><br><br>

        <!-- Chronomètre -->
        <div style=\"position: fixed; top: 100px; right: 30px; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border-radius: 50px; padding: 15px 25px; border: 1px solid rgba(255,255,255,0.3); z-index: 1000;\">
            <div style=\"display: flex; align-items: center; gap: 15px;\">
                <span style=\"font-size: 1.5rem;\">⏱️</span>
                <span style=\"font-size: 1.8rem; font-weight: 800; color: white;\" id=\"chrono\">00:00</span>
            </div>
        </div>

        <!-- En-tête avec bouton générer -->
        <div style=\"text-align: center; margin-bottom: 60px;\">
            <h1 style=\"font-size: 3rem; font-weight: 900; color: white; margin: 0 0 12px; text-shadow: 0 4px 12px rgba(0,0,0,0.4);\">
                Leçon ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 25, $this->source); })()), "numero", [], "any", false, false, false, 25), "html", null, true);
        yield "
            </h1>
            <p style=\"font-size: 1.5rem; color: rgba(255,255,255,0.9); margin: 0 0 30px;\">
                ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 28, $this->source); })()), "idNiveau", [], "any", false, false, false, 28), "titre", [], "any", false, false, false, 28), "html", null, true);
        yield " • ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 28, $this->source); })()), "idNiveau", [], "any", false, false, false, 28), "idLangue", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "
            </p>
            
            <!-- BOUTON GÉNÉRER UN COURS PERSONNALISÉ -->
            <a href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_personnalise_generer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\" 
               style=\"display: inline-block; background: linear-gradient(135deg, #f97316, #ea580c); color: white; padding: 15px 40px; border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 1.2rem; box-shadow: 0 8px 20px rgba(249,115,22,0.4); transition: all 0.3s; margin-bottom: 30px;\"
               onmouseover=\"this.style.transform='scale(1.05)'; this.style.boxShadow='0 12px 30px rgba(249,115,22,0.6)';\"
               onmouseout=\"this.style.transform='scale(1)'; this.style.boxShadow='0 8px 20px rgba(249,115,22,0.4)';\">
                🎓 Générer un cours personnalisé
            </a>
        </div>

        <!-- Filtrage -->
        <div style=\"margin-bottom: 50px; text-align: center;\">
            <div style=\"display: inline-flex; flex-wrap: wrap; gap: 14px; justify-content: center;\">
                <button class=\"filter-btn active\" data-filter=\"all\" style=\"background: #6366f1; color: white; padding: 14px 28px; border: none; border-radius: 14px; font-weight: 700; cursor: pointer; transition: all 0.25s; box-shadow: 0 4px 12px rgba(99,102,241,0.4);\">Tous</button>
                <button class=\"filter-btn\" data-filter=\"pdf\" style=\"background: #f97316; color: white; padding: 14px 28px; border: none; border-radius: 14px; font-weight: 700; cursor: pointer; transition: all 0.25s; box-shadow: 0 4px 12px rgba(249,115,22,0.4);\">PDF</button>
                <button class=\"filter-btn\" data-filter=\"video\" style=\"background: #ef4444; color: white; padding: 14px 28px; border: none; border-radius: 14px; font-weight: 700; cursor: pointer; transition: all 0.25s; box-shadow: 0 4px 12px rgba(239,68,68,0.4);\">Vidéo</button>
                <button class=\"filter-btn\" data-filter=\"image\" style=\"background: #8b5cf6; color: white; padding: 14px 28px; border: none; border-radius: 14px; font-weight: 700; cursor: pointer; transition: all 0.25s; box-shadow: 0 4px 12px rgba(139,92,246,0.4);\">Image</button>
                <button class=\"filter-btn\" data-filter=\"audio\" style=\"background: #10b981; color: white; padding: 14px 28px; border: none; border-radius: 14px; font-weight: 700; cursor: pointer; transition: all 0.25s; box-shadow: 0 4px 12px rgba(16,185,129,0.4);\">Audio</button>
                <button class=\"filter-btn\" data-filter=\"other\" style=\"background: #64748b; color: white; padding: 14px 28px; border: none; border-radius: 14px; font-weight: 700; cursor: pointer; transition: all 0.25s; box-shadow: 0 4px 12px rgba(100,116,139,0.4);\">Autres</button>
            </div>
        </div>

        <!-- Conteneur ressources -->
        <div id=\"ressources-container\" style=\"display: grid; grid-template-columns: repeat(auto-fill, minmax(420px, 1fr)); gap: 32px;\">
            
            ";
        // line 56
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 56, $this->source); })())) > 0)) {
            // line 57
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 57, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 58
                yield "                    ";
                $context["isYoutube"] = CoreExtension::matches("/(youtube\\.com|youtu\\.be)/i", $context["res"]);
                // line 59
                yield "
                    ";
                // line 60
                if ((($tmp = (isset($context["isYoutube"]) || array_key_exists("isYoutube", $context) ? $context["isYoutube"] : (function () { throw new RuntimeError('Variable "isYoutube" does not exist.', 60, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 61
                    yield "                        ";
                    $context["type"] = "video";
                    // line 62
                    yield "                    ";
                } else {
                    // line 63
                    yield "                        ";
                    $context["ext"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["res"], ".")));
                    // line 64
                    yield "                        ";
                    $context["type"] = "other";
                    // line 65
                    yield "                        ";
                    if (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 65, $this->source); })()), ["pdf"])) {
                        $context["type"] = "pdf";
                        // line 66
                        yield "                        ";
                    } elseif (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 66, $this->source); })()), ["mp4", "webm", "mov"])) {
                        $context["type"] = "video";
                        // line 67
                        yield "                        ";
                    } elseif (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 67, $this->source); })()), ["jpg", "jpeg", "png", "gif", "webp", "svg"])) {
                        $context["type"] = "image";
                        // line 68
                        yield "                        ";
                    } elseif (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 68, $this->source); })()), ["mp3", "wav", "ogg", "m4a"])) {
                        $context["type"] = "audio";
                        // line 69
                        yield "                        ";
                    }
                    // line 70
                    yield "                    ";
                }
                // line 71
                yield "
                    <div class=\"ressource-card\" data-type=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 72, $this->source); })()), "html", null, true);
                yield "\" style=\"background: rgba(255,255,255,0.95); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.15); transition: all 0.3s; transform: translateY(0); display: none;\">
                        <div style=\"padding: 32px;\">
                            <div style=\"display: flex; align-items: center; gap: 16px; margin-bottom: 20px;\">
                                <span style=\"font-size: 2.8rem;\">
                                    ";
                // line 76
                if ((($tmp = (isset($context["isYoutube"]) || array_key_exists("isYoutube", $context) ? $context["isYoutube"] : (function () { throw new RuntimeError('Variable "isYoutube" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "🎥
                                    ";
                } elseif ((                // line 77
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 77, $this->source); })()) == "pdf")) {
                    yield "📄
                                    ";
                } elseif ((                // line 78
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 78, $this->source); })()) == "video")) {
                    yield "🎥
                                    ";
                } elseif ((                // line 79
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 79, $this->source); })()) == "image")) {
                    yield "🖼️
                                    ";
                } elseif ((                // line 80
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 80, $this->source); })()) == "audio")) {
                    yield "🎵
                                    ";
                } else {
                    // line 81
                    yield "📎";
                }
                // line 82
                yield "                                </span>
                                <h3 style=\"margin: 0; color: #1e293b; font-size: 1.5rem; font-weight: 800;\">
                                    ";
                // line 84
                yield (((($tmp = (isset($context["isYoutube"]) || array_key_exists("isYoutube", $context) ? $context["isYoutube"] : (function () { throw new RuntimeError('Variable "isYoutube" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Vidéo YouTube") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 84, $this->source); })())), "html", null, true)));
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 84), "html", null, true);
                yield "
                                </h3>
                            </div>

                            ";
                // line 88
                if ((($tmp = (isset($context["isYoutube"]) || array_key_exists("isYoutube", $context) ? $context["isYoutube"] : (function () { throw new RuntimeError('Variable "isYoutube" does not exist.', 88, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 89
                    yield "                                ";
                    // line 90
                    yield "                                ";
                    $context["clean"] = Twig\Extension\CoreExtension::trim($context["res"]);
                    // line 91
                    yield "                                ";
                    $context["videoId"] = "";
                    // line 92
                    yield "
                                ";
                    // line 93
                    if (CoreExtension::inFilter("youtu.be/", (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 93, $this->source); })()))) {
                        // line 94
                        yield "                                    ";
                        $context["videoId"] = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 94, $this->source); })()), "youtu.be/"), 1, [], "array", false, false, false, 94), "?"), 0, [], "array", false, false, false, 94));
                        // line 95
                        yield "                                ";
                    } elseif (CoreExtension::inFilter("youtube.com/watch?v=", (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 95, $this->source); })()))) {
                        // line 96
                        yield "                                    ";
                        $context["videoId"] = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 96, $this->source); })()), "v="), 1, [], "array", false, false, false, 96), "&"), 0, [], "array", false, false, false, 96));
                        // line 97
                        yield "                                ";
                    } elseif (CoreExtension::inFilter("youtube.com/embed/", (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 97, $this->source); })()))) {
                        // line 98
                        yield "                                    ";
                        $context["videoId"] = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 98, $this->source); })()), "embed/"), 1, [], "array", false, false, false, 98), "?"), 0, [], "array", false, false, false, 98));
                        // line 99
                        yield "                                ";
                    }
                    // line 100
                    yield "
                                ";
                    // line 101
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["videoId"]) || array_key_exists("videoId", $context) ? $context["videoId"] : (function () { throw new RuntimeError('Variable "videoId" does not exist.', 101, $this->source); })())) == 11)) {
                        // line 102
                        yield "                                    <div class=\"ratio ratio-16x9 rounded-3 overflow-hidden shadow\">
                                        <iframe 
                                            src=\"https://www.youtube.com/embed/";
                        // line 104
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["videoId"]) || array_key_exists("videoId", $context) ? $context["videoId"] : (function () { throw new RuntimeError('Variable "videoId" does not exist.', 104, $this->source); })()), "html", null, true);
                        yield "?rel=0&modestbranding=1&showinfo=0&controls=1&autoplay=0&iv_load_policy=3\" 
                                            title=\"Vidéo YouTube\" 
                                            frameborder=\"0\" 
                                            allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" 
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                ";
                    } else {
                        // line 112
                        yield "                                    <div class=\"alert alert-warning text-center p-4\">
                                        <strong>Erreur de lecture :</strong> Impossible de charger cette vidéo.<br>
                                        <small>URL problématique : ";
                        // line 114
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["res"]);
                        yield "</small><br>
                                        <small>Vérifiez le lien dans l'administration.</small>
                                    </div>
                                ";
                    }
                    // line 118
                    yield "
                            ";
                } else {
                    // line 120
                    yield "                                ";
                    $context["filePath"] = (((isset($context["public_path"]) || array_key_exists("public_path", $context) ? $context["public_path"] : (function () { throw new RuntimeError('Variable "public_path" does not exist.', 120, $this->source); })()) . "/") . $context["res"]);
                    // line 121
                    yield "
                                ";
                    // line 122
                    if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 122, $this->source); })()) == "image")) {
                        // line 123
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 123, $this->source); })()), "html", null, true);
                        yield "\" alt=\"Ressource\" style=\"width: 100%; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                                ";
                    } elseif ((                    // line 124
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 124, $this->source); })()) == "video")) {
                        // line 125
                        yield "                                    <video controls style=\"width: 100%; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                                        <source src=\"";
                        // line 126
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 126, $this->source); })()), "html", null, true);
                        yield "\" type=\"video/";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 126, $this->source); })()), "html", null, true);
                        yield "\">
                                        Vidéo non supportée.
                                    </video>
                                ";
                    } elseif ((                    // line 129
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 129, $this->source); })()) == "pdf")) {
                        // line 130
                        yield "                                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 130, $this->source); })()), "html", null, true);
                        yield "\" target=\"_blank\" style=\"display: flex; align-items: center; gap: 16px; background: linear-gradient(135deg, #f97316, #ea580c); color: white; padding: 18px 36px; border-radius: 14px; text-decoration: none; font-weight: 700; font-size: 1.2rem; box-shadow: 0 8px 24px rgba(249,115,22,0.4); transition: all 0.3s; width: fit-content; margin: 0 auto;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                        📄 Ouvrir le PDF du cours
                                    </a>
                                ";
                    } elseif ((                    // line 133
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 133, $this->source); })()) == "audio")) {
                        // line 134
                        yield "                                    <audio controls style=\"width: 100%; margin: 20px 0;\">
                                        <source src=\"";
                        // line 135
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 135, $this->source); })()), "html", null, true);
                        yield "\" type=\"audio/";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 135, $this->source); })()), "html", null, true);
                        yield "\">
                                        Audio non supporté.
                                    </audio>
                                ";
                    } else {
                        // line 139
                        yield "                                    <div style=\"padding: 40px; background: #f1f5f9; border-radius: 16px; text-align: center; color: #475569; border: 3px dashed #cbd5e1;\">
                                        <p style=\"margin: 0 0 16px; font-size: 1.3rem; font-weight: 700;\">Fichier : ";
                        // line 140
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["res"], "/")), "html", null, true);
                        yield "</p>
                                        <small style=\"font-size: 1rem; opacity: 0.8;\">(format non prévisualisé)</small>
                                        <a href=\"";
                        // line 142
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 142, $this->source); })()), "html", null, true);
                        yield "\" download style=\"display: inline-block; margin-top: 24px; background: #6366f1; color: white; padding: 14px 32px; border-radius: 12px; text-decoration: none; font-weight: 700; box-shadow: 0 6px 16px rgba(99,102,241,0.3); transition: all 0.2s;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                            Télécharger le fichier
                                        </a>
                                    </div>
                                ";
                    }
                    // line 147
                    yield "                            ";
                }
                // line 148
                yield "                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "            ";
        }
        // line 152
        yield "
            ";
        // line 154
        yield "            ";
        if ((array_key_exists("ressources_personnalisees", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ressources_personnalisees"]) || array_key_exists("ressources_personnalisees", $context) ? $context["ressources_personnalisees"] : (function () { throw new RuntimeError('Variable "ressources_personnalisees" does not exist.', 154, $this->source); })())) > 0))) {
            // line 155
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ressources_personnalisees"]) || array_key_exists("ressources_personnalisees", $context) ? $context["ressources_personnalisees"] : (function () { throw new RuntimeError('Variable "ressources_personnalisees" does not exist.', 155, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 156
                yield "                    <div class=\"ressource-card\" data-type=\"pdf\" style=\"background: rgba(255,255,255,0.95); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.15); transition: all 0.3s; transform: translateY(0); display: none;\">
                        <div style=\"padding: 32px;\">
                            <div style=\"display: flex; align-items: center; gap: 16px; margin-bottom: 20px;\">
                                <span style=\"font-size: 2.8rem;\">📄</span>
                                <h3 style=\"margin: 0; color: #1e293b; font-size: 1.5rem; font-weight: 800;\">
                                    Cours personnalisé ";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 161), "html", null, true);
                yield "
                                </h3>
                            </div>
                            
                            <div style=\"text-align: center; margin-bottom: 20px;\">
                                <p style=\"color: #475569; margin-bottom: 15px;\">
                                    <strong>📝 Contenu généré par IA</strong><br>
                                    <small>Ce cours a été créé spécialement pour vous</small>
                                </p>
                            </div>
                            
                            <a href=\"";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["res"], "html", null, true);
                yield "\" target=\"_blank\" style=\"display: flex; align-items: center; gap: 16px; background: linear-gradient(135deg, #f97316, #ea580c); color: white; padding: 18px 36px; border-radius: 14px; text-decoration: none; font-weight: 700; font-size: 1.2rem; box-shadow: 0 8px 24px rgba(249,115,22,0.4); transition: all 0.3s; width: fit-content; margin: 0 auto;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                📄 Ouvrir le PDF personnalisé
                            </a>
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            yield "            ";
        }
        // line 179
        yield "
            ";
        // line 181
        yield "            ";
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 181, $this->source); })())) == 0) && ( !array_key_exists("ressources_personnalisees", $context) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ressources_personnalisees"]) || array_key_exists("ressources_personnalisees", $context) ? $context["ressources_personnalisees"] : (function () { throw new RuntimeError('Variable "ressources_personnalisees" does not exist.', 181, $this->source); })())) == 0)))) {
            // line 182
            yield "                <div style=\"grid-column: 1 / -1; text-align: center; padding: 100px 40px; background: rgba(255,255,255,0.9); border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); color: #475569; font-size: 1.5rem; font-weight: 600;\">
                    Aucune ressource disponible pour cette leçon pour le moment.
                </div>
            ";
        }
        // line 186
        yield "        </div>

        <!-- ============ SECTION DICTIONNAIRE ============ -->
        <div style=\"margin-top: 80px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 30px; padding: 40px;\">
            <h2 style=\"color: white; text-align: center; font-size: 2.2rem; font-weight: 800; margin-bottom: 30px;\">
                📖 Dictionnaire
            </h2>
            
            <div style=\"background: white; border-radius: 20px; padding: 30px;\">
                <!-- Barre de recherche -->
                <div style=\"display: flex; flex-direction: column; gap: 15px; margin-bottom: 30px;\">
                    <div style=\"display: flex; gap: 15px;\">
                        <input type=\"text\" 
                               id=\"dictionary-word\" 
                               placeholder=\"Tapez un mot (ex: maison, friend, Haus...)\" 
                               style=\"flex: 1; padding: 18px 25px; border: 2px solid #e0e0e0; border-radius: 50px; font-size: 1.2rem; outline: none; transition: all 0.3s;\"
                               onfocus=\"this.style.borderColor='#667eea';\">
                        
                        <button onclick=\"searchWord()\" 
                                style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 0 40px; border-radius: 50px; font-size: 1.2rem; font-weight: 700; cursor: pointer; transition: all 0.3s;\"
                                onmouseover=\"this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 25px rgba(102,126,234,0.4)';\"
                                onmouseout=\"this.style.transform='scale(1)'; this.style.boxShadow='none';\">
                            🔍 Chercher
                        </button>
                    </div>
                </div>

                <!-- Résultats du dictionnaire -->
                <div id=\"dictionary-result\" style=\"background: #f8f9fa; border-radius: 15px; padding: 25px; min-height: 200px;\">
                    <p style=\"color: #999; text-align: center; font-size: 1.1rem; margin: 40px 0;\">
                        Entrez un mot pour voir sa définition
                    </p>
                </div>

                <!-- Suggestions de mots populaires -->
                <div style=\"margin-top: 30px; display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;\">
                    <span style=\"color: #666; font-weight: 600; margin-right: 10px;\">Mots populaires :</span>
                    <button onclick=\"document.getElementById('dictionary-word').value='maison'; searchWord();\" 
                            style=\"background: #f0f0f0; border: none; padding: 8px 20px; border-radius: 50px; cursor: pointer; transition: all 0.2s; color: #333;\"
                            onmouseover=\"this.style.background='#667eea'; this.style.color='white';\"
                            onmouseout=\"this.style.background='#f0f0f0'; this.style.color='#333';\">maison</button>
                    <button onclick=\"document.getElementById('dictionary-word').value='ami'; searchWord();\" 
                            style=\"background: #f0f0f0; border: none; padding: 8px 20px; border-radius: 50px; cursor: pointer; transition: all 0.2s; color: #333;\"
                            onmouseover=\"this.style.background='#667eea'; this.style.color='white';\"
                            onmouseout=\"this.style.background='#f0f0f0'; this.style.color='#333';\">ami</button>
                    <button onclick=\"document.getElementById('dictionary-word').value='friend'; searchWord();\" 
                            style=\"background: #f0f0f0; border: none; padding: 8px 20px; border-radius: 50px; cursor: pointer; transition: all 0.2s; color: #333;\"
                            onmouseover=\"this.style.background='#667eea'; this.style.color='white';\"
                            onmouseout=\"this.style.background='#f0f0f0'; this.style.color='#333';\">friend</button>
                    <button onclick=\"document.getElementById('dictionary-word').value='Haus'; searchWord();\" 
                            style=\"background: #f0f0f0; border: none; padding: 8px 20px; border-radius: 50px; cursor: pointer; transition: all 0.2s; color: #333;\"
                            onmouseover=\"this.style.background='#667eea'; this.style.color='white';\"
                            onmouseout=\"this.style.background='#f0f0f0'; this.style.color='#333';\">Haus</button>
                </div>
            </div>
        </div>

        <!-- ============ SECTION DIALOGUE VOCAL AVEC IA ============ -->
        <div style=\"margin-top: 80px; background: linear-gradient(135deg, #f97316 0%, #ea580c 100%); border-radius: 30px; padding: 40px;\">
            <h2 style=\"color: white; text-align: center; font-size: 2.2rem; font-weight: 800; margin-bottom: 30px;\">
                🎤 Pratique la conversation à voix haute
            </h2>
            
            <div style=\"background: white; border-radius: 20px; padding: 30px;\">
                
                <!-- ÉTAPE 1 : Saisie du thème -->
                <div id=\"etape-theme\">
                    <h3 style=\"color: #333; margin-bottom: 20px;\">📝 Quel thème veux-tu pratiquer ?</h3>
                    <div style=\"display: flex; gap: 15px;\">
                        <input type=\"text\" 
                               id=\"theme-input\" 
                               placeholder=\"Ex: Au restaurant, Voyage à Paris, Présentation personnelle...\" 
                               style=\"flex: 1; padding: 18px 25px; border: 2px solid #e0e0e0; border-radius: 50px; font-size: 1.1rem; outline: none;\">
                        
                        <button onclick=\"genererDialogue()\" 
                                style=\"background: linear-gradient(135deg, #f97316, #ea580c); color: white; border: none; padding: 0 40px; border-radius: 50px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: all 0.3s;\"
                                onmouseover=\"this.style.transform='scale(1.05)';\"
                                onmouseout=\"this.style.transform='scale(1)';\">
                            Générer le dialogue
                        </button>
                    </div>
                    <p style=\"color: #666; margin-top: 15px; font-size: 0.9rem;\">
                        L'IA va créer un dialogue adapté à ton niveau (";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 268, $this->source); })()), "idNiveau", [], "any", false, false, false, 268), "difficulte", [], "any", false, false, false, 268), "html", null, true);
        yield ")
                    </p>
                </div>
                
                <!-- ÉTAPE 2 : Dialogue généré (caché au début) -->
                <div id=\"etape-dialogue\" style=\"display: none;\">
                    
                    <!-- Barre de progression -->
                    <div style=\"margin-bottom: 30px;\">
                        <div style=\"display: flex; justify-content: space-between; color: #333; margin-bottom: 10px;\">
                            <span>Réplique <span id=\"replique-actuelle\">1</span>/<span id=\"total-repliques\">6</span></span>
                            <span id=\"score-actuel\" style=\"font-weight: bold; color: #f97316;\">0%</span>
                        </div>
                        <div style=\"width: 100%; height: 10px; background: #f0f0f0; border-radius: 5px;\">
                            <div id=\"barre-progression-dialogue\" style=\"width: 0%; height: 100%; background: linear-gradient(90deg, #f97316, #ea580c); border-radius: 5px;\"></div>
                        </div>
                    </div>
                    
                    <!-- Dialogue visuel -->
                    <div style=\"background: #f8f9fa; border-radius: 20px; padding: 30px; margin-bottom: 30px;\">
                        <div id=\"dialogue-ia\" style=\"background: #fee2e2; color: #b91c1c; padding: 20px; border-radius: 15px; margin-bottom: 20px; border-left: 5px solid #ef4444;\">
                            <div style=\"display: flex; align-items: center; gap: 10px; margin-bottom: 10px;\">
                                <span style=\"background: #ef4444; color: white; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;\">IA</span>
                                <span style=\"font-weight: bold;\">L'IA dit :</span>
                            </div>
                            <p id=\"texte-ia\" style=\"font-size: 1.3rem; margin: 0; font-style: italic;\"></p>
                        </div>
                        
                        <div id=\"dialogue-etudiant\" style=\"background: #dbeafe; color: #1e40af; padding: 20px; border-radius: 15px; border-left: 5px solid #3b82f6;\">
                            <div style=\"display: flex; align-items: center; gap: 10px; margin-bottom: 10px;\">
                                <span style=\"background: #3b82f6; color: white; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;\">TOI</span>
                                <span style=\"font-weight: bold;\">À ton tour de lire :</span>
                            </div>
                            <p id=\"texte-etudiant\" style=\"font-size: 1.3rem; margin: 0;\"></p>
                        </div>
                    </div>
                    
                    <!-- Contrôles vocaux -->
                    <div style=\"text-align: center; margin-bottom: 15px;\">
                        <button id=\"btn-commencer\" onclick=\"commencerLecture()\" 
                                style=\"background: #10b981; color: white; border: none; padding: 20px 50px; border-radius: 50px; font-size: 1.3rem; font-weight: 700; cursor: pointer; box-shadow: 0 10px 25px rgba(16,185,129,0.4); transition: all 0.3s; margin-right: 15px;\"
                                onmouseover=\"this.style.transform='scale(1.1)';\"
                                onmouseout=\"this.style.transform='scale(1)';\">
                            🎤 Commencer à lire
                        </button>
                        
                        <button id=\"btn-suivant\" onclick=\"passerRepliqueSuivante()\" style=\"display: none; background: #3b82f6; color: white; border: none; padding: 20px 50px; border-radius: 50px; font-size: 1.3rem; font-weight: 700; cursor: pointer; box-shadow: 0 10px 25px rgba(59,130,246,0.4); transition: all 0.3s;\"
                                onmouseover=\"this.style.transform='scale(1.1)';\"
                                onmouseout=\"this.style.transform='scale(1)';\">
                            ⏭️ Réplique suivante
                        </button>
                        
                        <!-- Bouton pour changer la voix -->
                        <button id=\"btn-changer-voix\" onclick=\"changerVoix()\" 
                                style=\"background: #6b7280; color: white; border: none; padding: 10px 20px; border-radius: 50px; font-size: 0.9rem; cursor: pointer; margin-left: 15px;\"
                                onmouseover=\"this.style.background='#4b5563';\"
                                onmouseout=\"this.style.background='#6b7280';\">
                            🔊 Changer voix IA
                        </button>
                    </div>
                    
                    <!-- Bouton pour tester le microphone -->
                    <div style=\"text-align: center; margin-bottom: 15px;\">
                        <button onclick=\"testerMicrophone()\" 
                                style=\"background: #8b5cf6; color: white; border: none; padding: 8px 16px; border-radius: 50px; font-size: 0.8rem; cursor: pointer;\">
                            🎤 Tester mon microphone
                        </button>
                    </div>
                    
                    <!-- Zone de feedback -->
                    <div id=\"feedback-correction\" style=\"margin-top: 30px; padding: 20px; border-radius: 15px; display: none;\">
                        <!-- Feedback dynamique -->
                    </div>
                </div>
            </div>
        </div>

        <!-- ============ SECTION JEUX ÉDUCATIFS ============ -->
        <div style=\"margin-top: 80px; background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%); border-radius: 30px; padding: 40px;\">
            <h2 style=\"color: white; text-align: center; font-size: 2.2rem; font-weight: 800; margin-bottom: 30px;\">
                🎮 Joue en apprenant
            </h2>
            
            <div style=\"background: white; border-radius: 20px; padding: 30px;\">
                
                <!-- Sélecteur de jeu -->
                <div style=\"display: flex; gap: 15px; margin-bottom: 30px; justify-content: center; flex-wrap: wrap;\">
                    <button onclick=\"choisirJeu('scrambled')\" 
                            class=\"jeu-btn actif\" 
                            data-jeu=\"scrambled\"
                            style=\"background: #8b5cf6; color: white; border: none; padding: 15px 30px; border-radius: 50px; font-weight: 600; cursor: pointer; transition: all 0.3s;\">
                        🎯 Phrase Mélangée
                    </button>
                    
                    <button onclick=\"choisirJeu('oddoneout')\" 
                            class=\"jeu-btn\"
                            data-jeu=\"oddoneout\"
                            style=\"background: #f3f4f6; color: #333; border: none; padding: 15px 30px; border-radius: 50px; font-weight: 600; cursor: pointer; transition: all 0.3s;\">
                        🔍 Trouve l'Intrus
                    </button>
                    
                    <button onclick=\"choisirJeu('crossword')\" 
                            class=\"jeu-btn\"
                            data-jeu=\"crossword\"
                            style=\"background: #f3f4f6; color: #333; border: none; padding: 15px 30px; border-radius: 50px; font-weight: 600; cursor: pointer; transition: all 0.3s;\">
                        🧩 Mots Croisés
                    </button>
                </div>
                
                <!-- Zone d'affichage du jeu -->
                <div id=\"zone-jeu\" style=\"min-height: 300px;\">
                    <!-- Le jeu sera chargé ici dynamiquement -->
                    <div style=\"text-align: center; padding: 50px;\">
                        <p style=\"color: #666;\">Choisis un jeu pour commencer !</p>
                    </div>
                </div>
                
                <!-- Barre de progression et points -->
                <div style=\"margin-top: 30px; display: flex; justify-content: space-between; align-items: center;\">
                    <div style=\"flex: 1; margin-right: 20px;\">
                        <div style=\"display: flex; justify-content: space-between; color: #333; margin-bottom: 5px;\">
                            <span>Progression</span>
                            <span id=\"progression-jeu\">0/3</span>
                        </div>
                        <div style=\"width: 100%; height: 8px; background: #f0f0f0; border-radius: 4px;\">
                            <div id=\"barre-progression-jeu\" style=\"width: 0%; height: 100%; background: linear-gradient(90deg, #8b5cf6, #6366f1); border-radius: 4px;\"></div>
                        </div>
                    </div>
                    
                    <div style=\"background: #fef3c7; padding: 10px 20px; border-radius: 50px;\">
                        <span style=\"color: #92400e; font-weight: bold;\">⭐ Points: <span id=\"points-jeu\">0</span></span>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Bouton Terminer -->
        <div style=\"margin-top: 80px; text-align: center;\">
            <button onclick=\"terminerCours(";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 407, $this->source); })()), "id", [], "any", false, false, false, 407), "html", null, true);
        yield ")\" style=\"background: linear-gradient(135deg, #10b981, #059669); color: white; border: none; padding: 22px 80px; font-size: 1.5rem; font-weight: 900; border-radius: 20px; cursor: pointer; box-shadow: 0 12px 40px rgba(16,185,129,0.5); transition: all 0.35s;\" onmouseover=\"this.style.transform='scale(1.08) translateY(-4px)';\" onmouseout=\"this.style.transform='scale(1) translateY(0)';\">
                Terminer cette leçon →
            </button>
        </div>

    </div>

    <!-- Script filtrage + terminer + dictionnaire + chrono -->
    <script>
        // Filtrage
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.dataset.filter;
                document.querySelectorAll('.ressource-card').forEach(card => {
                    if (filter === 'all' || card.dataset.type === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Afficher tout au chargement
        document.querySelector('[data-filter=\"all\"]').click();

        // Chronomètre
        let startTime = Date.now();
        let timerInterval;

        function updateChrono() {
            const elapsed = Math.floor((Date.now() - startTime) / 1000);
            const minutes = Math.floor(elapsed / 60);
            const seconds = elapsed % 60;
            document.getElementById('chrono').textContent = 
                `\${minutes.toString().padStart(2, '0')}:\${seconds.toString().padStart(2, '0')}`;
        }

        // Démarrer le chrono
        timerInterval = setInterval(updateChrono, 1000);

        // Envoyer le temps à la fin
        function envoyerTemps() {
            const elapsed = Math.floor((Date.now() - startTime) / 1000);
            fetch('/cours/";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 454, $this->source); })()), "id", [], "any", false, false, false, 454), "html", null, true);
        yield "/temps', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': '";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("temps" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 458, $this->source); })()), "id", [], "any", false, false, false, 458))), "html", null, true);
        yield "'
                },
                body: JSON.stringify({ temps: elapsed })
            });
        }

        // Terminer cours modifié
        function terminerCours(coursId) {
            if (confirm(\"Voulez-vous marquer cette leçon comme terminée ?\\nVous passerez automatiquement à la suivante.\")) {
                clearInterval(timerInterval); // Arrêter le chrono
                envoyerTemps(); // Envoyer le temps
                
                fetch('/cours/' + coursId + '/terminer', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-Token': '";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 473, $this->source); })()), "id", [], "any", false, false, false, 473))), "html", null, true);
        yield "'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = '";
        // line 479
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_apprentissage", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 479, $this->source); })()), "idNiveau", [], "any", false, false, false, 479), "idLangue", [], "any", false, false, false, 479), "id", [], "any", false, false, false, 479)]), "html", null, true);
        yield "';
                    } else {
                        alert(\"Une erreur est survenue : \" + (data.message || 'Inconnu'));
                    }
                })
                .catch(err => alert(\"Erreur : \" + err.message));
            }
        }

        // Fonctions du dictionnaire
        function searchWord() {
            const word = document.getElementById('dictionary-word').value.trim();
            const resultDiv = document.getElementById('dictionary-result');
            
            if (!word) {
                resultDiv.innerHTML = '<p style=\"color: #ff6b6b; text-align: center; margin: 40px 0;\">❌ Veuillez entrer un mot</p>';
                return;
            }
            
            // Afficher un loader
            resultDiv.innerHTML = '<p style=\"text-align: center; margin: 40px 0; color: #333;\">🔍 Recherche en cours...</p>';
            
            fetch('/api/dictionary/search/' + encodeURIComponent(word))
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        resultDiv.innerHTML = `<p style=\"color: #ff6b6b; text-align: center; margin: 40px 0;\">❌ \${data.error}</p>`;
                        return;
                    }
                    
                    let html = `
                        <div style=\"border-bottom: 2px solid #667eea; padding-bottom: 15px; margin-bottom: 20px;\">
                            <h3 style=\"margin: 0; color: #000000; font-size: 2rem; font-weight: 800;\">\${data.word}</h3>
                        </div>
                    `;
                    
                    if (data.functional_label) {
                        html += `<p><strong style=\"color: #000000;\">Catégorie :</strong> <span style=\"color: #333333;\">\${data.functional_label}</span></p>`;
                    }
                    
                    if (data.definitions && data.definitions.length > 0) {
                        html += '<p><strong style=\"color: #000000;\">Définitions :</strong></p><ol style=\"margin-top: 10px; padding-left: 20px;\">';
                        data.definitions.forEach(def => {
                            html += `<li style=\"margin-bottom: 10px; line-height: 1.6; color: #333333;\">\${def}</li>`;
                        });
                        html += '</ol>';
                    }
                    
                    if (data.examples && data.examples.length > 0) {
                        html += '<p><strong style=\"color: #000000;\">Exemples :</strong></p><ul style=\"margin-top: 10px; padding-left: 20px; font-style: italic;\">';
                        data.examples.forEach(ex => {
                            html += `<li style=\"margin-bottom: 8px; color: #555;\">\"\${ex}\"</li>`;
                        });
                        html += '</ul>';
                    }
                    
                    resultDiv.innerHTML = html;
                })
                .catch(error => {
                    resultDiv.innerHTML = `<p style=\"color: #ff6b6b; text-align: center; margin: 40px 0;\">❌ Erreur: \${error.message}</p>`;
                });
        }

        // Ajouter la possibilité de chercher avec la touche Entrée
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('dictionary-word');
            if (input) {
                input.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        searchWord();
                    }
                });
            }
        });
    </script>
    
    <script>
// ============ DIALOGUE VOCAL AMÉLIORÉ ============
let dialogue = [];
let indexActuel = 0;
let reconnaissanceVocale = null;
let enTrainDeParler = false;
let voixPreference = null;

// Fonction pour tester le microphone
function testerMicrophone() {
    navigator.mediaDevices.getUserMedia({ audio: true })
        .then(function(stream) {
            stream.getTracks().forEach(track => track.stop());
            
            document.getElementById('feedback-correction').style.display = 'block';
            document.getElementById('feedback-correction').innerHTML = `
                <div style=\"background: #10b981; color: white; padding: 20px; border-radius: 15px; text-align: center;\">
                    <p style=\"font-size: 2rem;\">✅</p>
                    <h4 style=\"color: white;\">Microphone fonctionnel !</h4>
                    <p style=\"color: white;\">Tu peux maintenant pratiquer.</p>
                </div>
            `;
        })
        .catch(function(err) {
            document.getElementById('feedback-correction').style.display = 'block';
            document.getElementById('feedback-correction').innerHTML = `
                <div style=\"background: #fee2e2; color: #b91c1c; padding: 20px; border-radius: 15px; text-align: center;\">
                    <p style=\"font-size: 2rem;\">❌</p>
                    <h4>Microphone non accessible</h4>
                    <p>Vérifie les permissions dans ton navigateur.</p>
                </div>
            `;
        });
}

// Initialiser la reconnaissance vocale
if ('webkitSpeechRecognition' in window) {
    reconnaissanceVocale = new webkitSpeechRecognition();
    reconnaissanceVocale.continuous = false;
    reconnaissanceVocale.interimResults = true;
    reconnaissanceVocale.maxAlternatives = 5;
    
    const langue = '";
        // line 597
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 597, $this->source); })()), "idNiveau", [], "any", false, false, false, 597), "idLangue", [], "any", false, false, false, 597), "nom", [], "any", false, false, false, 597), "html", null, true);
        yield "';
    reconnaissanceVocale.lang = langue === 'Anglais' ? 'en-US' : 'fr-FR';
    
    let recognitionTimeout;
    
    reconnaissanceVocale.onresult = function(event) {
        let interimTranscript = '';
        let finalTranscript = '';
        
        for (let i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalTranscript += event.results[i][0].transcript;
            } else {
                interimTranscript += event.results[i][0].transcript;
            }
        }
        
        if (interimTranscript !== '') {
            document.getElementById('feedback-correction').innerHTML = `
                <div style=\"background: #f3f4f6; padding: 20px; border-radius: 15px; text-align: center;\">
                    <p style=\"color: #333; font-size: 1.2rem;\">🎤 Je t'écoute...</p>
                    <p style=\"color: #059669; font-size: 1.1rem; font-style: italic; background: white; padding: 10px; border-radius: 8px;\">\"\${interimTranscript}\"</p>
                </div>
            `;
        }
        
        if (finalTranscript !== '') {
            clearTimeout(recognitionTimeout);
            recognitionTimeout = setTimeout(() => {
                verifierPrononciation(finalTranscript);
            }, 500);
        }
    };
    
    reconnaissanceVocale.onerror = function(event) {
        let message = \"Erreur de reconnaissance vocale: \";
        switch(event.error) {
            case 'no-speech':
                message = \"Je n'ai pas entendu de parole. Essaie de parler plus fort.\";
                break;
            case 'not-allowed':
                message = \"Permission pour le microphone refusée.\";
                break;
            default:
                message += event.error;
        }
        
        document.getElementById('feedback-correction').innerHTML = `
            <div style=\"background: #fee2e2; padding: 20px; border-radius: 15px; text-align: center;\">
                <p style=\"color: #b91c1c;\">❌ \${message}</p>
                <button onclick=\"commencerLecture()\" style=\"background: #3b82f6; color: white; border: none; padding: 10px 20px; border-radius: 50px; margin-top: 10px; cursor: pointer;\">
                    Réessayer
                </button>
            </div>
        `;
        arreterEcoute();
    };
    
    reconnaissanceVocale.onend = function() {
        enTrainDeParler = false;
    };
}

// Générer le dialogue
function genererDialogue() {
    const theme = document.getElementById('theme-input').value.trim();
    
    if (!theme) {
        alert(\"Veuillez entrer un thème de conversation\");
        return;
    }
    
    document.getElementById('etape-theme').style.display = 'none';
    document.getElementById('etape-dialogue').style.display = 'block';
    document.getElementById('dialogue-ia').style.display = 'none';
    document.getElementById('dialogue-etudiant').style.display = 'none';
    
    fetch('/dialogue/generer', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({
            theme: theme,
            niveau: '";
        // line 679
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 679, $this->source); })()), "idNiveau", [], "any", false, false, false, 679), "difficulte", [], "any", false, false, false, 679), "html", null, true);
        yield "',
            langue: '";
        // line 680
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 680, $this->source); })()), "idNiveau", [], "any", false, false, false, 680), "idLangue", [], "any", false, false, false, 680), "nom", [], "any", false, false, false, 680), "html", null, true);
        yield "'
        })
    })
    .then(response => response.json())
    .then(data => {
        dialogue = data.dialogue;
        document.getElementById('total-repliques').textContent = dialogue.length;
        indexActuel = 0;
        afficherReplique();
    })
    .catch(error => {
        console.error('Erreur:', error);
        alert('Erreur lors de la génération du dialogue');
    });
}

// Afficher la réplique courante
function afficherReplique() {
    if (indexActuel >= dialogue.length) {
        document.getElementById('dialogue-ia').style.display = 'none';
        document.getElementById('dialogue-etudiant').style.display = 'none';
        document.getElementById('btn-commencer').style.display = 'none';
        document.getElementById('btn-suivant').style.display = 'none';
        document.getElementById('btn-changer-voix').style.display = 'none';
        
        document.getElementById('feedback-correction').style.display = 'block';
        document.getElementById('feedback-correction').innerHTML = `
            <div style=\"background: #10b981; color: white; padding: 20px; border-radius: 15px; text-align: center;\">
                <span style=\"font-size: 3rem; display: block; margin-bottom: 15px;\">🎉</span>
                <h3 style=\"margin: 0 0 10px;\">Félicitations !</h3>
                <p>Tu as terminé la conversation !</p>
                <button onclick=\"recommencer()\" style=\"background: white; color: #10b981; border: none; padding: 15px 40px; border-radius: 50px; font-size: 1.1rem; font-weight: 600; margin-top: 20px; cursor: pointer;\">
                    🔄 Recommencer
                </button>
            </div>
        `;
        return;
    }
    
    const replique = dialogue[indexActuel];
    
    document.getElementById('replique-actuelle').textContent = indexActuel + 1;
    document.getElementById('barre-progression-dialogue').style.width = 
        ((indexActuel + 1) / dialogue.length * 100) + '%';
    
    if (replique.role === 'ia') {
        document.getElementById('dialogue-ia').style.display = 'block';
        document.getElementById('dialogue-etudiant').style.display = 'none';
        document.getElementById('btn-changer-voix').style.display = 'inline-block';
        
        let texteIA = replique.texte;
        if (texteIA.includes(':')) {
            texteIA = texteIA.split(':')[1].trim();
        }
        texteIA = texteIA.replace(/^[\"']|[\"']\$/g, '');
        texteIA = texteIA.replace(/\\s+/g, ' ').trim();
        
        document.getElementById('texte-ia').textContent = texteIA;
        document.getElementById('btn-commencer').style.display = 'none';
        document.getElementById('btn-suivant').style.display = 'none';
        
        lireTexteIA(texteIA);
        
    } else {
        document.getElementById('dialogue-ia').style.display = 'none';
        document.getElementById('dialogue-etudiant').style.display = 'block';
        document.getElementById('btn-changer-voix').style.display = 'none';
        
        let texteEtudiant = replique.texte;
        
        if (texteEtudiant.includes(':')) {
            const parties = texteEtudiant.split(':');
            texteEtudiant = parties[1] ? parties[1].trim() : parties[0].trim();
        }
        
        const prefixes = ['etudiant', 'étudiant', 'student', 'user', 'moi', 'toi'];
        const texteLower = texteEtudiant.toLowerCase();
        
        for (const prefix of prefixes) {
            if (texteLower.startsWith(prefix)) {
                texteEtudiant = texteEtudiant.substring(prefix.length).trim();
                texteEtudiant = texteEtudiant.replace(/^[:,\\s]+/, '');
                break;
            }
        }
        
        texteEtudiant = texteEtudiant.replace(/^[\"'\"\"]|[\"'\"\"]\$/g, '');
        texteEtudiant = texteEtudiant.replace(/[?!]+\$/, (match) => match.charAt(0));
        texteEtudiant = texteEtudiant.replace(/^(um|euh|ah|oh|bon|ben)[\\s.,!?]+/i, '');
        texteEtudiant = texteEtudiant.replace(/\\s+/g, ' ').trim();
        
        if (texteEtudiant.length > 0) {
            texteEtudiant = texteEtudiant.charAt(0).toUpperCase() + texteEtudiant.slice(1);
        }
        
        if (texteEtudiant.length > 0 && !texteEtudiant.match(/[.!?]\$/)) {
            texteEtudiant += '.';
        }
        
        document.getElementById('texte-etudiant').textContent = texteEtudiant;
        document.getElementById('btn-commencer').style.display = 'inline-block';
        document.getElementById('btn-suivant').style.display = 'none';
        
        document.getElementById('feedback-correction').style.display = 'none';
        document.getElementById('feedback-correction').innerHTML = '';
        document.getElementById('score-actuel').textContent = '0%';
    }
}

// Fonction pour changer de voix
function changerVoix() {
    const voices = window.speechSynthesis.getVoices();
    const voixAnglaises = voices.filter(v => v.lang.startsWith('en'));
    
    if (voixAnglaises.length === 0) {
        alert(\"Aucune voix anglaise disponible\");
        return;
    }
    
    let message = \"Choisis une voix :\\n\\n\";
    voixAnglaises.forEach((voice, index) => {
        message += `\${index + 1}. \${voice.name} (\${voice.lang})\\n`;
    });
    
    const choix = prompt(message + \"\\nEntre le numéro de la voix choisie:\");
    
    if (choix && !isNaN(choix) && choix > 0 && choix <= voixAnglaises.length) {
        voixPreference = voixAnglaises[choix - 1];
        alert(`✅ Voix \"\${voixPreference.name}\" sélectionnée !`);
        
        if (dialogue.length > 0 && indexActuel < dialogue.length && dialogue[indexActuel].role === 'ia') {
            lireTexteIA(document.getElementById('texte-ia').textContent);
        }
    }
}

// Fonction pour lire le texte de l'IA
function lireTexteIA(texte) {
    window.speechSynthesis.cancel();
    
    const utterance = new SpeechSynthesisUtterance(texte);
    const langue = '";
        // line 821
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 821, $this->source); })()), "idNiveau", [], "any", false, false, false, 821), "idLangue", [], "any", false, false, false, 821), "nom", [], "any", false, false, false, 821), "html", null, true);
        yield "';
    
    if (langue === 'Anglais') {
        utterance.lang = 'en-US';
        utterance.rate = 0.85;
        
        function setEnglishVoice() {
            const voices = window.speechSynthesis.getVoices();
            
            if (voices.length === 0) {
                setTimeout(setEnglishVoice, 100);
                return;
            }
            
            if (voixPreference && voixPreference.name) {
                const savedVoice = voices.find(v => v.name === voixPreference.name);
                if (savedVoice) {
                    utterance.voice = savedVoice;
                    return;
                }
            }
            
            const preferredVoices = [
                voices.find(v => v.name === 'Samantha'),
                voices.find(v => v.name === 'Alex'),
                voices.find(v => v.name === 'Karen'),
                voices.find(v => v.name === 'Daniel'),
                voices.find(v => v.name.includes('Google') && v.lang === 'en-US'),
                voices.find(v => v.lang === 'en-US'),
                voices.find(v => v.lang.startsWith('en'))
            ];
            
            for (const voice of preferredVoices) {
                if (voice) {
                    utterance.voice = voice;
                    break;
                }
            }
        }
        
        if (window.speechSynthesis.getVoices().length > 0) {
            setEnglishVoice();
        } else {
            window.speechSynthesis.onvoiceschanged = setEnglishVoice;
        }
    }
    
    utterance.onend = function() {
        setTimeout(() => {
            indexActuel++;
            afficherReplique();
        }, 1000);
    };
    
    window.speechSynthesis.speak(utterance);
}

// Commencer la lecture
function commencerLecture() {
    if (!reconnaissanceVocale) {
        alert(\"La reconnaissance vocale n'est pas supportée\");
        return;
    }
    
    const texteAttendu = document.getElementById('texte-etudiant').textContent;
    document.getElementById('feedback-correction').style.display = 'block';
    document.getElementById('btn-commencer').style.display = 'none';
    document.getElementById('btn-suivant').style.display = 'none';
    
    document.getElementById('feedback-correction').innerHTML = `
        <div style=\"background: #f3f4f6; padding: 20px; border-radius: 15px; text-align: center;\">
            <p style=\"color: #333; font-size: 1.2rem;\">🎤 Parle maintenant...</p>
            <p style=\"color: #059669; font-size: 1.1rem; font-weight: bold; background: white; padding: 15px; border-radius: 10px;\">
                \"\${texteAttendu}\"
            </p>
        </div>
    `;
    
    try {
        reconnaissanceVocale.abort();
    } catch(e) {}
    
    setTimeout(() => {
        try {
            reconnaissanceVocale.start();
            enTrainDeParler = true;
        } catch(e) {
            console.error('Erreur démarrage:', e);
        }
    }, 500);
}

// Passer à la réplique suivante
function passerRepliqueSuivante() {
    arreterEcoute();
    window.speechSynthesis.cancel();
    indexActuel++;
    afficherReplique();
    document.getElementById('btn-suivant').style.display = 'none';
}

// Recommencer
function recommencer() {
    window.speechSynthesis.cancel();
    document.getElementById('etape-theme').style.display = 'block';
    document.getElementById('etape-dialogue').style.display = 'none';
    document.getElementById('theme-input').value = '';
    document.getElementById('score-actuel').textContent = '0%';
    arreterEcoute();
}

// Vérifier la prononciation
function verifierPrononciation(parole) {
    const texteAttendu = document.getElementById('texte-etudiant').textContent;
    parole = parole.trim();
    
    fetch('/dialogue/verifier', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({ texte: parole, attendu: texteAttendu })
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('score-actuel').textContent = data.score + '%';
        
        let feedbackHtml = '';
        
        if (data.reussite) {
            feedbackHtml = `
                <div style=\"background: #10b981; color: white; padding: 20px; border-radius: 15px;\">
                    <h4 style=\"color: white;\">✅ Parfait !</h4>
                    <p style=\"color: white;\">Tu as dit : \"\${data.texte_utilisateur}\"</p>
                    <p style=\"color: white;\">Score: \${data.score}%</p>
                </div>
            `;
        } else {
            let erreursHtml = '';
            
            if (data.erreurs && data.erreurs.length > 0) {
                data.erreurs.forEach(erreur => {
                    erreursHtml += `
                        <div style=\"background: #fee2e2; padding: 10px; border-radius: 8px; margin-bottom: 8px;\">
                            <p style=\"color: #b91c1c;\">❌ \${erreur.message}</p>
                        </div>
                    `;
                });
            }
            
            feedbackHtml = `
                <div style=\"background: #ffffff; border: 2px solid #fbbf24; border-radius: 15px; padding: 20px;\">
                    <h4 style=\"color: #92400e;\">📝 Analyse</h4>
                    <p><strong>Tu as dit :</strong> \"\${data.texte_utilisateur}\"</p>
                    \${erreursHtml}
                    <p style=\"color: #92400e; font-weight: bold;\">Score: \${data.score}%</p>
                </div>
            `;
        }
        
        document.getElementById('feedback-correction').innerHTML = feedbackHtml;
        document.getElementById('btn-suivant').style.display = 'inline-block';
        arreterEcoute();
    })
    .catch(error => {
        console.error('Erreur:', error);
        arreterEcoute();
    });
}

// Arrêter l'écoute
function arreterEcoute() {
    if (reconnaissanceVocale && enTrainDeParler) {
        try {
            reconnaissanceVocale.stop();
        } catch(e) {}
        enTrainDeParler = false;
    }
}

// ============ JEUX ÉDUCATIFS ============
let jeuActuel = null;
let typeJeuActuel = 'scrambled';
let motsSelectionnes = [];

// Initialiser les boutons de jeu
document.querySelectorAll('.jeu-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.jeu-btn').forEach(b => {
            b.style.background = '#f3f4f6';
            b.style.color = '#333';
        });
        this.style.background = '#8b5cf6';
        this.style.color = 'white';
    });
});

// Fonction pour choisir un jeu
function choisirJeu(type) {
    typeJeuActuel = type;
    chargerJeu();
}

// Charger un nouveau jeu
function chargerJeu() {
    const niveau = '";
        // line 1024
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 1024, $this->source); })()), "idNiveau", [], "any", false, false, false, 1024), "difficulte", [], "any", false, false, false, 1024), "html", null, true);
        yield "';
    const langue = '";
        // line 1025
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 1025, $this->source); })()), "idNiveau", [], "any", false, false, false, 1025), "idLangue", [], "any", false, false, false, 1025), "nom", [], "any", false, false, false, 1025), "html", null, true);
        yield "';
    
    document.getElementById('zone-jeu').innerHTML = `
        <div style=\"text-align: center; padding: 50px;\">
            <p style=\"color: #666;\">🎲 Chargement du jeu...</p>
        </div>
    `;
    
    fetch('/jeu/generer', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({
            type: typeJeuActuel,
            niveau: niveau,
            langue: langue,
            theme: document.getElementById('theme-input')?.value || 'général'
        })
    })
    .then(response => response.json())
    .then(data => {
        jeuActuel = data;
        afficherJeu(data);
    })
    .catch(error => {
        console.error('Erreur chargement jeu:', error);
        document.getElementById('zone-jeu').innerHTML = `
            <div style=\"text-align: center; padding: 50px;\">
                <p style=\"color: #b91c1c;\">❌ Erreur de chargement</p>
                <button onclick=\"chargerJeu()\" style=\"background: #8b5cf6; color: white; border: none; padding: 10px 20px; border-radius: 50px; margin-top: 10px; cursor: pointer;\">
                    Réessayer
                </button>
            </div>
        `;
    });
}
// Fonction pour debug - À SUPPRIMER PLUS TARD
function debugJeu() {
    console.log('=== DEBUG JEU ===');
    console.log('Type jeu:', typeJeuActuel);
    console.log('Niveau:', '";
        // line 1064
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 1064, $this->source); })()), "idNiveau", [], "any", false, false, false, 1064), "difficulte", [], "any", false, false, false, 1064), "html", null, true);
        yield "');
    console.log('Langue:', '";
        // line 1065
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 1065, $this->source); })()), "idNiveau", [], "any", false, false, false, 1065), "idLangue", [], "any", false, false, false, 1065), "nom", [], "any", false, false, false, 1065), "html", null, true);
        yield "');
    console.log('================');
}

// Appelle-la dans chargerJeu() après la récupération des données
fetch('/jeu/generer', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify({
        type: typeJeuActuel,
        niveau: niveau,
        langue: langue,
        theme: document.getElementById('theme-input')?.value || (langue === 'Anglais' ? 'general' : 'général')
    })
})
.then(response => response.json())
.then(data => {
    console.log('Données reçues du serveur:', data); // DEBUG
    jeuActuel = data;
    afficherJeu(data);
})

// Afficher le jeu selon son type
function afficherJeu(jeu) {
    switch(jeu.type) {
        case 'scrambled':
            afficherScrambledGame(jeu);
            break;
        case 'oddoneout':
            afficherOddOneOutGame(jeu);
            break;
        case 'crossword':
            afficherCrosswordGame(jeu);
            break;
        default:
            document.getElementById('zone-jeu').innerHTML = '<p>Type de jeu inconnu</p>';
    }
}
// Fonction pour obtenir le titre du jeu dans la bonne langue
function getGameTitle(jeu) {
    if (jeu.langue === 'Anglais') {
        const titles = {
            'scrambled': '🎯 Put the words in order',
            'oddoneout': '🔍 Find the intruder',
            'crossword': '🧩 Crossword'
        };
        return titles[jeu.type] || 'Game';
    } else {
        const titles = {
            'scrambled': '🎯 Remets les mots dans l\\'ordre',
            'oddoneout': '🔍 Trouve l\\'intrus',
            'crossword': '🧩 Mots Croisés'
        };
        return titles[jeu.type] || 'Jeu';
    }
}
// ============ JEUX ÉDUCATIFS - VERSION AVEC COULEURS AMÉLIORÉES ============

// JEU 1: Phrase Mélangée
// JEU 1: Phrase Mélangée (version multilingue)
function afficherScrambledGame(jeu) {
    motsSelectionnes = [];
    let html = `
        <div style=\"text-align: center;\">
            <h3 style=\"color: #333; margin-bottom: 20px; font-size: 1.8rem;\">\${getGameTitle(jeu)}</h3>
            
            <div style=\"background: #f8f9fa; padding: 25px; border-radius: 15px; margin-bottom: 30px; border: 2px solid #8b5cf6;\">
                <p style=\"color: #4a5568; margin-bottom: 20px; font-weight: 600;\">\${jeu.langue === 'Anglais' ? 'Click on the words in the correct order:' : 'Clique sur les mots dans le bon ordre :'}</p>
                <div style=\"display: flex; flex-wrap: wrap; gap: 12px; justify-content: center; min-height: 80px;\" id=\"mots-melange\">
    `;
    
    jeu.scrambled.forEach((mot, index) => {
        html += `
            <span onclick=\"selectionnerMot('\${mot}', this)\" 
                  class=\"mot-jeu\" 
                  style=\"background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: white; padding: 15px 25px; border-radius: 50px; cursor: pointer; font-weight: 600; font-size: 1.2rem; box-shadow: 0 4px 12px rgba(139,92,246,0.3); transition: all 0.2s; border: none; display: inline-block;\"
                  onmouseover=\"this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 16px rgba(139,92,246,0.5)';\"
                  onmouseout=\"this.style.transform='scale(1)'; this.style.boxShadow='0 4px 12px rgba(139,92,246,0.3)';\">
                \${mot}
            </span>
        `;
    });
    
    html += `
                </div>
            </div>
            
            <div style=\"background: #e9f0ff; padding: 25px; border-radius: 15px; margin-bottom: 30px; border: 2px solid #3b82f6;\">
                <p style=\"color: #1e3a8a; margin-bottom: 15px; font-weight: 600;\">\${jeu.langue === 'Anglais' ? 'Your sentence:' : 'Ta phrase :'}</p>
                <div id=\"phrase-utilisateur\" style=\"min-height: 70px; background: white; border-radius: 12px; padding: 20px; font-size: 1.3rem; border: 2px dashed #3b82f6; color: #333;\"></div>
            </div>
            
            <div style=\"display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-top: 20px;\">
                <button onclick=\"verifierScrambled()\" 
                        style=\"background: #10b981; color: white; border: none; padding: 15px 40px; border-radius: 50px; font-weight: 700; font-size: 1.1rem; cursor: pointer; box-shadow: 0 4px 12px rgba(16,185,129,0.4); transition: all 0.2s;\">
                    ✅ \${jeu.langue === 'Anglais' ? 'Check' : 'Vérifier'}
                </button>
                <button onclick=\"recommencerJeu()\" 
                        style=\"background: #6b7280; color: white; border: none; padding: 15px 40px; border-radius: 50px; font-weight: 700; font-size: 1.1rem; cursor: pointer; box-shadow: 0 4px 12px rgba(107,114,128,0.4); transition: all 0.2s;\">
                    🔄 \${jeu.langue === 'Anglais' ? 'Restart' : 'Recommencer'}
                </button>
                <button onclick=\"avoirIndice()\" 
                        style=\"background: #f59e0b; color: white; border: none; padding: 15px 40px; border-radius: 50px; font-weight: 700; font-size: 1.1rem; cursor: pointer; box-shadow: 0 4px 12px rgba(245,158,11,0.4); transition: all 0.2s;\">
                    💡 \${jeu.langue === 'Anglais' ? 'Hint' : 'Indice'}
                </button>
            </div>
            
            <p id=\"indice-zone\" style=\"color: #4b5563; margin-top: 25px; font-style: italic; background: #fff3cd; padding: 15px; border-radius: 10px; border-left: 4px solid #f59e0b; text-align: left;\"></p>
        </div>
    `;
    
    document.getElementById('zone-jeu').innerHTML = html;
}

// JEU 2: Trouve l'Intrus (version multilingue)
function afficherOddOneOutGame(jeu) {
    let html = `
        <div style=\"text-align: center;\">
            <h3 style=\"color: #333; margin-bottom: 20px; font-size: 1.8rem;\">\${getGameTitle(jeu)}</h3>
            <p style=\"color: #4b5563; margin-bottom: 30px; font-size: 1.2rem; background: #f3f4f6; padding: 15px; border-radius: 10px;\">
                \${jeu.explanation}
            </p>
            
            <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; max-width: 600px; margin: 0 auto;\">
    `;
    
    jeu.words.forEach((mot, index) => {
        // Tous les mots ont le même style bleu
        html += `
            <div onclick=\"verifierIntrus('\${mot}', '\${jeu.intruder}', this)\" 
                 style=\"background: #dbeafe; padding: 30px; border-radius: 15px; cursor: pointer; text-align: center; border: 3px solid #3b82f6; transition: all 0.2s; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\"
                 onmouseover=\"this.style.transform='scale(1.02)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.2)'; this.style.background='#bfdbfe';\"
                 onmouseout=\"this.style.transform='scale(1)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'; this.style.background='#dbeafe';\">
                
                <p style=\"font-size: 2rem; font-weight: bold; margin: 0; color: #1e40af;\">\${mot}</p>
            </div>
        `;
    });
    
    html += `</div>`;
    html += `<div id=\"game-message-container\" style=\"margin-top: 20px;\"></div>`;
    
    document.getElementById('zone-jeu').innerHTML = html;
}

// Fonction showGameMessage multilingue
function showGameMessage(message, type) {
    // Supprimer l'ancien message s'il existe
    const oldMessage = document.getElementById('game-message');
    if (oldMessage) {
        oldMessage.remove();
    }
    
    // Créer le nouveau message
    const messageDiv = document.createElement('div');
    messageDiv.id = 'game-message';
    messageDiv.style.marginTop = '20px';
    messageDiv.style.padding = '15px';
    messageDiv.style.borderRadius = '10px';
    messageDiv.style.textAlign = 'center';
    messageDiv.style.fontWeight = 'bold';
    messageDiv.style.animation = 'fadeInOut 2s';
    
    if (type === 'success') {
        messageDiv.style.background = '#10b981';
        messageDiv.style.color = 'white';
    } else {
        messageDiv.style.background = '#fee2e2';
        messageDiv.style.color = '#b91c1c';
        messageDiv.style.border = '1px solid #dc2626';
    }
    
    messageDiv.textContent = message;
    
    // Ajouter le message après la grille de jeu
    const zoneJeu = document.getElementById('zone-jeu');
    zoneJeu.appendChild(messageDiv);
    
    // Supprimer le message après 2 secondes
    setTimeout(() => {
        if (messageDiv && messageDiv.parentNode) {
            messageDiv.remove();
        }
    }, 2000);
}

// Fonction pour avoir un indice multilingue
function avoirIndice() {
    if (jeuActuel && jeuActuel.hint) {
        document.getElementById('indice-zone').textContent = '💡 ' + jeuActuel.hint;
    } else if (jeuActuel && jeuActuel.type === 'oddoneout') {
        if (jeuActuel.langue === 'Anglais') {
            document.getElementById('indice-zone').textContent = '💡 Look for the word that doesn\\'t belong';
        } else {
            document.getElementById('indice-zone').textContent = '💡 Cherche le mot qui ne correspond pas à la catégorie';
        }
    } else {
        if (jeuActuel?.langue === 'Anglais') {
            document.getElementById('indice-zone').textContent = '💡 No hint available';
        } else {
            document.getElementById('indice-zone').textContent = '💡 Aucun indice disponible';
        }
    }
}

// Sélectionner un mot (version améliorée)
function selectionnerMot(mot, element) {
    motsSelectionnes.push(mot);
    
    const phraseDiv = document.getElementById('phrase-utilisateur');
    phraseDiv.innerHTML += `
        <span style=\"background: #3b82f6; color: white; padding: 8px 18px; border-radius: 50px; margin: 6px; display: inline-block; font-weight: 600; font-size: 1.2rem; box-shadow: 0 2px 8px rgba(59,130,246,0.3);\">
            \${mot}
        </span>
    `;
    
    // Animation de disparition
    element.style.opacity = '0.3';
    element.style.transform = 'scale(0.95)';
    element.style.pointerEvents = 'none';
}

// Vérifier la réponse du jeu de phrase mélangée
function verifierScrambled() {
    const phraseUtilisateur = motsSelectionnes.join(' ');
    
    fetch('/jeu/verifier', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({ type: 'scrambled', reponse: phraseUtilisateur })
    })
    .then(response => response.json())
    .then(data => {
        if (data.correct) {
            // Animation de succès
            const zoneJeu = document.getElementById('zone-jeu');
            zoneJeu.innerHTML += `
                <div style=\"position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #10b981; color: white; padding: 30px; border-radius: 20px; text-align: center; z-index: 9999; box-shadow: 0 10px 30px rgba(0,0,0,0.3); animation: fadeInOut 2s;\">
                    <span style=\"font-size: 4rem;\">🎉</span>
                    <h3 style=\"color: white; margin-top: 10px;\">Bravo !</h3>
                    <p style=\"color: white;\">\${data.message}</p>
                </div>
            `;
            
            mettreAJourProgression();
            setTimeout(() => chargerJeu(), 2000);
        } else {
            alert(data.message || '❌ Pas tout à fait. Essaie encore !');
        }
    })
    .catch(error => {
        console.error('Erreur vérification:', error);
        alert('Erreur lors de la vérification');
    });
}


// Vérifier l'intrus
function verifierIntrus(mot, intrus, element) {
    if (mot === intrus) {
        // Réponse correcte
        element.style.background = '#10b981';
        element.style.borderColor = '#059669';
        element.style.color = 'white';
        
        // Afficher le message de succès DANS la zone de jeu (pas en alert)
        showGameMessage('🎉 Bravo ! C\\'est bien l\\'intrus !', 'success');
        
        mettreAJourProgression();
        setTimeout(() => chargerJeu(), 2000);
    } else {
        // Réponse incorrecte
        element.style.background = '#fee2e2';
        element.style.borderColor = '#dc2626';
        element.style.transform = 'scale(0.98)';
        
        // Afficher le message d'erreur
        showGameMessage('❌ Ce n\\'est pas l\\'intrus. Essaie encore !', 'error');
        
        // Remettre le style après un délai
        setTimeout(() => {
            element.style.background = '#e0f2fe';
            element.style.borderColor = '#3b82f6';
            element.style.transform = 'scale(1)';
        }, 500);
    }
}

// JEU 3: Mots Croisés (version améliorée avec grille claire)
function afficherCrosswordGame(jeu) {
    let html = `
        <div style=\"text-align: center;\">
            <h3 style=\"color: #333; margin-bottom: 20px; font-size: 1.8rem;\">\${getGameTitle(jeu)}</h3>
            
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 30px; background: #f8f9fa; padding: 25px; border-radius: 15px;\">
                <div>
                    <h4 style=\"color: #333; margin-bottom: 15px;\">📋 \${jeu.langue === 'Anglais' ? 'Grid' : 'Grille'}</h4>
                    <div style=\"background: #ffffff; padding: 20px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
    `;
    
    // Créer une grille de 8x8 avec des cases numérotées
    for (let i = 0; i < 8; i++) {
        html += '<div style=\"display: flex; justify-content: center;\">';
        for (let j = 0; j < 8; j++) {
            // Numéroter les premières cases pour guider l'utilisateur
            const cellNumber = (i === 0 && j === 0) ? '1' : 
                              (i === 0 && j === 3) ? '2' : 
                              (i === 3 && j === 0) ? '3' : '';
            
            html += `
                <div style=\"position: relative; width: 50px; height: 50px; border: 2px solid #8b5cf6; display: flex; align-items: center; justify-content: center; background: white;\">
                    <input type=\"text\" maxlength=\"1\" 
                           style=\"width: 100%; height: 100%; text-align: center; border: none; outline: none; font-size: 1.5rem; font-weight: bold; color: #333; background: transparent;\"
                           placeholder=\"\${cellNumber}\">
                    \${cellNumber ? `<span style=\"position: absolute; top: 2px; left: 2px; font-size: 0.7rem; color: #8b5cf6; font-weight: bold;\">\${cellNumber}</span>` : ''}
                </div>
            `;
        }
        html += '</div>';
    }
    
    html += `
                    </div>
                    <p style=\"color: #666; margin-top: 10px; font-size: 0.9rem;\">
                        \${jeu.langue === 'Anglais' ? 'Enter one letter per box' : 'Entre une lettre par case'}
                    </p>
                </div>
                
                <div>
                    <h4 style=\"color: #333; margin-bottom: 15px;\">📝 \${jeu.langue === 'Anglais' ? 'Clues' : 'Indices'}</h4>
                    <div style=\"background: #ffffff; padding: 20px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); max-height: 400px; overflow-y: auto;\">
    `;
    
    jeu.words.forEach((word, index) => {
        html += `
            <div style=\"margin-bottom: 20px; padding: 15px; background: \${index % 2 === 0 ? '#f3f4f6' : '#e9f0ff'}; border-radius: 10px; border-left: 4px solid #8b5cf6;\">
                <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                    <p style=\"color: #333; font-weight: 600; margin: 0;\">
                        \${index + 1}. \${word.lettres} \${jeu.langue === 'Anglais' ? 'letters' : 'lettres'}
                    </p>
                    <span style=\"background: #8b5cf6; color: white; padding: 3px 10px; border-radius: 20px; font-size: 0.8rem;\">
                        \${jeu.langue === 'Anglais' ? 'Across' : 'Horizontal'}
                    </span>
                </div>
                <p style=\"color: #4b5563; margin: 10px 0 5px 0;\">🔹 \${word.indice}</p>
                <div style=\"display: flex; gap: 5px; margin-top: 10px;\">
                    \${Array(word.lettres).fill().map((_, i) => `
                        <span style=\"display: inline-block; width: 30px; height: 30px; border: 2px dashed #8b5cf6; border-radius: 5px; background: white;\"></span>
                    `).join('')}
                </div>
            </div>
        `;
    });
    
    html += `
                    </div>
                </div>
            </div>
            
            <div style=\"margin-top: 30px; display: flex; gap: 15px; justify-content: center;\">
                <button onclick=\"verifierMotsCroises()\" 
                        style=\"background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: white; border: none; padding: 15px 50px; border-radius: 50px; font-weight: 700; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 12px rgba(139,92,246,0.4); transition: all 0.2s;\">
                    ✅ \${jeu.langue === 'Anglais' ? 'Check the grid' : 'Vérifier la grille'}
                </button>
                <button onclick=\"recommencerJeu()\" 
                        style=\"background: #6b7280; color: white; border: none; padding: 15px 50px; border-radius: 50px; font-weight: 700; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 12px rgba(107,114,128,0.4); transition: all 0.2s;\">
                    🔄 \${jeu.langue === 'Anglais' ? 'Restart' : 'Recommencer'}
                </button>
            </div>
        </div>
    `;
    
    document.getElementById('zone-jeu').innerHTML = html;
}

// Fonction utilitaire pour les mots croisés (améliorée)
function verifierMotsCroises() {
    // Récupérer toutes les entrées de la grille
    const inputs = document.querySelectorAll('#zone-jeu input');
    let motsTrouves = 0;
    let reponses = [];
    
    inputs.forEach((input, index) => {
        if (input.value && input.value.trim() !== '') {
            motsTrouves++;
            reponses.push(`\${index+1}: \${input.value.toUpperCase()}`);
        }
    });
    
    if (motsTrouves > 0) {
        // Message plus clair avec la progression
        showGameMessage(
            jeuActuel?.langue === 'Anglais' 
                ? `🔍 You've filled \${motsTrouves} cells! Keep going!` 
                : `🔍 Tu as rempli \${motsTrouves} cases ! Continue !`,
            'info'
        );
    } else {
        showGameMessage(
            jeuActuel?.langue === 'Anglais' 
                ? '❌ Fill some cells first!' 
                : '❌ Remplis d\\'abord quelques cases !',
            'error'
        );
    }
}

// Ajouter cette nouvelle fonction pour les messages d'information
function showGameMessage(message, type) {
    // Supprimer l'ancien message s'il existe
    const oldMessage = document.getElementById('game-message');
    if (oldMessage) {
        oldMessage.remove();
    }
    
    // Créer le nouveau message
    const messageDiv = document.createElement('div');
    messageDiv.id = 'game-message';
    messageDiv.style.marginTop = '20px';
    messageDiv.style.padding = '15px';
    messageDiv.style.borderRadius = '10px';
    messageDiv.style.textAlign = 'center';
    messageDiv.style.fontWeight = 'bold';
    messageDiv.style.animation = 'fadeInOut 2s';
    
    if (type === 'success') {
        messageDiv.style.background = '#10b981';
        messageDiv.style.color = 'white';
    } else if (type === 'error') {
        messageDiv.style.background = '#fee2e2';
        messageDiv.style.color = '#b91c1c';
        messageDiv.style.border = '1px solid #dc2626';
    } else {
        messageDiv.style.background = '#3b82f6';
        messageDiv.style.color = 'white';
    }
    
    messageDiv.textContent = message;
    
    // Ajouter le message après la grille de jeu
    const zoneJeu = document.getElementById('zone-jeu');
    zoneJeu.appendChild(messageDiv);
    
    // Supprimer le message après 2 secondes
    setTimeout(() => {
        if (messageDiv && messageDiv.parentNode) {
            messageDiv.remove();
        }
    }, 2000);
}

// Fonctions utilitaires
function recommencerJeu() {
    chargerJeu();
}



function mettreAJourProgression() {
    let points = parseInt(document.getElementById('points-jeu').textContent) || 0;
    points += 10;
    document.getElementById('points-jeu').textContent = points;
    
    let progression = document.getElementById('barre-progression-jeu');
    let currentWidth = parseInt(progression.style.width) || 0;
    let newWidth = Math.min(currentWidth + 33.33, 100);
    progression.style.width = newWidth + '%';
    document.getElementById('progression-jeu').textContent = Math.round(newWidth/33.33) + '/3';
}

// Animation CSS
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeInOut {
        0% { opacity: 0; transform: translate(-50%, -60%); }
        20% { opacity: 1; transform: translate(-50%, -50%); }
        80% { opacity: 1; transform: translate(-50%, -50%); }
        100% { opacity: 0; transform: translate(-50%, -40%); }
    }
`;
document.head.appendChild(style);
</script>
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
        return "cours/base_apprentissage.html.twig";
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
        return array (  1454 => 1065,  1450 => 1064,  1408 => 1025,  1404 => 1024,  1198 => 821,  1054 => 680,  1050 => 679,  965 => 597,  844 => 479,  835 => 473,  817 => 458,  810 => 454,  760 => 407,  618 => 268,  534 => 186,  528 => 182,  525 => 181,  522 => 179,  519 => 178,  499 => 172,  485 => 161,  478 => 156,  460 => 155,  457 => 154,  454 => 152,  451 => 151,  435 => 148,  432 => 147,  424 => 142,  419 => 140,  416 => 139,  407 => 135,  404 => 134,  402 => 133,  395 => 130,  393 => 129,  385 => 126,  382 => 125,  380 => 124,  375 => 123,  373 => 122,  370 => 121,  367 => 120,  363 => 118,  356 => 114,  352 => 112,  341 => 104,  337 => 102,  335 => 101,  332 => 100,  329 => 99,  326 => 98,  323 => 97,  320 => 96,  317 => 95,  314 => 94,  312 => 93,  309 => 92,  306 => 91,  303 => 90,  301 => 89,  299 => 88,  290 => 84,  286 => 82,  283 => 81,  278 => 80,  274 => 79,  270 => 78,  266 => 77,  262 => 76,  255 => 72,  252 => 71,  249 => 70,  246 => 69,  242 => 68,  238 => 67,  234 => 66,  230 => 65,  227 => 64,  224 => 63,  221 => 62,  218 => 61,  216 => 60,  213 => 59,  210 => 58,  192 => 57,  189 => 56,  163 => 32,  154 => 28,  148 => 25,  131 => 10,  118 => 9,  104 => 6,  91 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Leçon {{ cour.numero }} – {{ cour.idNiveau.titre }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 60px 20px; color: white; font-family: system-ui, sans-serif;\">
    <div style=\"max-width: 1100px; margin: 0 auto;\">
        <br><br><br><br>

        <!-- Chronomètre -->
        <div style=\"position: fixed; top: 100px; right: 30px; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border-radius: 50px; padding: 15px 25px; border: 1px solid rgba(255,255,255,0.3); z-index: 1000;\">
            <div style=\"display: flex; align-items: center; gap: 15px;\">
                <span style=\"font-size: 1.5rem;\">⏱️</span>
                <span style=\"font-size: 1.8rem; font-weight: 800; color: white;\" id=\"chrono\">00:00</span>
            </div>
        </div>

        <!-- En-tête avec bouton générer -->
        <div style=\"text-align: center; margin-bottom: 60px;\">
            <h1 style=\"font-size: 3rem; font-weight: 900; color: white; margin: 0 0 12px; text-shadow: 0 4px 12px rgba(0,0,0,0.4);\">
                Leçon {{ cour.numero }}
            </h1>
            <p style=\"font-size: 1.5rem; color: rgba(255,255,255,0.9); margin: 0 0 30px;\">
                {{ cour.idNiveau.titre }} • {{ cour.idNiveau.idLangue.nom }}
            </p>
            
            <!-- BOUTON GÉNÉRER UN COURS PERSONNALISÉ -->
            <a href=\"{{ path('app_cours_personnalise_generer', {id: cour.id}) }}\" 
               style=\"display: inline-block; background: linear-gradient(135deg, #f97316, #ea580c); color: white; padding: 15px 40px; border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 1.2rem; box-shadow: 0 8px 20px rgba(249,115,22,0.4); transition: all 0.3s; margin-bottom: 30px;\"
               onmouseover=\"this.style.transform='scale(1.05)'; this.style.boxShadow='0 12px 30px rgba(249,115,22,0.6)';\"
               onmouseout=\"this.style.transform='scale(1)'; this.style.boxShadow='0 8px 20px rgba(249,115,22,0.4)';\">
                🎓 Générer un cours personnalisé
            </a>
        </div>

        <!-- Filtrage -->
        <div style=\"margin-bottom: 50px; text-align: center;\">
            <div style=\"display: inline-flex; flex-wrap: wrap; gap: 14px; justify-content: center;\">
                <button class=\"filter-btn active\" data-filter=\"all\" style=\"background: #6366f1; color: white; padding: 14px 28px; border: none; border-radius: 14px; font-weight: 700; cursor: pointer; transition: all 0.25s; box-shadow: 0 4px 12px rgba(99,102,241,0.4);\">Tous</button>
                <button class=\"filter-btn\" data-filter=\"pdf\" style=\"background: #f97316; color: white; padding: 14px 28px; border: none; border-radius: 14px; font-weight: 700; cursor: pointer; transition: all 0.25s; box-shadow: 0 4px 12px rgba(249,115,22,0.4);\">PDF</button>
                <button class=\"filter-btn\" data-filter=\"video\" style=\"background: #ef4444; color: white; padding: 14px 28px; border: none; border-radius: 14px; font-weight: 700; cursor: pointer; transition: all 0.25s; box-shadow: 0 4px 12px rgba(239,68,68,0.4);\">Vidéo</button>
                <button class=\"filter-btn\" data-filter=\"image\" style=\"background: #8b5cf6; color: white; padding: 14px 28px; border: none; border-radius: 14px; font-weight: 700; cursor: pointer; transition: all 0.25s; box-shadow: 0 4px 12px rgba(139,92,246,0.4);\">Image</button>
                <button class=\"filter-btn\" data-filter=\"audio\" style=\"background: #10b981; color: white; padding: 14px 28px; border: none; border-radius: 14px; font-weight: 700; cursor: pointer; transition: all 0.25s; box-shadow: 0 4px 12px rgba(16,185,129,0.4);\">Audio</button>
                <button class=\"filter-btn\" data-filter=\"other\" style=\"background: #64748b; color: white; padding: 14px 28px; border: none; border-radius: 14px; font-weight: 700; cursor: pointer; transition: all 0.25s; box-shadow: 0 4px 12px rgba(100,116,139,0.4);\">Autres</button>
            </div>
        </div>

        <!-- Conteneur ressources -->
        <div id=\"ressources-container\" style=\"display: grid; grid-template-columns: repeat(auto-fill, minmax(420px, 1fr)); gap: 32px;\">
            
            {# ============ RESSOURCES NORMALES ============ #}
            {% if files|length > 0 %}
                {% for res in files %}
                    {% set isYoutube = res matches '/(youtube\\\\.com|youtu\\\\.be)/i' %}

                    {% if isYoutube %}
                        {% set type = 'video' %}
                    {% else %}
                        {% set ext = res|split('.')|last|lower %}
                        {% set type = 'other' %}
                        {% if ext in ['pdf'] %}{% set type = 'pdf' %}
                        {% elseif ext in ['mp4','webm','mov'] %}{% set type = 'video' %}
                        {% elseif ext in ['jpg','jpeg','png','gif','webp','svg'] %}{% set type = 'image' %}
                        {% elseif ext in ['mp3','wav','ogg','m4a'] %}{% set type = 'audio' %}
                        {% endif %}
                    {% endif %}

                    <div class=\"ressource-card\" data-type=\"{{ type }}\" style=\"background: rgba(255,255,255,0.95); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.15); transition: all 0.3s; transform: translateY(0); display: none;\">
                        <div style=\"padding: 32px;\">
                            <div style=\"display: flex; align-items: center; gap: 16px; margin-bottom: 20px;\">
                                <span style=\"font-size: 2.8rem;\">
                                    {% if isYoutube %}🎥
                                    {% elseif type == 'pdf' %}📄
                                    {% elseif type == 'video' %}🎥
                                    {% elseif type == 'image' %}🖼️
                                    {% elseif type == 'audio' %}🎵
                                    {% else %}📎{% endif %}
                                </span>
                                <h3 style=\"margin: 0; color: #1e293b; font-size: 1.5rem; font-weight: 800;\">
                                    {{ isYoutube ? 'Vidéo YouTube' : type|capitalize }} {{ loop.index }}
                                </h3>
                            </div>

                            {% if isYoutube %}
                                {# Extraction robuste de l'ID YouTube #}
                                {% set clean = res|trim %}
                                {% set videoId = '' %}

                                {% if 'youtu.be/' in clean %}
                                    {% set videoId = clean|split('youtu.be/')[1]|split('?')[0]|trim %}
                                {% elseif 'youtube.com/watch?v=' in clean %}
                                    {% set videoId = clean|split('v=')[1]|split('&')[0]|trim %}
                                {% elseif 'youtube.com/embed/' in clean %}
                                    {% set videoId = clean|split('embed/')[1]|split('?')[0]|trim %}
                                {% endif %}

                                {% if videoId|length == 11 %}
                                    <div class=\"ratio ratio-16x9 rounded-3 overflow-hidden shadow\">
                                        <iframe 
                                            src=\"https://www.youtube.com/embed/{{ videoId }}?rel=0&modestbranding=1&showinfo=0&controls=1&autoplay=0&iv_load_policy=3\" 
                                            title=\"Vidéo YouTube\" 
                                            frameborder=\"0\" 
                                            allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" 
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                {% else %}
                                    <div class=\"alert alert-warning text-center p-4\">
                                        <strong>Erreur de lecture :</strong> Impossible de charger cette vidéo.<br>
                                        <small>URL problématique : {{ res|escape }}</small><br>
                                        <small>Vérifiez le lien dans l'administration.</small>
                                    </div>
                                {% endif %}

                            {% else %}
                                {% set filePath = public_path ~ '/' ~ res %}

                                {% if type == 'image' %}
                                    <img src=\"{{ filePath }}\" alt=\"Ressource\" style=\"width: 100%; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                                {% elseif type == 'video' %}
                                    <video controls style=\"width: 100%; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                                        <source src=\"{{ filePath }}\" type=\"video/{{ ext }}\">
                                        Vidéo non supportée.
                                    </video>
                                {% elseif type == 'pdf' %}
                                    <a href=\"{{ filePath }}\" target=\"_blank\" style=\"display: flex; align-items: center; gap: 16px; background: linear-gradient(135deg, #f97316, #ea580c); color: white; padding: 18px 36px; border-radius: 14px; text-decoration: none; font-weight: 700; font-size: 1.2rem; box-shadow: 0 8px 24px rgba(249,115,22,0.4); transition: all 0.3s; width: fit-content; margin: 0 auto;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                        📄 Ouvrir le PDF du cours
                                    </a>
                                {% elseif type == 'audio' %}
                                    <audio controls style=\"width: 100%; margin: 20px 0;\">
                                        <source src=\"{{ filePath }}\" type=\"audio/{{ ext }}\">
                                        Audio non supporté.
                                    </audio>
                                {% else %}
                                    <div style=\"padding: 40px; background: #f1f5f9; border-radius: 16px; text-align: center; color: #475569; border: 3px dashed #cbd5e1;\">
                                        <p style=\"margin: 0 0 16px; font-size: 1.3rem; font-weight: 700;\">Fichier : {{ res|split('/')|last }}</p>
                                        <small style=\"font-size: 1rem; opacity: 0.8;\">(format non prévisualisé)</small>
                                        <a href=\"{{ filePath }}\" download style=\"display: inline-block; margin-top: 24px; background: #6366f1; color: white; padding: 14px 32px; border-radius: 12px; text-decoration: none; font-weight: 700; box-shadow: 0 6px 16px rgba(99,102,241,0.3); transition: all 0.2s;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                            Télécharger le fichier
                                        </a>
                                    </div>
                                {% endif %}
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
            {% endif %}

            {# ============ RESSOURCES PERSONNALISÉES (PDF) ============ #}
            {% if ressources_personnalisees is defined and ressources_personnalisees|length > 0 %}
                {% for res in ressources_personnalisees %}
                    <div class=\"ressource-card\" data-type=\"pdf\" style=\"background: rgba(255,255,255,0.95); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.15); transition: all 0.3s; transform: translateY(0); display: none;\">
                        <div style=\"padding: 32px;\">
                            <div style=\"display: flex; align-items: center; gap: 16px; margin-bottom: 20px;\">
                                <span style=\"font-size: 2.8rem;\">📄</span>
                                <h3 style=\"margin: 0; color: #1e293b; font-size: 1.5rem; font-weight: 800;\">
                                    Cours personnalisé {{ loop.index }}
                                </h3>
                            </div>
                            
                            <div style=\"text-align: center; margin-bottom: 20px;\">
                                <p style=\"color: #475569; margin-bottom: 15px;\">
                                    <strong>📝 Contenu généré par IA</strong><br>
                                    <small>Ce cours a été créé spécialement pour vous</small>
                                </p>
                            </div>
                            
                            <a href=\"{{ res }}\" target=\"_blank\" style=\"display: flex; align-items: center; gap: 16px; background: linear-gradient(135deg, #f97316, #ea580c); color: white; padding: 18px 36px; border-radius: 14px; text-decoration: none; font-weight: 700; font-size: 1.2rem; box-shadow: 0 8px 24px rgba(249,115,22,0.4); transition: all 0.3s; width: fit-content; margin: 0 auto;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                📄 Ouvrir le PDF personnalisé
                            </a>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}

            {# ============ MESSAGE SI AUCUNE RESSOURCE ============ #}
            {% if files|length == 0 and (ressources_personnalisees is not defined or ressources_personnalisees|length == 0) %}
                <div style=\"grid-column: 1 / -1; text-align: center; padding: 100px 40px; background: rgba(255,255,255,0.9); border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); color: #475569; font-size: 1.5rem; font-weight: 600;\">
                    Aucune ressource disponible pour cette leçon pour le moment.
                </div>
            {% endif %}
        </div>

        <!-- ============ SECTION DICTIONNAIRE ============ -->
        <div style=\"margin-top: 80px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 30px; padding: 40px;\">
            <h2 style=\"color: white; text-align: center; font-size: 2.2rem; font-weight: 800; margin-bottom: 30px;\">
                📖 Dictionnaire
            </h2>
            
            <div style=\"background: white; border-radius: 20px; padding: 30px;\">
                <!-- Barre de recherche -->
                <div style=\"display: flex; flex-direction: column; gap: 15px; margin-bottom: 30px;\">
                    <div style=\"display: flex; gap: 15px;\">
                        <input type=\"text\" 
                               id=\"dictionary-word\" 
                               placeholder=\"Tapez un mot (ex: maison, friend, Haus...)\" 
                               style=\"flex: 1; padding: 18px 25px; border: 2px solid #e0e0e0; border-radius: 50px; font-size: 1.2rem; outline: none; transition: all 0.3s;\"
                               onfocus=\"this.style.borderColor='#667eea';\">
                        
                        <button onclick=\"searchWord()\" 
                                style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 0 40px; border-radius: 50px; font-size: 1.2rem; font-weight: 700; cursor: pointer; transition: all 0.3s;\"
                                onmouseover=\"this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 25px rgba(102,126,234,0.4)';\"
                                onmouseout=\"this.style.transform='scale(1)'; this.style.boxShadow='none';\">
                            🔍 Chercher
                        </button>
                    </div>
                </div>

                <!-- Résultats du dictionnaire -->
                <div id=\"dictionary-result\" style=\"background: #f8f9fa; border-radius: 15px; padding: 25px; min-height: 200px;\">
                    <p style=\"color: #999; text-align: center; font-size: 1.1rem; margin: 40px 0;\">
                        Entrez un mot pour voir sa définition
                    </p>
                </div>

                <!-- Suggestions de mots populaires -->
                <div style=\"margin-top: 30px; display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;\">
                    <span style=\"color: #666; font-weight: 600; margin-right: 10px;\">Mots populaires :</span>
                    <button onclick=\"document.getElementById('dictionary-word').value='maison'; searchWord();\" 
                            style=\"background: #f0f0f0; border: none; padding: 8px 20px; border-radius: 50px; cursor: pointer; transition: all 0.2s; color: #333;\"
                            onmouseover=\"this.style.background='#667eea'; this.style.color='white';\"
                            onmouseout=\"this.style.background='#f0f0f0'; this.style.color='#333';\">maison</button>
                    <button onclick=\"document.getElementById('dictionary-word').value='ami'; searchWord();\" 
                            style=\"background: #f0f0f0; border: none; padding: 8px 20px; border-radius: 50px; cursor: pointer; transition: all 0.2s; color: #333;\"
                            onmouseover=\"this.style.background='#667eea'; this.style.color='white';\"
                            onmouseout=\"this.style.background='#f0f0f0'; this.style.color='#333';\">ami</button>
                    <button onclick=\"document.getElementById('dictionary-word').value='friend'; searchWord();\" 
                            style=\"background: #f0f0f0; border: none; padding: 8px 20px; border-radius: 50px; cursor: pointer; transition: all 0.2s; color: #333;\"
                            onmouseover=\"this.style.background='#667eea'; this.style.color='white';\"
                            onmouseout=\"this.style.background='#f0f0f0'; this.style.color='#333';\">friend</button>
                    <button onclick=\"document.getElementById('dictionary-word').value='Haus'; searchWord();\" 
                            style=\"background: #f0f0f0; border: none; padding: 8px 20px; border-radius: 50px; cursor: pointer; transition: all 0.2s; color: #333;\"
                            onmouseover=\"this.style.background='#667eea'; this.style.color='white';\"
                            onmouseout=\"this.style.background='#f0f0f0'; this.style.color='#333';\">Haus</button>
                </div>
            </div>
        </div>

        <!-- ============ SECTION DIALOGUE VOCAL AVEC IA ============ -->
        <div style=\"margin-top: 80px; background: linear-gradient(135deg, #f97316 0%, #ea580c 100%); border-radius: 30px; padding: 40px;\">
            <h2 style=\"color: white; text-align: center; font-size: 2.2rem; font-weight: 800; margin-bottom: 30px;\">
                🎤 Pratique la conversation à voix haute
            </h2>
            
            <div style=\"background: white; border-radius: 20px; padding: 30px;\">
                
                <!-- ÉTAPE 1 : Saisie du thème -->
                <div id=\"etape-theme\">
                    <h3 style=\"color: #333; margin-bottom: 20px;\">📝 Quel thème veux-tu pratiquer ?</h3>
                    <div style=\"display: flex; gap: 15px;\">
                        <input type=\"text\" 
                               id=\"theme-input\" 
                               placeholder=\"Ex: Au restaurant, Voyage à Paris, Présentation personnelle...\" 
                               style=\"flex: 1; padding: 18px 25px; border: 2px solid #e0e0e0; border-radius: 50px; font-size: 1.1rem; outline: none;\">
                        
                        <button onclick=\"genererDialogue()\" 
                                style=\"background: linear-gradient(135deg, #f97316, #ea580c); color: white; border: none; padding: 0 40px; border-radius: 50px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: all 0.3s;\"
                                onmouseover=\"this.style.transform='scale(1.05)';\"
                                onmouseout=\"this.style.transform='scale(1)';\">
                            Générer le dialogue
                        </button>
                    </div>
                    <p style=\"color: #666; margin-top: 15px; font-size: 0.9rem;\">
                        L'IA va créer un dialogue adapté à ton niveau ({{ cour.idNiveau.difficulte }})
                    </p>
                </div>
                
                <!-- ÉTAPE 2 : Dialogue généré (caché au début) -->
                <div id=\"etape-dialogue\" style=\"display: none;\">
                    
                    <!-- Barre de progression -->
                    <div style=\"margin-bottom: 30px;\">
                        <div style=\"display: flex; justify-content: space-between; color: #333; margin-bottom: 10px;\">
                            <span>Réplique <span id=\"replique-actuelle\">1</span>/<span id=\"total-repliques\">6</span></span>
                            <span id=\"score-actuel\" style=\"font-weight: bold; color: #f97316;\">0%</span>
                        </div>
                        <div style=\"width: 100%; height: 10px; background: #f0f0f0; border-radius: 5px;\">
                            <div id=\"barre-progression-dialogue\" style=\"width: 0%; height: 100%; background: linear-gradient(90deg, #f97316, #ea580c); border-radius: 5px;\"></div>
                        </div>
                    </div>
                    
                    <!-- Dialogue visuel -->
                    <div style=\"background: #f8f9fa; border-radius: 20px; padding: 30px; margin-bottom: 30px;\">
                        <div id=\"dialogue-ia\" style=\"background: #fee2e2; color: #b91c1c; padding: 20px; border-radius: 15px; margin-bottom: 20px; border-left: 5px solid #ef4444;\">
                            <div style=\"display: flex; align-items: center; gap: 10px; margin-bottom: 10px;\">
                                <span style=\"background: #ef4444; color: white; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;\">IA</span>
                                <span style=\"font-weight: bold;\">L'IA dit :</span>
                            </div>
                            <p id=\"texte-ia\" style=\"font-size: 1.3rem; margin: 0; font-style: italic;\"></p>
                        </div>
                        
                        <div id=\"dialogue-etudiant\" style=\"background: #dbeafe; color: #1e40af; padding: 20px; border-radius: 15px; border-left: 5px solid #3b82f6;\">
                            <div style=\"display: flex; align-items: center; gap: 10px; margin-bottom: 10px;\">
                                <span style=\"background: #3b82f6; color: white; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;\">TOI</span>
                                <span style=\"font-weight: bold;\">À ton tour de lire :</span>
                            </div>
                            <p id=\"texte-etudiant\" style=\"font-size: 1.3rem; margin: 0;\"></p>
                        </div>
                    </div>
                    
                    <!-- Contrôles vocaux -->
                    <div style=\"text-align: center; margin-bottom: 15px;\">
                        <button id=\"btn-commencer\" onclick=\"commencerLecture()\" 
                                style=\"background: #10b981; color: white; border: none; padding: 20px 50px; border-radius: 50px; font-size: 1.3rem; font-weight: 700; cursor: pointer; box-shadow: 0 10px 25px rgba(16,185,129,0.4); transition: all 0.3s; margin-right: 15px;\"
                                onmouseover=\"this.style.transform='scale(1.1)';\"
                                onmouseout=\"this.style.transform='scale(1)';\">
                            🎤 Commencer à lire
                        </button>
                        
                        <button id=\"btn-suivant\" onclick=\"passerRepliqueSuivante()\" style=\"display: none; background: #3b82f6; color: white; border: none; padding: 20px 50px; border-radius: 50px; font-size: 1.3rem; font-weight: 700; cursor: pointer; box-shadow: 0 10px 25px rgba(59,130,246,0.4); transition: all 0.3s;\"
                                onmouseover=\"this.style.transform='scale(1.1)';\"
                                onmouseout=\"this.style.transform='scale(1)';\">
                            ⏭️ Réplique suivante
                        </button>
                        
                        <!-- Bouton pour changer la voix -->
                        <button id=\"btn-changer-voix\" onclick=\"changerVoix()\" 
                                style=\"background: #6b7280; color: white; border: none; padding: 10px 20px; border-radius: 50px; font-size: 0.9rem; cursor: pointer; margin-left: 15px;\"
                                onmouseover=\"this.style.background='#4b5563';\"
                                onmouseout=\"this.style.background='#6b7280';\">
                            🔊 Changer voix IA
                        </button>
                    </div>
                    
                    <!-- Bouton pour tester le microphone -->
                    <div style=\"text-align: center; margin-bottom: 15px;\">
                        <button onclick=\"testerMicrophone()\" 
                                style=\"background: #8b5cf6; color: white; border: none; padding: 8px 16px; border-radius: 50px; font-size: 0.8rem; cursor: pointer;\">
                            🎤 Tester mon microphone
                        </button>
                    </div>
                    
                    <!-- Zone de feedback -->
                    <div id=\"feedback-correction\" style=\"margin-top: 30px; padding: 20px; border-radius: 15px; display: none;\">
                        <!-- Feedback dynamique -->
                    </div>
                </div>
            </div>
        </div>

        <!-- ============ SECTION JEUX ÉDUCATIFS ============ -->
        <div style=\"margin-top: 80px; background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%); border-radius: 30px; padding: 40px;\">
            <h2 style=\"color: white; text-align: center; font-size: 2.2rem; font-weight: 800; margin-bottom: 30px;\">
                🎮 Joue en apprenant
            </h2>
            
            <div style=\"background: white; border-radius: 20px; padding: 30px;\">
                
                <!-- Sélecteur de jeu -->
                <div style=\"display: flex; gap: 15px; margin-bottom: 30px; justify-content: center; flex-wrap: wrap;\">
                    <button onclick=\"choisirJeu('scrambled')\" 
                            class=\"jeu-btn actif\" 
                            data-jeu=\"scrambled\"
                            style=\"background: #8b5cf6; color: white; border: none; padding: 15px 30px; border-radius: 50px; font-weight: 600; cursor: pointer; transition: all 0.3s;\">
                        🎯 Phrase Mélangée
                    </button>
                    
                    <button onclick=\"choisirJeu('oddoneout')\" 
                            class=\"jeu-btn\"
                            data-jeu=\"oddoneout\"
                            style=\"background: #f3f4f6; color: #333; border: none; padding: 15px 30px; border-radius: 50px; font-weight: 600; cursor: pointer; transition: all 0.3s;\">
                        🔍 Trouve l'Intrus
                    </button>
                    
                    <button onclick=\"choisirJeu('crossword')\" 
                            class=\"jeu-btn\"
                            data-jeu=\"crossword\"
                            style=\"background: #f3f4f6; color: #333; border: none; padding: 15px 30px; border-radius: 50px; font-weight: 600; cursor: pointer; transition: all 0.3s;\">
                        🧩 Mots Croisés
                    </button>
                </div>
                
                <!-- Zone d'affichage du jeu -->
                <div id=\"zone-jeu\" style=\"min-height: 300px;\">
                    <!-- Le jeu sera chargé ici dynamiquement -->
                    <div style=\"text-align: center; padding: 50px;\">
                        <p style=\"color: #666;\">Choisis un jeu pour commencer !</p>
                    </div>
                </div>
                
                <!-- Barre de progression et points -->
                <div style=\"margin-top: 30px; display: flex; justify-content: space-between; align-items: center;\">
                    <div style=\"flex: 1; margin-right: 20px;\">
                        <div style=\"display: flex; justify-content: space-between; color: #333; margin-bottom: 5px;\">
                            <span>Progression</span>
                            <span id=\"progression-jeu\">0/3</span>
                        </div>
                        <div style=\"width: 100%; height: 8px; background: #f0f0f0; border-radius: 4px;\">
                            <div id=\"barre-progression-jeu\" style=\"width: 0%; height: 100%; background: linear-gradient(90deg, #8b5cf6, #6366f1); border-radius: 4px;\"></div>
                        </div>
                    </div>
                    
                    <div style=\"background: #fef3c7; padding: 10px 20px; border-radius: 50px;\">
                        <span style=\"color: #92400e; font-weight: bold;\">⭐ Points: <span id=\"points-jeu\">0</span></span>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Bouton Terminer -->
        <div style=\"margin-top: 80px; text-align: center;\">
            <button onclick=\"terminerCours({{ cour.id }})\" style=\"background: linear-gradient(135deg, #10b981, #059669); color: white; border: none; padding: 22px 80px; font-size: 1.5rem; font-weight: 900; border-radius: 20px; cursor: pointer; box-shadow: 0 12px 40px rgba(16,185,129,0.5); transition: all 0.35s;\" onmouseover=\"this.style.transform='scale(1.08) translateY(-4px)';\" onmouseout=\"this.style.transform='scale(1) translateY(0)';\">
                Terminer cette leçon →
            </button>
        </div>

    </div>

    <!-- Script filtrage + terminer + dictionnaire + chrono -->
    <script>
        // Filtrage
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.dataset.filter;
                document.querySelectorAll('.ressource-card').forEach(card => {
                    if (filter === 'all' || card.dataset.type === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Afficher tout au chargement
        document.querySelector('[data-filter=\"all\"]').click();

        // Chronomètre
        let startTime = Date.now();
        let timerInterval;

        function updateChrono() {
            const elapsed = Math.floor((Date.now() - startTime) / 1000);
            const minutes = Math.floor(elapsed / 60);
            const seconds = elapsed % 60;
            document.getElementById('chrono').textContent = 
                `\${minutes.toString().padStart(2, '0')}:\${seconds.toString().padStart(2, '0')}`;
        }

        // Démarrer le chrono
        timerInterval = setInterval(updateChrono, 1000);

        // Envoyer le temps à la fin
        function envoyerTemps() {
            const elapsed = Math.floor((Date.now() - startTime) / 1000);
            fetch('/cours/{{ cour.id }}/temps', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': '{{ csrf_token('temps' ~ cour.id) }}'
                },
                body: JSON.stringify({ temps: elapsed })
            });
        }

        // Terminer cours modifié
        function terminerCours(coursId) {
            if (confirm(\"Voulez-vous marquer cette leçon comme terminée ?\\nVous passerez automatiquement à la suivante.\")) {
                clearInterval(timerInterval); // Arrêter le chrono
                envoyerTemps(); // Envoyer le temps
                
                fetch('/cours/' + coursId + '/terminer', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token('delete' ~ cour.id) }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = '{{ path('app_langue_apprentissage', {id: cour.idNiveau.idLangue.id}) }}';
                    } else {
                        alert(\"Une erreur est survenue : \" + (data.message || 'Inconnu'));
                    }
                })
                .catch(err => alert(\"Erreur : \" + err.message));
            }
        }

        // Fonctions du dictionnaire
        function searchWord() {
            const word = document.getElementById('dictionary-word').value.trim();
            const resultDiv = document.getElementById('dictionary-result');
            
            if (!word) {
                resultDiv.innerHTML = '<p style=\"color: #ff6b6b; text-align: center; margin: 40px 0;\">❌ Veuillez entrer un mot</p>';
                return;
            }
            
            // Afficher un loader
            resultDiv.innerHTML = '<p style=\"text-align: center; margin: 40px 0; color: #333;\">🔍 Recherche en cours...</p>';
            
            fetch('/api/dictionary/search/' + encodeURIComponent(word))
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        resultDiv.innerHTML = `<p style=\"color: #ff6b6b; text-align: center; margin: 40px 0;\">❌ \${data.error}</p>`;
                        return;
                    }
                    
                    let html = `
                        <div style=\"border-bottom: 2px solid #667eea; padding-bottom: 15px; margin-bottom: 20px;\">
                            <h3 style=\"margin: 0; color: #000000; font-size: 2rem; font-weight: 800;\">\${data.word}</h3>
                        </div>
                    `;
                    
                    if (data.functional_label) {
                        html += `<p><strong style=\"color: #000000;\">Catégorie :</strong> <span style=\"color: #333333;\">\${data.functional_label}</span></p>`;
                    }
                    
                    if (data.definitions && data.definitions.length > 0) {
                        html += '<p><strong style=\"color: #000000;\">Définitions :</strong></p><ol style=\"margin-top: 10px; padding-left: 20px;\">';
                        data.definitions.forEach(def => {
                            html += `<li style=\"margin-bottom: 10px; line-height: 1.6; color: #333333;\">\${def}</li>`;
                        });
                        html += '</ol>';
                    }
                    
                    if (data.examples && data.examples.length > 0) {
                        html += '<p><strong style=\"color: #000000;\">Exemples :</strong></p><ul style=\"margin-top: 10px; padding-left: 20px; font-style: italic;\">';
                        data.examples.forEach(ex => {
                            html += `<li style=\"margin-bottom: 8px; color: #555;\">\"\${ex}\"</li>`;
                        });
                        html += '</ul>';
                    }
                    
                    resultDiv.innerHTML = html;
                })
                .catch(error => {
                    resultDiv.innerHTML = `<p style=\"color: #ff6b6b; text-align: center; margin: 40px 0;\">❌ Erreur: \${error.message}</p>`;
                });
        }

        // Ajouter la possibilité de chercher avec la touche Entrée
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('dictionary-word');
            if (input) {
                input.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        searchWord();
                    }
                });
            }
        });
    </script>
    
    <script>
// ============ DIALOGUE VOCAL AMÉLIORÉ ============
let dialogue = [];
let indexActuel = 0;
let reconnaissanceVocale = null;
let enTrainDeParler = false;
let voixPreference = null;

// Fonction pour tester le microphone
function testerMicrophone() {
    navigator.mediaDevices.getUserMedia({ audio: true })
        .then(function(stream) {
            stream.getTracks().forEach(track => track.stop());
            
            document.getElementById('feedback-correction').style.display = 'block';
            document.getElementById('feedback-correction').innerHTML = `
                <div style=\"background: #10b981; color: white; padding: 20px; border-radius: 15px; text-align: center;\">
                    <p style=\"font-size: 2rem;\">✅</p>
                    <h4 style=\"color: white;\">Microphone fonctionnel !</h4>
                    <p style=\"color: white;\">Tu peux maintenant pratiquer.</p>
                </div>
            `;
        })
        .catch(function(err) {
            document.getElementById('feedback-correction').style.display = 'block';
            document.getElementById('feedback-correction').innerHTML = `
                <div style=\"background: #fee2e2; color: #b91c1c; padding: 20px; border-radius: 15px; text-align: center;\">
                    <p style=\"font-size: 2rem;\">❌</p>
                    <h4>Microphone non accessible</h4>
                    <p>Vérifie les permissions dans ton navigateur.</p>
                </div>
            `;
        });
}

// Initialiser la reconnaissance vocale
if ('webkitSpeechRecognition' in window) {
    reconnaissanceVocale = new webkitSpeechRecognition();
    reconnaissanceVocale.continuous = false;
    reconnaissanceVocale.interimResults = true;
    reconnaissanceVocale.maxAlternatives = 5;
    
    const langue = '{{ cour.idNiveau.idLangue.nom }}';
    reconnaissanceVocale.lang = langue === 'Anglais' ? 'en-US' : 'fr-FR';
    
    let recognitionTimeout;
    
    reconnaissanceVocale.onresult = function(event) {
        let interimTranscript = '';
        let finalTranscript = '';
        
        for (let i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalTranscript += event.results[i][0].transcript;
            } else {
                interimTranscript += event.results[i][0].transcript;
            }
        }
        
        if (interimTranscript !== '') {
            document.getElementById('feedback-correction').innerHTML = `
                <div style=\"background: #f3f4f6; padding: 20px; border-radius: 15px; text-align: center;\">
                    <p style=\"color: #333; font-size: 1.2rem;\">🎤 Je t'écoute...</p>
                    <p style=\"color: #059669; font-size: 1.1rem; font-style: italic; background: white; padding: 10px; border-radius: 8px;\">\"\${interimTranscript}\"</p>
                </div>
            `;
        }
        
        if (finalTranscript !== '') {
            clearTimeout(recognitionTimeout);
            recognitionTimeout = setTimeout(() => {
                verifierPrononciation(finalTranscript);
            }, 500);
        }
    };
    
    reconnaissanceVocale.onerror = function(event) {
        let message = \"Erreur de reconnaissance vocale: \";
        switch(event.error) {
            case 'no-speech':
                message = \"Je n'ai pas entendu de parole. Essaie de parler plus fort.\";
                break;
            case 'not-allowed':
                message = \"Permission pour le microphone refusée.\";
                break;
            default:
                message += event.error;
        }
        
        document.getElementById('feedback-correction').innerHTML = `
            <div style=\"background: #fee2e2; padding: 20px; border-radius: 15px; text-align: center;\">
                <p style=\"color: #b91c1c;\">❌ \${message}</p>
                <button onclick=\"commencerLecture()\" style=\"background: #3b82f6; color: white; border: none; padding: 10px 20px; border-radius: 50px; margin-top: 10px; cursor: pointer;\">
                    Réessayer
                </button>
            </div>
        `;
        arreterEcoute();
    };
    
    reconnaissanceVocale.onend = function() {
        enTrainDeParler = false;
    };
}

// Générer le dialogue
function genererDialogue() {
    const theme = document.getElementById('theme-input').value.trim();
    
    if (!theme) {
        alert(\"Veuillez entrer un thème de conversation\");
        return;
    }
    
    document.getElementById('etape-theme').style.display = 'none';
    document.getElementById('etape-dialogue').style.display = 'block';
    document.getElementById('dialogue-ia').style.display = 'none';
    document.getElementById('dialogue-etudiant').style.display = 'none';
    
    fetch('/dialogue/generer', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({
            theme: theme,
            niveau: '{{ cour.idNiveau.difficulte }}',
            langue: '{{ cour.idNiveau.idLangue.nom }}'
        })
    })
    .then(response => response.json())
    .then(data => {
        dialogue = data.dialogue;
        document.getElementById('total-repliques').textContent = dialogue.length;
        indexActuel = 0;
        afficherReplique();
    })
    .catch(error => {
        console.error('Erreur:', error);
        alert('Erreur lors de la génération du dialogue');
    });
}

// Afficher la réplique courante
function afficherReplique() {
    if (indexActuel >= dialogue.length) {
        document.getElementById('dialogue-ia').style.display = 'none';
        document.getElementById('dialogue-etudiant').style.display = 'none';
        document.getElementById('btn-commencer').style.display = 'none';
        document.getElementById('btn-suivant').style.display = 'none';
        document.getElementById('btn-changer-voix').style.display = 'none';
        
        document.getElementById('feedback-correction').style.display = 'block';
        document.getElementById('feedback-correction').innerHTML = `
            <div style=\"background: #10b981; color: white; padding: 20px; border-radius: 15px; text-align: center;\">
                <span style=\"font-size: 3rem; display: block; margin-bottom: 15px;\">🎉</span>
                <h3 style=\"margin: 0 0 10px;\">Félicitations !</h3>
                <p>Tu as terminé la conversation !</p>
                <button onclick=\"recommencer()\" style=\"background: white; color: #10b981; border: none; padding: 15px 40px; border-radius: 50px; font-size: 1.1rem; font-weight: 600; margin-top: 20px; cursor: pointer;\">
                    🔄 Recommencer
                </button>
            </div>
        `;
        return;
    }
    
    const replique = dialogue[indexActuel];
    
    document.getElementById('replique-actuelle').textContent = indexActuel + 1;
    document.getElementById('barre-progression-dialogue').style.width = 
        ((indexActuel + 1) / dialogue.length * 100) + '%';
    
    if (replique.role === 'ia') {
        document.getElementById('dialogue-ia').style.display = 'block';
        document.getElementById('dialogue-etudiant').style.display = 'none';
        document.getElementById('btn-changer-voix').style.display = 'inline-block';
        
        let texteIA = replique.texte;
        if (texteIA.includes(':')) {
            texteIA = texteIA.split(':')[1].trim();
        }
        texteIA = texteIA.replace(/^[\"']|[\"']\$/g, '');
        texteIA = texteIA.replace(/\\s+/g, ' ').trim();
        
        document.getElementById('texte-ia').textContent = texteIA;
        document.getElementById('btn-commencer').style.display = 'none';
        document.getElementById('btn-suivant').style.display = 'none';
        
        lireTexteIA(texteIA);
        
    } else {
        document.getElementById('dialogue-ia').style.display = 'none';
        document.getElementById('dialogue-etudiant').style.display = 'block';
        document.getElementById('btn-changer-voix').style.display = 'none';
        
        let texteEtudiant = replique.texte;
        
        if (texteEtudiant.includes(':')) {
            const parties = texteEtudiant.split(':');
            texteEtudiant = parties[1] ? parties[1].trim() : parties[0].trim();
        }
        
        const prefixes = ['etudiant', 'étudiant', 'student', 'user', 'moi', 'toi'];
        const texteLower = texteEtudiant.toLowerCase();
        
        for (const prefix of prefixes) {
            if (texteLower.startsWith(prefix)) {
                texteEtudiant = texteEtudiant.substring(prefix.length).trim();
                texteEtudiant = texteEtudiant.replace(/^[:,\\s]+/, '');
                break;
            }
        }
        
        texteEtudiant = texteEtudiant.replace(/^[\"'\"\"]|[\"'\"\"]\$/g, '');
        texteEtudiant = texteEtudiant.replace(/[?!]+\$/, (match) => match.charAt(0));
        texteEtudiant = texteEtudiant.replace(/^(um|euh|ah|oh|bon|ben)[\\s.,!?]+/i, '');
        texteEtudiant = texteEtudiant.replace(/\\s+/g, ' ').trim();
        
        if (texteEtudiant.length > 0) {
            texteEtudiant = texteEtudiant.charAt(0).toUpperCase() + texteEtudiant.slice(1);
        }
        
        if (texteEtudiant.length > 0 && !texteEtudiant.match(/[.!?]\$/)) {
            texteEtudiant += '.';
        }
        
        document.getElementById('texte-etudiant').textContent = texteEtudiant;
        document.getElementById('btn-commencer').style.display = 'inline-block';
        document.getElementById('btn-suivant').style.display = 'none';
        
        document.getElementById('feedback-correction').style.display = 'none';
        document.getElementById('feedback-correction').innerHTML = '';
        document.getElementById('score-actuel').textContent = '0%';
    }
}

// Fonction pour changer de voix
function changerVoix() {
    const voices = window.speechSynthesis.getVoices();
    const voixAnglaises = voices.filter(v => v.lang.startsWith('en'));
    
    if (voixAnglaises.length === 0) {
        alert(\"Aucune voix anglaise disponible\");
        return;
    }
    
    let message = \"Choisis une voix :\\n\\n\";
    voixAnglaises.forEach((voice, index) => {
        message += `\${index + 1}. \${voice.name} (\${voice.lang})\\n`;
    });
    
    const choix = prompt(message + \"\\nEntre le numéro de la voix choisie:\");
    
    if (choix && !isNaN(choix) && choix > 0 && choix <= voixAnglaises.length) {
        voixPreference = voixAnglaises[choix - 1];
        alert(`✅ Voix \"\${voixPreference.name}\" sélectionnée !`);
        
        if (dialogue.length > 0 && indexActuel < dialogue.length && dialogue[indexActuel].role === 'ia') {
            lireTexteIA(document.getElementById('texte-ia').textContent);
        }
    }
}

// Fonction pour lire le texte de l'IA
function lireTexteIA(texte) {
    window.speechSynthesis.cancel();
    
    const utterance = new SpeechSynthesisUtterance(texte);
    const langue = '{{ cour.idNiveau.idLangue.nom }}';
    
    if (langue === 'Anglais') {
        utterance.lang = 'en-US';
        utterance.rate = 0.85;
        
        function setEnglishVoice() {
            const voices = window.speechSynthesis.getVoices();
            
            if (voices.length === 0) {
                setTimeout(setEnglishVoice, 100);
                return;
            }
            
            if (voixPreference && voixPreference.name) {
                const savedVoice = voices.find(v => v.name === voixPreference.name);
                if (savedVoice) {
                    utterance.voice = savedVoice;
                    return;
                }
            }
            
            const preferredVoices = [
                voices.find(v => v.name === 'Samantha'),
                voices.find(v => v.name === 'Alex'),
                voices.find(v => v.name === 'Karen'),
                voices.find(v => v.name === 'Daniel'),
                voices.find(v => v.name.includes('Google') && v.lang === 'en-US'),
                voices.find(v => v.lang === 'en-US'),
                voices.find(v => v.lang.startsWith('en'))
            ];
            
            for (const voice of preferredVoices) {
                if (voice) {
                    utterance.voice = voice;
                    break;
                }
            }
        }
        
        if (window.speechSynthesis.getVoices().length > 0) {
            setEnglishVoice();
        } else {
            window.speechSynthesis.onvoiceschanged = setEnglishVoice;
        }
    }
    
    utterance.onend = function() {
        setTimeout(() => {
            indexActuel++;
            afficherReplique();
        }, 1000);
    };
    
    window.speechSynthesis.speak(utterance);
}

// Commencer la lecture
function commencerLecture() {
    if (!reconnaissanceVocale) {
        alert(\"La reconnaissance vocale n'est pas supportée\");
        return;
    }
    
    const texteAttendu = document.getElementById('texte-etudiant').textContent;
    document.getElementById('feedback-correction').style.display = 'block';
    document.getElementById('btn-commencer').style.display = 'none';
    document.getElementById('btn-suivant').style.display = 'none';
    
    document.getElementById('feedback-correction').innerHTML = `
        <div style=\"background: #f3f4f6; padding: 20px; border-radius: 15px; text-align: center;\">
            <p style=\"color: #333; font-size: 1.2rem;\">🎤 Parle maintenant...</p>
            <p style=\"color: #059669; font-size: 1.1rem; font-weight: bold; background: white; padding: 15px; border-radius: 10px;\">
                \"\${texteAttendu}\"
            </p>
        </div>
    `;
    
    try {
        reconnaissanceVocale.abort();
    } catch(e) {}
    
    setTimeout(() => {
        try {
            reconnaissanceVocale.start();
            enTrainDeParler = true;
        } catch(e) {
            console.error('Erreur démarrage:', e);
        }
    }, 500);
}

// Passer à la réplique suivante
function passerRepliqueSuivante() {
    arreterEcoute();
    window.speechSynthesis.cancel();
    indexActuel++;
    afficherReplique();
    document.getElementById('btn-suivant').style.display = 'none';
}

// Recommencer
function recommencer() {
    window.speechSynthesis.cancel();
    document.getElementById('etape-theme').style.display = 'block';
    document.getElementById('etape-dialogue').style.display = 'none';
    document.getElementById('theme-input').value = '';
    document.getElementById('score-actuel').textContent = '0%';
    arreterEcoute();
}

// Vérifier la prononciation
function verifierPrononciation(parole) {
    const texteAttendu = document.getElementById('texte-etudiant').textContent;
    parole = parole.trim();
    
    fetch('/dialogue/verifier', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({ texte: parole, attendu: texteAttendu })
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('score-actuel').textContent = data.score + '%';
        
        let feedbackHtml = '';
        
        if (data.reussite) {
            feedbackHtml = `
                <div style=\"background: #10b981; color: white; padding: 20px; border-radius: 15px;\">
                    <h4 style=\"color: white;\">✅ Parfait !</h4>
                    <p style=\"color: white;\">Tu as dit : \"\${data.texte_utilisateur}\"</p>
                    <p style=\"color: white;\">Score: \${data.score}%</p>
                </div>
            `;
        } else {
            let erreursHtml = '';
            
            if (data.erreurs && data.erreurs.length > 0) {
                data.erreurs.forEach(erreur => {
                    erreursHtml += `
                        <div style=\"background: #fee2e2; padding: 10px; border-radius: 8px; margin-bottom: 8px;\">
                            <p style=\"color: #b91c1c;\">❌ \${erreur.message}</p>
                        </div>
                    `;
                });
            }
            
            feedbackHtml = `
                <div style=\"background: #ffffff; border: 2px solid #fbbf24; border-radius: 15px; padding: 20px;\">
                    <h4 style=\"color: #92400e;\">📝 Analyse</h4>
                    <p><strong>Tu as dit :</strong> \"\${data.texte_utilisateur}\"</p>
                    \${erreursHtml}
                    <p style=\"color: #92400e; font-weight: bold;\">Score: \${data.score}%</p>
                </div>
            `;
        }
        
        document.getElementById('feedback-correction').innerHTML = feedbackHtml;
        document.getElementById('btn-suivant').style.display = 'inline-block';
        arreterEcoute();
    })
    .catch(error => {
        console.error('Erreur:', error);
        arreterEcoute();
    });
}

// Arrêter l'écoute
function arreterEcoute() {
    if (reconnaissanceVocale && enTrainDeParler) {
        try {
            reconnaissanceVocale.stop();
        } catch(e) {}
        enTrainDeParler = false;
    }
}

// ============ JEUX ÉDUCATIFS ============
let jeuActuel = null;
let typeJeuActuel = 'scrambled';
let motsSelectionnes = [];

// Initialiser les boutons de jeu
document.querySelectorAll('.jeu-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.jeu-btn').forEach(b => {
            b.style.background = '#f3f4f6';
            b.style.color = '#333';
        });
        this.style.background = '#8b5cf6';
        this.style.color = 'white';
    });
});

// Fonction pour choisir un jeu
function choisirJeu(type) {
    typeJeuActuel = type;
    chargerJeu();
}

// Charger un nouveau jeu
function chargerJeu() {
    const niveau = '{{ cour.idNiveau.difficulte }}';
    const langue = '{{ cour.idNiveau.idLangue.nom }}';
    
    document.getElementById('zone-jeu').innerHTML = `
        <div style=\"text-align: center; padding: 50px;\">
            <p style=\"color: #666;\">🎲 Chargement du jeu...</p>
        </div>
    `;
    
    fetch('/jeu/generer', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({
            type: typeJeuActuel,
            niveau: niveau,
            langue: langue,
            theme: document.getElementById('theme-input')?.value || 'général'
        })
    })
    .then(response => response.json())
    .then(data => {
        jeuActuel = data;
        afficherJeu(data);
    })
    .catch(error => {
        console.error('Erreur chargement jeu:', error);
        document.getElementById('zone-jeu').innerHTML = `
            <div style=\"text-align: center; padding: 50px;\">
                <p style=\"color: #b91c1c;\">❌ Erreur de chargement</p>
                <button onclick=\"chargerJeu()\" style=\"background: #8b5cf6; color: white; border: none; padding: 10px 20px; border-radius: 50px; margin-top: 10px; cursor: pointer;\">
                    Réessayer
                </button>
            </div>
        `;
    });
}
// Fonction pour debug - À SUPPRIMER PLUS TARD
function debugJeu() {
    console.log('=== DEBUG JEU ===');
    console.log('Type jeu:', typeJeuActuel);
    console.log('Niveau:', '{{ cour.idNiveau.difficulte }}');
    console.log('Langue:', '{{ cour.idNiveau.idLangue.nom }}');
    console.log('================');
}

// Appelle-la dans chargerJeu() après la récupération des données
fetch('/jeu/generer', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify({
        type: typeJeuActuel,
        niveau: niveau,
        langue: langue,
        theme: document.getElementById('theme-input')?.value || (langue === 'Anglais' ? 'general' : 'général')
    })
})
.then(response => response.json())
.then(data => {
    console.log('Données reçues du serveur:', data); // DEBUG
    jeuActuel = data;
    afficherJeu(data);
})

// Afficher le jeu selon son type
function afficherJeu(jeu) {
    switch(jeu.type) {
        case 'scrambled':
            afficherScrambledGame(jeu);
            break;
        case 'oddoneout':
            afficherOddOneOutGame(jeu);
            break;
        case 'crossword':
            afficherCrosswordGame(jeu);
            break;
        default:
            document.getElementById('zone-jeu').innerHTML = '<p>Type de jeu inconnu</p>';
    }
}
// Fonction pour obtenir le titre du jeu dans la bonne langue
function getGameTitle(jeu) {
    if (jeu.langue === 'Anglais') {
        const titles = {
            'scrambled': '🎯 Put the words in order',
            'oddoneout': '🔍 Find the intruder',
            'crossword': '🧩 Crossword'
        };
        return titles[jeu.type] || 'Game';
    } else {
        const titles = {
            'scrambled': '🎯 Remets les mots dans l\\'ordre',
            'oddoneout': '🔍 Trouve l\\'intrus',
            'crossword': '🧩 Mots Croisés'
        };
        return titles[jeu.type] || 'Jeu';
    }
}
// ============ JEUX ÉDUCATIFS - VERSION AVEC COULEURS AMÉLIORÉES ============

// JEU 1: Phrase Mélangée
// JEU 1: Phrase Mélangée (version multilingue)
function afficherScrambledGame(jeu) {
    motsSelectionnes = [];
    let html = `
        <div style=\"text-align: center;\">
            <h3 style=\"color: #333; margin-bottom: 20px; font-size: 1.8rem;\">\${getGameTitle(jeu)}</h3>
            
            <div style=\"background: #f8f9fa; padding: 25px; border-radius: 15px; margin-bottom: 30px; border: 2px solid #8b5cf6;\">
                <p style=\"color: #4a5568; margin-bottom: 20px; font-weight: 600;\">\${jeu.langue === 'Anglais' ? 'Click on the words in the correct order:' : 'Clique sur les mots dans le bon ordre :'}</p>
                <div style=\"display: flex; flex-wrap: wrap; gap: 12px; justify-content: center; min-height: 80px;\" id=\"mots-melange\">
    `;
    
    jeu.scrambled.forEach((mot, index) => {
        html += `
            <span onclick=\"selectionnerMot('\${mot}', this)\" 
                  class=\"mot-jeu\" 
                  style=\"background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: white; padding: 15px 25px; border-radius: 50px; cursor: pointer; font-weight: 600; font-size: 1.2rem; box-shadow: 0 4px 12px rgba(139,92,246,0.3); transition: all 0.2s; border: none; display: inline-block;\"
                  onmouseover=\"this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 16px rgba(139,92,246,0.5)';\"
                  onmouseout=\"this.style.transform='scale(1)'; this.style.boxShadow='0 4px 12px rgba(139,92,246,0.3)';\">
                \${mot}
            </span>
        `;
    });
    
    html += `
                </div>
            </div>
            
            <div style=\"background: #e9f0ff; padding: 25px; border-radius: 15px; margin-bottom: 30px; border: 2px solid #3b82f6;\">
                <p style=\"color: #1e3a8a; margin-bottom: 15px; font-weight: 600;\">\${jeu.langue === 'Anglais' ? 'Your sentence:' : 'Ta phrase :'}</p>
                <div id=\"phrase-utilisateur\" style=\"min-height: 70px; background: white; border-radius: 12px; padding: 20px; font-size: 1.3rem; border: 2px dashed #3b82f6; color: #333;\"></div>
            </div>
            
            <div style=\"display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-top: 20px;\">
                <button onclick=\"verifierScrambled()\" 
                        style=\"background: #10b981; color: white; border: none; padding: 15px 40px; border-radius: 50px; font-weight: 700; font-size: 1.1rem; cursor: pointer; box-shadow: 0 4px 12px rgba(16,185,129,0.4); transition: all 0.2s;\">
                    ✅ \${jeu.langue === 'Anglais' ? 'Check' : 'Vérifier'}
                </button>
                <button onclick=\"recommencerJeu()\" 
                        style=\"background: #6b7280; color: white; border: none; padding: 15px 40px; border-radius: 50px; font-weight: 700; font-size: 1.1rem; cursor: pointer; box-shadow: 0 4px 12px rgba(107,114,128,0.4); transition: all 0.2s;\">
                    🔄 \${jeu.langue === 'Anglais' ? 'Restart' : 'Recommencer'}
                </button>
                <button onclick=\"avoirIndice()\" 
                        style=\"background: #f59e0b; color: white; border: none; padding: 15px 40px; border-radius: 50px; font-weight: 700; font-size: 1.1rem; cursor: pointer; box-shadow: 0 4px 12px rgba(245,158,11,0.4); transition: all 0.2s;\">
                    💡 \${jeu.langue === 'Anglais' ? 'Hint' : 'Indice'}
                </button>
            </div>
            
            <p id=\"indice-zone\" style=\"color: #4b5563; margin-top: 25px; font-style: italic; background: #fff3cd; padding: 15px; border-radius: 10px; border-left: 4px solid #f59e0b; text-align: left;\"></p>
        </div>
    `;
    
    document.getElementById('zone-jeu').innerHTML = html;
}

// JEU 2: Trouve l'Intrus (version multilingue)
function afficherOddOneOutGame(jeu) {
    let html = `
        <div style=\"text-align: center;\">
            <h3 style=\"color: #333; margin-bottom: 20px; font-size: 1.8rem;\">\${getGameTitle(jeu)}</h3>
            <p style=\"color: #4b5563; margin-bottom: 30px; font-size: 1.2rem; background: #f3f4f6; padding: 15px; border-radius: 10px;\">
                \${jeu.explanation}
            </p>
            
            <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; max-width: 600px; margin: 0 auto;\">
    `;
    
    jeu.words.forEach((mot, index) => {
        // Tous les mots ont le même style bleu
        html += `
            <div onclick=\"verifierIntrus('\${mot}', '\${jeu.intruder}', this)\" 
                 style=\"background: #dbeafe; padding: 30px; border-radius: 15px; cursor: pointer; text-align: center; border: 3px solid #3b82f6; transition: all 0.2s; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\"
                 onmouseover=\"this.style.transform='scale(1.02)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.2)'; this.style.background='#bfdbfe';\"
                 onmouseout=\"this.style.transform='scale(1)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'; this.style.background='#dbeafe';\">
                
                <p style=\"font-size: 2rem; font-weight: bold; margin: 0; color: #1e40af;\">\${mot}</p>
            </div>
        `;
    });
    
    html += `</div>`;
    html += `<div id=\"game-message-container\" style=\"margin-top: 20px;\"></div>`;
    
    document.getElementById('zone-jeu').innerHTML = html;
}

// Fonction showGameMessage multilingue
function showGameMessage(message, type) {
    // Supprimer l'ancien message s'il existe
    const oldMessage = document.getElementById('game-message');
    if (oldMessage) {
        oldMessage.remove();
    }
    
    // Créer le nouveau message
    const messageDiv = document.createElement('div');
    messageDiv.id = 'game-message';
    messageDiv.style.marginTop = '20px';
    messageDiv.style.padding = '15px';
    messageDiv.style.borderRadius = '10px';
    messageDiv.style.textAlign = 'center';
    messageDiv.style.fontWeight = 'bold';
    messageDiv.style.animation = 'fadeInOut 2s';
    
    if (type === 'success') {
        messageDiv.style.background = '#10b981';
        messageDiv.style.color = 'white';
    } else {
        messageDiv.style.background = '#fee2e2';
        messageDiv.style.color = '#b91c1c';
        messageDiv.style.border = '1px solid #dc2626';
    }
    
    messageDiv.textContent = message;
    
    // Ajouter le message après la grille de jeu
    const zoneJeu = document.getElementById('zone-jeu');
    zoneJeu.appendChild(messageDiv);
    
    // Supprimer le message après 2 secondes
    setTimeout(() => {
        if (messageDiv && messageDiv.parentNode) {
            messageDiv.remove();
        }
    }, 2000);
}

// Fonction pour avoir un indice multilingue
function avoirIndice() {
    if (jeuActuel && jeuActuel.hint) {
        document.getElementById('indice-zone').textContent = '💡 ' + jeuActuel.hint;
    } else if (jeuActuel && jeuActuel.type === 'oddoneout') {
        if (jeuActuel.langue === 'Anglais') {
            document.getElementById('indice-zone').textContent = '💡 Look for the word that doesn\\'t belong';
        } else {
            document.getElementById('indice-zone').textContent = '💡 Cherche le mot qui ne correspond pas à la catégorie';
        }
    } else {
        if (jeuActuel?.langue === 'Anglais') {
            document.getElementById('indice-zone').textContent = '💡 No hint available';
        } else {
            document.getElementById('indice-zone').textContent = '💡 Aucun indice disponible';
        }
    }
}

// Sélectionner un mot (version améliorée)
function selectionnerMot(mot, element) {
    motsSelectionnes.push(mot);
    
    const phraseDiv = document.getElementById('phrase-utilisateur');
    phraseDiv.innerHTML += `
        <span style=\"background: #3b82f6; color: white; padding: 8px 18px; border-radius: 50px; margin: 6px; display: inline-block; font-weight: 600; font-size: 1.2rem; box-shadow: 0 2px 8px rgba(59,130,246,0.3);\">
            \${mot}
        </span>
    `;
    
    // Animation de disparition
    element.style.opacity = '0.3';
    element.style.transform = 'scale(0.95)';
    element.style.pointerEvents = 'none';
}

// Vérifier la réponse du jeu de phrase mélangée
function verifierScrambled() {
    const phraseUtilisateur = motsSelectionnes.join(' ');
    
    fetch('/jeu/verifier', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({ type: 'scrambled', reponse: phraseUtilisateur })
    })
    .then(response => response.json())
    .then(data => {
        if (data.correct) {
            // Animation de succès
            const zoneJeu = document.getElementById('zone-jeu');
            zoneJeu.innerHTML += `
                <div style=\"position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #10b981; color: white; padding: 30px; border-radius: 20px; text-align: center; z-index: 9999; box-shadow: 0 10px 30px rgba(0,0,0,0.3); animation: fadeInOut 2s;\">
                    <span style=\"font-size: 4rem;\">🎉</span>
                    <h3 style=\"color: white; margin-top: 10px;\">Bravo !</h3>
                    <p style=\"color: white;\">\${data.message}</p>
                </div>
            `;
            
            mettreAJourProgression();
            setTimeout(() => chargerJeu(), 2000);
        } else {
            alert(data.message || '❌ Pas tout à fait. Essaie encore !');
        }
    })
    .catch(error => {
        console.error('Erreur vérification:', error);
        alert('Erreur lors de la vérification');
    });
}


// Vérifier l'intrus
function verifierIntrus(mot, intrus, element) {
    if (mot === intrus) {
        // Réponse correcte
        element.style.background = '#10b981';
        element.style.borderColor = '#059669';
        element.style.color = 'white';
        
        // Afficher le message de succès DANS la zone de jeu (pas en alert)
        showGameMessage('🎉 Bravo ! C\\'est bien l\\'intrus !', 'success');
        
        mettreAJourProgression();
        setTimeout(() => chargerJeu(), 2000);
    } else {
        // Réponse incorrecte
        element.style.background = '#fee2e2';
        element.style.borderColor = '#dc2626';
        element.style.transform = 'scale(0.98)';
        
        // Afficher le message d'erreur
        showGameMessage('❌ Ce n\\'est pas l\\'intrus. Essaie encore !', 'error');
        
        // Remettre le style après un délai
        setTimeout(() => {
            element.style.background = '#e0f2fe';
            element.style.borderColor = '#3b82f6';
            element.style.transform = 'scale(1)';
        }, 500);
    }
}

// JEU 3: Mots Croisés (version améliorée avec grille claire)
function afficherCrosswordGame(jeu) {
    let html = `
        <div style=\"text-align: center;\">
            <h3 style=\"color: #333; margin-bottom: 20px; font-size: 1.8rem;\">\${getGameTitle(jeu)}</h3>
            
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 30px; background: #f8f9fa; padding: 25px; border-radius: 15px;\">
                <div>
                    <h4 style=\"color: #333; margin-bottom: 15px;\">📋 \${jeu.langue === 'Anglais' ? 'Grid' : 'Grille'}</h4>
                    <div style=\"background: #ffffff; padding: 20px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
    `;
    
    // Créer une grille de 8x8 avec des cases numérotées
    for (let i = 0; i < 8; i++) {
        html += '<div style=\"display: flex; justify-content: center;\">';
        for (let j = 0; j < 8; j++) {
            // Numéroter les premières cases pour guider l'utilisateur
            const cellNumber = (i === 0 && j === 0) ? '1' : 
                              (i === 0 && j === 3) ? '2' : 
                              (i === 3 && j === 0) ? '3' : '';
            
            html += `
                <div style=\"position: relative; width: 50px; height: 50px; border: 2px solid #8b5cf6; display: flex; align-items: center; justify-content: center; background: white;\">
                    <input type=\"text\" maxlength=\"1\" 
                           style=\"width: 100%; height: 100%; text-align: center; border: none; outline: none; font-size: 1.5rem; font-weight: bold; color: #333; background: transparent;\"
                           placeholder=\"\${cellNumber}\">
                    \${cellNumber ? `<span style=\"position: absolute; top: 2px; left: 2px; font-size: 0.7rem; color: #8b5cf6; font-weight: bold;\">\${cellNumber}</span>` : ''}
                </div>
            `;
        }
        html += '</div>';
    }
    
    html += `
                    </div>
                    <p style=\"color: #666; margin-top: 10px; font-size: 0.9rem;\">
                        \${jeu.langue === 'Anglais' ? 'Enter one letter per box' : 'Entre une lettre par case'}
                    </p>
                </div>
                
                <div>
                    <h4 style=\"color: #333; margin-bottom: 15px;\">📝 \${jeu.langue === 'Anglais' ? 'Clues' : 'Indices'}</h4>
                    <div style=\"background: #ffffff; padding: 20px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); max-height: 400px; overflow-y: auto;\">
    `;
    
    jeu.words.forEach((word, index) => {
        html += `
            <div style=\"margin-bottom: 20px; padding: 15px; background: \${index % 2 === 0 ? '#f3f4f6' : '#e9f0ff'}; border-radius: 10px; border-left: 4px solid #8b5cf6;\">
                <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                    <p style=\"color: #333; font-weight: 600; margin: 0;\">
                        \${index + 1}. \${word.lettres} \${jeu.langue === 'Anglais' ? 'letters' : 'lettres'}
                    </p>
                    <span style=\"background: #8b5cf6; color: white; padding: 3px 10px; border-radius: 20px; font-size: 0.8rem;\">
                        \${jeu.langue === 'Anglais' ? 'Across' : 'Horizontal'}
                    </span>
                </div>
                <p style=\"color: #4b5563; margin: 10px 0 5px 0;\">🔹 \${word.indice}</p>
                <div style=\"display: flex; gap: 5px; margin-top: 10px;\">
                    \${Array(word.lettres).fill().map((_, i) => `
                        <span style=\"display: inline-block; width: 30px; height: 30px; border: 2px dashed #8b5cf6; border-radius: 5px; background: white;\"></span>
                    `).join('')}
                </div>
            </div>
        `;
    });
    
    html += `
                    </div>
                </div>
            </div>
            
            <div style=\"margin-top: 30px; display: flex; gap: 15px; justify-content: center;\">
                <button onclick=\"verifierMotsCroises()\" 
                        style=\"background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: white; border: none; padding: 15px 50px; border-radius: 50px; font-weight: 700; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 12px rgba(139,92,246,0.4); transition: all 0.2s;\">
                    ✅ \${jeu.langue === 'Anglais' ? 'Check the grid' : 'Vérifier la grille'}
                </button>
                <button onclick=\"recommencerJeu()\" 
                        style=\"background: #6b7280; color: white; border: none; padding: 15px 50px; border-radius: 50px; font-weight: 700; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 12px rgba(107,114,128,0.4); transition: all 0.2s;\">
                    🔄 \${jeu.langue === 'Anglais' ? 'Restart' : 'Recommencer'}
                </button>
            </div>
        </div>
    `;
    
    document.getElementById('zone-jeu').innerHTML = html;
}

// Fonction utilitaire pour les mots croisés (améliorée)
function verifierMotsCroises() {
    // Récupérer toutes les entrées de la grille
    const inputs = document.querySelectorAll('#zone-jeu input');
    let motsTrouves = 0;
    let reponses = [];
    
    inputs.forEach((input, index) => {
        if (input.value && input.value.trim() !== '') {
            motsTrouves++;
            reponses.push(`\${index+1}: \${input.value.toUpperCase()}`);
        }
    });
    
    if (motsTrouves > 0) {
        // Message plus clair avec la progression
        showGameMessage(
            jeuActuel?.langue === 'Anglais' 
                ? `🔍 You've filled \${motsTrouves} cells! Keep going!` 
                : `🔍 Tu as rempli \${motsTrouves} cases ! Continue !`,
            'info'
        );
    } else {
        showGameMessage(
            jeuActuel?.langue === 'Anglais' 
                ? '❌ Fill some cells first!' 
                : '❌ Remplis d\\'abord quelques cases !',
            'error'
        );
    }
}

// Ajouter cette nouvelle fonction pour les messages d'information
function showGameMessage(message, type) {
    // Supprimer l'ancien message s'il existe
    const oldMessage = document.getElementById('game-message');
    if (oldMessage) {
        oldMessage.remove();
    }
    
    // Créer le nouveau message
    const messageDiv = document.createElement('div');
    messageDiv.id = 'game-message';
    messageDiv.style.marginTop = '20px';
    messageDiv.style.padding = '15px';
    messageDiv.style.borderRadius = '10px';
    messageDiv.style.textAlign = 'center';
    messageDiv.style.fontWeight = 'bold';
    messageDiv.style.animation = 'fadeInOut 2s';
    
    if (type === 'success') {
        messageDiv.style.background = '#10b981';
        messageDiv.style.color = 'white';
    } else if (type === 'error') {
        messageDiv.style.background = '#fee2e2';
        messageDiv.style.color = '#b91c1c';
        messageDiv.style.border = '1px solid #dc2626';
    } else {
        messageDiv.style.background = '#3b82f6';
        messageDiv.style.color = 'white';
    }
    
    messageDiv.textContent = message;
    
    // Ajouter le message après la grille de jeu
    const zoneJeu = document.getElementById('zone-jeu');
    zoneJeu.appendChild(messageDiv);
    
    // Supprimer le message après 2 secondes
    setTimeout(() => {
        if (messageDiv && messageDiv.parentNode) {
            messageDiv.remove();
        }
    }, 2000);
}

// Fonctions utilitaires
function recommencerJeu() {
    chargerJeu();
}



function mettreAJourProgression() {
    let points = parseInt(document.getElementById('points-jeu').textContent) || 0;
    points += 10;
    document.getElementById('points-jeu').textContent = points;
    
    let progression = document.getElementById('barre-progression-jeu');
    let currentWidth = parseInt(progression.style.width) || 0;
    let newWidth = Math.min(currentWidth + 33.33, 100);
    progression.style.width = newWidth + '%';
    document.getElementById('progression-jeu').textContent = Math.round(newWidth/33.33) + '/3';
}

// Animation CSS
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeInOut {
        0% { opacity: 0; transform: translate(-50%, -60%); }
        20% { opacity: 1; transform: translate(-50%, -50%); }
        80% { opacity: 1; transform: translate(-50%, -50%); }
        100% { opacity: 0; transform: translate(-50%, -40%); }
    }
`;
document.head.appendChild(style);
</script>
</div>
{% endblock %}", "cours/base_apprentissage.html.twig", "C:\\Users\\sarra\\Desktop\\PIW\\Fluently\\templates\\cours\\base_apprentissage.html.twig");
    }
}
