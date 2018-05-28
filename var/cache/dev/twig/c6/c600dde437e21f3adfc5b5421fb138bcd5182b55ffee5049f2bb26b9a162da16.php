<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b9fe2bef1d1b026e3c0b7736f21e572ac9473006c19ab78375174fdd839a7745 extends Twig_Template
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
        $__internal_cfdc6f8d9d7a0c3b22d12652c1f1f80031dcbe9a1fddc1afe07d3cf8e860a9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfdc6f8d9d7a0c3b22d12652c1f1f80031dcbe9a1fddc1afe07d3cf8e860a9bd->enter($__internal_cfdc6f8d9d7a0c3b22d12652c1f1f80031dcbe9a1fddc1afe07d3cf8e860a9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2d762815ad0fa6f49b7d2428f7eeb90de397f5099d4d3c03c292da4b46883da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d762815ad0fa6f49b7d2428f7eeb90de397f5099d4d3c03c292da4b46883da9->enter($__internal_2d762815ad0fa6f49b7d2428f7eeb90de397f5099d4d3c03c292da4b46883da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_cfdc6f8d9d7a0c3b22d12652c1f1f80031dcbe9a1fddc1afe07d3cf8e860a9bd->leave($__internal_cfdc6f8d9d7a0c3b22d12652c1f1f80031dcbe9a1fddc1afe07d3cf8e860a9bd_prof);

        
        $__internal_2d762815ad0fa6f49b7d2428f7eeb90de397f5099d4d3c03c292da4b46883da9->leave($__internal_2d762815ad0fa6f49b7d2428f7eeb90de397f5099d4d3c03c292da4b46883da9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
