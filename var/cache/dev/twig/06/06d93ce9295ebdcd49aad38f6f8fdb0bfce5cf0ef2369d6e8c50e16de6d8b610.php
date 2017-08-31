<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9c5ea9cf690216684e971f9b03c7ae9627d135b42bde8bbf80ec10e014b4e155 extends Twig_Template
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
        $__internal_c64612808676acca9d52c1acc5193bd3d6af15333984376ae5758090caa6b399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c64612808676acca9d52c1acc5193bd3d6af15333984376ae5758090caa6b399->enter($__internal_c64612808676acca9d52c1acc5193bd3d6af15333984376ae5758090caa6b399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_efaa6b8b17045d4b1fa888cda1fc69f9ac6aac5b7257818593ef0a8bc537b434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaa6b8b17045d4b1fa888cda1fc69f9ac6aac5b7257818593ef0a8bc537b434->enter($__internal_efaa6b8b17045d4b1fa888cda1fc69f9ac6aac5b7257818593ef0a8bc537b434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c64612808676acca9d52c1acc5193bd3d6af15333984376ae5758090caa6b399->leave($__internal_c64612808676acca9d52c1acc5193bd3d6af15333984376ae5758090caa6b399_prof);

        
        $__internal_efaa6b8b17045d4b1fa888cda1fc69f9ac6aac5b7257818593ef0a8bc537b434->leave($__internal_efaa6b8b17045d4b1fa888cda1fc69f9ac6aac5b7257818593ef0a8bc537b434_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
