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

/* user/admin/_edit_form.html.twig */
class __TwigTemplate_2c1df23adfc045865098491b348fa598 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/admin/_edit_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/admin/_edit_form.html.twig"));

        // line 1
        yield "
                            
                         <div class=\"container\">
    <div class=\"row justify-content-center\">
    
        <div class=\"col-lg-8\">
            ";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["id" => "user-edit-form", "class" => "row g-3", "novalidate" => "novalidate"]]);
        yield "
            
            
            <div class=\"card\">
                <div class=\"card-body\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("user_update"), "html", null, true);
        yield "\">


                    <!-- Formulaire -->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating mb-3\">
                                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "First Name"]]);
        // line 26
        yield "
                                        <label for=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "\">First Name</label>
                                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating mb-3\">
                                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Last Name"]]);
        // line 38
        yield "
                                        <label for=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "prenom", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
        yield "\">Last Name</label>
                                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"form-floating mb-3\">
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        // line 51
        yield "
                                <label for=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
        yield "\">Email</label>
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'errors');
        yield "
                            </div>
                            
                            <div class=\"col-mt-3\">
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "numPhone", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Phone"]]);
        // line 63
        yield "
                                    <label for=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "numPhone", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "\">Phone</label>
                                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "numPhone", [], "any", false, false, false, 65), 'errors');
        yield "
                                </div>
                            </div>
                            
                            <div class=\"col-mt-3\">
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "dateNaissance", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Date of birth"]]);
        // line 74
        yield "
                                    <label for=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "dateNaissance", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), "html", null, true);
        yield "\">Date of birth</label>
                                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "dateNaissance", [], "any", false, false, false, 76), 'errors');
        yield "
                                </div>
                            </div>


 <!-- Le champ Role -->
                            <div class=\"col-mt-3\">
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "role", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select Role"]]);
        // line 89
        yield "
                                    <label for=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "role", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "html", null, true);
        yield "\">Role</label>
                                    ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "role", [], "any", false, false, false, 91), 'errors');
        yield "
                                </div>
                            </div>
                          
                            
                            <!-- Le champ Status -->
                            <div class=\"col-mt-3\">
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "status", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select Status"]]);
        // line 104
        yield "
                                    <label for=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "status", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105), "html", null, true);
        yield "\">Status</label>
                                    ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "status", [], "any", false, false, false, 106), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"text-center mt-4\">
                                <button type=\"submit\" class=\"btn btn-primary px-4\">
                                    <i class=\"bi bi-save\"></i> Save Changes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            ";
        // line 120
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>

                            



<style>
    .form-control, .form-select {
        border-radius: 0.375rem;
        padding: 0.5rem 1rem;
    }
    .form-floating > .form-control {
        padding: 1rem 0.75rem;
    }
    .form-floating > label {
        padding: 0.75rem;
    }
    .invalid-feedback {
        display: block;
        color: #dc3545;
        font-size: 0.875em;
        margin-top: 0.25rem;
    }
    .card {
        border-radius: 0.5rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/admin/_edit_form.html.twig";
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
        return array (  212 => 120,  195 => 106,  191 => 105,  188 => 104,  186 => 99,  175 => 91,  171 => 90,  168 => 89,  166 => 84,  155 => 76,  151 => 75,  148 => 74,  146 => 71,  137 => 65,  133 => 64,  130 => 63,  128 => 58,  120 => 53,  116 => 52,  113 => 51,  111 => 46,  102 => 40,  98 => 39,  95 => 38,  93 => 33,  85 => 28,  81 => 27,  78 => 26,  76 => 21,  64 => 12,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
                            
                         <div class=\"container\">
    <div class=\"row justify-content-center\">
    
        <div class=\"col-lg-8\">
            {{ form_start(form, {'attr': {'id': 'user-edit-form', 'class': 'row g-3', 'novalidate': 'novalidate'}}) }}
            
            
            <div class=\"card\">
                <div class=\"card-body\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('user_update') }}\">


                    <!-- Formulaire -->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating mb-3\">
                                        {{ form_widget(form.nom, {
                                            'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'First Name'
                                            }
                                        }) }}
                                        <label for=\"{{ form.nom.vars.id }}\">First Name</label>
                                        {{ form_errors(form.nom) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating mb-3\">
                                        {{ form_widget(form.prenom, {
                                            'attr': {
                                                'class': 'form-control',
                                                'placeholder': 'Last Name'
                                            }
                                        }) }}
                                        <label for=\"{{ form.prenom.vars.id }}\">Last Name</label>
                                        {{ form_errors(form.prenom) }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"form-floating mb-3\">
                                {{ form_widget(form.email, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Email'
                                    }
                                }) }}
                                <label for=\"{{ form.email.vars.id }}\">Email</label>
                                {{ form_errors(form.email) }}
                            </div>
                            
                            <div class=\"col-mt-3\">
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(form.numPhone, {
                                        'attr': {
                                            'class': 'form-control',
                                            'placeholder': 'Phone'
                                        }
                                    }) }}
                                    <label for=\"{{ form.numPhone.vars.id }}\">Phone</label>
                                    {{ form_errors(form.numPhone) }}
                                </div>
                            </div>
                            
                            <div class=\"col-mt-3\">
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(form.dateNaissance, {
                                        'attr': {'class': 'form-control',
                                            'placeholder': 'Date of birth'}
                                    }) }}
                                    <label for=\"{{ form.dateNaissance.vars.id }}\">Date of birth</label>
                                    {{ form_errors(form.dateNaissance) }}
                                </div>
                            </div>


 <!-- Le champ Role -->
                            <div class=\"col-mt-3\">
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(form.role, {
                                        'attr': {
                                            'class': 'form-control',
                                            'placeholder': 'Select Role'
                                        }
                                    }) }}
                                    <label for=\"{{ form.role.vars.id }}\">Role</label>
                                    {{ form_errors(form.role) }}
                                </div>
                            </div>
                          
                            
                            <!-- Le champ Status -->
                            <div class=\"col-mt-3\">
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(form.status, {
                                        'attr': {
                                            'class': 'form-control',
                                            'placeholder': 'Select Status'
                                        }
                                    }) }}
                                    <label for=\"{{ form.status.vars.id }}\">Status</label>
                                    {{ form_errors(form.status) }}
                                </div>
                            </div>

                            <div class=\"text-center mt-4\">
                                <button type=\"submit\" class=\"btn btn-primary px-4\">
                                    <i class=\"bi bi-save\"></i> Save Changes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{ form_end(form) }}
        </div>
    </div>
</div>

                            



<style>
    .form-control, .form-select {
        border-radius: 0.375rem;
        padding: 0.5rem 1rem;
    }
    .form-floating > .form-control {
        padding: 1rem 0.75rem;
    }
    .form-floating > label {
        padding: 0.75rem;
    }
    .invalid-feedback {
        display: block;
        color: #dc3545;
        font-size: 0.875em;
        margin-top: 0.25rem;
    }
    .card {
        border-radius: 0.5rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }
</style>", "user/admin/_edit_form.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\user\\admin\\_edit_form.html.twig");
    }
}
