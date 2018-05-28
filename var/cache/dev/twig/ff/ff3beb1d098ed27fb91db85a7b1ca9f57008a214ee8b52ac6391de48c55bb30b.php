<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_67417af1119ba75592b9b636a2f529736ea74d14ec1b5b1b7fe7bc4e8a3ecd85 extends Twig_Template
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
        $__internal_44bd1b56e2eaecef073f2638df655edad5ad822f2c555cd0eed9723445d6e4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bd1b56e2eaecef073f2638df655edad5ad822f2c555cd0eed9723445d6e4ef->enter($__internal_44bd1b56e2eaecef073f2638df655edad5ad822f2c555cd0eed9723445d6e4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_bebe7c1626f8869c468795b5cf38896edc7ff4c416ae3ae5de983316f4a96ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebe7c1626f8869c468795b5cf38896edc7ff4c416ae3ae5de983316f4a96ccf->enter($__internal_bebe7c1626f8869c468795b5cf38896edc7ff4c416ae3ae5de983316f4a96ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_44bd1b56e2eaecef073f2638df655edad5ad822f2c555cd0eed9723445d6e4ef->leave($__internal_44bd1b56e2eaecef073f2638df655edad5ad822f2c555cd0eed9723445d6e4ef_prof);

        
        $__internal_bebe7c1626f8869c468795b5cf38896edc7ff4c416ae3ae5de983316f4a96ccf->leave($__internal_bebe7c1626f8869c468795b5cf38896edc7ff4c416ae3ae5de983316f4a96ccf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
