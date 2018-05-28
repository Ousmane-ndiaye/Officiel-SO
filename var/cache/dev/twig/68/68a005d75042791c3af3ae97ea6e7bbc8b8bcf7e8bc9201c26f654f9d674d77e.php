<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_54d037e5162dfa915310efd058dc1aa6cbcf6bbba891aa6883f83f55c86cb241 extends Twig_Template
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
        $__internal_22c7d02f6090c4ee317098d3a508f6b3445e427581b15d2853e16e3b7b41d29c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c7d02f6090c4ee317098d3a508f6b3445e427581b15d2853e16e3b7b41d29c->enter($__internal_22c7d02f6090c4ee317098d3a508f6b3445e427581b15d2853e16e3b7b41d29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_af0a96e3435bcdc6ac794de013d22de2b88f9930732496ffcc64141372d4ab57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0a96e3435bcdc6ac794de013d22de2b88f9930732496ffcc64141372d4ab57->enter($__internal_af0a96e3435bcdc6ac794de013d22de2b88f9930732496ffcc64141372d4ab57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_22c7d02f6090c4ee317098d3a508f6b3445e427581b15d2853e16e3b7b41d29c->leave($__internal_22c7d02f6090c4ee317098d3a508f6b3445e427581b15d2853e16e3b7b41d29c_prof);

        
        $__internal_af0a96e3435bcdc6ac794de013d22de2b88f9930732496ffcc64141372d4ab57->leave($__internal_af0a96e3435bcdc6ac794de013d22de2b88f9930732496ffcc64141372d4ab57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
