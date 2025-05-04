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

/* quiz/quiz_list_user.html.twig */
class __TwigTemplate_be0759d32918d6f336d3d3d60ddb2130 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quiz_list_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quiz_list_user.html.twig"));

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

        yield "Available Quizzes";
        
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
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap\" rel=\"stylesheet\">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .quiz-card {
      border-radius: 1rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      backdrop-filter: blur(6px);
      background: rgba(255, 255, 255, 0.75);
      position: relative;
      overflow: hidden;
    }
    .quiz-card:hover {
      transform: translateY(-5px) scale(1.01);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }
    .quiz-title {
      font-weight: 600;
      font-size: 1.4rem;
      color: #2c3e50;
      margin-bottom: 0.5rem;
    }
    .btn-take-quiz {
      background: linear-gradient(to right, #3498db, #8e44ad);
      color: #fff;
      font-weight: 500;
      border-radius: 0.5rem;
      transition: background 0.3s ease;
    }
    .btn-take-quiz:hover {
      background: linear-gradient(to right, #2980b9, #71368a);
    }
    .badge-passed, .badge-score {
      background-color: #e84393;
      font-size: 0.75rem;
      padding: 0.3rem 0.6rem;
      border-radius: 0.5rem;
      margin-top: 0.3rem;
      display: inline-block;
    }
    .badge-passed-ribbon {
      position: absolute;
      top: 10px;
      right: -20px;
      background-color: #e84393;
      color: white;
      padding: 5px 40px;
      transform: rotate(45deg);
      font-size: 0.75rem;
      font-weight: bold;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    .quiz-status {
      margin-top: auto;
    }
    #quizSearchInput {
      min-width: 100px;
    }
    .no-quizzes {
      padding: 3rem;
      font-size: 1.1rem;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
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

        // line 76
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>Available Quizzes</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
        <li class=\"breadcrumb-item active\">Quizzes</li>
      </ol>
    </nav>
  </div>

  ";
        // line 88
        yield "  <div class=\"d-flex justify-content-end mb-4\">
    <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_stats");
        yield "\" class=\"btn btn-success\">
      View My Achievements
    </a>
  </div>

  <div class=\"d-flex justify-content-end mb-4\">
    <div class=\"col-md-3\">
      <input
        type=\"text\"
        class=\"form-control form-control-sm\"
        id=\"quizSearchInput\"
        placeholder=\"Search quiz by name...\"
      >
    </div>
  </div>

  <section class=\"section\">
    <div class=\"row\" id=\"quizContainer\">
      ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 108
            yield "        <div class=\"col-md-6 col-lg-4 mb-4 quiz-box\">
          <div class=\"card quiz-card h-100\">
            ";
            // line 110
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["quizResults"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 110), [], "array", true, true, false, 110)) {
                // line 111
                yield "              <div class=\"badge-passed-ribbon\">Passed</div>
            ";
            }
            // line 113
            yield "            <div class=\"card-body d-flex flex-column\">
              <h5 class=\"quiz-title\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "nom", [], "any", false, false, false, 114), "html", null, true);
            yield "</h5>
              ";
            // line 115
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["quizResults"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 115), [], "array", true, true, false, 115)) {
                // line 116
                yield "                <span class=\"badge badge-score\">Score: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["quizResults"]) || array_key_exists("quizResults", $context) ? $context["quizResults"] : (function () { throw new RuntimeError('Variable "quizResults" does not exist.', 116, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 116), [], "array", false, false, false, 116), "score", [], "any", false, false, false, 116), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["quizResults"]) || array_key_exists("quizResults", $context) ? $context["quizResults"] : (function () { throw new RuntimeError('Variable "quizResults" does not exist.', 116, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 116), [], "array", false, false, false, 116), "total", [], "any", false, false, false, 116), "html", null, true);
                yield "</span>
              ";
            }
            // line 118
            yield "               <div class=\"quiz-status mt-auto\">
                ";
            // line 119
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["quizResults"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 119), [], "array", true, true, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 120
                yield "                  <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_quiz_start", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 120)]), "html", null, true);
                yield "\" class=\"btn btn-take-quiz w-100 mt-3\">
                    <i class=\"bi bi-play-circle-fill\"></i> Take Quiz
                  </a>
                ";
            } else {
                // line 124
                yield "                  <button class=\"btn btn-secondary w-100 mt-3\" disabled>
                    <i class=\"bi bi-check-circle-fill\"></i> Quiz Completed
                  </button>
                ";
            }
            // line 128
            yield "              </div>
            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quiz'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "    </div>
  </section>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 138
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

        // line 139
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script>
    const quizSearchUrl = \"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_search");
        yield "\";

    document.getElementById('quizSearchInput').addEventListener('input', function () {
      const searchTerm = this.value;
      fetch(`\${quizSearchUrl}?search=\${encodeURIComponent(searchTerm)}`)
        .then(response => response.json())
        .then(data => {
          const container = document.getElementById('quizContainer');
          container.innerHTML = '';

          if (data.length === 0) {
            container.innerHTML = `
              <div class=\"col-12 text-center\">
                <div class=\"alert alert-info no-quizzes\">
                  No quizzes found for \"<strong>\${searchTerm}</strong>\".
                </div>
              </div>`;
            return;
          }

          data.forEach(quiz => {
            const passed = quiz.passed ?? false;
            const score = quiz.score ?? 0;
            const total = quiz.total ?? 0;

            container.innerHTML += `
              <div class=\"col-md-6 col-lg-4 mb-4 quiz-box\">
                <div class=\"card quiz-card h-100\">
                  \${passed ? `<div class='badge-passed-ribbon'>Passed</div>` : ''}
                  <div class=\"card-body d-flex flex-column\">
                    <h5 class=\"quiz-title\">\${quiz.nom}</h5>
                    \${passed ? `<span class=\"badge badge-score\">Score: \${score}/\${total}</span>` : ''}
                    <div class=\"quiz-status mt-auto\">
                      \${passed
                        ? `<button class=\"btn btn-secondary w-100 mt-3\" disabled>
                             <i class=\"bi bi-check-circle-fill\"></i> Quiz Completed
                           </button>`
                        : `<a href=\"/quiz/\${quiz.idquiz}/start\" class=\"btn btn-take-quiz w-100 mt-3\">
                             <i class=\"bi bi-play-circle-fill\"></i> Take Quiz
                           </a>`}
                    </div>
                  </div>
                </div>
              </div>
            `;
          });
        });
    });
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
        return "quiz/quiz_list_user.html.twig";
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
        return array (  328 => 141,  322 => 139,  309 => 138,  295 => 133,  285 => 128,  279 => 124,  271 => 120,  269 => 119,  266 => 118,  258 => 116,  256 => 115,  252 => 114,  249 => 113,  245 => 111,  243 => 110,  239 => 108,  235 => 107,  214 => 89,  211 => 88,  202 => 81,  195 => 76,  182 => 75,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'navBar.html.twig' %}

{% block title %}Available Quizzes{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap\" rel=\"stylesheet\">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .quiz-card {
      border-radius: 1rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      backdrop-filter: blur(6px);
      background: rgba(255, 255, 255, 0.75);
      position: relative;
      overflow: hidden;
    }
    .quiz-card:hover {
      transform: translateY(-5px) scale(1.01);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }
    .quiz-title {
      font-weight: 600;
      font-size: 1.4rem;
      color: #2c3e50;
      margin-bottom: 0.5rem;
    }
    .btn-take-quiz {
      background: linear-gradient(to right, #3498db, #8e44ad);
      color: #fff;
      font-weight: 500;
      border-radius: 0.5rem;
      transition: background 0.3s ease;
    }
    .btn-take-quiz:hover {
      background: linear-gradient(to right, #2980b9, #71368a);
    }
    .badge-passed, .badge-score {
      background-color: #e84393;
      font-size: 0.75rem;
      padding: 0.3rem 0.6rem;
      border-radius: 0.5rem;
      margin-top: 0.3rem;
      display: inline-block;
    }
    .badge-passed-ribbon {
      position: absolute;
      top: 10px;
      right: -20px;
      background-color: #e84393;
      color: white;
      padding: 5px 40px;
      transform: rotate(45deg);
      font-size: 0.75rem;
      font-weight: bold;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    .quiz-status {
      margin-top: auto;
    }
    #quizSearchInput {
      min-width: 100px;
    }
    .no-quizzes {
      padding: 3rem;
      font-size: 1.1rem;
    }
  </style>
{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>Available Quizzes</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
        <li class=\"breadcrumb-item active\">Quizzes</li>
      </ol>
    </nav>
  </div>

  {# ⭐ Add View My Achievements button here #}
  <div class=\"d-flex justify-content-end mb-4\">
    <a href=\"{{ path('user_stats') }}\" class=\"btn btn-success\">
      View My Achievements
    </a>
  </div>

  <div class=\"d-flex justify-content-end mb-4\">
    <div class=\"col-md-3\">
      <input
        type=\"text\"
        class=\"form-control form-control-sm\"
        id=\"quizSearchInput\"
        placeholder=\"Search quiz by name...\"
      >
    </div>
  </div>

  <section class=\"section\">
    <div class=\"row\" id=\"quizContainer\">
      {% for quiz in quizzes %}
        <div class=\"col-md-6 col-lg-4 mb-4 quiz-box\">
          <div class=\"card quiz-card h-100\">
            {% if quizResults[quiz.idquiz] is defined %}
              <div class=\"badge-passed-ribbon\">Passed</div>
            {% endif %}
            <div class=\"card-body d-flex flex-column\">
              <h5 class=\"quiz-title\">{{ quiz.nom }}</h5>
              {% if quizResults[quiz.idquiz] is defined %}
                <span class=\"badge badge-score\">Score: {{ quizResults[quiz.idquiz].score }}/{{ quizResults[quiz.idquiz].total }}</span>
              {% endif %}
               <div class=\"quiz-status mt-auto\">
                {% if quizResults[quiz.idquiz] is not defined %}
                  <a href=\"{{ path('user_quiz_start', {'id': quiz.idquiz}) }}\" class=\"btn btn-take-quiz w-100 mt-3\">
                    <i class=\"bi bi-play-circle-fill\"></i> Take Quiz
                  </a>
                {% else %}
                  <button class=\"btn btn-secondary w-100 mt-3\" disabled>
                    <i class=\"bi bi-check-circle-fill\"></i> Quiz Completed
                  </button>
                {% endif %}
              </div>
            </div>
          </div>
        </div>
      {% endfor %}
    </div>
  </section>
</main>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script>
    const quizSearchUrl = \"{{ path('quiz_search') }}\";

    document.getElementById('quizSearchInput').addEventListener('input', function () {
      const searchTerm = this.value;
      fetch(`\${quizSearchUrl}?search=\${encodeURIComponent(searchTerm)}`)
        .then(response => response.json())
        .then(data => {
          const container = document.getElementById('quizContainer');
          container.innerHTML = '';

          if (data.length === 0) {
            container.innerHTML = `
              <div class=\"col-12 text-center\">
                <div class=\"alert alert-info no-quizzes\">
                  No quizzes found for \"<strong>\${searchTerm}</strong>\".
                </div>
              </div>`;
            return;
          }

          data.forEach(quiz => {
            const passed = quiz.passed ?? false;
            const score = quiz.score ?? 0;
            const total = quiz.total ?? 0;

            container.innerHTML += `
              <div class=\"col-md-6 col-lg-4 mb-4 quiz-box\">
                <div class=\"card quiz-card h-100\">
                  \${passed ? `<div class='badge-passed-ribbon'>Passed</div>` : ''}
                  <div class=\"card-body d-flex flex-column\">
                    <h5 class=\"quiz-title\">\${quiz.nom}</h5>
                    \${passed ? `<span class=\"badge badge-score\">Score: \${score}/\${total}</span>` : ''}
                    <div class=\"quiz-status mt-auto\">
                      \${passed
                        ? `<button class=\"btn btn-secondary w-100 mt-3\" disabled>
                             <i class=\"bi bi-check-circle-fill\"></i> Quiz Completed
                           </button>`
                        : `<a href=\"/quiz/\${quiz.idquiz}/start\" class=\"btn btn-take-quiz w-100 mt-3\">
                             <i class=\"bi bi-play-circle-fill\"></i> Take Quiz
                           </a>`}
                    </div>
                  </div>
                </div>
              </div>
            `;
          });
        });
    });
  </script>
{% endblock %}
", "quiz/quiz_list_user.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\quiz\\quiz_list_user.html.twig");
    }
}
