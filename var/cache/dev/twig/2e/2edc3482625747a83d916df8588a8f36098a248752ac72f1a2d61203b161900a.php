<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_73e7588f3f6dc469988f1d9e5c5647cd0dcec24f5471a54d05f5af2e13e79adc extends Twig_Template
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
        $__internal_a33244084f08ac2880ad167c3c29b7902ab069c18969bb7d181702b1e53dbcd7 = $this->env->getExtension("native_profiler");
        $__internal_a33244084f08ac2880ad167c3c29b7902ab069c18969bb7d181702b1e53dbcd7->enter($__internal_a33244084f08ac2880ad167c3c29b7902ab069c18969bb7d181702b1e53dbcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a33244084f08ac2880ad167c3c29b7902ab069c18969bb7d181702b1e53dbcd7->leave($__internal_a33244084f08ac2880ad167c3c29b7902ab069c18969bb7d181702b1e53dbcd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
