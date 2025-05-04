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

/* recompense/show.html.twig */
class __TwigTemplate_c7a4e9e741976f5ecc8a02a2262aec52 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recompense/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recompense/show.html.twig"));

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

        yield "View Reward";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>Reward Details</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmebienetre_index");
        yield "\">Home</a></li>
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recompense_program", ["idprogramme" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 17, $this->source); })()), "idprogramme", [], "any", false, false, false, 17), "idprogramme", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 17, $this->source); })()), "idprogramme", [], "any", false, false, false, 17), "titre", [], "any", false, false, false, 17), "html", null, true);
        yield "</a></li>
        <li class=\"breadcrumb-item active\">Reward Details</li>
      </ol>
    </nav>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Reward Information</h5>
            
            <div class=\"row mb-3\">
              <div class=\"col-md-6\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">Basic Information</h5>
                    <div class=\"row mb-3\">
                      <div class=\"col-sm-4\">
                        <label class=\"col-form-label\">Type</label>
                      </div>
                      <div class=\"col-sm-8\">
                        <div class=\"form-control-plaintext\">
                          <i class=\"bi bi-tag me-1\"></i>
                          ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42), "html", null, true);
        yield "
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <div class=\"col-sm-4\">
                        <label class=\"col-form-label\">Attribution Date</label>
                      </div>
                      <div class=\"col-sm-8\">
                        <div class=\"form-control-plaintext\">
                          <i class=\"bi bi-calendar3 me-1\"></i>
                          ";
        // line 53
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 53, $this->source); })()), "dateattribution", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 53, $this->source); })()), "dateattribution", [], "any", false, false, false, 53), "M d, Y"), "html", null, true)) : ("Not set"));
        yield "
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class=\"col-md-6\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">Status</h5>
                    <div class=\"row mb-3\">
                      <div class=\"col-sm-4\">
                        <label class=\"col-form-label\">Current Status</label>
                      </div>
                      <div class=\"col-sm-8\">
                        ";
        // line 70
        $context["statusClass"] = ["Pending" => "bg-warning", "Approved" => "bg-success", "Delivered" => "bg-primary", "Cancelled" => "bg-danger"];
        // line 76
        yield "                        <span class=\"badge ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusClass"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 76, $this->source); })()), "statusrecompence", [], "any", false, false, false, 76), [], "array", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 76, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 76, $this->source); })()), "statusrecompence", [], "any", false, false, false, 76), [], "array", false, false, false, 76), "bg-warning")) : ("bg-warning")), "html", null, true);
        yield "\">
                          ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 77, $this->source); })()), "statusrecompence", [], "any", false, false, false, 77), "html", null, true);
        yield "
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class=\"row mb-3\">
              <div class=\"col-12\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">Program Information</h5>
                    <div class=\"row mb-3\">
                      <div class=\"col-sm-2\">
                        <label class=\"col-form-label\">Program</label>
                      </div>
                      <div class=\"col-sm-10\">
                        <div class=\"form-control-plaintext\">
                          <i class=\"bi bi-building me-1\"></i>
                          ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 98, $this->source); })()), "idprogramme", [], "any", false, false, false, 98), "titre", [], "any", false, false, false, 98), "html", null, true);
        yield "
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class=\"text-center mt-4\">
              <a href=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recompense_edit", ["idrecompense" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 108, $this->source); })()), "idrecompense", [], "any", false, false, false, 108)]), "html", null, true);
        yield "\" 
                 class=\"btn btn-warning me-2\">
                <i class=\"bi bi-pencil me-1\"></i>Edit Reward
              </a>
              <form method=\"post\" action=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recompense_delete", ["idrecompense" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 112, $this->source); })()), "idrecompense", [], "any", false, false, false, 112)]), "html", null, true);
        yield "\" 
                    class=\"d-inline\"
                    onsubmit=\"return confirm('Are you sure you want to delete this reward?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 115, $this->source); })()), "idrecompense", [], "any", false, false, false, 115))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-danger\">
                  <i class=\"bi bi-trash me-1\"></i>Delete Reward
                </button>
              </form>
              <a href=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recompense_program", ["idprogramme" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 120, $this->source); })()), "idprogramme", [], "any", false, false, false, 120), "idprogramme", [], "any", false, false, false, 120)]), "html", null, true);
        yield "\" 
                 class=\"btn btn-secondary ms-2\">
                <i class=\"bi bi-arrow-left me-1\"></i>Back to List
              </a>
            </div>
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

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add smooth fade-in animation for card
            const card = document.querySelector('.card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.transition = 'all 0.3s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
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
        return "recompense/show.html.twig";
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
        return array (  306 => 134,  293 => 133,  270 => 120,  262 => 115,  256 => 112,  249 => 108,  236 => 98,  212 => 77,  207 => 76,  205 => 70,  185 => 53,  171 => 42,  141 => 17,  137 => 16,  130 => 11,  117 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'sideBar.html.twig' %}

{% block title %}View Reward{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>Reward Details</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_programmebienetre_index') }}\">Home</a></li>
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_recompense_program', {'idprogramme': recompense.idprogramme.idprogramme}) }}\">{{ recompense.idprogramme.titre }}</a></li>
        <li class=\"breadcrumb-item active\">Reward Details</li>
      </ol>
    </nav>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Reward Information</h5>
            
            <div class=\"row mb-3\">
              <div class=\"col-md-6\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">Basic Information</h5>
                    <div class=\"row mb-3\">
                      <div class=\"col-sm-4\">
                        <label class=\"col-form-label\">Type</label>
                      </div>
                      <div class=\"col-sm-8\">
                        <div class=\"form-control-plaintext\">
                          <i class=\"bi bi-tag me-1\"></i>
                          {{ recompense.type }}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <div class=\"col-sm-4\">
                        <label class=\"col-form-label\">Attribution Date</label>
                      </div>
                      <div class=\"col-sm-8\">
                        <div class=\"form-control-plaintext\">
                          <i class=\"bi bi-calendar3 me-1\"></i>
                          {{ recompense.dateattribution ? recompense.dateattribution|date('M d, Y') : 'Not set' }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class=\"col-md-6\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">Status</h5>
                    <div class=\"row mb-3\">
                      <div class=\"col-sm-4\">
                        <label class=\"col-form-label\">Current Status</label>
                      </div>
                      <div class=\"col-sm-8\">
                        {% set statusClass = {
                            'Pending': 'bg-warning',
                            'Approved': 'bg-success',
                            'Delivered': 'bg-primary',
                            'Cancelled': 'bg-danger'
                        } %}
                        <span class=\"badge {{ statusClass[recompense.statusrecompence]|default('bg-warning') }}\">
                          {{ recompense.statusrecompence }}
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class=\"row mb-3\">
              <div class=\"col-12\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h5 class=\"card-title\">Program Information</h5>
                    <div class=\"row mb-3\">
                      <div class=\"col-sm-2\">
                        <label class=\"col-form-label\">Program</label>
                      </div>
                      <div class=\"col-sm-10\">
                        <div class=\"form-control-plaintext\">
                          <i class=\"bi bi-building me-1\"></i>
                          {{ recompense.idprogramme.titre }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class=\"text-center mt-4\">
              <a href=\"{{ path('app_recompense_edit', {'idrecompense': recompense.idrecompense}) }}\" 
                 class=\"btn btn-warning me-2\">
                <i class=\"bi bi-pencil me-1\"></i>Edit Reward
              </a>
              <form method=\"post\" action=\"{{ path('app_recompense_delete', {'idrecompense': recompense.idrecompense}) }}\" 
                    class=\"d-inline\"
                    onsubmit=\"return confirm('Are you sure you want to delete this reward?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ recompense.idrecompense) }}\">
                <button type=\"submit\" class=\"btn btn-danger\">
                  <i class=\"bi bi-trash me-1\"></i>Delete Reward
                </button>
              </form>
              <a href=\"{{ path('app_recompense_program', {'idprogramme': recompense.idprogramme.idprogramme}) }}\" 
                 class=\"btn btn-secondary ms-2\">
                <i class=\"bi bi-arrow-left me-1\"></i>Back to List
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add smooth fade-in animation for card
            const card = document.querySelector('.card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.transition = 'all 0.3s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
{% endblock %}
", "recompense/show.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\recompense\\show.html.twig");
    }
}
