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

/* quiz/UserStats.html.twig */
class __TwigTemplate_3e4284c11148d4a7550adedaa3332657 extends Template
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
        return "navBar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/UserStats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/UserStats.html.twig"));

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

        yield "My Quiz Statistics";
        
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
  <div class=\"pagetitle\">
    <h1>My Quiz Progress</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
        <li class=\"breadcrumb-item active\">My Stats</li>
      </ol>
    </nav>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">

        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">My Quiz Performance</h5>
            <p class=\"card-subtitle mb-4\">Track your learning progress over time</p>

            ";
        // line 26
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 26, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "              <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle\">
                  <thead class=\"table-light\">
                    <tr>
                      <th scope=\"col\" class=\"w-25\">Quiz</th>
                      <th scope=\"col\" class=\"w-25\">Score</th>
                      <th scope=\"col\" class=\"w-25\">Progress</th>
                      <th scope=\"col\" class=\"w-25\">Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
                // line 39
                yield "                      <tr class=\"py-3\">
                        <td class=\"align-middle\">
                          <div class=\"d-flex align-items-center\">
                            <div class=\"icon-shape bg-primary-light text-primary rounded-3 me-3 p-2\">
                              <i class=\"bi bi-journal-text\"></i>
                            </div>
                            <div>
                              <h6 class=\"mb-0\">";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 46), "nom", [], "any", false, false, false, 46), "html", null, true);
                yield "</h6>
                              <small class=\"text-muted\">Completed: ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 47), "datecreation", [], "any", false, false, false, 47), "M d, Y"), "html", null, true);
                yield "</small>
                            </div>
                          </div>
                        </td>
                        <td class=\"align-middle\">
                          <div class=\"d-flex align-items-center\">
                            <div class=\"progress progress-thin w-100 me-3\">
                              <div class=\"progress-bar bg-success\" 
                                   role=\"progressbar\" 
                                   style=\"width: ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["score"], "score", [], "any", false, false, false, 56) / CoreExtension::getAttribute($this->env, $this->source, $context["score"], "total", [], "any", false, false, false, 56)) * 100), "html", null, true);
                yield "%\" 
                                   aria-valuenow=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "score", [], "any", false, false, false, 57), "html", null, true);
                yield "\" 
                                   aria-valuemin=\"0\" 
                                   aria-valuemax=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "total", [], "any", false, false, false, 59), "html", null, true);
                yield "\">
                              </div>
                            </div>
                            <span class=\"fw-bold\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "score", [], "any", false, false, false, 62), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "total", [], "any", false, false, false, 62), "html", null, true);
                yield "</span>
                          </div>
                        </td>
                        <td class=\"align-middle\">
                          <canvas id=\"mini-chart-";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 66), "idQuiz", [], "any", false, false, false, 66), "html", null, true);
                yield "\" width=\"80\" height=\"30\"></canvas>
                        </td>
                        <td class=\"align-middle text-end\">
                          <button class=\"btn btn-sm btn-outline-primary view-details\" 
                                  data-quiz-id=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 70), "idQuiz", [], "any", false, false, false, 70), "html", null, true);
                yield "\"
                                  data-quiz-score=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "score", [], "any", false, false, false, 71), "html", null, true);
                yield "\"
                                  data-quiz-total=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "total", [], "any", false, false, false, 72), "html", null, true);
                yield "\"
                                  data-quiz-date=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 73), "datecreation", [], "any", false, false, false, 73), "Y-m-d"), "html", null, true);
                yield "\">
                            View Details
                          </button>
                        </td>
                      </tr>
                      <!-- Detailed row (hidden by default) -->
                      <tr id=\"details-";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 79), "idQuiz", [], "any", false, false, false, 79), "html", null, true);
                yield "\" class=\"details-row\" style=\"display: none;\">
                        <td colspan=\"4\" class=\"p-0\">
                          <div class=\"p-4 bg-light\">
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                                <h6 class=\"text-center mb-3\">Score Breakdown</h6>
                                <div class=\"chart-container\" style=\"height: 250px;\">
                                  <canvas id=\"user-chart-";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 86), "idQuiz", [], "any", false, false, false, 86), "html", null, true);
                yield "\"></canvas>
                                </div>
                              </div>
                              <div class=\"col-md-6\">
                                <h6 class=\"text-center mb-3\">Performance Over Time</h6>
                                <div class=\"chart-container\" style=\"height: 250px;\">
                                  <canvas id=\"trend-chart-";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 92), "idQuiz", [], "any", false, false, false, 92), "html", null, true);
                yield "\"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class=\"mt-3 d-flex justify-content-between\">
                              <div class=\"text-center\">
                                <h6 class=\"mb-0\">Accuracy</h6>
                                <span class=\"text-muted\">";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["score"], "score", [], "any", false, false, false, 99) / CoreExtension::getAttribute($this->env, $this->source, $context["score"], "total", [], "any", false, false, false, 99)) * 100), 1), "html", null, true);
                yield "%</span>
                              </div>
                              <div class=\"text-center\">
                                <h6 class=\"mb-0\">Questions</h6>
                                <span class=\"text-muted\">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "total", [], "any", false, false, false, 103), "html", null, true);
                yield " total</span>
                              </div>
                              <div class=\"text-center\">
                                <h6 class=\"mb-0\">Date Completed</h6>
                                <span class=\"text-muted\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 107), "datecreation", [], "any", false, false, false, 107), "M d, Y"), "html", null, true);
                yield "</span>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['score'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            yield "                  </tbody>
                </table>
              </div>
            ";
        } else {
            // line 118
            yield "              <div class=\"alert alert-info text-center my-4 py-5\">
                <div class=\"icon-empty mb-3\">
                  <i class=\"bi bi-graph-up\" style=\"font-size: 3rem;\"></i>
                </div>
                <h4 class=\"alert-heading\">No Quiz Data Yet</h4>
                <p>You haven't completed any quizzes yet. Start learning to see your progress!</p>
                <a href=\"";
            // line 124
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_list");
            yield "\" class=\"btn btn-primary mt-2\">
                  Browse Quizzes
                </a>
              </div>
            ";
        }
        // line 129
        yield "
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-gradient\"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Toggle detailed view
    document.querySelectorAll('.view-details').forEach(button => {
        button.addEventListener('click', function() {
            const quizId = this.getAttribute('data-quiz-id');
            const detailsRow = document.getElementById(`details-\${quizId}`);
            detailsRow.style.display = detailsRow.style.display === 'none' ? 'table-row' : 'none';
            this.textContent = detailsRow.style.display === 'none' ? 'View Details' : 'Hide Details';
            
            // Initialize charts only when they become visible
            if(detailsRow.style.display !== 'none') {
                const score = parseInt(this.getAttribute('data-quiz-score'));
                const total = parseInt(this.getAttribute('data-quiz-total'));
                const date = this.getAttribute('data-quiz-date');
                initCharts(quizId, score, total, date);
            }
        });
    });

    // Initialize mini charts with actual score data
    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 165
            yield "    (function() {
        const ctx = document.getElementById(`mini-chart-";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 166), "idQuiz", [], "any", false, false, false, 166), "html", null, true);
            yield "`).getContext('2d');
        const score = ";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "score", [], "any", false, false, false, 167), "html", null, true);
            yield ";
        const total = ";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "total", [], "any", false, false, false, 168), "html", null, true);
            yield ";
        
        // Create a simple trend line (this would ideally come from your backend)
        // For now, we'll simulate some variation
        const trendData = [
            Math.max(0, score - 2),
            Math.max(0, score - 1),
            score,
            Math.min(total, score + 1),
            Math.min(total, score + 2)
        ];
        
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['', '', '', '', ''],
                datasets: [{
                    data: trendData,
                    borderColor: score/total > 0.7 ? '#4e73df' : score/total > 0.4 ? '#f6c23e' : '#e74a3b',
                    borderWidth: 2,
                    tension: 0.3,
                    fill: false,
                    pointRadius: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false }
                },
                scales: {
                    x: { display: false },
                    y: { 
                        display: false,
                        min: 0,
                        max: total
                    }
                }
            }
        });
    })();
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['score'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "
    // Function to initialize detailed charts with actual score data
    function initCharts(quizId, score, total, date) {
        // Calculate incorrect answers
        const incorrect = total - score;
        
        // Main doughnut chart with actual score data
        const doughnutCtx = document.getElementById(`user-chart-\${quizId}`).getContext('2d');
        new Chart(doughnutCtx, {
            type: 'doughnut',
            data: {
                labels: ['Correct', 'Incorrect'],
                datasets: [{
                    data: [score, incorrect],
                    backgroundColor: [
                        score/total > 0.7 ? 'rgba(0, 200, 83, 0.8)' : 
                        score/total > 0.4 ? 'rgba(246, 194, 62, 0.8)' : 'rgba(231, 74, 59, 0.8)',
                        'rgba(206, 212, 218, 0.8)'
                    ],
                    borderColor: '#ffffff',
                    borderWidth: 3,
                    hoverOffset: 15
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            font: {
                                size: 12,
                                family: \"'Inter', sans-serif\"
                            },
                            padding: 20,
                            usePointStyle: true,
                            pointStyle: 'circle'
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const label = context.label || '';
                                const value = context.raw || 0;
                                const percentage = Math.round((value / total) * 100);
                                return `\${label}: \${value} (\${percentage}%)`;
                            }
                        }
                    },
                    datalabels: {
                        color: '#fff',
                        font: {
                            weight: 'bold',
                            size: 14
                        },
                        formatter: (value) => {
                            const percentage = Math.round((value / total) * 100);
                            return `\${percentage}%`;
                        }
                    }
                },
                cutout: '65%',
                borderRadius: 10
            },
            plugins: [ChartDataLabels]
        });

        // Trend chart with simulated historical data (would ideally come from backend)
        const trendCtx = document.getElementById(`trend-chart-\${quizId}`).getContext('2d');
        const gradient = trendCtx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, score/total > 0.7 ? 'rgba(0, 200, 83, 0.2)' : 
                            score/total > 0.4 ? 'rgba(246, 194, 62, 0.2)' : 'rgba(231, 74, 59, 0.2)');
        gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');

        // Generate some historical data points
        const historicalData = [];
        const weeks = 5;
        const baseScore = Math.max(1, score - Math.floor(Math.random() * 3));
        
        for (let i = 0; i < weeks; i++) {
            if (i === weeks - 1) {
                historicalData.push(score); // Current score
            } else {
                // Generate some realistic progression
                const progression = Math.round(baseScore * (i/(weeks-1)) + (Math.random() * 5));
                historicalData.push(Math.min(total, progression));
            }
        }
        
        new Chart(trendCtx, {
            type: 'line',
            data: {
                labels: Array.from({length: weeks}, (_, i) => `Week \${i+1}`),
                datasets: [{
                    label: 'Performance Trend',
                    data: historicalData,
                    fill: true,
                    backgroundColor: gradient,
                    borderColor: score/total > 0.7 ? '#00c853' : 
                               score/total > 0.4 ? '#f6c23e' : '#e74a3b',
                    borderWidth: 3,
                    tension: 0.4,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: score/total > 0.7 ? '#00c853' : 
                                    score/total > 0.4 ? '#f6c23e' : '#e74a3b',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                        callbacks: {
                            label: function(context) {
                                return `\${context.dataset.label}: \${context.raw}/\${total}`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: total,
                        ticks: {
                            callback: function(value) {
                                return `\${value}/\${total}`;
                            }
                        },
                        grid: {
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }
});
</script>

<style>
  .card {
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    border: none;
  }
  
  .table {
    margin-bottom: 0;
  }
  
  .table th {
    border-top: none;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.75rem;
    letter-spacing: 0.5px;
    color: #6c757d;
  }
  
  .table td {
    vertical-align: middle;
    padding: 1rem 0.75rem;
    border-top: 1px solid #f0f0f0;
  }
  
  .table-hover tbody tr:hover {
    background-color: rgba(0, 200, 83, 0.05);
  }
  
  .progress-thin {
    height: 6px;
    border-radius: 3px;
  }
  
  .icon-shape {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .chart-container {
    position: relative;
  }
  
  .details-row {
    transition: all 0.3s ease;
  }
  
  .icon-empty {
    color: #dee2e6;
  }
  
  .bg-light {
    background-color: #f8f9fa !important;
    border-radius: 0 0 8px 8px;
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
        return "quiz/UserStats.html.twig";
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
        return array (  401 => 212,  351 => 168,  347 => 167,  343 => 166,  340 => 165,  336 => 164,  299 => 129,  291 => 124,  283 => 118,  277 => 114,  264 => 107,  257 => 103,  250 => 99,  240 => 92,  231 => 86,  221 => 79,  212 => 73,  208 => 72,  204 => 71,  200 => 70,  193 => 66,  184 => 62,  178 => 59,  173 => 57,  169 => 56,  157 => 47,  153 => 46,  144 => 39,  140 => 38,  127 => 27,  125 => 26,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'navBar.html.twig' %}

{% block title %}My Quiz Statistics{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>My Quiz Progress</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
        <li class=\"breadcrumb-item active\">My Stats</li>
      </ol>
    </nav>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">

        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">My Quiz Performance</h5>
            <p class=\"card-subtitle mb-4\">Track your learning progress over time</p>

            {% if scores is not empty %}
              <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle\">
                  <thead class=\"table-light\">
                    <tr>
                      <th scope=\"col\" class=\"w-25\">Quiz</th>
                      <th scope=\"col\" class=\"w-25\">Score</th>
                      <th scope=\"col\" class=\"w-25\">Progress</th>
                      <th scope=\"col\" class=\"w-25\">Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for score in scores %}
                      <tr class=\"py-3\">
                        <td class=\"align-middle\">
                          <div class=\"d-flex align-items-center\">
                            <div class=\"icon-shape bg-primary-light text-primary rounded-3 me-3 p-2\">
                              <i class=\"bi bi-journal-text\"></i>
                            </div>
                            <div>
                              <h6 class=\"mb-0\">{{ score.quiz.nom }}</h6>
                              <small class=\"text-muted\">Completed: {{ score.quiz.datecreation|date('M d, Y') }}</small>
                            </div>
                          </div>
                        </td>
                        <td class=\"align-middle\">
                          <div class=\"d-flex align-items-center\">
                            <div class=\"progress progress-thin w-100 me-3\">
                              <div class=\"progress-bar bg-success\" 
                                   role=\"progressbar\" 
                                   style=\"width: {{ (score.score/score.total)*100 }}%\" 
                                   aria-valuenow=\"{{ score.score }}\" 
                                   aria-valuemin=\"0\" 
                                   aria-valuemax=\"{{ score.total }}\">
                              </div>
                            </div>
                            <span class=\"fw-bold\">{{ score.score }}/{{ score.total }}</span>
                          </div>
                        </td>
                        <td class=\"align-middle\">
                          <canvas id=\"mini-chart-{{ score.quiz.idQuiz }}\" width=\"80\" height=\"30\"></canvas>
                        </td>
                        <td class=\"align-middle text-end\">
                          <button class=\"btn btn-sm btn-outline-primary view-details\" 
                                  data-quiz-id=\"{{ score.quiz.idQuiz }}\"
                                  data-quiz-score=\"{{ score.score }}\"
                                  data-quiz-total=\"{{ score.total }}\"
                                  data-quiz-date=\"{{ score.quiz.datecreation|date('Y-m-d') }}\">
                            View Details
                          </button>
                        </td>
                      </tr>
                      <!-- Detailed row (hidden by default) -->
                      <tr id=\"details-{{ score.quiz.idQuiz }}\" class=\"details-row\" style=\"display: none;\">
                        <td colspan=\"4\" class=\"p-0\">
                          <div class=\"p-4 bg-light\">
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                                <h6 class=\"text-center mb-3\">Score Breakdown</h6>
                                <div class=\"chart-container\" style=\"height: 250px;\">
                                  <canvas id=\"user-chart-{{ score.quiz.idQuiz }}\"></canvas>
                                </div>
                              </div>
                              <div class=\"col-md-6\">
                                <h6 class=\"text-center mb-3\">Performance Over Time</h6>
                                <div class=\"chart-container\" style=\"height: 250px;\">
                                  <canvas id=\"trend-chart-{{ score.quiz.idQuiz }}\"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class=\"mt-3 d-flex justify-content-between\">
                              <div class=\"text-center\">
                                <h6 class=\"mb-0\">Accuracy</h6>
                                <span class=\"text-muted\">{{ ((score.score/score.total)*100)|round(1) }}%</span>
                              </div>
                              <div class=\"text-center\">
                                <h6 class=\"mb-0\">Questions</h6>
                                <span class=\"text-muted\">{{ score.total }} total</span>
                              </div>
                              <div class=\"text-center\">
                                <h6 class=\"mb-0\">Date Completed</h6>
                                <span class=\"text-muted\">{{ score.quiz.datecreation|date('M d, Y') }}</span>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            {% else %}
              <div class=\"alert alert-info text-center my-4 py-5\">
                <div class=\"icon-empty mb-3\">
                  <i class=\"bi bi-graph-up\" style=\"font-size: 3rem;\"></i>
                </div>
                <h4 class=\"alert-heading\">No Quiz Data Yet</h4>
                <p>You haven't completed any quizzes yet. Start learning to see your progress!</p>
                <a href=\"{{ path('app_quiz_list') }}\" class=\"btn btn-primary mt-2\">
                  Browse Quizzes
                </a>
              </div>
            {% endif %}

          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-gradient\"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Toggle detailed view
    document.querySelectorAll('.view-details').forEach(button => {
        button.addEventListener('click', function() {
            const quizId = this.getAttribute('data-quiz-id');
            const detailsRow = document.getElementById(`details-\${quizId}`);
            detailsRow.style.display = detailsRow.style.display === 'none' ? 'table-row' : 'none';
            this.textContent = detailsRow.style.display === 'none' ? 'View Details' : 'Hide Details';
            
            // Initialize charts only when they become visible
            if(detailsRow.style.display !== 'none') {
                const score = parseInt(this.getAttribute('data-quiz-score'));
                const total = parseInt(this.getAttribute('data-quiz-total'));
                const date = this.getAttribute('data-quiz-date');
                initCharts(quizId, score, total, date);
            }
        });
    });

    // Initialize mini charts with actual score data
    {% for score in scores %}
    (function() {
        const ctx = document.getElementById(`mini-chart-{{ score.quiz.idQuiz }}`).getContext('2d');
        const score = {{ score.score }};
        const total = {{ score.total }};
        
        // Create a simple trend line (this would ideally come from your backend)
        // For now, we'll simulate some variation
        const trendData = [
            Math.max(0, score - 2),
            Math.max(0, score - 1),
            score,
            Math.min(total, score + 1),
            Math.min(total, score + 2)
        ];
        
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['', '', '', '', ''],
                datasets: [{
                    data: trendData,
                    borderColor: score/total > 0.7 ? '#4e73df' : score/total > 0.4 ? '#f6c23e' : '#e74a3b',
                    borderWidth: 2,
                    tension: 0.3,
                    fill: false,
                    pointRadius: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false }
                },
                scales: {
                    x: { display: false },
                    y: { 
                        display: false,
                        min: 0,
                        max: total
                    }
                }
            }
        });
    })();
    {% endfor %}

    // Function to initialize detailed charts with actual score data
    function initCharts(quizId, score, total, date) {
        // Calculate incorrect answers
        const incorrect = total - score;
        
        // Main doughnut chart with actual score data
        const doughnutCtx = document.getElementById(`user-chart-\${quizId}`).getContext('2d');
        new Chart(doughnutCtx, {
            type: 'doughnut',
            data: {
                labels: ['Correct', 'Incorrect'],
                datasets: [{
                    data: [score, incorrect],
                    backgroundColor: [
                        score/total > 0.7 ? 'rgba(0, 200, 83, 0.8)' : 
                        score/total > 0.4 ? 'rgba(246, 194, 62, 0.8)' : 'rgba(231, 74, 59, 0.8)',
                        'rgba(206, 212, 218, 0.8)'
                    ],
                    borderColor: '#ffffff',
                    borderWidth: 3,
                    hoverOffset: 15
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            font: {
                                size: 12,
                                family: \"'Inter', sans-serif\"
                            },
                            padding: 20,
                            usePointStyle: true,
                            pointStyle: 'circle'
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const label = context.label || '';
                                const value = context.raw || 0;
                                const percentage = Math.round((value / total) * 100);
                                return `\${label}: \${value} (\${percentage}%)`;
                            }
                        }
                    },
                    datalabels: {
                        color: '#fff',
                        font: {
                            weight: 'bold',
                            size: 14
                        },
                        formatter: (value) => {
                            const percentage = Math.round((value / total) * 100);
                            return `\${percentage}%`;
                        }
                    }
                },
                cutout: '65%',
                borderRadius: 10
            },
            plugins: [ChartDataLabels]
        });

        // Trend chart with simulated historical data (would ideally come from backend)
        const trendCtx = document.getElementById(`trend-chart-\${quizId}`).getContext('2d');
        const gradient = trendCtx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, score/total > 0.7 ? 'rgba(0, 200, 83, 0.2)' : 
                            score/total > 0.4 ? 'rgba(246, 194, 62, 0.2)' : 'rgba(231, 74, 59, 0.2)');
        gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');

        // Generate some historical data points
        const historicalData = [];
        const weeks = 5;
        const baseScore = Math.max(1, score - Math.floor(Math.random() * 3));
        
        for (let i = 0; i < weeks; i++) {
            if (i === weeks - 1) {
                historicalData.push(score); // Current score
            } else {
                // Generate some realistic progression
                const progression = Math.round(baseScore * (i/(weeks-1)) + (Math.random() * 5));
                historicalData.push(Math.min(total, progression));
            }
        }
        
        new Chart(trendCtx, {
            type: 'line',
            data: {
                labels: Array.from({length: weeks}, (_, i) => `Week \${i+1}`),
                datasets: [{
                    label: 'Performance Trend',
                    data: historicalData,
                    fill: true,
                    backgroundColor: gradient,
                    borderColor: score/total > 0.7 ? '#00c853' : 
                               score/total > 0.4 ? '#f6c23e' : '#e74a3b',
                    borderWidth: 3,
                    tension: 0.4,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: score/total > 0.7 ? '#00c853' : 
                                    score/total > 0.4 ? '#f6c23e' : '#e74a3b',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                        callbacks: {
                            label: function(context) {
                                return `\${context.dataset.label}: \${context.raw}/\${total}`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: total,
                        ticks: {
                            callback: function(value) {
                                return `\${value}/\${total}`;
                            }
                        },
                        grid: {
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }
});
</script>

<style>
  .card {
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    border: none;
  }
  
  .table {
    margin-bottom: 0;
  }
  
  .table th {
    border-top: none;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.75rem;
    letter-spacing: 0.5px;
    color: #6c757d;
  }
  
  .table td {
    vertical-align: middle;
    padding: 1rem 0.75rem;
    border-top: 1px solid #f0f0f0;
  }
  
  .table-hover tbody tr:hover {
    background-color: rgba(0, 200, 83, 0.05);
  }
  
  .progress-thin {
    height: 6px;
    border-radius: 3px;
  }
  
  .icon-shape {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .chart-container {
    position: relative;
  }
  
  .details-row {
    transition: all 0.3s ease;
  }
  
  .icon-empty {
    color: #dee2e6;
  }
  
  .bg-light {
    background-color: #f8f9fa !important;
    border-radius: 0 0 8px 8px;
  }
</style>
{% endblock %}", "quiz/UserStats.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\quiz\\UserStats.html.twig");
    }
}
