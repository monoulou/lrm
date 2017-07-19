<?php

/* MAUserBundle:Resetting:request.html.twig */
class __TwigTemplate_37ee299556defd635d199ad42b15bfb76b454a93a4119058f233f0828da2ae93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_5ee78753f2c2c60f84a19dd251f53a46a01714ceae1d135fb180631710615be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee78753f2c2c60f84a19dd251f53a46a01714ceae1d135fb180631710615be7->enter($__internal_5ee78753f2c2c60f84a19dd251f53a46a01714ceae1d135fb180631710615be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:request.html.twig"));

        $__internal_a621b0d20fc0656b7af0de631a5316fffc71ee8769baaf8942fe5165f6603b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a621b0d20fc0656b7af0de631a5316fffc71ee8769baaf8942fe5165f6603b47->enter($__internal_a621b0d20fc0656b7af0de631a5316fffc71ee8769baaf8942fe5165f6603b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ee78753f2c2c60f84a19dd251f53a46a01714ceae1d135fb180631710615be7->leave($__internal_5ee78753f2c2c60f84a19dd251f53a46a01714ceae1d135fb180631710615be7_prof);

        
        $__internal_a621b0d20fc0656b7af0de631a5316fffc71ee8769baaf8942fe5165f6603b47->leave($__internal_a621b0d20fc0656b7af0de631a5316fffc71ee8769baaf8942fe5165f6603b47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8956ceb81db3bdb1322b5cecce7109defd49489dc2b8527b369f76ae630d3c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8956ceb81db3bdb1322b5cecce7109defd49489dc2b8527b369f76ae630d3c7e->enter($__internal_8956ceb81db3bdb1322b5cecce7109defd49489dc2b8527b369f76ae630d3c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1cca8ceb7ddda0bec4ff1d331b234b8078036a0dc2d7bfcaead9b63b14453168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cca8ceb7ddda0bec4ff1d331b234b8078036a0dc2d7bfcaead9b63b14453168->enter($__internal_1cca8ceb7ddda0bec4ff1d331b234b8078036a0dc2d7bfcaead9b63b14453168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "MAUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1cca8ceb7ddda0bec4ff1d331b234b8078036a0dc2d7bfcaead9b63b14453168->leave($__internal_1cca8ceb7ddda0bec4ff1d331b234b8078036a0dc2d7bfcaead9b63b14453168_prof);

        
        $__internal_8956ceb81db3bdb1322b5cecce7109defd49489dc2b8527b369f76ae630d3c7e->leave($__internal_8956ceb81db3bdb1322b5cecce7109defd49489dc2b8527b369f76ae630d3c7e_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Resetting:request.html.twig";
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
{% endblock fos_user_content %}", "MAUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
