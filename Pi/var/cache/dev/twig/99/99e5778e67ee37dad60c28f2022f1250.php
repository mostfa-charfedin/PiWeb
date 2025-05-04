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

/* quiz/QuizShow.html.twig */
class __TwigTemplate_1875c7b639194b373b05a5f8d4f6f1bd extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "sideBar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/QuizShow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/QuizShow.html.twig"));

        $this->parent = $this->loadTemplate("sideBar.html.twig", "quiz/QuizShow.html.twig", 1);
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

        yield "Quiz Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle d-flex justify-content-between align-items-center\">
    <div>
      <h1>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Quizzes</a></li>
          <li class=\"breadcrumb-item active\">Details</li>
        </ol>
      </nav>
    </div>
    <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-secondary\">
      <i class=\"bi bi-arrow-left\"></i> Back to List
    </a>
  </div>

  <section class=\"section\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8\">
        <!-- Quiz Information -->
        <div class=\"card mb-4\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Quiz Information</h5>
            <p><strong>Title:</strong> ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
            <p><strong>Created On:</strong> ";
        // line 31
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 31, $this->source); })()), "datecreation", [], "any", false, false, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 31, $this->source); })()), "datecreation", [], "any", false, false, false, 31), "Y-m-d H:i"), "html", null, true)) : ("N/A"));
        yield "</p>
            <p><strong>Total Questions:</strong> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 32, $this->source); })())), "html", null, true);
        yield "</p>
          </div>
        </div>

        <!-- Questions Header + Add -->
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
          <h5>Questions</h5>
          <a href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_new", ["quizId" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["quiz"] ?? null), "idQuestion", [], "any", true, true, false, 39) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 39, $this->source); })()), "idQuestion", [], "any", false, false, false, 39)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 39, $this->source); })()), "idQuestion", [], "any", false, false, false, 39)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 39, $this->source); })()), "idquiz", [], "any", false, false, false, 39)))]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
            <i class=\"bi bi-plus-circle\"></i> Add Question
          </a>
        </div>

        <!-- Questions List -->
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 46
            yield "          <div class=\"card mb-3 shadow-sm border-0\">
            <div class=\"card-body d-flex justify-content-between align-items-center\">
              <div class=\"d-flex align-items-center\">
                <i class=\"bi bi-question-circle-fill text-primary me-2 fs-5\"></i>
                <span class=\"fs-6\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 50), "html", null, true);
            yield "</span>
              </div>

              <div class=\"d-flex gap-2\">
                <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info\">
                  <i class=\"bi bi-eye\"></i> View
                </a>

                <form method=\"post\" action=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this question?');\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 59))), "html", null, true);
            yield "\">
                  <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                    <i class=\"bi bi-trash\"></i> Delete
                  </button>
                </form>
              </div>
            </div>
          </div>
        ";
            $context['_iterated'] = true;
        }
        // line 67
        if (!$context['_iterated']) {
            // line 68
            yield "          <p class=\"text-muted\">No questions yet.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "      </div>
    </div>
  </section>
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
        return "quiz/QuizShow.html.twig";
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
        return array (  216 => 70,  209 => 68,  207 => 67,  194 => 59,  190 => 58,  183 => 54,  176 => 50,  170 => 46,  165 => 45,  156 => 39,  146 => 32,  142 => 31,  138 => 30,  123 => 18,  115 => 13,  111 => 12,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'sideBar.html.twig' %}

{% block title %}Quiz Details{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle d-flex justify-content-between align-items-center\">
    <div>
      <h1>{{ quiz.nom }}</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
          <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Quizzes</a></li>
          <li class=\"breadcrumb-item active\">Details</li>
        </ol>
      </nav>
    </div>
    <a href=\"{{ path('app_home') }}\" class=\"btn btn-secondary\">
      <i class=\"bi bi-arrow-left\"></i> Back to List
    </a>
  </div>

  <section class=\"section\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8\">
        <!-- Quiz Information -->
        <div class=\"card mb-4\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Quiz Information</h5>
            <p><strong>Title:</strong> {{ quiz.nom }}</p>
            <p><strong>Created On:</strong> {{ quiz.datecreation ? quiz.datecreation|date('Y-m-d H:i') : 'N/A' }}</p>
            <p><strong>Total Questions:</strong> {{ questions|length }}</p>
          </div>
        </div>

        <!-- Questions Header + Add -->
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
          <h5>Questions</h5>
          <a href=\"{{ path('question_new', {'quizId': quiz.idQuestion ?? quiz.idquiz}) }}\" class=\"btn btn-primary\">
            <i class=\"bi bi-plus-circle\"></i> Add Question
          </a>
        </div>

        <!-- Questions List -->
        {% for question in questions %}
          <div class=\"card mb-3 shadow-sm border-0\">
            <div class=\"card-body d-flex justify-content-between align-items-center\">
              <div class=\"d-flex align-items-center\">
                <i class=\"bi bi-question-circle-fill text-primary me-2 fs-5\"></i>
                <span class=\"fs-6\">{{ question.question }}</span>
              </div>

              <div class=\"d-flex gap-2\">
                <a href=\"{{ path('question_show', {'id': question.idQuestion}) }}\" class=\"btn btn-sm btn-outline-info\">
                  <i class=\"bi bi-eye\"></i> View
                </a>

                <form method=\"post\" action=\"{{ path('question_delete', {'id': question.idQuestion}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this question?');\">
                  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ question.idQuestion) }}\">
                  <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                    <i class=\"bi bi-trash\"></i> Delete
                  </button>
                </form>
              </div>
            </div>
          </div>
        {% else %}
          <p class=\"text-muted\">No questions yet.</p>
        {% endfor %}
      </div>
    </div>
  </section>
</main>
{% endblock %}
", "quiz/QuizShow.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\quiz\\QuizShow.html.twig");
    }
}
