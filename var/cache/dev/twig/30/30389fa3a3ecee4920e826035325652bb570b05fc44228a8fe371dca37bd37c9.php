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
        $__internal_7ccf397a03e04e2260ad1ccb31a350985bc7db55a95c6a08ff97e33a9a297544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ccf397a03e04e2260ad1ccb31a350985bc7db55a95c6a08ff97e33a9a297544->enter($__internal_7ccf397a03e04e2260ad1ccb31a350985bc7db55a95c6a08ff97e33a9a297544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e4d51a4993e0c5a29df876a81615d11ca01ab0936c79cb8a22b55fa0e1e53e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d51a4993e0c5a29df876a81615d11ca01ab0936c79cb8a22b55fa0e1e53e0d->enter($__internal_e4d51a4993e0c5a29df876a81615d11ca01ab0936c79cb8a22b55fa0e1e53e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_7ccf397a03e04e2260ad1ccb31a350985bc7db55a95c6a08ff97e33a9a297544->leave($__internal_7ccf397a03e04e2260ad1ccb31a350985bc7db55a95c6a08ff97e33a9a297544_prof);

        
        $__internal_e4d51a4993e0c5a29df876a81615d11ca01ab0936c79cb8a22b55fa0e1e53e0d->leave($__internal_e4d51a4993e0c5a29df876a81615d11ca01ab0936c79cb8a22b55fa0e1e53e0d_prof);

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
