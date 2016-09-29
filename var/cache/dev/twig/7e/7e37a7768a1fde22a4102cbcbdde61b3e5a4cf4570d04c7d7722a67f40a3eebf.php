<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_97432f2d6585fdff9c3697ab26d378cc01e35ecc7bc04c066d90a715464d88df extends Twig_Template
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
        $__internal_2801b1550a6eb83a3515ae04fb35c315dfd2c22a42971f0064a63e5c84d60a1c = $this->env->getExtension("native_profiler");
        $__internal_2801b1550a6eb83a3515ae04fb35c315dfd2c22a42971f0064a63e5c84d60a1c->enter($__internal_2801b1550a6eb83a3515ae04fb35c315dfd2c22a42971f0064a63e5c84d60a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_2801b1550a6eb83a3515ae04fb35c315dfd2c22a42971f0064a63e5c84d60a1c->leave($__internal_2801b1550a6eb83a3515ae04fb35c315dfd2c22a42971f0064a63e5c84d60a1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
