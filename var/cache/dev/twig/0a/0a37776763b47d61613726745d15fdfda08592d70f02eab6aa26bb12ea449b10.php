<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* note/index.html.twig */
class __TwigTemplate_82670d6d8447d20500a1363e7aa5992d6ddd996fb8e0e1ac8cb16fd9a82eabb9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "note/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Voir liste des notes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        <div class=\"jumbotron\">
            
                ";
        // line 27
        echo "

            
            <div class=\"container\">
                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-row\">
                    ";
        // line 36
        echo "                    <div class=\"col\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Matiere", [], "any", false, false, false, 37), 'row');
        echo "
                    </div>
                    ";
        // line 42
        echo "                    <div class=\"col\">
                        <button class=\"btn btn-primary\" style=\"margin-top:30px\">Rechercher</button>
                    </div>
                </div>
                ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <h1 style =\"text-align:center; margin-top: 80px; font-family: 'Bungee Inline', cursive; color : #007bff\">Liste des notes</h1>
        <div style=\"margin:3em\">
        <table class=\"table\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">CNE</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prenom</th>
                <th scope=\"col\">Note Actuelle</th>
                <th scope=\"col\">Matiere</th>
                <th scope=\"col\">Ajouter une note</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 64
            echo "            <tr class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "matiere", [], "any", false, false, false, 64), "html", null, true);
            echo "\">
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["n"], "etudiant", [], "any", false, false, false, 65), "CNE", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["n"], "etudiant", [], "any", false, false, false, 66), "Nom", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["n"], "etudiant", [], "any", false, false, false, 67), "Prenom", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "note", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "matiere", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td><a href=\"/Note/";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "getId", [], "any", false, false, false, 70), "html", null, true);
            echo "/edit-Note\" class=\"btn btn-primary\">Modifier</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
        </table>
        </div>
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "note/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 73,  166 => 70,  162 => 69,  158 => 68,  154 => 67,  150 => 66,  146 => 65,  141 => 64,  137 => 63,  117 => 46,  111 => 42,  106 => 37,  103 => 36,  98 => 31,  92 => 27,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title 'Voir liste des notes' %}
{% block body %}
        <div class=\"jumbotron\">
            
                {# <div class=\"container\">
                    <form method=\"GET\">
                        <div class=\"col\" id= \"Nom\">
                            <label for=\"nom\">Nom</label>
                            <input type=\"text\" class=\"form-control\" id=\"nom\" aria-describedby=\"desc\" placeholder=\"Entrer le nom!\">
                            <small id=\"desc\" class=\"form-text text-muted\">soit le nom soit le prenom!</small>
                        </div>
                        <div class=\"col\" id=\"Niveau\">
                            <label for=\"niveau\">Niveau</label>
                            <select class=\"form-control\" id=\"niveau\">
                                <option>selectionnez</option>
                                <option>GI1</option>
                                <option>GI2</option>
                            </select>
                        </div>
                        <div class=\"col\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"rechercher\">
                        </div>
                    </form>
                </div> #}


            
            <div class=\"container\">
                {{ form_start(form)}}
                <div class=\"form-row\">
                    {# <div class=\"col\">
                        {{ form_row(form.etudiant) }}
                    </div> #}
                    <div class=\"col\">
                        {{ form_row(form.Matiere) }}
                    </div>
                    {# <div class=\"col\" id=\"Niveau\">
                        {{ form_row(form.note) }}
                    </div> #}
                    <div class=\"col\">
                        <button class=\"btn btn-primary\" style=\"margin-top:30px\">Rechercher</button>
                    </div>
                </div>
                {{ form_end(form)}}
            </div>
        </div>
        <h1 style =\"text-align:center; margin-top: 80px; font-family: 'Bungee Inline', cursive; color : #007bff\">Liste des notes</h1>
        <div style=\"margin:3em\">
        <table class=\"table\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">CNE</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prenom</th>
                <th scope=\"col\">Note Actuelle</th>
                <th scope=\"col\">Matiere</th>
                <th scope=\"col\">Ajouter une note</th>
            </tr>
        </thead>
        <tbody>
        {% for n in notes %}
            <tr class=\"{{n.matiere}}\">
                <td>{{ n.etudiant.CNE }}</td>
                <td>{{ n.etudiant.Nom }}</td>
                <td>{{ n.etudiant.Prenom }}</td>
                <td>{{ n.note }}</td>
                <td>{{ n.matiere }}</td>
                <td><a href=\"/Note/{{ n.getId }}/edit-Note\" class=\"btn btn-primary\">Modifier</a></td>
            </tr>
        {% endfor %}
        </tbody>
        </table>
        </div>
        
{% endblock %}
", "note/index.html.twig", "/Applications/MAMP/htdocs/LearnSymfony/templates/note/index.html.twig");
    }
}
