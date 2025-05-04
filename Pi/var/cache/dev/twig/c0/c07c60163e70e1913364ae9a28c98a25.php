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

/* quiz/AdminStats.html.twig */
class __TwigTemplate_5b039356460fb5262345d888624db603 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/AdminStats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/AdminStats.html.twig"));

        $this->parent = $this->loadTemplate("navBar.html.twig", "quiz/AdminStats.html.twig", 1);
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

        yield "Quiz Global Statistics";
        
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
    <h1>Global Quiz Statistics</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
        <li class=\"breadcrumb-item active\">Admin Stats</li>
      </ol>
    </nav>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <!-- Summary Cards -->
      <div class=\"col-lg-3\">
        <div class=\"card info-card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Total Attempts</h5>
            <div class=\"d-flex align-items-center\">
              <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center bg-primary-light\">
                <i class=\"bi bi-people\"></i>
              </div>
              <div class=\"ps-3\">
                <h6>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-3\">
        <div class=\"card info-card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Success Rate</h5>
            <div class=\"d-flex align-items-center\">
              <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center bg-success-light\">
                <i class=\"bi bi-check-circle\"></i>
              </div>
              <div class=\"ps-3\">
                <h6>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successRate"]) || array_key_exists("successRate", $context) ? $context["successRate"] : (function () { throw new RuntimeError('Variable "successRate" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "%</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-3\">
        <div class=\"card info-card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Total Passes</h5>
            <div class=\"d-flex align-items-center\">
              <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center bg-info-light\">
                <i class=\"bi bi-emoji-smile\"></i>
              </div>
              <div class=\"ps-3\">
                <h6>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["passed"]) || array_key_exists("passed", $context) ? $context["passed"] : (function () { throw new RuntimeError('Variable "passed" does not exist.', 61, $this->source); })()), "html", null, true);
        yield "</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-3\">
        <div class=\"card info-card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Total Fails</h5>
            <div class=\"d-flex align-items-center\">
              <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center bg-warning-light\">
                <i class=\"bi bi-emoji-frown\"></i>
              </div>
              <div class=\"ps-3\">
                <h6>";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["failed"]) || array_key_exists("failed", $context) ? $context["failed"] : (function () { throw new RuntimeError('Variable "failed" does not exist.', 77, $this->source); })()), "html", null, true);
        yield "</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Quiz Performance Overview</h5>
            
            ";
        // line 91
        if ((isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 91, $this->source); })())) {
            // line 92
            yield "              <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                  <div class=\"chart-container\" style=\"height: 300px;\">
                    <canvas id=\"performanceChart\"></canvas>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"chart-container\" style=\"height: 300px;\">
                    <canvas id=\"trendChart\"></canvas>
                  </div>
                </div>
              </div>

              <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle\">
                  <thead class=\"table-light\">
                    <tr>
                      <th scope=\"col\">Quiz</th>
                      <th scope=\"col\">Attempts</th>
                      <th scope=\"col\">Avg. Score</th>
                      <th scope=\"col\">Pass Rate</th>
                      <th scope=\"col\">Performance</th>
                      <th scope=\"col\">Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class=\"d-flex align-items-center\">
                          <div class=\"icon-shape bg-primary-light text-primary rounded-3 me-3 p-2\">
                            <i class=\"bi bi-journal-text\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-0\">";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 125, $this->source); })()), "nom", [], "any", false, false, false, 125), "html", null, true);
            yield "</h6>
                            <small class=\"text-muted\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 126, $this->source); })()), "questions", [], "any", false, false, false, 126)), "html", null, true);
            yield " questions</small>
                          </div>
                        </div>
                      </td>
                      <td class=\"fw-bold\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 130, $this->source); })()), "html", null, true);
            yield "</td>
                      <td>
                        <span class=\"badge bg-primary rounded-pill\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["average"]) || array_key_exists("average", $context) ? $context["average"] : (function () { throw new RuntimeError('Variable "average" does not exist.', 132, $this->source); })()), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 132, $this->source); })()), "questions", [], "any", false, false, false, 132)), "html", null, true);
            yield "</span>
                      </td>
                      <td>
                        <div class=\"d-flex align-items-center\">
                          <div class=\"progress progress-thin w-100 me-2\">
                            <div class=\"progress-bar bg-success\" 
                                 role=\"progressbar\" 
                                 style=\"width: ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successRate"]) || array_key_exists("successRate", $context) ? $context["successRate"] : (function () { throw new RuntimeError('Variable "successRate" does not exist.', 139, $this->source); })()), "html", null, true);
            yield "%\" 
                                 aria-valuenow=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successRate"]) || array_key_exists("successRate", $context) ? $context["successRate"] : (function () { throw new RuntimeError('Variable "successRate" does not exist.', 140, $this->source); })()), "html", null, true);
            yield "\" 
                                 aria-valuemin=\"0\" 
                                 aria-valuemax=\"100\">
                            </div>
                          </div>
                          <span class=\"fw-bold\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successRate"]) || array_key_exists("successRate", $context) ? $context["successRate"] : (function () { throw new RuntimeError('Variable "successRate" does not exist.', 145, $this->source); })()), "html", null, true);
            yield "%</span>
                        </div>
                      </td>
                      <td>
                        <canvas id=\"mini-chart\" width=\"80\" height=\"30\"></canvas>
                      </td>
                      <td class=\"text-end\">
                        <a href=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_quiz_stats", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 152, $this->source); })()), "idQuiz", [], "any", false, false, false, 152)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                          View Details
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Additional Statistics -->
              <div class=\"row mt-4\">
                <div class=\"col-md-4\">
                  <div class=\"card\">
                    <div class=\"card-body\">
                      <h6 class=\"card-title\">Score Distribution</h6>
                      <div class=\"chart-container\" style=\"height: 250px;\">
                        <canvas id=\"distributionChart\"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4\">
                  <div class=\"card\">
                    <div class=\"card-body\">
                      <h6 class=\"card-title\">Time Analysis</h6>
                      <div class=\"chart-container\" style=\"height: 250px;\">
                        <canvas id=\"timeChart\"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4\">
                  <div class=\"card\">
                    <div class=\"card-body\">
                      <h6 class=\"card-title\">Recent Activity</h6>
                      <div class=\"activity-feed\">
                        ";
            // line 188
            if ((array_key_exists("recentAttempts", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["recentAttempts"]) || array_key_exists("recentAttempts", $context) ? $context["recentAttempts"] : (function () { throw new RuntimeError('Variable "recentAttempts" does not exist.', 188, $this->source); })())) > 0))) {
                // line 189
                yield "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["recentAttempts"]) || array_key_exists("recentAttempts", $context) ? $context["recentAttempts"] : (function () { throw new RuntimeError('Variable "recentAttempts" does not exist.', 189, $this->source); })()), 0, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["attempt"]) {
                    // line 190
                    yield "                          <div class=\"activity-item d-flex\">
                            <div class=\"activity-badge\">
                              <i class=\"bi bi-person-circle\"></i>
                            </div>
                            <div class=\"activity-content\">
                              <span class=\"fw-bold\">";
                    // line 195
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["attempt"], "user", [], "any", false, false, false, 195), "username", [], "any", false, false, false, 195), "html", null, true);
                    yield "</span>
                              <span class=\"text-muted\">scored ";
                    // line 196
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attempt"], "score", [], "any", false, false, false, 196), "html", null, true);
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attempt"], "total", [], "any", false, false, false, 196), "html", null, true);
                    yield "</span>
                              <small class=\"d-block text-muted\">
                                ";
                    // line 198
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["attempt"], "timestamp", [], "any", true, true, false, 198)) {
                        // line 199
                        yield "                                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["attempt"], "timestamp", [], "any", false, false, false, 199), "M d, H:i"), "html", null, true);
                        yield "
                                ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source,                     // line 200
$context["attempt"], "date", [], "any", true, true, false, 200)) {
                        // line 201
                        yield "                                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["attempt"], "date", [], "any", false, false, false, 201), "M d, H:i"), "html", null, true);
                        yield "
                                ";
                    }
                    // line 203
                    yield "                              </small>
                            </div>
                          </div>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['attempt'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                yield "                        ";
            } else {
                // line 208
                yield "                          <div class=\"text-muted\">No recent activity</div>
                        ";
            }
            // line 210
            yield "                      </div>
                    </div>
                  </div>
                </div>
              </div>
            ";
        } else {
            // line 216
            yield "              <div class=\"alert alert-warning text-center py-5\">
                <div class=\"icon-empty mb-3\">
                  <i class=\"bi bi-graph-up\" style=\"font-size: 3rem;\"></i>
                </div>
                <h4 class=\"alert-heading\">No Statistics Available</h4>
                <p>This quiz hasn't been attempted yet.</p>
              </div>
            ";
        }
        // line 224
        yield "          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Include Chart.js with plugins -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-gradient\"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    ";
        // line 238
        if ((isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 238, $this->source); })())) {
            // line 239
            yield "    // Performance Chart (Doughnut)
    const performanceCtx = document.getElementById('performanceChart').getContext('2d');
    new Chart(performanceCtx, {
        type: 'doughnut',
        data: {
            labels: ['Passed', 'Failed'],
            datasets: [{
                data: [";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["passed"]) || array_key_exists("passed", $context) ? $context["passed"] : (function () { throw new RuntimeError('Variable "passed" does not exist.', 246, $this->source); })()), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["failed"]) || array_key_exists("failed", $context) ? $context["failed"] : (function () { throw new RuntimeError('Variable "failed" does not exist.', 246, $this->source); })()), "html", null, true);
            yield "],
                backgroundColor: [
                    'rgba(40, 167, 69, 0.8)',
                    'rgba(220, 53, 69, 0.8)'
                ],
                borderColor: '#fff',
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
                        padding: 20
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const label = context.label || '';
                            const value = context.raw || 0;
                            const percentage = Math.round((value / ";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 275, $this->source); })()), "html", null, true);
            yield ") * 100);
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
                        const percentage = Math.round((value / ";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 287, $this->source); })()), "html", null, true);
            yield ") * 100);
                        return `\${percentage}%`;
                    }
                }
            },
            cutout: '65%',
            borderRadius: 10
        },
        plugins: [ChartDataLabels]
    });

    // Trend Chart (Line with gradient)
    const trendCtx = document.getElementById('trendChart').getContext('2d');
    const gradient = trendCtx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(13, 110, 253, 0.5)');
    gradient.addColorStop(1, 'rgba(13, 110, 253, 0)');

    // Generate trend data (simulated)
    const trendData = [
        Math.max(0, ";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successRate"]) || array_key_exists("successRate", $context) ? $context["successRate"] : (function () { throw new RuntimeError('Variable "successRate" does not exist.', 306, $this->source); })()), "html", null, true);
            yield " - 40 + Math.random() * 20),
        Math.max(0, ";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successRate"]) || array_key_exists("successRate", $context) ? $context["successRate"] : (function () { throw new RuntimeError('Variable "successRate" does not exist.', 307, $this->source); })()), "html", null, true);
            yield " - 25 + Math.random() * 15),
        Math.max(0, ";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successRate"]) || array_key_exists("successRate", $context) ? $context["successRate"] : (function () { throw new RuntimeError('Variable "successRate" does not exist.', 308, $this->source); })()), "html", null, true);
            yield " - 15 + Math.random() * 10),
        Math.max(0, ";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successRate"]) || array_key_exists("successRate", $context) ? $context["successRate"] : (function () { throw new RuntimeError('Variable "successRate" does not exist.', 309, $this->source); })()), "html", null, true);
            yield " - 5 + Math.random() * 10),
        ";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successRate"]) || array_key_exists("successRate", $context) ? $context["successRate"] : (function () { throw new RuntimeError('Variable "successRate" does not exist.', 310, $this->source); })()), "html", null, true);
            yield "
    ];
    
    new Chart(trendCtx, {
        type: 'line',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Current'],
            datasets: [{
                label: 'Pass Rate Trend',
                data: trendData,
                fill: true,
                backgroundColor: gradient,
                borderColor: '#0d6efd',
                borderWidth: 3,
                tension: 0.4,
                pointBackgroundColor: '#fff',
                pointBorderColor: '#0d6efd',
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
                    callbacks: {
                        label: function(context) {
                            return `\${context.parsed.y}% pass rate`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    ticks: {
                        callback: function(value) {
                            return `\${value}%`;
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

    // Mini chart in table
    const miniCtx = document.getElementById('mini-chart').getContext('2d');
    new Chart(miniCtx, {
        type: 'line',
        data: {
            labels: ['', '', '', '', ''],
            datasets: [{
                data: trendData,
                borderColor: '#0d6efd',
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
                    max: 100
                }
            }
        }
    });

    // Score Distribution Chart (Bar)
    const distributionCtx = document.getElementById('distributionChart').getContext('2d');
    new Chart(distributionCtx, {
        type: 'bar',
        data: {
            labels: ['0-20%', '21-40%', '41-60%', '61-80%', '81-100%'],
            datasets: [{
                label: 'Number of Attempts',
                data: [15, 20, 35, 25, 15], // Simulated data
                backgroundColor: [
                    'rgba(220, 53, 69, 0.7)',
                    'rgba(253, 126, 20, 0.7)',
                    'rgba(255, 193, 7, 0.7)',
                    'rgba(25, 135, 84, 0.7)',
                    'rgba(13, 110, 253, 0.7)'
                ],
                borderColor: '#fff',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            }
        }
    });

    // Time Analysis Chart (Radar)
    const timeCtx = document.getElementById('timeChart').getContext('2d');
    new Chart(timeCtx, {
        type: 'radar',
        data: {
            labels: ['Morning', 'Afternoon', 'Evening', 'Night'],
            datasets: [{
                label: 'Attempts by Time',
                data: [25, 40, 30, 15], // Simulated data
                backgroundColor: 'rgba(111, 66, 193, 0.2)',
                borderColor: 'rgba(111, 66, 193, 1)',
                pointBackgroundColor: 'rgba(111, 66, 193, 1)',
                pointBorderColor: '#fff',
                pointHoverRadius: 5
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                r: {
                    angleLines: {
                        display: true
                    },
                    suggestedMin: 0
                }
            }
        }
    });
    ";
        }
        // line 476
        yield "});
</script>

<style>
  .card {
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    border: none;
    margin-bottom: 24px;
  }
  
  .info-card {
    transition: transform 0.3s ease;
  }
  
  .info-card:hover {
    transform: translateY(-5px);
  }
  
  .card-icon {
    font-size: 1.5rem;
    width: 56px;
    height: 56px;
  }
  
  .bg-primary-light {
    background-color: rgba(13, 110, 253, 0.1);
    color: #0d6efd;
  }
  
  .bg-success-light {
    background-color: rgba(25, 135, 84, 0.1);
    color: #198754;
  }
  
  .bg-info-light {
    background-color: rgba(13, 202, 240, 0.1);
    color: #0dcaf0;
  }
  
  .bg-warning-light {
    background-color: rgba(255, 193, 7, 0.1);
    color: #ffc107;
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
  
  .activity-feed {
    padding-left: 10px;
    border-left: 2px solid #e9ecef;
  }
  
  .activity-item {
    padding: 8px 0;
    position: relative;
  }
  
  .activity-badge {
    position: absolute;
    left: -20px;
    background: #fff;
    border: 2px solid #e9ecef;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #6c757d;
  }
  
  .activity-content {
    padding-left: 40px;
  }
  
  .icon-empty {
    color: #dee2e6;
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
        return "quiz/AdminStats.html.twig";
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
        return array (  685 => 476,  516 => 310,  512 => 309,  508 => 308,  504 => 307,  500 => 306,  478 => 287,  463 => 275,  429 => 246,  420 => 239,  418 => 238,  402 => 224,  392 => 216,  384 => 210,  380 => 208,  377 => 207,  368 => 203,  362 => 201,  360 => 200,  355 => 199,  353 => 198,  346 => 196,  342 => 195,  335 => 190,  330 => 189,  328 => 188,  289 => 152,  279 => 145,  271 => 140,  267 => 139,  255 => 132,  250 => 130,  243 => 126,  239 => 125,  204 => 92,  202 => 91,  185 => 77,  166 => 61,  147 => 45,  128 => 29,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'navBar.html.twig' %}

{% block title %}Quiz Global Statistics{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>Global Quiz Statistics</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
        <li class=\"breadcrumb-item active\">Admin Stats</li>
      </ol>
    </nav>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <!-- Summary Cards -->
      <div class=\"col-lg-3\">
        <div class=\"card info-card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Total Attempts</h5>
            <div class=\"d-flex align-items-center\">
              <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center bg-primary-light\">
                <i class=\"bi bi-people\"></i>
              </div>
              <div class=\"ps-3\">
                <h6>{{ total }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-3\">
        <div class=\"card info-card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Success Rate</h5>
            <div class=\"d-flex align-items-center\">
              <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center bg-success-light\">
                <i class=\"bi bi-check-circle\"></i>
              </div>
              <div class=\"ps-3\">
                <h6>{{ successRate }}%</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-3\">
        <div class=\"card info-card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Total Passes</h5>
            <div class=\"d-flex align-items-center\">
              <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center bg-info-light\">
                <i class=\"bi bi-emoji-smile\"></i>
              </div>
              <div class=\"ps-3\">
                <h6>{{ passed }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-3\">
        <div class=\"card info-card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Total Fails</h5>
            <div class=\"d-flex align-items-center\">
              <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center bg-warning-light\">
                <i class=\"bi bi-emoji-frown\"></i>
              </div>
              <div class=\"ps-3\">
                <h6>{{ failed }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Quiz Performance Overview</h5>
            
            {% if quiz %}
              <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                  <div class=\"chart-container\" style=\"height: 300px;\">
                    <canvas id=\"performanceChart\"></canvas>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"chart-container\" style=\"height: 300px;\">
                    <canvas id=\"trendChart\"></canvas>
                  </div>
                </div>
              </div>

              <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle\">
                  <thead class=\"table-light\">
                    <tr>
                      <th scope=\"col\">Quiz</th>
                      <th scope=\"col\">Attempts</th>
                      <th scope=\"col\">Avg. Score</th>
                      <th scope=\"col\">Pass Rate</th>
                      <th scope=\"col\">Performance</th>
                      <th scope=\"col\">Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class=\"d-flex align-items-center\">
                          <div class=\"icon-shape bg-primary-light text-primary rounded-3 me-3 p-2\">
                            <i class=\"bi bi-journal-text\"></i>
                          </div>
                          <div>
                            <h6 class=\"mb-0\">{{ quiz.nom }}</h6>
                            <small class=\"text-muted\">{{ quiz.questions|length }} questions</small>
                          </div>
                        </div>
                      </td>
                      <td class=\"fw-bold\">{{ total }}</td>
                      <td>
                        <span class=\"badge bg-primary rounded-pill\">{{ average }}/{{ quiz.questions|length }}</span>
                      </td>
                      <td>
                        <div class=\"d-flex align-items-center\">
                          <div class=\"progress progress-thin w-100 me-2\">
                            <div class=\"progress-bar bg-success\" 
                                 role=\"progressbar\" 
                                 style=\"width: {{ successRate }}%\" 
                                 aria-valuenow=\"{{ successRate }}\" 
                                 aria-valuemin=\"0\" 
                                 aria-valuemax=\"100\">
                            </div>
                          </div>
                          <span class=\"fw-bold\">{{ successRate }}%</span>
                        </div>
                      </td>
                      <td>
                        <canvas id=\"mini-chart\" width=\"80\" height=\"30\"></canvas>
                      </td>
                      <td class=\"text-end\">
                        <a href=\"{{ path('admin_quiz_stats', {'id': quiz.idQuiz}) }}\" class=\"btn btn-sm btn-outline-primary\">
                          View Details
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Additional Statistics -->
              <div class=\"row mt-4\">
                <div class=\"col-md-4\">
                  <div class=\"card\">
                    <div class=\"card-body\">
                      <h6 class=\"card-title\">Score Distribution</h6>
                      <div class=\"chart-container\" style=\"height: 250px;\">
                        <canvas id=\"distributionChart\"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4\">
                  <div class=\"card\">
                    <div class=\"card-body\">
                      <h6 class=\"card-title\">Time Analysis</h6>
                      <div class=\"chart-container\" style=\"height: 250px;\">
                        <canvas id=\"timeChart\"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4\">
                  <div class=\"card\">
                    <div class=\"card-body\">
                      <h6 class=\"card-title\">Recent Activity</h6>
                      <div class=\"activity-feed\">
                        {% if recentAttempts is defined and recentAttempts|length > 0 %}
                          {% for attempt in recentAttempts|slice(0, 5) %}
                          <div class=\"activity-item d-flex\">
                            <div class=\"activity-badge\">
                              <i class=\"bi bi-person-circle\"></i>
                            </div>
                            <div class=\"activity-content\">
                              <span class=\"fw-bold\">{{ attempt.user.username }}</span>
                              <span class=\"text-muted\">scored {{ attempt.score }}/{{ attempt.total }}</span>
                              <small class=\"d-block text-muted\">
                                {% if attempt.timestamp is defined %}
                                  {{ attempt.timestamp|date('M d, H:i') }}
                                {% elseif attempt.date is defined %}
                                  {{ attempt.date|date('M d, H:i') }}
                                {% endif %}
                              </small>
                            </div>
                          </div>
                          {% endfor %}
                        {% else %}
                          <div class=\"text-muted\">No recent activity</div>
                        {% endif %}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            {% else %}
              <div class=\"alert alert-warning text-center py-5\">
                <div class=\"icon-empty mb-3\">
                  <i class=\"bi bi-graph-up\" style=\"font-size: 3rem;\"></i>
                </div>
                <h4 class=\"alert-heading\">No Statistics Available</h4>
                <p>This quiz hasn't been attempted yet.</p>
              </div>
            {% endif %}
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Include Chart.js with plugins -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-gradient\"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    {% if quiz %}
    // Performance Chart (Doughnut)
    const performanceCtx = document.getElementById('performanceChart').getContext('2d');
    new Chart(performanceCtx, {
        type: 'doughnut',
        data: {
            labels: ['Passed', 'Failed'],
            datasets: [{
                data: [{{ passed }}, {{ failed }}],
                backgroundColor: [
                    'rgba(40, 167, 69, 0.8)',
                    'rgba(220, 53, 69, 0.8)'
                ],
                borderColor: '#fff',
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
                        padding: 20
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const label = context.label || '';
                            const value = context.raw || 0;
                            const percentage = Math.round((value / {{ total }}) * 100);
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
                        const percentage = Math.round((value / {{ total }}) * 100);
                        return `\${percentage}%`;
                    }
                }
            },
            cutout: '65%',
            borderRadius: 10
        },
        plugins: [ChartDataLabels]
    });

    // Trend Chart (Line with gradient)
    const trendCtx = document.getElementById('trendChart').getContext('2d');
    const gradient = trendCtx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(13, 110, 253, 0.5)');
    gradient.addColorStop(1, 'rgba(13, 110, 253, 0)');

    // Generate trend data (simulated)
    const trendData = [
        Math.max(0, {{ successRate }} - 40 + Math.random() * 20),
        Math.max(0, {{ successRate }} - 25 + Math.random() * 15),
        Math.max(0, {{ successRate }} - 15 + Math.random() * 10),
        Math.max(0, {{ successRate }} - 5 + Math.random() * 10),
        {{ successRate }}
    ];
    
    new Chart(trendCtx, {
        type: 'line',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Current'],
            datasets: [{
                label: 'Pass Rate Trend',
                data: trendData,
                fill: true,
                backgroundColor: gradient,
                borderColor: '#0d6efd',
                borderWidth: 3,
                tension: 0.4,
                pointBackgroundColor: '#fff',
                pointBorderColor: '#0d6efd',
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
                    callbacks: {
                        label: function(context) {
                            return `\${context.parsed.y}% pass rate`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    ticks: {
                        callback: function(value) {
                            return `\${value}%`;
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

    // Mini chart in table
    const miniCtx = document.getElementById('mini-chart').getContext('2d');
    new Chart(miniCtx, {
        type: 'line',
        data: {
            labels: ['', '', '', '', ''],
            datasets: [{
                data: trendData,
                borderColor: '#0d6efd',
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
                    max: 100
                }
            }
        }
    });

    // Score Distribution Chart (Bar)
    const distributionCtx = document.getElementById('distributionChart').getContext('2d');
    new Chart(distributionCtx, {
        type: 'bar',
        data: {
            labels: ['0-20%', '21-40%', '41-60%', '61-80%', '81-100%'],
            datasets: [{
                label: 'Number of Attempts',
                data: [15, 20, 35, 25, 15], // Simulated data
                backgroundColor: [
                    'rgba(220, 53, 69, 0.7)',
                    'rgba(253, 126, 20, 0.7)',
                    'rgba(255, 193, 7, 0.7)',
                    'rgba(25, 135, 84, 0.7)',
                    'rgba(13, 110, 253, 0.7)'
                ],
                borderColor: '#fff',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            }
        }
    });

    // Time Analysis Chart (Radar)
    const timeCtx = document.getElementById('timeChart').getContext('2d');
    new Chart(timeCtx, {
        type: 'radar',
        data: {
            labels: ['Morning', 'Afternoon', 'Evening', 'Night'],
            datasets: [{
                label: 'Attempts by Time',
                data: [25, 40, 30, 15], // Simulated data
                backgroundColor: 'rgba(111, 66, 193, 0.2)',
                borderColor: 'rgba(111, 66, 193, 1)',
                pointBackgroundColor: 'rgba(111, 66, 193, 1)',
                pointBorderColor: '#fff',
                pointHoverRadius: 5
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                r: {
                    angleLines: {
                        display: true
                    },
                    suggestedMin: 0
                }
            }
        }
    });
    {% endif %}
});
</script>

<style>
  .card {
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    border: none;
    margin-bottom: 24px;
  }
  
  .info-card {
    transition: transform 0.3s ease;
  }
  
  .info-card:hover {
    transform: translateY(-5px);
  }
  
  .card-icon {
    font-size: 1.5rem;
    width: 56px;
    height: 56px;
  }
  
  .bg-primary-light {
    background-color: rgba(13, 110, 253, 0.1);
    color: #0d6efd;
  }
  
  .bg-success-light {
    background-color: rgba(25, 135, 84, 0.1);
    color: #198754;
  }
  
  .bg-info-light {
    background-color: rgba(13, 202, 240, 0.1);
    color: #0dcaf0;
  }
  
  .bg-warning-light {
    background-color: rgba(255, 193, 7, 0.1);
    color: #ffc107;
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
  
  .activity-feed {
    padding-left: 10px;
    border-left: 2px solid #e9ecef;
  }
  
  .activity-item {
    padding: 8px 0;
    position: relative;
  }
  
  .activity-badge {
    position: absolute;
    left: -20px;
    background: #fff;
    border: 2px solid #e9ecef;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #6c757d;
  }
  
  .activity-content {
    padding-left: 40px;
  }
  
  .icon-empty {
    color: #dee2e6;
  }
</style>
{% endblock %}", "quiz/AdminStats.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\quiz\\AdminStats.html.twig");
    }
}
