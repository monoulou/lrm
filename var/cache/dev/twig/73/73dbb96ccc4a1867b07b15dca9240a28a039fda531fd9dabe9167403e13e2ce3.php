<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_5bb57f2b6bba5d757075591ceba26746875ef5b6887ceecece2caee8a268f67d extends Twig_Template
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
        $__internal_35b7513f56fa4e732bafa3d5cc50eca1ee6d9c1e9206cc0fe97a19b276b25112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b7513f56fa4e732bafa3d5cc50eca1ee6d9c1e9206cc0fe97a19b276b25112->enter($__internal_35b7513f56fa4e732bafa3d5cc50eca1ee6d9c1e9206cc0fe97a19b276b25112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fc629e6db0c3842dd08a1e5132ac2c081872bb77ed822c6949f900909d5f65a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc629e6db0c3842dd08a1e5132ac2c081872bb77ed822c6949f900909d5f65a1->enter($__internal_fc629e6db0c3842dd08a1e5132ac2c081872bb77ed822c6949f900909d5f65a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_35b7513f56fa4e732bafa3d5cc50eca1ee6d9c1e9206cc0fe97a19b276b25112->leave($__internal_35b7513f56fa4e732bafa3d5cc50eca1ee6d9c1e9206cc0fe97a19b276b25112_prof);

        
        $__internal_fc629e6db0c3842dd08a1e5132ac2c081872bb77ed822c6949f900909d5f65a1->leave($__internal_fc629e6db0c3842dd08a1e5132ac2c081872bb77ed822c6949f900909d5f65a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
