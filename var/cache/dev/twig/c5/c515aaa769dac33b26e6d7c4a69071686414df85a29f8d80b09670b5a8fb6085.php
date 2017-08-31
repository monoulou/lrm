<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f796b58ed774174638ad552117bf35a6356e1a3ea14e6eddb02cd82e0913bf08 extends Twig_Template
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
        $__internal_70a8d734a29998d37ef7c81be109359c27a6a571734dfc1cc2a93924c86f9315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a8d734a29998d37ef7c81be109359c27a6a571734dfc1cc2a93924c86f9315->enter($__internal_70a8d734a29998d37ef7c81be109359c27a6a571734dfc1cc2a93924c86f9315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_aa8f003cfbae39f52b06820c85efccb55eb28c8a35cb6e78620ef82f0d746d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8f003cfbae39f52b06820c85efccb55eb28c8a35cb6e78620ef82f0d746d45->enter($__internal_aa8f003cfbae39f52b06820c85efccb55eb28c8a35cb6e78620ef82f0d746d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_70a8d734a29998d37ef7c81be109359c27a6a571734dfc1cc2a93924c86f9315->leave($__internal_70a8d734a29998d37ef7c81be109359c27a6a571734dfc1cc2a93924c86f9315_prof);

        
        $__internal_aa8f003cfbae39f52b06820c85efccb55eb28c8a35cb6e78620ef82f0d746d45->leave($__internal_aa8f003cfbae39f52b06820c85efccb55eb28c8a35cb6e78620ef82f0d746d45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
