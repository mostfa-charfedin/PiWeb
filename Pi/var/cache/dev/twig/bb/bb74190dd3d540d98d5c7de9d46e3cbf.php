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

/* user/reset_password/reset.html.twig */
class __TwigTemplate_bbcdea9921299900c2aff6828d9a8f2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reset_password/reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reset_password/reset.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Réinitialisation du mot de passe | Onboardify</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">
  <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
</head>

<body>

  <main>
    <div class=\"container\">
      <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

            <div class=\"d-flex justify-content-center py-4\">
                <a href=\"\" class=\"logo d-flex align-items-center w-auto\">
                  <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/imgP/logo2.png"), "html", null, true);
        yield "\" alt=\"\">
                  <span class=\"d-none d-lg-block\">Onboardify</span>
                </a>
              </div>

              <div class=\"card mb-3\">
                <div class=\"card-body\">
                  <div class=\"pt-4 pb-2\">
                    <h5 class=\"card-title text-center pb-0 fs-4\">Réinitialiser votre mot de passe</h5>
                    <p class=\"text-center small\">Entrez votre nouveau mot de passe</p>
                  </div>

                  ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "flashes", ["reset_password_error"], "method", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 50
            yield "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                      ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "
                      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "
               
                  ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 57, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3 needs-validation", "novalidate" => "novalidate"]]);
        yield "
                  
                  <!-- CHAMP UNIQUE (PLAINPASSWORD DIRECT) -->
                  <div class=\"col-12\">
                    <label for=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 61, $this->source); })()), "plainPassword", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        yield "\" class=\"form-label\">Nouveau mot de passe</label>
                    <div class=\"input-group has-validation\">
                      <span class=\"input-group-text\"><i class=\"bi bi-lock\"></i></span>
                      ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 64, $this->source); })()), "plainPassword", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre nouveau mot de passe"]]);
        // line 69
        yield "
                      <div class=\"invalid-feedback\">Veuillez entrer un mot de passe valide.</div>
                    </div>
                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 72, $this->source); })()), "plainPassword", [], "any", false, false, false, 72), 'errors');
        yield "
                  </div>

                  <div class=\"col-12\">
                    <button class=\"btn btn-primary w-100\" type=\"submit\">
                      <i class=\"bi bi-arrow-repeat me-2\"></i>Réinitialiser
                    </button>
                  </div>

                  <div class=\"col-12 text-center\">
                    <p class=\"small mb-0\">
                      <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\"><i class=\"bi bi-arrow-left me-1\"></i>Retour à la connexion</a>
                    </p>
                  </div>

                  ";
        // line 87
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 87, $this->source); })()), 'form_end');
        yield "

                </div>
              </div>

              <div class=\"credits text-center mt-3\">
                <p class=\"small\">© ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Onboardify. Tous droits réservés</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Vendor JS Files -->
  <script src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/reset_password/reset.html.twig";
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
        return array (  204 => 104,  200 => 103,  187 => 93,  178 => 87,  171 => 83,  157 => 72,  152 => 69,  150 => 64,  144 => 61,  137 => 57,  133 => 55,  123 => 51,  120 => 50,  116 => 49,  101 => 37,  84 => 23,  80 => 22,  76 => 21,  66 => 14,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Réinitialisation du mot de passe | Onboardify</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
  <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
</head>

<body>

  <main>
    <div class=\"container\">
      <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

            <div class=\"d-flex justify-content-center py-4\">
                <a href=\"\" class=\"logo d-flex align-items-center w-auto\">
                  <img src=\"{{ asset('assets/imgP/logo2.png') }}\" alt=\"\">
                  <span class=\"d-none d-lg-block\">Onboardify</span>
                </a>
              </div>

              <div class=\"card mb-3\">
                <div class=\"card-body\">
                  <div class=\"pt-4 pb-2\">
                    <h5 class=\"card-title text-center pb-0 fs-4\">Réinitialiser votre mot de passe</h5>
                    <p class=\"text-center small\">Entrez votre nouveau mot de passe</p>
                  </div>

                  {% for flash_error in app.flashes('reset_password_error') %}
                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                      {{ flash_error }}
                      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                  {% endfor %}

               
                  {{ form_start(resetForm, {'attr': {'class': 'row g-3 needs-validation', 'novalidate': 'novalidate'}}) }}
                  
                  <!-- CHAMP UNIQUE (PLAINPASSWORD DIRECT) -->
                  <div class=\"col-12\">
                    <label for=\"{{ resetForm.plainPassword.vars.id }}\" class=\"form-label\">Nouveau mot de passe</label>
                    <div class=\"input-group has-validation\">
                      <span class=\"input-group-text\"><i class=\"bi bi-lock\"></i></span>
                      {{ form_widget(resetForm.plainPassword, {
                        'attr': {
                          'class': 'form-control',
                          'placeholder': 'Entrez votre nouveau mot de passe'
                        }
                      }) }}
                      <div class=\"invalid-feedback\">Veuillez entrer un mot de passe valide.</div>
                    </div>
                    {{ form_errors(resetForm.plainPassword) }}
                  </div>

                  <div class=\"col-12\">
                    <button class=\"btn btn-primary w-100\" type=\"submit\">
                      <i class=\"bi bi-arrow-repeat me-2\"></i>Réinitialiser
                    </button>
                  </div>

                  <div class=\"col-12 text-center\">
                    <p class=\"small mb-0\">
                      <a href=\"{{ path('login') }}\"><i class=\"bi bi-arrow-left me-1\"></i>Retour à la connexion</a>
                    </p>
                  </div>

                  {{ form_end(resetForm) }}

                </div>
              </div>

              <div class=\"credits text-center mt-3\">
                <p class=\"small\">© {{ \"now\"|date(\"Y\") }} Onboardify. Tous droits réservés</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Vendor JS Files -->
  <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/main.js') }}\"></script>

</body>
</html>", "user/reset_password/reset.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\user\\reset_password\\reset.html.twig");
    }
}
