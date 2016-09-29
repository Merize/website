<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_80ffa38c3a6173e29996bee5f20423d583213a7af88a50cdc8fd88dede1ef1d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d20ce834a5a430fa3acc8d2a8978f2dd72425e69f6d97e26a7ade6ab88c79af = $this->env->getExtension("native_profiler");
        $__internal_2d20ce834a5a430fa3acc8d2a8978f2dd72425e69f6d97e26a7ade6ab88c79af->enter($__internal_2d20ce834a5a430fa3acc8d2a8978f2dd72425e69f6d97e26a7ade6ab88c79af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d20ce834a5a430fa3acc8d2a8978f2dd72425e69f6d97e26a7ade6ab88c79af->leave($__internal_2d20ce834a5a430fa3acc8d2a8978f2dd72425e69f6d97e26a7ade6ab88c79af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a901cb26bc0811b5f389c7e1e88496190f0a044b63cea23a6471ba0b0e828d0 = $this->env->getExtension("native_profiler");
        $__internal_7a901cb26bc0811b5f389c7e1e88496190f0a044b63cea23a6471ba0b0e828d0->enter($__internal_7a901cb26bc0811b5f389c7e1e88496190f0a044b63cea23a6471ba0b0e828d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7a901cb26bc0811b5f389c7e1e88496190f0a044b63cea23a6471ba0b0e828d0->leave($__internal_7a901cb26bc0811b5f389c7e1e88496190f0a044b63cea23a6471ba0b0e828d0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5dfbbe29b4980f849c4a21d46c15447a61c71f0d466777c6e0187904c748608 = $this->env->getExtension("native_profiler");
        $__internal_b5dfbbe29b4980f849c4a21d46c15447a61c71f0d466777c6e0187904c748608->enter($__internal_b5dfbbe29b4980f849c4a21d46c15447a61c71f0d466777c6e0187904c748608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b5dfbbe29b4980f849c4a21d46c15447a61c71f0d466777c6e0187904c748608->leave($__internal_b5dfbbe29b4980f849c4a21d46c15447a61c71f0d466777c6e0187904c748608_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
