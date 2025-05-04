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

/* integration\user_task_show.html.twig */
class __TwigTemplate_858c548d02434515abc93f664a2312dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration\\user_task_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration\\user_task_show.html.twig"));

        $this->parent = $this->loadTemplate("navBar.html.twig", "integration\\user_task_show.html.twig", 1);
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

        yield "Task Details";
        
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
    <h1>Task: ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_projet_list");
        yield "\">My Projects</a>
        </li>
        <li class=\"breadcrumb-item active\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), "html", null, true);
        yield "</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
<div class=\"pagetitle d-flex align-items-center\">
  <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_projet_list");
        yield "\" class=\"btn btn-link p-0 me-2\">
    <i class=\"bi bi-arrow-left\"></i> <!-- Bootstrap Icon for back arrow -->
  </a>
  
</div><!-- End Page Title -->

  <section class=\"section\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Task Details</h5>

        <ul class=\"list-group\">
          <li class=\"list-group-item\">
            <strong>Title:</strong> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 32, $this->source); })()), "titre", [], "any", false, false, false, 32), "html", null, true);
        yield "
          </li>
          <li class=\"list-group-item\">
            <strong>Status:</strong> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35), "html", null, true);
        yield "
          </li>
          <li class=\"list-group-item\">
            <strong>Description:</strong> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), "html", null, true);
        yield "
          </li>
          <li class=\"list-group-item\">
            <strong>Priority:</strong> ";
        // line 41
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "priority", [], "any", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 41, $this->source); })()), "priority", [], "any", false, false, false, 41)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 41, $this->source); })()), "priority", [], "any", false, false, false, 41), "html", null, true)) : ("-"));
        yield "
          </li>
          <li class=\"list-group-item\">
            <strong>Created At:</strong> ";
        // line 44
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 44, $this->source); })()), "createdAt", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 44, $this->source); })()), "createdAt", [], "any", false, false, false, 44), "Y-m-d H:i"), "html", null, true)) : ("-"));
        yield "
          </li>
          <li class=\"list-group-item\">
            <strong>Deadline (Due Date):</strong> 
            ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 48, $this->source); })()), "date", [], "any", false, false, false, 48)) {
            // line 49
            yield "              ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 49, $this->source); })()), "createdAt", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 49, $this->source); })()), "createdAt", [], "any", false, false, false, 49), (("+" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 49, $this->source); })()), "date", [], "any", false, false, false, 49)) . " weeks")), "Y-m-d"), "html", null, true)) : ("-"));
            yield "
            ";
        } else {
            // line 51
            yield "              -
            ";
        }
        // line 53
        yield "          </li>
          <li class=\"list-group-item\">
            <strong>Completed At:</strong> ";
        // line 55
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 55, $this->source); })()), "completedAt", [], "any", false, false, false, 55)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 55, $this->source); })()), "completedAt", [], "any", false, false, false, 55), "Y-m-d H:i"), "html", null, true)) : ("-"));
        yield "
          </li>
          <li class=\"list-group-item\">
            <strong>Overdue:</strong> ";
        // line 58
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 58, $this->source); })()), "isOverdue", [], "method", false, false, false, 58)) ? ("Yes") : ("No"));
        yield "
          </li>
          <li class=\"list-group-item\">
            <strong>Completed Early:</strong> ";
        // line 61
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 61, $this->source); })()), "isCompletedEarly", [], "method", false, false, false, 61)) ? ("Yes") : ("No"));
        yield "
          </li>
        </ul>

        ";
        // line 65
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 65, $this->source); })()), "status", [], "any", false, false, false, 65) != "done")) {
            // line 66
            yield "          <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_mark_done", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 66, $this->source); })()), "idtache", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" class=\"mt-4\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("mark_done" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 67, $this->source); })()), "idtache", [], "any", false, false, false, 67))), "html", null, true);
            yield "\">
            <button type=\"submit\" class=\"btn btn-success\">Mark as Done</button>
          </form>
        ";
        } else {
            // line 71
            yield "          <div class=\"alert alert-success mt-4\">
            This task is done.
          </div>
        ";
        }
        // line 75
        yield "        
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
        return "integration\\user_task_show.html.twig";
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
        return array (  226 => 75,  220 => 71,  213 => 67,  208 => 66,  206 => 65,  199 => 61,  193 => 58,  187 => 55,  183 => 53,  179 => 51,  173 => 49,  171 => 48,  164 => 44,  158 => 41,  152 => 38,  146 => 35,  140 => 32,  124 => 19,  116 => 14,  111 => 12,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'navBar.html.twig' %}

{% block title %}Task Details{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>Task: {{ task.titre }}</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"{{ path('user_projet_list') }}\">My Projects</a>
        </li>
        <li class=\"breadcrumb-item active\">{{ task.titre }}</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
<div class=\"pagetitle d-flex align-items-center\">
  <a href=\"{{ path('user_projet_list') }}\" class=\"btn btn-link p-0 me-2\">
    <i class=\"bi bi-arrow-left\"></i> <!-- Bootstrap Icon for back arrow -->
  </a>
  
</div><!-- End Page Title -->

  <section class=\"section\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Task Details</h5>

        <ul class=\"list-group\">
          <li class=\"list-group-item\">
            <strong>Title:</strong> {{ task.titre }}
          </li>
          <li class=\"list-group-item\">
            <strong>Status:</strong> {{ task.status }}
          </li>
          <li class=\"list-group-item\">
            <strong>Description:</strong> {{ task.description }}
          </li>
          <li class=\"list-group-item\">
            <strong>Priority:</strong> {{ task.priority ?? '-' }}
          </li>
          <li class=\"list-group-item\">
            <strong>Created At:</strong> {{ task.createdAt ? task.createdAt|date('Y-m-d H:i') : '-' }}
          </li>
          <li class=\"list-group-item\">
            <strong>Deadline (Due Date):</strong> 
            {% if task.date %}
              {{ task.createdAt ? (task.createdAt|date_modify('+' ~ task.date ~ ' weeks'))|date('Y-m-d') : '-' }}
            {% else %}
              -
            {% endif %}
          </li>
          <li class=\"list-group-item\">
            <strong>Completed At:</strong> {{ task.completedAt ? task.completedAt|date('Y-m-d H:i') : '-' }}
          </li>
          <li class=\"list-group-item\">
            <strong>Overdue:</strong> {{ task.isOverdue() ? 'Yes' : 'No' }}
          </li>
          <li class=\"list-group-item\">
            <strong>Completed Early:</strong> {{ task.isCompletedEarly() ? 'Yes' : 'No' }}
          </li>
        </ul>

        {% if task.status != 'done' %}
          <form method=\"post\" action=\"{{ path('task_mark_done', { id: task.idtache }) }}\" class=\"mt-4\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('mark_done' ~ task.idtache) }}\">
            <button type=\"submit\" class=\"btn btn-success\">Mark as Done</button>
          </form>
        {% else %}
          <div class=\"alert alert-success mt-4\">
            This task is done.
          </div>
        {% endif %}
        
      </div>
    </div>
  </section>
</main>
{% endblock %}
", "integration\\user_task_show.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\integration\\user_task_show.html.twig");
    }
}
