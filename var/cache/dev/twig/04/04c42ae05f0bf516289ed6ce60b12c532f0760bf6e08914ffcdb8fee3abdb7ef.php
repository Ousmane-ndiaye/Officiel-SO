<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ff2814c4535e25ff5cc9ea8737fa8de347b740af97908b15085b3dd34d2f999a extends Twig_Template
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
        $__internal_f60f8ee6f0eaafdb687e96bd6a9b4e99ca6215fd357aa8fe1c792beacf2a248f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60f8ee6f0eaafdb687e96bd6a9b4e99ca6215fd357aa8fe1c792beacf2a248f->enter($__internal_f60f8ee6f0eaafdb687e96bd6a9b4e99ca6215fd357aa8fe1c792beacf2a248f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e00856f7666eeedc783044051e74a1fe8a5d9008f0395a034808ab3fee838761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00856f7666eeedc783044051e74a1fe8a5d9008f0395a034808ab3fee838761->enter($__internal_e00856f7666eeedc783044051e74a1fe8a5d9008f0395a034808ab3fee838761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f60f8ee6f0eaafdb687e96bd6a9b4e99ca6215fd357aa8fe1c792beacf2a248f->leave($__internal_f60f8ee6f0eaafdb687e96bd6a9b4e99ca6215fd357aa8fe1c792beacf2a248f_prof);

        
        $__internal_e00856f7666eeedc783044051e74a1fe8a5d9008f0395a034808ab3fee838761->leave($__internal_e00856f7666eeedc783044051e74a1fe8a5d9008f0395a034808ab3fee838761_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
