<?php

/* :default:index.html.twig */
class __TwigTemplate_79ef67ae65af4fc52d4c6bcf569dbd35e1a517bc9e0cf24c4ef9aa8379d8f66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"wrapper\">
        <div class=\"container\">
          <!-- Présentation -->
          <div class=\"section\">
            <div class=\"text-center\">
              <img id=\"portrait\" class=\"img-responsive img-circle center-block\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/quentin.jpg"), "html", null, true);
        echo "\" alt=\"Quentin Muller\" />
              <p id=\"description\">
                Aujourd'hui développeur à Nantes,
                <br>
                Je suis passionné par le web et ce qui l'entoure depuis presque toujours.

              </p>
            </div>
          </div>

          <hr>

          <!-- CV -->
          <div class=\"section\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <div class=\"cv-section\">
                    <!-- <i class=\"fa fa-graduation-cap fa-4x\"></i> -->
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/graduate.png"), "html", null, true);
        echo "\" class=\"cv-icon\" alt=\"\" />
                    <h5>Parcours</h5>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"cv-section\">
                  <!-- <i class=\"fa fa-code fa-4x\"></i> -->
                  <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/laptop.png"), "html", null, true);
        echo "\" class=\"cv-icon\" alt=\"\" />
                  <h5>Compétences</h5>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"cv-section\">
                  <!-- <i class=\"fa fa-gamepad fa-4x\"></i> -->
                  <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/tennis-player.png"), "html", null, true);
        echo "\" class=\"cv-icon\" alt=\"\" />
                  <h5>Passions</h5>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact -->
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 41,  69 => 34,  59 => 27,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div class=\"container\">
          <!-- Présentation -->
          <div class=\"section\">
            <div class=\"text-center\">
              <img id=\"portrait\" class=\"img-responsive img-circle center-block\" src=\"{{ asset('images/quentin.jpg') }}\" alt=\"Quentin Muller\" />
              <p id=\"description\">
                Aujourd'hui développeur à Nantes,
                <br>
                Je suis passionné par le web et ce qui l'entoure depuis presque toujours.

              </p>
            </div>
          </div>

          <hr>

          <!-- CV -->
          <div class=\"section\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <div class=\"cv-section\">
                    <!-- <i class=\"fa fa-graduation-cap fa-4x\"></i> -->
                    <img src=\"{{ asset('images/graduate.png') }}\" class=\"cv-icon\" alt=\"\" />
                    <h5>Parcours</h5>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"cv-section\">
                  <!-- <i class=\"fa fa-code fa-4x\"></i> -->
                  <img src=\"{{ asset('images/laptop.png') }}\" class=\"cv-icon\" alt=\"\" />
                  <h5>Compétences</h5>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"cv-section\">
                  <!-- <i class=\"fa fa-gamepad fa-4x\"></i> -->
                  <img src=\"{{ asset('images/tennis-player.png') }}\" class=\"cv-icon\" alt=\"\" />
                  <h5>Passions</h5>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact -->
        </div>
    </div>
{% endblock %}
";
    }
}
