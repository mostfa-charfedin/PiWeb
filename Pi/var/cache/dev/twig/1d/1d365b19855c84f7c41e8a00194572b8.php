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

/* quiz/result.html.twig */
class __TwigTemplate_248f63e9e6dda62c23d4ef1cf6801763 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/result.html.twig"));

        $this->parent = $this->load("navBar.html.twig", 1);
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

        yield "Quiz Result";
        
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
    .result-container {
      max-width: 900px;
      margin: auto;
    }

    .result-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .question-block {
      margin-bottom: 2rem;
    }

    .correct {
      background-color: #d4edda;
      border-left: 5px solid #28a745;
    }

    .incorrect {
      background-color: #f8d7da;
      border-left: 5px solid #dc3545;
    }

    .neutral {
      background-color: #f0f0f0;
      border-left: 5px solid #ccc;
    }

    .user-score {
      font-size: 1.5rem;
      font-weight: bold;
      color: #2c3e50;
    }

    .answer-label {
      font-weight: 500;
    }

    .return-home-btn {
      margin-top: 1.5rem;
      padding: 10px 30px;
      font-size: 1rem;
      border-radius: 30px;
    }

    .download-pdf-btn {
      margin-top: 1rem;
      padding: 10px 30px;
      font-size: 1rem;
      border-radius: 30px;
      background-color: #28a745;
      color: white;
      text-decoration: none;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
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

        // line 67
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 69, $this->source); })()), "nom", [], "any", false, false, false, 69), "html", null, true);
        yield " - Results</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
        <li class=\"breadcrumb-item active\">Results</li>
      </ol>
    </nav>
  </div>

  <section class=\"section result-container\">
    <div class=\"result-header\">
      <p class=\"user-score\">Your score: ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 80, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 80, $this->source); })()), "html", null, true);
        yield "</p>

      <!-- Button to download the PDF -->
      <a href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_download_certificate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 83, $this->source); })()), "idquiz", [], "any", false, false, false, 83)]), "html", null, true);
        yield "\" class=\"btn btn-success mt-3\">
  📄 Download Certificate (PDF)
</a>

      <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-outline-primary return-home-btn\">
        ⬅ Return to Home
      </a>
    </div>

    ";
        // line 92
        if (array_key_exists("questions", $context)) {
            // line 93
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 93, $this->source); })()));
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
                // line 94
                yield "        <div class=\"card question-block shadow-sm\">
          <div class=\"card-body\">
            <h5 class=\"question-title mb-3\">";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 96), "html", null, true);
                yield ". ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 96), "html", null, true);
                yield "</h5>
            ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 98
                    yield "              ";
                    $context["isCorrect"] = (CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "status", [], "any", false, false, false, 98) == "correct");
                    // line 99
                    yield "              ";
                    $context["isSelected"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["selectedAnswersMap"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 99), [], "array", true, true, false, 99) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedAnswersMap"]) || array_key_exists("selectedAnswersMap", $context) ? $context["selectedAnswersMap"] : (function () { throw new RuntimeError('Variable "selectedAnswersMap" does not exist.', 99, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 99), [], "array", false, false, false, 99) == CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "idReponse", [], "any", false, false, false, 99)));
                    // line 100
                    yield "              <div class=\"p-2 mb-2 
                ";
                    // line 101
                    if ((($tmp = (isset($context["isCorrect"]) || array_key_exists("isCorrect", $context) ? $context["isCorrect"] : (function () { throw new RuntimeError('Variable "isCorrect" does not exist.', 101, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 102
                        yield "                  correct
                ";
                    } elseif ((($tmp =                     // line 103
(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 103, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 104
                        yield "                  incorrect
                ";
                    } else {
                        // line 106
                        yield "                  neutral
                ";
                    }
                    // line 108
                    yield "              \">
                <span class=\"answer-label\">";
                    // line 109
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "response", [], "any", false, false, false, 109), "html", null, true);
                    yield "</span>
                ";
                    // line 110
                    if ((($tmp = (isset($context["isCorrect"]) || array_key_exists("isCorrect", $context) ? $context["isCorrect"] : (function () { throw new RuntimeError('Variable "isCorrect" does not exist.', 110, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 111
                        yield "                  <span class=\"text-success ms-2\">✔ Correct</span>
                ";
                    } elseif ((($tmp =                     // line 112
(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 112, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 113
                        yield "                  <span class=\"text-danger ms-2\">✘ Your Answer</span>
                ";
                    }
                    // line 115
                    yield "              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                yield "          </div>
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
            // line 120
            yield "    ";
        } else {
            // line 121
            yield "      <div class=\"alert alert-warning text-center\">
        No question data available to display the result.
      </div>
    ";
        }
        // line 125
        yield "  </section>
</main>
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
        return "quiz/result.html.twig";
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
        return array (  337 => 125,  331 => 121,  328 => 120,  312 => 117,  305 => 115,  301 => 113,  299 => 112,  296 => 111,  294 => 110,  290 => 109,  287 => 108,  283 => 106,  279 => 104,  277 => 103,  274 => 102,  272 => 101,  269 => 100,  266 => 99,  263 => 98,  259 => 97,  253 => 96,  249 => 94,  231 => 93,  229 => 92,  221 => 87,  214 => 83,  206 => 80,  195 => 72,  189 => 69,  185 => 67,  172 => 66,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'navBar.html.twig' %}

{% block title %}Quiz Result{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <style>
    .result-container {
      max-width: 900px;
      margin: auto;
    }

    .result-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .question-block {
      margin-bottom: 2rem;
    }

    .correct {
      background-color: #d4edda;
      border-left: 5px solid #28a745;
    }

    .incorrect {
      background-color: #f8d7da;
      border-left: 5px solid #dc3545;
    }

    .neutral {
      background-color: #f0f0f0;
      border-left: 5px solid #ccc;
    }

    .user-score {
      font-size: 1.5rem;
      font-weight: bold;
      color: #2c3e50;
    }

    .answer-label {
      font-weight: 500;
    }

    .return-home-btn {
      margin-top: 1.5rem;
      padding: 10px 30px;
      font-size: 1rem;
      border-radius: 30px;
    }

    .download-pdf-btn {
      margin-top: 1rem;
      padding: 10px 30px;
      font-size: 1rem;
      border-radius: 30px;
      background-color: #28a745;
      color: white;
      text-decoration: none;
    }
  </style>
{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>{{ quiz.nom }} - Results</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
        <li class=\"breadcrumb-item active\">Results</li>
      </ol>
    </nav>
  </div>

  <section class=\"section result-container\">
    <div class=\"result-header\">
      <p class=\"user-score\">Your score: {{ score }}/{{ total }}</p>

      <!-- Button to download the PDF -->
      <a href=\"{{ path('quiz_download_certificate', {id: quiz.idquiz}) }}\" class=\"btn btn-success mt-3\">
  📄 Download Certificate (PDF)
</a>

      <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-primary return-home-btn\">
        ⬅ Return to Home
      </a>
    </div>

    {% if questions is defined %}
      {% for question in questions %}
        <div class=\"card question-block shadow-sm\">
          <div class=\"card-body\">
            <h5 class=\"question-title mb-3\">{{ loop.index }}. {{ question.question }}</h5>
            {% for reponse in question.reponses %}
              {% set isCorrect = reponse.status == 'correct' %}
              {% set isSelected = selectedAnswersMap[question.idQuestion] is defined and selectedAnswersMap[question.idQuestion] == reponse.idReponse %}
              <div class=\"p-2 mb-2 
                {% if isCorrect %}
                  correct
                {% elseif isSelected %}
                  incorrect
                {% else %}
                  neutral
                {% endif %}
              \">
                <span class=\"answer-label\">{{ reponse.response }}</span>
                {% if isCorrect %}
                  <span class=\"text-success ms-2\">✔ Correct</span>
                {% elseif isSelected %}
                  <span class=\"text-danger ms-2\">✘ Your Answer</span>
                {% endif %}
              </div>
            {% endfor %}
          </div>
        </div>
      {% endfor %}
    {% else %}
      <div class=\"alert alert-warning text-center\">
        No question data available to display the result.
      </div>
    {% endif %}
  </section>
</main>
{% endblock %}
", "quiz/result.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\quiz\\result.html.twig");
    }
}
