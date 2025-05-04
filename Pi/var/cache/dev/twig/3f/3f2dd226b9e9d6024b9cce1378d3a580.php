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

/* navBar.html.twig */
class __TwigTemplate_6b57c871e99cd68713617346825dcd44 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
  <meta content=\"Streamline your team's workflow with Onboardify's comprehensive project management solution\" name=\"description\">
  <meta content=\"project management, team collaboration, productivity tools\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/imgP/logo2.png"), "html", null, true);
        yield "\" rel=\"icon\">
  <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Open+Sans:wght@400;500;600&display=swap\" rel=\"stylesheet\">
  
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  
  <!-- Custom CSS -->
  <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

  <style>
    :root {
      --primary-color: #4f46e5;
      --primary-hover: #4338ca;
      --secondary-color: #6b7280;
      --light-bg: #f9fafb;
      --dark-bg: #1f2937;
      --text-dark: #111827;
      --text-light: #6b7280;
      --shadow-sm: 0 1px 3px rgba(0,0,0,0.12);
      --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06);
      --shadow-lg: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05);
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Base Styles */
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      color: var(--text-dark);
      line-height: 1.6;
    }
    
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: var(--light-bg);
    }

    /* Header Styles */
    .header {
      transition: var(--transition);
      box-shadow: var(--shadow-sm);
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      position: sticky;
      top: 0;
      z-index: 1020;
    }
    
    .header.scrolled {
      box-shadow: var(--shadow-md);
    }
    
    .logo {
      font-weight: 700;
      font-size: 1.5rem;
      color: var(--primary-color);
      text-decoration: none;
      display: flex;
      align-items: center;
    }
    
    .logo img {
      transition: var(--transition);
      height: 40px;
    }
    
    .logo:hover img {
      transform: rotate(-5deg);
    }
    
    .navbar-nav .nav-link {
      font-weight: 500;
      padding: 0.5rem 1rem;
      color: var(--text-dark);
      position: relative;
    }
    
    .navbar-nav .nav-link:before {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: var(--primary-color);
      visibility: hidden;
      transition: var(--transition);
    }
    
    .navbar-nav .nav-link:hover:before,
    .navbar-nav .nav-link.active:before {
      visibility: visible;
      width: 100%;
    }
    
    .navbar-nav .nav-link.active {
      color: var(--primary-color);
    }
    
    .dropdown-menu {
      border: none;
      box-shadow: var(--shadow-lg);
      border-radius: 0.5rem;
      padding: 0.5rem 0;
    }
    
    .dropdown-item {
      padding: 0.5rem 1.5rem;
      font-weight: 500;
      transition: var(--transition);
    }
    
    .dropdown-item:hover {
      background-color: var(--light-bg);
      color: var(--primary-color);
    }

    /* Main Content */
    .main-content {
      flex: 1 0 auto;
      min-height: calc(100vh - 120px);
      padding: 2rem 0;
      width: 100%;
    }
    
    .main-container {
      height: 100%;
    }

    /* Footer Styles */
    .footer {
      background: linear-gradient(135deg, var(--dark-bg) 0%, #111827 100%);
      color: #fff;
      padding: 2rem 0 1rem;
      position: relative;
      font-size: 0.9rem;
      flex-shrink: 0;
    }
    
    .footer:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--primary-color) 0%, #7c3aed 100%);
    }
    
    .footer h5 {
      color: #fff;
      font-weight: 600;
      margin-bottom: 1rem;
      position: relative;
      font-size: 1.1rem;
    }
    
    .footer h5:after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -6px;
      width: 30px;
      height: 2px;
      background: var(--primary-color);
      border-radius: 2px;
    }
    
    .footer p {
      color: #d1d5db;
      line-height: 1.6;
      font-size: 0.85rem;
      margin-bottom: 0.5rem;
    }
    
    .footer ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .footer ul li {
      margin-bottom: 0.5rem;
    }
    
    .footer a {
      color: #d1d5db;
      text-decoration: none;
      transition: var(--transition);
      display: inline-block;
      font-size: 0.85rem;
    }
    
    .footer a:hover {
      color: #fff;
      transform: translateX(3px);
    }
    
    .footer .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 32px;
      height: 32px;
      background: rgba(255,255,255,0.1);
      border-radius: 50%;
      margin-right: 0.5rem;
      transition: var(--transition);
    }
    
    .footer .social-links a:hover {
      background: var(--primary-color);
      transform: translateY(-2px);
    }
    
    .footer hr {
      border-color: rgba(255, 255, 255, 0.1);
      margin: 1.5rem 0;
    }
    
    .copyright {
      color: #9ca3af;
      font-size: 0.8rem;
    }
    
    /* Back to Top Button */
    .back-to-top {
      position: fixed;
      right: 30px;
      bottom: 30px;
      width: 44px;
      height: 44px;
      background: var(--primary-color);
      color: #fff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: var(--transition);
      z-index: 99;
      opacity: 0;
      visibility: hidden;
      box-shadow: 0 4px 12px rgba(79, 70, 229, 0.3);
    }
    
    .back-to-top.active {
      opacity: 1;
      visibility: visible;
    }
    
    .back-to-top:hover {
      background: var(--primary-hover);
      transform: translateY(-5px);
    }
    
    /* User Dropdown */
    .dropdown-user {
      display: flex;
      align-items: center;
      cursor: pointer;
    }
    
    .user-avatar {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid rgba(255,255,255,0.2);
      transition: var(--transition);
    }
    
    .dropdown-toggle:hover .user-avatar {
      border-color: var(--primary-color);
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
      .navbar-collapse {
        padding: 1rem 0;
      }
      
      .navbar-nav {
        margin-top: 1rem;
      }
      
      .nav-item {
        margin-bottom: 0.5rem;
      }
    }
    
    @media (max-width: 768px) {
      .footer .col-md-6 {
        text-align: center !important;
        margin-bottom: 2rem;
      }
      
      .footer h5:after {
        left: 50%;
        transform: translateX(-50%);
      }

      .main-content {
        min-height: calc(100vh - 100px);
      }
    }

    @media (max-height: 600px) {
      .main-content {
        min-height: calc(100vh - 80px);
      }
    }
  </style>

  ";
        // line 334
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 335
        yield "</head>

<body>
  <!-- Header -->
  <header class=\"header sticky-top\">
    <div class=\"container-fluid\">
      <nav class=\"navbar navbar-expand-lg navbar-light\">
        <div class=\"container\">
          <a href=\"#\" class=\"navbar-brand logo d-flex align-items-center\">
            <img src=\"";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/imgP/logo2.png"), "html", null, true);
        yield "\" alt=\"Onboardify Logo\">
            <span class=\"ms-2\">Onboardify</span>
          </a>
          
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>

          <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"";
        // line 355
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\">Home</a>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"projectsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Projects
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"projectsDropdown\">
                  <li><a class=\"dropdown-item\" href=\"";
        // line 362
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_projet_list");
        yield "\">View Projects</a></li>
                  
                </ul>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"ProgramsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Programs
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"ProgramsDropdown\">
                  <li><a class=\"dropdown-item\" href=\"";
        // line 371
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmebienetre_index");
        yield "\">View Programs</a></li>
                </ul>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 375
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GestionUsers");
        yield "\">User Management</a>
              </li>
            </ul>

            <div class=\"d-flex align-items-center ms-lg-3\">
              ";
        // line 380
        if ((($tmp = (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 380, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 381
            yield "                <div class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle d-flex align-items-center text-decoration-none\" id=\"dropdownUser\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    ";
            // line 383
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 383, $this->source); })()), "imageUrl", [], "any", false, false, false, 383)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 384
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 384, $this->source); })()), "imageUrl", [], "any", false, false, false, 384)), "html", null, true);
                yield "\" alt=\"Profile\" class=\"user-avatar me-2\">
                    ";
            } else {
                // line 386
                yield "                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/imgP/logo2.png"), "html", null, true);
                yield "\" alt=\"Profile\" class=\"user-avatar me-2\">
                    ";
            }
            // line 388
            yield "                    <span class=\"d-none d-lg-inline\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 388, $this->source); })()), "nom", [], "any", false, false, false, 388), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 388, $this->source); })()), "prenom", [], "any", false, false, false, 388), "html", null, true);
            yield "</span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end shadow\" aria-labelledby=\"dropdownUser\">
                    <li><a class=\"dropdown-item\" href=\"";
            // line 391
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            yield "\"><i class=\"bi bi-person me-2\"></i> Profile</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-gear me-2\"></i> Settings</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
            // line 394
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\"><i class=\"bi bi-box-arrow-right me-2\"></i> Sign out</a></li>
                  </ul>
                </div>
              ";
        } else {
            // line 398
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\" class=\"btn btn-outline-primary me-2\">Logout</a>
              ";
        }
        // line 400
        yield "            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class=\"main-content\">
    <div class=\"container-fluid main-container\">
      <div class=\"row\">
        <div class=\"col-12\">
          ";
        // line 412
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 413
        yield "        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class=\"footer\">
    <div class=\"container\">
      <div class=\"row g-3\">
        <div class=\"col-lg-6 col-md-6\">
          <h5>Onboardify</h5>
          <p>A complete project management solution for your team. Streamline your workflow and boost productivity.</p>
          <div class=\"mt-2\">
            <a href=\"#\" class=\"btn btn-sm btn-outline-light rounded-pill px-3\">Learn More</a>
          </div>
        </div>
        <div class=\"col-lg-6 col-md-6\">
          <h5>Contact Us</h5>
          <p>
            <i class=\"bi bi-geo-alt me-2\"></i> 123 Business Ave, Tunis, Tunisia<br>
            <i class=\"bi bi-envelope me-2\"></i> contact@onboardify.com<br>
            <i class=\"bi bi-phone me-2\"></i> +216 12 345 678
          </p>
          <div class=\"social-links mt-2\">
            <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"#\"><i class=\"bi bi-twitter\"></i></a>
            <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
            <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
          </div>
        </div>
      </div>
      <hr>
      <div class=\"row\">
        <div class=\"col-md-6 text-center text-md-start\">
          <div class=\"copyright\">
            &copy; ";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " <strong>Onboardify</strong>. All Rights Reserved
          </div>
        </div>
        <div class=\"col-md-6 text-center text-md-end\">
          <div class=\"legal-links\">
            <a href=\"#\" class=\"me-3\">Privacy Policy</a>
            <a href=\"#\">Terms of Service</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <a href=\"#\" class=\"back-to-top\">
    <i class=\"bi bi-arrow-up-short\"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src=\"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
  
  <!-- Template Main JS File -->
  <script src=\"";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

  <script>
    // Sticky header on scroll
    window.addEventListener('scroll', function() {
      const header = document.querySelector('.header');
      header.classList.toggle('scrolled', window.scrollY > 50);
    });
    
    // Back to top button
    window.addEventListener('scroll', function() {
      const backToTop = document.querySelector('.back-to-top');
      if (window.scrollY > 300) {
        backToTop.classList.add('active');
      } else {
        backToTop.classList.remove('active');
      }
    });
    
    // Smooth scrolling for all links
    document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
    
    // Initialize AOS animation
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true
    });
  </script>

  ";
        // line 510
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 511
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
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

        yield "Onboardify";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 334
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 412
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

    // line 510
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navBar.html.twig";
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
        return array (  734 => 510,  712 => 412,  690 => 334,  667 => 7,  655 => 511,  653 => 510,  612 => 472,  606 => 469,  602 => 468,  598 => 467,  576 => 448,  539 => 413,  537 => 412,  523 => 400,  517 => 398,  510 => 394,  504 => 391,  495 => 388,  489 => 386,  483 => 384,  481 => 383,  477 => 381,  475 => 380,  467 => 375,  460 => 371,  448 => 362,  438 => 355,  424 => 344,  413 => 335,  411 => 334,  99 => 25,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  72 => 13,  68 => 12,  60 => 7,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>{% block title %}Onboardify{% endblock %}</title>
  <meta content=\"Streamline your team's workflow with Onboardify's comprehensive project management solution\" name=\"description\">
  <meta content=\"project management, team collaboration, productivity tools\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{ asset('assets/imgP/logo2.png') }}\" rel=\"icon\">
  <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Open+Sans:wght@400;500;600&display=swap\" rel=\"stylesheet\">
  
  <!-- Vendor CSS Files -->
  <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
  
  <!-- Custom CSS -->
  <link href=\"{{ asset('assets/css/custom.css') }}\" rel=\"stylesheet\">

  <style>
    :root {
      --primary-color: #4f46e5;
      --primary-hover: #4338ca;
      --secondary-color: #6b7280;
      --light-bg: #f9fafb;
      --dark-bg: #1f2937;
      --text-dark: #111827;
      --text-light: #6b7280;
      --shadow-sm: 0 1px 3px rgba(0,0,0,0.12);
      --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06);
      --shadow-lg: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05);
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Base Styles */
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      color: var(--text-dark);
      line-height: 1.6;
    }
    
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: var(--light-bg);
    }

    /* Header Styles */
    .header {
      transition: var(--transition);
      box-shadow: var(--shadow-sm);
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      position: sticky;
      top: 0;
      z-index: 1020;
    }
    
    .header.scrolled {
      box-shadow: var(--shadow-md);
    }
    
    .logo {
      font-weight: 700;
      font-size: 1.5rem;
      color: var(--primary-color);
      text-decoration: none;
      display: flex;
      align-items: center;
    }
    
    .logo img {
      transition: var(--transition);
      height: 40px;
    }
    
    .logo:hover img {
      transform: rotate(-5deg);
    }
    
    .navbar-nav .nav-link {
      font-weight: 500;
      padding: 0.5rem 1rem;
      color: var(--text-dark);
      position: relative;
    }
    
    .navbar-nav .nav-link:before {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: var(--primary-color);
      visibility: hidden;
      transition: var(--transition);
    }
    
    .navbar-nav .nav-link:hover:before,
    .navbar-nav .nav-link.active:before {
      visibility: visible;
      width: 100%;
    }
    
    .navbar-nav .nav-link.active {
      color: var(--primary-color);
    }
    
    .dropdown-menu {
      border: none;
      box-shadow: var(--shadow-lg);
      border-radius: 0.5rem;
      padding: 0.5rem 0;
    }
    
    .dropdown-item {
      padding: 0.5rem 1.5rem;
      font-weight: 500;
      transition: var(--transition);
    }
    
    .dropdown-item:hover {
      background-color: var(--light-bg);
      color: var(--primary-color);
    }

    /* Main Content */
    .main-content {
      flex: 1 0 auto;
      min-height: calc(100vh - 120px);
      padding: 2rem 0;
      width: 100%;
    }
    
    .main-container {
      height: 100%;
    }

    /* Footer Styles */
    .footer {
      background: linear-gradient(135deg, var(--dark-bg) 0%, #111827 100%);
      color: #fff;
      padding: 2rem 0 1rem;
      position: relative;
      font-size: 0.9rem;
      flex-shrink: 0;
    }
    
    .footer:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--primary-color) 0%, #7c3aed 100%);
    }
    
    .footer h5 {
      color: #fff;
      font-weight: 600;
      margin-bottom: 1rem;
      position: relative;
      font-size: 1.1rem;
    }
    
    .footer h5:after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -6px;
      width: 30px;
      height: 2px;
      background: var(--primary-color);
      border-radius: 2px;
    }
    
    .footer p {
      color: #d1d5db;
      line-height: 1.6;
      font-size: 0.85rem;
      margin-bottom: 0.5rem;
    }
    
    .footer ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .footer ul li {
      margin-bottom: 0.5rem;
    }
    
    .footer a {
      color: #d1d5db;
      text-decoration: none;
      transition: var(--transition);
      display: inline-block;
      font-size: 0.85rem;
    }
    
    .footer a:hover {
      color: #fff;
      transform: translateX(3px);
    }
    
    .footer .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 32px;
      height: 32px;
      background: rgba(255,255,255,0.1);
      border-radius: 50%;
      margin-right: 0.5rem;
      transition: var(--transition);
    }
    
    .footer .social-links a:hover {
      background: var(--primary-color);
      transform: translateY(-2px);
    }
    
    .footer hr {
      border-color: rgba(255, 255, 255, 0.1);
      margin: 1.5rem 0;
    }
    
    .copyright {
      color: #9ca3af;
      font-size: 0.8rem;
    }
    
    /* Back to Top Button */
    .back-to-top {
      position: fixed;
      right: 30px;
      bottom: 30px;
      width: 44px;
      height: 44px;
      background: var(--primary-color);
      color: #fff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: var(--transition);
      z-index: 99;
      opacity: 0;
      visibility: hidden;
      box-shadow: 0 4px 12px rgba(79, 70, 229, 0.3);
    }
    
    .back-to-top.active {
      opacity: 1;
      visibility: visible;
    }
    
    .back-to-top:hover {
      background: var(--primary-hover);
      transform: translateY(-5px);
    }
    
    /* User Dropdown */
    .dropdown-user {
      display: flex;
      align-items: center;
      cursor: pointer;
    }
    
    .user-avatar {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid rgba(255,255,255,0.2);
      transition: var(--transition);
    }
    
    .dropdown-toggle:hover .user-avatar {
      border-color: var(--primary-color);
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
      .navbar-collapse {
        padding: 1rem 0;
      }
      
      .navbar-nav {
        margin-top: 1rem;
      }
      
      .nav-item {
        margin-bottom: 0.5rem;
      }
    }
    
    @media (max-width: 768px) {
      .footer .col-md-6 {
        text-align: center !important;
        margin-bottom: 2rem;
      }
      
      .footer h5:after {
        left: 50%;
        transform: translateX(-50%);
      }

      .main-content {
        min-height: calc(100vh - 100px);
      }
    }

    @media (max-height: 600px) {
      .main-content {
        min-height: calc(100vh - 80px);
      }
    }
  </style>

  {% block stylesheets %}{% endblock %}
</head>

<body>
  <!-- Header -->
  <header class=\"header sticky-top\">
    <div class=\"container-fluid\">
      <nav class=\"navbar navbar-expand-lg navbar-light\">
        <div class=\"container\">
          <a href=\"#\" class=\"navbar-brand logo d-flex align-items-center\">
            <img src=\"{{ asset('assets/imgP/logo2.png') }}\" alt=\"Onboardify Logo\">
            <span class=\"ms-2\">Onboardify</span>
          </a>
          
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>

          <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"{{ path('profile') }}\">Home</a>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"projectsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Projects
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"projectsDropdown\">
                  <li><a class=\"dropdown-item\" href=\"{{ path('user_projet_list') }}\">View Projects</a></li>
                  
                </ul>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"ProgramsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  Programs
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"ProgramsDropdown\">
                  <li><a class=\"dropdown-item\" href=\"{{ path('app_programmebienetre_index') }}\">View Programs</a></li>
                </ul>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('GestionUsers') }}\">User Management</a>
              </li>
            </ul>

            <div class=\"d-flex align-items-center ms-lg-3\">
              {% if user %}
                <div class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle d-flex align-items-center text-decoration-none\" id=\"dropdownUser\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    {% if user.imageUrl %}
                      <img src=\"{{ asset(user.imageUrl) }}\" alt=\"Profile\" class=\"user-avatar me-2\">
                    {% else %}
                      <img src=\"{{ asset('assets/imgP/logo2.png') }}\" alt=\"Profile\" class=\"user-avatar me-2\">
                    {% endif %}
                    <span class=\"d-none d-lg-inline\">{{ user.nom }} {{ user.prenom }}</span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end shadow\" aria-labelledby=\"dropdownUser\">
                    <li><a class=\"dropdown-item\" href=\"{{ path('profile') }}\"><i class=\"bi bi-person me-2\"></i> Profile</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-gear me-2\"></i> Settings</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('logout') }}\"><i class=\"bi bi-box-arrow-right me-2\"></i> Sign out</a></li>
                  </ul>
                </div>
              {% else %}
                <a href=\"{{ path('logout') }}\" class=\"btn btn-outline-primary me-2\">Logout</a>
              {% endif %}
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class=\"main-content\">
    <div class=\"container-fluid main-container\">
      <div class=\"row\">
        <div class=\"col-12\">
          {% block content %}{% endblock %}
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class=\"footer\">
    <div class=\"container\">
      <div class=\"row g-3\">
        <div class=\"col-lg-6 col-md-6\">
          <h5>Onboardify</h5>
          <p>A complete project management solution for your team. Streamline your workflow and boost productivity.</p>
          <div class=\"mt-2\">
            <a href=\"#\" class=\"btn btn-sm btn-outline-light rounded-pill px-3\">Learn More</a>
          </div>
        </div>
        <div class=\"col-lg-6 col-md-6\">
          <h5>Contact Us</h5>
          <p>
            <i class=\"bi bi-geo-alt me-2\"></i> 123 Business Ave, Tunis, Tunisia<br>
            <i class=\"bi bi-envelope me-2\"></i> contact@onboardify.com<br>
            <i class=\"bi bi-phone me-2\"></i> +216 12 345 678
          </p>
          <div class=\"social-links mt-2\">
            <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"#\"><i class=\"bi bi-twitter\"></i></a>
            <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
            <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
          </div>
        </div>
      </div>
      <hr>
      <div class=\"row\">
        <div class=\"col-md-6 text-center text-md-start\">
          <div class=\"copyright\">
            &copy; {{ \"now\"|date(\"Y\") }} <strong>Onboardify</strong>. All Rights Reserved
          </div>
        </div>
        <div class=\"col-md-6 text-center text-md-end\">
          <div class=\"legal-links\">
            <a href=\"#\" class=\"me-3\">Privacy Policy</a>
            <a href=\"#\">Terms of Service</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to Top Button -->
  <a href=\"#\" class=\"back-to-top\">
    <i class=\"bi bi-arrow-up-short\"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/jquery/jquery.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
  
  <!-- Template Main JS File -->
  <script src=\"{{ asset('assets/js/main.js') }}\"></script>

  <script>
    // Sticky header on scroll
    window.addEventListener('scroll', function() {
      const header = document.querySelector('.header');
      header.classList.toggle('scrolled', window.scrollY > 50);
    });
    
    // Back to top button
    window.addEventListener('scroll', function() {
      const backToTop = document.querySelector('.back-to-top');
      if (window.scrollY > 300) {
        backToTop.classList.add('active');
      } else {
        backToTop.classList.remove('active');
      }
    });
    
    // Smooth scrolling for all links
    document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
    
    // Initialize AOS animation
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true
    });
  </script>

  {% block javascripts %}{% endblock %}
</body>
</html>", "navBar.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\navBar.html.twig");
    }
}
