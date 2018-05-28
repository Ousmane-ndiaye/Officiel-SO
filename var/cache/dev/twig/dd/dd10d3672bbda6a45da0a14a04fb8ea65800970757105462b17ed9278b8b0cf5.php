<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_2e05385a48fb93e57cefc7a5ee95c1483f2138a9660630f4a5004e72335f3939 extends Twig_Template
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
        $__internal_e964f47d2b79ef90dc4be1de674bee9f0fe4e6d3bc0dd96d17be2c8953eed60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e964f47d2b79ef90dc4be1de674bee9f0fe4e6d3bc0dd96d17be2c8953eed60a->enter($__internal_e964f47d2b79ef90dc4be1de674bee9f0fe4e6d3bc0dd96d17be2c8953eed60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_617ab796d284d088e2a1e9ab76f45a680baf2d54faccbdbea1d6e6756f23d913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617ab796d284d088e2a1e9ab76f45a680baf2d54faccbdbea1d6e6756f23d913->enter($__internal_617ab796d284d088e2a1e9ab76f45a680baf2d54faccbdbea1d6e6756f23d913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e964f47d2b79ef90dc4be1de674bee9f0fe4e6d3bc0dd96d17be2c8953eed60a->leave($__internal_e964f47d2b79ef90dc4be1de674bee9f0fe4e6d3bc0dd96d17be2c8953eed60a_prof);

        
        $__internal_617ab796d284d088e2a1e9ab76f45a680baf2d54faccbdbea1d6e6756f23d913->leave($__internal_617ab796d284d088e2a1e9ab76f45a680baf2d54faccbdbea1d6e6756f23d913_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
