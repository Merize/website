<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c2b456e7f38a3e73a1296d413564b27f8fbe2d9a5ef111f4686710a490846ba2 extends Twig_Template
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
        $__internal_270b5733b21c154adbb5498ad729f504ad070c2be8d7083a3f1c90b6973926d9 = $this->env->getExtension("native_profiler");
        $__internal_270b5733b21c154adbb5498ad729f504ad070c2be8d7083a3f1c90b6973926d9->enter($__internal_270b5733b21c154adbb5498ad729f504ad070c2be8d7083a3f1c90b6973926d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_270b5733b21c154adbb5498ad729f504ad070c2be8d7083a3f1c90b6973926d9->leave($__internal_270b5733b21c154adbb5498ad729f504ad070c2be8d7083a3f1c90b6973926d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
