<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0f9b2dc8b71fc1a8aa4313c05d07beed4049188ccd8686bf704b387eee5eeff0 extends Twig_Template
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
        $__internal_bb80c007bc2ed535611acb3b8a2a25746bcbe3e5d829b3d8606200e809fa5455 = $this->env->getExtension("native_profiler");
        $__internal_bb80c007bc2ed535611acb3b8a2a25746bcbe3e5d829b3d8606200e809fa5455->enter($__internal_bb80c007bc2ed535611acb3b8a2a25746bcbe3e5d829b3d8606200e809fa5455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bb80c007bc2ed535611acb3b8a2a25746bcbe3e5d829b3d8606200e809fa5455->leave($__internal_bb80c007bc2ed535611acb3b8a2a25746bcbe3e5d829b3d8606200e809fa5455_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
