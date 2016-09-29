<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fcbd6fedeed084730475c29353bfe85afb84f66616cf8716118ac8761a76f731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc5dfd4ddb261b2b9e00ce9de26f83c10393311af074430d1d8d8b852b244c59 = $this->env->getExtension("native_profiler");
        $__internal_cc5dfd4ddb261b2b9e00ce9de26f83c10393311af074430d1d8d8b852b244c59->enter($__internal_cc5dfd4ddb261b2b9e00ce9de26f83c10393311af074430d1d8d8b852b244c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cc5dfd4ddb261b2b9e00ce9de26f83c10393311af074430d1d8d8b852b244c59->leave($__internal_cc5dfd4ddb261b2b9e00ce9de26f83c10393311af074430d1d8d8b852b244c59_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfab270c3bd39d88c22dfcebcf8aa787682abd0a0aa26269f04e77ae08e539f2 = $this->env->getExtension("native_profiler");
        $__internal_cfab270c3bd39d88c22dfcebcf8aa787682abd0a0aa26269f04e77ae08e539f2->enter($__internal_cfab270c3bd39d88c22dfcebcf8aa787682abd0a0aa26269f04e77ae08e539f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cfab270c3bd39d88c22dfcebcf8aa787682abd0a0aa26269f04e77ae08e539f2->leave($__internal_cfab270c3bd39d88c22dfcebcf8aa787682abd0a0aa26269f04e77ae08e539f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
