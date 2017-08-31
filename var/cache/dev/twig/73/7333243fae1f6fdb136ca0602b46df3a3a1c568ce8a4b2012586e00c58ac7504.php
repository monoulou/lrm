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
        $__internal_9898a747048308deb3e194bf9fd17672a570e1000781a18c315d41557cbb2e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9898a747048308deb3e194bf9fd17672a570e1000781a18c315d41557cbb2e1f->enter($__internal_9898a747048308deb3e194bf9fd17672a570e1000781a18c315d41557cbb2e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_bb052dcba351757338f1cfa5ca20d9a93fc9d9a956ecfb6b23bdbbd2e33f50bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb052dcba351757338f1cfa5ca20d9a93fc9d9a956ecfb6b23bdbbd2e33f50bb->enter($__internal_bb052dcba351757338f1cfa5ca20d9a93fc9d9a956ecfb6b23bdbbd2e33f50bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9898a747048308deb3e194bf9fd17672a570e1000781a18c315d41557cbb2e1f->leave($__internal_9898a747048308deb3e194bf9fd17672a570e1000781a18c315d41557cbb2e1f_prof);

        
        $__internal_bb052dcba351757338f1cfa5ca20d9a93fc9d9a956ecfb6b23bdbbd2e33f50bb->leave($__internal_bb052dcba351757338f1cfa5ca20d9a93fc9d9a956ecfb6b23bdbbd2e33f50bb_prof);

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
