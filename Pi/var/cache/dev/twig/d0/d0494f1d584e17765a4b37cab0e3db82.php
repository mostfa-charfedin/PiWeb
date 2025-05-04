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

/* sideBar.html.twig */
class __TwigTemplate_b041e7ebf9b2fab8fac492dccef94f18 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sideBar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sideBar.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Onboardify</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

   <!-- Favicons -->
  <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/imgP/logo2.png"), "html", null, true);
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
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
 <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">
    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"#\" class=\"logo d-flex align-items-center\">
        <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/imgP/logo2.png"), "html", null, true);
        yield "\" alt=\"\">
        <span class=\"d-none d-lg-block\">Onboardify</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div>

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">

       <li class=\"nav-item dropdown pe-3\">
  <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" id=\"dropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
    ";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "imageUrl", [], "any", false, false, false, 55)) {
            // line 56
            yield "      <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "imageUrl", [], "any", false, false, false, 56)), "html", null, true);
            yield "\" alt=\"Profile Image\" width=\"40\" height=\"40\" class=\"rounded-circle\">
    ";
        } else {
            // line 58
            yield "      <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/imgP/logo2.png"), "html", null, true);
            yield "\" alt=\"Default Profile\" width=\"40\" height=\"40\" class=\"rounded-circle\">
    ";
        }
        // line 60
        yield "    <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "prenom", [], "any", false, false, false, 60), "html", null, true);
        yield "</span>
  </a>
  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\" aria-labelledby=\"dropdownMenuLink\">
    <li class=\"dropdown-header\">
      <h6>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "nom", [], "any", false, false, false, 64), "html", null, true);
        yield " &nbsp; ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "prenom", [], "any", false, false, false, 64), "html", null, true);
        yield "</h6>
      <span>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "role", [], "any", false, false, false, 65), "html", null, true);
        yield "</span>
    </li>
    <li><hr class=\"dropdown-divider\"></li>
    <li><a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\"><i class=\"bi bi-person\"></i> My Profile</a></li>
    <li><hr class=\"dropdown-divider\"></li>
    <li><a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield "\"><i class=\"bi bi-box-arrow-right\"></i> Sign Out</a></li>
  </ul>
</li>
      </ul>
    </nav>
  </header>

  <!-- ======= Sidebar ======= -->
  <aside id=\"sidebar\" class=\"sidebar\">
    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"#\">
          <i class=\"bi bi-grid\"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class=\"nav-heading\">Pages</li>
       <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          
          <li>
      <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_list");
        yield "\">
        <i class=\"bi bi-circle\"></i><span>Projets</span>
      </a>
    </li>
    
    
  
 
  
        </ul>
      </li><!-- End Tables Nav -->
 <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#Programs-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Programs</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"Programs-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
      <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmebienetre_index");
        yield "\">
        <i class=\"bi bi-circle\"></i><span>View Programs</span>
      </a>
    </li>
     <li>
      <a class=\"nav-link collapsed\" href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\">
        <i class=\"bi bi-star\"></i>
        <span>View Reviews</span>
      </a>
    </li>
    </ul>
    <!-- ✅ Quizzes moved up with updated icon -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <i class=\"bi bi-question-circle\"></i>
          <span>Quizzes</span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\">
          <i class=\"bi bi-person\"></i>
          <span>Profile</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GestionUsers");
        yield "\">
          <i class=\"bi bi-person\"></i>
          <span>Users management</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield "\">
          <i class=\"bi bi-box-arrow-in-right\"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </aside>

  <!-- ======= Main Content ======= -->
  <main class=\"content\">
    ";
        // line 156
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 157
        yield "  </main>

  <a  class=\"back-to-top d-flex align-items-center justify-content-center\">
    <i class=\"bi bi-arrow-up-short\"></i>
  </a>

 <!-- Vendor JS Files -->
  <script src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

  <script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    var dropdowns = document.querySelectorAll('.dropdown-toggle');
    dropdowns.forEach(function (dropdown) {
      dropdown.addEventListener('click', function (e) {
        console.log('Dropdown clicked');
      });
    });
  });
</script>


</body>
        

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 156
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sideBar.html.twig";
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
        return array (  364 => 156,  335 => 175,  329 => 172,  325 => 171,  321 => 170,  317 => 169,  313 => 168,  309 => 167,  304 => 165,  300 => 164,  291 => 157,  289 => 156,  276 => 146,  266 => 139,  256 => 132,  247 => 126,  236 => 118,  228 => 113,  208 => 96,  179 => 70,  174 => 68,  168 => 65,  162 => 64,  152 => 60,  146 => 58,  140 => 56,  138 => 55,  124 => 44,  105 => 28,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  67 => 14,  63 => 13,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Onboardify</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

   <!-- Favicons -->
  <link href=\"{{ asset('assets/imgP/logo2.png') }}\" rel=\"icon\">
  <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">
<!-- Google Fonts -->
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
  <!-- Vendor CSS Files -->
<link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
 <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">
    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"#\" class=\"logo d-flex align-items-center\">
        <img src=\"{{ asset('assets/imgP/logo2.png') }}\" alt=\"\">
        <span class=\"d-none d-lg-block\">Onboardify</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div>

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">

       <li class=\"nav-item dropdown pe-3\">
  <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" id=\"dropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
    {% if user.imageUrl %}
      <img src=\"{{ asset(user.imageUrl) }}\" alt=\"Profile Image\" width=\"40\" height=\"40\" class=\"rounded-circle\">
    {% else %}
      <img src=\"{{ asset('assets/imgP/logo2.png') }}\" alt=\"Default Profile\" width=\"40\" height=\"40\" class=\"rounded-circle\">
    {% endif %}
    <span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ user.nom }} {{ user.prenom }}</span>
  </a>
  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\" aria-labelledby=\"dropdownMenuLink\">
    <li class=\"dropdown-header\">
      <h6>{{ user.nom }} &nbsp; {{ user.prenom }}</h6>
      <span>{{ user.role }}</span>
    </li>
    <li><hr class=\"dropdown-divider\"></li>
    <li><a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('profile') }}\"><i class=\"bi bi-person\"></i> My Profile</a></li>
    <li><hr class=\"dropdown-divider\"></li>
    <li><a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('logout') }}\"><i class=\"bi bi-box-arrow-right\"></i> Sign Out</a></li>
  </ul>
</li>
      </ul>
    </nav>
  </header>

  <!-- ======= Sidebar ======= -->
  <aside id=\"sidebar\" class=\"sidebar\">
    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"#\">
          <i class=\"bi bi-grid\"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class=\"nav-heading\">Pages</li>
       <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          
          <li>
      <a href=\"{{ path('projet_list') }}\">
        <i class=\"bi bi-circle\"></i><span>Projets</span>
      </a>
    </li>
    
    
  
 
  
        </ul>
      </li><!-- End Tables Nav -->
 <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#Programs-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Programs</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"Programs-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
      <a href=\"{{ path('app_programmebienetre_index') }}\">
        <i class=\"bi bi-circle\"></i><span>View Programs</span>
      </a>
    </li>
     <li>
      <a class=\"nav-link collapsed\" href=\"{{ path('app_avis_index') }}\">
        <i class=\"bi bi-star\"></i>
        <span>View Reviews</span>
      </a>
    </li>
    </ul>
    <!-- ✅ Quizzes moved up with updated icon -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_home') }}\">
            <i class=\"bi bi-question-circle\"></i>
          <span>Quizzes</span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('profile') }}\">
          <i class=\"bi bi-person\"></i>
          <span>Profile</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('GestionUsers') }}\">
          <i class=\"bi bi-person\"></i>
          <span>Users management</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('logout') }}\">
          <i class=\"bi bi-box-arrow-in-right\"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </aside>

  <!-- ======= Main Content ======= -->
  <main class=\"content\">
    {% block content %}{% endblock %}
  </main>

  <a  class=\"back-to-top d-flex align-items-center justify-content-center\">
    <i class=\"bi bi-arrow-up-short\"></i>
  </a>

 <!-- Vendor JS Files -->
  <script src=\"{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

  <script src=\"{{ asset('assets/vendor/chart.js/chart.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/echarts/echarts.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/quill/quill.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/tinymce/tinymce.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{ asset('assets/js/main.js') }}\"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    var dropdowns = document.querySelectorAll('.dropdown-toggle');
    dropdowns.forEach(function (dropdown) {
      dropdown.addEventListener('click', function (e) {
        console.log('Dropdown clicked');
      });
    });
  });
</script>


</body>
        

</html>", "sideBar.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\sideBar.html.twig");
    }
}
