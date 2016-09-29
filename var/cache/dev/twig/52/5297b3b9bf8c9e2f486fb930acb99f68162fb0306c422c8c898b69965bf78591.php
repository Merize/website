<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d01ce7c83fb7f81bd0cae7f0448b61847aa96684dab660e5fbe27a1ddc6657ff extends Twig_Template
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
        $__internal_8b91f8b948d4788b54f650204cfb6d2712e16bf1b88189d073de584e673f0f13 = $this->env->getExtension("native_profiler");
        $__internal_8b91f8b948d4788b54f650204cfb6d2712e16bf1b88189d073de584e673f0f13->enter($__internal_8b91f8b948d4788b54f650204cfb6d2712e16bf1b88189d073de584e673f0f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8b91f8b948d4788b54f650204cfb6d2712e16bf1b88189d073de584e673f0f13->leave($__internal_8b91f8b948d4788b54f650204cfb6d2712e16bf1b88189d073de584e673f0f13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
