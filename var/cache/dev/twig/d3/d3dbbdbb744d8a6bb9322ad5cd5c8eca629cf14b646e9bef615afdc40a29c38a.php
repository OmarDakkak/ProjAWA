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
class __TwigTemplate_ddd699f0192ada4504cf336ee14eebd6092615bd536d7ff55fbb72b6d64ba3c8 extends \Twig\Template
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
                <h3>Nom complet de l'etudiant</h3>
                <p> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 8, $this->source); })()), "prenom", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
                <h3>CNE</h3>
                <p> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 10, $this->source); })()), "cne", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
                <h3>Adresse email</h3>
                <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
                <h3>Date de naissance</h3>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 14, $this->source); })()), "naissance", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                <h3>Adresse</h3>
                <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 16, $this->source); })()), "adresse", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                <h3>Niveau</h3>
                <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 18, $this->source); })()), "niveau", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
                <h4>Les matieres</h4>
                <ul>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 21, $this->source); })()), "niveau", [], "any", false, false, false, 21), "matieres", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 22
            echo "                    <li>";
            echo twig_escape_filter($this->env, $context["matiere"], "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </ul>
                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/student" . twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 25, $this->source); })()), "getIdE", [], "method", false, false, false, 25)) . ".png")), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\" height=\"220px\" width=\"120px\">
            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant"]) || array_key_exists("etudiant", $context) ? $context["etudiant"] : (function () { throw new RuntimeError('Variable "etudiant" does not exist.', 26, $this->source); })()), "getId", [], "any", false, false, false, 26), "html", null, true);
        echo "/edit-Etudiant\" class=\"btn btn-primary\">Modifier etudiant</a>


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
        return array (  145 => 26,  141 => 25,  138 => 24,  129 => 22,  125 => 21,  119 => 18,  114 => 16,  109 => 14,  104 => 12,  99 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}La liste des etudiants!{% endblock %}

{% block body %}
    <section class=\"etudiant\">
                <h3>Nom complet de l'etudiant</h3>
                <p> {{ etudiant.nom }} {{ etudiant.prenom }}</p>
                <h3>CNE</h3>
                <p> {{ etudiant.cne }}</p>
                <h3>Adresse email</h3>
                <p>{{ etudiant.email}}</p>
                <h3>Date de naissance</h3>
                <p>{{ etudiant.naissance }}</p>
                <h3>Adresse</h3>
                <p>{{ etudiant.adresse }}</p>
                <h3>Niveau</h3>
                <p>{{ etudiant.niveau }}</p>
                <h4>Les matieres</h4>
                <ul>
                {% for matiere in etudiant.niveau.matieres %}
                    <li>{{ matiere }}</li>
                {% endfor %}
                </ul>
                <img src=\"{{asset('images/student'~ etudiant.getIdE()~'.png')}}\" class=\"card-img-top\" alt=\"...\" height=\"220px\" width=\"120px\">
            <a href=\"{{ etudiant.getId }}/edit-Etudiant\" class=\"btn btn-primary\">Modifier etudiant</a>


    </section>

{% endblock %}
", "etudiant/show.html.twig", "/home/mory-moussa/Bureau/Codes/ProjAWA/templates/etudiant/show.html.twig");
    }
}
