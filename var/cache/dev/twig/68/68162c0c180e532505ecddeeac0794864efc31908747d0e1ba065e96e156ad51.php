<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0a7a8832ea5858a10f68485b2b27ce98d6f9839c938f13294c7fb565600978ba extends Twig_Template
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
        $__internal_cd4f2b02831ffd0edddfb047ea0041d702e6d558802c43f6c6ab6acae6489416 = $this->env->getExtension("native_profiler");
        $__internal_cd4f2b02831ffd0edddfb047ea0041d702e6d558802c43f6c6ab6acae6489416->enter($__internal_cd4f2b02831ffd0edddfb047ea0041d702e6d558802c43f6c6ab6acae6489416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cd4f2b02831ffd0edddfb047ea0041d702e6d558802c43f6c6ab6acae6489416->leave($__internal_cd4f2b02831ffd0edddfb047ea0041d702e6d558802c43f6c6ab6acae6489416_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
