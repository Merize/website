<?php

/* :default:index.html.twig */
class __TwigTemplate_cbbfffa5fa248160aaacbe1a590ed96d58604ad095e999f327db85d46910e147 extends Twig_Template
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
        $__internal_2a6bcbceb9a43df7948c0efd43fa7db37648b65a27cb5a4fd67be67bfde30133 = $this->env->getExtension("native_profiler");
        $__internal_2a6bcbceb9a43df7948c0efd43fa7db37648b65a27cb5a4fd67be67bfde30133->enter($__internal_2a6bcbceb9a43df7948c0efd43fa7db37648b65a27cb5a4fd67be67bfde30133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a6bcbceb9a43df7948c0efd43fa7db37648b65a27cb5a4fd67be67bfde30133->leave($__internal_2a6bcbceb9a43df7948c0efd43fa7db37648b65a27cb5a4fd67be67bfde30133_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3a05e64109b5076b129983d1f11b446e43402bd268a528b638218f8187b6331 = $this->env->getExtension("native_profiler");
        $__internal_d3a05e64109b5076b129983d1f11b446e43402bd268a528b638218f8187b6331->enter($__internal_d3a05e64109b5076b129983d1f11b446e43402bd268a528b638218f8187b6331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d3a05e64109b5076b129983d1f11b446e43402bd268a528b638218f8187b6331->leave($__internal_d3a05e64109b5076b129983d1f11b446e43402bd268a528b638218f8187b6331_prof);

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
        return array (  88 => 41,  78 => 34,  68 => 27,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
