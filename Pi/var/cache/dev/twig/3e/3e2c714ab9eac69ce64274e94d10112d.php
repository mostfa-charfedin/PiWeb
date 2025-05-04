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
class __TwigTemplate_1ce3b50a1fcf08bff655e5d441ff4266 extends Template
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


  
/* Add to your style section */
.echart {
    width: 100%;
    position: relative;
}

#quizRadarChart {
    width: 100%;
    height: 400px;
}

.card-title {
    color: #4154f1;
    position: relative;
    padding-bottom: 10px;
    text-align: center;
}

.card-title:after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    width: 80px;
    height: 2px;
    background: #4154f1;
}

</style>
    <section class=\"section profile\">
        <div class=\"row\">
            <div class=\"col-xl-4\">
                <div class=\"card\">
                    <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
                  
   ";
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "imageUrl", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "imageUrl", [], "any", false, false, false, 66)), "html", null, true);
            yield "\" alt=\"Profile Image\" width=\"150\">
";
        } else {
            // line 68
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/imgP/logo2.png"), "html", null, true);
            yield "\" alt=\"Default Profile\" class=\"rounded-circle\">
";
        }
        // line 70
        yield "


                        <h2>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "nom", [], "any", false, false, false, 73), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "prenom", [], "any", false, false, false, 73), "html", null, true);
        yield "</h2>
                        <h3>";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "role", [], "any", false, false, false, 74), "html", null, true);
        yield "</h3>
                    </div>



<!-- Quiz Stats Section -->
<div class=\"card mt-4\">
    <div class=\"card-body\">
        <h4 class=\"card-title text-center mb-4\">Quiz Statistics</h4>
            ";
        // line 83
        if ((($tmp = (isset($context["geminiMessage"]) || array_key_exists("geminiMessage", $context) ? $context["geminiMessage"] : (function () { throw new RuntimeError('Variable "geminiMessage" does not exist.', 83, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "        <div class=\"alert alert-info\">
            <strong>Personalized Insights:</strong> ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["geminiMessage"]) || array_key_exists("geminiMessage", $context) ? $context["geminiMessage"] : (function () { throw new RuntimeError('Variable "geminiMessage" does not exist.', 85, $this->source); })()), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 88
        yield "        <div class=\"row text-center mb-4\">
            <div class=\"col-md-6\">
                <div class=\"stat-box p-3 bg-light rounded shadow-sm\">
                    <h5 class=\"text-primary\">Quizzes Passed</h5>
                    <p class=\"display-6 text-dark\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quizzesPassed"]) || array_key_exists("quizzesPassed", $context) ? $context["quizzesPassed"] : (function () { throw new RuntimeError('Variable "quizzesPassed" does not exist.', 92, $this->source); })()), "html", null, true);
        yield "</p>
                </div>
            </div>

           
            <div class=\"col-md-6\">
                <div class=\"stat-box p-3 bg-light rounded shadow-sm\">
                    <h5 class=\"text-primary\">Quizzes Available</h5>
                    <p class=\"display-6 text-dark\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuizzesAvailable"]) || array_key_exists("totalQuizzesAvailable", $context) ? $context["totalQuizzesAvailable"] : (function () { throw new RuntimeError('Variable "totalQuizzesAvailable" does not exist.', 100, $this->source); })()), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>

        <div class=\"top-quizzes-section mb-4\">
            <h5 class=\"text-center mb-3\">Top 3 Quizzes</h5>
            <div class=\"list-group\">
                ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top3Scores"]) || array_key_exists("top3Scores", $context) ? $context["top3Scores"] : (function () { throw new RuntimeError('Variable "top3Scores" does not exist.', 108, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 109
            yield "                    <div class=\"list-group-item d-flex justify-content-between align-items-center py-3\">
                        <div>
                            <i class=\"bi bi-trophy-fill me-2 text-warning\"></i>
                            <span class=\"fw-bold\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 112), "nom", [], "any", false, false, false, 112), "html", null, true);
            yield "</span>
                        </div>
                        <span class=\"badge bg-primary rounded-pill px-3 py-2\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "score", [], "any", false, false, false, 114), "html", null, true);
            yield "%</span>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 116
        if (!$context['_iterated']) {
            // line 117
            yield "                    <div class=\"list-group-item text-center py-3\">
                        <i class=\"bi bi-info-circle me-2\"></i>No quizzes passed yet.
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['score'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "            </div>
        </div>

        
    </div>
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
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 154, $this->source); })()), "nom", [], "any", false, false, false, 154), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 154, $this->source); })()), "prenom", [], "any", false, false, false, 154), "html", null, true);
        yield "</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Role</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 158, $this->source); })()), "role", [], "any", false, false, false, 158), "html", null, true);
        yield "</div>
                                   
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Date of Birth</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 163, $this->source); })()), "dateNaissance", [], "any", false, false, false, 163), "d/m/Y"), "html", null, true);
        yield "</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Phone</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "numPhone", [], "any", false, false, false, 167), "html", null, true);
        yield "</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Email</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 171, $this->source); })()), "email", [], "any", false, false, false, 171), "html", null, true);
        yield "</div>
                                </div>

                                 <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">CIN</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 176, $this->source); })()), "cin", [], "any", false, false, false, 176), "html", null, true);
        yield "</div>
                                </div>
                            </div>

                         <!-- PROFILE EDIT -->
<div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\">

    <form method=\"POST\" enctype=\"multipart/form-data\" novalidate>
        ";
        // line 184
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "


        <!-- Profile Image Section -->    
        <!-- Full Name -->
        <div class=\"row mb-3\">
            <label for=\"nom\" class=\"col-md-4 col-lg-3 col-form-label\">First Name</label>
            <div class=\"col-lg-9 col-md-8\">
                ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "nom", [], "any", false, false, false, 192), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
             <div class=\"error-message\">";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "nom", [], "any", false, false, false, 193), 'errors');
        yield " </div>
            </div>
        </div>

        <!-- First Name -->
        <div class=\"row mb-3\">
            <label for=\"prenom\" class=\"col-md-4 col-lg-3 col-form-label\">Last Name</label>
            <div class=\"col-md-8 col-lg-9\">
               
                ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "prenom", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                  <div class=\"error-message\"> ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "prenom", [], "any", false, false, false, 203), 'errors');
        yield "</div>
            </div>
        </div>

        <!-- Email -->
        <div class=\"row mb-3\">
            <label for=\"email\" class=\"col-md-4 col-lg-3 col-form-label\">Email</label>
            <div class=\"col-md-8 col-lg-9\">
               
                ";
        // line 212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "email", [], "any", false, false, false, 212), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"error-message\"> ";
        // line 213
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "email", [], "any", false, false, false, 213), 'errors');
        yield "  </div>
            </div>
        </div>

        <!-- Phone Number -->
        <div class=\"row mb-3\">
            <label for=\"numPhone\" class=\"col-md-4 col-lg-3 col-form-label\">Phone Number</label>
            <div class=\"col-md-8 col-lg-9\">
             
                ";
        // line 222
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "numPhone", [], "any", false, false, false, 222), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                 <div class=\"error-message\"> ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "numPhone", [], "any", false, false, false, 223), 'errors');
        yield " </div>
            </div>
        </div>

        <!-- Date of Birth -->
        <div class=\"row mb-3\">
            <label for=\"dateNaissance\" class=\"col-md-4 col-lg-3 col-form-label\">Date of Birth</label>
            <div class=\"col-md-8 col-lg-9\">
           
                ";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "dateNaissance", [], "any", false, false, false, 232), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
               <div class=\"error-message\"> ";
        // line 233
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "dateNaissance", [], "any", false, false, false, 233), 'errors');
        yield "</div>
            </div>
        </div>

       <!-- Image Upload -->
        <div class=\"row mb-3\">
            <label for=\"image_url\" class=\"col-md-4 col-lg-3 col-form-label\">Upload Profile Image</label>
            <div class=\"col-md-8 col-lg-9\">
                ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "image_url", [], "any", false, false, false, 241), 'row');
        yield "
             
            </div>
        </div>



        <!-- Save Button -->
        <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "vars", [], "any", false, false, false, 250), "label", [], "any", false, false, false, 250), "html", null, true);
        yield " Save Changes</button>
        </div>

        ";
        // line 253
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), 'form_end');
        yield "
    </form>
</div>

                        </div><!-- End Tabs -->

                        <!-- Radar Chart -->
        <div class=\"card mt-4\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Performance Radar</h5>
                <div id=\"quizRadarChart\" style=\"min-height: 400px;\"></div>
            </div>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->



";
        // line 275
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 276
        yield "   
    <script src=\"https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js\"></script>
    <script>
        document.addEventListener(\"DOMContentLoaded\", () => {
            // Get data from Twig
            const quizCategories = ";
        // line 281
        yield json_encode((isset($context["quizCategories"]) || array_key_exists("quizCategories", $context) ? $context["quizCategories"] : (function () { throw new RuntimeError('Variable "quizCategories" does not exist.', 281, $this->source); })()));
        yield ";
            const userPerformance = ";
        // line 282
        yield json_encode((isset($context["userPerformanceData"]) || array_key_exists("userPerformanceData", $context) ? $context["userPerformanceData"] : (function () { throw new RuntimeError('Variable "userPerformanceData" does not exist.', 282, $this->source); })()));
        yield ";
            const averageScores = ";
        // line 283
        yield json_encode((isset($context["averageScoresData"]) || array_key_exists("averageScoresData", $context) ? $context["averageScoresData"] : (function () { throw new RuntimeError('Variable "averageScoresData" does not exist.', 283, $this->source); })()));
        yield ";

            // Initialize chart
            const chart = echarts.init(document.getElementById('quizRadarChart'));
            
            chart.setOption({
                tooltip: {
                    trigger: 'item',
                    formatter: params => {
                        return `\${params.seriesName}<br/>\${params.name}: \${params.value}%`;
                    }
                },
                legend: {
                    data: ['Your Performance', 'Class Average'],
                    bottom: 10
                },
                radar: {
                    indicator: quizCategories,
                    radius: '65%',
                    splitNumber: 4,
                    axisName: {
                        color: '#333',
                        fontSize: 12
                    },
                    splitArea: {
                        areaStyle: {
                            color: ['rgba(65, 84, 241, 0.1)',
                                    'rgba(65, 84, 241, 0.2)',
                                    'rgba(65, 84, 241, 0.4)',
                                    'rgba(65, 84, 241, 0.6)']
                        }
                    },
                    axisLine: {
                        lineStyle: {
                            color: 'rgba(65, 84, 241, 0.5)'
                        }
                    },
                    splitLine: {
                        lineStyle: {
                            color: 'rgba(65, 84, 241, 0.5)'
                        }
                    }
                },
                series: [{
                    name: 'Your Performance',
                    type: 'radar',
                    data: [{
                        value: userPerformance,
                        name: 'Your Performance',
                        areaStyle: {
                            color: 'rgba(65, 84, 241, 0.4)'
                        },
                        lineStyle: {
                            color: 'rgba(65, 84, 241, 1)',
                            width: 2
                        },
                        symbolSize: 6
                    }, {
                        value: averageScores,
                        name: 'Class Average',
                        areaStyle: {
                            color: 'rgba(220, 220, 220, 0.4)'
                        },
                        lineStyle: {
                            color: 'rgba(220, 220, 220, 1)',
                            width: 2
                        },
                        symbolSize: 6
                    }]
                }]
            });

            window.addEventListener('resize', function() {
                chart.resize();
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
        return array (  525 => 283,  521 => 282,  517 => 281,  510 => 276,  487 => 275,  462 => 253,  456 => 250,  444 => 241,  433 => 233,  429 => 232,  417 => 223,  413 => 222,  401 => 213,  397 => 212,  385 => 203,  381 => 202,  369 => 193,  365 => 192,  354 => 184,  343 => 176,  335 => 171,  328 => 167,  321 => 163,  313 => 158,  304 => 154,  269 => 121,  260 => 117,  258 => 116,  251 => 114,  246 => 112,  241 => 109,  236 => 108,  225 => 100,  214 => 92,  208 => 88,  202 => 85,  199 => 84,  197 => 83,  185 => 74,  179 => 73,  174 => 70,  168 => 68,  162 => 66,  160 => 65,  108 => 16,  100 => 10,  87 => 9,  64 => 7,  42 => 4,);
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


  
/* Add to your style section */
.echart {
    width: 100%;
    position: relative;
}

#quizRadarChart {
    width: 100%;
    height: 400px;
}

.card-title {
    color: #4154f1;
    position: relative;
    padding-bottom: 10px;
    text-align: center;
}

.card-title:after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    width: 80px;
    height: 2px;
    background: #4154f1;
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



<!-- Quiz Stats Section -->
<div class=\"card mt-4\">
    <div class=\"card-body\">
        <h4 class=\"card-title text-center mb-4\">Quiz Statistics</h4>
            {% if geminiMessage %}
        <div class=\"alert alert-info\">
            <strong>Personalized Insights:</strong> {{ geminiMessage }}
        </div>
    {% endif %}
        <div class=\"row text-center mb-4\">
            <div class=\"col-md-6\">
                <div class=\"stat-box p-3 bg-light rounded shadow-sm\">
                    <h5 class=\"text-primary\">Quizzes Passed</h5>
                    <p class=\"display-6 text-dark\">{{ quizzesPassed }}</p>
                </div>
            </div>

           
            <div class=\"col-md-6\">
                <div class=\"stat-box p-3 bg-light rounded shadow-sm\">
                    <h5 class=\"text-primary\">Quizzes Available</h5>
                    <p class=\"display-6 text-dark\">{{ totalQuizzesAvailable }}</p>
                </div>
            </div>
        </div>

        <div class=\"top-quizzes-section mb-4\">
            <h5 class=\"text-center mb-3\">Top 3 Quizzes</h5>
            <div class=\"list-group\">
                {% for score in top3Scores %}
                    <div class=\"list-group-item d-flex justify-content-between align-items-center py-3\">
                        <div>
                            <i class=\"bi bi-trophy-fill me-2 text-warning\"></i>
                            <span class=\"fw-bold\">{{ score.quiz.nom }}</span>
                        </div>
                        <span class=\"badge bg-primary rounded-pill px-3 py-2\">{{ score.score }}%</span>
                    </div>
                {% else %}
                    <div class=\"list-group-item text-center py-3\">
                        <i class=\"bi bi-info-circle me-2\"></i>No quizzes passed yet.
                    </div>
                {% endfor %}
            </div>
        </div>

        
    </div>
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

                        <!-- Radar Chart -->
        <div class=\"card mt-4\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Performance Radar</h5>
                <div id=\"quizRadarChart\" style=\"min-height: 400px;\"></div>
            </div>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->



{% block javascripts %}
   
    <script src=\"https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js\"></script>
    <script>
        document.addEventListener(\"DOMContentLoaded\", () => {
            // Get data from Twig
            const quizCategories = {{ quizCategories|json_encode|raw }};
            const userPerformance = {{ userPerformanceData|json_encode|raw }};
            const averageScores = {{ averageScoresData|json_encode|raw }};

            // Initialize chart
            const chart = echarts.init(document.getElementById('quizRadarChart'));
            
            chart.setOption({
                tooltip: {
                    trigger: 'item',
                    formatter: params => {
                        return `\${params.seriesName}<br/>\${params.name}: \${params.value}%`;
                    }
                },
                legend: {
                    data: ['Your Performance', 'Class Average'],
                    bottom: 10
                },
                radar: {
                    indicator: quizCategories,
                    radius: '65%',
                    splitNumber: 4,
                    axisName: {
                        color: '#333',
                        fontSize: 12
                    },
                    splitArea: {
                        areaStyle: {
                            color: ['rgba(65, 84, 241, 0.1)',
                                    'rgba(65, 84, 241, 0.2)',
                                    'rgba(65, 84, 241, 0.4)',
                                    'rgba(65, 84, 241, 0.6)']
                        }
                    },
                    axisLine: {
                        lineStyle: {
                            color: 'rgba(65, 84, 241, 0.5)'
                        }
                    },
                    splitLine: {
                        lineStyle: {
                            color: 'rgba(65, 84, 241, 0.5)'
                        }
                    }
                },
                series: [{
                    name: 'Your Performance',
                    type: 'radar',
                    data: [{
                        value: userPerformance,
                        name: 'Your Performance',
                        areaStyle: {
                            color: 'rgba(65, 84, 241, 0.4)'
                        },
                        lineStyle: {
                            color: 'rgba(65, 84, 241, 1)',
                            width: 2
                        },
                        symbolSize: 6
                    }, {
                        value: averageScores,
                        name: 'Class Average',
                        areaStyle: {
                            color: 'rgba(220, 220, 220, 0.4)'
                        },
                        lineStyle: {
                            color: 'rgba(220, 220, 220, 1)',
                            width: 2
                        },
                        symbolSize: 6
                    }]
                }]
            });

            window.addEventListener('resize', function() {
                chart.resize();
            });
        });
    </script>
{% endblock %}
{% endblock %}
", "user/profile.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\user\\profile.html.twig");
    }
}
