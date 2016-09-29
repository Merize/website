<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_ffdaf822aa4fd1b1693a2c3ec9496ef1f0dbff87931bd530bc27eda122e4d676 extends Twig_Template
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
        $__internal_638712b7cdf53d715bbbc81ea7f1a8555657ebc677b6642b8a9035274f26f08b = $this->env->getExtension("native_profiler");
        $__internal_638712b7cdf53d715bbbc81ea7f1a8555657ebc677b6642b8a9035274f26f08b->enter($__internal_638712b7cdf53d715bbbc81ea7f1a8555657ebc677b6642b8a9035274f26f08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_638712b7cdf53d715bbbc81ea7f1a8555657ebc677b6642b8a9035274f26f08b->leave($__internal_638712b7cdf53d715bbbc81ea7f1a8555657ebc677b6642b8a9035274f26f08b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
