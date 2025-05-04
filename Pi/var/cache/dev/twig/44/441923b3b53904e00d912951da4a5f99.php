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

/* user/admin/_details.html.twig */
class __TwigTemplate_624506c3401e3479a4a224484f733649 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/admin/_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/admin/_details.html.twig"));

        // line 1
        yield "<div class=\"row\">
    <div class=\"col-md-4 text-center\">
        <img src=\"";
        // line 3
        yield (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "imageUrl", [], "any", false, false, false, 3))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "imageUrl", [], "any", false, false, false, 3)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/imgP/logo2.png"), "html", null, true)));
        yield "\" alt=\"User Image\"

             class=\"img-fluid rounded-circle mb-3\" width=\"150\" height=\"150\">
    </div>
    <div class=\"col-md-8\">
        <h4>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "prenom", [], "any", false, false, false, 8), "html", null, true);
        yield "</h4>
        <p class=\"text-muted\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), "html", null, true);
        yield "</p>
        
        <div class=\"row mt-4\">
            <div class=\"col-6\">
                <p><strong>Phone:</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "numPhone", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
                <p><strong>CIN:</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "cin", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
            </div>
         
            <div class=\"col-6\">
                <p><strong>Date of birth:</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "dateNaissance", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
        yield "</p>
                <p><strong>Statuts:</strong> 
                      <span class=\"badge bg-";
        // line 20
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20) == "ACTIVE")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20) == "BLOCKED")) ? ("danger") : ("secondary"))));
        yield "\">
                                                ";
        // line 21
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "status", [], "any", false, false, false, 21) == "ACTIVE")) ? ("Actif") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "status", [], "any", false, false, false, 21) == "BLOCKED")) ? ("Bloqué") : ("Inconnu"))));
        yield "
                                            </span>
                </p>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/admin/_details.html.twig";
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
        return array (  93 => 21,  89 => 20,  84 => 18,  77 => 14,  73 => 13,  66 => 9,  60 => 8,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
    <div class=\"col-md-4 text-center\">
        <img src=\"{{ user.imageUrl is not empty ? asset(user.imageUrl) : asset('assets/imgP/logo2.png') }}\" alt=\"User Image\"

             class=\"img-fluid rounded-circle mb-3\" width=\"150\" height=\"150\">
    </div>
    <div class=\"col-md-8\">
        <h4>{{ user.nom }} {{ user.prenom }}</h4>
        <p class=\"text-muted\">{{ user.email }}</p>
        
        <div class=\"row mt-4\">
            <div class=\"col-6\">
                <p><strong>Phone:</strong> {{ user.numPhone }}</p>
                <p><strong>CIN:</strong> {{ user.cin }}</p>
            </div>
         
            <div class=\"col-6\">
                <p><strong>Date of birth:</strong> {{ user.dateNaissance|date('d/m/Y') }}</p>
                <p><strong>Statuts:</strong> 
                      <span class=\"badge bg-{{ user.status == 'ACTIVE' ? 'success' : (user.status == 'BLOCKED' ? 'danger' : 'secondary') }}\">
                                                {{ user.status == 'ACTIVE' ? 'Actif' : (user.status == 'BLOCKED' ? 'Bloqué' : 'Inconnu') }}
                                            </span>
                </p>
            </div>
        </div>
    </div>
</div>", "user/admin/_details.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\user\\admin\\_details.html.twig");
    }
}
