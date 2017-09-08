<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_21546c9e5c52d93a4d6a73de7f066c02553282fe97d2f628f9d8deb5b1e1d7e6 extends Twig_Template
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
        $__internal_0ff07855b6e6c6636c4b807b1054b7c5bb74c406170b947c524fd4aba49b7615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff07855b6e6c6636c4b807b1054b7c5bb74c406170b947c524fd4aba49b7615->enter($__internal_0ff07855b6e6c6636c4b807b1054b7c5bb74c406170b947c524fd4aba49b7615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4462939833d4c832e26da2472f7fe29f395f717feb4eb6ca21357f6c29f78da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4462939833d4c832e26da2472f7fe29f395f717feb4eb6ca21357f6c29f78da1->enter($__internal_4462939833d4c832e26da2472f7fe29f395f717feb4eb6ca21357f6c29f78da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0ff07855b6e6c6636c4b807b1054b7c5bb74c406170b947c524fd4aba49b7615->leave($__internal_0ff07855b6e6c6636c4b807b1054b7c5bb74c406170b947c524fd4aba49b7615_prof);

        
        $__internal_4462939833d4c832e26da2472f7fe29f395f717feb4eb6ca21357f6c29f78da1->leave($__internal_4462939833d4c832e26da2472f7fe29f395f717feb4eb6ca21357f6c29f78da1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
