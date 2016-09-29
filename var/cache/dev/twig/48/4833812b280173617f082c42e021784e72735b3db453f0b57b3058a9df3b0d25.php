<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2531e57ae30160947f3ef3dd662400127d35c5ae51e68356c055f09bfe812773 extends Twig_Template
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
        $__internal_92546d9cd0cdffaf5266a8dba959e9d8c71be2c577a8ecec800b5f805675b411 = $this->env->getExtension("native_profiler");
        $__internal_92546d9cd0cdffaf5266a8dba959e9d8c71be2c577a8ecec800b5f805675b411->enter($__internal_92546d9cd0cdffaf5266a8dba959e9d8c71be2c577a8ecec800b5f805675b411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_92546d9cd0cdffaf5266a8dba959e9d8c71be2c577a8ecec800b5f805675b411->leave($__internal_92546d9cd0cdffaf5266a8dba959e9d8c71be2c577a8ecec800b5f805675b411_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
