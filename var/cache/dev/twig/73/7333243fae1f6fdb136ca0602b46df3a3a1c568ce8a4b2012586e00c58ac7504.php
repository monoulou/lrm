<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_31866a3d0dfeb4588816ef254297c4ec55b5292fe66e01cf32e2809c5a05e3f3 extends Twig_Template
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
        $__internal_8cc7684a63c4bf57d5b065dfa202797a9b700b2e78e32d0e8e0cbd922b889495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc7684a63c4bf57d5b065dfa202797a9b700b2e78e32d0e8e0cbd922b889495->enter($__internal_8cc7684a63c4bf57d5b065dfa202797a9b700b2e78e32d0e8e0cbd922b889495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_eb00e030c9080bec1abb3c944474905df0f5317ab62f501dd4c8e1f627f664c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb00e030c9080bec1abb3c944474905df0f5317ab62f501dd4c8e1f627f664c4->enter($__internal_eb00e030c9080bec1abb3c944474905df0f5317ab62f501dd4c8e1f627f664c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8cc7684a63c4bf57d5b065dfa202797a9b700b2e78e32d0e8e0cbd922b889495->leave($__internal_8cc7684a63c4bf57d5b065dfa202797a9b700b2e78e32d0e8e0cbd922b889495_prof);

        
        $__internal_eb00e030c9080bec1abb3c944474905df0f5317ab62f501dd4c8e1f627f664c4->leave($__internal_eb00e030c9080bec1abb3c944474905df0f5317ab62f501dd4c8e1f627f664c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
