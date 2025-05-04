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

/* recompense/index.html.twig */
class __TwigTemplate_872b87f8a3f9d4956c9b267c3f5cc902 extends Template
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
        return "sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recompense/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recompense/index.html.twig"));

        $this->parent = $this->load("sidebar.html.twig", 1);
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

        yield "Rewards List";
        
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
    <h1>Rewards List</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recompense_program", ["idprogramme" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 16, $this->source); })()), "idprogramme", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\">Home</a></li>
        <li class=\"breadcrumb-item active\">Rewards</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"card-body\">
              <h5 class=\"card-title d-flex justify-content-between align-items-center\">
                All Rewards
                <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recompense_new");
        yield "\" class=\"btn btn-success btn-sm\">
                  <i class=\"bi bi-plus-lg\"></i> Add New Reward
                </a>
              </h5>

              <!-- Table with stripped rows -->
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Type</th>
                    <th scope=\"col\">Attribution Date</th>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\">Program</th>
                    <th scope=\"col\">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recompenses"]) || array_key_exists("recompenses", $context) ? $context["recompenses"] : (function () { throw new RuntimeError('Variable "recompenses" does not exist.', 48, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["recompense"]) {
            // line 49
            yield "                  <tr>
                    <th scope=\"row\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50), "html", null, true);
            yield "</th>
                    <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recompense"], "type", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                    <td>";
            // line 52
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recompense"], "dateattribution", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recompense"], "dateattribution", [], "any", false, false, false, 52), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                    <td>
                      <span class=\"badge bg-primary\">
                        ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recompense"], "statusrecompence", [], "any", false, false, false, 55), "html", null, true);
            yield "
                      </span>
                    </td>
                    <td>";
            // line 58
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recompense"], "idprogramme", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recompense"], "idprogramme", [], "any", false, false, false, 58), "titre", [], "any", false, false, false, 58), "html", null, true)) : ("N/A"));
            yield "</td>
                    <td>
                      <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recompense_show", ["idrecompense" => CoreExtension::getAttribute($this->env, $this->source, $context["recompense"], "idrecompense", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">
                        <i class=\"bi bi-eye\"></i>
                      </a>
                      <a href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recompense_edit", ["idrecompense" => CoreExtension::getAttribute($this->env, $this->source, $context["recompense"], "idrecompense", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">
                        <i class=\"bi bi-pencil-square\"></i>
                      </a>
                      <form method=\"post\" action=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recompense_delete", ["idrecompense" => CoreExtension::getAttribute($this->env, $this->source, $context["recompense"], "idrecompense", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" style=\"display: inline-block;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["recompense"], "idrecompense", [], "any", false, false, false, 67))), "html", null, true);
            yield "\">
                        <button class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Are you sure you want to delete this reward?');\">
                          <i class=\"bi bi-trash\"></i>
                        </button>
                      </form>
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
        // line 74
        if (!$context['_iterated']) {
            // line 75
            yield "                  <tr>
                    <td colspan=\"6\" class=\"text-center\">No rewards found.</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recompense'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
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

    // line 91
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

        // line 92
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add smooth fade-in animation for table rows
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach((row, index) => {
                row.style.opacity = '0';
                row.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    row.style.transition = 'all 0.3s ease';
                    row.style.opacity = '1';
                    row.style.transform = 'translateY(0)';
                }, 100 * index);
            });
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
        return "recompense/index.html.twig";
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
        return array (  302 => 92,  289 => 91,  268 => 79,  259 => 75,  257 => 74,  237 => 67,  233 => 66,  227 => 63,  221 => 60,  216 => 58,  210 => 55,  204 => 52,  200 => 51,  196 => 50,  193 => 49,  175 => 48,  154 => 30,  137 => 16,  130 => 11,  117 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'sidebar.html.twig' %}

{% block title %}Rewards List{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
  <div class=\"pagetitle\">
    <h1>Rewards List</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_recompense_program', {'idprogramme': programme.idprogramme}) }}\">Home</a></li>
        <li class=\"breadcrumb-item active\">Rewards</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"card-body\">
              <h5 class=\"card-title d-flex justify-content-between align-items-center\">
                All Rewards
                <a href=\"{{ path('app_recompense_new') }}\" class=\"btn btn-success btn-sm\">
                  <i class=\"bi bi-plus-lg\"></i> Add New Reward
                </a>
              </h5>

              <!-- Table with stripped rows -->
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Type</th>
                    <th scope=\"col\">Attribution Date</th>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\">Program</th>
                    <th scope=\"col\">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  {% for recompense in recompenses %}
                  <tr>
                    <th scope=\"row\">{{ loop.index }}</th>
                    <td>{{ recompense.type }}</td>
                    <td>{{ recompense.dateattribution ? recompense.dateattribution|date('Y-m-d') : '' }}</td>
                    <td>
                      <span class=\"badge bg-primary\">
                        {{ recompense.statusrecompence }}
                      </span>
                    </td>
                    <td>{{ recompense.idprogramme ? recompense.idprogramme.titre : 'N/A' }}</td>
                    <td>
                      <a href=\"{{ path('app_recompense_show', {'idrecompense': recompense.idrecompense}) }}\" class=\"btn btn-sm btn-primary\">
                        <i class=\"bi bi-eye\"></i>
                      </a>
                      <a href=\"{{ path('app_recompense_edit', {'idrecompense': recompense.idrecompense}) }}\" class=\"btn btn-sm btn-warning\">
                        <i class=\"bi bi-pencil-square\"></i>
                      </a>
                      <form method=\"post\" action=\"{{ path('app_recompense_delete', {'idrecompense': recompense.idrecompense}) }}\" style=\"display: inline-block;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ recompense.idrecompense) }}\">
                        <button class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Are you sure you want to delete this reward?');\">
                          <i class=\"bi bi-trash\"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                  {% else %}
                  <tr>
                    <td colspan=\"6\" class=\"text-center\">No rewards found.</td>
                  </tr>
                  {% endfor %}
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add smooth fade-in animation for table rows
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach((row, index) => {
                row.style.opacity = '0';
                row.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    row.style.transition = 'all 0.3s ease';
                    row.style.opacity = '1';
                    row.style.transform = 'translateY(0)';
                }, 100 * index);
            });
        });
    </script>
{% endblock %}
", "recompense/index.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\recompense\\index.html.twig");
    }
}
