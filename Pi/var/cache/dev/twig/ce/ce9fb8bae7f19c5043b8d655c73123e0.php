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
class __TwigTemplate_a3b7808417b1f7afcf7281a958cba0bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/ListQuiz.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/ListQuiz.html.twig"));

        $this->parent = $this->load("sideBar.html.twig", 1);
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

        yield "Quiz List";
        
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
      <h1>Quiz List</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
          <li class=\"breadcrumb-item active\">Quizzes</li>
        </ol>
      </nav>
    </div>
    <a href=\"";
        // line 17
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

            <!-- Search Bar -->
            <div class=\"row mb-3\">
              <div class=\"col-md-6\">
                <input type=\"text\" id=\"quizSearchInput\" class=\"form-control\" placeholder=\"Search quizzes by title...\">
              </div>
            </div>

            <div class=\"table-responsive\">
              <table class=\"table table-striped align-middle\" id=\"quizTable\">
                <thead>
                  <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Quiz Title</th>
                    <th scope=\"col\">Created At</th>
                    <th scope=\"col\" class=\"text-center\">Actions</th>
                  </tr>
                </thead>
                <tbody id=\"quizTableBody\">
                  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 48, $this->source); })()));
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
            // line 49
            yield "                    <tr>
                      <th scope=\"row\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50), "html", null, true);
            yield "</th>
                      <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "nom", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                      <td>";
            // line 52
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "datecreation", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "datecreation", [], "any", false, false, false, 52), "Y-m-d H:i"), "html", null, true)) : ("N/A"));
            yield "</td>
                      <td class=\"text-center\">
                        <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary me-1\" title=\"View\">
                          <i class=\"bi bi-eye\"></i>
                        </a>
                        <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning me-1\" title=\"Edit\">
                          <i class=\"bi bi-pencil-square\"></i>
                        </a>

                        ";
            // line 62
            yield "                        ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 62), (isset($context["hiddenIds"]) || array_key_exists("hiddenIds", $context) ? $context["hiddenIds"] : (function () { throw new RuntimeError('Variable "hiddenIds" does not exist.', 62, $this->source); })()))) {
                // line 63
                yield "                          <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_unhide", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" class=\"d-inline\">
                            <button class=\"btn btn-sm btn-success me-1\" title=\"Unhide\"><i class=\"bi bi-file-lock\"></i></button>
                          </form>
                        ";
            } else {
                // line 67
                yield "                          <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_hide", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 67)]), "html", null, true);
                yield "\" class=\"d-inline\">
                            <button class=\"btn btn-sm btn-secondary me-1\" title=\"Hide\"> <i class=\"bi bi-file-lock\"></i></button>
                          </form>
                        ";
            }
            // line 71
            yield "
                        <form method=\"post\" action=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this quiz?');\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 73))), "html", null, true);
            yield "\">
                          <button class=\"btn btn-sm btn-danger\" title=\"Delete\"><i class=\"bi bi-trash\"></i></button>
                        </form>

                        ";
            // line 78
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_quiz_stats", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info me-1\" title=\"View Stats\">
                          <i class=\"bi bi-bar-chart\"></i> Stats
                        </a>
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
        // line 84
        if (!$context['_iterated']) {
            // line 85
            yield "                    <tr>
                      <td colspan=\"4\" class=\"text-center text-muted\">No quizzes found.</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quiz'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  document.getElementById('quizSearchInput').addEventListener('input', function () {
    const searchTerm = this.value;
    fetch(`";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_search");
        yield "?search=\${encodeURIComponent(searchTerm)}`)
      .then(response => response.json())
      .then(data => {
        const tableBody = document.getElementById('quizTableBody');
        tableBody.innerHTML = '';

        if (data.length === 0) {
          tableBody.innerHTML = `<tr><td colspan=\"4\" class=\"text-center text-muted\">No quizzes found.</td></tr>`;
          return;
        }

        data.forEach((quiz, index) => {
          tableBody.innerHTML += `
            <tr>
              <th scope=\"row\">\${index + 1}</th>
              <td>\${quiz.nom}</td>
              <td>\${quiz.datecreation}</td>
              <td class=\"text-center\">
                <a href=\"/quiz/\${quiz.idquiz}\" class=\"btn btn-sm btn-primary me-1\" title=\"View\"><i class=\"bi bi-eye\"></i></a>
                <a href=\"/quiz/\${quiz.idquiz}/edit\" class=\"btn btn-sm btn-warning me-1\" title=\"Edit\"><i class=\"bi bi-pencil-square\"></i></a>
                <form method=\"post\" action=\"/quiz/\${quiz.idquiz}/delete\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this quiz?');\">
                  <input type=\"hidden\" name=\"_token\" value=\"\${quiz.csrf_token}\">
                  <button class=\"btn btn-sm btn-danger\" title=\"Delete\"><i class=\"bi bi-trash\"></i></button>
                </form>
                <a href=\"/admin/quiz/\${quiz.idquiz}/stats\" class=\"btn btn-sm btn-info me-1\" title=\"View Stats\">
                  <i class=\"bi bi-bar-chart\"></i> Stats
                </a>
              </td>
            </tr>
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
        return array (  277 => 103,  261 => 89,  252 => 85,  250 => 84,  230 => 78,  223 => 73,  219 => 72,  216 => 71,  208 => 67,  200 => 63,  197 => 62,  190 => 57,  184 => 54,  179 => 52,  175 => 51,  171 => 50,  168 => 49,  150 => 48,  116 => 17,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'sideBar.html.twig' %}

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

            <!-- Search Bar -->
            <div class=\"row mb-3\">
              <div class=\"col-md-6\">
                <input type=\"text\" id=\"quizSearchInput\" class=\"form-control\" placeholder=\"Search quizzes by title...\">
              </div>
            </div>

            <div class=\"table-responsive\">
              <table class=\"table table-striped align-middle\" id=\"quizTable\">
                <thead>
                  <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Quiz Title</th>
                    <th scope=\"col\">Created At</th>
                    <th scope=\"col\" class=\"text-center\">Actions</th>
                  </tr>
                </thead>
                <tbody id=\"quizTableBody\">
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

                        {# Toggle Hide/Unhide #}
                        {% if quiz.idquiz in hiddenIds %}
                          <form method=\"post\" action=\"{{ path('quiz_unhide', {'id': quiz.idquiz}) }}\" class=\"d-inline\">
                            <button class=\"btn btn-sm btn-success me-1\" title=\"Unhide\"><i class=\"bi bi-file-lock\"></i></button>
                          </form>
                        {% else %}
                          <form method=\"post\" action=\"{{ path('quiz_hide', {'id': quiz.idquiz}) }}\" class=\"d-inline\">
                            <button class=\"btn btn-sm btn-secondary me-1\" title=\"Hide\"> <i class=\"bi bi-file-lock\"></i></button>
                          </form>
                        {% endif %}

                        <form method=\"post\" action=\"{{ path('quiz_delete', {'id': quiz.idquiz}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this quiz?');\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ quiz.idquiz) }}\">
                          <button class=\"btn btn-sm btn-danger\" title=\"Delete\"><i class=\"bi bi-trash\"></i></button>
                        </form>

                        {# Button to View Stats #}
                        <a href=\"{{ path('admin_quiz_stats', { id: quiz.idquiz }) }}\" class=\"btn btn-sm btn-info me-1\" title=\"View Stats\">
                          <i class=\"bi bi-bar-chart\"></i> Stats
                        </a>
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

<script>
  document.getElementById('quizSearchInput').addEventListener('input', function () {
    const searchTerm = this.value;
    fetch(`{{ path('quiz_search') }}?search=\${encodeURIComponent(searchTerm)}`)
      .then(response => response.json())
      .then(data => {
        const tableBody = document.getElementById('quizTableBody');
        tableBody.innerHTML = '';

        if (data.length === 0) {
          tableBody.innerHTML = `<tr><td colspan=\"4\" class=\"text-center text-muted\">No quizzes found.</td></tr>`;
          return;
        }

        data.forEach((quiz, index) => {
          tableBody.innerHTML += `
            <tr>
              <th scope=\"row\">\${index + 1}</th>
              <td>\${quiz.nom}</td>
              <td>\${quiz.datecreation}</td>
              <td class=\"text-center\">
                <a href=\"/quiz/\${quiz.idquiz}\" class=\"btn btn-sm btn-primary me-1\" title=\"View\"><i class=\"bi bi-eye\"></i></a>
                <a href=\"/quiz/\${quiz.idquiz}/edit\" class=\"btn btn-sm btn-warning me-1\" title=\"Edit\"><i class=\"bi bi-pencil-square\"></i></a>
                <form method=\"post\" action=\"/quiz/\${quiz.idquiz}/delete\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this quiz?');\">
                  <input type=\"hidden\" name=\"_token\" value=\"\${quiz.csrf_token}\">
                  <button class=\"btn btn-sm btn-danger\" title=\"Delete\"><i class=\"bi bi-trash\"></i></button>
                </form>
                <a href=\"/admin/quiz/\${quiz.idquiz}/stats\" class=\"btn btn-sm btn-info me-1\" title=\"View Stats\">
                  <i class=\"bi bi-bar-chart\"></i> Stats
                </a>
              </td>
            </tr>
          `;
        });
      });
  });
</script>
{% endblock %}", "quiz/ListQuiz.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\quiz\\ListQuiz.html.twig");
    }
}
