<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_22f436b747089ac4b2bb71f1cc99874e82c0e76be258f6b9f829e6bdebfb49f1 extends Twig_Template
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
        $__internal_a27fe0bffbae934d9f43328bbb9c9a86a5beed2ed71bf4acbedd95382a492559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27fe0bffbae934d9f43328bbb9c9a86a5beed2ed71bf4acbedd95382a492559->enter($__internal_a27fe0bffbae934d9f43328bbb9c9a86a5beed2ed71bf4acbedd95382a492559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_16276d213decd90c684b1615f955aba6eea23649c45eb15aa8d96d80c18be78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16276d213decd90c684b1615f955aba6eea23649c45eb15aa8d96d80c18be78c->enter($__internal_16276d213decd90c684b1615f955aba6eea23649c45eb15aa8d96d80c18be78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a27fe0bffbae934d9f43328bbb9c9a86a5beed2ed71bf4acbedd95382a492559->leave($__internal_a27fe0bffbae934d9f43328bbb9c9a86a5beed2ed71bf4acbedd95382a492559_prof);

        
        $__internal_16276d213decd90c684b1615f955aba6eea23649c45eb15aa8d96d80c18be78c->leave($__internal_16276d213decd90c684b1615f955aba6eea23649c45eb15aa8d96d80c18be78c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
