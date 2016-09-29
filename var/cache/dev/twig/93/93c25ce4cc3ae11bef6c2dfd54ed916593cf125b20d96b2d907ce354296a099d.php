<?php

/* ::base.html.twig */
class __TwigTemplate_cb5be7ca55d9929db0b1b06df89b0d77a08dd749f878f7cf2093128e22df18d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abef92cca882141fdd77253e77966453b78b6e165051471d9cb12a47d7a31fab = $this->env->getExtension("native_profiler");
        $__internal_abef92cca882141fdd77253e77966453b78b6e165051471d9cb12a47d7a31fab->enter($__internal_abef92cca882141fdd77253e77966453b78b6e165051471d9cb12a47d7a31fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />

        <!-- Fonts -->
        <script src=\"https://use.fontawesome.com/e1938e0518.js\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Poiret+One\" rel=\"stylesheet\">
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('menu', $context, $blocks);
        // line 40
        echo "
        <div class=\"jumbotron\">
          <div class=\"container\">
            <h1>Quentin Muller</h1>
            <p>
              Full stack web developper
            </p>
          </div>
        </div>

        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "    </body>
</html>
";
        
        $__internal_abef92cca882141fdd77253e77966453b78b6e165051471d9cb12a47d7a31fab->leave($__internal_abef92cca882141fdd77253e77966453b78b6e165051471d9cb12a47d7a31fab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7db8eb1b4e5802fc5d65eb8434d812a02432f2143d15d8bcf4b6c40b17c799d = $this->env->getExtension("native_profiler");
        $__internal_e7db8eb1b4e5802fc5d65eb8434d812a02432f2143d15d8bcf4b6c40b17c799d->enter($__internal_e7db8eb1b4e5802fc5d65eb8434d812a02432f2143d15d8bcf4b6c40b17c799d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Quentin Muller";
        
        $__internal_e7db8eb1b4e5802fc5d65eb8434d812a02432f2143d15d8bcf4b6c40b17c799d->leave($__internal_e7db8eb1b4e5802fc5d65eb8434d812a02432f2143d15d8bcf4b6c40b17c799d_prof);

    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a6ed36907b2f4274cbccc23e523c360d01516561cef0e4746a1ecf7719b9441 = $this->env->getExtension("native_profiler");
        $__internal_3a6ed36907b2f4274cbccc23e523c360d01516561cef0e4746a1ecf7719b9441->enter($__internal_3a6ed36907b2f4274cbccc23e523c360d01516561cef0e4746a1ecf7719b9441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 19
        echo "        <nav class=\"navbar main-menu navbar-fixed-top\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
                <li><a href=\"#\"><i class=\"fa fa-paint-brush\"></i> Portfolio</a></li>
                <li><a href=\"#\"><i class=\"fa fa-code\"></i> Curriculum</a></li>
                <li><a href=\"#\"><i class=\"fa fa-paper-plane\"></i> Contactez-moi</a></li>
              </ul>
            </div>
          </div>
        </nav>
        ";
        
        $__internal_3a6ed36907b2f4274cbccc23e523c360d01516561cef0e4746a1ecf7719b9441->leave($__internal_3a6ed36907b2f4274cbccc23e523c360d01516561cef0e4746a1ecf7719b9441_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c44610d006f210258280d804aeb47b53bdffbf7dad09c3a1ae38731cab6b04a = $this->env->getExtension("native_profiler");
        $__internal_1c44610d006f210258280d804aeb47b53bdffbf7dad09c3a1ae38731cab6b04a->enter($__internal_1c44610d006f210258280d804aeb47b53bdffbf7dad09c3a1ae38731cab6b04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c44610d006f210258280d804aeb47b53bdffbf7dad09c3a1ae38731cab6b04a->leave($__internal_1c44610d006f210258280d804aeb47b53bdffbf7dad09c3a1ae38731cab6b04a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 50,  96 => 19,  90 => 18,  78 => 5,  69 => 51,  67 => 50,  55 => 40,  53 => 18,  42 => 10,  36 => 7,  31 => 5,  25 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Quentin Muller{% endblock %}</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />

        <!-- Fonts -->
        <script src=\"https://use.fontawesome.com/e1938e0518.js\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Poiret+One\" rel=\"stylesheet\">
    </head>
    <body>
        {% block menu %}
        <nav class=\"navbar main-menu navbar-fixed-top\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
                <li><a href=\"#\"><i class=\"fa fa-paint-brush\"></i> Portfolio</a></li>
                <li><a href=\"#\"><i class=\"fa fa-code\"></i> Curriculum</a></li>
                <li><a href=\"#\"><i class=\"fa fa-paper-plane\"></i> Contactez-moi</a></li>
              </ul>
            </div>
          </div>
        </nav>
        {% endblock %}

        <div class=\"jumbotron\">
          <div class=\"container\">
            <h1>Quentin Muller</h1>
            <p>
              Full stack web developper
            </p>
          </div>
        </div>

        {% block body %}{% endblock %}
    </body>
</html>
";
    }
}
