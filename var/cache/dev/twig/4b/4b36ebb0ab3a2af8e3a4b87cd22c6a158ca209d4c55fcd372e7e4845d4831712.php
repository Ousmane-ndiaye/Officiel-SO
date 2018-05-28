<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_4b4495adf788fa0bcd8e57bdb9b643236d08043b73c33afcc1427daf923c09e3 extends Twig_Template
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
        $__internal_89ed91c65dc676e9146707daa02eb672c0c405a0caaa5c9ea8cefacd9f2b556f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ed91c65dc676e9146707daa02eb672c0c405a0caaa5c9ea8cefacd9f2b556f->enter($__internal_89ed91c65dc676e9146707daa02eb672c0c405a0caaa5c9ea8cefacd9f2b556f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_aafcf7ec1b3efd8b82c3faf015d9d9d0f4432bada2e1d21bfa5a6c1d9b69a94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafcf7ec1b3efd8b82c3faf015d9d9d0f4432bada2e1d21bfa5a6c1d9b69a94c->enter($__internal_aafcf7ec1b3efd8b82c3faf015d9d9d0f4432bada2e1d21bfa5a6c1d9b69a94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_89ed91c65dc676e9146707daa02eb672c0c405a0caaa5c9ea8cefacd9f2b556f->leave($__internal_89ed91c65dc676e9146707daa02eb672c0c405a0caaa5c9ea8cefacd9f2b556f_prof);

        
        $__internal_aafcf7ec1b3efd8b82c3faf015d9d9d0f4432bada2e1d21bfa5a6c1d9b69a94c->leave($__internal_aafcf7ec1b3efd8b82c3faf015d9d9d0f4432bada2e1d21bfa5a6c1d9b69a94c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
