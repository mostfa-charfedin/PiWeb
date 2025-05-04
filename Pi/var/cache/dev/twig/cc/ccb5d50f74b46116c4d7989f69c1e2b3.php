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

/* user/profile.html.twig */
class __TwigTemplate_4031423f3185ea908a9a3d4506d9f5f5 extends Template
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
        // line 4
        return $this->load((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "role", [], "any", false, false, false, 4) == "ADMIN")) ? ("sideBar.html.twig") : ("navBar.html.twig")), 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
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

        yield "Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
        <h1>Profile</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"\">Home</a></li>
                <li class=\"breadcrumb-item active\"><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\">Profile</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
<style>
    .error-message {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }
</style>
    <section class=\"section profile\">
        <div class=\"row\">
            <div class=\"col-xl-4\">
                <div class=\"card\">
                    <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
                  
   ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "imageUrl", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "imageUrl", [], "any", false, false, false, 34)), "html", null, true);
            yield "\" alt=\"Profile Image\" width=\"150\">
";
        } else {
            // line 36
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/imgP/logo2.png"), "html", null, true);
            yield "\" alt=\"Default Profile\" class=\"rounded-circle\">
";
        }
        // line 38
        yield "


                        <h2>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "prenom", [], "any", false, false, false, 41), "html", null, true);
        yield "</h2>
                        <h3>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "role", [], "any", false, false, false, 42), "html", null, true);
        yield "</h3>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-8\">
                <div class=\"card\">
                    <div class=\"card-body pt-3\">
                        <!-- Tabs -->
                        <ul class=\"nav nav-tabs nav-tabs-bordered\">
                            <li class=\"nav-item\">
                                <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\">Overview</button>
                            </li>
                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\">Edit Profile</button>
                            </li>
                        </ul>

                        <div class=\"tab-content pt-2\">
                            <!-- PROFILE OVERVIEW -->
                            <div class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">
                  
                                <h5 class=\"card-title\">Profile Details</h5>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Full Name</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "nom", [], "any", false, false, false, 67), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "prenom", [], "any", false, false, false, 67), "html", null, true);
        yield "</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Role</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "role", [], "any", false, false, false, 71), "html", null, true);
        yield "</div>
                                   
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Date of Birth</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "dateNaissance", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true);
        yield "</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Phone</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "numPhone", [], "any", false, false, false, 80), "html", null, true);
        yield "</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Email</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "email", [], "any", false, false, false, 84), "html", null, true);
        yield "</div>
                                </div>

                                 <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">CIN</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "cin", [], "any", false, false, false, 89), "html", null, true);
        yield "</div>
                                </div>
                            </div>

                         <!-- PROFILE EDIT -->
<div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\">

    <form method=\"POST\" enctype=\"multipart/form-data\" novalidate>
        ";
        // line 97
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "


        <!-- Profile Image Section -->    
        <!-- Full Name -->
        <div class=\"row mb-3\">
            <label for=\"nom\" class=\"col-md-4 col-lg-3 col-form-label\">First Name</label>
            <div class=\"col-lg-9 col-md-8\">
                ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "nom", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
             <div class=\"error-message\">";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "nom", [], "any", false, false, false, 106), 'errors');
        yield " </div>
            </div>
        </div>

        <!-- First Name -->
        <div class=\"row mb-3\">
            <label for=\"prenom\" class=\"col-md-4 col-lg-3 col-form-label\">Last Name</label>
            <div class=\"col-md-8 col-lg-9\">
               
                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "prenom", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                  <div class=\"error-message\"> ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "prenom", [], "any", false, false, false, 116), 'errors');
        yield "</div>
            </div>
        </div>

        <!-- Email -->
        <div class=\"row mb-3\">
            <label for=\"email\" class=\"col-md-4 col-lg-3 col-form-label\">Email</label>
            <div class=\"col-md-8 col-lg-9\">
               
                ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "email", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"error-message\"> ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "email", [], "any", false, false, false, 126), 'errors');
        yield "  </div>
            </div>
        </div>

        <!-- Phone Number -->
        <div class=\"row mb-3\">
            <label for=\"numPhone\" class=\"col-md-4 col-lg-3 col-form-label\">Phone Number</label>
            <div class=\"col-md-8 col-lg-9\">
             
                ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "numPhone", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                 <div class=\"error-message\"> ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "numPhone", [], "any", false, false, false, 136), 'errors');
        yield " </div>
            </div>
        </div>

        <!-- Date of Birth -->
        <div class=\"row mb-3\">
            <label for=\"dateNaissance\" class=\"col-md-4 col-lg-3 col-form-label\">Date of Birth</label>
            <div class=\"col-md-8 col-lg-9\">
           
                ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "dateNaissance", [], "any", false, false, false, 145), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
               <div class=\"error-message\"> ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "dateNaissance", [], "any", false, false, false, 146), 'errors');
        yield "</div>
            </div>
        </div>

       <!-- Image Upload -->
        <div class=\"row mb-3\">
            <label for=\"image_url\" class=\"col-md-4 col-lg-3 col-form-label\">Upload Profile Image</label>
            <div class=\"col-md-8 col-lg-9\">
                ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "image_url", [], "any", false, false, false, 154), 'row');
        yield "
             
            </div>
        </div>



        <!-- Save Button -->
        <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "vars", [], "any", false, false, false, 163), "label", [], "any", false, false, false, 163), "html", null, true);
        yield " Save Changes</button>
        </div>

        ";
        // line 166
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), 'form_end');
        yield "
    </form>
</div>

                        </div><!-- End Tabs -->
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
        return "user/profile.html.twig";
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
        return array (  338 => 166,  332 => 163,  320 => 154,  309 => 146,  305 => 145,  293 => 136,  289 => 135,  277 => 126,  273 => 125,  261 => 116,  257 => 115,  245 => 106,  241 => 105,  230 => 97,  219 => 89,  211 => 84,  204 => 80,  197 => 76,  189 => 71,  180 => 67,  152 => 42,  146 => 41,  141 => 38,  135 => 36,  129 => 34,  127 => 33,  107 => 16,  99 => 10,  86 => 9,  63 => 7,  41 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{# templates/base_switch.html.twig #}
{% extends user.role ==\"ADMIN\" ? 'sideBar.html.twig' : 'navBar.html.twig' %}


{% block title %}Profile{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
        <h1>Profile</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"\">Home</a></li>
                <li class=\"breadcrumb-item active\"><a href=\"{{ path('profile') }}\">Profile</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
<style>
    .error-message {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }
</style>
    <section class=\"section profile\">
        <div class=\"row\">
            <div class=\"col-xl-4\">
                <div class=\"card\">
                    <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
                  
   {% if user.imageUrl %}
    <img src=\"{{ asset(user.imageUrl) }}\" alt=\"Profile Image\" width=\"150\">
{% else %}
    <img src=\"{{ asset('assets/imgP/logo2.png') }}\" alt=\"Default Profile\" class=\"rounded-circle\">
{% endif %}



                        <h2>{{ user.nom }} {{ user.prenom }}</h2>
                        <h3>{{ user.role }}</h3>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-8\">
                <div class=\"card\">
                    <div class=\"card-body pt-3\">
                        <!-- Tabs -->
                        <ul class=\"nav nav-tabs nav-tabs-bordered\">
                            <li class=\"nav-item\">
                                <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\">Overview</button>
                            </li>
                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\">Edit Profile</button>
                            </li>
                        </ul>

                        <div class=\"tab-content pt-2\">
                            <!-- PROFILE OVERVIEW -->
                            <div class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">
                  
                                <h5 class=\"card-title\">Profile Details</h5>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Full Name</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ user.nom }} {{ user.prenom }}</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Role</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ user.role }}</div>
                                   
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Date of Birth</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ user.dateNaissance|date('d/m/Y') }}</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Phone</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ user.numPhone }}</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Email</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ user.email }}</div>
                                </div>

                                 <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">CIN</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ user.cin }}</div>
                                </div>
                            </div>

                         <!-- PROFILE EDIT -->
<div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\">

    <form method=\"POST\" enctype=\"multipart/form-data\" novalidate>
        {{ form_start(form, {'attr': { 'novalidate': 'novalidate'}}) }}


        <!-- Profile Image Section -->    
        <!-- Full Name -->
        <div class=\"row mb-3\">
            <label for=\"nom\" class=\"col-md-4 col-lg-3 col-form-label\">First Name</label>
            <div class=\"col-lg-9 col-md-8\">
                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}} )}}
             <div class=\"error-message\">{{ form_errors(form.nom) }} </div>
            </div>
        </div>

        <!-- First Name -->
        <div class=\"row mb-3\">
            <label for=\"prenom\" class=\"col-md-4 col-lg-3 col-form-label\">Last Name</label>
            <div class=\"col-md-8 col-lg-9\">
               
                {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}} )}}
                  <div class=\"error-message\"> {{ form_errors(form.prenom) }}</div>
            </div>
        </div>

        <!-- Email -->
        <div class=\"row mb-3\">
            <label for=\"email\" class=\"col-md-4 col-lg-3 col-form-label\">Email</label>
            <div class=\"col-md-8 col-lg-9\">
               
                {{ form_widget(form.email, {'attr': {'class': 'form-control'}} )}}
                <div class=\"error-message\"> {{ form_errors(form.email) }}  </div>
            </div>
        </div>

        <!-- Phone Number -->
        <div class=\"row mb-3\">
            <label for=\"numPhone\" class=\"col-md-4 col-lg-3 col-form-label\">Phone Number</label>
            <div class=\"col-md-8 col-lg-9\">
             
                {{ form_widget(form.numPhone, {'attr': {'class': 'form-control'}} )}}
                 <div class=\"error-message\"> {{ form_errors(form.numPhone) }} </div>
            </div>
        </div>

        <!-- Date of Birth -->
        <div class=\"row mb-3\">
            <label for=\"dateNaissance\" class=\"col-md-4 col-lg-3 col-form-label\">Date of Birth</label>
            <div class=\"col-md-8 col-lg-9\">
           
                {{ form_widget(form.dateNaissance , {'attr': {'class': 'form-control'}} )}}
               <div class=\"error-message\"> {{ form_errors(form.dateNaissance) }}</div>
            </div>
        </div>

       <!-- Image Upload -->
        <div class=\"row mb-3\">
            <label for=\"image_url\" class=\"col-md-4 col-lg-3 col-form-label\">Upload Profile Image</label>
            <div class=\"col-md-8 col-lg-9\">
                {{ form_row(form.image_url) }}
             
            </div>
        </div>



        <!-- Save Button -->
        <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">{{ form.vars.label }} Save Changes</button>
        </div>

        {{ form_end(form) }}
    </form>
</div>

                        </div><!-- End Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
{% endblock %}
", "user/profile.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\user\\profile.html.twig");
    }
}
