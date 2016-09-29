<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9f41a350156a8233929a7f67a4c94372e6e76609867645c0026a7cac2384b2e1 extends Twig_Template
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
        $__internal_dfa55283c72641101bcd4371d475691ae9721efc96888c9ea82a9fd4bac429ef = $this->env->getExtension("native_profiler");
        $__internal_dfa55283c72641101bcd4371d475691ae9721efc96888c9ea82a9fd4bac429ef->enter($__internal_dfa55283c72641101bcd4371d475691ae9721efc96888c9ea82a9fd4bac429ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_dfa55283c72641101bcd4371d475691ae9721efc96888c9ea82a9fd4bac429ef->leave($__internal_dfa55283c72641101bcd4371d475691ae9721efc96888c9ea82a9fd4bac429ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
