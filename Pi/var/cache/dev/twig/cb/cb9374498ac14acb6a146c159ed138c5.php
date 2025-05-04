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

/* integration/stats.html.twig */
class __TwigTemplate_0d64715524b326976ae6e236c7493d73 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration/stats.html.twig"));

        $this->parent = $this->load("sideBar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<main id=\"main\" class=\"main\">
<div class=\"pagetitle\">
    <h1>Project Statistics: ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>
    <nav>
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_list");
        yield "\">Projects</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_show", ["idProjet" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 10, $this->source); })()), "idProjet", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield "</a></li>
            <li class=\"breadcrumb-item active\">Statistics</li>
        </ol>
    </nav>  
     <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_show", ["idProjet" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 14, $this->source); })()), "idProjet", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
      <i class=\"bi bi-arrow-left\"></i> Back
    </a>
</div>



<section class=\"section\">

    <!-- Summary Cards -->
    <div class=\"row mb-4\">
        ";
        // line 25
        $context["earlyCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 25, $this->source); })()), function ($__task__) use ($context, $macros) { $context["task"] = $__task__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 25, $this->source); })()), "isEarly", [], "any", false, false, false, 25); }));
        // line 26
        yield "        ";
        $context["onTimeCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 26, $this->source); })()), function ($__task__) use ($context, $macros) { $context["task"] = $__task__; return (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26) == "done") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 26, $this->source); })()), "isEarly", [], "any", false, false, false, 26)) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 26, $this->source); })()), "isOverdue", [], "any", false, false, false, 26)); }));
        // line 27
        yield "        ";
        $context["overdueCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 27, $this->source); })()), function ($__task__) use ($context, $macros) { $context["task"] = $__task__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 27, $this->source); })()), "status", [], "any", false, false, false, 27) == "done") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 27, $this->source); })()), "isOverdue", [], "any", false, false, false, 27)); }));
        // line 28
        yield "        ";
        $context["totalCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 28, $this->source); })()));
        // line 29
        yield "
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Early Completions</h5>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h2 class=\"mb-0\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["earlyCount"]) || array_key_exists("earlyCount", $context) ? $context["earlyCount"] : (function () { throw new RuntimeError('Variable "earlyCount" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "</h2>
                        <span class=\"badge bg-success rounded-pill\">";
        // line 36
        yield ((((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 36, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((((isset($context["earlyCount"]) || array_key_exists("earlyCount", $context) ? $context["earlyCount"] : (function () { throw new RuntimeError('Variable "earlyCount" does not exist.', 36, $this->source); })()) / (isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 36, $this->source); })())) * 100), 1), "html", null, true)) : (0));
        yield "%</span>
                    </div>
                    <small class=\"text-muted\">Tasks finished before deadline</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">On Time</h5>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h2 class=\"mb-0\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["onTimeCount"]) || array_key_exists("onTimeCount", $context) ? $context["onTimeCount"] : (function () { throw new RuntimeError('Variable "onTimeCount" does not exist.', 47, $this->source); })()), "html", null, true);
        yield "</h2>
                        <span class=\"badge bg-primary rounded-pill\">";
        // line 48
        yield ((((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 48, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((((isset($context["onTimeCount"]) || array_key_exists("onTimeCount", $context) ? $context["onTimeCount"] : (function () { throw new RuntimeError('Variable "onTimeCount" does not exist.', 48, $this->source); })()) / (isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 48, $this->source); })())) * 100), 1), "html", null, true)) : (0));
        yield "%</span>
                    </div>
                    <small class=\"text-muted\">Completed as planned</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Overdue</h5>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h2 class=\"mb-0\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["overdueCount"]) || array_key_exists("overdueCount", $context) ? $context["overdueCount"] : (function () { throw new RuntimeError('Variable "overdueCount" does not exist.', 59, $this->source); })()), "html", null, true);
        yield "</h2>
                        <span class=\"badge bg-danger rounded-pill\">";
        // line 60
        yield ((((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 60, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((((isset($context["overdueCount"]) || array_key_exists("overdueCount", $context) ? $context["overdueCount"] : (function () { throw new RuntimeError('Variable "overdueCount" does not exist.', 60, $this->source); })()) / (isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 60, $this->source); })())) * 100), 1), "html", null, true)) : (0));
        yield "%</span>
                    </div>
                    <small class=\"text-muted\">Missed deadlines</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Task Timeline</h5>
                    <div id=\"timelineChart\"></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Completion Performance</h5>
                    <div id=\"performanceChart\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Status Distribution</h5>
                    <div id=\"statusChart\"></div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>

<script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
<script>
document.addEventListener(\"DOMContentLoaded\", () => {
    const chartData = ";
        // line 105
        yield json_encode((isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 105, $this->source); })()));
        yield ";
    const now = new Date();

    // Prepare timeline data
    const timelineData = chartData
        .filter(item => item.start && item.end)
        .map(item => {
            const startDate = new Date(item.start);
            const endDate = new Date(item.end);
            const completedDate = item.completedAt ? new Date(item.completedAt) : null;
            
            return {
                x: item.task,
                y: [
                    startDate.getTime(),
                    item.status === 'done' && completedDate ? completedDate.getTime() : endDate.getTime()
                ],
                fillColor: getStatusColor(item),
                realEnd: endDate.getTime(),
                status: item.status,
                isEarly: item.isEarly,
                isOverdue: item.isOverdue,
                completedAt: completedDate ? completedDate.getTime() : null
            };
        });

    // Function to determine color based on status
    function getStatusColor(item) {
        if (item.status === 'done') {
            if (item.isEarly) return '#10B981';  // green
            if (item.isOverdue) return '#EF4444'; // red
            return '#3B82F6'; // blue
        }
        // For incomplete tasks
        const endDate = new Date(item.end);
        return now > endDate ? '#F87171' : '#F59E0B'; // red-ish for overdue, amber for pending
    }

    // Timeline Chart
    const timelineOptions = {
        series: [{
            name: 'Tasks',
            data: timelineData
        }],
        chart: {
            type: 'rangeBar',
            height: 400,
            toolbar: {
                show: true
            }
        },
        plotOptions: {
            bar: {
                horizontal: true,
                distributed: true,
                barHeight: '80%',
                dataLabels: {
                    hideOverflowingLabels: false
                }
            }
        },
        dataLabels: {
            enabled: true,
            formatter: function(val, opts) {
                const start = new Date(val[0]);
                const end = new Date(val[1]);
                const diffDays = Math.ceil((end - start) / (1000 * 60 * 60 * 24));
                return diffDays + 'd';
            },
            style: {
                colors: ['#f3f4f5', '#fff']
            }
        },
        xaxis: {
            type: 'datetime',
            min: Math.min(...timelineData.map(d => d.y[0])) - 86400000 * 3, // 3 days buffer
            max: Math.max(...timelineData.map(d => d.realEnd)) + 86400000 * 3 // 3 days buffer
        },
        yaxis: {
            show: true
        },
        grid: {
            row: {
                colors: ['#f3f4f5', '#fff'],
                opacity: 1
            }
        },
        tooltip: {
            custom: function({ series, seriesIndex, dataPointIndex, w }) {
                const data = w.config.series[seriesIndex].data[dataPointIndex];
                const start = new Date(data.y[0]);
                const end = new Date(data.y[1]);
                const deadline = new Date(data.realEnd);
                const completed = data.completedAt ? new Date(data.completedAt) : null;

                const getStatusLabel = () => {
                    if (data.status === 'done') {
                        if (data.isEarly) return 'Completed Early';
                        if (data.isOverdue) return 'Completed Late';
                        return 'Completed On Time';
                    }
                    return now > deadline ? 'Overdue' : 'Pending';
                };

                const getBadgeClass = () => {
                    if (data.status === 'done') {
                        if (data.isEarly) return 'success';
                        if (data.isOverdue) return 'danger';
                        return 'primary';
                    }
                    return now > deadline ? 'danger' : 'warning';
                };

                let html = `<div class=\"apexcharts-tooltip-title\">\${data.x}</div>`;
                html += `<div class=\"apexcharts-tooltip-series-group\">`;
                html += `<span class=\"status-badge badge bg-\${getBadgeClass()}\">\${getStatusLabel()}</span>`;
                html += `<div><strong>Start:</strong> \${start.toLocaleDateString()}</div>`;
                html += `<div><strong>Deadline:</strong> \${deadline.toLocaleDateString()}</div>`;

                if (completed) {
                    html += `<div><strong>Completed:</strong> \${completed.toLocaleDateString()}</div>`;
                    const diffDays = Math.round((deadline - completed) / 86400000);
                    if (data.isEarly) {
                        html += `<div class=\"text-success\">✓ \${Math.abs(diffDays)} days early</div>`;
                    } else if (diffDays < 0) {
                        html += `<div class=\"text-danger\">Delayed by \${Math.abs(diffDays)} days</div>`;
                    } else {
                        html += `<div class=\"text-primary\">Completed on time</div>`;
                    }
                } else if (now > deadline) {
                    const daysLate = Math.round((now - deadline) / 86400000);
                    html += `<div class=\"text-danger\">Overdue by \${daysLate} days</div>`;
                } else {
                    const daysLeft = Math.round((deadline - now) / 86400000);
                    html += `<div class=\"text-warning\">\${daysLeft} days remaining</div>`;
                }

                html += `</div>`;
                return html;
            }
        }
    };

    const timelineChart = new ApexCharts(document.querySelector(\"#timelineChart\"), timelineOptions);
    timelineChart.render();

    // Performance Chart
    const completedTasks = chartData.filter(t => t.status === 'done');
    const perfData = [
        completedTasks.filter(t => t.isEarly).length,
        completedTasks.filter(t => !t.isEarly && !t.isOverdue).length,
        completedTasks.filter(t => t.isOverdue).length
    ];
    new ApexCharts(document.querySelector(\"#performanceChart\"), {
        series: [{ name: 'Tasks', data: perfData }],
        chart: { type: 'bar', height: 350 },
        colors: ['#10B981', '#3B82F6', '#EF4444'],
        plotOptions: {
            bar: { 
                distributed: true, 
                borderRadius: 4,
                dataLabels: {
                    position: 'top'
                }
            }
        },
        xaxis: { 
            categories: ['Early', 'On Time', 'Late'],
            labels: {
                style: {
                    fontSize: '12px'
                }
            }
        },
        dataLabels: {
            enabled: true,
            formatter: function(val) {
                return val + (completedTasks.length > 0 ? ` (\${Math.round(val / completedTasks.length * 100)}%)` : '');
            },
            offsetY: -20,
            style: {
                fontSize: '12px',
                colors: [\"#304758\"]
            }
        }
    }).render();

    // Status Distribution Chart
    const statusCounts = {
        'To Do': chartData.filter(t => t.status === 'to do').length,
        'In Progress': chartData.filter(t => t.status === 'in progress').length,
        'Completed Early': chartData.filter(t => t.status === 'done' && t.isEarly).length,
        'Completed On Time': chartData.filter(t => t.status === 'done' && !t.isEarly && !t.isOverdue).length,
        'Completed Late': chartData.filter(t => t.status === 'done' && t.isOverdue).length
    };

    new ApexCharts(document.querySelector(\"#statusChart\"), {
        series: Object.values(statusCounts),
        labels: Object.keys(statusCounts),
        chart: { 
            type: 'donut', 
            height: 350,
            animations: {
                enabled: true
            }
        },
        colors: ['#F59E0B', '#6366F1', '#10B981', '#3B82F6', '#EF4444'],
        plotOptions: {
            pie: {
                donut: {
                    labels: {
                        show: true,
                        total: { 
                            show: true, 
                            label: 'Total Tasks', 
                            color: '#6B7280',
                            formatter: function() {
                                return chartData.length.toString();
                            }
                        }
                    }
                }
            }
        },
        legend: {
            position: 'right',
            fontSize: '14px'
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    }).render();
});
</script>

<style>
.apexcharts-tooltip {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    padding: 10px;
}
.apexcharts-tooltip-title {
    font-weight: bold;
    margin-bottom: 5px;
    border-bottom: 1px solid #eee;
    padding-bottom: 5px;
}
.apexcharts-tooltip-series-group {
    padding: 3px 0;
}
.status-badge {
    display: inline-block;
    margin-bottom: 5px;
    padding: 2px 6px;
    border-radius: 3px;
    font-size: 12px;
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
        return "integration/stats.html.twig";
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
        return array (  220 => 105,  172 => 60,  168 => 59,  154 => 48,  150 => 47,  136 => 36,  132 => 35,  124 => 29,  121 => 28,  118 => 27,  115 => 26,  113 => 25,  99 => 14,  90 => 10,  86 => 9,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'sideBar.html.twig' %}

{% block content %}
<main id=\"main\" class=\"main\">
<div class=\"pagetitle\">
    <h1>Project Statistics: {{ projet.titre }}</h1>
    <nav>
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('projet_list') }}\">Projects</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('projet_show', {'idProjet': projet.idProjet}) }}\">{{ projet.titre }}</a></li>
            <li class=\"breadcrumb-item active\">Statistics</li>
        </ol>
    </nav>  
     <a href=\"{{ path('projet_show', {'idProjet': projet.idProjet}) }}\" class=\"btn btn-secondary\">
      <i class=\"bi bi-arrow-left\"></i> Back
    </a>
</div>



<section class=\"section\">

    <!-- Summary Cards -->
    <div class=\"row mb-4\">
        {% set earlyCount = chartData|filter(task => task.isEarly)|length %}
        {% set onTimeCount = chartData|filter(task => task.status == 'done' and not task.isEarly and not task.isOverdue)|length %}
        {% set overdueCount = chartData|filter(task => task.status == 'done' and task.isOverdue)|length %}
        {% set totalCount = chartData|length %}

        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Early Completions</h5>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h2 class=\"mb-0\">{{ earlyCount }}</h2>
                        <span class=\"badge bg-success rounded-pill\">{{ totalCount > 0 ? (earlyCount / totalCount * 100)|round(1) : 0 }}%</span>
                    </div>
                    <small class=\"text-muted\">Tasks finished before deadline</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">On Time</h5>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h2 class=\"mb-0\">{{ onTimeCount }}</h2>
                        <span class=\"badge bg-primary rounded-pill\">{{ totalCount > 0 ? (onTimeCount / totalCount * 100)|round(1) : 0 }}%</span>
                    </div>
                    <small class=\"text-muted\">Completed as planned</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Overdue</h5>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h2 class=\"mb-0\">{{ overdueCount }}</h2>
                        <span class=\"badge bg-danger rounded-pill\">{{ totalCount > 0 ? (overdueCount / totalCount * 100)|round(1) : 0 }}%</span>
                    </div>
                    <small class=\"text-muted\">Missed deadlines</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Task Timeline</h5>
                    <div id=\"timelineChart\"></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Completion Performance</h5>
                    <div id=\"performanceChart\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Status Distribution</h5>
                    <div id=\"statusChart\"></div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>

<script src=\"https://cdn.jsdelivr.net/npm/apexcharts\"></script>
<script>
document.addEventListener(\"DOMContentLoaded\", () => {
    const chartData = {{ chartData|json_encode|raw }};
    const now = new Date();

    // Prepare timeline data
    const timelineData = chartData
        .filter(item => item.start && item.end)
        .map(item => {
            const startDate = new Date(item.start);
            const endDate = new Date(item.end);
            const completedDate = item.completedAt ? new Date(item.completedAt) : null;
            
            return {
                x: item.task,
                y: [
                    startDate.getTime(),
                    item.status === 'done' && completedDate ? completedDate.getTime() : endDate.getTime()
                ],
                fillColor: getStatusColor(item),
                realEnd: endDate.getTime(),
                status: item.status,
                isEarly: item.isEarly,
                isOverdue: item.isOverdue,
                completedAt: completedDate ? completedDate.getTime() : null
            };
        });

    // Function to determine color based on status
    function getStatusColor(item) {
        if (item.status === 'done') {
            if (item.isEarly) return '#10B981';  // green
            if (item.isOverdue) return '#EF4444'; // red
            return '#3B82F6'; // blue
        }
        // For incomplete tasks
        const endDate = new Date(item.end);
        return now > endDate ? '#F87171' : '#F59E0B'; // red-ish for overdue, amber for pending
    }

    // Timeline Chart
    const timelineOptions = {
        series: [{
            name: 'Tasks',
            data: timelineData
        }],
        chart: {
            type: 'rangeBar',
            height: 400,
            toolbar: {
                show: true
            }
        },
        plotOptions: {
            bar: {
                horizontal: true,
                distributed: true,
                barHeight: '80%',
                dataLabels: {
                    hideOverflowingLabels: false
                }
            }
        },
        dataLabels: {
            enabled: true,
            formatter: function(val, opts) {
                const start = new Date(val[0]);
                const end = new Date(val[1]);
                const diffDays = Math.ceil((end - start) / (1000 * 60 * 60 * 24));
                return diffDays + 'd';
            },
            style: {
                colors: ['#f3f4f5', '#fff']
            }
        },
        xaxis: {
            type: 'datetime',
            min: Math.min(...timelineData.map(d => d.y[0])) - 86400000 * 3, // 3 days buffer
            max: Math.max(...timelineData.map(d => d.realEnd)) + 86400000 * 3 // 3 days buffer
        },
        yaxis: {
            show: true
        },
        grid: {
            row: {
                colors: ['#f3f4f5', '#fff'],
                opacity: 1
            }
        },
        tooltip: {
            custom: function({ series, seriesIndex, dataPointIndex, w }) {
                const data = w.config.series[seriesIndex].data[dataPointIndex];
                const start = new Date(data.y[0]);
                const end = new Date(data.y[1]);
                const deadline = new Date(data.realEnd);
                const completed = data.completedAt ? new Date(data.completedAt) : null;

                const getStatusLabel = () => {
                    if (data.status === 'done') {
                        if (data.isEarly) return 'Completed Early';
                        if (data.isOverdue) return 'Completed Late';
                        return 'Completed On Time';
                    }
                    return now > deadline ? 'Overdue' : 'Pending';
                };

                const getBadgeClass = () => {
                    if (data.status === 'done') {
                        if (data.isEarly) return 'success';
                        if (data.isOverdue) return 'danger';
                        return 'primary';
                    }
                    return now > deadline ? 'danger' : 'warning';
                };

                let html = `<div class=\"apexcharts-tooltip-title\">\${data.x}</div>`;
                html += `<div class=\"apexcharts-tooltip-series-group\">`;
                html += `<span class=\"status-badge badge bg-\${getBadgeClass()}\">\${getStatusLabel()}</span>`;
                html += `<div><strong>Start:</strong> \${start.toLocaleDateString()}</div>`;
                html += `<div><strong>Deadline:</strong> \${deadline.toLocaleDateString()}</div>`;

                if (completed) {
                    html += `<div><strong>Completed:</strong> \${completed.toLocaleDateString()}</div>`;
                    const diffDays = Math.round((deadline - completed) / 86400000);
                    if (data.isEarly) {
                        html += `<div class=\"text-success\">✓ \${Math.abs(diffDays)} days early</div>`;
                    } else if (diffDays < 0) {
                        html += `<div class=\"text-danger\">Delayed by \${Math.abs(diffDays)} days</div>`;
                    } else {
                        html += `<div class=\"text-primary\">Completed on time</div>`;
                    }
                } else if (now > deadline) {
                    const daysLate = Math.round((now - deadline) / 86400000);
                    html += `<div class=\"text-danger\">Overdue by \${daysLate} days</div>`;
                } else {
                    const daysLeft = Math.round((deadline - now) / 86400000);
                    html += `<div class=\"text-warning\">\${daysLeft} days remaining</div>`;
                }

                html += `</div>`;
                return html;
            }
        }
    };

    const timelineChart = new ApexCharts(document.querySelector(\"#timelineChart\"), timelineOptions);
    timelineChart.render();

    // Performance Chart
    const completedTasks = chartData.filter(t => t.status === 'done');
    const perfData = [
        completedTasks.filter(t => t.isEarly).length,
        completedTasks.filter(t => !t.isEarly && !t.isOverdue).length,
        completedTasks.filter(t => t.isOverdue).length
    ];
    new ApexCharts(document.querySelector(\"#performanceChart\"), {
        series: [{ name: 'Tasks', data: perfData }],
        chart: { type: 'bar', height: 350 },
        colors: ['#10B981', '#3B82F6', '#EF4444'],
        plotOptions: {
            bar: { 
                distributed: true, 
                borderRadius: 4,
                dataLabels: {
                    position: 'top'
                }
            }
        },
        xaxis: { 
            categories: ['Early', 'On Time', 'Late'],
            labels: {
                style: {
                    fontSize: '12px'
                }
            }
        },
        dataLabels: {
            enabled: true,
            formatter: function(val) {
                return val + (completedTasks.length > 0 ? ` (\${Math.round(val / completedTasks.length * 100)}%)` : '');
            },
            offsetY: -20,
            style: {
                fontSize: '12px',
                colors: [\"#304758\"]
            }
        }
    }).render();

    // Status Distribution Chart
    const statusCounts = {
        'To Do': chartData.filter(t => t.status === 'to do').length,
        'In Progress': chartData.filter(t => t.status === 'in progress').length,
        'Completed Early': chartData.filter(t => t.status === 'done' && t.isEarly).length,
        'Completed On Time': chartData.filter(t => t.status === 'done' && !t.isEarly && !t.isOverdue).length,
        'Completed Late': chartData.filter(t => t.status === 'done' && t.isOverdue).length
    };

    new ApexCharts(document.querySelector(\"#statusChart\"), {
        series: Object.values(statusCounts),
        labels: Object.keys(statusCounts),
        chart: { 
            type: 'donut', 
            height: 350,
            animations: {
                enabled: true
            }
        },
        colors: ['#F59E0B', '#6366F1', '#10B981', '#3B82F6', '#EF4444'],
        plotOptions: {
            pie: {
                donut: {
                    labels: {
                        show: true,
                        total: { 
                            show: true, 
                            label: 'Total Tasks', 
                            color: '#6B7280',
                            formatter: function() {
                                return chartData.length.toString();
                            }
                        }
                    }
                }
            }
        },
        legend: {
            position: 'right',
            fontSize: '14px'
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    }).render();
});
</script>

<style>
.apexcharts-tooltip {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    padding: 10px;
}
.apexcharts-tooltip-title {
    font-weight: bold;
    margin-bottom: 5px;
    border-bottom: 1px solid #eee;
    padding-bottom: 5px;
}
.apexcharts-tooltip-series-group {
    padding: 3px 0;
}
.status-badge {
    display: inline-block;
    margin-bottom: 5px;
    padding: 2px 6px;
    border-radius: 3px;
    font-size: 12px;
}
</style>
{% endblock %}", "integration/stats.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\integration\\stats.html.twig");
    }
}
