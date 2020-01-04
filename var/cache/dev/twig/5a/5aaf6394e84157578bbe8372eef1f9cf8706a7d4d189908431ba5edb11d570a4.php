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

/* base.html.twig */
class __TwigTemplate_9908400dd64685d12894bd710c0039fa3e47925bea8124064a6d0ac2d97bdb44 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    </head>
    <body>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
                <a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Gestion Etudiants</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 34
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 34, $this->source); })()) == "etudiants"))) {
            echo "active";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant.index");
        echo "\"> Liste des Étudiants</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 38
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 38, $this->source); })()) == "etudiants"))) {
            echo "active";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout-Etudiant");
        echo "\"> Inscriptions</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 42
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 42, $this->source); })()) == "etudiants"))) {
            echo "active";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant.index");
        echo "\"> Gestion des Abscences</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 46
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 46, $this->source); })()) == "etudiants"))) {
            echo "active";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant.index");
        echo "\"> Rapport des Étudiants</a>
                    </li>
                    ";
        // line 51
        echo "
                    ";
        // line 63
        echo "                    </ul>
                </div>
            </nav>
        ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        <script>
            
                var Nom = window.location.href.split('?')[1].split('&')[0].split('=')[1];
                ";
        // line 75
        echo "                var strings =document.getElementsByTagName('h5')

                var Niveau = window.location.href.split('?')[1].split('&')[1].split('=')[1];
                var GI2 = document.getElementsByClassName(\"GI2\");
                var GI1 = document.getElementsByClassName(\"GI1\");
                if(Niveau == \"GI1\"){
                    for (var i=0;i<GI2.length;i++){
                        GI2[i].style.display = 'none';
                    }
                }else if(Niveau == \"GI2\"){
                    for (var i=0;i<GI1.length;i++){
                        GI1[i].style.display = 'none';
                    }
                }
                for(var i=0;i<strings.length;i++){
                    var str = strings[i].innerText;
                    if(str.indexOf(Nom) != -1 && Nom != \"\"){
                        strings[i].parentNode.parentNode.style.backgroundColor= '#5BB55B';
                    }    
                }
                
                
            
            
            ";
        // line 118
        echo "            
            ";
        // line 134
        echo "        </script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        <style>
            ";
        // line 17
        echo "            .btn-success {
                margin-left: 170px;

            }
        </style>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 67,  231 => 66,  216 => 17,  210 => 8,  200 => 7,  181 => 5,  168 => 134,  165 => 118,  139 => 75,  131 => 68,  128 => 67,  126 => 66,  121 => 63,  118 => 51,  109 => 46,  98 => 42,  87 => 38,  76 => 34,  65 => 26,  60 => 23,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
        <style>
            {# .required{
                margin-right:10px;
                margin-left:-30px
            }
            label{
                margin-right:10px;
            } #}
            .btn-success {
                margin-left: 170px;

            }
        </style>
        {% endblock %}
    </head>
    <body>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
                <a class=\"navbar-brand\" href=\"{{ path('home')}}\">Gestion Etudiants</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if current_menu is defined and current_menu == 'etudiants' %}active{% endif %}\"  href=\"{{ path('etudiant.index') }}\"> Liste des Étudiants</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if current_menu is defined and current_menu == 'etudiants' %}active{% endif %}\"  href=\"{{ path('ajout-Etudiant') }}\"> Inscriptions</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if current_menu is defined and current_menu == 'etudiants' %}active{% endif %}\"  href=\"{{ path('etudiant.index') }}\"> Gestion des Abscences</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if current_menu is defined and current_menu == 'etudiants' %}active{% endif %}\"  href=\"{{ path('etudiant.index') }}\"> Rapport des Étudiants</a>
                    </li>
                    {# <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li> #}

                    {# <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Dropdown
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li> #}
                    </ul>
                </div>
            </nav>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        <script>
            
                var Nom = window.location.href.split('?')[1].split('&')[0].split('=')[1];
                {# var regexNom = new RegExp('/'Nom'/g'); #}
                var strings =document.getElementsByTagName('h5')

                var Niveau = window.location.href.split('?')[1].split('&')[1].split('=')[1];
                var GI2 = document.getElementsByClassName(\"GI2\");
                var GI1 = document.getElementsByClassName(\"GI1\");
                if(Niveau == \"GI1\"){
                    for (var i=0;i<GI2.length;i++){
                        GI2[i].style.display = 'none';
                    }
                }else if(Niveau == \"GI2\"){
                    for (var i=0;i<GI1.length;i++){
                        GI1[i].style.display = 'none';
                    }
                }
                for(var i=0;i<strings.length;i++){
                    var str = strings[i].innerText;
                    if(str.indexOf(Nom) != -1 && Nom != \"\"){
                        strings[i].parentNode.parentNode.style.backgroundColor= '#5BB55B';
                    }    
                }
                
                
            
            
            {# function myFunction1() {
                var id1 = document.getElementById(\"GI1-ch\").value;
                if(id1.checked == true){
                    var GI2 = document.getElementsByClassName(\"GI2\");
                    for (var i=0;i<GI2.length;i+=1){
                        GI2[i].style.display = 'none';
                    }
                }
            }
            function myFunction2() {
                var id2 = document.getElementById(\"GI2-ch\").value;
                if(id2.checked == true){
                    var GI1 = document.getElementsByClassName(\"GI1\");
                    for (var i=0;i<GI1.length;i+=1){
                        GI1[i].style.display = 'none';
                    }
                }
            }
             #}
            
            {# switch(id){
                case \"GI1\":
                    var GI2 = document.getElementsByClassName(\"GI2\");
                    for (var i=0;i<GI2.length;i+=1){
                     GI2[i].style.display = 'none';
                    }
                    break;
                case \"GI2\":
                    var GI1 = document.getElementsByClassName(\"GI1\");
                    for (var i=0;i<GI1.length;i+=1){
                     GI1[i].style.display = 'none';
                    } 
                    break;  

            } #}
        </script>
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/LearnSymfony/templates/base.html.twig");
    }
}
