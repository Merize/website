<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6c461392f45834abaa32bf660d990160bab4ecdb2c0c37d8fa01cff834f7dde7 extends Twig_Template
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
        $__internal_e185305de641b2cfb78bb1076aaef8d0f769e8fa24c5c0aafff07420eceddbb4 = $this->env->getExtension("native_profiler");
        $__internal_e185305de641b2cfb78bb1076aaef8d0f769e8fa24c5c0aafff07420eceddbb4->enter($__internal_e185305de641b2cfb78bb1076aaef8d0f769e8fa24c5c0aafff07420eceddbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e185305de641b2cfb78bb1076aaef8d0f769e8fa24c5c0aafff07420eceddbb4->leave($__internal_e185305de641b2cfb78bb1076aaef8d0f769e8fa24c5c0aafff07420eceddbb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
