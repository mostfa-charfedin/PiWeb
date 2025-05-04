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

/* integration/adminprojet.html.twig */
class __TwigTemplate_6db6240db0342cfed40e713b8f29c143 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration/adminprojet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration/adminprojet.html.twig"));

        $this->parent = $this->load("sideBar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .text-danger p {
            margin-bottom: 0;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        if ((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Edit Project";
        } else {
            yield "Create a Project";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        // line 15
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle d-flex justify-content-between align-items-center\">
    <div>
      <h1>";
        // line 18
        if ((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Edit Project";
        } else {
            yield "Create a Project";
        }
        yield "</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a>Home</a></li>
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_list");
        yield "\">Projects</a></li>
          <li class=\"breadcrumb-item active\">";
        // line 23
        if ((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Edit";
        } else {
            yield "New";
        }
        yield "</li>
        </ol>
      </nav>
    </div>
    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_list");
        yield "\" class=\"btn btn-secondary\">
      <i class=\"bi bi-arrow-left\"></i> Back to the list
    </a>
  </div>

  <section class=\"section\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"pt-4 pb-2\">
              <h5 class=\"card-title text-center pb-0 fs-4\">";
        // line 38
        if ((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 38, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Edit Project";
        } else {
            yield "Create a Project";
        }
        yield "</h5>
              <p class=\"text-center small\">";
        // line 39
        if ((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Update";
        } else {
            yield "Fill in";
        }
        yield " the project information</p>
            </div>

            ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3 needs-validation", "novalidate" => "novalidate"]]);
        yield "

              <div class=\"col-12\">
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 45, $this->source); })()), "titre", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Title"]);
        yield "
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 46, $this->source); })()), "titre", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 48, $this->source); })()), "titre", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "errors", [], "any", false, false, false, 48)) > 0)) ? (" is-invalid") : (""))), "data-role" => "project-title"]]);
        // line 51
        yield "
                ";
        // line 52
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 52, $this->source); })()), "titre", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "any", false, false, false, 52))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                  <div class=\"text-danger mt-1\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 54, $this->source); })()), "titre", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 55
                yield "                      <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 55), "html", null, true);
                yield "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                  </div>
                ";
        }
        // line 59
        yield "              </div>

              <div class=\"col-12\">
                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 63, $this->source); })()), "description", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 65
(isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "errors", [], "any", false, false, false, 65)) > 0)) ? (" is-invalid") : (""))), "rows" => "5", "data-role" => "project-description"]]);
        // line 69
        yield "
                ";
        // line 70
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "                  <div class=\"text-danger mt-1\">
                    ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "errors", [], "any", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 73
                yield "                      <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 73), "html", null, true);
                yield "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "                  </div>
                ";
        }
        // line 77
        yield "              </div>

              <div class=\"col-12\">
                ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 80, $this->source); })()), "iduser", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Project Manager"]);
        yield "
                ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 81, $this->source); })()), "iduser", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 83
(isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 83, $this->source); })()), "iduser", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "errors", [], "any", false, false, false, 83)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 85
        yield "
                ";
        // line 86
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 86, $this->source); })()), "iduser", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "errors", [], "any", false, false, false, 86))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 87
            yield "                  <div class=\"text-danger mt-1\">
                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 88, $this->source); })()), "iduser", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "errors", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 89
                yield "                      <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 89), "html", null, true);
                yield "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "                  </div>
                ";
        }
        // line 93
        yield "              </div>

              <div class=\"col-12 mt-3\">
                <button class=\"btn btn-primary w-100\" type=\"submit\">
                  ";
        // line 97
        if ((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 97, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Update Project";
        } else {
            yield "Create Project";
        }
        // line 98
        yield "                </button>
              </div>

              

            ";
        // line 103
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 103, $this->source); })()), 'form_end');
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
        return "integration/adminprojet.html.twig";
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
        return array (  331 => 103,  324 => 98,  318 => 97,  312 => 93,  308 => 91,  299 => 89,  295 => 88,  292 => 87,  290 => 86,  287 => 85,  285 => 83,  284 => 81,  280 => 80,  275 => 77,  271 => 75,  262 => 73,  258 => 72,  255 => 71,  253 => 70,  250 => 69,  248 => 65,  247 => 63,  243 => 62,  238 => 59,  234 => 57,  225 => 55,  221 => 54,  218 => 53,  216 => 52,  213 => 51,  211 => 48,  210 => 46,  206 => 45,  200 => 42,  190 => 39,  182 => 38,  168 => 27,  157 => 23,  153 => 22,  142 => 18,  137 => 15,  124 => 14,  97 => 12,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'sideBar.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .text-danger p {
            margin-bottom: 0;
        }
    </style>
{% endblock %}

{% block title %}{% if edit_mode %}Edit Project{% else %}Create a Project{% endif %}{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle d-flex justify-content-between align-items-center\">
    <div>
      <h1>{% if edit_mode %}Edit Project{% else %}Create a Project{% endif %}</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a>Home</a></li>
          <li class=\"breadcrumb-item\"><a href=\"{{ path('projet_list') }}\">Projects</a></li>
          <li class=\"breadcrumb-item active\">{% if edit_mode %}Edit{% else %}New{% endif %}</li>
        </ol>
      </nav>
    </div>
    <a href=\"{{ path('projet_list') }}\" class=\"btn btn-secondary\">
      <i class=\"bi bi-arrow-left\"></i> Back to the list
    </a>
  </div>

  <section class=\"section\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"pt-4 pb-2\">
              <h5 class=\"card-title text-center pb-0 fs-4\">{% if edit_mode %}Edit Project{% else %}Create a Project{% endif %}</h5>
              <p class=\"text-center small\">{% if edit_mode %}Update{% else %}Fill in{% endif %} the project information</p>
            </div>

            {{ form_start(formProjet, {'attr': {'class': 'row g-3 needs-validation', 'novalidate': 'novalidate'}}) }}

              <div class=\"col-12\">
                {{ form_label(formProjet.titre, 'Title', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(formProjet.titre, {
                  'attr': {
                    'class': 'form-control' ~ (formProjet.titre.vars.errors|length > 0 ? ' is-invalid' : ''),
                    'data-role': 'project-title'
                  }
                }) }}
                {% if formProjet.titre.vars.errors|length %}
                  <div class=\"text-danger mt-1\">
                    {% for error in formProjet.titre.vars.errors %}
                      <p>{{ error.message }}</p>
                    {% endfor %}
                  </div>
                {% endif %}
              </div>

              <div class=\"col-12\">
                {{ form_label(formProjet.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(formProjet.description, {
                  'attr': {
                    'class': 'form-control' ~ (formProjet.description.vars.errors|length > 0 ? ' is-invalid' : ''),
                    'rows': '5',
                    'data-role': 'project-description'
                  }
                }) }}
                {% if formProjet.description.vars.errors|length %}
                  <div class=\"text-danger mt-1\">
                    {% for error in formProjet.description.vars.errors %}
                      <p>{{ error.message }}</p>
                    {% endfor %}
                  </div>
                {% endif %}
              </div>

              <div class=\"col-12\">
                {{ form_label(formProjet.iduser, 'Project Manager', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(formProjet.iduser, {
                  'attr': {
                    'class': 'form-control' ~ (formProjet.iduser.vars.errors|length > 0 ? ' is-invalid' : '')
                  }
                }) }}
                {% if formProjet.iduser.vars.errors|length %}
                  <div class=\"text-danger mt-1\">
                    {% for error in formProjet.iduser.vars.errors %}
                      <p>{{ error.message }}</p>
                    {% endfor %}
                  </div>
                {% endif %}
              </div>

              <div class=\"col-12 mt-3\">
                <button class=\"btn btn-primary w-100\" type=\"submit\">
                  {% if edit_mode %}Update Project{% else %}Create Project{% endif %}
                </button>
              </div>

              

            {{ form_end(formProjet) }}
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


{% endblock %}
", "integration/adminprojet.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\integration\\adminprojet.html.twig");
    }
}
