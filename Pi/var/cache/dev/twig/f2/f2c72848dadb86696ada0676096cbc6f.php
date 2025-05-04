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

/* integration/rapport.html.twig */
class __TwigTemplate_6507a8f6f8264ea0f4757234095b3421 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration/rapport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "integration/rapport.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Project Report</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            background: #f8f9fa;
            padding: 20px;
            color: #343a40;
        }
        h1 {
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }
        .project-info, .tasks {
            margin-top: 20px;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .task {
            border-bottom: 1px solid #dee2e6;
            padding: 10px 0;
        }
        .task:last-child {
            border-bottom: none;
        }
        .status {
            font-weight: bold;
            text-transform: capitalize;
        }
        .completed {
            color: green;
        }
        .in-progress {
            color: orange;
        }
        .overdue {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Project Report</h1>

    <div class=\"project-info\">
        <h2>Project Information</h2>
        <p><strong>Title:</strong> ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 53, $this->source); })()), "titre", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
        <p><strong>Description:</strong> ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), "html", null, true);
        yield "</p>
    </div>

    <div class=\"tasks\">
        <h2>Task List</h2>
        ";
        // line 59
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 59, $this->source); })())) > 0)) {
            // line 60
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 60, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
                // line 61
                yield "                <div class=\"task\">
                    <p><strong>Title:</strong> ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "titre", [], "any", false, false, false, 62), "html", null, true);
                yield "</p>
                    <p><strong>Description:</strong> ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "description", [], "any", false, false, false, 63), "html", null, true);
                yield "</p>
                    <p><strong>Creation Date:</strong> ";
                // line 64
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "createdAt", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "createdAt", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true)) : ("Not defined"));
                yield "</p>
                    <p><strong>Estimated Duration:</strong> ";
                // line 65
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "date", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "date", [], "any", false, false, false, 65) . " weeks"), "html", null, true)) : ("Not defined"));
                yield "</p>
                    <p><strong>Status:</strong> 
                        <span class=\"status 
                            ";
                // line 68
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 68) == "Completed")) {
                    yield "completed
                            ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 69
$context["tache"], "isOverdue", [], "method", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "overdue
                            ";
                } else {
                    // line 70
                    yield "in-progress
                            ";
                }
                // line 71
                yield "\">
                            ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "status", [], "any", false, false, false, 72), "html", null, true);
                yield "
                        </span>
                    </p>
                    <p><strong>Assigned User:</strong> ";
                // line 75
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "iduser", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "iduser", [], "any", false, false, false, 75), "nom", [], "any", false, false, false, 75) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "iduser", [], "any", false, false, false, 75), "prenom", [], "any", false, false, false, 75)), "html", null, true)) : ("No user assigned"));
                yield "</p>
                    ";
                // line 76
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "completedAt", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 77
                    yield "                        <p><strong>Completed On:</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "completedAt", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
                    yield "</p>
                        <p><strong>Completed Early:</strong> ";
                    // line 78
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "isCompletedEarly", [], "method", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Yes") : ("No"));
                    yield "</p>
                    ";
                }
                // line 80
                yield "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "        ";
        } else {
            // line 83
            yield "            <p>No tasks associated with this project.</p>
        ";
        }
        // line 85
        yield "    </div>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "integration/rapport.html.twig";
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
        return array (  194 => 85,  190 => 83,  187 => 82,  180 => 80,  175 => 78,  170 => 77,  168 => 76,  164 => 75,  158 => 72,  155 => 71,  151 => 70,  146 => 69,  142 => 68,  136 => 65,  132 => 64,  128 => 63,  124 => 62,  121 => 61,  116 => 60,  114 => 59,  106 => 54,  102 => 53,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Project Report</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            background: #f8f9fa;
            padding: 20px;
            color: #343a40;
        }
        h1 {
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }
        .project-info, .tasks {
            margin-top: 20px;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .task {
            border-bottom: 1px solid #dee2e6;
            padding: 10px 0;
        }
        .task:last-child {
            border-bottom: none;
        }
        .status {
            font-weight: bold;
            text-transform: capitalize;
        }
        .completed {
            color: green;
        }
        .in-progress {
            color: orange;
        }
        .overdue {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Project Report</h1>

    <div class=\"project-info\">
        <h2>Project Information</h2>
        <p><strong>Title:</strong> {{ projet.titre }}</p>
        <p><strong>Description:</strong> {{ projet.description }}</p>
    </div>

    <div class=\"tasks\">
        <h2>Task List</h2>
        {% if taches|length > 0 %}
            {% for tache in taches %}
                <div class=\"task\">
                    <p><strong>Title:</strong> {{ tache.titre }}</p>
                    <p><strong>Description:</strong> {{ tache.description }}</p>
                    <p><strong>Creation Date:</strong> {{ tache.createdAt ? tache.createdAt|date('d/m/Y') : 'Not defined' }}</p>
                    <p><strong>Estimated Duration:</strong> {{ tache.date ? tache.date ~ ' weeks' : 'Not defined' }}</p>
                    <p><strong>Status:</strong> 
                        <span class=\"status 
                            {% if tache.status == 'Completed' %}completed
                            {% elseif tache.isOverdue() %}overdue
                            {% else %}in-progress
                            {% endif %}\">
                            {{ tache.status }}
                        </span>
                    </p>
                    <p><strong>Assigned User:</strong> {{ tache.iduser ? tache.iduser.nom ~ ' ' ~ tache.iduser.prenom : 'No user assigned' }}</p>
                    {% if tache.completedAt %}
                        <p><strong>Completed On:</strong> {{ tache.completedAt|date('d/m/Y') }}</p>
                        <p><strong>Completed Early:</strong> {{ tache.isCompletedEarly() ? 'Yes' : 'No' }}</p>
                    {% endif %}
                </div>
            {% endfor %}
        {% else %}
            <p>No tasks associated with this project.</p>
        {% endif %}
    </div>

</body>
</html>
", "integration/rapport.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\integration\\rapport.html.twig");
    }
}
