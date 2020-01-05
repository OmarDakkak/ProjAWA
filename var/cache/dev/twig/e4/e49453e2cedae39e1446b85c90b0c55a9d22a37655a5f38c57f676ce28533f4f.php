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

/* etudiant/show.html.twig */
class __TwigTemplate_af2b83c31646e1aeec6de4ca83b3a1cc1e6c8d6b1be2342c696c52c632783b3b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/show.html.twig", 1);
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

        echo "La liste des etudiants!";
        
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
        echo "    <section class=\"etudiant\">
                 <h1 style =\"text-align:center; margin-top: 80px; margin-bottom:30px;font-family: 'Bungee Inline', cursive; color : #007bff\">Les Informations de l'étudiant</h1>
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/student" . twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 8, $this->source); })()), "getIdE", [], "method", false, false, false, 8)) . ".png")), "html", null, true);
        echo "\" class = \"img-fluid img-profile mx-auto mb-2\" alt=\"...\" height=\"220px\" width=\"260px\" style=\"display: flex;flex-flow: row wrap;justify-content: center;\">

                 <div class=\"row\" style = \"margin : 4em\">
                            <div class=\"col-md-6\">
                                <h3>Nom complet</h3>
                                <p> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 13, $this->source); })()), "getNom", [], "method", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 13, $this->source); })()), "getPrenom", [], "method", false, false, false, 13), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h3>CNE</h3>
                                <p> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 17, $this->source); })()), "getCNE", [], "method", false, false, false, 17), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h3>CIN</h3>
                                <p> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 21, $this->source); })()), "getCIN", [], "method", false, false, false, 21), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h3>Numéro de téléphone</h3>
                                <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 25, $this->source); })()), "getTel", [], "method", false, false, false, 25), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h3>Date de naissance</h3>
                                <p>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 29, $this->source); })()), "getDateNaiss", [], "method", false, false, false, 29), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h3>Adresse</h3>
                                <p>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 33, $this->source); })()), "getAdresse", [], "method", false, false, false, 33), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h3>Niveau</h3>
                                <p>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 37, $this->source); })()), "getNiveau", [], "method", false, false, false, 37), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h4>Les matieres</h4>
                                <ul>
                                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 42, $this->source); })()), "niveau", [], "any", false, false, false, 42), "matieres", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 43
            echo "                                    <li>";
            echo twig_escape_filter($this->env, $context["matiere"], "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                                </ul>
                            </div>
                            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 47, $this->source); })()), "getId", [], "any", false, false, false, 47), "html", null, true);
        echo "/edit-Etudiant\" class=\"btn btn-primary btn-lg btn-block\" style=\"margin-top:20px\">Modifier l'étudiant</a>
                            
                            
                        
                 </div>
                
                


    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 47,  165 => 45,  156 => 43,  152 => 42,  144 => 37,  137 => 33,  130 => 29,  123 => 25,  116 => 21,  109 => 17,  100 => 13,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}La liste des etudiants!{% endblock %}

{% block body %}
    <section class=\"etudiant\">
                 <h1 style =\"text-align:center; margin-top: 80px; margin-bottom:30px;font-family: 'Bungee Inline', cursive; color : #007bff\">Les Informations de l'étudiant</h1>
                <img src=\"{{asset('images/student'~ etudiant.getIdE()~'.png')}}\" class = \"img-fluid img-profile mx-auto mb-2\" alt=\"...\" height=\"220px\" width=\"260px\" style=\"display: flex;flex-flow: row wrap;justify-content: center;\">

                 <div class=\"row\" style = \"margin : 4em\">
                            <div class=\"col-md-6\">
                                <h3>Nom complet</h3>
                                <p> {{ etudiant.getNom() }} {{ etudiant.getPrenom() }}</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h3>CNE</h3>
                                <p> {{ etudiant.getCNE() }}</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h3>CIN</h3>
                                <p> {{ etudiant.getCIN() }}</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h3>Numéro de téléphone</h3>
                                <p>{{ etudiant.getTel() }}</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h3>Date de naissance</h3>
                                <p>{{ etudiant.getDateNaiss() }}</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h3>Adresse</h3>
                                <p>{{ etudiant.getAdresse() }}</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h3>Niveau</h3>
                                <p>{{ etudiant.getNiveau() }}</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h4>Les matieres</h4>
                                <ul>
                                {% for matiere in etudiant.niveau.matieres %}
                                    <li>{{ matiere }}</li>
                                {% endfor %}
                                </ul>
                            </div>
                            <a href=\"{{ etudiant.getId }}/edit-Etudiant\" class=\"btn btn-primary btn-lg btn-block\" style=\"margin-top:20px\">Modifier l'étudiant</a>
                            
                            
                        
                 </div>
                
                


    </section>

{% endblock %}
", "etudiant/show.html.twig", "/Applications/MAMP/htdocs/LearnSymfony/templates/etudiant/show.html.twig");
    }
}
