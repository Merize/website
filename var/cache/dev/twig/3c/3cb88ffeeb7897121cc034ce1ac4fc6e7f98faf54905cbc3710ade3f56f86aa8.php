<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fe1a8b42f4a276362ebafa80b732be8f29c509db61280c02e0705a12d0686ddf extends Twig_Template
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
        $__internal_a2e51eaf88ebe9879bc94ff4e5844717181e2fae0b034614637bb6c76ca186bd = $this->env->getExtension("native_profiler");
        $__internal_a2e51eaf88ebe9879bc94ff4e5844717181e2fae0b034614637bb6c76ca186bd->enter($__internal_a2e51eaf88ebe9879bc94ff4e5844717181e2fae0b034614637bb6c76ca186bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a2e51eaf88ebe9879bc94ff4e5844717181e2fae0b034614637bb6c76ca186bd->leave($__internal_a2e51eaf88ebe9879bc94ff4e5844717181e2fae0b034614637bb6c76ca186bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
