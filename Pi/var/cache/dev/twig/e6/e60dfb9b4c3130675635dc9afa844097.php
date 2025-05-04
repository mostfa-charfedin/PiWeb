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

/* user/admin/UsersManag.html.twig */
class __TwigTemplate_a0da071dacabd7eac1bca64d24f4f705 extends Template
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
        // line 1
        return "sideBar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/admin/UsersManag.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/admin/UsersManag.html.twig"));

        $this->parent = $this->load("sideBar.html.twig", 1);
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

        yield "Gestion des Utilisateurs";
        
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
        <h1>Gestion des Utilisateurs</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"\">Accueil</a></li>
                <li class=\"breadcrumb-item active\">Gestion des Utilisateurs</li>
            </ol>
        </nav>
    </div>
    
    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Liste des Utilisateurs</h5>

                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", ["error"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            yield "                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"searchInput\">
                                 
                                </div>
                            </div>
                           
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-bordered\">
                                <thead class=\"table-light\">
                                    <tr>
                                      
                                    <th scope=\"col\">Photo</th>
<th scope=\"col\">Full Name</th>
<th scope=\"col\">Email</th>
<th scope=\"col\">Role</th>
<th scope=\"col\">Phone Number</th>
<th scope=\"col\">Status</th>
<th scope=\"col\">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 65
            yield "                                        <tr>
                                           
                                            <td>
   

<img src=\"";
            // line 70
            yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "imageUrl", [], "any", false, false, false, 70))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "imageUrl", [], "any", false, false, false, 70)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/imgP/logo2.png"), "html", null, true)));
            yield "\" alt=\"Profile Image\" class=\"rounded-circle\" width=\"40\" height=\"40\">

                                                      
                                            </td>
                                            <td>";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 74), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 74), "html", null, true);
            yield "</td>
                                            <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                                           <td>
    <span class=\"badge
        ";
            // line 78
            if (CoreExtension::inFilter("ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 78))) {
                yield "bg-danger
        ";
            } elseif (CoreExtension::inFilter("USER", CoreExtension::getAttribute($this->env, $this->source,             // line 79
$context["user"], "role", [], "any", false, false, false, 79))) {
                yield "bg-primary
        ";
            } else {
                // line 80
                yield "bg-warning text-dark
        ";
            }
            // line 81
            yield "\">
        ";
            // line 82
            if (CoreExtension::inFilter("ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 82))) {
                // line 83
                yield "            Admin
        ";
            } elseif (CoreExtension::inFilter("USER", CoreExtension::getAttribute($this->env, $this->source,             // line 84
$context["user"], "role", [], "any", false, false, false, 84))) {
                // line 85
                yield "            User
        ";
            } else {
                // line 87
                yield "            Project Manager
        ";
            }
            // line 89
            yield "    </span>
</td>

                                            <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numPhone", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                                            <td>
                                               <span class=\"badge bg-";
            // line 94
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 94) == "ACTIVE")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 94) == "BLOCKED")) ? ("danger") : ("secondary"))));
            yield "\">
                                                ";
            // line 95
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 95) == "ACTIVE")) ? ("Actif") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 95) == "BLOCKED")) ? ("Bloqué") : ("Inconnu"))));
            yield "
                                            </span>

                                            </td>

&nbsp;                                
                                            <td>
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button type=\"button\"
                                                            class=\"btn btn-sm btn-warning edit-user-btn\"
                                                             data-bs-toggle=\"modal\"
                                                            data-bs-target=\"#edit-user-modal\"
                                                            data-user-id=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 107), "html", null, true);
            yield "\"
                                                            title=\"Modifier\">
                                                        <i class=\"bi bi-pencil\"></i>
                                                    </button>
&nbsp;
                                                    <button type=\"button\"
                                                            class=\"btn btn-sm btn-info view-user\"
                                                            data-bs-toggle=\"modal\"
                                                            data-bs-target=\"#userModal\"
                                                            data-user-id=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 116), "html", null, true);
            yield "\"
                                                            title=\"Voir détails\">
                                                        <i class=\"bi bi-eye\"></i>
                                                    </button>
&nbsp;
                                                    <form method=\"post\"
      action=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            yield "\"
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');\"
      class=\"d-inline\">
    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 125))), "html", null, true);
            yield "\">
    
    <button type=\"submit\" class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
        <i class=\"bi bi-trash\"></i>
    </button>
</form>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 134
        if (!$context['_iterated']) {
            // line 135
            yield "                                        <tr>
                                            <td colspan=\"8\" class=\"text-center\">Aucun utilisateur trouvé</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "                                </tbody>
                            </table>
                        </div>

                      <div class=\"navigation text-center mt-4\">
    ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 144, $this->source); })()), "pageCount", [], "any", false, false, false, 144)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 145
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "request", [], "any", false, false, false, 145), "attributes", [], "any", false, false, false, 145), "get", ["_route"], "method", false, false, false, 145), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "request", [], "any", false, false, false, 145), "query", [], "any", false, false, false, 145), "all", [], "any", false, false, false, 145), ["page" => $context["page"]])), "html", null, true);
            yield "\" 
           class=\"btn btn-outline-primary mx-1 ";
            // line 146
            if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 146, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 146))) {
                yield "active";
            }
            yield "\">
            ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        yield "</div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div class=\"modal fade\" id=\"userModal\" tabindex=\"-1\" aria-labelledby=\"userModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"userModalLabel\">Détails de l'utilisateur</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\" id=\"userDetails\">
                </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"edit-user-modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Edit User</h5>
                <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\" id=\"edit-user-form-container\">
            </div>
        </div>
    </div>
</div>

<style>
    .badge {
        font-size: 0.8em;
        font-weight: 500;
    }
    .table th {
        white-space: nowrap;
    }
    .btn-group .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }
    img.rounded-circle {
        object-fit: cover;
    }
</style>


<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>


<script>
document.addEventListener('DOMContentLoaded', function() {
     // Fonction de recherche dynamique
const searchInput = document.getElementById('searchInput');
const rows = document.querySelectorAll('tbody tr');

searchInput.addEventListener('input', function() {
    const filter = searchInput.value.toLowerCase();

    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(filter) ? '' : 'none';
    });
});


    // View user details in modal
    document.querySelectorAll('.view-user').forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.getAttribute('data-user-id');
            fetch(`/admin/user/\${userId}/details`, { // URL corrigée
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('userDetails').innerHTML = html;
            })
            .catch(error => {
                document.getElementById('userDetails').innerHTML = `
                    <div class=\"alert alert-danger\">
                        Une erreur s'est produite lors du chargement des détails.
                    </div>
                `;
            });
        });
    });

    // Edit user in modal
    document.querySelectorAll('.edit-user-btn').forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.getAttribute('data-user-id');
            fetch(`/admin/user/\${userId}/edit-modal`)
                .then(response => response.json())
                .then(data => {
                    const container = document.getElementById('edit-user-form-container');
                    if (container) {
                        container.innerHTML = data.form;
                        // Affiche le modal
                        \$('#edit-user-modal').modal('show');
                        
                        // Affiche les erreurs si elles existent
                        if (data.errors) {
                            for (const [fieldName, messages] of Object.entries(data.errors)) {
                                const input = document.querySelector(`[name\$=\"[\${fieldName}]\"]`);
                                if (input) {
                                    input.classList.add('is-invalid');
                                    const errorDiv = document.createElement('div');
                                    errorDiv.className = 'invalid-feedback';
                                    errorDiv.innerHTML = messages.join('<br>');
                                    const parent = input.closest('.form-floating') || input.parentElement;
                                    parent.appendChild(errorDiv);
                                }
                            }
                        }

                        // Gère la soumission du formulaire
                        document.getElementById('user-edit-form').addEventListener('submit', function(event) {
                            event.preventDefault();
                            this.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
                            this.querySelectorAll('.invalid-feedback').forEach(el => el.remove());

                            fetch(`/admin/user/\${userId}/update`, {
                                method: 'POST',
                                body: new FormData(this)
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    \$('#edit-user-modal').modal('hide');
                                    location.reload();
                                } else if (data.errors) {
                                    for (const [fieldName, messages] of Object.entries(data.errors)) {
                                        const input = document.querySelector(`[name\$=\"[\${fieldName}]\"]`);
                                        if (input) {
                                            input.classList.add('is-invalid');
                                            const errorDiv = document.createElement('div');
                                            errorDiv.className = 'invalid-feedback';
                                            errorDiv.innerHTML = messages.join('<br>');
                                            const parent = input.closest('.form-floating') || input.parentElement;
                                            parent.appendChild(errorDiv);
                                        }
                                    }
                                }
                            })
                            .catch(error => {
                                console.error(\"Erreur lors de la soumission du formulaire :\", error);
                                alert(\"Une erreur s'est produite lors de la mise à jour.\");
                            });
                        });
                    }
                })
                .catch(error => {
                    console.error(\"Error fetching edit form:\", error);
                    alert(\"Une erreur s'est produite lors du chargement du formulaire d'édition.\");
                });
        });
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
        return "user/admin/UsersManag.html.twig";
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
        return array (  360 => 150,  351 => 147,  345 => 146,  340 => 145,  336 => 144,  329 => 139,  320 => 135,  318 => 134,  304 => 125,  298 => 122,  289 => 116,  277 => 107,  262 => 95,  258 => 94,  253 => 92,  248 => 89,  244 => 87,  240 => 85,  238 => 84,  235 => 83,  233 => 82,  230 => 81,  226 => 80,  221 => 79,  217 => 78,  211 => 75,  205 => 74,  198 => 70,  191 => 65,  186 => 64,  157 => 37,  147 => 33,  144 => 32,  140 => 31,  137 => 30,  127 => 26,  124 => 25,  120 => 24,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'sideBar.html.twig' %}

{% block title %}Gestion des Utilisateurs{% endblock %}

{% block content %}
<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
        <h1>Gestion des Utilisateurs</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"\">Accueil</a></li>
                <li class=\"breadcrumb-item active\">Gestion des Utilisateurs</li>
            </ol>
        </nav>
    </div>
    
    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Liste des Utilisateurs</h5>

                        {% for message in app.flashes('success') %}
                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}

                        {% for message in app.flashes('error') %}
                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}

                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"searchInput\">
                                 
                                </div>
                            </div>
                           
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-bordered\">
                                <thead class=\"table-light\">
                                    <tr>
                                      
                                    <th scope=\"col\">Photo</th>
<th scope=\"col\">Full Name</th>
<th scope=\"col\">Email</th>
<th scope=\"col\">Role</th>
<th scope=\"col\">Phone Number</th>
<th scope=\"col\">Status</th>
<th scope=\"col\">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {% for user in pagination %}
                                        <tr>
                                           
                                            <td>
   

<img src=\"{{ user.imageUrl is not empty ? asset(user.imageUrl) : asset('assets/imgP/logo2.png') }}\" alt=\"Profile Image\" class=\"rounded-circle\" width=\"40\" height=\"40\">

                                                      
                                            </td>
                                            <td>{{ user.nom }} {{ user.prenom }}</td>
                                            <td>{{ user.email }}</td>
                                           <td>
    <span class=\"badge
        {% if 'ADMIN' in user.role %}bg-danger
        {% elseif 'USER' in user.role %}bg-primary
        {% else %}bg-warning text-dark
        {% endif %}\">
        {% if 'ADMIN' in user.role %}
            Admin
        {% elseif 'USER' in user.role %}
            User
        {% else %}
            Project Manager
        {% endif %}
    </span>
</td>

                                            <td>{{ user.numPhone }}</td>
                                            <td>
                                               <span class=\"badge bg-{{ user.status == 'ACTIVE' ? 'success' : (user.status == 'BLOCKED' ? 'danger' : 'secondary') }}\">
                                                {{ user.status == 'ACTIVE' ? 'Actif' : (user.status == 'BLOCKED' ? 'Bloqué' : 'Inconnu') }}
                                            </span>

                                            </td>

&nbsp;                                
                                            <td>
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button type=\"button\"
                                                            class=\"btn btn-sm btn-warning edit-user-btn\"
                                                             data-bs-toggle=\"modal\"
                                                            data-bs-target=\"#edit-user-modal\"
                                                            data-user-id=\"{{ user.id }}\"
                                                            title=\"Modifier\">
                                                        <i class=\"bi bi-pencil\"></i>
                                                    </button>
&nbsp;
                                                    <button type=\"button\"
                                                            class=\"btn btn-sm btn-info view-user\"
                                                            data-bs-toggle=\"modal\"
                                                            data-bs-target=\"#userModal\"
                                                            data-user-id=\"{{ user.id }}\"
                                                            title=\"Voir détails\">
                                                        <i class=\"bi bi-eye\"></i>
                                                    </button>
&nbsp;
                                                    <form method=\"post\"
      action=\"{{ path('admin_user_delete', {'id': user.id}) }}\"
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');\"
      class=\"d-inline\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
    
    <button type=\"submit\" class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
        <i class=\"bi bi-trash\"></i>
    </button>
</form>
                                                </div>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"8\" class=\"text-center\">Aucun utilisateur trouvé</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>

                      <div class=\"navigation text-center mt-4\">
    {% for page in 1..pagination.pageCount %}
        <a href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all | merge({'page': page})) }}\" 
           class=\"btn btn-outline-primary mx-1 {% if page == pagination.currentPageNumber %}active{% endif %}\">
            {{ page }}
        </a>
    {% endfor %}
</div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div class=\"modal fade\" id=\"userModal\" tabindex=\"-1\" aria-labelledby=\"userModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"userModalLabel\">Détails de l'utilisateur</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\" id=\"userDetails\">
                </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"edit-user-modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Edit User</h5>
                <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\" id=\"edit-user-form-container\">
            </div>
        </div>
    </div>
</div>

<style>
    .badge {
        font-size: 0.8em;
        font-weight: 500;
    }
    .table th {
        white-space: nowrap;
    }
    .btn-group .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }
    img.rounded-circle {
        object-fit: cover;
    }
</style>


<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>


<script>
document.addEventListener('DOMContentLoaded', function() {
     // Fonction de recherche dynamique
const searchInput = document.getElementById('searchInput');
const rows = document.querySelectorAll('tbody tr');

searchInput.addEventListener('input', function() {
    const filter = searchInput.value.toLowerCase();

    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(filter) ? '' : 'none';
    });
});


    // View user details in modal
    document.querySelectorAll('.view-user').forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.getAttribute('data-user-id');
            fetch(`/admin/user/\${userId}/details`, { // URL corrigée
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('userDetails').innerHTML = html;
            })
            .catch(error => {
                document.getElementById('userDetails').innerHTML = `
                    <div class=\"alert alert-danger\">
                        Une erreur s'est produite lors du chargement des détails.
                    </div>
                `;
            });
        });
    });

    // Edit user in modal
    document.querySelectorAll('.edit-user-btn').forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.getAttribute('data-user-id');
            fetch(`/admin/user/\${userId}/edit-modal`)
                .then(response => response.json())
                .then(data => {
                    const container = document.getElementById('edit-user-form-container');
                    if (container) {
                        container.innerHTML = data.form;
                        // Affiche le modal
                        \$('#edit-user-modal').modal('show');
                        
                        // Affiche les erreurs si elles existent
                        if (data.errors) {
                            for (const [fieldName, messages] of Object.entries(data.errors)) {
                                const input = document.querySelector(`[name\$=\"[\${fieldName}]\"]`);
                                if (input) {
                                    input.classList.add('is-invalid');
                                    const errorDiv = document.createElement('div');
                                    errorDiv.className = 'invalid-feedback';
                                    errorDiv.innerHTML = messages.join('<br>');
                                    const parent = input.closest('.form-floating') || input.parentElement;
                                    parent.appendChild(errorDiv);
                                }
                            }
                        }

                        // Gère la soumission du formulaire
                        document.getElementById('user-edit-form').addEventListener('submit', function(event) {
                            event.preventDefault();
                            this.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
                            this.querySelectorAll('.invalid-feedback').forEach(el => el.remove());

                            fetch(`/admin/user/\${userId}/update`, {
                                method: 'POST',
                                body: new FormData(this)
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    \$('#edit-user-modal').modal('hide');
                                    location.reload();
                                } else if (data.errors) {
                                    for (const [fieldName, messages] of Object.entries(data.errors)) {
                                        const input = document.querySelector(`[name\$=\"[\${fieldName}]\"]`);
                                        if (input) {
                                            input.classList.add('is-invalid');
                                            const errorDiv = document.createElement('div');
                                            errorDiv.className = 'invalid-feedback';
                                            errorDiv.innerHTML = messages.join('<br>');
                                            const parent = input.closest('.form-floating') || input.parentElement;
                                            parent.appendChild(errorDiv);
                                        }
                                    }
                                }
                            })
                            .catch(error => {
                                console.error(\"Erreur lors de la soumission du formulaire :\", error);
                                alert(\"Une erreur s'est produite lors de la mise à jour.\");
                            });
                        });
                    }
                })
                .catch(error => {
                    console.error(\"Error fetching edit form:\", error);
                    alert(\"Une erreur s'est produite lors du chargement du formulaire d'édition.\");
                });
        });
    });
});
</script>



{% endblock %}", "user/admin/UsersManag.html.twig", "C:\\Users\\Acer\\Desktop\\xampp\\htdocs\\PiWeb\\Pi\\templates\\user\\admin\\UsersManag.html.twig");
    }
}
