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
        $__internal_1e638935144264de74c1fb7b080c1ada74cc3bcd7b08a3aeba763f92444a28d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e638935144264de74c1fb7b080c1ada74cc3bcd7b08a3aeba763f92444a28d8->enter($__internal_1e638935144264de74c1fb7b080c1ada74cc3bcd7b08a3aeba763f92444a28d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_dc7387dc7cf7dbcedf1c381caed6ccb5492d838f64a213410a9a6e92e055b3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7387dc7cf7dbcedf1c381caed6ccb5492d838f64a213410a9a6e92e055b3ab->enter($__internal_dc7387dc7cf7dbcedf1c381caed6ccb5492d838f64a213410a9a6e92e055b3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1e638935144264de74c1fb7b080c1ada74cc3bcd7b08a3aeba763f92444a28d8->leave($__internal_1e638935144264de74c1fb7b080c1ada74cc3bcd7b08a3aeba763f92444a28d8_prof);

        
        $__internal_dc7387dc7cf7dbcedf1c381caed6ccb5492d838f64a213410a9a6e92e055b3ab->leave($__internal_dc7387dc7cf7dbcedf1c381caed6ccb5492d838f64a213410a9a6e92e055b3ab_prof);

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
