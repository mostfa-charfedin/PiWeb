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

/* quiz/question_show.html.twig */
class __TwigTemplate_b31854ded413fb9cf6f347aa13047d27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/question_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/question_show.html.twig"));

        $this->parent = $this->load("sideBar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Question Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle d-flex justify-content-between align-items-center\">
    <div>
      <h1 class=\"mb-1\">Question: <span class=\"text-primary\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 8, $this->source); })()), "question", [], "any", false, false, false, 8), "html", null, true);
        yield "</span></h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
          <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 13, $this->source); })()), "idQuiz", [], "any", false, false, false, 13)]), "html", null, true);
        yield "\">Back to Quiz</a>
          </li>
          <li class=\"breadcrumb-item active\">Question Details</li>
        </ol>
      </nav>
    </div>
  </div>

  <section class=\"section\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8\">
        <div class=\"card shadow-sm mb-4 border-0\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">📌 Question Info</h5>
            <p class=\"mb-1\"><strong>Question:</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 27, $this->source); })()), "question", [], "any", false, false, false, 27), "html", null, true);
        yield "</p>
            <p><strong>Belongs to Quiz:</strong> <span class=\"text-muted\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "</span></p>
          </div>
        </div>

        <div class=\"d-flex justify-content-between align-items-center mb-3\">
          <h5 class=\"mb-0\">💬 Responses</h5>
        </div>

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 37
            yield "          <div class=\"card mb-2 border-0 shadow-sm\">
            <div class=\"card-body d-flex justify-content-between align-items-center\">
              <div>
                <p class=\"mb-0\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "response", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
              </div>
              <span class=\"badge rounded-pill bg-";
            // line 42
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "status", [], "any", false, false, false, 42) == "correct")) ? ("success") : ("secondary"));
            yield "\">
                ";
            // line 43
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "status", [], "any", false, false, false, 43) == "correct")) ? ("Correct") : ("Incorrect"));
            yield "
              </span>
            </div>
          </div>
        ";
            $context['_iterated'] = true;
        }
        // line 47
        if (!$context['_iterated']) {
            // line 48
            yield "          <div class=\"alert alert-warning text-center\">
            No responses yet for this question.
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        return "quiz/question_show.html.twig";
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
        return array (  187 => 52,  178 => 48,  176 => 47,  167 => 43,  163 => 42,  158 => 40,  153 => 37,  148 => 36,  137 => 28,  133 => 27,  116 => 13,  111 => 11,  105 => 8,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'sideBar.html.twig' %}
{% block title %}Question Details{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle d-flex justify-content-between align-items-center\">
    <div>
      <h1 class=\"mb-1\">Question: <span class=\"text-primary\">{{ question.question }}</span></h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
          <li class=\"breadcrumb-item\">
            <a href=\"{{ path('quiz_show', {id: quiz.idQuiz}) }}\">Back to Quiz</a>
          </li>
          <li class=\"breadcrumb-item active\">Question Details</li>
        </ol>
      </nav>
    </div>
  </div>

  <section class=\"section\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8\">
        <div class=\"card shadow-sm mb-4 border-0\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">📌 Question Info</h5>
            <p class=\"mb-1\"><strong>Question:</strong> {{ question.question }}</p>
            <p><strong>Belongs to Quiz:</strong> <span class=\"text-muted\">{{ quiz.nom }}</span></p>
          </div>
        </div>

        <div class=\"d-flex justify-content-between align-items-center mb-3\">
          <h5 class=\"mb-0\">💬 Responses</h5>
        </div>

        {% for reponse in reponses %}
          <div class=\"card mb-2 border-0 shadow-sm\">
            <div class=\"card-body d-flex justify-content-between align-items-center\">
              <div>
                <p class=\"mb-0\">{{ reponse.response }}</p>
              </div>
              <span class=\"badge rounded-pill bg-{{ reponse.status == 'correct' ? 'success' : 'secondary' }}\">
                {{ reponse.status == 'correct' ? 'Correct' : 'Incorrect' }}
              </span>
            </div>
          </div>
        {% else %}
          <div class=\"alert alert-warning text-center\">
            No responses yet for this question.
          </div>
        {% endfor %}
      </div>
    </div>
  </section>
</main>
{% endblock %}
", "quiz/question_show.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\quiz\\question_show.html.twig");
    }
}
