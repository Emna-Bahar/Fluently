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

/* Langue/index.html.twig */
class __TwigTemplate_4426915203f2098c8273b95231bb80da extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Langue/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Langue/index.html.twig"));

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

        yield "À propos - Fluently";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .game-container {
        position: relative;
        min-height: 800px;
    }
    
    .level-circle {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 1.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
        position: absolute;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        border: 5px solid white;
    }
    
    .level-circle:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    }
    
    .level-circle.active {
        animation: pulse 2s infinite;
    }
    
    .level-circle.locked {
        background-color: #95a5a6 !important;
        cursor: not-allowed;
        opacity: 0.7;
    }
    
    .level-circle.completed {
        border-color: #2ecc71;
    }
    
    .level-circle.current {
        border-color: #3498db;
    }
    
    .path-line {
        position: absolute;
        background-color: #3498db;
        height: 10px;
        z-index: -1;
        transform-origin: left center;
    }
    
    .game-info {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        margin-bottom: 40px;
    }
    
    .progress-bar-game {
        height: 20px;
        border-radius: 10px;
        background: #ecf0f1;
        overflow: hidden;
        margin: 20px 0;
    }
    
    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, #3498db, #2ecc71);
        transition: width 0.5s ease;
    }
    
    @keyframes pulse {
        0% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0.7); }
        70% { box-shadow: 0 0 0 15px rgba(52, 152, 219, 0); }
        100% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0); }
    }
    
    .level-badge {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 40px;
        height: 40px;
        background: #e74c3c;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }
    
    .test-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.8);
        z-index: 1000;
        align-items: center;
        justify-content: center;
    }
    
    .test-content {
        background: white;
        border-radius: 20px;
        padding: 40px;
        max-width: 800px;
        width: 90%;
        max-height: 90vh;
        overflow-y: auto;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 130
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

        // line 131
        yield "
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg_2.jpg"), "html", null, true);
        yield "');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate pb-5 text-center\">
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\">
                        <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa fa-chevron-right\"></i></a>
                    </span> 
                    <span>Langues <i class=\"fa fa-chevron-right\"></i></span>
                </p>
                <h1 class=\"mb-0 bread\">Aventure Linguistique</h1>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"game-info\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h2 class=\"mb-3\">Progression</h2>
                    <div class=\"progress-bar-game\">
                        <div class=\"progress-fill\" style=\"width: 30%;\"></div>
                    </div>
                    <p>3/10 niveaux complétés</p>
                </div>
                <div class=\"col-md-6 text-right\">
                    <h3>Score: 2,540</h3>
                    <div class=\"mt-3\">
                        <span class=\"badge badge-success mr-2\">Anglais</span>
                        <span class=\"badge badge-warning mr-2\">Français</span>
                        <span class=\"badge badge-info\">Espagnol</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"game-container\" id=\"gameContainer\">
            ";
        // line 173
        yield "        </div>
        
        <div class=\"text-center mt-5\">
            <button class=\"btn btn-primary btn-lg\" onclick=\"resetGame()\">
                <i class=\"fa fa-redo\"></i> Réinitialiser la progression
            </button>
        </div>
    </div>
</section>

<!-- Modal pour le test de niveau -->
<div class=\"test-modal\" id=\"testModal\">
    <div class=\"test-content\">
        <h2 id=\"testTitle\" class=\"mb-4\">Test de Niveau - Niveau <span id=\"levelNumber\">1</span></h2>
        <div id=\"testContent\">
            <!-- Le contenu du test sera chargé dynamiquement depuis l'API -->
        </div>
        <div class=\"text-right mt-4\">
            <button class=\"btn btn-secondary mr-2\" onclick=\"closeTest()\">Annuler</button>
            <button class=\"btn btn-success\" onclick=\"submitTest()\">Soumettre les réponses</button>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 199
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 200
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// Configuration des niveaux
const levels = [
    { id: 1, x: 50, y: 100, color: '#3498db', title: 'Débutant', unlocked: true, completed: true, testRequired: true },
    { id: 2, x: 200, y: 180, color: '#2ecc71', title: 'Basique', unlocked: true, completed: true, testRequired: true },
    { id: 3, x: 350, y: 100, color: '#9b59b6', title: 'Intermédiaire 1', unlocked: true, completed: true, testRequired: true },
    { id: 4, x: 500, y: 180, color: '#e67e22', title: 'Intermédiaire 2', unlocked: true, completed: false, testRequired: true },
    { id: 5, x: 650, y: 100, color: '#e74c3c', title: 'Avancé 1', unlocked: false, completed: false, testRequired: true },
    { id: 6, x: 50, y: 300, color: '#1abc9c', title: 'Conversation', unlocked: false, completed: false, testRequired: true },
    { id: 7, x: 200, y: 380, color: '#d35400', title: 'Business', unlocked: false, completed: false, testRequired: true },
    { id: 8, x: 350, y: 300, color: '#34495e', title: 'Technique', unlocked: false, completed: false, testRequired: true },
    { id: 9, x: 500, y: 380, color: '#f39c12', title: 'Expert', unlocked: false, completed: false, testRequired: true },
    { id: 10, x: 650, y: 300, color: '#c0392b', title: 'Maîtrise', unlocked: false, completed: false, testRequired: true }
];

let currentLevel = 4; // Le niveau actuel (premier non complété)

// URL des APIs (sur des PC différents)
const API_BASE_URL = 'http://votre-api-test:8000'; // API des tests
const LANGUE_API_URL = 'http://votre-api-langue:8001'; // API des langues

function initGame() {
    const container = document.getElementById('gameContainer');
    container.innerHTML = '';
    
    // Dessiner les lignes de chemin
    for (let i = 0; i < levels.length - 1; i++) {
        if (levels[i].unlocked && levels[i + 1].unlocked) {
            const line = document.createElement('div');
            line.className = 'path-line';
            
            const x1 = levels[i].x + 60;
            const y1 = levels[i].y + 60;
            const x2 = levels[i + 1].x + 60;
            const y2 = levels[i + 1].y + 60;
            
            const length = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
            const angle = Math.atan2(y2 - y1, x2 - x1) * (180 / Math.PI);
            
            line.style.width = length + 'px';
            line.style.left = x1 + 'px';
            line.style.top = (y1 - 5) + 'px';
            line.style.transform = rotate(\${angle}deg);
            
            container.appendChild(line);
        }
    }
    
    // Créer les cercles de niveau
    levels.forEach((level, index) => {
        const circle = document.createElement('div');
        circle.className = 'level-circle';
        circle.style.left = level.x + 'px';
        circle.style.top = level.y + 'px';
        circle.style.backgroundColor = level.color;
        circle.style.zIndex = '10';
        
        if (!level.unlocked) {
            circle.classList.add('locked');
        } else if (level.completed) {
            circle.classList.add('completed');
        }
        
        if (level.id === currentLevel) {
            circle.classList.add('current', 'active');
        }
        
        circle.innerHTML = `
            <div class=\"text-center\">
                <div style=\"font-size: 1.2rem;\">\${level.title}</div>
                <div>Niveau \${level.id}</div>
            </div>
        `;
        
        if (level.testRequired && !level.completed) {
            const badge = document.createElement('div');
            badge.className = 'level-badge';
            badge.innerHTML = '<i class=\"fa fa-question\"></i>';
            circle.appendChild(badge);
        }
        
        circle.onclick = () => handleLevelClick(level);
        
        container.appendChild(circle);
    });
}

function handleLevelClick(level) {
    if (!level.unlocked) {
        alert('Ce niveau est verrouillé. Complétez le niveau précédent d\\'abord.');
        return;
    }
    
    if (level.id === currentLevel) {
        // Si c'est le niveau courant, commencer le test
        startLevelTest(level);
    } else if (level.id < currentLevel) {
        // Si c'est un niveau déjà complété, montrer les résultats
        showLevelResults(level);
    } else {
        alert('Vous devez compléter le niveau ' + (currentLevel - 1) + ' d\\'abord!');
    }
}

async function startLevelTest(level) {
    document.getElementById('levelNumber').textContent = level.id;
    document.getElementById('testTitle').textContent = Test de Niveau - \${level.title};
    
    try {
        // Appeler l'API des tests sur l'autre PC
        const response = await fetch(\${API_BASE_URL}/api/test/level/\${level.id}, {
            headers: {
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        });
        
        if (!response.ok) throw new Error('Erreur de chargement du test');
        
        const testData = await response.json();
        displayTestQuestions(testData);
        
    } catch (error) {
        console.error('Erreur:', error);
        // Mode démo si l'API n'est pas disponible
        displayDemoTest(level);
    }
    
    document.getElementById('testModal').style.display = 'flex';
}

function displayTestQuestions(testData) {
    const container = document.getElementById('testContent');
    let html = `
        <p class=\"mb-4\">\${testData.description || 'Test de compétence linguistique'}</p>
        <p><strong>Temps estimé:</strong> \${testData.duration || '10'} minutes</p>
    `;
    
    testData.questions.forEach((question, index) => {
        html += `
            <div class=\"question mb-4 p-3 border rounded\">
                <h5>Question \${index + 1}: \${question.text}</h5>
                \${question.options ? question.options.map((option, i) => `
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"q\${index}\" id=\"q\${index}o\${i}\" value=\"\${i}\">
                        <label class=\"form-check-label\" for=\"q\${index}o\${i}\">
                            \${option}
                        </label>
                    </div>
                `).join('') : ''}
                \${question.input ? `
                    <div class=\"form-group\">
                        <label>Votre réponse:</label>
                        <input type=\"text\" class=\"form-control\" name=\"q\${index}_input\">
                    </div>
                ` : ''}
            </div>
        `;
    });
    
    container.innerHTML = html;
}

function displayDemoTest(level) {
    const container = document.getElementById('testContent');
    container.innerHTML = `
        <p class=\"mb-4\">Test de niveau démo pour \${level.title}. Dans la version réelle, ceci serait chargé depuis l'API de tests.</p>
        
        <div class=\"question mb-4 p-3 border rounded\">
            <h5>Question 1: Traduisez \"Bonjour\" en anglais</h5>
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"q1\" id=\"q1o1\" value=\"1\">
                <label class=\"form-check-label\" for=\"q1o1\">Hello</label>
            </div>
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"q1\" id=\"q1o2\" value=\"2\">
                <label class=\"form-check-label\" for=\"q1o2\">Goodbye</label>
            </div>
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"q1\" id=\"q1o3\" value=\"3\">
                <label class=\"form-check-label\" for=\"q1o3\">Thank you</label>
            </div>
        </div>
        
        <div class=\"question mb-4 p-3 border rounded\">
            <h5>Question 2: Complétez la phrase: \"I _ to school every day.\"</h5>
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"q2_input\" placeholder=\"Votre réponse\">
            </div>
        </div>
    `;
}

async function submitTest() {
    // Collecter les réponses
    const answers = {};
    // Logique de collecte des réponses...
    
    try {
        // Envoyer les réponses à l'API des tests
        const response = await fetch(\${API_BASE_URL}/api/test/submit, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            body: JSON.stringify({
                levelId: document.getElementById('levelNumber').textContent,
                answers: answers
            })
        });
        
        const result = await response.json();
        
        if (result.passed) {
            // Mettre à jour l'API des langues
            await fetch(\${LANGUE_API_URL}/api/langue/progression, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                body: JSON.stringify({
                    level: result.level,
                    score: result.score,
                    language: 'english' // À adapter
                })
            });
            
            alert(Félicitations! Vous avez réussi le test avec \${result.score}%!);
            closeTest();
            updateLevelProgress(result.level);
        } else {
            alert(Test échoué. Score: \${result.score}%. Essayez à nouveau!);
        }
        
    } catch (error) {
        console.error('Erreur:', error);
        // Mode démo
        alert('Félicitations! Test réussi en mode démo!');
        closeTest();
        updateLevelProgress(parseInt(document.getElementById('levelNumber').textContent));
    }
}

function updateLevelProgress(levelId) {
    // Mettre à jour le niveau localement
    const levelIndex = levels.findIndex(l => l.id === levelId);
    if (levelIndex !== -1) {
        levels[levelIndex].completed = true;
        
        // Déverrouiller le niveau suivant
        if (levelIndex + 1 < levels.length) {
            levels[levelIndex + 1].unlocked = true;
            currentLevel = levelId + 1;
        }
        
        // Recharger le jeu
        initGame();
        
        // Mettre à jour la barre de progression
        const completed = levels.filter(l => l.completed).length;
        document.querySelector('.progress-fill').style.width = \${(completed / levels.length) * 100}%;
        document.querySelector('.game-info p').textContent = \${completed}/\${levels.length} niveaux complétés;
    }
}

function showLevelResults(level) {
    alert(Niveau \${level.id} - \${level.title}\\n\\nStatut: \${level.completed ? 'Complété ✓' : 'En cours...'}\\n\\nCliquez sur le niveau actuel pour continuer votre progression.);
}

function closeTest() {
    document.getElementById('testModal').style.display = 'none';
}

function resetGame() {
    if (confirm('Êtes-vous sûr de vouloir réinitialiser toute votre progression?')) {
        levels.forEach(level => {
            level.unlocked = level.id === 1;
            level.completed = level.id === 1;
        });
        currentLevel = 2;
        initGame();
        document.querySelector('.progress-fill').style.width = '10%';
        document.querySelector('.game-info p').textContent = '1/10 niveaux complétés';
    }
}

// Initialiser le jeu quand la page est chargée
document.addEventListener('DOMContentLoaded', initGame);
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
        return "Langue/index.html.twig";
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
        return array (  345 => 200,  332 => 199,  297 => 173,  261 => 139,  251 => 132,  248 => 131,  235 => 130,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/about/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}À propos - Fluently{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .game-container {
        position: relative;
        min-height: 800px;
    }
    
    .level-circle {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 1.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
        position: absolute;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        border: 5px solid white;
    }
    
    .level-circle:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    }
    
    .level-circle.active {
        animation: pulse 2s infinite;
    }
    
    .level-circle.locked {
        background-color: #95a5a6 !important;
        cursor: not-allowed;
        opacity: 0.7;
    }
    
    .level-circle.completed {
        border-color: #2ecc71;
    }
    
    .level-circle.current {
        border-color: #3498db;
    }
    
    .path-line {
        position: absolute;
        background-color: #3498db;
        height: 10px;
        z-index: -1;
        transform-origin: left center;
    }
    
    .game-info {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        margin-bottom: 40px;
    }
    
    .progress-bar-game {
        height: 20px;
        border-radius: 10px;
        background: #ecf0f1;
        overflow: hidden;
        margin: 20px 0;
    }
    
    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, #3498db, #2ecc71);
        transition: width 0.5s ease;
    }
    
    @keyframes pulse {
        0% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0.7); }
        70% { box-shadow: 0 0 0 15px rgba(52, 152, 219, 0); }
        100% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0); }
    }
    
    .level-badge {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 40px;
        height: 40px;
        background: #e74c3c;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }
    
    .test-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.8);
        z-index: 1000;
        align-items: center;
        justify-content: center;
    }
    
    .test-content {
        background: white;
        border-radius: 20px;
        padding: 40px;
        max-width: 800px;
        width: 90%;
        max-height: 90vh;
        overflow-y: auto;
    }
</style>
{% endblock %}

{% block body %}

<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/images/bg_2.jpg') }}');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate pb-5 text-center\">
                <p class=\"breadcrumbs\">
                    <span class=\"mr-2\">
                        <a href=\"{{ path('app_home') }}\">Accueil <i class=\"fa fa-chevron-right\"></i></a>
                    </span> 
                    <span>Langues <i class=\"fa fa-chevron-right\"></i></span>
                </p>
                <h1 class=\"mb-0 bread\">Aventure Linguistique</h1>
            </div>
        </div>
    </div>
</section>

<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"game-info\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h2 class=\"mb-3\">Progression</h2>
                    <div class=\"progress-bar-game\">
                        <div class=\"progress-fill\" style=\"width: 30%;\"></div>
                    </div>
                    <p>3/10 niveaux complétés</p>
                </div>
                <div class=\"col-md-6 text-right\">
                    <h3>Score: 2,540</h3>
                    <div class=\"mt-3\">
                        <span class=\"badge badge-success mr-2\">Anglais</span>
                        <span class=\"badge badge-warning mr-2\">Français</span>
                        <span class=\"badge badge-info\">Espagnol</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"game-container\" id=\"gameContainer\">
            {# Les niveaux seront générés dynamiquement par JavaScript #}
        </div>
        
        <div class=\"text-center mt-5\">
            <button class=\"btn btn-primary btn-lg\" onclick=\"resetGame()\">
                <i class=\"fa fa-redo\"></i> Réinitialiser la progression
            </button>
        </div>
    </div>
</section>

<!-- Modal pour le test de niveau -->
<div class=\"test-modal\" id=\"testModal\">
    <div class=\"test-content\">
        <h2 id=\"testTitle\" class=\"mb-4\">Test de Niveau - Niveau <span id=\"levelNumber\">1</span></h2>
        <div id=\"testContent\">
            <!-- Le contenu du test sera chargé dynamiquement depuis l'API -->
        </div>
        <div class=\"text-right mt-4\">
            <button class=\"btn btn-secondary mr-2\" onclick=\"closeTest()\">Annuler</button>
            <button class=\"btn btn-success\" onclick=\"submitTest()\">Soumettre les réponses</button>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
// Configuration des niveaux
const levels = [
    { id: 1, x: 50, y: 100, color: '#3498db', title: 'Débutant', unlocked: true, completed: true, testRequired: true },
    { id: 2, x: 200, y: 180, color: '#2ecc71', title: 'Basique', unlocked: true, completed: true, testRequired: true },
    { id: 3, x: 350, y: 100, color: '#9b59b6', title: 'Intermédiaire 1', unlocked: true, completed: true, testRequired: true },
    { id: 4, x: 500, y: 180, color: '#e67e22', title: 'Intermédiaire 2', unlocked: true, completed: false, testRequired: true },
    { id: 5, x: 650, y: 100, color: '#e74c3c', title: 'Avancé 1', unlocked: false, completed: false, testRequired: true },
    { id: 6, x: 50, y: 300, color: '#1abc9c', title: 'Conversation', unlocked: false, completed: false, testRequired: true },
    { id: 7, x: 200, y: 380, color: '#d35400', title: 'Business', unlocked: false, completed: false, testRequired: true },
    { id: 8, x: 350, y: 300, color: '#34495e', title: 'Technique', unlocked: false, completed: false, testRequired: true },
    { id: 9, x: 500, y: 380, color: '#f39c12', title: 'Expert', unlocked: false, completed: false, testRequired: true },
    { id: 10, x: 650, y: 300, color: '#c0392b', title: 'Maîtrise', unlocked: false, completed: false, testRequired: true }
];

let currentLevel = 4; // Le niveau actuel (premier non complété)

// URL des APIs (sur des PC différents)
const API_BASE_URL = 'http://votre-api-test:8000'; // API des tests
const LANGUE_API_URL = 'http://votre-api-langue:8001'; // API des langues

function initGame() {
    const container = document.getElementById('gameContainer');
    container.innerHTML = '';
    
    // Dessiner les lignes de chemin
    for (let i = 0; i < levels.length - 1; i++) {
        if (levels[i].unlocked && levels[i + 1].unlocked) {
            const line = document.createElement('div');
            line.className = 'path-line';
            
            const x1 = levels[i].x + 60;
            const y1 = levels[i].y + 60;
            const x2 = levels[i + 1].x + 60;
            const y2 = levels[i + 1].y + 60;
            
            const length = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
            const angle = Math.atan2(y2 - y1, x2 - x1) * (180 / Math.PI);
            
            line.style.width = length + 'px';
            line.style.left = x1 + 'px';
            line.style.top = (y1 - 5) + 'px';
            line.style.transform = rotate(\${angle}deg);
            
            container.appendChild(line);
        }
    }
    
    // Créer les cercles de niveau
    levels.forEach((level, index) => {
        const circle = document.createElement('div');
        circle.className = 'level-circle';
        circle.style.left = level.x + 'px';
        circle.style.top = level.y + 'px';
        circle.style.backgroundColor = level.color;
        circle.style.zIndex = '10';
        
        if (!level.unlocked) {
            circle.classList.add('locked');
        } else if (level.completed) {
            circle.classList.add('completed');
        }
        
        if (level.id === currentLevel) {
            circle.classList.add('current', 'active');
        }
        
        circle.innerHTML = `
            <div class=\"text-center\">
                <div style=\"font-size: 1.2rem;\">\${level.title}</div>
                <div>Niveau \${level.id}</div>
            </div>
        `;
        
        if (level.testRequired && !level.completed) {
            const badge = document.createElement('div');
            badge.className = 'level-badge';
            badge.innerHTML = '<i class=\"fa fa-question\"></i>';
            circle.appendChild(badge);
        }
        
        circle.onclick = () => handleLevelClick(level);
        
        container.appendChild(circle);
    });
}

function handleLevelClick(level) {
    if (!level.unlocked) {
        alert('Ce niveau est verrouillé. Complétez le niveau précédent d\\'abord.');
        return;
    }
    
    if (level.id === currentLevel) {
        // Si c'est le niveau courant, commencer le test
        startLevelTest(level);
    } else if (level.id < currentLevel) {
        // Si c'est un niveau déjà complété, montrer les résultats
        showLevelResults(level);
    } else {
        alert('Vous devez compléter le niveau ' + (currentLevel - 1) + ' d\\'abord!');
    }
}

async function startLevelTest(level) {
    document.getElementById('levelNumber').textContent = level.id;
    document.getElementById('testTitle').textContent = Test de Niveau - \${level.title};
    
    try {
        // Appeler l'API des tests sur l'autre PC
        const response = await fetch(\${API_BASE_URL}/api/test/level/\${level.id}, {
            headers: {
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        });
        
        if (!response.ok) throw new Error('Erreur de chargement du test');
        
        const testData = await response.json();
        displayTestQuestions(testData);
        
    } catch (error) {
        console.error('Erreur:', error);
        // Mode démo si l'API n'est pas disponible
        displayDemoTest(level);
    }
    
    document.getElementById('testModal').style.display = 'flex';
}

function displayTestQuestions(testData) {
    const container = document.getElementById('testContent');
    let html = `
        <p class=\"mb-4\">\${testData.description || 'Test de compétence linguistique'}</p>
        <p><strong>Temps estimé:</strong> \${testData.duration || '10'} minutes</p>
    `;
    
    testData.questions.forEach((question, index) => {
        html += `
            <div class=\"question mb-4 p-3 border rounded\">
                <h5>Question \${index + 1}: \${question.text}</h5>
                \${question.options ? question.options.map((option, i) => `
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"q\${index}\" id=\"q\${index}o\${i}\" value=\"\${i}\">
                        <label class=\"form-check-label\" for=\"q\${index}o\${i}\">
                            \${option}
                        </label>
                    </div>
                `).join('') : ''}
                \${question.input ? `
                    <div class=\"form-group\">
                        <label>Votre réponse:</label>
                        <input type=\"text\" class=\"form-control\" name=\"q\${index}_input\">
                    </div>
                ` : ''}
            </div>
        `;
    });
    
    container.innerHTML = html;
}

function displayDemoTest(level) {
    const container = document.getElementById('testContent');
    container.innerHTML = `
        <p class=\"mb-4\">Test de niveau démo pour \${level.title}. Dans la version réelle, ceci serait chargé depuis l'API de tests.</p>
        
        <div class=\"question mb-4 p-3 border rounded\">
            <h5>Question 1: Traduisez \"Bonjour\" en anglais</h5>
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"q1\" id=\"q1o1\" value=\"1\">
                <label class=\"form-check-label\" for=\"q1o1\">Hello</label>
            </div>
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"q1\" id=\"q1o2\" value=\"2\">
                <label class=\"form-check-label\" for=\"q1o2\">Goodbye</label>
            </div>
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"q1\" id=\"q1o3\" value=\"3\">
                <label class=\"form-check-label\" for=\"q1o3\">Thank you</label>
            </div>
        </div>
        
        <div class=\"question mb-4 p-3 border rounded\">
            <h5>Question 2: Complétez la phrase: \"I _ to school every day.\"</h5>
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"q2_input\" placeholder=\"Votre réponse\">
            </div>
        </div>
    `;
}

async function submitTest() {
    // Collecter les réponses
    const answers = {};
    // Logique de collecte des réponses...
    
    try {
        // Envoyer les réponses à l'API des tests
        const response = await fetch(\${API_BASE_URL}/api/test/submit, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            body: JSON.stringify({
                levelId: document.getElementById('levelNumber').textContent,
                answers: answers
            })
        });
        
        const result = await response.json();
        
        if (result.passed) {
            // Mettre à jour l'API des langues
            await fetch(\${LANGUE_API_URL}/api/langue/progression, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                body: JSON.stringify({
                    level: result.level,
                    score: result.score,
                    language: 'english' // À adapter
                })
            });
            
            alert(Félicitations! Vous avez réussi le test avec \${result.score}%!);
            closeTest();
            updateLevelProgress(result.level);
        } else {
            alert(Test échoué. Score: \${result.score}%. Essayez à nouveau!);
        }
        
    } catch (error) {
        console.error('Erreur:', error);
        // Mode démo
        alert('Félicitations! Test réussi en mode démo!');
        closeTest();
        updateLevelProgress(parseInt(document.getElementById('levelNumber').textContent));
    }
}

function updateLevelProgress(levelId) {
    // Mettre à jour le niveau localement
    const levelIndex = levels.findIndex(l => l.id === levelId);
    if (levelIndex !== -1) {
        levels[levelIndex].completed = true;
        
        // Déverrouiller le niveau suivant
        if (levelIndex + 1 < levels.length) {
            levels[levelIndex + 1].unlocked = true;
            currentLevel = levelId + 1;
        }
        
        // Recharger le jeu
        initGame();
        
        // Mettre à jour la barre de progression
        const completed = levels.filter(l => l.completed).length;
        document.querySelector('.progress-fill').style.width = \${(completed / levels.length) * 100}%;
        document.querySelector('.game-info p').textContent = \${completed}/\${levels.length} niveaux complétés;
    }
}

function showLevelResults(level) {
    alert(Niveau \${level.id} - \${level.title}\\n\\nStatut: \${level.completed ? 'Complété ✓' : 'En cours...'}\\n\\nCliquez sur le niveau actuel pour continuer votre progression.);
}

function closeTest() {
    document.getElementById('testModal').style.display = 'none';
}

function resetGame() {
    if (confirm('Êtes-vous sûr de vouloir réinitialiser toute votre progression?')) {
        levels.forEach(level => {
            level.unlocked = level.id === 1;
            level.completed = level.id === 1;
        });
        currentLevel = 2;
        initGame();
        document.querySelector('.progress-fill').style.width = '10%';
        document.querySelector('.game-info p').textContent = '1/10 niveaux complétés';
    }
}

// Initialiser le jeu quand la page est chargée
document.addEventListener('DOMContentLoaded', initGame);
</script>
{% endblock %}", "Langue/index.html.twig", "C:\\Users\\emnab\\Documents\\Main\\Fluently\\templates\\langue\\index.html.twig");
    }
}
