<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ac3c8afc7485c0d9cc2d552518f6bb65ab2eff845447274c1a0b9a1dc733a9dc extends Twig_Template
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
        $__internal_d02e9173e9e491bd63116f768b89dcc3a01dd81db67a1c12f234ecdca9ab0830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02e9173e9e491bd63116f768b89dcc3a01dd81db67a1c12f234ecdca9ab0830->enter($__internal_d02e9173e9e491bd63116f768b89dcc3a01dd81db67a1c12f234ecdca9ab0830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2f4c3cbea8f313afcdf4091c9cf15a995887523fe492e5335d05804da3d12403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4c3cbea8f313afcdf4091c9cf15a995887523fe492e5335d05804da3d12403->enter($__internal_2f4c3cbea8f313afcdf4091c9cf15a995887523fe492e5335d05804da3d12403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d02e9173e9e491bd63116f768b89dcc3a01dd81db67a1c12f234ecdca9ab0830->leave($__internal_d02e9173e9e491bd63116f768b89dcc3a01dd81db67a1c12f234ecdca9ab0830_prof);

        
        $__internal_2f4c3cbea8f313afcdf4091c9cf15a995887523fe492e5335d05804da3d12403->leave($__internal_2f4c3cbea8f313afcdf4091c9cf15a995887523fe492e5335d05804da3d12403_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
