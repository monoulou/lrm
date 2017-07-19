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
        $__internal_2a2369addb8d63fde5b041f84fa093c20d0f1f78b6382d78d5b39df5cf006ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2369addb8d63fde5b041f84fa093c20d0f1f78b6382d78d5b39df5cf006ea6->enter($__internal_2a2369addb8d63fde5b041f84fa093c20d0f1f78b6382d78d5b39df5cf006ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a5476d8ef024c0a28732923903be8314eb3fe257ecae44d8bb420ab3077b9f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5476d8ef024c0a28732923903be8314eb3fe257ecae44d8bb420ab3077b9f76->enter($__internal_a5476d8ef024c0a28732923903be8314eb3fe257ecae44d8bb420ab3077b9f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2a2369addb8d63fde5b041f84fa093c20d0f1f78b6382d78d5b39df5cf006ea6->leave($__internal_2a2369addb8d63fde5b041f84fa093c20d0f1f78b6382d78d5b39df5cf006ea6_prof);

        
        $__internal_a5476d8ef024c0a28732923903be8314eb3fe257ecae44d8bb420ab3077b9f76->leave($__internal_a5476d8ef024c0a28732923903be8314eb3fe257ecae44d8bb420ab3077b9f76_prof);

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
