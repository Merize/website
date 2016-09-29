<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_df44b7e3133a1b41d3f3ba4dc96f9d4794819551349876e29dd3121c898766cd extends Twig_Template
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
        $__internal_b02a346e902342a7662436d08acbc4fb9da4f3c1ffb232a5b26e8e17940d2775 = $this->env->getExtension("native_profiler");
        $__internal_b02a346e902342a7662436d08acbc4fb9da4f3c1ffb232a5b26e8e17940d2775->enter($__internal_b02a346e902342a7662436d08acbc4fb9da4f3c1ffb232a5b26e8e17940d2775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b02a346e902342a7662436d08acbc4fb9da4f3c1ffb232a5b26e8e17940d2775->leave($__internal_b02a346e902342a7662436d08acbc4fb9da4f3c1ffb232a5b26e8e17940d2775_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
