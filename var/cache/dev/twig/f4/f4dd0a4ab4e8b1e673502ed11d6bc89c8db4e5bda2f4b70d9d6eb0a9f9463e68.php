<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3ca376d1197d714d31aefcb300f1528965db9f4479ef0f2a8573150e069fb91f extends Twig_Template
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
        $__internal_dffcc980cacc724d428eeded7f7c21e6e186b08081a0427defa12113a7ad5323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dffcc980cacc724d428eeded7f7c21e6e186b08081a0427defa12113a7ad5323->enter($__internal_dffcc980cacc724d428eeded7f7c21e6e186b08081a0427defa12113a7ad5323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_20e9149c5b2700df51cddf5ebec085397af01c5999c30a3c0b8899a8a7fa5513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e9149c5b2700df51cddf5ebec085397af01c5999c30a3c0b8899a8a7fa5513->enter($__internal_20e9149c5b2700df51cddf5ebec085397af01c5999c30a3c0b8899a8a7fa5513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_dffcc980cacc724d428eeded7f7c21e6e186b08081a0427defa12113a7ad5323->leave($__internal_dffcc980cacc724d428eeded7f7c21e6e186b08081a0427defa12113a7ad5323_prof);

        
        $__internal_20e9149c5b2700df51cddf5ebec085397af01c5999c30a3c0b8899a8a7fa5513->leave($__internal_20e9149c5b2700df51cddf5ebec085397af01c5999c30a3c0b8899a8a7fa5513_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
