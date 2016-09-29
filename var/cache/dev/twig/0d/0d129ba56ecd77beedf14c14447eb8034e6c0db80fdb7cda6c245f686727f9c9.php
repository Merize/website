<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_59cf2b60c566c942d3ee909dad09e71cdcd077cd28037bd5672df7ff47cf5e50 extends Twig_Template
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
        $__internal_decb80a8e6c7eb581d495402218b145e1f9a47ff95ad4eafa94bd36de8279ff5 = $this->env->getExtension("native_profiler");
        $__internal_decb80a8e6c7eb581d495402218b145e1f9a47ff95ad4eafa94bd36de8279ff5->enter($__internal_decb80a8e6c7eb581d495402218b145e1f9a47ff95ad4eafa94bd36de8279ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_decb80a8e6c7eb581d495402218b145e1f9a47ff95ad4eafa94bd36de8279ff5->leave($__internal_decb80a8e6c7eb581d495402218b145e1f9a47ff95ad4eafa94bd36de8279ff5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
