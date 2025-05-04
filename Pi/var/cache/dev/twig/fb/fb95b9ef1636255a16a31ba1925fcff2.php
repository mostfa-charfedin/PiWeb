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

/* recompense/_form_horizontal.html.twig */
class __TwigTemplate_6e602a263bf9eb92d378ba9f88bd1644 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recompense/_form_horizontal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recompense/_form_horizontal.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        yield "
    <div class=\"col-md-6\">
        <div class=\"form-floating\">
            ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "type", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type"]]);
        yield "
            ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "type", [], "any", false, false, false, 5), 'label', ["label" => "Type"]);
        yield "
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "type", [], "any", false, false, false, 6), 'errors');
        yield "
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-floating\">
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "dateattribution", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Attribution Date"]]);
        yield "
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "dateattribution", [], "any", false, false, false, 13), 'label', ["label" => "Attribution Date"]);
        yield "
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "dateattribution", [], "any", false, false, false, 14), 'errors');
        yield "
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-floating\">
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "statusrecompence", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Status"]]);
        yield "
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "statusrecompence", [], "any", false, false, false, 21), 'label', ["label" => "Status"]);
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "statusrecompence", [], "any", false, false, false, 22), 'errors');
        yield "
        </div>
    </div>

    <div class=\"text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"bi bi-save me-1\"></i>
            ";
        // line 29
        if ((isset($context["edit_mode"]) || array_key_exists("edit_mode", $context) ? $context["edit_mode"] : (function () { throw new RuntimeError('Variable "edit_mode" does not exist.', 29, $this->source); })())) {
            yield "Update";
        } else {
            yield "Create";
        }
        yield " Reward
        </button>
        ";
        // line 31
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["recompense"] ?? null), "idprogramme", [], "any", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 31, $this->source); })()), "idprogramme", [], "any", false, false, false, 31)))) {
            // line 32
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recompense_program", ["idprogramme" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recompense"]) || array_key_exists("recompense", $context) ? $context["recompense"] : (function () { throw new RuntimeError('Variable "recompense" does not exist.', 32, $this->source); })()), "idprogramme", [], "any", false, false, false, 32), "idprogramme", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" class=\"btn btn-secondary ms-2\">
                <i class=\"bi bi-arrow-left me-1\"></i>Back to List
            </a>
        ";
        } else {
            // line 36
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recompense_index");
            yield "\" class=\"btn btn-secondary ms-2\">
                <i class=\"bi bi-arrow-left me-1\"></i>Back to List
            </a>
        ";
        }
        // line 40
        yield "    </div>
";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
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
        return "recompense/_form_horizontal.html.twig";
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
        return array (  136 => 41,  133 => 40,  125 => 36,  117 => 32,  115 => 31,  106 => 29,  96 => 22,  92 => 21,  88 => 20,  79 => 14,  75 => 13,  71 => 12,  62 => 6,  58 => 5,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'row g-3'}}) }}
    <div class=\"col-md-6\">
        <div class=\"form-floating\">
            {{ form_widget(form.type, {'attr': {'class': 'form-control', 'placeholder': 'Type'}}) }}
            {{ form_label(form.type, 'Type') }}
            {{ form_errors(form.type) }}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-floating\">
            {{ form_widget(form.dateattribution, {'attr': {'class': 'form-control', 'placeholder': 'Attribution Date'}}) }}
            {{ form_label(form.dateattribution, 'Attribution Date') }}
            {{ form_errors(form.dateattribution) }}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-floating\">
            {{ form_widget(form.statusrecompence, {'attr': {'class': 'form-control', 'placeholder': 'Status'}}) }}
            {{ form_label(form.statusrecompence, 'Status') }}
            {{ form_errors(form.statusrecompence) }}
        </div>
    </div>

    <div class=\"text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"bi bi-save me-1\"></i>
            {% if edit_mode %}Update{% else %}Create{% endif %} Reward
        </button>
        {% if recompense.idprogramme is defined and recompense.idprogramme is not null %}
            <a href=\"{{ path('app_recompense_program', {'idprogramme': recompense.idprogramme.idprogramme}) }}\" class=\"btn btn-secondary ms-2\">
                <i class=\"bi bi-arrow-left me-1\"></i>Back to List
            </a>
        {% else %}
            <a href=\"{{ path('app_recompense_index') }}\" class=\"btn btn-secondary ms-2\">
                <i class=\"bi bi-arrow-left me-1\"></i>Back to List
            </a>
        {% endif %}
    </div>
{{ form_end(form) }} ", "recompense/_form_horizontal.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\recompense\\_form_horizontal.html.twig");
    }
}
