<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9d41db9b7620f8190e020b6052a212b999e8ffae19f3b6828a466af5a7f1b4c1 extends Twig_Template
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
        $__internal_647da4776f59b12342f3e8dfcadc53dd392961b5f043a6009e06fade1dc70642 = $this->env->getExtension("native_profiler");
        $__internal_647da4776f59b12342f3e8dfcadc53dd392961b5f043a6009e06fade1dc70642->enter($__internal_647da4776f59b12342f3e8dfcadc53dd392961b5f043a6009e06fade1dc70642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_647da4776f59b12342f3e8dfcadc53dd392961b5f043a6009e06fade1dc70642->leave($__internal_647da4776f59b12342f3e8dfcadc53dd392961b5f043a6009e06fade1dc70642_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
