<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_210f872a87acc525e48993c152f4d7ca964ba5babf9bd69e38f946148e440e5a extends Twig_Template
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
        $__internal_90a1f84a809141fdd371e5b6ececa7143a47e118d4a8d737f6ab9c712104c1c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a1f84a809141fdd371e5b6ececa7143a47e118d4a8d737f6ab9c712104c1c6->enter($__internal_90a1f84a809141fdd371e5b6ececa7143a47e118d4a8d737f6ab9c712104c1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2283d934b1253868a67b0b39305d7fe234b4b46a6cbd175e65c67cf1e477d34f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2283d934b1253868a67b0b39305d7fe234b4b46a6cbd175e65c67cf1e477d34f->enter($__internal_2283d934b1253868a67b0b39305d7fe234b4b46a6cbd175e65c67cf1e477d34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_90a1f84a809141fdd371e5b6ececa7143a47e118d4a8d737f6ab9c712104c1c6->leave($__internal_90a1f84a809141fdd371e5b6ececa7143a47e118d4a8d737f6ab9c712104c1c6_prof);

        
        $__internal_2283d934b1253868a67b0b39305d7fe234b4b46a6cbd175e65c67cf1e477d34f->leave($__internal_2283d934b1253868a67b0b39305d7fe234b4b46a6cbd175e65c67cf1e477d34f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
