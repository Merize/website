<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8aef0236187b79657b5347213ff34eca4f5d816ce2f75a8b51cdd788583bbadc extends Twig_Template
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
        $__internal_d987595c0fb03b0ad7a7e8b1ed87b822b16a6c350d5d7100ce1b408745cf15a4 = $this->env->getExtension("native_profiler");
        $__internal_d987595c0fb03b0ad7a7e8b1ed87b822b16a6c350d5d7100ce1b408745cf15a4->enter($__internal_d987595c0fb03b0ad7a7e8b1ed87b822b16a6c350d5d7100ce1b408745cf15a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d987595c0fb03b0ad7a7e8b1ed87b822b16a6c350d5d7100ce1b408745cf15a4->leave($__internal_d987595c0fb03b0ad7a7e8b1ed87b822b16a6c350d5d7100ce1b408745cf15a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
