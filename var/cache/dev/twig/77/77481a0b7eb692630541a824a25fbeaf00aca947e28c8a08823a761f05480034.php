<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ba6a38d8ecc4da4b67fcb1a058588cbf9c05b70efc35622ecae3b009805423e4 extends Twig_Template
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
        $__internal_9cecc56816e2e9d34c85d3d38ac5b9085c1cf784c80a6da6d1e07b06e982a2a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cecc56816e2e9d34c85d3d38ac5b9085c1cf784c80a6da6d1e07b06e982a2a8->enter($__internal_9cecc56816e2e9d34c85d3d38ac5b9085c1cf784c80a6da6d1e07b06e982a2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_83e3cf0629759f3476eb6dbf304d2cdcac8206249f5188f8dbb5cf5d9baffc4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e3cf0629759f3476eb6dbf304d2cdcac8206249f5188f8dbb5cf5d9baffc4a->enter($__internal_83e3cf0629759f3476eb6dbf304d2cdcac8206249f5188f8dbb5cf5d9baffc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9cecc56816e2e9d34c85d3d38ac5b9085c1cf784c80a6da6d1e07b06e982a2a8->leave($__internal_9cecc56816e2e9d34c85d3d38ac5b9085c1cf784c80a6da6d1e07b06e982a2a8_prof);

        
        $__internal_83e3cf0629759f3476eb6dbf304d2cdcac8206249f5188f8dbb5cf5d9baffc4a->leave($__internal_83e3cf0629759f3476eb6dbf304d2cdcac8206249f5188f8dbb5cf5d9baffc4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
