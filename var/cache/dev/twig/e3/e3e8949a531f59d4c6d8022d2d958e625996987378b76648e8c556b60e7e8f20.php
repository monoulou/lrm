<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e67b04b27d85034815adc5dcbb3d99e0ce258660c19d13aaf99031addd50bd1b extends Twig_Template
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
        $__internal_06d09882647446941cd4d1c207ecfb9857fb32ea32e935ba93b5c47ff19f209a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d09882647446941cd4d1c207ecfb9857fb32ea32e935ba93b5c47ff19f209a->enter($__internal_06d09882647446941cd4d1c207ecfb9857fb32ea32e935ba93b5c47ff19f209a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f3b296f2f48745733b7d5dc89041322526c64e80fcb76efa52b4176db2aec38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b296f2f48745733b7d5dc89041322526c64e80fcb76efa52b4176db2aec38a->enter($__internal_f3b296f2f48745733b7d5dc89041322526c64e80fcb76efa52b4176db2aec38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_06d09882647446941cd4d1c207ecfb9857fb32ea32e935ba93b5c47ff19f209a->leave($__internal_06d09882647446941cd4d1c207ecfb9857fb32ea32e935ba93b5c47ff19f209a_prof);

        
        $__internal_f3b296f2f48745733b7d5dc89041322526c64e80fcb76efa52b4176db2aec38a->leave($__internal_f3b296f2f48745733b7d5dc89041322526c64e80fcb76efa52b4176db2aec38a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
