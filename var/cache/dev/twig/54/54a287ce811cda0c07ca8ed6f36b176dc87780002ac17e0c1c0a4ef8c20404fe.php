<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0180e8b59bf790b0d56bff334968dc23f69ff4c63271c4f023381bc756a5a3ef extends Twig_Template
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
        $__internal_fee73638eb0f93c58b7abfab8007440b5a482fe2a882faa05123baac064cb301 = $this->env->getExtension("native_profiler");
        $__internal_fee73638eb0f93c58b7abfab8007440b5a482fe2a882faa05123baac064cb301->enter($__internal_fee73638eb0f93c58b7abfab8007440b5a482fe2a882faa05123baac064cb301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_fee73638eb0f93c58b7abfab8007440b5a482fe2a882faa05123baac064cb301->leave($__internal_fee73638eb0f93c58b7abfab8007440b5a482fe2a882faa05123baac064cb301_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
