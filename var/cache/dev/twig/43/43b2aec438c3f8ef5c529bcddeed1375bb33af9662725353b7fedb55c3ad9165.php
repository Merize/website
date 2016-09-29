<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0650c5529be9bab7bda1104afcf339e18df370409ec16a901b23c02d6f025d4c extends Twig_Template
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
        $__internal_6f3a1d00d157d090b37f39eb61621549573557ddeea746ef0ba8799cd9bdb70c = $this->env->getExtension("native_profiler");
        $__internal_6f3a1d00d157d090b37f39eb61621549573557ddeea746ef0ba8799cd9bdb70c->enter($__internal_6f3a1d00d157d090b37f39eb61621549573557ddeea746ef0ba8799cd9bdb70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6f3a1d00d157d090b37f39eb61621549573557ddeea746ef0ba8799cd9bdb70c->leave($__internal_6f3a1d00d157d090b37f39eb61621549573557ddeea746ef0ba8799cd9bdb70c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
