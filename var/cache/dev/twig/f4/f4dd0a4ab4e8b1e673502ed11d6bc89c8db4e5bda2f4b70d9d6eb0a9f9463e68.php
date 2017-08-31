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
        $__internal_18dc974738e11ba42ee90c3d969c1b0a2a0476657f0400bc5b2b906ef6b8c0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18dc974738e11ba42ee90c3d969c1b0a2a0476657f0400bc5b2b906ef6b8c0d2->enter($__internal_18dc974738e11ba42ee90c3d969c1b0a2a0476657f0400bc5b2b906ef6b8c0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a42556058c94e41f05b225d7804bda6c90ab00d42b2e41051448626f652d2415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42556058c94e41f05b225d7804bda6c90ab00d42b2e41051448626f652d2415->enter($__internal_a42556058c94e41f05b225d7804bda6c90ab00d42b2e41051448626f652d2415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_18dc974738e11ba42ee90c3d969c1b0a2a0476657f0400bc5b2b906ef6b8c0d2->leave($__internal_18dc974738e11ba42ee90c3d969c1b0a2a0476657f0400bc5b2b906ef6b8c0d2_prof);

        
        $__internal_a42556058c94e41f05b225d7804bda6c90ab00d42b2e41051448626f652d2415->leave($__internal_a42556058c94e41f05b225d7804bda6c90ab00d42b2e41051448626f652d2415_prof);

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
