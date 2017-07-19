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
        $__internal_0f859e1ffc128c95b4f48bf121910d2b3ea9885bf156c32b3f0e5a0a7ba13423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f859e1ffc128c95b4f48bf121910d2b3ea9885bf156c32b3f0e5a0a7ba13423->enter($__internal_0f859e1ffc128c95b4f48bf121910d2b3ea9885bf156c32b3f0e5a0a7ba13423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_69d87a70cc53f20ad4ab77d7aa63d68ca57b6bf355a4e8f8dd463314b687a4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d87a70cc53f20ad4ab77d7aa63d68ca57b6bf355a4e8f8dd463314b687a4c5->enter($__internal_69d87a70cc53f20ad4ab77d7aa63d68ca57b6bf355a4e8f8dd463314b687a4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0f859e1ffc128c95b4f48bf121910d2b3ea9885bf156c32b3f0e5a0a7ba13423->leave($__internal_0f859e1ffc128c95b4f48bf121910d2b3ea9885bf156c32b3f0e5a0a7ba13423_prof);

        
        $__internal_69d87a70cc53f20ad4ab77d7aa63d68ca57b6bf355a4e8f8dd463314b687a4c5->leave($__internal_69d87a70cc53f20ad4ab77d7aa63d68ca57b6bf355a4e8f8dd463314b687a4c5_prof);

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
