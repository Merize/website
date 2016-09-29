<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a77509abdb9fbe36bc2ce31b78d04af1e5f79d3082825ca712a6502ce6b8158f extends Twig_Template
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
        $__internal_043bbbad5d7ceb3ee14f9551e6785ada929630b0eb77e51035d3625c559d9652 = $this->env->getExtension("native_profiler");
        $__internal_043bbbad5d7ceb3ee14f9551e6785ada929630b0eb77e51035d3625c559d9652->enter($__internal_043bbbad5d7ceb3ee14f9551e6785ada929630b0eb77e51035d3625c559d9652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_043bbbad5d7ceb3ee14f9551e6785ada929630b0eb77e51035d3625c559d9652->leave($__internal_043bbbad5d7ceb3ee14f9551e6785ada929630b0eb77e51035d3625c559d9652_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
