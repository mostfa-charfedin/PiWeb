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

/* integration/adminlist.html.twig */
class __TwigTemplate_86405bf62c93396b67cc9545ffb532f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration/adminlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration/adminlist.html.twig"));

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

        yield "Project List";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>Project List</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a>Home</a></li>
        <li class=\"breadcrumb-item active\">Projects</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title d-flex justify-content-between align-items-center\">
              Project List
              <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_new");
        yield "\" class=\"btn btn-success btn-sm\">
                <i class=\"bi bi-plus-lg\"></i> Add New Project
              </a>
            </h5>

            <!-- Table with stripped rows -->
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th scope=\"col\">#</th>
                  <th scope=\"col\">Title</th>
                  <th scope=\"col\">Description</th>
                  <th scope=\"col\">Project Manager</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 43
            yield "                <tr>
                  <th scope=\"row\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44), "html", null, true);
            yield "</th>
                  <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "titre", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                  <td>";
            // line 46
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 46)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 46), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 46), "html", null, true)));
            yield "</td>
                  <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "iduser", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "iduser", [], "any", false, false, false, 47), "prenom", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                  <td>
                    <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_show", ["idProjet" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "idProjet", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">
                      <i class=\"bi bi-eye\"></i>
                    </a>
                    <a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_edit", ["idProjet" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "idProjet", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">
                      <i class=\"bi bi-pencil-square\"></i>
                    </a>
                    <!-- Button to open modal -->
                    <button type=\"button\" class=\"btn btn-sm btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "idProjet", [], "any", false, false, false, 56), "html", null, true);
            yield "\">
                      <i class=\"bi bi-trash\"></i>
                    </button>

                    <!-- Delete Confirmation Modal -->
                    <div class=\"modal fade\" id=\"deleteModal";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "idProjet", [], "any", false, false, false, 61), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "idProjet", [], "any", false, false, false, 61), "html", null, true);
            yield "\" aria-hidden=\"true\">
                      <div class=\"modal-dialog modal-dialog-centered\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"deleteModalLabel";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "idProjet", [], "any", false, false, false, 65), "html", null, true);
            yield "\">Confirm Deletion</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                          </div>
                          <div class=\"modal-body\">
                            Are you sure you want to delete the project <strong>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "titre", [], "any", false, false, false, 69), "html", null, true);
            yield "</strong>?
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                            <a href=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_delete", ["idProjet" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "idProjet", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\" class=\"btn btn-danger\">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal -->

                  </td>
                </tr>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 82
        if (!$context['_iterated']) {
            // line 83
            yield "                <tr>
                  <td colspan=\"5\" class=\"text-center\">No projects found.</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['projet'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->
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
        return "integration/adminlist.html.twig";
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
        return array (  257 => 87,  248 => 83,  246 => 82,  224 => 73,  217 => 69,  210 => 65,  201 => 61,  193 => 56,  186 => 52,  180 => 49,  173 => 47,  169 => 46,  165 => 45,  161 => 44,  158 => 43,  140 => 42,  120 => 25,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/integration/adminlist.html.twig #}
{% extends 'sideBar.html.twig' %}

{% block title %}Project List{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>Project List</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a>Home</a></li>
        <li class=\"breadcrumb-item active\">Projects</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title d-flex justify-content-between align-items-center\">
              Project List
              <a href=\"{{ path('projet_new') }}\" class=\"btn btn-success btn-sm\">
                <i class=\"bi bi-plus-lg\"></i> Add New Project
              </a>
            </h5>

            <!-- Table with stripped rows -->
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th scope=\"col\">#</th>
                  <th scope=\"col\">Title</th>
                  <th scope=\"col\">Description</th>
                  <th scope=\"col\">Project Manager</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for projet in projets %}
                <tr>
                  <th scope=\"row\">{{ loop.index }}</th>
                  <td>{{ projet.titre }}</td>
                  <td>{{ projet.description|length > 50 ? projet.description|slice(0, 50) ~ '...' : projet.description }}</td>
                  <td>{{ projet.iduser.nom }} {{ projet.iduser.prenom }}</td>
                  <td>
                    <a href=\"{{ path('projet_show', {'idProjet': projet.idProjet}) }}\" class=\"btn btn-sm btn-primary\">
                      <i class=\"bi bi-eye\"></i>
                    </a>
                    <a href=\"{{ path('projet_edit', {'idProjet': projet.idProjet}) }}\" class=\"btn btn-sm btn-warning\">
                      <i class=\"bi bi-pencil-square\"></i>
                    </a>
                    <!-- Button to open modal -->
                    <button type=\"button\" class=\"btn btn-sm btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ projet.idProjet }}\">
                      <i class=\"bi bi-trash\"></i>
                    </button>

                    <!-- Delete Confirmation Modal -->
                    <div class=\"modal fade\" id=\"deleteModal{{ projet.idProjet }}\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel{{ projet.idProjet }}\" aria-hidden=\"true\">
                      <div class=\"modal-dialog modal-dialog-centered\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"deleteModalLabel{{ projet.idProjet }}\">Confirm Deletion</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                          </div>
                          <div class=\"modal-body\">
                            Are you sure you want to delete the project <strong>{{ projet.titre }}</strong>?
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                            <a href=\"{{ path('projet_delete', {'idProjet': projet.idProjet}) }}\" class=\"btn btn-danger\">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal -->

                  </td>
                </tr>
                {% else %}
                <tr>
                  <td colspan=\"5\" class=\"text-center\">No projects found.</td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->
{% endblock %}
", "integration/adminlist.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\integration\\adminlist.html.twig");
    }
}
