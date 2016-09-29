<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_17ecd35e754c26909e67c5dcc97dee08d01ca814c70ce02c80eba7e8e360a680 extends Twig_Template
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
        $__internal_158dc2cf4a0ef8dd237183fad2b31899b694f5d9099db2ad58c695308893049c = $this->env->getExtension("native_profiler");
        $__internal_158dc2cf4a0ef8dd237183fad2b31899b694f5d9099db2ad58c695308893049c->enter($__internal_158dc2cf4a0ef8dd237183fad2b31899b694f5d9099db2ad58c695308893049c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_158dc2cf4a0ef8dd237183fad2b31899b694f5d9099db2ad58c695308893049c->leave($__internal_158dc2cf4a0ef8dd237183fad2b31899b694f5d9099db2ad58c695308893049c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
