<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_377389cde67dcd5e7a738cd5e467a33ab1d49cce338cb534af9217fde5cbfc7d extends Twig_Template
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
        $__internal_4dd45dc9df7f22141fec585e625265aa94dbaeeea6e29b84af6b1c1dae08f926 = $this->env->getExtension("native_profiler");
        $__internal_4dd45dc9df7f22141fec585e625265aa94dbaeeea6e29b84af6b1c1dae08f926->enter($__internal_4dd45dc9df7f22141fec585e625265aa94dbaeeea6e29b84af6b1c1dae08f926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4dd45dc9df7f22141fec585e625265aa94dbaeeea6e29b84af6b1c1dae08f926->leave($__internal_4dd45dc9df7f22141fec585e625265aa94dbaeeea6e29b84af6b1c1dae08f926_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
    }
}
