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
        $__internal_e7863fcad071105d56551ca453a850fa931d3a8a37c64441a8ff263738d2e950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7863fcad071105d56551ca453a850fa931d3a8a37c64441a8ff263738d2e950->enter($__internal_e7863fcad071105d56551ca453a850fa931d3a8a37c64441a8ff263738d2e950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f28a070977f5b64f1cd94b62c9678a35a330eae192bccef6a5fc371fab084709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28a070977f5b64f1cd94b62c9678a35a330eae192bccef6a5fc371fab084709->enter($__internal_f28a070977f5b64f1cd94b62c9678a35a330eae192bccef6a5fc371fab084709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e7863fcad071105d56551ca453a850fa931d3a8a37c64441a8ff263738d2e950->leave($__internal_e7863fcad071105d56551ca453a850fa931d3a8a37c64441a8ff263738d2e950_prof);

        
        $__internal_f28a070977f5b64f1cd94b62c9678a35a330eae192bccef6a5fc371fab084709->leave($__internal_f28a070977f5b64f1cd94b62c9678a35a330eae192bccef6a5fc371fab084709_prof);

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
