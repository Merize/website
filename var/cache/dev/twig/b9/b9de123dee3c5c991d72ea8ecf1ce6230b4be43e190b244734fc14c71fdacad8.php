<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9e9fa32c60d58aefb26a625fb21e086aa9ec6c2d7164509c61d5b0d29cac4b51 extends Twig_Template
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
        $__internal_201f021efb7f754b6bcb75077cc56d5aecd019bdf36612c08fe7b3fc5a401d48 = $this->env->getExtension("native_profiler");
        $__internal_201f021efb7f754b6bcb75077cc56d5aecd019bdf36612c08fe7b3fc5a401d48->enter($__internal_201f021efb7f754b6bcb75077cc56d5aecd019bdf36612c08fe7b3fc5a401d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_201f021efb7f754b6bcb75077cc56d5aecd019bdf36612c08fe7b3fc5a401d48->leave($__internal_201f021efb7f754b6bcb75077cc56d5aecd019bdf36612c08fe7b3fc5a401d48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
