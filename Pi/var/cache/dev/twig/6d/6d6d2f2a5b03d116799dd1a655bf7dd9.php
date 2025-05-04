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

/* quiz/reponseForm.html.twig */
class __TwigTemplate_089c8805ee1182b2cd05dbab802d5b78 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/reponseForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/reponseForm.html.twig"));

        $this->parent = $this->load("sideBar.html.twig", 2);
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

        // line 5
        yield "  ";
        yield (((array_key_exists("question", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "idQuestion", [], "any", true, true, false, 5))) ? ("Edit/Add Response") : ("Add New Question"));
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>
      ";
        // line 12
        yield (((array_key_exists("question", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "idQuestion", [], "any", true, true, false, 12))) ? ("Add a Question") : ("Add New Question"));
        yield "
    </h1>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-8 offset-lg-2\">
        <div class=\"card shadow-sm rounded-3\">
          <div class=\"card-body p-4\">
            ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        yield "

            ";
        // line 24
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "question", [], "any", true, true, false, 24)) {
            // line 25
            yield "              <div class=\"mb-3\">
                ";
            // line 26
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "question", [], "any", false, false, false, 26), 'label');
            yield "
                ";
            // line 27
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "question", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp =             // line 29
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "question", [], "any", false, false, false, 29), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "placeholder" => "Enter your question (max 80 characters)"]]);
            // line 32
            yield "
                ";
            // line 33
            if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "question", [], "any", false, false, false, 33), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "                  <div class=\"invalid-feedback d-block\">
                    ";
                // line 35
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "question", [], "any", false, false, false, 35), 'errors');
                yield "
                  </div>
                ";
            }
            // line 38
            yield "              </div>
            ";
        }
        // line 40
        yield "
            ";
        // line 42
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reponses", [], "any", true, true, false, 42)) {
            // line 43
            yield "              <h6 class=\"mt-3\">Responses:</h6>
              ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "reponses", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["reponseField"]) {
                // line 45
                yield "                <div class=\"mb-3 border p-3 rounded shadow-sm\">
                  <div class=\"mb-2\">
                    ";
                // line 47
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "response", [], "any", false, false, false, 47), 'label');
                yield "
                    ";
                // line 48
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "response", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp =                 // line 50
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "response", [], "any", false, false, false, 50), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "placeholder" => "Enter response (max 80 characters)"]]);
                // line 53
                yield "
                    ";
                // line 54
                if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "response", [], "any", false, false, false, 54), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 55
                    yield "                      <div class=\"invalid-feedback d-block\">
                        ";
                    // line 56
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "response", [], "any", false, false, false, 56), 'errors');
                    yield "
                      </div>
                    ";
                }
                // line 59
                yield "                  </div>
                  <div class=\"form-check\">
                    ";
                // line 61
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "status", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => ("form-check-input" . (((($tmp =                 // line 63
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "status", [], "any", false, false, false, 63), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
                // line 65
                yield "
                    ";
                // line 66
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "status", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-check-label"]]);
                yield "
                    ";
                // line 67
                if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "status", [], "any", false, false, false, 67), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 68
                    yield "                      <div class=\"invalid-feedback d-block\">
                        ";
                    // line 69
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "status", [], "any", false, false, false, 69), 'errors');
                    yield "
                      </div>
                    ";
                }
                // line 72
                yield "                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reponseField'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "
            ";
            // line 77
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "response", [], "any", true, true, false, 77) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", true, true, false, 77))) {
            // line 78
            yield "              <div class=\"mb-3\">
                ";
            // line 79
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "response", [], "any", false, false, false, 79), 'label');
            yield "
                ";
            // line 80
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "response", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp =             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "response", [], "any", false, false, false, 82), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "placeholder" => "Enter response (max 80 characters)"]]);
            // line 85
            yield "
                ";
            // line 86
            if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "response", [], "any", false, false, false, 86), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 87
                yield "                  <div class=\"invalid-feedback d-block\">
                    ";
                // line 88
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "response", [], "any", false, false, false, 88), 'errors');
                yield "
                  </div>
                ";
            }
            // line 91
            yield "              </div>
              <div class=\"form-check\">
                ";
            // line 93
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "status", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => ("form-check-input" . (((($tmp =             // line 95
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "status", [], "any", false, false, false, 95), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
            // line 97
            yield "
                ";
            // line 98
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "status", [], "any", false, false, false, 98), 'label', ["label_attr" => ["class" => "form-check-label"]]);
            yield "
                ";
            // line 99
            if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "status", [], "any", false, false, false, 99), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 100
                yield "                  <div class=\"invalid-feedback d-block\">
                    ";
                // line 101
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "status", [], "any", false, false, false, 101), 'errors');
                yield "
                  </div>
                ";
            }
            // line 104
            yield "              </div>
            ";
        }
        // line 106
        yield "
            <div class=\"d-flex justify-content-between mt-4\">
              <button type=\"submit\" class=\"btn btn-success\">
                <i class=\"bi bi-check-circle\"></i> Submit
              </button>
            </div>

            ";
        // line 113
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form_end');
        yield "
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
        return "quiz/reponseForm.html.twig";
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
        return array (  296 => 113,  287 => 106,  283 => 104,  277 => 101,  274 => 100,  272 => 99,  268 => 98,  265 => 97,  263 => 95,  262 => 93,  258 => 91,  252 => 88,  249 => 87,  247 => 86,  244 => 85,  242 => 82,  241 => 80,  237 => 79,  234 => 78,  231 => 77,  228 => 75,  220 => 72,  214 => 69,  211 => 68,  209 => 67,  205 => 66,  202 => 65,  200 => 63,  199 => 61,  195 => 59,  189 => 56,  186 => 55,  184 => 54,  181 => 53,  179 => 50,  178 => 48,  174 => 47,  170 => 45,  166 => 44,  163 => 43,  160 => 42,  157 => 40,  153 => 38,  147 => 35,  144 => 34,  142 => 33,  139 => 32,  137 => 29,  136 => 27,  132 => 26,  129 => 25,  126 => 24,  121 => 21,  109 => 12,  104 => 9,  91 => 8,  77 => 5,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/quiz/reponseForm.html.twig #}
{% extends 'sideBar.html.twig' %}

{% block title %}
  {{ question is defined and question.idQuestion is defined ? 'Edit/Add Response' : 'Add New Question' }}
{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>
      {{ question is defined and question.idQuestion is defined ? 'Add a Question' : 'Add New Question' }}
    </h1>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-8 offset-lg-2\">
        <div class=\"card shadow-sm rounded-3\">
          <div class=\"card-body p-4\">
            {{ form_start(form) }}

            {# Question field #}
            {% if form.question is defined %}
              <div class=\"mb-3\">
                {{ form_label(form.question) }}
                {{ form_widget(form.question, {
                  'attr': {
                    'class': 'form-control' ~ (form_errors(form.question) ? ' is-invalid' : ''),
                    'placeholder': 'Enter your question (max 80 characters)'
                  }
                }) }}
                {% if form_errors(form.question) %}
                  <div class=\"invalid-feedback d-block\">
                    {{ form_errors(form.question) }}
                  </div>
                {% endif %}
              </div>
            {% endif %}

            {# Multiple responses #}
            {% if form.reponses is defined %}
              <h6 class=\"mt-3\">Responses:</h6>
              {% for reponseField in form.reponses %}
                <div class=\"mb-3 border p-3 rounded shadow-sm\">
                  <div class=\"mb-2\">
                    {{ form_label(reponseField.response) }}
                    {{ form_widget(reponseField.response, {
                      'attr': {
                        'class': 'form-control' ~ (form_errors(reponseField.response) ? ' is-invalid' : ''),
                        'placeholder': 'Enter response (max 80 characters)'
                      }
                    }) }}
                    {% if form_errors(reponseField.response) %}
                      <div class=\"invalid-feedback d-block\">
                        {{ form_errors(reponseField.response) }}
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-check\">
                    {{ form_widget(reponseField.status, {
                      'attr': {
                        'class': 'form-check-input' ~ (form_errors(reponseField.status) ? ' is-invalid' : '')
                      }
                    }) }}
                    {{ form_label(reponseField.status, null, {'label_attr': {'class': 'form-check-label'}}) }}
                    {% if form_errors(reponseField.status) %}
                      <div class=\"invalid-feedback d-block\">
                        {{ form_errors(reponseField.status) }}
                      </div>
                    {% endif %}
                  </div>
                </div>
              {% endfor %}

            {# Single response fallback #}
            {% elseif form.response is defined and form.status is defined %}
              <div class=\"mb-3\">
                {{ form_label(form.response) }}
                {{ form_widget(form.response, {
                  'attr': {
                    'class': 'form-control' ~ (form_errors(form.response) ? ' is-invalid' : ''),
                    'placeholder': 'Enter response (max 80 characters)'
                  }
                }) }}
                {% if form_errors(form.response) %}
                  <div class=\"invalid-feedback d-block\">
                    {{ form_errors(form.response) }}
                  </div>
                {% endif %}
              </div>
              <div class=\"form-check\">
                {{ form_widget(form.status, {
                  'attr': {
                    'class': 'form-check-input' ~ (form_errors(form.status) ? ' is-invalid' : '')
                  }
                }) }}
                {{ form_label(form.status, null, {'label_attr': {'class': 'form-check-label'}}) }}
                {% if form_errors(form.status) %}
                  <div class=\"invalid-feedback d-block\">
                    {{ form_errors(form.status) }}
                  </div>
                {% endif %}
              </div>
            {% endif %}

            <div class=\"d-flex justify-content-between mt-4\">
              <button type=\"submit\" class=\"btn btn-success\">
                <i class=\"bi bi-check-circle\"></i> Submit
              </button>
            </div>

            {{ form_end(form) }}
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
{% endblock %}
", "quiz/reponseForm.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\quiz\\reponseForm.html.twig");
    }
}
