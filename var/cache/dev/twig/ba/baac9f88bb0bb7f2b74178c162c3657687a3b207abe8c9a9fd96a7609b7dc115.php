<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_43a972cc5c0ab537d4de2f3539525e32d55990d5123a622fa4e4f8bdf6852d08 extends Twig_Template
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
        $__internal_002f929217d179f0fdbeb60dd1b459ff8daed0f0c24a3a24720ab163b2b00cea = $this->env->getExtension("native_profiler");
        $__internal_002f929217d179f0fdbeb60dd1b459ff8daed0f0c24a3a24720ab163b2b00cea->enter($__internal_002f929217d179f0fdbeb60dd1b459ff8daed0f0c24a3a24720ab163b2b00cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_002f929217d179f0fdbeb60dd1b459ff8daed0f0c24a3a24720ab163b2b00cea->leave($__internal_002f929217d179f0fdbeb60dd1b459ff8daed0f0c24a3a24720ab163b2b00cea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
