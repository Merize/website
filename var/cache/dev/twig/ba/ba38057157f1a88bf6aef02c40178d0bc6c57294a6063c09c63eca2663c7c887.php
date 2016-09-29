<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ab9d1bdb0452da530bd0f284d404a85eece3527ad0d73a0ee0e429484d7a04a5 extends Twig_Template
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
        $__internal_56e6631ce3cf96565fad644bb16245b902ad8f30df338ae5bdb6be92e4044411 = $this->env->getExtension("native_profiler");
        $__internal_56e6631ce3cf96565fad644bb16245b902ad8f30df338ae5bdb6be92e4044411->enter($__internal_56e6631ce3cf96565fad644bb16245b902ad8f30df338ae5bdb6be92e4044411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_56e6631ce3cf96565fad644bb16245b902ad8f30df338ae5bdb6be92e4044411->leave($__internal_56e6631ce3cf96565fad644bb16245b902ad8f30df338ae5bdb6be92e4044411_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
