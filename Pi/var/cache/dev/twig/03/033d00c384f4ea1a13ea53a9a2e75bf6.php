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

/* avis/edit.html.twig */
class __TwigTemplate_ab0481420eb8ba33ba1bf50360f44d69 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "navBar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/edit.html.twig"));

        $this->parent = $this->load("navBar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Edit Review";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
        <h1>Edit Review</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programmebienetre_index");
        yield "\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\">Reviews</a></li>
                <li class=\"breadcrumb-item active\">Edit</li>
            </ol>
        </nav>
    </div>

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Edit your review for \"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 23, $this->source); })()), "titre", [], "any", false, false, false, 23), "html", null, true);
        yield "\"</h5>

                        <div class=\"pt-4\">
                            ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                            
                            <div class=\"row mb-3\">
                                <label class=\"col-sm-2 col-form-label\">";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "rating", [], "any", false, false, false, 29), 'label');
        yield "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group\">
                                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "rating", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "max" => "5", "placeholder" => "Enter a rating from 1 to 5"]]);
        // line 39
        yield "
                                        <span class=\"input-group-text\">
                                            <i class=\"bi bi-star-fill text-warning\"></i>
                                        </span>
                                    </div>
                                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "rating", [], "any", false, false, false, 44), 'errors');
        yield "
                                    <small class=\"text-muted\">Rate from 1 to 5 stars</small>
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <label class=\"col-sm-2 col-form-label\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "commentaire", [], "any", false, false, false, 50), 'label');
        yield "</label>
                                <div class=\"col-sm-10\">
                                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "commentaire", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "placeholder" => "Share your experience with this program...", "minlength" => "10", "maxlength" => "1000"]]);
        // line 60
        yield "
                                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "commentaire", [], "any", false, false, false, 61), 'errors');
        yield "
                                    <small class=\"text-muted\">Minimum 10 characters, maximum 1000 characters</small>
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-sm-10 offset-sm-2\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"bi bi-check-circle me-1\"></i>
                                        Update Review
                                    </button>
                                    <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\" class=\"btn btn-secondary ms-2\">
                                        <i class=\"bi bi-x-circle me-1\"></i>
                                        Cancel
                                    </a>
                                </div>
                            </div>

                            ";
        // line 79
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .card {
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #4154f1;
            box-shadow: 0 0 0 0.2rem rgba(65, 84, 241, 0.25);
        }

        .input-group-text {
            background-color: #f6f9ff;
            border-color: #4154f1;
        }

        .btn-primary {
            background-color: #4154f1;
            border-color: #4154f1;
        }

        .btn-primary:hover {
            background-color: #3445c6;
            border-color: #3445c6;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .invalid-feedback {
            display: none;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #dc3545;
        }

        .was-validated .form-control:invalid ~ .invalid-feedback {
            display: block;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 140
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

        // line 141
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const ratingInput = form.querySelector('[name=\"avis[rating]\"]');
            const commentInput = form.querySelector('[name=\"avis[commentaire]\"]');
            
            // Custom validation messages
            const messages = {
                rating: {
                    required: 'Please enter a rating',
                    range: 'Rating must be between 1 and 5'
                },
                comment: {
                    required: 'Please enter a comment',
                    minLength: 'Your comment must be at least 10 characters long',
                    maxLength: 'Your comment cannot be longer than 1000 characters'
                }
            };

            // Add custom validation for rating
            ratingInput.addEventListener('input', function() {
                const value = parseInt(this.value);
                if (isNaN(value)) {
                    this.setCustomValidity(messages.rating.required);
                } else if (value < 1 || value > 5) {
                    this.setCustomValidity(messages.rating.range);
                } else {
                    this.setCustomValidity('');
                }
                this.reportValidity();
            });

            // Add custom validation for comment
            commentInput.addEventListener('input', function() {
                const length = this.value.trim().length;
                if (length === 0) {
                    this.setCustomValidity(messages.comment.required);
                } else if (length < 10) {
                    this.setCustomValidity(messages.comment.minLength);
                } else if (length > 1000) {
                    this.setCustomValidity(messages.comment.maxLength);
                } else {
                    this.setCustomValidity('');
                }
                this.reportValidity();
            });

            // Form validation
            form.addEventListener('submit', function(event) {
                let isValid = true;

                // Validate rating
                const ratingValue = parseInt(ratingInput.value);
                if (isNaN(ratingValue) || ratingValue < 1 || ratingValue > 5) {
                    ratingInput.setCustomValidity(messages.rating.range);
                    isValid = false;
                }

                // Validate comment
                const commentLength = commentInput.value.trim().length;
                if (commentLength < 10 || commentLength > 1000) {
                    commentInput.setCustomValidity(
                        commentLength < 10 ? messages.comment.minLength : messages.comment.maxLength
                    );
                    isValid = false;
                }

                if (!isValid) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            });

            // Real-time character count for comment
            const commentCharCount = document.createElement('small');
            commentCharCount.className = 'text-muted d-block mt-1';
            commentInput.parentNode.appendChild(commentCharCount);

            function updateCharCount() {
                const length = commentInput.value.trim().length;
                commentCharCount.textContent = `\${length}/1000 characters`;
                commentCharCount.style.color = length < 10 || length > 1000 ? '#dc3545' : '';
            }

            commentInput.addEventListener('input', updateCharCount);
            updateCharCount(); // Initial count

            // Animation d'entrée du formulaire
            const card = document.querySelector('.card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.3s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
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
        return "avis/edit.html.twig";
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
        return array (  304 => 141,  291 => 140,  230 => 90,  217 => 89,  197 => 79,  187 => 72,  173 => 61,  170 => 60,  168 => 52,  163 => 50,  154 => 44,  147 => 39,  145 => 32,  139 => 29,  133 => 26,  127 => 23,  113 => 12,  109 => 11,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'navBar.html.twig' %}

{% block title %}Edit Review{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
        <h1>Edit Review</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_programmebienetre_index') }}\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_avis_index') }}\">Reviews</a></li>
                <li class=\"breadcrumb-item active\">Edit</li>
            </ol>
        </nav>
    </div>

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Edit your review for \"{{ programme.titre }}\"</h5>

                        <div class=\"pt-4\">
                            {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                            
                            <div class=\"row mb-3\">
                                <label class=\"col-sm-2 col-form-label\">{{ form_label(form.rating) }}</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group\">
                                        {{ form_widget(form.rating, {
                                            'attr': {
                                                'class': 'form-control',
                                                'min': '1',
                                                'max': '5',
                                                'placeholder': 'Enter a rating from 1 to 5'
                                            }
                                        }) }}
                                        <span class=\"input-group-text\">
                                            <i class=\"bi bi-star-fill text-warning\"></i>
                                        </span>
                                    </div>
                                    {{ form_errors(form.rating) }}
                                    <small class=\"text-muted\">Rate from 1 to 5 stars</small>
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <label class=\"col-sm-2 col-form-label\">{{ form_label(form.commentaire) }}</label>
                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.commentaire, {
                                        'attr': {
                                            'class': 'form-control',
                                            'rows': '4',
                                            'placeholder': 'Share your experience with this program...',
                                            'minlength': '10',
                                            'maxlength': '1000'
                                        }
                                    }) }}
                                    {{ form_errors(form.commentaire) }}
                                    <small class=\"text-muted\">Minimum 10 characters, maximum 1000 characters</small>
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-sm-10 offset-sm-2\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"bi bi-check-circle me-1\"></i>
                                        Update Review
                                    </button>
                                    <a href=\"{{ path('app_avis_index') }}\" class=\"btn btn-secondary ms-2\">
                                        <i class=\"bi bi-x-circle me-1\"></i>
                                        Cancel
                                    </a>
                                </div>
                            </div>

                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .card {
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #4154f1;
            box-shadow: 0 0 0 0.2rem rgba(65, 84, 241, 0.25);
        }

        .input-group-text {
            background-color: #f6f9ff;
            border-color: #4154f1;
        }

        .btn-primary {
            background-color: #4154f1;
            border-color: #4154f1;
        }

        .btn-primary:hover {
            background-color: #3445c6;
            border-color: #3445c6;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .invalid-feedback {
            display: none;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #dc3545;
        }

        .was-validated .form-control:invalid ~ .invalid-feedback {
            display: block;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const ratingInput = form.querySelector('[name=\"avis[rating]\"]');
            const commentInput = form.querySelector('[name=\"avis[commentaire]\"]');
            
            // Custom validation messages
            const messages = {
                rating: {
                    required: 'Please enter a rating',
                    range: 'Rating must be between 1 and 5'
                },
                comment: {
                    required: 'Please enter a comment',
                    minLength: 'Your comment must be at least 10 characters long',
                    maxLength: 'Your comment cannot be longer than 1000 characters'
                }
            };

            // Add custom validation for rating
            ratingInput.addEventListener('input', function() {
                const value = parseInt(this.value);
                if (isNaN(value)) {
                    this.setCustomValidity(messages.rating.required);
                } else if (value < 1 || value > 5) {
                    this.setCustomValidity(messages.rating.range);
                } else {
                    this.setCustomValidity('');
                }
                this.reportValidity();
            });

            // Add custom validation for comment
            commentInput.addEventListener('input', function() {
                const length = this.value.trim().length;
                if (length === 0) {
                    this.setCustomValidity(messages.comment.required);
                } else if (length < 10) {
                    this.setCustomValidity(messages.comment.minLength);
                } else if (length > 1000) {
                    this.setCustomValidity(messages.comment.maxLength);
                } else {
                    this.setCustomValidity('');
                }
                this.reportValidity();
            });

            // Form validation
            form.addEventListener('submit', function(event) {
                let isValid = true;

                // Validate rating
                const ratingValue = parseInt(ratingInput.value);
                if (isNaN(ratingValue) || ratingValue < 1 || ratingValue > 5) {
                    ratingInput.setCustomValidity(messages.rating.range);
                    isValid = false;
                }

                // Validate comment
                const commentLength = commentInput.value.trim().length;
                if (commentLength < 10 || commentLength > 1000) {
                    commentInput.setCustomValidity(
                        commentLength < 10 ? messages.comment.minLength : messages.comment.maxLength
                    );
                    isValid = false;
                }

                if (!isValid) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            });

            // Real-time character count for comment
            const commentCharCount = document.createElement('small');
            commentCharCount.className = 'text-muted d-block mt-1';
            commentInput.parentNode.appendChild(commentCharCount);

            function updateCharCount() {
                const length = commentInput.value.trim().length;
                commentCharCount.textContent = `\${length}/1000 characters`;
                commentCharCount.style.color = length < 10 || length > 1000 ? '#dc3545' : '';
            }

            commentInput.addEventListener('input', updateCharCount);
            updateCharCount(); // Initial count

            // Animation d'entrée du formulaire
            const card = document.querySelector('.card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.3s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
{% endblock %}
", "avis/edit.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\avis\\edit.html.twig");
    }
}
