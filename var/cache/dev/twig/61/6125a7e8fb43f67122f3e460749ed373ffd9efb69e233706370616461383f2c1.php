<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_dbd4bf673787d8e63a2bcfe7bf1ebb1383571712fc4c8cf6a9b7f17c77df3027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_458deb77faa624f62bce1da3f29670686637102e8cb056ca12a40cae5ddf642b = $this->env->getExtension("native_profiler");
        $__internal_458deb77faa624f62bce1da3f29670686637102e8cb056ca12a40cae5ddf642b->enter($__internal_458deb77faa624f62bce1da3f29670686637102e8cb056ca12a40cae5ddf642b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_458deb77faa624f62bce1da3f29670686637102e8cb056ca12a40cae5ddf642b->leave($__internal_458deb77faa624f62bce1da3f29670686637102e8cb056ca12a40cae5ddf642b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e277d102152a3eb4d8c24826ed2b5f89c59af16d9cd75e5a187194e41bafd1f3 = $this->env->getExtension("native_profiler");
        $__internal_e277d102152a3eb4d8c24826ed2b5f89c59af16d9cd75e5a187194e41bafd1f3->enter($__internal_e277d102152a3eb4d8c24826ed2b5f89c59af16d9cd75e5a187194e41bafd1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e277d102152a3eb4d8c24826ed2b5f89c59af16d9cd75e5a187194e41bafd1f3->leave($__internal_e277d102152a3eb4d8c24826ed2b5f89c59af16d9cd75e5a187194e41bafd1f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d68b595011c63ac8222398f7f910463264e6b9628e4a26bc46097929b0164328 = $this->env->getExtension("native_profiler");
        $__internal_d68b595011c63ac8222398f7f910463264e6b9628e4a26bc46097929b0164328->enter($__internal_d68b595011c63ac8222398f7f910463264e6b9628e4a26bc46097929b0164328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d68b595011c63ac8222398f7f910463264e6b9628e4a26bc46097929b0164328->leave($__internal_d68b595011c63ac8222398f7f910463264e6b9628e4a26bc46097929b0164328_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0beeebb4480aab4f2204c819ea4cafe5f7f1c699d1ae45325ea026c28abffba = $this->env->getExtension("native_profiler");
        $__internal_f0beeebb4480aab4f2204c819ea4cafe5f7f1c699d1ae45325ea026c28abffba->enter($__internal_f0beeebb4480aab4f2204c819ea4cafe5f7f1c699d1ae45325ea026c28abffba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f0beeebb4480aab4f2204c819ea4cafe5f7f1c699d1ae45325ea026c28abffba->leave($__internal_f0beeebb4480aab4f2204c819ea4cafe5f7f1c699d1ae45325ea026c28abffba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
