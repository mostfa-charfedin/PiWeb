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

/* user/inscrit.html.twig */
class __TwigTemplate_f165f2afbdf30c6b1d7843c6a01121d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/inscrit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/inscrit.html.twig"));

        // line 1
        yield "
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Sign Up</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">
  <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 28
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
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/imgP/logo2.png"), "html", null, true);
        yield "\" alt=\"\">
                  <span class=\"d-none d-lg-block\">Onboardify</span>
                </a>
              </div>

              <div class=\"card mb-3\">
                <div class=\"card-body\">
                  <div class=\"pt-4 pb-2\">
                    <h5 class=\"card-title text-center pb-0 fs-4\">Create an account</h5>
                    <p class=\"text-center small\">Fill in the fields to register</p>
                  </div>
";
        // line 53
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 53, $this->source); })()), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53)) > 0)) {
            // line 54
            yield "    <ul>
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 55, $this->source); })()), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 56
                yield "            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 56), "html", null, true);
                yield "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "    </ul>
";
        }
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 60, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscrit"), "attr" => ["class" => "row g-3 needs-validation", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        // line 68
        yield "

<!-- First name (Nom) -->
<div class=\"col-md-6\">
    <label for=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 72, $this->source); })()), "nom", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        yield "\" class=\"form-label\">First name</label>
    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 73, $this->source); })()), "nom", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    ";
        // line 74
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 74, $this->source); })()), "nom", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74))) {
            // line 75
            yield "      <div class=\"text-danger\">
        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 76, $this->source); })()), "nom", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "errors", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 77
                yield "          <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 77), "html", null, true);
                yield "</small>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "      </div>
    ";
        }
        // line 81
        yield "</div>

<!-- Last name (Prénom) -->
<div class=\"col-md-6\">
    <label for=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 85, $this->source); })()), "prenom", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
        yield "\" class=\"form-label\">Last name</label>
    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 86, $this->source); })()), "prenom", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    ";
        // line 87
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 87, $this->source); })()), "prenom", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "errors", [], "any", false, false, false, 87))) {
            // line 88
            yield "      <div class=\"text-danger\">
        ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 89, $this->source); })()), "prenom", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "errors", [], "any", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 90
                yield "          <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 90), "html", null, true);
                yield "</small>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "      </div>
    ";
        }
        // line 94
        yield "</div>

<!-- Email -->
<div class=\"col-md-6\">
    <label for=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98), "html", null, true);
        yield "\" class=\"form-label\">Email</label>
    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 99, $this->source); })()), "email", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    ";
        // line 100
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 100, $this->source); })()), "email", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "errors", [], "any", false, false, false, 100))) {
            // line 101
            yield "      <div class=\"text-danger\">
        ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 102, $this->source); })()), "email", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "errors", [], "any", false, false, false, 102));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 103
                yield "          <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 103), "html", null, true);
                yield "</small>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "      </div>
    ";
        }
        // line 107
        yield "</div>

<!-- Password -->
<div class=\"col-md-6\">
    <label for=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 111, $this->source); })()), "password", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
        yield "\" class=\"form-label\">Password</label>
    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 112, $this->source); })()), "password", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    ";
        // line 113
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 113, $this->source); })()), "password", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "errors", [], "any", false, false, false, 113))) {
            // line 114
            yield "      <div class=\"text-danger\">
        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 115, $this->source); })()), "password", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "errors", [], "any", false, false, false, 115));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 116
                yield "          <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 116), "html", null, true);
                yield "</small>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            yield "      </div>
    ";
        }
        // line 120
        yield "</div>

<!-- CIN -->
<div class=\"col-md-6\">
    <label for=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 124, $this->source); })()), "cin", [], "any", false, false, false, 124), "vars", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124), "html", null, true);
        yield "\" class=\"form-label\">CIN</label>
    ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 125, $this->source); })()), "cin", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    ";
        // line 126
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 126, $this->source); })()), "cin", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "errors", [], "any", false, false, false, 126))) {
            // line 127
            yield "      <div class=\"text-danger\">
        ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 128, $this->source); })()), "cin", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "errors", [], "any", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 129
                yield "          <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 129), "html", null, true);
                yield "</small>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            yield "      </div>
    ";
        }
        // line 133
        yield "</div>

<!-- Phone number (numPhone) -->
<div class=\"col-md-6\">
    <label for=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 137, $this->source); })()), "numPhone", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137), "html", null, true);
        yield "\" class=\"form-label\">Phone number</label>
    ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 138, $this->source); })()), "numPhone", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    ";
        // line 139
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 139, $this->source); })()), "numPhone", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "errors", [], "any", false, false, false, 139))) {
            // line 140
            yield "      <div class=\"text-danger\">
        ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 141, $this->source); })()), "numPhone", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "errors", [], "any", false, false, false, 141));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 142
                yield "          <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 142), "html", null, true);
                yield "</small>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "      </div>
    ";
        }
        // line 146
        yield "</div>

<!-- Date of birth (datenaissance) -->
<div class=\"col-mt-3\">
    <label for=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 150, $this->source); })()), "datenaissance", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "id", [], "any", false, false, false, 150), "html", null, true);
        yield "\" class=\"form-label\">Date of birth</label>
    ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 151, $this->source); })()), "datenaissance", [], "any", false, false, false, 151), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    ";
        // line 152
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 152, $this->source); })()), "datenaissance", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "errors", [], "any", false, false, false, 152))) {
            // line 153
            yield "      <div class=\"text-danger\">
        ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 154, $this->source); })()), "datenaissance", [], "any", false, false, false, 154), "vars", [], "any", false, false, false, 154), "errors", [], "any", false, false, false, 154));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 155
                yield "          <small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 155), "html", null, true);
                yield "</small>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "      </div>
    ";
        }
        // line 159
        yield "</div>

<!-- Submit button -->
<div class=\"col-12 mt-3\">
    <button class=\"btn btn-primary w-100\" type=\"submit\">Create account</button>
</div>

<!-- Link to login -->
<div class=\"col-12 text-center mt-2\">
    <p class=\"small mb-0\">Already have an account? <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\">Login</a></p>
</div>

";
        // line 171
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formB"]) || array_key_exists("formB", $context) ? $context["formB"] : (function () { throw new RuntimeError('Variable "formB" does not exist.', 171, $this->source); })()), 'form_end');
        yield "




                </div>
              </div>

          

            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <script src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
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
        return "user/inscrit.html.twig";
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
        return array (  449 => 189,  445 => 188,  425 => 171,  419 => 168,  408 => 159,  404 => 157,  395 => 155,  391 => 154,  388 => 153,  386 => 152,  382 => 151,  378 => 150,  372 => 146,  368 => 144,  359 => 142,  355 => 141,  352 => 140,  350 => 139,  346 => 138,  342 => 137,  336 => 133,  332 => 131,  323 => 129,  319 => 128,  316 => 127,  314 => 126,  310 => 125,  306 => 124,  300 => 120,  296 => 118,  287 => 116,  283 => 115,  280 => 114,  278 => 113,  274 => 112,  270 => 111,  264 => 107,  260 => 105,  251 => 103,  247 => 102,  244 => 101,  242 => 100,  238 => 99,  234 => 98,  228 => 94,  224 => 92,  215 => 90,  211 => 89,  208 => 88,  206 => 87,  202 => 86,  198 => 85,  192 => 81,  188 => 79,  179 => 77,  175 => 76,  172 => 75,  170 => 74,  166 => 73,  162 => 72,  156 => 68,  154 => 60,  150 => 58,  141 => 56,  137 => 55,  134 => 54,  132 => 53,  118 => 42,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  67 => 15,  63 => 14,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Sign Up</title>
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
  <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">
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
                    <h5 class=\"card-title text-center pb-0 fs-4\">Create an account</h5>
                    <p class=\"text-center small\">Fill in the fields to register</p>
                  </div>
{% if formB.vars.errors|length > 0 %}
    <ul>
        {% for error in formB.vars.errors %}
            <li>{{ error.message }}</li>
        {% endfor %}
    </ul>
{% endif %}
{{ form_start(formB, {
    'method': 'POST', 
    'action': path('inscrit'), 
    'attr': {
        'class': 'row g-3 needs-validation', 
        'novalidate': 'novalidate',
        'enctype': 'multipart/form-data'
    }
}) }}

<!-- First name (Nom) -->
<div class=\"col-md-6\">
    <label for=\"{{ formB.nom.vars.id }}\" class=\"form-label\">First name</label>
    {{ form_widget(formB.nom, {'attr': {'class': 'form-control'}}) }}
    {% if formB.nom.vars.errors|length %}
      <div class=\"text-danger\">
        {% for error in formB.nom.vars.errors %}
          <small>{{ error.message }}</small>
        {% endfor %}
      </div>
    {% endif %}
</div>

<!-- Last name (Prénom) -->
<div class=\"col-md-6\">
    <label for=\"{{ formB.prenom.vars.id }}\" class=\"form-label\">Last name</label>
    {{ form_widget(formB.prenom, {'attr': {'class': 'form-control'}}) }}
    {% if formB.prenom.vars.errors|length %}
      <div class=\"text-danger\">
        {% for error in formB.prenom.vars.errors %}
          <small>{{ error.message }}</small>
        {% endfor %}
      </div>
    {% endif %}
</div>

<!-- Email -->
<div class=\"col-md-6\">
    <label for=\"{{ formB.email.vars.id }}\" class=\"form-label\">Email</label>
    {{ form_widget(formB.email, {'attr': {'class': 'form-control'}}) }}
    {% if formB.email.vars.errors|length %}
      <div class=\"text-danger\">
        {% for error in formB.email.vars.errors %}
          <small>{{ error.message }}</small>
        {% endfor %}
      </div>
    {% endif %}
</div>

<!-- Password -->
<div class=\"col-md-6\">
    <label for=\"{{ formB.password.vars.id }}\" class=\"form-label\">Password</label>
    {{ form_widget(formB.password, {'attr': {'class': 'form-control'}}) }}
    {% if formB.password.vars.errors|length %}
      <div class=\"text-danger\">
        {% for error in formB.password.vars.errors %}
          <small>{{ error.message }}</small>
        {% endfor %}
      </div>
    {% endif %}
</div>

<!-- CIN -->
<div class=\"col-md-6\">
    <label for=\"{{ formB.cin.vars.id }}\" class=\"form-label\">CIN</label>
    {{ form_widget(formB.cin, {'attr': {'class': 'form-control'}}) }}
    {% if formB.cin.vars.errors|length %}
      <div class=\"text-danger\">
        {% for error in formB.cin.vars.errors %}
          <small>{{ error.message }}</small>
        {% endfor %}
      </div>
    {% endif %}
</div>

<!-- Phone number (numPhone) -->
<div class=\"col-md-6\">
    <label for=\"{{ formB.numPhone.vars.id }}\" class=\"form-label\">Phone number</label>
    {{ form_widget(formB.numPhone, {'attr': {'class': 'form-control'}}) }}
    {% if formB.numPhone.vars.errors|length %}
      <div class=\"text-danger\">
        {% for error in formB.numPhone.vars.errors %}
          <small>{{ error.message }}</small>
        {% endfor %}
      </div>
    {% endif %}
</div>

<!-- Date of birth (datenaissance) -->
<div class=\"col-mt-3\">
    <label for=\"{{ formB.datenaissance.vars.id }}\" class=\"form-label\">Date of birth</label>
    {{ form_widget(formB.datenaissance, {'attr': {'class': 'form-control'}}) }}
    {% if formB.datenaissance.vars.errors|length %}
      <div class=\"text-danger\">
        {% for error in formB.datenaissance.vars.errors %}
          <small>{{ error.message }}</small>
        {% endfor %}
      </div>
    {% endif %}
</div>

<!-- Submit button -->
<div class=\"col-12 mt-3\">
    <button class=\"btn btn-primary w-100\" type=\"submit\">Create account</button>
</div>

<!-- Link to login -->
<div class=\"col-12 text-center mt-2\">
    <p class=\"small mb-0\">Already have an account? <a href=\"{{ path('login') }}\">Login</a></p>
</div>

{{ form_end(formB) }}




                </div>
              </div>

          

            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/main.js') }}\"></script>
</body>
</html>
", "user/inscrit.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\user\\inscrit.html.twig");
    }
}
