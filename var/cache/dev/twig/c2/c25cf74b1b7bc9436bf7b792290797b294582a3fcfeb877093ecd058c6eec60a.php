<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d8ec0fb06b15189c824aebb0c87715d31ebdafb63f42177812daf8fcb5af4cd1 extends Twig_Template
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
        $__internal_f0032af943718e242a5266a40c3d16b65ba6a8cd115448466aa11125c019bb22 = $this->env->getExtension("native_profiler");
        $__internal_f0032af943718e242a5266a40c3d16b65ba6a8cd115448466aa11125c019bb22->enter($__internal_f0032af943718e242a5266a40c3d16b65ba6a8cd115448466aa11125c019bb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f0032af943718e242a5266a40c3d16b65ba6a8cd115448466aa11125c019bb22->leave($__internal_f0032af943718e242a5266a40c3d16b65ba6a8cd115448466aa11125c019bb22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
