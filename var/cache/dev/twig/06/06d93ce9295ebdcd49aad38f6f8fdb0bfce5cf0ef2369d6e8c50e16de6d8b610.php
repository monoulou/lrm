<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9c5ea9cf690216684e971f9b03c7ae9627d135b42bde8bbf80ec10e014b4e155 extends Twig_Template
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
        $__internal_f44469678df91a117dd2c31e72d12bec1fa385d273d9e60e5649085eb87ad455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44469678df91a117dd2c31e72d12bec1fa385d273d9e60e5649085eb87ad455->enter($__internal_f44469678df91a117dd2c31e72d12bec1fa385d273d9e60e5649085eb87ad455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2973e2c2e16ad4fb404c6e233cb0097ff93a93ec1f8c952855d7c681617543b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2973e2c2e16ad4fb404c6e233cb0097ff93a93ec1f8c952855d7c681617543b3->enter($__internal_2973e2c2e16ad4fb404c6e233cb0097ff93a93ec1f8c952855d7c681617543b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f44469678df91a117dd2c31e72d12bec1fa385d273d9e60e5649085eb87ad455->leave($__internal_f44469678df91a117dd2c31e72d12bec1fa385d273d9e60e5649085eb87ad455_prof);

        
        $__internal_2973e2c2e16ad4fb404c6e233cb0097ff93a93ec1f8c952855d7c681617543b3->leave($__internal_2973e2c2e16ad4fb404c6e233cb0097ff93a93ec1f8c952855d7c681617543b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
