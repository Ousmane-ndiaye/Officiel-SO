<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_964e8ad35f4cbf0d7dcd1b9d02a66645a5af639f97878953f462401a21938253 extends Twig_Template
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
        $__internal_9666aa957bae9a29a1ef696e1595a100ba1b2411d3c5ab364bdd8ae1e0780fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9666aa957bae9a29a1ef696e1595a100ba1b2411d3c5ab364bdd8ae1e0780fb2->enter($__internal_9666aa957bae9a29a1ef696e1595a100ba1b2411d3c5ab364bdd8ae1e0780fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2a3d332b83f50d9d31f2982a13a27f7a1e171c5e0f52a88b35b83b6b91052c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3d332b83f50d9d31f2982a13a27f7a1e171c5e0f52a88b35b83b6b91052c41->enter($__internal_2a3d332b83f50d9d31f2982a13a27f7a1e171c5e0f52a88b35b83b6b91052c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9666aa957bae9a29a1ef696e1595a100ba1b2411d3c5ab364bdd8ae1e0780fb2->leave($__internal_9666aa957bae9a29a1ef696e1595a100ba1b2411d3c5ab364bdd8ae1e0780fb2_prof);

        
        $__internal_2a3d332b83f50d9d31f2982a13a27f7a1e171c5e0f52a88b35b83b6b91052c41->leave($__internal_2a3d332b83f50d9d31f2982a13a27f7a1e171c5e0f52a88b35b83b6b91052c41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
