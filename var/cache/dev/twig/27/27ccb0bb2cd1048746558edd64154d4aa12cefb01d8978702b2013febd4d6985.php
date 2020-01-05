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

/* note/ajout.html.twig */
class __TwigTemplate_16984a36c4ca5b09dd99fe2ccd58ec8d4ed80691ed18b48b83f398ac02a55043 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/ajout.html.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 4, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "note/ajout.html.twig", 1);
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
            echo "        <h1 style =\"text-align:center; margin-top: 80px; font-family: 'Bungee Inline', cursive; color : #007bff\">Modifier la note</h1>
    ";
        } else {
            // line 9
            echo "        <h1 style=\"text-align:center; margin-top: 80px; font-family: 'Bungee Inline', cursive; color : #007bff\">Ajouter la note</h1>
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 20, $this->source); })()), "etudiant", [], "any", false, false, false, 20), 'row', ["label" => "Nom Complet"]);
        echo "
        </div>
        <div class=\"col-md-4\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 23, $this->source); })()), "matiere", [], "any", false, false, false, 23), 'row', ["label" => "Matiere"]);
        echo "
        </div>
        <div class=\"col-md-4\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 26, $this->source); })()), "note", [], "any", false, false, false, 26), 'row', ["label" => "Note"]);
        echo "
        </div>

        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" style=\"margin-top:20px\">
        ";
        // line 30
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "            Modifier
        ";
        } else {
            // line 33
            echo "            Ajouter
        ";
        }
        // line 35
        echo "    </button>
        
    </div>

    ";
        // line 41
        echo "    ";
        // line 48
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new RuntimeError('Variable "formNote" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "note/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 48,  144 => 41,  138 => 35,  134 => 33,  130 => 31,  128 => 30,  121 => 26,  115 => 23,  109 => 20,  104 => 17,  102 => 11,  98 => 9,  94 => 7,  91 => 6,  81 => 5,  62 => 3,  51 => 1,  49 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscriptions{% endblock %}
{% form_theme formNote 'bootstrap_4_layout.html.twig' %}
{% block body %}
    {% if editMode%}
        <h1 style =\"text-align:center; margin-top: 80px; font-family: 'Bungee Inline', cursive; color : #007bff\">Modifier la note</h1>
    {% else %}
        <h1 style=\"text-align:center; margin-top: 80px; font-family: 'Bungee Inline', cursive; color : #007bff\">Ajouter la note</h1>
    {% endif %}
    {# <div class=\"container\">
    {{ form_start(formNote) }}
        <div class=\"col-6\">
        {{ form_widget(formNote) }}
        </div>
    </div> #}

    <div class=\"row\" style = \"margin : 3em\">
        <div class=\"col-md-4\">
            {{ form_row(formNote.etudiant, {'label': 'Nom Complet'}) }}
        </div>
        <div class=\"col-md-4\">
            {{ form_row(formNote.matiere, {'label': 'Matiere'}) }}
        </div>
        <div class=\"col-md-4\">
            {{ form_row(formNote.note, {'label': 'Note'}) }}
        </div>

        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" style=\"margin-top:20px\">
        {% if editMode%}
            Modifier
        {% else %}
            Ajouter
        {% endif %}
    </button>
        
    </div>

    {# {{ form_row(formNote.chef,{'attr': {'placeholder': \"nom complet du chef de departement\"}}) }}
    {{ form_row(formNote.description) }} #}
    {# <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" style = \"margin : 3em\" >
        {% if editMode%}
            Modifier
        {% else %}
            Ajouter
        {% endif %}
    </button> #}
    {{ form_end(formNote) }}
{% endblock %}", "note/ajout.html.twig", "/Applications/MAMP/htdocs/LearnSymfony/templates/note/ajout.html.twig");
    }
}
