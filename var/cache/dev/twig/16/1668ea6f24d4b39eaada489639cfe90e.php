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

/* cours/show.html.twig */
class __TwigTemplate_9f7de122ce33bffb20085fc5d0a6f1d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/show.html.twig"));

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
<br><br><br><br>
    <div style=\"max-width: 1100px; margin: 0 auto;\">

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
                $context["ext"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["res"], ".")));
                // line 37
                yield "                    ";
                $context["type"] = "other";
                // line 38
                yield "                    ";
                if (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 38, $this->source); })()), ["pdf"])) {
                    $context["type"] = "pdf";
                    // line 39
                    yield "                    ";
                } elseif (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 39, $this->source); })()), ["mp4", "webm"])) {
                    $context["type"] = "video";
                    // line 40
                    yield "                    ";
                } elseif (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 40, $this->source); })()), ["jpg", "jpeg", "png", "gif", "webp"])) {
                    $context["type"] = "image";
                    // line 41
                    yield "                    ";
                } elseif (CoreExtension::inFilter((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 41, $this->source); })()), ["mp3", "wav", "ogg"])) {
                    $context["type"] = "audio";
                    // line 42
                    yield "                    ";
                }
                // line 43
                yield "
                    <div class=\"ressource-card\" data-type=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 44, $this->source); })()), "html", null, true);
                yield "\" style=\"background: rgba(255,255,255,0.95); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.15); transition: all 0.3s; transform: translateY(0); display: none;\">
                        <div style=\"padding: 32px;\">
                            <div style=\"display: flex; align-items: center; gap: 16px; margin-bottom: 20px;\">
                                <span style=\"font-size: 2.8rem;\">
                                    ";
                // line 48
                if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 48, $this->source); })()) == "pdf")) {
                    yield "📄";
                } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 48, $this->source); })()) == "video")) {
                    yield "🎥";
                } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 48, $this->source); })()) == "image")) {
                    yield "🖼️";
                } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 48, $this->source); })()) == "audio")) {
                    yield "🎵";
                } else {
                    yield "📎";
                }
                // line 49
                yield "                                </span>
                                <h3 style=\"margin: 0; color: #1e293b; font-size: 1.5rem; font-weight: 800;\">
                                    ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 51, $this->source); })())), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 51), "html", null, true);
                yield "
                                </h3>
                            </div>

                            ";
                // line 55
                $context["filePath"] = (((isset($context["public_path"]) || array_key_exists("public_path", $context) ? $context["public_path"] : (function () { throw new RuntimeError('Variable "public_path" does not exist.', 55, $this->source); })()) . "/") . $context["res"]);
                // line 56
                yield "
                            ";
                // line 57
                if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 57, $this->source); })()) == "image")) {
                    // line 58
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 58, $this->source); })()), "html", null, true);
                    yield "\" alt=\"Ressource\" style=\"width: 100%; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                            ";
                } elseif ((                // line 59
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 59, $this->source); })()) == "video")) {
                    // line 60
                    yield "                                <video controls style=\"width: 100%; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                                    <source src=\"";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 61, $this->source); })()), "html", null, true);
                    yield "\" type=\"video/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 61, $this->source); })()), "html", null, true);
                    yield "\">
                                    Vidéo non supportée.
                                </video>
                            ";
                } elseif ((                // line 64
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 64, $this->source); })()) == "pdf")) {
                    // line 65
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 65, $this->source); })()), "html", null, true);
                    yield "\" target=\"_blank\" style=\"display: flex; align-items: center; gap: 16px; background: linear-gradient(135deg, #f97316, #ea580c); color: white; padding: 18px 36px; border-radius: 14px; text-decoration: none; font-weight: 700; font-size: 1.2rem; box-shadow: 0 8px 24px rgba(249,115,22,0.4); transition: all 0.3s; width: fit-content; margin: 0 auto;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                    📄 Ouvrir le PDF du cours
                                </a>
                            ";
                } elseif ((                // line 68
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 68, $this->source); })()) == "audio")) {
                    // line 69
                    yield "                                <audio controls style=\"width: 100%; margin: 20px 0;\">
                                    <source src=\"";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 70, $this->source); })()), "html", null, true);
                    yield "\" type=\"audio/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 70, $this->source); })()), "html", null, true);
                    yield "\">
                                    Audio non supporté.
                                </audio>
                            ";
                } else {
                    // line 74
                    yield "                                <div style=\"padding: 40px; background: #f1f5f9; border-radius: 16px; text-align: center; color: #475569; border: 3px dashed #cbd5e1;\">
                                    <p style=\"margin: 0 0 16px; font-size: 1.3rem; font-weight: 700;\">Fichier : ";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["res"], "/")), "html", null, true);
                    yield "</p>
                                    <small style=\"font-size: 1rem; opacity: 0.8;\">(format non prévisualisé)</small>
                                    <a href=\"";
                    // line 77
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filePath"]) || array_key_exists("filePath", $context) ? $context["filePath"] : (function () { throw new RuntimeError('Variable "filePath" does not exist.', 77, $this->source); })()), "html", null, true);
                    yield "\" download style=\"display: inline-block; margin-top: 24px; background: #6366f1; color: white; padding: 14px 32px; border-radius: 12px; text-decoration: none; font-weight: 700; box-shadow: 0 6px 16px rgba(99,102,241,0.3); transition: all 0.2s;\" onmouseover=\"this.style.transform='scale(1.05)';\" onmouseout=\"this.style.transform='scale(1)';\">
                                        Télécharger le fichier
                                    </a>
                                </div>
                            ";
                }
                // line 82
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
            // line 85
            yield "            ";
        } else {
            // line 86
            yield "                <div style=\"grid-column: 1 / -1; text-align: center; padding: 100px 40px; background: rgba(255,255,255,0.9); border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); color: #475569; font-size: 1.5rem; font-weight: 600;\">
                    Aucune ressource disponible pour cette leçon pour le moment.
                </div>
            ";
        }
        // line 90
        yield "        </div>

        <!-- Bouton Terminer -->
        <div style=\"margin-top: 80px; text-align: center;\">
            <button onclick=\"terminerCours(";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94), "html", null, true);
        yield ")\" style=\"background: linear-gradient(135deg, #10b981, #059669); color: white; border: none; padding: 22px 80px; font-size: 1.5rem; font-weight: 900; border-radius: 20px; cursor: pointer; box-shadow: 0 12px 40px rgba(16,185,129,0.5); transition: all 0.35s;\" onmouseover=\"this.style.transform='scale(1.08) translateY(-4px)';\" onmouseout=\"this.style.transform='scale(1) translateY(0)';\">
                Terminer cette leçon →
            </button>
        </div>

    </div>

    <!-- Script filtrage + terminer -->
    <script>
        // Filtrage (inchangé)
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
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129))), "html", null, true);
        yield "'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = '/langue/";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 135, $this->source); })()), "idNiveau", [], "any", false, false, false, 135), "idLangue", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135), "html", null, true);
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
        return "cours/show.html.twig";
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
        return array (  363 => 135,  354 => 129,  316 => 94,  310 => 90,  304 => 86,  301 => 85,  285 => 82,  277 => 77,  272 => 75,  269 => 74,  260 => 70,  257 => 69,  255 => 68,  248 => 65,  246 => 64,  238 => 61,  235 => 60,  233 => 59,  228 => 58,  226 => 57,  223 => 56,  221 => 55,  212 => 51,  208 => 49,  196 => 48,  189 => 44,  186 => 43,  183 => 42,  179 => 41,  175 => 40,  171 => 39,  167 => 38,  164 => 37,  161 => 36,  143 => 35,  141 => 34,  118 => 16,  112 => 13,  103 => 6,  90 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Leçon {{ cour.numero }} – {{ cour.idNiveau.titre }}{% endblock %}

{% block body %}
<div style=\"background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); min-height: 100vh; padding: 60px 20px; color: white; font-family: system-ui, sans-serif;\">
<br><br><br><br>
    <div style=\"max-width: 1100px; margin: 0 auto;\">

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
                    {% set ext = res|split('.')|last|lower %}
                    {% set type = 'other' %}
                    {% if ext in ['pdf'] %}{% set type = 'pdf' %}
                    {% elseif ext in ['mp4','webm'] %}{% set type = 'video' %}
                    {% elseif ext in ['jpg','jpeg','png','gif','webp'] %}{% set type = 'image' %}
                    {% elseif ext in ['mp3','wav','ogg'] %}{% set type = 'audio' %}
                    {% endif %}

                    <div class=\"ressource-card\" data-type=\"{{ type }}\" style=\"background: rgba(255,255,255,0.95); border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.15); transition: all 0.3s; transform: translateY(0); display: none;\">
                        <div style=\"padding: 32px;\">
                            <div style=\"display: flex; align-items: center; gap: 16px; margin-bottom: 20px;\">
                                <span style=\"font-size: 2.8rem;\">
                                    {% if type == 'pdf' %}📄{% elseif type == 'video' %}🎥{% elseif type == 'image' %}🖼️{% elseif type == 'audio' %}🎵{% else %}📎{% endif %}
                                </span>
                                <h3 style=\"margin: 0; color: #1e293b; font-size: 1.5rem; font-weight: 800;\">
                                    {{ type|capitalize }} {{ loop.index }}
                                </h3>
                            </div>

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
        // Filtrage (inchangé)
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
{% endblock %}", "cours/show.html.twig", "C:\\Users\\oumai\\Fluently\\Fluently\\templates\\cours\\show.html.twig");
    }
}
