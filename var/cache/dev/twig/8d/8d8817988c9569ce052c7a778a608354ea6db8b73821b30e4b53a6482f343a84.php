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
        $__internal_429a4e019f1f1eea302ff54039fbc709588a1ac161a60ed4fd9acdaa12d28256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429a4e019f1f1eea302ff54039fbc709588a1ac161a60ed4fd9acdaa12d28256->enter($__internal_429a4e019f1f1eea302ff54039fbc709588a1ac161a60ed4fd9acdaa12d28256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0fdab235f020f996a6615893e1cdb6646266ac7683983a685a0e1d4f865f03ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdab235f020f996a6615893e1cdb6646266ac7683983a685a0e1d4f865f03ff->enter($__internal_0fdab235f020f996a6615893e1cdb6646266ac7683983a685a0e1d4f865f03ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_429a4e019f1f1eea302ff54039fbc709588a1ac161a60ed4fd9acdaa12d28256->leave($__internal_429a4e019f1f1eea302ff54039fbc709588a1ac161a60ed4fd9acdaa12d28256_prof);

        
        $__internal_0fdab235f020f996a6615893e1cdb6646266ac7683983a685a0e1d4f865f03ff->leave($__internal_0fdab235f020f996a6615893e1cdb6646266ac7683983a685a0e1d4f865f03ff_prof);

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
