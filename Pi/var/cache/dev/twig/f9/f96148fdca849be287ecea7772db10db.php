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

/* programmebienetre/user_show.html.twig */
class __TwigTemplate_7d4becdbadccbc958579864d6a569ba5 extends Template
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
        return "navBar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programmebienetre/user_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programmebienetre/user_show.html.twig"));

        $this->parent = $this->load("navBar.html.twig", 1);
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

        yield "Program Details";
        
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
    <h1>Program Details</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmebienetre_index");
        yield "\">Home</a></li>
        <li class=\"breadcrumb-item\">Programs</li>
        <li class=\"breadcrumb-item active\">Program Details</li>
      </ol>
    </nav>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Program Information</h5>

            <div class=\"row mb-3\">
              <div class=\"col-sm-3\">
                <h6 class=\"mb-0\">Title</h6>
              </div>
              <div class=\"col-sm-9 text-secondary\">
                ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["programmebienetre"]) || array_key_exists("programmebienetre", $context) ? $context["programmebienetre"] : (function () { throw new RuntimeError('Variable "programmebienetre" does not exist.', 35, $this->source); })()), "titre", [], "any", false, false, false, 35), "html", null, true);
        yield "
              </div>
            </div>

            <div class=\"row mb-3\">
              <div class=\"col-sm-3\">
                <h6 class=\"mb-0\">Type</h6>
              </div>
              <div class=\"col-sm-9 text-secondary\">
                <span class=\"badge bg-primary\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["programmebienetre"]) || array_key_exists("programmebienetre", $context) ? $context["programmebienetre"] : (function () { throw new RuntimeError('Variable "programmebienetre" does not exist.', 44, $this->source); })()), "type", [], "any", false, false, false, 44), "html", null, true);
        yield "</span>
              </div>
            </div>

            <div class=\"row mb-3\">
              <div class=\"col-sm-3\">
                <h6 class=\"mb-0\">Description</h6>
              </div>
              <div class=\"col-sm-9 text-secondary\">
                ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["programmebienetre"]) || array_key_exists("programmebienetre", $context) ? $context["programmebienetre"] : (function () { throw new RuntimeError('Variable "programmebienetre" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), "html", null, true);
        yield "
              </div>
            </div>

            <div class=\"row mb-3\">
              <div class=\"col-sm-3\">
                <h6 class=\"mb-0\">Program Manager</h6>
              </div>
              <div class=\"col-sm-9 text-secondary\">
                ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["programmebienetre"]) || array_key_exists("programmebienetre", $context) ? $context["programmebienetre"] : (function () { throw new RuntimeError('Variable "programmebienetre" does not exist.', 62, $this->source); })()), "iduser", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["programmebienetre"]) || array_key_exists("programmebienetre", $context) ? $context["programmebienetre"] : (function () { throw new RuntimeError('Variable "programmebienetre" does not exist.', 62, $this->source); })()), "iduser", [], "any", false, false, false, 62), "prenom", [], "any", false, false, false, 62), "html", null, true);
        yield "
              </div>
            </div>

            <div class=\"row mb-3\">
              <div class=\"col-sm-3\">
                <h6 class=\"mb-0\">Program Date</h6>
              </div>
              <div class=\"col-sm-9 text-secondary\">
                ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["programmebienetre"]) || array_key_exists("programmebienetre", $context) ? $context["programmebienetre"] : (function () { throw new RuntimeError('Variable "programmebienetre" does not exist.', 71, $this->source); })()), "dateProgramme", [], "any", false, false, false, 71), "Y-m-d"), "html", null, true);
        yield "
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-12\">
                <a href=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmebienetre_edit", ["idprogramme" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["programmebienetre"]) || array_key_exists("programmebienetre", $context) ? $context["programmebienetre"] : (function () { throw new RuntimeError('Variable "programmebienetre" does not exist.', 77, $this->source); })()), "idprogramme", [], "any", false, false, false, 77)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                  <i class=\"bi bi-pencil\"></i> Edit Program
                </a>
                <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmebienetre_index");
        yield "\" class=\"btn btn-secondary\">
                  <i class=\"bi bi-arrow-left\"></i> Back to List
                </a>
              </div>
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

    // line 93
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

        // line 94
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
        return "programmebienetre/user_show.html.twig";
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
        return array (  260 => 94,  247 => 93,  224 => 80,  218 => 77,  209 => 71,  195 => 62,  183 => 53,  171 => 44,  159 => 35,  137 => 16,  130 => 11,  117 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'navBar.html.twig' %}

{% block title %}Program Details{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>Program Details</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_programmebienetre_index') }}\">Home</a></li>
        <li class=\"breadcrumb-item\">Programs</li>
        <li class=\"breadcrumb-item active\">Program Details</li>
      </ol>
    </nav>
  </div>

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Program Information</h5>

            <div class=\"row mb-3\">
              <div class=\"col-sm-3\">
                <h6 class=\"mb-0\">Title</h6>
              </div>
              <div class=\"col-sm-9 text-secondary\">
                {{ programmebienetre.titre }}
              </div>
            </div>

            <div class=\"row mb-3\">
              <div class=\"col-sm-3\">
                <h6 class=\"mb-0\">Type</h6>
              </div>
              <div class=\"col-sm-9 text-secondary\">
                <span class=\"badge bg-primary\">{{ programmebienetre.type }}</span>
              </div>
            </div>

            <div class=\"row mb-3\">
              <div class=\"col-sm-3\">
                <h6 class=\"mb-0\">Description</h6>
              </div>
              <div class=\"col-sm-9 text-secondary\">
                {{ programmebienetre.description }}
              </div>
            </div>

            <div class=\"row mb-3\">
              <div class=\"col-sm-3\">
                <h6 class=\"mb-0\">Program Manager</h6>
              </div>
              <div class=\"col-sm-9 text-secondary\">
                {{ programmebienetre.iduser.nom }} {{ programmebienetre.iduser.prenom }}
              </div>
            </div>

            <div class=\"row mb-3\">
              <div class=\"col-sm-3\">
                <h6 class=\"mb-0\">Program Date</h6>
              </div>
              <div class=\"col-sm-9 text-secondary\">
                {{ programmebienetre.dateProgramme|date('Y-m-d') }}
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-12\">
                <a href=\"{{ path('app_programmebienetre_edit', {'idprogramme': programmebienetre.idprogramme}) }}\" class=\"btn btn-primary\">
                  <i class=\"bi bi-pencil\"></i> Edit Program
                </a>
                <a href=\"{{ path('app_programmebienetre_index') }}\" class=\"btn btn-secondary\">
                  <i class=\"bi bi-arrow-left\"></i> Back to List
                </a>
              </div>
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
{% endblock %}", "programmebienetre/user_show.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\programmebienetre\\user_show.html.twig");
    }
}
