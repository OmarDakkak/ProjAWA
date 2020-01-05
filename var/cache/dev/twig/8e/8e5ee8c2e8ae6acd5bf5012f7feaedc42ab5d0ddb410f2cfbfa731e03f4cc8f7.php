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
class __TwigTemplate_abc4a8265c06ed2ff0efc3b791b18aeeaf932abcbbcccf37b341df857d8ff16e extends \Twig\Template
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

        echo "Inscriptions";
        
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
        echo "    ";
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <h1 style =\"text-align:center; margin-top: 80px; font-family: 'Bungee Inline', cursive; color : #007bff\">Modifier l'étudiant!</h1>
    ";
        } else {
            // line 9
            echo "        <h1 style=\"text-align:center; margin-top: 80px; font-family: 'Bungee Inline', cursive; color : #007bff\">Inscrire un étudiant!</h1>
    ";
        }
        // line 11
        echo "    ";
        // line 17
        echo "
    <div class=\"row\" style = \"margin : 3em\">
        <div class=\"col-md-4\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 20, $this->source); })()), "Nom", [], "any", false, false, false, 20), 'row');
        echo "
        </div>
        <div class=\"col-md-4\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 23, $this->source); })()), "Prenom", [], "any", false, false, false, 23), 'row', ["label" => "Prénom"]);
        echo "
        </div>
        <div class=\"col-md-4\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 26, $this->source); })()), "CNE", [], "any", false, false, false, 26), 'row', ["label" => "CNE"]);
        echo "
        </div>
        <div class=\"col-md-4\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 29, $this->source); })()), "CIN", [], "any", false, false, false, 29), 'row', ["label" => "CIN"]);
        echo "
        </div>
        <div class=\"col-md-4\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 32, $this->source); })()), "Tel", [], "any", false, false, false, 32), 'row', ["label" => "Numéro de téléphone"]);
        echo "
        </div>
        <div class=\"col-md-4\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 35, $this->source); })()), "Adresse", [], "any", false, false, false, 35), 'row');
        echo "
        </div>
        <div class=\"col-md-4\">
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 38, $this->source); })()), "id_e", [], "any", false, false, false, 38), 'row', ["label" => "Identifiant"]);
        echo "
        </div>
        <div class=\"col-md-4\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 41, $this->source); })()), "niveau", [], "any", false, false, false, 41), 'row');
        echo "
        </div>
        <div class=\"col-md-4\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 44, $this->source); })()), "Date_naiss", [], "any", false, false, false, 44), 'row', ["label" => "Date de naissance"]);
        echo "
        </div>

        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" style=\"margin-top:20px\">
        ";
        // line 48
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 48, $this->source); })())) {
            // line 49
            echo "            Modifier
        ";
        } else {
            // line 51
            echo "            Ajouter
        ";
        }
        // line 53
        echo "    </button>
        
    </div>

    ";
        // line 59
        echo "    ";
        // line 66
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEtudiant"]) || array_key_exists("formEtudiant", $context) ? $context["formEtudiant"] : (function () { throw new RuntimeError('Variable "formEtudiant" does not exist.', 66, $this->source); })()), 'form_end');
        echo "
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
        return array (  182 => 66,  180 => 59,  174 => 53,  170 => 51,  166 => 49,  164 => 48,  157 => 44,  151 => 41,  145 => 38,  139 => 35,  133 => 32,  127 => 29,  121 => 26,  115 => 23,  109 => 20,  104 => 17,  102 => 11,  98 => 9,  94 => 7,  91 => 6,  81 => 5,  62 => 3,  51 => 1,  49 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscriptions{% endblock %}
{% form_theme formEtudiant 'bootstrap_4_layout.html.twig' %}
{% block body %}
    {% if editMode%}
        <h1 style =\"text-align:center; margin-top: 80px; font-family: 'Bungee Inline', cursive; color : #007bff\">Modifier l'étudiant!</h1>
    {% else %}
        <h1 style=\"text-align:center; margin-top: 80px; font-family: 'Bungee Inline', cursive; color : #007bff\">Inscrire un étudiant!</h1>
    {% endif %}
    {# <div class=\"container\">
    {{ form_start(formEtudiant) }}
        <div class=\"col-6\">
        {{ form_widget(formEtudiant) }}
        </div>
    </div> #}

    <div class=\"row\" style = \"margin : 3em\">
        <div class=\"col-md-4\">
            {{ form_row(formEtudiant.Nom) }}
        </div>
        <div class=\"col-md-4\">
            {{ form_row(formEtudiant.Prenom, {'label': 'Prénom'}) }}
        </div>
        <div class=\"col-md-4\">
            {{ form_row(formEtudiant.CNE, {'label': 'CNE'}) }}
        </div>
        <div class=\"col-md-4\">
            {{ form_row(formEtudiant.CIN, {'label': 'CIN'}) }}
        </div>
        <div class=\"col-md-4\">
            {{ form_row(formEtudiant.Tel, {'label': 'Numéro de téléphone'}) }}
        </div>
        <div class=\"col-md-4\">
            {{ form_row(formEtudiant.Adresse) }}
        </div>
        <div class=\"col-md-4\">
            {{ form_row(formEtudiant.id_e, {'label': 'Identifiant'}) }}
        </div>
        <div class=\"col-md-4\">
            {{ form_row(formEtudiant.niveau) }}
        </div>
        <div class=\"col-md-4\">
            {{ form_row(formEtudiant.Date_naiss, {'label': 'Date de naissance'}) }}
        </div>

        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" style=\"margin-top:20px\">
        {% if editMode%}
            Modifier
        {% else %}
            Ajouter
        {% endif %}
    </button>
        
    </div>

    {# {{ form_row(formEtudiant.chef,{'attr': {'placeholder': \"nom complet du chef de departement\"}}) }}
    {{ form_row(formEtudiant.description) }} #}
    {# <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" style = \"margin : 3em\" >
        {% if editMode%}
            Modifier
        {% else %}
            Ajouter
        {% endif %}
    </button> #}
    {{ form_end(formEtudiant) }}
{% endblock %}", "etudiant/ajout.html.twig", "/Applications/MAMP/htdocs/LearnSymfony/templates/etudiant/ajout.html.twig");
    }
}
