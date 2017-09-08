<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4dff2620c6b742a85e52f1e957c893b4e482bf2dfe535d9928ef759d20a949fd extends Twig_Template
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
        $__internal_06dfdfa0fa5d56347a1d7400202a9de8e9f3f98b1cbad9eeb20b2ee45d8d6c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06dfdfa0fa5d56347a1d7400202a9de8e9f3f98b1cbad9eeb20b2ee45d8d6c0a->enter($__internal_06dfdfa0fa5d56347a1d7400202a9de8e9f3f98b1cbad9eeb20b2ee45d8d6c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_290e6816cf14aead0bd7ac34ce18fc541e0bfbcd48468cea9aa15576b78d9308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290e6816cf14aead0bd7ac34ce18fc541e0bfbcd48468cea9aa15576b78d9308->enter($__internal_290e6816cf14aead0bd7ac34ce18fc541e0bfbcd48468cea9aa15576b78d9308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_06dfdfa0fa5d56347a1d7400202a9de8e9f3f98b1cbad9eeb20b2ee45d8d6c0a->leave($__internal_06dfdfa0fa5d56347a1d7400202a9de8e9f3f98b1cbad9eeb20b2ee45d8d6c0a_prof);

        
        $__internal_290e6816cf14aead0bd7ac34ce18fc541e0bfbcd48468cea9aa15576b78d9308->leave($__internal_290e6816cf14aead0bd7ac34ce18fc541e0bfbcd48468cea9aa15576b78d9308_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
