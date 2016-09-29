<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6314ffade4789fc3068f57836eb70e6b3059f77a2f4c3a31751b3270182530b9 extends Twig_Template
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
        $__internal_1bd05f7ff525c45372296755aa4366e74c0be4e596be8f7ba0ee1f7c98553088 = $this->env->getExtension("native_profiler");
        $__internal_1bd05f7ff525c45372296755aa4366e74c0be4e596be8f7ba0ee1f7c98553088->enter($__internal_1bd05f7ff525c45372296755aa4366e74c0be4e596be8f7ba0ee1f7c98553088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1bd05f7ff525c45372296755aa4366e74c0be4e596be8f7ba0ee1f7c98553088->leave($__internal_1bd05f7ff525c45372296755aa4366e74c0be4e596be8f7ba0ee1f7c98553088_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
