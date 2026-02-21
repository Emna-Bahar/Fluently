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

        <!-- Bouton Terminer -->
        <div style=\"margin-top: 80px; text-align: center;\">
            <button onclick=\"terminerCours(";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 245, $this->source); })()), "id", [], "any", false, false, false, 245), "html", null, true);
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
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 292, $this->source); })()), "id", [], "any", false, false, false, 292), "html", null, true);
        yield "/temps', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': '";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("temps" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 296, $this->source); })()), "id", [], "any", false, false, false, 296))), "html", null, true);
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
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 311, $this->source); })()), "id", [], "any", false, false, false, 311))), "html", null, true);
        yield "'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = '";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_apprentissage", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 317, $this->source); })()), "idNiveau", [], "any", false, false, false, 317), "idLangue", [], "any", false, false, false, 317), "id", [], "any", false, false, false, 317)]), "html", null, true);
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
        return array (  679 => 317,  670 => 311,  652 => 296,  645 => 292,  595 => 245,  534 => 186,  528 => 182,  525 => 181,  522 => 179,  519 => 178,  499 => 172,  485 => 161,  478 => 156,  460 => 155,  457 => 154,  454 => 152,  451 => 151,  435 => 148,  432 => 147,  424 => 142,  419 => 140,  416 => 139,  407 => 135,  404 => 134,  402 => 133,  395 => 130,  393 => 129,  385 => 126,  382 => 125,  380 => 124,  375 => 123,  373 => 122,  370 => 121,  367 => 120,  363 => 118,  356 => 114,  352 => 112,  341 => 104,  337 => 102,  335 => 101,  332 => 100,  329 => 99,  326 => 98,  323 => 97,  320 => 96,  317 => 95,  314 => 94,  312 => 93,  309 => 92,  306 => 91,  303 => 90,  301 => 89,  299 => 88,  290 => 84,  286 => 82,  283 => 81,  278 => 80,  274 => 79,  270 => 78,  266 => 77,  262 => 76,  255 => 72,  252 => 71,  249 => 70,  246 => 69,  242 => 68,  238 => 67,  234 => 66,  230 => 65,  227 => 64,  224 => 63,  221 => 62,  218 => 61,  216 => 60,  213 => 59,  210 => 58,  192 => 57,  189 => 56,  163 => 32,  154 => 28,  148 => 25,  131 => 10,  118 => 9,  104 => 6,  91 => 5,  65 => 3,  42 => 1,);
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
</div>
{% endblock %}", "cours/base_apprentissage.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\cours\\base_apprentissage.html.twig");
    }
}
