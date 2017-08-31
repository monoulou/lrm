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
        $__internal_768ecde83497d81c8b7077160642702bbc028f6074b8751af9668c0cfd2beb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768ecde83497d81c8b7077160642702bbc028f6074b8751af9668c0cfd2beb4f->enter($__internal_768ecde83497d81c8b7077160642702bbc028f6074b8751af9668c0cfd2beb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_74549ec8e63203992755b65b8522849bf5bdce58db5a304c36b98371640d07ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74549ec8e63203992755b65b8522849bf5bdce58db5a304c36b98371640d07ff->enter($__internal_74549ec8e63203992755b65b8522849bf5bdce58db5a304c36b98371640d07ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_768ecde83497d81c8b7077160642702bbc028f6074b8751af9668c0cfd2beb4f->leave($__internal_768ecde83497d81c8b7077160642702bbc028f6074b8751af9668c0cfd2beb4f_prof);

        
        $__internal_74549ec8e63203992755b65b8522849bf5bdce58db5a304c36b98371640d07ff->leave($__internal_74549ec8e63203992755b65b8522849bf5bdce58db5a304c36b98371640d07ff_prof);

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
