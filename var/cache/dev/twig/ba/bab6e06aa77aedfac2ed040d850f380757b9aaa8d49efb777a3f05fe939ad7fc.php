<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cb3e17a76fe9b357e11c2fbd911c92bedb4a46a547e69f1fbea04b4d09129a32 extends Twig_Template
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
        $__internal_bd37274b30215af66e7a2b0c8913fe9f48c3b34f6afcb886ccf5d2c2703de316 = $this->env->getExtension("native_profiler");
        $__internal_bd37274b30215af66e7a2b0c8913fe9f48c3b34f6afcb886ccf5d2c2703de316->enter($__internal_bd37274b30215af66e7a2b0c8913fe9f48c3b34f6afcb886ccf5d2c2703de316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bd37274b30215af66e7a2b0c8913fe9f48c3b34f6afcb886ccf5d2c2703de316->leave($__internal_bd37274b30215af66e7a2b0c8913fe9f48c3b34f6afcb886ccf5d2c2703de316_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
