<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7dd5543a1227a78a2d832dba5f5c6ff4dad286725a5c3772ba2ed3873208bec8 extends Twig_Template
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
        $__internal_d11fdd715d3a1f9621c5cfdd7f31e942ed883883e8e9540283b57471fce871ab = $this->env->getExtension("native_profiler");
        $__internal_d11fdd715d3a1f9621c5cfdd7f31e942ed883883e8e9540283b57471fce871ab->enter($__internal_d11fdd715d3a1f9621c5cfdd7f31e942ed883883e8e9540283b57471fce871ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d11fdd715d3a1f9621c5cfdd7f31e942ed883883e8e9540283b57471fce871ab->leave($__internal_d11fdd715d3a1f9621c5cfdd7f31e942ed883883e8e9540283b57471fce871ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
