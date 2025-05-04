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

/* quiz/stats.html.twig */
class __TwigTemplate_f5ae0e025f65fbdab8edc41b25baa279 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/stats.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/stats.html.twig", 1);
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

        yield "Your Quiz Stats";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Quiz Statistics for ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>

    <div class=\"stats-container\">
        <p><strong>Total Quizzes Taken:</strong> ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuizzes"]) || array_key_exists("totalQuizzes", $context) ? $context["totalQuizzes"] : (function () { throw new RuntimeError('Variable "totalQuizzes" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "</p>
        <p><strong>Quizzes Passed:</strong> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["passedQuizzes"]) || array_key_exists("passedQuizzes", $context) ? $context["passedQuizzes"] : (function () { throw new RuntimeError('Variable "passedQuizzes" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "</p>
        <p><strong>Quizzes Failed:</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["failedQuizzes"]) || array_key_exists("failedQuizzes", $context) ? $context["failedQuizzes"] : (function () { throw new RuntimeError('Variable "failedQuizzes" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "</p>
        <p><strong>Total Score:</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalScore"]) || array_key_exists("totalScore", $context) ? $context["totalScore"] : (function () { throw new RuntimeError('Variable "totalScore" does not exist.', 12, $this->source); })()), "html", null, true);
        yield " out of ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMaxScore"]) || array_key_exists("totalMaxScore", $context) ? $context["totalMaxScore"] : (function () { throw new RuntimeError('Variable "totalMaxScore" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</p>
        <p><strong>Average Score:</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["averageScore"]) || array_key_exists("averageScore", $context) ? $context["averageScore"] : (function () { throw new RuntimeError('Variable "averageScore" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "%</p>
    </div>
    
    <hr>

    <h2>Recent Quiz Results</h2>
    <ul>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quizResults"]) || array_key_exists("quizResults", $context) ? $context["quizResults"] : (function () { throw new RuntimeError('Variable "quizResults" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["quizResult"] => $context["quizId"]) {
            // line 21
            yield "            <li>
                <strong>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quizResult"], "quizName", [], "any", false, false, false, 22), "html", null, true);
            yield "</strong>: 
                ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quizResult"], "score", [], "any", false, false, false, 23), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quizResult"], "total", [], "any", false, false, false, 23), "html", null, true);
            yield " 
                - ";
            // line 24
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["quizResult"], "score", [], "any", false, false, false, 24) >= (CoreExtension::getAttribute($this->env, $this->source, $context["quizResult"], "total", [], "any", false, false, false, 24) / 2))) {
                yield " <span class=\"text-success\">Passed</span> ";
            } else {
                yield " <span class=\"text-danger\">Failed</span> ";
            }
            // line 25
            yield "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['quizResult'], $context['quizId'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    </ul>
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
        return "quiz/stats.html.twig";
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
        return array (  165 => 27,  158 => 25,  152 => 24,  146 => 23,  142 => 22,  139 => 21,  135 => 20,  125 => 13,  119 => 12,  115 => 11,  111 => 10,  107 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Your Quiz Stats{% endblock %}

{% block body %}
    <h1>Quiz Statistics for {{ user.nom }}</h1>

    <div class=\"stats-container\">
        <p><strong>Total Quizzes Taken:</strong> {{ totalQuizzes }}</p>
        <p><strong>Quizzes Passed:</strong> {{ passedQuizzes }}</p>
        <p><strong>Quizzes Failed:</strong> {{ failedQuizzes }}</p>
        <p><strong>Total Score:</strong> {{ totalScore }} out of {{ totalMaxScore }}</p>
        <p><strong>Average Score:</strong> {{ averageScore }}%</p>
    </div>
    
    <hr>

    <h2>Recent Quiz Results</h2>
    <ul>
        {% for quizResult, quizId in quizResults %}
            <li>
                <strong>{{ quizResult.quizName }}</strong>: 
                {{ quizResult.score }} / {{ quizResult.total }} 
                - {% if quizResult.score >= quizResult.total / 2 %} <span class=\"text-success\">Passed</span> {% else %} <span class=\"text-danger\">Failed</span> {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}", "quiz/stats.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\quiz\\stats.html.twig");
    }
}
