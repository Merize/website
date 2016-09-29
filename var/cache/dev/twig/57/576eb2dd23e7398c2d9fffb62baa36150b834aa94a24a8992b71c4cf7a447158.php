<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_affd6988304c3fc8f3d81f7bd34d821a40f6549ed6d52d066b28cbbf0da468e6 extends Twig_Template
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
        $__internal_7f136b873bc65a1c54da77f528c0f3246bfed4d3b12149d1a552dda5502b1816 = $this->env->getExtension("native_profiler");
        $__internal_7f136b873bc65a1c54da77f528c0f3246bfed4d3b12149d1a552dda5502b1816->enter($__internal_7f136b873bc65a1c54da77f528c0f3246bfed4d3b12149d1a552dda5502b1816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7f136b873bc65a1c54da77f528c0f3246bfed4d3b12149d1a552dda5502b1816->leave($__internal_7f136b873bc65a1c54da77f528c0f3246bfed4d3b12149d1a552dda5502b1816_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
