<?php

/* ::base.html.twig */
class __TwigTemplate_37f5466d47a6fecdb77b16f73458c64606502d760f43f455c5405dc4cb3efc70 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Quentin Muller";
    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
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
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
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
        return array (  105 => 50,  81 => 19,  78 => 18,  72 => 5,  66 => 51,  64 => 50,  52 => 40,  50 => 18,  39 => 10,  33 => 7,  28 => 5,  22 => 1,);
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
