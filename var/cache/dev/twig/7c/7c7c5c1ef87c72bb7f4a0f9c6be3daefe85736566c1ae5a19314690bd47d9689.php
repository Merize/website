<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_65d116a42d21e8bb98041da00417cc31f430aab4137cca9097ac07d3006f315a extends Twig_Template
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
        $__internal_e810309b724804f05d39ef56670f63219b13e9bd67a60433b0e67b0fd29b855c = $this->env->getExtension("native_profiler");
        $__internal_e810309b724804f05d39ef56670f63219b13e9bd67a60433b0e67b0fd29b855c->enter($__internal_e810309b724804f05d39ef56670f63219b13e9bd67a60433b0e67b0fd29b855c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e810309b724804f05d39ef56670f63219b13e9bd67a60433b0e67b0fd29b855c->leave($__internal_e810309b724804f05d39ef56670f63219b13e9bd67a60433b0e67b0fd29b855c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
