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

/* quiz/quiz_take.html.twig */
class __TwigTemplate_2307723665e1e0268222d74479cf4a64 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "navBar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quiz_take.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quiz_take.html.twig"));

        $this->parent = $this->loadTemplate("navBar.html.twig", "quiz/quiz_take.html.twig", 1);
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

        yield "Take Quiz";
        
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
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <style>
    .quiz-container {
      max-width: 1000px;
      margin: auto;
      padding-top: 40px;
    }
    .quiz-title {
      font-size: 2rem;
      font-weight: bold;
      color: #2c3e50;
      margin-bottom: 1rem;
      text-align: center;
    }
    .progress {
      height: 26px;
      background-color: #e9ecef;
      border-radius: 20px;
      overflow: hidden;
      margin: 1rem 0;
    }
    .progress-bar {
      background: linear-gradient(90deg, #2980b9, #6dd5fa);
      color: #fff;
      font-weight: 600;
      line-height: 26px;
      text-align: center;
      border-radius: 20px;
      transition: width 0.4s ease;
    }
    .question-card {
      background: #fff;
      border: none;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      transition: transform 0.2s;
    }
    .question-card:hover {
      transform: translateY(-2px);
    }
    .question-title {
      font-size: 1.2rem;
      font-weight: 600;
      color: #34495e;
    }
    .form-check-input, .form-check-label {
      cursor: pointer;
    }
    .form-check-label {
      font-size: 0.95rem;
    }
    .submit-btn {
      background: linear-gradient(90deg, #2980b9, #6dd5fa);
      color: #fff;
      font-weight: 500;
      border: none;
      padding: 12px 28px;
      border-radius: 12px;
      font-size: 1rem;
      transition: background 0.2s ease;
    }
    .submit-btn:hover {
      background: linear-gradient(90deg, #2471a3, #5dade2);
    }
    .translate-btn {
      font-size: 0.85rem;
      padding: 4px 10px;
      border-color: #3498db;
      color: #3498db;
    }
    .translate-btn:hover {
      background-color: #3498db;
      color: #fff;
    }
    .lang-select {
      font-size: 0.85rem;
      width: auto;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 88
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 90, $this->source); })()), "nom", [], "any", false, false, false, 90), "html", null, true);
        yield "</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
        <li class=\"breadcrumb-item active\">Take Quiz</li>
      </ol>
    </nav>
  </div>

  <div class=\"quiz-container\">
    <h2 class=\"quiz-title\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 100, $this->source); })()), "nom", [], "any", false, false, false, 100), "html", null, true);
        yield "</h2>

    <div class=\"progress mb-4\">
      <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
        0%
      </div>
    </div>

    ";
        // line 108
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 108, $this->source); })()))) {
            // line 109
            yield "      <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_quiz_submit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 109, $this->source); })()), "idQuiz", [], "any", false, false, false, 109)]), "html", null, true);
            yield "\">
        ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 110, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 111
                yield "          <div class=\"card question-card mb-4 p-4\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between align-items-start mb-2\">
                <h5 class=\"question-title\" id=\"question-title-";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 114), "html", null, true);
                yield "\">
                  ";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 115), "html", null, true);
                yield ". ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 115), "html", null, true);
                yield "
                </h5>
                <div class=\"d-flex align-items-center gap-2\">
                  <select id=\"lang-";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 118), "html", null, true);
                yield "\" class=\"form-select form-select-sm lang-select\">
                    <option value=\"en\">🇺🇸</option>
                    <option value=\"fr\">🇫🇷</option>
                    <option value=\"es\">🇪🇸</option>
                  </select>
                  <button type=\"button\" class=\"btn btn-outline-primary btn-sm translate-btn\" onclick=\"translateQuestion(";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 123), "html", null, true);
                yield ")\">
                    🌍 Translate
                  </button>
                </div>
              </div>

              <div id=\"translated-question-";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 129), "html", null, true);
                yield "\" class=\"text-muted mb-3\" style=\"display:none;\"></div>

              ";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 131));
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
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 132
                    yield "                <div class=\"form-check mb-2\">
                  <input
                    class=\"form-check-input quiz-answer\"
                    type=\"radio\"
                    name=\"question_";
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 136), "html", null, true);
                    yield "\"
                    id=\"reponse_";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 137), "html", null, true);
                    yield "_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 137), "html", null, true);
                    yield "\"
                    value=\"";
                    // line 138
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "idReponse", [], "any", false, false, false, 138), "html", null, true);
                    yield "\"
                    required
                  >
                  <label class=\"form-check-label\" for=\"reponse_";
                    // line 141
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 141), "html", null, true);
                    yield "_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 141), "html", null, true);
                    yield "\">
                    ";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "response", [], "any", false, false, false, 142), "html", null, true);
                    yield "
                  </label>
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
                unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                yield "            </div>
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
            unset($context['_seq'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            yield "
        <div class=\"text-center mt-4\">
          <button type=\"submit\" class=\"btn submit-btn\">
            Submit Quiz
          </button>
        </div>
      </form>
    ";
        } else {
            // line 157
            yield "      <div class=\"alert alert-info text-center\">
        No questions available for this quiz.
      </div>
    ";
        }
        // line 161
        yield "  </div>
</main>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const totalQuestions = document.querySelectorAll('.question-card').length;
    const progressBar = document.getElementById('progress-bar');
    const answeredQuestions = new Set();

    document.querySelectorAll('.quiz-answer').forEach(input => {
      input.addEventListener('change', function () {
        answeredQuestions.add(this.name);
        const progress = Math.round((answeredQuestions.size / totalQuestions) * 100);
        progressBar.style.width = progress + '%';
        progressBar.setAttribute('aria-valuenow', progress);
        progressBar.textContent = progress + '%';
      });
    });
  });

function translateQuestion(id) {
    const langSelect = document.getElementById(`lang-\${id}`);
    const questionContainer = document.getElementById(`translated-question-\${id}`);

    if (!langSelect || !questionContainer) {
        console.error('Language selector or question container not found.');
        return;
    }

    const lang = langSelect.value;
    questionContainer.style.display = 'block';
    questionContainer.innerHTML = '🔄 Translating...';

    // Build the URL dynamically
    const url = `/quiz/\${id}/translate/\${lang}`;

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: \${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                questionContainer.innerHTML = `<strong>Translation:</strong><br>\${data.question}`;

                const translatedResponses = data.responses;
                const labels = document.querySelectorAll(`label[for^=\"reponse_\${id}_\"]`);

                if (translatedResponses && labels.length > 0) {
                    labels.forEach((label, index) => {
                        if (translatedResponses[index] !== undefined) {
                            label.innerText = translatedResponses[index];
                        }
                    });
                }
            } else {
                questionContainer.innerHTML = `<div class=\"text-danger\">❌ \${data.message}</div>`;
            }
        })
        .catch(error => {
            questionContainer.innerHTML = `<div class=\"text-danger\">❌ Error: \${error.message}</div>`;
            console.error('Translation error:', error);
        });
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
        return "quiz/quiz_take.html.twig";
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
        return array (  395 => 161,  389 => 157,  379 => 149,  363 => 146,  345 => 142,  339 => 141,  333 => 138,  327 => 137,  323 => 136,  317 => 132,  300 => 131,  295 => 129,  286 => 123,  278 => 118,  270 => 115,  266 => 114,  261 => 111,  244 => 110,  239 => 109,  237 => 108,  226 => 100,  216 => 93,  210 => 90,  206 => 88,  193 => 87,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'navBar.html.twig' %}

{% block title %}Take Quiz{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <style>
    .quiz-container {
      max-width: 1000px;
      margin: auto;
      padding-top: 40px;
    }
    .quiz-title {
      font-size: 2rem;
      font-weight: bold;
      color: #2c3e50;
      margin-bottom: 1rem;
      text-align: center;
    }
    .progress {
      height: 26px;
      background-color: #e9ecef;
      border-radius: 20px;
      overflow: hidden;
      margin: 1rem 0;
    }
    .progress-bar {
      background: linear-gradient(90deg, #2980b9, #6dd5fa);
      color: #fff;
      font-weight: 600;
      line-height: 26px;
      text-align: center;
      border-radius: 20px;
      transition: width 0.4s ease;
    }
    .question-card {
      background: #fff;
      border: none;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      transition: transform 0.2s;
    }
    .question-card:hover {
      transform: translateY(-2px);
    }
    .question-title {
      font-size: 1.2rem;
      font-weight: 600;
      color: #34495e;
    }
    .form-check-input, .form-check-label {
      cursor: pointer;
    }
    .form-check-label {
      font-size: 0.95rem;
    }
    .submit-btn {
      background: linear-gradient(90deg, #2980b9, #6dd5fa);
      color: #fff;
      font-weight: 500;
      border: none;
      padding: 12px 28px;
      border-radius: 12px;
      font-size: 1rem;
      transition: background 0.2s ease;
    }
    .submit-btn:hover {
      background: linear-gradient(90deg, #2471a3, #5dade2);
    }
    .translate-btn {
      font-size: 0.85rem;
      padding: 4px 10px;
      border-color: #3498db;
      color: #3498db;
    }
    .translate-btn:hover {
      background-color: #3498db;
      color: #fff;
    }
    .lang-select {
      font-size: 0.85rem;
      width: auto;
    }
  </style>
{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>{{ quiz.nom }}</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
        <li class=\"breadcrumb-item active\">Take Quiz</li>
      </ol>
    </nav>
  </div>

  <div class=\"quiz-container\">
    <h2 class=\"quiz-title\">{{ quiz.nom }}</h2>

    <div class=\"progress mb-4\">
      <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
        0%
      </div>
    </div>

    {% if questions is not empty %}
      <form method=\"post\" action=\"{{ path('user_quiz_submit', { id: quiz.idQuiz }) }}\">
        {% for question in questions %}
          <div class=\"card question-card mb-4 p-4\">
            <div class=\"card-body\">
              <div class=\"d-flex justify-content-between align-items-start mb-2\">
                <h5 class=\"question-title\" id=\"question-title-{{ question.idQuestion }}\">
                  {{ loop.index }}. {{ question.question }}
                </h5>
                <div class=\"d-flex align-items-center gap-2\">
                  <select id=\"lang-{{ question.idQuestion }}\" class=\"form-select form-select-sm lang-select\">
                    <option value=\"en\">🇺🇸</option>
                    <option value=\"fr\">🇫🇷</option>
                    <option value=\"es\">🇪🇸</option>
                  </select>
                  <button type=\"button\" class=\"btn btn-outline-primary btn-sm translate-btn\" onclick=\"translateQuestion({{ question.idQuestion }})\">
                    🌍 Translate
                  </button>
                </div>
              </div>

              <div id=\"translated-question-{{ question.idQuestion }}\" class=\"text-muted mb-3\" style=\"display:none;\"></div>

              {% for reponse in question.reponses %}
                <div class=\"form-check mb-2\">
                  <input
                    class=\"form-check-input quiz-answer\"
                    type=\"radio\"
                    name=\"question_{{ question.idQuestion }}\"
                    id=\"reponse_{{ question.idQuestion }}_{{ loop.index }}\"
                    value=\"{{ reponse.idReponse }}\"
                    required
                  >
                  <label class=\"form-check-label\" for=\"reponse_{{ question.idQuestion }}_{{ loop.index }}\">
                    {{ reponse.response }}
                  </label>
                </div>
              {% endfor %}
            </div>
          </div>
        {% endfor %}

        <div class=\"text-center mt-4\">
          <button type=\"submit\" class=\"btn submit-btn\">
            Submit Quiz
          </button>
        </div>
      </form>
    {% else %}
      <div class=\"alert alert-info text-center\">
        No questions available for this quiz.
      </div>
    {% endif %}
  </div>
</main>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const totalQuestions = document.querySelectorAll('.question-card').length;
    const progressBar = document.getElementById('progress-bar');
    const answeredQuestions = new Set();

    document.querySelectorAll('.quiz-answer').forEach(input => {
      input.addEventListener('change', function () {
        answeredQuestions.add(this.name);
        const progress = Math.round((answeredQuestions.size / totalQuestions) * 100);
        progressBar.style.width = progress + '%';
        progressBar.setAttribute('aria-valuenow', progress);
        progressBar.textContent = progress + '%';
      });
    });
  });

function translateQuestion(id) {
    const langSelect = document.getElementById(`lang-\${id}`);
    const questionContainer = document.getElementById(`translated-question-\${id}`);

    if (!langSelect || !questionContainer) {
        console.error('Language selector or question container not found.');
        return;
    }

    const lang = langSelect.value;
    questionContainer.style.display = 'block';
    questionContainer.innerHTML = '🔄 Translating...';

    // Build the URL dynamically
    const url = `/quiz/\${id}/translate/\${lang}`;

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: \${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                questionContainer.innerHTML = `<strong>Translation:</strong><br>\${data.question}`;

                const translatedResponses = data.responses;
                const labels = document.querySelectorAll(`label[for^=\"reponse_\${id}_\"]`);

                if (translatedResponses && labels.length > 0) {
                    labels.forEach((label, index) => {
                        if (translatedResponses[index] !== undefined) {
                            label.innerText = translatedResponses[index];
                        }
                    });
                }
            } else {
                questionContainer.innerHTML = `<div class=\"text-danger\">❌ \${data.message}</div>`;
            }
        })
        .catch(error => {
            questionContainer.innerHTML = `<div class=\"text-danger\">❌ Error: \${error.message}</div>`;
            console.error('Translation error:', error);
        });
  }
</script>
{% endblock %}", "quiz/quiz_take.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\quiz\\quiz_take.html.twig");
    }
}
