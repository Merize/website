<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4a25810e87e764ac62129407d01c9dc61a4303f295feaed89a5f29bdfee02df0 extends Twig_Template
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
        $__internal_9d053198851ea993183c1dd3f2f0eb0b0446760685c31027e08bc471d791888f = $this->env->getExtension("native_profiler");
        $__internal_9d053198851ea993183c1dd3f2f0eb0b0446760685c31027e08bc471d791888f->enter($__internal_9d053198851ea993183c1dd3f2f0eb0b0446760685c31027e08bc471d791888f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9d053198851ea993183c1dd3f2f0eb0b0446760685c31027e08bc471d791888f->leave($__internal_9d053198851ea993183c1dd3f2f0eb0b0446760685c31027e08bc471d791888f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
