<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_c102db8c743d4fc015edd65d98e21791270181f48a619bc5c0835e8921e27200 extends Twig_Template
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
        $__internal_25bc7f701976d9d5761a6bf4a924bd8289599914f02d4decd9b85c48b82d6e58 = $this->env->getExtension("native_profiler");
        $__internal_25bc7f701976d9d5761a6bf4a924bd8289599914f02d4decd9b85c48b82d6e58->enter($__internal_25bc7f701976d9d5761a6bf4a924bd8289599914f02d4decd9b85c48b82d6e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_25bc7f701976d9d5761a6bf4a924bd8289599914f02d4decd9b85c48b82d6e58->leave($__internal_25bc7f701976d9d5761a6bf4a924bd8289599914f02d4decd9b85c48b82d6e58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
