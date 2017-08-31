<?php

/* @MAUser/Resetting/request.html.twig */
class __TwigTemplate_a24fefbeee48f094e41733b0012b51fa36da7425dc1b4fef153fa5e572744011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05420aae797e8a3e1a63b8cb62e04ebd976c0d4c12a29ac8f6b12f8858fffc4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05420aae797e8a3e1a63b8cb62e04ebd976c0d4c12a29ac8f6b12f8858fffc4a->enter($__internal_05420aae797e8a3e1a63b8cb62e04ebd976c0d4c12a29ac8f6b12f8858fffc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/request.html.twig"));

        $__internal_7ed99feb0c3d11b5d6d472e5cc1820e6e8a52ddc8a9e6aa2cb798b3487b4c623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed99feb0c3d11b5d6d472e5cc1820e6e8a52ddc8a9e6aa2cb798b3487b4c623->enter($__internal_7ed99feb0c3d11b5d6d472e5cc1820e6e8a52ddc8a9e6aa2cb798b3487b4c623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05420aae797e8a3e1a63b8cb62e04ebd976c0d4c12a29ac8f6b12f8858fffc4a->leave($__internal_05420aae797e8a3e1a63b8cb62e04ebd976c0d4c12a29ac8f6b12f8858fffc4a_prof);

        
        $__internal_7ed99feb0c3d11b5d6d472e5cc1820e6e8a52ddc8a9e6aa2cb798b3487b4c623->leave($__internal_7ed99feb0c3d11b5d6d472e5cc1820e6e8a52ddc8a9e6aa2cb798b3487b4c623_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6ad98af75f15d89205235b29e72f1fccc2a0a5cabcd3a7e66e0424523a3fe07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ad98af75f15d89205235b29e72f1fccc2a0a5cabcd3a7e66e0424523a3fe07->enter($__internal_b6ad98af75f15d89205235b29e72f1fccc2a0a5cabcd3a7e66e0424523a3fe07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_344eef3e5ec971d8cc54a920a2ab253e51e54ed998a74226cb9a2b18fa529775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344eef3e5ec971d8cc54a920a2ab253e51e54ed998a74226cb9a2b18fa529775->enter($__internal_344eef3e5ec971d8cc54a920a2ab253e51e54ed998a74226cb9a2b18fa529775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@MAUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_344eef3e5ec971d8cc54a920a2ab253e51e54ed998a74226cb9a2b18fa529775->leave($__internal_344eef3e5ec971d8cc54a920a2ab253e51e54ed998a74226cb9a2b18fa529775_prof);

        
        $__internal_b6ad98af75f15d89205235b29e72f1fccc2a0a5cabcd3a7e66e0424523a3fe07->leave($__internal_b6ad98af75f15d89205235b29e72f1fccc2a0a5cabcd3a7e66e0424523a3fe07_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}", "@MAUser/Resetting/request.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
