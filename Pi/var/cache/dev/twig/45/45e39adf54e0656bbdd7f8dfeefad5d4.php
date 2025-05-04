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

/* quiz/quiz_certificate.html.twig */
class __TwigTemplate_6dbd97dff270ab747dea1c3b15c16a58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quiz_certificate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quiz_certificate.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Certificate of Completion</title>

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans|Pinyon+Script|Rochester\" rel=\"stylesheet\">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: #f0f0f0;
            padding: 40px;
        }

        .certificate-container {
            width: 800px;
            height: 600px;
            background-color: #618597;
            margin: auto;
            padding: 30px;
            position: relative;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            color: #333;
        }

        .outer-border {
            width: 100%;
            height: 100%;
            border: 10px solid white;
            position: absolute;
            top: 0;
            left: 0;
        }

        .inner-border {
            width: 94%;
            height: 90%;
            border: 2px solid white;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            position: relative;
            top: 5%;
        }

        .certificate-title {
            font-family: 'Pinyon Script', cursive;
            font-size: 48px;
            color: #4a90e2;
            text-align: center;
            margin-top: 30px;
        }

        .certificate-body {
            text-align: center;
            margin-top: 30px;
        }

        .username {
            font-size: 24px;
            margin: 20px 0;
            font-weight: bold;
        }

        .quiz-title {
            font-size: 20px;
            font-style: italic;
            margin-bottom: 20px;
        }

        .score {
            font-size: 22px;
            margin-top: 20px;
            color: #27ae60;
            font-weight: bold;
        }

        .footer {
            position: absolute;
            bottom: 40px;
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: #7f8c8d;
        }

        .pm-empty-space {
            height: 20px;
        }
    </style>
</head>

<body>
    <div class=\"certificate-container\">
        <div class=\"outer-border\"></div>

        <div class=\"inner-border\">
            <h1 class=\"certificate-title\">Certificate of Completion</h1>

            <div class=\"certificate-body\">
                <p class=\"pm-empty-space\"></p>
                <p class=\"username\">This certifies that <br> <strong>";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "nom", [], "any", false, false, false, 104), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "prenom", [], "any", false, false, false, 104), "html", null, true);
        yield "</strong></p>

                <p class=\"quiz-title\">has successfully completed the quiz:</p>
                <p><strong>";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 107, $this->source); })()), "nom", [], "any", false, false, false, 107), "html", null, true);
        yield "</strong></p>

                <div class=\"score\">
                    Score: ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 110, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 110, $this->source); })()), "html", null, true);
        yield "
                </div>

                <p class=\"pm-empty-space\"></p>
            </div>

            <div class=\"footer\">
                Delivered by Onboardify<br>
                Date: ";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "
            </div>
        </div>
    </div>
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
        return "quiz/quiz_certificate.html.twig";
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
        return array (  180 => 118,  167 => 110,  161 => 107,  153 => 104,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Certificate of Completion</title>

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans|Pinyon+Script|Rochester\" rel=\"stylesheet\">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: #f0f0f0;
            padding: 40px;
        }

        .certificate-container {
            width: 800px;
            height: 600px;
            background-color: #618597;
            margin: auto;
            padding: 30px;
            position: relative;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            color: #333;
        }

        .outer-border {
            width: 100%;
            height: 100%;
            border: 10px solid white;
            position: absolute;
            top: 0;
            left: 0;
        }

        .inner-border {
            width: 94%;
            height: 90%;
            border: 2px solid white;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            position: relative;
            top: 5%;
        }

        .certificate-title {
            font-family: 'Pinyon Script', cursive;
            font-size: 48px;
            color: #4a90e2;
            text-align: center;
            margin-top: 30px;
        }

        .certificate-body {
            text-align: center;
            margin-top: 30px;
        }

        .username {
            font-size: 24px;
            margin: 20px 0;
            font-weight: bold;
        }

        .quiz-title {
            font-size: 20px;
            font-style: italic;
            margin-bottom: 20px;
        }

        .score {
            font-size: 22px;
            margin-top: 20px;
            color: #27ae60;
            font-weight: bold;
        }

        .footer {
            position: absolute;
            bottom: 40px;
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: #7f8c8d;
        }

        .pm-empty-space {
            height: 20px;
        }
    </style>
</head>

<body>
    <div class=\"certificate-container\">
        <div class=\"outer-border\"></div>

        <div class=\"inner-border\">
            <h1 class=\"certificate-title\">Certificate of Completion</h1>

            <div class=\"certificate-body\">
                <p class=\"pm-empty-space\"></p>
                <p class=\"username\">This certifies that <br> <strong>{{ user.nom }} {{ user.prenom }}</strong></p>

                <p class=\"quiz-title\">has successfully completed the quiz:</p>
                <p><strong>{{ quiz.nom }}</strong></p>

                <div class=\"score\">
                    Score: {{ score }}/{{ total }}
                </div>

                <p class=\"pm-empty-space\"></p>
            </div>

            <div class=\"footer\">
                Delivered by Onboardify<br>
                Date: {{ \"now\"|date(\"Y-m-d\") }}
            </div>
        </div>
    </div>
</body>
</html>
", "quiz/quiz_certificate.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\quiz\\quiz_certificate.html.twig");
    }
}
