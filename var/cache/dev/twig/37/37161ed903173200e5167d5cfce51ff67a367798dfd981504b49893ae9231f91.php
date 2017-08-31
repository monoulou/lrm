<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d318a6d3a25ad5611b7949c4a5c97d06d9e5ca197281cf1d3295c6661bfbf177 extends Twig_Template
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
        $__internal_4b44728d642fc79ce37786c147391e4c7ea8ccde45675ede32a5cb2b70300e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b44728d642fc79ce37786c147391e4c7ea8ccde45675ede32a5cb2b70300e4f->enter($__internal_4b44728d642fc79ce37786c147391e4c7ea8ccde45675ede32a5cb2b70300e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_cc88fdf0c77fe864e8121fa5b9d23621bddb0e238db68b7f2ecc7e70d446cc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc88fdf0c77fe864e8121fa5b9d23621bddb0e238db68b7f2ecc7e70d446cc78->enter($__internal_cc88fdf0c77fe864e8121fa5b9d23621bddb0e238db68b7f2ecc7e70d446cc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4b44728d642fc79ce37786c147391e4c7ea8ccde45675ede32a5cb2b70300e4f->leave($__internal_4b44728d642fc79ce37786c147391e4c7ea8ccde45675ede32a5cb2b70300e4f_prof);

        
        $__internal_cc88fdf0c77fe864e8121fa5b9d23621bddb0e238db68b7f2ecc7e70d446cc78->leave($__internal_cc88fdf0c77fe864e8121fa5b9d23621bddb0e238db68b7f2ecc7e70d446cc78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
