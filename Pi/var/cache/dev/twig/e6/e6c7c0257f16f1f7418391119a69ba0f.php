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

/* user/admin/404.html.twig */
class __TwigTemplate_8249618b08918847ae4a988fbfa78415 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/admin/404.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/admin/404.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title> Unauthorized access </title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"assets/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/quill/quill.snow.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/quill/quill.bubble.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/simple-datatables/style.css\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"assets/css/style.css\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class=\"container\">

      <section class=\"section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center\">
        <h1>404</h1>
        <h2>Unauthorized access.</h2>
        <a class=\"btn\" href=\"\">Back to home</a>
        <img src=\"assets/img/not-found.svg\" class=\"img-fluid py-5\" alt=\"Page Not Found\">
    
      </section>

    </div>
  </main><!-- End #main -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"assets/vendor/apexcharts/apexcharts.min.js\"></script>
  <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"assets/vendor/chart.js/chart.min.js\"></script>
  <script src=\"assets/vendor/echarts/echarts.min.js\"></script>
  <script src=\"assets/vendor/quill/quill.min.js\"></script>
  <script src=\"assets/vendor/simple-datatables/simple-datatables.js\"></script>
  <script src=\"assets/vendor/tinymce/tinymce.min.js\"></script>
  <script src=\"assets/vendor/php-email-form/validate.js\"></script>

  <!-- Template Main JS File -->
  <script src=\"assets/js/main.js\"></script>

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
        return "user/admin/404.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title> Unauthorized access </title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"assets/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/quill/quill.snow.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/quill/quill.bubble.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/simple-datatables/style.css\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"assets/css/style.css\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class=\"container\">

      <section class=\"section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center\">
        <h1>404</h1>
        <h2>Unauthorized access.</h2>
        <a class=\"btn\" href=\"\">Back to home</a>
        <img src=\"assets/img/not-found.svg\" class=\"img-fluid py-5\" alt=\"Page Not Found\">
    
      </section>

    </div>
  </main><!-- End #main -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"assets/vendor/apexcharts/apexcharts.min.js\"></script>
  <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"assets/vendor/chart.js/chart.min.js\"></script>
  <script src=\"assets/vendor/echarts/echarts.min.js\"></script>
  <script src=\"assets/vendor/quill/quill.min.js\"></script>
  <script src=\"assets/vendor/simple-datatables/simple-datatables.js\"></script>
  <script src=\"assets/vendor/tinymce/tinymce.min.js\"></script>
  <script src=\"assets/vendor/php-email-form/validate.js\"></script>

  <!-- Template Main JS File -->
  <script src=\"assets/js/main.js\"></script>

</body>

</html>", "user/admin/404.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\user\\admin\\404.html.twig");
    }
}
