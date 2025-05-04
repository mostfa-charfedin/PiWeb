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

/* quiz/QuizForm.html.twig */
class __TwigTemplate_62fd75e84380c60b1723888270397398 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/QuizForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/QuizForm.html.twig"));

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

        // line 4
        yield "  ";
        yield (((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Edit Quiz") : ("Create New Quiz"));
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>";
        // line 10
        yield (((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 10, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Edit Quiz") : ("Create New Quiz"));
        yield "</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
        <li class=\"breadcrumb-item active\">";
        // line 14
        yield (((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 14, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Edit Quiz") : ("New Quiz"));
        yield "</li>
      </ol>
    </nav>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-8 offset-lg-2\">
        <div class=\"card shadow-sm rounded-3\">
          <div class=\"card-body p-4\">
            <h5 class=\"card-title mb-4\">";
        // line 24
        yield (((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 24, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Edit the quiz") : ("Fill the form to create a quiz"));
        yield "</h5>

            ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formQuiz"]) || array_key_exists("formQuiz", $context) ? $context["formQuiz"] : (function () { throw new RuntimeError('Variable "formQuiz" does not exist.', 26, $this->source); })()), 'form_start');
        yield "

              <div class=\"mb-3\">
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formQuiz"]) || array_key_exists("formQuiz", $context) ? $context["formQuiz"] : (function () { throw new RuntimeError('Variable "formQuiz" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'label');
        yield "
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formQuiz"]) || array_key_exists("formQuiz", $context) ? $context["formQuiz"] : (function () { throw new RuntimeError('Variable "formQuiz" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"text-danger small mt-1\">
                  ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formQuiz"]) || array_key_exists("formQuiz", $context) ? $context["formQuiz"] : (function () { throw new RuntimeError('Variable "formQuiz" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), 'errors');
        yield "
                </div>
              </div>

              <div class=\"mb-4\">
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formQuiz"]) || array_key_exists("formQuiz", $context) ? $context["formQuiz"] : (function () { throw new RuntimeError('Variable "formQuiz" does not exist.', 37, $this->source); })()), "datecreation", [], "any", false, false, false, 37), 'label');
        yield "
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formQuiz"]) || array_key_exists("formQuiz", $context) ? $context["formQuiz"] : (function () { throw new RuntimeError('Variable "formQuiz" does not exist.', 38, $this->source); })()), "datecreation", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "min" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "max" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]]);
        // line 44
        yield "
                <div class=\"text-danger small mt-1\">
                  ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formQuiz"]) || array_key_exists("formQuiz", $context) ? $context["formQuiz"] : (function () { throw new RuntimeError('Variable "formQuiz" does not exist.', 46, $this->source); })()), "datecreation", [], "any", false, false, false, 46), 'errors');
        yield "
                </div>
              </div>

              <div class=\"d-flex justify-content-between\">
                <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-outline-secondary\">
                  <i class=\"bi bi-arrow-left\"></i> Go Back to List
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                  ";
        // line 55
        yield (((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 55, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Update Quiz") : ("Create Quiz"));
        yield "
                </button>
              </div>

            ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formQuiz"]) || array_key_exists("formQuiz", $context) ? $context["formQuiz"] : (function () { throw new RuntimeError('Variable "formQuiz" does not exist.', 59, $this->source); })()), 'form_end');
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
        return "quiz/QuizForm.html.twig";
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
        return array (  191 => 59,  184 => 55,  177 => 51,  169 => 46,  165 => 44,  163 => 38,  159 => 37,  151 => 32,  146 => 30,  142 => 29,  136 => 26,  131 => 24,  118 => 14,  114 => 13,  108 => 10,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'sideBar.html.twig' %}

{% block title %}
  {{ edit_mode ? 'Edit Quiz' : 'Create New Quiz' }}
{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>{{ edit_mode ? 'Edit Quiz' : 'Create New Quiz' }}</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
        <li class=\"breadcrumb-item active\">{{ edit_mode ? 'Edit Quiz' : 'New Quiz' }}</li>
      </ol>
    </nav>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-8 offset-lg-2\">
        <div class=\"card shadow-sm rounded-3\">
          <div class=\"card-body p-4\">
            <h5 class=\"card-title mb-4\">{{ edit_mode ? 'Edit the quiz' : 'Fill the form to create a quiz' }}</h5>

            {{ form_start(formQuiz) }}

              <div class=\"mb-3\">
                {{ form_label(formQuiz.nom) }}
                {{ form_widget(formQuiz.nom, {'attr': {'class': 'form-control'}}) }}
                <div class=\"text-danger small mt-1\">
                  {{ form_errors(formQuiz.nom) }}
                </div>
              </div>

              <div class=\"mb-4\">
                {{ form_label(formQuiz.datecreation) }}
                {{ form_widget(formQuiz.datecreation, {
                  'attr': {
                    'class': 'form-control',
                    'min': \"now\"|date(\"Y-m-d\"),
                    'max': \"now\"|date(\"Y-m-d\")
                  }
                }) }}
                <div class=\"text-danger small mt-1\">
                  {{ form_errors(formQuiz.datecreation) }}
                </div>
              </div>

              <div class=\"d-flex justify-content-between\">
                <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-secondary\">
                  <i class=\"bi bi-arrow-left\"></i> Go Back to List
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                  {{ edit_mode ? 'Update Quiz' : 'Create Quiz' }}
                </button>
              </div>

            {{ form_end(formQuiz) }}
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
{% endblock %}", "quiz/QuizForm.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\quiz\\QuizForm.html.twig");
    }
}
