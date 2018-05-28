<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5a2fe667ffb853048e57f164ce6f24e226f1ff151c606fe9cb902b81e31f21e6 extends Twig_Template
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
        $__internal_01cc9a6fabe5d6cb38df0fe60241d17fbe828f04d3364131a30ab7ec23ee7a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cc9a6fabe5d6cb38df0fe60241d17fbe828f04d3364131a30ab7ec23ee7a8c->enter($__internal_01cc9a6fabe5d6cb38df0fe60241d17fbe828f04d3364131a30ab7ec23ee7a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5b62aa9c322ae55d00d72d28689c1b5ef38694729ca0b187f911ec7410d90267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b62aa9c322ae55d00d72d28689c1b5ef38694729ca0b187f911ec7410d90267->enter($__internal_5b62aa9c322ae55d00d72d28689c1b5ef38694729ca0b187f911ec7410d90267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_01cc9a6fabe5d6cb38df0fe60241d17fbe828f04d3364131a30ab7ec23ee7a8c->leave($__internal_01cc9a6fabe5d6cb38df0fe60241d17fbe828f04d3364131a30ab7ec23ee7a8c_prof);

        
        $__internal_5b62aa9c322ae55d00d72d28689c1b5ef38694729ca0b187f911ec7410d90267->leave($__internal_5b62aa9c322ae55d00d72d28689c1b5ef38694729ca0b187f911ec7410d90267_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
