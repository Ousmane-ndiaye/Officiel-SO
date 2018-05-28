<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d610b6f7cbf271f814bc81037ab9817720676c898364090f3be1a24adc0fd1de extends Twig_Template
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
        $__internal_cf94522b8e810d236f2f5ee9f3ad59b5130bc42e7d5553479df8af6ab1c74c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf94522b8e810d236f2f5ee9f3ad59b5130bc42e7d5553479df8af6ab1c74c3a->enter($__internal_cf94522b8e810d236f2f5ee9f3ad59b5130bc42e7d5553479df8af6ab1c74c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_30c80315c6890d22ac9d94af5916035faa9187d9f930a8b82445bc0729495795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c80315c6890d22ac9d94af5916035faa9187d9f930a8b82445bc0729495795->enter($__internal_30c80315c6890d22ac9d94af5916035faa9187d9f930a8b82445bc0729495795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cf94522b8e810d236f2f5ee9f3ad59b5130bc42e7d5553479df8af6ab1c74c3a->leave($__internal_cf94522b8e810d236f2f5ee9f3ad59b5130bc42e7d5553479df8af6ab1c74c3a_prof);

        
        $__internal_30c80315c6890d22ac9d94af5916035faa9187d9f930a8b82445bc0729495795->leave($__internal_30c80315c6890d22ac9d94af5916035faa9187d9f930a8b82445bc0729495795_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
