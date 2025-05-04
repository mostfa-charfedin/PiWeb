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
class __TwigTemplate_fe2c618f264a8b2b06d218ea7660a586 extends Template
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
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "question", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter your question (max 80 characters)"]]);
            // line 32
            yield "
                <div class=\"text-danger small mt-1\">
                  ";
            // line 34
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "question", [], "any", false, false, false, 34), 'errors');
            yield "
                </div>
              </div>
            ";
        }
        // line 38
        yield "
            ";
        // line 40
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reponses", [], "any", true, true, false, 40)) {
            // line 41
            yield "              <h6 class=\"mt-3\">Responses:</h6>
              ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "reponses", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["reponseField"]) {
                // line 43
                yield "                <div class=\"mb-3 border p-3 rounded shadow-sm\">
                  <div class=\"mb-2\">
                    ";
                // line 45
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "response", [], "any", false, false, false, 45), 'label');
                yield "
                    ";
                // line 46
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "response", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter response (max 80 characters)"]]);
                // line 51
                yield "
                    <div class=\"text-danger small mt-1\">
                      ";
                // line 53
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "response", [], "any", false, false, false, 53), 'errors');
                yield "
                    </div>
                  </div>
                  <div class=\"form-check\">
                    ";
                // line 57
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "status", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-check-input"]]);
                yield "
                    ";
                // line 58
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "status", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "form-check-label"]]);
                yield "
                    <div class=\"text-danger small mt-1\">
                      ";
                // line 60
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["reponseField"], "status", [], "any", false, false, false, 60), 'errors');
                yield "
                    </div>
                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reponseField'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "
            ";
            // line 67
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "response", [], "any", true, true, false, 67) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", true, true, false, 67))) {
            // line 68
            yield "              <div class=\"mb-3\">
                ";
            // line 69
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "response", [], "any", false, false, false, 69), 'label');
            yield "
                ";
            // line 70
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "response", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter response (max 80 characters)"]]);
            // line 75
            yield "
                <div class=\"text-danger small mt-1\">
                  ";
            // line 77
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "response", [], "any", false, false, false, 77), 'errors');
            yield "
                </div>
              </div>
              <div class=\"form-check\">
                ";
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "status", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                ";
            // line 82
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "status", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "form-check-label"]]);
            yield "
                <div class=\"text-danger small mt-1\">
                  ";
            // line 84
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "status", [], "any", false, false, false, 84), 'errors');
            yield "
                </div>
              </div>
            ";
        }
        // line 88
        yield "
            <div class=\"d-flex justify-content-between mt-4\">
              <button type=\"submit\" class=\"btn btn-success\">
                <i class=\"bi bi-check-circle\"></i> Submit
              </button>
            </div>

            ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
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
        return array (  254 => 95,  245 => 88,  238 => 84,  233 => 82,  229 => 81,  222 => 77,  218 => 75,  216 => 70,  212 => 69,  209 => 68,  206 => 67,  203 => 65,  192 => 60,  187 => 58,  183 => 57,  176 => 53,  172 => 51,  170 => 46,  166 => 45,  162 => 43,  158 => 42,  155 => 41,  152 => 40,  149 => 38,  142 => 34,  138 => 32,  136 => 27,  132 => 26,  129 => 25,  126 => 24,  121 => 21,  109 => 12,  104 => 9,  91 => 8,  77 => 5,  64 => 4,  41 => 2,);
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
                    'class': 'form-control',
                    'placeholder': 'Enter your question (max 80 characters)'
                  }
                }) }}
                <div class=\"text-danger small mt-1\">
                  {{ form_errors(form.question) }}
                </div>
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
                        'class': 'form-control',
                        'placeholder': 'Enter response (max 80 characters)'
                      }
                    }) }}
                    <div class=\"text-danger small mt-1\">
                      {{ form_errors(reponseField.response) }}
                    </div>
                  </div>
                  <div class=\"form-check\">
                    {{ form_widget(reponseField.status, {'attr': {'class': 'form-check-input'}}) }}
                    {{ form_label(reponseField.status, null, {'label_attr': {'class': 'form-check-label'}}) }}
                    <div class=\"text-danger small mt-1\">
                      {{ form_errors(reponseField.status) }}
                    </div>
                  </div>
                </div>
              {% endfor %}

            {# Single response fallback #}
            {% elseif form.response is defined and form.status is defined %}
              <div class=\"mb-3\">
                {{ form_label(form.response) }}
                {{ form_widget(form.response, {
                  'attr': {
                    'class': 'form-control',
                    'placeholder': 'Enter response (max 80 characters)'
                  }
                }) }}
                <div class=\"text-danger small mt-1\">
                  {{ form_errors(form.response) }}
                </div>
              </div>
              <div class=\"form-check\">
                {{ form_widget(form.status, {'attr': {'class': 'form-check-input'}}) }}
                {{ form_label(form.status, null, {'label_attr': {'class': 'form-check-label'}}) }}
                <div class=\"text-danger small mt-1\">
                  {{ form_errors(form.status) }}
                </div>
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
", "quiz/reponseForm.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\quiz\\reponseForm.html.twig");
    }
}
