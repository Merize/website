<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_20f95b62d2ff7f1e37386c24238addbe81aa672607a2b64dd087eea022e9030f extends Twig_Template
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
        $__internal_27bf69fec10b7226d3c2f9500a06dda7d5caf3e64e3864d866e17b1020cc2058 = $this->env->getExtension("native_profiler");
        $__internal_27bf69fec10b7226d3c2f9500a06dda7d5caf3e64e3864d866e17b1020cc2058->enter($__internal_27bf69fec10b7226d3c2f9500a06dda7d5caf3e64e3864d866e17b1020cc2058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_27bf69fec10b7226d3c2f9500a06dda7d5caf3e64e3864d866e17b1020cc2058->leave($__internal_27bf69fec10b7226d3c2f9500a06dda7d5caf3e64e3864d866e17b1020cc2058_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
