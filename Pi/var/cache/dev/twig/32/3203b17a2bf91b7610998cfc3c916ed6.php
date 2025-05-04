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

/* programmebienetre/_form_horizontal.html.twig */
class __TwigTemplate_8ec48e6192ef965c163166e4b7f12d83 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programmebienetre/_form_horizontal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programmebienetre/_form_horizontal.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "horizontal-form"]]);
        yield "

<div class=\"row mb-3\">
  <label class=\"col-sm-2 col-form-label\">";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), 'label', ["label" => "Title"]);
        yield "</label>
  <div class=\"col-sm-10\">
    ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter program title"]]);
        // line 11
        yield "
    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), 'errors');
        yield "
  </div>
</div>

<div class=\"row mb-3\">
  <label class=\"col-sm-2 col-form-label\">";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17), 'label', ["label" => "Type"]);
        yield "</label>
  <div class=\"col-sm-10\">
    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select program type"]]);
        // line 24
        yield "
    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25), 'errors');
        yield "
  </div>
</div>

<div class=\"row mb-3\">
  <label class=\"col-sm-2 col-form-label\">";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'label', ["label" => "Description"]);
        yield "</label>
  <div class=\"col-sm-10\">
    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter program description", "rows" => "5"]]);
        // line 38
        yield "
    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), 'errors');
        yield "
  </div>
</div>

<div class=\"row mb-3\">
  <label class=\"col-sm-2 col-form-label\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "iduser", [], "any", false, false, false, 44), 'label', ["label" => "Program Manager"]);
        yield "</label>
  <div class=\"col-sm-10\">
    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "iduser", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select program manager"]]);
        // line 51
        yield "
    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "iduser", [], "any", false, false, false, 52), 'errors');
        yield "
  </div>
</div>

<div class=\"row mb-3\">
  <label class=\"col-sm-2 col-form-label\">";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "date_programme", [], "any", false, false, false, 57), 'label', ["label" => "Program Date"]);
        yield "</label>
  <div class=\"col-sm-10\">
    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "date_programme", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select program date"]]);
        // line 64
        yield "
    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "date_programme", [], "any", false, false, false, 65), 'errors');
        yield "
  </div>
</div>

<div class=\"row mb-3\">
  <div class=\"col-sm-10 offset-sm-2\">
    <button type=\"submit\" class=\"btn btn-primary\">
      ";
        // line 72
        if ((isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 72, $this->source); })())) {
            yield "Update Program";
        } else {
            yield "Create Program";
        }
        // line 73
        yield "    </button>
    <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmebienetre_index");
        yield "\" class=\"btn btn-secondary\">Cancel</a>
  </div>
</div>

";
        // line 78
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
        yield " ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "programmebienetre/_form_horizontal.html.twig";
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
        return array (  162 => 78,  155 => 74,  152 => 73,  146 => 72,  136 => 65,  133 => 64,  131 => 59,  126 => 57,  118 => 52,  115 => 51,  113 => 46,  108 => 44,  100 => 39,  97 => 38,  95 => 32,  90 => 30,  82 => 25,  79 => 24,  77 => 19,  72 => 17,  64 => 12,  61 => 11,  59 => 6,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'horizontal-form'}}) }}

<div class=\"row mb-3\">
  <label class=\"col-sm-2 col-form-label\">{{ form_label(form.titre, 'Title') }}</label>
  <div class=\"col-sm-10\">
    {{ form_widget(form.titre, {
      'attr': {
        'class': 'form-control',
        'placeholder': 'Enter program title'
      }
    }) }}
    {{ form_errors(form.titre) }}
  </div>
</div>

<div class=\"row mb-3\">
  <label class=\"col-sm-2 col-form-label\">{{ form_label(form.type, 'Type') }}</label>
  <div class=\"col-sm-10\">
    {{ form_widget(form.type, {
      'attr': {
        'class': 'form-control',
        'placeholder': 'Select program type'
      }
    }) }}
    {{ form_errors(form.type) }}
  </div>
</div>

<div class=\"row mb-3\">
  <label class=\"col-sm-2 col-form-label\">{{ form_label(form.description, 'Description') }}</label>
  <div class=\"col-sm-10\">
    {{ form_widget(form.description, {
      'attr': {
        'class': 'form-control',
        'placeholder': 'Enter program description',
        'rows': '5'
      }
    }) }}
    {{ form_errors(form.description) }}
  </div>
</div>

<div class=\"row mb-3\">
  <label class=\"col-sm-2 col-form-label\">{{ form_label(form.iduser, 'Program Manager') }}</label>
  <div class=\"col-sm-10\">
    {{ form_widget(form.iduser, {
      'attr': {
        'class': 'form-control',
        'placeholder': 'Select program manager'
      }
    }) }}
    {{ form_errors(form.iduser) }}
  </div>
</div>

<div class=\"row mb-3\">
  <label class=\"col-sm-2 col-form-label\">{{ form_label(form.date_programme, 'Program Date') }}</label>
  <div class=\"col-sm-10\">
    {{ form_widget(form.date_programme, {
      'attr': {
        'class': 'form-control',
        'placeholder': 'Select program date'
      }
    }) }}
    {{ form_errors(form.date_programme) }}
  </div>
</div>

<div class=\"row mb-3\">
  <div class=\"col-sm-10 offset-sm-2\">
    <button type=\"submit\" class=\"btn btn-primary\">
      {% if edit_mode %}Update Program{% else %}Create Program{% endif %}
    </button>
    <a href=\"{{ path('app_programmebienetre_index') }}\" class=\"btn btn-secondary\">Cancel</a>
  </div>
</div>

{{ form_end(form) }} ", "programmebienetre/_form_horizontal.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\programmebienetre\\_form_horizontal.html.twig");
    }
}
