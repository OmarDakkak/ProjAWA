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

/* etudiant/ajout.html.twig */
class __TwigTemplate_23b27832a81d3babaad10cff6396898d3df5fdabaf1ba17043ed52f9b1151e7b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/ajout.html.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 4, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/ajout.html.twig", 1);
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

        echo "Welecom!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        ";
        // line 7
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <h1>Modification d'un etudiant!</h1>
    ";
        } else {
            // line 10
            echo "        <h1>Ajoutation  d'un etudiant!</h1>
    ";
        }
        // line 12
        echo "
    <div class=\"row\">
        <div class=\"col-6\">
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 15, $this->source); })()), 'form_start');
        echo "

            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 17, $this->source); })()), "cne", [], "any", false, false, false, 17), 'row');
        echo "
        </div>
        <div class=\"col-6\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 20, $this->source); })()), "id_e", [], "any", false, false, false, 20), 'row');
        echo "
        </div>
        <div class=\"col-6\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'row', ["attr" => ["placeholder" => "nom de l'etudiant"]]);
        echo "
        </div>
        <div class=\"col-6\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), 'row');
        echo "
        </div>

        <div class=\"col-6\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'row');
        echo "
        </div>

        <div class=\"col-6\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 34, $this->source); })()), "niveau", [], "any", false, false, false, 34), 'row');
        echo "
        </div>

        <div class=\"col-6\">
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 38, $this->source); })()), "naissance", [], "any", false, false, false, 38), 'row');
        echo "
        </div>
        <div class=\"col-6\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 41, $this->source); })()), "adresse", [], "any", false, false, false, 41), 'row');
        echo "
        </div>

    </div>
    <button type=\"submit\" class=\"btn btn-success\" >
        ";
        // line 46
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "            Modifier etudiant
        ";
        } else {
            // line 49
            echo "            Ajouter etudiant
        ";
        }
        // line 51
        echo "    </button>
    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 52, $this->source); })()), 'form_end');
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 52,  177 => 51,  173 => 49,  169 => 47,  167 => 46,  159 => 41,  153 => 38,  146 => 34,  139 => 30,  132 => 26,  126 => 23,  120 => 20,  114 => 17,  109 => 15,  104 => 12,  100 => 10,  96 => 8,  94 => 7,  91 => 6,  81 => 5,  62 => 3,  51 => 1,  49 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welecom!{% endblock %}
{% form_theme formEtudiant 'bootstrap_4_layout.html.twig' %}
{% block body %}
    <div class=\"container\">
        {% if editMode%}
        <h1>Modification d'un etudiant!</h1>
    {% else %}
        <h1>Ajoutation  d'un etudiant!</h1>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-6\">
            {{ form_start(formEtudiant) }}

            {{ form_row(formEtudiant.cne) }}
        </div>
        <div class=\"col-6\">
            {{ form_row(formEtudiant.id_e) }}
        </div>
        <div class=\"col-6\">
            {{ form_row(formEtudiant.nom,{'attr': {'placeholder': \"nom de l'etudiant\"}}) }}
        </div>
        <div class=\"col-6\">
            {{ form_row(formEtudiant.prenom) }}
        </div>

        <div class=\"col-6\">
            {{ form_row(formEtudiant.email) }}
        </div>

        <div class=\"col-6\">
            {{ form_row(formEtudiant.niveau) }}
        </div>

        <div class=\"col-6\">
            {{ form_row(formEtudiant.naissance) }}
        </div>
        <div class=\"col-6\">
            {{ form_row(formEtudiant.adresse) }}
        </div>

    </div>
    <button type=\"submit\" class=\"btn btn-success\" >
        {% if editMode%}
            Modifier etudiant
        {% else %}
            Ajouter etudiant
        {% endif %}
    </button>
    {{ form_end(formEtudiant) }}</div>
{% endblock %}", "etudiant/ajout.html.twig", "/home/mory-moussa/Bureau/Codes/ProjAWA/templates/etudiant/ajout.html.twig");
    }
}
