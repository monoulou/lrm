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
        $__internal_89b69893ad3b7a55866ec11a40b95702df38996e7c5677530ff4e58d95ed260f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b69893ad3b7a55866ec11a40b95702df38996e7c5677530ff4e58d95ed260f->enter($__internal_89b69893ad3b7a55866ec11a40b95702df38996e7c5677530ff4e58d95ed260f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_619b9aef23f8f282ee5c24f10e67e4b6d76d69462ed7d95cb60384e9fc493271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_619b9aef23f8f282ee5c24f10e67e4b6d76d69462ed7d95cb60384e9fc493271->enter($__internal_619b9aef23f8f282ee5c24f10e67e4b6d76d69462ed7d95cb60384e9fc493271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_89b69893ad3b7a55866ec11a40b95702df38996e7c5677530ff4e58d95ed260f->leave($__internal_89b69893ad3b7a55866ec11a40b95702df38996e7c5677530ff4e58d95ed260f_prof);

        
        $__internal_619b9aef23f8f282ee5c24f10e67e4b6d76d69462ed7d95cb60384e9fc493271->leave($__internal_619b9aef23f8f282ee5c24f10e67e4b6d76d69462ed7d95cb60384e9fc493271_prof);

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
