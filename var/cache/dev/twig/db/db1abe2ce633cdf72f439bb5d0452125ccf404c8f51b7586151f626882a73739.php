<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_20a4e981f270ada8e7f739df863980dce8a74ffbebbeac888353ffe1347c7b71 extends Twig_Template
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
        $__internal_b0a7e429d9c5f5e11b8702786cfc25197034144e39d4bdc8ff2e3734d413bedd = $this->env->getExtension("native_profiler");
        $__internal_b0a7e429d9c5f5e11b8702786cfc25197034144e39d4bdc8ff2e3734d413bedd->enter($__internal_b0a7e429d9c5f5e11b8702786cfc25197034144e39d4bdc8ff2e3734d413bedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b0a7e429d9c5f5e11b8702786cfc25197034144e39d4bdc8ff2e3734d413bedd->leave($__internal_b0a7e429d9c5f5e11b8702786cfc25197034144e39d4bdc8ff2e3734d413bedd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
