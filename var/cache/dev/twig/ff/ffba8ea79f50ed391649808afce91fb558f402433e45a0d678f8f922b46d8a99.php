<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_37b53387dffefea067fae027897cd8a879ce7cb3882f372990799de8f707e137 extends Twig_Template
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
        $__internal_f0f20d011867cd13a17c55ee79d0530ee58c5a3fb0580accafbaa66e47362d2c = $this->env->getExtension("native_profiler");
        $__internal_f0f20d011867cd13a17c55ee79d0530ee58c5a3fb0580accafbaa66e47362d2c->enter($__internal_f0f20d011867cd13a17c55ee79d0530ee58c5a3fb0580accafbaa66e47362d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f0f20d011867cd13a17c55ee79d0530ee58c5a3fb0580accafbaa66e47362d2c->leave($__internal_f0f20d011867cd13a17c55ee79d0530ee58c5a3fb0580accafbaa66e47362d2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
