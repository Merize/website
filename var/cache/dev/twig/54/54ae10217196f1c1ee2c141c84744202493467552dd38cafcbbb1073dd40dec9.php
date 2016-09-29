<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_feb6a5eb488b9fce4681dfd2eca8b212681e6caccb205ec65a17b04ddc620cdb extends Twig_Template
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
        $__internal_4100c906499409583544630b3d09f644f6021ed5a07b48256de22a287770df6b = $this->env->getExtension("native_profiler");
        $__internal_4100c906499409583544630b3d09f644f6021ed5a07b48256de22a287770df6b->enter($__internal_4100c906499409583544630b3d09f644f6021ed5a07b48256de22a287770df6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4100c906499409583544630b3d09f644f6021ed5a07b48256de22a287770df6b->leave($__internal_4100c906499409583544630b3d09f644f6021ed5a07b48256de22a287770df6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
