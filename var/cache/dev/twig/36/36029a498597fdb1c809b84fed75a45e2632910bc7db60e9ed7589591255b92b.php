<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_71a6bd7655009bcb25d6771c0c0067e6391a2d8c01b0331fde73fc0afccb723a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d94fe62c6cfd0d159884f402eb60c9b7fb40a972fc09ca36ea486bdb8c1ae012 = $this->env->getExtension("native_profiler");
        $__internal_d94fe62c6cfd0d159884f402eb60c9b7fb40a972fc09ca36ea486bdb8c1ae012->enter($__internal_d94fe62c6cfd0d159884f402eb60c9b7fb40a972fc09ca36ea486bdb8c1ae012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d94fe62c6cfd0d159884f402eb60c9b7fb40a972fc09ca36ea486bdb8c1ae012->leave($__internal_d94fe62c6cfd0d159884f402eb60c9b7fb40a972fc09ca36ea486bdb8c1ae012_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
