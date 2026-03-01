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

/* face/verify.html.twig */
class __TwigTemplate_1c79b172ec90f92df6d5eb302d12c456 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "face/verify.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "face/verify.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Face Verification</title>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\">
</head>
<body class=\"bg-light\">

<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 text-center\">
            <div class=\"card p-4 shadow\">
                <h3 class=\"mb-3\">Face Verification</h3>
                <p class=\"text-muted\">Please look at the camera to verify your identity</p>

                <div id=\"status\" class=\"alert alert-info\">Loading face detection...</div>

                <div class=\"position-relative d-inline-block mb-3\">
                    <video id=\"video\" width=\"400\" height=\"300\" autoplay muted class=\"rounded border\"></video>
                    <canvas id=\"overlay\" width=\"400\" height=\"300\" class=\"position-absolute top-0 start-0\"></canvas>
                </div>

                <button id=\"verifyBtn\" class=\"btn btn-success btn-lg w-100 mb-2\" disabled>
                    Verify My Face
                </button>

                <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-outline-danger w-100\">
                    Cancel & Logout
                </a>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/face-api.js@0.22.2/dist/face-api.min.js\"></script>

<script>
const userId = ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "html", null, true);
        yield ";
const video = document.getElementById('video');
const overlay = document.getElementById('overlay');
const verifyBtn = document.getElementById('verifyBtn');
const status = document.getElementById('status');

async function loadModels() {
    const MODEL_URL = 'https://cdn.jsdelivr.net/npm/@vladmandic/face-api/model/';
    await faceapi.nets.tinyFaceDetector.loadFromUri(MODEL_URL);
    await faceapi.nets.faceLandmark68Net.loadFromUri(MODEL_URL);
    await faceapi.nets.faceRecognitionNet.loadFromUri(MODEL_URL);
    status.textContent = 'Ready! Look at the camera and click Verify.';
    status.className = 'alert alert-success';
    startCamera();
}

async function startCamera() {
    const stream = await navigator.mediaDevices.getUserMedia({ video: true });
    video.srcObject = stream;
    video.addEventListener('play', () => {
        verifyBtn.disabled = false;
        detectFace();
    });
}

async function detectFace() {
    const ctx = overlay.getContext('2d');
    setInterval(async () => {
        const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions())
            .withFaceLandmarks();
        ctx.clearRect(0, 0, overlay.width, overlay.height);
        faceapi.draw.drawDetections(overlay, detections);
        faceapi.draw.drawFaceLandmarks(overlay, detections);
    }, 100);
}

verifyBtn.addEventListener('click', async () => {
    status.textContent = 'Scanning face...';
    status.className = 'alert alert-warning';
    verifyBtn.disabled = true;

    const detection = await faceapi.detectSingleFace(video, new faceapi.TinyFaceDetectorOptions())
        .withFaceLandmarks()
        .withFaceDescriptor();

    if (!detection) {
        status.textContent = 'No face detected! Please look at the camera.';
        status.className = 'alert alert-danger';
        verifyBtn.disabled = false;
        return;
    }

    const descriptor = Array.from(detection.descriptor);

    const response = await fetch('";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_face_verify");
        yield "', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ user_id: userId, descriptor: descriptor })
    });

    const result = await response.json();

    if (result.match) {
        status.textContent = 'Face verified! Redirecting...';
        status.className = 'alert alert-success';
        window.location.href = '";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_face_success");
        yield "';
    } else {
        status.textContent = 'Face not recognized! Try again or logout.';
        status.className = 'alert alert-danger';
        verifyBtn.disabled = false;
    }
});

loadModels();
</script>

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
        return "face/verify.html.twig";
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
        return array (  164 => 103,  150 => 92,  93 => 38,  79 => 27,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Face Verification</title>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
</head>
<body class=\"bg-light\">

<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 text-center\">
            <div class=\"card p-4 shadow\">
                <h3 class=\"mb-3\">Face Verification</h3>
                <p class=\"text-muted\">Please look at the camera to verify your identity</p>

                <div id=\"status\" class=\"alert alert-info\">Loading face detection...</div>

                <div class=\"position-relative d-inline-block mb-3\">
                    <video id=\"video\" width=\"400\" height=\"300\" autoplay muted class=\"rounded border\"></video>
                    <canvas id=\"overlay\" width=\"400\" height=\"300\" class=\"position-absolute top-0 start-0\"></canvas>
                </div>

                <button id=\"verifyBtn\" class=\"btn btn-success btn-lg w-100 mb-2\" disabled>
                    Verify My Face
                </button>

                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger w-100\">
                    Cancel & Logout
                </a>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/face-api.js@0.22.2/dist/face-api.min.js\"></script>

<script>
const userId = {{ user.id }};
const video = document.getElementById('video');
const overlay = document.getElementById('overlay');
const verifyBtn = document.getElementById('verifyBtn');
const status = document.getElementById('status');

async function loadModels() {
    const MODEL_URL = 'https://cdn.jsdelivr.net/npm/@vladmandic/face-api/model/';
    await faceapi.nets.tinyFaceDetector.loadFromUri(MODEL_URL);
    await faceapi.nets.faceLandmark68Net.loadFromUri(MODEL_URL);
    await faceapi.nets.faceRecognitionNet.loadFromUri(MODEL_URL);
    status.textContent = 'Ready! Look at the camera and click Verify.';
    status.className = 'alert alert-success';
    startCamera();
}

async function startCamera() {
    const stream = await navigator.mediaDevices.getUserMedia({ video: true });
    video.srcObject = stream;
    video.addEventListener('play', () => {
        verifyBtn.disabled = false;
        detectFace();
    });
}

async function detectFace() {
    const ctx = overlay.getContext('2d');
    setInterval(async () => {
        const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions())
            .withFaceLandmarks();
        ctx.clearRect(0, 0, overlay.width, overlay.height);
        faceapi.draw.drawDetections(overlay, detections);
        faceapi.draw.drawFaceLandmarks(overlay, detections);
    }, 100);
}

verifyBtn.addEventListener('click', async () => {
    status.textContent = 'Scanning face...';
    status.className = 'alert alert-warning';
    verifyBtn.disabled = true;

    const detection = await faceapi.detectSingleFace(video, new faceapi.TinyFaceDetectorOptions())
        .withFaceLandmarks()
        .withFaceDescriptor();

    if (!detection) {
        status.textContent = 'No face detected! Please look at the camera.';
        status.className = 'alert alert-danger';
        verifyBtn.disabled = false;
        return;
    }

    const descriptor = Array.from(detection.descriptor);

    const response = await fetch('{{ path(\"app_face_verify\") }}', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ user_id: userId, descriptor: descriptor })
    });

    const result = await response.json();

    if (result.match) {
        status.textContent = 'Face verified! Redirecting...';
        status.className = 'alert alert-success';
        window.location.href = '{{ path(\"app_face_success\") }}';
    } else {
        status.textContent = 'Face not recognized! Try again or logout.';
        status.className = 'alert alert-danger';
        verifyBtn.disabled = false;
    }
});

loadModels();
</script>

</body>
</html>", "face/verify.html.twig", "C:\\Users\\MSI\\Desktop\\5idma\\Fluently\\templates\\face\\verify.html.twig");
    }
}
