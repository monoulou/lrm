<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b69d3aac1e177c390d60dbcd842202ea954b1b0a96cb1292a0ec114cd10046ed extends Twig_Template
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
        $__internal_ac7efcfda222b837d83d44bfe8fc2aa1e006dc1cd02c71749fd0e271035b84c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7efcfda222b837d83d44bfe8fc2aa1e006dc1cd02c71749fd0e271035b84c9->enter($__internal_ac7efcfda222b837d83d44bfe8fc2aa1e006dc1cd02c71749fd0e271035b84c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4a795ee4764c080dc5dbf2c634d16b55128eaa6cc2cd976ef6f33276a74e031f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a795ee4764c080dc5dbf2c634d16b55128eaa6cc2cd976ef6f33276a74e031f->enter($__internal_4a795ee4764c080dc5dbf2c634d16b55128eaa6cc2cd976ef6f33276a74e031f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ac7efcfda222b837d83d44bfe8fc2aa1e006dc1cd02c71749fd0e271035b84c9->leave($__internal_ac7efcfda222b837d83d44bfe8fc2aa1e006dc1cd02c71749fd0e271035b84c9_prof);

        
        $__internal_4a795ee4764c080dc5dbf2c634d16b55128eaa6cc2cd976ef6f33276a74e031f->leave($__internal_4a795ee4764c080dc5dbf2c634d16b55128eaa6cc2cd976ef6f33276a74e031f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
