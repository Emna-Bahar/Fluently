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
class __TwigTemplate_d9f3dab6673d3160a6d4c4f2cfc7d124 extends Template
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 60px 20px; color: white; font-family: system-ui, sans-serif;\">
    <div style=\"max-width: 1100px; margin: 0 auto;\">
        <br><br><br><br>

        <!-- En-tête -->
        <div style=\"text-align: center; margin-bottom: 60px;\">
            <h1 style=\"font-size: 3rem; font-weight: 900; color: white; margin: 0 0 12px; text-shadow: 0 4px 12px rgba(0,0,0,0.4);\">
                Leçon ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 13, $this->source); })()), "numero", [], "any", false, false, false, 13), "html", null, true);
        yield "
            </h1>
            <p style=\"font-size: 1.5rem; color: rgba(255,255,255,0.9); margin: 0;\">
                ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 16, $this->source); })()), "idNiveau", [], "any", false, false, false, 16), "titre", [], "any", false, false, false, 16), "html", null, true);
        yield " • ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 16, $this->source); })()), "idNiveau", [], "any", false, false, false, 16), "idLangue", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
        yield "
            </p>
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
        // line 34
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 34, $this->source); })())) > 0)) {
            // line 35
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 35, $this->source); })()));
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
                // line 36
                yield "                    ";
                $context["isYoutube"] = CoreExtension::matches("/(youtube\\.com|youtu\\.be)/i", $context["res"]);
                // line 37
                yield "
                    ";
                // line 38
                if ((($tmp = (isset($context["isYoutube"]) || array_key_exists("isYoutube", $context) ? $context["isYoutube"] : (function () { throw new RuntimeError('Variable "isYoutube" does not exist.', 38, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 39
                    yield "                        ";
                    $context["type"] = "video";
                    // line 40
                    yield "                    ";
                } else {
                    // line 41
                    yield "                        ";
                    $context["ext"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["res"], ".")));
                    // line 42
                    yield "                        ";
                    $context["type"] = "other";
                    // line 43
                    yield "                        ";
                    if (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 43, $this->source); })()), ["pdf"])) {
                        $context["type"] = "pdf";
                        // line 44
                        yield "                        ";
                    } elseif (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 44, $this->source); })()), ["mp4", "webm", "mov"])) {
                        $context["type"] = "video";
                        // line 45
                        yield "                        ";
                    } elseif (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 45, $this->source); })()), ["jpg", "jpeg", "png", "gif", "webp", "svg"])) {
                        $context["type"] = "image";
                        // line 46
                        yield "                        ";
                    } elseif (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 46, $this->source); })()), ["mp3", "wav", "ogg", "m4a"])) {
                        $context["type"] = "audio";
                        // line 47
                        yield "                        ";
                    }
                    // line 48
                    yield "                    ";
                }
                // line 49
                yield "
                    <div class=\"ressource-card\" data-type=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 50, $this->source); })()), "html", null, true);
                yield "\" style=\"background: rgba(255,255,255,0.95); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.15); transition: all 0.3s; transform: translateY(0); display: none;\">
                        <div style=\"padding: 32px;\">
                            <div style=\"display: flex; align-items: center; gap: 16px; margin-bottom: 20px;\">
                                <span style=\"font-size: 2.8rem;\">
                                    ";
                // line 54
                if ((($tmp = (isset($context["isYoutube"]) || array_key_exists("isYoutube", $context) ? $context["isYoutube"] : (function () { throw new RuntimeError('Variable "isYoutube" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "🎥
                                    ";
                } elseif ((                // line 55
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 55, $this->source); })()) == "pdf")) {
                    yield "📄
                                    ";
                } elseif ((                // line 56
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 56, $this->source); })()) == "video")) {
                    yield "🎥
                                    ";
                } elseif ((                // line 57
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 57, $this->source); })()) == "image")) {
                    yield "🖼️
                                    ";
                } elseif ((                // line 58
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 58, $this->source); })()) == "audio")) {
                    yield "🎵
                                    ";
                } else {
                    // line 59
                    yield "📎";
                }
                // line 60
                yield "                                </span>
                                <h3 style=\"margin: 0; color: #1e293b; font-size: 1.5rem; font-weight: 800;\">
                                    ";
                // line 62
                yield (((($tmp = (isset($context["isYoutube"]) || array_key_exists("isYoutube", $context) ? $context["isYoutube"] : (function () { throw new RuntimeError('Variable "isYoutube" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Vidéo YouTube") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 62, $this->source); })())), "html", null, true)));
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62), "html", null, true);
                yield "
                                </h3>
                            </div>

                            ";
                // line 66
                if ((($tmp = (isset($context["isYoutube"]) || array_key_exists("isYoutube", $context) ? $context["isYoutube"] : (function () { throw new RuntimeError('Variable "isYoutube" does not exist.', 66, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "                                ";
                    // line 68
                    yield "                                ";
                    $context["clean"] = Twig\Extension\CoreExtension::trim($context["res"]);
                    // line 69
                    yield "                                ";
                    $context["videoId"] = "";
                    // line 70
                    yield "
                                ";
                    // line 71
                    if (CoreExtension::inFilter("youtu.be/", (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 71, $this->source); })()))) {
                        // line 72
                        yield "                                    ";
                        $context["videoId"] = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 72, $this->source); })()), "youtu.be/"), 1, [], "array", false, false, false, 72), "?"), 0, [], "array", false, false, false, 72));
                        // line 73
                        yield "                                ";
                    } elseif (CoreExtension::inFilter("youtube.com/watch?v=", (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 73, $this->source); })()))) {
                        // line 74
                        yield "                                    ";
                        $context["videoId"] = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 74, $this->source); })()), "v="), 1, [], "array", false, false, false, 74), "&"), 0, [], "array", false, false, false, 74));
                        // line 75
                        yield "                                ";
                    } elseif (CoreExtension::inFilter("youtube.com/embed/", (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 75, $this->source); })()))) {
                        // line 76
                        yield "                                    ";
                        $context["videoId"] = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 76, $this->source); })()), "embed/"), 1, [], "array", false, false, false, 76), "?"), 0, [], "array", false, false, false, 76));
                        // line 77
                        yield "                                ";
                    }
                    // line 78
                    yield "
                                ";
                    // line 79
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["videoId"]) || array_key_exists("videoId", $context) ? $context["videoId"] : (function () { throw new RuntimeError('Variable "videoId" does not exist.', 79, $this->source); })())) == 11)) {
                        // line 80
                        yield "                                    <div class=\"ratio ratio-16x9 rounded-3 overflow-hidden shadow\">
                                        <iframe 
                                            src=\"https://www.youtube.com/embed/";
                        // line 82
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["videoId"]) || array_key_exists("videoId", $context) ? $context["videoId"] : (function () { throw new RuntimeError('Variable "videoId" does not exist.', 82, $this->source); })()), "html", null, true);
                        yield "?rel=0&modestbranding=1&showinfo=0&controls=1&autoplay=0&iv_load_policy=3\" 
                                            title=\"Vidéo YouTube\" 
                                            frameborder=\"0\" 
                                            allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" 
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                ";
                    } else {
                        // line 90
                        yield "                                    <div class=\"alert alert-warning text-center p-4\">
                                        <strong>Erreur de lecture :</strong> Impossible de charger cette vidéo.<br>
                                        <small>URL problématique : ";
                        // line 92
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["res"]);
                        yield "</small><br>
                                        <small>Vérifiez le lien dans l'administration.</small>
                                    </div>
                                ";
                    }
                    // line 96
                    yield "
                            ";
                } else {
                    // line 98
                    yield "                                ";
                    $context["filePath"] = (((isset($context["public_path"]) || array_key_exists("public_path", $context) ? $context["public_path"] : (function () { throw new RuntimeError('Variable "public_path" does not exist.', 98, $this->source); })()) . "/") . $context["res"]);
                    // line 99
                    yield "
                                ";
                    // line 100
                    if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 100, $this->source); })()) == "image")) {
                        // line 101
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 101, $this->source); })()), "html", null, true);
                        yield "\" alt=\"Ressource\" style=\"width: 100%; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                                ";
                    } elseif ((                    // line 102
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 102, $this->source); })()) == "video")) {
                        // line 103
                        yield "                                    <video controls style=\"width: 100%; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                                        <source src=\"";
                        // line 104
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 104, $this->source); })()), "html", null, true);
                        yield "\" type=\"video/";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 104, $this->source); })()), "html", null, true);
                        yield "\">
                                        Vidéo non supportée.
                                    </video>
                                ";
                    } elseif ((                    // line 107
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 107, $this->source); })()) == "pdf")) {
                        // line 108
                        yield "                                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 108, $this->source); })()), "html", null, true);
                        yield "\" target=\"_blank\" style=\"display: flex; align-items: center; gap: 16px; background: linear-gradient(135deg, #f97316, #ea580c); color: white; padding: 18px 36px; border-radius: 14px; text-decoration: none; font-weight: 700; font-size: 1.2rem; box-shadow: 0 8px 24px rgba(249,115,22,0.4); transition: all 0.3s; width: fit-content; margin: 0 auto;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                        📄 Ouvrir le PDF du cours
                                    </a>
                                ";
                    } elseif ((                    // line 111
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 111, $this->source); })()) == "audio")) {
                        // line 112
                        yield "                                    <audio controls style=\"width: 100%; margin: 20px 0;\">
                                        <source src=\"";
                        // line 113
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 113, $this->source); })()), "html", null, true);
                        yield "\" type=\"audio/";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 113, $this->source); })()), "html", null, true);
                        yield "\">
                                        Audio non supporté.
                                    </audio>
                                ";
                    } else {
                        // line 117
                        yield "                                    <div style=\"padding: 40px; background: #f1f5f9; border-radius: 16px; text-align: center; color: #475569; border: 3px dashed #cbd5e1;\">
                                        <p style=\"margin: 0 0 16px; font-size: 1.3rem; font-weight: 700;\">Fichier : ";
                        // line 118
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["res"], "/")), "html", null, true);
                        yield "</p>
                                        <small style=\"font-size: 1rem; opacity: 0.8;\">(format non prévisualisé)</small>
                                        <a href=\"";
                        // line 120
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 120, $this->source); })()), "html", null, true);
                        yield "\" download style=\"display: inline-block; margin-top: 24px; background: #6366f1; color: white; padding: 14px 32px; border-radius: 12px; text-decoration: none; font-weight: 700; box-shadow: 0 6px 16px rgba(99,102,241,0.3); transition: all 0.2s;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                            Télécharger le fichier
                                        </a>
                                    </div>
                                ";
                    }
                    // line 125
                    yield "                            ";
                }
                // line 126
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
            // line 129
            yield "            ";
        } else {
            // line 130
            yield "                <div style=\"grid-column: 1 / -1; text-align: center; padding: 100px 40px; background: rgba(255,255,255,0.9); border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); color: #475569; font-size: 1.5rem; font-weight: 600;\">
                    Aucune ressource disponible pour cette leçon pour le moment.
                </div>
            ";
        }
        // line 134
        yield "        </div>

        <!-- Bouton Terminer -->
        <div style=\"margin-top: 80px; text-align: center;\">
            <button onclick=\"terminerCours(";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138), "html", null, true);
        yield ")\" style=\"background: linear-gradient(135deg, #10b981, #059669); color: white; border: none; padding: 22px 80px; font-size: 1.5rem; font-weight: 900; border-radius: 20px; cursor: pointer; box-shadow: 0 12px 40px rgba(16,185,129,0.5); transition: all 0.35s;\" onmouseover=\"this.style.transform='scale(1.08) translateY(-4px)';\" onmouseout=\"this.style.transform='scale(1) translateY(0)';\">
                Terminer cette leçon →
            </button>
        </div>

    </div>

    <!-- Script filtrage + terminer -->
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

        // Terminer cours
        function terminerCours(coursId) {
            if (confirm(\"Voulez-vous marquer cette leçon comme terminée ?\\nVous passerez automatiquement à la suivante.\")) {
                fetch('/cours/' + coursId + '/terminer', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-Token': '";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 173, $this->source); })()), "id", [], "any", false, false, false, 173))), "html", null, true);
        yield "'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = '/langue/";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 179, $this->source); })()), "idNiveau", [], "any", false, false, false, 179), "idLangue", [], "any", false, false, false, 179), "id", [], "any", false, false, false, 179), "html", null, true);
        yield "/apprentissage';
                    } else {
                        alert(\"Une erreur est survenue : \" + (data.message || 'Inconnu'));
                    }
                })
                .catch(err => alert(\"Erreur : \" + err.message));
            }
        }
    </script>
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
        return array (  464 => 179,  455 => 173,  417 => 138,  411 => 134,  405 => 130,  402 => 129,  386 => 126,  383 => 125,  375 => 120,  370 => 118,  367 => 117,  358 => 113,  355 => 112,  353 => 111,  346 => 108,  344 => 107,  336 => 104,  333 => 103,  331 => 102,  326 => 101,  324 => 100,  321 => 99,  318 => 98,  314 => 96,  307 => 92,  303 => 90,  292 => 82,  288 => 80,  286 => 79,  283 => 78,  280 => 77,  277 => 76,  274 => 75,  271 => 74,  268 => 73,  265 => 72,  263 => 71,  260 => 70,  257 => 69,  254 => 68,  252 => 67,  250 => 66,  241 => 62,  237 => 60,  234 => 59,  229 => 58,  225 => 57,  221 => 56,  217 => 55,  213 => 54,  206 => 50,  203 => 49,  200 => 48,  197 => 47,  193 => 46,  189 => 45,  185 => 44,  181 => 43,  178 => 42,  175 => 41,  172 => 40,  169 => 39,  167 => 38,  164 => 37,  161 => 36,  143 => 35,  141 => 34,  118 => 16,  112 => 13,  103 => 6,  90 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Leçon {{ cour.numero }} – {{ cour.idNiveau.titre }}{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 60px 20px; color: white; font-family: system-ui, sans-serif;\">
    <div style=\"max-width: 1100px; margin: 0 auto;\">
        <br><br><br><br>

        <!-- En-tête -->
        <div style=\"text-align: center; margin-bottom: 60px;\">
            <h1 style=\"font-size: 3rem; font-weight: 900; color: white; margin: 0 0 12px; text-shadow: 0 4px 12px rgba(0,0,0,0.4);\">
                Leçon {{ cour.numero }}
            </h1>
            <p style=\"font-size: 1.5rem; color: rgba(255,255,255,0.9); margin: 0;\">
                {{ cour.idNiveau.titre }} • {{ cour.idNiveau.idLangue.nom }}
            </p>
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
            {% else %}
                <div style=\"grid-column: 1 / -1; text-align: center; padding: 100px 40px; background: rgba(255,255,255,0.9); border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); color: #475569; font-size: 1.5rem; font-weight: 600;\">
                    Aucune ressource disponible pour cette leçon pour le moment.
                </div>
            {% endif %}
        </div>

        <!-- Bouton Terminer -->
        <div style=\"margin-top: 80px; text-align: center;\">
            <button onclick=\"terminerCours({{ cour.id }})\" style=\"background: linear-gradient(135deg, #10b981, #059669); color: white; border: none; padding: 22px 80px; font-size: 1.5rem; font-weight: 900; border-radius: 20px; cursor: pointer; box-shadow: 0 12px 40px rgba(16,185,129,0.5); transition: all 0.35s;\" onmouseover=\"this.style.transform='scale(1.08) translateY(-4px)';\" onmouseout=\"this.style.transform='scale(1) translateY(0)';\">
                Terminer cette leçon →
            </button>
        </div>

    </div>

    <!-- Script filtrage + terminer -->
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

        // Terminer cours
        function terminerCours(coursId) {
            if (confirm(\"Voulez-vous marquer cette leçon comme terminée ?\\nVous passerez automatiquement à la suivante.\")) {
                fetch('/cours/' + coursId + '/terminer', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token('delete' ~ cour.id) }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = '/langue/{{ cour.idNiveau.idLangue.id }}/apprentissage';
                    } else {
                        alert(\"Une erreur est survenue : \" + (data.message || 'Inconnu'));
                    }
                })
                .catch(err => alert(\"Erreur : \" + err.message));
            }
        }
    </script>
{% endblock %}", "cours/base_apprentissage.html.twig", "C:\\Users\\emnab\\Documents\\Fluently\\templates\\cours\\base_apprentissage.html.twig");
    }
}
