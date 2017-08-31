<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a5cd5f8019c44263da6f5d44126ed0a01cbd4e4e8303832491b4b9a5970cabea extends Twig_Template
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
        $__internal_8b399e0f9e371fc068420e260abb8da79b7317ed0ee002bf411ad0f3b8c46210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b399e0f9e371fc068420e260abb8da79b7317ed0ee002bf411ad0f3b8c46210->enter($__internal_8b399e0f9e371fc068420e260abb8da79b7317ed0ee002bf411ad0f3b8c46210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1817260da95cf53427c9ed631186f6faf139de23783d2169a0a3bd0e370da1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1817260da95cf53427c9ed631186f6faf139de23783d2169a0a3bd0e370da1d3->enter($__internal_1817260da95cf53427c9ed631186f6faf139de23783d2169a0a3bd0e370da1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8b399e0f9e371fc068420e260abb8da79b7317ed0ee002bf411ad0f3b8c46210->leave($__internal_8b399e0f9e371fc068420e260abb8da79b7317ed0ee002bf411ad0f3b8c46210_prof);

        
        $__internal_1817260da95cf53427c9ed631186f6faf139de23783d2169a0a3bd0e370da1d3->leave($__internal_1817260da95cf53427c9ed631186f6faf139de23783d2169a0a3bd0e370da1d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
