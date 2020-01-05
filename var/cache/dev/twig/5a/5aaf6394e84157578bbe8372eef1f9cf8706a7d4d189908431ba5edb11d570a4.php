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
        <link href=\"https://fonts.googleapis.com/css?family=Bungee+Inline&display=swap\" rel=\"stylesheet\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    </head>
    <body>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
                <a class=\"navbar-brand\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Gestion Etudiants</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 39
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 39, $this->source); })()) == "etudiants"))) {
            echo "active";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant.index");
        echo "\"> Liste des Étudiants</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 43
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 43, $this->source); })()) == "etudiants"))) {
            echo "active";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout-Etudiant");
        echo "\"> Inscriptions</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 47
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 47, $this->source); })()) == "etudiants"))) {
            echo "active";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note.index");
        echo "\"> Gestion des Notes</a>
                    </li>

                    ";
        // line 53
        echo "                    ";
        // line 56
        echo "
                    ";
        // line 68
        echo "                    </ul>
                </div>
            </nav>
        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        <script>
            
                var Nom = window.location.href.split('?')[1].split('&')[0].split('=')[1];
                ";
        // line 80
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
        // line 123
        echo "            
            ";
        // line 139
        echo "        </script>
        <script>
            var elem = document.getElementById('niveau');
            elem.classList.add(\"form-control\");

            var elem1 = document.getElementById('Nom');
            elem1.classList.add(\"form-control\");
        </script>
        ";
        // line 184
        echo "        <script>
            java = document.getElementsByClassName('POO_EN_JAVA');
            ML = document.getElementsByClassName('MACHINE_LEARNING');
            AWA = document.getElementsByClassName('AWA');
            COMP = document.getElementsByClassName('COMPLEXITE');
            var matiere = window.location.href.split('?')[1].split('=')[1];
            if(matiere == 'POO_EN_JAVA'){
                for(var i=0;i<ML.length;i++){
                    ML[i].style.display = 'none';
                }
                for(var i=0;i<AWA.length;i++){
                    AWA[i].style.display = 'none';
                }
                for(var i=0;i<COMP.length;i++){
                    COMP[i].style.display = 'none';
                }

            }else if(matiere == 'MACHINE_LEARNING'){
                for(var i=0;i<java.length;i++){
                    java[i].style.display = 'none';
                }
                for(var i=0;i<AWA.length;i++){
                    AWA[i].style.display = 'none';
                }
                for(var i=0;i<COMP.length;i++){
                    COMP[i].style.display = 'none';
                }

            }else if(matiere == 'AWA'){
                for(var i=0;i<ML.length;i++){
                    ML[i].style.display = 'none';
                }
                for(var i=0;i<java.length;i++){
                    java[i].style.display = 'none';
                }
                for(var i=0;i<COMP.length;i++){
                    COMP[i].style.display = 'none';
                }

            }else if(matiere == 'COMPLEXITE'){
                for(var i=0;i<ML.length;i++){
                    ML[i].style.display = 'none';
                }
                for(var i=0;i<AWA.length;i++){
                    AWA[i].style.display = 'none';
                }
                for(var i=0;i<java.length;i++){
                    java[i].style.display = 'none';
                }
            }  
        </script>
        <script>
            var elem = document.getElementById('Matiere');
            elem.classList.add(\"form-control\");
        </script>
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

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        <style>
            .error[for='niveau']{
                margin-right:10px;
                margin-left:-30px
            }
            .error[for='Nom']{
                margin-right:10px;
            }
            label{
                margin-right:10px;
            }
            .btn-success {
                margin-left: 170px;

            }
        </style>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
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

    // line 72
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
        return array (  315 => 72,  297 => 71,  267 => 9,  257 => 8,  238 => 5,  171 => 184,  161 => 139,  158 => 123,  132 => 80,  124 => 73,  121 => 72,  119 => 71,  114 => 68,  111 => 56,  109 => 53,  99 => 47,  88 => 43,  77 => 39,  66 => 31,  61 => 28,  59 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link href=\"https://fonts.googleapis.com/css?family=Bungee+Inline&display=swap\" rel=\"stylesheet\">
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
        <style>
            .error[for='niveau']{
                margin-right:10px;
                margin-left:-30px
            }
            .error[for='Nom']{
                margin-right:10px;
            }
            label{
                margin-right:10px;
            }
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
                        <a class=\"nav-link {% if current_menu is defined and current_menu == 'etudiants' %}active{% endif %}\"  href=\"{{ path('note.index') }}\"> Gestion des Notes</a>
                    </li>

                    {# <li class=\"nav-item\">
                        <a class=\"nav-link {% if current_menu is defined and current_menu == 'etudiants' %}active{% endif %}\"  href=\"{{ path('etudiant.index') }}\"> Rapport des Étudiants</a>
                    </li> #}
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
        <script>
            var elem = document.getElementById('niveau');
            elem.classList.add(\"form-control\");

            var elem1 = document.getElementById('Nom');
            elem1.classList.add(\"form-control\");
        </script>
        {# <script>
            var matiere = window.location.href.split('?')[1].split('=')[1];
            var elems = document.getElementsByTagName('tr');
            switch(matiere){
                case 'COMPLEXITE':
                for(i=0; i< elems.length; i++){
                    document.getElementsByClassName('MACHINE_LEARNING')[i].style.display = 'none';
                    document.getElementsByClassName('AWA')[i].style.display = 'none';
                    document.getElementsByClassName('POO_EN_JAVA')[i].style.display = 'none';
                }
                break; 

                case 'MACHINE_LEARNING':
                for(i=0; i< elems.length; i++){
                    document.getElementsByClassName('AWA')[i].style.display = 'none';
                    document.getElementsByClassName('POO_EN_JAVA')[i].style.display = 'none';
                    document.getElementsByClassName('COMPLEXITE')[i].style.display = 'none';                    
                }
                break; 

                case 'AWA':
                for(i=0; i< elems.length; i++){
                    document.getElementsByClassName('COMPLEXITE')[i].style.display = 'none';
                    document.getElementsByClassName('POO_EN_JAVA')[i].style.display = 'none';
                    document.getElementsByClassName('MACHINE_LEARNING')[i].style.display = 'none';
                }
                break; 

                case 'POO_EN_JAVA':
                for(i=0; i< elems.length; i++){
                    document.getElementsByClassName('MACHINE_LEARNING')[i].style.display = 'none';
                    document.getElementsByClassName('COMPLEXITE')[i].style.display = 'none';
                    document.getElementsByClassName('AWA')[i].style.display = 'none';
                }
                break;   
            }
        </script> #}
        <script>
            java = document.getElementsByClassName('POO_EN_JAVA');
            ML = document.getElementsByClassName('MACHINE_LEARNING');
            AWA = document.getElementsByClassName('AWA');
            COMP = document.getElementsByClassName('COMPLEXITE');
            var matiere = window.location.href.split('?')[1].split('=')[1];
            if(matiere == 'POO_EN_JAVA'){
                for(var i=0;i<ML.length;i++){
                    ML[i].style.display = 'none';
                }
                for(var i=0;i<AWA.length;i++){
                    AWA[i].style.display = 'none';
                }
                for(var i=0;i<COMP.length;i++){
                    COMP[i].style.display = 'none';
                }

            }else if(matiere == 'MACHINE_LEARNING'){
                for(var i=0;i<java.length;i++){
                    java[i].style.display = 'none';
                }
                for(var i=0;i<AWA.length;i++){
                    AWA[i].style.display = 'none';
                }
                for(var i=0;i<COMP.length;i++){
                    COMP[i].style.display = 'none';
                }

            }else if(matiere == 'AWA'){
                for(var i=0;i<ML.length;i++){
                    ML[i].style.display = 'none';
                }
                for(var i=0;i<java.length;i++){
                    java[i].style.display = 'none';
                }
                for(var i=0;i<COMP.length;i++){
                    COMP[i].style.display = 'none';
                }

            }else if(matiere == 'COMPLEXITE'){
                for(var i=0;i<ML.length;i++){
                    ML[i].style.display = 'none';
                }
                for(var i=0;i<AWA.length;i++){
                    AWA[i].style.display = 'none';
                }
                for(var i=0;i<java.length;i++){
                    java[i].style.display = 'none';
                }
            }  
        </script>
        <script>
            var elem = document.getElementById('Matiere');
            elem.classList.add(\"form-control\");
        </script>
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/LearnSymfony/templates/base.html.twig");
    }
}
