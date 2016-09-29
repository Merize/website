<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_84f6a42f0b2da9c5f96000287f1cdfa1ce0414c1ba2628585ce29d836272e3b3 extends Twig_Template
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
        $__internal_bf9798064e0e074345fff9e9380976f5469dbe32b15339c5ef490a910939c515 = $this->env->getExtension("native_profiler");
        $__internal_bf9798064e0e074345fff9e9380976f5469dbe32b15339c5ef490a910939c515->enter($__internal_bf9798064e0e074345fff9e9380976f5469dbe32b15339c5ef490a910939c515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bf9798064e0e074345fff9e9380976f5469dbe32b15339c5ef490a910939c515->leave($__internal_bf9798064e0e074345fff9e9380976f5469dbe32b15339c5ef490a910939c515_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
