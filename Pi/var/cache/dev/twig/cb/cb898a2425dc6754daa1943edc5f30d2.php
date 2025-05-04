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

/* score/index.html.twig */
class __TwigTemplate_5f5959aef630c5220e79aa2bcfe0f774 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->load((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "role", [], "any", false, false, false, 1) == "ADMIN")) ? ("sideBar.html.twig") : ("navBar.html.twig")), 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "score/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "score/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Liste des Scores";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "


";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 27
        yield "
<main id=\"main\" class=\"main\">
    <div class=\"container\">
        <h1 class=\"my-4\">Scores</h1>
        
        ";
        // line 33
        yield "        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <form method=\"get\" class=\"row g-3\">
                    <div class=\"col-md-4\">
                        <label for=\"quiz\" class=\"form-label\">Quiz</label>
                        <select name=\"quiz\" id=\"quiz\" class=\"form-select\">
                            <option value=\"\">All Quizzes</option>
                            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 41
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 41), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedQuiz"]) || array_key_exists("selectedQuiz", $context) ? $context["selectedQuiz"] : (function () { throw new RuntimeError('Variable "selectedQuiz" does not exist.', 41, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "idquiz", [], "any", false, false, false, 41))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "nom", [], "any", false, false, false, 42), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quiz'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label for=\"user\" class=\"form-label\">User</label>
                        <select name=\"user\" id=\"user\" class=\"form-select\">
                            <option value=\"\">All Users</option>
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 52
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedUser"]) || array_key_exists("selectedUser", $context) ? $context["selectedUser"] : (function () { throw new RuntimeError('Variable "selectedUser" does not exist.', 52, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 53), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label for=\"search\" class=\"form-label\">Search</label>
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" 
                                   value=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 62, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Search users...\">
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                            </div>
                        </div>
                    </div>
                    ";
        // line 68
        if ((($tmp = (isset($context["selectedQuiz"]) || array_key_exists("selectedQuiz", $context) ? $context["selectedQuiz"] : (function () { throw new RuntimeError('Variable "selectedQuiz" does not exist.', 68, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                    <div class=\"col-md-12\">
                        <div class=\"form-check form-switch\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"top5\" id=\"top5\" 
                                  ";
            // line 72
            yield (((($tmp = (isset($context["showTop5"]) || array_key_exists("showTop5", $context) ? $context["showTop5"] : (function () { throw new RuntimeError('Variable "showTop5" does not exist.', 72, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield ">
                            <label class=\"form-check-label\" for=\"top5\">Show Top 5 Only</label>
                        </div>
                    </div>
                    ";
        }
        // line 77
        yield "                </form>
            </div>
        </div>

        ";
        // line 82
        yield "        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>User</th>
                                <th>Quiz</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 95
        if ((($tmp = (isset($context["isPaginated"]) || array_key_exists("isPaginated", $context) ? $context["isPaginated"] : (function () { throw new RuntimeError('Variable "isPaginated" does not exist.', 95, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "                                ";
            // line 97
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 97, $this->source); })()));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
                // line 98
                yield "                                    <tr>
                                        <td>";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 99) + ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 99, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 99) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 99, $this->source); })()), "getItemNumberPerPage", [], "method", false, false, false, 99))), "html", null, true);
                yield "</td>
                                        <td>";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "user", [], "any", false, false, false, 100), "nom", [], "any", false, false, false, 100), "html", null, true);
                yield "</td>
                                        <td>";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 101), "nom", [], "any", false, false, false, 101), "html", null, true);
                yield "</td>
                                        <td>";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "score", [], "any", false, false, false, 102), "html", null, true);
                yield "%</td>
                                    </tr>
                                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            // line 104
            if (!$context['_iterated']) {
                // line 105
                yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center\">No scores found</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['score'], $context['_parent'], $context['_iterated'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            yield "                            ";
        } else {
            // line 110
            yield "                                ";
            // line 111
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 111, $this->source); })()));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
                // line 112
                yield "                                    <tr>
                                        <td>";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 113), "html", null, true);
                yield "</td>
                                        <td>";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "user", [], "any", false, false, false, 114), "nom", [], "any", false, false, false, 114), "html", null, true);
                yield "</td>
                                        <td>";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "quiz", [], "any", false, false, false, 115), "nom", [], "any", false, false, false, 115), "html", null, true);
                yield "</td>
                                        <td>";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "score", [], "any", false, false, false, 116), "html", null, true);
                yield "%</td>
                                    </tr>
                                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            // line 118
            if (!$context['_iterated']) {
                // line 119
                yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center\">No scores found</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['score'], $context['_parent'], $context['_iterated'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "                            ";
        }
        // line 124
        yield "                        </tbody>
                    </table>
                </div>

                ";
        // line 129
        yield "      ";
        if ((($tmp = (isset($context["isPaginated"]) || array_key_exists("isPaginated", $context) ? $context["isPaginated"] : (function () { throw new RuntimeError('Variable "isPaginated" does not exist.', 129, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "    <div class=\"d-flex justify-content-center my-4\">
        <div class=\"btn-group\" role=\"group\" aria-label=\"Pagination\">

      

            ";
            // line 136
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 136, $this->source); })()), "pageCount", [], "any", false, false, false, 136)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 137
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "request", [], "any", false, false, false, 137), "attributes", [], "any", false, false, false, 137), "get", ["_route"], "method", false, false, false, 137), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "request", [], "any", false, false, false, 137), "query", [], "any", false, false, false, 137), "all", [], "any", false, false, false, 137), ["page" => $context["page"]])), "html", null, true);
                yield "\" 
                   class=\"btn btn-outline-primary ";
                // line 138
                if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 138, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 138))) {
                    yield "active";
                }
                yield "\">
                    ";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            yield "
         

        </div>
    </div>
";
        }
        // line 148
        yield "
            </div>
        </div>
    </div>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "<style>
    .btn-group .btn {
        border-radius: 0;
    }
    .btn-group .btn:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }
    .btn-group .btn:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }
    .btn-outline-primary.active {
        background-color: #0d6efd;
        color: white;
    }
</style>
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
        return "score/index.html.twig";
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
        return array (  434 => 9,  421 => 8,  405 => 148,  397 => 142,  388 => 139,  382 => 138,  377 => 137,  372 => 136,  365 => 130,  362 => 129,  356 => 124,  353 => 123,  344 => 119,  342 => 118,  327 => 116,  323 => 115,  319 => 114,  315 => 113,  312 => 112,  293 => 111,  291 => 110,  288 => 109,  279 => 105,  277 => 104,  262 => 102,  258 => 101,  254 => 100,  250 => 99,  247 => 98,  228 => 97,  226 => 96,  224 => 95,  209 => 82,  203 => 77,  195 => 72,  190 => 69,  188 => 68,  179 => 62,  171 => 56,  162 => 53,  155 => 52,  151 => 51,  143 => 45,  134 => 42,  127 => 41,  123 => 40,  114 => 33,  107 => 27,  105 => 8,  100 => 5,  87 => 4,  64 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends user.role == \"ADMIN\" ? 'sideBar.html.twig' : 'navBar.html.twig' %}
{% block title %}Liste des Scores{% endblock %}

{% block content %}



{% block stylesheets %}
<style>
    .btn-group .btn {
        border-radius: 0;
    }
    .btn-group .btn:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }
    .btn-group .btn:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }
    .btn-outline-primary.active {
        background-color: #0d6efd;
        color: white;
    }
</style>
{% endblock %}

<main id=\"main\" class=\"main\">
    <div class=\"container\">
        <h1 class=\"my-4\">Scores</h1>
        
        {# Filter Form #}
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <form method=\"get\" class=\"row g-3\">
                    <div class=\"col-md-4\">
                        <label for=\"quiz\" class=\"form-label\">Quiz</label>
                        <select name=\"quiz\" id=\"quiz\" class=\"form-select\">
                            <option value=\"\">All Quizzes</option>
                            {% for quiz in quizzes %}
                                <option value=\"{{ quiz.idquiz }}\" {{ selectedQuiz == quiz.idquiz ? 'selected' : '' }}>
                                    {{ quiz.nom }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label for=\"user\" class=\"form-label\">User</label>
                        <select name=\"user\" id=\"user\" class=\"form-select\">
                            <option value=\"\">All Users</option>
                            {% for user in users %}
                                <option value=\"{{ user.id }}\" {{ selectedUser == user.id ? 'selected' : '' }}>
                                    {{ user.nom }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label for=\"search\" class=\"form-label\">Search</label>
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" 
                                   value=\"{{ searchTerm }}\" placeholder=\"Search users...\">
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                            </div>
                        </div>
                    </div>
                    {% if selectedQuiz %}
                    <div class=\"col-md-12\">
                        <div class=\"form-check form-switch\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"top5\" id=\"top5\" 
                                  {{ showTop5 ? 'checked' : '' }}>
                            <label class=\"form-check-label\" for=\"top5\">Show Top 5 Only</label>
                        </div>
                    </div>
                    {% endif %}
                </form>
            </div>
        </div>

        {# Results Table #}
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>User</th>
                                <th>Quiz</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% if isPaginated %}
                                {# Paginated results #}
                                {% for score in pagination %}
                                    <tr>
                                        <td>{{ loop.index + (pagination.getCurrentPageNumber() - 1) * pagination.getItemNumberPerPage() }}</td>
                                        <td>{{ score.user.nom }}</td>
                                        <td>{{ score.quiz.nom }}</td>
                                        <td>{{ score.score }}%</td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\" class=\"text-center\">No scores found</td>
                                    </tr>
                                {% endfor %}
                            {% else %}
                                {# Top 5 results #}
                                {% for score in scores %}
                                    <tr>
                                        <td>{{ loop.index }}</td>
                                        <td>{{ score.user.nom }}</td>
                                        <td>{{ score.quiz.nom }}</td>
                                        <td>{{ score.score }}%</td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\" class=\"text-center\">No scores found</td>
                                    </tr>
                                {% endfor %}
                            {% endif %}
                        </tbody>
                    </table>
                </div>

                {# Pagination - only show if not in Top 5 mode #}
      {% if isPaginated %}
    <div class=\"d-flex justify-content-center my-4\">
        <div class=\"btn-group\" role=\"group\" aria-label=\"Pagination\">

      

            {# Numbered pages #}
            {% for page in 1..pagination.pageCount %}
                <a href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all | merge({'page': page})) }}\" 
                   class=\"btn btn-outline-primary {% if page == pagination.currentPageNumber %}active{% endif %}\">
                    {{ page }}
                </a>
            {% endfor %}

         

        </div>
    </div>
{% endif %}

            </div>
        </div>
    </div>
</main>
{% endblock %}", "score/index.html.twig", "C:\\Users\\akrim\\OneDrive\\Desktop\\PiWeb\\Pi\\templates\\score\\index.html.twig");
    }
}
