<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3ca376d1197d714d31aefcb300f1528965db9f4479ef0f2a8573150e069fb91f extends Twig_Template
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
        $__internal_259f4fcf75997a8a38d5a2a61d91ea18013265b987cd2feb067e85dd46fbea75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259f4fcf75997a8a38d5a2a61d91ea18013265b987cd2feb067e85dd46fbea75->enter($__internal_259f4fcf75997a8a38d5a2a61d91ea18013265b987cd2feb067e85dd46fbea75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_524815c0b0422dc11bc183697cd95352040b4a74edf977024369314cfd356f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524815c0b0422dc11bc183697cd95352040b4a74edf977024369314cfd356f53->enter($__internal_524815c0b0422dc11bc183697cd95352040b4a74edf977024369314cfd356f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_259f4fcf75997a8a38d5a2a61d91ea18013265b987cd2feb067e85dd46fbea75->leave($__internal_259f4fcf75997a8a38d5a2a61d91ea18013265b987cd2feb067e85dd46fbea75_prof);

        
        $__internal_524815c0b0422dc11bc183697cd95352040b4a74edf977024369314cfd356f53->leave($__internal_524815c0b0422dc11bc183697cd95352040b4a74edf977024369314cfd356f53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
