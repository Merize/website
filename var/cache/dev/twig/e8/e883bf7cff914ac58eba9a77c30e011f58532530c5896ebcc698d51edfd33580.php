<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8caee96a12c52af1b47e436a2de7fff31536410720e9966678b019d5e3af5237 extends Twig_Template
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
        $__internal_36eb324589bebe19248612c42d2e1bca5049de1c89ff0df557b2c2624553d2d6 = $this->env->getExtension("native_profiler");
        $__internal_36eb324589bebe19248612c42d2e1bca5049de1c89ff0df557b2c2624553d2d6->enter($__internal_36eb324589bebe19248612c42d2e1bca5049de1c89ff0df557b2c2624553d2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_36eb324589bebe19248612c42d2e1bca5049de1c89ff0df557b2c2624553d2d6->leave($__internal_36eb324589bebe19248612c42d2e1bca5049de1c89ff0df557b2c2624553d2d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
