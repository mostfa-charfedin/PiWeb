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

/* quiz/ListQuiz.html.twig */
class __TwigTemplate_562abb5fd734ad4060059f8babe389ba extends Template
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
        // line 2
        return "sideBar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/ListQuiz.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/ListQuiz.html.twig"));

        $this->parent = $this->loadTemplate("sideBar.html.twig", "quiz/ListQuiz.html.twig", 2);
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

        yield "Quiz List";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle d-flex justify-content-between align-items-center\">
    <div>
      <h1>Quiz List</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
          <li class=\"breadcrumb-item active\">Quizzes</li>
        </ol>
      </nav>
    </div>
    <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_new");
        yield "\" class=\"btn btn-success\">
      <i class=\"bi bi-plus-circle\"></i> Create New Quiz
    </a>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">All Quizzes</h5>

            <div class=\"table-responsive\">
              <table class=\"table table-striped align-middle\">
                <thead>
                  <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Quiz Title</th>
                    <th scope=\"col\">Created At</th>
                    <th scope=\"col\" class=\"text-center\">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 42
            yield "                    <tr>
                      <th scope=\"row\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
            yield "</th>
                      <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "nom", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                      <td>";
            // line 45
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "datecreation", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "datecreation", [], "any", false, false, false, 45), "Y-m-d H:i"), "html", null, true)) : ("N/A"));
            yield "</td>
                      <td class=\"text-center\">
                        <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary me-1\" title=\"View\">
                          <i class=\"bi bi-eye\"></i>
                        </a>
                        <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning me-1\" title=\"Edit\">
                          <i class=\"bi bi-pencil-square\"></i>
                        </a>
                        <form method=\"post\" action=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this quiz?');\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 54))), "html", null, true);
            yield "\">
                          <button class=\"btn btn-sm btn-danger\" title=\"Delete\"><i class=\"bi bi-trash\"></i></button>
                        </form>
                      </td>
                    </tr>
                  ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 59
        if (!$context['_iterated']) {
            // line 60
            yield "                    <tr>
                      <td colspan=\"4\" class=\"text-center text-muted\">No quizzes found.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quiz'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
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
        return "quiz/ListQuiz.html.twig";
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
        return array (  221 => 64,  212 => 60,  210 => 59,  192 => 54,  188 => 53,  182 => 50,  176 => 47,  171 => 45,  167 => 44,  163 => 43,  160 => 42,  142 => 41,  116 => 18,  108 => 13,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/quiz/ListQuiz.html.twig #}
{% extends 'sideBar.html.twig' %}

{% block title %}Quiz List{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle d-flex justify-content-between align-items-center\">
    <div>
      <h1>Quiz List</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
          <li class=\"breadcrumb-item active\">Quizzes</li>
        </ol>
      </nav>
    </div>
    <a href=\"{{ path('quiz_new') }}\" class=\"btn btn-success\">
      <i class=\"bi bi-plus-circle\"></i> Create New Quiz
    </a>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">All Quizzes</h5>

            <div class=\"table-responsive\">
              <table class=\"table table-striped align-middle\">
                <thead>
                  <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Quiz Title</th>
                    <th scope=\"col\">Created At</th>
                    <th scope=\"col\" class=\"text-center\">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  {% for quiz in quizzes %}
                    <tr>
                      <th scope=\"row\">{{ loop.index }}</th>
                      <td>{{ quiz.nom }}</td>
                      <td>{{ quiz.datecreation ? quiz.datecreation|date('Y-m-d H:i') : 'N/A' }}</td>
                      <td class=\"text-center\">
                        <a href=\"{{ path('quiz_show', {'id': quiz.idquiz}) }}\" class=\"btn btn-sm btn-primary me-1\" title=\"View\">
                          <i class=\"bi bi-eye\"></i>
                        </a>
                        <a href=\"{{ path('quiz_edit', {'id': quiz.idquiz}) }}\" class=\"btn btn-sm btn-warning me-1\" title=\"Edit\">
                          <i class=\"bi bi-pencil-square\"></i>
                        </a>
                        <form method=\"post\" action=\"{{ path('quiz_delete', {'id': quiz.idquiz}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this quiz?');\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ quiz.idquiz) }}\">
                          <button class=\"btn btn-sm btn-danger\" title=\"Delete\"><i class=\"bi bi-trash\"></i></button>
                        </form>
                      </td>
                    </tr>
                  {% else %}
                    <tr>
                      <td colspan=\"4\" class=\"text-center text-muted\">No quizzes found.</td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</main>
{% endblock %}", "quiz/ListQuiz.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\quiz\\ListQuiz.html.twig");
    }
}
