<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_95a8670ab6a83cb74cdae5c767eaa3c6650aa8ab8c4a541c1d834aa917b86913 extends Twig_Template
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
        $__internal_87806b701b4bc26c06b63d53898bd9aa4526e78b84279c073f275f4321498a09 = $this->env->getExtension("native_profiler");
        $__internal_87806b701b4bc26c06b63d53898bd9aa4526e78b84279c073f275f4321498a09->enter($__internal_87806b701b4bc26c06b63d53898bd9aa4526e78b84279c073f275f4321498a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_87806b701b4bc26c06b63d53898bd9aa4526e78b84279c073f275f4321498a09->leave($__internal_87806b701b4bc26c06b63d53898bd9aa4526e78b84279c073f275f4321498a09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
