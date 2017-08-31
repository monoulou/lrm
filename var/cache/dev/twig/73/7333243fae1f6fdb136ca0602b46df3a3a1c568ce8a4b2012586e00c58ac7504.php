<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_31866a3d0dfeb4588816ef254297c4ec55b5292fe66e01cf32e2809c5a05e3f3 extends Twig_Template
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
        $__internal_23710c749ea17feb4c3532ff798f657fd456adccdd78a9112ae4bc3bc53c670d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23710c749ea17feb4c3532ff798f657fd456adccdd78a9112ae4bc3bc53c670d->enter($__internal_23710c749ea17feb4c3532ff798f657fd456adccdd78a9112ae4bc3bc53c670d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e531fcfbc573f60f2f27716f58d71792046295443164090de6d4389cfed4363a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e531fcfbc573f60f2f27716f58d71792046295443164090de6d4389cfed4363a->enter($__internal_e531fcfbc573f60f2f27716f58d71792046295443164090de6d4389cfed4363a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_23710c749ea17feb4c3532ff798f657fd456adccdd78a9112ae4bc3bc53c670d->leave($__internal_23710c749ea17feb4c3532ff798f657fd456adccdd78a9112ae4bc3bc53c670d_prof);

        
        $__internal_e531fcfbc573f60f2f27716f58d71792046295443164090de6d4389cfed4363a->leave($__internal_e531fcfbc573f60f2f27716f58d71792046295443164090de6d4389cfed4363a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
