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
        $__internal_30e81a11e81c7503942155a3e9bb87edf133f1a50c30a2f38cc48c5975f09cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e81a11e81c7503942155a3e9bb87edf133f1a50c30a2f38cc48c5975f09cd5->enter($__internal_30e81a11e81c7503942155a3e9bb87edf133f1a50c30a2f38cc48c5975f09cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3c3d38862294e7516433b4889695a9dd1e82f29d0fe8c3d204cf78e3ab3e5276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3d38862294e7516433b4889695a9dd1e82f29d0fe8c3d204cf78e3ab3e5276->enter($__internal_3c3d38862294e7516433b4889695a9dd1e82f29d0fe8c3d204cf78e3ab3e5276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_30e81a11e81c7503942155a3e9bb87edf133f1a50c30a2f38cc48c5975f09cd5->leave($__internal_30e81a11e81c7503942155a3e9bb87edf133f1a50c30a2f38cc48c5975f09cd5_prof);

        
        $__internal_3c3d38862294e7516433b4889695a9dd1e82f29d0fe8c3d204cf78e3ab3e5276->leave($__internal_3c3d38862294e7516433b4889695a9dd1e82f29d0fe8c3d204cf78e3ab3e5276_prof);

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
