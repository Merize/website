<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_98bd97a8a44effb96d85b18f9385ea627aa456fb8269b62a0d8e11519324b1dc extends Twig_Template
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
        $__internal_a345e70a4915acbe5c36082d4de0dd1ae8334b3defef8dea1a53bc508231d81f = $this->env->getExtension("native_profiler");
        $__internal_a345e70a4915acbe5c36082d4de0dd1ae8334b3defef8dea1a53bc508231d81f->enter($__internal_a345e70a4915acbe5c36082d4de0dd1ae8334b3defef8dea1a53bc508231d81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a345e70a4915acbe5c36082d4de0dd1ae8334b3defef8dea1a53bc508231d81f->leave($__internal_a345e70a4915acbe5c36082d4de0dd1ae8334b3defef8dea1a53bc508231d81f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
