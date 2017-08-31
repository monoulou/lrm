<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c71e011ab152bc77de56294d0edd2a2b4d8dcc8ac64ea7a2fd62363148c24ccc extends Twig_Template
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
        $__internal_2de12e9455813676840aa32d88849010fd21035e82a4e6a2fb61a363af554c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de12e9455813676840aa32d88849010fd21035e82a4e6a2fb61a363af554c41->enter($__internal_2de12e9455813676840aa32d88849010fd21035e82a4e6a2fb61a363af554c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_772b871190869fae16b43c3271cba06379618117a5294e0a44a639a5b0cb5fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772b871190869fae16b43c3271cba06379618117a5294e0a44a639a5b0cb5fd9->enter($__internal_772b871190869fae16b43c3271cba06379618117a5294e0a44a639a5b0cb5fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_2de12e9455813676840aa32d88849010fd21035e82a4e6a2fb61a363af554c41->leave($__internal_2de12e9455813676840aa32d88849010fd21035e82a4e6a2fb61a363af554c41_prof);

        
        $__internal_772b871190869fae16b43c3271cba06379618117a5294e0a44a639a5b0cb5fd9->leave($__internal_772b871190869fae16b43c3271cba06379618117a5294e0a44a639a5b0cb5fd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
