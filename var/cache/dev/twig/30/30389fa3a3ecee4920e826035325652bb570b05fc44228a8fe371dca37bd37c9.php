<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b11a637c84d86af9e8c82e99a762b40eb20c277dd5077b9aba8ab737e6c3a854 extends Twig_Template
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
        $__internal_16904c6f166db5044884bc32303cf90fb77aa0ead36d417e86d588764c8b17dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16904c6f166db5044884bc32303cf90fb77aa0ead36d417e86d588764c8b17dd->enter($__internal_16904c6f166db5044884bc32303cf90fb77aa0ead36d417e86d588764c8b17dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_8938d5ec9a50f23f2823b57235631f81194d194d23603a7954ed73dfdb106984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8938d5ec9a50f23f2823b57235631f81194d194d23603a7954ed73dfdb106984->enter($__internal_8938d5ec9a50f23f2823b57235631f81194d194d23603a7954ed73dfdb106984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_16904c6f166db5044884bc32303cf90fb77aa0ead36d417e86d588764c8b17dd->leave($__internal_16904c6f166db5044884bc32303cf90fb77aa0ead36d417e86d588764c8b17dd_prof);

        
        $__internal_8938d5ec9a50f23f2823b57235631f81194d194d23603a7954ed73dfdb106984->leave($__internal_8938d5ec9a50f23f2823b57235631f81194d194d23603a7954ed73dfdb106984_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
