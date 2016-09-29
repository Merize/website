<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e4d5741688dadf68662a01f6d8d7f9a07f11422397993f2834788bd3f63e8536 extends Twig_Template
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
        $__internal_d971273b485db5dddf1a4b8ef725c932c1fa3cdd47c501b46152f6fc1219654e = $this->env->getExtension("native_profiler");
        $__internal_d971273b485db5dddf1a4b8ef725c932c1fa3cdd47c501b46152f6fc1219654e->enter($__internal_d971273b485db5dddf1a4b8ef725c932c1fa3cdd47c501b46152f6fc1219654e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d971273b485db5dddf1a4b8ef725c932c1fa3cdd47c501b46152f6fc1219654e->leave($__internal_d971273b485db5dddf1a4b8ef725c932c1fa3cdd47c501b46152f6fc1219654e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
