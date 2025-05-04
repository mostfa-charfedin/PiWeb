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

/* integration/task_form.html.twig */
class __TwigTemplate_232a781eb4a35b02f27191ed5434511d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration/task_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration/task_form.html.twig"));

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
        .user-table-container {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            margin-top: 0.5rem;
        }
        .user-table {
            width: 100%;
            margin-bottom: 0;
        }
        .user-table th {
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
        }
        .user-table tr {
            cursor: pointer;
            transition: background-color 0.15s;
        }
        .user-table tr:hover {
            background-color: rgba(0, 0, 0, 0.03);
        }
        .user-table tr.selected {
            background-color: #e9ecef;
            font-weight: 500;
        }
        .user-search {
            margin-bottom: 0.5rem;
        }
        .selected-user {
            padding: 0.5rem;
            background-color: #f8f9fa;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
            border: 1px solid #dee2e6;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
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

        // line 48
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>";
        // line 50
        yield (((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Edit Task") : ("Create New Task"));
        yield "</h1>
  </div>

  <section class=\"section\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">";
        // line 58
        yield (((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Edit Task Details") : ("Create New Task"));
        yield "</h5>

            ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 60, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3", "novalidate" => "novalidate"]]);
        yield "

              ";
        // line 63
        yield "              <div class=\"col-md-12\">
                <label for=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 64, $this->source); })()), "titre", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "\" class=\"form-label\">Title</label>
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 65, $this->source); })()), "titre", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 66
(isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 66, $this->source); })()), "titre", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "errors", [], "any", false, false, false, 66)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 67
        yield "
                ";
        // line 68
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 68, $this->source); })()), "titre", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "errors", [], "any", false, false, false, 68))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                  <div class=\"text-danger mt-1\">
                    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 70, $this->source); })()), "titre", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 71
                yield "                      <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 71), "html", null, true);
                yield "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "                  </div>
                ";
        }
        // line 75
        yield "              </div>

              ";
        // line 78
        yield "              <div class=\"col-md-12\">
                <label for=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79), "html", null, true);
        yield "\" class=\"form-label\">Description</label>
                ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 81
(isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "errors", [], "any", false, false, false, 81)) > 0)) ? (" is-invalid") : (""))), "rows" => 3]]);
        // line 82
        yield "
                ";
        // line 83
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 83, $this->source); })()), "description", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "errors", [], "any", false, false, false, 83))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "                  <div class=\"text-danger mt-1\">
                    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 85, $this->source); })()), "description", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "errors", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 86
                yield "                      <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 86), "html", null, true);
                yield "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "                  </div>
                ";
        }
        // line 90
        yield "              </div>

              ";
        // line 93
        yield "              <div class=\"col-md-12\">
                <label for=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 94, $this->source); })()), "date", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
        yield "\" class=\"form-label\">Date</label>
                ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 95, $this->source); })()), "date", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 96
(isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 96, $this->source); })()), "date", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "errors", [], "any", false, false, false, 96)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 97
        yield "
                ";
        // line 98
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 98, $this->source); })()), "date", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "errors", [], "any", false, false, false, 98))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "                  <div class=\"text-danger mt-1\">
                    ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 100, $this->source); })()), "date", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "errors", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 101
                yield "                      <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 101), "html", null, true);
                yield "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "                  </div>
                ";
        }
        // line 105
        yield "              </div>

              ";
        // line 108
        yield "              <div class=\"col-md-12\">
                <label class=\"form-label\">Assign To</label>
                <div class=\"selected-user\">
                  ";
        // line 111
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 111, $this->source); })()), "iduser", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "value", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "                    ";
            $context["selectedUser"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 112, $this->source); })()), "iduser", [], "any", false, false, false, 112), "vars", [], "any", false, false, false, 112), "choices", [], "any", false, false, false, 112), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 112, $this->source); })()), "iduser", [], "any", false, false, false, 112), "vars", [], "any", false, false, false, 112), "value", [], "any", false, false, false, 112), [], "array", false, false, false, 112), "data", [], "any", false, false, false, 112);
            // line 113
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedUser"]) || array_key_exists("selectedUser", $context) ? $context["selectedUser"] : (function () { throw new RuntimeError('Variable "selectedUser" does not exist.', 113, $this->source); })()), "getNom", [], "method", false, false, false, 113), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedUser"]) || array_key_exists("selectedUser", $context) ? $context["selectedUser"] : (function () { throw new RuntimeError('Variable "selectedUser" does not exist.', 113, $this->source); })()), "getPrenom", [], "method", false, false, false, 113), "html", null, true);
            yield "
                    <span class=\"badge bg-";
            // line 114
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedUser"]) || array_key_exists("selectedUser", $context) ? $context["selectedUser"] : (function () { throw new RuntimeError('Variable "selectedUser" does not exist.', 114, $this->source); })()), "role", [], "any", false, false, false, 114) == "chefprojet")) ? ("warning text-dark") : ("primary"));
            yield "\">
                      ";
            // line 115
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedUser"]) || array_key_exists("selectedUser", $context) ? $context["selectedUser"] : (function () { throw new RuntimeError('Variable "selectedUser" does not exist.', 115, $this->source); })()), "role", [], "any", false, false, false, 115) == "chefprojet")) ? ("Manager") : ("Employee"));
            yield "
                    </span>
                  ";
        } else {
            // line 118
            yield "                    <span class=\"text-muted\">No user selected</span>
                  ";
        }
        // line 120
        yield "                </div>

                <input type=\"text\" class=\"user-search form-control\" placeholder=\"Search users...\">

                <div class=\"user-table-container\">
                  <table class=\"user-table table table-sm table-hover\">
                    <thead class=\"table-light\">
                      <tr>
                        <th>Name</th>
                        <th>Role</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 133, $this->source); })()), "iduser", [], "any", false, false, false, 133), "vars", [], "any", false, false, false, 133), "choices", [], "any", false, false, false, 133));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 134
            yield "                        <tr class=\"user-row ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 134, $this->source); })()), "iduser", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "value", [], "any", false, false, false, 134) == CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 134))) {
                yield "selected";
            }
            yield "\"
                            data-user-id=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 135), "html", null, true);
            yield "\"
                            data-user-label=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, false, 136), "getNom", [], "method", false, false, false, 136), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, false, 136), "getPrenom", [], "method", false, false, false, 136), "html", null, true);
            yield "\"
                            onclick=\"selectUser(this)\">
                          <td>";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, false, 138), "getNom", [], "method", false, false, false, 138), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, false, 138), "getPrenom", [], "method", false, false, false, 138), "html", null, true);
            yield "</td>
                          <td>
                            <span class=\"badge bg-";
            // line 140
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, false, 140), "role", [], "any", false, false, false, 140) == "chefprojet")) ? ("warning text-dark") : ("primary"));
            yield "\">
                              ";
            // line 141
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, false, 141), "role", [], "any", false, false, false, 141) == "chefprojet")) ? ("Manager") : ("Employee"));
            yield "
                            </span>
                          </td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "                    </tbody>
                  </table>
                </div>

                ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 150, $this->source); })()), "iduser", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => "d-none"]]);
        yield "

                ";
        // line 152
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 152, $this->source); })()), "iduser", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "errors", [], "any", false, false, false, 152))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 153
            yield "                  <div class=\"text-danger mt-1\">
                    ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 154, $this->source); })()), "iduser", [], "any", false, false, false, 154), "vars", [], "any", false, false, false, 154), "errors", [], "any", false, false, false, 154));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 155
                yield "                      <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 155), "html", null, true);
                yield "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "                  </div>
                ";
        }
        // line 159
        yield "              </div>

              <div class=\"text-center mt-3\">
                <button type=\"submit\" class=\"btn btn-primary\">
                  <i class=\"bi bi-check-circle\"></i> ";
        // line 163
        yield (((($tmp = (isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 163, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Update Task") : ("Create Task"));
        yield "
                </button>
                <a href=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_show", ["idProjet" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 165, $this->source); })()), "idProjet", [], "any", false, false, false, 165)]), "html", null, true);
        yield "\" class=\"btn btn-secondary ms-2\">Cancel</a>
              </div>

            ";
        // line 168
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 168, $this->source); })()), 'form_end');
        yield "
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
   document.addEventListener('DOMContentLoaded', function () {
    // Add event listener for user selection
    document.querySelectorAll('.user-row').forEach(row => {
        row.addEventListener('click', function() {
            selectUser(row);
        });
    });

    // Search functionality with AJAX
    document.querySelector('.user-search').addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();

        // Make an AJAX request to search users
        fetch(`/search-users?query=\${encodeURIComponent(searchTerm)}`)
            .then(response => response.json())
            .then(data => {
                // Assuming the data is an array of user objects
                updateUserRows(data);
            })
            .catch(error => console.error('Error searching users:', error));
    });

    // Function to update the displayed user rows
    function updateUserRows(users) {
        const userContainer = document.querySelector('.user-list'); // Adjust as necessary
        userContainer.innerHTML = ''; // Clear existing rows

        users.forEach(user => {
            const row = document.createElement('div');
            row.classList.add('user-row');
            row.dataset.userId = user.id;
            row.dataset.userLabel = user.label;

            row.innerHTML = `
                <span>\${user.label}</span>
                <span class=\"badge bg-\${user.status === 'warning' ? 'warning text-dark' : 'primary'}\">
                    \${user.status}
                </span>
            `;
            row.addEventListener('click', function() {
                selectUser(row);
            });
            userContainer.appendChild(row);
        });
    }

    // User selection function
    function selectUser(row) {
        // Update display
        document.querySelector('.selected-user').innerHTML = `
            \${row.dataset.userLabel}
            <span class=\"badge bg-\${row.querySelector('span').className.includes('warning') ? 'warning text-dark' : 'primary'}\">
                \${row.querySelector('span').textContent}
            </span>
        `;
        
        // Update hidden form field
        document.getElementById('";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 234, $this->source); })()), "iduser", [], "any", false, false, false, 234), "vars", [], "any", false, false, false, 234), "id", [], "any", false, false, false, 234), "html", null, true);
        yield "').value = row.dataset.userId;
        
        // Update row highlighting
        document.querySelectorAll('.user-row').forEach(r => r.classList.remove('selected'));
        row.classList.add('selected');
    }
});

</script>
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
        return "integration/task_form.html.twig";
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
        return array (  495 => 234,  426 => 168,  420 => 165,  415 => 163,  409 => 159,  405 => 157,  396 => 155,  392 => 154,  389 => 153,  387 => 152,  382 => 150,  376 => 146,  365 => 141,  361 => 140,  354 => 138,  347 => 136,  343 => 135,  336 => 134,  332 => 133,  317 => 120,  313 => 118,  307 => 115,  303 => 114,  296 => 113,  293 => 112,  291 => 111,  286 => 108,  282 => 105,  278 => 103,  269 => 101,  265 => 100,  262 => 99,  260 => 98,  257 => 97,  255 => 96,  254 => 95,  250 => 94,  247 => 93,  243 => 90,  239 => 88,  230 => 86,  226 => 85,  223 => 84,  221 => 83,  218 => 82,  216 => 81,  215 => 80,  211 => 79,  208 => 78,  204 => 75,  200 => 73,  191 => 71,  187 => 70,  184 => 69,  182 => 68,  179 => 67,  177 => 66,  176 => 65,  172 => 64,  169 => 63,  164 => 60,  159 => 58,  148 => 50,  144 => 48,  131 => 47,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'sideBar.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .user-table-container {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            margin-top: 0.5rem;
        }
        .user-table {
            width: 100%;
            margin-bottom: 0;
        }
        .user-table th {
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
        }
        .user-table tr {
            cursor: pointer;
            transition: background-color 0.15s;
        }
        .user-table tr:hover {
            background-color: rgba(0, 0, 0, 0.03);
        }
        .user-table tr.selected {
            background-color: #e9ecef;
            font-weight: 500;
        }
        .user-search {
            margin-bottom: 0.5rem;
        }
        .selected-user {
            padding: 0.5rem;
            background-color: #f8f9fa;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
            border: 1px solid #dee2e6;
        }
    </style>
{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>{{ edit_mode ? 'Edit Task' : 'Create New Task' }}</h1>
  </div>

  <section class=\"section\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">{{ edit_mode ? 'Edit Task Details' : 'Create New Task' }}</h5>

            {{ form_start(formTache, {'attr': {'class': 'row g-3','novalidate':'novalidate'}}) }}

              {# Title Field #}
              <div class=\"col-md-12\">
                <label for=\"{{ formTache.titre.vars.id }}\" class=\"form-label\">Title</label>
                {{ form_widget(formTache.titre, {
                    'attr': {'class': 'form-control' ~ (formTache.titre.vars.errors|length > 0 ? ' is-invalid' : '')}
                }) }}
                {% if formTache.titre.vars.errors|length %}
                  <div class=\"text-danger mt-1\">
                    {% for error in formTache.titre.vars.errors %}
                      <p>{{ error.message }}</p>
                    {% endfor %}
                  </div>
                {% endif %}
              </div>

              {# Description Field #}
              <div class=\"col-md-12\">
                <label for=\"{{ formTache.description.vars.id }}\" class=\"form-label\">Description</label>
                {{ form_widget(formTache.description, {
                    'attr': {'class': 'form-control' ~ (formTache.description.vars.errors|length > 0 ? ' is-invalid' : ''), 'rows': 3}
                }) }}
                {% if formTache.description.vars.errors|length %}
                  <div class=\"text-danger mt-1\">
                    {% for error in formTache.description.vars.errors %}
                      <p>{{ error.message }}</p>
                    {% endfor %}
                  </div>
                {% endif %}
              </div>

              {# Date Field #}
              <div class=\"col-md-12\">
                <label for=\"{{ formTache.date.vars.id }}\" class=\"form-label\">Date</label>
                {{ form_widget(formTache.date, {
                    'attr': {'class': 'form-control' ~ (formTache.date.vars.errors|length > 0 ? ' is-invalid' : '')}
                }) }}
                {% if formTache.date.vars.errors|length %}
                  <div class=\"text-danger mt-1\">
                    {% for error in formTache.date.vars.errors %}
                      <p>{{ error.message }}</p>
                    {% endfor %}
                  </div>
                {% endif %}
              </div>

              {# User Assignment Field #}
              <div class=\"col-md-12\">
                <label class=\"form-label\">Assign To</label>
                <div class=\"selected-user\">
                  {% if formTache.iduser.vars.value %}
                    {% set selectedUser = formTache.iduser.vars.choices[formTache.iduser.vars.value].data %}
                    {{ selectedUser.getNom() }} {{ selectedUser.getPrenom() }}
                    <span class=\"badge bg-{{ selectedUser.role == 'chefprojet' ? 'warning text-dark' : 'primary' }}\">
                      {{ selectedUser.role == 'chefprojet' ? 'Manager' : 'Employee' }}
                    </span>
                  {% else %}
                    <span class=\"text-muted\">No user selected</span>
                  {% endif %}
                </div>

                <input type=\"text\" class=\"user-search form-control\" placeholder=\"Search users...\">

                <div class=\"user-table-container\">
                  <table class=\"user-table table table-sm table-hover\">
                    <thead class=\"table-light\">
                      <tr>
                        <th>Name</th>
                        <th>Role</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for choice in formTache.iduser.vars.choices %}
                        <tr class=\"user-row {% if formTache.iduser.vars.value == choice.value %}selected{% endif %}\"
                            data-user-id=\"{{ choice.value }}\"
                            data-user-label=\"{{ choice.data.getNom() }} {{ choice.data.getPrenom() }}\"
                            onclick=\"selectUser(this)\">
                          <td>{{ choice.data.getNom() }} {{ choice.data.getPrenom() }}</td>
                          <td>
                            <span class=\"badge bg-{{ choice.data.role == 'chefprojet' ? 'warning text-dark' : 'primary' }}\">
                              {{ choice.data.role == 'chefprojet' ? 'Manager' : 'Employee' }}
                            </span>
                          </td>
                        </tr>
                      {% endfor %}
                    </tbody>
                  </table>
                </div>

                {{ form_widget(formTache.iduser, {'attr': {'class': 'd-none'}}) }}

                {% if formTache.iduser.vars.errors|length %}
                  <div class=\"text-danger mt-1\">
                    {% for error in formTache.iduser.vars.errors %}
                      <p>{{ error.message }}</p>
                    {% endfor %}
                  </div>
                {% endif %}
              </div>

              <div class=\"text-center mt-3\">
                <button type=\"submit\" class=\"btn btn-primary\">
                  <i class=\"bi bi-check-circle\"></i> {{ edit_mode ? 'Update Task' : 'Create Task' }}
                </button>
                <a href=\"{{ path('projet_show', {'idProjet': projet.idProjet}) }}\" class=\"btn btn-secondary ms-2\">Cancel</a>
              </div>

            {{ form_end(formTache) }}
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
   document.addEventListener('DOMContentLoaded', function () {
    // Add event listener for user selection
    document.querySelectorAll('.user-row').forEach(row => {
        row.addEventListener('click', function() {
            selectUser(row);
        });
    });

    // Search functionality with AJAX
    document.querySelector('.user-search').addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();

        // Make an AJAX request to search users
        fetch(`/search-users?query=\${encodeURIComponent(searchTerm)}`)
            .then(response => response.json())
            .then(data => {
                // Assuming the data is an array of user objects
                updateUserRows(data);
            })
            .catch(error => console.error('Error searching users:', error));
    });

    // Function to update the displayed user rows
    function updateUserRows(users) {
        const userContainer = document.querySelector('.user-list'); // Adjust as necessary
        userContainer.innerHTML = ''; // Clear existing rows

        users.forEach(user => {
            const row = document.createElement('div');
            row.classList.add('user-row');
            row.dataset.userId = user.id;
            row.dataset.userLabel = user.label;

            row.innerHTML = `
                <span>\${user.label}</span>
                <span class=\"badge bg-\${user.status === 'warning' ? 'warning text-dark' : 'primary'}\">
                    \${user.status}
                </span>
            `;
            row.addEventListener('click', function() {
                selectUser(row);
            });
            userContainer.appendChild(row);
        });
    }

    // User selection function
    function selectUser(row) {
        // Update display
        document.querySelector('.selected-user').innerHTML = `
            \${row.dataset.userLabel}
            <span class=\"badge bg-\${row.querySelector('span').className.includes('warning') ? 'warning text-dark' : 'primary'}\">
                \${row.querySelector('span').textContent}
            </span>
        `;
        
        // Update hidden form field
        document.getElementById('{{ formTache.iduser.vars.id }}').value = row.dataset.userId;
        
        // Update row highlighting
        document.querySelectorAll('.user-row').forEach(r => r.classList.remove('selected'));
        row.classList.add('selected');
    }
});

</script>
{% endblock %}
", "integration/task_form.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\integration\\task_form.html.twig");
    }
}
