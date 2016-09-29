<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_475e7ad76d8c1e4dbc6445480c223250064adf6ba36aa744eb9796585dcdc5eb extends Twig_Template
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
        $__internal_20cafbe9979bf2c3090d56515dbf01bb8154c0ebda0d9546ab505061fff609ab = $this->env->getExtension("native_profiler");
        $__internal_20cafbe9979bf2c3090d56515dbf01bb8154c0ebda0d9546ab505061fff609ab->enter($__internal_20cafbe9979bf2c3090d56515dbf01bb8154c0ebda0d9546ab505061fff609ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_20cafbe9979bf2c3090d56515dbf01bb8154c0ebda0d9546ab505061fff609ab->leave($__internal_20cafbe9979bf2c3090d56515dbf01bb8154c0ebda0d9546ab505061fff609ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
