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

/* Pages/home.html.twig */
class __TwigTemplate_38e2f7aae2ba69dfcb3be18cab98e244a35540190e03780a397b70866f8e26bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Pages/home.html.twig", 1);
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

        echo "Gestion des etudiants";
        
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
        echo "
        ";
        // line 11
        echo "        <section id=\"banner\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p class=\"promo-title\">Projet d'Applications WEB Avancées</p>
                        <p> Ceci est une application pour la gestion des etudiants, developpée en utilisant le Framework Symfony.</p>
                        <p> Ce projet a été réalisé par : Omar Dakkak, Abdelfettah Hajjioui, Mory Moussa Camara, Chaymae Oundouh, Moutaai Souhail, Zouine Anas</p>
                        <p>Encadré par : Pr. Sara Koulali</p>
                    </div>
                    <div class=\"col-md-6 text-center\">
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/prof.png"), "html", null, true);
        echo "\" class=\"img-fluid\">
                    </div>
                </div>
            </div>

            <!-- <img src=\"images/bottom-wave.png\" class=\"botom-img\"> -->
        <svg id=\"curve\" data-name=\"Calque 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1400 236.76\"><path class=\"cls-1\" d=\"M0,211.42c58.08-34.71,187.11-101.25,364.41-106.6,157.37-4.74,249.85,51.77,363.24,80.89C873.29,223.11,1091,228.59,1400,78.35V315.12H0Z\" transform=\"translate(0 -78.35)\"/>
        </svg>
        </section>

    <!-- <img src=\"images/bottom-wave.png\" class=\"botom-img\"> -->
";
        // line 33
        echo "</svg>
</section>
       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  103 => 21,  91 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title 'Gestion des etudiants' %}

{% block body %}

        {# <div class=\"jumbotron text-center\">
            <h1>Ecole Nationale des sciences appliquées - Al Hoceima</h1>
            <p>Ceci est une application pour la gestion des etudiants, developpée en utilisant le Framework Symfony </p>
        </div> #}
        <section id=\"banner\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p class=\"promo-title\">Projet d'Applications WEB Avancées</p>
                        <p> Ceci est une application pour la gestion des etudiants, developpée en utilisant le Framework Symfony.</p>
                        <p> Ce projet a été réalisé par : Omar Dakkak, Abdelfettah Hajjioui, Mory Moussa Camara, Chaymae Oundouh, Moutaai Souhail, Zouine Anas</p>
                        <p>Encadré par : Pr. Sara Koulali</p>
                    </div>
                    <div class=\"col-md-6 text-center\">
                        <img src=\"{{asset('images/prof.png')}}\" class=\"img-fluid\">
                    </div>
                </div>
            </div>

            <!-- <img src=\"images/bottom-wave.png\" class=\"botom-img\"> -->
        <svg id=\"curve\" data-name=\"Calque 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1400 236.76\"><path class=\"cls-1\" d=\"M0,211.42c58.08-34.71,187.11-101.25,364.41-106.6,157.37-4.74,249.85,51.77,363.24,80.89C873.29,223.11,1091,228.59,1400,78.35V315.12H0Z\" transform=\"translate(0 -78.35)\"/>
        </svg>
        </section>

    <!-- <img src=\"images/bottom-wave.png\" class=\"botom-img\"> -->
{# <svg id=\"curve\" data-name=\"Calque 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1400 236.76\"><path class=\"cls-1\" d=\"M0,211.42c58.08-34.71,187.11-101.25,364.41-106.6,157.37-4.74,249.85,51.77,363.24,80.89C873.29,223.11,1091,228.59,1400,78.35V315.12H0Z\" transform=\"translate(0 -78.35)\"/> #}
</svg>
</section>
       
{% endblock %}


 {# <div class=\"container\">
            <h2>Les Etudiants</h2>
            <div class=\"row flex\">
            <table class=\"table table-striped\">
                        <thead class=\"thead-dark\">
                            <tr>
                            <th scope=\"col\">CNE</th>
                            <th scope=\"col\">Nom</th>
                            <th scope=\"col\">Prenom</th>
                            <th scope=\"col\">CIN</th>
                            <th scope=\"col\">Tel</th>
                            <th scope=\"col\">Date de Naissance</th>
                            <th scope=\"col\">Adresse</th>
                            <th scope=\"col\">Niveau</th>
                            </tr>
                        </thead>
                        <tbody>
                {% for Etudiant in Etudiants %}
                            <tr>
                            <td>{{Etudiant.cNE}}</td>
                            <td>{{Etudiant.nom}}</td>
                            <td>{{Etudiant.prenom}}</td>
                            <td>{{Etudiant.cIN}}</td>
                            <td>{{Etudiant.tel}}</td>
                            <td>{{Etudiant.dateNaiss}}</td>
                            <td>{{Etudiant.adresse}}</td>
                            <td>{{Etudiant.niveau}}</td>
                            </tr>
                {% endfor %}
                        </tbody>
                </table>
            </div>
        </div> #}", "Pages/home.html.twig", "/Applications/MAMP/htdocs/LearnSymfony/templates/Pages/home.html.twig");
    }
}
