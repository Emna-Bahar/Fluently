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
class __TwigTemplate_a24881e35adca9bc47c3b2f153aef817 extends Template
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

        <!-- En-tête avec bouton générer -->
        <div style=\"text-align: center; margin-bottom: 60px;\">
            <h1 style=\"font-size: 3rem; font-weight: 900; color: white; margin: 0 0 12px; text-shadow: 0 4px 12px rgba(0,0,0,0.4);\">
                Leçon ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 13, $this->source); })()), "numero", [], "any", false, false, false, 13), "html", null, true);
        yield "
            </h1>
            <p style=\"font-size: 1.5rem; color: rgba(255,255,255,0.9); margin: 0 0 30px;\">
                ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 16, $this->source); })()), "idNiveau", [], "any", false, false, false, 16), "titre", [], "any", false, false, false, 16), "html", null, true);
        yield " • ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 16, $this->source); })()), "idNiveau", [], "any", false, false, false, 16), "idLangue", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
        yield "
            </p>
            
            <!-- BOUTON GÉNÉRER UN COURS PERSONNALISÉ -->
            <a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_personnalise_generer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
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
        // line 44
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 44, $this->source); })())) > 0)) {
            // line 45
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 45, $this->source); })()));
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
                // line 46
                yield "                    ";
                $context["isYoutube"] = CoreExtension::matches("/(youtube\\.com|youtu\\.be)/i", $context["res"]);
                // line 47
                yield "
                    ";
                // line 48
                if ((($tmp = (isset($context["isYoutube"]) || array_key_exists("isYoutube", $context) ? $context["isYoutube"] : (function () { throw new RuntimeError('Variable "isYoutube" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "                        ";
                    $context["type"] = "video";
                    // line 50
                    yield "                    ";
                } else {
                    // line 51
                    yield "                        ";
                    $context["ext"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["res"], ".")));
                    // line 52
                    yield "                        ";
                    $context["type"] = "other";
                    // line 53
                    yield "                        ";
                    if (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 53, $this->source); })()), ["pdf"])) {
                        $context["type"] = "pdf";
                        // line 54
                        yield "                        ";
                    } elseif (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 54, $this->source); })()), ["mp4", "webm", "mov"])) {
                        $context["type"] = "video";
                        // line 55
                        yield "                        ";
                    } elseif (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 55, $this->source); })()), ["jpg", "jpeg", "png", "gif", "webp", "svg"])) {
                        $context["type"] = "image";
                        // line 56
                        yield "                        ";
                    } elseif (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 56, $this->source); })()), ["mp3", "wav", "ogg", "m4a"])) {
                        $context["type"] = "audio";
                        // line 57
                        yield "                        ";
                    }
                    // line 58
                    yield "                    ";
                }
                // line 59
                yield "
                    <div class=\"ressource-card\" data-type=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 60, $this->source); })()), "html", null, true);
                yield "\" style=\"background: rgba(255,255,255,0.95); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.15); transition: all 0.3s; transform: translateY(0); display: none;\">
                        <div style=\"padding: 32px;\">
                            <div style=\"display: flex; align-items: center; gap: 16px; margin-bottom: 20px;\">
                                <span style=\"font-size: 2.8rem;\">
                                    ";
                // line 64
                if ((($tmp = (isset($context["isYoutube"]) || array_key_exists("isYoutube", $context) ? $context["isYoutube"] : (function () { throw new RuntimeError('Variable "isYoutube" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "🎥
                                    ";
                } elseif ((                // line 65
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 65, $this->source); })()) == "pdf")) {
                    yield "📄
                                    ";
                } elseif ((                // line 66
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 66, $this->source); })()) == "video")) {
                    yield "🎥
                                    ";
                } elseif ((                // line 67
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 67, $this->source); })()) == "image")) {
                    yield "🖼️
                                    ";
                } elseif ((                // line 68
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 68, $this->source); })()) == "audio")) {
                    yield "🎵
                                    ";
                } else {
                    // line 69
                    yield "📎";
                }
                // line 70
                yield "                                </span>
                                <h3 style=\"margin: 0; color: #1e293b; font-size: 1.5rem; font-weight: 800;\">
                                    ";
                // line 72
                yield (((($tmp = (isset($context["isYoutube"]) || array_key_exists("isYoutube", $context) ? $context["isYoutube"] : (function () { throw new RuntimeError('Variable "isYoutube" does not exist.', 72, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Vidéo YouTube") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 72, $this->source); })())), "html", null, true)));
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 72), "html", null, true);
                yield "
                                </h3>
                            </div>

                            ";
                // line 76
                if ((($tmp = (isset($context["isYoutube"]) || array_key_exists("isYoutube", $context) ? $context["isYoutube"] : (function () { throw new RuntimeError('Variable "isYoutube" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 77
                    yield "                                ";
                    // line 78
                    yield "                                ";
                    $context["clean"] = Twig\Extension\CoreExtension::trim($context["res"]);
                    // line 79
                    yield "                                ";
                    $context["videoId"] = "";
                    // line 80
                    yield "
                                ";
                    // line 81
                    if (CoreExtension::inFilter("youtu.be/", (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 81, $this->source); })()))) {
                        // line 82
                        yield "                                    ";
                        $context["videoId"] = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 82, $this->source); })()), "youtu.be/"), 1, [], "array", false, false, false, 82), "?"), 0, [], "array", false, false, false, 82));
                        // line 83
                        yield "                                ";
                    } elseif (CoreExtension::inFilter("youtube.com/watch?v=", (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 83, $this->source); })()))) {
                        // line 84
                        yield "                                    ";
                        $context["videoId"] = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 84, $this->source); })()), "v="), 1, [], "array", false, false, false, 84), "&"), 0, [], "array", false, false, false, 84));
                        // line 85
                        yield "                                ";
                    } elseif (CoreExtension::inFilter("youtube.com/embed/", (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 85, $this->source); })()))) {
                        // line 86
                        yield "                                    ";
                        $context["videoId"] = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["clean"]) || array_key_exists("clean", $context) ? $context["clean"] : (function () { throw new RuntimeError('Variable "clean" does not exist.', 86, $this->source); })()), "embed/"), 1, [], "array", false, false, false, 86), "?"), 0, [], "array", false, false, false, 86));
                        // line 87
                        yield "                                ";
                    }
                    // line 88
                    yield "
                                ";
                    // line 89
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["videoId"]) || array_key_exists("videoId", $context) ? $context["videoId"] : (function () { throw new RuntimeError('Variable "videoId" does not exist.', 89, $this->source); })())) == 11)) {
                        // line 90
                        yield "                                    <div class=\"ratio ratio-16x9 rounded-3 overflow-hidden shadow\">
                                        <iframe 
                                            src=\"https://www.youtube.com/embed/";
                        // line 92
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["videoId"]) || array_key_exists("videoId", $context) ? $context["videoId"] : (function () { throw new RuntimeError('Variable "videoId" does not exist.', 92, $this->source); })()), "html", null, true);
                        yield "?rel=0&modestbranding=1&showinfo=0&controls=1&autoplay=0&iv_load_policy=3\" 
                                            title=\"Vidéo YouTube\" 
                                            frameborder=\"0\" 
                                            allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" 
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                ";
                    } else {
                        // line 100
                        yield "                                    <div class=\"alert alert-warning text-center p-4\">
                                        <strong>Erreur de lecture :</strong> Impossible de charger cette vidéo.<br>
                                        <small>URL problématique : ";
                        // line 102
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["res"]);
                        yield "</small><br>
                                        <small>Vérifiez le lien dans l'administration.</small>
                                    </div>
                                ";
                    }
                    // line 106
                    yield "
                            ";
                } else {
                    // line 108
                    yield "                                ";
                    $context["filePath"] = (((isset($context["public_path"]) || array_key_exists("public_path", $context) ? $context["public_path"] : (function () { throw new RuntimeError('Variable "public_path" does not exist.', 108, $this->source); })()) . "/") . $context["res"]);
                    // line 109
                    yield "
                                ";
                    // line 110
                    if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 110, $this->source); })()) == "image")) {
                        // line 111
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 111, $this->source); })()), "html", null, true);
                        yield "\" alt=\"Ressource\" style=\"width: 100%; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                                ";
                    } elseif ((                    // line 112
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 112, $this->source); })()) == "video")) {
                        // line 113
                        yield "                                    <video controls style=\"width: 100%; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                                        <source src=\"";
                        // line 114
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 114, $this->source); })()), "html", null, true);
                        yield "\" type=\"video/";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 114, $this->source); })()), "html", null, true);
                        yield "\">
                                        Vidéo non supportée.
                                    </video>
                                ";
                    } elseif ((                    // line 117
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 117, $this->source); })()) == "pdf")) {
                        // line 118
                        yield "                                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 118, $this->source); })()), "html", null, true);
                        yield "\" target=\"_blank\" style=\"display: flex; align-items: center; gap: 16px; background: linear-gradient(135deg, #f97316, #ea580c); color: white; padding: 18px 36px; border-radius: 14px; text-decoration: none; font-weight: 700; font-size: 1.2rem; box-shadow: 0 8px 24px rgba(249,115,22,0.4); transition: all 0.3s; width: fit-content; margin: 0 auto;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                        📄 Ouvrir le PDF du cours
                                    </a>
                                ";
                    } elseif ((                    // line 121
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 121, $this->source); })()) == "audio")) {
                        // line 122
                        yield "                                    <audio controls style=\"width: 100%; margin: 20px 0;\">
                                        <source src=\"";
                        // line 123
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 123, $this->source); })()), "html", null, true);
                        yield "\" type=\"audio/";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 123, $this->source); })()), "html", null, true);
                        yield "\">
                                        Audio non supporté.
                                    </audio>
                                ";
                    } else {
                        // line 127
                        yield "                                    <div style=\"padding: 40px; background: #f1f5f9; border-radius: 16px; text-align: center; color: #475569; border: 3px dashed #cbd5e1;\">
                                        <p style=\"margin: 0 0 16px; font-size: 1.3rem; font-weight: 700;\">Fichier : ";
                        // line 128
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["res"], "/")), "html", null, true);
                        yield "</p>
                                        <small style=\"font-size: 1rem; opacity: 0.8;\">(format non prévisualisé)</small>
                                        <a href=\"";
                        // line 130
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 130, $this->source); })()), "html", null, true);
                        yield "\" download style=\"display: inline-block; margin-top: 24px; background: #6366f1; color: white; padding: 14px 32px; border-radius: 12px; text-decoration: none; font-weight: 700; box-shadow: 0 6px 16px rgba(99,102,241,0.3); transition: all 0.2s;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                            Télécharger le fichier
                                        </a>
                                    </div>
                                ";
                    }
                    // line 135
                    yield "                            ";
                }
                // line 136
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
            // line 139
            yield "            ";
        }
        // line 140
        yield "
            ";
        // line 142
        yield "            ";
        if ((array_key_exists("ressources_personnalisees", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ressources_personnalisees"]) || array_key_exists("ressources_personnalisees", $context) ? $context["ressources_personnalisees"] : (function () { throw new RuntimeError('Variable "ressources_personnalisees" does not exist.', 142, $this->source); })())) > 0))) {
            // line 143
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ressources_personnalisees"]) || array_key_exists("ressources_personnalisees", $context) ? $context["ressources_personnalisees"] : (function () { throw new RuntimeError('Variable "ressources_personnalisees" does not exist.', 143, $this->source); })()));
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
                // line 144
                yield "                    <div class=\"ressource-card\" data-type=\"pdf\" style=\"background: rgba(255,255,255,0.95); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.15); transition: all 0.3s; transform: translateY(0); display: none;\">
                        <div style=\"padding: 32px;\">
                            <div style=\"display: flex; align-items: center; gap: 16px; margin-bottom: 20px;\">
                                <span style=\"font-size: 2.8rem;\">📄</span>
                                <h3 style=\"margin: 0; color: #1e293b; font-size: 1.5rem; font-weight: 800;\">
                                    Cours personnalisé ";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 149), "html", null, true);
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
                // line 160
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
            // line 166
            yield "            ";
        }
        // line 167
        yield "
            ";
        // line 169
        yield "            ";
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 169, $this->source); })())) == 0) && ( !array_key_exists("ressources_personnalisees", $context) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ressources_personnalisees"]) || array_key_exists("ressources_personnalisees", $context) ? $context["ressources_personnalisees"] : (function () { throw new RuntimeError('Variable "ressources_personnalisees" does not exist.', 169, $this->source); })())) == 0)))) {
            // line 170
            yield "                <div style=\"grid-column: 1 / -1; text-align: center; padding: 100px 40px; background: rgba(255,255,255,0.9); border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); color: #475569; font-size: 1.5rem; font-weight: 600;\">
                    Aucune ressource disponible pour cette leçon pour le moment.
                </div>
            ";
        }
        // line 174
        yield "        </div>

        <!-- Bouton Terminer -->
        <div style=\"margin-top: 80px; text-align: center;\">
            <button onclick=\"terminerCours(";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 178, $this->source); })()), "id", [], "any", false, false, false, 178), "html", null, true);
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
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 213, $this->source); })()), "id", [], "any", false, false, false, 213))), "html", null, true);
        yield "'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = '";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_langue_apprentissage", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 219, $this->source); })()), "idNiveau", [], "any", false, false, false, 219), "idLangue", [], "any", false, false, false, 219), "id", [], "any", false, false, false, 219)]), "html", null, true);
        yield "';
                    } else {
                        alert(\"Une erreur est survenue : \" + (data.message || 'Inconnu'));
                    }
                })
                .catch(err => alert(\"Erreur : \" + err.message));
            }
        }
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
        return array (  551 => 219,  542 => 213,  504 => 178,  498 => 174,  492 => 170,  489 => 169,  486 => 167,  483 => 166,  463 => 160,  449 => 149,  442 => 144,  424 => 143,  421 => 142,  418 => 140,  415 => 139,  399 => 136,  396 => 135,  388 => 130,  383 => 128,  380 => 127,  371 => 123,  368 => 122,  366 => 121,  359 => 118,  357 => 117,  349 => 114,  346 => 113,  344 => 112,  339 => 111,  337 => 110,  334 => 109,  331 => 108,  327 => 106,  320 => 102,  316 => 100,  305 => 92,  301 => 90,  299 => 89,  296 => 88,  293 => 87,  290 => 86,  287 => 85,  284 => 84,  281 => 83,  278 => 82,  276 => 81,  273 => 80,  270 => 79,  267 => 78,  265 => 77,  263 => 76,  254 => 72,  250 => 70,  247 => 69,  242 => 68,  238 => 67,  234 => 66,  230 => 65,  226 => 64,  219 => 60,  216 => 59,  213 => 58,  210 => 57,  206 => 56,  202 => 55,  198 => 54,  194 => 53,  191 => 52,  188 => 51,  185 => 50,  182 => 49,  180 => 48,  177 => 47,  174 => 46,  156 => 45,  153 => 44,  127 => 20,  118 => 16,  112 => 13,  103 => 6,  90 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Leçon {{ cour.numero }} – {{ cour.idNiveau.titre }}{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 60px 20px; color: white; font-family: system-ui, sans-serif;\">
    <div style=\"max-width: 1100px; margin: 0 auto;\">
        <br><br><br><br>

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
                        window.location.href = '{{ path('app_langue_apprentissage', {id: cour.idNiveau.idLangue.id}) }}';
                    } else {
                        alert(\"Une erreur est survenue : \" + (data.message || 'Inconnu'));
                    }
                })
                .catch(err => alert(\"Erreur : \" + err.message));
            }
        }
    </script>
</div>
{% endblock %}", "cours/base_apprentissage.html.twig", "C:\\Users\\oumai\\Fluently\\templates\\cours\\base_apprentissage.html.twig");
    }
}
