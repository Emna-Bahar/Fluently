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
class __TwigTemplate_0ecbff78a5339eb2cbf7a7db246d0bce extends Template
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
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 267, $this->source); })()), "idNiveau", [], "any", false, false, false, 267), "difficulte", [], "any", false, false, false, 267), "html", null, true);
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
            <div style=\"text-align: center;\">
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
            </div>
            
            <!-- Zone de feedback -->
            <div id=\"feedback-correction\" style=\"margin-top: 30px; padding: 20px; border-radius: 15px; display: none;\">
                <!-- Feedback dynamique -->
            </div>
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

        <!-- Bouton Terminer -->
        <div style=\"margin-top: 80px; text-align: center;\">
            <button onclick=\"terminerCours(";
<<<<<<< HEAD
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 347, $this->source); })()), "id", [], "any", false, false, false, 347), "html", null, true);
=======
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 330, $this->source); })()), "id", [], "any", false, false, false, 330), "html", null, true);
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
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
<<<<<<< HEAD
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 394, $this->source); })()), "id", [], "any", false, false, false, 394), "html", null, true);
=======
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 377, $this->source); })()), "id", [], "any", false, false, false, 377), "html", null, true);
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
        yield "/temps', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': '";
<<<<<<< HEAD
        // line 398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("temps" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 398, $this->source); })()), "id", [], "any", false, false, false, 398))), "html", null, true);
=======
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("temps" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 381, $this->source); })()), "id", [], "any", false, false, false, 381))), "html", null, true);
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
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
<<<<<<< HEAD
        // line 413
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 413, $this->source); })()), "id", [], "any", false, false, false, 413))), "html", null, true);
=======
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 396, $this->source); })()), "id", [], "any", false, false, false, 396))), "html", null, true);
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
        yield "'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = '";
<<<<<<< HEAD
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_apprentissage", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 419, $this->source); })()), "idNiveau", [], "any", false, false, false, 419), "idLangue", [], "any", false, false, false, 419), "id", [], "any", false, false, false, 419)]), "html", null, true);
=======
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_apprentissage", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 402, $this->source); })()), "idNiveau", [], "any", false, false, false, 402), "idLangue", [], "any", false, false, false, 402), "id", [], "any", false, false, false, 402)]), "html", null, true);
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
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
<<<<<<< HEAD
    
    <script>
// ============ DIALOGUE VOCAL AMÉLIORÉ ============
=======
    <script>
// ============ DIALOGUE VOCAL ============
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
let dialogue = [];
let indexActuel = 0;
let reconnaissanceVocale = null;
let enTrainDeParler = false;
<<<<<<< HEAD
let voixPreference = null;

// Fonction pour tester le microphone
function testerMicrophone() {
    navigator.mediaDevices.getUserMedia({ audio: true })
        .then(function(stream) {
            // Arrêter tous les pistes après confirmation
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

// Initialiser la reconnaissance vocale avec des paramètres optimisés
if ('webkitSpeechRecognition' in window) {
    reconnaissanceVocale = new webkitSpeechRecognition();
    reconnaissanceVocale.continuous = false;
    reconnaissanceVocale.interimResults = true; // Voir ce qui est reconnu en temps réel
    reconnaissanceVocale.maxAlternatives = 5; // Prendre plus d'alternatives
    
    // Définir la langue
    const langue = '";
        // line 539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 539, $this->source); })()), "idNiveau", [], "any", false, false, false, 539), "idLangue", [], "any", false, false, false, 539), "nom", [], "any", false, false, false, 539), "html", null, true);
        yield "';
    if (langue === 'Anglais') {
        reconnaissanceVocale.lang = 'en-US';
    } else {
        reconnaissanceVocale.lang = 'fr-FR';
    }
    
    let finalTranscript = '';
    let recognitionTimeout;
    
    reconnaissanceVocale.onresult = function(event) {
        let interimTranscript = '';
        let finalTranscript = '';
        
        for (let i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalTranscript += event.results[i][0].transcript;
                console.log('Final (confiance: ' + event.results[i][0].confidence + '): ' + event.results[i][0].transcript);
            } else {
                interimTranscript += event.results[i][0].transcript;
                console.log('Interim: ' + event.results[i][0].transcript);
            }
        }
        
        // Afficher ce qui est reconnu en temps réel
        if (interimTranscript !== '') {
            document.getElementById('feedback-correction').innerHTML = `
                <div style=\"background: #f3f4f6; padding: 20px; border-radius: 15px; text-align: center;\">
                    <p style=\"color: #333; font-size: 1.2rem;\">🎤 Je t'écoute...</p>
                    <p style=\"color: #059669; font-size: 1.1rem; font-style: italic; background: white; padding: 10px; border-radius: 8px;\">\"\${interimTranscript}\"</p>
                </div>
            `;
        }
        
        // Quand on a une transcription finale
        if (finalTranscript !== '') {
            clearTimeout(recognitionTimeout);
            recognitionTimeout = setTimeout(() => {
                verifierPrononciation(finalTranscript);
            }, 500);
        }
    };
    
    reconnaissanceVocale.onerror = function(event) {
        console.error('Erreur reconnaissance:', event);
        
        let message = \"Erreur de reconnaissance vocale: \";
        let bgColor = '#fee2e2';
        let textColor = '#b91c1c';
        
        switch(event.error) {
            case 'no-speech':
                message = \"Je n'ai pas entendu de parole. Essaie de parler plus fort.\";
                break;
            case 'audio-capture':
                message = \"Microphone non disponible. Vérifie tes permissions.\";
                break;
            case 'not-allowed':
                message = \"Permission pour le microphone refusée. Autorise l'accès dans les paramètres.\";
                break;
            case 'network':
                message = \"Erreur réseau. Vérifie ta connexion internet.\";
                break;
            case 'aborted':
                message = \"Reconnaissance arrêtée.\";
                bgColor = '#f3f4f6';
                textColor = '#333';
                break;
            default:
                message += event.error;
        }
        
        document.getElementById('feedback-correction').innerHTML = `
            <div style=\"background: \${bgColor}; padding: 20px; border-radius: 15px; text-align: center;\">
                <p style=\"color: \${textColor}; font-size: 1.1rem;\">❌ \${message}</p>
                <button onclick=\"commencerLecture()\" style=\"background: #3b82f6; color: white; border: none; padding: 10px 20px; border-radius: 50px; margin-top: 10px; cursor: pointer;\">
                    Réessayer
                </button>
            </div>
        `;
        arreterEcoute();
    };
    
    reconnaissanceVocale.onend = function() {
        console.log('Reconnaissance terminée');
        enTrainDeParler = false;
    };
    
} else {
    console.warn(\"Reconnaissance vocale non supportée\");
    // Afficher un message dans l'interface
    document.addEventListener('DOMContentLoaded', function() {
        const feedbackDiv = document.getElementById('feedback-correction');
        if (feedbackDiv) {
            feedbackDiv.style.display = 'block';
            feedbackDiv.innerHTML = `
                <div style=\"background: #fee2e2; padding: 20px; border-radius: 15px; text-align: center;\">
                    <p style=\"color: #b91c1c;\">❌ Désolé, ton navigateur ne supporte pas la reconnaissance vocale.</p>
                    <p style=\"color: #333;\">Utilise Chrome, Edge ou Safari pour cette fonctionnalité.</p>
                </div>
            `;
        }
    });
=======

// Initialiser la reconnaissance vocale
if ('webkitSpeechRecognition' in window) {
    reconnaissanceVocale = new webkitSpeechRecognition();
    reconnaissanceVocale.continuous = false;
    reconnaissanceVocale.interimResults = false;
    reconnaissanceVocale.lang = '";
        // line 489
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 489, $this->source); })()), "idNiveau", [], "any", false, false, false, 489), "idLangue", [], "any", false, false, false, 489), "nom", [], "any", false, false, false, 489) == "Anglais")) ? ("en-US") : ("fr-FR"));
        yield "';
    
    reconnaissanceVocale.onresult = function(event) {
        const parole = event.results[0][0].transcript;
        verifierPrononciation(parole);
    };
    
    reconnaissanceVocale.onerror = function(event) {
        alert(\"Erreur de reconnaissance vocale: \" + event.error);
        arreterEcoute();
    };
} else {
    console.warn(\"Reconnaissance vocale non supportée\");
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
}

// Générer le dialogue
function genererDialogue() {
    const theme = document.getElementById('theme-input').value.trim();
    
    if (!theme) {
        alert(\"Veuillez entrer un thème de conversation\");
        return;
    }
    
    // Afficher un loader
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
<<<<<<< HEAD
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 664, $this->source); })()), "idNiveau", [], "any", false, false, false, 664), "difficulte", [], "any", false, false, false, 664), "html", null, true);
        yield "',
            langue: '";
        // line 665
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 665, $this->source); })()), "idNiveau", [], "any", false, false, false, 665), "idLangue", [], "any", false, false, false, 665), "nom", [], "any", false, false, false, 665), "html", null, true);
=======
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 524, $this->source); })()), "idNiveau", [], "any", false, false, false, 524), "difficulte", [], "any", false, false, false, 524), "html", null, true);
        yield "',
            langue: '";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 525, $this->source); })()), "idNiveau", [], "any", false, false, false, 525), "idLangue", [], "any", false, false, false, 525), "nom", [], "any", false, false, false, 525), "html", null, true);
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
        yield "'
        })
    })
    .then(response => response.json())
    .then(data => {
        dialogue = data.dialogue;
        document.getElementById('total-repliques').textContent = dialogue.length;
        indexActuel = 0;
        afficherReplique();
<<<<<<< HEAD
    })
    .catch(error => {
        console.error('Erreur:', error);
        alert('Erreur lors de la génération du dialogue');
    });
}

=======
    });
}


>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
// Afficher la réplique courante
function afficherReplique() {
    if (indexActuel >= dialogue.length) {
        // Fin du dialogue
        document.getElementById('dialogue-ia').style.display = 'none';
        document.getElementById('dialogue-etudiant').style.display = 'none';
        document.getElementById('btn-commencer').style.display = 'none';
        document.getElementById('btn-suivant').style.display = 'none';
<<<<<<< HEAD
        document.getElementById('btn-changer-voix').style.display = 'none';
=======
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
        
        document.getElementById('feedback-correction').style.display = 'block';
        document.getElementById('feedback-correction').innerHTML = `
            <div style=\"background: #10b981; color: white; padding: 20px; border-radius: 15px; text-align: center;\">
                <span style=\"font-size: 3rem; display: block; margin-bottom: 15px;\">🎉</span>
                <h3 style=\"margin: 0 0 10px;\">Félicitations !</h3>
                <p>Tu as terminé la conversation sur le thème \"\${document.getElementById('theme-input').value}\".</p>
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
<<<<<<< HEAD
        document.getElementById('btn-changer-voix').style.display = 'inline-block';
=======
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
        
        // Nettoyer le texte de l'IA
        let texteIA = replique.texte;
        
        // Supprimer les préfixes comme \"IA:\" ou \"Professeur:\"
        if (texteIA.includes(':')) {
            texteIA = texteIA.split(':')[1].trim();
        }
        
        // Supprimer les guillemets au début et à la fin si présents
        texteIA = texteIA.replace(/^[\"']|[\"']\$/g, '');
        
        // Nettoyer les espaces multiples
        texteIA = texteIA.replace(/\\s+/g, ' ').trim();
        
        document.getElementById('texte-ia').textContent = texteIA;
        document.getElementById('btn-commencer').style.display = 'none';
        document.getElementById('btn-suivant').style.display = 'none';
        
<<<<<<< HEAD
        // L'IA lit automatiquement sa réplique
=======
        // ✅ L'IA LIT AUTOMATIQUEMENT SA RÉPLIQUE
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
        lireTexteIA(texteIA);
        
    } else {
        document.getElementById('dialogue-ia').style.display = 'none';
        document.getElementById('dialogue-etudiant').style.display = 'block';
<<<<<<< HEAD
        document.getElementById('btn-changer-voix').style.display = 'none';
=======
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
        
        // Nettoyer le texte de l'étudiant
        let texteEtudiant = replique.texte;
        
        // 1. Supprimer les préfixes comme \"Étudiant:\" ou \"Etudiant:\" ou \"Student:\"
        if (texteEtudiant.includes(':')) {
            const parties = texteEtudiant.split(':');
            texteEtudiant = parties[1] ? parties[1].trim() : parties[0].trim();
        }
        
        // 2. Supprimer les préfixes courants en anglais/français
        const prefixes = ['etudiant', 'étudiant', 'student', 'user', 'moi', 'toi', 'eleve', 'élève'];
        const texteLower = texteEtudiant.toLowerCase();
        
        for (const prefix of prefixes) {
            if (texteLower.startsWith(prefix)) {
                texteEtudiant = texteEtudiant.substring(prefix.length).trim();
                texteEtudiant = texteEtudiant.replace(/^[:,\\s]+/, '');
                break;
            }
        }
        
        // 3. Supprimer les guillemets au début et à la fin
        texteEtudiant = texteEtudiant.replace(/^[\"'\"\"]|[\"'\"\"]\$/g, '');
        
        // 4. Supprimer les points d'interrogation/exclamation en trop
        texteEtudiant = texteEtudiant.replace(/[?!]+\$/, (match) => match.charAt(0));
        
        // 5. Supprimer les mots parasites
        texteEtudiant = texteEtudiant.replace(/^(um|euh|ah|oh|bon|ben)[\\s.,!?]+/i, '');
        
        // 6. Nettoyer les espaces multiples
        texteEtudiant = texteEtudiant.replace(/\\s+/g, ' ').trim();
        
        // 7. Capitaliser la première lettre
        if (texteEtudiant.length > 0) {
            texteEtudiant = texteEtudiant.charAt(0).toUpperCase() + texteEtudiant.slice(1);
        }
        
        // 8. S'assurer que la phrase se termine correctement
        if (texteEtudiant.length > 0 && !texteEtudiant.match(/[.!?]\$/)) {
            texteEtudiant += '.';
        }
        
        document.getElementById('texte-etudiant').textContent = texteEtudiant;
        document.getElementById('btn-commencer').style.display = 'inline-block';
        document.getElementById('btn-suivant').style.display = 'none';
        
        // Cacher le feedback précédent
        document.getElementById('feedback-correction').style.display = 'none';
        document.getElementById('feedback-correction').innerHTML = '';
        
        // Remettre le score à 0%
        document.getElementById('score-actuel').textContent = '0%';
    }
}

<<<<<<< HEAD
// Fonction pour changer de voix
function changerVoix() {
    const voices = window.speechSynthesis.getVoices();
    const voixAnglaises = voices.filter(v => v.lang.startsWith('en'));
    
    if (voixAnglaises.length === 0) {
        alert(\"Aucune voix anglaise disponible\");
        return;
    }
    
    // Créer une liste de choix
    let message = \"Choisis une voix :\\n\\n\";
    voixAnglaises.forEach((voice, index) => {
        message += `\${index + 1}. \${voice.name} (\${voice.lang})\\n`;
    });
    
    const choix = prompt(message + \"\\nEntre le numéro de la voix choisie:\");
    
    if (choix && !isNaN(choix) && choix > 0 && choix <= voixAnglaises.length) {
        voixPreference = voixAnglaises[choix - 1];
        alert(`✅ Voix \"\${voixPreference.name}\" sélectionnée !`);
        
        // Réessayer la lecture avec la nouvelle voix si une réplique est en cours
        if (dialogue.length > 0 && indexActuel < dialogue.length && dialogue[indexActuel].role === 'ia') {
            lireTexteIA(document.getElementById('texte-ia').textContent);
        }
    }
}

// Fonction pour lire le texte de l'IA avec un accent anglais
=======
// ✅ NOUVELLE FONCTION : Lire le texte de l'IA
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
function lireTexteIA(texte) {
    // Arrêter toute lecture en cours
    window.speechSynthesis.cancel();
    
    // Créer une nouvelle utterance
    const utterance = new SpeechSynthesisUtterance(texte);
    
<<<<<<< HEAD
    // Définir la langue
    const langue = '";
        // line 836
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 836, $this->source); })()), "idNiveau", [], "any", false, false, false, 836), "idLangue", [], "any", false, false, false, 836), "nom", [], "any", false, false, false, 836), "html", null, true);
        yield "';
    
    // Pour l'anglais, on force l'accent américain ou britannique
    if (langue === 'Anglais') {
        utterance.lang = 'en-US';
        utterance.rate = 0.85;
        utterance.pitch = 1;
        utterance.volume = 1;
        
        // Fonction pour sélectionner la meilleure voix
        function setEnglishVoice() {
            const voices = window.speechSynthesis.getVoices();
            
            if (voices.length === 0) {
                setTimeout(setEnglishVoice, 100);
                return;
            }
            
            console.log('Voix disponibles:', voices.map(v => v.name + ' (' + v.lang + ')'));
            
            // 1. Utiliser la voix préférée si elle existe
            if (voixPreference && voixPreference.name) {
                const savedVoice = voices.find(v => v.name === voixPreference.name);
                if (savedVoice) {
                    utterance.voice = savedVoice;
                    console.log('✅ Voix préférée utilisée:', savedVoice.name);
                    return;
                }
            }
            
            // 2. Sinon, sélection automatique des meilleures voix
            const preferredVoices = [
                voices.find(v => v.name === 'Samantha'),
                voices.find(v => v.name === 'Alex'),
                voices.find(v => v.name === 'Karen'),
                voices.find(v => v.name === 'Daniel'),
                voices.find(v => v.name === 'Microsoft David Desktop'),
                voices.find(v => v.name === 'Microsoft Zira Desktop'),
                voices.find(v => v.name.includes('Google') && v.lang === 'en-US'),
                voices.find(v => v.lang === 'en-US'),
                voices.find(v => v.lang.startsWith('en'))
            ];
            
            for (const voice of preferredVoices) {
                if (voice) {
                    utterance.voice = voice;
                    console.log('✅ Voix automatique sélectionnée:', voice.name);
                    break;
                }
            }
        }
        
        if (window.speechSynthesis.getVoices().length > 0) {
            setEnglishVoice();
        } else {
            window.speechSynthesis.onvoiceschanged = setEnglishVoice;
        }
        
    } else {
        utterance.lang = 'fr-FR';
        utterance.rate = 0.9;
        
        function setFrenchVoice() {
            const voices = window.speechSynthesis.getVoices();
            const frenchVoice = voices.find(v => v.lang === 'fr-FR' && v.name.includes('Google')) ||
                               voices.find(v => v.lang === 'fr-FR');
            if (frenchVoice) utterance.voice = frenchVoice;
        }
        
        if (window.speechSynthesis.getVoices().length > 0) {
            setFrenchVoice();
        } else {
            window.speechSynthesis.onvoiceschanged = setFrenchVoice;
        }
    }
    
    utterance.onend = function() {
        console.log('✅ Lecture terminée');
        setTimeout(() => {
            indexActuel++;
            afficherReplique();
        }, 1000);
    };
    
    utterance.onerror = function(event) {
        console.error('❌ Erreur de synthèse vocale:', event);
        setTimeout(() => {
            indexActuel++;
            afficherReplique();
        }, 1000);
    };
    
    window.speechSynthesis.speak(utterance);
}

// Commencer la lecture avec feedback visuel amélioré
=======
    // Définir la langue en fonction du cours
    const langue = '";
        // line 661
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 661, $this->source); })()), "idNiveau", [], "any", false, false, false, 661), "idLangue", [], "any", false, false, false, 661), "nom", [], "any", false, false, false, 661), "html", null, true);
        yield "';
    utterance.lang = langue === 'Anglais' ? 'en-US' : 'fr-FR';
    
    // Optionnel : Choisir une voix féminine ou masculine
    utterance.rate = 0.9; // Légèrement plus lent pour mieux comprendre
    utterance.pitch = 1;
    
    // Quand la lecture est terminée, passer à la réplique suivante
    utterance.onend = function() {
        setTimeout(() => {
            indexActuel++;
            afficherReplique();
        }, 1000); // Petite pause de 1 seconde entre les répliques
    };
    
    // Lire le texte
    window.speechSynthesis.speak(utterance);
}

// Modifier la fonction commencerLecture pour que l'étudiant puisse lire sa réplique
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
function commencerLecture() {
    if (!reconnaissanceVocale) {
        alert(\"La reconnaissance vocale n'est pas supportée par ton navigateur\");
        return;
    }
    
    const texteAttendu = document.getElementById('texte-etudiant').textContent;
<<<<<<< HEAD
    document.getElementById('feedback-correction').style.display = 'block';
    document.getElementById('btn-commencer').style.display = 'none';
    document.getElementById('btn-suivant').style.display = 'none';
    
    // Instructions claires
    document.getElementById('feedback-correction').innerHTML = `
        <div style=\"background: #f3f4f6; padding: 20px; border-radius: 15px; text-align: center;\">
            <p style=\"color: #333; font-size: 1.2rem; margin-bottom: 10px;\">🎤 Parle maintenant...</p>
            <p style=\"color: #059669; font-size: 1.1rem; font-weight: bold; background: white; padding: 15px; border-radius: 10px; border: 2px solid #059669;\">
                \"\${texteAttendu}\"
            </p>
            <p style=\"color: #666; font-size: 0.9rem; margin-top: 15px;\">
                ⏱️ Parle clairement et attends un peu après avoir fini
            </p>
        </div>
    `;
    
    // Réinitialiser la reconnaissance
    try {
        reconnaissanceVocale.abort();
    } catch(e) {}
    
    setTimeout(() => {
        try {
            reconnaissanceVocale.start();
            enTrainDeParler = true;
            console.log('Reconnaissance démarrée');
        } catch(e) {
            console.error('Erreur démarrage:', e);
            document.getElementById('feedback-correction').innerHTML = `
                <div style=\"background: #fee2e2; padding: 20px; border-radius: 15px; text-align: center;\">
                    <p style=\"color: #b91c1c;\">❌ Impossible de démarrer la reconnaissance vocale</p>
                    <button onclick=\"commencerLecture()\" style=\"background: #3b82f6; color: white; border: none; padding: 10px 20px; border-radius: 50px; margin-top: 10px; cursor: pointer;\">
                        Réessayer
                    </button>
                </div>
            `;
        }
    }, 500);
}

// Passer à la réplique suivante
function passerRepliqueSuivante() {
    arreterEcoute();
    window.speechSynthesis.cancel();
=======
    document.getElementById('feedback-correction').style.display = 'none';
    document.getElementById('btn-commencer').style.display = 'none';
    document.getElementById('btn-suivant').style.display = 'none';
    
    // Indiquer à l'utilisateur qu'il peut parler
    document.getElementById('feedback-correction').innerHTML = `
        <div style=\"background: #f3f4f6; padding: 20px; border-radius: 15px; text-align: center;\">
            <p style=\"color: #333; font-size: 1.2rem;\">🎤 Parle maintenant...</p>
            <p style=\"color: #666; font-size: 1rem;\">Lis la phrase : \"\${texteAttendu}\"</p>
        </div>
    `;
    document.getElementById('feedback-correction').style.display = 'block';
    
    // Démarrer la reconnaissance vocale
    reconnaissanceVocale.start();
    enTrainDeParler = true;
}

// Modifier la fonction passerRepliqueSuivante pour arrêter toute lecture en cours
function passerRepliqueSuivante() {
    arreterEcoute();
    window.speechSynthesis.cancel(); // Arrêter la lecture de l'IA si en cours
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
    indexActuel++;
    afficherReplique();
    document.getElementById('btn-suivant').style.display = 'none';
}

<<<<<<< HEAD
// Recommencer
function recommencer() {
    window.speechSynthesis.cancel();
=======
// Modifier la fonction recommencer
function recommencer() {
    window.speechSynthesis.cancel(); // Arrêter toute lecture
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
    document.getElementById('etape-theme').style.display = 'block';
    document.getElementById('etape-dialogue').style.display = 'none';
    document.getElementById('theme-input').value = '';
    document.getElementById('score-actuel').textContent = '0%';
    arreterEcoute();
}

<<<<<<< HEAD
// Vérifier la prononciation
function verifierPrononciation(parole) {
    const texteAttendu = document.getElementById('texte-etudiant').textContent;
    
    parole = parole.trim();
    console.log('Parole reconnue (finale):', parole);
    
    // Nettoyer la parole des erreurs courantes de reconnaissance
    parole = parole.replace(/\\bi\\b/g, 'I');
    parole = parole.replace(/\\bu\\b/g, 'you');
    parole = parole.replace(/\\br\\b/g, 'are');
    
    // Afficher ce qui a été compris
    document.getElementById('feedback-correction').innerHTML = `
        <div style=\"background: #f3f4f6; padding: 20px; border-radius: 15px; text-align: center;\">
            <p style=\"color: #333;\">🔍 Analyse en cours...</p>
            <p style=\"color: #059669;\">J'ai compris : \"\${parole}\"</p>
        </div>
    `;
=======
// Vérifier la prononciation (version améliorée avec couleurs lisibles)
function verifierPrononciation(parole) {
    const texteAttendu = document.getElementById('texte-etudiant').textContent;
    
    // Nettoyer la parole de l'utilisateur
    parole = parole.trim();
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
    
    fetch('/dialogue/verifier', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({
            texte: parole,
            attendu: texteAttendu
        })
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('score-actuel').textContent = data.score + '%';
        
        let feedbackHtml = '';
        
        if (data.reussite) {
            feedbackHtml = `
                <div style=\"background: #10b981; color: white; padding: 20px; border-radius: 15px;\">
                    <div style=\"display: flex; align-items: center; gap: 15px; margin-bottom: 10px;\">
                        <span style=\"font-size: 2rem;\">✅</span>
                        <h4 style=\"margin: 0; color: white;\">Parfait !</h4>
                    </div>
                    <p style=\"color: white;\">Tu as dit : \"\${data.texte_utilisateur}\"</p>
                    <p style=\"color: white;\">La phrase correcte est : \"\${data.texte_attendu}\"</p>
                    <p style=\"color: white; font-weight: bold;\">Score: \${data.score}%</p>
                </div>
            `;
        } else {
            let erreursHtml = '';
            
            if (data.erreurs && data.erreurs.length > 0) {
                data.erreurs.forEach(erreur => {
<<<<<<< HEAD
                    let bgColor = '#fff5f5';
                    let borderColor = '#dc2626';
                    let icon = '❌';
                    
                    if (erreur.type === 'missing') {
                        bgColor = '#fffbeb';
                        borderColor = '#b45309';
                        icon = '⚠️';
                    } else if (erreur.type === 'extra') {
                        bgColor = '#eff6ff';
                        borderColor = '#2563eb';
                        icon = '➕';
                    } else if (erreur.type === 'orthographe') {
                        bgColor = '#fef3c7';
                        borderColor = '#d97706';
                        icon = '✏️';
=======
                    let bgColor = '#fff5f5';  // Rouge très clair
                    let borderColor = '#dc2626';
                    let icon = '❌';
                    let textColor = '#1e293b'; // Texte en gris foncé
                    
                    if (erreur.type === 'missing') {
                        bgColor = '#fffbeb';  // Jaune très clair
                        borderColor = '#b45309';
                        icon = '⚠️';
                    } else if (erreur.type === 'extra') {
                        bgColor = '#eff6ff';  // Bleu très clair
                        borderColor = '#2563eb';
                        icon = '➕';
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
                    }
                    
                    erreursHtml += `
                        <div style=\"background: \${bgColor}; padding: 15px; border-radius: 10px; margin-bottom: 10px; border-left: 4px solid \${borderColor};\">
                            <p style=\"color: #1e293b; margin: 0;\"><strong>\${icon} \${erreur.message}</strong></p>
                        </div>
                    `;
                });
            }
            
<<<<<<< HEAD
            // Ajouter un message si la reconnaissance a mal compris
            if (data.score < 50 && parole.toLowerCase().includes('je') && '";
        // line 1077
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 1077, $this->source); })()), "idNiveau", [], "any", false, false, false, 1077), "idLangue", [], "any", false, false, false, 1077), "nom", [], "any", false, false, false, 1077), "html", null, true);
        yield "' === 'Anglais') {
                erreursHtml += `
                    <div style=\"background: #fff3cd; padding: 15px; border-radius: 10px; margin-top: 10px;\">
                        <p style=\"color: #856404; margin: 0;\"><strong>💡 Astuce:</strong> La reconnaissance a peut-être mal compris. Essaie de parler plus distinctement en anglais.</p>
                    </div>
                `;
            }
            
=======
            // Ajouter un résumé des statistiques
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
            if (data.statistiques) {
                erreursHtml += `
                    <div style=\"background: #f8fafc; padding: 15px; border-radius: 10px; margin-top: 15px; border: 1px solid #cbd5e1;\">
                        <p style=\"margin: 5px 0; color: #0f172a;\"><strong>Résumé :</strong></p>
                        <p style=\"margin: 5px 0; color: #0f172a;\">✅ Mots corrects : \${data.statistiques.mots_corrects}/\${data.statistiques.total_mots}</p>
                        <p style=\"margin: 5px 0; color: #0f172a;\">⚠️ Mots manquants : \${data.statistiques.mots_manquants}</p>
                        <p style=\"margin: 5px 0; color: #0f172a;\">➕ Mots en trop : \${data.statistiques.mots_en_trop}</p>
                    </div>
                `;
            }
            
<<<<<<< HEAD
=======
            // Ajouter la phrase correcte pour référence
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
            erreursHtml += `
                <div style=\"background: #dbeafe; padding: 15px; border-radius: 10px; margin-top: 15px; border: 1px solid #3b82f6;\">
                    <p style=\"margin: 0; color: #1e3a8a;\"><strong>📝 Phrase à dire :</strong> \"\${data.texte_attendu}\"</p>
                </div>
            `;
            
            feedbackHtml = `
                <div style=\"background: #ffffff; border: 2px solid #fbbf24; border-radius: 15px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
                    <div style=\"display: flex; align-items: center; gap: 15px; margin-bottom: 15px; border-bottom: 2px solid #fbbf24; padding-bottom: 15px;\">
                        <span style=\"font-size: 2rem;\">📝</span>
                        <h4 style=\"color: #92400e; margin: 0;\">Analyse de ta phrase</h4>
                    </div>
<<<<<<< HEAD
                    <p style=\"color: #000000; font-weight: bold; background: #f3f4f6; padding: 10px; border-radius: 8px;\">
                        <strong>Tu as dit :</strong> \"\${data.texte_utilisateur}\"
                    </p>
=======
                    <p style=\"color: #000000; font-weight: bold; background: #f3f4f6; padding: 10px; border-radius: 8px;\"><strong>Tu as dit :</strong> \"\${data.texte_utilisateur}\"</p>
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
                    \${erreursHtml}
                    <p style=\"margin-top: 15px; color: #92400e; font-weight: bold; font-size: 1.2rem; text-align: right;\">Score: \${data.score}%</p>
                </div>
            `;
        }
        
        document.getElementById('feedback-correction').innerHTML = feedbackHtml;
        document.getElementById('btn-suivant').style.display = 'inline-block';
        arreterEcoute();
    })
    .catch(error => {
        console.error('Erreur:', error);
<<<<<<< HEAD
        document.getElementById('feedback-correction').innerHTML = `
            <div style=\"background: #fee2e2; padding: 20px; border-radius: 15px; text-align: center;\">
                <p style=\"color: #b91c1c;\">❌ Une erreur est survenue. Réessaie.</p>
                <button onclick=\"commencerLecture()\" style=\"background: #3b82f6; color: white; border: none; padding: 10px 20px; border-radius: 50px; margin-top: 10px; cursor: pointer;\">
                    Réessayer
                </button>
            </div>
        `;
        document.getElementById('btn-suivant').style.display = 'inline-block';
        arreterEcoute();
=======
        alert('Une erreur est survenue lors de la vérification');
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
    });
}

// Arrêter l'écoute
function arreterEcoute() {
    if (reconnaissanceVocale && enTrainDeParler) {
<<<<<<< HEAD
        try {
            reconnaissanceVocale.stop();
        } catch(e) {}
        enTrainDeParler = false;
    }
}
=======
        reconnaissanceVocale.stop();
        enTrainDeParler = false;
    }
}


>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
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
<<<<<<< HEAD
        return array (  1457 => 1077,  1213 => 836,  1039 => 665,  1035 => 664,  907 => 539,  784 => 419,  775 => 413,  757 => 398,  750 => 394,  700 => 347,  618 => 268,  534 => 186,  528 => 182,  525 => 181,  522 => 179,  519 => 178,  499 => 172,  485 => 161,  478 => 156,  460 => 155,  457 => 154,  454 => 152,  451 => 151,  435 => 148,  432 => 147,  424 => 142,  419 => 140,  416 => 139,  407 => 135,  404 => 134,  402 => 133,  395 => 130,  393 => 129,  385 => 126,  382 => 125,  380 => 124,  375 => 123,  373 => 122,  370 => 121,  367 => 120,  363 => 118,  356 => 114,  352 => 112,  341 => 104,  337 => 102,  335 => 101,  332 => 100,  329 => 99,  326 => 98,  323 => 97,  320 => 96,  317 => 95,  314 => 94,  312 => 93,  309 => 92,  306 => 91,  303 => 90,  301 => 89,  299 => 88,  290 => 84,  286 => 82,  283 => 81,  278 => 80,  274 => 79,  270 => 78,  266 => 77,  262 => 76,  255 => 72,  252 => 71,  249 => 70,  246 => 69,  242 => 68,  238 => 67,  234 => 66,  230 => 65,  227 => 64,  224 => 63,  221 => 62,  218 => 61,  216 => 60,  213 => 59,  210 => 58,  192 => 57,  189 => 56,  163 => 32,  154 => 28,  148 => 25,  131 => 10,  118 => 9,  104 => 6,  91 => 5,  65 => 3,  42 => 1,);
=======
        return array (  1038 => 661,  899 => 525,  895 => 524,  857 => 489,  767 => 402,  758 => 396,  740 => 381,  733 => 377,  683 => 330,  617 => 267,  534 => 186,  528 => 182,  525 => 181,  522 => 179,  519 => 178,  499 => 172,  485 => 161,  478 => 156,  460 => 155,  457 => 154,  454 => 152,  451 => 151,  435 => 148,  432 => 147,  424 => 142,  419 => 140,  416 => 139,  407 => 135,  404 => 134,  402 => 133,  395 => 130,  393 => 129,  385 => 126,  382 => 125,  380 => 124,  375 => 123,  373 => 122,  370 => 121,  367 => 120,  363 => 118,  356 => 114,  352 => 112,  341 => 104,  337 => 102,  335 => 101,  332 => 100,  329 => 99,  326 => 98,  323 => 97,  320 => 96,  317 => 95,  314 => 94,  312 => 93,  309 => 92,  306 => 91,  303 => 90,  301 => 89,  299 => 88,  290 => 84,  286 => 82,  283 => 81,  278 => 80,  274 => 79,  270 => 78,  266 => 77,  262 => 76,  255 => 72,  252 => 71,  249 => 70,  246 => 69,  242 => 68,  238 => 67,  234 => 66,  230 => 65,  227 => 64,  224 => 63,  221 => 62,  218 => 61,  216 => 60,  213 => 59,  210 => 58,  192 => 57,  189 => 56,  163 => 32,  154 => 28,  148 => 25,  131 => 10,  118 => 9,  104 => 6,  91 => 5,  65 => 3,  42 => 1,);
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
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
            <div style=\"text-align: center;\">
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
            </div>
            
            <!-- Zone de feedback -->
            <div id=\"feedback-correction\" style=\"margin-top: 30px; padding: 20px; border-radius: 15px; display: none;\">
                <!-- Feedback dynamique -->
            </div>
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
<<<<<<< HEAD
    
    <script>
// ============ DIALOGUE VOCAL AMÉLIORÉ ============
=======
    <script>
// ============ DIALOGUE VOCAL ============
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
let dialogue = [];
let indexActuel = 0;
let reconnaissanceVocale = null;
let enTrainDeParler = false;
<<<<<<< HEAD
let voixPreference = null;

// Fonction pour tester le microphone
function testerMicrophone() {
    navigator.mediaDevices.getUserMedia({ audio: true })
        .then(function(stream) {
            // Arrêter tous les pistes après confirmation
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

// Initialiser la reconnaissance vocale avec des paramètres optimisés
if ('webkitSpeechRecognition' in window) {
    reconnaissanceVocale = new webkitSpeechRecognition();
    reconnaissanceVocale.continuous = false;
    reconnaissanceVocale.interimResults = true; // Voir ce qui est reconnu en temps réel
    reconnaissanceVocale.maxAlternatives = 5; // Prendre plus d'alternatives
    
    // Définir la langue
    const langue = '{{ cour.idNiveau.idLangue.nom }}';
    if (langue === 'Anglais') {
        reconnaissanceVocale.lang = 'en-US';
    } else {
        reconnaissanceVocale.lang = 'fr-FR';
    }
    
    let finalTranscript = '';
    let recognitionTimeout;
    
    reconnaissanceVocale.onresult = function(event) {
        let interimTranscript = '';
        let finalTranscript = '';
        
        for (let i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalTranscript += event.results[i][0].transcript;
                console.log('Final (confiance: ' + event.results[i][0].confidence + '): ' + event.results[i][0].transcript);
            } else {
                interimTranscript += event.results[i][0].transcript;
                console.log('Interim: ' + event.results[i][0].transcript);
            }
        }
        
        // Afficher ce qui est reconnu en temps réel
        if (interimTranscript !== '') {
            document.getElementById('feedback-correction').innerHTML = `
                <div style=\"background: #f3f4f6; padding: 20px; border-radius: 15px; text-align: center;\">
                    <p style=\"color: #333; font-size: 1.2rem;\">🎤 Je t'écoute...</p>
                    <p style=\"color: #059669; font-size: 1.1rem; font-style: italic; background: white; padding: 10px; border-radius: 8px;\">\"\${interimTranscript}\"</p>
                </div>
            `;
        }
        
        // Quand on a une transcription finale
        if (finalTranscript !== '') {
            clearTimeout(recognitionTimeout);
            recognitionTimeout = setTimeout(() => {
                verifierPrononciation(finalTranscript);
            }, 500);
        }
    };
    
    reconnaissanceVocale.onerror = function(event) {
        console.error('Erreur reconnaissance:', event);
        
        let message = \"Erreur de reconnaissance vocale: \";
        let bgColor = '#fee2e2';
        let textColor = '#b91c1c';
        
        switch(event.error) {
            case 'no-speech':
                message = \"Je n'ai pas entendu de parole. Essaie de parler plus fort.\";
                break;
            case 'audio-capture':
                message = \"Microphone non disponible. Vérifie tes permissions.\";
                break;
            case 'not-allowed':
                message = \"Permission pour le microphone refusée. Autorise l'accès dans les paramètres.\";
                break;
            case 'network':
                message = \"Erreur réseau. Vérifie ta connexion internet.\";
                break;
            case 'aborted':
                message = \"Reconnaissance arrêtée.\";
                bgColor = '#f3f4f6';
                textColor = '#333';
                break;
            default:
                message += event.error;
        }
        
        document.getElementById('feedback-correction').innerHTML = `
            <div style=\"background: \${bgColor}; padding: 20px; border-radius: 15px; text-align: center;\">
                <p style=\"color: \${textColor}; font-size: 1.1rem;\">❌ \${message}</p>
                <button onclick=\"commencerLecture()\" style=\"background: #3b82f6; color: white; border: none; padding: 10px 20px; border-radius: 50px; margin-top: 10px; cursor: pointer;\">
                    Réessayer
                </button>
            </div>
        `;
        arreterEcoute();
    };
    
    reconnaissanceVocale.onend = function() {
        console.log('Reconnaissance terminée');
        enTrainDeParler = false;
    };
    
} else {
    console.warn(\"Reconnaissance vocale non supportée\");
    // Afficher un message dans l'interface
    document.addEventListener('DOMContentLoaded', function() {
        const feedbackDiv = document.getElementById('feedback-correction');
        if (feedbackDiv) {
            feedbackDiv.style.display = 'block';
            feedbackDiv.innerHTML = `
                <div style=\"background: #fee2e2; padding: 20px; border-radius: 15px; text-align: center;\">
                    <p style=\"color: #b91c1c;\">❌ Désolé, ton navigateur ne supporte pas la reconnaissance vocale.</p>
                    <p style=\"color: #333;\">Utilise Chrome, Edge ou Safari pour cette fonctionnalité.</p>
                </div>
            `;
        }
    });
=======

// Initialiser la reconnaissance vocale
if ('webkitSpeechRecognition' in window) {
    reconnaissanceVocale = new webkitSpeechRecognition();
    reconnaissanceVocale.continuous = false;
    reconnaissanceVocale.interimResults = false;
    reconnaissanceVocale.lang = '{{ cour.idNiveau.idLangue.nom == \"Anglais\" ? \"en-US\" : \"fr-FR\" }}';
    
    reconnaissanceVocale.onresult = function(event) {
        const parole = event.results[0][0].transcript;
        verifierPrononciation(parole);
    };
    
    reconnaissanceVocale.onerror = function(event) {
        alert(\"Erreur de reconnaissance vocale: \" + event.error);
        arreterEcoute();
    };
} else {
    console.warn(\"Reconnaissance vocale non supportée\");
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
}

// Générer le dialogue
function genererDialogue() {
    const theme = document.getElementById('theme-input').value.trim();
    
    if (!theme) {
        alert(\"Veuillez entrer un thème de conversation\");
        return;
    }
    
    // Afficher un loader
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
<<<<<<< HEAD
    })
    .catch(error => {
        console.error('Erreur:', error);
        alert('Erreur lors de la génération du dialogue');
    });
}

=======
    });
}


>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
// Afficher la réplique courante
function afficherReplique() {
    if (indexActuel >= dialogue.length) {
        // Fin du dialogue
        document.getElementById('dialogue-ia').style.display = 'none';
        document.getElementById('dialogue-etudiant').style.display = 'none';
        document.getElementById('btn-commencer').style.display = 'none';
        document.getElementById('btn-suivant').style.display = 'none';
<<<<<<< HEAD
        document.getElementById('btn-changer-voix').style.display = 'none';
=======
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
        
        document.getElementById('feedback-correction').style.display = 'block';
        document.getElementById('feedback-correction').innerHTML = `
            <div style=\"background: #10b981; color: white; padding: 20px; border-radius: 15px; text-align: center;\">
                <span style=\"font-size: 3rem; display: block; margin-bottom: 15px;\">🎉</span>
                <h3 style=\"margin: 0 0 10px;\">Félicitations !</h3>
                <p>Tu as terminé la conversation sur le thème \"\${document.getElementById('theme-input').value}\".</p>
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
<<<<<<< HEAD
        document.getElementById('btn-changer-voix').style.display = 'inline-block';
=======
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
        
        // Nettoyer le texte de l'IA
        let texteIA = replique.texte;
        
        // Supprimer les préfixes comme \"IA:\" ou \"Professeur:\"
        if (texteIA.includes(':')) {
            texteIA = texteIA.split(':')[1].trim();
        }
        
        // Supprimer les guillemets au début et à la fin si présents
        texteIA = texteIA.replace(/^[\"']|[\"']\$/g, '');
        
        // Nettoyer les espaces multiples
        texteIA = texteIA.replace(/\\s+/g, ' ').trim();
        
        document.getElementById('texte-ia').textContent = texteIA;
        document.getElementById('btn-commencer').style.display = 'none';
        document.getElementById('btn-suivant').style.display = 'none';
        
<<<<<<< HEAD
        // L'IA lit automatiquement sa réplique
=======
        // ✅ L'IA LIT AUTOMATIQUEMENT SA RÉPLIQUE
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
        lireTexteIA(texteIA);
        
    } else {
        document.getElementById('dialogue-ia').style.display = 'none';
        document.getElementById('dialogue-etudiant').style.display = 'block';
<<<<<<< HEAD
        document.getElementById('btn-changer-voix').style.display = 'none';
=======
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
        
        // Nettoyer le texte de l'étudiant
        let texteEtudiant = replique.texte;
        
        // 1. Supprimer les préfixes comme \"Étudiant:\" ou \"Etudiant:\" ou \"Student:\"
        if (texteEtudiant.includes(':')) {
            const parties = texteEtudiant.split(':');
            texteEtudiant = parties[1] ? parties[1].trim() : parties[0].trim();
        }
        
        // 2. Supprimer les préfixes courants en anglais/français
        const prefixes = ['etudiant', 'étudiant', 'student', 'user', 'moi', 'toi', 'eleve', 'élève'];
        const texteLower = texteEtudiant.toLowerCase();
        
        for (const prefix of prefixes) {
            if (texteLower.startsWith(prefix)) {
                texteEtudiant = texteEtudiant.substring(prefix.length).trim();
                texteEtudiant = texteEtudiant.replace(/^[:,\\s]+/, '');
                break;
            }
        }
        
        // 3. Supprimer les guillemets au début et à la fin
        texteEtudiant = texteEtudiant.replace(/^[\"'\"\"]|[\"'\"\"]\$/g, '');
        
        // 4. Supprimer les points d'interrogation/exclamation en trop
        texteEtudiant = texteEtudiant.replace(/[?!]+\$/, (match) => match.charAt(0));
        
        // 5. Supprimer les mots parasites
        texteEtudiant = texteEtudiant.replace(/^(um|euh|ah|oh|bon|ben)[\\s.,!?]+/i, '');
        
        // 6. Nettoyer les espaces multiples
        texteEtudiant = texteEtudiant.replace(/\\s+/g, ' ').trim();
        
        // 7. Capitaliser la première lettre
        if (texteEtudiant.length > 0) {
            texteEtudiant = texteEtudiant.charAt(0).toUpperCase() + texteEtudiant.slice(1);
        }
        
        // 8. S'assurer que la phrase se termine correctement
        if (texteEtudiant.length > 0 && !texteEtudiant.match(/[.!?]\$/)) {
            texteEtudiant += '.';
        }
        
        document.getElementById('texte-etudiant').textContent = texteEtudiant;
        document.getElementById('btn-commencer').style.display = 'inline-block';
        document.getElementById('btn-suivant').style.display = 'none';
        
        // Cacher le feedback précédent
        document.getElementById('feedback-correction').style.display = 'none';
        document.getElementById('feedback-correction').innerHTML = '';
        
        // Remettre le score à 0%
        document.getElementById('score-actuel').textContent = '0%';
    }
}

<<<<<<< HEAD
// Fonction pour changer de voix
function changerVoix() {
    const voices = window.speechSynthesis.getVoices();
    const voixAnglaises = voices.filter(v => v.lang.startsWith('en'));
    
    if (voixAnglaises.length === 0) {
        alert(\"Aucune voix anglaise disponible\");
        return;
    }
    
    // Créer une liste de choix
    let message = \"Choisis une voix :\\n\\n\";
    voixAnglaises.forEach((voice, index) => {
        message += `\${index + 1}. \${voice.name} (\${voice.lang})\\n`;
    });
    
    const choix = prompt(message + \"\\nEntre le numéro de la voix choisie:\");
    
    if (choix && !isNaN(choix) && choix > 0 && choix <= voixAnglaises.length) {
        voixPreference = voixAnglaises[choix - 1];
        alert(`✅ Voix \"\${voixPreference.name}\" sélectionnée !`);
        
        // Réessayer la lecture avec la nouvelle voix si une réplique est en cours
        if (dialogue.length > 0 && indexActuel < dialogue.length && dialogue[indexActuel].role === 'ia') {
            lireTexteIA(document.getElementById('texte-ia').textContent);
        }
    }
}

// Fonction pour lire le texte de l'IA avec un accent anglais
=======
// ✅ NOUVELLE FONCTION : Lire le texte de l'IA
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
function lireTexteIA(texte) {
    // Arrêter toute lecture en cours
    window.speechSynthesis.cancel();
    
    // Créer une nouvelle utterance
    const utterance = new SpeechSynthesisUtterance(texte);
    
<<<<<<< HEAD
    // Définir la langue
    const langue = '{{ cour.idNiveau.idLangue.nom }}';
    
    // Pour l'anglais, on force l'accent américain ou britannique
    if (langue === 'Anglais') {
        utterance.lang = 'en-US';
        utterance.rate = 0.85;
        utterance.pitch = 1;
        utterance.volume = 1;
        
        // Fonction pour sélectionner la meilleure voix
        function setEnglishVoice() {
            const voices = window.speechSynthesis.getVoices();
            
            if (voices.length === 0) {
                setTimeout(setEnglishVoice, 100);
                return;
            }
            
            console.log('Voix disponibles:', voices.map(v => v.name + ' (' + v.lang + ')'));
            
            // 1. Utiliser la voix préférée si elle existe
            if (voixPreference && voixPreference.name) {
                const savedVoice = voices.find(v => v.name === voixPreference.name);
                if (savedVoice) {
                    utterance.voice = savedVoice;
                    console.log('✅ Voix préférée utilisée:', savedVoice.name);
                    return;
                }
            }
            
            // 2. Sinon, sélection automatique des meilleures voix
            const preferredVoices = [
                voices.find(v => v.name === 'Samantha'),
                voices.find(v => v.name === 'Alex'),
                voices.find(v => v.name === 'Karen'),
                voices.find(v => v.name === 'Daniel'),
                voices.find(v => v.name === 'Microsoft David Desktop'),
                voices.find(v => v.name === 'Microsoft Zira Desktop'),
                voices.find(v => v.name.includes('Google') && v.lang === 'en-US'),
                voices.find(v => v.lang === 'en-US'),
                voices.find(v => v.lang.startsWith('en'))
            ];
            
            for (const voice of preferredVoices) {
                if (voice) {
                    utterance.voice = voice;
                    console.log('✅ Voix automatique sélectionnée:', voice.name);
                    break;
                }
            }
        }
        
        if (window.speechSynthesis.getVoices().length > 0) {
            setEnglishVoice();
        } else {
            window.speechSynthesis.onvoiceschanged = setEnglishVoice;
        }
        
    } else {
        utterance.lang = 'fr-FR';
        utterance.rate = 0.9;
        
        function setFrenchVoice() {
            const voices = window.speechSynthesis.getVoices();
            const frenchVoice = voices.find(v => v.lang === 'fr-FR' && v.name.includes('Google')) ||
                               voices.find(v => v.lang === 'fr-FR');
            if (frenchVoice) utterance.voice = frenchVoice;
        }
        
        if (window.speechSynthesis.getVoices().length > 0) {
            setFrenchVoice();
        } else {
            window.speechSynthesis.onvoiceschanged = setFrenchVoice;
        }
    }
    
    utterance.onend = function() {
        console.log('✅ Lecture terminée');
        setTimeout(() => {
            indexActuel++;
            afficherReplique();
        }, 1000);
    };
    
    utterance.onerror = function(event) {
        console.error('❌ Erreur de synthèse vocale:', event);
        setTimeout(() => {
            indexActuel++;
            afficherReplique();
        }, 1000);
    };
    
    window.speechSynthesis.speak(utterance);
}

// Commencer la lecture avec feedback visuel amélioré
=======
    // Définir la langue en fonction du cours
    const langue = '{{ cour.idNiveau.idLangue.nom }}';
    utterance.lang = langue === 'Anglais' ? 'en-US' : 'fr-FR';
    
    // Optionnel : Choisir une voix féminine ou masculine
    utterance.rate = 0.9; // Légèrement plus lent pour mieux comprendre
    utterance.pitch = 1;
    
    // Quand la lecture est terminée, passer à la réplique suivante
    utterance.onend = function() {
        setTimeout(() => {
            indexActuel++;
            afficherReplique();
        }, 1000); // Petite pause de 1 seconde entre les répliques
    };
    
    // Lire le texte
    window.speechSynthesis.speak(utterance);
}

// Modifier la fonction commencerLecture pour que l'étudiant puisse lire sa réplique
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
function commencerLecture() {
    if (!reconnaissanceVocale) {
        alert(\"La reconnaissance vocale n'est pas supportée par ton navigateur\");
        return;
    }
    
    const texteAttendu = document.getElementById('texte-etudiant').textContent;
<<<<<<< HEAD
    document.getElementById('feedback-correction').style.display = 'block';
    document.getElementById('btn-commencer').style.display = 'none';
    document.getElementById('btn-suivant').style.display = 'none';
    
    // Instructions claires
    document.getElementById('feedback-correction').innerHTML = `
        <div style=\"background: #f3f4f6; padding: 20px; border-radius: 15px; text-align: center;\">
            <p style=\"color: #333; font-size: 1.2rem; margin-bottom: 10px;\">🎤 Parle maintenant...</p>
            <p style=\"color: #059669; font-size: 1.1rem; font-weight: bold; background: white; padding: 15px; border-radius: 10px; border: 2px solid #059669;\">
                \"\${texteAttendu}\"
            </p>
            <p style=\"color: #666; font-size: 0.9rem; margin-top: 15px;\">
                ⏱️ Parle clairement et attends un peu après avoir fini
            </p>
        </div>
    `;
    
    // Réinitialiser la reconnaissance
    try {
        reconnaissanceVocale.abort();
    } catch(e) {}
    
    setTimeout(() => {
        try {
            reconnaissanceVocale.start();
            enTrainDeParler = true;
            console.log('Reconnaissance démarrée');
        } catch(e) {
            console.error('Erreur démarrage:', e);
            document.getElementById('feedback-correction').innerHTML = `
                <div style=\"background: #fee2e2; padding: 20px; border-radius: 15px; text-align: center;\">
                    <p style=\"color: #b91c1c;\">❌ Impossible de démarrer la reconnaissance vocale</p>
                    <button onclick=\"commencerLecture()\" style=\"background: #3b82f6; color: white; border: none; padding: 10px 20px; border-radius: 50px; margin-top: 10px; cursor: pointer;\">
                        Réessayer
                    </button>
                </div>
            `;
        }
    }, 500);
}

// Passer à la réplique suivante
function passerRepliqueSuivante() {
    arreterEcoute();
    window.speechSynthesis.cancel();
=======
    document.getElementById('feedback-correction').style.display = 'none';
    document.getElementById('btn-commencer').style.display = 'none';
    document.getElementById('btn-suivant').style.display = 'none';
    
    // Indiquer à l'utilisateur qu'il peut parler
    document.getElementById('feedback-correction').innerHTML = `
        <div style=\"background: #f3f4f6; padding: 20px; border-radius: 15px; text-align: center;\">
            <p style=\"color: #333; font-size: 1.2rem;\">🎤 Parle maintenant...</p>
            <p style=\"color: #666; font-size: 1rem;\">Lis la phrase : \"\${texteAttendu}\"</p>
        </div>
    `;
    document.getElementById('feedback-correction').style.display = 'block';
    
    // Démarrer la reconnaissance vocale
    reconnaissanceVocale.start();
    enTrainDeParler = true;
}

// Modifier la fonction passerRepliqueSuivante pour arrêter toute lecture en cours
function passerRepliqueSuivante() {
    arreterEcoute();
    window.speechSynthesis.cancel(); // Arrêter la lecture de l'IA si en cours
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
    indexActuel++;
    afficherReplique();
    document.getElementById('btn-suivant').style.display = 'none';
}

<<<<<<< HEAD
// Recommencer
function recommencer() {
    window.speechSynthesis.cancel();
=======
// Modifier la fonction recommencer
function recommencer() {
    window.speechSynthesis.cancel(); // Arrêter toute lecture
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
    document.getElementById('etape-theme').style.display = 'block';
    document.getElementById('etape-dialogue').style.display = 'none';
    document.getElementById('theme-input').value = '';
    document.getElementById('score-actuel').textContent = '0%';
    arreterEcoute();
}

<<<<<<< HEAD
// Vérifier la prononciation
function verifierPrononciation(parole) {
    const texteAttendu = document.getElementById('texte-etudiant').textContent;
    
    parole = parole.trim();
    console.log('Parole reconnue (finale):', parole);
    
    // Nettoyer la parole des erreurs courantes de reconnaissance
    parole = parole.replace(/\\bi\\b/g, 'I');
    parole = parole.replace(/\\bu\\b/g, 'you');
    parole = parole.replace(/\\br\\b/g, 'are');
    
    // Afficher ce qui a été compris
    document.getElementById('feedback-correction').innerHTML = `
        <div style=\"background: #f3f4f6; padding: 20px; border-radius: 15px; text-align: center;\">
            <p style=\"color: #333;\">🔍 Analyse en cours...</p>
            <p style=\"color: #059669;\">J'ai compris : \"\${parole}\"</p>
        </div>
    `;
=======
// Vérifier la prononciation (version améliorée avec couleurs lisibles)
function verifierPrononciation(parole) {
    const texteAttendu = document.getElementById('texte-etudiant').textContent;
    
    // Nettoyer la parole de l'utilisateur
    parole = parole.trim();
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
    
    fetch('/dialogue/verifier', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({
            texte: parole,
            attendu: texteAttendu
        })
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('score-actuel').textContent = data.score + '%';
        
        let feedbackHtml = '';
        
        if (data.reussite) {
            feedbackHtml = `
                <div style=\"background: #10b981; color: white; padding: 20px; border-radius: 15px;\">
                    <div style=\"display: flex; align-items: center; gap: 15px; margin-bottom: 10px;\">
                        <span style=\"font-size: 2rem;\">✅</span>
                        <h4 style=\"margin: 0; color: white;\">Parfait !</h4>
                    </div>
                    <p style=\"color: white;\">Tu as dit : \"\${data.texte_utilisateur}\"</p>
                    <p style=\"color: white;\">La phrase correcte est : \"\${data.texte_attendu}\"</p>
                    <p style=\"color: white; font-weight: bold;\">Score: \${data.score}%</p>
                </div>
            `;
        } else {
            let erreursHtml = '';
            
            if (data.erreurs && data.erreurs.length > 0) {
                data.erreurs.forEach(erreur => {
<<<<<<< HEAD
                    let bgColor = '#fff5f5';
                    let borderColor = '#dc2626';
                    let icon = '❌';
                    
                    if (erreur.type === 'missing') {
                        bgColor = '#fffbeb';
                        borderColor = '#b45309';
                        icon = '⚠️';
                    } else if (erreur.type === 'extra') {
                        bgColor = '#eff6ff';
                        borderColor = '#2563eb';
                        icon = '➕';
                    } else if (erreur.type === 'orthographe') {
                        bgColor = '#fef3c7';
                        borderColor = '#d97706';
                        icon = '✏️';
=======
                    let bgColor = '#fff5f5';  // Rouge très clair
                    let borderColor = '#dc2626';
                    let icon = '❌';
                    let textColor = '#1e293b'; // Texte en gris foncé
                    
                    if (erreur.type === 'missing') {
                        bgColor = '#fffbeb';  // Jaune très clair
                        borderColor = '#b45309';
                        icon = '⚠️';
                    } else if (erreur.type === 'extra') {
                        bgColor = '#eff6ff';  // Bleu très clair
                        borderColor = '#2563eb';
                        icon = '➕';
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
                    }
                    
                    erreursHtml += `
                        <div style=\"background: \${bgColor}; padding: 15px; border-radius: 10px; margin-bottom: 10px; border-left: 4px solid \${borderColor};\">
                            <p style=\"color: #1e293b; margin: 0;\"><strong>\${icon} \${erreur.message}</strong></p>
                        </div>
                    `;
                });
            }
            
<<<<<<< HEAD
            // Ajouter un message si la reconnaissance a mal compris
            if (data.score < 50 && parole.toLowerCase().includes('je') && '{{ cour.idNiveau.idLangue.nom }}' === 'Anglais') {
                erreursHtml += `
                    <div style=\"background: #fff3cd; padding: 15px; border-radius: 10px; margin-top: 10px;\">
                        <p style=\"color: #856404; margin: 0;\"><strong>💡 Astuce:</strong> La reconnaissance a peut-être mal compris. Essaie de parler plus distinctement en anglais.</p>
                    </div>
                `;
            }
            
=======
            // Ajouter un résumé des statistiques
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
            if (data.statistiques) {
                erreursHtml += `
                    <div style=\"background: #f8fafc; padding: 15px; border-radius: 10px; margin-top: 15px; border: 1px solid #cbd5e1;\">
                        <p style=\"margin: 5px 0; color: #0f172a;\"><strong>Résumé :</strong></p>
                        <p style=\"margin: 5px 0; color: #0f172a;\">✅ Mots corrects : \${data.statistiques.mots_corrects}/\${data.statistiques.total_mots}</p>
                        <p style=\"margin: 5px 0; color: #0f172a;\">⚠️ Mots manquants : \${data.statistiques.mots_manquants}</p>
                        <p style=\"margin: 5px 0; color: #0f172a;\">➕ Mots en trop : \${data.statistiques.mots_en_trop}</p>
                    </div>
                `;
            }
            
<<<<<<< HEAD
=======
            // Ajouter la phrase correcte pour référence
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
            erreursHtml += `
                <div style=\"background: #dbeafe; padding: 15px; border-radius: 10px; margin-top: 15px; border: 1px solid #3b82f6;\">
                    <p style=\"margin: 0; color: #1e3a8a;\"><strong>📝 Phrase à dire :</strong> \"\${data.texte_attendu}\"</p>
                </div>
            `;
            
            feedbackHtml = `
                <div style=\"background: #ffffff; border: 2px solid #fbbf24; border-radius: 15px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
                    <div style=\"display: flex; align-items: center; gap: 15px; margin-bottom: 15px; border-bottom: 2px solid #fbbf24; padding-bottom: 15px;\">
                        <span style=\"font-size: 2rem;\">📝</span>
                        <h4 style=\"color: #92400e; margin: 0;\">Analyse de ta phrase</h4>
                    </div>
<<<<<<< HEAD
                    <p style=\"color: #000000; font-weight: bold; background: #f3f4f6; padding: 10px; border-radius: 8px;\">
                        <strong>Tu as dit :</strong> \"\${data.texte_utilisateur}\"
                    </p>
=======
                    <p style=\"color: #000000; font-weight: bold; background: #f3f4f6; padding: 10px; border-radius: 8px;\"><strong>Tu as dit :</strong> \"\${data.texte_utilisateur}\"</p>
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
                    \${erreursHtml}
                    <p style=\"margin-top: 15px; color: #92400e; font-weight: bold; font-size: 1.2rem; text-align: right;\">Score: \${data.score}%</p>
                </div>
            `;
        }
        
        document.getElementById('feedback-correction').innerHTML = feedbackHtml;
        document.getElementById('btn-suivant').style.display = 'inline-block';
        arreterEcoute();
    })
    .catch(error => {
        console.error('Erreur:', error);
<<<<<<< HEAD
        document.getElementById('feedback-correction').innerHTML = `
            <div style=\"background: #fee2e2; padding: 20px; border-radius: 15px; text-align: center;\">
                <p style=\"color: #b91c1c;\">❌ Une erreur est survenue. Réessaie.</p>
                <button onclick=\"commencerLecture()\" style=\"background: #3b82f6; color: white; border: none; padding: 10px 20px; border-radius: 50px; margin-top: 10px; cursor: pointer;\">
                    Réessayer
                </button>
            </div>
        `;
        document.getElementById('btn-suivant').style.display = 'inline-block';
        arreterEcoute();
=======
        alert('Une erreur est survenue lors de la vérification');
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
    });
}

// Arrêter l'écoute
function arreterEcoute() {
    if (reconnaissanceVocale && enTrainDeParler) {
<<<<<<< HEAD
        try {
            reconnaissanceVocale.stop();
        } catch(e) {}
        enTrainDeParler = false;
    }
}
</script>
</div>
{% endblock %}", "cours/base_apprentissage.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\Fluently\\templates\\cours\\base_apprentissage.html.twig");
=======
        reconnaissanceVocale.stop();
        enTrainDeParler = false;
    }
}


</script>
</div>
{% endblock %}", "cours/base_apprentissage.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\cours\\base_apprentissage.html.twig");
>>>>>>> cebea0ccf0457b2a1d4643c46e9da5f9e852bbd4
    }
}
