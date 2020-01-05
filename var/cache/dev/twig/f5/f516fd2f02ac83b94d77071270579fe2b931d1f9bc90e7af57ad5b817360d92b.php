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

/* etudiant/index.html.twig */
class __TwigTemplate_852710ef876b39824ea0bcce2afc3f50e3e10e191916501f7a7c9872fc376670 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/index.html.twig", 1);
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

        echo "Voir liste des etudiants";
        
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
                    <div class=\"col\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Nom", [], "any", false, false, false, 34), 'row');
        echo "
                    </div>
                    <div class=\"col\" id=\"Niveau\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "niveau", [], "any", false, false, false, 37), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                        <button class=\"btn btn-primary\" style=\"margin-top:30px\">Rechercher</button>
                    </div>
                </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <h1 class=\"ml-5\" style =\"margin-top: 80px; font-family: 'Bungee Inline', cursive; color : #007bff\">Liste des étudiants</h1>
        <div class=\"card-columns mt-4 ml-4 row\" id=\"cards\">
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Etudiants"]) || array_key_exists("Etudiants", $context) ? $context["Etudiants"] : (function () { throw new RuntimeError('Variable "Etudiants" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 49
            echo "            <div class=\"card border-primary ml-4 ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "niveau", [], "any", false, false, false, 49), "html", null, true);
            echo "\" style=\"width: 18rem;\">
                <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/student" . twig_get_attribute($this->env, $this->source, $context["etudiant"], "getIdE", [], "method", false, false, false, 50)) . ".png")), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\" height=\"220px\" width=\"120px\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Nom: ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "nom", [], "any", false, false, false, 52), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "prenom", [], "any", false, false, false, 52), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">Niveau: ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant"], "niveau", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant.show", ["id_e" => twig_get_attribute($this->env, $this->source, $context["etudiant"], "getIdE", [], "method", false, false, false, 54), "slug" => twig_get_attribute($this->env, $this->source, $context["etudiant"], "slug", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Plus d'actions</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 58,  151 => 54,  147 => 53,  141 => 52,  136 => 50,  131 => 49,  127 => 48,  119 => 43,  110 => 37,  104 => 34,  98 => 31,  92 => 27,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title 'Voir liste des etudiants' %}
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
                    <div class=\"col\">
                        {{ form_row(form.Nom) }}
                    </div>
                    <div class=\"col\" id=\"Niveau\">
                        {{ form_row(form.niveau) }}
                    </div>
                    <div class=\"col\">
                        <button class=\"btn btn-primary\" style=\"margin-top:30px\">Rechercher</button>
                    </div>
                </div>
                {{ form_end(form)}}
            </div>
        </div>
        <h1 class=\"ml-5\" style =\"margin-top: 80px; font-family: 'Bungee Inline', cursive; color : #007bff\">Liste des étudiants</h1>
        <div class=\"card-columns mt-4 ml-4 row\" id=\"cards\">
        {% for etudiant in Etudiants %}
            <div class=\"card border-primary ml-4 {{ etudiant.niveau }}\" style=\"width: 18rem;\">
                <img src=\"{{asset('images/student'~ etudiant.getIdE()~'.png')}}\" class=\"card-img-top\" alt=\"...\" height=\"220px\" width=\"120px\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Nom: {{ etudiant.nom  }} {{ etudiant.prenom }}</h5>
                    <p class=\"card-text\">Niveau: {{etudiant.niveau}}</p>
                    <a href=\"{{ path('etudiant.show', {id_e: etudiant.getIdE(), slug: etudiant.slug}) }}\" class=\"btn btn-primary\">Plus d'actions</a>
                </div>
            </div>
        {% endfor %}
        </div>
{% endblock %}
", "etudiant/index.html.twig", "/Applications/MAMP/htdocs/LearnSymfony/templates/etudiant/index.html.twig");
    }
}
