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
        $__internal_a0fb73eb9f4d35e951a0e7caeb53f080ce12ab0433741da534f4b4cb85695a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0fb73eb9f4d35e951a0e7caeb53f080ce12ab0433741da534f4b4cb85695a87->enter($__internal_a0fb73eb9f4d35e951a0e7caeb53f080ce12ab0433741da534f4b4cb85695a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_26e5b110f303231afd3030543698c6367897d4b2b6f2163f6ca6143e0c4534d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e5b110f303231afd3030543698c6367897d4b2b6f2163f6ca6143e0c4534d3->enter($__internal_26e5b110f303231afd3030543698c6367897d4b2b6f2163f6ca6143e0c4534d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a0fb73eb9f4d35e951a0e7caeb53f080ce12ab0433741da534f4b4cb85695a87->leave($__internal_a0fb73eb9f4d35e951a0e7caeb53f080ce12ab0433741da534f4b4cb85695a87_prof);

        
        $__internal_26e5b110f303231afd3030543698c6367897d4b2b6f2163f6ca6143e0c4534d3->leave($__internal_26e5b110f303231afd3030543698c6367897d4b2b6f2163f6ca6143e0c4534d3_prof);

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
", "@Framework/Form/form_rows.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
