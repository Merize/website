<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0e7ee1d8503209923506d7bd6261187053ee7fd1ae7111753ba4ad13a2451a11 extends Twig_Template
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
        $__internal_57ebe469e2cc2972699ad914872de3cb8528e33297fcc89e73c6bd86828d02a1 = $this->env->getExtension("native_profiler");
        $__internal_57ebe469e2cc2972699ad914872de3cb8528e33297fcc89e73c6bd86828d02a1->enter($__internal_57ebe469e2cc2972699ad914872de3cb8528e33297fcc89e73c6bd86828d02a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_57ebe469e2cc2972699ad914872de3cb8528e33297fcc89e73c6bd86828d02a1->leave($__internal_57ebe469e2cc2972699ad914872de3cb8528e33297fcc89e73c6bd86828d02a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
