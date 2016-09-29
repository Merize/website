<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_43d17d748feaadf5fdf98a0acea9ed949d4e73037ae7900ac60f191cc9168c9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e84c5a35a2def1c73922ee2f61e9744dd613fe640194eb0add916a1246b7bb09 = $this->env->getExtension("native_profiler");
        $__internal_e84c5a35a2def1c73922ee2f61e9744dd613fe640194eb0add916a1246b7bb09->enter($__internal_e84c5a35a2def1c73922ee2f61e9744dd613fe640194eb0add916a1246b7bb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e84c5a35a2def1c73922ee2f61e9744dd613fe640194eb0add916a1246b7bb09->leave($__internal_e84c5a35a2def1c73922ee2f61e9744dd613fe640194eb0add916a1246b7bb09_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_facd8ca370e1694c1a9cbaf53aecc481aeadf9ea6b9de79f58829c65b1942805 = $this->env->getExtension("native_profiler");
        $__internal_facd8ca370e1694c1a9cbaf53aecc481aeadf9ea6b9de79f58829c65b1942805->enter($__internal_facd8ca370e1694c1a9cbaf53aecc481aeadf9ea6b9de79f58829c65b1942805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_facd8ca370e1694c1a9cbaf53aecc481aeadf9ea6b9de79f58829c65b1942805->leave($__internal_facd8ca370e1694c1a9cbaf53aecc481aeadf9ea6b9de79f58829c65b1942805_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a847770ac71b122a57d3e1fbbfac2b8990907a872bc6b1960101a09a09c4e87b = $this->env->getExtension("native_profiler");
        $__internal_a847770ac71b122a57d3e1fbbfac2b8990907a872bc6b1960101a09a09c4e87b->enter($__internal_a847770ac71b122a57d3e1fbbfac2b8990907a872bc6b1960101a09a09c4e87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a847770ac71b122a57d3e1fbbfac2b8990907a872bc6b1960101a09a09c4e87b->leave($__internal_a847770ac71b122a57d3e1fbbfac2b8990907a872bc6b1960101a09a09c4e87b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3b3f57fe535256d22da767e0c17699be5e4238d4d7f9e9c793f967fe529a8c4 = $this->env->getExtension("native_profiler");
        $__internal_f3b3f57fe535256d22da767e0c17699be5e4238d4d7f9e9c793f967fe529a8c4->enter($__internal_f3b3f57fe535256d22da767e0c17699be5e4238d4d7f9e9c793f967fe529a8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f3b3f57fe535256d22da767e0c17699be5e4238d4d7f9e9c793f967fe529a8c4->leave($__internal_f3b3f57fe535256d22da767e0c17699be5e4238d4d7f9e9c793f967fe529a8c4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
