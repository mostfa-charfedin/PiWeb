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

/* integration/adminshow.html.twig */
class __TwigTemplate_a2e8553991406bd35576810376c2cd28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration/adminshow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration/adminshow.html.twig"));

        $this->parent = $this->load("sideBar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Project Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle d-flex justify-content-between align-items-center\">
    <div>
      <h1>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a>Home</a></li>
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_list");
        yield "\">Projects</a></li>
          <li class=\"breadcrumb-item active\">Details</li>
        </ol>
      </nav>
    </div>
    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_list");
        yield "\" class=\"btn btn-secondary\">
      <i class=\"bi bi-arrow-left\"></i> Back
    </a>
  </div>

  <section class=\"section\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8\">
        <div class=\"card mb-4\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Project Information</h5>
            <p><strong>Manager:</strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 28, $this->source); })()), "iduser", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 28, $this->source); })()), "iduser", [], "any", false, false, false, 28), "prenom", [], "any", false, false, false, 28), "html", null, true);
        yield "</p>
            <p><strong>Description:</strong> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
          </div>
        </div>

        <div class=\"d-flex justify-content-between align-items-center mb-3\">
          <h5>Tasks</h5>
          <div>
          <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_rapport", ["idProjet" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 36, $this->source); })()), "idProjet", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
    Download repport PDF
</a>

            <a href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_stats", ["idProjet" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 40, $this->source); })()), "idProjet", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\" class=\"btn btn-info me-2\">
              <i class=\"bi bi-bar-chart\"></i> Show Statistics
            </a>
            <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tache_new", ["idProjet" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 43, $this->source); })()), "idProjet", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
              <i class=\"bi bi-plus-circle\"></i> Add Task
            </a>
          </div>
        </div>

        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 50
            yield "          <div class=\"card mb-2\">
            <div class=\"card-body\">
              <h6>
                ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "titre", [], "any", false, false, false, 53), "html", null, true);
            yield "
                <span class=\"badge bg-info text-dark\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 54), "html", null, true);
            yield "</span>
              </h6>
              <p>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "description", [], "any", false, false, false, 56), "html", null, true);
            yield "</p>
              <small>Assigned to: ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "iduser", [], "any", false, false, false, 57), "nom", [], "any", false, false, false, 57), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "iduser", [], "any", false, false, false, 57), "prenom", [], "any", false, false, false, 57), "html", null, true);
            yield "</small>
              <div class=\"mt-2 text-end\">
                <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tache_edit", ["idTache" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "idtache", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning me-1\">
                  <i class=\"bi bi-pencil\"></i> Edit
                </a>

                <!-- Trigger modal -->
                <button type=\"button\" class=\"btn btn-sm btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteTaskModal";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "idtache", [], "any", false, false, false, 64), "html", null, true);
            yield "\">
                  <i class=\"bi bi-trash\"></i> Delete
                </button>

                <!-- Modal -->
                <div class=\"modal fade\" id=\"deleteTaskModal";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "idtache", [], "any", false, false, false, 69), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"deleteTaskModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "idtache", [], "any", false, false, false, 69), "html", null, true);
            yield "\" aria-hidden=\"true\">
                  <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"deleteTaskModalLabel";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "idtache", [], "any", false, false, false, 73), "html", null, true);
            yield "\">Confirm Deletion</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                      </div>
                      <div class=\"modal-body\">
                        Are you sure you want to delete the task <strong>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "titre", [], "any", false, false, false, 77), "html", null, true);
            yield "</strong>?
                      </div>
                      <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                        <a href=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tache_delete", ["idTache" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "idtache", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\" class=\"btn btn-danger\">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal -->

              </div>
            </div>
          </div>
        ";
            $context['_iterated'] = true;
        }
        // line 91
        if (!$context['_iterated']) {
            // line 92
            yield "          <p class=\"text-muted\">No tasks yet.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "      </div>
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
        return "integration/adminshow.html.twig";
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
        return array (  265 => 94,  258 => 92,  256 => 91,  241 => 81,  234 => 77,  227 => 73,  218 => 69,  210 => 64,  202 => 59,  195 => 57,  191 => 56,  186 => 54,  182 => 53,  177 => 50,  172 => 49,  163 => 43,  157 => 40,  150 => 36,  140 => 29,  134 => 28,  120 => 17,  112 => 12,  105 => 8,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'sideBar.html.twig' %}
{% block title %}Project Details{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle d-flex justify-content-between align-items-center\">
    <div>
      <h1>{{ projet.titre }}</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a>Home</a></li>
          <li class=\"breadcrumb-item\"><a href=\"{{ path('projet_list') }}\">Projects</a></li>
          <li class=\"breadcrumb-item active\">Details</li>
        </ol>
      </nav>
    </div>
    <a href=\"{{ path('projet_list') }}\" class=\"btn btn-secondary\">
      <i class=\"bi bi-arrow-left\"></i> Back
    </a>
  </div>

  <section class=\"section\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8\">
        <div class=\"card mb-4\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Project Information</h5>
            <p><strong>Manager:</strong> {{ projet.iduser.nom }} {{ projet.iduser.prenom }}</p>
            <p><strong>Description:</strong> {{ projet.description }}</p>
          </div>
        </div>

        <div class=\"d-flex justify-content-between align-items-center mb-3\">
          <h5>Tasks</h5>
          <div>
          <a href=\"{{ path('projet_rapport', {idProjet: projet.idProjet}) }}\" class=\"btn btn-primary\">
    Download repport PDF
</a>

            <a href=\"{{ path('projet_stats', {'idProjet': projet.idProjet}) }}\" class=\"btn btn-info me-2\">
              <i class=\"bi bi-bar-chart\"></i> Show Statistics
            </a>
            <a href=\"{{ path('tache_new', {'idProjet': projet.idProjet}) }}\" class=\"btn btn-primary\">
              <i class=\"bi bi-plus-circle\"></i> Add Task
            </a>
          </div>
        </div>

        {% for tache in taches %}
          <div class=\"card mb-2\">
            <div class=\"card-body\">
              <h6>
                {{ tache.titre }}
                <span class=\"badge bg-info text-dark\">{{ tache.status }}</span>
              </h6>
              <p>{{ tache.description }}</p>
              <small>Assigned to: {{ tache.iduser.nom }} {{ tache.iduser.prenom }}</small>
              <div class=\"mt-2 text-end\">
                <a href=\"{{ path('tache_edit', {'idTache': tache.idtache}) }}\" class=\"btn btn-sm btn-warning me-1\">
                  <i class=\"bi bi-pencil\"></i> Edit
                </a>

                <!-- Trigger modal -->
                <button type=\"button\" class=\"btn btn-sm btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteTaskModal{{ tache.idtache }}\">
                  <i class=\"bi bi-trash\"></i> Delete
                </button>

                <!-- Modal -->
                <div class=\"modal fade\" id=\"deleteTaskModal{{ tache.idtache }}\" tabindex=\"-1\" aria-labelledby=\"deleteTaskModalLabel{{ tache.idtache }}\" aria-hidden=\"true\">
                  <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"deleteTaskModalLabel{{ tache.idtache }}\">Confirm Deletion</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                      </div>
                      <div class=\"modal-body\">
                        Are you sure you want to delete the task <strong>{{ tache.titre }}</strong>?
                      </div>
                      <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                        <a href=\"{{ path('tache_delete', {'idTache': tache.idtache}) }}\" class=\"btn btn-danger\">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal -->

              </div>
            </div>
          </div>
        {% else %}
          <p class=\"text-muted\">No tasks yet.</p>
        {% endfor %}
      </div>
    </div>
  </section>
</main>
{% endblock %}
", "integration/adminshow.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\integration\\adminshow.html.twig");
    }
}
