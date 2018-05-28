<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_744c421e1e08f50138d3bbccba9c4a78f28b416ceaa0f4f9657b3d6a934e1471 extends Twig_Template
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
        $__internal_6e0020519a31eed222646a12df6ad9a64b91e7612b300211099996060c2b4956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0020519a31eed222646a12df6ad9a64b91e7612b300211099996060c2b4956->enter($__internal_6e0020519a31eed222646a12df6ad9a64b91e7612b300211099996060c2b4956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5ad77d8ec02998600aad4747160a3aa6c137c5d674b07edc95b7773086c61c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad77d8ec02998600aad4747160a3aa6c137c5d674b07edc95b7773086c61c3d->enter($__internal_5ad77d8ec02998600aad4747160a3aa6c137c5d674b07edc95b7773086c61c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6e0020519a31eed222646a12df6ad9a64b91e7612b300211099996060c2b4956->leave($__internal_6e0020519a31eed222646a12df6ad9a64b91e7612b300211099996060c2b4956_prof);

        
        $__internal_5ad77d8ec02998600aad4747160a3aa6c137c5d674b07edc95b7773086c61c3d->leave($__internal_5ad77d8ec02998600aad4747160a3aa6c137c5d674b07edc95b7773086c61c3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
