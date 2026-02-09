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

/* objectif/index.html.twig */
class __TwigTemplate_747862991e50924bc0419f2c9db5da3e extends Template
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
            'js' => [$this, 'block_js'],
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Contact - Fluently";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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
        yield "    <!-- Hero Section -->
    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_2.jpg"), "html", null, true);
        yield "');\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
                <div class=\"col-md-9 ftco-animate pb-5 text-center\">
                    <p class=\"breadcrumbs\">
                        <span class=\"mr-2\">
                            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home <i class=\"fa fa-chevron-right\"></i></a>
                        </span> 
                        <span>Objectifs<i class=\"fa fa-chevron-right\"></i></span>
                    </p>
                    <h1 class=\"mb-0 bread\">Nos Objectifs</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info -->
    <section class=\"ftco-section\">
        <div class=\"container\">
            
        </div>
    </section>

    <!-- Additional Contact Info -->
    <section class=\"ftco-section bg-light\">
        <div class=\"container\">
            
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 41
        yield "    ";
        yield from $this->yieldParentBlock("js", $context, $blocks);
        yield "
    <script>
        // Initialisation de la carte Google
        function initMap() {
            var location = {lat: 48.8566, lng: 2.3522}; // Paris
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: location,
                styles: [
                    {
                        featureType: \"all\",
                        elementType: \"labels.text.fill\",
                        stylers: [{color: \"#7c7c7c\"}]
                    }
                ]
            });
            
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Fluently - Paris',
                icon: {
                    url: '";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/marker.png"), "html", null, true);
        yield "',
                    scaledSize: new google.maps.Size(40, 40)
                }
            });
            
            var infoWindow = new google.maps.InfoWindow({
                content: '<h5>Fluently</h5><p>123 Avenue des Langues<br>75000 Paris, France</p>'
            });
            
            marker.addListener('click', function() {
                infoWindow.open(map, marker);
            });
        }
        
        // Soumission du formulaire
        \$(document).ready(function() {
            \$('#contactForm').on('submit', function(e) {
                e.preventDefault();
                
                var \$form = \$(this);
                var \$submitBtn = \$form.find('input[type=\"submit\"]');
                var originalText = \$submitBtn.val();
                
                \$submitBtn.val('Envoi en cours...').prop('disabled', true);
                
                // Simulation d'envoi (à remplacer par AJAX réel)
                setTimeout(function() {
                    alert('Message envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');
                    \$form[0].reset();
                    \$submitBtn.val(originalText).prop('disabled', false);
                }, 1500);
            });
        });
    </script>
    
    <!-- Google Maps API -->
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&callback=initMap\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 103
        yield "    ";
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
    <style>
        .info-wrap {
            border-radius: 10px;
        }
        .info-wrap .icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 15px;
        }
        .info-wrap .text p {
            margin-bottom: 5px;
        }
        .info-wrap .text span {
            font-weight: 600;
            color: #fff;
        }
        .info-wrap a {
            color: rgba(255, 255, 255, 0.8);
        }
        .info-wrap a:hover {
            color: #fff;
            text-decoration: underline;
        }
        #map {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .contact-wrap {
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
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
        return "objectif/index.html.twig";
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
        return array (  251 => 103,  238 => 102,  189 => 63,  163 => 41,  150 => 40,  115 => 15,  105 => 8,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/contact/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Contact - Fluently{% endblock %}

{% block body %}
    <!-- Hero Section -->
    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_2.jpg') }}');\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
                <div class=\"col-md-9 ftco-animate pb-5 text-center\">
                    <p class=\"breadcrumbs\">
                        <span class=\"mr-2\">
                            <a href=\"{{ path('app_home') }}\">Home <i class=\"fa fa-chevron-right\"></i></a>
                        </span> 
                        <span>Objectifs<i class=\"fa fa-chevron-right\"></i></span>
                    </p>
                    <h1 class=\"mb-0 bread\">Nos Objectifs</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info -->
    <section class=\"ftco-section\">
        <div class=\"container\">
            
        </div>
    </section>

    <!-- Additional Contact Info -->
    <section class=\"ftco-section bg-light\">
        <div class=\"container\">
            
        </div>
    </section>
{% endblock %}

{% block js %}
    {{ parent() }}
    <script>
        // Initialisation de la carte Google
        function initMap() {
            var location = {lat: 48.8566, lng: 2.3522}; // Paris
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: location,
                styles: [
                    {
                        featureType: \"all\",
                        elementType: \"labels.text.fill\",
                        stylers: [{color: \"#7c7c7c\"}]
                    }
                ]
            });
            
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Fluently - Paris',
                icon: {
                    url: '{{ asset('assets/images/marker.png') }}',
                    scaledSize: new google.maps.Size(40, 40)
                }
            });
            
            var infoWindow = new google.maps.InfoWindow({
                content: '<h5>Fluently</h5><p>123 Avenue des Langues<br>75000 Paris, France</p>'
            });
            
            marker.addListener('click', function() {
                infoWindow.open(map, marker);
            });
        }
        
        // Soumission du formulaire
        \$(document).ready(function() {
            \$('#contactForm').on('submit', function(e) {
                e.preventDefault();
                
                var \$form = \$(this);
                var \$submitBtn = \$form.find('input[type=\"submit\"]');
                var originalText = \$submitBtn.val();
                
                \$submitBtn.val('Envoi en cours...').prop('disabled', true);
                
                // Simulation d'envoi (à remplacer par AJAX réel)
                setTimeout(function() {
                    alert('Message envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');
                    \$form[0].reset();
                    \$submitBtn.val(originalText).prop('disabled', false);
                }, 1500);
            });
        });
    </script>
    
    <!-- Google Maps API -->
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&callback=initMap\"></script>
{% endblock %}

{% block css %}
    {{ parent() }}
    <style>
        .info-wrap {
            border-radius: 10px;
        }
        .info-wrap .icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 15px;
        }
        .info-wrap .text p {
            margin-bottom: 5px;
        }
        .info-wrap .text span {
            font-weight: 600;
            color: #fff;
        }
        .info-wrap a {
            color: rgba(255, 255, 255, 0.8);
        }
        .info-wrap a:hover {
            color: #fff;
            text-decoration: underline;
        }
        #map {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .contact-wrap {
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
    </style>
{% endblock %}", "objectif/index.html.twig", "C:\\Users\\Retr0\\Desktop\\FLUENTLY_WORK\\Fluently\\templates\\objectif\\index.html.twig");
    }
}
