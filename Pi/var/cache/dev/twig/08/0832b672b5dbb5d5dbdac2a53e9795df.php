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

/* avis/index.html.twig */
class __TwigTemplate_b931b8f176e1f3bc115cb67c3554f2c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

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

        yield "Reviews List";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
        <h1>Reviews</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmebienetre_index");
        yield "\">Home</a></li>
                <li class=\"breadcrumb-item active\">Reviews</li>
            </ol>
        </nav>
    </div>

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <h5 class=\"card-title\">Reviews List</h5>
                            <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmebienetre_index");
        yield "\" class=\"btn btn-primary\">
                                <i class=\"bi bi-plus-circle me-1\"></i>
                                Write a Review
                            </a>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>
                                        <th>Program</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 42
            yield "                                        <tr>
                                            <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "programme", [], "any", false, false, false, 43), "titre", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                            <td>
                                                <div class=\"rating\">
                                                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 47
                yield "                                                        ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "rating", [], "any", false, false, false, 47))) {
                    // line 48
                    yield "                                                            <i class=\"bi bi-star-fill text-warning\"></i>
                                                        ";
                } else {
                    // line 50
                    yield "                                                            <i class=\"bi bi-star text-warning\"></i>
                                                        ";
                }
                // line 52
                yield "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "                                                </div>
                                            </td>
                                            <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                                            <td>
                                                <div class=\"btn-group\" role=\"group\">
                                                    ";
            // line 58
            if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "user", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)))) {
                // line 59
                yield "                                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm\" title=\"Edit\">
                                                            <i class=\"bi bi-pencil\"></i>
                                                        </a>
                                                        <form method=\"post\" action=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                yield "\" style=\"display: inline-block;\"
                                                              onsubmit=\"return confirm('Are you sure you want to delete this review?');\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 64))), "html", null, true);
                yield "\">
                                                            <button class=\"btn btn-danger btn-sm\" title=\"Delete\">
                                                                <i class=\"bi bi-trash\"></i>
                                                            </button>
                                                        </form>
                                                    ";
            }
            // line 70
            yield "                                                </div>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 73
        if (!$context['_iterated']) {
            // line 74
            yield "                                        <tr>
                                            <td colspan=\"4\" class=\"text-center\">No reviews found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "                                </tbody>
                            </table>
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

    // line 89
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

        // line 90
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation d'entrée du tableau
            const table = document.querySelector('.table');
            table.style.opacity = '0';
            table.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                table.style.transition = 'all 0.3s ease';
                table.style.opacity = '1';
                table.style.transform = 'translateY(0)';
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
        return "avis/index.html.twig";
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
        return array (  263 => 90,  250 => 89,  230 => 78,  221 => 74,  219 => 73,  212 => 70,  203 => 64,  198 => 62,  191 => 59,  189 => 58,  183 => 55,  179 => 53,  173 => 52,  169 => 50,  165 => 48,  162 => 47,  158 => 46,  152 => 43,  149 => 42,  144 => 41,  124 => 24,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'navBar.html.twig' %}

{% block title %}Reviews List{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
        <h1>Reviews</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_programmebienetre_index') }}\">Home</a></li>
                <li class=\"breadcrumb-item active\">Reviews</li>
            </ol>
        </nav>
    </div>

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <h5 class=\"card-title\">Reviews List</h5>
                            <a href=\"{{ path('app_programmebienetre_index') }}\" class=\"btn btn-primary\">
                                <i class=\"bi bi-plus-circle me-1\"></i>
                                Write a Review
                            </a>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>
                                        <th>Program</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for avi in avis %}
                                        <tr>
                                            <td>{{ avi.programme.titre }}</td>
                                            <td>
                                                <div class=\"rating\">
                                                    {% for i in 1..5 %}
                                                        {% if i <= avi.rating %}
                                                            <i class=\"bi bi-star-fill text-warning\"></i>
                                                        {% else %}
                                                            <i class=\"bi bi-star text-warning\"></i>
                                                        {% endif %}
                                                    {% endfor %}
                                                </div>
                                            </td>
                                            <td>{{ avi.commentaire }}</td>
                                            <td>
                                                <div class=\"btn-group\" role=\"group\">
                                                    {% if user and user.id == avi.user.id %}
                                                        <a href=\"{{ path('app_avis_edit', {'id': avi.id}) }}\" class=\"btn btn-primary btn-sm\" title=\"Edit\">
                                                            <i class=\"bi bi-pencil\"></i>
                                                        </a>
                                                        <form method=\"post\" action=\"{{ path('app_avis_delete', {'id': avi.id}) }}\" style=\"display: inline-block;\"
                                                              onsubmit=\"return confirm('Are you sure you want to delete this review?');\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ avi.id) }}\">
                                                            <button class=\"btn btn-danger btn-sm\" title=\"Delete\">
                                                                <i class=\"bi bi-trash\"></i>
                                                            </button>
                                                        </form>
                                                    {% endif %}
                                                </div>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"4\" class=\"text-center\">No reviews found</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
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
            // Animation d'entrée du tableau
            const table = document.querySelector('.table');
            table.style.opacity = '0';
            table.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                table.style.transition = 'all 0.3s ease';
                table.style.opacity = '1';
                table.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
{% endblock %}
", "avis/index.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\avis\\index.html.twig");
    }
}
