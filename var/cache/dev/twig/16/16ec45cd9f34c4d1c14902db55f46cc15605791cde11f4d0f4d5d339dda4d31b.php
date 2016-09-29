<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a509dada41f621b7347f7812e297602b8112a09b44c97c8f6a63161fe85a0ab7 extends Twig_Template
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
        $__internal_6df7e665a8706abdf18ad64b5bd0a99d110386283f11e6005c9cf0a7e20afe8f = $this->env->getExtension("native_profiler");
        $__internal_6df7e665a8706abdf18ad64b5bd0a99d110386283f11e6005c9cf0a7e20afe8f->enter($__internal_6df7e665a8706abdf18ad64b5bd0a99d110386283f11e6005c9cf0a7e20afe8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6df7e665a8706abdf18ad64b5bd0a99d110386283f11e6005c9cf0a7e20afe8f->leave($__internal_6df7e665a8706abdf18ad64b5bd0a99d110386283f11e6005c9cf0a7e20afe8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
