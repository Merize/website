<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f832e89fbd20e3977cb3afdfc2f552d3c2b835f6842ca8fa43555214d79bac77 extends Twig_Template
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
        $__internal_fa504610db150f5ac81c491e513e897f400051f804ab1198cab0bc28ffa9bedd = $this->env->getExtension("native_profiler");
        $__internal_fa504610db150f5ac81c491e513e897f400051f804ab1198cab0bc28ffa9bedd->enter($__internal_fa504610db150f5ac81c491e513e897f400051f804ab1198cab0bc28ffa9bedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fa504610db150f5ac81c491e513e897f400051f804ab1198cab0bc28ffa9bedd->leave($__internal_fa504610db150f5ac81c491e513e897f400051f804ab1198cab0bc28ffa9bedd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
