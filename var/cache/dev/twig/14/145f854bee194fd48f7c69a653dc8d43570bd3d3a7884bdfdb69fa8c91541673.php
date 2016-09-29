<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_643f08d0c5c8a478976d0359f7069dd4e67eaae92fb1e7b24cb11976cbb8bff0 extends Twig_Template
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
        $__internal_965bd343ea63efa6a8befca9ceb271ab2f29853344716d61a0dc8992dbcaedc6 = $this->env->getExtension("native_profiler");
        $__internal_965bd343ea63efa6a8befca9ceb271ab2f29853344716d61a0dc8992dbcaedc6->enter($__internal_965bd343ea63efa6a8befca9ceb271ab2f29853344716d61a0dc8992dbcaedc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_965bd343ea63efa6a8befca9ceb271ab2f29853344716d61a0dc8992dbcaedc6->leave($__internal_965bd343ea63efa6a8befca9ceb271ab2f29853344716d61a0dc8992dbcaedc6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
