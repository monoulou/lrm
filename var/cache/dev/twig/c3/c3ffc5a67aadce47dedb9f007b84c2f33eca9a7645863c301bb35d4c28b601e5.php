<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_628b13208b4f232c85d589c1d371909378dd32f3fd843dc5f7ad802a30513d38 extends Twig_Template
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
        $__internal_a4d0dd8c4686551adff8a0bb3446ab471b0bdd4792fc5dc64668f52f255e8c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d0dd8c4686551adff8a0bb3446ab471b0bdd4792fc5dc64668f52f255e8c4a->enter($__internal_a4d0dd8c4686551adff8a0bb3446ab471b0bdd4792fc5dc64668f52f255e8c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_714971f1dbc5ec734e5000cd18cd37080dcf15648832cc72e69940d3947d8d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714971f1dbc5ec734e5000cd18cd37080dcf15648832cc72e69940d3947d8d16->enter($__internal_714971f1dbc5ec734e5000cd18cd37080dcf15648832cc72e69940d3947d8d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a4d0dd8c4686551adff8a0bb3446ab471b0bdd4792fc5dc64668f52f255e8c4a->leave($__internal_a4d0dd8c4686551adff8a0bb3446ab471b0bdd4792fc5dc64668f52f255e8c4a_prof);

        
        $__internal_714971f1dbc5ec734e5000cd18cd37080dcf15648832cc72e69940d3947d8d16->leave($__internal_714971f1dbc5ec734e5000cd18cd37080dcf15648832cc72e69940d3947d8d16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}